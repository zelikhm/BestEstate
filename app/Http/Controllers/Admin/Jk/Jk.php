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
                AdminFormElement::text('title', 'Название ЖК')->required(),
                AdminFormElement::textarea('description', 'Описание ЖК')->required(),
                AdminFormElement::text('slug', 'название в ссылку (only eng)')->required(),
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
                            AdminFormElement::select('city', 'Город', [
                                0 => 'Москва',
                                1 => 'Сочи',
                            ]),

                            AdminFormElement::select('status', 'Статус', [
                                0 => 'Сдан',
                                1 => 'Не сдан',
                            ]),

                            AdminFormElement::select('class', 'Класс', [
                                0 => 'Элитный',
                                1 => 'Эконом',
                            ]),

                            AdminFormElement::number('floors', 'Кол-во этажей'),
                            AdminFormElement::number('frames', 'Кол-во корпусов'),
                            AdminFormElement::number('height', 'Высота потолков')->setStep(0.01),

                        ], 6)->addColumn([
                            AdminFormElement::number('longitude', 'Долгота')->setStep(0.000001),
                            AdminFormElement::number('latitude', 'Широта')->setStep(0.000001),

                            AdminFormElement::select('variable', 'Вариация отделки', [
                                0 => 'С ремонтом',
                                1 => 'Без ремонта',
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
                ]);

                $tabs[] = AdminDisplay::tab($form2)
                    ->setLabel("Дополнительная информация")
                    ->setIcon('<i class="fa fa-credit-card"></i>');
            }
            return $tabs;


        });
        return $display;
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

