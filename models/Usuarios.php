<?php
include_once "Model.php";
/**
 * Modelo de Usuarios
 */
class Usuarios extends Model
{
    private $username;
    private $password;

    public function __construct($username = null, $password = null)
    {
        parent::__construct();
        echo "Modelo de Usuarios <br />";
        $this->username = $username;
        $this->password = $password;
    }

    public function save()
    {
        $sql = "INSERT INTO usuarios (username, password, acceso) VALUES('$this->username',$this->password, NOW())";
        return Database::query($sql);
    }
    //
    // public function getUsuarios()
    // {
    //     $sql = "SELECT * FROM usuarios";
    //     return Database::query($sql);
    // }
}
