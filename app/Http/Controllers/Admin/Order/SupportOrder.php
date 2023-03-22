<?php

namespace App\Http\Controllers\Admin\Order;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use AdminNavigation;
use AdminColumnEditable;
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
use SleepingOwl\Admin\Section;

/**
 * Class Administrators
 *
 * // * @property \App\Models\Manager\SendModel $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class SupportOrder extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Заявки поддержке';

    /**
     * @var string
     */
    protected $alias;

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $page = AdminNavigation::getPages()->findById('orders');

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
            AdminColumn::relatedLink('user.name', 'Саппорт')->setWidth('350px'),
            AdminColumn::text('name', 'Заголовок')->setWidth('350px'),
            AdminColumn::text('phone', 'Ссылка')->setWidth('350px'),
            AdminColumnEditable::checkbox('isTg')->setLabel('Телеграмм'),
            AdminColumnEditable::checkbox('isWhatsapp')->setLabel('Ватсапп'),
            AdminColumnEditable::checkbox('isViber')->setLabel('Вайбер'),
            AdminColumnEditable::checkbox('isPhone')->setLabel('Телефон'),
        ];

        $display = AdminDisplay::datatablesAsync()
            ->paginate(40)
            ->setColumns($columns)
            ->setDisplaySearch(true, 'поиск')
            ->setHtmlAttribute('class', 'table-primary table-hover');

        $display->setApply(function (Builder $query) {
            $query->OrderBy('id', 'asc');
        })->setNewEntryButtonText('Добавить новость');

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

            AdminFormElement::select('Поддержка', 'user')->setOptionsForModel(SupportModel::class),

            AdminFormElement::text('name', 'Название')->required(),

            AdminFormElement::text('slug', 'Ссылка (only eng)')->required(),


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
        return false;
    }

    /**
     * @return bool
     */
    public function isCreatable(): bool
    {
        return false;
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

