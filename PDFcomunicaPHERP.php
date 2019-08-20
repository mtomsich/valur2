<?php

include("sesion.php");
$pagina='PDFcomunicadosPHERPPHP';
include("sql/conexion.php");
include("seguridadForm.php");
require_once 'lib/pdf/autoload.inc.php';
ob_start();
include("sql/mostrarComunicado.php");
$idUsuario = $_SESSION['idUsuario'];
$rowIdPro = mysqli_fetch_array(mysqli_query($conexion,"SELECT idProfesional FROM usuarios WHERE idUsuario='$idUsuario'"));
$idProfesional = $rowIdPro[0];
$rowPro = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM profesionales WHERE idProfesional='$idProfesional'"));
//DATOS PROFESIONAL
$FpnombreApellido= $rowPro['pnombreApellido'];
$Fptitulo= $rowPro['titulo'];
$Fpmatricula = $rowPro['matricula'];
$Fpdistrito = $rowPro['distrito'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>PDFcomunicaPHRP.php</title>
	<style>
		@page {
			margin-top: 0.5em;
    	margin-left: 1.5em;
	  	margin-right: 1.5em;
			margin-bottom: 1.5em;
    }
		#logoComu{
			width: 50%;
			position: absolute;
			margin-right: 5px;
			margin-left: 340px;
			margin-top: -45px;
		}

		#headermedio {
			margin-left: 200px;
			position: absolute;
			margin-right: 200px;
			margin-top: 20px;
			font-family: 'Arial',sans-serif;
		}
		#header2{
			margin-left: 5px;
			position: absolute;
			margin-right: 200px;
			margin-top: 100px;
			font-family: 'Arial',sans-serif;
		}
		#header3{
			margin-left: 5px;
			position: absolute;
			margin-top: 245px;
			font-family: 'Arial',sans-serif;
		}
		table{
			width: 100%;
			border-collapse: collapse;
		}
		.tabla1{
			width: 130%;
			border-collapse: collapse;
			border-style: solid;
			border-width: 1px;
			border-color: black;
		}
		.izquierda{
			margin-left: -145px;
		}
		.letracomunicacion{
			font-size: 11px;
		}
		.doce{
			height: 12px;
		}
		.tdtabla{
			height: 25px;
		}
		.bordederecho{
			border-right-style: solid;
			border-right-color: black;
			border-right-width: 1px;
		}
		.bordes{
			border-top-style: solid;
			border-top-color: black;
			border-top-width: 1px;
			border-bottom-style: solid;
			border-bottom-color: black;
			border-bottom-width: 1px;
			border-left-style: solid;
			border-left-color: black;
			border-left-width: 1px;
			border-right-style: solid;
			border-right-color: black;
			border-right-width: 1px;
		}
		.ancho{
			width: 7%;
		}
		.ancho2{
			width: 9%;
		}
		.letradoce{
			font-size: 13px;
		}
		.tabla2{
			width: 130%;
			position: absolute;
		}
		.margen{
			text-align: left;
		}
		.tabla3{
			width: 100%;
			border-collapse: collapse;
			border-style: solid;
			border-width: 1px;
			border-color: black;
		}
		.textocatorce{
			font-size: 13px;
		}
		.letraquince{
			font-size:14px;
		}
		.plano{
			height: 200px;
		}
		.numero{
			margin-left: 265px;
			margin-top: -40;
		}
		.tablacomunicacion{
			width: 70%;
			position: absolute;
			margin-left: 230px;
			margin-top: -40px;
		}
		.tablacomunicacion2{
			width: 55%;
			position: absolute;
			margin-left: 130px;
			margin-top: -60px;
		}
		.firma{
			position: absolute;
			margin-left: 400px;
			margin-top: -70px!important;
		}
    .quince{
      height: 23px;
    }
    .cuadrado{
      margin-left: 155px;
      margin-top: -100px;
      width: 38%;
      border-collapse: collapse;
      border-style: solid;
      border-width: 1px;
      border-color: black;
    }
    .cuadrado1{
      margin-left: 380px;
      margin-top: 168px!important;
      width: 60%;
      border-collapse: collapse;
      border-style: solid;
      border-width: 1px;
      border-color: black;
    }
    .ladocuadrado{
      margin-left: 590px;
      margin-top: -20px;
    }
		.subrayado{
			border-bottom-style: solid;
			border-bottom-width: 0.9px;
		}
	</style>
