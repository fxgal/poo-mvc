<?php
include_once 'config/constantes.php';
?>
<h1>Inicio de Sesión</h1>
<form action="<?= URL_BASE ?>url=usuarios/login" method="POST">
  <label for="username">Nombre de Usuario</label>
  <input type="text" name="username" value="">
  <label for="password">Clave de Acceso</label>
  <input type="password" name="password" value="">
  <button type="submit" name="button">Guardar</button>
</form>
