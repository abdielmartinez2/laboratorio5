<?php 
if (session_status() == 1) session_start();
setcookie("user", "JoseCanahuate", time()-60*60*24);

?>