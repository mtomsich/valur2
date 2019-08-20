<?php
$pagina='obrasBorrarPHP';
include ("conexion.php");
$idobra =$_REQUEST['idobra'];

mysqli_query($conexion,"UPDATE obras set desactivada='1' WHERE codObra='$idobra'")
or die("Problemas en baja ".mysqli_error($conexion));

mysqli_query($conexion,"DELETE FROM cedula10707 WHERE codObra='$idobra'")
or die("Problemas en baja ".mysqli_error($conexion));
mysqli_query($conexion,"DELETE FROM cedulaPH WHERE codObra='$idobra'")
or die("Problemas en baja ".mysqli_error($conexion));
mysqli_query($conexion,"DELETE FROM cedulaDE WHERE codObra='$idobra'")
or die("Problemas en baja ".mysqli_error($conexion));

header("Location:../obraBuscar.php");


?>
