<?php
	$pagina='profesionalesBorrarPHP';
	include ("conexion.php");
	$idprofesional =$_REQUEST['idprofesional'];

	mysqli_query($conexion,"DELETE FROM profesionales WHERE idProfesional='$idprofesional'")
													or die("Problemas en baja ".mysqli_error($conexion));

	header("Location:../profesionales.php");




?>
