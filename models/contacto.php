<?php
class contacto{
    private $nombre;
    private $correo;
    private $comentario;

    public function __construct($nombre, $correo, $comentario)
    {
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->comentario = $comentario;
    }

    public function getDatos(){
        return ["nombre"=>$this->nombre, "correo"=>$this->correo,"comentario"=>$this->comentario];

    }
}

?>
