<?php 
$destino="CASTANOSIMON2002@GMAIL.COM"	;
$Nombre=$_POST ['nombre'];
$Telefono=$_POST ['tel'];
$Correo=$_POST ['email'];
$Mensaje=$_POST ['com'];
$BTNenviar=$_POST ['enviar'];

$contenido="NOMBRE:" . $Nombre . " \n correo:" .$Correo .  " \n Telefono:" .$Telefono . "\nmensaje: " . $Mensaje ;    
mail($destino,"RESPUESTA tendi-music.scr-simon.com ",$contenido);		




 ?>