
<table border="1">
    <tr>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Fecha de Nacimiento</th>
        <th>Correo Electronico</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Sexo</th>
        <th>Costo por Hora Laboral</th>
        
    </tr>

    @foreach($data as $personal)
    <tr>
        <th>{{$personal["nombres"]}}</th>
        <th>{{$personal["apellidos"]}}</th>
        <th>{{$personal["fechaNacimiento"]}}</th>
        <th>{{$personal["correo"]}}</th>
        <th>{{$personal["direccion"]}}</th>
        <th>{{$personal["telefono"]}}</th>
        <th>{{$personal["sexo"]}}</th>
        <th>{{$personal["costoPorHora"]}}</th>
    </tr>
    @endforeach

</table>