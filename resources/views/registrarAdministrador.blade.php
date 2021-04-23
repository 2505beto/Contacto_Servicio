<table>
    <tr>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Fecha de Nacimiento</th>
        <th>Correo Electronico</th>
        <th>Contraseña</th>
    </tr>
    <form method="post" action="/registrar-administrador">
    @csrf
    <tr>
        <th><input type="text" name="nombres"/></th>
        <th><input type="text" name="apellidos"/></th>
        <th><input type="date" name="fechaNacimiento"/></th>
        <th><input type="text" name="correo"/></th>
        <th><input type="password"name="contraseña"/></th>
    </tr>
    <tr>
        <td colspan="5"><input type="submit" name="submit" value="Guardar"></td>
    </tr>
    </form>
</table>