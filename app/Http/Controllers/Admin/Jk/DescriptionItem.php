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
use App\Models\Jk\DescriptionModel;
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
 * // * @property \App\Models\Jk\DescriptionItemModel $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class DescriptionItem extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Блоки для описания';

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
            $this->makePage(400)->setIcon('fas fa-user-lock')
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
            AdminColumn::relatedLink('descript.title', 'Название ЖК')->setWidth('350px'),

            AdminColumn::text('description', 'Описание')->setWidth('350px'),
            AdminColumn::text('color', 'Цвет блока (#555)')->setWidth('350px'),
            AdminColumn::image('image', 'Изображение')->setWidth('350px'),
        ];

        $display = AdminDisplay::datatablesAsync()
            ->paginate(40)
            ->setColumns($columns)
//            ->setDisplaySearch(true, 'поиск')
            ->setHtmlAttribute('class', 'table-primary table-hover');

        $display->setApply(function (Builder $query) {
            $query->OrderBy('id', 'asc');
        })->setNewEntryButtonText('Добавить блок описания');

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
            AdminFormElement::select('description_id', 'Описание')->setModelForOptions(DescriptionModel::class),

            AdminFormElement::text('description', 'Описание'),
            AdminFormElement::text('color', 'Цвет блока (#555)'),

            AdminFormElement::text('link', 'Ссылка'),

            AdminFormElement::image('image', 'Картинка')->setUploadPath(function (\Illuminate\Http\UploadedFile $file) {
                return '/storage/description';
            })->setSaveCallback(function ($file, $path, $filename, $settings) use ($id) {

                $file->move(public_path('/storage/description'), $filename);

                return ['path' => '/storage/description/' . $filename, 'value' => '/storage/description/' . $filename];
            }),
        ]);

        $card->getButtons()->setButtons([
            'save_and_continue' => (new Save())->setText('Применить'),
//            'save_and_close' => (new SaveAndClose())->setText('Сохранить и закрыть'),
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

