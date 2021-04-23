<table border="1">
    <tr>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Fecha de Nacimiento</th>
        <th>Correo Electronico</th>
        
        
    </tr>

    <tr>
        @foreach($data as $administrador)
        <th>{{$administrador["nombres"]}}</th>
        <th>{{$administrador["apellidos"]}}</th>
        <th>{{$administrador["fechaNacimiento"]}}</th>
        <th>{{$administrador["correo"]}}</th>
        @endforeach
    </tr>

</table>