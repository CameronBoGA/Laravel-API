<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// My add, maybe should use App\Model\Maps
use App\Models\Maps;

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


/* Maps Handling */
Route::resource('maps', 'App\Http\Controllers\MapsController');
Route::get('show', 'App\Http\Controllers\MapsController@show');

/* Obstacles Handling */
Route::resource('obstacles', 'App\Http\Controllers\ObstaclesController');
Route::get('show', 'App\Http\Controllers\ObstaclesController@show');

/* Reporting Handling */
Route::resource('reporting', 'App\Http\Controllers\ReportingController');
Route::get('show', 'App\Http\Controllers\ReportingController@show');

/*
Route::get('maps', 'App\Http\Controllers\MapsController@index');
Route::post('maps', 'App\Http\Controllers\MapsController@store');
Route::put('maps', 'App\Http\Controllers\MapsController@update');
Route::destroy('maps', 'App\Http\Controllers\MapsController@destroy');
Route::show('maps', 'App\Http\Controllers\MapsController@show');
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});