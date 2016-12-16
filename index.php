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
                                  <li class='active has-sub'><a href='index.html'>Inicio</a></li>
                                  
                                   <li><a href='servicios.html'>Servicios</a></li>
                                   <li><a href='productos.php'>Cat&aacute;logos</a></li>
                                    <li ><a href='mivi.html'>&iquest;Qui&eacute;nes somos?</a>
                                      
                                   </li>
                                  <li><a href='contacto.html'>Cont&aacute;ctanos</a></li>
                                  <li><a href="carrito.php" ><img id="IconCarr" src="images/carrito.png"></a></li>
                                </ul>
        </div>

        </header> 
        <p></p>
        <div class="contenido"> 
            
              <table width="206" height="400" align="left" style="margin-top:-2px;">
  						 <tbody><tr>
   							<td width="198" height="184"><center> <embed src="images/Credito/Nueva carpeta/index.html" width="200" height="200"></center> </td>
  						 </tr>
   						<tr>
    						<td width="198" height="200"><center><a href="/catalogos.php"><img src="images/Credito/c.jpg" width="184" height="184"></a></center></td>
   						</tr>
			  </tbody></table>
           
            <iframe id="IFPRINCIPAL" name="IFPRINCIPAL" src="images/slider/index.html" frameborder="0" scrolling="auto" marginheight="0" marginwidth="0" width="539px" height="405px"> </iframe>
          
        <div  id="lat">
          <div id="login-form">
              <?php
                if(isset($_SESSION['sesion'])){   
                  $data = $_SESSION["sesion"];
                   include('conexion.php'); 
                    $sql = "select * from usuarios where id=".$data[0]['id'];
                      $consulta=$conexion->query($sql);
                          if($consulta->num_rows > 0){
                              while($row=$consulta->fetch_assoc()){ ?>
                        
                           <h1>Datos</h1>
                          <fieldset id='dataUser'>
                            <strong>Nombre: </strong><br>
                            <input type="text" value="<?php echo $row['nombre'];?>"> <br>
                            <strong>Apellidos: </strong><br>
                            <input type="text" value="<?php echo $row["apellidos"];?>"><br>
                            <strong>Correo: </strong><br>
                            <input type="text" value="<?php echo $row["correo"];?>"><br>
                            <strong>Dirección: </strong><br>
                            <input type="text" value="<?php echo $row["direccion"];?>"> <br><br>
                            <a id='CerrarSe' href="login.php?dat='z1'" >Cerrar Sesión</a>
                            <h1 id='referencia'><?php echo '$row["id"]';?></h1>
                          </fieldset> 
                  <?php                
                             }    }         
                      $conexion ->close();
                    }else{?>
                    <h1>Login</h1>
                       <fieldset id='LogUser'>
                         <form name='login' action='login.php' method='POST'>
                           <input name='email' type='email' required value='Email' onBlur='if(this.value=='')this.value='Email'' onFocus='if(this.value=='Email')this.value='' '>
                           <input name='pass' type='password' required value='Password' onBlur='if(this.value=="")this.value='Password'' onFocus='if(this.value=='Password')this.value='' '>
                           <input type='submit' value='Login'><br>
                           <a id='login-a' onClick='flotante(1)' >Registrarme</a>
                         </form>
                       </fieldset>  
                <?php    }?>
             
                              

                      <!--
                          <fieldset id="LogUser">
                          <form name="login" action="login.php" method="POST">

                              <input name="email" type="email" required value="Email" onBlur="if(this.value=='')this.value='Email'" onFocus="if(this.value=='Email')this.value='' "> 

                              <input name="pass" type="password" required value="Password" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' "> 
                              <input type="submit" value="Login"><br>
                              <a id="login-a" onClick="flotante(1)" >Registrarme</a>
                          </form>                  
                      </fieldset> -->



    

             <!-- <h1>Login</h1>

              <fieldset id="LogUser">

                  <form name="login" action="login.php" method="POST">

                      <input name="email" type="email" required value="Email" onBlur="if(this.value=='')this.value='Email'" onFocus="if(this.value=='Email')this.value='' "> 

                      <input name="pass" type="password" required value="Password" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' "> 
                      <input type="submit" value="Login"><br>
                      <a id="login-a" onClick="flotante(1)" >Registrarme</a>
                  </form>                  
              </fieldset>             
-->
                

          </div> 
        </div>
                 
       </div><!-- END CONTENIDO-->
          <center>
    			<embed src="images/marcas/Logos 2.html" width="960px" height="230px">
		    </center>                  
     
 
         
        
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