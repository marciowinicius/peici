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
Route::get('/sobre', function () {
    return view('avulsos/sobre');
});
Route::get('/carreira', function () {
    return view('avulsos/carreira');
});
Route::get('/empresas', function () {
    return view('avulsos/empresas');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
