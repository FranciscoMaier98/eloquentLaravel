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

Route::get('/', 'UsuariosController@index');

//Relação um para um
Route::get('/um-para-um', 'CarrosController@um_para_um');

//Relação um para muitos
Route::get('/um-para-muitos', 'TelefonesController@um_para_muitos');

//Relação muitos para muitos
Route::get('/muitos-para-muitos', 'UsuariosController@muitos_para_muitos');