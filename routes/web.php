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

Route::get('/', 'HomeController@index');

Route::get('/pertanyaan', 'TanyaController@index');
Route::get('/pertanyaan/create', 'TanyaController@create');
Route::post('/pertanyaan', 'TanyaController@store');

Route::get('/jawaban', 'JawabController@table');
Route::get('/jawaban/{id_pertanyaan}', 'JawabController@index');
Route::get('/jawaban/jawab', 'JawabController@jawab');
