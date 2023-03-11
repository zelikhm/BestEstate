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
            'jk' => $this->getAllJk(0, 20),
            'villages' => $this->getAllJk(1, 4),
            'shale' => $this->getAllJk(3, 4),
            'ecom' => $this->getAllJk(4, 4),
            'services' => ServiceModel::with(['values'])->get(),
            'user' => $this->getUser(),
        ]);

    }

    public function flat() {

        return Inertia::render('AppFlat', [
            'page' => 3,
            'user' => $this->getUser(),
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
            'user' => $this->getUser(),
        ]);

    }

    public function about() {

        return Inertia::render('AppAbout', [
            'page' => 6,
            'user' => $this->getUser(),
        ]);

    }

    public function service() {
        return Inertia::render('AppService', [
            'page' => 4,
            'user' => $this->getUser(),
        ]);
    }

    public function news() {

        $news = NewModel::orderBy('created_at', 'DESC')->get();

        return Inertia::render('AppNews', [
            'page' => 5,
            'news' => $news,
            'user' => $this->getUser(),
        ]);

    }

    public function getNew($slug) {

        $info = NewModel::where('slug', $slug)->firstOrFail();

        $news = NewModel::where('slug', '!=', $slug)->orderBy('created_at', 'DESC')->limit(2)->get();

        return Inertia::render('AppNew', [
            'page' => 5,
            'info' => $info,
            'news' => $news,
            'user' => $this->getUser(),
        ]);

    }

}
