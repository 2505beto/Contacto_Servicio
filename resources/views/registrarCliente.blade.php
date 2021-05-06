@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Cliente</title>
</head>
<body class="">
<div class="container">
    <h1 class="text-center">Registro de Cliente</h1>
</div>
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="post" action="/registrar-cliente" class="row g-3">
                @csrf
                    <div class="col-md-6">
                    <label class="form-label col-form-label col-form-label-lg">Nombres</label>
                    <input class ="form-control" type="text" name="nombres" @if($errors->first('nombres')) style="border: 1px solid red" @endif/>
                    @if($errors->first('nombres'))
                    <span style="color: red">{{$errors->first('nombres')}}</span>
                    @endif
                    </div>
                    <div class="col-md-6">
                    <label class="col-sm-2 col-form-label col-form-label-lg">Apellidos</label>
                    <input class ="form-control" type="text" name="apellidos" @if($errors->first('apellidos')) style="border: 1px solid red" @endif/>
                    @if($errors->first('apellidos'))
                    <span style="color: red">{{$errors->first('apellidos')}}</span>
                    @endif
                    </div>
                    <div class="col-md-4">
                    <label class="form-label col-form-label col-form-label-lg">Fecha de Nacimiento</label>
                    <input class ="form-control" type="date" name="fechaNacimiento" @if($errors->first('fechaNacimiento')) style="border: 1px solid red" @endif/>
                    @if($errors->first('fechaNacimiento'))
                    <span style="color: red">{{$errors->first('fechaNacimiento')}}</span>
                    @endif
                    </div>
                    <div class="col-md-6">
                    <label class="form-label col-form-label col-form-label-lg">Correo Electronico</label>
                    <input class ="form-control" type="text" name="correo" @if($errors->first('correo')) style="border: 1px solid red" @endif/>
                    @if($errors->first('correo'))
                    <span style="color: red">{{$errors->first('correo')}}</span>
                    @endif
                    </div>
                    <div class="col-md-6">
                    <label class="form-label col-form-label col-form-label-lg">Contraseña</label>
                    <input class ="form-control" type="password"name="contraseña" @if($errors->first('contraseña')) style="border: 1px solid red" @endif/>
                    @if($errors->first('contraseña'))
                    <span style="color: red">{{$errors->first('contraseña')}}</span>
                    @endif
                    </div>
                    <div class="col-md-6">
                    <label class="form-label col-form-label col-form-label-lg">Direccion</label>
                    <input class ="form-control" type="text" name="direccion"  @if($errors->first('direccion')) style="border: 1px solid red" @endif/>
                    @if($errors->first('direccion'))
                    <span style="color: red">{{$errors->first('direccion')}}</span>
                    @endif
                    </div>
                    <div class="col-md-6">
                    <label class="form-label col-form-label col-form-label-lg">Telefono</label>
                    <input class ="form-control" type="text" maxlength="9" name="telefono" @if($errors->first('telefono')) style="border: 1px solid red" @endif/>
                    @if($errors->first('telefono'))
                    <span style="color: red">{{$errors->first('telefono')}}</span>
                    @endif
                    </div>
                    <div class="col-md-4">
                    <label class="form-label col-form-label col-form-label-lg">Sexo</label>
                    <select class="form-control" name="sexo" @if($errors->first('sexo')) style="border: 1px solid red" @endif>
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                    </select>
                    @if($errors->first('sexo'))
                    <span style="color: red">{{$errors->first('sexo')}}</span>
                    @endif
                    <br>
                    </div>
                    <div class="col-12">
                    <input type="submit" name="submit" value="Guardar" class="btn btn-primary"></td> 
                    </div>
                </form>
                </div>
         </div>
   </div>          
</body>
</html>
<style>
    body{
        background-color: #39e3b1;
    }
</style>
@endsection
