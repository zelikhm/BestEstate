<?php

namespace App\Http\Traits;

use App\Http\Controllers\Admin\Jk\DescriptionItem;
use App\Models\Jk\DescriptionModel;
use App\Models\Jk\JkModel;

trait HouseInfo {

    private function formationHouseInfo($slug) {

        $jk = JkModel::where('slug', $slug)->with([
            'city_info', 'area_info', 'images', 'support', 'builder'
        ])->firstOrFail();

        $str = '';

        if($jk->city_info) {
            $str .= $jk->city_info->region_name . ', ' . $jk->city_info->city_name;
        }

        if($jk->area_info) {
            $str .= ', ' . $jk->area_info->area_name . ' район';
        }

        $jk->address = $str;

        if($jk->variable === 0) {
            $jk->variable = 'Без ремонта';
        } else if ($jk->variable === 1) {
            $jk->variable = 'С ремонтом';
        }

        if($jk->parking === 0) {
            $jk->parking = 'Нет парковки';
        } elseif ($jk->parking === 1) {
            $jk->parking = 'Наземная';
        } elseif ($jk->parking === 2) {
            $jk->parking = 'Подземная';
        }

        if($jk->class === 0) {
            $jk->class = 'Эконом';
        } elseif ($jk->class === 1) {
            $jk->class = 'Комфорт';
        } elseif ($jk->class === 2) {
            $jk->class = 'Элитный';
        }

        $jk->description = DescriptionModel::where('jk_id', $jk->id)->with(['items'])->get();

        return $jk;

    }

}
