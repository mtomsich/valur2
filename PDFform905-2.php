<?php
include("sesion.php");
	$pagina='PDFform9052PHP';
	include("sql/conexion.php");
	include("seguridadForm.php");
	include('sql/mostrarDatosObra.php');

	$post = $_GET["idform"];
	$x=mysqli_query($conexion, "SELECT * FROM `form905` WHERE `codForm905` = '".$post."'");
	$y = mysqli_fetch_array($x);
	if ($y['Cubierta'] != ''){ //POR SI SE DEJO EN BLANCO EL CAMPO
		$Cubierta = $y['Cubierta'];
	} else {
		$Cubierta = 0;
	}
	$mostrarProf = $y['firmaprof']; //MOSTRAR PROFESIONAL
	$Frigo=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub6data` WHERE `codForm`= $post AND `prop`= 'Frigo' AND `numForm`= '905'"));
	if ($Frigo['cant']==0) {
		foreach ($Frigo as $key => $value) {
			$Frigo[$key] = NULL;
		}
	}
	$Monta1=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub6data` WHERE `codForm`= $post AND `prop`= 'Monta1' AND `numForm`= '905'"));
	if ($y['Monta1']==0) {
		foreach ($Monta1 as $key => $value) {
			$Monta1[$key] = NULL;
		}
	}
	$Monta2=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub6data` WHERE `codForm`= $post AND `prop`= 'Monta2' AND `numForm`= '905'"));
	if ($y['Monta2']==0) {
		foreach ($Monta2 as $key => $value) {
			$Monta2[$key] = NULL;
		}
	}
	$Incen=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub6data` WHERE `codForm`= $post AND `prop`= 'Incen' AND `numForm`= '905'"));
	if ($Incen['cant']==0) {
		foreach ($Incen as $key => $value) {
			$Incen[$key] = NULL;
		}
	}
	$Asc1=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub6data` WHERE `codForm`= $post AND `prop`= 'Asc1' AND `numForm`= '905'"));
	if ($y['Ascensores1']==0) {
		foreach ($Asc1 as $key => $value) {
			$Asc1[$key] = NULL;
		}
	}
	$Asc2=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub6data` WHERE `codForm`= $post AND `prop`= 'Asc2' AND `numForm`= '905'"));
	if ($y['Ascensores2']==0) {
		foreach ($Asc2 as $key => $value) {
			$Asc2[$key] = NULL;
		}
	}

	$Tanque1=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub8data` WHERE `codForm`= $post AND `prop`= 'Tanque1' AND `numForm`= '905'"));
	$tanque11=$y['Tanques'];
	if ($Tanque1['cant']==0) {
		foreach ($Tanque1 as $key => $value) {
			$Tanque1[$key] = NULL;
		}
	}
	$Tanque2=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub8data` WHERE `codForm`= $post AND `prop`= 'Tanque2' AND `numForm`= '905'"));
	$tanque12=$y['Tanques2'];
	if ($Tanque2['cant']==0) {
		foreach ($Tanque2 as $key => $value) {
			$Tanque2[$key] = NULL;
		}
	}
	$Tanque3=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub8data` WHERE `codForm`= $post AND `prop`= 'Tanque3' AND `numForm`= '905'"));
	$tanque13=$y['Tanques3'];
	if ($Tanque3['cant']==0) {
		foreach ($Tanque3 as $key => $value) {
			$Tanque3[$key] = NULL;
		}
	}
	$PaviRig=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub8data` WHERE `codForm`= $post AND `prop`= 'PaviRig' AND `numForm`= '905'"));
	if ($PaviRig['cant']==0) {
		foreach ($PaviRig as $key => $value) {
			$PaviRig[$key] = NULL;
		}
	}
	$PaviFlex=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub8data` WHERE `codForm`= $post AND `prop`= 'PaviFlex' AND `numForm`= '905'"));
	if ($PaviFlex['cant']==0) {
		foreach ($PaviFlex as $key => $value) {
			$PaviFlex[$key] = NULL;
		}
	}
	$SiloA=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub8data` WHERE `codForm`= $post AND `prop`= 'SiloA' AND `numForm`= '905'"));
	$SiloA2=$y['Silo1'];
	if ($SiloA['cant']==0) {
	 foreach ($SiloA as $key => $value) {
			$SiloA[$key] = NULL;
		}
	}
	$SiloB=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub8data` WHERE `codForm`= $post AND `prop`= 'SiloB' AND `numForm`= '905'"));
	$SiloB2=$y['Silo2'];
	if ($SiloB['cant']==0) {
		foreach ($SiloB as $key => $value) {
			$SiloB[$key] = NULL;
		}
	}
	$SiloC=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub8data` WHERE `codForm`= $post AND `prop`= 'SiloC' AND `numForm`= '905'"));
	$SiloC2=$y['Silo3'];
	if ($SiloC['cant']==0) {
		foreach ($SiloC as $key => $value) {
			$SiloC[$key] = NULL;
		}
	}
	$TipoDeCedula=$_GET["cedula"];
  	$Cedula=$_GET["idCedula"];
	  switch ($TipoDeCedula) {
	    case '1': $cons=mysqli_fetch_array(mysqli_query($conexion, "SELECT `fechaImp`, `lugar` FROM `cedula10707` WHERE `idCedula707` = $Cedula")); break;
	    case '2': $cons=mysqli_fetch_array(mysqli_query($conexion, "SELECT `fechaImp`, `lugar` FROM `cedulaph` WHERE `idCedulaPH` =  $Cedula"));  break;
	    case '3': $cons=mysqli_fetch_array(mysqli_query($conexion, "SELECT `fechaImp`, `lugar` FROM `cedulade` WHERE `idCedulaDE` =  $Cedula"));break;
	  }
	include('funciones/calculosrub4.php');
	include('funciones/valores905.php');
	include('funciones/calculosrub2.php');
	include('funciones/Totales905.php');
	include('funciones/calculosrub3.php');
	$TotalCub=$Fcoef[0]*$ValorUnitarioTotal*$Cubierta;
	$totalrub6 = $Asc1['val']+
			 $Asc2['val']+
			 $Frigo['val']+
			 $Monta1['val']+
			 $Monta2['val']+
			 $Incen['val'];
	$totalrub6 = round($totalrub6, 2);
	if ($totalrub6 == 0) {
		$totalrub6 = NULL;
	}
	$totalrub8 = $Tanque1['val']+
			 $Tanque2['val']+
			 $Tanque3['val']+
			 $PaviRig['val']+
			 $PaviFlex['val']+
			 $SiloA['val']+
			 $SiloB['val']+
			 $SiloC['val'];
	if ($totalrub8 == 0) {
		$totalrub8 = NULL;
	}

	function Mostrar($val,$Dep){
		if ($Dep != 0) {
			echo $val;
		}
	}
	require_once 'lib/pdf/autoload.inc.php';
	ob_start();
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<style>
			body{
			padding-top:0px;
			padding-right: 10px;
			padding-left: 10px;
			margin:0px;
			}
			@page {
			margin-top: 1em;
			margin-left: 1em;
			margin-right: 1em;
			margin-bottom: 0.2em;
	        }
			h1{
			font-size: 3.5em;
			}
			h2{
			font-size: 2em;
			}
			td{
			padding:0px;
			margin:0px;
			}
			tr{
			padding:0px;
			margin:0px;
			}

			table {
			width: 100%;
			cellpadding:0px;
			cellspacing:0px;

			}

			.prueba{
			border: black 0.6px solid;

			}

			table.table {border-collapse:collapse;}
			table.table td {border: 1px solid #000000;}
			table.table2 {border:0;}
			table.table2 td {border: 0;}
			img{
				width: 15%;
				height: 130px;
				margin-bottom: 20px;
			}
			.rub4{
				margin-left: 150px;
				margin-top: -160px;
			}
			.huggi{
				width: 95%;
				text-align: center;
			}
			tr.comp td{
				height: 15px;
				padding-left: 5px;
			}
			.fuenteca{
				font-size: 12px;
			}
			.fuentedi{
				font-size: 10px;
			}
			.rub5{
				margin-top: 10px;
			}
			.noborde{
				border: 0 !important;
			}
			.table-rub5{
				font-size: 9px;
			}
			.table-rub6{
				font-size: 9px;
			}
			.table-rub7{
				font-size: 13px;
			}
			.table-rub8{
				font-size: 13px;
				margin-top: 10px;
			}
			.text-center{
				text-align: center;
			}
			.borde-inf{
				border-bottom-width: 1px !important;
				border-bottom-style: solid !important;
				border-bottom-color: black !important;
			}
			.borde-der{
				border-right-width: 1px !important;
				border-right-style: solid !important;
				border-right-color: black !important;
			}
			.rub6{
				margin-top: 5px;
			}
			tr.comp3 td{
				height: 25px;
			}
			.version{
				position: fixed;
				top: 125px;
				left: 60px;
				font-size: 1.5em;
			}
		</style>
	</head>
	<body>
		<div class="imagen">
			<img src="img/logopdf905hoja2.png">
		</div>
		<div class="version">
				/<?php echo $version ?>
			</div>
		<div class="rub4">
			<b>RUBRO 4 determinación del valor unitario por m </b><span style="font-size: 9px">(sin incluir instalaciones complementarias)</span>
			<table class="table huggi">
					<tr class="fuenteca">
						<td width="30px">1</td>
						<td>2</td>
						<td>3</td>
						<td>4</td>
						<td>5</td>
					</tr>
					<tr class="fuentedi">
						<td height="30px">Tipo de edificio</td>
						<td>Cantidad de cuadros tachados en cada inciso (rubro 2 columna 15)
						</td>
						<td>Valor básico por m para cada tipo</td>
						<td>Cantidad de cuadros tachados multiplicada por valor básico en cada tipo</td>
						<td rowspan="4">Valor unitario total columna 4 dividido por total columna 2 a trasladar a rubro 5 columna 7</td>
					</tr>
					<tr >
						<td class="fuenteca"><b>B</b></td>
						<td style="font-size: 12px;"><?php Mostrar ($Totales[0],$Totales[0]); ?></td>
						<td style="font-size: 12px;"><?php Mostrar (number_for($ValorBasicoB,0),$Totales[0]); ?></td>
						<td style="font-size: 12px;"><?php Mostrar(number_for($ValorBasicoB*$Totales[0],0),$Totales[0]); ?></td>
					</tr>
					<tr >
						<td class="fuenteca"><b>C</b></td>
						<td style="font-size: 12px;"><?php Mostrar ($Totales[1],$Totales[1]); ?></td>
						<td style="font-size: 12px;"><?php Mostrar(number_for($ValorBasicoC,0),$Totales[1]) ; ?></td>
						<td style="font-size: 12px;"><?php Mostrar(number_for($ValorBasicoC*$Totales[1],0),$Totales[1]); ?></td>
					</tr>
					<tr>
						<td class="fuenteca"><b>D</b></td>
						<td style="font-size: 12px;"><?php Mostrar ($Totales[2],$Totales[2]); ?></td>
						<td style="font-size: 12px;"><?php Mostrar(number_for($ValorBasicoD,0),$Totales[2]) ; ?></td>
						<td style="font-size: 12px;"><?php Mostrar(number_for($ValorBasicoD*$Totales[2],0),$Totales[2]); ?></td>
					</tr>
					<tr >
						<td class="fuenteca"><b>E</b></td>
						<td style="font-size: 12px;"><?php Mostrar ($Totales[3],$Totales[3]); ?></td>
						<td style="font-size: 12px;"><?php Mostrar(number_for($ValorBasicoE,0),$Totales[3]) ; ?></td>
						<td style="font-size: 12px;"><?php Mostrar(number_for($ValorBasicoE*$Totales[3],0),$Totales[3]); ?></td>
						<td rowspan="2" style="font-size: 12px;"><?php Mostrar(number_for(round($ValorUnitarioTotal,2),2),$ValorUnitarioTotal) ?></td>
					</tr>
					<tr class="comp2">
						<td class="fuenteca"> <b>TOTALES</b></td>
						<td style="font-size: 12px;"><?php Mostrar ($Total,$Total) ?></td>
						<td style="border: 0"></td>
						<td style="font-size: 12px;"><?php Mostrar (number_for($ValorBasicoTotal,0),$ValorBasicoTotal)  ?></td>
					</tr>
			</table>
		</div>
		<div class="rub5">
			<b>RUBRO 5 Valuación del edificio</b>
			<table class="table table-rub5">
				<tr class="fuenteca text-center">
					<td>1</td>
					<td>2</td>
					<td>3</td>
					<td>4</td>
					<td>5</td>
					<td>6</td>
					<td>7</td>
					<td>8</td>
					<td>9</td>
				</tr>
				<tr>
					<td style="font-size: 14px !important;">Construccion</td>
					<td>Tipo de edificio RUBRO 2 columna 15</td>
					<td>Estado de conservac. RUBRO 3</td>
					<td>Data <br>dia/mes/año</td>
					<td>Data del reciclado <br>dia/mes/año</td>
					<td>Coef.de ajuste Tabla de depreciación</td>
					<td>Valor unitario por m2 RUBRO 4 col 5</td>
					<td>Superficie en m2 (sin decimales)</td>
					<td>Valor (6 x 7 x 8) (con 2 decimales)<span style="color: white">------------------------------------------</span></td>
				</tr>
				<tr>
					<td style="font-size: 13px !important;">SUPERFICIE EDIFICADA</td>
					<td align="center"><?php Mostrar (CalcularCat(-1,$Categorias),$Cubierta); ?></td>
					<td align="center"><?php Mostrar ($Est,$Cubierta);  ?></td>
					<td align="center"><?php Mostrar ($Fecha,$Cubierta);  ?></td>
					<td align="center"><?php Mostrar ($FechaReci,$Cubierta);  ?></td>
					<td align="center"><?php Mostrar ($Fcoef[0],$Cubierta); ?></td>
					<td align="center"><?php Mostrar (number_for(round($ValorUnitarioTotal,2),2),$Cubierta);  ?></td>
					<td align="center"><?php Mostrar (number_for($Cubierta,0),$Cubierta); ?></td>
					<td align="center"><?php Mostrar (number_for($TotalCub,2),$Cubierta);  ?></td>
				</tr>
			</table>
		</div>
		<div class="rub6">
			<b>RUBRO 6 Valuación de las instalaciones complementarias</b>
			<table class="table table-rub6">
				<tr class="text-center">
					<td>1</td>
					<td>2</td>
					<td>3</td>
					<td>4</td>
					<td>5</td>
					<td>6</td>
					<td>7</td>
				</tr>
				<tr>
					<td style="font-size: 11px !important;">INSTALACIONES</td>
					<td>Cant. de unidades</td>
					<td>DATA <br>dia/mes/año</td>
					<td>Est. de conservacion</td>
					<td>Coef.de ajuste Tabla de depreciación</td>
					<td>Valor unitario</td>
					<td>Valor (2x5x6) (con 2 decimales)</td>
				</tr>
				<tr class="comp">
					<td>a) Cámara frigorífica (indique cantidad de m2)</td>
					<td><?php echo $Frigo['cant']; ?></td>
					<td><?php echo $Frigo['data']; ?></td>
					<td><?php echo $Frigo['estCon']; ?></td>
					<td><?php echo $Frigo['coefAj']; ?></td>
					<td><?php echo $Frigo['valUni']; ?></td>
					<td><?php mostrar(number_for($Frigo['val'],2),$Frigo['val']); ?></td>
				</tr>
				<tr class="comp">
					<td rowspan="2">
						<table>
							<tr>
								<td rowspan="2" class="noborde">b) montacargas	</td>
								<td>Mas de 3 toneladas</td>
								<td>n° paradas <?php Mostrar($y['Monta11'], $y['Monta1']) ?> </td>
							</tr>
							<tr>
								<td>3 toneladas o menos</td>
								<td>n° paradas <?php Mostrar($y['Monta22'], $y['Monta2']) ?> </td></td>
							</tr>
						</table>
					</td>
					<td><?php Mostrar ($y['Monta1'],$y['Monta1']); ?></td>
					<td><?php echo $Monta1['data']; ?></td>
					<td><?php echo $Monta1['estCon']; ?></td>
					<td><?php echo $Monta1['coefAj']; ?></td>
					<td><?php echo $Monta1['valUni']; ?></td>
					<td><?php mostrar(number_for($Monta1['val'],2),$Monta1['val']); ?></td>
				</tr>
				<tr class="comp">
					<td><?php Mostrar ($y['Monta2'],$y['Monta2']); ?></td>
					<td><?php echo $Monta2['data']; ?></td>
					<td><?php echo $Monta2['estCon']; ?></td>
					<td><?php echo $Monta2['coefAj']; ?></td>
					<td><?php echo $Monta2['valUni']; ?></td>
					<td><?php mostrar(number_for($Monta2['val'],2),$Monta2['val']); ?></td>
				</tr>
				<tr class="comp">
					<td>c) Instalación contra incendios (indique cantidad de rociadores/bocas) </td>
					<td><?php echo $Incen['cant']; ?></td>
					<td><?php echo $Incen['data']; ?></td>
					<td><?php echo $Incen['estCon']; ?></td>
					<td><?php echo $Incen['coefAj']; ?></td>
					<td><?php echo $Incen['valUni']; ?></td>
					<td><?php mostrar(number_for($Incen['val'],2),$Incen['val']); ?></td>
				</tr>
				<tr class="comp">
					<td rowspan="2">
						<table>
							<tr>
								<td rowspan="2" class="noborde">d) ascensores	</td>
								<td>Mas de 4 personas</td>
								<td>n° paradas <?php Mostrar($y['Ascensores11'], $y['Ascensores1']) ?> </td>
							</tr>
							<tr>
								<td>4 personas o menos</td>
								<td>n° paradas <?php Mostrar($y['Ascensores22'], $y['Ascensores2']) ?></td>
							</tr>
						</table>
					<td> <?php Mostrar($y['Ascensores1'], $y['Ascensores1']) ?></td>
					<td><?php echo $Asc1['data']; ?></td>
					<td><?php echo $Asc1['estCon']; ?></td>
					<td><?php echo $Asc1['coefAj']; ?></td>
					<td><?php echo $Asc1['valUni']; ?></td>
					<td><?php mostrar(number_for($Asc1['val'],2),$Asc1['val']); ?></td>
				</tr>
				<tr class="comp">
					<td> <?php Mostrar($y['Ascensores2'], $y['Ascensores2']) ?></td>
					<td><?php echo $Asc2['data']; ?></td>
					<td><?php echo $Asc2['estCon']; ?></td>
					<td><?php echo $Asc2['coefAj']; ?></td>
					<td><?php echo $Asc2['valUni']; ?></td>
					<td><?php mostrar(number_for($Asc2['val'],2),$Asc2['val']); ?></td>
				</tr>
				<tr class="comp">
					<td class="noborde" rowspan="3"></td>
					<td class="noborde"></td>
					<td class="noborde"></td>
					<td class="noborde"></td>
					<td class="noborde"></td>
					<td class="noborde">Total RUBRO 6 (con dos decimales)</td>
					<td><?php mostrar (number_for($totalrub6,2),$totalrub6) ?></td>
				</tr>
			</table>
		</div>
		<div class="rub7">
			<b>RUBRO 7 Resumen de valuación de los RUBROS 5 Y 6</b>
			<table class="table table-rub7">
				<tr>
					<td>Concepto</td>
					<td>Valor</td>
				</tr>
				<tr class="comp">
					<td>a) Total RUBRO 5</td>
					<td><?php  Mostrar(number_for(round($TotalCub,0),0),round($TotalCub,0)) ; ?></td>
				</tr>
				<tr class="comp">
					<td>b) Total RUBRO 6</td>
					<td><?php Mostrar(number_for(round($totalrub6,0),0),round($totalrub6,0)) ; ?></td>
				</tr>
				<tr class="comp">
					<td class="noborde" style="text-align: right; font-size: 9px;">Total RUBRO 7 a trasladar a FORMULARIO 901, RUBRO 5, columna 4 <br>(entero redondeado)</td>
					<td class="comp"><?php $tot=$TotalCub+$totalrub6; Mostrar (number_for(round($tot,0),0),$tot); ?></td>
				</tr>
			</table>
		</div>
		<div class="rub8">
			<b>RUBRO 8 Valuación de tanques, pavimentos y silos</b> <span style="font-size: 9px">(para silos ubicados en zona urbana)</span>
			<table class="table table-rub6">
				<tr class="text-center">
					<td colspan="4">1</td>
					<td  style="display: none"	></td>
					<td  style="display: none"	></td>
					<td  style="display: none"	></td>
					<td>2</td>
					<td>3</td>
					<td>4</td>
					<td>5</td>
					<td>6</td>
					<td>7</td>
				</tr>
				<tr class="comp">
					<td style="font-size: 11px !important;" colspan="4">INSTALACIONES</td>
					<td style="display: none"></td>
					<td style="display: none"></td>
					<td style="display: none"></td>
					<td>Cant. de unidades</td>
					<td>DATA <br>dia/mes/año</td>
					<td>Est. de conservacion</td>
					<td>Coef.de ajuste Tabla de depreciación</td>
					<td>Valor unitario</td>
					<td>Valor (2x5x6) (con 2 decimales)</td>
				</tr>
				<tr class="comp">
					<td colspan="3" rowspan="3">a) Tanques (destinados a depósitos de líquidos o gases excepto tanques australianos) Indique m3</td>
					<td  style="display: none"></td>
					<td  style="display: none"></td>
					<td><?php echo $Tanque1['cant']; ?></td>
					<td><?php Mostrar ($tanque11,  $Tanque1['cant']); ?></td>
					<td><?php echo $Tanque1['data']; ?></td>
					<td><?php echo $Tanque1['estCon']; ?></td>
					<td><?php echo $Tanque1['coefAj']; ?></td>
					<td><?php echo $Tanque1['valUni']; ?></td>
					<td><?php mostrar (number_for($Tanque1['val'],2),$Tanque1['val']); ?></td>
				</tr>
				<tr class="comp">
					<td><?php echo $Tanque2['cant']; ?></td>
					<td><?php Mostrar ($tanque12,  $Tanque2['cant']); ?></td>
					<td><?php echo $Tanque2['data']; ?></td>
					<td><?php echo $Tanque2['estCon']; ?></td>
					<td><?php echo $Tanque2['coefAj']; ?></td>
					<td><?php echo $Tanque2['valUni']; ?></td>
					<td><?php mostrar (number_for($Tanque2['val'],2),$Tanque2['val']); ?></td>
				</tr>
				<tr class="comp">
					<td><?php echo $Tanque3['cant']; ?></td>
					<td><?php Mostrar ($tanque13, $Tanque3['cant']); ?></td>
					<td><?php echo $Tanque3['data']; ?></td>
					<td><?php echo $Tanque3['estCon']; ?></td>
					<td><?php echo $Tanque3['coefAj']; ?></td>
					<td><?php echo $Tanque3['valUni']; ?></td>
					<td><?php mostrar (number_for($Tanque3['val'],2),$Tanque3['val']); ?></td>
				</tr>
				<tr class="comp">
					<td rowspan="2">b) Pavimentos</td>
					<td  style="display: none"></td>
					<td colspan="3">rígidos (de hormigón, adoquines, de madera o piedra, etc) Indique cant. de m2</td>
					<td><?php echo $PaviRig['cant']; ?></td>
					<td><?php echo $PaviRig['data']; ?></td>
					<td><?php echo $PaviRig['estCon']; ?></td>
					<td><?php echo $PaviRig['coefAj']; ?></td>
					<td><?php echo $PaviRig['valUni']; ?></td>
					<td><?php mostrar (number_for($PaviRig['val'],2),$PaviRig['val']); ?></td>
				</tr>
				<tr class="comp">
					<td colspan="3">flexibles (asfálticos o similares) Indique cantidad de m2 </td>
					<td><?php echo $PaviFlex['cant']; ?></td>
					<td><?php echo $PaviFlex['data']; ?></td>
					<td><?php echo $PaviFlex['estCon']; ?></td>
					<td><?php echo $PaviFlex['coefAj']; ?></td>
					<td><?php echo $PaviFlex['valUni']; ?></td>
					<td><?php mostrar (number_for($PaviFlex['val'],2),$PaviFlex['val']); ?></td>
				</tr>
				<tr class="comp">
					<td rowspan="3">c) Silos. Marcar según tipo</td>
					<td width="20x" class="text-center">A</td>
					<td>Hormigón armado (Indique en m3)</td>
					<td style="width: 3%;"><?php echo $SiloA['cant']; ?></td>
					<td><?php Mostrar ($SiloA2,$SiloA['cant']); ?></td>
					<td><?php echo $SiloA['data']; ?></td>
					<td><?php echo $SiloA['estCon']; ?></td>
					<td><?php echo $SiloA['coefAj']; ?></td>
					<td><?php echo $SiloA['valUni']; ?></td>
					<td><?php mostrar (number_for($SiloA['val'],2),$SiloA['val']); ?></td>
				</tr>
				<tr class="comp">
					<td width="20x" class="text-center">B</td>
					<td>Mamposteria (Indique en m3)</td>
					<td><?php echo $SiloB['cant']; ?></td>
					<td><?php Mostrar ($SiloB2,$SiloB['cant']); ?></td>
					<td><?php echo $SiloB['data']; ?></td>
					<td><?php echo $SiloB['estCon']; ?></td>
					<td><?php echo $SiloB['coefAj']; ?></td>
					<td><?php echo $SiloB['valUni']; ?></td>
					<td><?php mostrar (number_for($SiloB['val'],2),$SiloB['val']); ?></td>
				</tr>
				<tr class="comp">
					<td width="20x" class="text-center">C</td>
					<td>Chapa (Indique en m3) <br></td>
					<td><?php echo $SiloC['cant']; ?></td>
					<td><?php Mostrar ($SiloC2,$SiloC['cant']); ?></td>
					<td><?php echo $SiloC['data']; ?></td>
					<td><?php echo $SiloC['estCon']; ?></td>
					<td><?php echo $SiloC['coefAj']; ?></td>
					<td><?php echo $SiloC['valUni']; ?></td>
					<td><?php mostrar (number_for($SiloC['val'],2),$SiloC['val']); ?></td>
				</tr>
				<tr class="comp">
					<td class="noborde" rowspan="3"></td>
					<td class="noborde"></td>
					<td class="noborde"></td>
					<td class="noborde"></td>
					<td class="noborde"></td>
					<td class="noborde"></td>
					<td class="noborde"></td>
					<td class="noborde"></td>
					<td class="noborde">Total RUBRO 8 (entero redondeado)</td>
					<td><?php mostrar (number_for($totalrub8,0),$totalrub8) ?></td>
				</tr>
			</table>
		</div>
		<div class="rub9">
			<b>RUBRO 9 - Responsables de la presentación</b> <br>
			8 - A: Propietario, condómino, etc. <br><span style="font-size: 12px">
			Declaro/ramos bajo juramento en mi/nuestro carácter indicado, que los datos personales y antigüedad del edificio consignados en esta Declaración son
			correctos y completos y que la misma se ha confeccionado sin omitir ni falsear dato alguno que deba contener, siendo fiel expresión de la verdad. <br>
			Lugar y fecha. . . . . . . <?php echo $cons['lugar']; ?>. . . . . . . . . . .<?php echo $cons['fechaImp']; ?> . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . </span>
			<table class="table table-rub8 text-center">
				<tr>
					<td rowspan="2">APELLIDO Y NOMBRE</td>
					<td colspan="2">DOCUMENTO DE IDENTIDAD</td>
					<td rowspan="2">CARACTER(**)</td>
					<td rowspan="2">FIRMA</td>
				</tr>
				<tr>
					<td>TIPO(*)</td>
					<td>N°</td>

				</tr>
				<tr class="comp">
					<td><?php echo $FfnombreApellido ?></td>
					<td><?php echo $FftipoDni ?></td>
					<td><?php echo $Ffdni ?></td>
					<td><?php echo $FcCaracter ?></td>
					<td></td>
				</tr>
			</table>
			<span style="font-size: 9px; margin-bottom: 10px;">*)Unicamente Libreta Cívica, Libreta de Enrolamiento ó Documento Nacional de Identidad <span style="color: white;">--------------------</span>(**) Propietario, condóminos, usufructuario/s, poseedor/es a título de dueño/s. <br></span>
			9 - B: Propietario, condómino, etc. <br><span style="font-size: 12px">
			Suscribo la presente documentación en su aspecto técnico, asumiendo la responsabilidad propia del ejercicio profesional que me compete <br>
			Lugar y fecha. . . . . . . <?php echo $cons['lugar']; ?>. . . . . . . . . . .<?php echo $cons['fechaImp']; ?> . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . </span>
			<table class="table table-rub8 text-center">
				<tr  class="comp3">
					<td>APELLIDO Y NOMBRE </td>
					<td>MATRICULA N°</td>
					<td>FIRMA Y SELLO</td>
				</tr>
				<tr class="comp3">
					<td><?php if ((isset($mostrarProf)) && ($mostrarProf == 0)) {echo $FpnombreApellido;} ?></td>
					<td><?php if ((isset($mostrarProf)) && ($mostrarProf == 0)) {echo $Fpmatricula;} ?></td>
					<td></td>
				</tr>
			</table>
		</div>
		<!-- Scripts -->
		<script src="javascript/obj903.js"></script>
		<script src="javascript/valores903.js"></script>
		<script src="javascript/session.js"></script>
	</body>

</html>
	<?php
		//buffering of html code
    	$output = ob_get_clean();

		// reference the Dompdf namespace
		use Dompdf\Dompdf;

		// instantiate and use the dompdf class
		$dompdf = new Dompdf();
		$dompdf->loadHtml($output);

		// (Optional) Setup the paper size and orientation
		$dompdf->setPaper('A4');

		// Render the HTML as PDF
		$dompdf->render();

		// Output the generated PDF to Browser
		$filename = "905-HOJA2.pdf";
		$dompdf->stream($filename, array("Attachment" => 0));
	?>
