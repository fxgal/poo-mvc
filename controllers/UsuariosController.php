<?php
include_once "config/constantes.php";
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
        // echo "Constructor Controlador de Usuarios <br />";
        //Construcción de un modelo
    }

    public function index()
    {
        $usuariosModel = new Usuarios();
        $usuarios = $usuariosModel->getUsuarios();
        require_once('views/usuarios/index.php');
    }

    public function agregar()
    {
        require_once('views/usuarios/agregar.php');
    }

    public function save()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $usuariosModel = new Usuarios($username, $password);
        $result = $usuariosModel->save();
        header("Location: ".URL_BASE."url=usuarios/index");
    }

    public function ver()
    {
        $id = $_GET['id'];
        $usuariosModel = new Usuarios();
        $usuario = $usuariosModel->getUsuarioById($id);
        require_once('views/usuarios/ver.php');
    }
}
