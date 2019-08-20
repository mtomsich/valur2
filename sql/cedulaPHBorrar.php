<?php
//no funciona eliminar cedula y formularios si elimina unidad funcional
$pagina='cedulaPHBorrarPHP';
include ("conexion.php");

$idObraUnidadFuncional =$_REQUEST['idObraUnidadFuncional'];
$idCedulaPH =$_REQUEST['$idCedulaPH'];

mysqli_query($conexion,"DELETE FROM cedulaPH WHERE idCedulaPH='$idCedulaPH'")
or die("Problemas en baja ".mysqli_error($conexion));

mysqli_query($conexion,"DELETE FROM obraunidadfuncional WHERE (idObraUnidadFuncional='$idObraUnidadFuncional')")
or die("Problemas en baja ".mysqli_error($conexion));

mysqli_query($conexion,"DELETE FROM cedulaformularios WHERE idCedula='$idCedulaPH' and tipoCedula='2'")
or die("Problemas en baja ".mysqli_error($conexion));

header("Location:../cedulaPHBuscar.php");




?>
