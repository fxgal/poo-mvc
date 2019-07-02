<?php
include_once "Controller.php";
include_once "models/Usuarios.php";
/**
 * Controlador de Usuarios
 */
class UsuariosController extends Controller
{
    public function __construct()
    {
        //Ejecución de controlador padre
        parent::__construct();
        //Código propio
        echo "Constructor Controlador de Usuarios <br />";
        //Construcción de un modelo
    }

    public function index()
    {
        echo "Ejecutando acción index <br />";
        // $usuariosModel = new Usuarios();
        // $usuarios = $usuariosModel->getUsuarios();
        // var_dump($usuarios);
        // require_once('views/usuarios/index.php');
    }

    public function save()
    {
        echo "<br />Ejecutando save";
        $username = "juan";
        $password = "54651";
        $usuariosModel = new Usuarios($username, $password);
        $result = $usuariosModel->save();
    }
}
