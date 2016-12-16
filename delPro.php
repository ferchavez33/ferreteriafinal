<?php 
	session_start();
	$id=$_GET['id'];
$tot=0;
include('conexion.php');

		if(isset($_SESSION['sesion'])){ 
		    $data = $_SESSION["sesion"]; 

		    	$sql = "delete from temp where idUser = ".$data[0]['id'] ." and idPro =". $id;					
					if($conexion->query($sql)=== TRUE){
                        $sql='select * from pro where id='.$id; 
	                    $consulta=$conexion->query($sql);
	                       if($consulta->num_rows > 0){ 
	                            while($row=$consulta->fetch_assoc()){ 
	                            		$tot=$row['cant']+1;	       		
	                           }
	                            $sql = "update pro set cant=".$tot." where id=".$id;
										$consulta=$conexion->query($sql);
										
										if($conexion->query($sql)=== TRUE){
												header("Location:carrito.php");
												 
			                      		 }
			                      		 else {
			                      		 	header("Location:carrito.php?id=1");
			                    		}  	 	                                            
	                       }else {header("Location:carrito.php?id=1");
	                     	}
	                }else {header("Location:carrito.php?id=1");}
	                   

				$conexion ->close();  
		}
		else{
		   header("Location:productos.php?id=1");
		}
?>