</head>
<body>
    <div id="headermedio">
      <table class="izquierda">
        <tr>
          <td>
						<p class="letracomunicacion">
						<b>COMUNICACIÓN AL REGISTRO DE LA PROPIEDAD</b>
						<br>
						<b>DECRETO N° 10192/57</b>
						<br>
						<b>RESOLUCION N° 16/92 C.C.P</b>
          	</p>
					</td>
        </tr>
      </table>
      <img id="logoComu" src="img/logoMRP.png">
    </div>
		<br>
		<div id="header2">
		<table class="tabla1">
			<tr>
				<td class="textocatorce">&nbsp;<b>Para información de:</b></td>
				<td class="bordederecho"></td>
				<td class="textocatorce">&nbsp;<b>Producido por:</b></td>
				<td></td>
			</tr>
			<tr>
				<td class="doce"></td>
				<td class="doce bordederecho"></td>
				<td class="doce"></td>
				<td class="doce"></td>
			</tr>
			<tr>
				<td class="letraquince">&nbsp;<b>REGISTRO DE LA PROPIEDAD</b></td>
				<td class="bordederecho"></td>
				<td class="letraquince">&nbsp;<b>DEPARTAMENTO DE REGISTRACIÓN</b></td>
				<td></td>
			</tr>
			<tr>
				<td class="letraquince">&nbsp;<b>Área</b></td>
				<td class="bordederecho"></td>
				<td class="letraquince">&nbsp;<b>CATASTRAL</b></td>
				<td></td>
			</tr>
		</table>
		<div class="doce"></div>
		<div class="textocatorce">
			<p><b>Comunicación sobre Plano:</b> Tipo </p>
      <p class="letraquince numero">Nº</p>
		</div>
		<table class="tablacomunicacion">
			<tr>
				<td class="bordes ancho quince" align="center"><?php echo $nro1 ?></td>
				<td class="bordes ancho2" align="center"><?php echo $nro2 ?></td>
				<td class="bordes ancho"align="center"><?php echo $nro3 ?></td>
			</tr>
		</table>
		<br>
    <br>
		<div class="">
			<p class="textocatorce"><b>Aprobado con Fecha:<b></p>
		</div>
		<br>
		<table class="tablacomunicacion2">
			<tr>
				<td class="bordes ancho quince" align="center"><?php echo date("d", strtotime($apro));  ?></td>
				<td class="bordes ancho2" align="center"><?php echo date("m", strtotime($apro));  ?></td>
				<td class="bordes ancho" align="center"><?php echo date("Y", strtotime($apro));  ?></td>
			</tr>
		</table>
    <table class="cuadrado">
      <tr>
        <td class="quince"><b><center><?php echo $tipo ?></center></b></td>
      </tr>
    </table>
		</div>
<br>
		<div id="header3">
			<div class="textocatorce">
				<p>En el día______________________________________se registra bajo el LEGAJO Nº__________________Fº________</p>
				<p>el plano de referencia que afecta a las inscripciones:<?php echo $insc ?></p>
				<p>Designacion del bien:<?php echo $desi?></p>
				<p>Nomenclatura Origen: <?php echo $nomo ?> </p>
				<p>Nomenclatura Definitiva: <?php echo $nomd ?> </p>
				<p>_________________________________________________________________________________________________</p>
				<p>PARTIDO:<?php echo $part ?></p>
				<p>El objeto es <?php echo $obje ?></p>
				<p>_________________________________________________________________________________________________</p>
				<p>Origina <?php echo $canp ?> unidades privativas y <?php echo $canc ?> unidades complementarias.</p>
			</div>
			<p class="textocatorce"><b>Notas del Plano de PHE</b></p>
				<div class="plano"><?php echo $rest ?></div>
			<div class="textocatorce">
				<br>
				<table>
					<tr>
						<td width="95"> Profesional actuante </td>
						<td class="subrayado"> <?php if ((isset($mostrarProf)) && ($mostrarProf == 0)) {echo $FpnombreApellido;} ?> </td>
					</tr>
				</table>
				<br>
				<table>
					<tr>
						<td width="28">Título </td>
						<td class="subrayado" width="190"> <?php if ((isset($mostrarProf)) && ($mostrarProf == 0)) {echo $Fptitulo;} ?> </td>
						<td width="45"> Matrícula </td>
						<td class="subrayado"> <?php if ((isset($mostrarProf)) && ($mostrarProf == 0)) {echo $Fpmatricula;} ?> </td>
						<td width="23">Dto. </td>
						<td class="subrayado" width="90"> <?php if ((isset($mostrarProf)) && ($mostrarProf == 0)) {echo $Fpdistrito;} ?> </td>
					</tr>
				</table>
			</div>
      <br>
			<div class="letracomunicacion">
				<p>
					<b>DEPARTAMENTO REGISTRACION CATASTRAL</b>
				</p>
			</div>
			<div class="doce"></div>
			<div class="textocatorce firma">
				<p>
					<b>............................................</b>
				</p>
				<p style="font-size:12px!important;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<b>Firma y Sello</b>
				</p>
			</div>

		<!-- <table class="tabla2">
			<tr>
				<td class="letradoce" colspan="2">En El día</td>
				<td class="margen" style="margin-left:-190px!important;"></td>
				<td class="letradoce" colspan="2">se registra bajo el LEGAJO Nº</td>
				<td></td>
				<td class="letradoce">Fº</td>
				<td></td>
			</tr>
			<tr>
				<td class="letradoce margen" colspan="3">el plano de referencia que afecta a las inscripciones:</td>
				<td class="letradoce margen" colspan="3"></td>
			</tr>
		</table> -->
		</div>
    <!-- <table class="cuadrado1">
      <tr>
        <td class="quince"></td>
      </tr>
    </table>
    <p class="ladocuadrado">Ratificación</p> -->
</body>
</html>

<?php
$output = ob_get_clean();

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($output);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$filename = "PDFform907-1.pdf";
$dompdf->stream($filename, array("Attachment" => 0));
?>
