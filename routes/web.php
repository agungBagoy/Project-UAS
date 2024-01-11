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


Route::get('/', [\App\http\Controllers\Frontend\HomepageController::class,'index'])->name('homepage');
Route::get('Type', [\App\http\Controllers\Frontend\CarController::class,'index'])->name('car.index');
Route::get('Type/{car}', [\App\http\Controllers\Frontend\CarController::class,'show'])->name('car.show');
Route::post('daftar-mobil', [\App\http\Controllers\Frontend\CarController::class,'store'])->name('car.store');
Route::get('about',[\App\http\Controllers\Frontend\AboutController::class,'index']);
Route::get('/contact', [\App\http\Controllers\Frontend\ContactController::class,'index']);
Route::post('/contact/store', [\App\http\Controllers\Frontend\ContactController::class,'store'])->name('contact.store');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('Home');


