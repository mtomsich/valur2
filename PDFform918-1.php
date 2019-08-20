<?php
include("sesion.php");
$pagina='PDFform9181PHP';
include("sql/conexion.php");
include("seguridadForm.php");

require_once 'lib/pdf/autoload.inc.php';
ob_start();

include ("sql/mostrarDatosObra.php");
include ('sql/mostrarForm918.php');

function checkbox($dato) {
	if($dato==1){
		echo 'SI';
	} else {
			echo 'NO';
	}
	return $dato;
}
?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">

	<style>
	@page {
		margin-top: 0.5em;
    	margin-left: 1em;
	  	margin-right: 1.2em;
		margin-bottom: 1.3em;
        }
		h1{font-size:13px;}
	body{
		font-family: 'Arial',sans-serif;
		font-size:13px;
		}

	table{
		width: 100%;
		border-collapse: collapse;
		font-size: 10px;
		}

	td, tr, th {
		padding: 5px;
		}

	td, th{
		padding-left:2px;
		}
		.rubro{font-size: 13px;}
		.rubro3{font-size: 13px;
		position:absolute;
		margin-left:400px;
		margin-top:-50px;}
		.tabla1{width:50%;margin-top:20px;
		}
		.tabla2{width:660px;
			margin-left:290px;
			margin-top:-60px;
		}
		.imglogo{width:100%;}
		.rubro4{font-size: 13px;
		margin-top:15px;}
		.tabla3{margin-top:-5px;}
		.tabla4{}
		.borde{

			border-bottom-style: solid;
			border-bottom-color: gray;
			border-right-style: solid;
			border-right-color: black;
		}
		.borden{
			border-bottom-style: solid;
			border-bottom-color: black;
			border-right-style: solid;
			border-right-color: black;
			border-top-style: solid;
			border-top-color: black;
			}
		.borden2{
			border-style: solid;
			border-color: black;

			}
		.borde1{
			border-bottom-style: solid;
			border-bottom-color: gray;
			border-right-style: solid;
			border-right-color: black;
			border-left-style: solid;
			border-left-color: black;

		}
		.borde2{
			border-bottom-style: solid;
			border-bottom-color: black;
			border-right-style: solid;
			border-right-color: black;
			border-left-style: solid;
			border-left-color: black;
			}
		.rubro6{margin-top:-10px;}
		.nomenclatura {
			border-style: solid;border-width: 1px;text-align: center;font-size: 11px;}
		.tabla5{text-align:center;
				width:758px;
		}
		.textalign{
			text-align: center;
		}
		.rubro9{
			margin-top: -50px;
		}
		.ru9{
			padding-top: -30px;
		}
	</style>

</head>


<body>
	<img class="imglogo" src="img/918.png"/>
	<h1 class="rubro">RUBRO 1: DATOS DEL INMUEBLE</h1>

	<table width="100%" border="1">
  <tbody>
    <tr>
      <td colspan="10">Partido (en letras)&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $Fpartido ?></b></td>

    </tr>
    <tr>
      <td class="textalign">Partido</td>
      <td class="textalign">Partida</td>
      <td class="textalign">Circunscripción</td>
      <td class="textalign">Sección</td>
      <td class="textalign">Chacra</td>
      <td class="textalign">Quinta</td>
      <td class="textalign">Fracción</td>
      <td class="textalign">Manzana</td>
      <td class="textalign">Parcela</td>
      <td class="textalign">Subparcela</td>
    </tr>
    <tr>
      <td class="textalign"><b><?php echo $FcodPartido ?></b></td>
      <td class="textalign"><b><?php echo $Partida ?></b></td>
      <td class="textalign"><b><?php echo $Fcir ?></b></td>
      <td class="textalign"><b><?php echo $Fsec ?></b></td>
      <td class="textalign"><b><?php echo $Fcha ?></b></td>
      <td class="textalign"><b><?php echo $Fqui ?></b></td>
      <td class="textalign"><b><?php echo $Ffra ?></b></td>
      <td class="textalign"><b><?php echo $Fman ?></b></td>
      <td class="textalign"><b><?php echo $Fpar ?></b></td>
      <td class="textalign"><b><?php echo $Fsub ?></b></td>
    </tr>
    <tr>
      <td colspan="8">Calle&nbsp;&nbsp;&nbsp;<b><?php echo $domicilio ?></b></td>
      <td>N°&nbsp;&nbsp;&nbsp;<b><?php echo $FnroCalle ?></b></td>
      <td>Dpto.&nbsp;&nbsp;&nbsp;<b><?php echo $Fdpto ?></b></td>
    </tr>
    <tr>
      <td colspan="9">Localidad&nbsp;&nbsp;&nbsp;<b><?php echo $Flocalidad ?></b></td>
      <td>C.P.&nbsp;&nbsp;&nbsp;<b><?php echo $FcodigoPostal ?></b></td>
    </tr>
  </tbody>
