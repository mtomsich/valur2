<?php

	require ('conexion.php');

	$idCliente = $_POST['idCliente'];


	$queryM = "SELECT * FROM firmantes f,clientes c WHERE f.idCliente = $idCliente AND f.idCliente = c.idCliente ORDER By f.fnombreApellido";
	$resultadoM = mysqli_query($conexion,$queryM);

	$html= '<option value="">Seleccione nombre</option>';

	while ($rowM=mysqli_fetch_row($resultadoM))
	{
		$html.= "<option value='".$rowM['0']."'>".$rowM['1']."</option>";
	}

	echo $html;
?>
