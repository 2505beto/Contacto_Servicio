<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Servicios;

class ServiciosController extends Controller
{
    public function mostrar(){
        $resultados = Servicios::all();
        return view("mostrarServicios",["data"=>$resultados]);
    }

    public function registrar(Request $data){
        $servicios = new Servicios();
        $servicios->nombreServicio = $data["nombreServicio"];
        $servicios->save();
        return "Servicio Guardado";
    }

    public function eliminar(){

    }

}
