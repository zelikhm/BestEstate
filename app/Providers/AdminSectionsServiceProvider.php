<?php

namespace App\Providers;

use SleepingOwl\Admin\Providers\AdminSectionsServiceProvider as ServiceProvider;
use AdminNavigation;

class AdminSectionsServiceProvider extends ServiceProvider
{

    /**
     * @var array
     */
    protected $sections = [
        \App\Models\Contact\ContactModel::class => 'App\Http\Controllers\Admin\Contact\Contact',
        \App\Models\Contact\SocialModel::class => 'App\Http\Controllers\Admin\Contact\Social',
        \App\Models\Contact\InfoModel::class => 'App\Http\Controllers\Admin\Contact\Info',
    ];

    /**
     * Register sections.
     *
     * @param \SleepingOwl\Admin\Admin $admin
     * @return void
     */
    public function boot(\SleepingOwl\Admin\Admin $admin)
    {
        $this->app->call([
            $this,
            'registerNavigation'
        ]);

        parent::boot($admin);
    }

    public function registerNavigation()
    {
        AdminNavigation::setFromArray([
//            [
//                'title' => 'Настройки',
//                'id' => 'settings',
//                'icon' => 'fab fa-dev',
//                'priority' => 100,
//            ],
//            [
//                'title' => 'Жилые комплексы',
//                'id' => 'houses',
//                'icon' => 'fab fa-dev',
//                'priority' => 200,
//            ],
//            [
//                'title' => 'Файлы',
//                'id' => 'files',
//                'icon' => 'fab fa-dev',
//                'priority' => 300,
//            ],
            [
                'title' => 'Контакты',
                'id' => 'contact',
                'icon' => 'fab fa-dev',
                'priority' => 400,
            ],
        ]);
    }
}
