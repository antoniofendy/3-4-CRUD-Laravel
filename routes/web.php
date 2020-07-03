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
Route::get('/pertanyaan/{id_pertanyaan}', 'TanyaController@show');

Route::get('/jawaban', 'JawabController@table');
Route::get('/jawaban/{id_pertanyaan}', 'JawabController@index');
Route::post('/jawaban/{id_pertanyaan}', 'JawabController@store');
Route::get('/beri-jawaban', 'JawabController@jawab');
Route::get('/beri-jawaban/{id_pertanyaan}', 'JawabController@berijawaban');
