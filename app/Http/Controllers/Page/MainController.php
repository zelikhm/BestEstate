<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MainController extends Controller
{

    public function main() {

        return Inertia::render('AppMain', [
            'page' => 1,
        ]);

    }

    public function catalog() {

        return Inertia::render('AppCatalog', [
            'page' => 2,
        ]);

    }

    public function contact() {

        return Inertia::render('AppContact', [
            'page' => 7,
        ]);

    }

    public function about() {

        return Inertia::render('AppAbout', [
            'page' => 6,
        ]);

    }

    public function service() {
        return Inertia::render('AppService', [
            'page' => 4,
        ]);
    }

    public function news() {

        return Inertia::render('AppNews', [
            'page' => 5,
        ]);

    }

    public function getNew($id) {



    }

}
