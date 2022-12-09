<?php
    require_once("models/usuario.php");
    class usuarios_controller{

        public static function login() {
            $msg = isset($_GET["msg"])?$_GET["msg"]:"";
            $titulo_paginaprincipal = "Login de Usuario";
            require_once("views/templates/header.php");
            require_once("views/templates/navbar.php");
            require_once("views/usuarios/login.php");
            require_once("views/templates/footer.php");
        }

        public static function validar() {
            if ($_POST) {
            if (!isset($_POST["token"]) || !seg::validarSession($_POST["token"])) {
                echo "Acceso Restringido";
                exit();
            }
        $obj = new usuario($_POST["txtusuario"], $_POST["txtpassword"],"","");
        $resultado = $obj->validar_usuario();
        if (count($resultado)>0){
            $_SESSION["usuario"] = $resultado["usuario"];
            $_SESSION["nombre"] = $resultado["nombre"];
            if(isset($_POST["chkrecordar"])){ 
                setcookie("usuario", seg::codificar($resultado["usuario"]), time()+60);
                setcookie("nombre", seg::codificar($resultado["nombre"]), time()+60); 
            }

            header("location:index.php");
        } else
            header("location:index.php?c=".seg::codificar("usuarios")."&m=".seg::codificar("login"). "&msg=Usuario o Password incorrectos!!");
        }
    }

    public static function cerrar_sesion() {
            session_destroy();
            setcookie("usuario", seg::codificar($_SESSION["usuario"]), time()-60); 
            setcookie("nombre", seg::codificar($_SESSION["nombre"]), time()-60); 
            header("location:index.php");
    }

}

?>