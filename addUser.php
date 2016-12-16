<?php
$nombre=$_POST['name'];
$apellidos=$_POST['apellido'];
$pss=$_POST['password'];
$cell =$_POST['phone'];
$email =$_POST['email'];
$dir=$_POST['dir'];
include('conexion.php');     
    $sql = "insert into usuarios (nombre, apellidos, pass, celular,correo,direccion) values('".$nombre."', '".$apellidos."', '".$pss."' ,  ".$cell.", '".$email."' ,'".$dir."' )";
    
    if($conexion->query($sql)=== TRUE){
       // echo "Se ha insertado";
        header("Location:index.php");
    }else{
        echo "Error!!".$sql."<br/>";
    }

$conexion ->close();


?>