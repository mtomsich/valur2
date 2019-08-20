<?php
include("sesion.php");
$pagina='PDFforma9011PHP';
include("sql/conexion.php");
include("seguridadForm.php");

require_once 'lib/pdf/autoload.inc.php';
ob_start();

	include ("sql/mostrarDatosObra.php");
	include ("sql/mostrarFormA901.php");

	$total=(int)$tierraAct+(int)$edifAct+(int)$mejAct+(int)$comAct+(int)$postura;

	$TipoDeCedula=$_GET["cedula"];
  	$Cedula=$_GET["idCedula"];
	  switch ($TipoDeCedula) {
	    case '1': $FechaImp=mysqli_fetch_array(mysqli_query($conexion, "SELECT `fechaImp`, `lugar` FROM `cedula10707` WHERE `idCedula707` = $Cedula"))[0]; break;
	    case '2': $FechaImp=mysqli_fetch_array(mysqli_query($conexion, "SELECT `fechaImp`, `lugar` FROM `cedulaph` WHERE `idCedulaPH` =  $Cedula"))[0];  break;
	    case '3': $FechaImp=mysqli_fetch_array(mysqli_query($conexion, "SELECT `fechaImp`, `lugar` FROM `cedulade` WHERE `idCedulaDE` =  $Cedula"))[0];break;
	  }
	//PARA COMPROBAR LA CANTIDAD DE HOJAS
	$hoja = 2;
	if ($a > 7){
		$hoja = $hoja+1;
	}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<style>
