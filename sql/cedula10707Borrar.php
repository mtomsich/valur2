<?php
$pagina='cedula10707BorrarPHP';
	include ("conexion.php");
	$idCedula707 =$_REQUEST['idCedula707'];

	mysqli_query($conexion,"DELETE FROM cedula10707 WHERE idCedula707='$idCedula707'")
													or die("Problemas en baja ".mysqli_error($conexion));

	mysqli_query($conexion,"DELETE FROM cedulaformularios WHERE idCedula='$idCedula707' and tipoCedula='1'")
																									or die("Problemas en baja ".mysqli_error($conexion));

	header("Location:../cedula10707Buscar.php");




?>
