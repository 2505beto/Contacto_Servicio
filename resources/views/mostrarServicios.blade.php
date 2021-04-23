<table border="1">
    <tr>
        <th>Nombre de Servicio</th>
        
    </tr>

    <tr>
        @foreach($data as $servicio)
        <th>{{$servicio["nombreServicio"]}}</th>
        @endforeach
    </tr>

</table>