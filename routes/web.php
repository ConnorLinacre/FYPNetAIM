<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => 'auth'], function() {
    Route::get('/campus/create', 'CampusController@create')->name('create_campus');
    Route::post('/campus/create', 'CampusController@store')->name('create_campus');
    Route::get('/campus/update/{campus}', 'CampusController@edit')->name('edit_campus');
    Route::post('/campus/update/{campus}', 'CampusController@update')->name('edit_campus');
    Route::get('/campus/delete/{campus}', 'CampusController@destroy')->name('delete_campus');

    Route::get('/building/create', 'BuildingController@create')->name('create_building');
    Route::post('/building/create', 'BuildingController@store')->name('create_building');
    Route::get('/building/update/{building}', 'BuildingController@edit')->name('edit_building');
    Route::post('/building/update/{building}', 'BuildingController@update')->name('edit_building');
    Route::get('/building/delete/{building}', 'BuildingController@destroy')->name('delete_building');

    Route::get('/networkswitch/create', 'NetworkswitchController@create')->name('create_networkswitch');
    Route::post('/networkswitch/create', 'NetworkswitchController@store')->name('create_networkswitch');
    Route::get('/networkswitch/update/{networkswitch}', 'NetworkswitchController@edit')->name('edit_networkswitch');
    Route::post('/networkswitch/update/{networkswitch}', 'NetworkswitchController@update')->name('edit_networkswitch');
    Route::get('/networkswitch/delete/{networkswitch}', 'NetworkswitchController@destroy')->name('delete_networkswitch');
});

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/campus', 'CampusController@index')->name('all_campus');
Route::get('/campus/{campus}', 'CampusController@show')->name('view_campus');

Route::get('/building', 'BuildingController@index')->name('all_buildings');
Route::get('/building/{building}', 'BuildingController@show')->name('view_building');

Route::get('/networkswitch', 'NetworkswitchController@index')->name('all_networkswitches');
Route::get('/networkswitch/{networkswitch}', 'NetworkswitchController@show')->name('view_networkswitch');

