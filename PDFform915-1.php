<?php
include("sesion.php");
	$pagina='PDFform9151PHP';
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

	body{
	font-size:10px;
	font-family: 'Arial',sans-serif;
	}
	@page{
		margin-top: 0.5em;
    	margin-left: 1em;
	  	margin-right: 1.2em;
		margin-bottom: 1.3em;}
	h1{font-size:13px;}
	table{border-collapse: collapse;}
	.rubro1{margin-left:400px;
			margin-top:-50px;}
	.encuadro{border: 1px groove gray;
			width:304px;
			padding:2px;
			height: 12px;
			margin-left:400px;
			margin-top:-30px;}
	.cuadroadv{border:1px solid;
			text-align: center;
			width: 332px;
			padding: 2px;
			margin-left:709px;
			margin-top:-50px;}
	.texto{font-size:8px;}
	.encuadro2{border:1px solid;
			width:380px;
			padding:5px;
			margin-top:-10px;}
	.fondo{background-color:black;
		color:white;text-align: center;}
	.todosbordes{border:solid 1px black;text-align: center;}
	.centrado1{text-align:center;
			font:bold 10px 'Arial', sans-serif;}
	.centrado{text-align:center;}
			.tabla1{margin-left:400px;
			margin-top:-30px;}
	.rubro2{font-size:13px;}
	.margenrubro2{margin-top:-5px;}
	.margenvivienda{margin-top:-10px;}
	.bordebottom1{
				font-size:8px;
				border-right-style: solid;
				border-right-color: gray;
				border-top-style: solid;
				border-top-color: gray;
				border-bottom-style: solid;
				border-bottom-color: black;
				border-left-style: solid;
				border-left-color: gray;}
	.bordebottom{border-bottom-style: solid;
				border-bottom-color: black;
				border-right-style: solid;
				border-right-color: gray;}
	.bordeleft{border-right-style: solid;
				border-right-color: gray;
				border-top-style: solid;
				border-top-color: black;
				border-left-style: solid;
				border-left-color: black;}
	.borderight{border-top-style: solid;
				border-top-color: black;
				border-right-style: solid;
				border-right-color: gray;}
	.borderight2{border-top-style: solid;
				border-top-color: black;
				border-right-style: solid;
				border-right-color: black;}
	.bordeleft2{border-right-style: solid;
				border-right-color: gray;
				border-bottom-style: solid;
				border-bottom-color: black;
				border-left-style: solid;
				border-left-color: black;}
	.borderight3{border-bottom-style: solid;
				border-bottom-color: black;
				border-right-style: solid;
				border-right-color: black;}
	.bordeleft3{border-right-style: solid;
				border-right-color: gray;
				border-bottom-style: solid;
				border-bottom-color: gray;
				border-left-style: solid;
				border-left-color: black;}
	.bordeleft4{border-right-style: solid;
				border-right-color: gray;
				border-bottom-style: solid;
				border-bottom-color: black;
				border-left-style: solid;
				border-left-color: black;}
	.borderight4{border-bottom-style: solid;
				border-bottom-color: gray;
				border-right-style: solid;
				border-right-color: gray;}
	.borderight5{border-bottom-style: solid;
				border-bottom-color: gray;
				border-right-style: solid;
				border-right-color: black;}
	.bordebottomleftright{border-bottom-style: solid;
				border-bottom-color: black;
				border-right-style: solid;
				border-right-color: black;
				border-left-style: solid;
				border-left-color: black;
				height: 25px;}
	.ref{margin-left:1007px;
		margin-top:-145px;}
	.ecua{margin-top:-35px;
		width:10%;}
	.ecua2{margin-left:55px;
		margin-top:-48px;}
	.tablaecuacion{margin-left:420px;
				margin-top:-62px;
				border:1px solid black;
				text-align: center;}
	.bordefino{border-bottom-style: solid;
				border-bottom-color: gray;}
	.bordefino2{border-right-style: solid;
				border-right-color: gray;}
	.textoc{margin-left:692px;
			margin-top:-62px;
			font-size:9px;}
	.textob{margin-left:830px;
			margin-top:-62px;
			font-size:9px;}
	.margenrubro2b{margin-top:-5px;}
	.2ecua{margin-top:-15px;
		width:10%;}
	.2ecua2{margin-left:55px;
		margin-top:5px;}
	.bordetop{border-bottom-style: solid;
				border-bottom-color: gray;
				border-right-style: solid;
				border-right-color: gray;
				border-top-style: solid;
				border-top-color: black;}
	.bordetop1{border-top-style: solid;
				border-top-color: black;
				border-right-style: solid;
				border-right-color: gray;
				border-left-style: solid;
				border-left-color: black;
				border-bottom-style: solid;
				border-bottom-color: gray;}
	.bordetop2{border-top-style: solid;
				border-top-color: black;
				border-left-style: solid;
				border-left-color: gray;
				border-right-style: solid;
				border-right-color: black;
				border-bottom-style: solid;
				border-bottom-color: gray;}

	.margenrubro2c{margin-top:-5px;}
	.tabla0{margin-top:-15px;}
	.tabla2{margin-top:-7px;}
	.tabla3{margin-top:-7px;}
	.tabla4{margin-top:-7px;}
	.3ecua{margin-top:-15px;
		width:10%;}
	.3ecua2{margin-left:55px;
		margin-top:5px;}
	.a1{position:absolute;margin-top:-50px;margin-left:130px;text-align:center;}
	.b1{position:absolute;margin-top:0px;margin-left:187px;text-align:center;}
	.c1{position:absolute;margin-top:0px;margin-left:260px;text-align:center;}
	.f1{position:absolute;margin-top:10px;margin-left:350px;text-align:center;}
	.r1{position:absolute;margin-top:5px;margin-left:430px;text-align:center;}
	.sello915{position: absolute;margin-left: 968px;margin-top: -160px;}
	.textalign{text-align: center;}
	.logo915{
		width: 35%;
		margin-top: 5px;
	}
