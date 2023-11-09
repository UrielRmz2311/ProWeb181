<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controlador;

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

Route::get('/', [Controlador::class,'metodoInicio']);
Route::post('/guardarVideojuego', [Controlador::class,'guardarVideojuego']);
