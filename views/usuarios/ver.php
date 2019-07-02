<a href="<?= URL_BASE ?>url=usuarios/index">Volver</a>
<br>
<a href="<?= URL_BASE ?>url=usuarios/editar&id=<?= $usuario->id ?>">Editar</a>
<hr>
<table border="1">
  <caption>Detalles del Usuario #<?= $usuario->id ?></caption>
  <tr>
    <th>Nombre de Usuario</th>
    <td><?= $usuario->username ?></td>
  </tr>
  <tr>
    <th>Clave</th>
    <td><?= $usuario->password ?></td>
  </tr>
  <tr>
    <th>Acceso</th>
    <td><?= $usuario->acceso ?></td>
  </tr>
</table>