</table>


	<h1  class="rubro">RUBRO 2: INFRAESTRUCTURA</h1>
	<h1  class="rubro3">RUBRO 3: TIERRA</h1>

	<table class="tabla1" border="1">
  <tbody>
    <tr>
      <td class="textalign">Pavimento</td>
      <td class="textalign">Alumbrado público</td>
      <td class="textalign">Energía eléctrica</td>
      <td class="textalign">Agua corriente</td>
      <td class="textalign">Cloacas</td>
      <td class="textalign">Gas natural</td>
    </tr>
    <tr>
      <td class="textalign"><b><?php $infraP = checkbox($infraP)?></b></td>
      <td class="textalign"><b><?php $infraA = checkbox($infraA)?></b></td>
      <td class="textalign"><b><?php $infraL = checkbox($infraL)?></b></td>
      <td class="textalign"><b><?php $infraAg = checkbox($infraAg)?></b></td>
      <td class="textalign"><b><?php $infraC = checkbox($infraC)?></b></td>
      <td class="textalign"><b><?php $infraG = checkbox($infraG)?></b></td>
    </tr>
  </tbody>
</table>
	<table class="tabla2" border="1">
  <tbody>
    <tr>
      <td style="padding:5px;">Superficie</td>
      <td class="textalign">Valor</td>
    </tr>
    <tr>
      <td class="textalign"><b><?php if ($VSup > 0) { echo $VSup; } else { echo "&nbsp;";} ?></b></td>
      <td class="textalign"><b><?php if ($VTierra > 0) { echo $VTierra; } else { echo "&nbsp;";} ?></b></td>
    </tr>
  </tbody>
</table>

	<h1 class="rubro4">RUBRO 4: DESTINO DEL EDIFICIO - SEGÚN CÓDIGO DE NOMENCLADOR DE DESTINO</h1>
	<table class="tabla3" width="100%" border="1">
  <tbody>
    <tr>
      <td width="80%"><b><?php if ($Dest !=""){ echo $Dest;?></b><?php echo " - ";echo $Desti;} else {echo "&nbsp;";}?></td>
      <td>Código&nbsp;&nbsp;&nbsp;<b><?php echo $CodD ?></b></td>
    </tr>
  </tbody>
