<?php

namespace App\Providers;

use App\Http\Controllers\Admin\Jk\Render;
use App\Http\Controllers\Admin\Jk\Support;
use App\Models\FlatInfo\ImagesModel;
use App\Models\FlatInfo\PlanModel;
use App\Models\Info\AreaModel;
use App\Models\Info\BalconyModel;
use App\Models\Info\BathroomModel;
use App\Models\Info\CityModel;
use App\Models\Info\InfrastructureModel;
use App\Models\Info\PlotModel;
use App\Models\Info\RepairModel;
use App\Models\Info\ServiceItemModel;
use App\Models\Info\ServiceModel;
use App\Models\Info\TypeComModel;
use App\Models\Info\TypeHouseModel;
use App\Models\Info\WorkinModel;
use App\Models\Jk\DescriptionItemModel;
use App\Models\Jk\DescriptionModel;
use App\Models\Jk\FileModel;
use App\Models\Jk\ImageModels;
use App\Models\Jk\JkModel;
use App\Models\Jk\RenderModel;
use App\Models\Jk\SupportModel;
use App\Models\JkFlatModel;
use App\Models\Manager\SendModel;
use App\Models\NewModel;
use App\Models\User;
use SleepingOwl\Admin\Providers\AdminSectionsServiceProvider as ServiceProvider;
use AdminNavigation;

class AdminSectionsServiceProvider extends ServiceProvider
{

    /**
     * @var array
     */
    protected $sections = [

        //contact
        \App\Models\Contact\ContactModel::class => 'App\Http\Controllers\Admin\Contact\Contact',
        \App\Models\Contact\SocialModel::class => 'App\Http\Controllers\Admin\Contact\Social',
        \App\Models\Contact\InfoModel::class => 'App\Http\Controllers\Admin\Contact\Info',
        //supports
        SupportModel::class => 'App\Http\Controllers\Admin\Jk\Support',
        \App\Models\BuilderModel::class => 'App\Http\Controllers\Admin\Jk\BuilderModel',
        //JK
        JkModel::class => 'App\Http\Controllers\Admin\Jk\Jk',
        ImageModels::class => 'App\Http\Controllers\Admin\Jk\Image',
        DescriptionModel::class => 'App\Http\Controllers\Admin\Jk\Description',
        DescriptionItemModel::class => 'App\Http\Controllers\Admin\Jk\DescriptionItem',
        FileModel::class => 'App\Http\Controllers\Admin\Jk\File',
        RenderModel::class => 'App\Http\Controllers\Admin\Jk\Render',
        NewModel::class => 'App\Http\Controllers\Admin\News',
        WorkinModel::class => 'App\Http\Controllers\Admin\Info\WorkinModel',
        //Info
        CityModel::class => 'App\Http\Controllers\Admin\Info\City',
        AreaModel::class => 'App\Http\Controllers\Admin\Info\Area',
        ServiceModel::class => 'App\Http\Controllers\Admin\Info\Service',
        ServiceItemModel::class => 'App\Http\Controllers\Admin\Info\ServiceDescription',
        BathroomModel::class => 'App\Http\Controllers\Admin\Info\Bathroom',
        BalconyModel::class => 'App\Http\Controllers\Admin\Info\BalconyModel',
        InfrastructureModel::class => 'App\Http\Controllers\Admin\Info\Infrastructure',
        PlotModel::class => 'App\Http\Controllers\Admin\Info\Plot',
        RepairModel::class => 'App\Http\Controllers\Admin\Info\Repair',
        TypeComModel::class => 'App\Http\Controllers\Admin\Info\TypeCom',
        TypeHouseModel::class => 'App\Http\Controllers\Admin\Info\TypeHouse',
        //flat
        JkFlatModel::class => 'App\Http\Controllers\Admin\Flat\JkFlatModel',
        ImagesModel::class => 'App\Http\Controllers\Admin\Flat\Images',
        PlanModel::class => 'App\Http\Controllers\Admin\Flat\Plan',
        //Orders
        SendModel::class => 'App\Http\Controllers\Admin\Order\SupportOrder',
        User::class => 'App\Http\Controllers\Admin\Users',
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
            [
                'title' => 'Настройки',
                'id' => 'settings',
                'icon' => 'fab fa-dev',
                'priority' => 100,
            ],
            [
                'title' => 'Жилые комплексы',
                'id' => 'houses',
                'icon' => 'fab fa-dev',
                'priority' => 200,
            ],
            [
                'title' => 'Квартиры',
                'id' => 'flats',
                'icon' => 'fab fa-dev',
                'priority' => 300,
            ],
            [
                'title' => 'Заявки',
                'id' => 'orders',
                'icon' => 'fab fa-dev',
                'priority' => 400,
            ],
            [
                'title' => 'Характеристики',
                'id' => 'characteristic',
                'icon' => 'fab fa-dev',
                'priority' => 500,
            ],
            [
                'title' => 'Общие данные',
                'id' => 'supports',
                'icon' => 'fab fa-dev',
                'priority' => 600,
            ],
            [
                'title' => 'Контакты',
                'id' => 'contact',
                'icon' => 'fab fa-dev',
                'priority' => 700,
            ],
        ]);
    }
}
