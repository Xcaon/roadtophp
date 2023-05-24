<?php
require_once 'models/usuario.php';

class usuarioController{


    public function index(){
        echo "Controlador Usuarios, Accion index";
    }

    public function registro(){
        require_once 'views/usuario/registro.php';
    }

    public function save(){

         if (isset($_POST)){

            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
            $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : null;
            $email = isset($_POST['email']) ? $_POST['email'] : null;
            $password = isset($_POST['password']) ? $_POST['password'] : null;
            $rol = isset($_POST['rol']) ? $_POST['rol'] : null;
            $imagen = isset($_POST['imagen']) ? $_POST['imagen'] : null;

            if ( $nombre && $apellidos && $email && $password && $rol && $imagen ){
                // Instanciamos el usuario y le metemos todos los datos recogidos por el POST
                $usuario = new Usuario();
                // Le asignamos los valores
                $usuario->setNombre($_POST['nombre']);
                $usuario->setApellidos($_POST['apellidos']);
                $usuario->setEmail($_POST['email']);
                $usuario->setPassword($_POST['password']);
                $usuario->setRol($_POST['rol']);
                $usuario->setImagen($_POST['imagen']);
            }
         
            // Llama a la CLASE USUARIO y ejecuta el metodo save, para guardar los datos
            $save = $usuario->save();

            // Si la consulta fue un exito devolvera complete
            if ($save) {
                    $_SESSION['register'] = "complete";
            } else {
                    $_SESSION['register'] = "failed";
            }



        } else {
            $_SESSION['register'] = "failed";
        }
        header("Location:".base_url.'usuario/registro');         
        echo $_SESSION['register'];
    }

    public function login(){
        if (isset($_POST)){
               // Identificar al usuario
               // Consulta a la base de datos 
                $usuario = new Usuario();
                if ( isset($_POST['email']) ){
                    $usuario->setEmail($_POST['email']);
                } else {
                    echo "El email esta vacio";
                }

                if ( isset($_POST['password'])){
                    $usuario->setPassword($_POST['password']);
                } else {
                    echo "El password esta vacio";
                }
                $identity = $usuario->login();
               // Crear un sesion
                if ( $identity && is_object($identity)){
                    $_SESSION['identity'] = $identity;
                
                    if ($identity->rol == 'admin'){
                        $_SESSION['admin'] = true;
                    }
                    
                } else {
                    $_SESSION['error_login'] = 'Identificación fallida';
                }
                die();
        }
        header("Location: " .base_url );
    }


    public function logout(){
        if ( isset($_SESSION['identity'])){
                utils::deleteSession("identity");
                utils::deleteSession("admin");
        }
        header("Location: ". base_url);
    }

}

