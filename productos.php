<?php
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Reem+Kufi" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">


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
        
    
    
    <body>
    
    

    	<div class="Content">
 
      <header> 
             <div class="logo">
               <img src="images/logochico.png"> 
             </div>
             
           
          <div id='menuh'>
                                <ul>
                                  <li ><a href='index.php'>Inicio</a></li>
                                  
                                   <li><a href='servicios.html'>Servicios</a></li>
                                   <li class='active has-sub'><a href='productos.php'>Cat&aacute;logos</a></li>
                                    <li ><a href='mivi.html'>&iquest;Qui&eacute;nes somos?</a>
                                      
                                   </li>
                                  <li><a href='contacto.html'>Cont&aacute;ctanos</a></li>
                                  <li><a href="carrito.php" ><img id="IconCarr" src="images/carrito.png"></a></li>
                                </ul>
        </div>

        </header> 
        <p></p>
        <div class="block_articulos">
                               
          <table id="contenidoPro" width="991px" height="218px">
            <tr>
                      <th width="245" height="172" scope="col"> <h1>Aceros</h1>
                     <a ><img id="lknAce" src="images/img_aceros/aceros.JPG" name="Imagen4" width="214" height="149" border="0"></a>
                      </th>
                      <th width="245" scope="col"><h1>Construcción</h1>
                        <a ><img id="lknCon"src="images/img_aceros/construccion.JPG" name="Imagen5" width="209" height="149" border="0"></a>
                      </th>
                      <th width="248" scope="col"><h1>Eléctricos</h1>
                      <a ><img id="lknEle" src="images/img_aceros/electricos.JPG" name="Imagen6" width="209" height="149" border="0"></a>
                      </th>
                      <th width="233" scope="col" align="justify"><h1>Pinturas</h1>
                       <a > <img id="lknPin" src="images/img_aceros/pinturas.jpg" id="ipin" name="Imagen8" width="209" height="149" border="0"></a>
                       </th>
            </tr>                    
            <tr>
                      <th width="245" height="172" scope="col"><h1>Plomería</h1>
                        <a ><img id=lknPlo src="images/img_aceros/plomeria.jpg" name="Imagen4" width="214" height="149" border="0"></a>
                      </th>                     
            </tr>                   
          </table>                  
        </div>
        <div id="block_productos">
              <?php
              if (isset($_GET['id'])){
                if( $_GET['id'] == 1 )
                {echo "<span id='ErrorNoU'>Requiere iniciar sesión para realizar la compra <a href='index.php'>click Aqui </a></span>";}
              }?>
              
              
        </div>        
            
             </div> 

          </div> 
        
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
	
      <div id="contenedor2" style="display:none">
        <div id="flotante2" >
          <div id="iin1"><div id="iin2">Ferretería</div></div>
          <div id="close">Cerrar</div>
             <hr>
          <section id="ElementosP"></section> 
            <!--<section class="secFlota">
              <h1>  TUBO</h1>
              <p> <strong>Descripcion: </strong> Tubo de plastghfhfghgfhgfhgh ghfghgg gh gfh fgh ghgfhgf  ghghgfh whtrhwrh t t tytwyty wywtyt wty ico de 2mm </p>
              <span class="span1">$254.60</span>
              <input class="inFlota" type="text" name="" value="1">  
              <span class="span2">Pieza (s)</span>          
              <a href=""><img src="images/car.png">Comprar</a><br>
              <span class="span1"><strong>Disponibles: </strong></span>
              <span class="span1"><strong>Color : </strong></span>
            </section>   -->
           

        </div>    
      <div id="fondo2" ></div>
    </div>
    <script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62575927-1', 'auto');
  ga('send', 'pageview');

</script> 
    
    <script>
        $(document).ready(function(){
            if("" !== ""){
                $('#search').val("");
                $('#submit').click();
            }
        });
    </script>
    <script type="text/javascript">
      function cleanDiv(){
        $('block_productos').html();
      }
    </script>
 <div id='contenedor' style='display:none'>
    <div id='flotante' >
      <h1>Login</h1>
      <fieldset id='LogUser'>
        <form name='login' action='login.php' method='POST'>
          <input name='email' type='email' required value='Email' onBlur='if(this.value=='')this.value='Email'' onFocus='if(this.value=='Email')this.value='' '>
          <input name='pass' type='password' required value='Password' onBlur='if(this.value=="")this.value='Password'' onFocus='if(this.value=='Password')this.value='' '>
          <input type='submit' value='Login'><br>
          <a id='login-a' onClick='flotante(1)' >Registrarme</a>
        </form>
      </fieldset>
    </div>
      <div id='fondo' onClick='flotante(2)'></div>
  </div>"; 
  
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
     

</center></div></div></body></html>