</style>
</head>

<body>
	<img class="logo915" src="img/logopdf915.png"/>
	<h1 class="rubro1">RUBRO 1: INDENTIFICACION DEL INMUEBLE</h1>
	<div><p class="encuadro"><b>PARTIDO</b>(en letras)&nbsp;&nbsp;<b><?php echo $Fpartido ?></b></p></div>
	<div><h1 class="cuadroadv">SOLO PARA SER ADJUNTADO EN LAS CONSTITUCIONES DE ESTADO PARCELARIO</h1></div>
	<p class="texto">EDIFICIOS EN CONSTRUCCION, EN REFACCION O EN DEMOLICION PARCIAL RECUPERABLE</p>
	<div class="encuadro2"><b> (a) Metros cuadrados a justipreciar:</b>
		<b style="font-size:11px;">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $AMetros; ?>&nbsp;&nbsp;&nbsp;&nbsp;
		<?php echo $BMetros; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $CMetros; ?></b></div>
	<div class="tabla1">
	<table class="tabla0" width="100%">
  			<tbody>
    			<tr>
      				<th class="fondo" scope="col">Partido</th>
      				<th class="fondo" scope="col"> Partida</th>
      				<th class="todosbordes" scope="col"> Circunscripcion</th>
      				<th class="todosbordes" scope="col">Seccíon</th>
      				<th class="todosbordes" scope="col">Ch.</th>
      				<th class="todosbordes" scope="col">Qta.</th>
      				<th class="todosbordes" scope="col">Fracc.</th>
							<th class="todosbordes" scope="col">Mz.</th>
      				<th class="todosbordes" scope="col">Parcela</th>
							<th class="todosbordes" scope="col">Subparcela</th>
    			</tr>
				<tr>
      				<td class="todosbordes"><b><?php echo "(";echo $FcodPartido; echo ")"; ?></b></td>
      				<td class="todosbordes"><b><?php echo $Fpartida; ?></b></td>
      				<td class="todosbordes"><b><?php echo $Fcir; ?></b></td>
      				<td class="todosbordes"><b><?php echo $Fsec; ?></b></td>
      				<td class="todosbordes"><b><?php echo $Fcha; ?></b></td>
      				<td class="todosbordes"><b><?php echo $Fqui; ?></b></td>
      				<td class="todosbordes"><b><?php echo $Ffra; ?></b></td>
							<td class="todosbordes"><b><?php echo $Fman; ?></b></td>
      				<td class="todosbordes"><b><?php echo $Fpar; ?></b></td>
							<td class="todosbordes"><b><?php echo $Fsub; ?></b></td>
    			</tr>
				<tr>
					<td></td>
					<td></td>
      				<td></td>
      				<td></td>
							<td></td>
							<td></td>
      				<td class="todosbordes centrado1">U.F.</td>
      				<td class="todosbordes" colspan="3"><?php echo $uf; ?></td>
				</tr>

			</tbody>
		  </table>
	</div>

	<div><p class="margenrubro2"><b class="rubro2">RUBRO 2-a</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sin estructura vinculante</p></div>
	<div><p class="margenvivienda">Vivienda, locales comerciales, oficinas o destinos similares</p></div>

	<table width="90%" class="tabla2">
  <tbody>
    <tr>
      <td class="bordeleft centrado">INCISO</td>
      <td class="borderight centrado">FACHADA</td>
      <td class="borderight centrado">PAREDES</td>
      <td class="borderight centrado">TECHOS</td>
      <td class="borderight centrado">CIELORRASOS</td>
      <td class="borderight centrado">REVOQUES</td>
      <td class="borderight centrado">PISOS</td>
	  <td class="borderight centrado" colspan="2">CARPINTERIA</td>
      <td class="borderight centrado">BAÑOS</td>
      <td class="borderight centrado">COCINA</td>
      <td class="borderight centrado">REVESTIMIENTO</td>
      <td class="borderight2 centrado">INSTALACIONES COMPLEMENTARIAS</td>
    </tr>
		<tr>
      <td class="bordeleft2 centrado"></td>
      <td class="bordebottom centrado"></td>
      <td class="bordebottom centrado"></td>
      <td class="bordebottom centrado"></td>
      <td class="bordebottom centrado"></td>
      <td class="bordebottom centrado"></td>
      <td class="bordebottom centrado"></td>
      <td class="bordebottom1 centrado">DE HIERRO</td>
      <td class="bordebottom1 centrado">DE MADERA</td>
      <td class="bordebottom centrado"></td>
      <td class="bordebottom centrado"></td>
      <td class="bordebottom centrado"></td>
      <td class="borderight3 centrado"></td>
    </tr>
    <tr>
      <td class="bordeleft3 centrado" height="11">(1)Incidencia</td>
      <td class="borderight4 centrado">2</td>
      <td class="borderight4 centrado">24</td>
      <td class="borderight4 centrado">18</td>
      <td class="borderight4 centrado">3</td>
	  <td class="borderight4 centrado">9</td>
      <td class="borderight4 centrado">8</td>
      <td class="borderight4 centrado">11</td>
      <td class="borderight4 centrado">4</td>
      <td class="borderight4 centrado">8</td>
      <td class="borderight4 centrado">2</td>
      <td class="borderight4 centrado">3</td>
	  <td class="borderight5 centrado">8</td>
	</tr>
	<tr>
      <td class="bordeleft3 centrado" height="15">2(Porcentaje)<br>de ejecucion</td>
      <td class="borderight4 centrado"><b><?php echo $AFachada; ?></b></td>
      <td class="borderight4 centrado"><b><?php echo $AParedes; ?></b></td>
      <td class="borderight4 centrado"><b><?php echo $ATechos; ?></b></td>
      <td class="borderight4 centrado"><b><?php echo $ACielorrasos; ?></b></td>
      <td class="borderight4 centrado"><b><?php echo $ARevoques; ?></b></td>
      <td class="borderight4 centrado"><b><?php echo $APisos; ?></b></td>
      <td class="borderight4 centrado"><b><?php echo $AHierro; ?></b></td>
      <td class="borderight4 centrado"><b><?php echo $AMadera; ?></b></td>
      <td class="borderight4 centrado"><b><?php echo $ABano; ?></b></td>
      <td class="borderight4 centrado"><b><?php echo $ACocina; ?></b></td>
      <td class="borderight4 centrado"><b><?php echo $ARevest; ?></b></td>
      <td class="borderight5 centrado"><b><?php echo $AInstalac; ?></b></td>
    </tr>
    <tr>
      <td class="bordeleft4 centrado" height="15">Parcial(1)x(2)/100</td>
      <td class="bordebottom centrado"><b><?php if($arrayResulA[0] >0){echo number_format($arrayResulA[0], 2, ',', '.'); } ?></b></td>
      <td class="bordebottom centrado"><b><?php if($arrayResulA[1] >0){echo number_format($arrayResulA[1], 2, ',', '.');} ?></b></td>
      <td class="bordebottom centrado"><b><?php if($arrayResulA[2] >0){echo number_format($arrayResulA[2], 2, ',', '.');} ?></b></td>
      <td class="bordebottom centrado"><b><?php if($arrayResulA[3] >0){echo number_format($arrayResulA[3], 2, ',', '.');} ?></b></td>
      <td class="bordebottom centrado"><b><?php if($arrayResulA[4] >0){echo number_format($arrayResulA[4], 2, ',', '.');} ?></b></td>
      <td class="bordebottom centrado"><b><?php if($arrayResulA[5] >0){echo number_format($arrayResulA[5], 2, ',', '.');} ?></b></td>
      <td class="bordebottom centrado"><b><?php if($arrayResulA[6] >0){echo number_format($arrayResulA[6], 2, ',', '.');} ?></b></td>
      <td class="bordebottom centrado"><b><?php if($arrayResulA[7] >0){echo number_format($arrayResulA[7], 2, ',', '.');} ?></b></td>
      <td class="bordebottom centrado"><b><?php if($arrayResulA[8] >0){echo number_format($arrayResulA[8], 2, ',', '.');} ?></b></td>
      <td class="bordebottom centrado"><b><?php if($arrayResulA[9] >0){echo number_format($arrayResulA[9], 2, ',', '.');} ?></b></td>
      <td class="bordebottom centrado"><b><?php if($arrayResulA[10] >0){echo number_format($arrayResulA[10], 2, ',', '.');} ?></b></td>
      <td class="borderight3 centrado"><b><?php if($arrayResulA[11] >0){echo number_format($arrayResulA[11], 2, ',', '.');} ?></b></td>
    </tr>
	<tr>
		<td colspan="12"></td>
		<td class="bordebottomleftright textalign"><b><?php if($resulArrayA >0){echo number_format($resulArrayA, 2, ',', '.');} ?></b></td>
	</tr>
  </tbody>

