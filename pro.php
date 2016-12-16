<?php
  $name=$_GET['nombre'];
//$name= 'pinturas';
  include('conexion.php'); 

       $response = array();
       
       if($name==1)
       {
              $sql='select * from cat where cat = "pinturas"'; 
                       $consulta=$conexion->query($sql);
                       if($consulta->num_rows > 0){ 
                            $response["ppro"] = array();
                            while($row=$consulta->fetch_assoc()){ 

                                   $product = array();

                            $product["img"] = $row["img"];
                            $product["id"] = $row["id"];
                             array_push($response["ppro"], $product);
                            }
                            echo json_encode($response);
                       }else {
                         $response["success"] = 0;
                         $response["message"] = "No products found";
                      
                         // echo no users JSON
                         echo json_encode($response);
                     }
       }
       else if($name==2)
       {
              $sql='select * from cat where cat = "plomeria"'; 
                       $consulta=$conexion->query($sql);
                       if($consulta->num_rows > 0){ 
                            $response["ppro"] = array();
                            while($row=$consulta->fetch_assoc()){ 

                                   $product = array();
                                  $product["id"] = $row["id"];
                            $product["img"] = $row["img"];
                             array_push($response["ppro"], $product);
                            }
                            echo json_encode($response);
                       }else {
                         $response["success"] = 0;
                         $response["message"] = "No products found";
                      
                         // echo no users JSON
                         echo json_encode($response);
                     }
       }
       else if($name==3)
       {
              $sql='select * from cat where cat = "aceros"'; 
                       $consulta=$conexion->query($sql);
                       if($consulta->num_rows > 0){ 
                            $response["ppro"] = array();
                            while($row=$consulta->fetch_assoc()){ 

                                   $product = array();
                                  $product["id"] = $row["id"];
                            $product["img"] = $row["img"];
                             array_push($response["ppro"], $product);
                            }
                            echo json_encode($response);
                       }else {
                         $response["success"] = 0;
                         $response["message"] = "No products found";
                      
                         // echo no users JSON
                         echo json_encode($response);
                     }
       }
       else if($name==4)
       {
              $sql='select * from cat where cat = "construccion"'; 
                       $consulta=$conexion->query($sql);
                       if($consulta->num_rows > 0){ 
                            $response["ppro"] = array();
                            while($row=$consulta->fetch_assoc()){ 

                                   $product = array();
                                  $product["id"] = $row["id"];
                            $product["img"] = $row["img"];
                             array_push($response["ppro"], $product);
                            }
                            echo json_encode($response);
                       }else {
                         $response["success"] = 0;
                         $response["message"] = "No products found";
                      
                         // echo no users JSON
                         echo json_encode($response);
                     }
       }
       else if($name==5)
       {
              $sql='select * from cat where cat = "electrico"'; 
                       $consulta=$conexion->query($sql);
                       if($consulta->num_rows > 0){ 
                            $response["ppro"] = array();
                            while($row=$consulta->fetch_assoc()){ 

                                   $product = array();
                                  $product["id"] = $row["id"];
                            $product["img"] = $row["img"];
                             array_push($response["ppro"], $product);
                            }
                            echo json_encode($response);
                       }else {
                         $response["success"] = 0;
                         $response["message"] = "No products found";
                      
                         // echo no users JSON
                         echo json_encode($response);
                     }
       }
       else if($name==6)
       {
              $sql='select * from cat where cat = "plomeria"'; 
                       $consulta=$conexion->query($sql);
                       if($consulta->num_rows > 0){ 
                            $response["ppro"] = array();
                            while($row=$consulta->fetch_assoc()){ 

                                   $product = array();
                                  $product["id"] = $row["id"];
                            $product["img"] = $row["img"];
                             array_push($response["ppro"], $product);
                            }
                            echo json_encode($response);
                       }else {
                         $response["success"] = 0;
                         $response["message"] = "No products found";
                      
                         // echo no users JSON
                         echo json_encode($response);
                     }
       }

  
?>