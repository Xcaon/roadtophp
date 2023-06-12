<?php
session_start();
require_once 'autoload.php';
require_once 'config/db.php';
require_once 'helpers/utils.php';
require_once 'config/parameters.php';
require_once 'views/layout/header.php';
require_once 'views/layout/sidebar.php';


// Mostrar errores
function showError(){
    $error = new errorController();
    // Llamamos a su funcion que es para imprimir el mensaje
        $error->index();
}

    // Parte del código que configura las rutas.
    if (isset($_GET['controller'])) { // Recogemos la variable de controller por Get y vemos que existe.
        $nombre_controlador = $_GET['controller'] . 'Controller'; // Recoge el valor del GET y le añade al string "Controller".
    } elseif ( !isset($_GET['controller']) && !isset($_GET['action'])  ) { // Si no existe ninguno de los dos.
        $nombre_controlador = controller_default; // entonces cargamos uno por defecto con esta constante definida en parameters.php.
    } else {
        echo "La pagina que buscar no existe";  // Si no existe el fichero, imprimimos este mensaje
        exit();
    }

    if (class_exists($nombre_controlador)) { // Comprobamos que exista esta clase
        $controlador = new $nombre_controlador(); // Instanciamos la clase
        // Comprobamos si existe el parametro action por GET
        // Comprobamos si existe dentro de esa clase el metodo action recogido por GET
        if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) { 
            $action = $_GET['action']; 
            $controlador->$action();
        } elseif ( !isset($_GET['controller']) && !isset($_GET['action']) ) {
            // Si no existe ninguno de los dos, cargamos por defecto este
            $action_default = action_default;
            $controlador->$action_default();
        } else {
            // Cualquier otra cosa, no existe la pagina...
            showError();
        }

    } else {
        // Cualquier otra cosa, no existe la pagina...
        showError();
    }

?>