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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('soporte','SoporteController@soporte');
/** store servicio_tecnico */
Route::post('soporte', 'SoporteController@store')->name('soporte.store');


Route::post('hosting/estudiante', 'HostingController@store')->name('hosting.store');
/** store hostings, tipo:hosting, plan:estudiante */
Route::get('hosting/estudiante', 'HostingController@hostingestudiante')->name('estudiante');
/** store hostings, tipo:hosting, plan:basico */
Route::get('hosting/basico', 'HostingController@hostingbasico');
/** store hostings, tipo:hosting, plan:emprendedor */
Route::get('hosting/emprendedor', 'HostingController@hostingemprendedor');
/** store hostings, tipo:bdd, plan:mysql_profesional */
Route::get('base-de-datos', 'HostingController@base_de_datos');


Route::get('vps/basico', 'HostingController@vpsbasico');
Route::get('vps/avanzado', 'HostingController@vpsavanzado');
Route::get('dominios/regional', 'HostingController@dominioregional');
Route::get('dominios/global', 'HostingController@dominioglobal');
Route::get('hosting','HostingController@hosting');
Route::get('development', 'DevelopmentController@development');