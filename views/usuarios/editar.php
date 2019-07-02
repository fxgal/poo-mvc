<?php
include_once 'config/constantes.php';
?>
<h1>Editar Usuario</h1>
<form action="<?= URL_BASE ?>url=usuarios/save" method="POST">
  <input type="hidden" name="id" value="<?= $usuario->id ?>">
  <label for="username">Nombre de Usuario</label>
  <input type="text" name="username" value="<?= $usuario->username ?>">
  <label for="password">Clave de Acceso</label>
  <input type="password" name="password" value="<?= $usuario->password ?>">
  <button type="submit" name="button">Actualizar</button>
</form>
