<?php 
if (session_status() == 1) session_start();
$_SESSION["nombre"] = "Jose Canahuate";
$_SESSION["correo"] = "josecanahuate05@gmail.com";
echo "Se crearon las secciones";
?>