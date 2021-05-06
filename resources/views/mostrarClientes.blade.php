@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Cliente</title>
</head>
<body>
<div class="container">
    <h1 class="text-center">Mostrar Cliente</h1>
</div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <table border="1" >
                    <tr class="table-primary">
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Correo Electronico</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Sexo</th>
                    </tr>

                @foreach($data as $cliente)
                <tr class="table-warning">
                <td>{{$cliente["nombres"]}}</td>
                <td>{{$cliente["apellidos"]}}</td>
                <td>{{$cliente["fechaNacimiento"]}}</td>
                <td>{{$cliente["correo"]}}</td>
                <td>{{$cliente["direccion"]}}</td>
                <td>{{$cliente["telefono"]}}</td>
                <td>{{$cliente["sexo"]}}</td>
                </tr>
            @endforeach
      </div>
    </div>
 </div>
</table>
</body>
<style>
    body{
        background-color: #39e3b1;
    }
</style>
@endsection