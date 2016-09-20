<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api) {
    $api->resource('tes', 'App\Http\Controllers\BikesController');
    // $api->post('/tes', 'App\Http\Controllers\BikesController@store');
    // $api->get('/tes/{id}/', 'App\Http\Controllers\api\BikesController@show');
    // $api->patch('/tes/{id}/', 'App\Http\Controllers\api\BikesController@update');
    //$api->destroy('/tes/{id}', 'App\Http\Controllers\api\BikesController@destroy');
});