</table>
	<div><img class="ref" src="img/ref915.png"/></div>
	<div><img class="ecua" src="img/ecua915.png"/></div>
	<div class="ecua2"><img class="ecua2" src="img/ecua2-915.png"/></div>
<div>
	<p class="a1">&nbsp;&nbsp;<b><?php echo $AMetros; ?></b></p>
	<p class="b1">&nbsp;&nbsp;<b><?php if($ABasico >0){echo number_format($ABasico, 2, ',', '.');} ?></b></p>
	<p class="c1">&nbsp;&nbsp;<b><?php if($resulArrayA >0){echo number_format($resulArrayA, 2, ',', '.');} ?></b></p>
	<p class="f1">&nbsp;&nbsp;<b><?php if($AEstado >0){echo number_format($AEstado, 2, ',', '.');} ?></b></p>
	<p class="r1">&nbsp;&nbsp;<b><?php if($totalecu1 >0){echo number_format($totalecu1, 2, ',', '.');} ?></b></p>
</div>



<div><table class="tablaecuacion">
	<tr>
		<td colspan="3">ESTADO</td>
	</tr>
	<tr>
		<td class="bordefino" colspan="3">(marcar lo que corresponda)</td>
	</tr>
	<tr>
		<td class="bordefino2"><b><?php echo $AEstadoB; ?></b></td>
		<td class="bordefino2"><b><?php echo $AEstadoR; ?></b></td>
		<td><b><?php echo $AEstadoM; ?></b></td>
	</tr>
