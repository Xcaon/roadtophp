<?php
require_once 'autoload.php';
require_once 'views/layout/header.php';
require_once 'views/layout/sidebar.php';


if (isset($_GET['controller'])) {
    // Recoge el get y le añade Controller
    $nombre_controlador = $_GET['controller'] . 'Controller';
} else {
    // Si no existe el fichero, imprimimos este mensaje
    echo "La pagina que buscar no existe";
    exit();
}

if (class_exists($nombre_controlador)) {
    $controlador = new $nombre_controlador();
    // Comprobamos en este fichero si ese metodo existe
    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
        $action = $_GET['action'];
        $controlador->$action();
    } else {
        echo "La pagina que buscas no existe";
    }

} else {
    echo "La pagina que buscar no existe";
}

?>