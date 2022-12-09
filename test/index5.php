<?php 
if (session_status() == 1) session_start();
if (isset($_COOKIE["user"]))
echo "el valor de la cookie es de ". $_COOKIE["user"];
else{
    echo "No hay Cookies Seteadas";
}


?>