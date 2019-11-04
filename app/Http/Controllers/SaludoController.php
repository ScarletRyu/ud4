<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
        function saludo(){
            return view('tarea42/saludo');
        }
        function saludoNombre($nombre){
            return view('tarea42/saludoNombre',['nombre'=>$nombre]);
        }
        function saludoNombreColor($nombre,$color='0000FF'){
            return view('tarea42/saludoNombreColor',['nombre'=>$nombre, 'color'=>$color]);
        }
    }
