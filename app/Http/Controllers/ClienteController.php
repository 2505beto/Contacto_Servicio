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

    public function eliminar(){

    }

    public function actualizar(){
        
    }
}
