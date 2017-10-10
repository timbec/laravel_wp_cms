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

Route::get('/', [
    'uses' => 'BlogController@index', 
    'as' => 'Blog'
]);

Auth::routes();

Route::get('/dashboard', 'HomeController@index');

Route::resource('/dashboard/blog', 'Backend\BlogController', [
    'as' => 'backend'
]);
