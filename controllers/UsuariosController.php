<?php
include_once "Controller.php";
include_once "models/Usuarios.php";
/**
 * Controlador de Usuarios
 */
class UsuariosController extends Controller
{

  function __construct()
  {
    //Ejecución de controlador padre
    parent::__construct();
    //Código propio
    echo "Controlador de Usuarios <br />";
    //Construcción de un modelo
    $usuario = new Usuarios();
  }
}

?>
