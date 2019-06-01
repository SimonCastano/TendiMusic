<?php
ob_start();
?>
 <!DOCTYPE html>
  <html>
  <meta charset="utf-8">
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <script type="text/javascript">$(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
  });
        
</script>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>


 







    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

        
        <script type="text/javascript"> $(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
  });</script>

      <SECTION class="header">
      <center><h2>Cpanel</h2></center>
      <center><p>INICIA SECION </p></center>
      <form class="col s12" action="Cpanel.php" method="post"><br><br><br><br><br>

      <div class="row">
    
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input name="name" id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">User Name</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">fingerprint</i>
          <input name="pass" id="icon_telephone" type="password" class="validate">
          <label for="icon_telephone">Contraseña</label>
        </div>
      </div>
    
  </div><br><br>


  <center> <button  class="btn waves-effect waves-light  #b71c1c red darken-4" type="submit" name="action">enviar
    <i class="material-icons right">send</i>
 </button> </center> </form>
    <?php
  include('config/conexion.php');
  error_reporting(0);
  session_start();
   $nom=$_POST['name'];
   $contra=$_POST['pass'];
   $guardar=$_POST['action'];
   
   
   if(isset($guardar)){
        $sql="SELECT * FROM admin  WHERE user='$nom' and pass='$contra'";         
          $ejecutar=$conexion->query($sql);
          $filas=$ejecutar-> fetch_row();
          if(empty($nom)|| empty($contra)){
        echo "<script>// Materialize.toast(message, displayLength, className, completeCallback);
  Materialize.toast('INGRESE TODOS LOS CAMPOS', 4000) // 4000 is the duration of the toast
           </script>";
      }
      else{
       if ($filas[0]==$nom and  $filas[1]==$contra){
        $_SESSION ['usuario']=$nom;
        header('location:administrar.php');
      }else{
          echo "<script>// Materialize.toast(message, displayLength, className, completeCallback red);
  Materialize.toast('USUARIO O Contraseña INCORECTOS', 4000) // 4000 is the duration of the toast
           </script>";

      }

       }



      }
   
?>

        
  <br><br>      
        

    <footer id="footer" class="page-footer #b71c1c red darken-4">
          <div class="container #b71c1c red darken-4">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Gracias por visitarnos</h5>
               <p class="grey-text text-lighten-4">Esperamos que te halla gustado nuestra pagina y que hubiese  sido de utilidad</p>
              </div>                                                                                                                                                                                                                                                                                                                                                    
              <div class="col l4 offset-l2 s12 #b71c1c red darken-4">
                <h5 class="white-text">Sigue explorando</h5>
                <ul class="#b71c1c red darken-4">
                  <li><a class="grey-text text-lighten-3" href="index.html">INICIO</a></li>
        <li><a class="grey-text text-lighten-3" href="CONTACTOS.php">CONTACTOS</a></li>
        <li><a class="grey-text text-lighten-3" href="PRODUCTOS.php">PRODUCTOS</a></li>
        <li><a class="grey-text text-lighten-3" href="QUIENES SOMOS.html">QUIENES SOMOS</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2017 Copyright  simón castaño-scr_simon
            
            </div>
          </div>
        </footer>
        
  </html>
 <?php  ob_end_flush();  ?>