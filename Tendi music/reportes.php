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
 		 while ($filaR=$reportesCsv->fetch_assoc()) {
 		 	fputcsv($salida, array($filaR['nombre'],
 		 							$filaR['telefono'],
 		 							$filaR['email'],
 		 							$filaR['mensaje'],
 		 							$filaR['fecha_de_llegada']));	 }											
}
 ?>