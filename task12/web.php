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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
    // 課題４
    Route::get('profile/create', 'Admin\ProfileController@add')->middleware('auth');
    Route::get('profile/edit', 'Admin\ProfileController@edit')->middleware('auth');
});

// 課題１
// ルーティング

// 課題２
// コード記述及び変更の際に、記述量が少なくなる。

// 課題３
// Route::get('XXX', 'AAAController@bbb');

// 課題４
// 上記に記載。

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
