@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Personal</title>
</head>
<body>
<div class="container">
    <h1 class="text-center">Ingresar Servicio</h1>
</div>
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <form method="post" action="/registrar-servicio">
        @csrf
            <div class="col-md-6">
            <label class="form-label col-form-label col-form-label-lg">Ingrese el nombre de Servicio</label>
            <input class ="form-control" type="text" name="nombreServicio" @if($errors->first('nombreServicio')) style="border: 1px solid red" @endif/>
            @if($errors->first('nombreServicio'))
            <span style="color: red">{{$errors->first('nombreServicio')}}</span>
            @endif
            <br>
            </div>
            <div class="col-md-2">
                    <input type="submit" name="submit" value="Guardar" class="btn btn-primary"></td> 
                    </div>
            </form>
                </div>
         </div>
   </div>          
</body>
<style>
    body{
        background-color: #39e3b1;
    }
</style>
</html>
@endsection