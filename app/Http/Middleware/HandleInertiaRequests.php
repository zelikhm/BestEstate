<?php

namespace App\Http\Middleware;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Inertia\Middleware;
use Tightenco\Ziggy\Ziggy;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the current asset version.
     */
    public function version(Request $request)
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @return array<string, mixed>
     */
    public
    function share(Request $request)
    {

        $course = [
            [
                'name' => 'BTC',
                'code' => 'BTC',
                'price' => 0,
            ],
            [
                'name' => 'ETH',
                'code' => 'ETH',
                'price' => 0,
            ],
            [
                'name' => 'USD',
                'code' => 'R01235',
                'price' => 0,
            ],
            [
                'name' => 'EUR',
                'code' => 'R01239',
                'price' => 0,
            ],
            [
                'name' => 'CYN',
                'code' => 'CYN',
                'price' => 0,
            ],
        ];

        $b = file_get_contents('https://bitpay.com/api/rates');

        $b = json_decode($b);

        foreach ($b as $a) {
            if ($a->code === 'USD') {
                $course[0]['price'] = $a->rate;
                $usd = $a->rate;
            }
            if ($a->code === 'ETH') {
                $eth = $a->rate;
            }
            if ($a->code === 'CNY') {
                $cny = $a->rate;
            }
        }

        $d = file_get_contents('http://www.cbr.ru/scripts/XML_daily.asp');

        $languages = simplexml_load_file("https://www.cbr.ru/scripts/XML_daily.asp");

        foreach ($languages->Valute as $lang) {
            foreach ($course as $key => $item) {
                if ($lang["ID"] == $item['code']) { //тип валюты
                    $course[$key]['price'] = round(str_replace(',', '.', $lang->Value), 2);
                }
            }
        }

        $course[1]['price'] = round((($eth) * $course[3]['price']), 2);
        $course[4]['price'] = round((($usd / $cny) * $course[3]['price']), 2);

        return array_merge(parent::share($request), [
            'auth' => [
                'user' => $request->user(),
            ],
            'course' => $course,
            'ziggy' => function () use ($request) {
                return array_merge((new Ziggy)->toArray(), [
                    'location' => $request->url(),
                ]);
            },
        ]);
    }
}
