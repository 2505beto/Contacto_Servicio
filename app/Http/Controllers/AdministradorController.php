<?php

namespace App\Http\Controllers;

use App\Models\Administrador;

use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    public function mostrar(){
        $resultados = Administrador::all();
        return view("mostrarAdministrador",["data"=>$resultados]);
    }

    public function registrar(Request $data){

        $data->validate(
                ['nombres' => 'required | regex:/^[\pL\s\-]+$/u' ,
                'apellidos' => 'required | regex:/^[\pL\s\-]+$/u',
                'fechaNacimiento' => 'required | date',
                'correo' => 'required | email',
                'contraseña' => 'required',
                ]

        );
        $administrador = new Administrador();
        $administrador->nombres = $data["nombres"];
        $administrador->apellidos = $data["apellidos"];
        $administrador->fechaNacimiento = $data["fechaNacimiento"];
        $administrador->correo = $data["correo"];
        $administrador->contraseña = $data["contraseña"];
        $administrador->save();
        return "Administrador Guardado";
    }


}
