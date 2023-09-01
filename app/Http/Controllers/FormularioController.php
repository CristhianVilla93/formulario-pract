<?php

namespace App\Http\Controllers;

use App\Models\Formulario;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function create (){
        return view('formulario');
    }

    public function store (Request $request){
      
        $formulario = new Formulario();
        $formulario->name = $request->name;
        $formulario->correo = $request->correo;
        $formulario->asunto = $request->asunto;
        $formulario->mensaje = $request->mensaje;

        $formulario->save();
    }
}
