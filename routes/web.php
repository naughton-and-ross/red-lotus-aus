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

Route::get('/music', function () {
    return view('music');
});

Route::get('/lyrics', function () {
    return view('lyrics');
});

Route::get('/shows', function () {
    return view('welcome');
});

Route::get('/store', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('welcome');
});