@page {
		margin-top: 1.5em;
    margin-left: 3em;
	  margin-right: 1.2em;
		margin-bottom: 1.3em;
}
.contenedor {
	width: 842px;
}
.tablaborde1px {
	border-style: solid; border-width: 1px;
}
.borde05px {
	border-style: solid; border-width: 0.5px;
}
.celda {
	border-style: solid; border-width: 0.5px;
}
.header {
	font-family: 'Arial',sans-serif; margin-left: 210px; margin-top:-116px;
}
#imglogo {
	width: 250px; margin-left:-30px; margin-top:25px;
}
table {
	border-spacing: 0px; text-align:center; font-size:13px;
}
.partido {
	font-family: 'Arial',sans-serif; position: absolute;
}
td {
	padding: 2.5px;
}
.edificio2 {
	position:absolute; margin-top:410px; margin-left:10px; font-size:13px;
}
.instalaciones {
	position:absolute; margin-top:842px; margin-left:10px; font-size:13px;
}
.mejoras {
	position:absolute; margin-top:1010px; margin-left:10px; font-size:13px;
}
.resumen {
	position:absolute; margin-top:1300px; margin-left:6px; font-size:13px; text-align:center
}
.observaciones {
	margin-left: 370px; margin-top: 1175px; font-family: 'Arial',sans-serif;
}
#cuadrilla {
	width: 1000px; height: 1100px; margin-left:-10px
}
.hoja2 {
	font-family: 'Arial',sans-serif;
}
.bordegris {
	border-right-style: solid; border-right-color: #A4A4A4; border-right-width: 0.5px; border-bottom-style: solid; border-bottom-color: #A4A4A4;
	border-bottom-width: 0.5px;
}
.izquierda {
	position: static;
}
.a {
  border-bottom:1px dotted #000000;
  text-decoration:none;
}
.numeroHoja {
	font-family: 'Arial',sans-serif;
	position: absolute;
	margin-left: 1000px;
	width: 100%;
  text-overflow: ellipsis;
  white-space: pre;
}
</style>
</head>
<body>
	<header>
  <div class="contenedor">
		<div class="izquierda">
			<img id="imglogo" src="img/logopdf901.png">
		</div>
		<div class="header">
				<table>
					<tr>
						<td class="borde05px" style="font-size:54px;border-bottom-style:none;text-align:right" width="128"> <b> A- 901</b> </td>
						<td class="borde05px" rowspan="2" width="452" style="border-bottom-style:none"> </td>
					</tr>
					<tr>
						<td class="borde05px" style="border-top-style:none;font-size:16px"> PARCELA <br> URBANA O <br>SUBURBAN </td>
					</tr>
				</table>
			</div>
	  </header>
		<div class="partido">
			<div class="edificio2">
				<b style="transform: rotate(-90deg);"> E D I F I C I O </b>
			</div>
			<div class="instalaciones">
				<b style="transform: rotate(-90deg)"> I N S T A L A C I O N E S &nbsp;&nbsp;&nbsp;&nbsp; C O M P L E M E N T A R I A S </td>
			</div>
			<div class="mejoras">
				<b style="transform: rotate(-90deg)"> M E J O R A S </b>
			</div>
			<div class="resumen">
				<b style="transform: rotate(-90deg)"> RESUMEN DE <br> VALORES </b>
			</div>
			<table>
				<tr>
					<td style="text-align:left;border-right-style:solid;border-right-width:0.5px"> Declaración Jurada Resumen </td>
					<td width="450" style="border-right-style:solid;border-right-width:0.5px"> </td>
				</tr>
				<tr>
					<td class="borde05px" width="286" style="text-align:left"> <b> PARTIDO: <?php echo $Fpartido ?> </b> </td>
					<td style="text-align:left;border-right-style:solid;border-right-width:0.5px" width="452"> Espacio para sellado </td>
				</tr>
			</table>
			<table class="tablaborde1px" width="747">
				<tr>
					<td style="padding:0px;background-color:black;color:white"> Partido </td>
					<td style="padding:0px;background-color:black;color:white"> Partida </td>
					<td class="borde05px" style="padding:0px"> Circunscripción </td>
					<td class="borde05px" style="padding:0px"> Sección </td>
					<td class="borde05px" style="padding:0px"> Ch. </td>
					<td class="borde05px" style="padding:0px"> Qta. </td>
					<td class="borde05px" style="padding:0px"> Fracc. </td>
					<td class="borde05px" style="padding:0px"> Mza </td>
					<td class="borde05px" style="padding:0px"> Parcela </td>
					<td class="borde05px" style="padding:0px"> Subparcela </td>
				</tr>
				<tr>
					<td class="borde05px" height="12"> <?php echo $FcodPartido ?> </td>
					<td class="borde05px"> <?php echo $Fpartida ?> </td>
					<td class="borde05px"> <?php echo $Fcir ?> </td>
					<td class="borde05px"> <?php echo $Fsec ?> </td>
					<td class="borde05px"> <?php echo $Fcha ?> </td>
					<td class="borde05px"> <?php echo $Fqui ?> </td>
					<td class="borde05px"> <?php echo $Ffra ?> </td>
					<td class="borde05px"> <?php echo $Fman ?> </td>
					<td class="borde05px"> <?php echo $Fpar ?> </td>
					<td class="borde05px"> <?php echo $Fsub ?>  </td>
				</tr>
			</table>
			<table class="tablaborde1px" width="747">
				<tr>
					<td class="borde05px" style="border-bottom-style:none;border-top-style:none" width="80"> PROPIETARIO </td>
					<td style="text-align:left;padding:5px;font-size:11px;width:150px"> APELLIDO Y NOMBRE </td>
					<td style="text-align:left"> <?php echo $FfnombreApellido ?> </td>
					<td style="text-align:left;font-size:11px;width:200px"> DOC. DE IDENTIDAD LE/LC/DNI </td>
					<td style="text-align:left;width:170px"> <?php echo $Ffdni ?> </td>
				</tr>
			</table>
			<table class="tablaborde1px" width="747">
				<tr>
					<td class="borde05px" style="border-bottom-style:none" rowspan="2" width="80"> UBICACION <br> DEL <br> INMUEBLE </td>
					<td style="font-size:11px;text-align:right" width="40"> PARTIDO </td>
					<td style="border-bottom-style:solid;border-bottom-width:0.5px" width="230"> <?php echo $Fpartido ?> </td>
					<td style="font-size:11px;text-align:right" width="55"> LOCALIDAD </td>
					<td style="border-bottom-style:solid;border-bottom-width:0.5px" colspan="4" width="200"> <?php echo $Flocalidad ?>  </td>
					<td style="font-size:11px"> C.P.: </td>
					<td style="border-bottom-style:solid;border-bottom-width:0.5px"> <?php echo $FcodigoPostal ?> </td>
				</tr>
				<tr>
					<td style="font-size:11px;text-align:left"> &nbsp; CALLE </td>
					<td colspan="2"> <?php echo $Fdomicilio ?> </td>
					<td style="font-size:11px"> N° </td>
					<td> <?php echo $FnroCalle ?> </td>
					<td style="font-size:11px"> Piso </td>
					<td> <?php echo $Fpiso ?> </td>
					<td style="font-size:11px" width="50"> Dpto./Casa </td>
					<td> <?php echo $Fdpto ?> </td>
				</tr>
			</table>
			<table class="tablaborde1px" style="border-top-style:none" width="747">
				<tr>
					<td class="borde05px" style="border-right-width:1.3px" colspan="6"> I N F R A E S T R U C T U R A </td>
					<td class="borde05px" style="border-left-width:1.3px" colspan="4"> T I E R R A </td>
				</tr>
				<tr>
					<td class="borde05px"> Pavimento </td>
					<td class="borde05px"> Alum. Pub. </td>
					<td class="borde05px"> E. Elect. </td>
					<td class="borde05px"> Agua Corrient. </td>
					<td class="borde05px"> Cloacas </td>
					<td class="borde05px" style="border-right-width:1.3px"> Gas Nat. </td>
					<td class="borde05px" style="border-left-width:1.3px"> Coef. Ajuste </td>
					<td class="borde05px"> Valor básico </td>
					<td class="borde05px"> Superficie m<sup>2</sup> </td>
					<td class="borde05px"> Valor </td>
				</tr>
				<tr>
					<td class="borde05px"> <?php checkbox($FinfraP) ?> </td>
					<td class="borde05px"> <?php checkbox($FinfraA) ?> </td>
					<td class="borde05px"> <?php checkbox($FinfraL) ?> </td>
					<td class="borde05px"> <?php checkbox($FinfraAg) ?> </td>
					<td class="borde05px"> <?php checkbox($FinfraC) ?> </td>
					<td class="borde05px" style="border-right-width:1.3px"> <?php checkbox($FinfraG) ?> </td> $infraG
					<td class="borde05px" style="border-left-width:1.3px"> <?php echo $ajuste ?> </td>
					<td class="borde05px"> <?php echo $tierraBas ?> </td>
					<td class="borde05px"> <?php echo $superficie ?> </td>
					<td class="borde05px"> <?php echo $tierraAct ?> </td>
				</tr>
			</table>
			<table class="tablaborde1px" style="border-left-width:2px; border-right-width:2.5px;border-bottom-width:0.3" width="747">
				<tr>
					<td class="borde05px" colspan="3"> <b> FORMULARIO </b> </td>
					<td class="celda" colspan="2"> <b> <?php if (isset($formulario1)) {echo $formulario1;} ?> </b> </td>
					<td class="celda" colspan="2"> <b> <?php if (isset($formulario2)) {echo $formulario2;} ?> </b> </td>
					<td class="celda" colspan="2"> <b> <?php if (isset($formulario3)) {echo $formulario3;} ?> </b> </td>
					<td class="celda" colspan="2"> <b> <?php if (isset($formulario4)) {echo $formulario4;} ?> </b> </td>
					<td class="celda" colspan="2"> <b> <?php if (isset($formulario5)) {echo $formulario5;} ?> </b> </td>
					<td class="celda" colspan="2"> <b> <?php if (isset($formulario6)) {echo $formulario6;} ?> </b> </td>
					<td class="celda" colspan="2"> <b> <?php if (isset($formulario7)) {echo $formulario7;} ?> </b> </td>
				</tr>
				<tr>
					<td class="borde05px" rowspan="10" width="18"> </td>
					<td class="borde05px" rowspan="5" style="border-right-style:none"> TILDES </td>
					<td class="borde05px" width="30"> A </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalA1)) {if ($totalA1 == 0) {echo "";} else {echo $totalA1;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalA2)) {if ($totalA2 == 0) {echo "";} else {echo $totalA2;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalA3)) {if ($totalA3 == 0) {echo "";} else {echo $totalA3;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalA4)) {if ($totalA4 == 0) {echo "";} else {echo $totalA4;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalA5)) {if ($totalA5 == 0) {echo "";} else {echo $totalA5;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalA6)) {if ($totalA6 == 0) {echo "";} else {echo $totalA6;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalA7)) {if ($totalA7 == 0) {echo "";} else {echo $totalA7;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px"> B </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalB1)) {if ($totalB1 == 0) {echo "";} else {echo $totalB1;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalB2)) {if ($totalB2 == 0) {echo "";} else {echo $totalB2;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalB3)) {if ($totalB3 == 0) {echo "";} else {echo $totalB3;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalB4)) {if ($totalB4 == 0) {echo "";} else {echo $totalB4;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalB5)) {if ($totalB5 == 0) {echo "";} else {echo $totalB5;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalB6)) {if ($totalB6 == 0) {echo "";} else {echo $totalB6;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalB7)) {if ($totalB7 == 0) {echo "";} else {echo $totalB7;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px"> C </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalC1)) {if ($totalC1 == 0) {echo "";} else {echo $totalC1;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalC2)) {if ($totalC2 == 0) {echo "";} else {echo $totalC2;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalC3)) {if ($totalC3 == 0) {echo "";} else {echo $totalC3;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalC4)) {if ($totalC4 == 0) {echo "";} else {echo $totalC4;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalC5)) {if ($totalC5 == 0) {echo "";} else {echo $totalC5;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalC6)) {if ($totalC6 == 0) {echo "";} else {echo $totalC6;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalC7)) {if ($totalC7 == 0) {echo "";} else {echo $totalC7;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px"> D </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalD1)) {if ($totalD1 == 0) {echo "";} else {echo $totalD1;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalD2)) {if ($totalD2 == 0) {echo "";} else {echo $totalD2;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalD3)) {if ($totalD3 == 0) {echo "";} else {echo $totalD3;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalD4)) {if ($totalD4 == 0) {echo "";} else {echo $totalD4;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalD5)) {if ($totalD5 == 0) {echo "";} else {echo $totalD5;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalD6)) {if ($totalD6 == 0) {echo "";} else {echo $totalD6;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalD7)) {if ($totalD7 == 0) {echo "";} else {echo $totalD7;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px"> E </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalE1)) {if ($totalE1 == 0) {echo "";} else {echo $totalE1;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalE2)) {if ($totalE2 == 0) {echo "";} else {echo $totalE2;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalE3)) {if ($totalE3 == 0) {echo "";} else {echo $totalE3;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalE4)) {if ($totalE4 == 0) {echo "";} else {echo $totalE4;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalE5)) {if ($totalE5 == 0) {echo "";} else {echo $totalE5;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalE6)) {if ($totalE6 == 0) {echo "";} else {echo $totalE6;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalE7)) {if ($totalE7 == 0) {echo "";} else {echo $totalE7;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" colspan="2" style="text-align:left"> Suma de Puntos /Estado </td>
					<td class="borde05px" width="52" style="border-right-color:#A4A4A4"> <?php if (isset($valorEstado1)) {echo $valorEstado1;} ?> </td>
					<td class="borde05px" width="22" style="border-left-style:none"> <?php if (isset($Estado1)) {echo $Estado1;} ?> </td>
					<td class="borde05px" width="52" style="border-right-color:#A4A4A4"> <?php if (isset($valorEstado2)) {echo $valorEstado2;} ?> </td>
					<td class="borde05px" width="22" style="border-left-style:none"> <?php if (isset($Estado2)) {echo $Estado2;} ?> </td>
					<td class="borde05px" width="52" style="border-right-color:#A4A4A4"> <?php if (isset($valorEstado3)) {echo $valorEstado3;} ?> </td>
					<td class="borde05px" width="22" style="border-left-style:none"> <?php if (isset($Estado3)) {echo $Estado3;} ?> </td>
					<td class="borde05px" width="52" style="border-right-color:#A4A4A4"> <?php if (isset($valorEstado4)) {echo $valorEstado4;} ?> </td>
					<td class="borde05px" width="22" style="border-left-style:none"> <?php if (isset($Estado4)) {echo $Estado4;} ?> </td>
					<td class="borde05px" width="52" style="border-right-color:#A4A4A4"> <?php if (isset($valorEstado5)) {echo $valorEstado5;} ?> </td>
					<td class="borde05px" width="22" style="border-left-style:none"> <?php if (isset($Estado5)) {echo $Estado5;} ?> </td>
					<td class="borde05px" width="52" style="border-right-color:#A4A4A4"> <?php if (isset($valorEstado6)) {echo $valorEstado6;} ?> </td>
					<td class="borde05px" width="22" style="border-left-style:none"> <?php if (isset($Estado6)) {echo $Estado6;} ?> </td>
					<td class="borde05px" width="52" style="border-right-color:#A4A4A4"> <?php if (isset($valorEstado7)) {echo $valorEstado7;} ?> </td>
					<td class="borde05px" width="22" style="border-left-style:none"> <?php if (isset($Estado7)) {echo $Estado7;} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" colspan="2" style="text-align:left"> Data </td>
					<td class="borde05px" colspan="2"> <?php if(isset($data1)) {if ($data1 == 0) {echo "";} else {echo $data1;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($data2)) {if ($data2 == 0) {echo "";} else {echo $data2;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($data3)) {if ($data3 == 0) {echo "";} else {echo $data3;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($data4)) {if ($data4 == 0) {echo "";} else {echo $data4;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($data5)) {if ($data5 == 0) {echo "";} else {echo $data5;}} ?></td>
					<td class="borde05px" colspan="2"> <?php if(isset($data6)) {if ($data6 == 0) {echo "";} else {echo $data6;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($data7)) {if ($data7 == 0) {echo "";} else {echo $data7;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" colspan="2" style="text-align:left"> Data de reciclado</td>
					<td class="borde05px" colspan="2"> <?php if(isset($datare1)) {if ($datare1 == 0) {echo "";} else {echo $datare1;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($datare2)) {if ($datare2 == 0) {echo "";} else {echo $datare2;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($datare3)) {if ($datare3 == 0) {echo "";} else {echo $datare3;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($datare4)) {if ($datare4 == 0) {echo "";} else {echo $datare4;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($datare5)) {if ($datare5 == 0) {echo "";} else {echo $datare5;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($datare6)) {if ($datare6 == 0) {echo "";} else {echo $datare6;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($datare7)) {if ($datare7 == 0) {echo "";} else {echo $datare7;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" colspan="2" style="text-align:left"> Superficie cubierta </td>
					<td class="borde05px" colspan="2"> <?php if(isset($cubierta1)) {if ($cubierta1 == 0) {echo "";} else {echo $cubierta1;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($cubierta2)) {if ($cubierta2 == 0) {echo "";} else {echo $cubierta2;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($cubierta3)) {if ($cubierta3 == 0) {echo "";} else {echo $cubierta3;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($cubierta4)) {if ($cubierta4 == 0) {echo "";} else {echo $cubierta4;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($cubierta5)) {if ($cubierta5 == 0) {echo "";} else {echo $cubierta5;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($cubierta6)) {if ($cubierta6 == 0) {echo "";} else {echo $cubierta6;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($cubierta7)) {if ($cubierta7 == 0) {echo "";} else {echo $cubierta7;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" colspan="2" style="text-align:left"> Superficie semicubierta </td>
					<td class="borde05px" colspan="2"> <?php if(isset($semicub1)) {if ($semicub1 == 0) {echo "";} else {echo $semicub1;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($semicub2)) {if ($semicub2 == 0) {echo "";} else {echo $semicub2;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($semicub3)) {if ($semicub3 == 0) {echo "";} else {echo $semicub3;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($semicub4)) {if ($semicub4 == 0) {echo "";} else {echo $semicub4;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($semicub5)) {if ($semicub5 == 0) {echo "";} else {echo $semicub5;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($semicub6)) {if ($semicub6 == 0) {echo "";} else {echo $semicub6;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($semicub7)) {if ($semicub7 == 0) {echo "";} else {echo $semicub7;}} ?> </td>
				</tr>
			</table>
			<table class="tablaborde1px" width="747" style="border-top-width:0.5px;border-left-width:2px; border-right-width:2.5px; border-bottom-width:0.5px">
				<tr>
					<td class="borde05px" rowspan="17" width="17"> </td>
					<td class="borde05px" colspan="2" style="text-align:left"> Heladera c/equip. central </td>
					<td class="celda" colspan="4"> <?php if(isset($heladera1)) {if ($heladera1 == 0) {echo "";} else {echo $heladera1;}} ?> </td>
					<td class="celda" colspan="4"> <?php if(isset($heladera2)) {if ($heladera2 == 0) {echo "";} else {echo $heladera2;}} ?> </td>
					<td class="celda" colspan="4"> <?php if(isset($heladera3)) {if ($heladera3 == 0) {echo "";} else {echo $heladera3;}} ?> </td>
					<td class="celda" colspan="4"> <?php if(isset($heladera4)) {if ($heladera4 == 0) {echo "";} else {echo $heladera4;}} ?> </td>
					<td class="celda" colspan="4"> <?php if(isset($heladera5)) {if ($heladera5 == 0) {echo "";} else {echo $heladera5;}} ?> </td>
					<td class="celda" colspan="4"> <?php if(isset($heladera6)) {if ($heladera6 == 0) {echo "";} else {echo $heladera6;}} ?> </td>
					<td class="celda" colspan="4"> <?php if(isset($heladera7)) {if ($heladera7 == 0) {echo "";} else {echo $heladera7;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" colspan="2" style="text-align:left"> Aire Acondicionado </td>
					<td class="borde05px" colspan="4"> <?php if(isset($aire1)) {if ($aire1 == 0) {echo "";} else {echo $aire1;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($aire2)) {if ($aire2 == 0) {echo "";} else {echo $aire2;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($aire3)) {if ($aire3 == 0) {echo "";} else {echo $aire3;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($aire4)) {if ($aire4 == 0) {echo "";} else {echo $aire4;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($aire5)) {if ($aire5 == 0) {echo "";} else {echo $aire5;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($aire6)) {if ($aire6 == 0) {echo "";} else {echo $aire6;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($aire7)) {if ($aire7 == 0) {echo "";} else {echo $aire7;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" colspan="2" style="text-align:left"> Calefacción central </td>
					<td class="borde05px" colspan="4"> <?php if(isset($calefaccion1)) {if ($calefaccion1 == 0) {echo "";} else {echo $calefaccion1;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($calefaccion2)) {if ($calefaccion2 == 0) {echo "";} else {echo $calefaccion2;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($calefaccion3)) {if ($calefaccion3 == 0) {echo "";} else {echo $calefaccion3;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($calefaccion4)) {if ($calefaccion4 == 0) {echo "";} else {echo $calefaccion4;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($calefaccion5)) {if ($calefaccion5 == 0) {echo "";} else {echo $calefaccion5;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($calefaccion6)) {if ($calefaccion6 == 0) {echo "";} else {echo $calefaccion6;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($calefaccion7)) {if ($calefaccion7 == 0) {echo "";} else {echo $calefaccion7;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" colspan="2" style="text-align:left"> Losa radiante </td>
					<td class="borde05px" colspan="4"> <?php if(isset($losa1)) {if ($losa1 == 0) {echo "";} else {echo $losa1;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($losa2)) {if ($losa2 == 0) {echo "";} else {echo $losa2;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($losa3)) {if ($losa3 == 0) {echo "";} else {echo $losa3;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($losa4)) {if ($losa4 == 0) {echo "";} else {echo $losa4;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($losa5)) {if ($losa5 == 0) {echo "";} else {echo $losa5;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($losa6)) {if ($losa6 == 0) {echo "";} else {echo $losa6;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($losa7)) {if ($losa7 == 0) {echo "";} else {echo $losa7;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px"colspan="2"  style="text-align:left"> Horno incinerador </td>
					<td class="borde05px" colspan="4"> <?php if(isset($horno1)) {if ($horno1 == 0) {echo "";} else {echo $horno1;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($horno2)) {if ($horno2 == 0) {echo "";} else {echo $horno2;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($horno3)) {if ($horno3 == 0) {echo "";} else {echo $horno3;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($horno4)) {if ($horno4 == 0) {echo "";} else {echo $horno4;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($horno5)) {if ($horno5 == 0) {echo "";} else {echo $horno5;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($horno6)) {if ($horno6 == 0) {echo "";} else {echo $horno6;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($horno7)) {if ($horno7 == 0) {echo "";} else {echo $horno7;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" colspan="2" style="text-align:left"> Agua caliente central </td>
					<td class="borde05px" colspan="4"> <?php if(isset($agua1)) {if ($agua1 == 0) {echo "";} else {echo $agua1;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($agua2)) {if ($agua2 == 0) {echo "";} else {echo $agua2;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($agua3)) {if ($agua3 == 0) {echo "";} else {echo $agua3;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($agua4)) {if ($agua4 == 0) {echo "";} else {echo $agua4;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($agua5)) {if ($agua5 == 0) {echo "";} else {echo $agua5;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($agua6)) {if ($agua6 == 0) {echo "";} else {echo $agua6;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($agua7)) {if ($agua7 == 0) {echo "";} else {echo $agua7;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" colspan="2" style="text-align:left"> Baño principal </td>
					<td class="borde05px" colspan="4"> <?php if(isset($bano11)) {if ($bano11 == 0) {echo "";} else {echo $bano11;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($bano12)) {if ($bano12 == 0) {echo "";} else {echo $bano12;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($bano13)) {if ($bano13 == 0) {echo "";} else {echo $bano13;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($bano14)) {if ($bano14 == 0) {echo "";} else {echo $bano14;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($bano15)) {if ($bano15 == 0) {echo "";} else {echo $bano15;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($bano16)) {if ($bano16 == 0) {echo "";} else {echo $bano16;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($bano17)) {if ($bano17 == 0) {echo "";} else {echo $bano17;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" colspan="2" style="text-align:left"> Baño secundario </td>
					<td class="borde05px" colspan="4"> <?php if(isset($bano21)) {if ($bano21 == 0) {echo "";} else {echo $bano21;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($bano22)) {if ($bano22 == 0) {echo "";} else {echo $bano22;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($bano23)) {if ($bano23 == 0) {echo "";} else {echo $bano23;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($bano24)) {if ($bano24 == 0) {echo "";} else {echo $bano24;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($bano25)) {if ($bano25 == 0) {echo "";} else {echo $bano25;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($bano26)) {if ($bano26 == 0) {echo "";} else {echo $bano26;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($bano27)) {if ($bano27 == 0) {echo "";} else {echo $bano27;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" colspan="2" style="text-align:left"> Cámara frigorífica </td>
					<td class="borde05px" colspan="4"> <?php if(isset($camara1)) {if ($camara1 == 0) {echo "";} else {echo $camara1;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($camara2)) {if ($camara2 == 0) {echo "";} else {echo $camara2;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($camara3)) {if ($camara3 == 0) {echo "";} else {echo $camara3;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($camara4)) {if ($camara4 == 0) {echo "";} else {echo $camara4;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($camara5)) {if ($camara5 == 0) {echo "";} else {echo $camara5;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($camara6)) {if ($camara6 == 0) {echo "";} else {echo $camara6;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($camara7)) {if ($camara7 == 0) {echo "";} else {echo $camara7;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" colspan="2" style="text-align:left"> Instalac. contra incendios </td>
					<td class="borde05px" colspan="4"> <?php if(isset($incendio1)) {if ($incendio1 == 0) {echo "";} else {echo $incendio1;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($incendio2)) {if ($incendio2 == 0) {echo "";} else {echo $incendio2;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($incendio3)) {if ($incendio3 == 0) {echo "";} else {echo $incendio3;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($incendio4)) {if ($incendio4 == 0) {echo "";} else {echo $incendio4;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($incendio5)) {if ($incendio5 == 0) {echo "";} else {echo $incendio5;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($incendio6)) {if ($incendio6 == 0) {echo "";} else {echo $incendio6;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($incendio7)) {if ($incendio7 == 0) {echo "";} else {echo $incendio7;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" rowspan="2" style="border-right-style:none"> Ascensores </td>
					<td class="borde05px"> + de 4 pers. </td>
					<td class="borde05px" width="9" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" width="21" style="border-left-style:none;border-right-style:none"> <?php if(isset($ascensores11)) {if ($ascensores11 == 0) {echo "";} else {echo $ascensores11;}} ?> </td>
					<td class="borde05px" width="8" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" width="21" style="border-left-style:none"> <?php if(isset($ascensoresCant11)) {if ($ascensoresCant11 == 0) {echo "";} else {echo $ascensoresCant11;}} ?> </td>
					<td class="borde05px" width="9" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" width="21" style="border-left-style:none;border-right-style:none"> <?php if(isset($ascensores12)) {if ($ascensores12 == 0) {echo "";} else {echo $ascensores12;}} ?> </td>
					<td class="borde05px" width="8" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" width="21" style="border-left-style:none"> <?php if(isset($ascensoresCant12)) {if ($ascensoresCant12 == 0) {echo "";} else {echo $ascensoresCant12;}} ?> </td>
					<td class="borde05px" width="9" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" width="21" style="border-left-style:none;border-right-style:none"> <?php if(isset($ascensores13)) {if ($ascensores13 == 0) {echo "";} else {echo $ascensores13;}} ?> </td>
					<td class="borde05px" width="8" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" width="21" style="border-left-style:none"> <?php if(isset($ascensoresCant13)) {if ($ascensoresCant13 == 0) {echo "";} else {echo $ascensoresCant13;}} ?> </td>
					<td class="borde05px" width="9" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" width="21" style="border-left-style:none;border-right-style:none"><?php if(isset($ascensores14)) {if ($ascensores14 == 0) {echo "";} else {echo $ascensores14;}} ?>  </td>
					<td class="borde05px" width="8" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" width="21" style="border-left-style:none"> <?php if(isset($ascensoresCant14)) {if ($ascensoresCant14 == 0) {echo "";} else {echo $ascensoresCant14;}} ?> </td>
					<td class="borde05px" width="9" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" width="21" style="border-left-style:none;border-right-style:none"> <?php if(isset($ascensores15)) {if ($ascensores15 == 0) {echo "";} else {echo $ascensores15;}} ?> </td>
					<td class="borde05px" width="8" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" width="21" style="border-left-style:none"> <?php if(isset($ascensoresCant15)) {if ($ascensoresCant15 == 0) {echo "";} else {echo $ascensoresCant15;}} ?> </td>
					<td class="borde05px" width="9" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" width="21" style="border-left-style:none;border-right-style:none"> <?php if(isset($ascensores16)) {if ($ascensores16 == 0) {echo "";} else {echo $ascensores16;}} ?> </td>
					<td class="borde05px" width="8" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" width="21" style="border-left-style:none"> <?php if(isset($ascensoresCant16)) {if ($ascensoresCant16 == 0) {echo "";} else {echo $ascensoresCant16;}} ?> </td>
					<td class="borde05px" width="9" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" width="21" style="border-left-style:none;border-right-style:none"> <?php if(isset($ascensores17)) {if ($ascensores17 == 0) {echo "";} else {echo $ascensores17;}} ?> </td>
					<td class="borde05px" width="8" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" width="21" style="border-left-style:none"> <?php if(isset($ascensoresCant17)) {if ($ascensoresCant17 == 0) {echo "";} else {echo $ascensoresCant17;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px"> -/= de 4 pers. </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-left-style:none;border-right-style:none"> <?php if(isset($ascensores21)) {if ($ascensores21 == 0) {echo "";} else {echo $ascensores21;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($ascensoresCant21)) {if ($ascensoresCant21 == 0) {echo "";} else {echo $ascensoresCant21;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-left-style:none;border-right-style:none"> <?php if(isset($ascensores22)) {if ($ascensores22 == 0) {echo "";} else {echo $ascensores22;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($ascensoresCant22)) {if ($ascensoresCant22 == 0) {echo "";} else {echo $ascensoresCant22;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-left-style:none;border-right-style:none"> <?php if(isset($ascensores23)) {if ($ascensores23 == 0) {echo "";} else {echo $ascensores23;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($ascensoresCant23)) {if ($ascensoresCant23 == 0) {echo "";} else {echo $ascensoresCant23;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-left-style:none;border-right-style:none"> <?php if(isset($ascensores24)) {if ($ascensores24 == 0) {echo "";} else {echo $ascensores24;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($ascensoresCant24)) {if ($ascensoresCant24 == 0) {echo "";} else {echo $ascensoresCant24;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-left-style:none;border-right-style:none"> <?php if(isset($ascensores25)) {if ($ascensores25 == 0) {echo "";} else {echo $ascensores25;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($ascensoresCant25)) {if ($ascensoresCant25 == 0) {echo "";} else {echo $ascensoresCant25;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-left-style:none;border-right-style:none"> <?php if(isset($ascensores26)) {if ($ascensores26 == 0) {echo "";} else {echo $ascensores26;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($ascensoresCant26)) {if ($ascensoresCant26 == 0) {echo "";} else {echo $ascensoresCant26;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-left-style:none;border-right-style:none"> <?php if(isset($ascensores27)) {if ($ascensores27 == 0) {echo "";} else {echo $ascensores27;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($ascensoresCant27)) {if ($ascensoresCant27 == 0) {echo "";} else {echo $ascensoresCant27;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" rowspan="2" width="60" style="border-right-style:none"> Montacargas </td>
					<td class="borde05px"> + de 3 tons </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-left-style:none;border-right-style:none"> <?php if(isset($monta11)) {if ($monta11 == 0) {echo "";} else {echo $monta11;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($monta111)) {if ($monta111 == 0) {echo "";} else {echo $monta111;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-left-style:none;border-right-style:none"> <?php if(isset($monta12)) {if ($monta12 == 0) {echo "";} else {echo $monta12;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($monta112)) {if ($monta112 == 0) {echo "";} else {echo $monta112;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-left-style:none;border-right-style:none"> <?php if(isset($monta13)) {if ($monta13 == 0) {echo "";} else {echo $monta13;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($monta113)) {if ($monta113 == 0) {echo "";} else {echo $monta113;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-left-style:none;border-right-style:none"> <?php if(isset($monta14)) {if ($monta14 == 0) {echo "";} else {echo $monta14;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($monta114)) {if ($monta114 == 0) {echo "";} else {echo $monta114;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-left-style:none;border-right-style:none"> <?php if(isset($monta15)) {if ($monta15 == 0) {echo "";} else {echo $monta15;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($monta115)) {if ($monta115 == 0) {echo "";} else {echo $monta115;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-left-style:none;border-right-style:none"> <?php if(isset($monta16)) {if ($monta16 == 0) {echo "";} else {echo $monta16;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($monta116)) {if ($monta116 == 0) {echo "";} else {echo $monta116;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-left-style:none;border-right-style:none"> <?php if(isset($monta17)) {if ($monta17 == 0) {echo "";} else {echo $monta17;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($monta117)) {if ($monta117 == 0) {echo "";} else {echo $monta117;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" width="64"> -/= de 3 tons </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-style:none;border-right-style:none"> <?php if(isset($monta21)) {if ($monta21 == 0) {echo "";} else {echo $monta21;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($monta221)) {if ($monta221 == 0) {echo "";} else {echo $monta221;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-left-style:none;border-right-style:none"> <?php if(isset($monta22)) {if ($monta22 == 0) {echo "";} else {echo $monta22;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($monta222)) {if ($monta222 == 0) {echo "";} else {echo $monta222;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-left-style:none;border-right-style:none"> <?php if(isset($monta23)) {if ($monta23 == 0) {echo "";} else {echo $monta23;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($monta223)) {if ($monta223 == 0) {echo "";} else {echo $monta223;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-left-style:none;border-right-style:none"> <?php if(isset($monta24)) {if ($monta24 == 0) {echo "";} else {echo $monta24;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($monta224)) {if ($monta224 == 0) {echo "";} else {echo $monta224;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-left-style:none;border-right-style:none"> <?php if(isset($monta25)) {if ($monta25 == 0) {echo "";} else {echo $monta25;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($monta225)) {if ($monta225 == 0) {echo "";} else {echo $monta225;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-left-style:none;border-right-style:none"> <?php if(isset($monta26)) {if ($monta26 == 0) {echo "";} else {echo $monta26;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($monta226)) {if ($monta226 == 0) {echo "";} else {echo $monta226;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-left-style:none;border-right-style:none"> <?php if(isset($monta27)) {if ($monta27 == 0) {echo "";} else {echo $monta27;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($monta227)) {if ($monta227 == 0) {echo "";} else {echo $monta227;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" rowspan="3" style="border-right-style:none"> Pileta de <br> natación </td>
					<td class="borde05px"> A </td>
					<td class="borde05px" colspan="4"> <?php if (isset($pileta1) || isset($piletaCant1)) {$piletaA1 = pileA($pileta1,$piletaCant1);} ?> </td>
					<td class="borde05px" colspan="4"><?php if (isset($pileta2) || isset($piletaCant2)) {$piletaA2 = pileA($pileta2,$piletaCant2);} ?> </td>
					<td class="borde05px" colspan="4"><?php if (isset($pileta3) || isset($piletaCant3)) {$piletaA3 = pileA($pileta3,$piletaCant3);} ?> </td>
					<td class="borde05px" colspan="4"><?php if (isset($pileta4) || isset($piletaCant4)) {$piletaA4 = pileA($pileta4,$piletaCant4);} ?> </td>
					<td class="borde05px" colspan="4"><?php if (isset($pileta5) || isset($piletaCant5)) {$piletaA5 = pileA($pileta5,$piletaCant5);} ?> </td>
					<td class="borde05px" colspan="4"><?php if (isset($pileta6) || isset($piletaCant6)) {$piletaA6 = pileA($pileta6,$piletaCant6);} ?> </td>
					<td class="borde05px" colspan="4"><?php if (isset($pileta7) || isset($piletaCant7)) {$piletaA7 = pileA($pileta7,$piletaCant7);} ?> </td>
				</tr>
				<tr>
					<td class="borde05px"> B </td>
					<td class="borde05px" colspan="4"><?php if (isset($pileta1) || isset($piletaCant1)) {$piletaB1 = pileB($pileta1,$piletaCant1);} ?> </td>
					<td class="borde05px" colspan="4"><?php if (isset($pileta2) || isset($piletaCant2)) {$piletaB2 = pileB($pileta2,$piletaCant2);} ?> </td>
					<td class="borde05px" colspan="4"><?php if (isset($pileta3) || isset($piletaCant3)) {$piletaB3 = pileB($pileta3,$piletaCant3);} ?> </td>
					<td class="borde05px" colspan="4"><?php if (isset($pileta4) || isset($piletaCant4)) {$piletaB4 = pileB($pileta4,$piletaCant4);} ?> </td>
					<td class="borde05px" colspan="4"><?php if (isset($pileta5) || isset($piletaCant5)) {$piletaB5 = pileB($pileta5,$piletaCant5);} ?> </td>
					<td class="borde05px" colspan="4"><?php if (isset($pileta6) || isset($piletaCant6)) {$piletaB6 = pileB($pileta6,$piletaCant6);} ?> </td>
					<td class="borde05px" colspan="4"><?php if (isset($pileta7) || isset($piletaCant7)) {$piletaB7 = pileB($pileta7,$piletaCant7);} ?> </td>
				</tr>
				<tr>
					<td class="borde05px"> C </td>
					<td class="borde05px" colspan="4"><?php if (isset($pileta1) || isset($piletaCant1)) {$piletaC1 = pileC($pileta1,$piletaCant1);} ?> </td>
					<td class="borde05px" colspan="4"><?php if (isset($pileta2) || isset($piletaCant2)) {$piletaC2 = pileC($pileta2,$piletaCant2);} ?> </td>
					<td class="borde05px" colspan="4"><?php if (isset($pileta3) || isset($piletaCant3)) {$piletaC3 = pileC($pileta3,$piletaCant3);} ?> </td>
					<td class="borde05px" colspan="4"><?php if (isset($pileta4) || isset($piletaCant4)) {$piletaC4 = pileC($pileta4,$piletaCant4);} ?> </td>
					<td class="borde05px" colspan="4"><?php if (isset($pileta5) || isset($piletaCant5)) {$piletaC5 = pileC($pileta5,$piletaCant5);} ?> </td>
					<td class="borde05px" colspan="4"><?php if (isset($pileta6) || isset($piletaCant6)) {$piletaC6 = pileC($pileta6,$piletaCant6);} ?> </td>
					<td class="borde05px" colspan="4"><?php if (isset($pileta7) || isset($piletaCant7)) {$piletaC7 = pileC($pileta7,$piletaCant7);} ?> </td>
				</tr>
			</table>
			<table class="tablaborde1px" width="747" style="border-top-width:0.5px;border-left-width:2px;border-right-width:2px">
				<tr>
					<td class="borde05px" colspan="3" style="border-bottom-width:1.5px"> VALOR FISCAL EDIFICIO </td>
					<td class="borde05px" colspan="2" style="border-bottom-width:1.5px"> <?php if(isset($TotalRubro71)) {echo number_format((float)$TotalRubro71,0,',','.');} ?> </td>
					<td class="borde05px" colspan="2" style="border-bottom-width:1.5px"> <?php if(isset($TotalRubro72)) {echo number_format((float)$TotalRubro72,0,',','.');} ?> </td>
					<td class="borde05px" colspan="2" style="border-bottom-width:1.5px"> <?php if(isset($TotalRubro73)) {echo number_format((float)$TotalRubro73,0,',','.');} ?> </td>
					<td class="borde05px" colspan="2" style="border-bottom-width:1.5px"> <?php if(isset($TotalRubro74)) {echo number_format((float)$TotalRubro74,0,',','.');} ?> </td>
					<td class="borde05px" colspan="2" style="border-bottom-width:1.5px"> <?php if(isset($TotalRubro75)) {echo number_format((float)$TotalRubro75,0,',','.');} ?> </td>
					<td class="borde05px" colspan="2" style="border-bottom-width:1.5px"> <?php if(isset($TotalRubro76)) {echo number_format((float)$TotalRubro76,0,',','.');} ?> </td>
					<td class="borde05px" colspan="2" style="border-bottom-width:1.5px"> <?php if(isset($TotalRubro77)) {echo number_format((float)$TotalRubro77,0,',','.');} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" rowspan="8" width="19"> </td>
					<td class="borde05px" rowspan="3" colspan="2" style="text-align:left"> Tanques (Cant/Cap m<sup>3</sup>) </td>
					<td class="borde05px" style="border-right-color:#A4A4A4" width="22" height="12"> <?php if(isset($tancant11)) {if ($tancant11 == 0) {echo "";} else {echo $tancant11;}} ?> </td>
					<td class="borde05px" style="border-left-style:none" width="52"> <?php if(isset($tancap11)) {if ($tancap11 == 0) {echo "";} else {echo $tancap11;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4" width="22"> <?php if(isset($tancant12)) {if ($tancant12 == 0) {echo "";} else {echo $tancant12;}} ?> </td>
					<td class="borde05px" style="border-left-style:none" width="52"> <?php if(isset($tancap12)) {if ($tancap12 == 0) {echo "";} else {echo $tancap12;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4" width="22"> <?php if(isset($tancant13)) {if ($tancant13 == 0) {echo "";} else {echo $tancant13;}} ?> </td>
					<td class="borde05px" style="border-left-style:none" width="52"> <?php if(isset($tancap13)) {if ($tancap13 == 0) {echo "";} else {echo $tancap13;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4" width="22"> <?php if(isset($tancant14)) {if ($tancant14 == 0) {echo "";} else {echo $tancant14;}} ?> </td>
					<td class="borde05px" style="border-left-style:none" width="52"> <?php if(isset($tancap14)) {if ($tancap14 == 0) {echo "";} else {echo $tancap14;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4" width="22"> <?php if(isset($tancant15)) {if ($tancant15 == 0) {echo "";} else {echo $tancant15;}} ?> </td>
					<td class="borde05px" style="border-left-style:none" width="52"> <?php if(isset($tancap15)) {if ($tancap15 == 0) {echo "";} else {echo $tancap15;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4" width="22"> <?php if(isset($tancant16)) {if ($tancant16 == 0) {echo "";} else {echo $tancant16;}} ?> </td>
					<td class="borde05px" style="border-left-style:none" width="52"> <?php if(isset($tancap16)) {if ($tancap16 == 0) {echo "";} else {echo $tancap16;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4" width="22"> <?php if(isset($tancant17)) {if ($tancant17 == 0) {echo "";} else {echo $tancant17;}} ?> </td>
					<td class="borde05px" style="border-left-style:none" width="52"> <?php if(isset($tancap17)) {if ($tancap17 == 0) {echo "";} else {echo $tancap17;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" style="border-right-color:#A4A4A4" height="12"> <?php if(isset($tancant21)) {if ($tancant21 == 0) {echo "";} else {echo $tancant21;}} ?> </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($tancap21)) {if ($tancap21 == 0) {echo "";} else {echo $tancap21;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> <?php if(isset($tancant22)) {if ($tancant22 == 0) {echo "";} else {echo $tancant22;}} ?> </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($tancap22)) {if ($tancap22 == 0) {echo "";} else {echo $tancap22;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> <?php if(isset($tancant23)) {if ($tancant23 == 0) {echo "";} else {echo $tancant23;}} ?> </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($tancap23)) {if ($tancap23 == 0) {echo "";} else {echo $tancap23;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> <?php if(isset($tancant24)) {if ($tancant24 == 0) {echo "";} else {echo $tancant24;}} ?> </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($tancap24)) {if ($tancap24 == 0) {echo "";} else {echo $tancap24;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> <?php if(isset($tancant25)) {if ($tancant25 == 0) {echo "";} else {echo $tancant25;}} ?> </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($tancap25)) {if ($tancap25 == 0) {echo "";} else {echo $tancap25;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> <?php if(isset($tancant26)) {if ($tancant26 == 0) {echo "";} else {echo $tancant26;}} ?> </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($tancap26)) {if ($tancap26 == 0) {echo "";} else {echo $tancap26;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> <?php if(isset($tancant27)) {if ($tancant27 == 0) {echo "";} else {echo $tancant27;}} ?> </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($tancap27)) {if ($tancap27 == 0) {echo "";} else {echo $tancap27;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" style="border-right-color:#A4A4A4" height="12"> <?php if(isset($tancant31)) {if ($tancant31 == 0) {echo "";} else {echo $tancant31;}} ?> </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($tancap31)) {if ($tancap31 == 0) {echo "";} else {echo $tancap31;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> <?php if(isset($tancant32)) {if ($tancant32 == 0) {echo "";} else {echo $tancant32;}} ?> </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($tancap32)) {if ($tancap32 == 0) {echo "";} else {echo $tancap32;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> <?php if(isset($tancant33)) {if ($tancant33 == 0) {echo "";} else {echo $tancant33;}} ?> </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($tancap33)) {if ($tancap33 == 0) {echo "";} else {echo $tancap33;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> <?php if(isset($tancant34)) {if ($tancant34 == 0) {echo "";} else {echo $tancant34;}} ?> </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($tancap34)) {if ($tancap34 == 0) {echo "";} else {echo $tancap34;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> <?php if(isset($tancant35)) {if ($tancant35 == 0) {echo "";} else {echo $tancant35;}} ?> </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($tancap35)) {if ($tancap35 == 0) {echo "";} else {echo $tancap35;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> <?php if(isset($tancant36)) {if ($tancant36 == 0) {echo "";} else {echo $tancant36;}} ?> </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($tancap36)) {if ($tancap36 == 0) {echo "";} else {echo $tancap36;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> <?php if(isset($tancant37)) {if ($tancant37 == 0) {echo "";} else {echo $tancant37;}} ?> </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($tancap37)) {if ($tancap37 == 0) {echo "";} else {echo $tancap37;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" rowspan="2" style="text-align:left;border-right-style:none" width="63"> Pavimentos </td>
					<td class="borde05px" style="text-align:left"> Rígido </td>
					<td class="borde05px" colspan="2"> <?php if(isset($pavrig1)) {if ($pavrig1 == 0) {echo "";} else {echo $pavrig1;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($pavrig2)) {if ($pavrig2 == 0) {echo "";} else {echo $pavrig2;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($pavrig3)) {if ($pavrig3 == 0) {echo "";} else {echo $pavrig3;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($pavrig4)) {if ($pavrig4 == 0) {echo "";} else {echo $pavrig4;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($pavrig5)) {if ($pavrig5 == 0) {echo "";} else {echo $pavrig5;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($pavrig6)) {if ($pavrig6 == 0) {echo "";} else {echo $pavrig6;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($pavrig7)) {if ($pavrig7 == 0) {echo "";} else {echo $pavrig7;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" style="text-align:left"> Flexible </td>
					<td class="borde05px" colspan="2"> <?php if(isset($pavflex1)) {if ($pavflex1 == 0) {echo "";} else {echo $pavflex1;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($pavflex2)) {if ($pavflex2 == 0) {echo "";} else {echo $pavflex2;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($pavflex3)) {if ($pavflex3 == 0) {echo "";} else {echo $pavflex3;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($pavflex4)) {if ($pavflex4 == 0) {echo "";} else {echo $pavflex4;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($pavflex5)) {if ($pavflex5 == 0) {echo "";} else {echo $pavflex5;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($pavflex6)) {if ($pavflex6 == 0) {echo "";} else {echo $pavflex6;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($pavflex7)) {if ($pavflex7 == 0) {echo "";} else {echo $pavflex7;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" rowspan="3" style="text-align:left;border-right-style:none"> Silos </td>
					<td class="borde05px" style="text-align:left"> H° A° </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos11)) {if ($silos11 == 0) {echo "";} else {echo $silos11;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos12)) {if ($silos12 == 0) {echo "";} else {echo $silos12;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos13)) {if ($silos13 == 0) {echo "";} else {echo $silos13;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos14)) {if ($silos14 == 0) {echo "";} else {echo $silos14;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos15)) {if ($silos15 == 0) {echo "";} else {echo $silos15;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos16)) {if ($silos16 == 0) {echo "";} else {echo $silos16;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos17)) {if ($silos17 == 0) {echo "";} else {echo $silos17;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" style="text-align:left"> Mampostería </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos21)) {if ($silos21 == 0) {echo "";} else {echo $silos21;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos22)) {if ($silos22 == 0) {echo "";} else {echo $silos22;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos23)) {if ($silos23 == 0) {echo "";} else {echo $silos23;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos24)) {if ($silos24 == 0) {echo "";} else {echo $silos24;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos25)) {if ($silos25 == 0) {echo "";} else {echo $silos25;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos26)) {if ($silos26 == 0) {echo "";} else {echo $silos26;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos27)) {if ($silos27 == 0) {echo "";} else {echo $silos27;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" style="text-align:left"> Chapa </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos31)) {if ($silos31 == 0) {echo "";} else {echo $silos31;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos32)) {if ($silos32 == 0) {echo "";} else {echo $silos32;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos33)) {if ($silos33 == 0) {echo "";} else {echo $silos33;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos34)) {if ($silos34 == 0) {echo "";} else {echo $silos34;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos35)) {if ($silos35 == 0) {echo "";} else {echo $silos35;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos36)) {if ($silos36 == 0) {echo "";} else {echo $silos36;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos37)) {if ($silos37 == 0) {echo "";} else {echo $silos37;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" colspan="3" style="text-align:left"> VALOR FISCAL MEJORAS </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
				</tr>
				<tr>
					<td class="borde05px" colspan="2" rowspan="3" style="text-align:left;border-right-style:none"> Postura y <br> cría intensiva <br> de aves de <br> corral <b> (*)</b> </td>
					<td class="borde05px" style="text-align:left"> A </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
				</tr>
				<tr>
					<td class="borde05px" style="text-align:left"> B </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
				</tr>
				<tr>
					<td class="borde05px" style="text-align:left"> C </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
				</tr>
				<tr>
					<td class="borde05px" colspan="3" style="text-align:left"> VALOR FISCAL (*) </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
				</tr>
			</table>
			<?php if ($a > 7){ ?>
				<table class="tablaborde1px" style="border-width:2px;border-top-width:1px" width="260">
					<tr>
						<td class="borde05px" rowspan="7" width="23"> </td>
						<td class="borde05px"> </td>
						<td class="borde05px"> VALUACIÓN FISCAL </td>
					</tr>
					<tr>
						<td class="borde05px" style="text-align:left"> Tierra </td>
						<td class="borde05px"> </td>
					</tr>
					<tr>
						<td class="borde05px" style="text-align:left"> Edificio </td>
						<td class="borde05px"> </td>
					</tr>
					<tr>
						<td class="borde05px" style="text-align:left"> Mejoras </td>
						<td class="borde05px"> </td>
					</tr>
					<tr>
						<td class="borde05px" style="text-align:left"> Común </td>
						<td class="borde05px"> </td>
					</tr>
					<tr>
						<td class="borde05px" style="text-align:left" width="50"> (*) Postura </td>
						<td class="borde05px"> </td>
					</tr>
					<tr>
						<td class="borde05px" style="text-align:left"> TOTAL </td>
						<td class="borde05px"> </td>
					</tr>
				</table>
			<?php } else { ?>
			<table class="tablaborde1px" style="border-width:2px;border-top-width:1px" width="260">
				<tr>
					<td class="borde05px" rowspan="7" width="23"> </td>
					<td class="borde05px"> </td>
					<td class="borde05px"> VALUACIÓN FISCAL </td>
				</tr>
				<tr>
					<td class="borde05px" style="text-align:left"> Tierra </td>
					<td class="borde05px"> <?php echo number_format((float)$tierraAct,0,',','.') ?> </td>
				</tr>
				<tr>
					<td class="borde05px" style="text-align:left"> Edificio </td>
					<td class="borde05px"> <?php echo number_format((float)$edifAct,0,',','.');?> </td>
				</tr>
				<tr>
					<td class="borde05px" style="text-align:left"> Mejoras </td>
					<td class="borde05px"> <?php echo number_format((float)$mejAct,0,',','.') ?> </td>
				</tr>
				<tr>
					<td class="borde05px" style="text-align:left"> Común </td>
					<td class="borde05px"> <?php echo number_format((float)$comAct,0,',','.') ?> </td>
				</tr>
				<tr>
					<td class="borde05px" style="text-align:left" width="50"> (*) Postura </td>
					<td class="borde05px"> <?php echo number_format((float)$postura,0,',','.') ?> </td>
				</tr>
				<tr>
					<td class="borde05px" style="text-align:left"> TOTAL </td>
					<td class="borde05px"> <?php echo number_format((float)$total,0,',','.') ?> </td>
				</tr>
			</table>
		<?php } ?>
		</div>
		<div class="observaciones">
			<table class="tablaborde1px" width="469" style="border-width:2px">
				<tr>
					<td class="borde05px" colspan="5" style="text-align:left"> <b> Formulario 915 $ (pesos): <?php if (isset($totalForm915)){echo number_format((float)$totalForm915,0,',','.');} ?> </td>
				</tr>
				<tr>
					<td style="border-left-style:solid;text-align:left;border-left-width:0.5px"> <b> OBSERVACIONES </b> </td>
					<td style="text-align:left"> <b> Sup. Cub.:  </td>
					<td style="text-align:left"> <?php if(isset($SupCub)){echo $SupCub;} ?> </td>
					<td style="text-align:left"> <b> Sup. Semicub.:  </td>
					<td style="border-right-style:solid;text-align:left;border-right-width:0.5px"> <?php if(isset($SupSemicub)){echo $SupSemicub;} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" colspan="5" height="77" valign="top" style="border-top-style:none;text-align:left;"> <?php echo $observacion ?> </td>
				</tr>
			</table>
		</div>
		<p class="numeroHoja"> 1-<?php echo $hoja ?> </p>
		<?php if ($a > 7){ ?>
		<div style="page-break-after:always;"></div>
		<div class="izquierda">
			<img id="imglogo" src="img/logopdf901.png">
		</div>
		<div class="header">
				<table>
					<tr>
						<td class="borde05px" style="font-size:54px;border-bottom-style:none;text-align:right" width="128"> <b> A- 901</b> </td>
						<td class="borde05px" rowspan="2" width="452" style="border-bottom-style:none"> </td>
					</tr>
					<tr>
						<td class="borde05px" style="border-top-style:none;font-size:16px"> PARCELA <br> URBANA O <br>SUBURBAN </td>
					</tr>
				</table>
			</div>
		<div class="partido">
			<div class="edificio2">
				<b style="transform: rotate(-90deg);"> E D I F I C I O </b>
			</div>
			<div class="instalaciones">
				<b style="transform: rotate(-90deg)"> I N S T A L A C I O N E S &nbsp;&nbsp;&nbsp;&nbsp; C O M P L E M E N T A R I A S </td>
			</div>
			<div class="mejoras">
				<b style="transform: rotate(-90deg)"> M E J O R A S </b>
			</div>
			<div class="resumen">
				<b style="transform: rotate(-90deg)"> RESUMEN DE <br> VALORES </b>
			</div>
			<table>
				<tr>
					<td style="text-align:left;border-right-style:solid;border-right-width:0.5px"> Declaración Jurada Resumen </td>
					<td width="450" style="border-right-style:solid;border-right-width:0.5px"> </td>
				</tr>
				<tr>
					<td class="borde05px" width="286" style="text-align:left"> <b> PARTIDO: <?php echo $Fpartido ?> </b> </td>
					<td style="text-align:left;border-right-style:solid;border-right-width:0.5px" width="452"> Espacio para sellado </td>
				</tr>
			</table>
			<table class="tablaborde1px" width="747">
				<tr>
					<td style="padding:0px;background-color:black;color:white"> Partido </td>
					<td style="padding:0px;background-color:black;color:white"> Partida </td>
					<td class="borde05px" style="padding:0px"> Circunscripción </td>
					<td class="borde05px" style="padding:0px"> Sección </td>
					<td class="borde05px" style="padding:0px"> Ch. </td>
					<td class="borde05px" style="padding:0px"> Qta. </td>
					<td class="borde05px" style="padding:0px"> Fracc. </td>
					<td class="borde05px" style="padding:0px"> Mza </td>
					<td class="borde05px" style="padding:0px"> Parcela </td>
					<td class="borde05px" style="padding:0px"> Subparcela </td>
				</tr>
				<tr>
					<td class="borde05px" height="12"> <?php echo $Fpartido ?> </td>
					<td class="borde05px"> <?php echo $Fpartida ?> </td>
					<td class="borde05px"> <?php echo $Fcir ?> </td>
					<td class="borde05px"> <?php echo $Fsec ?> </td>
					<td class="borde05px"> <?php echo $Fcha ?> </td>
					<td class="borde05px"> <?php echo $Fqui ?> </td>
					<td class="borde05px"> <?php echo $Ffra ?> </td>
					<td class="borde05px"> <?php echo $Fman ?> </td>
					<td class="borde05px"> <?php echo $Fpar ?> </td>
					<td class="borde05px"> <?php echo $Fsub ?>  </td>
				</tr>
			</table>
			<table class="tablaborde1px" width="747">
				<tr>
					<td class="borde05px" style="border-bottom-style:none;border-top-style:none" width="80"> PROPIETARIO </td>
					<td style="text-align:left;padding:5px;font-size:11px;width:150px"> APELLIDO Y NOMBRE </td>
					<td style="text-align:left"> <?php echo $FfnombreApellido ?> </td>
					<td style="text-align:left;font-size:11px;width:200px"> DOC. DE IDENTIDAD LE/LC/DNI </td>
					<td style="text-align:left;width:170px"> <?php echo $Ffdni ?> </td>
				</tr>
			</table>
			<table class="tablaborde1px" width="747">
				<tr>
					<td class="borde05px" style="border-bottom-style:none" rowspan="2" width="80"> UBICACION <br> DEL <br> INMUEBLE </td>
					<td style="font-size:11px;text-align:right" width="40"> PARTIDO </td>
					<td style="border-bottom-style:solid;border-bottom-width:0.5px" width="230"> <?php echo $Fpartido ?> </td>
					<td style="font-size:11px;text-align:right" width="55"> LOCALIDAD </td>
					<td style="border-bottom-style:solid;border-bottom-width:0.5px" colspan="4" width="200"> <?php echo $Flocalidad ?>  </td>
					<td style="font-size:11px"> C.P.: </td>
					<td style="border-bottom-style:solid;border-bottom-width:0.5px"> <?php echo $FcodigoPostal ?> </td>
				</tr>
				<tr>
					<td style="font-size:11px;text-align:left"> &nbsp; CALLE </td>
					<td colspan="2"> <?php echo $Fdomicilio ?> </td>
					<td style="font-size:11px"> N° </td>
					<td> <?php echo $FnroCalle ?> </td>
					<td style="font-size:11px"> Piso </td>
					<td> <?php echo $Fpiso ?> </td>
					<td style="font-size:11px" width="50"> Dpto./Casa </td>
					<td> <?php echo $Fdpto ?> </td>
				</tr>
			</table>
			<table class="tablaborde1px" style="border-top-style:none" width="747">
				<tr>
					<td class="borde05px" style="border-right-width:1.3px" colspan="6"> I N F R A E S T R U C T U R A </td>
					<td class="borde05px" style="border-left-width:1.3px" colspan="4"> T I E R R A </td>
				</tr>
				<tr>
					<td class="borde05px"> Pavimento </td>
					<td class="borde05px"> Alum. Pub. </td>
					<td class="borde05px"> E. Elect. </td>
					<td class="borde05px"> Agua Corrient. </td>
					<td class="borde05px"> Cloacas </td>
					<td class="borde05px" style="border-right-width:1.3px"> Gas Nat. </td>
					<td class="borde05px" style="border-left-width:1.3px"> Coef. Ajuste </td>
					<td class="borde05px"> Valor básico </td>
					<td class="borde05px"> Superficie m<sup>2</sup> </td>
					<td class="borde05px"> Valor </td>
				</tr>
				<tr>
					<td class="borde05px"> <?php $infraP = checkbox($infraP) ?> </td>
					<td class="borde05px"> <?php $infraA = checkbox($infraA) ?> </td>
					<td class="borde05px"> <?php $infraL = checkbox($infraL) ?> </td>
					<td class="borde05px"> <?php $infraAg = checkbox($infraAg) ?> </td>
					<td class="borde05px"> <?php $infraC = checkbox($infraC) ?> </td>
					<td class="borde05px" style="border-right-width:1.3px"> <?php $infraG = checkbox($infraG) ?> </td> $infraG
					<td class="borde05px" style="border-left-width:1.3px"> <?php echo $ajuste ?> </td>
					<td class="borde05px"> <?php echo $tierraBas ?> </td>
					<td class="borde05px"> <?php echo $superficie ?> </td>
					<td class="borde05px"> <?php echo $tierraAct ?> </td>
				</tr>
			</table>
			<table class="tablaborde1px" style="border-left-width:2px; border-right-width:2.5px;border-bottom-width:0.3" width="747">
				<tr>
					<td class="borde05px" colspan="3"> <b> FORMULARIO </b> </td>
					<td class="celda" colspan="2"> <b> <?php if (isset($formulario8)) {echo $formulario8;} ?> </b> </td>
					<td class="celda" colspan="2"> <b> <?php if (isset($formulario9)) {echo $formulario9;} ?> </b> </td>
					<td class="celda" colspan="2"> <b> <?php if (isset($formulario10)) {echo $formulario10;} ?> </b> </td>
					<td class="celda" colspan="2"> <b> <?php if (isset($formulario11)) {echo $formulario11;} ?> </b> </td>
					<td class="celda" colspan="2"> <b> <?php if (isset($formulario12)) {echo $formulario12;} ?> </b> </td>
					<td class="celda" colspan="2"> <b> <?php if (isset($formulario13)) {echo $formulario13;} ?> </b> </td>
					<td class="celda" colspan="2"> <b> <?php if (isset($formulario14)) {echo $formulario14;} ?> </b> </td>
				</tr>
				<tr>
					<td class="borde05px" rowspan="10" width="18"> </td>
					<td class="borde05px" rowspan="5" style="border-right-style:none"> TILDES </td>
					<td class="borde05px" width="30"> A </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalA8)) {if ($totalA8 == 0) {echo "";} else {echo $totalA8;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalA9)) {if ($totalA9 == 0) {echo "";} else {echo $totalA9;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalA10)) {if ($totalA10 == 0) {echo "";} else {echo $totalA10;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalA11)) {if ($totalA11 == 0) {echo "";} else {echo $totalA11;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalA12)) {if ($totalA12 == 0) {echo "";} else {echo $totalA12;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalA13)) {if ($totalA13 == 0) {echo "";} else {echo $totalA13;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalA14)) {if ($totalA14 == 0) {echo "";} else {echo $totalA14;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px"> B </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalB8)) {if ($totalB8 == 0) {echo "";} else {echo $totalB8;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalB9)) {if ($totalB9 == 0) {echo "";} else {echo $totalB9;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalB10)) {if ($totalB10 == 0) {echo "";} else {echo $totalB10;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalB11)) {if ($totalB11 == 0) {echo "";} else {echo $totalB11;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalB12)) {if ($totalB12 == 0) {echo "";} else {echo $totalB12;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalB13)) {if ($totalB13 == 0) {echo "";} else {echo $totalB13;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalB14)) {if ($totalB14 == 0) {echo "";} else {echo $totalB14;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px"> C </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalC8)) {if ($totalC8 == 0) {echo "";} else {echo $totalC8;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalC9)) {if ($totalC9 == 0) {echo "";} else {echo $totalC9;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalC10)) {if ($totalC10 == 0) {echo "";} else {echo $totalC10;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalC11)) {if ($totalC11 == 0) {echo "";} else {echo $totalC11;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalC12)) {if ($totalC12 == 0) {echo "";} else {echo $totalC12;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalC13)) {if ($totalC13 == 0) {echo "";} else {echo $totalC13;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalC14)) {if ($totalC14 == 0) {echo "";} else {echo $totalC14;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px"> D </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalD8)) {if ($totalD8 == 0) {echo "";} else {echo $totalD8;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalD9)) {if ($totalD9 == 0) {echo "";} else {echo $totalD9;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalD10)) {if ($totalD10 == 0) {echo "";} else {echo $totalD10;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalD11)) {if ($totalD11 == 0) {echo "";} else {echo $totalD11;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalD12)) {if ($totalD12 == 0) {echo "";} else {echo $totalD12;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalD13)) {if ($totalD13 == 0) {echo "";} else {echo $totalD13;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalD14)) {if ($totalD14 == 0) {echo "";} else {echo $totalD14;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px"> E </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalE8)) {if ($totalE8 == 0) {echo "";} else {echo $totalE8;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalE9)) {if ($totalE9 == 0) {echo "";} else {echo $totalE9;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalE10)) {if ($totalE10 == 0) {echo "";} else {echo $totalE10;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalE11)) {if ($totalE11 == 0) {echo "";} else {echo $totalE11;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalE12)) {if ($totalE12 == 0) {echo "";} else {echo $totalE12;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalE13)) {if ($totalE13 == 0) {echo "";} else {echo $totalE13;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if (isset($totalE14)) {if ($totalE14 == 0) {echo "";} else {echo $totalE14;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" colspan="2" style="text-align:left"> Suma de Puntos /Estado </td>
					<td class="borde05px" width="52" style="border-right-color:#A4A4A4"> <?php if (isset($valorEstado8)) {echo $valorEstado8;} ?> </td>
					<td class="borde05px" width="22" style="border-left-style:none"> <?php if (isset($Estado8)) {echo $Estado8;} ?> </td>
					<td class="borde05px" width="52" style="border-right-color:#A4A4A4"> <?php if (isset($valorEstado9)) {echo $valorEstado9;} ?> </td>
					<td class="borde05px" width="22" style="border-left-style:none"> <?php if (isset($Estado9)) {echo $Estado9;} ?> </td>
					<td class="borde05px" width="52" style="border-right-color:#A4A4A4"> <?php if (isset($valorEstado10)) {echo $valorEstado10;} ?> </td>
					<td class="borde05px" width="22" style="border-left-style:none"> <?php if (isset($Estado10)) {echo $Estado10;} ?> </td>
					<td class="borde05px" width="52" style="border-right-color:#A4A4A4"> <?php if (isset($valorEstado11)) {echo $valorEstado11;} ?> </td>
					<td class="borde05px" width="22" style="border-left-style:none"> <?php if (isset($Estado11)) {echo $Estado11;} ?> </td>
					<td class="borde05px" width="52" style="border-right-color:#A4A4A4"> <?php if (isset($valorEstado12)) {echo $valorEstado12;} ?> </td>
					<td class="borde05px" width="22" style="border-left-style:none"> <?php if (isset($Estado12)) {echo $Estado12;} ?> </td>
					<td class="borde05px" width="52" style="border-right-color:#A4A4A4"> <?php if (isset($valorEstado13)) {echo $valorEstado13;} ?> </td>
					<td class="borde05px" width="22" style="border-left-style:none"> <?php if (isset($Estado13)) {echo $Estado13;} ?> </td>
					<td class="borde05px" width="52" style="border-right-color:#A4A4A4"> <?php if (isset($valorEstado14)) {echo $valorEstado14;} ?> </td>
					<td class="borde05px" width="22" style="border-left-style:none"> <?php if (isset($Estado14)) {echo $Estado14;} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" colspan="2" style="text-align:left"> Data </td>
					<td class="borde05px" colspan="2"> <?php if(isset($data8)) {if ($data8 == 0) {echo "";} else {echo $data8;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($data9)) {if ($data9 == 0) {echo "";} else {echo $data9;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($data10)) {if ($data10 == 0) {echo "";} else {echo $data10;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($data11)) {if ($data11 == 0) {echo "";} else {echo $data11;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($data12)) {if ($data12 == 0) {echo "";} else {echo $data12;}} ?></td>
					<td class="borde05px" colspan="2"> <?php if(isset($data13)) {if ($data13 == 0) {echo "";} else {echo $data13;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($data14)) {if ($data14 == 0) {echo "";} else {echo $data14;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" colspan="2" style="text-align:left"> Data de reciclado</td>
					<td class="borde05px" colspan="2"> <?php if(isset($datare8)) {if ($datare8 == 0) {echo "";} else {echo $datare8;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($datare9)) {if ($datare9 == 0) {echo "";} else {echo $datare9;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($datare10)) {if ($datare10 == 0) {echo "";} else {echo $datare10;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($datare11)) {if ($datare11 == 0) {echo "";} else {echo $datare11;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($datare12)) {if ($datare12 == 0) {echo "";} else {echo $datare12;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($datare13)) {if ($datare13 == 0) {echo "";} else {echo $datare13;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($datare14)) {if ($datare14 == 0) {echo "";} else {echo $datare14;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" colspan="2" style="text-align:left"> Superficie cubierta </td>
					<td class="borde05px" colspan="2"> <?php if(isset($cubierta8)) {if ($cubierta8 == 0) {echo "";} else {echo $cubierta8;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($cubierta9)) {if ($cubierta9 == 0) {echo "";} else {echo $cubierta9;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($cubierta10)) {if ($cubierta10 == 0) {echo "";} else {echo $cubierta10;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($cubierta11)) {if ($cubierta11 == 0) {echo "";} else {echo $cubierta11;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($cubierta12)) {if ($cubierta12 == 0) {echo "";} else {echo $cubierta12;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($cubierta13)) {if ($cubierta13 == 0) {echo "";} else {echo $cubierta13;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($cubierta14)) {if ($cubierta14 == 0) {echo "";} else {echo $cubierta14;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" colspan="2" style="text-align:left"> Superficie semicubierta </td>
					<td class="borde05px" colspan="2"> <?php if(isset($semicub8)) {if ($semicub8 == 0) {echo "";} else {echo $semicub8;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($semicub9)) {if ($semicub9 == 0) {echo "";} else {echo $semicub9;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($semicub10)) {if ($semicub10 == 0) {echo "";} else {echo $semicub10;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($semicub11)) {if ($semicub11 == 0) {echo "";} else {echo $semicub11;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($semicub12)) {if ($semicub12 == 0) {echo "";} else {echo $semicub12;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($semicub13)) {if ($semicub13 == 0) {echo "";} else {echo $semicub13;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($semicub14)) {if ($semicub14 == 0) {echo "";} else {echo $semicub14;}} ?> </td>
				</tr>
			</table>
			<table class="tablaborde1px" width="747" style="border-top-width:0.5px;border-left-width:2px; border-right-width:2.5px; border-bottom-width:0.5px">
				<tr>
					<td class="borde05px" rowspan="17" width="17"> </td>
					<td class="borde05px" colspan="2" style="text-align:left"> Heladera c/equip. central </td>
					<td class="celda" colspan="4"> <?php if(isset($heladera8)) {if ($heladera8 == 0) {echo "";} else {echo $heladera8;}} ?> </td>
					<td class="celda" colspan="4"> <?php if(isset($heladera9)) {if ($heladera9 == 0) {echo "";} else {echo $heladera9;}} ?> </td>
					<td class="celda" colspan="4"> <?php if(isset($heladera10)) {if ($heladera10 == 0) {echo "";} else {echo $heladera10;}} ?> </td>
					<td class="celda" colspan="4"> <?php if(isset($heladera11)) {if ($heladera11 == 0) {echo "";} else {echo $heladera11;}} ?> </td>
					<td class="celda" colspan="4"> <?php if(isset($heladera12)) {if ($heladera12 == 0) {echo "";} else {echo $heladera12;}} ?> </td>
					<td class="celda" colspan="4"> <?php if(isset($heladera13)) {if ($heladera13 == 0) {echo "";} else {echo $heladera13;}} ?> </td>
					<td class="celda" colspan="4"> <?php if(isset($heladera14)) {if ($heladera14 == 0) {echo "";} else {echo $heladera14;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" colspan="2" style="text-align:left"> Aire Acondicionado </td>
					<td class="borde05px" colspan="4"> <?php if(isset($aire8)) {if ($aire8 == 0) {echo "";} else {echo $aire8;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($aire9)) {if ($aire9 == 0) {echo "";} else {echo $aire9;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($aire10)) {if ($aire10 == 0) {echo "";} else {echo $aire10;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($aire11)) {if ($aire11 == 0) {echo "";} else {echo $aire11;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($aire12)) {if ($aire12 == 0) {echo "";} else {echo $aire12;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($aire13)) {if ($aire13 == 0) {echo "";} else {echo $aire13;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($aire14)) {if ($aire14 == 0) {echo "";} else {echo $aire14;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" colspan="2" style="text-align:left"> Calefacción central </td>
					<td class="borde05px" colspan="4"> <?php if(isset($calefaccion8)) {if ($calefaccion8 == 0) {echo "";} else {echo $calefaccion8;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($calefaccion9)) {if ($calefaccion9 == 0) {echo "";} else {echo $calefaccion9;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($calefaccion10)) {if ($calefaccion10 == 0) {echo "";} else {echo $calefaccion10;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($calefaccion11)) {if ($calefaccion11 == 0) {echo "";} else {echo $calefaccion11;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($calefaccion12)) {if ($calefaccion12 == 0) {echo "";} else {echo $calefaccion12;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($calefaccion13)) {if ($calefaccion13 == 0) {echo "";} else {echo $calefaccion13;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($calefaccion14)) {if ($calefaccion14 == 0) {echo "";} else {echo $calefaccion14;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" colspan="2" style="text-align:left"> Losa radiante </td>
					<td class="borde05px" colspan="4"> <?php if(isset($losa8)) {if ($losa8 == 0) {echo "";} else {echo $losa8;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($losa9)) {if ($losa9 == 0) {echo "";} else {echo $losa9;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($losa10)) {if ($losa10 == 0) {echo "";} else {echo $losa10;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($losa11)) {if ($losa11 == 0) {echo "";} else {echo $losa11;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($losa12)) {if ($losa12 == 0) {echo "";} else {echo $losa12;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($losa13)) {if ($losa13 == 0) {echo "";} else {echo $losa13;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($losa14)) {if ($losa14 == 0) {echo "";} else {echo $losa14;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px"colspan="2"  style="text-align:left"> Horno incinerador </td>
					<td class="borde05px" colspan="4"> <?php if(isset($horno8)) {if ($horno8 == 0) {echo "";} else {echo $horno8;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($horno9)) {if ($horno9 == 0) {echo "";} else {echo $horno9;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($horno10)) {if ($horno10 == 0) {echo "";} else {echo $horno10;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($horno11)) {if ($horno11 == 0) {echo "";} else {echo $horno11;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($horno12)) {if ($horno12 == 0) {echo "";} else {echo $horno12;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($horno13)) {if ($horno13 == 0) {echo "";} else {echo $horno13;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($horno14)) {if ($horno14 == 0) {echo "";} else {echo $horno14;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" colspan="2" style="text-align:left"> Agua caliente central </td>
					<td class="borde05px" colspan="4"> <?php if(isset($agua8)) {if ($agua8 == 0) {echo "";} else {echo $agua8;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($agua9)) {if ($agua9 == 0) {echo "";} else {echo $agua9;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($agua10)) {if ($agua10 == 0) {echo "";} else {echo $agua10;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($agua11)) {if ($agua11 == 0) {echo "";} else {echo $agua11;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($agua12)) {if ($agua12 == 0) {echo "";} else {echo $agua12;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($agua13)) {if ($agua13 == 0) {echo "";} else {echo $agua13;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($agua14)) {if ($agua14 == 0) {echo "";} else {echo $agua14;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" colspan="2" style="text-align:left"> Baño principal </td>
					<td class="borde05px" colspan="4"> <?php if(isset($bano18)) {if ($bano18 == 0) {echo "";} else {echo $bano18;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($bano19)) {if ($bano19 == 0) {echo "";} else {echo $bano19;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($bano110)) {if ($bano110 == 0) {echo "";} else {echo $bano110;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($bano111)) {if ($bano111 == 0) {echo "";} else {echo $bano111;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($bano112)) {if ($bano112 == 0) {echo "";} else {echo $bano112;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($bano113)) {if ($bano113 == 0) {echo "";} else {echo $bano113;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($bano114)) {if ($bano114 == 0) {echo "";} else {echo $bano114;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" colspan="2" style="text-align:left"> Baño secundario </td>
					<td class="borde05px" colspan="4"> <?php if(isset($bano28)) {if ($bano28 == 0) {echo "";} else {echo $bano28;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($bano29)) {if ($bano29 == 0) {echo "";} else {echo $bano29;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($bano210)) {if ($bano210 == 0) {echo "";} else {echo $bano210;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($bano211)) {if ($bano211 == 0) {echo "";} else {echo $bano211;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($bano212)) {if ($bano212 == 0) {echo "";} else {echo $bano212;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($bano213)) {if ($bano213 == 0) {echo "";} else {echo $bano213;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($bano214)) {if ($bano214 == 0) {echo "";} else {echo $bano214;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" colspan="2" style="text-align:left"> Cámara frigorífica </td>
					<td class="borde05px" colspan="4"> <?php if(isset($camara8)) {if ($camara8 == 0) {echo "";} else {echo $camara8;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($camara9)) {if ($camara9 == 0) {echo "";} else {echo $camara9;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($camara10)) {if ($camara10 == 0) {echo "";} else {echo $camara10;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($camara11)) {if ($camara11 == 0) {echo "";} else {echo $camara11;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($camara12)) {if ($camara12 == 0) {echo "";} else {echo $camara12;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($camara13)) {if ($camara13 == 0) {echo "";} else {echo $camara13;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($camara14)) {if ($camara14 == 0) {echo "";} else {echo $camara14;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" colspan="2" style="text-align:left"> Instalac. contra incendios </td>
					<td class="borde05px" colspan="4"> <?php if(isset($incendio8)) {if ($incendio8 == 0) {echo "";} else {echo $incendio8;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($incendio9)) {if ($incendio9 == 0) {echo "";} else {echo $incendio9;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($incendio10)) {if ($incendio10 == 0) {echo "";} else {echo $incendio10;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($incendio11)) {if ($incendio11 == 0) {echo "";} else {echo $incendio11;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($incendio12)) {if ($incendio12 == 0) {echo "";} else {echo $incendio12;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($incendio13)) {if ($incendio13 == 0) {echo "";} else {echo $incendio13;}} ?> </td>
					<td class="borde05px" colspan="4"> <?php if(isset($incendio14)) {if ($incendio14 == 0) {echo "";} else {echo $incendio14;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" rowspan="2" style="border-right-style:none"> Ascensores </td>
					<td class="borde05px"> + de 4 pers. </td>
					<td class="borde05px" width="9" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" width="21" style="border-left-style:none;border-right-style:none"> <?php if(isset($ascensores18)) {if ($ascensores18 == 0) {echo "";} else {echo $ascensores18;}} ?> </td>
					<td class="borde05px" width="8" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" width="21" style="border-left-style:none"> <?php if(isset($ascensoresCant18)) {if ($ascensoresCant18 == 0) {echo "";} else {echo $ascensoresCant18;}} ?> </td>
					<td class="borde05px" width="9" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" width="21" style="border-left-style:none;border-right-style:none"> <?php if(isset($ascensores19)) {if ($ascensores19 == 0) {echo "";} else {echo $ascensores19;}} ?> </td>
					<td class="borde05px" width="8" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" width="21" style="border-left-style:none"> <?php if(isset($ascensoresCant19)) {if ($ascensoresCant19 == 0) {echo "";} else {echo $ascensoresCant19;}} ?> </td>
					<td class="borde05px" width="9" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" width="21" style="border-left-style:none;border-right-style:none"> <?php if(isset($ascensores110)) {if ($ascensores110 == 0) {echo "";} else {echo $ascensores110;}} ?> </td>
					<td class="borde05px" width="8" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" width="21" style="border-left-style:none"> <?php if(isset($ascensoresCant110)) {if ($ascensoresCant110 == 0) {echo "";} else {echo $ascensoresCant110;}} ?> </td>
					<td class="borde05px" width="9" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" width="21" style="border-left-style:none;border-right-style:none"><?php if(isset($ascensores111)) {if ($ascensores111 == 0) {echo "";} else {echo $ascensores111;}} ?>  </td>
					<td class="borde05px" width="8" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" width="21" style="border-left-style:none"> <?php if(isset($ascensoresCant111)) {if ($ascensoresCant111 == 0) {echo "";} else {echo $ascensoresCant111;}} ?> </td>
					<td class="borde05px" width="9" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" width="21" style="border-left-style:none;border-right-style:none"> <?php if(isset($ascensores112)) {if ($ascensores112 == 0) {echo "";} else {echo $ascensores112;}} ?> </td>
					<td class="borde05px" width="8" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" width="21" style="border-left-style:none"> <?php if(isset($ascensoresCant112)) {if ($ascensoresCant112 == 0) {echo "";} else {echo $ascensoresCant112;}} ?> </td>
					<td class="borde05px" width="9" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" width="21" style="border-left-style:none;border-right-style:none"> <?php if(isset($ascensores113)) {if ($ascensores113 == 0) {echo "";} else {echo $ascensores113;}} ?> </td>
					<td class="borde05px" width="8" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" width="21" style="border-left-style:none"> <?php if(isset($ascensoresCant113)) {if ($ascensoresCant113 == 0) {echo "";} else {echo $ascensoresCant113;}} ?> </td>
					<td class="borde05px" width="9" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" width="21" style="border-left-style:none;border-right-style:none"> <?php if(isset($ascensores114)) {if ($ascensores114 == 0) {echo "";} else {echo $ascensores114;}} ?> </td>
					<td class="borde05px" width="8" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" width="21" style="border-left-style:none"> <?php if(isset($ascensoresCant114)) {if ($ascensoresCant114 == 0) {echo "";} else {echo $ascensoresCant114;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px"> -/= de 4 pers. </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-left-style:none;border-right-style:none"> <?php if(isset($ascensores28)) {if ($ascensores28 == 0) {echo "";} else {echo $ascensores28;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($ascensoresCant28)) {if ($ascensoresCant28 == 0) {echo "";} else {echo $ascensoresCant28;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-left-style:none;border-right-style:none"> <?php if(isset($ascensores29)) {if ($ascensores29 == 0) {echo "";} else {echo $ascensores29;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($ascensoresCant29)) {if ($ascensoresCant29 == 0) {echo "";} else {echo $ascensoresCant29;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-left-style:none;border-right-style:none"> <?php if(isset($ascensores210)) {if ($ascensores210 == 0) {echo "";} else {echo $ascensores210;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($ascensoresCant210)) {if ($ascensoresCant210 == 0) {echo "";} else {echo $ascensoresCant210;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-left-style:none;border-right-style:none"> <?php if(isset($ascensores211)) {if ($ascensores211 == 0) {echo "";} else {echo $ascensores211;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($ascensoresCant211)) {if ($ascensoresCant211 == 0) {echo "";} else {echo $ascensoresCant211;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-left-style:none;border-right-style:none"> <?php if(isset($ascensores212)) {if ($ascensores212 == 0) {echo "";} else {echo $ascensores212;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($ascensoresCant212)) {if ($ascensoresCant212 == 0) {echo "";} else {echo $ascensoresCant212;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-left-style:none;border-right-style:none"> <?php if(isset($ascensores213)) {if ($ascensores213 == 0) {echo "";} else {echo $ascensores213;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($ascensoresCant213)) {if ($ascensoresCant213 == 0) {echo "";} else {echo $ascensoresCant213;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-left-style:none;border-right-style:none"> <?php if(isset($ascensores214)) {if ($ascensores214 == 0) {echo "";} else {echo $ascensores214;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($ascensoresCant214)) {if ($ascensoresCant214 == 0) {echo "";} else {echo $ascensoresCant214;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" rowspan="2" width="60" style="border-right-style:none"> Montacargas </td>
					<td class="borde05px"> + de 3 tons </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-left-style:none;border-right-style:none"> <?php if(isset($monta18)) {if ($monta18 == 0) {echo "";} else {echo $monta18;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($monta118)) {if ($monta118 == 0) {echo "";} else {echo $monta118;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-left-style:none;border-right-style:none"> <?php if(isset($monta19)) {if ($monta19 == 0) {echo "";} else {echo $monta19;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($monta119)) {if ($monta119 == 0) {echo "";} else {echo $monta119;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-left-style:none;border-right-style:none"> <?php if(isset($monta110)) {if ($monta110 == 0) {echo "";} else {echo $monta110;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($monta1110)) {if ($monta1110 == 0) {echo "";} else {echo $monta1110;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-left-style:none;border-right-style:none"> <?php if(isset($monta111)) {if ($monta111 == 0) {echo "";} else {echo $monta111;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($monta1111)) {if ($monta1111 == 0) {echo "";} else {echo $monta1111;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-left-style:none;border-right-style:none"> <?php if(isset($monta112)) {if ($monta112 == 0) {echo "";} else {echo $monta112;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($monta1112)) {if ($monta1112 == 0) {echo "";} else {echo $monta1112;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-left-style:none;border-right-style:none"> <?php if(isset($monta113)) {if ($monta113 == 0) {echo "";} else {echo $monta113;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($monta1113)) {if ($monta1113 == 0) {echo "";} else {echo $monta1113;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-left-style:none;border-right-style:none"> <?php if(isset($monta114)) {if ($monta114 == 0) {echo "";} else {echo $monta114;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($monta1114)) {if ($monta1114 == 0) {echo "";} else {echo $monta1114;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" width="64"> -/= de 3 tons </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-style:none;border-right-style:none"> <?php if(isset($monta28)) {if ($monta28 == 0) {echo "";} else {echo $monta28;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($monta228)) {if ($monta228 == 0) {echo "";} else {echo $monta228;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-left-style:none;border-right-style:none"> <?php if(isset($monta29)) {if ($monta29 == 0) {echo "";} else {echo $monta29;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($monta229)) {if ($monta229 == 0) {echo "";} else {echo $monta229;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-left-style:none;border-right-style:none"> <?php if(isset($monta210)) {if ($monta210 == 0) {echo "";} else {echo $monta210;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($monta2210)) {if ($monta2210 == 0) {echo "";} else {echo $monta2210;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-left-style:none;border-right-style:none"> <?php if(isset($monta211)) {if ($monta211 == 0) {echo "";} else {echo $monta211;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($monta2211)) {if ($monta2211 == 0) {echo "";} else {echo $monta2211;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-left-style:none;border-right-style:none"> <?php if(isset($monta212)) {if ($monta212 == 0) {echo "";} else {echo $monta212;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($monta2212)) {if ($monta2212 == 0) {echo "";} else {echo $monta2212;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-left-style:none;border-right-style:none"> <?php if(isset($monta213)) {if ($monta213 == 0) {echo "";} else {echo $monta213;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($monta2213)) {if ($monta2213 == 0) {echo "";} else {echo $monta2213;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> P </td>
					<td class="borde05px" style="border-left-style:none;border-right-style:none"> <?php if(isset($monta214)) {if ($monta214 == 0) {echo "";} else {echo $monta214;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> C </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($monta2214)) {if ($monta2214 == 0) {echo "";} else {echo $monta2214;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" rowspan="3" style="border-right-style:none"> Pileta de <br> natación </td>
					<td class="borde05px"> A </td>
					<td class="borde05px" colspan="4"> <?php if (isset($pileta8) || isset($piletaCant8)) {$piletaA8 = pileA($pileta8,$piletaCant8);} ?> </td>
					<td class="borde05px" colspan="4"><?php if (isset($pileta9) || isset($piletaCant9)) {$piletaA9 = pileA($pileta9,$piletaCant9);} ?> </td>
					<td class="borde05px" colspan="4"><?php if (isset($pileta10) || isset($piletaCant10)) {$piletaA10 = pileA($pileta10,$piletaCant10);} ?> </td>
					<td class="borde05px" colspan="4"><?php if (isset($pileta11) || isset($piletaCant11)) {$piletaA11 = pileA($pileta11,$piletaCant11);} ?> </td>
					<td class="borde05px" colspan="4"><?php if (isset($pileta12) || isset($piletaCant12)) {$piletaA12 = pileA($pileta12,$piletaCant12);} ?> </td>
					<td class="borde05px" colspan="4"><?php if (isset($pileta13) || isset($piletaCant13)) {$piletaA13 = pileA($pileta13,$piletaCant13);} ?> </td>
					<td class="borde05px" colspan="4"><?php if (isset($pileta14) || isset($piletaCant14)) {$piletaA14 = pileA($pileta14,$piletaCant14);} ?> </td>
				</tr>
				<tr>
					<td class="borde05px"> B </td>
					<td class="borde05px" colspan="4"><?php if (isset($pileta8) || isset($piletaCant8)) {$piletaB8 = pileB($pileta8,$piletaCant8);} ?> </td>
					<td class="borde05px" colspan="4"><?php if (isset($pileta9) || isset($piletaCant9)) {$piletaB9 = pileB($pileta9,$piletaCant9);} ?> </td>
					<td class="borde05px" colspan="4"><?php if (isset($pileta10) || isset($piletaCant10)) {$piletaB10 = pileB($pileta10,$piletaCant10);} ?> </td>
					<td class="borde05px" colspan="4"><?php if (isset($pileta11) || isset($piletaCant11)) {$piletaB11 = pileB($pileta11,$piletaCant11);} ?> </td>
					<td class="borde05px" colspan="4"><?php if (isset($pileta12) || isset($piletaCant12)) {$piletaB12 = pileB($pileta12,$piletaCant12);} ?> </td>
					<td class="borde05px" colspan="4"><?php if (isset($pileta13) || isset($piletaCant13)) {$piletaB13 = pileB($pileta13,$piletaCant13);} ?> </td>
					<td class="borde05px" colspan="4"><?php if (isset($pileta14) || isset($piletaCant14)) {$piletaB14 = pileB($pileta14,$piletaCant14);} ?> </td>
				</tr>
				<tr>
					<td class="borde05px"> C </td>
					<td class="borde05px" colspan="4"><?php if (isset($pileta8) || isset($piletaCant8)) {$piletaC8 = pileC($pileta8,$piletaCant8);} ?> </td>
					<td class="borde05px" colspan="4"><?php if (isset($pileta9) || isset($piletaCant9)) {$piletaC9 = pileC($pileta9,$piletaCant9);} ?> </td>
					<td class="borde05px" colspan="4"><?php if (isset($pileta10) || isset($piletaCant10)) {$piletaC10 = pileC($pileta10,$piletaCant10);} ?> </td>
					<td class="borde05px" colspan="4"><?php if (isset($pileta11) || isset($piletaCant11)) {$piletaC11 = pileC($pileta11,$piletaCant11);} ?> </td>
					<td class="borde05px" colspan="4"><?php if (isset($pileta12) || isset($piletaCant12)) {$piletaC12 = pileC($pileta12,$piletaCant12);} ?> </td>
					<td class="borde05px" colspan="4"><?php if (isset($pileta13) || isset($piletaCant13)) {$piletaC13 = pileC($pileta13,$piletaCant13);} ?> </td>
					<td class="borde05px" colspan="4"><?php if (isset($pileta14) || isset($piletaCant14)) {$piletaC14 = pileC($pileta14,$piletaCant14);} ?> </td>
				</tr>
			</table>
			<table class="tablaborde1px" width="747" style="border-top-width:0.5px;border-left-width:2px;border-right-width:2px">
				<tr>
					<td class="borde05px" colspan="3" style="border-bottom-width:1.5px"> VALOR FISCAL EDIFICIO </td>
					<td class="borde05px" colspan="2" style="border-bottom-width:1.5px"> <?php if(isset($TotalRubro78)) {echo number_format((float)$TotalRubro78,0,',','.');} ?> </td>
					<td class="borde05px" colspan="2" style="border-bottom-width:1.5px"> <?php if(isset($TotalRubro79)) {echo number_format((float)$TotalRubro79,0,',','.');} ?> </td>
					<td class="borde05px" colspan="2" style="border-bottom-width:1.5px"> <?php if(isset($TotalRubro710)) {echo number_format((float)$TotalRubro710,0,',','.');} ?> </td>
					<td class="borde05px" colspan="2" style="border-bottom-width:1.5px"> <?php if(isset($TotalRubro711)) {echo number_format((float)$TotalRubro711,0,',','.');} ?> </td>
					<td class="borde05px" colspan="2" style="border-bottom-width:1.5px"> <?php if(isset($TotalRubro712)) {echo number_format((float)$TotalRubro712,0,',','.');} ?> </td>
					<td class="borde05px" colspan="2" style="border-bottom-width:1.5px"> <?php if(isset($TotalRubro713)) {echo number_format((float)$TotalRubro713,0,',','.');} ?> </td>
					<td class="borde05px" colspan="2" style="border-bottom-width:1.5px"> <?php if(isset($TotalRubro714)) {echo number_format((float)$TotalRubro714,0,',','.');} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" rowspan="8" width="19"> </td>
					<td class="borde05px" rowspan="3" colspan="2" style="text-align:left"> Tanques (Cant/Cap m<sup>3</sup>) </td>
					<td class="borde05px" style="border-right-color:#A4A4A4" width="22" height="12"> <?php if(isset($tancant18)) {if ($tancant18 == 0) {echo "";} else {echo $tancant18;}} ?> </td>
					<td class="borde05px" style="border-left-style:none" width="52"> <?php if(isset($tancap18)) {if ($tancap18 == 0) {echo "";} else {echo $tancap18;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4" width="22"> <?php if(isset($tancant19)) {if ($tancant19 == 0) {echo "";} else {echo $tancant19;}} ?> </td>
					<td class="borde05px" style="border-left-style:none" width="52"> <?php if(isset($tancap19)) {if ($tancap19 == 0) {echo "";} else {echo $tancap19;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4" width="22"> <?php if(isset($tancant110)) {if ($tancant110 == 0) {echo "";} else {echo $tancant110;}} ?> </td>
					<td class="borde05px" style="border-left-style:none" width="52"> <?php if(isset($tancap110)) {if ($tancap110 == 0) {echo "";} else {echo $tancap110;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4" width="22"> <?php if(isset($tancant111)) {if ($tancant111 == 0) {echo "";} else {echo $tancant111;}} ?> </td>
					<td class="borde05px" style="border-left-style:none" width="52"> <?php if(isset($tancap111)) {if ($tancap111 == 0) {echo "";} else {echo $tancap111;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4" width="22"> <?php if(isset($tancant112)) {if ($tancant112 == 0) {echo "";} else {echo $tancant112;}} ?> </td>
					<td class="borde05px" style="border-left-style:none" width="52"> <?php if(isset($tancap112)) {if ($tancap112 == 0) {echo "";} else {echo $tancap112;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4" width="22"> <?php if(isset($tancant113)) {if ($tancant113 == 0) {echo "";} else {echo $tancant113;}} ?> </td>
					<td class="borde05px" style="border-left-style:none" width="52"> <?php if(isset($tancap113)) {if ($tancap113 == 0) {echo "";} else {echo $tancap113;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4" width="22"> <?php if(isset($tancant114)) {if ($tancant114 == 0) {echo "";} else {echo $tancant114;}} ?> </td>
					<td class="borde05px" style="border-left-style:none" width="52"> <?php if(isset($tancap114)) {if ($tancap114 == 0) {echo "";} else {echo $tancap114;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" style="border-right-color:#A4A4A4" height="12"> <?php if(isset($tancant28)) {if ($tancant28 == 0) {echo "";} else {echo $tancant28;}} ?> </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($tancap28)) {if ($tancap28 == 0) {echo "";} else {echo $tancap28;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> <?php if(isset($tancant29)) {if ($tancant29 == 0) {echo "";} else {echo $tancant29;}} ?> </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($tancap29)) {if ($tancap29 == 0) {echo "";} else {echo $tancap29;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> <?php if(isset($tancant210)) {if ($tancant210 == 0) {echo "";} else {echo $tancant210;}} ?> </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($tancap210)) {if ($tancap210 == 0) {echo "";} else {echo $tancap210;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> <?php if(isset($tancant211)) {if ($tancant211 == 0) {echo "";} else {echo $tancant211;}} ?> </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($tancap211)) {if ($tancap211 == 0) {echo "";} else {echo $tancap211;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> <?php if(isset($tancant212)) {if ($tancant212 == 0) {echo "";} else {echo $tancant212;}} ?> </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($tancap212)) {if ($tancap212 == 0) {echo "";} else {echo $tancap212;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> <?php if(isset($tancant213)) {if ($tancant213 == 0) {echo "";} else {echo $tancant213;}} ?> </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($tancap213)) {if ($tancap213 == 0) {echo "";} else {echo $tancap213;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> <?php if(isset($tancant214)) {if ($tancant214 == 0) {echo "";} else {echo $tancant214;}} ?> </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($tancap214)) {if ($tancap214 == 0) {echo "";} else {echo $tancap214;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" style="border-right-color:#A4A4A4" height="12"> <?php if(isset($tancant38)) {if ($tancant38 == 0) {echo "";} else {echo $tancant38;}} ?> </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($tancap38)) {if ($tancap38 == 0) {echo "";} else {echo $tancap38;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> <?php if(isset($tancant39)) {if ($tancant39 == 0) {echo "";} else {echo $tancant39;}} ?> </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($tancap39)) {if ($tancap39 == 0) {echo "";} else {echo $tancap39;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> <?php if(isset($tancant310)) {if ($tancant310 == 0) {echo "";} else {echo $tancant310;}} ?> </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($tancap310)) {if ($tancap310 == 0) {echo "";} else {echo $tancap310;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> <?php if(isset($tancant311)) {if ($tancant311 == 0) {echo "";} else {echo $tancant311;}} ?> </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($tancap311)) {if ($tancap311 == 0) {echo "";} else {echo $tancap311;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> <?php if(isset($tancant312)) {if ($tancant312 == 0) {echo "";} else {echo $tancant312;}} ?> </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($tancap312)) {if ($tancap312 == 0) {echo "";} else {echo $tancap312;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> <?php if(isset($tancant313)) {if ($tancant313 == 0) {echo "";} else {echo $tancant313;}} ?> </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($tancap313)) {if ($tancap313 == 0) {echo "";} else {echo $tancap313;}} ?> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4"> <?php if(isset($tancant314)) {if ($tancant314 == 0) {echo "";} else {echo $tancant314;}} ?> </td>
					<td class="borde05px" style="border-left-style:none"> <?php if(isset($tancap314)) {if ($tancap314 == 0) {echo "";} else {echo $tancap314;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" rowspan="2" style="text-align:left;border-right-style:none" width="63"> Pavimentos </td>
					<td class="borde05px" style="text-align:left"> Rígido </td>
					<td class="borde05px" colspan="2"> <?php if(isset($pavrig8)) {if ($pavrig8 == 0) {echo "";} else {echo $pavrig8;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($pavrig9)) {if ($pavrig9 == 0) {echo "";} else {echo $pavrig9;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($pavrig10)) {if ($pavrig10 == 0) {echo "";} else {echo $pavrig10;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($pavrig11)) {if ($pavrig11 == 0) {echo "";} else {echo $pavrig11;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($pavrig12)) {if ($pavrig12 == 0) {echo "";} else {echo $pavrig12;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($pavrig13)) {if ($pavrig13 == 0) {echo "";} else {echo $pavrig13;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($pavrig14)) {if ($pavrig14 == 0) {echo "";} else {echo $pavrig14;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" style="text-align:left"> Flexible </td>
					<td class="borde05px" colspan="2"> <?php if(isset($pavflex8)) {if ($pavflex8 == 0) {echo "";} else {echo $pavflex8;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($pavflex9)) {if ($pavflex9 == 0) {echo "";} else {echo $pavflex9;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($pavflex10)) {if ($pavflex10 == 0) {echo "";} else {echo $pavflex10;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($pavflex11)) {if ($pavflex11 == 0) {echo "";} else {echo $pavflex11;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($pavflex12)) {if ($pavflex12 == 0) {echo "";} else {echo $pavflex12;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($pavflex13)) {if ($pavflex13 == 0) {echo "";} else {echo $pavflex13;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($pavflex14)) {if ($pavflex14 == 0) {echo "";} else {echo $pavflex14;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" rowspan="3" style="text-align:left;border-right-style:none"> Silos </td>
					<td class="borde05px" style="text-align:left"> H° A° </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos18)) {if ($silos18 == 0) {echo "";} else {echo $silos18;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos19)) {if ($silos19 == 0) {echo "";} else {echo $silos19;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos110)) {if ($silos110 == 0) {echo "";} else {echo $silos110;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos111)) {if ($silos111 == 0) {echo "";} else {echo $silos111;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos112)) {if ($silos112 == 0) {echo "";} else {echo $silos112;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos113)) {if ($silos113 == 0) {echo "";} else {echo $silos113;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos114)) {if ($silos114 == 0) {echo "";} else {echo $silos114;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" style="text-align:left"> Mampostería </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos28)) {if ($silos28 == 0) {echo "";} else {echo $silos28;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos29)) {if ($silos29 == 0) {echo "";} else {echo $silos29;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos210)) {if ($silos210 == 0) {echo "";} else {echo $silos210;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos211)) {if ($silos211 == 0) {echo "";} else {echo $silos211;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos212)) {if ($silos212 == 0) {echo "";} else {echo $silos212;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos213)) {if ($silos213 == 0) {echo "";} else {echo $silos213;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos214)) {if ($silos214 == 0) {echo "";} else {echo $silos214;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" style="text-align:left"> Chapa </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos38)) {if ($silos38 == 0) {echo "";} else {echo $silos38;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos39)) {if ($silos39 == 0) {echo "";} else {echo $silos39;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos310)) {if ($silos310 == 0) {echo "";} else {echo $silos310;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos311)) {if ($silos311 == 0) {echo "";} else {echo $silos311;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos312)) {if ($silos312 == 0) {echo "";} else {echo $silos312;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos313)) {if ($silos313 == 0) {echo "";} else {echo $silos313;}} ?> </td>
					<td class="borde05px" colspan="2"> <?php if(isset($silos314)) {if ($silos314 == 0) {echo "";} else {echo $silos314;}} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" colspan="3" style="text-align:left"> VALOR FISCAL MEJORAS </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
				</tr>
				<tr>
					<td class="borde05px" colspan="2" rowspan="3" style="text-align:left;border-right-style:none"> Postura y <br> cría intensiva <br> de aves de <br> corral <b> (*)</b> </td>
					<td class="borde05px" style="text-align:left"> A </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
				</tr>
				<tr>
					<td class="borde05px" style="text-align:left"> B </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
				</tr>
				<tr>
					<td class="borde05px" style="text-align:left"> C </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
				</tr>
				<tr>
					<td class="borde05px" colspan="3" style="text-align:left"> VALOR FISCAL (*) </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
					<td class="borde05px" colspan="2"> </td>
				</tr>
			</table>
			<table class="tablaborde1px" style="border-width:2px;border-top-width:1px" width="260">
				<tr>
					<td class="borde05px" rowspan="7" width="23"> </td>
					<td class="borde05px"> </td>
					<td class="borde05px"> VALUACIÓN FISCAL </td>
				</tr>
				<tr>
					<td class="borde05px" style="text-align:left"> Tierra </td>
					<td class="borde05px"> <?php echo number_format((float)$tierraAct,0,',','.') ?> </td>
				</tr>
				<tr>
					<td class="borde05px" style="text-align:left"> Edificio </td>
					<td class="borde05px"> <?php echo number_format((float)$edifAct,0,',','.');?> </td>
				</tr>
				<tr>
					<td class="borde05px" style="text-align:left"> Mejoras </td>
					<td class="borde05px"> <?php echo number_format((float)$mejAct,0,',','.') ?> </td>
				</tr>
				<tr>
					<td class="borde05px" style="text-align:left"> Común </td>
					<td class="borde05px"> <?php echo number_format((float)$comAct,0,',','.') ?> </td>
				</tr>
				<tr>
					<td class="borde05px" style="text-align:left" width="50"> (*) Postura </td>
					<td class="borde05px"> <?php echo number_format((float)$postura,0,',','.') ?> </td>
				</tr>
				<tr>
					<td class="borde05px" style="text-align:left"> TOTAL </td>
					<td class="borde05px"> <?php echo number_format((float)$total,0,',','.') ?> </td>
				</tr>
			</table>
		</div>
		<div class="observaciones">
			<table class="tablaborde1px" width="469" style="border-width:2px">
				<tr>
					<td class="borde05px" colspan="5" style="text-align:left"> <b> Formulario 915 $ (pesos): <?php if (isset($totalForm915)){echo number_format((float)$totalForm915,0,',','.');} ?> </td>
				</tr>
				<tr>
					<td style="border-left-style:solid;text-align:left;border-left-width:0.5px"> <b> OBSERVACIONES </b> </td>
					<td style="text-align:left"> <b> Sup. Cub.:  </td>
					<td style="text-align:left"> <?php if(isset($SupCub)){echo $SupCub;} ?> </td>
					<td style="text-align:left"> <b> Sup. Semicub.:  </td>
					<td style="border-right-style:solid;text-align:left;border-right-width:0.5px"> <?php if(isset($SupSemicub)){echo $SupSemicub;} ?> </td>
				</tr>
				<tr>
					<td class="borde05px" colspan="5" height="77" valign="top" style="border-top-style:none;text-align:left;"> <?php echo $observacion ?> </td>
				</tr>
			</table>
		</div>
		<p class="numeroHoja"> 2-<?php echo $hoja ?> </p>
	<?php } ?>
		<div style="page-break-after:always;"></div>
		<div class="hoja2">
			<img id="cuadrilla" src="img/cuadrillaa901.png">
			<table class="tablaborde1px" width="735" style="margin-top:20px">
				<tr>
					<td class="borde05px" colspan="4" style="text-align:left;padding:6px"> <b> Destino principal del edificio: <?php echo $nombreDestino ?></b> </td>
					<td class="borde05px" rowspan="6" style="border-bottom-style:none;border-left-style:none" width="250"> </td>
				</tr>
				<tr>
					<td class="borde05px" colspan="3" style="text-align:left;border-right-color:#A4A4A4;border-bottom-color:#A4A4A4"> <b> DOMICILIO FISCAL: Calle </b> </td>
					<td class="borde05px" style="border-left-style:none;border-bottom-color:#A4A4A4"> <b> N° </b> </td>
				</tr>
				<tr>
					<td class="borde05px" colspan="3" style="padding:6px;border-top-style:none;border-right-color:#A4A4A4;"> <?php echo $Fdcalle ?> </td>
					<td class="borde05px" height="12" style="border-left-style:none;border-top-style:none"> <?php echo $FdnroCalle ?> </td>
				</tr>
				<tr>
					<td class="borde05px" style="border-right-color:#A4A4A4;border-bottom-color:#A4A4A4"> <b> Piso </b> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4;border-bottom-color:#A4A4A4;border-left-style:none"> <b> Depto </b> </td>
					<td class="borde05px" style="border-right-color:#A4A4A4;border-bottom-color:#A4A4A4;border-left-style:none"> <b> Localidad </b> </td>
					<td class="borde05px" style="border-bottom-color:#A4A4A4;border-left-style:none"> <b> Cod. Postal </b> </td>
				</tr>
				<tr>
					<td class="borde05px" style="padding:6px;border-top-style:none;border-right-color:#A4A4A4"> <?php echo $Fdpiso ?> </td>
					<td class="borde05px" style="border-top-style:none;border-right-color:#A4A4A4;border-left-style:none"> <?php echo $Fddpto ?> </td>
					<td class="borde05px" style="border-top-style:none;border-right-color:#A4A4A4;border-left-style:none"> <?php echo $Fdlocalidad ?> </td>
					<td class="borde05px" height="12" style="border-top-style:none;border-left-style:none"> <?php echo $Fdcp ?> </td>
				</tr>
				<tr>
					<td class="borde05px" style="text-align:left;border-bottom-color:#A4A4A4" colspan="4"> <b> Apellido y nombre del Destinatario </b> </td>
				</tr>
				<tr>
					<td class="borde05px" colspan="4" height="12" style="padding:6px;border-top-style:none"> <?php echo $FdnombreApellido ?> </td>
					<td> <b> VISADO </b> </td>
				</tr>
			</table>
			<table style="border-spacing:2px;text-align:left" width="1000">
				<tr>
					<td> <b> Suscribo la presente documentación en su aspecto técnico, asumiendo la responsabilidad propia del ejercicio profesional
						que me compete </b> </td>
				</tr>
				<tr>
					<td> <b> Lugar y fecha <u class="a"> <?php echo $lugar; ?>
						<?php
							//echo date("d/m/y");
							echo $FechaImp;
						?>
					</u> </b> </td>
				</tr>
			</table>
			<table class="tablaborde1px" width="736" style="border-width:1.5px">
				<tr>
					<td class="bordegris" width="350"> <b> APELLIDO Y NOMBRE DEL PROFESIONAL INTERVINIENTE </b> </td>
					<td class="bordegris" colspan="3"> <b> MATRICULA N° </b> </td>
					<td class="bordegris" style="border-right-style:none" width="180"> <b> FIRMA Y SELLO </b> </td>
				</tr>
				<tr>
					<td class="bordegris" height="12" style="padding:6px"> <?php if ((isset($mostrarProf)) && ($mostrarProf == 0)) {echo $FpnombreApellido;} ?> </td>
					<td class="bordegris" colspan="3"> <?php if ((isset($mostrarProf)) && ($mostrarProf == 0)) {echo $Fpmatricula;} ?> </td>
					<td rowspan="4"> </td>
				</tr>
				<tr>
					<td class="bordegris" rowspan="2"> <b> DOMICILIO </b> </td>
					<td class="bordegris" style="font-size:11px" colspan="3"> <b> DOCUMENTO </b> </td>
				</tr>
				<tr>
					<td class="bordegris" style="font-size:11px" width="40"> <b> TIPO </b> </td>
					<td class="bordegris" style="font-size:11px"> <b> N° </b> </td>
					<td class="bordegris" style="font-size:11px"> <b> CUIT </b> </td>
				</tr>
				<tr>
					<td class="bordegris" height="12" style="border-bottom-style:none;padding:6px"> <?php if ((isset($mostrarProf)) && ($mostrarProf == 0)) {echo $Fpdomicilio." ". $Fpnrocalle;} ?> </td>
					<td class="bordegris" style="border-bottom-style:none"> <?php if ((isset($mostrarProf)) && ($mostrarProf == 0)) {echo $Fptipodni;} ?> </td>
					<td class="bordegris" style="border-bottom-style:none"> <?php if ((isset($mostrarProf)) && ($mostrarProf == 0)) {echo $Fpdni;} ?> </td>
					<td class="bordegris" style="border-bottom-style:none"> <?php if ((isset($mostrarProf)) && ($mostrarProf == 0)) {echo $Fpcuit;} ?> </td>
				</tr>
			</table>
		</div>
		<p class="numeroHoja"> <?php echo $hoja ?>-<?php echo $hoja ?> </p>
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
	$filename = $FcodPartido."-".$Fpartida."-Formulario A901.pdf";
	$dompdf->stream($filename, array("Attachment" => 0));
	?>
