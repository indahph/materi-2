<?php

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
    return view('welcome');
});

Route::get('/informatika', function () {
    return view('informatika');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/recomended', function () {
    return view('rekomendasi');
});

Route::get('/login', function () {
    return view('login');
});