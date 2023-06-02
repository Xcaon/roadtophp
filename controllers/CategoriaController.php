<?php

require 'models/categoria.php';

class categoriaController {

     function index(){
        Utils::isAdmin();
        $categoria = new Categoria();
        $categorias = $categoria->getAll();

        require_once 'views/categoria/index.php';
    }

    function crear(){
        Utils::isAdmin();


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