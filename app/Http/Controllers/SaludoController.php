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

        //**** 4.3 *****/
        function createForm1Contacto (){
            return view('tarea43/form1');
        }
        public function storeForm1Contacto (Request $request)
        {
            $nom=$request->input("nombre")." ".$request->input("apellido");
            return view ("tarea42/saludoNombre",['nombre' => $nom,'color' => $request->input("Color")]);
        } 
        function createForm2Contacto (){
            return view('tarea43/form2');
        }    
        public function storeForm2Contacto ()
        {
            $nombre=request('nombre')." ".request('apellido');
            $json = File::get(base_path('database/data/saludos.json'));
            $idiomas = json_decode($json);
            return view ("tarea43/saludoForm",['nombre' => $nombre,'idiomas' => $idiomas]);
        } 
        function createForm3Contacto (){
            return view('tarea43/form3');
        }    
        public function storeForm3Contacto (Request $request)
        {
            
            $nombre=request('nombre')." ".request('apellido');
            $json = File::get(base_path('database/data/saludos.json'));
            $idiomas = json_decode($json);
            $request->flash();
            return view ("tarea43/form3",compact('nombre','idiomas'));
        } 


        function createForm4Contacto (){
            return view('tarea44/form4');
        } 

        public function storeform4Contacto(Request $request){
            $validatedData = $request->validate([
                'nombre' => 'required|string|min:2|max:15',
                'apellido' => 'required|string|min:2|max:20',
                'email' => 'required|email',
                'tlf' => ['nullable','regex:/^[9|6|7][0-9]{8}$/']
            ]);
    
            $nombre = $request->input('nombre');
            $apellido = $request->input('apellido');
            $email = $request->input('email');
            $tlf = $request->input('tlf');
            return view('tarea44/form4', ['nombre'=>$nombre, 'apellido'=>$apellido, 'email'=>$email, 'tlf'=>$tlf]);
}
    

//*** Con formRequest, segundo intento 4.4 ***/
        function createForm5Contacto (){
            return view('tarea44/form5');
}    
        function storeForm5Contacto (ContactoRequest $request)
        {
           
            $validated = $request->validated();
            $data = array('nombre' => $request->input("nombre"),
                        'apellido' => $request->input("apellido"),
                        'email' => $request->input("email"),
                        'telefono' => $request->input("telefono")
                    );  
                    //**Retornar la nueva vista dentro de 44 **/
            return view('tarea44/validateform')->with($data);     
        }
}


