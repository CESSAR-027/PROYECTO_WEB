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


//rutas
Route::get('/', 'InicioController@index');
Route::get('/inicio','InicioController@index');

Route::get('/about','AboutController@index');

Route::get('/shop','ShopController@index');

Route::get('/contact','ContactController@index');


//tablas
Route::get('/','MenuController@cargar');

//admin
Route::get('/admin/index','adminlte\IndexController@index');
//menu
Route::get('/admin/menu','adminlte\IndexController@ingresomenu');
Route::post('/admin/ingreso/menu','MenuController@guardarmenu');

//pie
//about
Route::get('/admin/about','adminlte\IndexController@ingresoabout');
Route::post('/admin/ingreso/about','MenuController@guardarabout');
//products
Route::get('/admin/products','adminlte\IndexController@ingresoproducts');
Route::post('/admin/ingreso/products','MenuController@guardarproducts');
//redes
Route::get('/admin/redes','adminlte\IndexController@ingresoredes');
Route::post('/admin/ingreso/redes','MenuController@guardarredes');
//information
Route::get('/admin/info','adminlte\IndexController@ingresoinfo');
Route::post('/admin/ingreso/info','MenuController@guardarinfo');


//home
//intro
Route::get('/admin/intro','adminlte\IndexController@ingresointro');
Route::post('/admin/ingreso/intro','InicioController@guardarintro');
//imagenes
Route::get('/admin/img','adminlte\IndexController@ingresoimg');
Route::post('/admin/ingreso/img','InicioController@guardarimg');
//titulo
Route::get('/admin/titulo','adminlte\IndexController@ingresotitulo');
Route::post('/admin/ingreso/titulo','InicioController@guardartitulo');
//secciones
//papeleria
Route::get('/admin/papel','adminlte\IndexController@ingresopapel');
Route::post('/admin/ingreso/papel','InicioController@guardarpapel');
//estudiantes
Route::get('/admin/estudiante','adminlte\IndexController@ingresoestudiante');
Route::post('/admin/ingreso/estudiante','InicioController@guardarestudiante');
//oficina
Route::get('/admin/oficina','adminlte\IndexController@ingresooficina');
Route::post('/admin/ingreso/oficina','InicioController@guardaroficina');


//about
//slide
Route::get('/admin/slide','adminlte\IndexController@ingresoslide');
Route::post('/admin/ingreso/slide','AboutController@guardarslide');
//about us
Route::get('/admin/aboutus','adminlte\IndexController@ingresoaboutus');
Route::post('/admin/ingreso/aboutus','AboutController@guardaraboutus');
//impresiones
Route::get('/admin/impresion','adminlte\IndexController@ingresoimpresion');
Route::post('/admin/ingreso/impresion','AboutController@guardarimpresion');
//suministros
Route::get('/admin/suministro','adminlte\IndexController@ingresosum');
Route::post('/admin/ingreso/suministro','AboutController@guardarsum');
//novedades
Route::get('/admin/novedad','adminlte\IndexController@ingresonovedad');
Route::post('/admin/ingreso/novedad','AboutController@guardarnovedad');


//shop
//titulo
Route::get('/admin/title','adminlte\IndexController@ingresotitle');
Route::post('/admin/ingreso/title','ShopController@guardartitle');
//producto
Route::get('/admin/producto','adminlte\IndexController@ingresoproduct');
Route::post('/admin/ingreso/producto','ShopController@guardarproduct');


//contact
//lista1
Route::get('/admin/contact1','adminlte\IndexController@ingresocontact1');
Route::post('/admin/ingreso/contact1','ContactController@guardarcontact1');
//lista2
Route::get('/admin/contact2','adminlte\IndexController@ingresocontact2');
Route::post('/admin/ingreso/contact2','ContactController@guardarcontact2');