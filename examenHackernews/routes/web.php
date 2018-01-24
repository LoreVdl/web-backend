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

Auth::routes();
route::get('/', 'ArticlesController@index')->name('/');
Route::get('/home', 'ArticlesController@index')->name('home');
Route::get('/instructies', 'InstructieController@showInstructies')->name('instructies');

Route::get('/article/add', 'ArticlesController@addArticle')->middleware('auth')->name('addArticle');
Route::post('/article/insert', 'ArticlesController@insertArticle')->name('insertArticle');

Route::get('comments/{id}', 'CommentsController@showComments'); 
