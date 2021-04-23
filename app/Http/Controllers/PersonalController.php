<?php

namespace App\Http\Controllers;

use App\Models\Personal;

use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function mostrar(){
        $resultados = Personal::all();
        return view("mostrarPersonal",["data"=>$resultados]);
    }

    public function registrar(Request $data){
        $personal = new Personal();
        $personal->nombres = $data["nombres"];
        $personal->apellidos = $data["apellidos"];
        $personal->fechaNacimiento = $data["fechaNacimiento"];
        $personal->correo = $data["correo"];
        $personal->contraseña = $data["contraseña"];
        $personal->direccion = $data["direccion"];
        $personal->telefono = $data["telefono"];
        $personal->sexo = $data["sexo"];
        $personal->costoPorHora = $data["costoPorHora"];
        $personal->id_servicio = 1;
        $personal->save();
        return "Personal Guardado";
    }

    public function eliminar(){

    }

    public function actualizar(){
        
    }
}
