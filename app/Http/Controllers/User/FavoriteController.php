<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Traits\Flat;
use App\Http\Traits\MainInfo;
use App\Models\User\FavoriteModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use function Symfony\Component\Routing\Loader\Configurator\collection;

class FavoriteController extends Controller
{
    use MainInfo, Flat;

    public function main(Request $request)
    {

        $favorites = FavoriteModel::where('user_id', Auth::id())->get();

        $jk = collect();
        $villages = collect();
        $flat = collect();
        $shale = collect();
        $villa = collect();
        $ecom = collect();

        foreach ($favorites as $favorite) {
            if ($favorite->jk_id === null) {
                $b = $this->getFlatOnId($favorite->flat_id);

                if($b->type_flat === 1) {
                    $flat->push($b);
                } else if ($b->type_flat === 2) {
                    $villa->push($b);
                } else if ($b->type_flat === 3) {
                    $shale->push($b);
                } else if ($b->type_flat === 4) {
                    $ecom->push($b);
                }

            } else {
                $d = $this->getJk($favorite->jk_id);

                if ($d->type === 0) {
                    $jk->push($d);
                } else {
                    $villages->push($d);
                }
            }
        }

        return Inertia::render('AppFavorite', [
            'page' => 0,
            'user' => $this->getUser(),
            'jk' => $jk,
            'villages' => $villages,
            'flat' => $flat,
            'villa' => $villa,
            'shale' => $shale,
            'ecom' => $ecom,
            'type_fillter' => (int)$request->type_fillter !== 0 ? (int)$request->type_fillter : 0,
        ]);
    }

    /**
     * added object in the favorites
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function add(Request $request)
    {

        FavoriteModel::create([
            'user_id' => $request->user_id,
            'jk_id' => $request->jk_id,
            'flat_id' => $request->flat_id,
        ]);

        try {
            return response()->json(true, 200);
        } catch (\Exception $e) {
            return response()->json($e, 401);
        }

    }

    /**
     * remove
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function remove(Request $request)
    {

        if ($request->jk_id !== null) {
            FavoriteModel::where('user_id', $request->user_id)
                ->Where('jk_id', $request->jk_id)
                ->delete();
        } else if ($request->flat_id !== null) {
            FavoriteModel::where('user_id', $request->user_id)
                ->Where('flat_id', $request->flat_id)
                ->delete();
        }

        try {
            return response()->json(true, 200);
        } catch (\Exception $e) {
            return response()->json($e, 401);
        }

    }

    /**
     * deleted object in the favorites
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function delete(Request $request)
    {

        FavoriteModel::where('id', $request->id)->delete();

        try {
            return response()->json(true, 200);
        } catch (\Exception $e) {
            return response()->json($e, 401);
        }

    }

}
