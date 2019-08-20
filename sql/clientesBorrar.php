<?php
	$pagina='clientesBorrarPHP';
	include ("conexion.php");
	$idcliente =$_REQUEST['idcliente'];

	mysqli_query($conexion,"DELETE FROM clientes WHERE idCliente='$idcliente'")
													or die("Problemas en baja ".mysqli_error($conexion));

	header("Location:../clientes.php");




?>
