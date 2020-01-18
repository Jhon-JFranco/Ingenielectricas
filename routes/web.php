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
    return view('auth.login');
});


Route::resource('proveedores','ProveedoresController');
Route::resource('obras','ObrasController');
Route::resource('cargos','CargosController');
Route::resource('empleados','EmpleadosController');
Route::resource('usuarios','UsuariosController');
Route::resource('unidad_medida','Unidad_MedidaController');
Route::resource('implementos','ImplementosController');
Route::resource('pedidos','PedidosController');
Route::resource('servicios','ServiciosController');
Route::resource('roles','RolesController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
