<?php

use App\Http\Controllers\Adcenter;
use App\Http\Controllers\AdController;
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
    Route::get('/ad',[AdController::class,'index'])->name('ad.index');
    Route::get('/ad/create',[AdController::class,'create'])->name('ad.create');
    Route::post('/ad/store',[AdController::class,'store'])->name('ad.store');
});
Route::get('/',[QrCodeController::class,'index'])->name('index');
Route::get('/qr-code/{filename}',[QrCodeController::class,'show'])->name('show');
Route::post('/store',[QrCodeController::class,'store'])->name('store');
Route::get('/download/{filename}/{format}',[QrCodeController::class,'download'])->name('download');



