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
Route::get('/about', 'PagesController@about');
Route::get('/portfolio', 'PagesController@portfolio');
Route::get('/contact', 'PagesController@contact');

Route::get('/projects', 'PagesController@projects');
Route::get('/academia', 'PagesController@academia');
Route::get('/fitness', 'PagesController@fitness');
