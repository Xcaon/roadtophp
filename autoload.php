<?php
// Hace un include de cada archivo que tenga en esa ruta
function controllers_autoload($classname){
    include 'controllers/' . $classname . '.php';
}

spl_autoload_register('controllers_autoload');

?>