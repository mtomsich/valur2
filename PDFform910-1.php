<?php
include("sesion.php");
$pagina='PDFform9101PHP';
include("sql/conexion.php");
include("seguridadForm.php");

require_once 'lib/pdf/autoload.inc.php';
ob_start();

	include ("sql/mostrarDatosObra.php");
	include ("sql/mostrarForm910.php");

	//$totalR4=$tierraBas+$edifBas+$mejyedi+$edifAct+$mejBas912+$planBas;

	$TipoDeCedula=$_GET["cedula"];
  	$Cedula=$_GET["idCedula"];
	  switch ($TipoDeCedula) {
	    case '1': $FechaImp=mysqli_fetch_array(mysqli_query($conexion, "SELECT `fechaImp`, `lugar` FROM `cedula10707` WHERE `idCedula707` = $Cedula"))[0]; break;
	    case '2': $FechaImp=mysqli_fetch_array(mysqli_query($conexion, "SELECT `fechaImp`, `lugar` FROM `cedulaph` WHERE `idCedulaPH` =  $Cedula"))[0];  break;
	    case '3': $FechaImp=mysqli_fetch_array(mysqli_query($conexion, "SELECT `fechaImp`, `lugar` FROM `cedulade` WHERE `idCedulaDE` =  $Cedula"))[0];break;
	  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
<style>
@page {
		margin-top: 1.5em;
    margin-left: 1.5em;
	  margin-right: 1.2em;
		margin-bottom: 1.3em;
}
.contenedor {
  width: 850px;
}
#imglogo {
  width: 200px; margin-top: 0px; margin-left:-10px;
}
#img910 {
  width: 150px; margin-left:425px; margin-right:-50px; margin-top:0px;
}
.titulo {
  text-align:center; font-family: 'Arial',sans-serif; margin-top:-96px; margin-left:197px; font-weight: bold;
}
.col1 {
  font-family: 'Arial',sans-serif; margin-top:5px; margin-left:10px;
}
.col2-1 {
	font-family: 'Arial',sans-serif; margin-top:15px; margin-left:10px;
}
.col2-2 {
	font-family: 'Arial',sans-serif;margin-left:385px; margin-top:-300px;
}
.bordes {
  border-style: solid; border-width: 1px;
}
.bordeSimple {
  border-style: solid; border-width: 0.5px;
}
table {
  font-size:12px; border-spacing: 0px; text-align:center;
}
td {
  padding:2px;
}
.tablaBorde {
	border-style: solid; border-width: 2.5px;
}
.a {
  border-bottom:1px dotted #000000;
  text-decoration:none;
}
</style>
</head>
<body>
  <header>
    <div class="contenedor">
      <img id="imglogo" src="img/logopdf901.png">
      <img id="img910" src="img/img910.png">
      <div class="titulo">
        <table style="text-align:center">
          <tr>
            <td style="font-size:26px"> DE OFICIO </td>
          </tr>
          <tr>
            <td style="font-size:20px" width="300"> INMUEBLES RURALES O SUBRURALES </td>
          </tr>
        </table>
      </div>
  </header>
    <div class="col1">
      <table>
        <tr>
          <td style="font-size:18px;text-align:left;padding:0px"> <b>  &nbsp;RUBRO 1: Denominación Catastral </b> </td>
        </tr>
        <tr>
          <td  class="bordes" width="280" style="font-size:14px;text-align:left;padding:0px"> <b> &nbsp;PARTIDO </b> (en letras): <?php echo $Fpartido ?> </td>
        </tr>
      </table>
      <table class="tablaBorde" width="730px">
        <tr>
          <td class="bordeSimple" width="60" style="background-color:black;color:white;border-style:none"> Partido </td>
          <td class="bordeSimple" width="100" style="background-color:black;color:white;border-style:none"> Partida </td>
          <td class="bordeSimple" width="60"> Circunscripción </td>
          <td class="bordeSimple"> Sección </td>
          <td class="bordeSimple"> Ch. </td>
          <td class="bordeSimple"> Qta. </td>
          <td class="bordeSimple" width="80"> Fracc. </td>
          <td class="bordeSimple" width="60"> Parcela </td>
        </tr>
        <tr>
          <td class="bordeSimple" height="12"> <?php echo $FcodPartido ?> </td>
          <td class="bordeSimple"> <?php echo $Fpartida ?> </td>
          <td class="bordeSimple"> <?php echo $Fcir ?> </td>
          <td class="bordeSimple"> <?php echo $Fsec ?> </td>
          <td class="bordeSimple"> <?php echo $Fcha ?> </td>
          <td class="bordeSimple"> <?php echo $Fqui ?> </td>
          <td class="bordeSimple"> <?php echo $Ffra ?> </td>
          <td class="bordeSimple"> <?php echo $Fpar ?> </td>
        </tr>
        <tr>
          <td class="bordeSimple" colspan="6" style="text-align:left;padding:2px"> <b> PROPIETARIO </b> <br> Apellido y Nombre: <?php echo $FfnombreApellido ?> </td>
          <td class="bordeSimple" colspan="2" style="text-align:left;padding:2px"> Expediente </td>
        </tr>
      </table>
    </div>
		<div class="col2-1">
			<table width="266">
				<tr>
					<td style="font-size:18px;text-align:left;padding:0px"> <b>RUBRO 2: </b></td>
				</tr>
				<tr>
					<td style="font-size:10px;text-align:left;padding:0px;padding-bottom:2px"> Resumen de valuación de edificios Grupo 1: Edificios destinados
						a casa habitación, incluida la del administrador y excepto los puestos a construc. para
						el personal; oficinas de administ.; industrias; negocios. </td>
				</tr>
			</table>
			<table class="tablaBorde" width="266">
				<tr>
					<td class="bordes"> <b> Formulario </b> </td>
					<td class="bordes" width="57"> <b> Valor </b> </td>
					<td class="bordes"> <b> Formulario </b> </td>
					<td class="bordes" width="57"> <b> Valor </b> </td>
				</tr>
				<tr>
					<td class="bordes" height="11"> <?php if (isset($formulario1)){echo $formulario1;} ?> </td>
					<td class="bordes"> <?php if ($TotalRubro71 != ""){echo number_format((float)$TotalRubro71,0,',','.');} ?> </td>
					<td class="bordes"> <?php if (isset($formulario6)){echo $formulario6;} ?> </td>
					<td class="bordes"> <?php if ($TotalRubro76 != ""){echo number_format((float)$TotalRubro76,0,',','.');} ?> </td>
				</tr>
				<tr>
					<td class="bordes" height="11"> <?php if (isset($formulario2)){echo $formulario2;} ?> </td>
					<td class="bordes"> <?php if ($TotalRubro72 != ""){echo number_format((float)$TotalRubro72,0,',','.');} ?> </td>
					<td class="bordes"> <?php if (isset($formulario7)){echo $formulario7;} ?> </td>
					<td class="bordes"> <?php if ($TotalRubro77 != ""){echo number_format((float)$TotalRubro77,0,',','.');} ?> </td>
				</tr>
				<tr>
					<td class="bordes" height="11"> <?php if (isset($formulario3)){echo $formulario3;} ?> </td>
					<td class="bordes"> <?php if ($TotalRubro73 != ""){echo number_format((float)$TotalRubro73,0,',','.');} ?> </td>
					<td class="bordes"> <?php if (isset($formulario8)){echo $formulario8;} ?> </td>
					<td class="bordes"> <?php if ($TotalRubro78 != ""){echo number_format((float)$TotalRubro78,0,',','.');} ?> </td>
				</tr>
				<tr>
					<td class="bordes" height="11"> <?php if (isset($formulario4)){echo $formulario4;} ?> </td>
					<td class="bordes"> <?php if ($TotalRubro74 != ""){echo number_format((float)$TotalRubro74,0,',','.');} ?> </td>
					<td class="bordes"> <?php if (isset($formulario9)){echo $formulario9;} ?> </td>
					<td class="bordes"> <?php if ($TotalRubro79 != ""){echo number_format((float)$TotalRubro79,0,',','.');} ?> </td>
				</tr>
				<tr>
					<td class="bordes" height="11"> <?php if (isset($formulario5)){echo $formulario5;} ?> </td>
					<td class="bordes"> <?php if ($TotalRubro75 != ""){echo number_format((float)$TotalRubro75,0,',','.');} ?> </td>
					<td class="bordes"> <?php if (isset($formulario10)){echo $formulario10;} ?> </td>
					<td class="bordes"> <?php if ($TotalRubro710 != ""){echo number_format((float)$TotalRubro710,0,',','.');} ?> </td>
				</tr>
				<tr>
					<?php if($a >10){ ?>
						<td class="bordes"> <b> Subtotal </b> </td>
						<td class="bordes" style="border-width:2px"> <?php $subtotal1 = suma($subtotal1,$TotalRubro71,$TotalRubro72,$TotalRubro73,$TotalRubro74,$TotalRubro75); ?> </td>
						<td class="bordes"> <b> Subtotal </b> <?php $subtotal2 = suma($subtotal2,$TotalRubro76,$TotalRubro77,$TotalRubro78,$TotalRubro79,$TotalRubro710); ?> </td>
						<td class="bordes" style="border-width:2px" height="12"> </td>
					<?php } else { ?>
					<td class="bordes"> <b> Subtotal </b> </td>
					<td class="bordes" style="border-width:2px"> <?php $subtotal1 = suma($subtotal1,$TotalRubro71,$TotalRubro72,$TotalRubro73,$TotalRubro74,$TotalRubro75); if ($subtotal1 != 0) {echo number_format((float)$subtotal1,0,',','.');}?> </td>
					<td class="bordes"> <b> Subtotal </b> </td>
					<td class="bordes" style="border-width:2px" height="12"> <?php $subtotal2 = suma($subtotal2,$TotalRubro76,$TotalRubro77,$TotalRubro78,$TotalRubro79,$TotalRubro710); if ($subtotal2 != 0) {echo number_format((float)$subtotal2,0,',','.');}?> </td>
				<?php } ?>
				</tr>
				<tr>
					<td class="bordes" colspan="3"><b> Total Rubro 2 a trasladar a Rubro 4 inciso b </b></td>
					<?php if($a > 10){ ?>
						<td class="bordes"> <?php $total1 = round($subtotal1)+round($subtotal2); ?> </td>
					<?php } else { ?>
					<td class="bordes"> <?php $total1 = round($subtotal1)+round($subtotal2); if ($total1 != 0) {echo number_format((float)$total1,0,',','.');} ?> </td>
				<?php } ?>
				</tr>
			</table>
		</div>
		<div class="col2-2">
			<table width="266">
				<tr>
					<td style="font-size:18px;text-align:left;padding:0px"> <b>RUBRO 3: </b></td>
				</tr>
				<tr>
					<td style="font-size:10px;text-align:left;padding:0px;padding-bottom:2px"> Resumen de valuación de edificios Grupo 2: Comprende puestos
					o construcciones para el personal; galpones u otras construcciones complementarias de la explotación agropecuaria </td>
				</tr>
			</table>
			<table class="tablaBorde" width="266">
				<tr>
					<td class="bordes"> <b> Formulario </b> </td>
					<td class="bordes" width="57"> <b> Valor </b> </td>
					<td class="bordes"> <b> Formulario </b> </td>
					<td class="bordes" width="57"> <b> Valor </b> </td>
				</tr>
				<tr>
					<td class="bordes" height="11"> <?php //if (isset($formulario11)){echo $formulario11;} ?> </td>
					<td class="bordes"> <?php //if ($TotalRubro711 != ""){echo round($TotalRubro711);} ?> </td>
					<td class="bordes"> <?php //if (isset($formulario16)){echo $formulario16;} ?> </td>
					<td class="bordes"> <?php //if ($TotalRubro716 != ""){echo round($TotalRubro716);} ?> </td>
				</tr>
				<tr>
					<td class="bordes" height="11"> <?php //if (isset($formulario12)){echo $formulario12;} ?> </td>
					<td class="bordes"> <?php //if ($TotalRubro712 != ""){echo round($TotalRubro712);} ?> </td>
					<td class="bordes"> <?php //if (isset($formulario17)){echo $formulario17;} ?> </td>
					<td class="bordes"> <?php //if ($TotalRubro717 != ""){echo round($TotalRubro717);} ?> </td>
				</tr>
				<tr>
					<td class="bordes" height="11"> <?php //if (isset($formulario13)){echo $formulario14;} ?> </td>
					<td class="bordes"> <?php //if ($TotalRubro714 != ""){echo round($TotalRubro714);} ?> </td>
					<td class="bordes"> <?php //if (isset($formulario18)){echo $formulario18;} ?> </td>
					<td class="bordes"> <?php //if ($TotalRubro718 != ""){echo round($TotalRubro718);} ?> </td>
				</tr>
				<tr>
					<td class="bordes" height="11"> <?php //if (isset($formulario14)){echo $formulario14;} ?> </td>
					<td class="bordes"> <?php //if ($TotalRubro714 != ""){echo round($TotalRubro714);} ?> </td>
					<td class="bordes"> <?php //if (isset($formulario19)){echo $formulario19;} ?> </td>
					<td class="bordes"> <?php //if ($TotalRubro719 != ""){echo round($TotalRubro719);} ?> </td>
				</tr>
				<tr>
					<td class="bordes" height="11"> <?php //if (isset($formulario15)){echo $formulario15;} ?> </td>
					<td class="bordes"> <?php //if ($TotalRubro715 != ""){echo round($TotalRubro715);} ?> </td>
					<td class="bordes"> <?php //if (isset($formulario20)){echo $formulario20;} ?> </td>
					<td class="bordes"> <?php //if ($TotalRubro720 != ""){echo round($TotalRubro720);} ?> </td>
				</tr>
				<tr>
					<td class="bordes"> <b> Subtotal </b> </td>
					<td class="bordes" style="border-width:2px"> <?php //$subtotal3 = suma($subtotal3,$TotalRubro711,$TotalRubro712,$TotalRubro713,$TotalRubro714,$TotalRubro715); if ($subtotal3 != 0) {echo $subtotal3;}?>  </td>
					<td class="bordes"> <b> Subtotal </b> </td>
					<td class="bordes" style="border-width:2px" height="12"> <?php //$subtotal4 = suma($subtotal4,$TotalRubro716,$TotalRubro717,$TotalRubro718,$TotalRubro719,$TotalRubro720); if ($subtotal4 != 0) {echo $subtotal4;}?> </td>
				</tr>
				<tr>
					<td class="bordes" colspan="3"><b> Total Rubro 3 a trasladar a Rubro 4 inciso b </b></td>
					<td class="bordes"> <?php //$total2 = round($subtotal3)+round($subtotal4); if ($total2 != 0) {echo $total2;} ?>  </td>
				</tr>
			</table>
		</div>
		<div class="col1">
			<table>
				<tr>
					<td style="font-size:18px;padding:0px"> <b> RUBRO 4: Valuación </b> </td>
				</tr>
			</table>
			<table class="tablaBorde" width="546">
				<tr>
					<td class="bordes" style="font-size:15px"> Concepto </td>
					<td class="bordes" colspan="3" style="font-size:15px"> Superficie de la parcela </td>
					<td class="bordes" style="font-size:15px"> Valor </td>
				</tr>
				<tr>
					<td class="bordes" style="text-align:left;border-bottom-style:none"> <b> a) Tierra libre de mejoras. Del form 911 . . . . . . . . . . . . . . .
					. . .</b> </td>
					<?php if($a > 10){ ?>
						<td class="bordes" style="border-bottom-width:2px"> </td>
						<td class="bordes" style="border-bottom-width:2px">  </td>
						<td class="bordes" style="border-bottom-width:2px">  </td>
						<td class="bordes">  </td>
					<?php } else { ?>
					<td class="bordes" style="border-bottom-width:2px"> <?php echo number_format((float)$superficie,0,',','.') ?> </td>
					<td class="bordes" style="border-bottom-width:2px">  </td>
					<td class="bordes" style="border-bottom-width:2px">  </td>
					<td class="bordes"> <?php echo number_format((float)$tierraBas,0,',','.') ?> </td>
				<?php } ?>
				</tr>
				<tr>
					<td colspan="4" style="text-align:left;border-left-style:solid;border-left-width:1px"> <b> b) Edificio grupo 1. Total Rubro 2 .
						. . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</b></td>
					<?php if($a > 10){ ?>
						<td class="bordes" style="border-left-width:2px"> </td>
					<?php } else { ?>
					<td class="bordes" style="border-left-width:2px"> <?php if ($total1 != 0){echo number_format((float)$total1,0,',','.');} ?> </td>
				<?php } ?>
				</tr>
				<tr>
					<td colspan="4" style="text-align:left;border-left-style:solid;border-left-width:1px"> <b> c) Valor de tierra libre de mejoras mas edificios
						 Grupo 1 (a+b) . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</b></td>
						 <?php if($a > 10){ ?>
							 <td class="bordes" style="border-left-width:2px"> </td>
						<?php } else { ?>
						 <td class="bordes" style="border-left-width:2px"> <?php $rubro2= round($tierraBas)+round($total1); echo number_format((float)$rubro2,0,',','.'); ?> </td>
					 <?php } ?>
				</tr>
				<tr>
					<td colspan="4" style="text-align:left;border-left-style:solid;border-left-width:1px"> <b> d) Edificios Grupo 2. Total Rubro 3 . . . . . . .
						. . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</b></td>
						<?php if($a > 10){ ?>
							<td class="bordes" style="border-left-width:2px"> </td>
						<?php } else { ?>
					<td class="bordes" style="border-left-width:2px"> <?php //if ($total2 != 0){echo $total2;} ?> </td>
				<?php } ?>
				</tr>
				<tr>
					<td colspan="4" style="text-align:left;border-left-style:solid;border-left-width:1px"> <b> e) Instalaciones y obras accesorias del Form 912
						 . . . . . . . . . . . . . . . . . . .  . . . . . . . . . . . . . . . . . . . . . . . . . .</b></td>
						<?php if($a > 10){ ?>
							<td class="bordes" style="border-left-width:2px"> </td>
						<?php } else { ?>
					<td class="bordes" style="border-left-width:2px"> <?php echo number_format((float)$mejBas912,0,',','.') ?> </td>
				<?php } ?>
				</tr>
				<tr>
					<td colspan="4" style="text-align:left;border-left-style:solid;border-left-width:1px"> <b> f) Plantaciones del Form 912 . . . . . . . .
						. . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</b></td>
						<?php if($a > 10){ ?>
							<td class="bordes" style="border-left-width:2px"> </td>
						<?php } else { ?>
					<td class="bordes" style="border-left-width:2px"> <?php echo number_format((float)$planBas,0,',','.') ?> </td>
				<?php } ?>
				</tr>
				<tr>
					<td class="bordes" colspan="4" style="text-align:left;font-size:16px;border-top-width:2px"> <b> Total </b> </td>
					<?php if($a > 10){ ?>
						<td class="bordes"> </td>
					<?php } else { ?>
					<td class="bordes"> <?php $totalR4=round($tierraBas)+round($total1)+round($mejBas912)+round($planBas); echo number_format((float)$totalR4,0,',','.'); ?> </td>
				<?php } ?>
				</tr>
				<tr>
					<td class="bordes" colspan="5" style="text-align:left;font-size:14px"> <b> Total en letras: </b> </td>
				</tr>
			</table>
		</div>
		<div class="col1">
			<table>
				<tr>
					<td style="font-size:18px;padding:0px"> <b> RUBRO 5: Detalle y cantidad de los formularios anexos que se acompañan </b> </td>
				</tr>
			</table>
			<table class="tablaBorde" width="546">
				<tr>
					<td class="bordes" height="12"> <?php echo $detalle ?> </td>
				</tr>
			</table>
		</div>
		<div class="col1">
			<table>
				<tr>
					<td style="font-size:18px;padding:0px"> <b> RUBRO 6: Observaciones </b> </td>
				</tr>
			</table>
			<table class="tablaBorde" width="546">
				<tr>
					<td class="bordes" valign="top" height="50" style="text-align:left"> <?php echo $observacion ?> </td>
				</tr>
			</table>
		</div>
		<div class="col1">
			<table style="text-align:left;margin-top:20px;font-size:14px">
				<tr> <td style="padding:1px"> <b> Oficina </b> </td> </tr>
				<tr> <td style="padding:1px"> <b> Lugar y fecha: <?php echo $lugar; ?>
					<?php
						//echo date("d/m/y");
						echo $FechaImp;
					?>
				</b> </td> </tr>
				<tr> <td style="padding:1px"> <b> Valuación con valores a: </b> </td> </tr>
				<tr> <td style="padding:1px"> <b> Responsable/ es </b> </td> </tr>
			</table>
		</div>
		<div class="col1">
			<table style="margin-top:45px;font-size:14px">
				<tr>
					<td width="290" style="padding:1px"> ____________________________________ <br> Sello Fechador </td>
					<td style="padding:1px"> ____________________________________ <br> Firma del agente receptor </td>
				</tr>
			</table>
		</div>
  </div>
	<?php if($a > 10){ ?>
	<div style="page-break-after:always;"></div>
	<header>
    <div class="contenedor">
      <img id="imglogo" src="img/logopdf901.png">
      <img id="img910" src="img/img910.png">
      <div class="titulo">
        <table style="text-align:center">
          <tr>
            <td style="font-size:26px"> DE OFICIO </td>
          </tr>
          <tr>
            <td style="font-size:20px" width="300"> INMUEBLES RURALES O SUBRURALES </td>
          </tr>
        </table>
      </div>
  </header>
    <div class="col1">
      <table>
        <tr>
          <td style="font-size:18px;text-align:left;padding:0px"> <b>  &nbsp;RUBRO 1: Denominación Catastral </b> </td>
        </tr>
        <tr>
          <td  class="bordes" width="280" style="font-size:14px;text-align:left;padding:0px"> <b> &nbsp;PARTIDO </b> (en letras): <?php echo $Fpartido ?> </td>
        </tr>
      </table>
      <table class="tablaBorde" width="730px">
        <tr>
          <td class="bordeSimple" width="60" style="background-color:black;color:white;border-style:none"> Partido </td>
          <td class="bordeSimple" width="100" style="background-color:black;color:white;border-style:none"> Partida </td>
          <td class="bordeSimple" width="60"> Circunscripción </td>
          <td class="bordeSimple"> Sección </td>
          <td class="bordeSimple"> Ch. </td>
          <td class="bordeSimple"> Qta. </td>
          <td class="bordeSimple" width="80"> Fracc. </td>
          <td class="bordeSimple" width="60"> Parcela </td>
        </tr>
        <tr>
          <td class="bordeSimple" height="12"> <?php echo $FcodPartido ?> </td>
          <td class="bordeSimple"> <?php echo $Fpartida ?> </td>
          <td class="bordeSimple"> <?php echo $Fcir ?> </td>
          <td class="bordeSimple"> <?php echo $Fsec ?> </td>
          <td class="bordeSimple"> <?php echo $Fcha ?> </td>
          <td class="bordeSimple"> <?php echo $Fqui ?> </td>
          <td class="bordeSimple"> <?php echo $Ffra ?> </td>
          <td class="bordeSimple"> <?php echo $Fpar ?> </td>
        </tr>
        <tr>
          <td class="bordeSimple" colspan="6" style="text-align:left;padding:2px"> <b> PROPIETARIO </b> <br> Apellido y Nombre: <?php echo $FfnombreApellido ?> </td>
          <td class="bordeSimple" colspan="2" style="text-align:left;padding:2px"> Expediente </td>
        </tr>
      </table>
    </div>
		<div class="col2-1">
			<table width="266">
				<tr>
					<td style="font-size:18px;text-align:left;padding:0px"> <b>RUBRO 2: </b></td>
				</tr>
				<tr>
					<td style="font-size:10px;text-align:left;padding:0px;padding-bottom:2px"> Resumen de valuación de edificios Grupo 1: Edificios destinados
						a casa habitación, incluida la del administrador y excepto los puestos a construc. para
						el personal; oficinas de administ.; industrias; negocios. </td>
				</tr>
			</table>
			<table class="tablaBorde" width="266">
				<tr>
					<td class="bordes"> <b> Formulario </b> </td>
					<td class="bordes" width="57"> <b> Valor </b> </td>
					<td class="bordes"> <b> Formulario </b> </td>
					<td class="bordes" width="57"> <b> Valor </b> </td>
				</tr>
				<tr>
					<td class="bordes" height="11"> <?php if (isset($formulario11)){echo $formulario11;} ?> </td>
					<td class="bordes"> <?php if ($TotalRubro711 != ""){echo number_format((float)$TotalRubro711,0,',','.');} ?> </td>
					<td class="bordes"> <?php if (isset($formulario16)){echo $formulario16;} ?> </td>
					<td class="bordes"> <?php if ($TotalRubro716 != ""){echo number_format((float)$TotalRubro716,0,',','.');} ?> </td>
				</tr>
				<tr>
					<td class="bordes" height="11"> <?php if (isset($formulario12)){echo $formulario12;} ?> </td>
					<td class="bordes"> <?php if ($TotalRubro712 != ""){echo number_format((float)$TotalRubro712,0,',','.');} ?> </td>
					<td class="bordes"> <?php if (isset($formulario17)){echo $formulario17;} ?> </td>
					<td class="bordes"> <?php if ($TotalRubro717 != ""){echo number_format((float)$TotalRubro717,0,',','.');} ?> </td>
				</tr>
				<tr>
					<td class="bordes" height="11"> <?php if (isset($formulario13)){echo $formulario14;} ?> </td>
					<td class="bordes"> <?php if ($TotalRubro714 != ""){echo number_format((float)$TotalRubro714,0,',','.');} ?> </td>
					<td class="bordes"> <?php if (isset($formulario18)){echo $formulario18;} ?> </td>
					<td class="bordes"> <?php if ($TotalRubro718 != ""){echo number_format((float)$TotalRubro718,0,',','.');} ?> </td>
				</tr>
				<tr>
					<td class="bordes" height="11"> <?php if (isset($formulario14)){echo $formulario14;} ?> </td>
					<td class="bordes"> <?php if ($TotalRubro714 != ""){echo number_format((float)$TotalRubro714,0,',','.');} ?> </td>
					<td class="bordes"> <?php if (isset($formulario19)){echo $formulario19;} ?> </td>
					<td class="bordes"> <?php if ($TotalRubro719 != ""){echo number_format((float)$TotalRubro719,0,',','.');} ?> </td>
				</tr>
				<tr>
					<td class="bordes" height="11"> <?php if (isset($formulario15)){echo $formulario15;} ?> </td>
					<td class="bordes"> <?php if ($TotalRubro715 != ""){echo number_format((float)$TotalRubro715,0,',','.');} ?> </td>
					<td class="bordes"> <?php if (isset($formulario20)){echo $formulario20;} ?> </td>
					<td class="bordes"> <?php if ($TotalRubro720 != ""){echo number_format((float)$TotalRubro720,0,',','.');} ?> </td>
				</tr>
				<tr>
					<td class="bordes"> <b> Subtotal </b> </td>
					<td class="bordes" style="border-width:2px"> <?php $subtotal3 = suma($subtotal3,$TotalRubro711,$TotalRubro712,$TotalRubro713,$TotalRubro714,$TotalRubro715);
					$subtotal3 += round($subtotal1); echo number_format((float)$subtotal3,0,',','.');?>  </td>
					<td class="bordes"> <b> Subtotal </b> </td>
					<td class="bordes" style="border-width:2px" height="12"> <?php $subtotal4 = suma($subtotal4,$TotalRubro716,$TotalRubro717,$TotalRubro718,$TotalRubro719,$TotalRubro720);
					$subtotal4 += round($subtotal2); echo number_format((float)$subtotal4,0,',','.');?> </td>
				</tr>
				<tr>
					<td class="bordes" colspan="3"><b> Total Rubro 2 a trasladar a Rubro 4 inciso b </b></td>
					<td class="bordes"> <?php $total2 = round($subtotal3)+round($subtotal4); if ($total2 != 0) {echo number_format((float)$total2,0,',','.');} ?>  </td>
				</tr>
			</table>
		</div>
		<div class="col2-2">
			<table width="266">
				<tr>
					<td style="font-size:18px;text-align:left;padding:0px"> <b>RUBRO 3: </b></td>
				</tr>
				<tr>
					<td style="font-size:10px;text-align:left;padding:0px;padding-bottom:2px"> Resumen de valuación de edificios Grupo 2: Comprende puestos
					o construcciones para el personal; galpones u otras construcciones complementarias de la explotación agropecuaria </td>
				</tr>
			</table>
			<table class="tablaBorde" width="266">
				<tr>
					<td class="bordes"> <b> Formulario </b> </td>
					<td class="bordes" width="57"> <b> Valor </b> </td>
					<td class="bordes"> <b> Formulario </b> </td>
					<td class="bordes" width="57"> <b> Valor </b> </td>
				</tr>
				<tr>
					<td class="bordes" height="11"> <?php //if (isset($formulario11)){echo $formulario11;} ?> </td>
					<td class="bordes"> <?php //if ($TotalRubro711 != ""){echo round($TotalRubro711);} ?> </td>
					<td class="bordes"> <?php //if (isset($formulario16)){echo $formulario16;} ?> </td>
					<td class="bordes"> <?php //if ($TotalRubro716 != ""){echo round($TotalRubro716);} ?> </td>
				</tr>
				<tr>
					<td class="bordes" height="11"> <?php //if (isset($formulario12)){echo $formulario12;} ?> </td>
					<td class="bordes"> <?php //if ($TotalRubro712 != ""){echo round($TotalRubro712);} ?> </td>
					<td class="bordes"> <?php //if (isset($formulario17)){echo $formulario17;} ?> </td>
					<td class="bordes"> <?php //if ($TotalRubro717 != ""){echo round($TotalRubro717);} ?> </td>
				</tr>
				<tr>
					<td class="bordes" height="11"> <?php //if (isset($formulario13)){echo $formulario14;} ?> </td>
					<td class="bordes"> <?php //if ($TotalRubro714 != ""){echo round($TotalRubro714);} ?> </td>
					<td class="bordes"> <?php //if (isset($formulario18)){echo $formulario18;} ?> </td>
					<td class="bordes"> <?php //if ($TotalRubro718 != ""){echo round($TotalRubro718);} ?> </td>
				</tr>
				<tr>
					<td class="bordes" height="11"> <?php //if (isset($formulario14)){echo $formulario14;} ?> </td>
					<td class="bordes"> <?php //if ($TotalRubro714 != ""){echo round($TotalRubro714);} ?> </td>
					<td class="bordes"> <?php //if (isset($formulario19)){echo $formulario19;} ?> </td>
					<td class="bordes"> <?php //if ($TotalRubro719 != ""){echo round($TotalRubro719);} ?> </td>
				</tr>
				<tr>
					<td class="bordes" height="11"> <?php //if (isset($formulario15)){echo $formulario15;} ?> </td>
					<td class="bordes"> <?php //if ($TotalRubro715 != ""){echo round($TotalRubro715);} ?> </td>
					<td class="bordes"> <?php //if (isset($formulario20)){echo $formulario20;} ?> </td>
					<td class="bordes"> <?php //if ($TotalRubro720 != ""){echo round($TotalRubro720);} ?> </td>
				</tr>
				<tr>
					<td class="bordes"> <b> Subtotal </b> </td>
					<td class="bordes" style="border-width:2px"> <?php //$subtotal3 = suma($subtotal3,$TotalRubro711,$TotalRubro712,$TotalRubro713,$TotalRubro714,$TotalRubro715); if ($subtotal3 != 0) {echo $subtotal3;}?>  </td>
					<td class="bordes"> <b> Subtotal </b> </td>
					<td class="bordes" style="border-width:2px" height="12"> <?php //$subtotal4 = suma($subtotal4,$TotalRubro716,$TotalRubro717,$TotalRubro718,$TotalRubro719,$TotalRubro720); if ($subtotal4 != 0) {echo $subtotal4;}?> </td>
				</tr>
				<tr>
					<td class="bordes" colspan="3"><b> Total Rubro 3 a trasladar a Rubro 4 inciso b </b></td>
					<td class="bordes"> <?php //$total2 = round($subtotal3)+round($subtotal4); if ($total2 != 0) {echo $total2;} ?>  </td>
				</tr>
			</table>
		</div>
		<div class="col1">
			<table>
				<tr>
					<td style="font-size:18px;padding:0px"> <b> RUBRO 4: Valuación </b> </td>
				</tr>
			</table>
			<table class="tablaBorde" width="546">
				<tr>
					<td class="bordes" style="font-size:15px"> Concepto </td>
					<td class="bordes" colspan="3" style="font-size:15px"> Superficie de la parcela </td>
					<td class="bordes" style="font-size:15px"> Valor </td>
				</tr>
				<tr>
					<td class="bordes" style="text-align:left;border-bottom-style:none"> <b> a) Tierra libre de mejoras. Del form 911 . . . . . . . . . . . . . . .
					. . .</b> </td>
					<td class="bordes" style="border-bottom-width:2px"> <?php echo number_format((float)$superficie,0,',','.') ?> </td>
					<td class="bordes" style="border-bottom-width:2px">  </td>
					<td class="bordes" style="border-bottom-width:2px">  </td>
					<td class="bordes"> <?php echo number_format((float)$tierraBas,0,',','.') ?> </td>
				</tr>
				<tr>
					<td colspan="4" style="text-align:left;border-left-style:solid;border-left-width:1px"> <b> b) Edificio grupo 1. Total Rubro 2 .
						. . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</b></td>
					<td class="bordes" style="border-left-width:2px"> <?php if ($total2 != 0){echo number_format((float)$total2,0,',','.');} ?> </td>
				</tr>
				<tr>
					<td colspan="4" style="text-align:left;border-left-style:solid;border-left-width:1px"> <b> c) Valor de tierra libre de mejoras mas edificios
						 Grupo 1 (a+b) . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</b></td>
						 <td class="bordes" style="border-left-width:2px"> <?php $rubro2= round($tierraBas)+round($total1); echo number_format((float)$rubro2,0,',','.'); ?> </td>
				</tr>
				<tr>
					<td colspan="4" style="text-align:left;border-left-style:solid;border-left-width:1px"> <b> d) Edificios Grupo 2. Total Rubro 3 . . . . . . .
						. . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</b></td>
					<td class="bordes" style="border-left-width:2px"> <?php //if ($total2 != 0){echo $total2;} ?> </td>
				</tr>
				<tr>
					<td colspan="4" style="text-align:left;border-left-style:solid;border-left-width:1px"> <b> e) Instalaciones y obras accesorias del Form 912
						 . . . . . . . . . . . . . . . . . . .  . . . . . . . . . . . . . . . . . . . . . . . . . .</b></td>
					<td class="bordes" style="border-left-width:2px"> <?php echo number_format((float)$mejBas912,0,',','.') ?> </td>
				</tr>
				<tr>
					<td colspan="4" style="text-align:left;border-left-style:solid;border-left-width:1px"> <b> f) Plantaciones del Form 912 . . . . . . . .
						. . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</b></td>
					<td class="bordes" style="border-left-width:2px"> <?php echo number_format((float)$planBas,0,',','.') ?> </td>
				</tr>
				<tr>
					<td class="bordes" colspan="4" style="text-align:left;font-size:16px;border-top-width:2px"> <b> Total </b> </td>
					<td class="bordes"> <?php $totalR4=round($tierraBas)+round($total2)+round($mejBas912)+round($planBas);echo number_format((float)$totalR4,0,',','.'); ?> </td>
				</tr>
				<tr>
					<td class="bordes" colspan="5" style="text-align:left;font-size:14px"> <b> Total en letras: </b> </td>
				</tr>
			</table>
		</div>
		<div class="col1">
			<table>
				<tr>
					<td style="font-size:18px;padding:0px"> <b> RUBRO 5: Detalle y cantidad de los formularios anexos que se acompañan </b> </td>
				</tr>
			</table>
			<table class="tablaBorde" width="546">
				<tr>
					<td class="bordes" height="12"> <?php echo $detalle ?> </td>
				</tr>
			</table>
		</div>
		<div class="col1">
			<table>
				<tr>
					<td style="font-size:18px;padding:0px"> <b> RUBRO 6: Observaciones </b> </td>
				</tr>
			</table>
			<table class="tablaBorde" width="546">
				<tr>
					<td class="bordes" valign="top" height="50" style="text-align:left"> <?php echo $observacion ?> </td>
				</tr>
			</table>
		</div>
		<div class="col1">
			<table style="text-align:left;margin-top:20px;font-size:14px">
				<tr> <td style="padding:1px"> <b> Oficina </b> </td> </tr>
				<tr> <td style="padding:1px"> <b> Lugar y fecha: <?php echo $lugar; ?>
					<?php
						//echo date("d/m/y");
						echo $FechaImp;
					?>
				</b> </td> </tr>
				<tr> <td style="padding:1px"> <b> Valuación con valores a: </b> </td> </tr>
				<tr> <td style="padding:1px"> <b> Responsable/ es </b> </td> </tr>
			</table>
		</div>
		<div class="col1">
			<table style="margin-top:45px;font-size:14px">
				<tr>
					<td width="290" style="padding:1px"> ____________________________________ <br> Sello Fechador </td>
					<td style="padding:1px"> ____________________________________ <br> Firma del agente receptor </td>
				</tr>
			</table>
		</div>
  </div>
<?php } ?>
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
$filename = $FcodPartido."-".$Fpartida."-Formulario 910.pdf";
$dompdf->stream($filename, array("Attachment" => 0));
?>
