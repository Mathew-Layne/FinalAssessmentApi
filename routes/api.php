<?php

use App\Http\Controllers\AddonController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\VehicleBrandController;
use App\Http\Controllers\VehicleCategoryController;
use App\Http\Controllers\VehicleController;
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

    Route::resource('brands', VehicleBrandController::class)->only(['index', 'show']);
    Route::resource('categories', VehicleCategoryController::class)->only(['index', 'show']);
    Route::resource('vehicles', VehicleController::class)->only(['index', 'show']);

Route::middleware(['auth:sanctum'])->group(function(){
    Route::resource('brands', VehicleBrandController::class)->only(['create', 'store', 'update', 'destroy']);
    Route::resource('categories', VehicleCategoryController::class)->only(['create', 'store', 'update', 'destroy']);
    Route::resource('vehicles', VehicleController::class)->only(['create', 'store', 'update', 'destroy']);
});


Route::resource('reservations', ReservationController::class);
Route::resource('addons', AddonController::class);
