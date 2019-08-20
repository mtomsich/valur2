<?php

	require ('conexion.php');

	$idCliente = $_POST['idCliente'];


	$queryM = "SELECT * FROM destinatarios d,clientes c WHERE d.idCliente = $idCliente AND d.idCliente = c.idCliente ORDER By d.dnombreApellido";
	$resultadoM = mysqli_query($conexion,$queryM);

	$html= '<option value="">Seleccione nombre</option>';

	while ($rowM=mysqli_fetch_row($resultadoM))
	{
		$html.= "<option value='".$rowM['0']."'>".$rowM['1']."</option>";
	}

	echo $html;
?>
