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
    return view ('template.index');
});

Route::group(['prefix' => 'screens'], function () {
    Route::get('/listar', 'RulesController@listar');
    Route::get('/novo', 'RulesController@cadastrar');
    Route::post('/salvar', 'RulesController@store');
});