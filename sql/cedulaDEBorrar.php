<?php
$pagina='cedulaDEBorrarPHP';
include ("conexion.php");
$idCedulaDE =$_REQUEST['idCedulaDE'];

mysqli_query($conexion,"DELETE FROM cedulade WHERE idCedulaDE='$idCedulaDE'")
or die("Problemas en baja ".mysqli_error($conexion));

mysqli_query($conexion,"DELETE FROM cedulaformularios WHERE idCedula='$idCedulaDE' and tipoCedula='4'")
or die("Problemas en baja ".mysqli_error($conexion));

header("Location:../cedulaDEBuscar.php");




?>
