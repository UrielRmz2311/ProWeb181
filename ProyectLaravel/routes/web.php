<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diarioController;
 
Route::get('/', [diarioController::class,'metodoInicio'])->name('ElIni');

Route::get('/form', [diarioController::class,'metodoFormulario'])->name('Elformu');

Route::get('/recuerdos', [diarioController::class,'metodoRecuerdos'])->name('LosRecue');