<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Http\Traits\MainInfo;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HousesController extends Controller
{
    use MainInfo;

    private function render($houses) {
        return Inertia::render('AppHouses', [
            'houses' => $houses,
            'user' => $this->getUser(),
            'page' => 0,
        ]);
    }

    public function houses(Request $request) {

        $houses = $this->getAllJk(0, 30);

        return $this->render($houses);
    }

    public function villages(Request $request) {
        $houses = $this->getAllJk(1, 30);

        return $this->render($houses);
    }
}
