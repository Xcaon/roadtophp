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
            // Instanciamos el usuario y le metemos todos los datos recogidos por el POST
            $usuario = new Usuario();
            // Le asignamos los valores
            $usuario->setNombre($_POST['nombre']);
            $usuario->setApellidos($_POST['apellidos']);
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['password']);
            $usuario->setRol($_POST['rol']);
            $usuario->setImagen($_POST['imagen']);

         
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
        // header("Location:".base_url.'usuario/registro');         
        echo $_SESSION['register'];
    }

}

