<?php  session_start();
error_reporting(0);
if (empty($_SESSION['usuario'])) {
  header('location:Cpanel.php');
}
$salir=$_POST['btnsalir'];

if (isset($salir)) {
  session_destroy();
  header('location:Cpanel.php' );  
}

?>
<?php include('menu A.php'); ?>
<section class="form">
 <center><h1>¿Quieres cambiar tu contrasaeña?</h1></center>           
 <form class="col s12" action="administrar.php" method="post">
  <div class="row">
    <div class="row">
      <div class="input-field col s12 m12">
        <i class="material-icons prefix">fingerprint</i>
        <input type="password" name="cona" class="validate">
        <label for="icons-prefix">Actual Contraseña</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12 m12">
        <i class="material-icons prefix">fingerprint</i>
        <input type="password" name="conn" class="validate">
        <label for="icons-prefix">Nueva Contraseña</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12 m12">
        <i class="material-icons prefix">fingerprint</i>
        <input type="password" name="ccon" class="validate">
        <label for="icons-prefix">Confirmar Nueva Contraseña</label>
      </div>
    </div>
    <div>
      <center><button type="submit" name="btncambiara" class="waves-effect waves-light btn  #b71c1c red darken-4"><i class="material-icons left">security</i>Cambiar</button>
      </center>
    </div>
  </div>    
</section>  
<section>
 <center><h2>AGREGAR UN NUEVO </h2> <H3>ADMINISTRADOR</H3></center>
 <div class="row">    
  <div class="row">
    <div class="input-field col s6">
      <input placeholder="NOMBRE DE USUARIO" id="first_name" type="text" name="nom" class="validate">
      <label for="first_name">NOMBRE</label>
    </div>
    <div class="input-field col s6">
      <input name="pass" id="password" type="password" class="validate">
      <label for="password">CONTRASEÑA</label>
    </div>
  </div>
  <div class="row">
  </div>
  <center><button type="submit" name="btnagregar" class="waves-effect waves-light btn  #b71c1c red darken-4"><i class="material-icons left">security</i>Agregar</button><br>  <br>  <br>  <br>  <br>  <br>  
  </center>
  <center><strong>  <h2>Buscar o filtrar  </h2>  <H3>ADMINISTRADORES</H3></strong></center>
  <div class="row">    
    <div class="row">
      <div class="input-field col s6">
        <input placeholder="NOMBRE DE ADMINISTRADORES" id="first_name" type="text" name="txtfil" class="validate">
        <label for="first_name">NOMBRE DEL AMINISTRADOR</label>
      </div>
      <center><button type="submit" name="btnfiltro" class="waves-effect waves-light btn  #b71c1c red darken-4"><i class="material-icons left">find_in_page</i>Filtrar</button>
      </center>
    </div>
  </form>
  <?php  
  include('config/conexion.php');
  $fil=$_POST ['txtfil'];
  $Buscar=$_POST['btnfiltro'];
  $sql="SELECT * from admin WHERE user='$fil'";
  $ejecutar=$conexion->query($sql);
  echo "<table class='bordered'>
  <tr><th>NOMBRE</th><th>contrasaeña</th></th><th>Eliminar</th><th>Editar</th>";
  while ($filas=$ejecutar->fetch_row()) {
   echo "<tr><td>$filas[0]</td><td>$filas[1]</td><td><button class='waves-effect waves-light btn  #b71c1c red darken-4'>eliminar</button></td> <td><button class='waves-effect waves-light btn  #b71c1c red darken-4'>Editar</button></td>";    
 }
 echo "</table>";
 ?>
</section>
</ul>
</div>
</nav>
<body>




	

</body>


<script type="text/javascript">
  // Show sideNa
  $('.button-collapse').sideNav('show');
  // Hide sideNav
  $('.button-collapse').sideNav('hide');
  // Destroy sideNav
$('.button-collapse').sideNav('destroy');</script>

<script type="text/javascript">    $(".button-collapse").sideNav();</script>

<?php include('pie A.php') ?>




   <?php  
   include('config/conexion.php');
   $cambiar=$_POST['btncambiara'];
   $CONTRAACTUAL=$_POST['cona'];
   $conn=$_POST['conn'];
   $cconn=$_POST['cconn'];
   if (isset($cambiar)) {
    $sql="SELECT  pass FROM admin WHERE user='$_SESSION[usuario]'";  
    $ejecutar=$conexion->query($sql);
    $filas=$ejecutar->fetch_row();

    if($filas[0]==$CONTRAACTUAL){

      echo "<script>Materialize.toast('Contraseña correcta ', 4000,'green')</script>";
    }else{
      echo "<script>Materialize.toast('Contraseña incorrecta', 4000,'red')</script>";
    }
    if(empty($CONTRAACTUAL)|| empty($conn)|| empty($cconn)){
      echo "<script>// Materialize.toast(message, displayLength, className, completeCallback);
      Materialize.toast('INGRESE TODOS LOS CAMPOS', 4000) // 4000 is the duration of the toast
      </script>";
    }

    if($cconn==($conn)){

      echo "<script>Materialize.toast('Las contraseñas coinsiden ', 4000,'green')</script>";
    }else{

      echo "<script>Materialize.toast('Contraseñas NO coinsiden', 4000,'red')</script>";
    }

  }
    
    $sql="UPDATE  admin set pass='$conn' where user='$_SESSION[usuario]' and   pass='$CONTRAACTUAL'";
    if ($ejecutar = $conexion->query($sql)) {
      echo "<script>Materialize.toast('ACTUALIZADO CORRECTAMETE', 4000,'gree')</script>";
    }else{
      echo "<script>Materialize.toast('no se a ACTUALIZADO ', 4000,'red')</script>";
    }

  ?>
  <?php   
  include('config/conexion.php');
  $name=$_POST['nom'];
  $passw=$_POST['pass'];
  $Agregar=$_POST['btnagregar'];

  if(isset($Agregar)){
    $sql="INSERT INTO admin VALUES ('$name','$passw')"; 
    if ($ejecutar=$conexion->query ($sql)){
     echo "<script>Materialize.toast('Guardado correcto ', 4000,'green')</script>";
   } else{
    echo "<script>Materialize.toast('Error de guardado', 4000,'red')</script>";
  }
}
?> 

