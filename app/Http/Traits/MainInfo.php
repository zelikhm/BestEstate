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
