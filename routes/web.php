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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('Home');

Route::group(['middleware' => ['auth','is_admin'],'prefix' => 'admin','as' => 'admin.'],function () {
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::resource('cars', \App\Http\Controllers\Admin\CarController::class);
    Route::resource('types', \App\Http\Controllers\Admin\TypeController::class);
    Route::resource('testimonials', \App\Http\Controllers\Admin\TestimonialController::class);
    Route::resource('teams', \App\Http\Controllers\Admin\TeamController::class);
    Route::resource('settings', \App\Http\Controllers\Admin\SettingController::class)->only(['index','store','update']);
    Route::resource('contacts', \App\Http\Controllers\Admin\ContactController::class)->only(['index','destroy']);
    Route::resource('bookings', \App\Http\Controllers\Admin\BookingController::class)->only(['index','destroy']);
    Route::resource('blogs', \App\Http\Controllers\Admin\BlogController::class);
});

