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

Route::get('/', 'QuranController@index');
Route::get('/tree', 'QuranController@tree');
Route::get('/as', 'QuranController@alphabets');
Route::get('/{sura}/{aya}', 'QuranController@aya');
Route::get('/{sura}', 'QuranController@sura');

Route::get('/andi/{sura}', 'AndiController@sura');
Route::get('/andi/{sura}/{aya}', 'AndiController@aya');
