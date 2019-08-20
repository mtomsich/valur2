<?php 
	//funcion para el calculo del valor unitario
	function ValorUnitario($categoria,$formulario){
		global $conexion;
		$VU=mysqli_query($conexion,"SELECT * FROM `valoredificio` WHERE`codForm`='".$formulario."' AND `categoria`='".$categoria."'");
		$ValorUnitario=mysqli_fetch_array($VU);
		return $ValorUnitario['valorCat'];
	}
	//Calculo de la fecha
	$Fecha=$y['Dia'];
	$Anio=$y['Data1'];
	if ($y['Data']!=0) {
		$FechaReci=$y['Dia1'];
		$AnioReci=$y['Data'];
	}
	else{
		$FechaReci="";
		$AnioReci="";
	}
	
	// echo $Fcoef[0];
?>