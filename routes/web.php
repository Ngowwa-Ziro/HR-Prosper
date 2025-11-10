<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

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
    return view('landing');
});

Route::get('/about-us', [LandingController::class, 'about'])->name('about');
Route::get('/home', [LandingController::class, 'home'])->name('home');
Route::get('/contact', [LandingController::class, 'contact'])->name('contact');
