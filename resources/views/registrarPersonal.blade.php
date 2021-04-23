<table>
    <tr>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Fecha de Nacimiento</th>
        <th>Correo Electronico</th>
        <th>Contraseña</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Sexo</th>
        <th>Costo de trabajo Por Hora</th>
    </tr>
    <form method="post" action="/registrar-personal">
    @csrf
    <tr>
        <th><input type="text" name="nombres"/></th>
        <th><input type="text" name="apellidos"/></th>
        <th><input type="date" name="fechaNacimiento"/></th>
        <th><input type="text" name="correo"/></th>
        <th><input type="password"name="contraseña"/></th>
        <th><input type="text" name="direccion"/></th>
        <th><input type="text" maxlength="9" name="telefono"/></th>
        <th><input type="text" name="sexo"/></th>
        <th><input type="number" name="costoPorHora"/></th>
    </tr>
    <tr>
        <td colspan="5"><input type="submit" name="submit" value="Guardar"></td>
    </tr>
    </form>
</table>