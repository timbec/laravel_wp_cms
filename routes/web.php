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

Route::put('/dashboard/blog/restore/{blog}', [
    'uses' => 'Backend\BlogController@restore',
    'as' => 'dashboard.blog.restore'
]);

Route::delete('/dashboard/blog/force-destroy/{blog}', [
    'uses' => 'Backend\BlogController@forceDestroy',
    'as' => 'dashboard.blog.force-destroy'
]);

Route::resource('/dashboard/blog', 'Backend\BlogController', [
    'as' => 'backend'
]);

Route::resource('/dashboard/categories', 'Backend\CategoriesController', [
    'as' => 'backend'
]);
