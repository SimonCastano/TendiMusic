<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</head>

<body>

   <div class="navbar-fixed #b71c1c red darken-4">
     <nav>
    <div class="nav-wrapper #b71c1c red darken-4">
      <img class="brand-logo "   src="img/art music1.png" width="150" height="65" >
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
      <li> <?php 
 session_start();
 echo " <strong> Hola   $_SESSION[usuario]</strong>";
?></li> 
        <li><a href="administrar.php">Administrador</a></li>
        <li><a href="mensajes.php">Mensajes</a></li>
        <li><a class="grey-text text-lighten-3" href="productos A.php">Productos</a></li>
        
        <li> <form method="post" action="administrar.php">   <BUTTON name="btnsalir" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">power_settings_new</i></BUTTON></form></li>
         
        
      </ul>
     <ul class="side-nav #b71c1c red darken-4" id="mobile-demo">
      <li> <?php 
 session_start();
 echo "Hola <strong> $_SESSION[usuario]</strong>";
?></li>
        <li><a href="">Administrador</a></li>
        <li><a href="">Mensajes</a></li>
        <li><a  href="PRODUCTOS.html">Productos</a></li>
       <li> <form method="post" action="administrar.php">   <BUTTON name="btnsalir" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">power_settings_new</i></BUTTON></form></li>
           </ul>
           </div>
           </nav>
           </div>
  