</table>
</div>
<div>
<p class="textoc"><b>(c) SUMA DE PARCIALES</b><br>
(Porcentaje de obra ejecutada)</p>
</div>




	<div><p class="margenrubro2b"><b class="rubro2">RUBRO 2-b</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Con estructura vinculante</p></div>
	<div><p class="margenvivienda">Vivienda, locales comerciales, oficinas o destinos similares</p></div>

	<table width="100%" class="tabla3">
  <tbody>
    <tr>
      <td class="bordeleft centrado">INCISO</td>
      <td class="borderight centrado">TRABAJOS PRELIMINARES</td>
      <td class="borderight centrado">MAMPOST. CIMIENTO ELECAVION/ELEC.</td>
      <td class="borderight centrado">ESTRUCTURA H° A°</td>
      <td class="borderight centrado">CUBIERTA TECHOS</td>
      <td class="borderight centrado">CIELORRASO</td>
      <td class="borderight centrado">REVESTIMIENTO GRUESO FINO/PINTURA</td>
	  <td class="borderight centrado">PISOS CONTRAPISOS</td>
      <td class="borderight centrado">CARP. MADERA METAL/HIERRO</td>
      <td class="borderight centrado">INSTALACION SANITARIA ARTEFACTOS</td>
      <td class="borderight centrado">COCINA</td>
      <td class="borderight2 centrado">REVESTIM.</td>
		<td class="borderight2 centrado">INSTALACIONES COMPLEMENTARIAS</td>
    </tr>
    <tr>
      <td class="bordetop1 centrado" height="11">(1)Incidencia</td>
      <td class="bordetop centrado">2</td>
      <td class="bordetop centrado">17</td>
      <td class="bordetop centrado">17</td>
      <td class="bordetop centrado">1</td>
	  <td class="bordetop centrado">2</td>
      <td class="bordetop centrado">11</td>
      <td class="bordetop centrado">7</td>
      <td class="bordetop centrado">17</td>
      <td class="bordetop centrado">8</td>
      <td class="bordetop centrado">5</td>
      <td class="bordetop centrado">3</td>
	  <td class="bordetop2 centrado">10</td>
	</tr>
	<tr>
      <td class="bordeleft3 centrado" height="15">2(Porcentaje)<br>de ejecucion</td>
      <td class="borderight4 centrado"><b><?php echo $BTrabajos; ?></b></td>
      <td class="borderight4 centrado"><b><?php echo $BMamposteria; ?></b></td>
      <td class="borderight4 centrado"><b><?php echo $BHormigon; ?></b></td>
      <td class="borderight4 centrado"><b><?php echo $BTechos; ?></b></td>
      <td class="borderight4 centrado"><b><?php echo $BCielorrasos; ?></b></td>
      <td class="borderight4 centrado"><b><?php echo $BRevesti; ?></b></td>
      <td class="borderight4 centrado"><b><?php echo $BPisos; ?></b></td>
      <td class="borderight4 centrado"><b><?php echo $BCarpinteria; ?></b></td>
      <td class="borderight4 centrado"><b><?php echo $BSanitaria; ?></b></td>
      <td class="borderight4 centrado"><b><?php echo $BCocina; ?></b></td>
      <td class="borderight4 centrado"><b><?php echo $BRevesti2; ?></b></td>
      <td class="borderight5 centrado"><b><?php echo $BInsta2; ?></b></td>
    </tr>
    <tr>
      <td class="bordeleft4 centrado" height="15">Parcial(1)x(2)<br>100</td>
      <td class="bordebottom centrado"><b><?php if($arrayResulB[0] >0){echo number_format($arrayResulB[0], 2, ',', '.');} ?></b></td>
      <td class="bordebottom centrado"><b><?php if($arrayResulB[1] >0){echo number_format($arrayResulB[1], 2, ',', '.');} ?></b></td>
      <td class="bordebottom centrado"><b><?php if($arrayResulB[2] >0){echo number_format($arrayResulB[2], 2, ',', '.');} ?></b></td>
      <td class="bordebottom centrado"><b><?php if($arrayResulB[3] >0){echo number_format($arrayResulB[3], 2, ',', '.');} ?></b></td>
      <td class="bordebottom centrado"><b><?php if($arrayResulB[4] >0){echo number_format($arrayResulB[4], 2, ',', '.');} ?></b></td>
      <td class="bordebottom centrado"><b><?php if($arrayResulB[5] >0){echo number_format($arrayResulB[5], 2, ',', '.');} ?></b></td>
      <td class="bordebottom centrado"><b><?php if($arrayResulB[6] >0){echo number_format($arrayResulB[6], 2, ',', '.');} ?></b></td>
      <td class="bordebottom centrado"><b><?php if($arrayResulB[7] >0){echo number_format($arrayResulB[7], 2, ',', '.');} ?></b></td>
      <td class="bordebottom centrado"><b><?php if($arrayResulB[8] >0){echo number_format($arrayResulB[8], 2, ',', '.');} ?></b></td>
      <td class="bordebottom centrado"><b><?php if($arrayResulB[9] >0){echo number_format($arrayResulB[9], 2, ',', '.');} ?></b></td>
      <td class="bordebottom centrado"><b><?php if($arrayResulB[10] >0){echo number_format($arrayResulB[10], 2, ',', '.');} ?></b></td>
      <td class="borderight3 centrado"><b><?php if($arrayResulB[11] >0){echo number_format($arrayResulB[11], 2, ',', '.');} ?></b></td>
    </tr>
	<tr>
		<td colspan="12"></td>
		<td class="bordebottomleftright textalign"><b><?php if($resulArrayB >0){ echo number_format($resulArrayB, 2, ',', '.');} ?></b></td>
	</tr>
  </tbody>

