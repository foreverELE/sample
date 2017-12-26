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

Route::get('/','Admin\StaticPagesController@index');
Route::get('/help','Admin\StaticPagesController@help');
Route::get('/about','Admin\StaticPagesController@about');
