<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\FavoriteModel;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{

    /**
     * added object in the favorites
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function add(Request $request) {

        FavoriteModel::create([
            'user_id' => $request->user_id,
            'jk_id' => $request->jk_id,
            'flat_id' => $request->flat_id,
            'house_id' => $request->house_id,
            'village_id' => $request->village_id,
            'shale_id' => $request->shale_id,
        ]);

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

    public function delete(Request $request) {

        FavoriteModel::where('id', $request->id)->delete();

        try {
            return response()->json(true, 200);
        } catch (\Exception $e) {
            return response()->json($e, 401);
        }

    }

}
