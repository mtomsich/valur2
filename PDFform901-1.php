<?php
include("sesion.php");
$pagina='PDFform9011PHP';
include("sql/conexion.php");
include("seguridadForm.php");

require_once 'lib/pdf/autoload.inc.php';
ob_start();

	include ("sql/mostrarDatosObra.php");
	include ("sql/mostrarForm901.php");

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
		margin-top: 0.5em;
    margin-left: 1em;
	  margin-right: 1.2em;
		margin-bottom: 1.3em;
        }
#img {
	width: 250px;
}

#imgbody {
	width: 380px;margin-left: 5px;margin-top: 0px;
}

#img901 {
	width: 140px;position: absolute;margin-right: 5px;margin-left: 590px;margin-top: 2px;
}
#imgcuadrilla {
	width: 1100px; height: 1070px; margin-left: -20px; margin-top: 10px;
}
.contenedor {
	width: 1090px;
}

#headermedio {
	margin-left: 350px;position: absolute;margin-right: 250px;margin-top: 20px;font-family: 'Arial',sans-serif;
}

table {
	border-style: none;border-collapse:  inherit;border-color: black;
}

.izquierda {
	position:absolute;
}

.cuadro {
	border-style: solid;border-width: 1px;background-color: #D8D8D8;text-align: center;font-size: 16px;padding: 2px;
}

.izquierdacuerpo {
	position: absolute;margin-top: 100px;font-family: 'Arial',sans-serif;
}

.derechacuerpo {
	position: absolute;margin-top: 149px;margin-left: 465px;font-family: 'Arial',sans-serif;
}

.partido {
	border-style: solid;text-align: center;font-size: 13px;width: 627px;border-spacing: 0px;
}

.partidobordes {
  border-right-style:solid;border-right-width: 1px;border-right-color: #A4A4A4;border-bottom-style: solid;

}

.nomenclatura {
	border-style: solid;border-width: 1px;text-align: center;font-size: 13px;
}

.nombordes {
	border-right-style: solid;border-right-width: 1px;border-right-color: gray;border-bottom-style: solid; border-bottom-width: 1px;
	border-bottom-color: #A4A4A4;
}

.nomultimo {
	border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #A4A4A4;
}

.nomultimo2 {
	border-right-style: solid; border-right-width: 1px; border-right-color: #A4A4A4;
}

.textosolo {
	position:absolute; margin-top:545px; margin-left:5px; font-size:17px; font-family: 'Arial',sans-serif;
}

.fullhoja {
	margin-top: 569px; margin-left: 12px; font-family: 'Arial',sans-serif;
}
.accesiones {
	border-style: solid; border-width: 2px; text-align: center; font-size: 13px; border-right-style: none;
}
.textogrande {
		font-family: 'Arial',sans-serif; font-size: 15px;
}
.celdabi {
	border-right-style: solid; border-right-width: 1px; border-top-style: solid; border-top-width: 1px; border-top-color: #A4A4A4;
}
.celdatri {
	border-right-style: solid; border-right-width: 1px; border-right-color: #A4A4A4; border-top-style: solid; border-top-width: 1px;
	border-top-color: #A4A4A4;
}
.letrachica {
	font-size: 10px;
}
.textosolo2 {
		position:absolute; margin-top:1200px; margin-left:935px; font-size:10px; font-family: 'Arial',sans-serif;
}
.croquis {
		border-style:solid; margin-left:5px; width: 400px; font-size:12px;padding:0px;
}
.valor {
	position: absolute; margin-top:-1165px;margin-left:-990px;
}
.valor2 {
	position: absolute; margin-top:-840px;margin-left:-350px;
}
.a {
  border-bottom:1px dotted #000000;
  text-decoration:none;
}
.contenedor2{
	width: 1090px;
}
.hoja2{
	 margin-left: 20px; font-family: 'Arial',sans-serif;
}
</style>
</head>

