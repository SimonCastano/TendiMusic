<?php  session_start();
error_reporting(0);

if (empty($_SESSION['usuario'])) {
  header('location:Cpanel.php');
}


?>

<?php include('menu A.php'); ?>

<CENTER> <h3><strong> NUEVOS MENSAJES</strong></h3>  </CENTER>
<form method="post" action="reportes.php"  >


  <form method="post" action="mensajes.php">


    <section class="contenido">
      <h4>Tus Mensajes</h4>
      <table class="bordered">
        <tr></tr><th>Nombre</th><th>Telefono</th><th>Email</th><th>Mensaje</th><th> Fecha</th><th>Responder</th></tr>

        <?php 
        include('config/conexion.php');

        $sql="SELECT * FROM form ORDER BY codigo desc";
        $ejecutar=$conexion->query($sql);




        while($filas=$ejecutar->fetch_row()){
          echo "<tr><td>$filas[1]</td><td>$filas[2]</td><td>$filas[3]</td><td>".substr($filas[4],0,12 )."..........</td><td>$filas[5]</td><td><button name='btnver' value='$filas[3]'  class='btn waves-effect waves-light  red darken-4'><i class='material-icons
          '>reply   </i>VER</button></td></tr>";
        }


        ?>
        <?php 
        include('config/conexion.php');


        if(isset($_POST['btnver'])){
          session_start();


          $sql2="SELECT * FROM form where correo ='$_POST[btnver]'";
          $ejecutar2=$conexion->query($sql2);
          $filas2=$ejecutar2->fetch_row();
          echo $filas[3];
          header('location:responder.php');
          $_SESSION['email']=$filas2[3];
          $_SESSION['fecha']=$filas2[5];
          $_SESSION['telefono']=$filas2[2];
          $_SESSION['mensaje']=$filas2[4];

        }

        ?>
      </table>

    </section> 


  <article class="">
   <center>
    <h2>Aqui elije un rago de fechas<br> en la cual se basara el reporte</h2></center>
    <center>  <div class="row  #eeeeee grey lighten-3">
      <div class="col s12 m6">
        <div>
          <center><div class="row"> 
            <div class="input-field col s6 m12">
              <i class="material-icons prefix">date_range</i>          
              <input name="fecha1" type="text" class="datepicker validate">
              <label for="icons-prefix">Fecha de iniio del reporte</label>
            </div>

            <div> 

              <div class="input-field col s6 m12    ">
                <i class="material-icons prefix">date_range</i>          
                <input name="fecha2" type="text" class="datepicker validate">
                <label for="icons-prefix">Fecha para el fin del reporte </label>
              </div>
            </div>

            <div>
             <center> <input type="submit" name="generar" title="descargar reporte" class="waves-effect waves-light btn-large pulse"></center></center> 
           </center>

         </div>
       </div>
     </center>
   </div>
 </div>
</div>

</article>


           <br>  <br>  <br>    </center> 

       </div>



     </article>

     <?php   
     include('config/conexion.php');
     $Fecha1=$_POST['fecha1'];
     $Fecha2=$_POST['fecha2'];

     if (isset($_POST['generar'])) {
       header('Content-Type:text/csv; charset-latin1');
       header('Content-Disposition: attachment; filename="Reportes.csv');

       $salida=fopen('php://output', 'w');
       fputcsv($salida, array('nombre','telefono','email','mensaje','fecha_de_llegada'));
       $reportesCsv=$conexion->query("SELECT * FROM form where fecha BETWEEN $Fecha1 and $Fecha2 '");
       while ($filaR=$reportesCsv->fetch_assoc()) 
        ftputcsv($salida,  array($filaR['nombre'],
          $filaR['telefono'],
          $filaR['email'],
          $filaR['mensaje'],
          $filaR['fecha_de_llegada']));                       
    }
    ?>
 </form>







    <?php include('pie A.php') ?>

    <script type="text/javascript">
  // Show sideNa
  $('.button-collapse').sideNav('show');
  // Hide sideNav
  $('.button-collapse').sideNav('hide');
  // Destroy sideNav
$('.button-collapse').sideNav('destroy');</script>

<script type="text/javascript">    $(".button-collapse").sideNav();</script>


<?php 
$salir=$_POST['btnsalir'];

if (isset($salir)) {
  session_destroy();
  header('location:Cpanel.php');  
}
?>
<script type="text/javascript">$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
  });
</script>