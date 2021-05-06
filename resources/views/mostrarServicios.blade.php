@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Administrador</title>
</head>
<body>
<div class="container">
    <h1 class="text-center">Servicios</h1>
</div>
        <div class="container" >
            <div class="row justify-content-center">
                <div class="col-md-8">

            @foreach($data as $servicio)
            <form action="post" class="row g-3">
            <div class="col-md-4">
               <button class="btn btn-primary">{{$servicio["nombreServicio"]}}</button>
            </div>
            </form>
            <br>
            @endforeach

     </body>
<style>
    body{
        background-color: #39e3b1;
    }
</style>
@endsection