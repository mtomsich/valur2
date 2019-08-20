<?php
	$pagina='destinoPHP';
	include ('conexion.php');

	$Tipo = $_POST['Tipo'];

	$queryM = "SELECT Codigo, Tipo, Destino FROM destinos WHERE Tipo = '$Tipo'";
	$resultadoM = mysqli_query($conexion,$queryM);

	$html= "<option value='0'>Seleccione Tipo</option>";

  while($rowM = $resultadoM->fetch_assoc())
	{
		$html.= "<option value='".$rowM['Codigo']." - ".$rowM['Destino']."'>".$rowM['Codigo']." - ".$rowM['Destino']."</option>";
	}
	echo $html;
?>
