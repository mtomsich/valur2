<?php
	include("sesion.php");
	$pagina='PDFform9081PHP';
	include("sql/conexion.php");
	include("seguridadForm.php");

	require_once 'lib/pdf/autoload.inc.php';
	ob_start();
	include ("sql/mostrarDatosObra.php");
	$idForm = $_GET['idform'];
	$cons_form = mysqli_fetch_array(mysqli_query($conexion, "SELECT * FROM `form908` WHERE `codForm908` = $idForm"));
	$cons_ufs = mysqli_query($conexion, "SELECT * FROM `f908unidadesfuncionales` WHERE `idForm908` = $idForm");
	class unidadFuncional{
		function __construct($id, $nombre, $sup, $vuf, $vtu, $coef, $tp, $tc, $total){
			$this -> id = $id;
			$this -> nombre = $nombre;
			$this -> sup = $sup;
			$this -> vuf = $vuf;
			$this -> vtu = $vtu;
			$this -> coef = $coef; 
			$this -> tp = $tp;
			$this -> tc = $tc;
			$this -> total = $total;
		}
	}
	$unidades_funcionales = []; $i = 0;
	while ($row = mysqli_fetch_row($cons_ufs)) {
		$unidades_funcionales[$i] = new unidadFuncional($row[0], $row[1], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9]);
		$i++;
	}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>PDFform908-1.php</title>
	<style>
		@page {
			margin-top: 0.5em;
    	margin-left: 1.5em;
	  	margin-right: 1.5em;
			margin-bottom: 1.5em;
    }
		#logo908{
			width: 50%;
			position: absolute;
			margin-right: 5px;
			margin-left: 360px;
			margin-top: -75px;
		}
		#img908 {
			width: 45%;
			position: absolute;
			margin-right: 0px;
			margin-left: -130px;
			margin-top: -90px;
		}
		#headermedio {
			margin-left: 200px;
			position: absolute;
			margin-right: 200px;
			margin-top: 20px;
			font-family: 'Arial',sans-serif;
		}
		table{
			text-align: center;
			width: 100%;
			border-collapse: collapse;
		}
		.tabla{
			border-style: solid;
			border-width: 1px;
		}
		.tabla2{
			border-style: solid;
			border-width: 2px;
		}
		.textosolo {
			position:absolute;
			margin-top:284px;
			margin-left:0px;
			font-size:14px;
			font-family: 'Arial',sans-serif;
		}

		.textogrande {
			font-family: 'Arial',sans-serif;
			font-size: 11px;
		}

		.letrachica {
			font-size: 11px;
		}
		.textosolo2 {
			position:absolute;
			margin-top:1200px;
			margin-left:935px;
			font-size:10px;
			font-family: 'Arial',sans-serif;
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
		.tabla1{
		/*	width: 60%!important; */
			margin-top: 100px;
		}
		.divtabla{
			width: 85%!important;
		}
		.medio{
			margin-top: 0px;
			margin-left: 60px;
		}
		.centrado{
			text-align: center;
		}
		.quince{
			height: 15px;
		}
		.letratabla{
			font-size: 13px;
		}
		.letra10{
			font-size: 10px;
		}
		.bordes{
				border: 1px solid;
				border-bottom-style: solid;
				border-bottom-color: black;
				border-right-style: solid;
				border-right-color: black;
		}
		.textalignleft{
			text-align: left;
		}
		.letra{
			font-size: 14px;
		}
		.nombordes{
			border-bottom-style: none;
			border-left-style: none;
		}
	</style>
</head>

<body>
    <div id="headermedio">
      <table>
        <tr>
					<td></td>
          <td class="textogrande">
						<p class="medio centrado">
						Anexo a la Declaración jurada de
						<br>
						Parcelas Urbanas
						<br>
						Suburbanas (Formulario 901)
						<br>
	          <b>
						PROPIEDAD HORIZONTAL
						</b>
						<br>
	          Resumen de Valuación de Subparcelas
          	</p>
					</td>
          <td class=""></td>
        </tr>
      </table>
       <img id="logo908" src="img/logo908.png">
       <img id="img908" src="img/logoarba908.png">
    </div>
		<br>
		<table class="tabla1">
			<tr>
				<td class="textalignleft letra">
					<b>RUBRO 1.</b>&nbsp;Plano de P.H. N°
					<b style="font-size:16px;"><?php echo $cons_form['PlanoNro']; ?></b>
				</td>
			</tr>
			<tr>
				<td class="textalignleft letra">
					<b>RUBRO 2.</b>&nbsp;El inmueble figura registrado en la siguiente forma, según catastro
				</td>
			</tr>
		</table>
		<br>
		<table class="tabla2 divtabla">
			<tr>
				<td colspan="2" class="letratabla textalignleft">
				&nbsp;	<b>PARTIDO:</b>
				</td>
				<td colspan="6" class="letratabla">
					<b><?php echo $Fpartido ?></b>
				</td>
			</tr>
			<tr>
				<td class="quince letrachica bordes">&nbsp;CIRC.</td>
				<td class="quince letrachica bordes">&nbsp;SECCION</td>
				<td class="quince letrachica bordes">&nbsp;CHACRA</td>
				<td class="quince letrachica bordes">&nbsp;QUINTA</td>
				<td class="quince letrachica bordes">&nbsp;FRACCION</td>
				<td class="quince letrachica bordes">&nbsp;MANZANA</td>
				<td class="quince letrachica bordes">&nbsp;PARCELA</td>
				<td class="quince letrachica bordes">&nbsp;PARTIDA ORIGEN</td>
			</tr>
			<tr>
				<td class="quince bordes"><?php echo $Fcir ?></td>
				<td class="quince bordes"><?php echo $Fsec ?></td>
				<td class="quince bordes"><?php echo $Fcha ?></td>
				<td class="quince bordes"><?php echo $Fqui ?></td>
				<td class="quince bordes"><?php echo $Ffra ?></td>
				<td class="quince bordes"><?php echo $Fman ?></td>
				<td class="quince bordes"><?php echo $Fpar ?></td>
				<td class="quince bordes"><?php echo $Fpartida ?></td>
			</tr>
		</table>
		<div class="">
			<p class="letra">
				<b>RUBRO 3.</b> Resumen de Valuación de las Subparcelas
			</p>
		</div>
		<table class="tabla">
			<tr>
				<td class="bordes">1</td>
				<td class="bordes">2</td>
				<td class="bordes">3</td>
				<td class="bordes">4</td>
				<td class="bordes" colspan="2">5</td>
				<td class="bordes">6</td>
				<td class="bordes">7</td>
			</tr>
			<tr>
				<td class="letrachica bordes">
					<b>PARTIDA</b>
				</td>
				<td class="letrachica bordes">
					<b>SUBPARCELA N°</b>
				</td>
				<td class="letrachica bordes">
					<b>COEFICIENTE</b>
				</td>
				<td class="letrachica bordes">
					<b>VALOR TIERRA</b>
				</td>
				<td colspan="2" class="letrachica bordes">
					<b>VALOR EDIFICIO</b>
				</td>
				<td class="letrachica bordes">
					<b>VALOR TOTAL</b>
				</td>
				<td class="letrachica bordes">
					<b>VALOR TOTAL</b>
				</td>
			</tr>
			<tr>
				<td class="letra10 bordes">Reservado D.P.C.T.</td>
				<td class="bordes"></td>
				<td class="bordes"></td>
				<td class="bordes"></td>
				<td class="letrachica bordes">PROPIO</td>
				<td class="letrachica bordes">COMUN</td>
				<td class="letrachica bordes">EDIFICIO</td>
				<td class="letrachica bordes">SUBPARCELA</td>
			</tr>
			<?php 
				$global_coef = 0;
				$global_tierra = 0;
				$global_propio = 0;
				$global_comun = 0;
				$global_edificio = 0;
				$global_subparcela = 0;
				for ($i=0; $i < 25; $i++) { 
					if ($i < sizeof($unidades_funcionales)) {
						$uf = $unidades_funcionales[$i];
						$total_edificio = $uf -> tp + $uf -> tc;
						$total_subparcela = $uf -> vtu + $total_edificio;
						$global_coef += $uf -> coef;
						$global_tierra += $uf -> vtu;
						$global_propio += $uf -> tp;
						$global_comun += $uf -> tc;
						$global_edificio += $total_edificio;
						$global_subparcela += $total_subparcela;
						echo '
						<tr>
							<td class="quince bordes"></td>
							<td class="bordes letratabla">'.$uf -> nombre.'</td>
							<td class="bordes letratabla">'.number_format((float)$uf -> coef,6,',','.').'</td>
							<td class="bordes letratabla">'.number_format((float)$uf -> vtu,0,',','.').'</td>
							<td class="bordes letratabla">'.number_format((float)$uf -> tp,0,',','.').'</td>
							<td class="bordes letratabla">'.number_format((float)$uf -> tc,0,',','.').'</td>
							<td class="bordes letratabla">'.number_format((float)$total_edificio,0,',','.').'</td>
							<td class="bordes letratabla">'.number_format((float)$total_subparcela,0,',','.').'</td>
						</tr>
						';
					}else{
						echo '
						<tr>
							<td class="quince bordes"></td>
							<td class="bordes"></td>
							<td class="bordes"></td>
							<td class="bordes"></td>
							<td class="bordes"></td>
							<td class="bordes"></td>
							<td class="bordes"></td>
							<td class="bordes"></td>
						</tr>
						';
					}
				}
			?>
			<tr>
				<td class="letra10 nombordes" colspan="2">Total RUBRO 8: Los totales deben coincidir <br>con los valores consignados en el F 901</td>
				<td class="letratabla bordes"><?php echo number_format((float)$global_coef,0,',','.'); ?></td>
				<td class="letratabla bordes"><?php echo number_format((float)$global_tierra,0,',','.'); ?></td>
				<td class="letratabla bordes"><?php echo number_format((float)$global_propio,0,',','.'); ?></td>
				<td class="letratabla bordes"><?php echo number_format((float)$global_comun,0,',','.'); ?></td>
				<td class="letratabla bordes"><?php echo number_format((float)$global_edificio,0,',','.'); ?></td>
				<td class="letratabla bordes"><?php echo number_format((float)$global_subparcela,0,',','.'); ?></td>
			</tr>
		</table>
		<div class="letra10">
			certifico que los datos consignados en este resumen son correcto y completos asumiendo la responsabilidad propia del ejercicio profesional que me compete
		</div>
		<br>
		<br>
		<br>
		<table style="margin-top:10px; text-align:center;width:770px">
			<tr><td></td></tr>
			<tr>
				<td> ___________________________________ </td>
				<td> ________________________________________ </td>
			</tr>

			<tr>
				<td style="font-size:12px"> lugar y fecha </td>
				<td style="font-size:12px"> Firma y sello del profesional actuante </td>
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
$filename = "PDFform908-1.pdf";
$dompdf->stream($filename, array("Attachment" => 0));
?>
