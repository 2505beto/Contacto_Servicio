<?php

namespace App\Http\Controllers;

use App\Models\Personal;

use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PersonalController extends Controller
{
    public function mostrar(){
        $resultados = Personal::all();
        return view("mostrarPersonal",["data"=>$resultados]);
    }

    public function registrar(Request $data){

        $data->validate(
            ['nombres' => 'required | regex:/^[\pL\s\-]+$/u' ,
            'apellidos' => 'required | regex:/^[\pL\s\-]+$/u',
            'fechaNacimiento' => 'required | date',
            'correo' => 'required | email',
            'contraseña' => 'required',
            'telefono' => 'required | digits:9',
            'direccion' => 'required',
            'sexo' => 'required',
            'costoPorHora' => 'required | numeric | between:0,99.99',
            ]);

        $personal = new Personal();
        $personal->nombres = $data["nombres"];
        $personal->apellidos = $data["apellidos"];
        $personal->fechaNacimiento = $data["fechaNacimiento"];
        $personal->correo = $data["correo"];
        $personal->contraseña =$data["contraseña"];
        $personal->direccion = $data["direccion"];
        $personal->telefono = $data["telefono"];
        $personal->sexo = $data["sexo"];
        $personal->costoPorHora = $data["costoPorHora"];
        $personal->id_servicio = $data["id_servicio"];
        $personal->save();
        return "Personal Guardado";
    }

    public function actualizar(){
        
    }
}
