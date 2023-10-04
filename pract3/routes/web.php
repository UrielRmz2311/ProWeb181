<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Rutas de tipo petición
//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/form', function () {
//    return view('Formulario');
//});
//Route::get('/recuerdos', function () {
//    return view('Recuerdos');
//});


//Rutas tipo view
Route::view('/', 'welcome')->name('ElIni');
Route::view('/form', 'Formulario')->name('ElFormu');
Route::view('/recuerdos', 'Recuerdos')->name('ElMemories');


