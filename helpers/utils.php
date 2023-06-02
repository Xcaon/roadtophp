<?php


class Utils {


    public static function deleteSession($name){
        if (isset($_SESSION[$name])){
            $_SESSION[$name] = null;
            unset($_SESSION[$name]);
        }

        return $name;
    }

    public static function isAdmin(){
        if ( !isset($_SESSION["admin"]) ){
            header("Location: " . base_url);
        } else {
            return true;
        }

    }

    // ME DA EL FALLO AQUI
//     // Fatal error
// : Cannot declare class Categoria, because the name is already in use
    public static function showCategorias(){
        require_once 'models/categoria.php';
        $cat = new Categoria();
        $todos = $cat->getAll();
        return $todos;
    }

}



?>