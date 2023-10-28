<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormLibros;

class librocontroller extends Controller
{
    public function metodoprincipal(){
        return view('principal');
    }
    public function metodoformulario(){
        return view('formulario');
    }
    public function guardarlibro(validadorFormLibros $req){
        return redirect('/form')->with('Confirmacion','El libro se guardo correctamente');
    }

}