</table>

	<h1 class="rubro5">RUBRO 5: ACCESIONES</h1>



	<table colspan="12" class="tabla4" width="100%" >
  <tbody>
    <tr>
      <td class="borden2 textalign">Data</td>
      <td class="borden textalign">Superficie total<br>Cubierta + semicubierta expresada con entero redondeado en m2</td>
      <td class="borden textalign">Tipo de edificio*</td>
      <td class="borden textalign">Destino del edificio**</td>
      <td class="borden textalign">Valor Unitario Básico<br>(se tomará el valor de la Tabla I, II ó III que corresponda al destino del edificio)</td>
      <td class="borden textalign">Coef. de deprec.</td>
      <td class="borden textalign">Valor Total<br>(Valor Unitario Básico x Superficie x Coef de deprec.)</td>
    </tr>
    <tr>
      <td class="borde1">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
    </tr>
    <tr>
      <td class="borde1">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
    </tr>
    <tr>
      <td class="borde1">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
    </tr>
    <tr>
      <td class="borde1">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
    </tr>
    <tr>
      <td class="borde1">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
    </tr>
    <tr>
      <td class="borde1">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
    </tr>
    <tr>
      <td class="borde1">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
    </tr>
    <tr>
      <td class="borde1">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
    </tr>
    <tr>
      <td class="borde1">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
      <td class="borde">&nbsp;</td>
    </tr>
    <tr>
      <td class="borde2">&nbsp;</td>
      <td class="borde2">&nbsp;</td>
      <td class="borde2">&nbsp;</td>
      <td class="borde2">&nbsp;</td>
      <td class="borde2">&nbsp;</td>
      <td class="borde2">&nbsp;</td>
      <td class="borde1">&nbsp;</td>
    </tr>
	  <tr>
		  <td colspan="6" rowspan="2">*solo la letra que identifica el tipo de construccion segun el formulario con que se evalua <p style="text-align: right;margin-top: -15px;margin-right: 5px;">Sumatoria de valor<br><b style="font-size:8px;">(entero redondeable)</b></p><p style="margin-top:-15px;">** Formulario con que se valúa: 903 - vivienda; 904 - comercio; 905 - galpón; 906 - cine,teatros</p>
		  </td>
		  <td class="borde2">&nbsp;
		  </td>
	  </tr>
  </tbody>
</table>

	<h1 class="rubro6">RUBRO 6: VALUACION DEL EDIFICIO PREINCORPORADO</h1>
		<table class="tabla5" width="100%" border="1">
  <tbody>
    <tr>
      <td width="80%">&nbsp;</td>
      <td><b><?php echo $ValuacionEP ?></b></td>
    </tr>
  </tbody>
</table>

	<h1 class="rubro7">RUBRO 7: VALUACION FISCAL (Suma del total, Rubro 3, Rubro 5 y Rubro 6). Expresado en letras y en números</h1>
		<table class="tabla6" width="100%" border="1">
  <tbody>
    <tr>
      <td width="80%">en letras</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>

	<table style="width: 100%; border-spacing: 0px; margin-top:3px">
			<tr>
				<td style="font-size:13px"> <b> RUBRO 8: OBSERVACIONES </b></td>
			</tr>
			<tbody class="nomenclatura">
				<tr>
					<td style="text-align:left;padding:7px;vertical-align:top" height="100">
						<p style="margin-left:2px!important;margin-top:0px!important;font-size:12px;"><?php echo wordwrap($observaciones, 110, "<br>" ,False) ?></p>
						</td>
				</tr>
			</tbody>
		</table>

	<img style="margin-top:80px;" width="90%" src="img/calle918-1.png"/>
	<img style="margin-top:-20px;margin-left:8px;" src="img/calle918-2.png"/>

	<h1 class="rubro9">RUBRO 9: RESPONSABLES DE LA ACTUACION</h1>
	<table class="tabla5 ru9" border="1">
  <tbody>
    <tr>
      <td>Apellido y Nombre</td>
      <td>Legajo</td>
      <td>Firma</td>
    </tr>
    <tr>
      <td  class="textalign">&nbsp;</td>
      <td  class="textalign">&nbsp;</td>
      <td  class="textalign">&nbsp;</td>
    </tr>
    <tr>
      <td  class="textalign">&nbsp;</td>
      <td  class="textalign">&nbsp;</td>
      <td  class="textalign">&nbsp;</td>
    </tr>
    <tr>
      <td class="textalign">&nbsp;</td>
      <td class="textalign">&nbsp;</td>
      <td class="textalign">&nbsp;</td>
    </tr>
  </tbody>
</table>
	<table style="margin-top:10px;margin-left:-20px; text-align:center;width:700px">
		<tr><td></td></tr>
		<tr>
			<td style="font-size:11px;">Lugar y fecha:___________________________________ </td>
			<td> ________________________________________________ </td>
		</tr>

		<tr>
			<td> </td>
			<td style="font-size:11px"> Firma del Jefe o Responsable de la Delegación</td>
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
$filename = "PDFform918-1.pdf";
$dompdf->stream($filename, array("Attachment" => 0));

?>