<body>
	<header>
	<div class="contenedor">
		<div class="izquierda">
			<img id="img" src="img/logopdf901.png">
		</div>
		<div id="headermedio">
			<table class="table table-bordered responsive-table">
				<tr>
					<td class="cuadro" width="270"> <b> PARA &nbsp; &nbsp;ENTREGAR  &nbsp; &nbsp; JUNTO  &nbsp; &nbsp; CON  &nbsp; &nbsp; LOS &nbsp; &nbsp; FORMULARIOS &nbsp; &nbsp; DE &nbsp; &nbsp; AVALÚO </b> </td>
				</tr>
				<tr>
					<td style="font-size:13px; text-align:center;"> <b> PARCELA URBANA O SUBURBANA </b> </td>
				</tr>
			</table>
			<img id="img901" src="img/img2pdf901.png">
		</div>
		</header>
		<div class="izquierdacuerpo">
			<table class="table table-bordered responsive-table">
				<tr>
					<td colspan="2" style="font-size:14px;"> Declaración Jurada sobre individualización, caracteristicas y evaluación - Ley 10.707 </td>
				</tr>
				<tr>
					<td width="345" style="font-size:17px">  <b> RUBRO 1 Croquis de ubicación </b>  </td>
					<td style="font-size:17px"> <b> RUBRO 2 Datos del inmueble </b> </td>
				</tr>
			</table>
			<table class="croquis">
				<!-- Valor de las calles de la izquierda -->
				<div class="valor">
					<p style="transform: rotate(-90deg);font-size:12px"> Valor basico &nbsp;&nbsp;&nbsp; <?php echo $valorCalle4 ?>&nbsp;&nbsp;&nbsp; por m<sup>2</sup> <br><br><br>
						 C A L L E &nbsp;&nbsp;&nbsp; <?php echo $calle4 ?></p>
				</div>
				<!-- Valor de las calles de la derecha -->
				<div class="valor2">
					<p style="transform: rotate(-90deg);font-size:12px"> C A L L E &nbsp;&nbsp;&nbsp; <?php echo $calle2 ?><br><br>
						 Valor basico &nbsp;&nbsp;&nbsp; <?php echo $valorCalle2 ?> &nbsp;&nbsp;&nbsp; por m<sup>2</sup></p>
				</div>
				<tr>
					<td height="30" colspan="3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						Valor basico &nbsp;&nbsp;&nbsp; <?php echo $valorCalle1 ?>  &nbsp;&nbsp;&nbsp;  por m<sup>2</sup> </td>
				</tr>
				<tr>
					<td width="50"> </td>
					<td height="15"> C A L L E &nbsp;&nbsp;&nbsp; <?php echo $calle1 ?></td>
					<td width="50"> </td>
				</tr>
				<tr>
					<td height="178"> </td>
					<td height="178" style="border-style:solid"> </td>
					<td height="178"> </td>
				</tr>
				<tr>
					<td height="25"> </td>
					<td height="25"><br> C A L L E &nbsp;&nbsp;&nbsp; <?php echo $calle3 ?></td>
					<td height="25"> </td>
				</tr>
				<tr>
					<td colspan="3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						Valor basico &nbsp;&nbsp;&nbsp; <?php echo $valorCalle3 ?>  &nbsp;&nbsp;&nbsp; por m<sup>2</sup>
					</td>
				</tr>
				<tr>
					<td colspan="3"> <b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						INDICAR MEDIDAS PERIMETRALES Y RUMBO </b>
					</td>
				</tr>
			</table>
		</div>
		<div class="textosolo">
			<b> RUBRO 5 Accesiones </b>
		</div>
		<div class="derechacuerpo">
			<table class="partido">
				<tr>
					<td class="partidobordes"><b> PARTIDO </b> </td>
					<td class="partidobordes" width="60"><b> N° </b></td>
					<td style="border-bottom-style: solid;" width="150"><b> Partida </b></td>
				</tr>
				<tr>
					<td style="border-right-style:solid; border-right-width:1px; border-right-color:#A4A4A4" height="24"> <?php echo $Fpartido ?> </td>
					<td style="border-right-style:solid; border-right-width:1px;border-right-color:#A4A4A4" height="24"> <?php echo $FcodPartido ?> </td>
					<td height="24"> <?php echo $Fpartida ?> </td>
				</tr>
			</table>
			<table width="468" style="border-spacing: 0px;" >
				<thead>
					<tr>
						<td colspan="7" style="font-size:17px;"> <b> NOMENCLATURA CATASTRAL </b> </td>
					</tr>
				</thead>
				<tbody class="nomenclatura">
					<tr>
						<td class="nombordes"><b> CIRC. </b></td>
						<td class="nombordes"><b> SECC. </b></td>
						<td class="nombordes"><b> CH. </b></td>
						<td class="nombordes"><b> QTA. </b></td>
						<td class="nombordes"><b> FRACC. </b></td>
						<td class="nombordes"><b> MZA. </b></td>
						<td class="nomultimo"><b> PARCELA </b></td>
					</tr>
					<tr>
						<td class="nombordes" height="24"> <?php echo $Fcir ?> </td>
						<td class="nombordes" height="24"> <?php echo $Fsec ?> </td>
						<td class="nombordes" height="24"> <?php echo $Fcha ?> </td>
						<td class="nombordes" height="24"> <?php echo $Fqui ?> </td>
						<td class="nombordes" height="24"> <?php echo $Ffra ?> </td>
						<td class="nombordes" height="24"> <?php echo $Fman ?> </td>
						<td class="nomultimo" height="24"> <?php echo $Fpar ?> </td>
					</tr>
					<tr>
						<td class="nombordes" colspan="5"><b> CALLE </b></td>
						<td class="nombordes"><b> N° </b></td>
						<td class="nomultimo"><b> Departamento </b></td>
					</tr>
					<tr>
						<td class="nombordes" colspan="5" height="24"> <?php echo $Fdomicilio ?> </td>
						<td class="nombordes" height="24"> <?php echo $FnroCalle ?> </td>
						<td class="nomultimo" height="24"> <?php echo $Fdpto ?> </td>
					</tr>
					<tr>
						<td colspan="2" height="24"><b> LOCALIDAD </b></td>
						<td style="border-right-style:solid; border-right-width:1px; border-right-color: #A4A4A4;" colspan="3" height="24"> <?php echo $Flocalidad ?> </td>
						<td height="24"><b> C.P.: </b></td>
						<td height="24"> <?php echo $FcodigoPostal ?> </td>
					</tr>
				</tbody>
			</table>
			<br>
			<table width="468" style="border-spacing: 0px; margin-top:7px">
				<thead>
					<tr>
						<td colspan="6" style="font-size:17px;"> <b> RUBRO 3 Infraestructura </b> </td>
					</tr>
				</thead>
				<tbody class="nomenclatura">
					<tr>
						<td class="nombordes"> <b> Pavimento </b> </td>
						<td class="nombordes"> <b> Alumbrado púb. </b> </td>
						<td class="nombordes"> <b> Energía eléctrica </b> </td>
						<td class="nombordes"> <b> Agua corriente </b> </td>
						<td class="nombordes"> <b> Cloacas </b> </td>
						<td class="nomultimo"> <b> Gas natural </b> </td>
					</tr>
					<tr>
						<td class="nomultimo2" height="23"> <?php checkbox($FinfraP) ?> </td>
						<td class="nomultimo2" height="23"> <?php checkbox($FinfraA) ?> </td>
						<td class="nomultimo2" height="23"> <?php checkbox($FinfraL) ?> </td>
						<td class="nomultimo2" height="23"> <?php checkbox($FinfraAg) ?> </td>
						<td class="nomultimo2" height="23"> <?php checkbox($FinfraC) ?> </td>
						<td height="23"> <?php checkbox($FinfraG) ?> </td>
					</tr>
				</tbody>
			</table>
			<table width="468" style="border-spacing: 0px; margin-top:5px">
				<thead>
					<tr>
						<td colspan="4" style="font-size:17px;"> <b> RUBRO 4 Tierra </td>
					</tr>
				</thead>
				<tbody class="nomenclatura">
					<tr>
						<td class="nombordes"> <b> Coeficiente de ajuste </b> </td>
						<td class="nombordes"> <b> Valor básico </b> </td>
						<td class="nombordes"> <b> Superficie en m<sup>2</sup> </b> </td>
						<td class="nomultimo"> <b> VALOR </b> (entero redondeado) </b> </td>
					</tr>
					<tr>
						<td style="padding:7px" height="12"> <?php echo bcdiv($ajuste,'1',2) ?> </td>
						<td class="nomultimo2" style="padding:7px"> <?php echo bcdiv($basico,'1',2) ?> </td>
						<td class="nomultimo2" style="padding:7px"> <?php echo bcdiv($superficie,'1',2) ?> </td>
						<td style="border-right-style:Solid; border-right-width:2px; border-bottom-style:Solid; border-bottom-width:2px;padding:7px;
						border-left-style:Solid; border-left-width:2px; border-top-style:Solid; border-top-width:2px"> <?php echo bcdiv($valor,'1',2) ?> </td>
					</tr>
				</tbody>
			</table>
		</div>
		<p class="textosolo2"> (*) Unicamente L.E., L.C. o D.N.I. </p>
		<div class="fullhoja">

			<table style="width: 1077px; border-spacing: 0px;">
			<tbody class="accesiones">
				<tr>
					<td class="celdabi" style="border-top-style:none" rowspan="2"> Formulario </td>
					<td class="celdabi" style="border-top-style:none" rowspan="2" width="90"> <div class="textogrande"> DATA <br> </div> día / mes / año   </td>
					<td class="celdabi" style="border-top-style:none" rowspan="2" width="95"> <div class="textogrande"> DATA RECICLADO <br> </div> día / mes / año   </td>
					<td style="border-right-style:solid;" colspan="3"> <div class="textogrande"> SUPERFICIE <br> </div> (entero redondeado en m<sup>2</sup>)   </td>
					<td colspan="3" style="border-right-style:solid"> <div class="textogrande"> VALOR </div> </td>
				</tr>
				<tr>
					<td class="celdatri"> 1. cubierta </td>
					<td class="celdatri" width="80" style="border-right-color:black; border-right-width:2px"> 2. semicubierta </td>
					<td style="border-right-style:solid !important;border-top-style:solid; border-top-width:1px;
					border-top-color:#A4A4A4;"> 3. total superficie (1 + 2) </td>
					<td class="celdatri" width="80"> 4. edificio + inst. complem. </td>
					<td class="celdatri" style="border-right-width: 2px; border-right-color:black;"> 5. mejoras </td>
					<td class="celdatri" style="border-right-style:solid; border-right-color:black; border-right-width:2px" width="110"> &nbsp;&nbsp;6. TOTAL VALOR &nbsp;&nbsp;(4 + 5) </td>
				</tr>
				<tr>
					<td class="celdabi" height="19"> <?php if (isset($formulario1)) {echo $formulario1;} ?> </td>
					<td class="celdabi"> <?php if (isset($data1)) {echo $data1;} ?> </td>
					<td class="celdabi"> <?php if (isset($datare1)) {echo $datare1;} ?> </td>
					<td class="celdatri"> <?php if ((isset($cubierta1)) && ($cubierta1 != "")) {echo bcdiv($cubierta1,'1',2);} ?> </td>
					<td class="celdatri" style="border-right-color:black; border-right-width:2px"> <?php if ((isset($semicub1)) && ($semicub1 != "")) {echo bcdiv($semicub1,'1',2);} ?> </td>
					<td class="celdatri" style="border-right-color:black; border-right-width:2px"> <?php if(($cubierta1 != "") || ($semicub1 != "")){$totalsup1=$cubierta1+$semicub1;echo bcdiv($totalsup1, '1', 2);}  ?> </td>
					<td class="celdatri"> <?php if (isset($TotalRubro71)) {echo number_format((float)$TotalRubro71, 2, ',', '.');} ?> </td> <!-- EDIFICIO + INST COMPLEMENTARIAS -->
					<td class="celdatri" style="border-right-width: 2px; border-right-color:black;">
						<?php if (isset($totalmejoras1)) {echo $totalmejoras1;} ?> </td> <!-- MEJORAS -->
					<td class="celdatri" style="border-right-style:solid; border-right-color:black; border-right-width:2px">
					  <?php if (isset($TotalRubro71)){if (($TotalRubro71 != "") || ($totalmejoras1 != "")){$totalvalor1 = $TotalRubro71 + (int)$totalmejoras1; echo number_format((float)$totalvalor1,2,',','.');}} ?> </td> <!-- TOTAL VALOR -->
				</tr>
				<tr>
					<td class="celdabi" height="19"> <?php if (isset($formulario2)) {echo $formulario2;} ?> </td>
					<td class="celdabi"> <?php if (isset($data2)) {echo $data2;} ?> </td>
					<td class="celdabi"> <?php if (isset($datare2)) {echo $datare2;} ?> </td>
					<td class="celdatri"> <?php if ((isset($cubierta2)) && ($cubierta2 != "")) {echo bcdiv($cubierta2,'1',2);} ?> </td>
					<td class="celdatri" style="border-right-color:black; border-right-width:2px"> <?php if ((isset($semicub2)) && ($semicub2 != "")) {echo bcdiv($semicub2,'1',2);} ?> </td>
					<td class="celdatri" style="border-right-color:black; border-right-width:2px"> <?php if(($cubierta2 != "") || ($semicub2 != "")){$totalsup2=$cubierta2+$semicub2; echo bcdiv($totalsup2,'1',2);} ?> </td>
					<td class="celdatri"> <?php if (isset($TotalRubro72)) {echo number_format((float)$TotalRubro72, 2,',','.');} ?> </td> <!-- EDIFICIO + INST COMPLEMENTARIAS -->
					<td class="celdatri" style="border-right-width: 2px; border-right-color:black;">
						<?php if (isset($totalmejoras2)) {echo $totalmejoras2;} ?> </td> <!-- MEJORAS -->
					<td class="celdatri" style="border-right-style:solid; border-right-color:black; border-right-width:2px">
						<?php if (isset($TotalRubro72)){if (($TotalRubro72 != "") || ($totalmejoras2 != "")){$totalvalor2 = $TotalRubro72 + (int)$totalmejoras2; echo number_format((float)$totalvalor2,2,',','.');}} ?> </td> <!-- TOTAL VALOR -->
				</tr>
				<tr>
					<td class="celdabi" height="19"> <?php if (isset($formulario3)) {echo $formulario3;} ?> </td>
					<td class="celdabi"> <?php if (isset($data3)) {echo $data3;} ?> </td>
					<td class="celdabi"> <?php if (isset($datare3)) {echo $datare3;} ?> </td>
					<td class="celdatri"> <?php if ((isset($cubierta3)) && ($cubierta3 != "")) {echo bcdiv($cubierta3,'1',2);} ?> </td>
					<td class="celdatri" style="border-right-color:black; border-right-width:2px"> <?php if ((isset($semicub3)) && ($semicub3 != "")) {echo bcdiv($semicub3,'1',2);} ?> </td>
					<td class="celdatri" style="border-right-color:black; border-right-width:2px"> <?php if(($cubierta3 != "") || ($semicub3 != "")){$totalsup3=$cubierta3+$semicub3; echo bcdiv($totalsup3,'1',2);} ?> </td>
					<td class="celdatri"> <?php if (isset($TotalRubro73)) {echo number_format((float)$TotalRubro73, 2,',','.');} ?> </td> <!-- EDIFICIO + INST COMPLEMENTARIAS -->
					<td class="celdatri" style="border-right-width: 2px; border-right-color:black;">
						<?php if (isset($totalmejoras3)) {echo $totalmejoras3;} ?> </td> <!-- MEJORAS -->
					<td class="celdatri" style="border-right-style:solid; border-right-color:black; border-right-width:2px">
						<?php if (isset($TotalRubro73)){if (($TotalRubro73 != "") || ($totalmejoras3 != "")){$totalvalor3 = $TotalRubro73 + (int)$totalmejoras3; echo number_format((float)$totalvalor3,2,',','.');}} ?> </td> <!-- TOTAL VALOR -->
				</tr>
				<tr>
					<td class="celdabi" height="19"> <?php if (isset($formulario4)) {echo $formulario4;} ?> </td>
					<td class="celdabi"> <?php if (isset($data4)) {echo $data4;} ?> </td>
					<td class="celdabi"> <?php if (isset($datare4)) {echo $datare4;} ?> </td>
					<td class="celdatri"> <?php if ((isset($cubierta4)) && ($cubierta4 != ""))  {echo bcdiv($cubierta4,'1',2);} ?> </td>
					<td class="celdatri" style="border-right-color:black; border-right-width:2px"> <?php if ((isset($semicub4)) && ($semicub4 != "")) {echo bcdiv($semicub4,'1',2);} ?> </td>
					<td class="celdatri" style="border-right-color:black; border-right-width:2px"> <?php if(($cubierta4 != "") || ($semicub4 != "")){$totalsup4=$cubierta4+$semicub4; echo bcdiv($totalsup4,'1',2);} ?> </td>
					<td class="celdatri"> <?php if (isset($TotalRubro74)) {echo number_format((float)$TotalRubro74, 2,',','.');} ?> </td> <!-- EDIFICIO + INST COMPLEMENTARIAS -->
					<td class="celdatri" style="border-right-width: 2px; border-right-color:black;">
						 <?php if (isset($totalmejoras4)) {echo $totalmejoras4;} ?> </td> <!-- MEJORAS -->
					<td class="celdatri" style="border-right-style:solid; border-right-color:black; border-right-width:2px">
						<?php if (isset($TotalRubro74)){if (($TotalRubro74 != "") || ($totalmejoras4 != "")){$totalvalor4 = $TotalRubro74 + (int)$totalmejoras4; echo number_format((float)$totalvalor4,2,',','.');}} ?> </td> <!-- TOTAL VALOR -->
				</tr>
				<tr>
					<td class="celdabi" height="19"> <?php if (isset($formulario5)) {echo $formulario5;} ?> </td>
					<td class="celdabi"> <?php if (isset($data5)) {echo $data5;} ?> </td>
					<td class="celdabi"> <?php if (isset($datare5)) {echo $datare5;} ?> </td>
					<td class="celdatri"> <?php if ((isset($cubierta5)) && ($cubierta5 != "")) {echo bcdiv($cubierta5,'1',2);} ?> </td>
					<td class="celdatri" style="border-right-color:black; border-right-width:2px"> <?php if ((isset($semicub5)) && ($semicub5 != "")) {echo bcdiv($semicub5,'1',2);} ?> </td>
					<td class="celdatri" style="border-right-color:black; border-right-width:2px"> <?php if(($cubierta5 != "") || ($semicub5 != "")){$totalsup5=$cubierta5+$semicub5; echo bcdiv($totalsup5,'1',2);} ?> </td>
					<td class="celdatri"> <?php if (isset($TotalRubro75)) {echo number_format((float)$TotalRubro75, 2,',','.');} ?> </td> <!-- EDIFICIO + INST COMPLEMENTARIAS -->
					<td class="celdatri" style="border-right-width: 2px; border-right-color:black;">
						<?php if (isset($totalmejoras5)) {echo $totalmejoras5;} ?> </td> <!-- MEJORAS -->
					<td class="celdatri" style="border-right-style:solid; border-right-color:black; border-right-width:2px">
						<?php if (isset($TotalRubro75)){if (($TotalRubro75 != "") || ($totalmejoras5 != "")){$totalvalor5 = $TotalRubro75 + (int)$totalmejoras5; echo number_format((float)$totalvalor5,2,',','.');}} ?> </td> <!-- TOTAL VALOR -->
				</tr>
				<tr>
					<td class="celdabi" height="19"> <?php if (isset($formulario6)) {echo $formulario6;} ?> </td>
					<td class="celdabi"> <?php if (isset($data6)) {echo $data6;} ?> </td>
					<td class="celdabi"> <?php if (isset($datare6)) {echo $datare6;} ?> </td>
					<td class="celdatri"> <?php if ((isset($cubierta6)) && ($cubierta6 != "")) {echo bcdiv($cubierta6,'1',2);} ?> </td>
					<td class="celdatri" style="border-right-color:black; border-right-width:2px"> <?php if ((isset($semicub6)) && ($semicub6 != "")) {echo bcdiv($semicub6,'1',2);} ?> </td>
					<td class="celdatri" style="border-right-color:black; border-right-width:2px"> <?php if(($cubierta6 != "") || ($semicub6 != "")){$totalsup6=$cubierta6+$semicub6; echo bcdiv($totalsup6,'1',2);} ?> </td>
					<td class="celdatri"> <?php if (isset($TotalRubro76)) {echo number_format((float)$TotalRubro76, 2,',','.');} ?> </td> <!-- EDIFICIO + INST COMPLEMENTARIAS -->
					<td class="celdatri" style="border-right-width: 2px; border-right-color:black;">
						<?php if (isset($totalmejoras6)) {echo $totalmejoras6;} ?> </td> <!-- MEJORAS -->
					<td class="celdatri" style="border-right-style:solid; border-right-color:black; border-right-width:2px">
						<?php if (isset($TotalRubro76)){if (($TotalRubro76 != "") || ($totalmejoras6 != "")){$totalvalor6 = $TotalRubro76 + (int)$totalmejoras6; echo number_format((float)$totalvalor6,2,',','.');}} ?> </td> <!-- TOTAL VALOR -->
				</tr>
				<tr>
					<td class="celdabi" height="19"> <?php if (isset($formulario7)) {echo $formulario7;} ?> </td>
					<td class="celdabi"> <?php if (isset($data7)) {echo $data7;} ?> </td>
					<td class="celdabi"> <?php if (isset($datare7)) {echo $datare7;} ?> </td>
					<td class="celdatri"> <?php if ((isset($cubierta7)) && ($cubierta7 != "")) {echo bcdiv($cubierta7,'1',2);} ?> </td>
					<td class="celdatri" style="border-right-color:black; border-right-width:2px"> <?php if ((isset($semicub7)) && ($semicub7 != "")) {echo bcdiv($semicub7,'1',2);} ?> </td>
					<td class="celdatri" style="border-right-color:black; border-right-width:2px"> <?php if(($cubierta7 != "") || ($semicub7 != "")){$totalsup7=$cubierta7+$semicub7; echo bcdiv($totalsup7,'1',2);} ?> </td>
					<td class="celdatri"> <?php if (isset($TotalRubro77)) {echo number_format((float)$TotalRubro77, 2,',','.');} ?> </td> <!-- EDIFICIO + INST COMPLEMENTARIAS -->
					<td class="celdatri" style="border-right-width: 2px; border-right-color:black;">
						<?php if (isset($totalmejoras7)) {echo $totalmejoras7;} ?> </td> <!-- MEJORAS -->
					<td class="celdatri" style="border-right-style:solid; border-right-color:black; border-right-width:2px">
						<?php if (isset($TotalRubro77)){if (($TotalRubro77 != "") || ($totalmejoras7 != "")){$totalvalor7 = $TotalRubro77 + (int)$totalmejoras7; echo number_format((float)$totalvalor7,2,',','.');}} ?> </td> <!-- TOTAL VALOR -->
				</tr>
				<tr>
					<td class="celdabi" height="19"> <?php if (isset($formulario8)) {echo $formulario8;} ?> </td>
					<td class="celdabi"> <?php if (isset($data8)) {echo $data8;} ?> </td>
					<td class="celdabi"> <?php if (isset($datare8)) {echo $datare8;} ?> </td>
					<td class="celdatri"> <?php if ((isset($cubierta8)) && ($cubierta8 != "")) {echo bcdiv($cubierta8,'1',2);} ?> </td>
					<td class="celdatri" style="border-right-color:black; border-right-width:2px"> <?php if ((isset($semicub8)) && ($semicub8 != "")) {echo bcdiv($semicub8,'1',2);} ?> </td>
					<td class="celdatri" style="border-right-color:black; border-right-width:2px"> <?php if(($cubierta8 != "") || ($semicub8 != "")){$totalsup8=$cubierta8+$semicub8; echo bcdiv($totalsup8,'1',2);} ?> </td>
					<td class="celdatri"> <?php if (isset($TotalRubro78)) {echo number_format((float)$TotalRubro78, 2,',','.');} ?> </td> <!-- EDIFICIO + INST COMPLEMENTARIAS -->
					<td class="celdatri" style="border-right-width: 2px; border-right-color:black;">
						<?php if (isset($totalmejoras8)) {echo $totalmejoras8;} ?> </td> <!-- MEJORAS -->
					<td class="celdatri" style="border-right-style:solid; border-right-color:black; border-right-width:2px">
						<?php if (isset($TotalRubro78)){if (($TotalRubro78 != "") || ($totalmejoras8 != "")){$totalvalor8 = $TotalRubro78 + (int)$totalmejoras8; echo number_format((float)$totalvalor8,2,',','.');}} ?> </td> <!-- TOTAL VALOR -->
				</tr>
				<tr>
					<td class="celdabi" height="19"> <?php if (isset($formulario9)) {echo $formulario9;} ?> </td>
					<td class="celdabi"> <?php if (isset($data9)) {echo $data9;} ?></td>
					<td class="celdabi"> <?php if (isset($datare9)) {echo $datare9;} ?> </td>
					<td class="celdatri"> <?php if ((isset($cubierta9)) && ($cubierta9 != "")) {echo bcdiv($cubierta9,'1',2);} ?> </td>
					<td class="celdatri" style="border-right-color:black; border-right-width:2px"> <?php if ((isset($semicub9)) && ($semicub9 != "")) {echo bcdiv($semicub9,'1',2);} ?> </td>
					<td class="celdatri" style="border-right-color:black; border-right-width:2px"> <?php if(($cubierta9 != "") || ($semicub9 != "")){$totalsup9=$cubierta9+$semicub9; echo bcdiv($totalsup9,'1',2);} ?> </td>
					<td class="celdatri"> <?php if (isset($TotalRubro79)) {echo number_format((float)$TotalRubro79, 2,',','.');} ?> </td> <!-- EDIFICIO + INST COMPLEMENTARIAS -->
					<td class="celdatri" style="border-right-width: 2px; border-right-color:black;">
						<?php if (isset($totalmejoras9)) {echo $totalmejoras9;} ?> </td> <!-- MEJORAS -->
					<td class="celdatri" style="border-right-style:solid; border-right-color:black; border-right-width:2px">
						<?php if (isset($TotalRubro79)){if (($TotalRubro79 != "") || ($totalmejoras9 != "")){$totalvalor9 = $TotalRubro79 + (int)$totalmejoras9; echo number_format((float)$totalvalor9,2,',','.');}} ?> </td> <!-- TOTAL VALOR -->
				</tr>
				<tr>
					<td class="celdabi" height="19"> <?php if (isset($formulario10)) {echo $formulario10;} ?> </td>
					<td class="celdabi"> <?php if (isset($data10)) {echo $data10;} ?> </td>
					<td class="celdabi"> <?php if (isset($datare10)) {echo $datare10;} ?> </td>
					<td class="celdatri"> <?php if ((isset($cubierta10)) && ($cubierta10 != "")) {echo bcdiv($cubierta10,'1',2);} ?> </td>
					<td class="celdatri" style="border-right-color:black; border-right-width:2px"> <?php if ((isset($semicub10)) && ($semicub10 != "")) {echo bcdiv($semicub10,'1',2);} ?> </td>
					<td class="celdatri" style="border-right-color:black; border-right-width:2px"> <?php if(($cubierta10 != "") || ($semicub10 != "")){$totalsup10=$cubierta10+$semicub10; echo bcdiv($totalsup10,'1',2);} ?> </td>
					<td class="celdatri"> <?php if (isset($TotalRubro710)) {echo number_format((float)$TotalRubro710, 2,',','.');} ?> </td> <!-- EDIFICIO + INST COMPLEMENTARIAS -->
					<td class="celdatri" style="border-right-width: 2px; border-right-color:black;">
						<?php if (isset($totalmejoras10)) {echo $totalmejoras10;} ?> </td> <!-- MEJORAS -->
					<td class="celdatri" style="border-right-style:solid; border-right-color:black; border-right-width:2px">
						<?php if (isset($TotalRubro710)){if (($TotalRubro710 != "") || ($totalmejoras10 != "")){$totalvalor10 = $TotalRubro710 + (int)$totalmejoras10; echo number_format((float)$totalvalor10,2,',','.');}} ?> </td> <!-- TOTAL VALOR -->
				</tr>
			</tbody>
				<tr>
					<td> </td>
					<td> </td>
					<td colspan="3" style="text-align:right; border-right-style:solid; padding:4px"> <div style="font-size:14px"> SUMATORIA DE SUPERFICIE &nbsp;&nbsp;
					<br> </div> <div class="letrachica"> (entero redondeado) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </div> </td>
					<?php if ($a > 10){ ?>
						<td style="border-style:solid; border-top-style:none; border-left-style:none;text-align:center"> <?php
						$totalsup=$totalsup1+$totalsup2+$totalsup3+$totalsup4+$totalsup5+$totalsup6+$totalsup7+$totalsup8+$totalsup9+$totalsup10; ?> </td>
					<?php } else { ?>
					<td style="border-style:solid; border-top-style:none; border-left-style:none;text-align:center"> <?php
					$totalsup=$totalsup1+$totalsup2+$totalsup3+$totalsup4+$totalsup5+$totalsup6+$totalsup7+$totalsup8+$totalsup9+$totalsup10; echo number_format((float)$totalsup,0,',','.') ?> </td>
				<?php } ?>
					<td colspan="2" style="text-align:right; border-right-style:solid"> <div style="font-size:14px"> SUMATORIA DE VALOR &nbsp;&nbsp; <br> </div>
					<div class="letrachica"> (entero redondeado) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </div> </td>
					<?php if ($a > 10){ ?>
						<td style="border-bottom-style:solid;border-right-style:solid;text-align:center"> <?php
						$totalvalor=$totalvalor1+$totalvalor2+$totalvalor3+$totalvalor4+$totalvalor5+$totalvalor6+$totalvalor7+$totalvalor8+$totalvalor9+$totalvalor10; ?></td>
					<?php } else { ?>
					<td style="border-bottom-style:solid;border-right-style:solid;text-align:center"> <?php
					$totalvalor=$totalvalor1+$totalvalor2+$totalvalor3+$totalvalor4+$totalvalor5+$totalvalor6+$totalvalor7+$totalvalor8+$totalvalor9+$totalvalor10; echo number_format((float)$totalvalor,0,',','.') ?></td>
				<?php } ?>
				</tr>
		</table>
		<table style="width: 1077px; border-spacing: 0px">
			<tr>
				<td style="font-size:17px;" colspan="3"> <b> RUBRO 6 Valuación fiscal </b></td>
			</tr>
		<tbody class="nomenclatura">
			<tr>
				<td class="celdatri" style="border-top-style:none;" width="500"> </td>
				<td class="celdatri" style="border-top-style:none;padding:4px" width="150"> Total rubro 4 </td>
				<?php if ($a > 10){ ?>
					<td class="celdatri" style="border-top-style:none; border-right-style:none"> <td>
				<?php } else { ?>
				<td class="celdatri" style="border-top-style:none; border-right-style:none"> <?php echo number_format((float)$valor,0,',','.') ?> <td>
				<?php } ?>
			</tr>
			<tr>
				<td class="celdatri"> </td>
				<td class="celdatri" style="padding:4px"> Total rubro 5 </td>
				<?php if ($a > 10){ ?>
					<td class="celdatri" style="border-right-style:none"> </td>
				<?php } else { ?>
				<td class="celdatri" style="border-right-style:none"> <?php $totalRubro5 = $totalvalor; echo number_format((float)$totalRubro5,0,',','.') ?> </td>
			<?php } ?>
			</tr>
			<tr>
				<td class="celdatri"> </td>
				<td class="celdatri" style="padding:4px"><b> Valor Total </b> </td>
				<?php if ($a > 10){ ?>
					<td class="celdatri" style="border-right-style:none" width="150"> </td>
				<?php } else { ?>
				<td class="celdatri" style="border-right-style:none" width="150"> <?php $totalRubro4Rubro5 = round($valor)+$totalRubro5; echo number_format((float)$totalRubro4Rubro5,0,',','.') ?> </td>
			<?php } ?>
			</tr>
		</tbody>
		</table>
		<table style="width: 1077px; border-spacing: 0px; margin-top:5px">
			<tr>
				<td style="font-size:17px"> <b> RUBRO 7 Destino del edificio </b></td>
			</tr>
			<tbody class="nomenclatura">
				<tr>
					<td style="padding:5px" height="12"> <?php echo $nombreDestino ?> </td>
				</tr>
			</tbody>
		</table>
		<table style="width: 1077px; border-spacing: 0px; margin-top:3px">
			<tr>
				<td style="font-size:17px"> <b> RUBRO 8 Propietario, condómino, etc. </b></td>
			</tr>
			<tbody class="nomenclatura">
				<tr>
					<td class="celdatri" style="border-top-style:none; text-align: left" rowspan="2"> <b>  &nbsp; &nbsp; APELLIDO Y NOMBRE O RAZÓN SOCIAL </b> </td>
					<td colspan="2"> DOCUMENTO DE IDENTIDAD </td>
				</tr>
				<tr>
					<td class="celdatri" width="70"> Tipo (*) </td>
					<td class="celdatri" style="border-right-style:none" width="150"> N° </td>
				</tr>
				<tr>
					<td class="celdatri" height="15"> <?php echo $FcnombreApellido ?> </td>
					<td class="celdatri" height="15"> <?php echo $FctipoDni ?> </td>
					<td class="celdabi" style="border-right-style:none" height="15">  <?php echo $Fcdni ?></td>
				</tr>
			</tbody>
		</table>
		<table style="width: 1077px; border-spacing: 0px; margin-top:3px">
			<tr>
				<td style="font-size:17px"> <b> RUBRO 9 Domicilio fiscal </b></td>
			</tr>
			<tbody class="nomenclatura">
				<tr>
					<td class="celdatri" style="border-top-style:none; text-align: left" width="380"> <b>  &nbsp; &nbsp; CALLE </b> </td>
					<td class="celdatri" style="border-top-style:none" width="65"> N° </td>
					<td class="celdatri"style="border-top-style:none" width="50"> PISO </td>
					<td class="celdatri" style="border-top-style:none" width="50"> DPTO </td>
					<td class="celdatri" style="border-top-style:none"> LOCALIDAD </td>
					<td width="100"> CODIGO POSTAL </td>
				</tr>
				<tr>
					<td class="celdatri" height="15"> <?php echo $Fdcalle ?> </td>
					<td class="celdatri" height="15"> <?php echo $FdnroCalle ?> </td>
					<td class="celdatri" height="15"> <?php echo $Fdpiso ?> </td>
					<td class="celdatri" height="15"> <?php echo $Fddpto ?> </td>
					<td class="celdatri" height="15"> <?php echo $Fdlocalidad ?> </td>
					<td class="celdabi" style="border-right-style:none" height="15"> <?php echo $Fdcp ?> </td>
				</tr>
			</tbody>
		</table>
		<table style="width: 1077px; border-spacing: 0px; margin-top:3px">
			<tr>
				<td style="font-size:17px"> <b> RUBRO 10 Observaciones </b></td>
			</tr>
			<tbody class="nomenclatura">
				<tr>
					<td style="text-align:left;padding:7px;vertical-align:top" height="60"> <?php echo $observacion ?> </td>
				</tr>
			</tbody>
		</table>
		<table style="width: 1077px; border-spacing: 0px; margin-top:5px">
			<tr>
				<td style="font-size:17px"> <b> RESERVADO PARA LA DIRECCION PROVINCIAL DE CATASTRO TERRITORIAL </b></td>
			</tr>
			<tbody class="partido">
				<tr>
					<td rowspan="3" style="padding:12px; border-right-style:solid">  </td>
					<td style="text-align:left; font-size:16px" width="170"> <b> &nbsp; &nbsp; REGISTRADO </b> </td>
				</tr>
				<tr>
					<td style="text-align:left; font-size:16px"> <b> &nbsp; &nbsp; Nro </b> ____________ </td>
				</tr>
				<tr>
					<td style="text-align:left; font-size:16px"> <b> &nbsp; &nbsp; Fecha </b> ___________ </td>
				</tr>
			</tbody>
		</table>
		<div class="textogrande" style="text-align:center; font-size:16px; width:1080px; margin-top:5px"> El duplicado devuelto por esta DIRECCIÓN servirá como comprobante de haber sido presentada la Declaración Jurada </div>
			<div class="letrachica" style="text-align:center; width:1080px; font-size:10px"> SE RECOMIENDA LA CONSERVACIÓN EN BUEN ESTADO DE ESTA DECLARACIÓN JURADA Y DE LOS FORMULARIOS ANEXOS </div>
		</div>
	</div>
		<?php if($a > 10){ ?>
			<div style="page-break-after:always;"></div>
			<div class="contenedor2">
			<div class="izquierda">
				<img id="img" src="img/logopdf901.png">
			</div>
			<div id="headermedio">
				<table class="table table-bordered responsive-table">
					<tr>
						<td class="cuadro" width="270"> <b> PARA &nbsp; &nbsp;ENTREGAR  &nbsp; &nbsp; JUNTO  &nbsp; &nbsp; CON  &nbsp; &nbsp; LOS &nbsp; &nbsp; FORMULARIOS &nbsp; &nbsp; DE &nbsp; &nbsp; AVALÚO </b> </td>
					</tr>
					<tr>
						<td style="font-size:13px; text-align:center;"> <b> PARCELA URBANA O SUBURBANA </b> </td>
					</tr>
				</table>
				<img id="img901" src="img/img2pdf901.png">
			</div>
			</header>
			<div class="izquierdacuerpo">
				<table class="table table-bordered responsive-table">
					<tr>
						<td colspan="2" style="font-size:14px;"> Declaración Jurada sobre individualización, caracteristicas y evaluación - Ley 10.707 </td>
					</tr>
					<tr>
						<td width="345" style="font-size:17px">  <b> RUBRO 1 Croquis de ubicación </b>  </td>
						<td style="font-size:17px"> <b> RUBRO 2 Datos del inmueble </b> </td>
					</tr>
				</table>
				<table class="croquis">
					<!-- Valor de las calles de la izquierda -->
					<div class="valor">
						<p style="transform: rotate(-90deg);font-size:12px"> Valor basico &nbsp;&nbsp;&nbsp; <?php echo $valorCalle4 ?>&nbsp;&nbsp;&nbsp; por m<sup>2</sup> <br><br><br>
							 C A L L E &nbsp;&nbsp;&nbsp; <?php echo $calle4 ?></p>
					</div>
					<!-- Valor de las calles de la derecha -->
					<div class="valor2">
						<p style="transform: rotate(-90deg);font-size:12px"> C A L L E &nbsp;&nbsp;&nbsp; <?php echo $calle2 ?><br><br>
							 Valor basico &nbsp;&nbsp;&nbsp; <?php echo $valorCalle2 ?> &nbsp;&nbsp;&nbsp; por m<sup>2</sup></p>
					</div>
					<tr>
						<td height="30" colspan="3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							Valor basico &nbsp;&nbsp;&nbsp; <?php echo $valorCalle1 ?>  &nbsp;&nbsp;&nbsp;  por m<sup>2</sup> </td>
					</tr>
					<tr>
						<td width="50"> </td>
						<td height="15"> C A L L E &nbsp;&nbsp;&nbsp; <?php echo $calle1 ?></td>
						<td width="50"> </td>
					</tr>
					<tr>
						<td height="178"> </td>
						<td height="178" style="border-style:solid"> </td>
						<td height="178"> </td>
					</tr>
					<tr>
						<td height="25"> </td>
						<td height="25"><br> C A L L E &nbsp;&nbsp;&nbsp; <?php echo $calle3 ?></td>
						<td height="25"> </td>
					</tr>
					<tr>
						<td colspan="3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							Valor basico &nbsp;&nbsp;&nbsp; <?php echo $valorCalle3 ?>  &nbsp;&nbsp;&nbsp; por m<sup>2</sup>
						</td>
					</tr>
					<tr>
						<td colspan="3"> <b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							INDICAR MEDIDAS PERIMETRALES Y RUMBO </b>
						</td>
					</tr>
				</table>
			</div>
			<div class="textosolo">
				<b> RUBRO 5 Accesiones </b>
			</div>
			<div class="derechacuerpo">
				<table class="partido">
					<tr>
						<td class="partidobordes"><b> PARTIDO </b> </td>
						<td class="partidobordes" width="60"><b> N° </b></td>
						<td style="border-bottom-style: solid;" width="150"><b> Partida </b></td>
					</tr>
					<tr>
						<td style="border-right-style:solid; border-right-width:1px; border-right-color:#A4A4A4" height="24"> <?php echo $Fpartido ?> </td>
						<td style="border-right-style:solid; border-right-width:1px;border-right-color:#A4A4A4" height="24"> <?php echo $FcodPartido ?> </td>
						<td height="24"> <?php echo $Fpartida ?> </td>
					</tr>
				</table>
				<table width="468" style="border-spacing: 0px;" >
					<thead>
						<tr>
							<td colspan="7" style="font-size:17px;"> <b> NOMENCLATURA CATASTRAL </b> </td>
						</tr>
					</thead>
					<tbody class="nomenclatura">
						<tr>
							<td class="nombordes"><b> CIRC. </b></td>
							<td class="nombordes"><b> SECC. </b></td>
							<td class="nombordes"><b> CH. </b></td>
							<td class="nombordes"><b> QTA. </b></td>
							<td class="nombordes"><b> FRACC. </b></td>
							<td class="nombordes"><b> MZA. </b></td>
							<td class="nomultimo"><b> PARCELA </b></td>
						</tr>
						<tr>
							<td class="nombordes" height="24"> <?php echo $Fcir ?> </td>
							<td class="nombordes" height="24"> <?php echo $Fsec ?> </td>
							<td class="nombordes" height="24"> <?php echo $Fcha ?> </td>
							<td class="nombordes" height="24"> <?php echo $Fqui ?> </td>
							<td class="nombordes" height="24"> <?php echo $Ffra ?> </td>
							<td class="nombordes" height="24"> <?php echo $Fman ?> </td>
							<td class="nomultimo" height="24"> <?php echo $Fpar ?> </td>
						</tr>
						<tr>
							<td class="nombordes" colspan="5"><b> CALLE </b></td>
							<td class="nombordes"><b> N° </b></td>
							<td class="nomultimo"><b> Departamento </b></td>
						</tr>
						<tr>
							<td class="nombordes" colspan="5" height="24"> <?php echo $Fdomicilio ?> </td>
							<td class="nombordes" height="24"> <?php echo $FnroCalle ?> </td>
							<td class="nomultimo" height="24"> <?php echo $Fdpto ?> </td>
						</tr>
						<tr>
							<td colspan="2" height="24"><b> LOCALIDAD </b></td>
							<td style="border-right-style:solid; border-right-width:1px; border-right-color: #A4A4A4;" colspan="3" height="24"> <?php echo $Flocalidad ?> </td>
							<td height="24"><b> C.P.: </b></td>
							<td height="24"> <?php echo $FcodigoPostal ?> </td>
						</tr>
					</tbody>
				</table>
				<br>
				<table width="468" style="border-spacing: 0px; margin-top:7px">
					<thead>
						<tr>
							<td colspan="6" style="font-size:17px;"> <b> RUBRO 3 Infraestructura </b> </td>
						</tr>
					</thead>
					<tbody class="nomenclatura">
						<tr>
							<td class="nombordes"> <b> Pavimento </b> </td>
							<td class="nombordes"> <b> Alumbrado púb. </b> </td>
							<td class="nombordes"> <b> Energía eléctrica </b> </td>
							<td class="nombordes"> <b> Agua corriente </b> </td>
							<td class="nombordes"> <b> Cloacas </b> </td>
							<td class="nomultimo"> <b> Gas natural </b> </td>
						</tr>
						<tr>
							<td class="nomultimo2" height="23"> <?php $infraP = checkbox($infraP) ?> </td>
							<td class="nomultimo2" height="23"> <?php $infraA = checkbox($infraA) ?> </td>
							<td class="nomultimo2" height="23"> <?php $infraL = checkbox($infraL) ?> </td>
							<td class="nomultimo2" height="23"> <?php $infraAg = checkbox($infraAg) ?> </td>
							<td class="nomultimo2" height="23"> <?php $infraC = checkbox($infraC) ?> </td>
							<td height="23"> <?php $infraG = checkbox($infraG) ?> </td>
						</tr>
					</tbody>
				</table>
				<table width="468" style="border-spacing: 0px; margin-top:5px">
					<thead>
						<tr>
							<td colspan="4" style="font-size:17px;"> <b> RUBRO 4 Tierra </td>
						</tr>
					</thead>
					<tbody class="nomenclatura">
						<tr>
							<td class="nombordes"> <b> Coeficiente de ajuste </b> </td>
							<td class="nombordes"> <b> Valor básico </b> </td>
							<td class="nombordes"> <b> Superficie en m<sup>2</sup> </b> </td>
							<td class="nomultimo"> <b> VALOR </b> (entero redondeado) </b> </td>
						</tr>
						<tr>
							<td style="padding:7px" height="12"> <?php echo bcdiv($ajuste,'1',2) ?> </td>
							<td class="nomultimo2" style="padding:7px"> <?php echo bcdiv($basico,'1',2) ?> </td>
							<td class="nomultimo2" style="padding:7px"> <?php echo bcdiv($superficie,'1',2) ?> </td>
							<td style="border-right-style:Solid; border-right-width:2px; border-bottom-style:Solid; border-bottom-width:2px;padding:7px;
							border-left-style:Solid; border-left-width:2px; border-top-style:Solid; border-top-width:2px"> <?php echo bcdiv($valor,'1',2) ?> </td>
						</tr>
					</tbody>
				</table>
			</div>
			<p class="textosolo2"> (*) Unicamente L.E., L.C. o D.N.I. </p>
			<div class="fullhoja">

				<table style="width: 1077px; border-spacing: 0px;">
				<tbody class="accesiones">
					<tr>
						<td class="celdabi" style="border-top-style:none" rowspan="2"> Formulario </td>
						<td class="celdabi" style="border-top-style:none" rowspan="2" width="90"> <div class="textogrande"> DATA <br> </div> día / mes / año   </td>
						<td class="celdabi" style="border-top-style:none" rowspan="2" width="95"> <div class="textogrande"> DATA RECICLADO <br> </div> día / mes / año   </td>
						<td style="border-right-style:solid;" colspan="3"> <div class="textogrande"> SUPERFICIE <br> </div> (entero redondeado en m<sup>2</sup>)   </td>
						<td colspan="3" style="border-right-style:solid"> <div class="textogrande"> VALOR </div> </td>
					</tr>
					<tr>
						<td class="celdatri"> 1. cubierta </td>
						<td class="celdatri" width="80" style="border-right-color:black; border-right-width:2px"> 2. semicubierta </td>
						<td style="border-right-style:solid !important;border-top-style:solid; border-top-width:1px;
						border-top-color:#A4A4A4;"> 3. total superficie (1 + 2) </td>
						<td class="celdatri" width="80"> 4. edificio + inst. complem. </td>
						<td class="celdatri" style="border-right-width: 2px; border-right-color:black;"> 5. mejoras </td>
						<td class="celdatri" style="border-right-style:solid; border-right-color:black; border-right-width:2px" width="110"> &nbsp;&nbsp;6. TOTAL VALOR &nbsp;&nbsp;(4 + 5) </td>
					</tr>
					<tr>
						<td class="celdabi" height="19"> <?php if (isset($formulario11)) {echo $formulario11;} ?> </td>
						<td class="celdabi"> <?php if (isset($data11)) {echo $data11;} ?> </td>
						<td class="celdabi"> <?php if (isset($datare11)) {echo $datare11;} ?> </td>
						<td class="celdatri"> <?php if ((isset($cubierta11)) && ($cubierta11 != "")) {echo bcdiv($cubierta11,'1',2);} ?> </td>
						<td class="celdatri" style="border-right-color:black; border-right-width:2px"> <?php if ((isset($semicub11)) && ($semicub11 != "")) {echo bcdiv($semicub11,'1',2);} ?> </td>
						<td class="celdatri" style="border-right-color:black; border-right-width:2px"> <?php if(($cubierta11 != "") || ($semicub11 != "")){$totalsup11=$cubierta11+$semicub11;echo bcdiv($totalsup11, '1', 2);}  ?> </td>
						<td class="celdatri"> <?php if (isset($TotalRubro711)) {echo number_format((float)$TotalRubro711,2,',','.');} ?> </td> <!-- EDIFICIO + INST COMPLEMENTARIAS -->
						<td class="celdatri" style="border-right-width: 2px; border-right-color:black;">
							<?php if (isset($totalmejoras11)) {echo $totalmejoras11;} ?> </td> <!-- MEJORAS -->
						<td class="celdatri" style="border-right-style:solid; border-right-color:black; border-right-width:2px">
						  <?php if (isset($TotalRubro711)){if (($TotalRubro711 != "") || ($totalmejoras11 != "")){$totalvalor11 = $TotalRubro711 + (int)$totalmejoras11; echo number_format((float)$totalvalor11,2,',','.');}} ?> </td> <!-- TOTAL VALOR -->
					</tr>
					<tr>
						<td class="celdabi" height="19"> <?php if (isset($formulario12)) {echo $formulario12;} ?> </td>
						<td class="celdabi"> <?php if (isset($data12)) {echo $data12;} ?> </td>
						<td class="celdabi"> <?php if (isset($datare12)) {echo $datare12;} ?> </td>
						<td class="celdatri"> <?php if ((isset($cubierta12)) && ($cubierta12 != "")) {echo bcdiv($cubierta12,'1',2);} ?> </td>
						<td class="celdatri" style="border-right-color:black; border-right-width:2px"> <?php if ((isset($semicub12)) && ($semicub12 != "")) {echo bcdiv($semicub12,'1',2);} ?> </td>
						<td class="celdatri" style="border-right-color:black; border-right-width:2px"> <?php if(($cubierta12 != "") || ($semicub12 != "")){$totalsup12=$cubierta12+$semicub12; echo bcdiv($totalsup2,'1',2);} ?> </td>
						<td class="celdatri"> <?php if (isset($TotalRubro712)) {echo number_format((float)$TotalRubro712,2,',','.');} ?> </td> <!-- EDIFICIO + INST COMPLEMENTARIAS -->
						<td class="celdatri" style="border-right-width: 2px; border-right-color:black;">
							<?php if (isset($totalmejoras12)) {echo $totalmejoras12;} ?> </td> <!-- MEJORAS -->
						<td class="celdatri" style="border-right-style:solid; border-right-color:black; border-right-width:2px">
							<?php if (isset($TotalRubro712)){if (($TotalRubro712 != "") || ($totalmejoras12 != "")){$totalvalor12 = $TotalRubro712 + (int)$totalmejoras12; echo number_format((float)$totalvalor12,2,',','.');}} ?> </td> <!-- TOTAL VALOR -->
					</tr>
					<tr>
						<td class="celdabi" height="19"> <?php if (isset($formulario13)) {echo $formulario13;} ?> </td>
						<td class="celdabi"> <?php if (isset($data13)) {echo $data13;} ?> </td>
						<td class="celdabi"> <?php if (isset($datare13)) {echo $datare13;} ?> </td>
						<td class="celdatri"> <?php if ((isset($cubierta13)) && ($cubierta13 != "")) {echo bcdiv($cubierta13,'1',2);} ?> </td>
						<td class="celdatri" style="border-right-color:black; border-right-width:2px"> <?php if ((isset($semicub13)) && ($semicub13 != "")) {echo bcdiv($semicub13,'1',2);} ?> </td>
						<td class="celdatri" style="border-right-color:black; border-right-width:2px"> <?php if(($cubierta13 != "") || ($semicub13 != "")){$totalsup13=$cubierta13+$semicub13; echo bcdiv($totalsup13,'1',2);} ?> </td>
						<td class="celdatri"> <?php if (isset($TotalRubro713)) {echo number_format((float)$TotalRubro713,2,',','.');} ?> </td> <!-- EDIFICIO + INST COMPLEMENTARIAS -->
						<td class="celdatri" style="border-right-width: 2px; border-right-color:black;">
							<?php if (isset($totalmejoras13)) {echo $totalmejoras13;} ?> </td> <!-- MEJORAS -->
						<td class="celdatri" style="border-right-style:solid; border-right-color:black; border-right-width:2px">
							<?php if (isset($TotalRubro713)){if (($TotalRubro713 != "") || ($totalmejoras13 != "")){$totalvalor13 = $TotalRubro713 + (int)$totalmejoras13; echo number_format((float)$totalvalor13,2,',','.');}} ?> </td> <!-- TOTAL VALOR -->
					</tr>
					<tr>
						<td class="celdabi" height="19"> <?php if (isset($formulario14)) {echo $formulario14;} ?> </td>
						<td class="celdabi"> <?php if (isset($data14)) {echo $data14;} ?> </td>
						<td class="celdabi"> <?php if (isset($datare14)) {echo $datare14;} ?> </td>
						<td class="celdatri"> <?php if ((isset($cubierta14)) && ($cubierta14 != ""))  {echo bcdiv($cubierta14,'1',2);} ?> </td>
						<td class="celdatri" style="border-right-color:black; border-right-width:2px"> <?php if ((isset($semicub14)) && ($semicub14 != "")) {echo bcdiv($semicub14,'1',2);} ?> </td>
						<td class="celdatri" style="border-right-color:black; border-right-width:2px"> <?php if(($cubierta14 != "") || ($semicub14 != "")){$totalsup14=$cubierta14+$semicub14; echo bcdiv($totalsup14,'1',2);} ?> </td>
						<td class="celdatri"> <?php if (isset($TotalRubro714)) {echo number_format((float)$TotalRubro714,2,',','.');} ?> </td> <!-- EDIFICIO + INST COMPLEMENTARIAS -->
						<td class="celdatri" style="border-right-width: 2px; border-right-color:black;">
							 <?php if (isset($totalmejoras14)) {echo $totalmejoras14;} ?> </td> <!-- MEJORAS -->
						<td class="celdatri" style="border-right-style:solid; border-right-color:black; border-right-width:2px">
							<?php if (isset($TotalRubro714)){if (($TotalRubro714 != "") || ($totalmejoras14 != "")){$totalvalor14 = $TotalRubro714 + (int)$totalmejoras14; echo number_format((float)$totalvalor14,2,',','.');}} ?> </td> <!-- TOTAL VALOR -->
					</tr>
					<tr>
						<td class="celdabi" height="19"> <?php if (isset($formulario15)) {echo $formulario15;} ?> </td>
						<td class="celdabi"> <?php if (isset($data15)) {echo $data15;} ?> </td>
						<td class="celdabi"> <?php if (isset($datare15)) {echo $datare15;} ?> </td>
						<td class="celdatri"> <?php if ((isset($cubierta15)) && ($cubierta15 != "")) {echo bcdiv($cubierta15,'1',2);} ?> </td>
						<td class="celdatri" style="border-right-color:black; border-right-width:2px"> <?php if ((isset($semicub15)) && ($semicub15 != "")) {echo bcdiv($semicub15,'1',2);} ?> </td>
						<td class="celdatri" style="border-right-color:black; border-right-width:2px"> <?php if(($cubierta15 != "") || ($semicub15 != "")){$totalsup15=$cubierta15+$semicub15; echo bcdiv($totalsup15,'1',2);} ?> </td>
						<td class="celdatri"> <?php if (isset($TotalRubro715)) {echo number_format((float)$TotalRubro715,2,',','.');} ?> </td> <!-- EDIFICIO + INST COMPLEMENTARIAS -->
						<td class="celdatri" style="border-right-width: 2px; border-right-color:black;">
							<?php if (isset($totalmejoras15)) {echo $totalmejoras15;} ?> </td> <!-- MEJORAS -->
						<td class="celdatri" style="border-right-style:solid; border-right-color:black; border-right-width:2px">
							<?php if (isset($TotalRubro715)){if (($TotalRubro715 != "") || ($totalmejoras15 != "")){$totalvalor15 = $TotalRubro715 + (int)$totalmejoras15; echo number_format((float)$totalvalor15,2,',','.');}} ?> </td> <!-- TOTAL VALOR -->
					</tr>
					<tr>
						<td class="celdabi" height="19"> <?php if (isset($formulario16)) {echo $formulario16;} ?> </td>
						<td class="celdabi"> <?php if (isset($data16)) {echo $data16;} ?> </td>
						<td class="celdabi"> <?php if (isset($datare16)) {echo $datare16;} ?> </td>
						<td class="celdatri"> <?php if ((isset($cubierta16)) && ($cubierta16 != "")) {echo bcdiv($cubierta16,'1',2);} ?> </td>
						<td class="celdatri" style="border-right-color:black; border-right-width:2px"> <?php if ((isset($semicub16)) && ($semicub16 != "")) {echo bcdiv($semicub16,'1',2);} ?> </td>
						<td class="celdatri" style="border-right-color:black; border-right-width:2px"> <?php if(($cubierta16 != "") || ($semicub16 != "")){$totalsup16=$cubierta16+$semicub16; echo bcdiv($totalsup16,'1',2);} ?> </td>
						<td class="celdatri"> <?php if (isset($TotalRubro716)) {echo number_format((float)$TotalRubro716,2,',','.');} ?> </td> <!-- EDIFICIO + INST COMPLEMENTARIAS -->
						<td class="celdatri" style="border-right-width: 2px; border-right-color:black;">
							<?php if (isset($totalmejoras16)) {echo $totalmejoras16;} ?> </td> <!-- MEJORAS -->
						<td class="celdatri" style="border-right-style:solid; border-right-color:black; border-right-width:2px">
							<?php if (isset($TotalRubro716)){if (($TotalRubro716 != "") || ($totalmejoras16 != "")){$totalvalor16 = $TotalRubro716 + (int)$totalmejoras16; echo number_format((float)$totalvalor16,2,',','.');}} ?> </td> <!-- TOTAL VALOR -->
					</tr>
					<tr>
						<td class="celdabi" height="19"> <?php if (isset($formulario17)) {echo $formulario17;} ?> </td>
						<td class="celdabi"> <?php if (isset($data17)) {echo $data17;} ?> </td>
						<td class="celdabi"> <?php if (isset($datare17)) {echo $datare17;} ?> </td>
						<td class="celdatri"> <?php if ((isset($cubierta17)) && ($cubierta17 != "")) {echo bcdiv($cubierta17,'1',2);} ?> </td>
						<td class="celdatri" style="border-right-color:black; border-right-width:2px"> <?php if ((isset($semicub17)) && ($semicub17 != "")) {echo bcdiv($semicub17,'1',2);} ?> </td>
						<td class="celdatri" style="border-right-color:black; border-right-width:2px"> <?php if(($cubierta17 != "") || ($semicub17 != "")){$totalsup17=$cubierta17+$semicub17; echo bcdiv($totalsup17,'1',2);} ?> </td>
						<td class="celdatri"> <?php if (isset($TotalRubro717)) {echo number_format((float)$TotalRubro717,2,',','.');} ?> </td> <!-- EDIFICIO + INST COMPLEMENTARIAS -->
						<td class="celdatri" style="border-right-width: 2px; border-right-color:black;">
							<?php if (isset($totalmejoras17)) {echo $totalmejoras17;} ?> </td> <!-- MEJORAS -->
						<td class="celdatri" style="border-right-style:solid; border-right-color:black; border-right-width:2px">
							<?php if (isset($TotalRubro717)){if (($TotalRubro717 != "") || ($totalmejoras17 != "")){$totalvalor17 = $TotalRubro717 + (int)$totalmejoras17; echo number_format((float)$totalvalor17,2,',','.');}} ?> </td> <!-- TOTAL VALOR -->
					</tr>
					<tr>
						<td class="celdabi" height="19"> <?php if (isset($formulario18)) {echo $formulario18;} ?> </td>
						<td class="celdabi"> <?php if (isset($data18)) {echo $data18;} ?> </td>
						<td class="celdabi"> <?php if (isset($datare18)) {echo $datare18;} ?> </td>
						<td class="celdatri"> <?php if ((isset($cubierta18)) && ($cubierta18 != "")) {echo bcdiv($cubierta18,'1',2);} ?> </td>
						<td class="celdatri" style="border-right-color:black; border-right-width:2px"> <?php if ((isset($semicub18)) && ($semicub18 != "")) {echo bcdiv($semicub18,'1',2);} ?> </td>
						<td class="celdatri" style="border-right-color:black; border-right-width:2px"> <?php if(($cubierta18 != "") || ($semicub18 != "")){$totalsup18=$cubierta18+$semicub18; echo bcdiv($totalsup18,'1',2);} ?> </td>
						<td class="celdatri"> <?php if (isset($TotalRubro718)) {echo number_format((float)$TotalRubro718,2,',','.');} ?> </td> <!-- EDIFICIO + INST COMPLEMENTARIAS -->
						<td class="celdatri" style="border-right-width: 2px; border-right-color:black;">
							<?php if (isset($totalmejoras18)) {echo $totalmejoras18;} ?> </td> <!-- MEJORAS -->
						<td class="celdatri" style="border-right-style:solid; border-right-color:black; border-right-width:2px">
							<?php if (isset($TotalRubro718)){if (($TotalRubro718 != "") || ($totalmejoras18 != "")){$totalvalor18 = $TotalRubro718 + (int)$totalmejoras18; echo number_format((float)$totalvalor18,2,',','.');}} ?> </td> <!-- TOTAL VALOR -->
					</tr>
					<tr>
						<td class="celdabi" height="19"> <?php if (isset($formulario19)) {echo $formulario19;} ?> </td>
						<td class="celdabi"> <?php if (isset($data19)) {echo $data19;} ?></td>
						<td class="celdabi"> <?php if (isset($datare9)) {echo $datare9;} ?> </td>
						<td class="celdatri"> <?php if ((isset($cubierta19)) && ($cubierta19 != "")) {echo bcdiv($cubierta19,'1',2);} ?> </td>
						<td class="celdatri" style="border-right-color:black; border-right-width:2px"> <?php if ((isset($semicub19)) && ($semicub19 != "")) {echo bcdiv($semicub19,'1',2);} ?> </td>
						<td class="celdatri" style="border-right-color:black; border-right-width:2px"> <?php if(($cubierta19 != "") || ($semicub19 != "")){$totalsup19=$cubierta19+$semicub19; echo bcdiv($totalsup19,'1',2);} ?> </td>
						<td class="celdatri"> <?php if (isset($TotalRubro719)) {echo number_format((float)$TotalRubro719,2,',','.');} ?> </td> <!-- EDIFICIO + INST COMPLEMENTARIAS -->
						<td class="celdatri" style="border-right-width: 2px; border-right-color:black;">
							<?php if (isset($totalmejoras19)) {echo $totalmejoras19;} ?> </td> <!-- MEJORAS -->
						<td class="celdatri" style="border-right-style:solid; border-right-color:black; border-right-width:2px">
							<?php if (isset($TotalRubro719)){if (($TotalRubro719 != "") || ($totalmejoras19 != "")){$totalvalor19 = $TotalRubro719 + (int)$totalmejoras19; echo number_format((float)$totalvalor19,2,',','.');}} ?> </td> <!-- TOTAL VALOR -->
					</tr>
					<tr>
						<td class="celdabi" height="19"> <?php if (isset($formulario20)) {echo $formulario20;} ?> </td>
						<td class="celdabi"> <?php if (isset($data20)) {echo $data20;} ?> </td>
						<td class="celdabi"> <?php if (isset($datare20)) {echo $datare20;} ?> </td>
						<td class="celdatri"> <?php if ((isset($cubierta20)) && ($cubierta20 != "")) {echo bcdiv($cubierta20,'1',2);} ?> </td>
						<td class="celdatri" style="border-right-color:black; border-right-width:2px"> <?php if ((isset($semicub20)) && ($semicub20 != "")) {echo bcdiv($semicub20,'1',2);} ?> </td>
						<td class="celdatri" style="border-right-color:black; border-right-width:2px"> <?php if(($cubierta20 != "") || ($semicub20 != "")){$totalsup20=$cubierta20+$semicub20; echo bcdiv($totalsup20,'1',2);} ?> </td>
						<td class="celdatri"> <?php if (isset($TotalRubro720)) {echo number_format((float)$TotalRubro720,2,',','.');} ?> </td> <!-- EDIFICIO + INST COMPLEMENTARIAS -->
						<td class="celdatri" style="border-right-width: 2px; border-right-color:black;">
							<?php if (isset($totalmejoras20)) {echo $totalmejoras20;} ?> </td> <!-- MEJORAS -->
						<td class="celdatri" style="border-right-style:solid; border-right-color:black; border-right-width:2px">
							<?php if (isset($TotalRubro720)){if (($TotalRubro720 != "") || ($totalmejoras20 != "")){$totalvalor20 = $TotalRubro720 + (int)$totalmejoras20; echo number_format((float)$totalvalor20,2,',','.');}} ?> </td> <!-- TOTAL VALOR -->
					</tr>
				</tbody>
					<tr>
						<td> </td>
						<td> </td>
						<td colspan="3" style="text-align:right; border-right-style:solid; padding:4px"> <div style="font-size:14px"> SUMATORIA DE SUPERFICIE &nbsp;&nbsp;
						<br> </div> <div class="letrachica"> (entero redondeado) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </div> </td>
						<td style="border-style:solid; border-top-style:none; border-left-style:none;text-align:center"> <?php
						$totalsup+=$totalsup11+$totalsup12+$totalsup13+$totalsup14+$totalsup15+$totalsup16+$totalsup17+$totalsup18+$totalsup19+$totalsup20; echo number_format((float)$totalsup,0,',','.') ?> </td>
						<td colspan="2" style="text-align:right; border-right-style:solid"> <div style="font-size:14px"> SUMATORIA DE VALOR &nbsp;&nbsp; <br> </div>
						<div class="letrachica"> (entero redondeado) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </div> </td>
						<td style="border-bottom-style:solid;border-right-style:solid;text-align:center"> <?php
						$totalvalor+=$totalvalor11+$totalvalor12+$totalvalor13+$totalvalor14+$totalvalor15+$totalvalor16+$totalvalor17+$totalvalor18+$totalvalor19+$totalvalor20; echo number_format((float)$totalvalor,0,',','.') ?></td>
					</tr>
			</table>
			<table style="width: 1077px; border-spacing: 0px">
				<tr>
					<td style="font-size:17px;" colspan="3"> <b> RUBRO 6 Valuación fiscal </b></td>
				</tr>
			<tbody class="nomenclatura">
				<tr>
					<td class="celdatri" style="border-top-style:none;" width="500"> </td>
					<td class="celdatri" style="border-top-style:none;padding:4px" width="150"> Total rubro 4 </td>
					<td class="celdatri" style="border-top-style:none; border-right-style:none"> <?php echo number_format((float)$valor,0,',','.') ?> <td>
				</tr>
				<tr>
					<td class="celdatri"> </td>
					<td class="celdatri" style="padding:4px"> Total rubro 5 </td>
					<td class="celdatri" style="border-right-style:none"> <?php $totalRubro5 = $totalvalor+$totalsup; echo number_format((float)$totalRubro5,0,',','.') ?> </td>

				</tr>
				<tr>
					<td class="celdatri"> </td>
					<td class="celdatri" style="padding:4px"><b> Valor Total </b> </td>
					<td class="celdatri" style="border-right-style:none" width="150"> <?php $totalRubro4Rubro5 = round($valor)+$totalRubro5; echo number_format((float)$totalRubro4Rubro5,0,',','.') ?> </td>
				</tr>
			</tbody>
			</table>
			<table style="width: 1077px; border-spacing: 0px; margin-top:5px">
				<tr>
					<td style="font-size:17px"> <b> RUBRO 7 Destino del edificio </b></td>
				</tr>
				<tbody class="nomenclatura">
					<tr>
						<td style="padding:5px" height="12"> <?php echo $nombreDestino ?> </td>
					</tr>
				</tbody>
			</table>
			<table style="width: 1077px; border-spacing: 0px; margin-top:3px">
				<tr>
					<td style="font-size:17px"> <b> RUBRO 8 Propietario, condómino, etc. </b></td>
				</tr>
				<tbody class="nomenclatura">
					<tr>
						<td class="celdatri" style="border-top-style:none; text-align: left" rowspan="2"> <b>  &nbsp; &nbsp; APELLIDO Y NOMBRE O RAZÓN SOCIAL </b> </td>
						<td colspan="2"> DOCUMENTO DE IDENTIDAD </td>
					</tr>
					<tr>
						<td class="celdatri" width="70"> Tipo (*) </td>
						<td class="celdatri" style="border-right-style:none" width="150"> N° </td>
					</tr>
					<tr>
						<td class="celdatri" height="15"> <?php echo $FcnombreApellido ?> </td>
						<td class="celdatri" height="15"> <?php echo $FctipoDni ?> </td>
						<td class="celdabi" style="border-right-style:none" height="15">  <?php echo $Fcdni ?></td>
					</tr>
				</tbody>
			</table>
			<table style="width: 1077px; border-spacing: 0px; margin-top:3px">
				<tr>
					<td style="font-size:17px"> <b> RUBRO 9 Domicilio fiscal </b></td>
				</tr>
				<tbody class="nomenclatura">
					<tr>
						<td class="celdatri" style="border-top-style:none; text-align: left" width="380"> <b>  &nbsp; &nbsp; CALLE </b> </td>
						<td class="celdatri" style="border-top-style:none" width="65"> N° </td>
						<td class="celdatri"style="border-top-style:none" width="50"> PISO </td>
						<td class="celdatri" style="border-top-style:none" width="50"> DPTO </td>
						<td class="celdatri" style="border-top-style:none"> LOCALIDAD </td>
						<td width="100"> CODIGO POSTAL </td>
					</tr>
					<tr>
						<td class="celdatri" height="15"> <?php echo $Fdcalle ?> </td>
						<td class="celdatri" height="15"> <?php echo $FdnroCalle ?> </td>
						<td class="celdatri" height="15"> <?php echo $Fdpiso ?> </td>
						<td class="celdatri" height="15"> <?php echo $Fddpto ?> </td>
						<td class="celdatri" height="15"> <?php echo $Fdlocalidad ?> </td>
						<td class="celdabi" style="border-right-style:none" height="15"> <?php echo $Fdcp ?> </td>
					</tr>
				</tbody>
			</table>
			<table style="width: 1077px; border-spacing: 0px; margin-top:3px">
				<tr>
					<td style="font-size:17px"> <b> RUBRO 10 Observaciones </b></td>
				</tr>
				<tbody class="nomenclatura">
					<tr>
						<td style="text-align:left;padding:7px;vertical-align:top" height="60"> <?php echo $observacion ?> </td>
					</tr>
				</tbody>
			</table>
			<table style="width: 1077px; border-spacing: 0px; margin-top:5px">
				<tr>
					<td style="font-size:17px"> <b> RESERVADO PARA LA DIRECCION PROVINCIAL DE CATASTRO TERRITORIAL </b></td>
				</tr>
				<tbody class="partido">
					<tr>
						<td rowspan="3" style="padding:12px; border-right-style:solid">  </td>
						<td style="text-align:left; font-size:16px" width="170"> <b> &nbsp; &nbsp; REGISTRADO </b> </td>
					</tr>
					<tr>
						<td style="text-align:left; font-size:16px"> <b> &nbsp; &nbsp; Nro </b> ____________ </td>
					</tr>
					<tr>
						<td style="text-align:left; font-size:16px"> <b> &nbsp; &nbsp; Fecha </b> ___________ </td>
					</tr>
				</tbody>
			</table>
			<div class="textogrande" style="text-align:center; font-size:16px; width:1080px; margin-top:5px"> El duplicado devuelto por esta DIRECCIÓN servirá como comprobante de haber sido presentada la Declaración Jurada </div>
				<div class="letrachica" style="text-align:center; width:1080px; font-size:10px"> SE RECOMIENDA LA CONSERVACIÓN EN BUEN ESTADO DE ESTA DECLARACIÓN JURADA Y DE LOS FORMULARIOS ANEXOS </div>
			</div>
		<?php } ?>
	<div style="page-break-after:always;"></div>
	<div class="hoja2">
	<img id="imgcuadrilla" src="img/imgcuadrilla901.png">
	<table style="margin-left:8px; margin-top:40px">
		<tr>
			<td class="textogrande" style="font-size:17px" width="300"> <b> RUBRO 8 - Responsables de la presetación </b> </td>
			<td class="textogrande" style="font-size:14px" width="500">  Lugar y	fecha: <u class="a"> <?php echo $lugar; ?>
				<?php
					//echo date("d/m/y");
					echo $FechaImp;
				?>
			</u> </td>
		</tr>
		<tr>
			<td class="textogrande" style="font-size:17px"> <b> 8 - A: Propietario, condómino, etc. </b></td>
		</tr>
		<tr>
			<td class="textogrande" style="font-size:14px" colspan="2"> Declaro/ramos bajo juramento en mi/nuestro carácter indicado, que los datos
				personales y antigüedad del edificio consignados en esta Declaración son correcto y completos y que la misma se ha confeccionado sin omitir
				ni falsear dato alguno que deba contener, siendo fiel expresión de la verdad. </td>
		</tr>
	</table>
	<table class="partido" style="width: 1040px;margin-left:10px">
		<tr>
			<td class="celdatri" style="border-top-style:none" rowspan="2"> <b> A P E L L I D O &nbsp; Y &nbsp; N O M B R E </td>
			<td class="celdatri" style="border-top-style:none" colspan="2"> <b> DOCUMENTO DE IDENTIDAD </td>
			<td class="celdatri" style="border-top-style:none" rowspan="2"> <b> C A R A C T E R &nbsp;(**) </b> </td>
			<td rowspan="2"> <b> FIRMA </b> </td>
		</tr>
		<tr>
			<td class="celdatri"> <b> TIPO (*) </b> </td>
			<td class="celdatri"> <b> N°  </b> </td>
		</tr>
		<tr>
			<td class="celdatri" height="16"> <?php echo $FfnombreApellido ?> </td>
			<td class="celdatri" height="16"> <?php echo $FftipoDni ?> </td>
			<td class="celdatri" height="16"> <?php echo $Ffdni ?> </td>
			<td class="celdatri" height="16"> <?php echo $Ffcaracter ?> </td>
			<td class="celdatri" height="16"> </td>
		</tr>
	</table>
	<table width="910" style="margin-left:10px">
		<tr>
			<td class="letrachica" style="font-size:11px"> (*)Unicamente Libreta Civica, Libreta de Enrolamiento ó Documento Nacional de Identidad </td>
			<td class="letrachica" style="font-size:11px"> (*) Propietario, condóminos, usufructuario/s, poseedor/es a título de dueño/s. </td>
		</tr>
	</table>
	<table width="1030" style="margin-left:10px">
		<tr>
			<td class="textogrande" style="font-size:17px"> <b> 8 - B: Profesional interviniente </b>
				<div class="textogrande" style="font-size:14px"> Suscribo la presente en su aspecto técnico, asumiendo la responsabilidad propia del ejercicio
					profesional que me compete </div> </td>
		</tr>
	</table>
	<table class="partido" style="width:1040px;margin-left:10px">
		<tr>
			<td class="celdatri"> <b> A P E L L I D O &nbsp; Y &nbsp; N O M B R E </b> </td>
			<td class="celdatri" colspan="3"> <b> M A T R I C U L A &nbsp; N° </b> </td>
			<td class="celdatri"> <b> F I R M A &nbsp; Y &nbsp; S E L L O </b> </td>
		</tr>
		<tr>
			<td class="celdatri" height="16"> <?php if ((isset($mostrarProf)) && ($mostrarProf == 0)) {echo $FpnombreApellido;} ?> </td>
			<td class="celdatri" colspan="3"> <?php if ((isset($mostrarProf)) && ($mostrarProf == 0)) {echo $Fpmatricula;} ?> </td>
			<td class="celdatri" rowspan="4"> </td>
		</tr>
		<tr>
			<td class="celdatri" rowspan="2"> <b> D O M I C I L I O </b> </td>
			<td class="celdatri" colspan="3"> <b> D O C U M E N T O </b> </td>
		</tr>
		<tr>
			<td class="celdatri"> <b> TIPO </b> </td>
			<td class="celdatri"> <b> N° </b> </td>
			<td class="celdatri"> <b> CUIT </b> </td>
		</tr>
		<tr>
			<td class="celdatri" height="16"> <?php if ((isset($mostrarProf)) && ($mostrarProf == 0)) {echo $Fpdomicilio." ". $Fpnrocalle;} ?> </td>
			<td class="celdatri"> <?php if ((isset($mostrarProf)) && ($mostrarProf == 0)) {echo $Fptipodni;} ?> </td>
			<td class="celdatri"> <?php if ((isset($mostrarProf)) && ($mostrarProf == 0)) {echo $Fpdni;} ?> </td>
			<td class="celdatri"> <?php if ((isset($mostrarProf)) && ($mostrarProf == 0)) {echo $Fpcuit;} ?> </td>
		</tr>
	</table>
	<table style="margin-top:30px; text-align:center;width:1040px">
		<tr>
			<td> ___________________________________ </td>
			<td> ________________________________________ </td>
		</tr>
		<tr>
			<td> SELLO FECHADOR </td>
			<td> Firma del agente receptor </td>
		</tr>
	</table>
</div>

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
$dompdf->setPaper('A3', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$filename = $FcodPartido."-".$Fpartida."-Formulario 901.pdf";
$dompdf->stream($filename, array("Attachment" => 0));
?>
