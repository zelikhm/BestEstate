<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('manager')->group(function () {
   Route::post('/send', ['App\Http\Controllers\Manager\SendController', 'send']);
});

Route::prefix('favorite')->group(function () {
   Route::post('/add', ['App\Http\Controllers\User\FavoriteController', 'add']);
   Route::post('/delete', ['App\Http\Controllers\User\FavoriteController', 'delete']);
});
