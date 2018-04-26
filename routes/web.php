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

Route::post('/admin/deleteUser', 'HomeController@deleteAdmin')->name('admin.delete.user');

Route::post('/admin/deletePost', 'PostController@deletePost')->name('admin.delete.post');

Route::post('/admin/createPost', 'PostController@createPost')->name('admin.create.post');

Route::get('/post', 'PostController@index')->name('post.index');

Route::get('/listCalon', 'AssistantController@listCAssistant')->name('list.cassistant');

Route::get('/listAssistant', 'AssistantController@listAssistant')->name('list.assistant');

Route::post('/admin/updatePost', "PostController@updatePost")->name('admin.update.post');

Route::post('/admin/updateUser', "HomeController@updateUser")->name('admin.update.user');

Route::get('/show/post/{id}', ['uses' => 'PostController@ShowPost', 'as' => 'show.post']);

Route::post('/post/comment', 'PostController@postComment')->name('post.comment');

Route::post('/post/deleteComment', 'PostController@deleteComment')->name('post.delete.comment');

Route::get('/divisi/ids', 'DivisiController@ids')->name('divisi.ids');
Route::get('/divisi/voip', 'DivisiController@voip')->name('divisi.voip');
Route::get('/divisi/web', 'DivisiController@web')->name('divisi.web');
Route::get('/divisi/iv', 'DivisiController@iv')->name('divisi.iv');
Route::get('/divisi/gt', 'DivisiController@gt')->name('divisi.gt');
Route::get('/divisi/gis', 'DivisiController@gis')->name('divisi.gis');

Route::get('/divisi/game', 'DivisiController@game')->name('divisi.game');
Route::get('/divisi/gis_map', 'DivisiController@gis_map')->name('divisi.gis_map');
