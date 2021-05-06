<?php

namespace App\Http\Controllers;

use App\Models\Cliente;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function mostrar(){
        $resultados = Cliente::all();
        return view("mostrarClientes",["data"=>$resultados]);
    }

    public function registrar(Request $data){

        $data->validate(
            ['nombres' => 'required | regex:/^[\pL\s\-]+$/u' ,
            'apellidos' => 'required | regex:/^[\pL\s\-]+$/u',
            'fechaNacimiento' => 'required | date',
            'correo' => 'required | email',
            'contraseña' => 'required',
            'telefono' => 'required | digits:9',
            'sexo' => 'required',
            ]

    );

        $cliente = new Cliente();
        $cliente->nombres = $data["nombres"];
        $cliente->apellidos = $data["apellidos"];
        $cliente->fechaNacimiento = $data["fechaNacimiento"];
        $cliente->correo = $data["correo"];
        $cliente->contraseña = $data["contraseña"];
        $cliente->direccion = $data["direccion"];
        $cliente->telefono = $data["telefono"];
        $cliente->sexo = $data["sexo"];
        $cliente->save();
        return "Cliente Guardado";
    }

    public function actualizar(){
        
    }
}
