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

Route::get('/','Admin\StaticPagesController@index')->name('index');
Route::get('/help','Admin\StaticPagesController@help')->name('help');
Route::get('/about','Admin\StaticPagesController@about')->name('about');

Route::get('/signup','Admin\UsersController@create')->name('signup');

Route::resource('/users','Admin\UsersController');

