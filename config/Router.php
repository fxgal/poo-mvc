<?php
include_once 'config/constantes.php';
include_once 'controllers/Controller.php';
// include_once 'helpers/Flash.php';
// include_once 'helpers/Auth.php';
/**
 * Router
 */
class Router
{
    public function __construct()
    {
        //Destructurar la URL
        $url = !empty($_GET['url'])?$_GET['url']:URL_DEFAULT;
        $url = explode('/', $url);
        $controllerName = isset($url[0])?$url[0]:CONTROLLER_DEFAULT;
        $actionName = isset($url[1])?$url[1]:ACTION_DEFAULT;
        //Validar sesiones
        // if (!Auth::verify($controllerName, $actionName)) {
        //     header("Location: ".URL_BASE.URL_DEFAULT);
        // }
        //Nombre de la clase controller
        $controllerName = ucfirst($url[0]).'Controller';
        $ruta = 'controllers/'.$controllerName.'.php';
        if (file_exists($ruta)) {
            include_once $ruta;
            $controller = new $controllerName;
            if (method_exists($controller, $actionName)) {
                $controller->$actionName();
            } else {
                // Flash::show('error', "La accion $actionName no existe");
            }
        } else {
            // Flash::show('error', "El controlador $controllerName no existe");
        }
    }
}
