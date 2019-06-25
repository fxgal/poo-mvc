<?php
include_once "Model.php";
/**
 * Modelo de Usuarios
 */
class Usuarios extends Model
{

  function __construct()
  {
    parent::__construct();
    echo "Modelo de Usuarios <br />";
  }

  function guardar(){
    echo "Guardando <br />";
  }
}

?>
