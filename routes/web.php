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

Route::get('/', 'pagesController@index')->name('index');
Route::get('/post', 'pagesController@post')->name('post');
Route::get('/tambah', 'pagesController@tambah')->name('tambah');
Route::post('/create', 'pagesController@create')->name('create');
Route::get('/halamanupdate', 'pagesController@halamanupdate')->name('update');
Route::post('/update', 'pagesController@update');
Route::get('/delete', 'pagesController@delete')->name('delete');

