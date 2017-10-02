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

// 認証のルート定義…



Route::get('/', 'ArchiveController@index');
Route::get('/tag/{id}', 'TagController@page');
Route::get('/archive/{id}', 'ArchiveController@page');
Route::get('/user/{id}', 'UserController@page');
Route::get('/editer/{id}', 'EditerController@page');
Route::post('/editer/{id}', 'EditerController@change');
// editerは一部のユーザーnomiアクセス
Route::get('sitemap.xml', 'SitemapController@sitemap');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
