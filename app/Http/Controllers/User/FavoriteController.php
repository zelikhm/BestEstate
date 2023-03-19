<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Traits\MainInfo;
use App\Models\User\FavoriteModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class FavoriteController extends Controller
{
    use MainInfo;

    public function main() {

        $favorites = FavoriteModel::where('user_id', Auth::id())->get();

        $array = collect();

        foreach ($favorites as $favorite) {

            $array->push($this->getJk($favorite->jk_id));

        }

        return Inertia::render('AppFavorite', [
            'page' => 0,
            'user' => $this->getUser(),
            'jk' => $array,
        ]);
    }

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

    public function remove(Request $request) {

        FavoriteModel::where('user_id', $request->jk_id)
            ->orWhere('jk_id', $request->jk_id)
            ->orWhere('flat_id', $request->flat_id)
            ->delete();

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
