<?php

use App\Http\Controllers\CompraController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/*Home*/
Route::get('/', 'HomeController@index')->name('home');

/*Página catagoria*/
Route::get('/categoria', 'ProductoController@categoria')->name('categoria');

/*Página de ofertas*/
Route::get('/oferta', 'ProductoController@oferta')->name('oferta');

/*Página de snows*/
Route::get('/snows', 'ProductoController@snows')->name('snows');

/*Página de esquis*/
Route::get('/esquis', 'ProductoController@esquis')->name('esquis');

/*Página de botas*/
Route::get('/botas', 'ProductoController@botas')->name('botas');

/*Página de ropa*/
Route::get('/ropa', 'ProductoController@ropa')->name('ropa');

/*Página de detalle*/
Route::get('/detalle{id}', 'ProductoController@detalle')->name('detalle');

/*Página de administrador*/
Route::get('/administrador', 'AdminController@administrador')->name('administrador');

/*Añadir productos*/
Route::get('/formAddProducto', 'AdminController@formAddProducto')->name('formAddProducto');
Route::post('/addProducto', 'AdminController@addProducto')->name('addProducto');

/*Editar productos*/
Route::get('/formEditProducto{producto_id}', 'AdminController@formEditProducto')->name('formEditProducto');
Route::post('/editProducto{producto_id}', 'AdminController@editProducto')->name('editProducto');

/*Eliminar producto*/
Route::post('/deleteProducto/{producto_id}', 'AdminController@deleteProducto')->name('deleteProducto');

/*Añadir admin*/
Route::get('/formAddUsuario', 'AdminController@formAddUsuario')->name('formAddUsuario');
Route::post('/addUsuario', 'AdminController@addUsuario')->name('addUsuario');


/*Editar admin*/
Route::get('/formEditUsuario{id}', 'AdminController@formEditUsuario')->name('formEditUsuario');
Route::get('/showAdmins', 'AdminController@showAdmins')->name('showAdmins');
Route::post('/editUsuario{id}', 'AdminController@editUsuario')->name('editUsuario');

/*Borrar administrador*/
Route::post('/deleteAdmin/{id}', 'AdminController@deleteAdmin')->name('deleteAdmin');

/*Cesta compra*/
Route::get('/cesta', 'CompraController@cesta')->name('cesta');
Route::get('/cesta/add/{id}', 'CompraController@add')->name('addCesta');

/*Buscador*/
Route::get('/buscador', 'HomeController@buscador')->name('buscador');

/*Ordenar*/
Route::get('/ordenar_{orden}', 'ProductoController@ordenar')->name('ordenar');

/*Filtro Marca*/
Route::get('/filtroMarca{marca_id}', 'ProductoController@filtroMarca')->name('filtroMarca');

/*Filtro color*/
Route::get('/filtroColor{color_id}', 'ProductoController@filtroColor')->name('filtroColor');

/*Comprar un producto*/
Route::post('/comprar', 'CompraController@comprar')->name('comprar');


/*EventController*/
//mostra totes les tasques
Route::get('eventos', 'EventController@index')->name('eventos');
//Mostra el formulari per afegir tasques
Route::get('eventos_form', 'EventController@evento_formulari')->name('eventos_form');
//Crear una tasca
Route::post('evento_crear', 'EventController@evento_crear')->name('evento_crear');
//Eliminar una tasca dterminada
Route::post('eventos_delete{id}', 'EventController@evento_eliminar')->name('evento_eliminar');
