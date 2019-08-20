<?php
include("sesion.php");
	$pagina='PDFform9071PHP';
	include("sql/conexion.php");
	include("seguridadForm.php");

require_once 'lib/pdf/autoload.inc.php';
ob_start();
include ("sql/mostrarDatosObra.php");
include ('sql/mostrarForm907.php');


?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>PDFform907-1.php</title>
	<style>
		@page {
			margin-top: 0.5em;
    	margin-left: 1em;
	  	margin-right: 1.2em;
			margin-bottom: 1.3em;
    }
		#logo907{
			width: 50%;
			position: absolute;
			margin-right: 5px;
			margin-left: 380px;
			margin-top: -55px;
		}
		#img907 {
			width: 30%;
			position: absolute;
			margin-right: 0px;
			margin-left: 390px;
			margin-top: 37px;
		}
		#headermedio {
			margin-left: 200px;
			position: absolute;
			margin-right: 200px;
			margin-top: 0px;
			font-family: 'Arial',sans-serif;
		}
		#imgcuadrilla{
			width: 95%;
			position: absolute;
			margin-right: 0px;
			margin-left: 16px;
			margin-top: 0px;
		}
		table {
			border-style: none;
			border-collapse:inherit;
			border-color: black;
		}
		.derecha{
			margin-top:-45px;
			margin-left:430px;
		}
		.izquierda {
			position:absolute;
		}
		.cuadro {
			border-style: solid;
			border-width: 1px;
			background-color: #D8D8D8;
			text-align: center;
			font-size: 12px;
			padding: 2px;
			width: 10px;
		}
		.cuadroblanco {
			border-style: solid;
			border-width: 1px;
			text-align: center;
			font-size: 12px;
			padding: 2px;
			width: 1px;
		}
		.izquierdacuerpo {
			position: absolute;
			margin-top: 40px;
			margin-left: -3px;
			font-family: 'Arial',sans-serif;
		}
		.izquierdac {
			position: absolute;
			margin-top: 140px;
			margin-left: -3px;
			font-family: 'Arial',sans-serif;
			width:inherit;
		}
		.partido {
			border-style: solid;
			text-align: center;
			font-size: 13px;
			width: 590px;
			border-spacing: 0px;
		}
		.partidobordes {
  		border-right-style:solid;
			border-right-width: 1px;
			border-right-color: #A4A4A4;
			border-bottom-style: solid;
		}
		.nomenclatura {
			border-style: solid;
			border-width: 1px;
			text-align: center;
			font-size: 11px;
		}
		.nombordes {
			border-right-style: solid;
			border-right-width: 1px;
			border-right-color: gray;
			border-bottom-style: solid;
			border-bottom-width: 1px;
			border-bottom-color: #A4A4A4;
		}
		.nombordess {
			border-right-style: solid;
			border-right-width: 1px;
			border-right-color: gray;
		}
		.nomultimo {
			border-bottom-style: solid;
			border-bottom-width: 1px;
			border-bottom-color: #A4A4A4;
			text-align: center;
		}
		.nomultimo2 {
			border-right-style: solid;
			border-right-width: 1px;
			border-right-color: #A4A4A4;
		}
		.textosolo {
			position:absolute;
			margin-top:284px;
			margin-left:0px;
			font-size:14px;
			font-family: 'Arial',sans-serif;
		}
		.fullhoja {
			margin-top: 302px;
			margin-left: -3px;
			font-family: 'Arial',sans-serif;
		}
		.hoja{
			margin-top: 0px;
			margin-left: -3px;
			font-family: 'Arial',sans-serif;
		}
		.hoja2{
			margin-top: 40px;
			margin-left: -3px;
			font-family: 'Arial',sans-serif;
		}
		.hoja3{
			margin-top: 5px;
			margin-left: -3px;
			font-family: 'Arial',sans-serif;
		}
		.accesiones {
			border-style: solid;
			border-width: 2px;
			text-align: center;
			font-size: 12px;
			border-right-style: none;
		}
		.textogrande {
			font-family: 'Arial',sans-serif;
			font-size: 11px;
		}
		.celdabi {
			border-right-style: solid;
			border-right-width: 1px;
			border-top-style: solid;
			border-top-width: 1px;
			border-top-color: #A4A4A4;
		}
		.celdatri {
			border-right-style: solid;
			border-right-width: 1px;
			border-right-color: #A4A4A4;
			border-top-style: solid;
			border-top-width: 1px;
			border-top-color: #A4A4A4;
		}
		.celdatri1 {
			border-right-style: solid;
			border-right-width: 1px;
			border-right-color: #A4A4A4;
		}
		.letrachica {
			font-size: 10px;
		}
		.textosolo2 {
			position:absolute;
			margin-top:1200px;
			margin-left:935px;
			font-size:10px;
			font-family: 'Arial',sans-serif;
		}
		.croquis {
			border-style:solid;
			margin-left:5px;
			width: 400px;
			font-size:12px;
			padding:0px;
		}
		.nomenca{
			border-top-style: solid;
			border-top-width: 1px;
			text-align: center;
			font-size: 13px;
			border-bottom-style: solid;
			border-bottom-width: 1px;
		}
		.textphp{
			padding-top: 1px;
			padding-left:5px;
			text-align:left;
			font-size:11px;
		}
		.textalign{
			text-align: center;
			font-size: 10px;
			padding: 1px;
		}
		.no-borde-top{
			border-top : 0;
		}
		.no-borde-bot{
			border-top : 0;
		}
		table.table {border-collapse:collapse; width:100%; border: 2px solid black;}
		table.table td {height : 15px; font-size: 12px;}
		table.table td.td-norm {border: 1px solid grey; text-align : center;}
		table.table td.td-esp3 {border: 2px solid black !important;}
		table.table td.td-esp {
			border-top: 1px solid grey; 
			border-bottom: 1px solid grey; 
			border-right: 2px solid black;
			border-left: 2px solid black;
			text-align : center;
		}
		table.table td.td-esp2 {
			border-top: 1px solid grey; 
			border-bottom: 1px solid grey; 
			border-right: 2px solid black;
			border-left: 1px solid grey;
			text-align : center;
		}
		.borde-top{
			border-top:2px solid black
		}
	</style>
