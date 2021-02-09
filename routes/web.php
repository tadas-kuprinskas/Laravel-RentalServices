<?php

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

Route::get('/', function () {
    return view('pages.index');
});

Auth::routes();
Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\Pages\HomeController::class, 'index'])->name('home');
Route::get('/about-us', [App\Http\Controllers\Pages\AboutUs::class, 'index'])->name('about');
Route::get('/company', [App\Http\Controllers\Pages\Company::class, 'index'])->name('company');
Route::get('/contact-us', [App\Http\Controllers\Pages\Contact::class, 'index'])->name('contact');
Route::get('/car-details', [App\Http\Controllers\CarDetail::class, 'index'])->name('car');

Route::resource('brands', App\Http\Controllers\BrandController::class);
Route::resource('clients', App\Http\Controllers\ClientController::class);
Route::resource('car_model', App\Http\Controllers\CarModelController::class);


