<?php
include("sesion.php");
	$pagina='PDFform9121PHP';
	include("sql/conexion.php");
	include("seguridadForm.php");
	include('sql/mostrarDatosObra.php');

	require_once 'lib/pdf/autoload.inc.php';
	ob_start();
	$post = $_GET["idform"];
	$x=mysqli_query($conexion, "SELECT * FROM `form912` WHERE codForm912 =".$post);
	$Vec = mysqli_fetch_array($x);
	$mostrarProf = $Vec['firmaprof'];

	$TipoDeCedula=$_GET["cedula"];
  	$Cedula=$_GET["idCedula"];
	  switch ($TipoDeCedula) {
	    case '1': $cons=mysqli_fetch_array(mysqli_query($conexion, "SELECT `fechaImp`, `lugar` FROM `cedula10707` WHERE `idCedula707` = $Cedula")); break;
	    case '2': $cons=mysqli_fetch_array(mysqli_query($conexion, "SELECT `fechaImp`, `lugar` FROM `cedulaph` WHERE `idCedulaPH` =  $Cedula"));  break;
	    case '3': $cons=mysqli_fetch_array(mysqli_query($conexion, "SELECT `fechaImp`, `lugar` FROM `cedulade` WHERE `idCedulaDE` =  $Cedula"));break;
	  }

	$ValTotalIncisoA=0;
	$ValTotalIncisoB=0;
	$ValTotalIncisoC=0;


	include ('funciones/calculos912.php');
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
			margin-left: 1em;
			margin-right: 1em;
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
				width: 100%;
			}
			.rub4{
				margin-top: -10px;
			}
			.huggi{
				width: 95%;
				text-align: center;
			}
			tr.comp td{
				height: 16px;
			}
			.fuenteca{
				font-size: 10px;
			}
			.fuentedi{
				font-size: 10px;
			}
			.rub5{
				margin-top: 0px;
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
				font-size: 12px;
				margin-top: 0px;
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
				margin-top: 10px;
			}
			.rub7{
				margin-top: 10px;
			}
			tr.comp3 td{
				height: 18px;
			}
			.noborde{
				border: 0 !important;
			}
			.rub1{
				font-size: 12px;
				margin-top: 10px;
			}
			.rub2{
				font-size: 12px;
			}
			.imagen{
				margin-top: -20px;
			}
		</style>
	</head>
	<body>
		<div class="imagen"><img src="img/logopdf912.png"></div>
		<div class="rub1">
			<b>RUBRO 1 Denominacion Catastral</b>
			<table class="table">
				<tr>
					<td colspan="4" style="font-size: 13px"><b>PARTIDO</b>(en letras) <?php echo  $Fpartido ?></td>
					<td colspan="3" class="noborde"></td>
				</tr>
				<tr style="text-align: center;">
					<td style="background-color: black; color: white; border-right-color: white !important;">Partido</td>
					<td style="width: 170px; background-color: black; color: white;">Partida</td>
					<td>Circunscripcion</td>
					<td>Seccion</td>
					<td>Ch.</td>
					<td>Qta.</td>
					<td>Fracc.</td>
					<td>Parcela</td>
				</tr>
				<tr class="comp">
					<td><?php echo  $FcodPartido ?></td>
					<td><?php echo  $Fpartida ?></td>
					<td><?php echo 	$Fcir ?></td>
					<td><?php echo 	$Fsec ?></td>
					<td><?php echo  $Fcha ?></td>
					<td><?php echo $Fqui ?></td>
					<td><?php echo $Ffra ?></td>
					<td><?php echo $Fpar ?></td>
				</tr>
				<tr>
					<td>PROPIETARIO <br>apelldio y nombre</td>
					<td colspan="5"><?php echo $FcnombreApellido ?></td>
					<td colspan="2">Expediente</td>
				</tr>
			</table>
		</div>
		<table>
			<tr>
				<td width="60%"><b>RUBRO 2: Valuacion de instalaciones y obras accesorias</b></td>
				<td rowspan="2" style="font-size: 11px"><i>Nota: en caso que las caracteristicas de cualquiera de las instalaciones u obras accesorias no conicidan con las descriptas. Deberan
				declararse en aquel tipo que mas se asemeje.</i></td>
			</tr>
			<tr>
				<td style="font-size: 13px;">Inciso A) Alambrados</td>
			</tr>
		</table>
		<div class="rub2">
			<table class="table text-center">
				<tr>
					<td rowspan="2">Tipo</td>
					<td rowspan="2">Descripcion</td>
					<td rowspan="2">Estado de <br>conservac.</td>
					<td colspan="2">Longitud en m</td>
					<td colspan="2">Valores basicos por m</td>
					<td colspan="2">valor</td>
					<td rowspan="2">valor <br>total <br>(5+6)</td>
				</tr>
				<tr>
					<td>1 <br> no med</td>
					<td>2 <br>med</td>
					<td>3<br> no med</td>
					<td>4<br>med</td>
					<td>5<br> no med</td>
					<td>6<br>med</td>
				</tr>
				<!-- A -->
				<tr>
					<td rowspan="3">A</td>
					<td rowspan="3" style="font-size: 12px">7 Hilos lisos, 2 hilos de puas, <br>postes de madera dura a 12mts., <br>5 varillas de madera dura</td>
					<td>Bueno</td>
					<td><?php echo Mostrar($Vec['AlamA1'],$Vec['AlamA1']) ?></td>
					<td><?php echo Mostrar($Vec['AlamA4'],$Vec['AlamA4']) ?></td>
					<td><?php Mostrar(60,$Vec['AlamA1']) ?></td>
					<td><?php Mostrar(20,$Vec['AlamA4']) ?></td>
					<td><?php Mostrar (number_format (Multiplicacion($Vec['AlamA1'],60),2),Multiplicacion($Vec['AlamA1'],60)); ?></td>
					<td><?php Mostrar (number_format (Multiplicacion($Vec['AlamA4'],30),2),Multiplicacion($Vec['AlamA4'],30)); ?></td>
					<td><?php Mostrar (number_format (Rub2IncisoATotal(1),2),Rub2IncisoATotal(1)); ?></td>
				</tr>
				<tr>
					<td>Regular</td>
					<td><?php echo Mostrar($Vec['AlamA2'],$Vec['AlamA2']) ?></td>
					<td><?php echo Mostrar($Vec['AlamA5'],$Vec['AlamA5']) ?></td>
					<td><?php Mostrar(30,$Vec['AlamA2']) ?></td>
					<td><?php Mostrar(15,$Vec['AlamA5']) ?></td>
					<td><?php Mostrar (number_format (Multiplicacion($Vec['AlamA2'],30),2),Multiplicacion($Vec['AlamA2'],30)); ?></td>
					<td><?php Mostrar (number_format (Multiplicacion($Vec['AlamA5'],15),2),Multiplicacion($Vec['AlamA5'],15)); ?></td>
					<td><?php Mostrar (number_format (Rub2IncisoATotal(2),2),Rub2IncisoATotal(2)); ?></td>
				</tr>
				<tr>
					<td>Regular</td>
					<td><?php echo Mostrar($Vec['AlamA3'],$Vec['AlamA3']) ?></td>
					<td><?php echo Mostrar($Vec['AlamA6'],$Vec['AlamA6']) ?></td>
					<td><?php Mostrar(15,$Vec['AlamA3']) ?></td>
					<td><?php Mostrar(7.5,$Vec['AlamA6']) ?></td>
					<td><?php Mostrar (number_format (Multiplicacion($Vec['AlamA3'],15),2),Multiplicacion($Vec['AlamA3'],15)); ?></td>
					<td><?php Mostrar (number_format (Multiplicacion($Vec['AlamA6'],7.5),2),Multiplicacion($Vec['AlamA6'],7.5)); ?></td>
					<td><?php Mostrar (number_format (Rub2IncisoATotal(3),2),Rub2IncisoATotal(3)); ?></td>
				</tr>
				<!-- B -->
				<tr>
					<td rowspan="3">B</td>
					<td rowspan="3" style="font-size: 12px">5 Hilos lisos, 2 hilos de puas, <br>postes de madera dura a 15mts., <br>5 varillas de madera dura</td>
					<td>Bueno</td>
					<td><?php echo Mostrar($Vec['AlamA7'],$Vec['AlamA7']) ?></td>
					<td><?php echo Mostrar($Vec['AlamA10'],$Vec['AlamA10']) ?></td>
					<td><?php Mostrar(45,$Vec['AlamA7']) ?></td>
					<td><?php Mostrar(22.5,$Vec['AlamA10']) ?></td>
					<td><?php Mostrar (number_format (Multiplicacion($Vec['AlamA7'],45),2),Multiplicacion($Vec['AlamA7'],45)); ?></td>
					<td><?php Mostrar (number_format (Multiplicacion($Vec['AlamA10'],22.5),2),Multiplicacion($Vec['AlamA10'],22.5)); ?></td>
					<td><?php Mostrar (number_format (Rub2IncisoATotal(4),2),Rub2IncisoATotal(4)); ?></td>
				</tr>
				<tr>
					<td>Regular</td>
					<td><?php echo Mostrar($Vec['AlamA8'],$Vec['AlamA8']) ?></td>
					<td><?php echo Mostrar($Vec['AlamA11'],$Vec['AlamA11']) ?></td>
					<td><?php Mostrar(22.5,$Vec['AlamA8']) ?></td>
					<td><?php Mostrar(12,$Vec['AlamA11']) ?></td>
					<td><?php Mostrar (number_format (Multiplicacion($Vec['AlamA8'],22.5),2),Multiplicacion($Vec['AlamA8'],22.5)); ?></td>
					<td><?php Mostrar (number_format (Multiplicacion($Vec['AlamA11'],12),2),Multiplicacion($Vec['AlamA11'],12)); ?></td>
					<td><?php Mostrar (number_format (Rub2IncisoATotal(5),2),Rub2IncisoATotal(5)); ?></td>
				</tr>
				<tr>
					<td>Malo</td>
					<td><?php echo Mostrar($Vec['AlamA9'],$Vec['AlamA9']) ?></td>
					<td><?php echo Mostrar($Vec['AlamA12'],$Vec['AlamA12']) ?></td>
					<td><?php Mostrar(12.5,$Vec['AlamA9']) ?></td>
					<td><?php Mostrar(6,$Vec['AlamA12']) ?></td>
					<td><?php Mostrar (number_format (Multiplicacion($Vec['AlamA9'],12.5),2),Multiplicacion($Vec['AlamA9'],12.5)); ?></td>
					<td><?php Mostrar (number_format (Multiplicacion($Vec['AlamA12'],6),2),Multiplicacion($Vec['AlamA12'],6)); ?></td>
					<td><?php Mostrar (number_format (Rub2IncisoATotal(6),2),Rub2IncisoATotal(6)); ?></td>
				</tr>
				<!-- C -->
				<tr>
					<td rowspan="3">C</td>
					<td rowspan="3" style="font-size: 12px">2 Hilos lisos, 1 hilos de puas, <br>postes de madera semidura a 15mts., <br>5 varillas de madera semidura</td>
					<td>Bueno</td>
					<td><?php echo Mostrar($Vec['AlamA13'],$Vec['AlamA13']) ?></td>
					<td><?php echo Mostrar($Vec['AlamA16'],$Vec['AlamA16']) ?></td>
					<td><?php Mostrar(30,$Vec['AlamA13']) ?></td>
					<td><?php Mostrar(15,$Vec['AlamA16']) ?></td>
					<td><?php Mostrar (number_format (Multiplicacion($Vec['AlamA13'],30),2),Multiplicacion($Vec['AlamA13'],30)); ?></td>
					<td><?php Mostrar (number_format (Multiplicacion($Vec['AlamA16'],15),2),Multiplicacion($Vec['AlamA16'],15)); ?></td>
					<td><?php Mostrar (number_format (Rub2IncisoATotal(7),2),Rub2IncisoATotal(7)); ?></td>
				</tr>
				<tr>
					<td>Regular</td>
					<td><?php echo Mostrar($Vec['AlamA14'],$Vec['AlamA14']) ?></td>
					<td><?php echo Mostrar($Vec['AlamA17'],$Vec['AlamA17']) ?></td>
					<td><?php Mostrar(15,$Vec['AlamA14']) ?></td>
					<td><?php Mostrar(7.5,$Vec['AlamA17']) ?></td>
					<td><?php Mostrar (number_format (Multiplicacion($Vec['AlamA14'],15),2),Multiplicacion($Vec['AlamA14'],15)); ?></td>
					<td><?php Mostrar (number_format (Multiplicacion($Vec['AlamA17'],7.5),2),Multiplicacion($Vec['AlamA17'],7.5)); ?></td>
					<td><?php Mostrar (number_format (Rub2IncisoATotal(8),2),Rub2IncisoATotal(8)); ?></td>
				</tr>
				<tr>
					<td>Malo</td>
					<td><?php echo Mostrar($Vec['AlamA15'],$Vec['AlamA15']) ?></td>
					<td><?php echo Mostrar($Vec['AlamA18'],$Vec['AlamA18']) ?></td>
					<td><?php Mostrar(7.5,$Vec['AlamA15']) ?></td>
					<td><?php Mostrar(5,$Vec['AlamA18']) ?></td>
					<td><?php Mostrar (number_format (Multiplicacion($Vec['AlamA15'],7.5),2),Multiplicacion($Vec['AlamA15'],7.5)); ?></td>
					<td><?php Mostrar (number_format (Multiplicacion($Vec['AlamA18'],5),2),Multiplicacion($Vec['AlamA18'],5)); ?></td>
					<td><?php Mostrar (number_format (Rub2IncisoATotal(9),2),Rub2IncisoATotal(9)); ?></td>
				</tr>
				<tr>
					<td class="noborde" colspan="7">A transladar a Rubro 3. . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</td>
					<td class="noborde" colspan="2"><b>Total inciso A)</b><br><span style="font-size: 9px; color: grey">(con 2 decimales)</span></td>
					<td> <?php Mostrar (number_format ($TotalRub2IncisoA,2),$TotalRub2IncisoA); ?></td>
				</tr>
			</table>
			Inciso B) silos:
			<table class="table text-center" style="font-size: 12px">
				<tr>
					<td>Tipo</td>
					<td>Descripcion</td>
					<td>Estado de <br>conservac.</td>
					<td>Data <br><span style="color: grey">dia/mes/año</span></td>
					<td>Cantidad de silos</td>
					<td>1 <br>Capacidad total en m3</td>
					<td>2 <br>Coeficiente de ajuste <br>Tabla de depreciac</td>
					<td>3 <br>Valor basico por m3</td>
					<td>Valor <br><span style="color: grey">(1 x 2 x 3)</span></td>
				</tr>
				<tr>
					<td><?php echo "A"; ?></td>
					<td><?php echo "De hormigon"; ?></td>
					<td><?php MostrarRub2IncisoB($Vec['SiloEst1'], "1")  ?></td>
					<td><?php MostrarRub2IncisoB($Vec['SiloFec1'], "1")  ?></td>
					<td><?php MostrarRub2IncisoB($Vec['SiloCant1'], "1")  ?></td>
					<td><?php MostrarRub2IncisoB($Vec['SiloCap1'], "1")  ?></td>
					<td><?php MostrarRub2IncisoB(CoefRub2IncisoB($Vec['SiloEst1'], $Vec['SiloFec1']),"1"); ?></td>
					<td><?php MostrarRub2IncisoB(ValorBasicoRub2IncisoB("A",$Vec['SiloCap1']),"1"); ?></td>
					<td><?php MostrarRub2IncisoB (Mul4($Vec['SiloCant1'],$Vec['SiloCap1'],CoefRub2IncisoB($Vec['SiloEst1'], $Vec['SiloFec1']), ValorBasicoRub2IncisoB("A",$Vec['SiloCap1'])),"1"); ?></td>
				</tr>
				<tr>
					<td><?php echo "B" ?></td>
					<td><?php echo "De mamposteria"  ?></td>
					<td><?php MostrarRub2IncisoB($Vec['SiloEst2'], "2")  ?></td>
					<td><?php MostrarRub2IncisoB($Vec['SiloFec2'], "2")  ?></td>
					<td><?php MostrarRub2IncisoB($Vec['SiloCant2'], "2")  ?></td>
					<td><?php MostrarRub2IncisoB($Vec['SiloCap2'], "2")  ?></td>
					<td><?php MostrarRub2IncisoB(CoefRub2IncisoB($Vec['SiloEst2'], $Vec['SiloFec2']),"2"); ?></td>
					<td><?php MostrarRub2IncisoB(ValorBasicoRub2IncisoB("B",$Vec['SiloCap2']),"2"); ?></td>
					<td><?php MostrarRub2IncisoB (Mul4($Vec['SiloCant2'],$Vec['SiloCap2'],CoefRub2IncisoB($Vec['SiloEst2'], $Vec['SiloFec2']), ValorBasicoRub2IncisoB("B",$Vec['SiloCap2'])),"2"); ?></td>
				</tr>
				<tr>
					<td><?php echo "C" ?></td>
					<td><?php echo "De chapa"  ?></td>
					<td><?php MostrarRub2IncisoB($Vec['SiloEst3'], "3")  ?></td>
					<td><?php MostrarRub2IncisoB($Vec['SiloFec3'], "3")  ?></td>
					<td><?php MostrarRub2IncisoB($Vec['SiloCant3'], "3")  ?></td>
					<td><?php MostrarRub2IncisoB($Vec['SiloCap3'], "3")  ?></td>
					<td><?php MostrarRub2IncisoB(CoefRub2IncisoB($Vec['SiloEst3'], $Vec['SiloFec3']),"3"); ?></td>
					<td><?php MostrarRub2IncisoB(ValorBasicoRub2IncisoB("C",$Vec['SiloCap3']),"3"); ?></td>
					<td><?php MostrarRub2IncisoB (Mul4($Vec['SiloCant3'],$Vec['SiloCap3'],CoefRub2IncisoB($Vec['SiloEst3'], $Vec['SiloFec3']), ValorBasicoRub2IncisoB("C",$Vec['SiloCap3'])),"3"); ?></td>
				</tr>
				<tr>
					<td class="noborde" colspan="7">A transladar a Rubro 3. . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</td>
					<td class="noborde"><b>Total inciso B)</b><br><span style="color: grey">(con 2 decimales)</span></td>
					<td><?php echo Mostrar(number_format ($TotalRub2IncisoB,2),$TotalRub2IncisoB); ?></td>
				</tr>
			</table>
			<b>Obras accesorias</b> Inciso C) Molinos
			<table class="table text-center" style="font-size: 10px">
				<tr>
					<td rowspan="3">Tipo</td>
					<td rowspan="3">Descripcion</td>
					<td colspan="9">Estado de conservacion</td>
					<td rowspan="3">Valor <br><span style="color: grey">(3 + 6 + 9)</span></td>
				</tr>
				<tr>
					<td colspan="3">bueno</td>
					<td colspan="3">regular</td>
					<td colspan="3">malo</td>
				</tr>
				<tr>
					<td>1 <br>Cant. <br>de <br>unid.</td>
					<td>2 <br>Valor basico <br>por unidad</td>
					<td>3 <br>Valor <br><span style="color: grey">(1 * 2)</span></td>
					<td>4 <br>Cant. <br>de <br>unid.</td>
					<td>5 <br>Valor basico <br>por unidad</td>
					<td>6 <br>Valor <br><span style="color: grey">(4 * 5)</span></td>
					<td>7 <br>Cant. <br>de <br>unid.</td>
					<td>8 <br>Valor basico <br>por unidad</td>
					<td>9 <br>Valor <br><span style="color: grey">(7 * 8)</span></td>
				</tr>
				<tr>
					<td>A</td>
					<td>Torre reforzada <br> c/ tanque elevado</td>
					<td><?php Mostrar ($Vec['Molino1'],$Vec['Molino1']) ?></td>
					<td><?php Mostrar ("50000",$Vec['Molino1']) ?></td>
					<td><?php Mostrar (number_format (Multiplicacion($Vec['Molino1'], 50000),2),Multiplicacion($Vec['Molino1'], 50000)) ; ?></td>
					<td><?php Mostrar ($Vec['Molino2'],$Vec['Molino2']) ?></td>
					<td><?php Mostrar ("40000",$Vec['Molino2']) ?></td>
					<td><?php Mostrar (number_format (Multiplicacion($Vec['Molino2'], 40000),2),Multiplicacion($Vec['Molino2'], 40000)) ; ?></td>
					<td><?php Mostrar ($Vec['Molino3'],$Vec['Molino3']) ?></td>
					<td><?php Mostrar ("30000",$Vec['Molino3']) ?></td>
					<td><?php Mostrar (number_format (Multiplicacion($Vec['Molino3'], 30000),2),Multiplicacion($Vec['Molino3'], 30000)) ; ?></td>
					<td><?php
							$t = number_format (Multiplicacion($Vec['Molino1'], 50000) + Multiplicacion($Vec['Molino2'], 40000) + Multiplicacion($Vec['Molino3'], 30000),2);
							Mostrar($t,$t);
					?></td>
				</tr>
				<tr>
					<td>B</td>
					<td>Torre comun <br> s/ tanque elevado</td>
					<td><?php Mostrar ($Vec['Molino4'],$Vec['Molino4']) ?></td>
					<td><?php Mostrar ("35000",$Vec['Molino4']) ?></td>
					<td><?php Mostrar (number_format (Multiplicacion($Vec['Molino4'], 35000),2),Multiplicacion($Vec['Molino4'], 35000)) ; ?></td>
					<td><?php Mostrar ($Vec['Molino5'],$Vec['Molino5']) ?></td>
					<td><?php Mostrar ("25000",$Vec['Molino5']) ?></td>
					<td><?php Mostrar (number_format (Multiplicacion($Vec['Molino5'], 25000),2),Multiplicacion($Vec['Molino5'], 25000)) ; ?></td>
					<td><?php Mostrar ($Vec['Molino6'],$Vec['Molino6']) ?></td>
					<td><?php Mostrar ("20000",$Vec['Molino6']) ?></td>
					<td><?php Mostrar (number_format (Multiplicacion($Vec['Molino6'], 20000),2),Multiplicacion($Vec['Molino6'], 20000)) ; ?></td>
					<td><?php
							$t = number_format (Multiplicacion($Vec['Molino4'], 35000) + Multiplicacion($Vec['Molino5'], 25000) + Multiplicacion($Vec['Molino6'], 20000),2);
							Mostrar($t,$t);
					?></td>
				</tr>
				<tr>
					<td colspan="9" class="noborde">A transladar a Rubro 3. . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</td>
					<td colspan="2" class="noborde"><b>Total inciso C)</b><br><span style="color: grey">(con 2 decimales)</span></td>
					<td><?php echo Mostrar(number_format ($TotalRub2IncisoC,2),$TotalRub2IncisoC) ?></td>
				</tr>
			</table>
			Inciso D) Tanques auustralianos
			<table class="table text-center" style="font-size: 11px">
				<tr>
					<td rowspan="3">Tipo</td>
					<td rowspan="3">Descripcion</td>
					<td colspan="9">Estado de conservacion</td>
					<td rowspan="3">Valor <br><span style="color: grey">(3 + 6 + 9)</span></td>
				</tr>
				<tr>
					<td colspan="3">bueno</td>
					<td colspan="3">regular</td>
					<td colspan="3">malo</td>
				</tr>
				<tr>
					<td>1 <br>Cant. <br>de <br>unid.</td>
					<td>2 <br>Valor basico <br>por unidad</td>
					<td>3 <br>Valor <br><span style="color: grey">(1 * 2)</span></td>
					<td>4 <br>Cant. <br>de <br>unid.</td>
					<td>5 <br>Valor basico <br>por unidad</td>
					<td>6 <br>Valor <br><span style="color: grey">(4 * 5)</span></td>
					<td>7 <br>Cant. <br>de <br>unid.</td>
					<td>8 <br>Valor basico <br>por unidad</td>
					<td>9 <br>Valor <br><span style="color: grey">(7 * 8)</span></td>
				</tr>
				<tr>
					<td>A</td>
					<td>De chapa de zinc </td>
					<td><?php Mostrar ($Vec['Tanque1'],$Vec['Tanque1']) ?></td>
					<td><?php Mostrar ("15000",$Vec['Tanque1']) ?></td>
					<td><?php Mostrar (number_format (Multiplicacion($Vec['Tanque1'], 15000),2),Multiplicacion($Vec['Tanque1'], 15000)) ; ?></td>
					<td><?php Mostrar ($Vec['Tanque2'],$Vec['Tanque2']) ?></td>
					<td><?php Mostrar ("10000",$Vec['Tanque2']) ?></td>
					<td><?php Mostrar (number_format (Multiplicacion($Vec['Tanque2'], 10000),2),Multiplicacion($Vec['Tanque2'], 10000)) ; ?></td>
					<td><?php Mostrar ($Vec['Tanque3'],$Vec['Tanque3']) ?></td>
					<td><?php Mostrar ("7500",$Vec['Tanque3']) ?></td>
					<td><?php Mostrar (number_format (Multiplicacion($Vec['Tanque3'], 7500),2),Multiplicacion($Vec['Tanque3'], 7500)) ; ?></td>
					<td><?php
							$t = number_format (Multiplicacion($Vec['Tanque1'], 15000) + Multiplicacion($Vec['Tanque2'], 10000) + Multiplicacion($Vec['Tanque3'], 7500),2);
							Mostrar($t,$t);
					?></td>
				</tr>
				<tr>
					<td>B</td>
					<td>De hormigon</td>
					<td><?php Mostrar ($Vec['Tanque4'],$Vec['Tanque4']) ?></td>
					<td><?php Mostrar ("15000",$Vec['Tanque4']) ?></td>
					<td><?php Mostrar (number_format (Multiplicacion($Vec['Tanque4'], 15000),2),Multiplicacion($Vec['Tanque4'], 15000)) ; ?></td>
					<td><?php Mostrar ($Vec['Tanque5'],$Vec['Tanque5']) ?></td>
					<td><?php Mostrar ("10000",$Vec['Tanque5']) ?></td>
					<td><?php Mostrar (number_format (Multiplicacion($Vec['Tanque5'], 10000),2),Multiplicacion($Vec['Tanque5'], 10000)) ; ?></td>
					<td><?php Mostrar ($Vec['Tanque6'],$Vec['Tanque6']) ?></td>
					<td><?php Mostrar ("7000",$Vec['Tanque6']) ?></td>
					<td><?php Mostrar (number_format (Multiplicacion($Vec['Tanque6'], 7500),2),Multiplicacion($Vec['Tanque6'], 7500)) ; ?></td>
					<td><?php
							$t = number_format (Multiplicacion($Vec['Tanque4'], 15000) + Multiplicacion($Vec['Tanque5'], 10000) + Multiplicacion($Vec['Tanque6'], 7500),2);
							Mostrar($t,$t);
					?></td>
				</tr>
				<tr>
					<td colspan="9" class="noborde">A transladar a Rubro 3. . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</td>
					<td colspan="2" class="noborde"><b>Total inciso D)</b><br><span style="color: grey">(con 2 decimales)</span></td>
					<td><?php echo Mostrar(number_format ($TotalRub2IncisoD,2),$TotalRub2IncisoD) ?></td>
				</tr>
			</table>
		</div>
		<div class="rub3">
			RUBRO 3: Resumen de valuacion de instalaciones y obras accesorias
			<table class="table" style="font-size: 11px;">
				<tr>
					<td colspan="3">Total inciso A) Alambrados</td>
					<td width="15%;" class="text-center"> <?php Mostrar(number_format ($TotalRub2IncisoA,2),$TotalRub2IncisoA) ?></td>
				</tr>
				<tr>
					<td colspan="3">Total inciso B) Silos</td>
					<td class="text-center"> <?php Mostrar(number_format ($TotalRub2IncisoB,2),$TotalRub2IncisoB) ?></td>
				</tr>
				<tr>
					<td colspan="3">Total inciso C) Molinos</td>
					<td class="text-center"> <?php Mostrar(number_format ($TotalRub2IncisoC,2),$TotalRub2IncisoC) ?></td>
				</tr>
				<tr>
					<td colspan="3">Total inciso D) Tanques australianos</td>
					<td class="text-center"> <?php Mostrar(number_format ($TotalRub2IncisoD,2),$TotalRub2IncisoD) ?></td>
				</tr>
				<tr>
					<td class="noborde text-center" colspan="2">A transladar a Formulario 910, Rubro 4, inciso e . . . . . . . . . . . . . . . . .</td>
					<td class="noborde" style="text-align: right;"><b>Total Rubro 3	 <span style="color: white">-----</span></b><br><span style="color: grey">(entero redondeado)</span><span style="color: white">-----</td>
					<td class="text-center"> <?php echo Mostrar(number_format ($TotalRub2IncisoA + $TotalRub2IncisoB +$TotalRub2IncisoC +$TotalRub2IncisoD,0),$TotalRub2IncisoA + $TotalRub2IncisoB +$TotalRub2IncisoC +$TotalRub2IncisoD) ?></td>
				</tr>
			</table>
		</div>
		 <div style="page-break-after:always;"></div>

		<div class="rub4">RUBRO 4: Valuacion de plantaciones frutales y forestales</div>
		<table class="table text-center" style="font-size: 12px">
			<tr style="font-size: 10px">
				<td rowspan="2">1 <br>Parc. <br>N°</td>
				<td rowspan="2">2 <br>Variedad de <br>la plantacion</td>
				<td rowspan="2">3 <br>superficie <br>Ha/A/Ca</td>
				<td rowspan="2">4 <br>Coef. de ajuste por <br>estado sanitario</td>
				<td colspan="3">Valor basico por Ha. en periodo de</td>
				<td rowspan="2">valor <br>(3 * 4 * 5) o <br>(3 * 4 * 6) o <br>(3 * 4 * 7)</td>
				<td rowspan="2">Valor por parcela</td>
			</tr>
			<tr style="font-size: 10px">
				<td>5 Preproduccion</td>
				<td>6 Produccion</td>
				<td>7 Posproduccion</td>
			</tr>
			<tr>
				<td colspan="9" class="noborde" style="text-align: left;">Inciso A) Olivos</td>
			</tr>
			<tr>
				<?php FilaRub4("Bueno","1.00","Olivo","Oli","1","ValTotalIncisoA") ?>
			</tr>
			<tr>
				<?php FilaRub4("Regular","0.60","Olivo","Oli","2","ValTotalIncisoA") ?>
			</tr>
			<tr>
				<?php FilaRub4("Malo","0.25","Olivo","Oli","3","ValTotalIncisoA") ?>
			</tr>
			<tr>
				<?php FilaRub4("Bueno","1.00","Olivo","Oli","4","ValTotalIncisoA") ?>
			</tr>
			<tr>
				<?php FilaRub4("Regular","0.60","Olivo","Oli","5","ValTotalIncisoA") ?>
			</tr>
			<tr>
				<?php FilaRub4("Malo","0.25","Olivo","Oli","6","ValTotalIncisoA") ?>
			</tr>
			<tr>
				<?php FilaRub4("Bueno","1.00","Olivo","Oli","7","ValTotalIncisoA") ?>
			</tr>
			<tr>
				<?php FilaRub4("Regular","0.60","Olivo","Oli","8","ValTotalIncisoA") ?>
			</tr>
			<tr>
				<?php FilaRub4("Malo","0.25","Olivo","Oli","9","ValTotalIncisoA") ?>
			</tr>
			<tr>
				<td colspan="7"class="noborde">A transladar a Rubro 5. . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</td>
				<td class="noborde">Total inciso A)<br><span style="color: grey; font-size: 10px">(con 2 decimales)</span></td>
				<td><?php echo Mostrar(number_format ($ValTotalIncisoA,2),$ValTotalIncisoA) ?></td>
			</tr>
			<tr>
				<td colspan="9" class="noborde" style="text-align: left;">Inciso B) Otros frutales</td>
			</tr>
			<tr>
				<?php FilaRub4("Bueno","1.00",$Vec['FrutDet1'],"Fru","1","ValTotalIncisoB") ?>
			</tr>
			<tr>
				<?php FilaRub4("Regular","0.60",$Vec['FrutDet2'],"Fru","2","ValTotalIncisoB") ?>
			</tr>
			<tr>
				<?php FilaRub4("Malo","0.25",$Vec['FrutDet3'],"Fru","3","ValTotalIncisoB") ?>
			</tr>
			<tr>
				<?php FilaRub4("Bueno","1.00",$Vec['FrutDet4'],"Fru","4","ValTotalIncisoB") ?>
			</tr>
			<tr>
				<?php FilaRub4("Regular","0.60",$Vec['FrutDet5'],"Fru","5","ValTotalIncisoB") ?>
			</tr>
			<tr>
				<?php FilaRub4("Malo","0.25",$Vec['FrutDet6'],"Fru","6","ValTotalIncisoB") ?>
			</tr>
			<tr>
				<?php FilaRub4("Bueno","1.00",$Vec['FrutDet7'],"Fru","7","ValTotalIncisoB") ?>
			</tr>
			<tr>
				<?php FilaRub4("Regular","0.60",$Vec['FrutDet8'],"Fru","8","ValTotalIncisoB") ?>
			</tr>
			<tr>
				<?php FilaRub4("Malo","0.25",$Vec['FrutDet9'],"Fru","9","ValTotalIncisoB") ?>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td>Bueno 1.00</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td>Regular 0.60</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td>Malo 0.25</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td colspan="7"class="noborde">A transladar a Rubro 5. . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</td>
				<td class="noborde">Total inciso B)<br><span style="color: grey; font-size: 10px">(con 2 decimales)</span></td>
				<td><?php Mostrar(number_format ($ValTotalIncisoB,2),$ValTotalIncisoB) ?></td>
			</tr>
			<tr>
				<td colspan="9" class="noborde" style="text-align: left;">Inciso C) Forestales</td>
			</tr>
			<tr>
				<?php FilaRub4("Bueno","1.00",$Vec['PlanDet1'],"Plan","1","ValTotalIncisoC") ?>
			</tr>
			<tr>
				<?php FilaRub4("Regular","0.60",$Vec['PlanDet2'],"Plan","2","ValTotalIncisoC") ?>
			</tr>
			<tr>
				<?php FilaRub4("Malo","0.25",$Vec['PlanDet3'],"Plan","3","ValTotalIncisoC") ?>
			</tr>
			<tr>
				<?php FilaRub4("Bueno","1.00",$Vec['PlanDet4'],"Plan","4","ValTotalIncisoC") ?>
			</tr>
			<tr>
				<?php FilaRub4("Regular","0.60",$Vec['PlanDet5'],"Plan","5","ValTotalIncisoC") ?>
			</tr>
			<tr>
				<?php FilaRub4("Malo","0.25",$Vec['PlanDet6'],"Plan","6","ValTotalIncisoC") ?>
			</tr>
			<tr>
				<?php FilaRub4("Bueno","1.00",$Vec['PlanDet7'],"Plan","7","ValTotalIncisoC") ?>
			</tr>
			<tr>
				<?php FilaRub4("Regular","0.60",$Vec['PlanDet8'],"Plan","8","ValTotalIncisoC") ?>
			</tr>
			<tr>
				<?php FilaRub4("Malo","0.25",$Vec['PlanDet9'],"Plan","9","ValTotalIncisoC") ?>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td>Bueno 1.00</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td>Regular 0.60</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td>Malo 0.25</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td colspan="7"class="noborde">A transladar a Rubro 5. . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</td>
				<td class="noborde">Total inciso C)<br><span style="color: grey; font-size: 10px">(con 2 decimales)</span></td>
				<td><?php Mostrar(number_format ($ValTotalIncisoC,2),$ValTotalIncisoC) ?></td>
			</tr>
		</table>

		<div class="rub5">
			RUBRO 5: Resumen de valuacion de plantaciones <span style="color: grey"><i>(del rubro 4)</i></span>
			<table class="table" style="font-size: 11px;">
				<tr>
					<td colspan="3">Total inciso A) - Olivos</td>
					<td width="15%;" class="text-center"><?php Mostrar (number_format ($ValTotalIncisoA,2),$ValTotalIncisoA); ?></td>
				</tr>
				<tr>
					<td colspan="3">Total inciso B) - Otros frutales</td>
					<td class="text-center"><?php Mostrar (number_format ($ValTotalIncisoB,2),$ValTotalIncisoB); ?></td>
				</tr>
				<tr>
					<td colspan="3">Total inciso C) - Forestales</td>
					<td class="text-center"><?php Mostrar (number_format ($ValTotalIncisoC,2),$ValTotalIncisoC); ?></td>
				</tr>
				<tr>
					<td class="noborde text-center" colspan="2">A transladar a Formulario 910, Rubro 4, inciso f . . . . . . . . . . . . . . . . .</td>
					<td class="noborde" style="text-align: right;"><b>Total Rubro 5	 Valor <span style="color: white">-----</span></b><br><span style="color: grey">(entero redondeado)</span><span style="color: white">-----</td>
					<td class="text-center"><?php Mostrar (round ($ValTotalIncisoA+$ValTotalIncisoB+$ValTotalIncisoC,0),$ValTotalIncisoA+$ValTotalIncisoB+$ValTotalIncisoC); ?></td>
				</tr>
			</table>
		</div>
		<div class="rub8">
			RUBRO 6 - Responsables de la presentación<br>
			6 - A: Propietario, condómino, etc. <br><span style="font-size: 12px">
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
					<td><?php echo $Ffcaracter ?></td>
					<td></td>
				</tr>
			</table>
			<span style="font-size: 9px; margin-bottom: 10px;">*)Unicamente Libreta Cívica, Libreta de Enrolamiento ó Documento Nacional de Identidad <span style="color: white;">--------------------</span>(**) Propietario, condóminos, usufructuario/s, poseedor/es a título de dueño/s. <br></span>
			6 - B: Profesional interviniente. <br><span style="font-size: 12px">
			Suscribo la presente documentación en su aspecto técnico, asumiendo la responsabilidad propia del ejercicio profesional que me compete <br>
			Lugar y fecha. . . . . . . <?php echo $cons['lugar']; ?>. . . . . . . . . . .<?php echo $cons['fechaImp']; ?> . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . </span>
			<table class="table table-rub8 text-center">
				<tr  class="comp3">
					<td>APELLIDO Y NOMBRE </td>
					<td>MATRICULA N°</td>
					<td>DNI</td>
					<td>CUIT</td>
					<td>FIRMA Y SELLO</td>
				</tr>
				<tr class="comp3">
					<td><?php if ((isset($mostrarProf)) && ($mostrarProf == 0)) {echo $FpnombreApellido;} ?></td>
					<td><?php if ((isset($mostrarProf)) && ($mostrarProf == 0)) {echo $Fpmatricula;} ?></td>
					<td><?php if ((isset($mostrarProf)) && ($mostrarProf == 0)) {echo $Fpdni;} ?></td>
					<td><?php if ((isset($mostrarProf)) && ($mostrarProf == 0)) {echo $Fpcuit;} ?></td>
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
		$filename = "912-HOJA1.pdf";
		$dompdf->stream($filename, array("Attachment" => 0));
	?>
