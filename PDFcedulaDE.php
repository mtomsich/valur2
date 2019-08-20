<?php
include("sesion.php");
$pagina='PDFcedulaDEPHP';
include("sql/conexion.php");
include("seguridadForm.php");
require_once 'lib/pdf/autoload.inc.php';
ob_start();
$idCedula = $_REQUEST['idCedulaDE'];
include ("sql/mostrarCedulaDE.php");
include ("sql/mostrarDatosObra.php");

function nomenclatura($dato){
	if ($dato !="") {
		echo $dato;
	}else {
		echo "-";
	}
}
function checkbox($data) {
	if($data==1){
		echo 'SI';
	} else {
			echo 'NO';
	}
	return $data;
}
function inputcheckbox($dato) {
	if($dato==1){
		echo '<input type="radio" value="0" checked>';
	} else {
			echo '<input type="radio" value="0">';
	}
	return $dato;
}

function formatonumero($dato){
	if ($dato !=0) {
		 echo number_format($dato, 2, ',', '.');
	}else {
		echo "";
	}
}
function formatonumero_0dec($dato){
	if ($dato !=0) {
		 echo number_format($dato, 0, ',', '.');
	}else {
		echo "";
	}
}
function plantas($FbtotalPolig,$FunPtotalPolig,$FdosPtotalPolig){
	if ($FbtotalPolig !=0) {
		$totalPo = "Baja";
	}else {
		$totalPo = "";
	}
	if ($FunPtotalPolig !=0) {
		$totalunPo = ", 1er Piso";
	}else {
		$totalunPo = "";
	}
	if ($FdosPtotalPolig !=0) {
		$totaldosPo = "y 2do Piso";
	}else {
		$totaldosPo = "";
	}
	echo $totalPo; echo " ";echo $totalunPo; echo " ";echo $totaldosPo;
}