</head>

<body>
	<header>
	<div class="">
		<div class="izquierda">

		</div>
		<div id="headermedio">
			<table>
				<tr>
					<td class="cuadro"><b>PARA&nbsp;ENTREGAR&nbsp;&nbsp;JUNTO&nbsp;&nbsp;CON&nbsp;&nbsp;LOS&nbsp;&nbsp;FORMULARIOS&nbsp;&nbsp;DE&nbsp;&nbsp;AVALÚO</b></td>
					<td class="cuadroblanco">P.H.</td>
				</tr>
			</table>
			<img id="logo907" src="img/logopdf907.png">
			<img id="img907" src="img/imgpdf907.png">
		</div>
		</header>
		<div class="izquierdacuerpo">
			<table width="400">
				<tr>
					<td colspan="12" style="font-size:11px;"> FORMULARIO RESUMEN DE VALUACION - Ley 10.707 </td>
				</tr>
					<tr><td></td></tr>
					<tr><td></td></tr>
				<tr>
					<td style="font-size:14px">  <b> Nombre del Club de campo: </b>&nbsp;&nbsp;&nbsp;</td>
					<td style="font-size:12px"><b><?php echo $Pais;?></b></td>
				</tr>
				<tr><td colspan="12" style="padding-top:-16px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;................................</td></tr>
				<tr><td></td></tr>
				<tr>
					<td style="font-size:14px"> <b> RUBRO 1 Plano de P.H. N°: </b></td>
					<td colspan="2" style="border: 1px solid;font-size:10px!important"><b><?php echo $tipo; ?></b></td>
				</tr>
				<tr><td></td></tr>
				<tr>
					<td style="font-size:14px;"> <b> RUBRO 2 Datos del inmueble </b></td>
				</tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
			</table>
			<div class="derecha">
			<table width="250" style="border-spacing: 0px; margin-top:7px">
				<thead>
					<tr>
						<td colspan="12" style="font-size:14px;"> <b> RUBRO 3 Infraestructura </b> </td>
					</tr>
				</thead>
				<tbody class="nomenclatura">
					<tr>
						<td colspan="2" class="nombordes"><b>Pavimento</b></td>
						<td colspan="2" class="nombordes"><b>Alumbrado público</b></td>
						<td colspan="2" class="nombordes"><b>Energía eléctrica </b></td>
						<td colspan="2" class="nombordes"><b>Agua corriente </b></td>
						<td colspan="2" class="nombordes"><b>Cloacas </b></td>
						<td colspan="2" class="nomultimo"><b>Gas natural</b></td>
					</tr>
					<tr>
						<td colspan="2" class="nomultimo2" height="12" ><b><?php $infraP = checkbox($infraP) ?></b></td>
						<td colspan="2" class="nomultimo2" height="12" ><b><?php $infraA = checkbox($infraA) ?></b></td>
						<td colspan="2" class="nomultimo2" height="12" ><b><?php $infraL = checkbox($infraL) ?></b></td>
						<td colspan="2" class="nomultimo2" height="12" ><b><?php $infraAg = checkbox($infraAg) ?></b></td>
						<td colspan="2" class="nomultimo2" height="12" ><b><?php $infraC = checkbox($infraC) ?></b></td>
						<td colspan="2" height="20" style="padding-left:0px"><b><?php $infraG = checkbox($infraG) ?></b></td>
					</tr>
				</tbody>
			</table>
			<table width="250" style="border-spacing: 0px; margin-top:5px">
				<thead>
					<tr>
						<td colspan="9" style="font-size:14px;"> <b> RUBRO 4 Tierra </td>
					</tr>
				</thead>
					<tbody class="nomenclatura">
						<tr>
							<td colspan="3" class="nombordes"> <b> Coeficiente </b> </td>
							<td colspan="3" class="nombordes"> <b> Valor Básico Tierra de la PARCELA </b> </td>
							<td colspan="3" class="nomultimo"> <b> VALOR PROPORCIONAL tierra de la SUBPARCELA </b> </td>
						</tr>
						<tr>
							<td colspan="3" class="nomultimo2" height="15"><b><?php echo $CoefAjuste;?></b></td>
							<?php
									if ($tipo == "geodesia") {
										echo '										
											<td colspan="3" class="nomultimo2" height="15"><b>'.$VTierra.'</b></td>
											<td colspan="3" class="" height="15"></td>
										';
										$valor_aux = $VTierra;
									}else{
										echo '
											<td colspan="3" class="nomultimo2" height="15"></td>											
											<td colspan="3" class="" height="15"><b>'.$TotPTSubp.'</b></td>
										';
										$valor_aux = $TotPTSubp;
									}
							
							?>
						</tr>
					</tbody>
			</table>
		</div>
		</div>
		<div class="textosolo">
			<b> RUBRO 5 Accesiones - Propias y comunes </b>
		</div>
		<div class="izquierdac">
			<table width="300" style="border-spacing: 0px; margin-top:7px">
				<tbody class="nomenclatura">
					<tr>
						<td colspan="6" class="nombordes"> <b> PARTIDO </b> </td>
						<td colspan="2" class="nombordes"> <b> N° </b> </td>
						<td colspan="3" class="nomultimo"> <b> PARTIDA </b> </td>
					</tr>
					<tr>
						<td colspan="6" class="nomultimo2 textphp" height="15"><b><?php echo $Fpartido; ?></b></td>
						<td colspan="2" class="nomultimo2 textphp" height="15"><b><?php echo $FcodPartido; ?></b></td>
						<td colspan="3" class="textphp" height="15"><b><?php echo $Fpartida; ?></b></td>
					</tr>
					<tr>
						<td colspan="12" class="nomenca"><b>NOMENCLATURA CATASTRAL</b></td>
					</tr>
					<tr>
						<td colspan="1" class="nombordes"> CIRC. </td>
						<td colspan="1" class="nombordes"> SECC.</td>
						<td colspan="2" class="nombordes"> CH. </td>
						<td colspan="" class="nombordes"> QTA. </td>
						<td colspan="" class="nombordes"> FRACC. </td>
						<td colspan="1" class="nombordes"> MZA. </td>
						<td colspan="2" class="nombordes"> PARCELA </td>
						<td colspan="2" class="nomultimo"> SUBPARCELA </td>
					</tr>
					<tr>
						<td colspan="1" class="nombordes textphp" height="15"><b><?php echo $Fcir; ?></b></td>
						<td colspan="1" class="nombordes textphp" height="15"><b><?php echo $Fsec; ?></b></td>
						<td colspan="2" class="nombordes textphp" height="15"><b><?php echo $Fcha; ?></b></td>
						<td colspan="" class="nombordes textphp" height="15"><b><?php echo $Fqui; ?></b></td>
						<td colspan="" class="nombordes textphp" height="15"><b><?php echo $Ffra; ?></b></td>
						<td colspan="1" class="nombordes textphp" height="15"><b><?php echo $Fman; ?></b></td>
						<td colspan="2" class="nombordes textphp" height="15"><b><?php echo $Fpar; ?></b></td>
						<td colspan="2" class="nomultimo textphp" height="15"><b><?php echo $Fsub; ?></b></td>
					</tr>
					<tr>
						<td colspan="6" class="nombordes"><b> CALLE </b></td>
						<td colspan="2" class="nombordes"><b> N° </b></td>
						<td colspan="3" class="nomultimo"><b> LOCALIDAD </b></td>
					</tr>
					<tr>
						<td colspan="6" class="nombordess textphp" height="15"><b><?php echo $domicilio; ?></b></td>
						<td colspan="2" class="nombordess textphp" height="15"><b><?php echo $FnroCalle; ?></b></td>
						<td colspan="3" class="textphp" height="15"><b><?php echo $Flocalidad; ?></b></td>
					</tr>
				</tbody>
			</table>

			<br>
		</div>
		<p class="textosolo2"> (*) Unicamente L.E., L.C. o D.N.I. </p>
		<div class="fullhoja">
		<table class="table table-bordered">
			<tr>
				<td  class="td-norm" rowspan="2" width="40">formulario</td>
				<td  class="td-norm" rowspan="2" width="65">DATA <br> dia / mes / año</td>
				<td  class="td-norm" rowspan="2" width="65">DATA RECICLADO <br> dia / mes / año</td>
				<td  class="td-esp2" colspan="3">SUPERFICIE <br>(entero redondeado en m<sup>2</sup>)</td>
				<td  class="td-norm" colspan="3" >VALOR</td>
			</tr>
			<tr>
				<td class="td-norm" >1. Cubierta</td>
				<td class="td-norm" >2. Semicubierta</td>
				<td class="td-esp" >3. Total superficie (1 + 2)</td>
				<td class="td-norm" >4. edificio + inst. complem</td>
				<td class="td-norm" >5. mejoras</td>
				<td class="td-esp" > 6. TOTAL VALOR (4 + 5)</td>
			</tr>
			<?php
				$total_sup_general = 0; 
				$total_val_general = 0; 
				function mostrar($val){
					if($val == 0){
						return "";
					}else{
						return number_format($val,0,",",".");
					}
				}
				for ($i=1; $i <= 10; $i++) { 
					if (isset(${"cubierta".$i}) && isset(${"semicub".$i})) {
						$totalcub =  (int)${"cubierta".$i} + (int)${"semicub".$i};
					}else{
						$totalcub = "";
					}
					if (isset(${"TotalRubro7".$i}) && isset(${"totalmejoras".$i})) {
						$totalval =  (int)${"TotalRubro7".$i} + (int)${"totalmejoras".$i};
					}else{
						$totalval = 0;
					}
					echo '<tr>';
					echo '<td class="td-norm">'.((isset(${"formulario".$i})) ? ${"formulario".$i} : "").'</td>';
					echo '<td class="td-norm">'.((isset(${"data".$i})) ? ${"data".$i} : "").'</td>';
					echo '<td class="td-norm">'.((isset(${"datare".$i})) ? ${"datare".$i} : "").'</td>';
					echo '<td class="td-norm">'.((isset(${"cubierta".$i})&&${"cubierta".$i}!=0) ? mostrar(${"cubierta".$i}) : "").'</td>';
					echo '<td class="td-norm">'.((isset(${"semicub".$i})&&${"semicub".$i}!=0) ? mostrar(${"semicub".$i}) : "").'</td>';
					echo '<td class="td-esp">'.(($totalcub==0)?"":mostrar($totalcub)).'</td>';
					echo '<td class="td-norm">'.((isset(${"TotalRubro7".$i})) ? mostrar(${"TotalRubro7".$i}) : "").'</td>';
					echo '<td class="td-norm">'.((isset(${"totalmejoras".$i})) ? mostrar(${"totalmejoras".$i}) : "").'</td>';
					echo '<td class="td-esp">'.mostrar($totalval).'</td>';
					echo '</tr>';

					$total_sup_general += $totalcub; 
					$total_val_general += $totalval; 

				}
				$totalAC = (int)$Accesiones + (int)$total_val_general;
			?>
			
			<tr>
				<td class="borde-top" colspan="3">TOTAL ACCESIONES PROPIAS</td>
				<td style="border-top:2px solid black" colspan="2">SUMATORIA DE SUPERFICIE <br>(entero redondeado)</td>
				<td style="border:2px solid black; text-align:center"><?php echo mostrar($total_sup_general) ?></td>
				<td style="border-top:2px solid black" colspan="2">SUMATORIA DE VALOR <br>(entero redondeado)</td>
				<td style="border:2px solid black; text-align:center"><?php echo mostrar($total_val_general) ?></td>
			</tr>
			<tr>
				<td colspan="8" class="borde-top">PARTE PROPORCIONAL DE LAS ACCESIONES COMUNES</td>
				<td style="border:2px solid black; text-align:center"><?php echo mostrar($Accesiones) ?></td>
			</tr>
			<tr>
				<td style="border-top: 2px solid black; border-bottom: 0 solid white; border-left: 0 solid white; text-align:right" colspan="8" >TOTAL ACCESIONES (entero redondeado)</td>
				<td style="border:2px solid black; text-align:center"><?php echo mostrar((int)$Accesiones + (int)$total_val_general) ?></td>
			</tr>
		</table>
		<br>
		<table style="width: 768px; border-spacing: 0px;margin-top:-10px">
			<tr>
				<td style="font-size:13px;" colspan="12"> <b> RUBRO 6 Valuación fiscal </b></td>
			</tr>
			<tbody class="nomenclatura">
				<tr>
					<td colspan="9" class="celdatri" style="border-top-style:none;text-align: left!important;">(valor total en letras) </td>
					<td colspan="1" class="celdatri" style="border-top-style:none;padding:2px"> Total rubro 4 </td>
					<td colspan="3" class="celdatri" style="border-top-style:none; border-right-style:none"><b style="font-size:11px;"> <?php echo $valor_aux; ?></b><td>
				</tr>
				<tr>
					<td colspan="9" class="celdatri"> </td>
					<td colspan="1" class="celdatri" style="padding:2px"> Total rubro 5 </td>
					<td colspan="3" class="celdatri" style="border-right-style:none"> <?php echo mostrar($totalAC) ?></td>
				</tr>
				<tr>
					<td colspan="9" class="celdatri1"> </td>
					<td colspan="1" class="celdatri" style="padding:2px"><b> Valor Total </b> </td>
					<td colspan="3" class="celdatri" style="border-right-style:none"> <?php echo mostrar(floatval($valor_aux) + floatval($totalAC)) ?></td>
				</tr>
			</tbody>
		</table>
		<table style="width: 768px; border-spacing: 0px; margin-top:2px">
			<tr>
				<td style="font-size:13px"> <b> RUBRO 7 Destino del edificio </b></td>
			</tr>
			<tbody class="nomenclatura">
				<tr>
					<td class="textphp" height="10"><b> <?php echo $RTipo; echo " / "; echo $RDesti; ?></b></td>
				</tr>
			</tbody>
		</table>
		<table style="width: 768px; border-spacing: 0px; margin-top:2px">
			<tr>
				<td style="font-size:13px"> <b> RUBRO 8 Propietario, condómino, etc. </b></td>
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
					<td class="celdatri textphp" height="15"><b><?php echo $DnombreApellido; ?></b></td>
					<td class="celdatri textphp" height="15"><b><?php echo $Dtipodni; ?></b></td>
					<td class="celdabi textphp" style="border-right-style:none" height="15"><b> <?php echo mostrar($Ddni); ?> </b></td>
				</tr>
			</tbody>
		</table>
		<table style="width: 768px; border-spacing: 0px; margin-top:2px">
			<tr>
				<td colspan="12" style="font-size:13px"> <b> RUBRO 9 Domicilio fiscal </b></td>
			</tr>
			<tbody class="nomenclatura">
				<tr>
					<td colspan="2" class="celdatri" style="border-top-style:none; text-align: left"> <b>  &nbsp; &nbsp; CALLE </b> </td>
					<td colspan="2" class="celdatri" style="border-top-style:none"> N° </td>
					<td colspan="2" class="celdatri"style="border-top-style:none"> PISO </td>
					<td colspan="2" class="celdatri" style="border-top-style:none"> DPTO </td>
					<td colspan="2" class="celdatri" style="border-top-style:none"> LOCALIDAD </td>
					<td colspan="2"> CODIGO POSTAL </td>
				</tr>
				<tr>
					<td colspan="2" class="celdatri textalign" height="15"><b><?php echo $Dcalle; ?></b></td>
					<td colspan="2" class="celdatri textalign" height="15"><b><?php echo $DnroCalle; ?></b></td>
					<td colspan="2" class="celdatri textalign" height="15"><b><?php echo $Dpiso; ?></b></td>
					<td colspan="2" class="celdatri textalign" height="15"><b><?php echo $Ddpto; ?></b></td>
					<td colspan="2" class="celdatri textalign" height="15"><b><?php echo $Dlocalidad; ?></b></td>
					<td colspan="2" class="celdabi textalign" style="border-right-style:none" height="15"><b><?php echo $Dcp; ?></b></td>
				</tr>
			</tbody>
		</table>
		<table style="width: 768px; border-spacing: 0px; margin-top:3px">
			<tr>
				<td style="font-size:13px"> <b> RUBRO 10 Observaciones </b></td>
			</tr>
			<tbody class="nomenclatura">
				<tr>
					<td style="text-align:left;padding:5px;vertical-align:top" height="20">Disp. 78/06 - Cód. Nomenclador de Destino:<b><?php echo $RCod; ?></b> <br> <?php echo $observaciones; ?></td>
				</tr>
			</tbody>
		</table>
		<table width="575" style="border-spacing: 0px; margin-top:5px">
			<tr>
				<td style="font-size:12px"> <b> RESERVADO PARA LA DIRECCION PROVINCIAL DE CATASTRO TERRITORIAL </b></td>
			</tr>
			<tbody class="partido">
				<tr>
					<td rowspan="3" style="padding:1px; border-right-style:solid"></td>
					<td style="text-align:left; font-size:11px"> <b> &nbsp; &nbsp; REGISTRADO </b> </td>
				</tr>
				<tr>
					<td style="text-align:left; font-size:11px"> <b> &nbsp; &nbsp; Nro </b> </td>
				</tr>
				<tr>
					<td style="text-align:left; font-size:11px"> <b> &nbsp; &nbsp; Fecha </b></td>
				</tr>
			</tbody>
		</table>
		<div class="" style="text-align:center; font-size:12px; width:700px; margin-top:4px"> El duplicado devuelto por esta DIRECCIÓN servirá como comprobante de haber sido presentada la Declaración Jurada </div>
			<div class="letrachica" style="text-align:center; width:700px;margin-top:5px"> SE RECOMIENDA LA CONSERVACIÓN EN BUEN ESTADO DE ESTA DECLARACIÓN JURADA Y DE LOS FORMULARIOS ANEXOS </div>
		</div>
