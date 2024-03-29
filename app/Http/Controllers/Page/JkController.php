<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Http\Traits\Flat;
use App\Http\Traits\HouseInfo;
use App\Models\Jk\JkModel;
use App\Models\JkFlatModel;
use Illuminate\Http\Request;
use Inertia\Inertia;

class JkController extends Controller
{
    use HouseInfo, Flat;

    public function jk($house) {

        $jk = $this->formationHouseInfo($house);

        $min = JkFlatModel::where('jk_id', $jk->id)->select('price')->min('price');
        $max = JkFlatModel::where('jk_id', $jk->id)->select('price')->max('price');

        return Inertia::render('AppJk', [
            'page' => 0,
            'jk' => $jk,
            'minPrice' => $min !== null ? $min : 0,
            'maxPrice' => $max !== null ? $max : 0,
        ]);

    }

    public function flat($house, $flat) {
        $jk = $this->formationHouseInfo($house);

        $kv = $this->getFlatInfo($jk, $flat);

        JkFlatModel::where('slug', $flat)->increment('view');

        $flats = JkFlatModel::limit(15)->get();

        $flats_array = collect();

        foreach ($flats as $item) {
            if($item->slug !== $flat) {
                $flats_array->push($this->getFlatOnId($item->id));
            }
        }

        return Inertia::render('AppFlat', [
            'flat' => $kv,
            'jk' => $jk,
            'page' => 3,
            'flats' => $flats_array
        ]);
    }
}
