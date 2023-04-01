<?php

namespace App\Http\Traits;

use App\Http\Controllers\Admin\Jk\DescriptionItem;
use App\Models\Jk\DescriptionModel;
use App\Models\Jk\JkModel;
use App\Models\JkFlatModel;

trait HouseInfo {

    private function formationHouseInfo($slug) {

        $jk = JkModel::where('slug', $slug)->with([
            'city_info', 'area_info', 'images', 'support', 'builder', 'images', 'flat'
        ])->firstOrFail();

        $str = '';

        if($jk->city_info) {
            $str .= $jk->city_info->region_name . ', ' . $jk->city_info->city_name;
        }

        if($jk->area_info) {
            $str .= ', ' . $jk->area_info->area_name . ' район';
        }

        $jk->address = $str;

        if($jk->variable == 0) {
            $jk->variable = 'Без ремонта';
        } else if ($jk->variable == 1) {
            $jk->variable = 'С ремонтом';
        }

        if($jk->parking == 0) {
            $jk->parking = 'Нет парковки';
        } elseif ($jk->parking == 1) {
            $jk->parking = 'Наземная';
        } elseif ($jk->parking == 2) {
            $jk->parking = 'Подземная';
        }

        if($jk->class == 0) {
            $jk->class = 'Эконом';
        } elseif ($jk->class == 1) {
            $jk->class = 'Комфорт';
        } elseif ($jk->class == 2) {
            $jk->class = 'Элитный';
        }

        $jk->description = DescriptionModel::where('jk_id', $jk->id)->with(['items'])->get();

        $jk->images_array = count($jk->images) > 0 ? json_decode($jk->images[0]->image) : null;

        return $jk;

    }

    protected function getFlatInfo($house, $flat) {

        $kv = JkFlatModel::where('slug', $flat)
            ->where('jk_id', $house->id)
            ->with(['support', 'price_object', 'images', 'plans'])
            ->firstOrFail();

        $kv = $this->setType($kv);
        $kv = $this->setRepair($kv);
        $kv->date = $kv->date_building;

        if(count($kv->images) > 0) {
            $kv->images_array = json_decode($kv->images[0]->image);
        } else {
            $kv->images_array = [];
        }

        return $kv;

    }

    /**
     * casts for type row
     * @param $kv
     * @return mixed
     */

    private function setType($kv) {
        if($kv->type == 0) {
            $kv->type = 'Вторичная';
        } elseif ($kv->type == 1) {
            $kv->type = 'Новостройка';
        } elseif ($kv->type == 2) {
            $kv->type = 'Пентхаус';
        }

        return $kv;
    }

    /**
     * casts for repair row
     * @param $kv
     * @return mixed
     */

    private function setRepair($kv) {

        if($kv->repair == 0) {
            $kv->repair = 'Без ремонта';
        } elseif($kv->repair == 1) {
            $kv->repair = 'С ремонтом';
        } elseif($kv->repair == 2) {
            $kv->repair = 'Дизайнерский';
        }

        return $kv;

    }

}
