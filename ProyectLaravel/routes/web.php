<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diarioController;


//Rutas individuales para controlador 
Route::get('/', [diarioController::class,'metodoInicio'])->name('ElIni');
Route::get('/form', [diarioController::class,'metodoFormulario'])->name('Elformu');
Route::get('/recuerdos', [diarioController::class,'metodoRecuerdos'])->name('LosRecue');

//Rutas para un request
Route::post('/guardarRecuerdo', [diarioController::class,'guardarRecuerdo'])->name('guardar');

//Rutas agrupadas por controlador
/*
Route::controller(diarioController::class)->group(function (){
    Route::get('/', 'metodoInicio')->name('ElIni');
    Route::get('/form', 'metodoFormulario')->name('Elformu');
    Route::get('/recuerdos', 'metodoRecuerdos')->name('LosRecue');
});
*/