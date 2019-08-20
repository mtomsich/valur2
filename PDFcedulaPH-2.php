<?php
include("sesion.php");
	$pagina='PDFcedula2PHP';
	include("sql/conexion.php");
	include("seguridadForm.php");
	require_once 'lib/pdf/autoload.inc.php';
	ob_start();

	$idCedula =$_REQUEST['idCedulaPH'];
	include("sql/mostrarCedulaPH.php");
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
				border: 1px solid black;
			}
			.tabla1{
					table-layout: fixed;
				width: 100%;
				padding-top: 0px;
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
			.textoinvertido {
				-webkit-transform: rotate(90deg);
			}
			.marg{
				margin-top: -60px;
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
				width: 2%;
				margin-left: -14px;
				margin-top: -315px;
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
			.anexo{
				text-align: center;
				font-size: 12px;
			}
			.ane{
				margin-left: 325px;
				padding-top: -15px;
			}
			.textol{
				text-align: left;
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
		</style>
	</head>
	<body>
		<div class="anexo">ANEXO I</div>
		<table class="tabla1">
			<tr>
				<td class="letra" colspan="5">
					<div class="mar">
						PROVINCIA DE BUENOS AIRES
						<br>
						MINISTERIO DE ECONOMIA
					</div>

				</td>

				<td class="letra4" colspan="7">
					<h3>CEDULA CATASTRAL DE PROPIEDAD HORIZONTAL</h3>
					<div class="ane"><b>ANEXO</b></div>
				</td>

			</tr>
			<tr>
				<td class="letra1" colspan="9" height="20">
					<div class="mar">DIRECCION PROVINCIAL CATASTRO TERRITORIAL </div>
				</td>
				<td></td>
				<td class="borde letra padleft" >HOJA &nbsp;&nbsp;<b></b></td>
				<td class="borde letra padleft">DE &nbsp;&nbsp;<b></b></td>
			</tr>
			<tr>
				<td class="bordes letra1" width="3%"><b>1</b></td>
				<td class="bordes letra padleft" colspan="7">PARTIDO &nbsp;&nbsp;<?php echo "(";echo $FcodPartido;echo ")&nbsp;<b>"; echo $Fpartido; ?></b> </td>
				<td class="bordes letra padleft" colspan="4">PARTIDA &nbsp;&nbsp;<b><?php echo $Fpartida; ?></b></td>
			</tr>
			<tr>
				<td class="bordes letra1"><b>2</b></td>
				<td class="letra textol" rowspan="2" colspan="3" width="10%"><b>NOMENCLATURA <br>CATASTRAL</b></td>
				<td class="bordes letra2 " width="4.3%">CIRCUNSCR.</td>
				<td class="bordes letra2 " width="3.4%">SECCION</td>
				<td class="bordes letra2 " width="3%">CHACRA</td>
				<td class="bordes letra2 " width="3%">QUINTA</td>
				<td class="bordes letra2 " width="4%">FRACCION</td>
				<td class="bordes letra2 " width="4%">MANZANA</td>
				<td class="bordes letra2 " width="4%">PARCELA</td>
				<td class="bordes letra2 " width="4%">SUBPARCELA</td>
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
				<td class="bordes letra texto"><b><?php nomenclatura($Fsub); ?></b></td>
			</tr>
			<tr>
				<td class="bordes" colspan="12" height="520">
					<br>
					<div class="letra1" style="margin-left:5px!important;margin-top:0px;position:absolute;"><?php echo nl2br($FampAnexo); ?></div>

					</div>
				</td>
			</tr>
			<tr>
				<td class="letra" rowspan="3" colspan="3" width="10%">
					<b>
						<div class="marg">
							Registrado
							<div style="padding-top:-5px;">	<p height="5">Legajo N°:&nbsp;&nbsp;</p></div>
							<div>	<p height="5">Folio N°:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></div>
							<div>	<p height="5">Fecha:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></div>
						</div>
					</b>
				</td>
			<td class="bordes letra" align="center" width="3%" height="110"><p class="textoinvertido" >Subparcela  <br><br> <b style="font-size:12"> <?php echo $Fsub ?> </b>	</p> </td>
			<td class="bordes letra" align="center" width="3%"> <p class="textoinvertido" > Parcela  <br><br> <b style="font-size:12"> <?php echo $Fpar ?> </b>	</p> </td>
			<td class="bordes letra" align="center" width="3%"> <p class="textoinvertido" > Manzana  <br><br> <b style="font-size:12"> <?php echo $Fman ?> </b>	</p> </td>
			<td class="bordes letra" align="center" width="3%"> <p class="textoinvertido" > Fraccion  <br><br> <b style="font-size:12"> <?php echo $Ffra ?> </b>	</p> </td>
			<td class="bordes letra" align="center" width="2.5%"> <p class="textoinvertido" > Quinta  <br><br> <b style="font-size:12"> <?php echo $Fqui ?> </b>	</p> </td>
			<td class="bordes letra" align="center" width="3.5%"> <p class="textoinvertido" > Chacra  <br><br> <b style="font-size:12"> <?php echo $Fcha ?> </b>	</p> </td>
			<td class="bordes letra" align="center" width="3.5%"> <p class="textoinvertido" > Seccion  <br><br> <b style="font-size:12"> <?php echo $Fsec ?> </b>	</p> </td>
			<td class="bordes letra" align="center" width="3.5%"> <p class="textoinvertido" > Circunsc.  <br><br> <b style="font-size:12"> <?php echo $Fcir ?> </b>	</p> </td>
			<td class="bordes letra" align="center" width="4.5%"> <p class="textoinvertido" > Partido  <br><br> <b style="font-size:12"> <?php echo $FcodPartido ?> </b>	</p> </td>
			</tr>
		</table>
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
  $filename = "PDFcedulaPH-2.pdf";
  $dompdf->stream($filename, array("Attachment" => 0));
?>
