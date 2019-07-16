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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@About');


Route::get('/projects', 'ProjectsController@index');
Route::get('/createproject', 'ProjectsController@create');
Route::post('/projects', 'ProjectsController@store');


// Route::resource('/contacts', 'ContactsController');
Route::get('/contacts', 'ContactsController@create');
Route::post('/contacts', 'ContactsController@store');
