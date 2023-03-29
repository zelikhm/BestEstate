<?php

namespace App\Http\Controllers\Admin\Flat;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use AdminNavigation;
use AdminSection;
use App\Models\FlatInfo\ImagesModel;
use App\Models\Jk\JkModel;
use App\Models\Jk\SupportModel;
use App\Models\JkFlatModel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
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
class Images extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Изображения квартиры';

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
            $this->makePage(200)->setIcon('fas fa-user-lock')
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
            AdminColumn::relatedLink('flat.title', 'Квартира')->setWidth('350px')->setSearchable(true)->setSearchCallback(function ($column, $query, $search) {
                return $query->orWhereHas('flat', function ($q) use ($search){
                    $q->where('title', 'like', '%'.$search.'%');
                });
            }),
            AdminColumn::custom('Изображения', function(\Illuminate\Database\Eloquent\Model $model) {
                return $model->image !== '[]' ? 'Загружено' : 'Пустое';
            })->setWidth('150px'),
        ];


        $display = AdminDisplay::datatables()
            ->paginate(40)
            ->setColumns($columns)
            ->setDisplaySearch(true, 'поиск')
            ->setHtmlAttribute('class', 'tabl   e-primary table-hover');

        $display->with('flat');

        $display->setApply(function (Builder $query) {
            $query->OrderBy('id', 'asc');
        })->setNewEntryButtonText('Добавить изображение');

        return $display;
    }

    /**
     * @param int|null $id
     * @param array $payload
     * @return FormInterface
     */
    public function onEdit($id = null, array $payload = [])
    {

        $card = AdminForm::card();

        $form = AdminForm::elements([

            AdminFormElement::select('flat_id', 'Квартира')->setModelForOptions(JkFlatModel::class)->setDisplay('title'),

            AdminFormElement::images('image', 'Изображение')->storeAsJson(),

        ]);

        $card->getButtons()->setButtons([
            'save_and_continue' => (new Save())->setText('Применить'),
//            'save_and_close' => (new SaveAndClose())->setText('Сохранить и закрыть'),
            'delete' => (new Delete()),
        ]);

        return $card->addBody([$form]);
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

