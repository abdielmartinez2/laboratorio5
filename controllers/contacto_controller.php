<?php
require_once("models/contacto.php");
class contacto_controller{

    public static function crear(){
        if (isset($_SESSION["usuario"])){
        $titulo_paginaprincipal = "Creacion de Comentario de Contacto";
        require_once("views/templates/header.php");
        require_once("views/templates/navbar.php");
        require_once("views/contacto/crear.php");
        require_once("views/templates/footer.php");
    } else
    header("location:index.php?c=".seg::codificar("principal")."&m=".seg::codificar("error"));
    }

    public static function mostrar(){
        #var_dump($_POST);
        if ($_POST) {
            if (!isset($_POST["token"]) || !seg::validarSession($_POST["token"])) {
                echo "Acceso Restringido";
                exit();
            }
           
        empty($_POST["txtnombre_contacto"])?$error[0] = "El Nombre de Contacto es Necesario": $nombre = $_POST["txtnombre_contacto"];
        empty($_POST["txtcorreo_contacto"])?$error[1] = "El Correo de Contacto es Necesario": $correo = $_POST["txtcorreo_contacto"];
        empty($_POST["txtcomentario_contacto"])?$error[2] = "El Comentario de Contacto es Necesario": $comentario = $_POST["txtcomentario_contacto"];
            if (isset($error)){
                $titulo_paginaprincipal = "Creacion de Comentario de Contacto";
                require_once("views/templates/header.php");
                require_once("views/templates/navbar.php");
                require_once("views/contacto/crear.php");
                require_once("views/templates/footer.php");

            } else {
            $nombre = filter_var($nombre, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $correo = filter_var($correo, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $comentario = filter_var($comentario, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $contacto = new contacto($nombre, $correo, $comentario);
            $resultados = $contacto->getDatos();
            $titulo_paginaprincipal = "Mostrar Datos de Contacto";
            require_once("views/templates/header.php");
            require_once("views/templates/navbar.php");
            require_once("views/contacto/mostrar.php");
            require_once("views/templates/footer.php");
         }


        }
        
    }
}

?>