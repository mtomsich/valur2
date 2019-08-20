<?php
	Principal();
	$TotalRub2IncisoA=0;
		for ($i=1; $i <= 9 ; $i++) {
			$TotalRub2IncisoA=  $TotalRub2IncisoA + Rub2IncisoATotal($i);
		}
		$TotalRub2IncisoA = round($TotalRub2IncisoA, 2);
		$TotalRub2IncisoB = Mul4($Vec['SiloCant1'],$Vec['SiloCap1'],CoefRub2IncisoB($Vec['SiloEst1'], $Vec['SiloFec1']), ValorBasicoRub2IncisoB("A",$Vec['SiloCap1'])) +
							Mul4($Vec['SiloCant2'],$Vec['SiloCap2'],CoefRub2IncisoB($Vec['SiloEst2'], $Vec['SiloFec2']), ValorBasicoRub2IncisoB("B",$Vec['SiloCap2'])) +
							Mul4($Vec['SiloCant3'],$Vec['SiloCap3'],CoefRub2IncisoB($Vec['SiloEst3'], $Vec['SiloFec3']), ValorBasicoRub2IncisoB("C",$Vec['SiloCap3']));

		$TotalRub2IncisoC = round((Multiplicacion($Vec['Molino1'], 50000) + Multiplicacion($Vec['Molino2'], 40000) + Multiplicacion($Vec['Molino3'], 30000) +
							Multiplicacion($Vec['Molino4'], 35000) + Multiplicacion($Vec['Molino5'], 25000) + Multiplicacion($Vec['Molino6'], 20000)),2);

		$TotalRub2IncisoD = round(Multiplicacion($Vec['Tanque1'], 15000) + Multiplicacion($Vec['Tanque2'], 10000) + Multiplicacion($Vec['Tanque3'], 7500),2)+
							round(Multiplicacion($Vec['Tanque4'], 15000) + Multiplicacion($Vec['Tanque5'], 10000) + Multiplicacion($Vec['Tanque6'], 7500),2);

	function Principal(){

	}
	function Rub2IncisoATotal($num){
		global $Vec;
		$Total1 = (float)Multiplicacion($Vec['AlamA1'],60) + (float)Multiplicacion($Vec['AlamA4'],30);
		$Total2 = (float)Multiplicacion($Vec['AlamA2'],30) + (float)Multiplicacion($Vec['AlamA5'],15);
		$Total3 = (float)Multiplicacion($Vec['AlamA3'],15) + (float)Multiplicacion($Vec['AlamA6'],7.5);

		$Total4 = (float)Multiplicacion($Vec['AlamA7'],45) + (float)Multiplicacion($Vec['AlamA10'],22.5);
		$Total5 = (float)Multiplicacion($Vec['AlamA8'],22.5) + (float)Multiplicacion($Vec['AlamA11'],12);
		$Total6 = (float)Multiplicacion($Vec['AlamA9'],12.5) + (float)Multiplicacion($Vec['AlamA12'],6);

		$Total7 = (float)Multiplicacion($Vec['AlamA13'],30) + (float)Multiplicacion($Vec['AlamA16'],15);
		$Total8 = (float)Multiplicacion($Vec['AlamA14'],15) + (float)Multiplicacion($Vec['AlamA17'],7.5);
		$Total9 = (float)Multiplicacion($Vec['AlamA15'],7.5) + (float)Multiplicacion($Vec['AlamA18'],5);
		return ${"Total".$num};
	}
	function CoefRub2IncisoB($estado, $fecha){
		global $conexion;
		$estado = trim ($estado);
		if ($estado == "Bueno") {
			$est='B';
		}
		if ($estado == "Regular") {
			$est="R";
		}
		if ($estado == "Malo") {
			$est="M";
		}
		$aux = (String)$fecha;
		$aux = substr($fecha, 0, -6);
		if (isset($_GET['idCedula'])){
		  $TipoDeCedula=$_GET["cedula"];
		  $Cedula=$_GET["idCedula"];
		  switch ($TipoDeCedula) {
		    case '1': $anio=mysqli_fetch_array(mysqli_query($conexion, "SELECT `anioImp` FROM `cedula10707` WHERE `idCedula707` = $Cedula"))[0]; break;
		    case '2': $anio=mysqli_fetch_array(mysqli_query($conexion, "SELECT `anioImp` FROM `cedulaph` WHERE `idCedulaPH` = $Cedula"))[0];  break;
		    case '3': $anio=mysqli_fetch_array(mysqli_query($conexion, "SELECT `anioImp` FROM `cedulade` WHERE `idCedulaDE` = $Cedula"))[0];break;
		  }
		} else if (isset($_GET['aniotabla'])) {
			global $anio;
		} else if (isset($_POST['idobra'])){
			global $anio;
		}
		$Ant=$anio-$aux;
		if ($Ant <= 0) {
			$Ant = 1;
		}
		if ($Ant>=100) {
			$coef=mysqli_query($conexion,"SELECT MIN(`coef`) FROM `coefdepreciacion` WHERE `categoria`='D'AND`estCon`='$est' ");
			$Fcoef=mysqli_fetch_array($coef);
		}else{
			$coef=mysqli_query($conexion,"SELECT `coef` FROM `coefdepreciacion` WHERE `antiguedad`='$Ant' AND `categoria`='D'AND`estCon`='$est'");
			$Fcoef=mysqli_fetch_array($coef);

		}

		return $Fcoef[0];
	}
	function ValorBasicoRub2IncisoB($tipo, $val){
		switch ($tipo) {
			case 'A':
				if ($val<=320) {
					$ValUni = 495;
				}else if ($val<=670) {
					$ValUni = 327;
				}else if ($val<=910) {
					$ValUni = 216;
				}else if ($val<=1280) {
					$ValUni = 163;
				}else{
					$ValUni = 142;
				}
				break;
			case 'B':
				if ($val<=320) {
					$ValUni= 423;
				}else if ($val<=670) {
					$ValUni= 280;
				}else if ($val<=910) {
					$ValUni= 184;
				}else if ($val<=1280) {
					$ValUni= 138;
				}else{
					$ValUni= 120;
				}
				break;
			case 'C':
				if ($val<=320) {
					$ValUni= 380;
				}else if ($val<=670) {
					$ValUni= 250;
				}else if ($val<=910) {
					$ValUni= 165;
				}else if ($val<=1280) {
					$ValUni= 124;
				}else{
					$ValUni= 106;
				}
				break;
		}
		return $ValUni;
	}
	function Multiplicacion($x, $y){
		return (float)$x * (float)$y;
	}
	function Mul4($x, $y, $z, $k){
		return round((float)$x * (float)$y * (float)$z * (float)$k,2);
	}
	function Comprob($x,$y){
		if ($x==$y && 	$x!="") {
			echo "X";
		}
	}
	function Mostrar($val,$Dep){
		if ($Dep != 0) {
			echo $val;
		}
	}
	function MostrarRub2IncisoB($val,$id){
		global $Vec;
		if (($Vec['SiloCant'.$id] != 0) || ($Vec['SiloCap'.$id] != 0)) {
			echo $val;
		}
		else{
			echo "<span style='color: white'>x</span>";
		}
	}

	function Columna3($Plant, $Val){
		global $Vec;
		$vec = $Vec;
		if (($vec[$Plant."Hect".$Val]!="0") || ($vec[$Plant."Ca".$Val]!="0") || ($vec[$Plant."Area".$Val]!="0")) {
			if ((int)$vec[$Plant."Hect".$Val] < 10) {
				$ValHect = "000".(int)$vec[$Plant."Hect".$Val];
			}elseif ($vec[$Plant."Hect".$Val] < 100) {
				$ValHect = "00".(int)$vec[$Plant."Hect".$Val];
			}elseif ($vec[$Plant."Hect".$Val] < 1000) {
				$ValHect = "0".(int)$vec[$Plant."Hect".$Val];
			}else{$ValHect=(int)$vec[$Plant."Hect".$Val];}

			if ((int)$vec[$Plant."Ca".$Val] < 10) {
				$ValCa = "0".(int)$vec[$Plant."Ca".$Val];
			}else{$ValCa =(int)$vec[$Plant."Ca".$Val];}

			if ((int)$vec[$Plant."Area".$Val] < 10) {
				$ValArea = "0".(int)$vec[$Plant."Area".$Val];
			}else{$ValArea =(int)$vec[$Plant."Area".$Val];}

			return $ValHect.".".$ValArea.$ValCa;
		}
	}
	function Eval1($Plant,$Val){
		global $Vec;
		$vec = $Vec;
		return (($vec[$Plant."Hect".$Val]!="0") || ($vec[$Plant."Ca".$Val]!="0") || ($vec[$Plant."Area".$Val]!="0"));
	}
	function EstadoProd($Plant,$val,$Plant2){
		global $Vec;
		if (Eval1($Plant,$val)) {
			switch ($Plant2) {
				case 'Olivo':
					switch ($Vec[$Plant."Pro".$val]) {
						case "1": echo "<td>76.400</td> <td></td>  		  <td></td>	";  break;
						case "2": echo "<td></td>  		 <td>833.626</td>  <td></td>	";break;
						case "3": echo "<td></td>  		 <td></td>  		  <td>277.894</td>	";break;
						}
				break;
				case 'Ciruelo':
					switch ($Vec[$Plant."Pro".$val]) {
						case "1": echo "<td>89.701 </td> <td></td>  		  <td></td>	";  break;
						case "2": echo "<td></td>  		 <td>826.818</td>  <td></td>	";break;
						case "3": echo "<td></td>  		 <td></td>  		  <td>272.920</td>	";break;
						}
				break;
				case 'Duraznero':
					switch ($Vec[$Plant."Pro".$val]) {
						case "1": echo "<td>80.040</td> <td></td>  		  <td></td>	";  break;
						case "2": echo "<td></td>  		 <td>480.355</td>  <td></td>	";break;
						case "3": echo "<td></td>  		 <td></td>  		  <td>153.497</td>	";break;
						}
				break;
				case 'Limonero':
					switch ($Vec[$Plant."Pro".$val]) {
						case "1": echo "<td>32.895</td> <td></td>  		  <td></td>	";  break;
						case "2": echo "<td></td>  		 <td>172.504</td>  <td></td>	";break;
						case "3": echo "<td></td>  		 <td></td>  		  <td>56.426</td>	";break;
						}
				break;
				case 'Mandarino':
					switch ($Vec[$Plant."Pro".$val]) {
						case "1": echo "<td>32.895</td> <td></td>  		  <td></td>	";  break;
						case "2": echo "<td></td>  		 <td>172.504</td>  <td></td>	";break;
						case "3": echo "<td></td>  		 <td></td>  		  <td>56.426</td>	";break;
						}
				break;
				case 'Manzano':
					switch ($Vec[$Plant."Pro".$val]) {
						case "1": echo "<td>73.877</td> <td></td>  		  <td></td>	";  break;
						case "2": echo "<td></td>  		 <td>485.346</td>  <td></td>	";break;
						case "3": echo "<td></td>  		 <td></td>  		  <td>165.649</td>	";break;
						}
				break;
				case 'Naranjo':
					switch ($Vec[$Plant."Pro".$val]) {
						case "1": echo "<td>32.895</td> <td></td>  		  <td></td>	";  break;
						case "2": echo "<td></td>  		 <td>172.504</td>  <td></td>	";break;
						case "3": echo "<td></td>  		 <td></td>  		  <td>56.426</td>	";break;
						}
				break;
				case 'Peral':
					switch ($Vec[$Plant."Pro".$val]) {
						case "1": echo "<td>92.319</td> <td></td>  		  <td></td>	";  break;
						case "2": echo "<td></td>  		 <td>452.267</td>  <td></td>	";break;
						case "3": echo "<td></td>  		 <td></td>  		  <td>144.219</td>	";break;
						}
				break;
				case 'Pomelo':
					switch ($Vec[$Plant."Pro".$val]) {
						case "1": echo "<td>32.895</td> <td></td>  		  <td></td>	";  break;
						case "2": echo "<td></td>  		 <td>172.504</td>  <td></td>	";break;
						case "3": echo "<td></td>  		 <td></td>  		  <td>56.426</td>	";break;
						}
				break;
				case 'Vid':
					switch ($Vec[$Plant."Pro".$val]) {
						case "1": echo "<td>140.600</td> <td></td>  		  <td></td>	";  break;
						case "2": echo "<td></td>  		 <td>552.325</td>  <td></td>	";break;
						case "3": echo "<td></td>  		 <td></td>  		  <td>182.379</td>	";break;
						}
				break;
				case 'Acacia':
					switch ($Vec[$Plant."Pro".$val]) {
						case "1": echo "<td>10.250</td> <td></td>  		  <td></td>	";  break;
						case "2": echo "<td></td>  		 <td>76.000</td>  <td></td>	";break;
						case "3": echo "<td></td>  		 <td></td>  		  <td></td>	";break;
						}
				break;
				case 'Alamo':
					switch ($Vec[$Plant."Pro".$val]) {
						case "1": echo "<td>16.250</td> <td></td>  		  <td></td>	";  break;
						case "2": echo "<td></td>  		 <td>28.000</td>  <td></td>	";break;
						case "3": echo "<td></td>  		 <td></td>  		  <td></td>	";break;
						}
				break;
				case 'Eucalipto':
					switch ($Vec[$Plant."Pro".$val]) {
						case "1": echo "<td>10.250</td> <td></td>  		  <td></td>	";  break;
						case "2": echo "<td></td>  		 <td>35.000</td>  <td></td>	";break;
						case "3": echo "<td></td>  		 <td></td>  		  <td></td>	";break;
						}
				break;
				case 'Pino':
					switch ($Vec[$Plant."Pro".$val]) {
						case "1": echo "<td>14.700</td> <td></td>  		  <td></td>	";  break;
						case "2": echo "<td></td>  		 <td>27.600</td>  <td></td>	";break;
						case "3": echo "<td></td>  		 <td></td>  		  <td></td>	";break;
						}
				break;
				case 'Sauce':
					switch ($Vec[$Plant."Pro".$val]) {
						case "1": echo "<td>16.500</td> <td></td>  		  <td></td>	";  break;
						case "2": echo "<td></td>  		 <td>42.000</td>  <td></td>	";break;
						case "3": echo "<td></td>  		 <td></td>  		  <td></td>	";break;
						}
				break;
			}
		}else{
			echo "<td></td>  		 <td></td>  		  <td></td>	";
		}
	}



	function ValorCol8($cultivo,$Col3,$periodo,$coef,$x,$T){
		global $ValTotalIncisoA;
		global $ValTotalIncisoB;
		global $ValTotalIncisoC;
		$ValorPeriodo=0;
		switch ($cultivo) {
				    case "Olivo":
				        if ($periodo == 1) {
							 $ValorPeriodo = 76400;
						}
						if ($periodo == 2) {
							 $ValorPeriodo = 833626;
						}
						if ($periodo == 3) {
							 $ValorPeriodo = 277894;
						}
				    break;
				    case "Ciruelo":
				        if ($periodo == 1) {
							$ValorPeriodo = 89701;
						}
						if ($periodo == 2) {
							 $ValorPeriodo = 826818;
						}
						if ($periodo == 3) {
							 $ValorPeriodo = 272920;
						}
				    break;
				    case "Duraznero":
				        if ($periodo == 1) {
							 $ValorPeriodo = 80040;
						}
						if ($periodo == 2) {
							 $ValorPeriodo = 480355;
						}
						if ($periodo == 3) {
							 $ValorPeriodo = 153497;
						}
				    break;
				    case "Limonero":
				        if ($periodo == 1) {
							 $ValorPeriodo = 32895;
						}
						if ($periodo == 2) {
							$ValorPeriodo = 172504;
						}
						if ($periodo == 3) {
							 $ValorPeriodo = 56426;
						}
				    break;
				    case "Mandarino":
				        if ($periodo == 1) {
							 $ValorPeriodo = 32895;
						}
						if ($periodo == 2) {
							 $ValorPeriodo = 172504;
						}
						if ($periodo == 3) {
							 $ValorPeriodo = 56426;
						}
				    break;
				    case "Manzano":
				        if ($periodo == 1) {
							 $ValorPeriodo = 73877;
						}
						if ($periodo == 2) {
							 $ValorPeriodo = 485346;
						}
						if ($periodo == 3) {
							 $ValorPeriodo = 165649;
						}
				    break;
				    case "Naranjo":
				        if ($periodo == 1) {
							 $ValorPeriodo = 32895;
						}
						if ($periodo == 2) {
							 $ValorPeriodo = 172504;
						}
						if ($periodo == 3) {
							 $ValorPeriodo = 56426;
						}
				    break;
				    case "Peral":
				        if ($periodo == 1) {
							 $ValorPeriodo = 92319;
						}
						if ($periodo == 2) {
							 $ValorPeriodo = 452267;
						}
						if ($periodo == 3) {
							$ValorPeriodo = 144219;
						}
				    break;
				    case "Pomelo":
				        if ($periodo == 1) {
							 $ValorPeriodo = 32895;
						}
						if ($periodo == 2) {
							 $ValorPeriodo = 172504;
						}
						if ($periodo == 3) {
							 $ValorPeriodo = 56426;
						}
				    break;
				    case "Vid":
				        if ($periodo == 1) {
							 $ValorPeriodo = 140600;
						}
						if ($periodo == 2) {
							 $ValorPeriodo = 552325;
						}
						if ($periodo == 3) {
							 $ValorPeriodo = 182379;
						}
				    break;
				    case "Acacia":
				        if ($periodo == 1) {
							 $ValorPeriodo = 10250;
						}
						if ($periodo == 2) {
							 $ValorPeriodo = 76000;
						}
				    break;
				    case "Alamo":
				        if ($periodo == 1) {
							 $ValorPeriodo = 16250;
						}
						if ($periodo == 2) {
							 $ValorPeriodo = 28000;
						}
				    break;
				    case "Eucalipto":
				        if ($periodo == 1) {
							 $ValorPeriodo = 10250;
						}
						if ($periodo == 2) {
							 $ValorPeriodo = 35000;
						}
				    break;
				    case "Pino":
				        if ($periodo == 1) {
							 $ValorPeriodo = 14700;
						}
						if ($periodo == 2) {
							 $ValorPeriodo = 27600;
						}
				    break;
				    case "Sauce":
				        if ($periodo == 1) {
							 $ValorPeriodo = 16500;
						}
						if ($periodo == 2) {
							 $ValorPeriodo = 42000;
						}
				    break;

				}
			if ($ValorPeriodo*(float)$Col3*(float)$coef != 0) {
				echo round($ValorPeriodo*(float)$Col3*(float)$coef,2);
			}
			if ($x == 1 ) {
				${$T} += ($ValorPeriodo*(float)$Col3*(float)$coef);
			}
	}


	function FilaRub4($estado,$coef,$cultivo,$id,$val,$total){
						global $Vec;
						echo "<td></td>";
						echo " <td>"; Mostrar($cultivo,$Vec[$id.'Hect'.$val].$Vec[$id.'Ca'.$val].$Vec[$id.'Area'.$val]); echo"</td>";
						echo " <td>". Columna3($id,$val)."</td>";
						echo " <td> $estado $coef</td>";
						EstadoProd($id,$val,$cultivo);
						echo " <td>"; ValorCol8($cultivo,Columna3($id,$val),$Vec[$id.'Pro'.$val],(float)$coef,1,$total); echo "</td>";
						echo " <td>"; ValorCol8($cultivo,Columna3($id,$val),$Vec[$id.'Pro'.$val],(float)$coef,0,$total); echo "</td>";

					}

?>
