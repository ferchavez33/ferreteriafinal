<?php
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
        <title>Ferreteria la bandera</title>
         <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
        <link rel="stylesheet" href="css/formoid-solid-blue.css" type="text/css" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>


        <!-- Favicon -->
        	<link rel="icon" type="image/jpeg" href="images/favicon.jpg">    
         <!--CSS-->
       		 <link rel="stylesheet" href="css/principal.css" type="text/css">           
            <link rel="stylesheet" href="css/menuv.css" type="text/css">
               <link rel="stylesheet" href="css/menuh.css" type="text/css">
            
            

   <script src="js/code.js"></script>
   <script src="js/script.js"></script>
    <script src="js/func.js"></script>
            
            
            <style type="text/css">
                
            .Content .contenido div {height: auto;width: 150px;}
	p { text-align:center; font-family:helvetica,verdana,open sans;color:#FFF; font-size: 12px;margin: 0;}
	td { margin-bottom:0px; margin-top:0px; }
	tr { margin-bottom:0px; margin-top:0px;}	
	table { border-collapse:collapse; margin-right:9px; }
.privacity{ color: #FFFFFF; } 
            </style>
           
         <!--JQuery-->
        
     </head>
    
    <body>
    
    	<div class="Content">
 
      <header> 
             <div class="logo">
               <img src="images/logochico.png"> 
             </div>
             <div class="search" align="right">

              

             </div>
             <style type="text/css">
               #IconCarr{
                left: 100%;
                right: 5px;
                cursor: pointer;
               }
             </style>
           
          <div id='menuh'>
                                <ul>
                                  <li ><a href='index.php'>Inicio</a></li>
                                  
                                   <li ><a href='servicios.html'>Servicios</a></li>
                                   <li><a href='productos.php'>Cat&aacute;logos</a></li>
                                    <li ><a href='mivi.html'>&iquest;Qui&eacute;nes somos?</a>
                                      
                                   </li>
                                  <li><a href='contacto.html'>Cont&aacute;ctanos</a></li>
                                  <li class='active has-sub'><a href="carrito.php" ><img id="IconCarr" src="images/carrito.png"></a></li>
                                </ul>
        </div>

        </header> 
        <div>
          <?php
                if(isset($_SESSION['sesion'])){   
                  $data = $_SESSION["sesion"];
                   include('conexion.php'); 
                    $sql = "select * from usuarios where id=".$data[0]['id'];
                      $consulta=$conexion->query($sql);
                          if($consulta->num_rows > 0){
                              while($row=$consulta->fetch_assoc()){ ?>
                        
                           <style type="text/css">
                             #wakawaka{
                              color: #34495E;
   font-family: 'Exo 2', sans-serif;
}
                           </style>
                          <fieldset id='dataUser'>
                          <h1 id="wakawaka">Datos de usuario</h1>
                            <strong>Nombre: </strong>
                            <input type="text" value="<?php echo $row['nombre'];?>"> 
                            <strong>Apellidos: </strong>
                            <input type="text" value="<?php echo $row["apellidos"];?>"><br>
                            <strong>Correo: </strong>
                            <input type="text" value="<?php echo $row["correo"];?>">
                            <strong>Dirección: </strong>
                            <input type="text" value="<?php echo $row["direccion"];?>"> 
                            <a id='CerrarSe' href="login.php?dat='z1'" >Cerrar Sesión</a>
                            <h1 id='referencia'><?php echo '$row["id"]';?></h1>
                          </fieldset> 
                  <?php                
                             }    }         
                      $conexion ->close();
                    }else{
                            header("Location:productos.php?id=1"); 
                   }?>

            <table id="ContComp">
             <tr id="ind">
               <td >Nombre </td>
               <td >Descripción</td>
               <td >Cantidad</td>
               <td >Tipo venta</td>
               <td >Precio</td>
               <td >Pagar</td>
               <td >color</td>
               <td>eliminar</td>
             </tr>
            <?php include('conexion.php');
                if(isset($_SESSION['sesion'])){ 
                  $data = $_SESSION["sesion"]; 
                  $pago=0;
                     $sql='select * from temp where idUser = '.$data[0]['id']; 
                                     $consulta=$conexion->query($sql);
                                     if($consulta->num_rows > 0){ 
                                          while($row=$consulta->fetch_assoc()){ 
                                                      $sqla='select * from pro where id = '.$row['idPro'];                           
                                                         $consultaa=$conexion->query($sqla);
                                                         if($consultaa->num_rows > 0){ 
                                                              while($roww=$consultaa->fetch_assoc()){ ?>
                                                              <tr id="ind2">
                                                                  <td ><?php echo "".strtoupper($roww["nom"]) ?> </td>
                                                                   <td ><?php echo "".strtoupper($roww["cont"])  ?></td>
                                                                   <td ><?php echo "".$row["cant"]  ?></td>
                                                                   <td ><?php  echo "".$roww["unid"]; ?></td>
                                                                   <td ><?php  echo "".$roww["precio"] ?></td>
                                                                    <?php  $totaL= $row["cant"]*$roww["precio"];?>
                                                                     <?php $pago = $pago + $totaL;
                                                                    ?>

                                                                   <td ><?php echo "".$totaL  ?></td>
                                                                   <td ><?php echo "". $roww["color"];   ?></td>
                                                                   <?php  echo "<td><a href='delPro.php?id=". $roww['id']."' ><img  src='images/tach.png' ></a></td>";?>                                                  
                                                              </tr>
                                           <?php 
                                          }
                                     }else {
                                   }
                }}}
              else{
                header("Location:productos.php?id=1");
            }   ?> 
            

           </table>

           <h1 id="PagarTO">TOTAL a pagar: <span><?php echo $pago; ?></span></h1>
           <?php
              if (isset($_GET['id'])){
                if( $_GET['id'] == 1 )
                {echo "<div id='wewe'><span id='ErrorNoU'>Elgo salio mal intente nuevamente</span></div>";}
              }?>
        </div>
 <style type="text/css">
 #wewe{
  background: white;
  text-align: center;
 }
 #PagarTO span{
   color: rgb(207, 0, 15);
  font-family: 'Exo 2', sans-serif;
 }
 #PagarTO{  
  font-family: 'Exo 2', sans-serif;
  background: white;
 }
 #ind2 img{
  cursor: pointer;
 }
 #ind2 td{
  border: 1px solid rgba(227,227,277,.5);
 }
 #ind2{
  background: white;
  border: 1px solid gray;
 }
 #ind td{
  border: 1px solid white;
 }
 #ind{
  font-size: 20px;
  font-family: 'Exo 2', sans-serif;

    border: 1px solid gray;
    background: #2C3E50;
    color: white;
 }
   #ContComp{
    text-align: center;
    width: 100%;
   }
 </style>

        
    </div> <!-- Fin Content -->
    
  	  <div class="footer">
      <p><font color="#FFFFFF">Ferreteria la bandera S.A. de C.V.</font></p>
      <p></p>
      <p><font color="#FFFFFF">Calle. 4 de mayo #902.</font> <br />
        <font color="#FFFFFF">Colonia Amp. Miguel de la madrid C.P 34046</font> <br />
        <font color="#FFFFFF">Durango, Dgo. </font><br />
        <font color="#FFFFFF">Telefono: (618) 202-96-42.</font> <br />
        <a href="privacidad.html" class="privacity">Aviso de Privacidad</a>

        </p>
             <center> <div class="social">
  <ul id="iconos">
      <li><a href="http://www.facebook.com/" target="_blank" title="Dale Me Gusta!" id="face" ></a></li>
      <li><a href="https://twitter.com/" target="_blank" title="Siguenos en Twitter " id="tweet"></a></li>
        </ul>
     
  </div></center>
    </div>
        <!-- ventana flotante-->
      <div id="contenedor" style="display:none">
        <div id="flotante" >
           <!--<h1>Ventana flotante</h1>
         <h3><a onClick="flotante(2)">Cerrar ventana</a></h3>
        </div>--> 
             
                <form class="formoid-solid-blue" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="POST" onSubmit="return Validar()" action="addUser.php">

                  <div class="title"><h2>Resgistrarse</h2></div>
                  <div class="element-name">
                      <label class="title"></label>
                      <span class="nameFirst">
                      <input placeholder=" Nombre" type="text" size="8" name="name" id="nameFirst"/>
                      <span class="icon-place"></span></span>

                      <span class="nameLast">
                          <input placeholder=" Apellidos" type="text" size="14" name="apellido" id="apellido"/>
                          <span class="icon-place"></span>
                      </span>
                  </div>
                  <div class="element-password">
                      <label class="title"></label>
                      <div class="item-cont">
                          <input class="large" id="pss1" type="password" name="password" value="" placeholder="Contraseña"/>
                          <span class="icon-place"></span>
                      </div>
                  </div>
                  <div class="element-password">
                      <label class="title"></label>
                      <div class="item-cont">
                          <input class="large" id="pss2" type="password"  value="" placeholder="Confirmar contraseña"/>
                          <span class="icon-place"></span>
                      </div>
                  </div>
                  <div class="element-phone">
                      <label class="title"></label>
                      <div class="item-cont">
                          <input class="large" type="tel" pattern="[+]?[\.\s\-\(\)\*\#0-9]{3,}" maxlength="24" name="phone" placeholder="Celular" value="" id="celular"/>
                          <span class="icon-place"></span>
                      </div>
                  </div>
                  <div class="element-email">
                      <label class="title"></label>
                      <div class="item-cont">
                          <input class="large" type="email" name="email" value="" placeholder="Correo Electronico" id="correo"/>
                          <span class="icon-place"></span>
                      </div>
                  </div>
                  <div class="element-input">
                      <label class="title"></label>
                      <div class="item-cont">
                          <input class="large" type="text" name="dir" placeholder="Dirección" id="direccion"/>
                          <span class="icon-place"></span>
                      </div>
                  </div>
                  <div ><span id="msjError"></span></div>
                  <div class="submit">
                      <input type="submit" value="Resgistarme"/>
                  </div>
              </form>

        </div> 
        <div id="fondo" onClick="flotante(2)"></div>
    </div>
	
