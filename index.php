<?php
    require_once("controllers/principal_controller.php");
    require_once("controllers/contacto_controller.php");
    require_once("controllers/usuarios_controller.php");
    require_once("utils/seg.php");

    #principal_controller::index();
    
    #var_dump($_GET);
    if (count($_GET)==0)
    call_user_func("principal_controller::index");
    else  {
        $controlador = seg::decodificar($_GET["c"]);
        $metodo = seg::decodificar($_GET["m"]);
        
        call_user_func($controlador."_controller::".$metodo);

    }

?>
