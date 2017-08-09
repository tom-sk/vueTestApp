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





Route::get('/', 'IndexController@welcome')->name('welcome');
Route::get('/user/{user}', 'IndexController@user');

Route::get('user/thread/{thread}', 'IndexController@thread');

Route::post('/user/{name}/{email}/{id}', 'IndexController@postUpdateUser');
Route::post('/delete/user/{user}', 'IndexController@postDeleteUser');
