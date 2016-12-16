<?php
session_start();
$id=$_GET['id'];
$tot=0;

	if(isset($_SESSION['sesion'])){  	  
	        $data = $_SESSION["sesion"];
	        include('conexion.php');     
			
			$sql = "insert into temp (idUser, idPro, cant) values(".$data[0]['id'].",".$id.",1)";
					
					if($conexion->query($sql)=== TRUE){
                        $sql='select * from pro where id='.$id; 
	                    $consulta=$conexion->query($sql);
	                       if($consulta->num_rows > 0){ 
	                            while($row=$consulta->fetch_assoc()){ 
	                            		$tot=$row['cant']-1;
	                            		 $sql = "update pro set cant=".$tot." where id=".$id;
								$consulta=$conexion->query($sql);
								if($conexion->query($sql)=== TRUE){
										header("Location:productos.php");
	                      		 }
	                      		 else {
	                      		 	echo "Error!!".$sql."<br/>";
	                    		}  	                            		
	                            	}	                                            
	                       }else {echo "Error!!".$sql."<br/>";
	                     	}
	                }else {echo "Error!!".$sql."<br/>";}
	                   

				$conexion ->close();  
    }
    else{
    	header("Location:productos.php?id=1");
    }
?>