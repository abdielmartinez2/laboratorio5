<?php 
    class usuario{
        private $usuario;
        private $password;
        private $salt;
        private $nombre;
        public function __construct($usuario, $password, $salt, $nombre)
        {
            $this->usuario = $usuario;
            $this->password = $password;
            $this->salt = $salt;
            $this->nombre = $nombre;
        }

        public function validar_usuario(){
            $tabla[]= ["usuario"=>"jcanahuate", "password"=>"fe8adb022475b3e235f8a30ae21b2e64ccdf560d", "salt"=>"sd7y4f65VCWF", "nombre"=>"Jose Canahuate"];
            $tabla[]= ["usuario"=>"jmiguel", "password"=>"79049a9a354e6028dfb96ee08f289df6d77c9b09", "salt"=>"3vvEJkdL408o", "nombre"=>"Jose Miguel"];
            $tabla[]= ["usuario"=>"mperez", "password"=>"8dbd4730e62bfc9eebf90ef2368129ff84072db1", "salt"=>"8Yn8qnSaFy07", "nombre"=>"Mario Perez"];
            foreach($tabla as $t){
                $pass = sha1($this->password.$t["salt"]);
                if ($this->usuario == $t["usuario"] && $pass == $t["password"])
                return $t;
            }
            return [];  
        }
    }

?>






