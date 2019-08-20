<?php
include("sesion.php");
	$pagina='PDFcedula10707PHP';
	include("sql/conexion.php");
	include("seguridadForm.php");
	require_once 'lib/pdf/autoload.inc.php';
	ob_start();

	$idCedula =$_REQUEST['idCedula707'];
	include("sql/mostrarDatosCedula10707.php");
	include("sql/mostrarDatosObra.php");

	function checkbox($data) {
	  if($data==1){
	    echo 'SI';
	  } else {
	      echo 'NO';
	  }
	  return $data;
	}
	function nomenclatura($dato){
		if ($dato !="") {
			echo $dato;
		}else {
			echo "-";
		}
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
				margin-top: 0.5em;
    		margin-left: 5em;
	  		margin-right: 1.5em;
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
				border: 1px solid black;
			}
			.tabla1{
				width: 100%;
			}
			.bordes{
				border: 1px;
				border-style: solid;
				border-color: black;
			}
			.sinbordes{
				border-bottom-style: none !important;
				border-top-style: none !important;
				border-right-style: none !important;
				border-left-style: none !important;
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
				border: 1px;
				border-top-style: solid;
			}
			.textoinvertido {
				-webkit-transform: rotate(90deg);
			}
			.marg{
				margin-top: -45px;
				margin-left: 5px;
			}
			.tabla2{
				margin-top: auto;
				padding-top: 16px;
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
				width: 1.85%;
				margin-left: -14px;
				margin-top: -290px;
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
				padding-left: -15px;
			}
			.letra4{
				font-size: 13px;
				padding-top: -10px;
			}
		</style>
	</head>
	<body>
		<table class="tabla1">
			<tr>
				<td class="letra" colspan="6">
					<div class="mar">
						<b>
						PROVINCIA DE BUENOS AIRES
						<br>
						MINISTERIO DE ECONOMIA
						</b>
					</div>

				</td>
				<td class="letra4" colspan="4">
					<b><h3>CEDULA CATASTRAL Ley 10.707</h3></b>
				</td>
				<td></td>
			</tr>
			<tr>
				<td class="letra1" colspan="9" height="20">
					<b class="mar">DIRECCION PROVINCIAL CATASTRO TERRITORIAL </b>
				</td>
				<td class="borde letra padleft" >HOJA &nbsp;&nbsp;<b><?php echo $Fhoja; ?></b></td>
				<td class="borde letra padleft">DE &nbsp;&nbsp;<b><?php echo $FcantHoja; ?></b></td>
			</tr>
			<tr>
				<td class="bordes letra1" width="3%"><b>1</b></td>
				<td class="bordes letra padleft" colspan="7">PARTIDO &nbsp;&nbsp;<?php echo "(";echo $FcodPartido;echo ")&nbsp;<b>"; echo $Fpartido; ?></b> </td>
				<td class="bordes letra padleft" colspan="3">PARTIDA &nbsp;&nbsp;<b><?php echo $Fpartida; ?></b></td>
			</tr>
			<tr>
				<td class="bordes letra1"><b>2</b></td>
				<td class="letra texto" rowspan="2" colspan="3"><b>NOMENCLATURA <br>CATASTRAL</b></td>
				<td class="bordes letra padleft">CIRCUNSCR.</td>
				<td class="bordes letra padleft">SECCION</td>
				<td class="bordes letra padleft">CHACRA</td>
				<td class="bordes letra padleft">QUINTA</td>
				<td class="bordes letra padleft">FRACCION</td>
				<td class="bordes letra padleft">MANZANA</td>
				<td class="bordes letra padleft">PARCELA</td>

			</tr>
			<tr>
				<td colspan="2"></td>
				<td class="bordes letra texto" height="12"><b><?php nomenclatura($Fcir); ?></b></td>
				<td class="bordes letra texto"><b><?php nomenclatura($Fsec); ?></b></td>
				<td class="bordes letra texto"><b><?php nomenclatura($Fcha); ?></b></td>
				<td class="bordes letra texto"><b><?php nomenclatura($Fqui); ?></b></td>
				<td class="bordes letra texto"><b><?php nomenclatura($Ffra); ?></b></td>
				<td class="bordes letra texto"><b><?php nomenclatura($Fman); ?></b></td>
				<td class="bordes letra texto"><b><?php nomenclatura($Fpar); ?></b></td>
			</tr>
			<tr>
				<td class="bordes letra1"><b>3</b></td>
				<td class="bordes letra padleft" colspan="10"><b>UBICACION DE LA PARCELA</b></td>
			</tr>
			<tr>
				<td class="bordes letra padleft" colspan="8">CALLE: &nbsp;&nbsp; <b><?php echo $Fdomicilio;?></b></td>
				<td class="bordes letra padleft" colspan="3">N°: &nbsp;&nbsp; <b><?php echo $FnroCalle;?></b></td>
			</tr>
			<tr>
				<td class="bordes letra padleft" colspan="7">ENTRE/ESQ. CALLE: &nbsp;&nbsp; <b><?php echo $FesqCalle;?></b></td>
				<td class="bordes letra padleft" colspan="4">Y CALLE: &nbsp;&nbsp; <b><?php echo $FyCalle;?></b></td>
			</tr>
			<tr>
				<td class="bordes letra padleft" colspan="8">LOCALIDAD: &nbsp;&nbsp; <b><?php echo $Flocalidad;?></b></td>
				<td class="bordes letra padleft" colspan="3">COD. POSTAL: &nbsp;&nbsp; <b><?php echo $FcodigoPostal;?></b></td>
			</tr>
			<tr>
				<td class="bordes letra1"><b>4</b></td>
				<td class="letra texto" rowspan="2" colspan="1"><b>PARCELA <br> NOMINAL</b></td>
				<td class="bordes letra" rowspan="2" colspan="5">
					<div style="margin-top:-15px;font-size:10px!important;">DESCRIPCION SEGUN</div>
					<div style="margin-top:0px;font-size:12px!important;"><b><?php echo $Fdesct?></b></div>
				</td>
				<td class="bordes letra texto" height="12"><b><?php echo $Fcaract;?></b></td>
				<td class="bordes letra texto"><b><?php echo $Fpart;?></b></td>
				<td class="bordes letra texto"><b><?php echo $Forden;?></b></td>
				<td class="bordes letra texto"><b><?php echo $Fanio;?></b></td>
			</tr>
			<tr>
				<td></td>
				<td class="bordes letra texto padleft">CAR.</td>
				<td class="bordes letra texto padleft">PARTIDO</td>
				<td class="bordes letra texto padleft">N° DE ORDEN</td>
				<td class="bordes letra texto padleft">AÑO</td>
			</tr>
			<tr>
				<td class="bordetop" colspan="11">
				<div style="text-align:left;margin-left: 5px;margin-top:0px!important;font-size:10px;" class="letra">DESIGNACION DEL BIEN
				</div>
				</td>
			</tr>
			<tr>
				<td colspan="11" height="40">
					<div style="text-align:left;margin-left: 5px;font-size:11px;margin-top:-15px;">
						<?php
						echo nl2br($Fdesignacion);
							?>
					</div>
				</td>
			</tr>
			<tr>
				<td class="bordes letra" colspan="11">
					<div class="mar" style="text-align:left;margin-left: 5px;margin-top:0px!important;font-size:10px;">
						MEDIDAS, LINDEROS y SUPERFICIE
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="11" height="84">
					<div style="margin-left:5px!important;margin-top:0px;position:absolute;" class="letra"><?php echo nl2br($FmedidasPd);?></div>
				</td>
			</tr>
			<tr>
				<td class="bordes letra1"><b>5</b></td>
				<td class="bordes letra padleft" colspan="10"> <b>PARCELA CATASTRAL</b>  </td>
			</tr>
 			<tr>
				<td class="bordes1 letra" colspan="11">
					<div class="mar" style="text-align:left;margin-left: 5px;margin-top:0px!important;font-size:10px;">
						MEDIDAS, LINDEROS y SUPERFICIE
					</div>
				</td>
			</tr>
			<tr>
				<td class="letra" colspan="11" height="84">
					<div style="margin-left:5px!important;margin-top:0px;position:absolute;"><?php echo nl2br($FmedidasPc); ?></div>
				</td>
			</tr>
			<tr>
				<td class="bordes letra1"><b>6</b></td>
				<td class="bordes letra padleft" colspan="10"> <b>RESTRICCIONES Y AFECTACIONES</b>  </td>
			</tr>
			<tr>
				<td class="letra" colspan="11" height="84">
					<div style="margin-left:5px!important;margin-top:0px;position:absolute;"> <?php echo nl2br($FmedidasRA); ?></div>
				</td>
			</tr>
			<tr>
				<td class="bordes letra1"><b>7</b></td>
				<td class="bordes letra padleft" colspan="7"><b>DOMINIO - TITULAR</b></td>
				<td class="bordes letra texto padleft" colspan="3"><b>INSCRIPCION</b></td>
			</tr>
			<tr>
				<td class="bordes letra padleft" colspan="8">APELLIDO/S Y NOMBRES</td>
				<td class="bordes letra padleft"><b>TIPO</b></td>
				<td class="bordes letra padleft"><b>NUMERO</b></td>
				<td class="bordes letra padleft"><b>AÑO</b></td>
			</tr>
			<tr>
				<td class="bordes letra padleft" colspan="8" height="12"><b><?php echo $FcnombreApellido; ?></b></td>
				<td class="bordes letra padleft"><b><?php echo $Finscriptipo1;?></b></td>
				<td class="bordes letra padleft"><b><?php echo $Finscripnro1;?></b></td>
				<td class="bordes letra padleft"><b><?php echo $Finscripanio1;?></b></td>
			</tr>
			<tr>
				<td class="letra padleft" colspan="6" height="12">DOCUMENTO DE IDENTIDAD N°: &nbsp; <b><?php echo $Fcdni;?></b></td>
				<td class="letra padleft" colspan="2">TIPO: &nbsp;<b><?php echo $FctipoDni;?></b></td>
				<td class="bordes letra padleft"><b><?php echo $Finscriptipo2;?></b></td>
				<td class="bordes letra padleft"><b><?php echo $Finscripnro2;?></b></td>
				<td class="bordes letra padleft"><b><?php echo $Finscripanio2;?></b></td>
			</tr>
			<tr>
				<td class="bordes letra padleft" colspan="8" height="12">CALLE: &nbsp;&nbsp;<b><?php echo $Fccalle;?></b></td>
				<td class="bordes letra padleft"><b><?php echo $Finscriptipo3;?></b></td>
				<td class="bordes letra padleft"><b><?php echo $Finscripnro3;?></b></td>
				<td class="bordes letra padleft"><b><?php echo $Finscripanio3;?></b></td>
			</tr>
			<tr>
				<td class="letra padleft" colspan="4" height="12">N°: &nbsp;&nbsp;<b><?php echo $FcnroCalle;?></b></td>
				<td class="letra padleft">CUERPO: &nbsp;&nbsp;<b><?php echo $Fccuerpo?></b></td>
				<td class="letra padleft">PISO: &nbsp;&nbsp;<b><?php echo $Fcpiso?></b></td>
				<td class="letra padleft" colspan="2">DPTO.: &nbsp;&nbsp;<b><?php echo $Fcdpto?></b></td>
				<td class="bordes letra padleft"><b><?php echo $Finscriptipo4;?></b></td>
				<td class="bordes letra padleft"><b><?php echo $Finscripnro4;?></b></td>
				<td class="bordes letra padleft"><b><?php echo $Finscripanio4;?></b></td>
			</tr>
			<tr>
				<td class="bordet letra padleft" colspan="4" height="12">LOCALIDAD: &nbsp;&nbsp;<b><?php echo $Fclocalidad?></b></td>
				<td class="bordet letra padleft" colspan="2">PCIA.:&nbsp;&nbsp;<b><?php echo $Fcprovincia?></b></td>
				<td class="bordet letra padleft" colspan="2">C.P.:&nbsp;&nbsp;<b><?php echo $Fccp?></b></td>
				<td class="bordes letra padleft"><b><?php echo $Finscriptipo5;?></b></td>
				<td class="bordes letra padleft"><b><?php echo $Finscripnro5;?></b></td>
				<td class="bordes letra padleft"><b><?php echo $Finscripanio5;?></b></td>
			</tr>
			<tr>
				<td class="bordes letra1"><b>8</b></td>
				<td class="bordes letra padleft" colspan="10"><b>PLANOS ANTECEDENTES</b>&nbsp;&nbsp;<?php echo $FplanosAntA ?></td>
			</tr>
			<tr>
				<td class="letra" rowspan="3" colspan="3"> <b>
					<div class="marg">
						Registrado
					<div>	<p height="5">Legajo N°:&nbsp;&nbsp;.............................</p></div>
					<div>	<p height="5">Folio N°:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.............................</p></div>
					<div>	Fecha:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.............................</div>
					</div>
			</b> </td>
			<td class="bordes letra" align="center" width="2%" height="80"> <div class="textoinvertido"> Parcela  <br> <b style="font-size:12"> <?php echo $Fpar ?> </b>	</div> </td>
			<td class="bordes letra" align="center" width="2%"> <div class="textoinvertido"> Manzana  <br><b style="font-size:12"> <?php echo $Fman ?> </b>	</div></td>
			<td class="bordes letra" align="center" width="1%"> <div class="textoinvertido" > Fraccion  <br> <b style="font-size:12"> <?php echo $Ffra ?> </b></div> </td>
			<td class="bordes letra" align="center" width="1%"> <div class="textoinvertido" > Quinta  <br> <b style="font-size:12"> <?php echo $Fqui ?> </b></div></td>
			<td class="bordes letra" align="center" width="1%"> <div class="textoinvertido" > Chacra  <br> <b style="font-size:12"> <?php echo $Fcha ?> </b></div> </td>
			<td class="bordes letra" align="center" width="1%"> <div class="textoinvertido" > Seccion  <br> <b style="font-size:12"> <?php echo $Fsec ?> </b>	</div> </td>
			<td class="bordes letra" align="center" width="1%"> <div class="textoinvertido" > Circunsc.  <br> <b style="font-size:12"> <?php echo $Fcir ?> </b>	</div> </td>
			<td class="bordes letra" align="center" width="1%"> <div class="textoinvertido" > Partido  <br> <b style="font-size:12"> <?php echo $FcodPartido ?> </b>	</div> </td>
			</tr>
		</table>
		 <div style="page-break-after:always;"></div>
		<div class="tabla2">
		<table class="tabla1">
			<tr>
				<td class="bordes letra1" width="3%"><b>9</b></td>
				<td class="letra" colspan="5" rowspan="2" style="padding-left:5px;padding-top:-10px;"> <b>CROQUIS DE LA PARCELA CATASTRAL</b></td>
				<td colspan="8"></td>
			</tr>
			<tr>
				<td colspan="6"></td>
				<td class="letra2" colspan="8">(CON SUS MEDIDAS LINEALES, SUPERFICIE Y LINDEROS)</td>
			</tr>
			<tr>
				<td class="bordes" colspan="14" height="350">

				</td>
			</tr>
			<tr>
				<td class="bordes letra1" height="12" width="3%"><b>10</b></td>
				<td class="bordes letra3 padleft"><b>INFRAESTRUCTURA:</b></td>
				<td class="bordes letra3 padleft" width="1%">PAVIMENTO</td>
				<td class="bordes letra padleft" width="4%"><b><?php checkbox($FinfraP) ?></b></td>
				<td class="bordes letra3 padleft" width="3%">ALUMBRADO</td>
				<td class="bordes letra padleft" width="4%"><b><?php checkbox($FinfraA) ?></b></td>
				<td class="bordes letra3 padleft" width="3%">E. ELECTRICA</td>
				<td class="bordes letra padleft" width="4%"><b><?php checkbox($FinfraL) ?></b></td>
				<td class="bordes letra3 padleft" width="3%">AGUA CORRIENTE</td>
				<td class="bordes letra padleft" width="4%"><b><?php checkbox($FinfraAg)?></b></td>
				<td class="bordes letra3 padleft" width="3%">CLOACAS</td>
				<td class="bordes letra padleft" width="4%"><b><?php checkbox($FinfraC)?></b></td>
				<td class="bordes letra3 padleft" width="3%">GAS</td>
				<td class="bordes letra padleft" width="4%"><b><?php checkbox($FinfraG)?></b></td>
			</tr>
			<tr>
				<td class="bordes letra1" height="12" width="3%"><b>11</b></td>
				<td class="bordes letra padleft" colspan="2"><b>DOMICILIO POSTAL: &nbsp;&nbsp;</b></td>
				<td class="bordes letra padleft" colspan="11">DESTINATARIO: &nbsp;&nbsp;<b><?php echo $FdnombreApellido;?></b></td>
			</tr>
			<tr>
			  <td class="letra padleft" colspan="3">CALLE:&nbsp;<b><?php echo $Fdcalle?></b></td>
			  <td class="letra" colspan="2">N°:&nbsp;<b><?php echo $FdnroCalle?></b></td>
			  <td class="letra" colspan="3">CUERPO:&nbsp;<b><?php echo $Fdcuerpo?></b></td>
			  <td class="letra" colspan="3">PISO:&nbsp;<b><?php echo $Fdpiso?></b></td>
			  <td class="letra" colspan="3">DPTO.:&nbsp;<b><?php echo $Fddpto?></b></td>
			</tr>
			<tr>
			  <td class="bordet letra padleft" colspan="6">LOCALIDAD:&nbsp;&nbsp;<b><?php echo $Fdlocalidad?></b></td>
			  <td class="bordet letra" colspan="4">PCIA.:&nbsp;&nbsp;<b><?php echo $Fdprovincia?></b></td>
			  <td class="bordet letra" colspan="4">C.P.:&nbsp;&nbsp;<b><?php echo $Fdcp?></b></td>
			</tr>
			<tr>
			  <td class="bordes letra1" width="3%"><b>12</b></td>
			  <td class="bordes letra padleft" colspan="13"><b>ANTECEDENTES DE EMPADRONAMIENTO</b></td>
			</tr>
			<tr>
				<td></td>
			  <td class="letra pad">ORIGENES</td>
			  <td class="bordes letra texto"><b><?php echo $FedificioA;?></b></td>
			  <td class="bordes letra texto"><b><?php echo $FedificioB;?></b></td>
				<td class="bordes letra texto"><b><?php echo $FedificioC;?></b></td>
				<td class="bordes letra texto"><b><?php echo $FedificioD;?></b></td>
				<td class="bordes letra texto"><b><?php echo $FedificioE;?></b></td>
				<td class="bordes letra texto"><b><?php echo $FedificioF;?></b></td>
				<td class="bordes letra texto"><b><?php echo $FedificioG;?></b></td>
				<td class="bordes letra texto"><b><?php echo $FedificioH;?></b></td>
				<td class="bordes letra texto"><b><?php echo $FedificioI;?></b></td>
				<td class="bordes letra texto" colspan="3"><b><?php echo $FedificioJ;?></b></td>
			</tr>
			<tr>
			  <td class="bordes letra1" width="3%"><b>13</b></td>
			  <td class="bordes letra padleft" colspan="13"><b>VALUACION BASICA</b></td>
			</tr>
			<tr>
			  <td class="bordes letra padleft" colspan="2">TIERRA</td>
			  <td class="bordes letra padleft" colspan="4">EDIFICIOS</td>
			  <td class="bordes letra padleft" colspan="4">MEJORAS</td>
			  <td class="bordes letra padleft" colspan="4">TOTAL</td>
			</tr>
			<tr>
			  <td class="bordes letra texto" colspan="2" height="12"><b><?php if($Ftierra >0){ echo number_format($Ftierra,0,',','.');}?></b></td>
			  <td class="bordes letra texto" colspan="4"><b><?php if($Fedificio >0){echo number_format($Fedificio,0,',','.');}?></b></td>
			  <td class="bordes letra texto" colspan="4"><b><?php if($Fmejora >0){echo number_format($Fmejora,0,',','.');}?></b></td>
			  <td class="bordes letra texto" colspan="4"><b><?php if($Ftotal >0){echo number_format($Ftotal,0,',','.');}?></b></td>
			</tr>
			<tr>
			  <td class="bordes letra1" width="3%"><b>14</b></td>
			  <td class="bordes letra padleft" colspan="6"><b>OBSERVACIONES</b><br></td>
			  <td class="bordes letra padleft" colspan="7"><b>FIRMA Y SELLO DEL PROFESIONAL</b></td>
			</tr>
			<tr>
			  <td class="bordes letra" colspan="7" rowspan="2" height="40"><div style="margin-top:-10px;"><?php echo nl2br($FmedidasO)?></div></td>
			  <td class="sinbordes letra" colspan="7"></td>
			</tr>
			<tr>
				<td class="letra" valign="bottom" style="font-size:11px"> DNI: </td>
				<td class="letra" valign="bottom" colspan="2" style="font-size:11px"> <?php echo $Fpdni ?> </td>
				<td class="letra" valign="bottom" style="font-size:11px"> CUIT: </td>
				<td class="letra" valign="bottom" colspan="3" style="font-size:11px"> <?php echo $Fpcuit ?> </td>
			</tr>
			<tr>
			  <td class="bordes letra1" width="3%"><b>15</b></td>
			  <td class="bordes letra padleft" colspan="13"><b>MONTO IMPONIBLE</b></td>
			</tr>
			<tr>
			  <td class="bordes letra" colspan="3" height="50">
			    <div class="textoalineado">PARA IMPUESTO INMOBILIARIO</div>
			  </td>
			  <td class="bordes letra" colspan="5">
			    <div class="textoalineado">PARA IMPUESTO DE SELLOS</div>
			  </td>
			  <td class="bordes letra" colspan="6">
			    <div class="textoalineado">OTROS</div>
			  </td>
			</tr>
			<tr>
			  <td class="bordes letra1 w"><b>16</b></td>
			  <td class="bordes letra padleft" colspan="5"><b>CARACTERISTICAS TRIBUTARIAS</b></td>
			  <td class="bordes letra" colspan="8" style="text-align:center;"><b>EFECTIVIDAD</b></td>
			</tr>
			<tr>
				<td></td>
				<td class="letra pad">CODIGO</td>
				<td class="bordes letra"></td>
				<td class="bordes letra" colspan="3"></td>
				<td class="bordes letra padleft" colspan="4">MES</td>
				<td class="bordes letra padleft" colspan="4">AÑO</td>
			</tr>
			<tr>
				<td class="bordes letra1"><b>17</b></td>
				<td class="bordes letra padleft" colspan="13"><b>OBSERVACIONES</b></td>
			</tr>
			<tr>
				<td class="bordes letra" colspan="14" height="40"></td>
			</tr>
			<tr>
			  <td class="bordes letra1" width="3%"><b>18</b></td>
			  <td class="letra padleft" colspan="6"><b>LUGAR Y FECHA DE LA EXPEDICION</b></td>
			  <td class="letra" colspan="7"><b>FIRMA AUTORIZADA Y SELLO</b></td>
			</tr>
			<tr>
				<td class="bordes letra" colspan="14" height="50"></td>
			</tr>

		</table>
		<img src="img/cedula10707.png" alt="">
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
	$filename = "PDFcedula10707.pdf";
	$dompdf->stream($filename, array("Attachment" => 0));
?>
