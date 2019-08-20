<?php
	$pagina='partidoBorrarPHP';
	include ("conexion.php");
	$idpartido =$_REQUEST['idpartido'];

	mysqli_query($conexion,"DELETE FROM partidos WHERE idPartido='$idpartido'")
													or die("Problemas en baja ".mysqli_error($conexion));

	header("Location:../localPart.php");



?>
