<?php
	$pagina='destinatariosBorrarPHP';
	include ("conexion.php");
	$iddestinatario =$_REQUEST['iddestinatario'];

	mysqli_query($conexion,"DELETE FROM destinatarios WHERE idDestinatario='$iddestinatario'")
													or die("Problemas en baja ".mysqli_error($conexion));

	header("Location:../destinatarios.php");




?>
