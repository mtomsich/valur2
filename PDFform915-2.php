<?php
include("sesion.php");
	$pagina='PDFform9152PHP';
	include("sql/conexion.php");
	include("seguridadForm.php");

require_once 'lib/pdf/autoload.inc.php';
ob_start();

include ("sql/mostrarDatosObra.php");
include ('sql/mostrarForm915.php');

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">

<style>
	@page {
		margin-top: 1.5em;
  	margin-left: 1.5em;
  	margin-right: 1.2em;
		margin-bottom: 1.3em;
	}
	body{
		font-size:10px;
		font-family: 'Arial',sans-serif;
	}
	.rubro3{
		padding:-5px 0px 0px 5px;
		border:solid black 1px;
		font-size:13px;
		height: 150px;
	}
	.rubro3 p{
		color:#373737;
	}
	.rubro3 b{
		color:black;
	}
	.imgcalle{
		width: 750px;
		height: 730px;
		margin-top:10px;
	}
	td, tr, th {
		padding: 5px;
	}
	.borde{
		border:1px solid grey;
	}
	.rubro{
		font-size: 13px;
	}
	.text{
		font-size:12px;
		margin-top:-10px;
		position:absolute;
	}
	.tabla{
		margin-top:30px;
		text-align: center;
		width: 100%;
		border: 2px solid black;
		border-collapse: collapse;
	}
	.tabla1{
		border: 1px solid lightgray;
		border-collapse: collapse;
	}
	</style>
</head>

<body>

	<div>
		<table class="tabla1" width="100%" >
  <tbody>
	  <tr>
	  	<td><b>RUBRO 3</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBSERVACIONES</td>
	  </tr>
	  <tr><td class="tabla1" height="7"><b><?php echo $observaciones ?></b></td></tr>
	  <tr><td class="tabla1" height="7"></td></tr>
		<tr><td class="tabla1" height="7"></td></tr>
		<tr><td class="tabla1" height="7"></td></tr>
		<tr><td class="tabla1" height="7"></td></tr>
	  <tr><td height="7"></td></tr>
  </tbody>
		</table>
	</div>
	<img class="imgcalle" src="img/calle915.png"/>


	<h1 class="rubro">RUBRO 4: Profesional interviniente</h1>
	  <p class="text"><b style="font-size:11px!important">Suscribo la presente documentación en su aspecto técnico, asumiendo la responsabilidad propia del ejercício profesional que me compete.<br>
			Lugar y fecha</b>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $lugar; echo " - <b>"; echo date('d/m/Y',$strdate);?> </b></p>
	  <table class="tabla" width="100%" border="1">
  <tbody>
    <tr>
      <th class="borde" scope="col">APELLIDO Y NOMBRE</th>
      <th class="borde" scope="col">MATRICULA N°</th>
      <th class="borde" scope="col">FIRMA Y SELLO</th>
    </tr>
    <tr>
			<td class="borde"><b><?php if ((isset($mostrarProf)) && ($mostrarProf == 0)) {echo $PnombreApellido;} ?></b></td>
      <td class="borde"><b><?php if ((isset($mostrarProf)) && ($mostrarProf == 0)) {echo $Pmatricula;} ?></b></td>
      <td class="borde">&nbsp;</td>
    </tr>
  </tbody>
</table>
		<table style="margin-top:10px;margin-left:20px; text-align:center;width:700px">
		<tr><td></td></tr>
		<tr>
			<td style="font-size:11px;">___________________________________ </td>
			<td> ________________________________________________ </td>
		</tr>

		<tr>
			<td>SELLO FECHADOR </td>
			<td style="font-size:11px"> Firma del agente receptor</td>
		</tr>
	</table>

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
$filename = "PDFform915-2.pdf";
$dompdf->stream($filename, array("Attachment" => 0));
?>
