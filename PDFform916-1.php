<?php
include("sesion.php");
	$pagina='PDFform9161PHP';
	include("sql/conexion.php");
	include("seguridadForm.php");

	include('sql/mostrarDatosObra.php');

	$post = $_GET["idform"];
	$x=mysqli_query($conexion, "SELECT * FROM `form916` WHERE `codForm916` = '".$post."'");
	$y = mysqli_fetch_array($x);
	if ($y['Cubierta'] != ''){ //POR SI SE DEJO EN BLANCO EL CAMPO
		$Cubierta = $y['Cubierta'];
	} else {
		$Cubierta = 0;
	}
	$mostrarProf = $y['firmaprof']; //MOSTRAR PROFESIONAL
	include('funciones/calculosrub4.php');
	include('funciones/valores916.php');
	include('funciones/calculosrub2.php');
	include('funciones/Totales916.php');
	include('funciones/calculosrub3.php');
	$TotalCub=$Fcoef[0]*$ValorUnitarioTotal*$Cubierta;

	$TipoDeCedula=$_GET["cedula"];
  	$Cedula=$_GET["idCedula"];
	  switch ($TipoDeCedula) {
	    case '1': $cons=mysqli_fetch_array(mysqli_query($conexion, "SELECT `fechaImp`, `lugar` FROM `cedula10707` WHERE `idCedula707` = $Cedula")); break;
	    case '2': $cons=mysqli_fetch_array(mysqli_query($conexion, "SELECT `fechaImp`, `lugar` FROM `cedulaph` WHERE `idCedulaPH` =  $Cedula"));  break;
	    case '3': $cons=mysqli_fetch_array(mysqli_query($conexion, "SELECT `fechaImp`, `lugar` FROM `cedulade` WHERE `idCedulaDE` =  $Cedula"));break;
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
			padding-top:20px;
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
				width: 100%;
				height: 100px;
			}
			.rub4{
			}
			.huggi{
				width: 95%;
				text-align: center;
			}
			tr.comp td{
				height: 20px;
			}
			.fuenteca{
				font-size: 12px;
			}
			.fuentedi{
				font-size: 10px;
			}
			.rub5{
				margin-top: 20px;
			}
			.noborde{
				border: 0 !important;
			}
			.table-rub5{
				font-size: 9px;
			}
			.table-rub6{
				font-size: 11px;
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
				margin-top: 40px;
				margin-bottom: 40px;
			}
			tr.comp3 td{
				height: 25px;
			}
			.rub5{
				margin-top: 30px;
				margin-bottom: 30px;
			}
			.rub6{
				margin-bottom: 30px;
			}
			.rub7{
				margin-bottom: 30px;
			}
			.version{
				position: fixed;
				top: 90px;
				left: 44%;
				font-size: 1.5em;
			}
		</style>
	</head>
	<body>
		<div class="imagen">
			<img src="img/logopdf916hoja1.png">
		</div>
		<div class="version">
				/<?php echo $version ?>
			</div>
		<div class="rub4">
			<b>RUBRO 4 determinación del valor unitario por m </b><span style="font-size: 11px">(sin incluir instalaciones complementarias)</span>
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
						<td rowspan="3">Valor unitario total columna 4 dividido por total columna 2 a trasladar a rubro 5 columna 7</td>
					</tr>
					<tr>
						<td class="fuenteca"><b>A</b></td>
						<td style="font-size: 12px;"><?php Mostrar ($Totales[0],$Totales[0]); ?></td>
						<td style="font-size: 12px;"><?php Mostrar(number_for($ValorBasicoA,0),$Totales[0]) ; ?></td>
						<td style="font-size: 12px;"><?php Mostrar(number_for($ValorBasicoA*$Totales[0],0),$Totales[0]); ?></td>
					</tr>
					<tr >
						<td class="fuenteca"><b>B</b></td>
						<td style="font-size: 12px;"><?php Mostrar ($Totales[1],$Totales[1]); ?></td>
						<td style="font-size: 12px;"><?php Mostrar (number_for($ValorBasicoB,0),$Totales[1]); ?></td>
						<td style="font-size: 12px;"><?php Mostrar(number_for($ValorBasicoB*$Totales[1],0),$Totales[1]); ?></td>
					</tr>
					<tr >
						<td class="fuenteca"><b>C</b></td>
						<td style="font-size: 12px;"><?php Mostrar ($Totales[2],$Totales[2]); ?></td>
						<td style="font-size: 12px;"><?php Mostrar(number_for($ValorBasicoC,0),$Totales[2]) ; ?></td>
						<td style="font-size: 12px;"><?php Mostrar(number_for($ValorBasicoC*$Totales[2],0),$Totales[2]); ?></td>
						<td rowspan="2" style="font-size: 12px;"><?php Mostrar (number_for(round($ValorUnitarioTotal,2),2),$ValorUnitarioTotal) ?>
					</tr>
					<tr class="comp2">
						<td class="fuenteca"> <b>TOTALES</b></td>
						<td style="font-size: 12px;"><?php Mostrar ($Total,$Total) ?></td>
						<td style="border: 0"></td>
						<td style="font-size: 12px;"><?php Mostrar (number_for($ValorBasicoTotal,0),$ValorBasicoTotal) ?></td>
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
					<td align="center"><?php Mostrar ($Est,$Cubierta)  ?></td>
					<td align="center"><?php Mostrar ($Fecha,$Cubierta)  ?></td>
					<td align="center"><?php Mostrar ($FechaReci,$Cubierta)  ?></td>
					<td align="center"><?php Mostrar ($Fcoef[0],$Cubierta) ; ?></td>
					<td align="center"><?php Mostrar (number_for(round($ValorUnitarioTotal,2),2),$Cubierta) ;  ?></td>
					<td align="center"><?php Mostrar (number_for($Cubierta,0),$Cubierta) ; ?></td>
					<td align="center"><?php Mostrar (number_for($TotalCub,2),$Cubierta)  ?></td>
				</tr>
			</table>
		</div>
		<!-- <div class="rub6">
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
					<td>a) Aire acondicionado <br>(indique m2 de superficie acondicionada)</td>
					<td><?php //echo $y['Aire'] ?></td>
					<td><?php //echo $y['Dia1'] ?></td>
					<td><?php //echo $y['InstaEstado'] ?></td>
					<td><?php //echo $Fcoef[0]; ?></td>
					<td><?php //echo CalcValUnitario(0,0); ?></td>
					<td><?php //echo CalcValorRub6(0,0,0); ?></td>
				</tr>
				<tr class="comp">
					<td>b) Calefaccion central <br>(indique numero de radiadores en todo el edificio)</td>
					<td><?php //echo $y['Calefacion'] ?></td>
					<td><?php //echo $y['Dia1'] ?></td>
					<td><?php //echo $y['InstaEstado'] ?></td>
					<td><?php //echo $Fcoef[0]; ?></td>
					<td><?php //echo CalcValUnitario(0,0); ?></td>
					<td><?php //echo CalcValorRub6(0,0,0); ?></td>
				</tr>
				<tr class="comp">
					<td>c) Contra incendio <br>(indique cantidad de rociadores/bocas) </td>
					<td><?php //echo $y['Incendio'] ?></td>
					<td><?php //echo $y['Dia1'] ?></td>
					<td><?php //echo $y['InstaEstado'] ?></td>
					<td><?php //echo $Fcoef[0]; ?></td>
					<td><?php //echo CalcValUnitario(0,0); ?></td>
					<td><?php //echo CalcValorRub6(0,0,0); ?></td>
				</tr>
				<tr class="comp">
					<td>d) Losa radiante <br>(indique m2 de superficie acondicionada)</td>
					<td><?php //echo $y['Losa'] ?></td>
					<td><?php //echo $y['Dia1'] ?></td>
					<td><?php //echo $y['InstaEstado'] ?></td>
					<td><?php //echo $Fcoef[0]; ?></td>
					<td><?php //echo CalcValUnitario(0,0); ?></td>
					<td><?php //echo CalcValorRub6(0,0,0); ?></td>
				</tr>
				<tr class="comp">
					<td class="noborde" rowspan="3"></td>
					<td class="noborde"></td>
					<td class="noborde"></td>
					<td class="noborde"></td>
					<td class="noborde"></td>
					<td class="noborde">Total RUBRO 6 (con dos decimales9</td>
					<td></td>
				</tr>
			</table>
		</div> -->
		<!-- <div class="rub7">
			<b>RUBRO 7 Resumen de valuación de los RUBROS 5 Y 6</b>
			<table class="table table-rub7">
				<tr>
					<td>Concepto</td>
					<td>Valor</td>
				</tr>
				<tr>
					<td>a) Total RUBRO 5</td>
					<td></td>
				</tr>
				<tr>
					<td>b) Total RUBRO 6</td>
					<td></td>
				</tr>
				<tr>
					<td class="noborde" style="text-align: right; font-size: 9px;">Total RUBRO 7 a trasladar a FORMULARIO 901, RUBRO 5, columna 4 <br>(entero redondeado)</td>
					<td class="comp"></td>
				</tr>
			</table>
		</div> -->
		<div class="rub8">
			<b>RUBRO 8 - Responsables de la presentación</b> <br>
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
			<div style="width: 100%;height: 20px;"></div>
			8 - B: Propietario, condómino, etc. <br><span style="font-size: 12px">
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
		$filename = "916-HOJA1.pdf";
		$dompdf->stream($filename, array("Attachment" => 0));
	?>
