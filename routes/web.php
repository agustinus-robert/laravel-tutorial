<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Livewire\Control\Livewire;
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
Route::get('/local_store','memory\localStore@index');
Route::get('/tambah_data','form_masuk\form@index');

Route::get('/hydrate','hydrate\hydrate@index');
Route::get('/livewire', [\App\Http\Livewire\Control\Livewire::class, '__invoke']);
Route::get('/chat',[\App\Http\Livewire\Chat\Chatroom::class, '__invoke']);