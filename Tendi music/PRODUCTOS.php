<?php   include('menu U.php'); ?>
 


<script type="text/javascript">
    window.onload = function() {
  
  document.onmousemove = function(e) {
    
    var x = -(e.clientX/10);
    
    var y = -(e.clientY/10);
    
    this.body.style.backgroundPosition = x + 'px ' + y + 'px';
  };
};
  </script>
  <style type="text/css">
body {
  background: url("img/fondo.jpg");
  background-size: 100% 100% ;
}
#info {
  width: 400px;
  text-align: center; background: #fff;
  margin: 150px auto 0 auto;
  padding: 30px;
  border-radius: 5px;
}
  </style>



         <SECTION class="contenido">
  <?php 
        include('config/conexion.php');
        $sql="SELECT * FROM productos";
        $ejecutar=$conexion->query($sql);
        echo "<div class='row'>";
        while ($filas=$ejecutar->fetch_row()) {
       echo
        "<div class='col s12 m4'>
        <div class='card'>
        <div class='card-image'>
          <img src='$filas[3]' height='350' width='500'  >
          </div>
          <div class='card-content'>
          <p>$filas[1]</p>
          </div>
          <div class='card-action'>
          <p>$".number_format($filas[5])."</p>
          </div>
          </div>
          </div>";

        }
        echo '</div';






         ?>


      </SECTION>

    </body>
    <script type="text/javascript">
     $(document).ready(function(){
      $('.materialboxed').materialbox();
      });
    </script>
    
    
    <script type="text/javascript">    $(".button-collapse").sideNav();</script>

   <?php include('pie U.php')  ; ?>