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

Route::get('/view/{id}','TalentController@view');
Route::post('/store/{id}/{idd}','FaveController@store');

Route::post('/remove/{id}/{idd}','FaveController@remove');
