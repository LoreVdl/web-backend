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

Route::group(['middleware' => ['web']], function() {
  Auth::routes();
  route::get('/', 'ArticlesController@index')->name('/');
  Route::get('/home', 'ArticlesController@index')->name('home');
  Route::get('/instructies', 'InstructieController@showInstructies')->name('instructies');

  Route::get('/article/add', 'ArticlesController@addArticle')->middleware('auth')->name('addArticle');
  Route::post('/article/insert', 'ArticlesController@insertArticle')->name('insertArticle');
  Route::get('article/edit/{id}', 'ArticlesController@editArticle')->middleware('auth');
  Route::post('article/edit/{id}', 'ArticlesController@updateArticle')->middleware('auth');
  Route::post('article/edit/{id}/confirm-delete', 'ArticlesController@delete');
  Route::get('article/edit/{id}/delete', 'ArticlesController@showConfirm');

  Route::get('comments/{id}', 'CommentsController@showComments')->name('comments');
  Route::post('/comments/insert/{id}', 'CommentsController@create')->name('insertComment');
  Route::get('comments/edit/{id}', 'CommentsController@editComment')->middleware('auth');
  Route::post('comments/edit/{id}', 'CommentsController@updateComment')->middleware('auth');
  Route::get('comments/{id}/delete', 'CommentsController@showDeleteBox');

  Route::post('vote/up/{id}', 'VotesController@voteUp');
  Route::post('vote/down/{id}', 'VotesController@voteDown');
});
