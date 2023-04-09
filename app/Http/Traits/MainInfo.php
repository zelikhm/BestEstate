<?php

namespace App\Http\Traits;

use App\Models\Info\BalconyModel;
use App\Models\Info\BathroomModel;
use App\Models\Info\InfrastructureModel;
use App\Models\Info\PlotModel;
use App\Models\Info\RepairModel;
use App\Models\Info\TypeComModel;
use App\Models\Info\TypeHouseModel;
use App\Models\Jk\ImageModels;
use App\Models\Jk\JkModel;
use App\Models\JkFlatModel;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

trait MainInfo {

    /**
     * get sales object
     * @return mixed
     */

    protected function getSalesJk() {

        $houses = JkModel::where('sale_date', '>', Carbon::now())
            ->with(['images', 'city_info', 'area_info'])->get();

        foreach ($houses as $house) {
            $house->image = $this->getPhoto($house->id);
        }

        return $houses;

    }

    /**
     * get all jk
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */

    protected function getAllJk($type, $limit) {

        $houses = JkModel::with(['images', 'city_info', 'area_info', 'builder', 'flat'])
            ->where('type_houses', $type)
            ->limit($limit)
            ->get();

        foreach ($houses as $house) {
            $house->image = $this->getPhoto($house->id);

            $house->address = $house->city_info->city_name !== [] ?  $house->area_info !== null ? $house->city_info->city_name . ', ' . $house->area_info->area_name : $house->city_info->city_name : '';

            $house->status = $house->status === 0 ? 'Сдан' : 'Не сдан';

            $house->images_array = count($house->images) !== 0 ? json_decode($house->images[0]->image) : [];

            $house->favorite = $this->checkFavorite($house->id);
        }

        return $houses;
    }

    /**
     * get all objects
     * @param $limit
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */

    protected function getAllObject($limit) {

        $houses = JkModel::with(['images', 'city_info', 'area_info', 'builder', 'flat'])
            ->limit($limit)
            ->get();

        foreach ($houses as $house) {
            $house->image = $this->getPhoto($house->id);

            $house->address = $house->city_info->city_name !== [] ?  $house->area_info !== null ? $house->city_info->city_name . ', ' . $house->area_info->area_name : $house->city_info->city_name : '';

            $house->status = $house->status === 0 ? 'Сдан' : 'Не сдан';

            $house->images_array = count($house->images) !== 0 ? json_decode($house->images[0]->image) : [];

            $house->favorite = $this->checkFavorite($house->id);
        }

        return $houses;

    }

    /**
     * get jk on id
     * @param $id
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */

    protected function getJk($id) {


        $houses = JkModel::with(['images', 'city_info', 'area_info', 'builder', 'flat'])
            ->where('id', $id)
            ->get();

        foreach ($houses as $house) {
            $house->image = $this->getPhoto($house->id);

            $house->address = $house->city_info->city_name !== [] ?  $house->area_info !== null ? $house->city_info->city_name . ', ' . $house->area_info->area_name : $house->city_info->city_name : '';

            $house->status = $house->status === 0 ? 'Сдан' : 'Не сдан';

            $house->images_array = count($house->images) !== 0 ? json_decode($house->images[0]->image) : [];

            $house->favorite = $this->checkFavorite($house->id);
        }

        return $houses[0];

    }

    /**
     * check add favorite
     * @param $house
     * @return bool
     */

    protected function checkFavorite($house) {

        $favorite = User\FavoriteModel::where('jk_id', $house)
            ->where('user_id', Cookie::get('user_id'))
            ->first();

        return $favorite !== null;

    }

    /**
     * get photo
     * @param $house
     * @return mixed|null
     */

    protected function getPhoto($house) {

        $images = ImageModels::where('jk_id', $house)->get();

        if(count($images) > 0) {
            foreach ($images as $image) {
                if($image->image !== '[]') {
                    return json_decode($image->image)[0];
                } else {
                    return null;
                }
            }
        } else {
            return null;
        }

    }


    protected function getUser() {

        return User::where('id', Auth::id())->first();

    }

    /**
     * get options
     * @param $type
     * @return \Illuminate\Support\Collection
     */

    protected function getOptions($type) {

        if($type == 1) {

            return collect([
                0 => ['name' => 'Ремонт', 'opt' => RepairModel::all()],
                1 => ['name' => 'Балкон', 'opt' => BalconyModel::all()],
                2 => ['name' => 'Санузел', 'opt' => BathroomModel::all()],
            ]);

        } else if ($type == 2 || $type == 3) {

            return collect([
                0 => ['name' => 'Ремонт', 'opt' => RepairModel::all()],
                1 => ['name' => 'Инфраструктура', 'opt' => InfrastructureModel::all()],
                2 => ['name' => 'Тип участка', 'opt' => PlotModel::all()],
                3 => ['name' => 'Тип здания', 'opt' => TypeHouseModel::where('type', 1)->get()],
            ]);

        } else if ($type == 4) {

            return collect([
                0 => ['name' => 'Тип здания (ком)', 'opt' => TypeHouseModel::where('type', 0)->get()],
                1 => ['name' => 'Тип Недвижимости', 'opt' => TypeComModel::all()],
            ]);

        }

    }

}
