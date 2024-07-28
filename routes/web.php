<?php

use App\Http\Controllers\Adcenter;
use App\Http\Controllers\QrCodeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::get('/ad',[Adcenter::class,'index'])->name('ad.index');
    Route::get('/ad/create',[Adcenter::class,'create'])->name('ad.create');
    Route::post('/ad/store',[Adcenter::class,'store'])->name('ad.store');
});
Route::get('/',[QrCodeController::class,'index']);
Route::get('/qr-code',[QrCodeController::class,'show']);
Route::post('/store',[QrCodeController::class,'store'])->name('store');


