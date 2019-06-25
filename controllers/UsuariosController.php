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
    echo "Constructor Controlador de Usuarios <br />";
    //Construcción de un modelo
  }

  function index(){
    echo "Ejecutando acción index <br />";
    // $usuario = new Usuarios();
    // require_once('views/usuarios/index.php');
  }
}

?>
