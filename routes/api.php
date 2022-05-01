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

Route::resource('brands', VehicleBrandController::class);
Route::resource('categories', VehicleCategoryController::class);
Route::resource('vehicles', VehicleController::class);
Route::resource('reservations', ReservationController::class);
Route::resource('addons', AddonController::class);
