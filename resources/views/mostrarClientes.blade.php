<table border="1">
    <tr>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Fecha de Nacimiento</th>
        <th>Correo Electronico</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Sexo</th>
        
    </tr>

    <tr>
        @foreach($data as $cliente)
        <th>{{$cliente["nombres"]}}</th>
        <th>{{$cliente["apellidos"]}}</th>
        <th>{{$cliente["fechaNacimiento"]}}</th>
        <th>{{$cliente["correo"]}}</th>
        <th>{{$cliente["direccion"]}}</th>
        <th>{{$cliente["telefono"]}}</th>
        <th>{{$cliente["sexo"]}}</th>
        @endforeach
    </tr>

</table>