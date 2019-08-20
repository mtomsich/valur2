<?php
	
	function number_for($num,$decimales){
		$aux = number_format($num,$decimales);
		$aux = (string)$aux;
		$aux = str_replace(".","-",$aux);
		$aux = str_replace(",",".",$aux);
		$aux = str_replace("-",",",$aux);
		return $aux;
	}

	//-----------------COMIENZO CALCULO RUBRO 3 -------------------//
	$Puntos=50;
	function CalcularCat($MAX,$Cat){
		global $Totales;
		for ($i=0; $i < sizeof($Cat) ; $i++) { 
			if ($Totales[$i]>=$MAX) {
				$MAX = $Totales[$i];
				$Categoria = $Cat[$i];
			}
		}
		return $Categoria;
	}
	function CalcularEst($pts,$a,$b){
		if ($pts>$a) {
			return 0;
		}
		if ($pts>=$b){
			if ($pts<=$a) {
				return 1;
			}
		}
		if ($pts<$b) {
			return 2;
		}
	}
	$TotalReciclado=0;
	function CalcularReci($IdReciclado){
		global $y, $ValoresReci, $TotalReciclado;
		if ($y[$IdReciclado]==1) {
			//echo "X";
			echo "<img src='img/tilde.png' style='width: 5px; height: 10px !important;'>";
			$TotalReciclado=$TotalReciclado+$ValoresReci[$IdReciclado];
		}
		else{
			echo "";
		}
	}
	function MostrarEstado($elemento){
		global $y;
		switch ($y[$elemento."Estado"]) {
			case "Bueno":
				echo "
					<td style='background-color: black; color: white;'>B</td>
					<td>R</td>
					<td>M</td>
				";
				break;
			case "Regular":
				echo "
					<td>B</td>
					<td style='background-color: black; color: white;'>R</td>
					<td>M</td>
				";
				break;
			case "Malo":
				echo "
					<td>B</td>
					<td>R</td>
					<td style='background-color: black; color: white;'>M</td>
				";
				break;
			default:
				echo "
					<td>B</td>
					<td>R</td>
					<td>M</td>
				";
				break;
		}
	}	$TotalEstado=0;
	//conteo de los puntos del estado de conservacion
	for ($i=0; $i < sizeof($elementos) ; $i++) { 
		if ($elementos[$i]=="Insta" && ($Formulario==903) || ($Formulario==904)) {
			switch ($y['InstEstado']) {
				 case "Bueno":
						$TotalEstado = $TotalEstado + $ValEstado[$i][0];
					break;
				case "Regular":
						$TotalEstado = $TotalEstado + $ValEstado[$i][1];
					break;
				case "Malo":
						$TotalEstado = $TotalEstado + $ValEstado[$i][2];
					break;
				default:
						
					break;
			}
		}elseif ($elementos[$i]=="Reves" && ( $Formulario==906)) {
			switch ($y['ReveEstado']) {
				 case "Bueno":
						$TotalEstado = $TotalEstado + $ValEstado[$i][0];
					break;
				case "Regular":
						$TotalEstado = $TotalEstado + $ValEstado[$i][1];
					break;
				case "Malo":
						$TotalEstado = $TotalEstado + $ValEstado[$i][2];
					break;
				default:
						
					break;
			}
		}else{
			switch ($y[$elementos[$i]."Estado"]) {
				case "Bueno":
						$TotalEstado = $TotalEstado + $ValEstado[$i][0];
					break;
				case "Regular":
						$TotalEstado = $TotalEstado + $ValEstado[$i][1];
					break;
				case "Malo":
						$TotalEstado = $TotalEstado + $ValEstado[$i][2];
					break;
				default:
					
				break;
			}
		}
	}
	if ($Formulario == 904) {
		$elemen;
		$TotalEstado = 0;
		for ($i=0; $i < sizeof($elementos) ; $i++) { 
			if ($elementos[$i]=="Insta"){
				$elemen = "InstEstado";
			}else{
				$elemen = $elementos[$i]."Estado";
			}
			switch ($y[$elemen]) {
				case "Bueno":
						$TotalEstado = $TotalEstado + $ValEstado[$i][0];
					break;
				case "Regular":
						$TotalEstado = $TotalEstado + $ValEstado[$i][1];
					break;
				case "Malo":
						$TotalEstado = $TotalEstado + $ValEstado[$i][2];
					break;
			}
		}
	} 
	switch ($Formulario) {
		case 903:
			switch (CalcularCat(-1,$Categorias)) {
					case "A":
						$RangoA = $Rangos[0];
						$RangoB = $Rangos[1];
						break;
					case "B":
						$RangoA = $Rangos[2];
						$RangoB = $Rangos[3];
						break;
					case "C":
						$RangoA = $Rangos[4];
						$RangoB = $Rangos[5];	
						break;
					case "D":
						$RangoA = $Rangos[6];
						$RangoB = $Rangos[7];	
						break;
					case "E":
						$RangoA = $Rangos[8];
						$RangoB = $Rangos[9];	
						break;
				}
			break;
		case 904:
			switch (CalcularCat(-1,$Categorias)) {
					case "A":
						$RangoA = $Rangos[0];
						$RangoB = $Rangos[1];
						break;
					case "B":
						$RangoA = $Rangos[2];
						$RangoB = $Rangos[3];
						break;
					case "C":
						$RangoA = $Rangos[4];
						$RangoB = $Rangos[5];	
						break;
					case "D":
						$RangoA = $Rangos[6];
						$RangoB = $Rangos[7];	
						break;
				}
			break;
		case 905:
			switch (CalcularCat(-1,$Categorias)) {
					case "B":
						$RangoA = $Rangos[0];
						$RangoB = $Rangos[1];
						break;
					case "C":
						$RangoA = $Rangos[2];
						$RangoB = $Rangos[3];
						break;
					case "D":
						$RangoA = $Rangos[4];
						$RangoB = $Rangos[5];	
						break;
					case "E":
						$RangoA = $Rangos[6];
						$RangoB = $Rangos[7];	
						break;
				}
			break;
		case 906:
			switch (CalcularCat(-1,$Categorias)) {
					case "A":
						$RangoA = $Rangos[0];
						$RangoB = $Rangos[1];
						break;
					case "B":
						$RangoA = $Rangos[2];
						$RangoB = $Rangos[3];
						break;
					case "C":
						$RangoA = $Rangos[4];
						$RangoB = $Rangos[5];	
						break;
				}
			break;
		case 916:
			switch (CalcularCat(-1,$Categorias)) {
					case "A":
						$RangoA = $Rangos[0];
						$RangoB = $Rangos[1];
						break;
					case "B":
						$RangoA = $Rangos[2];
						$RangoB = $Rangos[3];
						break;
					case "C":
						$RangoA = $Rangos[4];
						$RangoB = $Rangos[5];	
						break;
				}
			break;
		default:
			$RangoA = $Rangos[0];
			$RangoB = $Rangos[1];
		break;

	}
	switch (CalcularEst($TotalEstado,$RangoA,$RangoB)) {
		case 0:
			 $Est="B";
			break;
		case 1:
			 $Est="R";
			break;
		case 2:
			 $Est="M";
			break;
	}
	//calculo coeficiente de ajuste
	//calculo coeficiente de ajuste
	if (isset($_GET['idCedula'])){
	  $TipoDeCedula=$_GET["cedula"];
	  $Cedula=$_GET["idCedula"];
	  switch ($TipoDeCedula) {
	    case '1': $anio=mysqli_fetch_array(mysqli_query($conexion, "SELECT `anioImp` FROM `cedula10707` WHERE `idCedula707` = $Cedula"))[0]; break;
	    case '2': $anio=mysqli_fetch_array(mysqli_query($conexion, "SELECT `anioImp` FROM `cedulaph` WHERE `idCedulaPH` = $Cedula"))[0];  break;
	    case '3': $anio=mysqli_fetch_array(mysqli_query($conexion, "SELECT `anioImp` FROM `cedulade` WHERE `idCedulaDE` = $Cedula"))[0];break;
	  }
	}
	if ($y['Data']==0) {
		$Ant=$anio-$y['Data1'];
	}
	else{
		$Ant=$anio-$y['Data'];
	}
	if ($Ant<=0) {
		$Ant=1;
	}
	if ($Ant>=100) {
		$coef=mysqli_query($conexion,"SELECT MIN(`coef`) FROM `coefdepreciacion` WHERE `categoria`='".CalcularCat(-1,$Categorias)." '"."AND`estCon`='".$Est."'");
		$Fcoef=mysqli_fetch_array($coef);
	}else{
		$coef=mysqli_query($conexion,"SELECT `coef` FROM `coefdepreciacion` WHERE `antiguedad`='".$Ant."' AND `categoria`='".CalcularCat(-1,$Categorias)."' AND`estCon`='".$Est."'");
		$Fcoef=mysqli_fetch_array($coef);
		
	}

	$Categ="D";
	// switch ($Categ) {
	switch (CalcularCat(-1,$Categorias)) {
		case "A":
				$A[CalcularEst($TotalEstado,$Rangos[0],$Rangos[1])]=$TotalEstado;
				$ValorUnitarioSemiCub=$ValorUnitarioTotal*0.5;
			break;
		case "B":
				$B[CalcularEst($TotalEstado,$Rangos[2],$Rangos[3])]=$TotalEstado;
				$ValorUnitarioSemiCub=$ValorUnitarioTotal*0.5;
			break;
		case "C":
				$C[CalcularEst($TotalEstado,$Rangos[4],$Rangos[5])]=$TotalEstado;
				$ValorUnitarioSemiCub=$ValorUnitarioTotal*0.5;
			break;
		case "D":
				$D[CalcularEst($TotalEstado,$Rangos[6],$Rangos[7])]=$TotalEstado;
				$ValorUnitarioSemiCub=$ValorUnitarioTotal*0.3;
			break;
		case "E":
				if ($Formulario==905) {
					$E[CalcularEst($TotalEstado,$Rangos[6],$Rangos[7])]=$TotalEstado;	
				}else{
				  	$E[CalcularEst($TotalEstado,$Rangos[8],$Rangos[9])]=$TotalEstado;					
				}
				$ValorUnitarioSemiCub=$ValorUnitarioTotal*0.3;
			break;
		default:
			
			break;
	}
	$dest=$y['Destino'];
	if (empty($dest)) {
		$dest=48;
	}
	if ($dest=="") {
		$dest=48;
	}
	if ($dest==0) {
		$dest=48;
	}
	$dest=substr($dest, 0, 2);
	$destino=mysqli_fetch_array(mysqli_query($conexion,"SELECT `Destino` FROM `destinos` WHERE `Cno`='".$dest." ' "))[0];
	$Codestino=mysqli_fetch_array(mysqli_query($conexion,"SELECT `Codigo` FROM `destinos` WHERE `Cno`='".$dest." ' "))[0];

	//version
	$cf = $y[0];
	$version = mysqli_fetch_array(mysqli_query($conexion,
		"SELECT `version` FROM `cedulaformularios` WHERE `idCedula`= '$Cedula' AND `tipoCedula`='$TipoDeCedula' AND `nroFormulario`='$Formulario' AND `codForm`='$cf'"
	))[0];
?>