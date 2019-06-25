<?php

/**
 * Conexión a la base de datos
 */
class Database
{

    private static function conection(){
      $con = new mysqli('localhost', 'root', 'mysqladmin', 'directorio');
      //errores
      if (!$con) {
          echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
          echo "errno de depuración: " . $con->connect_errno() . PHP_EOL;
          echo "error de depuración: " . $con->connect_error() . PHP_EOL;
          exit;
      }
      return $con;
    }

    static function query($sql){
      $con = Database::conection();
      $result = $con->query($sql);
      $con->close();
      return $result;
    }
}


?>
