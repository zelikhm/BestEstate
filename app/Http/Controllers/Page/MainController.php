<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Http\Traits\MainInfo;
use App\Models\Contact\ContactModel;
use App\Models\Contact\InfoModel;
use App\Models\Contact\SocialModel;
use App\Models\Info\ServiceModel;
use App\Models\NewModel;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MainController extends Controller
{

    use MainInfo;

    public function main() {

        return Inertia::render('AppMain', [
            'page' => 1,
            'sale_jk' => $this->getSalesJk(),
            'services' => ServiceModel::with(['values'])->get(),
        ]);

    }

    public function catalog() {

        return Inertia::render('AppCatalog', [
            'page' => 2,
        ]);

    }


    public function flat() {

        return Inertia::render('AppFlat', [
            'page' => 3,
        ]);

    }

    public function contact() {

        $contact = ContactModel::first();
        $socials = SocialModel::all();
        $info = InfoModel::all();

        return Inertia::render('AppContact', [
            'page' => 7,
            'contact' => $contact,
            'social' => $socials,
            'info' => $info,
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
