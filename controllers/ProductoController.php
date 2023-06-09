<?php
require_once 'models/producto.php';
class productoController {

   


    public function gestion(){

        Utils::isAdmin();

        $producto = new Producto();
        // Sacamos todos los productos
        $productos = $producto->getAll();


        require_once 'views/producto/gestion.php';
    }

    public function crear(){

        Utils::isAdmin();

        require_once 'views/producto/crear.php';

    }

    public function save(){
        Utils::isAdmin();

       if ( isset($_POST)){
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
            $precio = isset($_POST['precio']) ? $_POST['precio'] : false;
            $stock  = isset($_POST['stock']) ? $_POST['stock'] : false;
            $oferta = isset($_POST['oferta']) ? $_POST['oferta'] : false;
            $fecha  = isset($_POST['fecha']) ? $_POST['fecha'] : false;
            $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : false;
            // $imagen = isset($_POST['imagen']) ? $_POST['imagen'] : false;

            if ( $nombre && $descripcion && $precio && $stock && $oferta && $fecha && $categoria ){
              $producto = new Producto();
                $producto->setNombre($nombre);
                $producto->setDescripcion($descripcion);
                $producto->setPrecio($precio);
                $producto->setStock($stock);
                $producto->setOferta($oferta);
                $producto->setFecha($fecha);
                // $producto->setImagen($imagen);
                $producto->setCategoria_id($categoria);
                // Al crear el objeto y asignarle valores pues lo guardamos
                $save = $producto->save();
                // var_dump($producto);
                if ( $save ){
                    $_SESSION['producto'] = "complete";
                } else {
                    $_SESSION['producto'] = "failed";
                }

            } else {
                $_SESSION['producto'] = "failed";
            }

        } else {
            $_SESSION['producto'] = "failed";
        }
     
        header('Location:'. base_url . 'producto/gestion ');

    }

}

?>