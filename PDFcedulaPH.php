<?php
include("sesion.php");
	$pagina='PDFcedulaPHP';
	include("sql/conexion.php");
	include("seguridadForm.php");
	require_once 'lib/pdf/autoload.inc.php';
	ob_start();
	$idCedula=$_REQUEST['idCedulaPH'];
	$idObraUnidadFuncional=$_REQUEST['idObraUnidadFuncional'];
	$rubro3 = $_REQUEST['rubro3'];
	$rubro6 = $_REQUEST['rubro6'];
	$rubro7 = $_REQUEST['rubro7'];
	include ("sql/mostrarUnidadesFuncionales.php");
	include ("sql/mostrarCedulaPH.php");
	include ("sql/mostrarDatosObra.php");


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
	//$aa = 1;
	//$ab = 0;
//	$ac = 0;
	function inputcheckbox($dato) {
		if($dato==1){
			echo '<input type="radio" value="1" checked>';
		} else {
				echo '<input type="radio" value="0">';
		}
		return $dato;
	}
	function formatonumero_Vhuggi($dato){
		if ($dato !=0) {
			 echo number_format($dato, 0, ',', '.');
		}else {
			echo "";
		}
	}
	function formatonumero($dato){
		if ($dato !=0) {
			 echo number_format($dato, 2, ',', '.');
		}else {
			echo "";
		}
	}
	function formatonum($dato){
		if ($dato !=0) {
			 echo number_format($dato);
		}else {
			echo "";
		}
	}
	function Ffecha($fecha){
		$fecha1 = date_format (new DateTime($fecha), 'Y');
		if($fecha1 < 0000){
			echo "";
		}else{
		echo date_format(new DateTime($fecha), 'd/m/Y');
		}
	}
	if ($rubro3 == 1) {
		$R3Localidad = "";
		$R3nombreapellido = "";
		$R3tipoobra = "";
		$R3tipodni = "";
		$R3dni = "";
		$R3calle = "";
		$R3nrocalle = "";
		$R3cuerpo = "";
		$R3piso = "";
		$R3dpto = "";
		$R3localidad1 = "";
		$R3provincia = "";
		$R3cp = "";
		} else {
		$R3Localidad = $Fdlocalidad;
		$R3nombreapellido = $FfnombreApellido;
		$R3tipoobra = $FtipoObra;
		$R3tipodni = $FftipoDni;
		$R3dni = $Ffdni;
		$R3calle = $Fdcalle;
		$R3nrocalle = $FdnroCalle;
		$R3cuerpo = $Fdcuerpo;
		$R3piso = $Fdpiso;
		$R3dpto = $Fddpto;
		$R3localidad1 = $Flocalidad;
		$R3provincia = $Fdprovincia;
		$R3cp = $Fdcp;
	}
	if ($rubro6 == 1) {
		$R6nombreApellido = "";
		$R6calle = "";
		$R6nrocalle = "";
		$R6cuerpo = "";
		$R6piso = "";
		$R6dpto = "";
		$R6localidad = "";
		$R6provincia = "";
		$R6cp = "";
		}else{
		$R6nombreApellido = $FdnombreApellido;
		$R6calle = $Fdcalle;
		$R6nrocalle = $FdnroCalle;
		$R6cuerpo = $Fdcuerpo;
		$R6piso = $Fdpiso;
		$R6dpto = $Fddpto;
		$R6localidad = $Fdlocalidad;
		$R6provincia = $Fdprovincia;
		$R6cp = $Fdcp;
	}
	if ($rubro7 == 1) {
		$R7tierra = "";
		$R7vpropio = "";
		$R7vcomun = "";
		$R7totedificio = "";
		$R7tot = "";
		}else {
		$R7tierra = $Ftierra;
		$R7vpropio = $Fvpropio;
		$R7vcomun = $Fvcomun;
		$R7totedificio = $totedificio;
		$R7tot = $tot;
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
			.divtabla2{
				margin-top: auto;
				padding-top: 16px;
			}
			.letra{
				font-size: 12px;
			}
			.letra1{
				font-size: 13px;
			}
			.tabla2{
				table-layout: fixed;
				width: 100%;
				border-collapse: collapse;
				border: 1px solid black;
			}
			.tabla1{
				table-layout: fixed;
				width: 100%;
				border-collapse: collapse;
				border: 3px solid black;
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
			.textoinvertido {
				-webkit-transform: rotate(90deg);
			}
			.marg{
				margin-top: 0px;
				margin-left: 5px;
			}
			.tabla2{
				margin-top: auto;
				padding-top: 16px;
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
				text-align: center;
			}
			.w{
				width: 3%!important;
			}
			img{
				width: 2.5%;
				margin-left: -15.5px;
				margin-top: -203px;
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
				padding-left: -20px;
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
				margin-top: 50px;
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
			.letra6{
					font-size: 10px;
			}
			.letra5{
				font-size: 11px;
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
		<table class="tabla1">
			<tr>
				<td class="letra" colspan="6">
					<div class="mar">
						<b>
						PROVINCIA DE BUENOS AIRES
						<br>
						MINISTERIO DE ECONOMIA
						<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;
						D.P.C.T.
						</b>

					</div>

				</td>
				<td class="letra" colspan="6">
					<b><h3>CEDULA CATASTRAL DE PROPIEDAD HORIZONTAL</h3></b>
				</td>
				<td></td>
			</tr>
			<tr>
				<td class="letra1" colspan="9" height="13"></td>
				<td class="borde letra" colspan="2">&nbsp;HOJA &nbsp;&nbsp;<b><?php //echo $Fhoja; ?></b></td>
				<td class="borde letra" colspan="2">&nbsp;DE &nbsp;&nbsp;<b><?php //echo $FcantHoja; ?></b></td>
			</tr>
			<tr>
				<td class="bordes letra1" width="3%" height="15">&nbsp;<b>1</b></td>
				<td class="bordes letra" colspan="9">&nbsp;PARTIDO &nbsp;&nbsp;<?php echo "(";echo $FcodPartido;echo ")&nbsp;<b>"; echo $Fpartido; ?></b> </td>
				<td class="bordes letra" colspan="3">&nbsp;PARTIDA &nbsp;&nbsp;<b><?php echo $Fpartida; ?></b></td>
			</tr>
			<tr>
				<td class="borderegist letra1" height="15">&nbsp;<b>2</b></td>
				<td class="borderegis letra" style="text-align:left;" rowspan="2" colspan="2"><b>NOMENCLATURA <br>CATASTRAL</b></td>
				<td class="borderegis texto letra6" colspan="2">CIRCUNSCR.</td>
				<td class="borderegis texto letra6">SECCION</td>
				<td class="borderegis texto letra6">CHACRA</td>
				<td class="borderegis texto letra6">QUINTA</td>
				<td class="borderegis texto letra6">FRACCION</td>
				<td class="borderegis texto letra6">MANZANA</td>
				<td class="borderegis texto letra6">PARCELA</td>
				<td class="borderegis texto letra6" colspan="2">SUBPARCELA</td>
			</tr>
			<tr>
				<td></td>
				<td class="bordes letra texto" height="15" colspan="2"><b><?php nomenclatura($Fcir); ?></b></td>
				<td class="bordes letra texto"><b><?php nomenclatura($Fsec); ?></b></td>
				<td class="bordes letra texto"><b><?php nomenclatura($Fcha); ?></b></td>
				<td class="bordes letra texto"><b><?php nomenclatura($Fqui); ?></b></td>
				<td class="bordes letra texto"><b><?php nomenclatura($Ffra); ?></b></td>
				<td class="bordes letra texto"><b><?php nomenclatura($Fman); ?></b></td>
				<td class="bordes letra texto"><b><?php nomenclatura($Fpar); ?></b></td>
				<td class="bordes letra texto" colspan="2"><b><?php nomenclatura($Fsub); ?></b></td>
			</tr>
			<tr>
				<td class="borderegis letra1" height="12">&nbsp;<b>3</b></td>
				<td class="borderegis letra" colspan="12">&nbsp;<b>DOMINIO</b></td>
			</tr>
			<tr>
				<td class="bordes letra" rowspan="4" colspan="8">
					<div class="titular">TITULAR/ES - APELLIDO/S Y NOMBRE/S:</div>
					<br>
					<div class="titu letra">&nbsp;<b><?php echo $R3nombreapellido ?></b></div>
				</td>
				<td class="bordes letra texto" height="10">TIPO</td>
				<td class="bordes letra texto" colspan="4">INSCRIPCION</td>
			</tr>
			<tr>
				<td class="bordes letra texto" height="12"><b><?php echo $FinscripTipo ?></b></td>
				<td class="bordes letra texto" colspan="4"><b><?php echo $FinscripNro ?></b></td>
			</tr>
			<tr>
				<td class="bordes letra texto" height="10">TIPO</td>
				<td class="bordes letra texto" colspan="4">DOCUMENTO DE IDENTIDAD</td>
			</tr>
			<tr>
				<td class="bordes letra texto" height="12"><b><?php echo $R3tipodni ?></b> </td>
				<td class="bordes letra texto" colspan="4"><b><?php echo $R3dni ?></b> </td>
			</tr>
			<tr>
				<td></td>
				<td class="letra pad bordederecho" height="15">DOMICILIO</td>
				<td class="letra" colspan="3">&nbsp;CALLE:&nbsp;<b><?php echo $R3calle?></b></td>
			 <td class="letra" colspan="2">N°:&nbsp;&nbsp;<b><?php echo $R3nrocalle?></b></td>
			 <td class="letra" colspan="2">CUERPO:&nbsp;&nbsp;<b><?php echo $R3cuerpo?></b></td>
			 <td class="letra" colspan="2">PISO:&nbsp;&nbsp;<b><?php echo $R3piso?></b></td>
			 <td class="letra" colspan="2">DPTO.:&nbsp;&nbsp;<b><?php echo $R3dpto?></b></td>
			</tr>
			<tr>
				<td class="bordet letra padleft" colspan="6" height="15">LOCALIDAD:&nbsp;&nbsp;<b><?php echo $R3localidad1?></b></td>
				<td class="bordet letra" colspan="4">PCIA.:&nbsp;&nbsp;<b><?php echo $R3provincia?></b></td>
				<td class="bordet letra" colspan="3">C.P.:&nbsp;&nbsp;<b><?php echo $R3cp ?></b></td>
			</tr>
			<tr>
				<td class="borderegis letra1 padleft" height="15"><b>4</b></td>
				<td class="borderegis letra padleft" colspan="12"><b>DESCRIPCION DEL INMUEBLE</b></td>
			</tr>
			<tr>
				<td class="bordes letra padleft" colspan="6" height="15" style="font-size:11.5px">DESIGNACION SEGUN PLANO:<b><?php echo $Fplano?><br><?php echo $FestadoNro?>&nbsp;<?php echo $Festado ?></b></td>
				<td class="bordes letra padleft">PH <?php a($Fph) ?></td>
				<td class="bordes letra padleft">PDO.<b><?php echo $Fcpartido?></b></td>
				<td class="bordes letra padleft">N°<b><?php echo $Fnro1?></b></td>
				<td class="bordes letra padleft">AÑO:<b><?php echo $Fanio?></b></td>
				<td class="bordes letra padleft" colspan="3">APROBADO EL:&nbsp;<b><?php Ffecha($FfechaAprob); ?></b></td>
			</tr>
			<tr>
				<?php if ($FunUF == 2){ ?>
				<td class="bordes letra padleft" colspan="7" height="15">UNIDAD FUNCIONAL / <s>U. COMPLEMENTARIA</s>:&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $FcantUF;?></b></td>
			<?php } else { ?>
				<td class="bordes letra padleft" colspan="7" height="15"><s>UNIDAD FUNCIONAL</s> / U. COMPLEMENTARIA:&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $FcantUF;?></b></td>
			<?php } ?>
				<td class="bordes padleft" colspan="2"><?php inputcheckbox($FaCon) ?><div class="inputcheck texto letra3">A CONSTRUIR </div></td>
				<td class="bordes padleft" colspan="2"><?php inputcheckbox($FeCon) ?><div class="inputcheck texto letra3">EN CONSTRUCC.</div></td>
				<td class="bordes padleft" colspan="2"><?php inputcheckbox($Fcons) ?><div class="inputcheck texto letra3">CONSTRUIDO </div></td>
			</tr>
			<tr>
				<td class="bordes letra padleft" colspan="13" height="15">POLIGONOS QUE LA INTEGRAN:&nbsp;&nbsp;&nbsp;<b><?php echo $Fopol ?></b></td>
			</tr>
			<tr>
				<td class="bordes letra5" colspan="4" height="15">SUPERFICIE TOTAL:<b><?php echo $Fotpol; ?></b></td>
				<td class="bordes letra5" colspan="2">CUB.:<b><?php formatonumero($Focub); ?></b></td>
				<td class="bordes letra5" colspan="2">SEMICUB.:<b><?php formatonumero($Foscub); ?></b></td>
				<td class="bordes letra5" colspan="2">DESCUB.:<b><?php formatonumero($Fodescub); ?></b></td>
				<td class="bordes letra5" colspan="2">BALCON:<b><?php formatonumero($Fobal); ?></b></td>
				<td class="bordes letra5" >OTRA:<b><?php formatonumero($otros); ?></b></td>
			</tr>
			<tr>
				<td class="borderegis letra1 padleft" height="15"><b>5</b></td>
				<td class="borderegis letra padleft" colspan="12"><b>RESTRICCIONES Y AFECTACIONES</b></td>
			</tr>
			<tr>
				<td class="bordes letra padleft" colspan="13" height="60">
						<p style="margin-left:5px!important;margin-top:0px!important;font-size:12px;"><?php echo nl2br($FmedidasRA) ?></p>
				</td>
			</tr>
			<tr>
				<td class="borderegis letra1 padleft" height="15"><b>6</b></td>
				<td class="borderegis letra padleft" colspan="12"><b>DOMICILIO POSTAL</b></td>
			</tr>
			<tr>
				<td class="bordes letra padleft" colspan="13" height="15">DESTINATARIO&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $R6nombreApellido;?></b></td>
			</tr>
			<tr>
				<td></td>
				<td class="letra pad" colspan="4" height="15">&nbsp;CALLE:&nbsp;&nbsp;<b><?php echo $R6calle?></b></td>
				<td class="letra" colspan="2">N°:&nbsp;&nbsp;<b><?php echo $R6nrocalle?></b></td>
			 	<td class="letra" colspan="2">CUERPO:&nbsp;&nbsp;<b><?php echo $R6cuerpo?></b></td>
			 	<td class="letra" colspan="2">PISO:&nbsp;&nbsp;<b><?php echo $R6piso?></b></td>
				<td class="letra" colspan="2">DPTO.:&nbsp;&nbsp;<b><?php echo $R6dpto?></b></td>
			</tr>
			<tr>
				<td class="bordet letra padleft" colspan="6" height="15">LOCALIDAD:&nbsp;&nbsp;<b><?php echo $R6localidad?></b></td>
				<td class="bordet letra" colspan="4">PCIA.:&nbsp;&nbsp;<b><?php echo $R6provincia?></b></td>
				<td class="bordet letra" colspan="3">C.P.:&nbsp;&nbsp;<b><?php echo $R6cp?></b></td>
			</tr>
			<tr>
				<td class="borderegis letra1 padleft" height="15"><b>7</b></td>
				<td class="borderegis letra padleft" colspan="7"><b>VALUACION BASICA DE LA SUBPARCELA</b></td>
				<td class="borderegis letra texto" colspan="5"><b>FIRMA Y SELLO DEL PROFESIONAL</b></td>
			</tr>
			<tr>
			  <td class="bordes letra texto" rowspan="2" colspan="3" height="15">VALOR TIERRA</td>
			  <td class="bordes letra texto" colspan="3">VALOR EDIFICIO</td>
			  <td class="bordes letra texto" rowspan="2" colspan="2">VALOR TOTAL SUBPARCELA</td>
			  <td class="sinbordes letra texto" rowspan="2" colspan="5" style="border-top-style:solid !important;border:1px"></td>
			</tr>
			<tr>
			  <td class="bordes letra" height="15">PROPIO</td>
			  <td class="bordes letra texto">COMUN</td>
			  <td class="letra texto">TOTAL</td>
			</tr>
			<tr>
			  <td class="bordes letra" height="20" colspan="3"><center><b><?php formatonumero_Vhuggi($R7tierra); ?></b></center></td>
			  <td class="bordes letra"><center><b><?php formatonumero_Vhuggi($R7vpropio); ?></b></center></td>
			  <td class="bordes letra"><center><b><?php formatonumero_Vhuggi($R7vcomun); ?></b></center></td>
			  <td class="bordes letra"><center><b><?php formatonumero_Vhuggi($R7totedificio); ?></b></center></td>
			  <td class="bordes letra" colspan="2"><center><b><?php formatonumero_Vhuggi($R7tot); ?></b></center></td>
				<td class="letra" valign="bottom" style="font-size:11px"> DNI: </td>
				<td class="letra" valign="bottom" style="font-size:11px"> <?php echo $Fpdni ?> </td>
				<td class="letra" valign="bottom" style="font-size:11px"> CUIT: </td>
				<td class="letra" valign="bottom" colspan="2" style="font-size:11px"> <?php echo $Fpcuit ?> </td>
			</tr>
			<tr>
			  <td class="borderegis letra1" width="3%" height="25"><b>&nbsp;8</b></td>
			  <td class="borderegis letra" colspan="3"> <b>&nbsp;MONTO IMPONIBLE</b> </td>
			  <td class="borderegis letra texto top" colspan="3">IMPUESTO INMOBILIARIO</td>
			  <td class="borderegis letra texto top" colspan="3">IMPUESTO DE SELLOS</td>
			  <td class="borderegis letra texto top" colspan="3">OTROS</td>
			</tr>
			<tr>
				<td class="bordes letra1" width="3%"><b>&nbsp;9</b></td>
				<td class="bordes letra" colspan="7"><b>&nbsp;CARACTERISTICAS TRIBUTARIAS</b></td>
				<td class="bordes letra texto" colspan="5"><b>&nbsp;EFECTIVIDAD</b></td>
			</tr>
			<tr>
				<td class="bordebotom"></td>
				<td class="bordebotom letra pad"><b>CODIGO</b></td>
				<td class="bordes letra"></td>
				<td class="bordes letra" colspan="5"></td>
				<td class="bordes letra" colspan="2">&nbsp;MES:</td>
				<td class="bordes letra" colspan="3">&nbsp;AÑO:</td>
			</tr>
			<tr>
				<td class="bordes letra1 padleft" width="3%"><b>10</b></td>
				<td class="bordeder letra padleft" colspan="6"><b>OBSERVACIONES</b></td>
				<td class="letra padleft" colspan="6"></td>
			</tr>
			<tr>
				<td class="bordederecho letra padleft" colspan="7" height="50">
					<div class="letra3 observaciones">LUGAR Y FECHA DE LA EXPEDICION</div>
				</td>
				<td class="letra padleft" colspan="6">
					<div class="letra3 observaciones">FIRMA AUTORIZADA Y SELLO</div>
				</td>
			</tr>
			<tr>
				<td class="borderegist letra1 padleft" width="3%"><b>11</b></td>
				<td class="borderegis letra padleft" colspan="12"><b>OBSERVACIONES PARA EL PROFESIONAL</b></td>
			</tr>
			<tr>
				<td class="letra" colspan="13" height="40">
					<p style="margin-left:5px!important;margin-top:0px!important;font-size:12px;"><?php echo nl2br($FmedidasOp) ?></p>
				</td>
			</tr>
			<tr>
				<td class="borderegis letra1" colspan="4">
					<b>
						<div class="marg">REGISTRADO</div>
							&nbsp;Legajo N°:<br>
							&nbsp;Folio N°:<br>
							&nbsp;Fecha:

					</b>
				</td>
				<td class="borderegis letra" align="center"><div class="textoinvertido">SubParcela<br><b style="font-size:12"><?php nomenclatura($Fsub);?></b></div></td>
				<td class="borderegis letra" align="center"><div class="textoinvertido">Parcela<br><b style="font-size:12"><?php nomenclatura($Fpar);?></b></div></td>
				<td class="borderegis letra" align="center"><div class="textoinvertido">Manzana<br><b style="font-size:12"><?php nomenclatura($Fman);?></b></div></td>
				<td class="borderegis letra" align="center"><div class="textoinvertido">Fraccion<br><b style="font-size:12"><?php nomenclatura($Ffra);?></b></div></td>
				<td class="borderegis letra" align="center"><div class="textoinvertido">Quinta<br><b style="font-size:12"><?php nomenclatura($Fqui);?></b></div></td>
				<td class="borderegis letra" align="center"><div class="textoinvertido">Chacra<br><b style="font-size:12"><?php nomenclatura($Fcha);?></b></div></td>
				<td class="borderegis letra" align="center"><div class="textoinvertido">Seccion<br><b style="font-size:12"><?php nomenclatura($Fsec);?></b></div></td>
				<td class="borderegis letra" align="center"><div class="textoinvertido">Circunsc.<br><b style="font-size:12"><?php nomenclatura($Fcir);?></b></div></td>
				<td class="borderegis letra" align="center"><div class="textoinvertido">Partido<br><b style="font-size:12"><?php nomenclatura($FcodPartido);?></b></div></td>
			</tr>
		</table>
			<img src="img/cedulaph.png" alt="">

			<div class="divtabla2"><p class="textoalineado" style="font-size:14px;"> <b>ANEXO</b></p>
			<table class="tabla2">
				<tr>
					<td height='90%' class="letra1">
						<br>
							<div style="margin-left:5px!important;margin-top:0px;position:absolute;"><?php echo nl2br($Fanexo); ?></div></td>
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
	$filename = "PDFcedulaPH.pdf";
	$dompdf->stream($filename, array("Attachment" => 0));
?>