?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<style>
			body {
				/* to centre page on screen*/
				margin-left: auto;
				margin-right: auto;
		 		font-family: 'Arial',sans-serif;
				}
			@page {
				margin-top: 1.5em;
    		margin-left: 4.3em;
	  		margin-right: 2em;
				margin-bottom: 1.5em;
    	}
			.letra{
				font-size: 12px;
			}
			.letra1{
				font-size: 13px;
			}
			table{
				border-collapse: collapse;
				border: 3px solid black;
			}
			.tabla1{
				width: 100%;
			}
			.bordes{
				border: 1px;
				border-style: solid;
				border-color: black;
			}
			.borde{
				border: 1px;
				border-right-style : solid;
				border-left-style: solid;
				border-top-style: solid;
				border-bottom-style: solid;
			}
			.mar{
				margin-left: 5px;
				margin-top: 5px;
			}
			.texto{
				text-align: center;
			}
			.bordet{
				border: 1px;
				border-top-style: solid;
				border-bottom-style: solid;
			}
			.bordetop{
				border-top: 3px;
				border-top-style: solid;
				border-bottom-style: solid;
			}
			.borderegis{
				border-top: 3px;
				border-top-style: solid;
				border-right: 1px;
				border-right-style: solid;
			}
			.borderegist{
				border-top: 3px;
				border-top-style: solid;
				border-right: 1px;
				border-right-style: solid;
				border-bottom: 1px;
				border-bottom-style: solid;
			}
			.borderegist1{
				border-top: 3px;
				border-top-style: solid;
				border-bottom: 1px;
				border-bottom-style: solid;
			}
			.bordederecho{
				border: 1px;
				border-right-style: solid;
			}
			.bordeder{
				border-top: 1px;
				border-top-style: solid;
				border: 1px;
				border-right-style: solid;
			}
			.bordebotom{
				border-bottom: 1px;
				border-bottom-style: solid;
			}
			.bordebotom1{
				border-bottom: 1px;
				border-bottom-style: solid;
				border-top: 3px;
				border-top-style: solid;
			}
			.textoinvertido {
				-webkit-transform: rotate(90deg);
			}
			.marg{
				margin-top: -40px;
				margin-left: 5px;
			}
			.tabla2{
				margin-top: auto;
				padding-top: 16px;
			}
			.tabla{
				margin-top: auto;
			}
			.tabla3{
				width: 100%;
				border-collapse: collapse;
				border: 1px solid black!important;
			}
			.letra2{
				font-size: 10px;
				text-align: right;
				padding-right: 5px;
			}
			.letra3{
				font-size: 10px;
			}
			.textoalineado{
				margin-top:-30px!important;
				text-align: center;
			}
			.w{
				width: 3%!important;
			}
			img{
				width: 1.9%;
				margin-left: -13px;
				margin-top: -340px;
			}
			.padleft{
				padding-left: 5px;
			}
			.padtop{
				padding-top: 5px;
			}
			.padright{
				padding-right: 5px;
			}
			.pad{
				padding-left: -10px;
			}
			.letra4{
				font-size: 13px;
				padding-top: -10px;
			}
			.inputcheck{
				padding-top: -18px;
				padding-left: 20px;
			}
			.letrachica{
				font-size: 9px;
			}
			.observaciones{
				margin-top: 70px;
				text-align: center;
			}
			.anexo{
				text-align: center;
				font-size: 12px;
			}
			.titular{
				margin-top: -25px;
				margin-left: 5px;
			}
			.titu{
				margin-top: -15px;
			}
			.top{
				padding-top: -15px;
			}
			.textor{
				text-align: right;
				padding-right: 10px;
			}
			.fondo{
				background-color:#242424;
				color:white;
			}
			.decreto{
				width: 75%;
				margin-left: 15px;
				margin-top: -5px;
				margin-right: 5px;
			}
			.sinbordes{
				border-bottom-style: none !important;
				border-top-style: none !important;
				border-right-style: none !important;
				border-left-style: none !important;
			}
		</style>
	</head>
	<body>
		<div class="tabla">
		<table class="tabla1">
			<tr>
				<td class="letra" colspan="5">
					<div class="mar">
						<b>
						PROVINCIA DE BUENOS AIRES
						<br>
						MINISTERIO DE ECONOMIA
						<br>
						</b>
					</div>
				</td>
				<td class="letra" colspan="6">
					<b><h3>CEDULA CATASTRAL DE PROPIEDAD HORIZONTAL</h3></b>
				</td>
				<td></td>
			</tr>
			<tr>
				<td class="letra1" colspan="8" height="16">	<b class="mar">DIRECCION PROVINCIAL CATASTRO TERRITORIAL </b></td>
				<td colspan="2"><div class="letra fondo decreto">&nbsp;&nbsp;Decreto 947/04</div></td>
				<td class="borde letra padleft" >HOJA &nbsp;&nbsp;<b><?php //echo $Fhoja; ?></b></td>
				<td class="borde letra padleft">DE &nbsp;&nbsp;<b><?php //echo $FcantHoja; ?></b></td>
			</tr>
			<tr>
				<td class="bordes letra1 padleft" width="3%" height="15"><b>1</b></td>
				<td class="bordes letra padleft" colspan="7">PARTIDO &nbsp;&nbsp;<?php echo "(";echo $FcodPartido;echo ")&nbsp;<b>"; echo $Fpartido; ?></b> </td>
				<td class="bordes letra padleft"><b>N°</b> </td>
				<td class="bordes letra padleft" colspan="3">PARTIDA &nbsp;&nbsp;<b><?php echo $Fpartida; ?></b></td>
			</tr>
			<tr>
				<td class="borderegist letra1 padleft" height="15"><b>2</b></td>
				<td class="borderegis letra" style="text-align:left;" rowspan="2" colspan="3"><b>NOMENCLATURA <br>CATASTRAL</b></td>
				<td class="borderegis letra padleft">CIRCUNSCR.</td>
				<td class="borderegis letra padleft">SECCION</td>
				<td class="borderegis letra padleft">CHACRA</td>
				<td class="borderegis letra padleft">QUINTA</td>
				<td class="borderegis letra padleft">FRACCION</td>
				<td class="borderegis letra padleft">MANZANA</td>
				<td class="borderegis letra padleft">PARCELA</td>
				<td class="borderegis letra padleft">SUBPARCELA</td>
			</tr>
			<tr>
				<td></td>
				<td class="bordes letra texto" height="15"><b><?php nomenclatura($Fcir); ?></b></td>
				<td class="bordes letra texto"><b><?php nomenclatura($Fsec); ?></b></td>
				<td class="bordes letra texto"><b><?php nomenclatura($Fcha); ?></b></td>
				<td class="bordes letra texto"><b><?php nomenclatura($Fqui); ?></b></td>
				<td class="bordes letra texto"><b><?php nomenclatura($Ffra); ?></b></td>
				<td class="bordes letra texto"><b><?php nomenclatura($Fman); ?></b></td>
				<td class="bordes letra texto"><b><?php nomenclatura($Fpar); ?></b></td>
				<td class="bordes letra texto"><b><?php nomenclatura($Fsub); ?></b></td>
			</tr>
			<tr>
				<td class="borderegis letra1 padleft" height="12"><b>3</b></td>
				<td class="borderegis letra padleft" colspan="11"><b>DOMINIO:&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $Fdlocalidad?></b></b></td>
			</tr>
			<tr>
				<td class="bordes letra" rowspan="4" colspan="7">
					<div class="titular">TITULAR/ES - APELLIDO/S Y NOMBRE/S:</div>
					<br>
					<div class="titu padleft letra"><b><?php echo $FfnombreApellido ?></b></div>
				</td>
				<td class="bordes letra texto" height="10">TIPO</td>
				<td class="bordes letra texto" colspan="4">INSCRIPCION</td>
			</tr>
			<tr>
				<td class="bordes letra texto" height="12"><b></b></td>
				<td class="bordes letra texto" colspan="4"></td>
			</tr>
			<tr>
				<td class="bordes letra texto" height="10">TIPO</td>
				<td class="bordes letra texto" colspan="4">DOCUMENTO DE IDENTIDAD</td>
			</tr>
			<tr>
				<td class="bordes letra texto" height="12"><b><?php echo $FftipoDni; ?></b> </td>
				<td class="bordes letra texto" colspan="4"><b><?php echo $Ffdni; ?></b> </td>
			</tr>
			<tr>
				<td></td>
				<td class="letra pad bordederecho" height="12">DOMICILIO</td>
				<td class="letra padleft" colspan="4">CALLE:&nbsp;&nbsp;<b><?php echo $Fdcalle;?></b></td>
			 <td class="letra" colspan="1">N°:&nbsp;&nbsp;<b><?php echo $FdnroCalle;?></b></td>
			 <td class="letra" colspan="2">CUERPO:&nbsp;&nbsp;<b><?php echo $Fdcuerpo;?></b></td>
			 <td class="letra" colspan="2">PISO:&nbsp;&nbsp;<b><?php echo $Fdpiso;?></b></td>
			 <td class="letra" colspan="1">DPTO.:&nbsp;&nbsp;<b><?php echo $Fddpto;?></b></td>
			</tr>
			<tr>
				<td class="bordet letra padleft" colspan="5" height="12">LOCALIDAD:&nbsp;&nbsp;<b><?php echo $Fdlocalidad;?></b></td>
				<td class="bordet letra" colspan="4">PCIA.:&nbsp;&nbsp;<b><?php echo $Fdprovincia;?></b></td>
				<td class="bordet letra" colspan="3">C.P.:&nbsp;&nbsp;<b><?php echo $Fdcp;?></b></td>
			</tr>
			<tr>
				<td class="borderegis letra1 padleft" height="15"><b>4</b></td>
				<td class="borderegis letra padleft" colspan="11"><b>DESCRIPCION DEL INMUEBLE</b></td>
			</tr>
			<tr>
				<td class="bordes letra padleft" colspan="5" height="15">DESIGNACION SEGUN PLANO:&nbsp;&nbsp;</td>
				<td class="bordes letra padleft">PH&nbsp;&nbsp;<div class="inputcheck" width="2%"><?php inputcheckbox($Fph) ?></div></td>
				<td class="bordes letra padleft">PDO.&nbsp;<b><?php echo $Fnro;?></b></td>
				<td class="bordes letra padleft">N°&nbsp;&nbsp;</td>
				<td class="bordes letra padleft">AÑO:&nbsp;<b><?php echo $Fanio;?></b></td>
				<td class="bordes letra padleft" colspan="3">APROBADO EL:&nbsp;&nbsp;<b><?php echo date_format (new DateTime($FfechaAprob), 'd/m/Y');?></b></td>
			</tr>
			<tr>
				<td class="bordebotom letra padleft" colspan="11" height="15">UNIDAD FUNCIONAL / U. COMPLEMENTARIA:&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $Fuf;?></b></td>
				<td class="bordebotom padleft" colspan=""><?php inputcheckbox($FCon) ?><div class="inputcheck texto letra3">CONSTRUIDO&nbsp;&nbsp;</div></td>
			</tr>
			<tr>
				<td class="letra padleft" colspan="6" height="15">POLIGONOS QUE LA INTEGRAN:&nbsp;&nbsp;&nbsp;<b><?php echo $Fpol; ?></b></td>
				<td class="letra padleft" colspan="6">PLANTAS QUE LO COMPONEN:&nbsp;&nbsp;&nbsp;<b><?php echo $plantas; //plantas($FbtotalPolig,$FunPtotalPolig,$FdosPtotalPolig); ?></b></td>
			</tr>
			<tr>
				<td class="bordes letra padleft" colspan="4">SUP.CUB.:&nbsp;&nbsp;&nbsp;&nbsp;<b><?php formatonumero_0dec($Focub); ?></b></td>
				<td class="bordes letra padleft" colspan="2">SUP.SEMICUB.:&nbsp;&nbsp;&nbsp;&nbsp;<b><?php formatonumero_0dec($Foscub); ?></b></td>
				<td class="bordes letra padleft" colspan="3">SUP.DESCUB.:&nbsp;&nbsp;&nbsp;&nbsp;<b><?php formatonumero_0dec($Fodescub); ?></b></td>
				<td class="bordes letra padleft" colspan="3" height="15">SUPERFICIE TOTAL:&nbsp;&nbsp;&nbsp;&nbsp;<b><?php formatonumero_0dec($Fotpol); ?></b></td>
			</tr>
			<tr>
				<td class="borderegis letra1 padleft" height="15"><b>5</b></td>
				<td class="borderegis letra padleft" colspan="11"><b>RESTRICCIONES Y AFECCIONES</b></td>
			</tr>
			<tr>
				<td class="bordes padleft" colspan="12" height="60">
						<p style="margin-top:-40px!important;font-size:12px;">&nbsp;<?php echo nl2br($FmedidasRa); ?></p>
				</td>
			</tr>
			<tr>
				<td class="borderegis letra1 padleft" height="15"><b>6</b></td>
				<td class="borderegis letra padleft" colspan="11"><b>DOMICILIO POSTAL</b></td>
			</tr>
			<tr>
				<td class="bordes letra padleft" colspan="12" height="15">DESTINATARIO&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $FdnombreApellido; ?></b></td>
			</tr>
			<tr>
				<td></td>
				<td class="letra pad" colspan="5" height="15">CALLE:&nbsp;&nbsp;<b><?php echo $Fdcalle;?></b></td>
				<td class="letra" colspan="1">N°:&nbsp;&nbsp;<b><?php echo $FdnroCalle;?></b></td>
			 	<td class="letra" colspan="2">CUERPO:&nbsp;&nbsp;<b><?php echo $Fdcuerpo;?></b></td>
			 	<td class="letra" colspan="2">PISO:&nbsp;&nbsp;<b><?php echo $Fdpiso;?></b></td>
				<td class="letra" colspan="1">DPTO.:&nbsp;&nbsp;<b><?php echo $Fddpto;?></b></td>
			</tr>
			<tr>
				<td class="bordet letra" colspan="5" height="15">&nbsp;LOCALIDAD:&nbsp;&nbsp;<b><?php echo $Fdlocalidad;?></b></td>
				<td class="bordet letra" colspan="4">PCIA.:&nbsp;&nbsp;<b><?php echo $Fdprovincia;?></b></td>
				<td class="bordet letra" colspan="3">C.P.:&nbsp;&nbsp;<b><?php echo $Fdcp;?></b></td>
			</tr>
			<tr>
				<td class="borderegis letra1" height="15">&nbsp;<b>7</b></td>
				<td class="borderegis letra" colspan="7">&nbsp;<b>VALUACION BASICA DE LA SUBPARCELA</b></td>
				<td class="borderegis letra texto" colspan="4"><b>FIRMA Y SELLO DEL PROFESIONAL</b></td>
			</tr>
			<tr>
			  <td class="bordes letra texto" rowspan="2" colspan="3" height="15">VALOR TIERRA</td>
			  <td class="bordes letra texto" colspan="3">VALOR EDIFICIO</td>
			  <td class="bordes letra texto" rowspan="2" colspan="2">VALOR TOTAL SUBPARCELA</td>
			  <td class="sinbordes letra" rowspan="2" colspan="4" style="border-top-style:solid !important;border:1px"></td>
			</tr>
			<tr>
			  <td class="bordes letra" height="10">PROPIO</td>
			  <td class="bordes letra texto">COMUN</td>
			  <td class="letra texto">TOTAL</td>
			</tr>
			<tr>
			  <td class="bordes letra texto" height="20" colspan="3"><b><?php formatonumero($Ftierra); ?></b></td>
			  <td class="bordes letra texto"><b><?php formatonumero($Fvpropio); ?></b></td>
			  <td class="bordes letra texto"><b><?php formatonumero($Fvcomun); ?></b></td>
			  <td class="bordes letra texto"><b><?php formatonumero($FtotalEdificio); ?></b></td>
			  <td class="bordes letra texto" colspan="2"><b><?php formatonumero($Fsuma); ?></b></td>
				<td class="letra" valign="bottom" style="font-size:11px"> DNI: </td>
				<td class="letra" valign="bottom" style="font-size:11px"> <?php echo $Fpdni ?> </td>
				<td class="letra" valign="bottom" style="font-size:11px"> CUIT: </td>
				<td class="letra" valign="bottom" style="font-size:11px"> <?php echo $Fpcuit ?> </td>
			</tr>
			<tr>
				<td class="borderegist letra1" width="3%" height="10">&nbsp;<b>8</b></td>
				<td class="borderegis letra" colspan="11" >&nbsp;<b>OBSERVACIONES PARA EL PROFESIONAL</b></td>
			</tr>
			<tr>
				<td class="letra padleft" colspan="12" height="15"><?php echo nl2br($FmedidasOp); ?></td>
			</tr>
			<tr>
			  <td class="borderegist letra1 padleft" width="3%" height="10"><b>9</b></td>
			  <td class="borderegis letra padleft" style="text-align:left;" colspan="3" rowspan="2"> <b>MONTO <br> IMPONIBLE</b> </td>
			  <td class="borderegis letra padleft texto " colspan="3">IMPUESTO INMOBILIARIO</td>
			  <td class="borderegis letra padleft texto " colspan="3">IMPUESTO DE SELLOS</td>
			  <td class="borderegis letra padleft texto " colspan="2">OTROS</td>
			</tr>
			<tr>
				<td height="15"></td>
				<td class="bordes letra padleft texto" colspan="3"></td>
				<td class="bordes letra padleft texto" colspan="3"></td>
				<td class="bordes letra padleft texto" colspan="2"></td>
			</tr>
			<tr>
				<td class="borderegis letra1" width="3%"><b>10</b></td>
				<td class="borderegis letra padleft" colspan="7"><b>CARACTERISTICAS TRIBUTARIAS</b></td>
				<td class="borderegis letra texto" colspan="4"><b>EFECTIVIDAD</b></td>
			</tr>
			<tr>
				<td class="bordebotom1" height="15"></td>
				<td class="bordebotom1 letra padleft pad"><b>CODIGO</b></td>
				<td class="borderegist letra padleft"></td>
				<td class="borderegist letra padleft" colspan="5"></td>
				<td class="borderegist letra padleft" colspan="2">MES:</td>
				<td class="borderegist letra padleft" colspan="2">AÑO:</td>
			</tr>
			<tr>
				<td class="borderegist letra1" width="3%"><b>11</b></td>
				<td class="borderegist1 letra padleft" colspan="6"><b>OBSERVACIONES</b></td>
				<td class="borderegist letra padleft" colspan="5"></td>
			</tr>
			<tr>
				<td class="bordederecho letra padleft" colspan="7" height="66">
					<div class="letra3 observaciones">LUGAR Y FECHA DE LA EXPEDICION</div>
				</td>
				<td class="letra padleft" colspan="5">
					<div class="letra3 observaciones">FIRMA AUTORIZADA Y SELLO</div>
				</td>
			</tr>

			<tr>
				<td class="borderegis letra1" rowspan="3" colspan="5">
					<b>
						<div class="marg">REGISTRADO <br>
							<div>Legajo N°:&nbsp;&nbsp;&nbsp;&nbsp; 	....................................</div><p></p>
							<div>Folio N°:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ....................................</div><p></p>
							<div>Fecha:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	 ....................................</div>
						</div>
					</b>
				</td>
				<td class="borderegis letra" colspan="7" height="70">
					<div class="letra observaciones" style="text-align:right!important;">VISACION PROPIEDAD HORIZONTAL&nbsp;</div>
				</td>
			</tr>
		</table>
			<img src="img/cedula10707.png" alt="">
		</div>
		<div class="tabla2">
			<table class="tabla1">
				<tr>
					<td class="bordes letra1 padleft" width="3%"><b>12</b></td>
					<td class="bordes letra padleft"><b>CROQUIS DE LA PARCELA CATASTRAL</b>&nbsp;<sup>(con sus medidas lineales, superficie y linderos)</sup> </td>
				</tr>
				<tr>
					<td class="bordes letra1" height="600" colspan="2">
						<div style="margin-top:-400px;margin-left:5px;font-size:12px;">
							<?php echo wordwrap($Fanexo, 105, "<br>" ,False);
							if($FampAnexo !=""){
								echo "&nbsp;&nbsp;<br><b>AMPLIACION DE ANEXO</b>&nbsp;&nbsp;<br>";
								echo wordwrap($FampAnexo, 105, "<br>" ,False);
							} ?>
						</div>
					</td>
				</tr>
			</table>
			<div class="letra">
				<p><b>&nbsp;&nbsp;&nbsp;&nbsp;PLANILLA DE LA EDIFICACION ACTUALIZADA DE LA U. F. </b></p>
			</div>
			<table class="tabla3">
				<tr>
					<td class="bordes letra padleft texto" rowspan="2" width="4%"><b>UNIDAD FUNCIONAL</b><br><div style="font-size:10px;">(DESIGNACION)</div></td>
					<td class="bordes letra padleft texto" rowspan="2" width="4%"><b>POLIGONOS <br> QUE LA <br> INTEGRAN</b></td>
					<td class="bordes letra padleft texto" rowspan="2" width="6%"><b>PLANTAS <br> QUE LA <br> COMPONEN</b></td>
					<td class="bordes letra padleft texto" colspan="5" rowspan="1"><b>SUPERFICIE</b></td>
				</tr>
				<tr>
					<td class="bordes letra padleft texto"><b>CUBIERTA</b></td>
					<td class="bordes letra padleft texto"><b>SEMICUB.</b></td>
					<td class="bordes letra padleft texto"><b>DESCUBIERTA</b></td>
					<td class="bordes letra padleft texto"><b>TOTAL POLIGONOS</b></td>
					<td class="bordes letra padleft texto"><b>TOTAL UNIDAD FUNCIONAL</b></td>
				</tr>
				<tr>
					<td class="bordes letra padleft texto" rowspan="3" width="4%"><b><?php echo $Fuf; ?></b></td>
					<td class="bordes letra padleft texto" rowspan="3" width="4%"><b><?php echo $Fpol; ?></b></td>
					<td class="bordes letra padleft texto" height="15"><b>Baja</b></td>
					<td class="bordes letra padleft texto"><b><?php echo $Fbcub; ?></b></td>
					<td class="bordes letra padleft texto"><b><?php echo $Fbscub; ?></b></td>
					<td class="bordes letra padleft texto"><b><?php echo $Fbdes; ?></b></td>
					<td class="bordes letra padleft texto"><b><?php echo $FbtotalPolig; ?></b></td>
					<td class="bordes letra padleft texto" rowspan="3" width="4%"><b><?php echo $FtotalFunc; ?></b></td>
				</tr>
				<tr>
					<td class="bordes letra padleft texto" height="15"><b>1er Piso</b></td>
					<td class="bordes letra padleft texto"><b><?php echo $FunPcub; ?></b></td>
					<td class="bordes letra padleft texto"><b><?php echo $FunPscub; ?></b></td>
					<td class="bordes letra padleft texto"><b><?php echo $FunPdes; ?></b></td>
					<td class="bordes letra padleft texto"><b><?php echo $FunPtotalPolig; ?></b></td>
				</tr>
				<tr>
					<td class="bordes letra padleft texto" height="15"><b>2do Piso</b></td>
					<td class="bordes letra padleft texto"><b><?php echo $FdosPcub; ?></b></td>
					<td class="bordes letra padleft texto"><b><?php echo $FdosPscub; ?></b></td>
					<td class="bordes letra padleft texto"><b><?php echo $FvdosPpdes; ?></b></td>
					<td class="bordes letra padleft texto"><b><?php echo $FdosPtotalPolig; ?></b></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td class="letra padleft texto" height="15"><b>TOTALES</b></td>
					<td class="bordes letra padleft texto"><b><?php echo $Ftcub; ?></b></td>
					<td class="bordes letra padleft texto"><b><?php echo $Ftscu; ?></b></td>
					<td class="bordes letra padleft texto"><b><?php echo $Ftdes; ?></b></td>
					<td class="bordes letra padleft texto"><b><?php echo $FttotalPolig; ?></b></td>
					<td class="bordes letra padleft texto"><b><?php echo $FttotalFunc; ?></b></td>
				</tr>
			</table>
		</div>
		<!-- Cierro Conexion a la Base -->
		<?php mysqli_close($conexion); ?>
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
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$filename = "PDFcedulaDE.pdf";
$dompdf->stream($filename, array("Attachment" => 0));
?>
