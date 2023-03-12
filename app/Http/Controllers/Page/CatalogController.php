<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Http\Traits\Flat;
use App\Http\Traits\MainInfo;
use App\Models\Jk\JkModel;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CatalogController extends Controller
{
    use MainInfo, Flat;

    public function main(Request $request)
    {

        if(count($request->query) !== 0){
            if($request->type_jk) {
                $flats = $this->getFlat($request->type_jk, 20);
            } else {
                $flats = $this->getFlat(1, 20);
            }
        } else {
            $flats = $this->getFlat(1, 20);
        }

//        dd($flats[0]);

        return Inertia::render('AppCatalog', [
            'page' => 2,
            'jk' => $flats,
            'type' => $request->type_jk ? $request->type_jk : 0,
            'user' => $this->getUser(),
        ]);
    }
}