<div id="contenedor2" style="display:none">
        <div id="flotante2" >
          <div id="iin1"><div id="iin2">Ferretería</div></div>
          <div id="close">Cerrar</div>
             <hr>
          <section id="ElementosP"></section> 
        </div>    
      <div id="fondo2" ></div>
    </div> 
    
    
          <script>
              $(document).ready(function(){
                  if("" !== ""){
                      $('#search').val("");
                      $('#submit').click();
                  }
              });
          </script>
          
         
    <script>
      function flotante(tipo){
        
        if (tipo==1){
        $('#contenedor').show();
          $('#flotante').animate({
            marginTop: "-152px"
          });
        }
        if (tipo==2){
          $('#flotante').animate({
            marginTop: "-756px"
          });
        setTimeout(function(){
        $('#contenedor').hide();
          
        },500)
        }

      }
    </script>
<style type="text/css">
  #CerrarSe{
    float: right;
    font-family: 'Varela Round', sans-serif;
    cursor: pointer;
    transition: all .5s;
  }
  #CerrarSe:hover{
    font-weight: bold;
    text-shadow: 2px 2px 2px #1dabb8;
  }
</style>
<div id="contenedor2" style="display:none">
        <div id="flotante2" >


</div>    
      <div id="fondo2" ></div>
    </div>

</body></html>