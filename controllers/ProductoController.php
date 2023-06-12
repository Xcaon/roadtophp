<?php
require_once 'models/producto.php';
class productoController {

   
    function index(){
        
        // // Instanciamos un objeto
         $pro = new Producto();
        // Recuperamos los productos ordenador para la pantalla de inicio
        $productos = $pro->getRandom(6);
        
        // Requerimos la vista para imprimirla
        require_once 'views/producto/destacados.php';
    }

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

    // Crear un producto
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
           

            //Guardar la imagen
            $imagen = isset($_POST['imagen']) ? $_POST['imagen'] : false;

            if ( $nombre && $descripcion && $precio && $stock && $oferta && $fecha && $categoria){
                $producto = new Producto();
                $producto->setNombre($nombre);
                $producto->setDescripcion($descripcion);
                $producto->setPrecio($precio);
                $producto->setStock($stock);
                $producto->setOferta($oferta);
                $producto->setFecha($fecha);
                // $producto->setImagen($imagen);
                $producto->setCategoria_id($categoria);

                // Guardar imagen
                // The global $_FILES will contain all the uploaded file information
                $file = $_FILES['imagen'];
                $filename = $file['name'];
                $mimetype = $file['type'];

                if ( $imagen || $mimetype == "image/jpg" || $mimetype == "image/jpeg" || $mimetype == "image/gif"){
                    
                    // Si no existe el directorio, lo creamos.
                    if (!is_dir('uploads/images')){
                        mkdir('uploads/images', 0777); // Creamos la carpeta.
                    }
                    // Mueve un archivo subido a una nueva ubicación.
                    move_uploaded_file($file['tmp_name'], 'uploads/images/'.$filename);
                    
                    $producto->setImagen($filename);
                } 

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

    public function editar(){
        
        Utils::isAdmin();

        require_once 'views/producto/editarProducto.php';

        

       
    }

    public function edit(){
        if ($_POST){
            $identificador = isset($_POST['id']) ? $_POST['id'] : false;
            $id = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
            $precio = isset($_POST['precio']) ? $_POST['precio'] : false;
            $stock  = isset($_POST['stock']) ? $_POST['stock'] : false;
            $oferta = isset($_POST['oferta']) ? $_POST['oferta'] : false;
            $fecha  = isset($_POST['fecha']) ? $_POST['fecha'] : false;
            $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : false;
            //Guardar la imagen
            $imagen = isset($_POST['imagen']) ? $_POST['imagen'] : false;

                if ( $id && $descripcion && $precio && $stock && $oferta && $fecha && $categoria){

                    $producto = new Producto();
                    $producto->setId($identificador);
                    $producto->setNombre($id);
                    $producto->setDescripcion($descripcion);
                    $producto->setPrecio($precio);
                    $producto->setStock($stock);
                    $producto->setOferta($oferta);
                    $producto->setFecha($fecha);
             
                    $producto->setCategoria_id($categoria); 


                    // Guardar imagen
                    // The global $_FILES will contain all the uploaded file information
                    $file = $_FILES['imagen'];
                    $filename = $file['name'];
                    $mimetype = $file['type'];

                    if ( $imagen || $mimetype == "image/jpg" || $mimetype == "image/jpeg" || $mimetype == "image/gif"){
                    
                        // Si no existe el directorio, lo creamos.
                        if (!is_dir('uploads/images')){
                            mkdir('uploads/images', 0777); // Creamos la carpeta.
                        }
                        // Mueve un archivo subido a una nueva ubicación.
                        move_uploaded_file($file['tmp_name'], 'uploads/images/'.$filename);
                        
                        $producto->setImagen($filename);
                    } 

                   
                   $editar =  $producto->editar();

                   if ($editar){
                        $_SESSION['edit'] = 'complete';
                   } else {
                        $_SESSION['edit'] = 'failed';
                   }
                }
                header('Location:'. base_url . 'producto/gestion ');
        }
    }

    public function eliminar(){
        Utils::isAdmin();

        if ( isset($_GET['id'])){
            $id = $_GET['id'];
            $producto = new producto();
            $producto->setId($id);
            $delete = $producto->delete();

            if ($delete){
                $_SESSION['delete'] = 'complete';
            } else {
                $_SESSION['delete'] = 'failed';
            }

        }

        header('Location:'. base_url . 'producto/gestion');
    }

}

?>