<?php

namespace App\Http\Controllers\Admin\Info;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use AdminNavigation;
use App\Models\Builder\Flat\FlatModel;
use App\Models\Builder\Flat\FrameModel;
use App\Models\Builder\HouseModel;
use App\Models\Info\CityModel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Form\Buttons\Cancel;
use SleepingOwl\Admin\Form\Buttons\Save;
use SleepingOwl\Admin\Form\Buttons\SaveAndClose;
use SleepingOwl\Admin\Form\Buttons\Delete;
use SleepingOwl\Admin\Section;

/**
 * Class Administrators
 *
 * // * @property \App\Models\Info\WorkinModel $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class WorkinModel extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'С кем мы работаем';

    /**
     * @var string
     */
    protected $alias;

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $page = AdminNavigation::getPages()->findById('settings');

        $page->addPage(
            $this->makePage(800)->setIcon('fas fa-user-lock')
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
            AdminColumn::image('image', 'Название')->setWidth('350px'),
        ];

        $display = AdminDisplay::datatablesAsync()
            ->paginate(40)
            ->setColumns($columns)
            ->setDisplaySearch(false, 'поиск')
            ->setHtmlAttribute('class', 'table-primary table-hover');

        $display->setApply(function (Builder $query) {
            $query->OrderBy('id', 'asc');
        })->setNewEntryButtonText('Добавить');

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

            AdminFormElement::image('image', 'Изображение')->setUploadPath(function (\Illuminate\Http\UploadedFile $file) {
                return '/storage/working';
            })->setSaveCallback(function ($file, $path, $filename, $settings) use ($id) {

                $file->move(public_path('/storage/working'), $filename);

                return ['path' => '/storage/working/' . $filename, 'value' => '/storage/working/' . $filename];
            }),

        ]);

        $card->getButtons()->setButtons([
//            'save_and_continue' => (new Save())->setText('Применить'),
            'save_and_close' => (new SaveAndClose())->setText('Сохранить и закрыть'),
            'delete' => (new Delete()),
        ]);

        return $card->addBody([$form]);
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
