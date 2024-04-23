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


Route::post('/login', [App\Http\Controllers\API\auth\AuthController::class,'login']);
Route::middleware('jwt.auth')->group(function() {
    Route::get('/delivery_order_by_status/{status}', [App\Http\Controllers\API\DeliveryOrder\DeliveryOrderController::class,'delivery_order_by_status']);
    Route::get('/delivery_order_all', [App\Http\Controllers\API\DeliveryOrder\DeliveryOrderController::class,'delivery_order_all']);
    Route::post('/approval', [App\Http\Controllers\API\DeliveryOrder\DeliveryOrderController::class,'approval']);
    Route::get('/delivery_order_by_id/{id}', [App\Http\Controllers\API\DeliveryOrder\DeliveryOrderController::class,'delivery_order_by_id']);
});


