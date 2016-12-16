<?php

	 $name=$_GET['id'];
//$name= 'pinturas';
  include('conexion.php'); 

       $response = array();
       $sql='select * from pro where ref = '.$name; 
       //echo"ini<br>";
                       $consulta=$conexion->query($sql);
                       if($consulta->num_rows > 0){ 
                            $response["ppro"] = array();
                            while($row=$consulta->fetch_assoc()){ 

                                   $product = array();
                           $product["nombre"] = strtoupper($row["nom"]);  
                           $product["pre"] = $row["precio"];
                            $product["cant"] = $row["cant"];
                            $product["color"] = $row["color"];
                            $product["unid"] = $row["unid"];
                            $product["id"] = $row["id"];
                            $product["desca"] = strtoupper($row["cont"]);
                             array_push($response["ppro"], $product);
                            // echo $row["cont"]."<br>";
                            }
                            echo json_encode($response);
                            //echo"Fin<br>";
                       }else {
                         $response["success"] = 0;
                         $response["message"] = "No products found";
                      
                         // echo no users JSON
                         echo json_encode($response);
                         //echo"ERR<br>";
                     }

?>