<div class="hoja">
	<img id="imgcuadrilla" src="img/imgcuadrilla907.png">
</div>
<div class="hoja2">
	<table style="width:770px;margin-left:10px;margin-top:900px">
		<tr>
			<td style="font-size:13px"><b>11: Profesional interviniente</b></td>
		</tr>
		<tr>
			<td style="font-size:11px"><b>Suscribo la presente documentacion en su aspecto tecnico, asumiendo la responsabilidad propia del ejercicio profesional que me compete.</b></td>
		</tr>
		<tr>
		<td style="font-size:13px"><b>Lugar y fecha</b>&nbsp;&nbsp;<?php echo $local; echo " - ";echo date('d/m/Y',$strdate);?> </td>
		</tr>
	</table>
</div>
<div class="hoja3">
	<table class="partido" style="width:770px;margin-left:10px;margin-top:0px">
		<tbody>
		<tr>
			<td class="celdatri"> <b> A P E L L I D O &nbsp; Y &nbsp; N O M B R E </b> </td>
			<td class="celdatri" colspan="2"> <b> M A T R I C U L A &nbsp; N° </b> </td>
			<td class=""> <b> F I R M A &nbsp; Y &nbsp; S E L L O </b> </td>
		</tr>
		<tr>
			<td class="celdatri" height="16" style="padding:1px;"><?php if ((isset($mostrarProf)) && ($mostrarProf == 0)) {echo $RpnombreApellido;} ?></td>
			<td class="celdatri" colspan="2"><?php if ((isset($mostrarProf)) && ($mostrarProf == 0)) {echo $Rpmatricula;}  ?></td>
			<td class="celdatri1" rowspan="3"></td>
		</tr>
		</tbody>
	</table>
	<table style="margin-top:10px; text-align:center;width:770px">
		<tr><td></td></tr>
		<tr>
			<td> ___________________________________ </td>
			<td> ________________________________________ </td>
		</tr>

		<tr>
			<td style="font-size:12px"> SELLO FECHADOR </td>
			<td style="font-size:12px"> Firma del agente receptor </td>
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
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$filename = "PDFform907-1.pdf";
$dompdf->stream($filename, array("Attachment" => 0));
?>
