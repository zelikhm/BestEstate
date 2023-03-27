<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['App\Http\Controllers\Page\MainController', 'main'])->name('main');
Route::get('/contact', ['App\Http\Controllers\Page\MainController', 'contact'])->name('contact');
Route::get('/jk/{house}', ['App\Http\Controllers\Page\JkController', 'jk'])->name('jk');
Route::get('/jk/{house}/{flat}', ['App\Http\Controllers\Page\JkController', 'flat'])->name('jk');
Route::get('/flat', ['App\Http\Controllers\Page\MainController', 'flat'])->name('flat');

Route::get('/catalog', ['App\Http\Controllers\Page\CatalogController', 'render'])->name('catalog');
Route::post('/catalog', ['App\Http\Controllers\Page\CatalogController', 'filtered'])->name('catalog');

Route::get('/about', ['App\Http\Controllers\Page\MainController', 'about'])->name('about');
Route::get('/service', ['App\Http\Controllers\Page\MainController', 'service'])->name('service');
Route::get('/news', ['App\Http\Controllers\Page\MainController', 'news'])->name('news');
Route::get('/news/{slug}', ['App\Http\Controllers\Page\MainController', 'getNew'])->name('getNew');
Route::get('/favorites', ['App\Http\Controllers\User\FavoriteController', 'main'])->name('favorite');

Route::get('/houses', ['App\Http\Controllers\Page\HousesController', 'houses']);
Route::get('/villages', ['App\Http\Controllers\Page\HousesController', 'villages']);
//
//Route::get('/test', function () {
//   $d = file_get_contents('https://blockchain.info/rawaddr/bc1q5620d4qy8qqk07g850u5905sxzupsxk5aks56q');
//
//   $array = [];
//
//   foreach (json_decode($d)->txs as $item) {
//
//       if($item->balance > 0) {
//           $date = DateTime::createFromFormat('U', $item->time);
//
//           array_push($array, [
//               'time' => $date->format('d.m.Y'),
//               'btc' => $item->result * 0.00000001,
//               'satoshi' => $item->result,
//               'result' => $item->result
//           ]);
//       }
//
//   }
//
//   dd($array);
//});

require __DIR__.'/auth.php';
