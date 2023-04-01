<?php

namespace App\Http\Controllers\Search;

use App\Http\Controllers\Controller;
use App\Models\Jk\JkModel;
use App\Models\JkFlatModel;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function search(Request $request) {

        $jk = JkModel::where('title', 'LIKE', '%' . $request->title . '%')->with(['images'])->get();

        foreach ($jk as $item) {

            $item->image = count($item->images) !== 0 ? json_decode($item->images[0]->image)[0] : '/img/apartament/apart-img-1.jpg';

            $item->minPrice = JkFlatModel::where('jk_id', $item->id)->select('price')->min('price');
            $item->maxPrice = JkFlatModel::where('jk_id', $item->id)->select('price')->max('price');

        }

        $flats = JkFlatModel::where('title', 'LIKE', '%' . $request->title . '%')->with(['jk', 'images'])->get();

        foreach ($flats as $item) {

            $item->image = count($item->images) !== 0 ? json_decode($item->images[0]->image)[0] : '/img/apartament/apart-img-1.jpg';

        }

        return response()->json(['jk' => $jk, 'flats' => $flats], 200);
    }
}
