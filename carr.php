<?php
session_start();
	
//$name= 'pinturas';
include('conexion.php');

  if(isset($_SESSION['sesion'])){ 
    $data = $_SESSION["sesion"]; 

         $response = array();
       $sql='select * from temp where idUser = '.$data[0]['id']; 
       //echo"ini<br>";
                       $consulta=$conexion->query($sql);
                       if($consulta->num_rows > 0){ 
                            $response["ppro"] = array();
                            while($row=$consulta->fetch_assoc()){ 
                              $product["cant"] = $row["cant"];
                                        $sqla='select * from pro where id = '.$row['idPro'];                           
                                           $consultaa=$conexion->query($sqla);
                                           if($consultaa->num_rows > 0){ 
                                                while($roww=$consultaa->fetch_assoc()){ 
                                                    $product["nombre"] = strtoupper($roww["nom"]); 
                                                    $product["desca"] = strtoupper($roww["cont"]);
                                                     $product["pre"] = $roww["precio"];
                                                     $product["unid"] = $roww["unid"];
                                                     $product["color"] = $roww["color"];
                                                    $product["total"] = $row["cant"]*$roww["precio"];
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
  }}}
  else{
    header("Location:productos.php?res=1");
}   



?> 
 <!--<html>
   <body>

     <section class="secFlota">
         <h1>'+json.ppro[a].nombre+'</h1>
         <p> <strong>Descripcion: </strong> '+json.ppro[a].desca+'</p>
         <span class="span1">+json.ppro[a].cant X $+json.ppro[a].pre = $</span>
         <a href="elpro.php?id='+json.ppro[a].id+'" >
         <img src="images/tach.png">eliminar</a><br>
         <span class="span1"><strong>Presio unitario: +json.ppro[a].pre por +json.ppro[a].unid color: +json.ppro[a].color</strong></span>
     </section> 
   </body>
 </html>-->