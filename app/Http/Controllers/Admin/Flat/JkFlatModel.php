<?php

namespace App\Http\Controllers\Admin\Flat;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use AdminNavigation;
use AdminSection;
use App\Models\Info\BalconyModel;
use App\Models\Info\BathroomModel;
use App\Models\Info\InfrastructureModel;
use App\Models\Info\PlotModel;
use App\Models\Info\RepairModel;
use App\Models\Info\TypeComModel;
use App\Models\Info\TypeHouseModel;
use App\Models\Jk\JkModel;
use App\Models\Jk\SupportModel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Form\Buttons\Cancel;
use SleepingOwl\Admin\Form\Buttons\Save;
use SleepingOwl\Admin\Form\Buttons\SaveAndClose;
use SleepingOwl\Admin\Form\Buttons\Delete;
use SleepingOwl\Admin\Form\FormElements;
use SleepingOwl\Admin\Section;

/**
 * Class Administrators
 *
 * // * @property \App\Models\JkFlatModel $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class JkFlatModel extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Квартира';

    /**
     * @var string
     */
    protected $alias;

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $page = AdminNavigation::getPages()->findById('flats');

        $page->addPage(
            $this->makePage(100)->setIcon('fas fa-user-lock')
        );
    }

    /**
     *
     * @return DisplayInterface
     */
    public function onDisplay()
    {

        $columns = [
            AdminColumn::text('id', '#')
                ->setWidth('50px')
                ->setHtmlAttribute('class', 'text-center'),
            AdminColumn::relatedLink('jk.title', 'ЖК')->setWidth('350px'),
            AdminColumn::relatedLink('support.name', 'Название саппорта')->setWidth('350px'),
            AdminColumn::text('title', 'Название')->setWidth('350px'),
            AdminColumn::text('plan', 'Планировка')->setWidth('350px'),
            AdminColumn::text('square_main', 'Общая площадь')->setWidth('350px'),
            AdminColumn::text('square_life', 'Жиллая площадь')->setWidth('350px'),
        ];

        $display = AdminDisplay::datatablesAsync()
            ->paginate(40)
            ->setColumns($columns)
//            ->setDisplaySearch(true, 'поиск')
            ->setHtmlAttribute('class', 'table-primary table-hover');

        $display->setApply(function (Builder $query) {
            $query->OrderBy('id', 'asc');
        })->setNewEntryButtonText('Добавить квартиру');

        return $display;
    }

    /**
     * @param int|null $id
     * @param array $payload
     * @return FormInterface
     */
    public function onEdit($id = null, array $payload = [])
    {

        $display = AdminDisplay::tabbed();
        $display->setTabs(function () use ($id) {
            $tabs = [];

            $form = AdminForm::form();
            $form->setElements([
                AdminFormElement::select('jk_id', 'ЖК')
                    ->setModelForOptions(JkModel::class)
                    ->setDisplay('title'),
                AdminFormElement::select('type_flat', 'Постройка')->setOptions([
                    1 => 'Квартира',
                    2 => 'Вилла',
                    3 => 'Шалле',
                    4 => 'Коммерческая'
                ]),
                AdminFormElement::number('price', 'Цена')->required(),
                AdminFormElement::select('support_id', 'Поддержка')
                    ->setModelForOptions(SupportModel::class)
                    ->setDisplay('name'),
                AdminFormElement::text('title', 'Название')->required(),
                AdminFormElement::select('rooms', 'Кол-во комнат')->setOptions([
                    1 => '1',
                    2 => '2',
                    3 => '3',
                    4 => '4+'
                ])->required(),
                AdminFormElement::wysiwyg('description', 'Описание квартиры')->required(),
                AdminFormElement::text('slug', 'название в ссылку (only eng)')->required(),
            ]);

            $tabs[] = AdminDisplay::tab($form)->setLabel("Основная информация")
                ->setIcon('<i class="fa fa-money"></i>');

            if (!is_null($id)) {

                $model = \App\Models\JkFlatModel::where('id', $id)->first();

                $form2 = AdminForm::form();

                $form2->setElements([
                    AdminFormElement::columns()
                        ->addColumn([

                            AdminFormElement::number('square_main', 'Общая площадь')->setStep(0.01),
                            AdminFormElement::number('square_life', 'Жилая площадь')->setStep(0.01),
                            AdminFormElement::number('square_kitchen', 'Кухня')->setStep(0.01),
                            AdminFormElement::date('date_building', 'Год постройки')
                                ->setPickerFormat('Y')
                                ->setFormat('Y-m-d'),


                        ], 6)->addColumn([

                            AdminFormElement::number('float', 'Этаж'),
                            AdminFormElement::number('height', 'Потолки')->setStep(0.01),
                            AdminFormElement::number('view', 'Кол-во просмотров'),

                        ]),
                ]);

                $tabs[] = AdminDisplay::tab($form2)
                    ->setLabel("Дополнительная информация")
                    ->setIcon('<i class="fa fa-credit-card"></i>');

                $form3 = AdminForm::form();

                $form3->setElements([

                    AdminFormElement::belongsTo('price_object', [
                        AdminFormElement::hidden('flat_id')->setDefaultValue($id),
                        AdminFormElement::checkbox('sale', 'Продажа'),
                        AdminFormElement::checkbox('rent', 'Аренда'),
                        AdminFormElement::checkbox('days', 'Сутки'),
                        AdminFormElement::number('price', 'Цена'),
                        AdminFormElement::number('rent_price', 'Цена аренды (мес)')->setStep(0.01),
                        AdminFormElement::number('day_price', 'Цена аренды (сутки)')->setStep(0.01),
                    ]),

                ]);


                $tabs[] = AdminDisplay::tab($form3)
                    ->setLabel("Цены, аренда, продажа")
                    ->setIcon('<i class="fa fa-credit-card"></i>');

                $form4 = AdminForm::form();

                if ($model->type_flat === 1) {
                    $form4->setElements([
                        AdminFormElement::columns()
                            ->addColumn([
                                AdminFormElement::select('type', 'Тип постройки', [
                                    0 => 'Вторичная',
                                    1 => 'Новостройка',
                                    2 => 'Пентхаус',
                                ]),
                                AdminFormElement::select('bathroom', 'Санузел')->setModelForOptions(BathroomModel::class)->setDisplay('title'),
                            ], 6)->addColumn([
                                AdminFormElement::select('balcon', 'Балкон')->setModelForOptions(BalconyModel::class)->setDisplay('title'),
                                AdminFormElement::select('repair', 'Тип ремнота')->setModelForOptions(RepairModel::class)->setDisplay('title'),
                            ]),
                    ]);
                } else if ($model->type_flat === 2 || $model->type_flat === 3) {
                    $form4->setElements([
                        AdminFormElement::columns()
                            ->addColumn([
                                AdminFormElement::select('type_house', 'Тип здания')->setOptions($this->getTypeHouse(1))->setDisplay('title'),
                                AdminFormElement::select('plot_type', 'Участок')->setModelForOptions(PlotModel::class)->setDisplay('title'),
                            ], 6)->addColumn([
                                AdminFormElement::multiselect('infrastructure', 'Инфраструктура')->setOptions($this->getInfra())->setDisplay('title'),
                                AdminFormElement::select('repair', 'Тип ремнота')->setModelForOptions(RepairModel::class)->setDisplay('title'),
                            ]),
                    ]);
                } else if ($model->type_flat === 4) {
                    $form4->setElements([
                        AdminFormElement::columns()
                            ->addColumn([
                                AdminFormElement::select('type_house', 'Тип здания')->setOptions($this->getTypeHouse(0))->setDisplay('title'),
                            ], 6)->addColumn([
                                AdminFormElement::select('plot_type', 'Тип недвижимости')->setModelForOptions(TypeComModel::class)->setDisplay('title'),
                            ]),
                    ]);
                }

                $tabs[] = AdminDisplay::tab($form4)
                    ->setLabel("Характеристики")
                    ->setIcon('<i class="fa fa-credit-card"></i>');

            }
            return $tabs;


        });
        return $display;
    }

    /**
     * get area
     * @param $id
     * @return mixed
     */

    private function getArea($id)
    {
        $areas = AreaModel::where('city_id', $id)->get();

        $array = $areas->map(function ($item) {
            return [
                'id' => $item->id,
                'value' => $item->area_name,
            ];
        })->pluck('value', 'id')->toArray();

        return $array;
    }

    private function getTypeHouse($type) {

        $type = TypeHouseModel::where('type', $type)->get();

        $array = $type->map(function ($item) {
            return [
                'id' => $item->id,
                'value' => $item->title,
            ];
        })->pluck('value', 'id')->toArray();

        return $array;
    }

    private function getInfra() {

        $inf = InfrastructureModel::all();

        $array = $inf->map(function ($item) {
            return [
                'id' => $item->id,
                'value' => $item->title,
            ];
        })->pluck('value', 'id')->toArray();

        return $array;
    }

    /**
     * @param array $payload
     * @return FormInterface
     * @throws \Exception
     */
    public function onCreate(array $payload = [])
    {
        return $this->onEdit(null, $payload);
    }

    /**
     * @param Model $model
     * @return bool
     */
    public function isEditable(Model $model): bool
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isCreatable(): bool
    {
        return true;
    }

    /**
     * @param Model $model
     * @return bool
     */
    public function isDeletable(Model $model): bool
    {
        return true;
    }

    /**
     * @return void
     */
    public function onRestore(int $id)
    {
        // remove if unused
    }
}

