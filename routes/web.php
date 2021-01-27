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


    //Usuarios
    Route::resource('users','UsuarioController');
    Route::post('/usuario','UsuarioController@store')->name('usuario.store');
    Route::get('/','UsuarioController@index')->name("usuario.index");

    //login
    Route::post('login','LoginController@login')->name('login.login');    


    //login
    Route::get('logout','LoginController@logout')->name('login.logout');

    
Route::middleware('auth')->group(function()
{
    //Dashboard
    Route::get('/dashboard','DashBoardController@index')->name('dashboard.index');

    //Composições
    Route::resource('composicoes','ComposicaoController');
    Route::get('composicoes/{id}/edit','ComposicaoController@edit')->name('composicao.edit');
    Route::post('/composicoes','ComposicaoController@store')->name('composicao.store');
    Route::delete('/composicoes/{id}','ComposicaoController@destroy')->name('composicao.destroy');

    
});
