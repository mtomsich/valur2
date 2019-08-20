<?php
	$pagina='comunicadosBorrarPHP';
	include ("conexion.php");
	$idComunicado =$_REQUEST['idComunicado'];

	mysqli_query($conexion,"DELETE FROM comunicados WHERE idComunicado='$idComunicado'")
													or die("Problemas en baja ".mysqli_error($conexion));

	header("Location:../comunicadosVer.php");




?>
