<?php

namespace App\Http\Traits;

use App\Models\Jk\ImageModels;
use App\Models\Jk\JkModel;
use Carbon\Carbon;

trait MainInfo {

    protected function getSalesJk() {

        $houses = JkModel::where('sale_date', '>', Carbon::now())
            ->with(['images', 'city_info', 'area_info'])->get();

        foreach ($houses as $house) {
            $house->image = $this->getPhoto($house->id);
        }

        return $houses;

    }

    protected function getAllJk() {

        $houses = JkModel::with(['images', 'city_info', 'area_info', 'builder'])
            ->limit(20)
            ->get();

        foreach ($houses as $house) {
            $house->image = $this->getPhoto($house->id);

            $house->address = $house->city_info->city_name !== [] ?  $house->area_info !== [] ? $house->city_info->city_name . ', ' . $house->area_info->area_name : $house->city_info->city_name : '';

            $house->status = $house->status === 0 ? 'Сдан' : 'Не сдан';

            $house->images_array = $house->images !== null ? json_decode($house->images[0]->image) : [];
        }

        return $houses;
    }

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

}