</table>

	<div><img class="2ecua" src="img/ecua915.png"/></div>
	<div class="2ecua2"><img class="ecua2" src="img/ecua2-915.png"/></div>

<div>
	<p class="a1"><b><?php echo $BMetros; ?></b></p>
	<p class="b1"><b><?php if($BMetros >0){echo number_format($BBasico, 2, ',', '.');} ?></b></p>
	<p class="c1"><b><?php if($resulArrayB >0){echo number_format($resulArrayB, 2, ',', '.');} ?></b></p>
	<p class="f1"><b><?php if($BEstado >0){echo number_format($BEstado, 2, ',', '.');} ?></b></p>
	<p class="r1"><b><?php if($totalecu2 >0){echo number_format($totalecu2, 2, ',', '.');} ?></b></p>
</div>

<div><table class="tablaecuacion">
	<tr>
		<td colspan="3">ESTADO</td>
	</tr>
	<tr>
		<td class="bordefino" colspan="3">(marcar lo que corresponda)</td>
	</tr>
	<tr>
		<td class="bordefino2"><b><?php echo $BEstadoB; ?></b></td>
		<td class="bordefino2"><b><?php echo $BEstadoR; ?></b></td>
		<td><b><?php echo $BEstadoM; ?></b></td>
	</tr>
