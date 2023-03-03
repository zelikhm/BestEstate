<?php

namespace App\Http\Controllers\Admin\Jk;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use AdminNavigation;
use AdminSection;
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
        $page = AdminNavigation::getPages()->findById('houses');

        $page->addPage(
            $this->makePage(600)->setIcon('fas fa-user-lock')
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
                AdminFormElement::select('support_id', 'Поддержка')
                    ->setModelForOptions(SupportModel::class)
                    ->setDisplay('name'),
                AdminFormElement::text('title', 'Название')->required(),
                AdminFormElement::wysiwyg('description', 'Описание квартиры')->required(),
                AdminFormElement::text('slug', 'название в ссылку (only eng)')->required(),
            ]);

            $tabs[] = AdminDisplay::tab($form)->setLabel("Основная информация")
                ->setIcon('<i class="fa fa-money"></i>');

            if(!is_null($id)){

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
                            AdminFormElement::select('type', 'Тип постройки', [
                                0 => 'Вторичная',
                                1 => 'Новостройка',
                                2 => 'Пентхаус',
                            ]),


                        ], 6)->addColumn([

                            AdminFormElement::number('float', 'Этаж'),
                            AdminFormElement::number('height', 'Потолки')->setStep(0.01),
                            AdminFormElement::number('bathroom', 'Санузлов'),
                            AdminFormElement::number('balcon', 'Балконов'),
                            AdminFormElement::number('view', 'Кол-во просмотров'),
                            AdminFormElement::select('repair', 'Тип ремнота', [
                                0 => 'Без ремнота',
                                1 => 'С ремонтом',
                                2 => 'Дизайнерский',
                            ]),
                        ]),
                ]);

                $tabs[] = AdminDisplay::tab($form2)
                    ->setLabel("Дополнительная информация")
                    ->setIcon('<i class="fa fa-credit-card"></i>');
//
//                $form3 = AdminForm::form();
//
//                $model = JkModel::where('id', $id)->first();
//
//                if($id !== null && $model->city !== null) {
//                    $form3->setElements([
//                        AdminFormElement::select('city', 'Город')->setModelForOptions(CityModel::class)->setDisplay('city_name'),
//                        AdminFormElement::select('area', 'Район')->setOptions($this->getArea($model->city))->setDisplay('area_name'),
//                        AdminFormElement::number('longitude', 'Долгота')->setStep(0.000001),
//                        AdminFormElement::number('latitude', 'Широта')->setStep(0.000001),
//
//                    ]);
//                } else {
//                    $form3->setElements([
//                        AdminFormElement::select('city', 'Город')->setModelForOptions(CityModel::class)->setDisplay('city_name'),
//                        AdminFormElement::number('longitude', 'Долгота')->setStep(0.000001),
//                        AdminFormElement::number('latitude', 'Широта')->setStep(0.000001),
//
//                    ]);
//                }
//
//                $tabs[] = AdminDisplay::tab($form3)
//                    ->setLabel("Город и район")
//                    ->setIcon('<i class="fa fa-credit-card"></i>');
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

    private function getArea($id) {
        $areas = AreaModel::where('city_id', $id)->get();

        $array = $areas->map(function ($item) {
            return [
                'id' => $item->id,
                'value' => $item->area_name,
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

