<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Models\CourseModel;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function reloadCourse() {

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

        CourseModel::create([
            'BTC' => $course[0]['price'],
            'ETH' => $course[1]['price'],
            'USD' => $course[2]['price'],
            'EUR' => $course[3]['price'],
            'CYN' => $course[4]['price'],
        ]);

    }
}
