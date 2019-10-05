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

Route::get('/create', 'TestController@create');
Route::post('/create', 'TestController@store');
Route::get('/confirm', 'TestController@showConfirm');
Route::post('/confirm', 'TestController@confirm');
Route::get('/complete', 'TestController@showComplete');
Route::post('/complete', 'TestController@complete');
