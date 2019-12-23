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
Route::get('hosting','HostingController@hosting');
Route::get('development', 'DevelopmentController@development');
Route::get('hosting/estudiante', 'HostingController@hostingestudiante')->name('estudiante');
Route::get('hosting/basico', 'HostingController@hostingbasico');
Route::get('hosting/emprendedor', 'HostingController@hostingemprendedor');
Route::get('base-de-datos', 'HostingController@base_de_datos');
Route::get('vps/basico', 'HostingController@vpsbasico');
Route::get('vps/avanzado', 'HostingController@vpsavanzado');
Route::get('dominios/regional', 'HostingController@dominioregional');
Route::get('dominios/global', 'HostingController@dominioglobal');