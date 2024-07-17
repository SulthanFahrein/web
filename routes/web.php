<?php

use App\Http\Controllers\LoginController;
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

Route::get('/master', function () {
    return view('components.template.master');
});

Route::get('/home', function () {
    return view('components.pages.home');
});

Route::get('/property', function () {
    return view('components.pages.management');
});

Route::get('/schedule', function () {
    return view('components.pages.schedule');
});

Route::get('/data-user', function () {
    return view('components.pages.data-user');
});

Route::get('/admin', function () {
    return view('components.pages.admin');
});

Route::get('/login', function () {
    return view('components.pages.login');
});

Route::get('/', function () {
    return view('components.pages.landing');
});


Route::post('/login', [LoginController::class, 'postlogin'])->name('postlogin');

//Route::post('/home, [BiodataController::class, 'home']);