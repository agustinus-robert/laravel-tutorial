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
Route::get('/', 'image\main@index')->name('index.image');
Route::get('/image-intervention', 'image\main@index')->name('index.image');

Route::get('/database-when','laravels\databse@models_when');
Route::get('/database-sub-query','laravels\databse@sub_query');

Route::get('/charts-index','chart\charts@index_chart');
Route::get('/datatables-game','datatables\DatatablesController@index');

Route::get('/select2','select\select2C@index');