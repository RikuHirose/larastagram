<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => ['auth']], function () {
  Route::get('/', 'IndexController@index')->name('index');

  Route::resource('posts', 'PostController', [
      'only' => ['create', 'store']
  ]);

  Route::resource('users', 'UserController', [
      'only' => ['show']
  ]);

  Route::resource('comments', 'CommentController', [
      'only' => ['store']
  ]);

  Route::resource('likes', 'LikeController', [
      'only' => ['store']
  ]);

  Route::resource('follows', 'FollowController', [
      'only' => ['store', 'destroy']
  ]);
});
