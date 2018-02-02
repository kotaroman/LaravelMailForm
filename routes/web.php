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

//Route::get('/', 'TopController@index')->name('top');
//Route::post('/', 'TopController@confirm');
//Route::resource('/', 'PhotoController')

Route::get('/', 'ContactController@index')->name('top');
// Route::post('/', 'ContactController@comfirm');
// Route::get('/comfirm', 'ContactController@comfirm')->name('comfirm');
Route::post('/comfirm', 'ContactController@comfirm')->name('comfirm');
Route::post('/post', 'ContactController@post');
Route::get('/done', 'ContactController@done')->name('done');
