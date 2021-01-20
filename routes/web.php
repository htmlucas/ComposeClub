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
Route::post('login','LoginController@login')->name('login.login');
Route::get('/usuarios/perfil','PerfilController@index')->name('perfil.index');

Route::get('logout','LoginController@logout')->name('login.logout');



    Route::get('/novacomposicao','ComposicaoController@home')->name('composicao.home');



    Route::resource('users','UsuarioController');

    Route::get('/','UsuarioController@index')->name("usuario.index");

    Route::post('/usuario','UsuarioController@store')->name('usuario.store');