</table>
</div>
<div>
<p class="textob"><b>(c) SUMA DE PARCIALES</b><br>
(Porcentaje de obra ejecutada)</p>
</div>

<div><p class="margenrubro2c"><b class="rubro2">RUBRO 2-c</b></p></div>
	<div><p class="margenvivienda">Fábricas, talleres, depósitos o destinos similares</p></div>

	<table width="88%" class="tabla4">
  <tbody>
    <tr>
      <td class="bordeleft centrado">INCISO</td>
      <td class="borderight centrado">FACHADA</td>
      <td class="borderight centrado">PAREDES</td>
      <td class="borderight centrado">ESQUELETO</td>
      <td class="borderight centrado">ARMADURA</td>
      <td class="borderight centrado">TECHOS</td>
      <td class="borderight centrado">CIELORRASOS</td>
	  <td class="borderight centrado">REVOQUES</td>
      <td class="borderight centrado">PISOS</td>
      <td class="borderight centrado" colspan="2">CARPINTERIA</td>
      <td class="borderight centrado">BAÑOS</td>
      <td class="borderight centrado">REVESTIM.</td>
	<td class="borderight2 centrado">INSTALACIONES COMPLEMENTARIAS</td>
    </tr>
		<tr>
      <td class="bordeleft2 centrado"></td>
      <td class="bordebottom centrado"></td>
      <td class="bordebottom centrado"></td>
      <td class="bordebottom centrado"></td>
      <td class="bordebottom centrado"></td>
      <td class="bordebottom centrado"></td>
      <td class="bordebottom centrado"></td>
      <td class="bordebottom centrado"></td>
      <td class="bordebottom centrado"></td>
      <td class="bordebottom1 centrado">DE HIERRO</td>
      <td class="bordebottom1 centrado">DE MADERA</td>
      <td class="bordebottom centrado"></td>
	  <td class="bordebottom centrado"></td>
      <td class="borderight3 centrado"></td>
    </tr>
    <tr>
      <td class="bordeleft3 centrado" height="11">(1)Incidencia</td>
      <td class="borderight4 centrado">3</td>
      <td class="borderight4 centrado">22</td>
      <td class="borderight4 centrado">9</td>
      <td class="borderight4 centrado">22</td>
	  <td class="borderight4 centrado">10</td>
      <td class="borderight4 centrado">2</td>
      <td class="borderight4 centrado">5</td>
      <td class="borderight4 centrado">7</td>
      <td class="borderight4 centrado">4</td>
      <td class="borderight4 centrado">5</td>
      <td class="borderight4 centrado">2</td>
	  <td class="borderight4 centrado">2</td>
	  <td class="borderight5 centrado">7</td>
	</tr>
	<tr>
      <td class="bordeleft3 centrado" height="15">2(Porcentaje)<br>de ejecucion</td>
      <td class="borderight4 centrado"><b><?php echo $CFachada; ?></b></td>
      <td class="borderight4 centrado"><b><?php echo $CParedes; ?></b></td>
      <td class="borderight4 centrado"><b><?php echo $CEsqueleto; ?></b></td>
      <td class="borderight4 centrado"><b><?php echo $CArmada; ?></b></td>
      <td class="borderight4 centrado"><b><?php echo $CTechos; ?></b></td>
      <td class="borderight4 centrado"><b><?php echo $CCielorrasos; ?></b></td>
      <td class="borderight4 centrado"><b><?php echo $CRevoques; ?></b></td>
      <td class="borderight4 centrado"><b><?php echo $CPisos; ?></b></td>
      <td class="borderight4 centrado"><b><?php echo $CHierro; ?></b></td>
      <td class="borderight4 centrado"><b><?php echo $CMadera; ?></b></td>
      <td class="borderight4 centrado"><b><?php echo $CBano; ?></b></td>
	  	<td class="borderight4 centrado"><b><?php echo $CRevesti; ?></b></td>
      <td class="borderight5 centrado"><b><?php echo $CInstalac; ?></b></td>
    </tr>
    <tr>
      <td class="bordeleft4 centrado" height="15">Parcial(1)x(2)<br>100</td>
      <td class="bordebottom centrado"><b><?php if($arrayResulC[0] >0){echo number_format($arrayResulC[0], 2, ',', '.');} ?></b></td>
      <td class="bordebottom centrado"><b><?php if($arrayResulC[1] >0){echo number_format($arrayResulC[1], 2, ',', '.');} ?></b></td>
      <td class="bordebottom centrado"><b><?php if($arrayResulC[2] >0){echo number_format($arrayResulC[2], 2, ',', '.');} ?></b></td>
      <td class="bordebottom centrado"><b><?php if($arrayResulC[3] >0){echo number_format($arrayResulC[3], 2, ',', '.');} ?></b></td>
      <td class="bordebottom centrado"><b><?php if($arrayResulC[4] >0){echo number_format($arrayResulC[4], 2, ',', '.');} ?></b></td>
      <td class="bordebottom centrado"><b><?php if($arrayResulC[5] >0){echo number_format($arrayResulC[5], 2, ',', '.');} ?></b></td>
      <td class="bordebottom centrado"><b><?php if($arrayResulC[6] >0){echo number_format($arrayResulC[6], 2, ',', '.');} ?></b></td>
      <td class="bordebottom centrado"><b><?php if($arrayResulC[7] >0){echo number_format($arrayResulC[7], 2, ',', '.');} ?></b></td>
      <td class="bordebottom centrado"><b><?php if($arrayResulC[8] >0){echo number_format($arrayResulC[8], 2, ',', '.');} ?></b></td>
      <td class="bordebottom centrado"><b><?php if($arrayResulC[9] >0){echo number_format($arrayResulC[9], 2, ',', '.');} ?></b></td>
      <td class="bordebottom centrado"><b><?php if($arrayResulC[10] >0){echo number_format($arrayResulC[10], 2, ',', '.');} ?></b></td>
	  	<td class="bordebottom centrado"><b><?php if($arrayResulC[11] >0){echo number_format($arrayResulC[11], 2, ',', '.');} ?></b></td>
      <td class="borderight3 centrado"><b><?php if($arrayResulC[12] >0){echo number_format($arrayResulC[12], 2, ',', '.');} ?></b></td>
    </tr>
	<tr>
		<td colspan="13"></td>
		<td class="bordebottomleftright textalign"><b><?php if($resulArrayC >0){echo number_format($resulArrayC, 2, ',', '.');} ?></b></td>
	</tr>
  </tbody>

