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
Route::get('/', function () {
    return view('start');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/sign', function () {
    return view('sign');
});

Route::get('/password', function () {
    return view('password');
});

Route::get('/recovery', function () {
    return view('recovery');
});

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/start', function () {
    return view('start');
});
Route::get('/Champions', function () {
    return view('Champions');
});


