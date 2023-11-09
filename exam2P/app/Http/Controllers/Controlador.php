<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlador extends Controller
{
    public function metodoInicio(){
        return view('formgames');
    }

    public function guardarVideojuego(Request $req){
        $videojuego =  $req->input('txtNombre');
        $validated = $req->validate([
            'txtNombre' => 'required|min:5',
            'txtFecha' => 'required|date',
            'txtVendidos' => 'required|numeric|digits_between:0,7'
        ]);
        return redirect('/')->with('Confirmacion','El Videojuego ' . $videojuego . ' se guardo correctamente');
    }
}
