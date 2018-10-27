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
    return view('index');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('photos/test', 'PhotoController@test');

Route::resource('photos', 'PhotoController');

Route::resource('posts', 'PostController');

Route::get('search', 'SearchController@search');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

