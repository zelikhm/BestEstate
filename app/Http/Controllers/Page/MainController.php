<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\NewModel;
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

        $news = NewModel::orderBy('created_at', 'DESC')->get();

        return Inertia::render('AppNews', [
            'page' => 5,
            'news' => $news,
        ]);

    }

    public function getNew($slug) {

        $info = NewModel::where('slug', $slug)->firstOrFail();

        $news = NewModel::where('slug', '!=', $slug)->orderBy('created_at', 'DESC')->limit(2)->get();

        return Inertia::render('AppNew', [
            'page' => 5,
            'info' => $info,
            'news' => $news,
        ]);

    }

}
