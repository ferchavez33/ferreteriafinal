<?php
	session_start();
	$user=$_POST['email'];
	$pss=$_POST['pass'];
    $val=0;
    $val=$_GET['dat'];
    if($val == "'z1'"){
        session_destroy();
        header("Location:index.php");
    }else {
             include('conexion.php');     
    $sql = "select * from usuarios where correo='".$user."' and pass='".$pss."'";
    
    $consulta=$conexion->query($sql);    

    if($consulta->num_rows > 0){
        while($row=$consulta->fetch_assoc()){
        //echo "Sesión iniciada";
           // echo "Nom. ".$row['nombre']."Ap. ".$row['apellidos'];
        $val[]=array("id"=> $row['id'], "state"=>1);
        //echo "-".$val[1]["id"];
        $_SESSION['sesion']=$val;
        }

        $f=$_SESSION['sesion'];
        //echo "*".$f[0]['id'];
        header("Location:index.php");
        //echo "".$_SESSION['id'];

        exit();
    }else{
        //echo "Valores incorrectos";
        header("Location:index.php?errorus=si");
    }
    

    $conexion ->close();
    }


	

?>