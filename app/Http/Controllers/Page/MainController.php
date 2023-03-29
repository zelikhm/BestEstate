<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Http\Traits\Flat;
use App\Http\Traits\MainInfo;
use App\Models\Contact\ContactModel;
use App\Models\Contact\InfoModel;
use App\Models\Contact\SocialModel;
use App\Models\Info\ServiceModel;
use App\Models\Info\WorkinModel;
use App\Models\Jk\SupportModel;
use App\Models\NewModel;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MainController extends Controller
{

    use MainInfo, Flat;

    public function main() {

        $options = array(
            ['type' => 1, 'options' => $this->getOptions(1)],
            ['type' => 2, 'options' => $this->getOptions(2)],
            ['type' => 3, 'options' => $this->getOptions(3)],
            ['type' => 4, 'options' => $this->getOptions(4)]
        );

//        dd($this->getFlat(2, 4));

        return Inertia::render('AppMain', [
            'page' => 1,
            'sale_jk' => $this->getSalesJk(),
            'jk' => $this->getAllJk(0, 20),
            'villages' => $this->getAllJk(1, 4),
            'villa' => $this->getFlat(2, 4),
            'shale' => $this->getFlat(3, 4),
            'ecom' => $this->getFlat(4, 4),
            'services' => ServiceModel::with(['values'])->get(),
            'user' => $this->getUser(),
            'support' => SupportModel::where('active', 1)->get(),
            'working' => WorkinModel::all(),
            'options' => $options,
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
