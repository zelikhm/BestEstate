<?php

namespace App\Http\Controllers\Search;

use App\Http\Controllers\Controller;
use App\Models\Jk\JkModel;
use App\Models\JkFlatModel;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function search(Request $request) {

        $jk = JkModel::where('title', 'LIKE', '%' . $request->title . '%')->get();

        $flats = JkFlatModel::where('title', 'LIKE', '%' . $request->title . '%')->with(['jk'])->get();

        return response()->json(['jk' => $jk, 'flats' => $flats], 200);
    }
}
