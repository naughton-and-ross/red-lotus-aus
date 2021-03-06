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

Route::get('contact', 'ContactController@create');
Route::post('contact', 'ContactController@sendEmail');

Route::get('studio', 'StudioController@create');
Route::post('studio', 'StudioController@sendEmail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/shows', 'ShowController@view');
Route::post('/shows', 'ShowController@store');
