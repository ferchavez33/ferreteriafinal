<?php

    $conexion = new mysqli("localhost","usuario","12345","fb");
    
    if($conexion->connect_errno){
     echo "Fallo al conectar a Mysql: (".$conexion->connect_errno.")"." : ".$mysqli->connect_error; 
    }
     //echo $conexion->host_info."\n";

?>