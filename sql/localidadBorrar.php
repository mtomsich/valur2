<?php
	$pagina='localidadBorrarPHP';
	include ("conexion.php");
	$idlocalidad =$_REQUEST['idlocalidad'];

	mysqli_query($conexion,"DELETE FROM localidades WHERE idLocalidad='$idlocalidad'")
													or die("Problemas en baja ".mysqli_error($conexion));

	header("Location:../localPart.php");



?>
