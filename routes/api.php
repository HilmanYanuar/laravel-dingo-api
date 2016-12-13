<?php

use Illuminate\Http\Request;

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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

$api = app('Dingo\Api\Routing\Router');

// $api->version('v1', function ($api) {
//     $api->get('hello', function () {
//         return "Hello...";
//     });
// });

$api->version('v1', function ($api) {
    $api->resource('bycycles', 'App\Http\Controllers\BycyclesController');
    // $api->get('bycycles', 'App\Http\Controllers\BycyclesController@index');
    // $api->get('bycycles/{bycycle}', 'App\Http\Controllers\BycyclesController@show');
});
