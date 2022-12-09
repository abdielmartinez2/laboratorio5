<?php
    if (session_status() == 1) session_start();

class seg {
//metodos codificar & decodificar para encriptar los datos mostrados en la URL
    public static function codificar($p) {

//se le coloco base64_encode 2 veces para una doble encriptacion, esto hara los caracteres encriptados mas largos
        return base64_encode(base64_encode($p));
    }

    public static function decodificar($p) {
        return base64_decode(base64_decode($p));
    }

    //METODO PARA ENCRIPTAR CAMPOS OCULTOS
    public static function getToken() {
        if (isset($_SESSION["token"])) {
            return $_SESSION["token"]; 
        }
        
        $token = sha1(random_bytes(100));
        $_SESSION["token"] = $token;
        return $token;
        //el metodo random_bytes genera caracteres para encriptar datos
    }

    public static function validarSession($token) {
        #if ($token != $_SESSION["token"]);
        #!hash_equals compara variables -- se usa este metodo para mas seguridad que solo colocar !=
        if (!hash_equals($token, $_SESSION["token"]))
            return false;
            
        return true;
    }


}

?>