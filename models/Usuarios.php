<?php
include_once "Model.php";
/**
 * Modelo de Usuarios
 */
class Usuarios extends Model
{
    private $id;
    private $username;
    private $password;

    public function __construct($id = null, $username = null, $password = null)
    {
        parent::__construct();
        // echo "Modelo de Usuarios <br />";
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
    }

    public function save()
    {
        if (!isset($this->id)) {
            $sql = "INSERT INTO usuarios (username, password, acceso) VALUES('$this->username','$this->password', NOW())";
        } else {
            $sql = "UPDATE `usuarios` SET `username`='$this->username',`password`='$this->password' WHERE id=$this->id";
        }
        return Database::query($sql);
    }

    public function getUsuarios()
    {
        $sql = "SELECT * FROM usuarios ORDER BY username ASC";
        return Database::query($sql);
    }

    public function getUsuarioById($id)
    {
        $sql = "SELECT * FROM usuarios WHERE id=$id";
        $usuario = Database::query($sql);
        return $usuario->fetch_object();
    }

    public function eliminar($id)
    {
        $sql = "DELETE FROM usuarios WHERE id=$id";
        return Database::query($sql);
    }

    public function getUsuarioLogin($username, $password)
    {
        $sql = "SELECT * FROM usuarios WHERE username='$username' AND password='$password'";
        $usuario = Database::query($sql);
        return $usuario->fetch_object();
    }
}
