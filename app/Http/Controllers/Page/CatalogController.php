<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Http\Traits\MainInfo;
use App\Models\Jk\JkModel;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CatalogController extends Controller
{
    use MainInfo;

    public function main(Request $request)
    {

        if(count($request->query) !== 0){

            if($request->type_jk) {
                $jk = $this->getTypeJk($request->type_jk);
            } else {
                $jk = $this->getTypeJk(0);
            }


        } else {

            $jk = $this->getTypeJk(0);

        }

        return Inertia::render('AppCatalog', [
            'page' => 2,
            'jk' => $jk,
            'type' => $request->type_jk ? $request->type_jk : 0,
            'user' => $this->getUser(),
        ]);
    }

    /**
     * render jk in the catalog
     * @param $type
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */

    protected function getTypeJk($type) {

        return $this->getAllJk($type, 20);
    }
}
