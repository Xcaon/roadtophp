<?php

// Requerimos el modelo Categoria
require_once 'models/categoria.php';

class categoriaController {

     function index(){
        // Comprobamos si es admin para acceder a esta pagina
        Utils::isAdmin();
        // Instanciamos un objeto
        $categoria = new Categoria();
        // Recuperamos todas las categorias
        $categorias = $categoria->getAll();

        require_once 'views/categoria/index.php';
    }

    function crear(){
        Utils::isAdmin();
        // Cargo la interfaz de crear.php
        require_once 'views/categoria/crear.php';
    }

    function save(){
        Utils::isAdmin();

        if (isset($_POST) && isset($_POST["nombre"]) ){
            // Guardar la categoria en bd
            $categoria = new Categoria();
            // Le asignamos el nombre al objeto
            $categoria->setNombre($_POST["nombre"]);
            // Lo guardamos con la funcion del modelo de Categoria
            $categoria->save();
    
        }





        header("Location:" .base_url. "categoria/index");
    }

}
?>