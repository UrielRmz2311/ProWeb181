<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\librocontroller;

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

Route::get('/', [librocontroller::class,'metodoprincipal'])->name('principal');
Route::get('/form', [librocontroller::class,'metodoformulario'])->name('formulario');

Route::post('/guardarlibro', [librocontroller::class,'guardarlibro'])->name('guardar');
