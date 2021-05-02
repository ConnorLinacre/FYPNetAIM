<?php

use App\Http\Controllers\BuildingController;
use App\Http\Controllers\CampusController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NetworkSwitchController;
use App\Http\Controllers\PortController;
use App\Http\Controllers\UserController;
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
    Route::get('/campus/create', [CampusController::class, 'create'])->name('create_campus');
    Route::post('/campus/create', [CampusController::class, 'store'])->name('create_campus');
    Route::get('/campus/update/{campus}', [CampusController::class, 'edit'])->name('edit_campus');
    Route::post('/campus/update/{campus}', [CampusController::class, 'update'])->name('edit_campus');
    Route::get('/campus/delete/{campus}', [CampusController::class, 'destroy'])->name('delete_campus');

    Route::get('/campus/{campus}/building/create', [BuildingController::class, 'create'])->name('create_building');
    Route::post('/campus/{campus}/building/create', [BuildingController::class, 'store'])->name('create_building');
    Route::get('/building/update/{building}', [BuildingController::class, 'edit'])->name('edit_building');
    Route::post('/building/update/{building}', [BuildingController::class, 'update'])->name('edit_building');
    Route::get('/building/{building}/delete', [BuildingController::class, 'destroy'])->name('delete_building');

    Route::get('/building/{building}/switch/create', [NetworkSwitchController::class, 'create'])->name('create_switch');
    Route::post('/building/{building}/switch/create', [NetworkSwitchController::class, 'store'])->name('create_switch');
    Route::get('/switch/update/{switch}', [NetworkSwitchController::class, 'edit'])->name('edit_switch');
    Route::post('/switch/update/{switch}', [NetworkSwitchController::class, 'update'])->name('edit_switch');
    Route::get('/switch/delete/{switch}', [NetworkSwitchController::class, 'destroy'])->name('delete_switch');

    Route::get('/switch/{switch}/port/create', [PortController::class, 'create'])->name('create_port');
    Route::post('/switch/{switch}/port/create', [PortController::class, 'store'])->name('create_port');
    Route::get('/port/update/{port}', [PortController::class, 'edit'])->name('edit_port');
    Route::post('/port/update/{port}', [PortController::class, 'update'])->name('edit_port');
    Route::get('/port/delete/{port}', [PortController::class, 'destroy'])->name('delete_port');

    Route::get('/campus', [CampusController::class, 'index'])->name('all_campus');
    Route::get('/campus/{campus}/show', [CampusController::class, 'view'])->name('view_campus');

    Route::get('/building/{campus?}', [BuildingController::class, 'index'])->name('all_buildings');
    Route::get('/building/{building}/show', [BuildingController::class, 'view'])->name('view_building');

    Route::get('/switch/{building?}', [NetworkSwitchController::class, 'index'])->name('all_switches');
    Route::get('/switch/{switch}/show', [NetworkSwitchController::class, 'view'])->name('view_switch');

    Route::get('/port/{switch?}', [PortController::class, 'index'])->name('all_ports');
    Route::get('/port/{port}/show', [PortController::class, 'view'])->name('view_port');

    Route::get('/user/edit', [UserController::class, 'show'])->name('edit_user');
    Route::post('/user/edit', [UserController::class, 'changeUserInfo'])->name('edit_user');
});

Auth::routes();

Route::get('/', function() { if (Auth::check()) { return redirect()->route('all_campus'); } return view('content.home'); })->name('home');


