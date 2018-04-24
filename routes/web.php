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

Route::get('/', ['uses' => 'StaticPagesController@index', 'as' => 'staticpages.index']);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/admin/create', 'HomeController@createAdmin')->name('create.admin');

Route::post('/admin/delete', 'HomeController@deleteAdmin')->name('delete.admin');

Route::post('/admin/deletePost', 'PostController@deletePost')->name('admin.delete.post');

Route::post('/admin/createPost', 'PostController@createPost')->name('admin.create.post');

Route::get('/post', 'PostController@index')->name('post.index');
