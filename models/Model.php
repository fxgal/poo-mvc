<?php
include_once 'config/Database.php';
/**
 * Modelo Base
 */
class Model
{
    //Constructor
    public function __construct()
    {
    }

    public function query($sql)
    {
        return Database::query($sql);
    }
}
