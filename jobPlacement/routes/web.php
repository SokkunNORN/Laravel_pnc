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


// ##################teacher###################
Route::get('/', 'PageController@logout');

Route::get('/home', 'PageController@managejob');

Route::get('/managejob', 'PageController@managejob');

Route::get('/jobpost', 'PageController@jobpost');

Route::get('/viewstudent', 'PageController@viewstudent');

Route::get('/logout', 'PageController@logout');

Route::get('/profile', 'PageController@profile');

Route::get('/approve', 'PageController@approve');

Route::get('/interview', 'PageController@interview');

Route::get('/setstudent', 'PageController@setStudent');

Route::get('/addpost', 'PageController@addPost');


// ####################student#########################
Route::get('/homestudent', 'PageStudentController@home');

Route::get('/apply', 'PageStudentController@apply');

Route::get('/candidate', 'PageStudentController@candidate');

Route::get('/comment', 'PageStudentController@comment');

Route::get('/interest', 'PageStudentController@interest');

Route::get('/jobpoststudent', 'PageStudentController@jobpost');

Route::get('/profilestudent', 'PageStudentController@profile');

Route::get('/register', 'PageStudentController@register');

