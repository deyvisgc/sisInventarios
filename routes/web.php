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
    return view('layaouts.Home');
});

Route::PATCH('Usuario/editPersona/{idPersona}','UsuarioController@updatePersona');
Route::PATCH('Usuario/editUser/{idusuarios}','UsuarioController@updateUser');
Route::get('auth/login','LoginControl@login')->name('profile');
Route::post('auth/login','LoginControl@logeo')->name('login');


Route::resource('Categorias','CategoriaController');
Route::resource('Departamentos','DepartamentosController');
Route::resource('Mobiliarios','MobiliarioController');
Route::resource('Roles','RolController');
Route::resource('Usuario','UsuarioController');
Route::resource('Reportes','ReporController');
Route::resource('Perfil','PerfilController');


