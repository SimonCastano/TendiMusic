


<?php   include('menu U.php'); ?>
        
        

      <SECTION class="header">
      <center><h2>CONTACTENOS</h2></center>

      <form class="col s12" action="CONTACTOS.php" method="post">

       <div class="row">
    
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input name="name" id="icon_prefix" type="text" class="validate">
          <label  for="icon_prefix">Nombre</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input name="tel" id="icon_telephone" type="number" class="validate">
          <label for="icon_telephone">Telefono</label>
        </div>
      </div>
    
  </div>
         <div class="row">
    
      <div class="row">
        <div class="input-field col s12">
          <input name="email" id="email" type="email" class="validate">
          <label for="email" data-error="wrong" data-success="right">Email</label>
        </div>
      </div>
    
  </div>

         <center><div class="row">
    
      <div class="row">
        <div class="input-field col s6 m12">
          <i class="material-icons prefix">mode_edit</i>
          <textarea name="msm" id="icon_prefix2" class="materialize-textarea"></textarea>
          <label for="icon_prefix2">Mensaje</label>
        </div>
      </div>
    
  </div>
        </center>
        <center> <button  class="btn waves-effect waves-light  #b71c1c red darken-4" type="submit" name="action">enviar
    <i class="material-icons right">send</i>
 </button> </center> </form>

  </button></center>
  <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.142599242029!2d-75.43240408568647!3d6.2449313954796475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e44212a0e42d69d%3A0x3bafb10fec69918!2sV%C3%ADa+Vda.+Hojas+Anchas%2C+Guarne%2C+Antioquia!5e0!3m2!1ses!2sco!4v1502748573283" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></center>

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
</script><script type="text/javascript"> $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
  });</script>
    

        
<script type="text/javascript">    $(".button-collapse").sideNav();</script>


      </SECTION>
    </body><br> <br>   <br>  <br><br><br>

    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>


    <?php include('pie U.php')  ; ?>

 





        <?php
  include('config/conexion.php');
  error_reporting(0);
   $nom=$_POST['name'];
   $Telefono=$_POST['tel'];
   $email=$_POST['email'];
   $mensag=$_POST['msm'];
   $Fecha = date('D-m-y h:i:s');
 
   $guardar=$_POST['action'];
   
   if(isset($guardar)){


   $sql="INSERT INTO form VALUES ('','$nom','$Telefono','$email','$mensag','$Fecha')";         
      if ($ejecutar=$conexion->query ($sql)){
        echo "<script>Materialize.toast(' GUARDADO CORRECTAMENTE', 3000, 'rounded green accent-3')
     </script>";
      }
      else{
       echo "<script>Materialize.toast('Error de guardado', 3000, 'rounded red accent-3')
     </script>";

      }
   } 
?>

