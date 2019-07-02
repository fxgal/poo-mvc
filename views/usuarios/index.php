<a href="<?= URL_BASE ?>url=usuarios/agregar">Nuevo Usuario</a>
<table>
  <tr>
    <th>Id</th>
    <th>Nombre de Usuario</th>
    <th>Clave</th>
    <th>Acceso</th>
  </tr>
<?php
while ($usuario = $usuarios->fetch_object()) {
    ?>
    <tr>
      <td><?= $usuario->id ?></td>
      <td><?= $usuario->username ?></td>
      <td><?= $usuario->password ?></td>
      <td><?= $usuario->acceso ?></td>
    </tr>
    <?php
}
?>
</table>
