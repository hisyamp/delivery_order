<?php

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
// [App\Http\Controllers\HomeController::class, 'index']
Route::get('/', [App\Http\Controllers\Auth\LoginController::class,'formlogin'])->name('login');
Route::post('/postlogin', [App\Http\Controllers\Auth\LoginController::class,'postLogin']);
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');
Route::get('email/verify', [App\Http\Controllers\Auth\VerificationController::class,'show'])->name('verification.notice');
Route::get('email/verify/{id}/{hash}', [App\Http\Controllers\Auth\VerificationController::class,'verify'])->name('verification.verify');
Route::post('email/resend', [App\Http\Controllers\Auth\VerificationController::class,'resend'])->name('verification.resend');
Route::post('/regis', [App\Http\Controllers\Auth\RegisterController::class,'regis'])->name('register');

Route::group(['middleware' => 'auth'], function(){
    Route::get('list_user', [App\Http\Controllers\Admin\AdminController::class,'list_user']);
    Route::get('api_user', [App\Http\Controllers\Admin\AdminController::class,'api_user']);
    Route::get('reset_password/{id}', [App\Http\Controllers\Admin\AdminController::class,'reset_password']);
    Route::get('aktivasi', [App\Http\Controllers\Admin\AdminController::class,'aktivasi']);
    //delivery order
    Route::get('list_delivery_order', [App\Http\Controllers\DeliveryOrder\DeliveryOrderController::class,'list_delivery_order']);
    Route::get('api_log_delivery_order', [App\Http\Controllers\DeliveryOrder\DeliveryOrderController::class,'api_log_delivery_order']);
    Route::get('form_delivery_order', [App\Http\Controllers\DeliveryOrder\DeliveryOrderController::class,'form_delivery_order']);
    Route::get('delivery_order_by_id/{id}', [App\Http\Controllers\DeliveryOrder\DeliveryOrderController::class,'delivery_order_by_id']);
    Route::post('delivery_order', [App\Http\Controllers\DeliveryOrder\DeliveryOrderController::class,'delivery_order']);
    //get postalcode
    Route::get('regencies_by_province/{val}', [App\Http\Controllers\PostalCode\PostalCodeController::class,'regencies_by_province']);
    Route::get('district_by_regencies/{val}', [App\Http\Controllers\PostalCode\PostalCodeController::class,'district_by_regencies']);
    Route::get('villages_by_district/{val}', [App\Http\Controllers\PostalCode\PostalCodeController::class,'villages_by_district']);
});