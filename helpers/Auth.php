<?php

/**
 * Autenticacion
 */
class Auth
{
    public static function verificar($controller, $action)
    {
        $public_url=[
          'usuarios'=>[
            'login','registro'
          ],
        ];
        if (!empty($_SESSION['usuario'])) {
            return true;
        } else {
            if (array_key_exists($controller, $public_url)) {
                if (in_array($action, $public_url[$controller])) {
                    return true;
                }
            }
        }
        return false;
    }
}
