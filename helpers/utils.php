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
        // Si no es admin, lo volvemos al inicio
        if ( !isset($_SESSION["admin"]) ){
            header("Location: " . base_url);
        } else {
            return true; // Sino devolvemos true
        }

    }

    public static function showCategorias(){
        require_once 'models/categoria.php';
        
        $categoria = new Categoria();

        $categorias = $categoria->getAll();

        return $categorias;
    }

    public static function getOneProduct($id){
		require_once 'models/producto.php';

        $producto = new Producto();

        $pro = $producto->getOne($id);

        return $pro;
	}

    public static function getNombreIdCategoria($id){
        require_once 'models/producto.php';
        $cat = new Categoria();

        $nombre = $cat->getNombreIdCategoria($id);

        return $nombre;
    }

  

}



?>