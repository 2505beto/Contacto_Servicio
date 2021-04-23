<table>
    <tr>
        <th>Nombre de Servicio</th>
    </tr>
    <form method="post" action="/registrar-servicio">
    @csrf
    <tr>
        <th><input type="text" name="nombreServicio"/></th>
    </tr>
    <tr>
        <td colspan="5"><input type="submit" name="submit" value="Guardar"></td>
    </tr>
    </form>
</table>