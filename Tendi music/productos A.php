  




<?php include('menu A.php'); ?>


  <SECTION class="">
    <section class="contenido">
      <h4>AGREGAR PRODUCTO</h4>
          <form method="post" action="productos A.php" enctype="multipart/form-data">  
      <div class="row">
        <div class="row">
          <div class="input-field col s12 m12">
            <i class="material-icons prefix">attach_file</i>
            <input type="text" placeholder="el codigo es automatico" name="cod" disabled="" class="validate">
            <label for="icons-prefix">Codigo </label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m12">
            <i class="material-icons prefix">account_circle</i>
            <input type="text" name="nom" class="validate">
            <label for="icons-prefix">Nombre</label>
          </div>
        </div>
          <div class="input-field col s12 m12">
          <i class="material-icons prefix">all_inclusive</i>
          <input id="" type="text" name="can" class="validate">
          <label for="icons-prefix">cantidad</label>
        </div>
      </div>
        <div class="row">
         <div class="file-field input-field col s12 m12">
          <div class="btn #b71c1c red darken-4">
            <span><i class="material-icons center">linked_camera</i></span>
            <input type="file" name="img">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
        </div>
      </div>
     <div class="row">
        <div class="input-field col s12 m12">
          <i class="material-icons prefix">local_atm</i>
          <input type="text" class="validate" name="pre">
          <label for="icons-prefix">Precio de entrada</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m12">
          <i class="material-icons prefix">local_atm</i>
          <input type="text" class="validate" name="pre1">
          <label for="icons-prefix">Precio de salida</label>
        </div>
      </div>
      <div class="row">
      
      <div>
       <div class="row">
        <div class="input-field col s12 m12">
          <i class="material-icons prefix">date_range</i>          
          <input type="text" class="datepicker validate">
          <label for="icons-prefix">Fecha de ingreso</label>
        </div>
      </div>
      <div>



        <center><button type="submit" name="btnactualizar" class="waves-effect waves-light btn  #b71c1c red darken-4"><i class="material-icons left">security</i>Actualizar</button>
        </div>
      </section>
    </form>
    <?php   
include('config/conexion.php');
error_reporting(0);
$namimage=$_FILES['img']['name'];
$tmpimage=$_FILES['img']['tmp_name'];
$extimage=pathinfo($namimage);
$url = "img/".$namimage;


$nombre=$_POST ['nom'];
$can=$_POST['can'];
$precioE=$_POST['pre'];
$precioS=$_POST['pre1'];
$Fecha = date('d-m-y');

 $_SESSION ['id'];

$guardar=$_POST['btnactualizar'];

if (isset($guardar)) {
  if (is_uploaded_file($tmpimage)) {
    if (($extimage['extension'] =="png")||($extimage['extension']=="jpg")) {
      copy($tmpimage, $url);
      $sql="INSERT into productos VALUES('','$_SESSION ['id']',$can, ,$precioE,$precioS,'$Fecha')";






      if ($ejecutar = $conexion->query($sql)) {
       echo "<script>// Materialize.toast(message, displayLength, className, completeCallback);
  Materialize.toast('GUARDADO CORRECTAMENTE', 4000) // 4000 is the duration of the toast
           </script>";
      } else{
        echo "<script>// Materialize.toast(message, displayLength, className, completeCallback);
  Materialize.toast('NO SE A GUARDADO', 4000) // 4000 is the duration of the toast
           </script>";
         }
      
      }else{
        
        
        echo "Error<br>";
      }
    }else{ 
      echo"ELIJA UNA IMAGEN";
    }
    
  }







 ?>





  </SECTION><br> <br>   <br>  <br><br><br>
 <?php include('pie A.php') ?> 






<script> 
  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
  });
</script>




<script type="text/javascript">
  $(document).ready(function(){
    var window_height = $(window).height();
    var page_height = $('#header').height() + $('#content').height();
    var footer_height = $('#footer').height();

    if (page_height < window_height) {
      margin_footer = window_height - page_height - footer_height - 40;
      $('#footer').css('margin-top', margin_footer);
    }
  });
</script>





