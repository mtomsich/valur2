<?php
	$pagina='firmantesBorrarPHP';
	include ("conexion.php");
	$idfirmante =$_REQUEST['idfirmante'];

	mysqli_query($conexion,"DELETE FROM firmantes WHERE idFirmante='$idfirmante'")
													or die("Problemas en baja ".mysqli_error($conexion));

	header("Location:../firmantes.php");




?>
