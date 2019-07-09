<?php
include_once 'config/constantes.php';
?>
<div class="row">
  <div class="col-md-12 col-sm-12">
    <h1>Registro de Usuario</h1>
    <form action="<?= URL_BASE ?>url=usuarios/save" method="POST">
      <label for="username">Nombre de Usuario</label>
      <input type="text" name="username" value="" class="form-control">
      <label for="password">Clave de Acceso</label>
      <input type="password" name="password" value="" class="form-control">
      <button type="submit" name="button" class="btn btn-primary">Guardar</button>
    </form>
  </div>
</div>