</table>
	<div><img class="sello915" src="img/sello915.png"></div>
	<div><img class="3ecua" src="img/ecua915.png"/></div>
	<div class="3ecua2"><img class="ecua2" src="img/ecua2-915.png"/></div>
<div>
	<p class="a1"><b><?php echo $CMetros; ?></b></p>
	<p class="b1"><b><?php if($CMetros >0){echo number_format(floatval($CBasico), 2, ',', '.');} ?></b></p>
	<p class="c1"><b><?php if($resulArrayC >0){echo number_format($resulArrayC, 2, ',', '.');} ?></b></p>
	<p class="f1"><b><?php if($CEstado >0){echo number_format($CEstado, 2, ',', '.');} ?></b></p>
	<p class="r1"><b><?php if($totalecu3 >0){echo number_format($totalecu3, 2, ',', '.');} ?></b></p>
</div>


<div><table class="tablaecuacion">
	<tr>
		<td colspan="3">ESTADO</td>
	</tr>
	<tr>
		<td class="bordefino" colspan="3">(marcar lo que corresponda)</td>
	</tr>
	<tr>
		<td class="bordefino2"><b><?php echo $CEstadoB; ?></b></td>
		<td class="bordefino2"><b><?php echo $CEstadoR; ?></b></td>
		<td><b><?php echo $CEstadoM; ?></b></td>
	</tr>
</table>
</div>
<div>
<p class="textoc"><b>(c) SUMA DE PARCIALES</b><br>
(Porcentaje de obra ejecutada)</p>
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
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$filename = "PDFform915-1.pdf";
$dompdf->stream($filename, array("Attachment" => 0));
?>
