<?php

namespace App\Http\Controllers\Admin\Jk;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use AdminNavigation;
use AdminSection;
use App\Models\Builder\Flat\FlatModel;
use App\Models\Builder\Flat\FrameModel;
use App\Models\Builder\HouseModel;
use App\Models\Info\AreaModel;
use App\Models\Info\CityModel;
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
 * // * @property \App\Models\Jk\JkModel $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class Jk extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Жилой комплекс';

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
            AdminColumn::text('title', 'Название реквизита')->setWidth('350px'),
            AdminColumn::relatedLink('support.name', 'Название саппорта')->setWidth('350px'),
            AdminColumn::relatedLink('builder.name', 'Название зайстройщика')->setWidth('350px'),
            AdminColumn::text('city', 'Город')->setWidth('350px'),
            AdminColumn::text('status', 'Статус')->setWidth('350px'),
            AdminColumn::text('class', 'Класс')->setWidth('350px'),
        ];

        $display = AdminDisplay::datatablesAsync()
            ->paginate(40)
            ->setColumns($columns)
//            ->setDisplaySearch(true, 'поиск')
            ->setHtmlAttribute('class', 'table-primary table-hover');

        $display->setApply(function (Builder $query) {
            $query->OrderBy('id', 'asc');
        })->setNewEntryButtonText('Добавить ЖК');

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
                AdminFormElement::select('type_houses', 'Тип здания')->setOptions([
                    0 => 'Новостройка',
                    1 => 'Коттеджный поселок',
                ])->required(),
                AdminFormElement::number('price', 'Цена')->required(),
                AdminFormElement::number('square', 'Площадь')->setStep(0.01)->required(),
                AdminFormElement::text('title', 'Название')->required(),
                AdminFormElement::textarea('description', 'Описание')->required(),
                AdminFormElement::text('slug', 'название в ссылку (only eng)')->required(),
                AdminFormElement::date('sale_date', 'Окончание акции'),
                AdminFormElement::date('builder_year', 'Дата постройки'),
            ]);

            $tabs[] = AdminDisplay::tab($form)->setLabel("Основная информация")
                ->setIcon('<i class="fa fa-money"></i>');

            if(!is_null($id)){

                $form1 = AdminForm::form();

                $form1->setElements([
                    AdminFormElement::select('builder_id', 'Застройщик')
                        ->setModelForOptions(\App\Models\BuilderModel::class)
                        ->setDisplay('name'),

                    AdminFormElement::select('support_id', 'Поддержка')
                        ->setModelForOptions(SupportModel::class)
                        ->setDisplay('name'),
                ]);

                $tabs[] = AdminDisplay::tab($form1)
                    ->setLabel("Контакты")
                    ->setIcon('<i class="fa fa-credit-card"></i>');

                $form2 = AdminForm::form();

                $form2->setElements([
                    AdminFormElement::columns()
                        ->addColumn([
                            AdminFormElement::select('status', 'Статус', [
                                0 => 'Сдан',
                                1 => 'Не сдан',
                            ]),

                            AdminFormElement::number('floors', 'Кол-во этажей'),
                            AdminFormElement::number('frames', 'Кол-во корпусов'),
                            AdminFormElement::number('height', 'Высота потолков')->setStep(0.01),

                        ], 6)->addColumn([

                            AdminFormElement::select('class', 'Класс', [
                                0 => 'Эконом',
                                1 => 'Комфорт',
                                2 => 'Элитный',

                            ]),

                            AdminFormElement::select('variable', 'Вариация отделки', [
                                0 => 'Без ремонта',
                                1 => 'С ремонтом',
                            ]),

                            AdminFormElement::select('parking', 'Парковка', [
                                0 => 'Нет парковки',
                                1 => 'Наземная',
                                2 => 'Подземная',
                            ]),

                            AdminFormElement::select('type', 'Тип дома', [
                                0 => 'Монолитно-кирпичный',
                                1 => 'Блочный',
                            ]),
                        ]),
                    AdminFormElement::wysiwyg('description_page', 'Описание для страницы'),
                ]);

                $tabs[] = AdminDisplay::tab($form2)
                    ->setLabel("Дополнительная информация")
                    ->setIcon('<i class="fa fa-credit-card"></i>');

                $form3 = AdminForm::form();

                $model = JkModel::where('id', $id)->first();

                if($id !== null && $model->city !== null) {
                    $form3->setElements([
                        AdminFormElement::select('city', 'Город')->setModelForOptions(CityModel::class)->setDisplay('city_name'),
                        AdminFormElement::select('area', 'Район')->setOptions($this->getArea($model->city))->setDisplay('area_name'),
                        AdminFormElement::number('longitude', 'Долгота')->setStep(0.000001),
                        AdminFormElement::number('latitude', 'Широта')->setStep(0.000001),

                    ]);
                } else {
                    $form3->setElements([
                        AdminFormElement::select('city', 'Город')->setModelForOptions(CityModel::class)->setDisplay('city_name'),
                        AdminFormElement::number('longitude', 'Долгота')->setStep(0.000001),
                        AdminFormElement::number('latitude', 'Широта')->setStep(0.000001),

                    ]);
                }

                $tabs[] = AdminDisplay::tab($form3)
                    ->setLabel("Город и район")
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

