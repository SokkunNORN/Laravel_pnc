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


Route::get('/', 'PageController@student');
Route::get('/student', 'PageController@student');
Route::get('/teacher', 'PageController@teacher');
Route::get('/room', 'PageController@room');
Route::get('/printable', 'PageController@printable');
Route::get('/statistics', 'PageController@statistics');