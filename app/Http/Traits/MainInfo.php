<?php

namespace App\Http\Traits;

use App\Models\Jk\ImageModels;
use App\Models\Jk\JkModel;
use App\Models\JkFlatModel;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

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

        $favorite = User\FavoriteModel::where('jk_id', $house)->first();

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

}
