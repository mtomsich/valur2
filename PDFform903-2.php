<?php
include("sesion.php");
$pagina='PDFform9032PHP';
include("sql/conexion.php");
include("seguridadForm.php");

	include('sql/mostrarDatosObra.php');

	$post = $_GET["idform"];
	$x=mysqli_query($conexion, "SELECT * FROM `form903` WHERE `codForm3` =".$post);
	$y = mysqli_fetch_array($x);

	if (isset($y['observaciones'])){
			$Fobservaciones = $y['observaciones'];
	} else {
		$Fobservaciones = "";
	}

	function a($texto,$a){
		if ($a == 1)
			// echo "<td style='background-color: lightgrey; color: black;'>".$texto."</td>";
			echo "<td style='background-color: #2F2C2C; color: white; padding: 0.5px' >".$texto."</td>";
		else
			echo "<td color: black;'>".$texto."</td>";
	}
	include('funciones/valores903.php');
	include('funciones/calculosrub2.php');
	include('funciones/calculosrub4.php');
	include('funciones/Totales903.php');
	include('funciones/calculosrub3.php');

	require_once 'lib/pdf/autoload.inc.php';



	ob_start();
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<style>
			body{
			padding:0px;
			margin:0px;
			}
			@page {
			font-size: 0.5em;
			margin-top: 1em;
			margin-left: 1em;
			margin-right: 1em;
			margin-bottom: 0.2em;
	        }
			h1{
			font-size: 3.5em;
			}
			h2{
			font-size: 2em;
			}
			td{
			padding:0px;
			margin:0px;
			}
			tr{
			padding:0px;
			margin:0px;
			}

			table {
			width: 100%;
			cellpadding:0px;
			cellspacing:0px;

			}

			.prueba{
			border: black 0.6px solid;

			}
			.contenido{
				width: 100%;
				height: 100%;
			}
			.texto{
				width: 250px;
				height: 60px;
				float: left;
			}
			.img{
				margin-left: 250px;
			}
			img{
				height: 65px;
			}
			.rub1{
				margin-left: 470px;
				width: 636px;
				height: 100px;
			}
			tr.comp2 td{
				height: 18px;
			}
			.comp{
				height: 16.3px;
			}
			table.table {border-collapse:collapse;}
			table.table td {border: 1px solid #000000; font-size: 10px;}
			table.table2 {border:0;}
			table.table2 td {border: 0;}
			.border-inf{
				border-bottom-color: black !important;
				border-bottom-style: solid !important;
				border-bottom-width: 1px !important;
			}
			.fondo{
				background-color: black;
				color: white;
			}
			.table-huggi{
				font-size: 6.5px !important;
			}
			.table-huggi2{
				font-size: 8px !important;
			}
			.saigonodiv{
				width: 680px;
				float: left;
			}
			.text{
				width: 300px;
				margin-left: 680px;
				font-size: 13px !important;
				padding-left: 50px;
				padding-top: 3px;
				margin-bottom: 5px;
			}
			table.smapts td{
				width: 33.3%
			}
			.reciclado{
				width: 20%;
				background-color: blue;
			}
			.Estado{
				background-color: black;
				color: white;
			}
			.text-center{
				text-align: center !important;
			}
			/* agregar para version */
			.version{
				position: absolute;
				margin-left: 430px;
				margin-top: 45px;
				font-size: 12px;
			}
		</style>
	</head>
	<body>
		<div style="float: left;">
			<div class="texto">
					EDIFICIOS destinados a casas de familia, casas de rentas, hoteles,
					sanatorios, oficinas privadas, bibliotecas, establecimientos de asistencia
					social, museos,asociaciones gremiales, profesionales, partidos
					políticos y otras asociaciones negocios de superficie cubierta 2 hasta 100 m ; garages de uso privado, asociaciones deportivas,
					sociales o culturales (excepción del campo de deportes) establecimientoseducacionales o destinos similares.
			</div>

			<!-- agregar para version -->
			<div class="version">
				<?php echo $version ?>
			</div>

			<div class="img">
				<img src="img/logopdf903.png">
			</div>
			<!-- RUBRO 2 -->
			<div class="rub2">
				<table class="table" style="width: 460px; text-align: left;">
					<tr><td>Destino:<?php echo " ".$Codestino." - ".$destino ?></td></tr>
					<tr><td style="background-color: lightgrey;">RUBRO 2 : CARACTERISTICAS DEL EDIFICIO</td></tr>
				</table>
				<table class="table" style="text-align: center; font-size: 9px;">
					<tr>
						<td rowspan="2">1 <br>TIPO</td>
						<td rowspan="2">2 <br>FACHADA</td>
						<td rowspan="2">3 <br>PAREDES</td>
						<td rowspan="2">4 <br>ESCALERAS</td>
						<td rowspan="2">5 <br>TECHOS</td>
						<td rowspan="2">6 <br>CIELORRASOS</td>
						<td rowspan="2">7 <br>REVOQUES</td>
						<td rowspan="2" style="width: 80px;">8 <br>PISOS</td>
						<td colspan="2">PUERTAS Y VENTANAS</td>
						<td rowspan="2">11 <br>BAÑOS</td>
						<td rowspan="2">12 <br>COCINA</td>
						<td rowspan="2">13 <br>REVESTIMIENTO</td>
						<td rowspan="2">14 <br>INSTALACIONES COMPLEMENTARIAS</td>
						<td rowspan="2">15 <br>CANTIDAD CUADROS TACHADOS</td>
					</tr>
					<tr>
						<td>9 <br>DE MADERA</td>
						<td>10 <br>METALICA</td>
					</tr>
					<!-- A -->
					<tr>
						<td>A</td>
						<!-- FACHADA A-->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("REVESTIMIENTO DE GRANITO",$y['FachaA1']);?></tr>
								<tr><?php  a("REVESTIMIENTO DE MARMOL",$y['FachaA2']);?></td></tr>
								<tr><?php  a("MADERA <br>TALLADA ",$y['FachaA3']);?></td></tr>
								<tr><?php  a("LADRILLO <br>DE VIDRIO",$y['FachaA4']);?></td></tr>
								<tr><?php  a("CRISTAL TEMPLADO",$y['FachaA5']);?></td></tr>
							</table>
						</td>
						<!-- PAREDE A-->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("MUROS DOBLES", $y['ParedA1']);?></tr>
								<tr><?php  a("DE PIEDRA", $y['ParedA2']);?></tr>
								<tr><?php  a("PLACARD A MEDIDA", $y['ParedA3']);?></tr>
								<tr><?php  a("CRISTAL TEMPLADO", $y['ParedA4']);?></tr>
								<tr><?php  a("LADRILLO DE VIDRIO", $y['ParedA5']);?></tr>
							</table>
						</td>
						<!-- ESCALERA A-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("REVESTIDA CON MARMOL", $y['EscaA1']);?></td></tr>
								<tr><?php  a("MADERA FINA", $y['EscaA2']);?></td></tr>
								<tr><?php  a("BARANDA ARTISTICA", $y['EscaA3']);?></td></tr>
								<tr><?php  a("REVESTIDA EN GRANITO", $y['EscaA4']);?></td></tr>
							</table>
						</td>
						<!-- TECHO A-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("PIZARRA",  $y['TechoA1']);?></td></tr>
								<tr><?php  a("TEJA ESMALTADA",  $y['TechoA2']);?></td></tr>
								<tr><?php  a("TEJUELA DE MADERA",  $y['TechoA3']);?></td></tr>
							</table>
						</td>
						<!-- CIELORRASO A-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("ARTESONADO DE YESO O MADERA",$y['CieloA1']);?></td></tr>
								<tr><?php  a("GARGANTA DE LUZ DIFUSA",$y['CieloA2']);?>></tr>
							</table>
						</td>
						<!-- REVOQUES A-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("PANELES MOLDURADOS",$y['RevoqA1']);?></td></tr>
								<tr><?php  a("ESTUCADOS EN YESO",$y['RevoqA2']);?></td></tr>
							</table>
						</td>
						<!-- PISOS A-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("GRANITO",$y['PisosA1']);?></td></tr>
								<tr><?php  a("MARMOL",$y['PisosA2']);?></td></tr>
								<tr><?php  a("PARQUET DE MADERA FINA",$y['PisosA3']);?></td></tr>
								<tr><?php  a("MADERA ENTARUGADA",$y['PisosA4']);?></td></tr>
							</table>
						</td>
						<!-- PUERTAS Y VENTANAS A-->
						<td>
										<table class="table-huggi table2">
											<tr><?php  a("PUERTAS MOLDURADAS",$y['MadeA1']);?>/td></tr>
											<tr><?php  a("MADERA FINA",$y['MadeA2']);?></td></tr>
											<tr><?php  a("VITREAUX",$y['MadeA3']);?></td></tr>
											<tr><?php  a("HERRAJES DE ESTILO",$y['MadeA4']);?></td></tr>
											<tr><?php  a("CRISTAL BISELADO",$y['MadeA5']);?></td></tr>
										</table>
						</td>
						<td>
							<table class="table-huggi table2">
											<tr><?php  a("PUERTAS ARTISTICAS",$y['MetaA1']);?></td></tr>
											<tr><?php  a("REJAS ARTISTICAS",$y['MetaA2']);?></td></tr>
											<tr><?php  a("VITRAUX",$y['MetaA3']);?></td></tr>
											<tr><?php  a("HERRAJES DE ESTILO",$y['MetaA4']);?></td></tr>
											<tr><?php  a("ANODIZADO DE COLOR",$y['MetaA5']);?></td></tr>
											<tr><?php  a("DOBLE CONTACTO",$y['MetaA6']);?></td></tr>
											<tr><?php  a("VIDRIO TEMPLADO",$y['MetaA7']);?></td></tr>
										</table>
						</td>
						<!-- BAÑOS A-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("BAÑO DE DOS AMBIENTES",$y['BanoA1']);?></td></tr>
								<tr><?php  a("HIDROMASAJE",$y['BanoA2']);?></td></tr>
								<tr><?php  a("SAUNA",$y['BanoA3']);?></td></tr>
							</table>
						</td>
						<!-- COCINA A-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("PARRILLA Y CALIENTA PLATOS A GAS, SUPERGAS O ELECTRICA",$y['CociA1']);?></td></tr>
								<tr><?php  a("HORNO EMBUTIDO Y ANAFE",$y['CociA2']);?></td></tr>
								<tr><?php  a("HELADERA BAJO MESADA",$y['CociA3']);?></td></tr>
							</table>
						</td>
						<!-- REVESTIMIENTO A-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("MADERA FINA",$y['RevesA1']);?></td></tr>
								<tr><?php  a("MAYOLICA GRANITO O MARMOL EN BAÑOS O TOILETTES",$y['RevesA2']);?></td></tr>
							</table>
						</td>
						<!-- INSTALACIONES COMPLEMENTARIAS A-->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("HELADERA CON EQUIPO CENTRAL",$y['InstaA1']);?></td></tr>
								<tr><?php  a("PILETA DE NATACION",$y['InstaA2']);?></td></tr>
								<tr><?php  a("AIRE ACONDICIONADO",$y['InstaA3']);?></td></tr>
								<tr><?php  a("CHIMENEA ARTISTICA",$y['InstaA4']);?></td></tr>
							</table>
						</td>
						<td><?php echo $Totales[0]; ?></td>
					</tr>
					<!-- B -->
					<tr>
						<td>B</td>
						<!-- FACHADA B -->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("REVESTIMIENTO PIEDRA TIPO MAR DEL PLATA",$y['FachaB1']);?></td></tr>
								<tr><?php  a("IMITACION PIEDRA MOLDURADA",$y['FachaB2']);?></td></tr>
								<tr><?php  a("LADRILLO MAQUINADO CON JUNTA TOMADA" ,$y['FachaB3']);?></td></tr>
								<tr><?php  a("CERAMICO ESMALTADO",$y['FachaB4']);?></td></tr>
							</table>
						</td>
						<!-- PARED B -->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("LADRILLO MAQUINADO CON JUNTA TOMADA",$y['ParedB1']);?></td></tr>
								<tr><?php  a("PLACARD ESTANDAR",$y['ParedB2']);?></td></tr>
							</table>
						</td>
						<!-- ESCALERA B -->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("REVESTIDA CON MATERIAL RECONSTITUIDO",$y['EscaB1']);?></td></tr>
								<tr><?php  a("CERAMICO ESMALTADO",$y['EscaB2']);?></td></tr>
							</table>
						</td>
						<!-- TECHOS B -->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("TEJA CURVA O PLANA",$y['TechoB1']);?></td></tr>
								<tr><?php  a("BALDOSA 'COLORADA' SOBRE LOSA",$y['TechoB2']);?></td></tr>
								<tr><?php  a("CERAMICO ESMALTADO",$y['TechoB3']);?></td></tr>
							</table>
						</td>
						<!-- CIELORRASOS B -->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("YESO LISO",$y['CieloB1']);?></td></tr>
								<tr><?php  a("PINTADOS AL AGUA",$y['CieloB2']);?></td></tr>
								<tr><?php  a("METALICOS A MEDIDA",$y['CieloB3']);?></td></tr>
								<tr><?php  a("MADERA FINA",$y['CieloB4']);?></td></tr>
							</table>
						</td>
						<!-- REVOQUES B -->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("IMITACION PIEDRA",$y['RevoqB1']);?></td></tr>
								<tr><?php  a("LADRILLO CON JUNTA TOMADA",$y['RevoqB2']);?></td></tr>
								<tr><?php  a("PINTADOS AL ACEITE",$y['RevoqB3']);?></td></tr>
							</table>
						</td>
						<!-- PISOS B -->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("MOSAICO GRANITICO MEDIDA GRANDE",$y['PisosB1']);?></td></tr>
								<tr><?php  a("PARQUET COMUN",$y['PisosB2']);?></td></tr>
								<tr><?php  a("CERAMICO ESMALTADO",$y['PisosB3']);?></td></tr>
								<tr><?php  a("LAJAS NATURALES",$y['PisosB4']);?></td></tr>
							</table>
						</td>
						<!-- PUERTAS Y VENTANAS B-->
						<td>
										<!-- DE MADERA B-->
										<table class="table-huggi table2">
											<tr><?php  a("HECHAS A MEDIDA",$y['MadeB1']);?></td></tr>
											<tr><?php  a("CORTINA DE ENROLLAR",$y['MadeB2']);?></td></tr>
											<tr><?php  a("VIDRIOS EMPLOMADOS",$y['MadeB3']);?></td></tr>
											<tr><?php  a("LUSTRADAS",$y['MadeB4']);?></td></tr>
											<tr><?php  a("CORREDIZA",$y['MadeB5']);?></td></tr>
											<tr><?php  a("GUILLOTINA",$y['MadeB6']);?></td></tr>
											<tr><?php  a("CORTINA AMERICANA/VENECIANA",$y['MadeB7']);?></td></tr>
											<tr><?php  a("CELOSIAS",$y['MadeB8']);?></td></tr>
											<tr><?php  a("CORTINAS TIPO BARRIO",$y['MadeB9']);?></td></tr>
										</table>
						</td>
						<td>
							<table class="table-huggi table2">
											<tr><?php  a("HECHAS A MEDIDA",$y['MetaB1']);?></td></tr>
											<tr><?php  a("CORTINA AMERICANA",$y['MetaB2']);?></td></tr>
											<tr><?php  a("VIDRIOS EMPLOMADOS",$y['MetaB3']);?></td></tr>
											<tr><?php  a("CELOSIAS",$y['MetaB4']);?></td></tr>
											<tr><?php  a("CORREDIZA CON COLIZA",$y['MetaB5']);?></td></tr>
											<tr><?php  a("CORTINA DE ALUMINIO",$y['MetaB6']);?></td></tr>
											<tr><?php  a("ANODIZADO COMUN",$y['MetaB7']);?></td></tr>
										</table>
						</td>
						<!-- BAÑOS B-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("CALEFON O TERMO TANQUE",$y['BanoB1']);?></td></tr>
								<tr><?php  a("VANITORY",$y['BanoB2']);?></td></tr>
								<tr><?php  a("LAVATORIO DE PIE",$y['BanoB3']);?></td></tr>
							</table>
						</td>
						<!-- COCINA B-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("CALEFON O TERMO <br>TANQUE",$y['CociB1']);?></td></tr>
								<tr><?php  a("MUEBLE BAJO MESADA A MEDIDA",$y['CociB2']);?></td></tr>
								<tr><?php  a("MESADA DE GRANITO O MARMOL",$y['CociB3']);?></td></tr>
								<tr><?php  a("MESADA DE MADERA",$y['CociB4']);?></td></tr>
							</table>
						</td>
						<!-- REVESTIMIENTO B-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("AZULEJOS DECORADOS EN COCINA Y BAÑO",$y['RevesB1']);?></td></tr>
								<tr><?php  a("CERAMICO DECORADO EN COCINA Y BAÑO",$y['RevesB2']);?></td></tr>
							</table>
						</td>
						<!-- INSTALACIONES COMPLEMENTARIAS B-->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("ASCENSORES PARA MAS DE 4 PERSONAS",$y['InstaB1']);?></td></tr>
								<tr><?php  a("CALEFACCION CENTRAL POR RADIADORES",$y['InstaB2']);?></td></tr>
								<tr><?php  a("LOSA RADIANTE",$y['InstaB3']);?></td></tr>
								<tr><?php  a("AGUA CALIENTE CENTRAL",$y['InstaB4']);?></td></tr>
								<tr><?php  a("ROCIADORES CENITALES",$y['InstaB5']);?></td></tr>
							</table>
						</td>
						<td><?php echo $Totales[1]; ?></td>
					</tr>
					<!-- C -->
					<tr>
						<td>C</td>
						<!-- FACHADA C-->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("IMITACION DE PIEDRA LISA",$y['FachaC1']);?></td></tr>
								<tr><?php  a("LADRILLO CON JUNTA TOMADA",$y['FachaC2']);?></td></tr>
								<tr><?php  a("CERAMICO COMUN",$y['FachaC3']);?></td></tr>
								<tr><?php  a("HORMIGON VISTO",$y['FachaC4']);?></td></tr>
								<tr><?php  a("PENTAGRES",$y['FachaC5']);?></td></tr>
							</table>
						</td>
						<!-- PAREDES C-->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("LADRILLO DE CAL",$y['ParedC1']);?></td></tr>
								<tr><?php  a("LADRILLO HUECO",$y['ParedC2']);?></td></tr>
								<tr><?php  a("INSTALACION ELECTRICA EMBUTIDA",$y['ParedC3']);?></td></tr>
								<tr><?php  a("TABIQUE DE LAMINADO PLASTICO",$y['ParedC4']);?></td></tr>
							</table>
						</td>
						<!-- ESCALERAS C-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("MADERA COMUN",$y['EscaC1']);?></td></tr>
								<tr><?php  a("HIERRO",$y['EscaC2']);?></td></tr>
								<tr><?php  a("ALFOMBRA",$y['EscaC3']);?></td></tr>
								<tr><?php  a("CERAMICO COMUN",$y['EscaC4']);?></td></tr>
							</table>
						</td>
						<!-- TECHOS C-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("LOSA DE HORMIGON",$y['TechoC1']);?></td></tr>
								<tr><?php  a("CANALON DE FIBROCEMENTO",$y['TechoC2']);?></td></tr>
								<tr><?php  a("CANALON DE HIERRO GALVANIZADO",$y['TechoC3']);?></td></tr>
								<tr><?php  a("LOSA DE VIGUETAS",$y['TechoC4']);?></td></tr>
								<tr><?php  a("CHAPA TRAPEZODIAL",$y['TechoC5']);?></td></tr>
							</table>
						</td>
						<!-- CIELORRASOS C-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("REVOQUE A LA CAL",$y['CieloC1']);?></td></tr>
								<tr><?php  a("PINTADOS A LA CAL",$y['CieloC2']);?></td></tr>
								<tr><?php  a("METALICOS EN PLACAS",$y['CieloC3']);?></td></tr>
								<tr><?php  a("PLACAS DE YESO/SINTET",$y['CieloC4']);?></td></tr>
							</table>
						</td>
						<!-- REVOQUES C-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("PINTADOS AL AGUA",$y['RevoqC1']);?></td></tr>
								<tr><?php  a("PINTADOS A LA CAL",$y['RevoqC2']);?></td></tr>
							</table>
						</td>
						<!-- PISOS C-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("MOSAICO GRANITICO MEDIDA COMUN",$y['PisosC1']);?></td></tr>
								<tr><?php  a("MADERA DE PINOTEA",$y['PisosC2']);?></td></tr>
								<tr><?php  a("BALDOSA COLORADA",$y['PisosC3']);?></td></tr>
								<tr><?php  a("MOSAICO CALCAREO",$y['PisosC4']);?></td></tr>
								<tr><?php  a("ALFOMBRA SINTETICA",$y['PisosC5']);?></td></tr>
								<tr><?php  a("ALFOMBRA CAUCHO",$y['PisosC6']);?></td></tr>
								<tr><?php  a("CERAMICO COMUN",$y['PisosC7']);?></td></tr>
							</table>
						</td>
						<!-- PUERTAS Y VENTANAS C-->
						<td>
										<table class="table-huggi table2">
											<tr><?php  a("PUERTAS LISAS CON O SIN CELOSIAS",$y['MadeC1']);?></td></tr>
											<tr><?php  a("HERRAJES DE PRIMERA",$y['MadeC2']);?></td></tr>
											<tr><?php  a("PLEGADIZAS",$y['MadeC3']);?></td></tr>
											<tr><?php  a("CORTINAS PLASTICAS",$y['MadeC4']);?></td></tr>
											<tr><?php  a("CORREDIZA EMBUTIDA",$y['MadeC5']);?></td></tr>
											<tr><?php  a("PINTADAS CON ESMALTE",$y['MadeC6']);?></td></tr>
											<tr><?php  a("BARNIZADA",$y['MadeC7']);?></td></tr>
										</table>
						</td>
						<td>
							<table class="table-huggi table2">
											<tr><?php  a("VENTANAS AL BALACIN",$y['MetaC1']);?></td></tr>
											<tr><?php  a("CORTINA DE MALLA",$y['MetaC2']);?></td></tr>
											<tr><?php  a("CONTRAVIDRIO DE ALUMINIO",$y['MetaC3']);?></td></tr>
											<tr><?php  a("CORTINA CHAPA ONDULADA",$y['MetaC4']);?></td></tr>
											<tr><?php  a("PINTADAS CON ESMALTE",$y['MetaC5']);?></td></tr>
										</table>
						</td>
						<!-- BAÑOS C-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("BIDET",$y['BanoC1']);?></tr>
								<tr><?php  a("INODORO DE PEDESTAL",$y['BanoC2']);?></td></tr>
								<tr><?php  a("BAÑERA",$y['BanoC3']);?></td></tr>
							</table>
						</td>
						<!-- COCINA C-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("COCINA A GAS O SUPER GAS",$y['CociC1']);?></td></tr>
								<tr><?php  a("MESADA CERAMICO",$y['CociC2']);?></td></tr>
								<tr><?php  a("MESADA ACERO INOXIDABLE",$y['CociC3']);?></td></tr>
								<tr><?php  a("MESADA GRANITO RECONSTITUIDO",$y['CociC4']);?></td></tr>
								<tr><?php  a("MESADA ESCALLAS DE MARMOL",$y['CociC5']);?></td></tr>
								<tr><?php  a("MUEBLE BAJOMESADA ESTANDAR",$y['CociC6']);?></td></tr>
							</table>
						</td>
						<!-- REVESTIMIENTO C-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("AZULEJOS EN COCINA Y BAÑO",$y['RevesC1']);?></td></tr>
								<tr><?php  a("MADERA TERCIADA O PRENSADA EN HABITACION",$y['RevesC2']);?></td></tr>
								<tr><?php  a("CERAMICO COMUN",$y['RevesC3']);?></td></tr>
								<tr><?php  a("LAMINADOS PLASTICOS",$y['RevesC4']);?></td></tr>
								<tr><?php  a("EMPAPELADO",$y['RevesC5']);?></td></tr>
							</table>
						</td>
						<!-- INSTALACIONES COMPLEMENTARIAS C-->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("ASCENSORES PARA 4 PERSONAS O MENOS",$y['InstaC1']);?></td></tr>
								<tr><?php  a("CHIMENEA COMUN",$y['InstaC2']);?></td></tr>
							</table>
						</td>
						<td><?php echo $Totales[2]; ?></td>
					</tr>
					<!-- D -->
					<tr>
						<td>D</td>
						<!-- FACHADAS D-->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("REVOQUE COMUN",$y['FachaD1']);?></td></tr>
								<tr><?php  a("PLACAS PREMOLDEADAS",$y['FachaD2']);?></td></tr>
								<tr><?php  a("MADERA MACHIMBRADA",$y['FachaD3']);?></td></tr>
								<tr><?php  a("ZINC",$y['FachaD4']);?></tr>
								<tr><?php  a("SALPICADO",$y['FachaD5']);?></td></tr>
								<tr><?php  a("BOLSEADO",$y['FachaD6']);?></td></tr>
							</table>
						</td>
						<!-- PAREDES D-->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("LADRILLO DE MEDIA CAL",$y['ParedD1']);?></td></tr>
								<tr><?php  a("BLOCKS CEMENTO",$y['ParedD2']);?></td></tr>
								<tr><?php  a("INSTALACION ELECT. EXTERIOR",$y['ParedD3']);?></td></tr>
								<tr><?php  a("PLACAS PREMOLDEADAS",$y['ParedD4']);?></td></tr>
								<tr><?php  a("TABIQUE MADERA",$y['ParedD5']);?></td></tr>
								<tr><?php  a("MADERA MACHIMBRADA",$y['ParedD6']);?></td></tr>
							</table>
						</td>
						<!-- ESCALERAS D-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("REVESTIDA CON CEMENTO AISLADO",$y['EscaD1']);?></td></tr>
							</table>
						</td>
						<!-- TECHOS D-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("CHAPA DE FIBROCEMENTO",$y['TechoD1']);?></td></tr>
								<tr><?php  a("CHAPA DE ZINC",$y['TechoD2']);?></td></tr>
								<tr><?php  a("CHAPA PLASTICA/ALUMINIO",$y['TechoD3']);?></td></tr>
							</table>
						</td>
						<!-- CIELORRASOS D-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("MADERA MACHIMBRADA",$y['CieloD1']);?></td></tr>
								<tr><?php  a("FIBRA PRENSADA",$y['CieloD2']);?></td></tr>
								<tr><?php  a("TELGOPOR",$y['CieloD3']);?></td></tr>
							</table>
						</td>
						<!-- REVOQUES D-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("COMUNES A LA CAL",$y['RevoqD1']);?></td></tr>
								<tr><?php  a("SALPICADO",$y['RevoqD2']);?></td></tr>
								<tr><?php  a("BOLSEADO",$y['RevoqD3']);?></td></tr>
							</table>
						</td>
						<!-- PISOS D-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("MOSAICO DE VEREDA",$y['PisosD1']);?></td></tr>
								<tr><?php  a("LAJAS DE CEMENTO",$y['PisosD2']);?></td></tr>
								<tr><?php  a("CEMENTO ALISADO",$y['PisosD3']);?></td></tr>
								<tr><?php  a("PLACAS VINILICAS",$y['PisosD4']);?></td></tr>
							</table>
						</td>
						<!-- PUERTAS Y VENTANAS D-->
						<td>
										<table class="table-huggi table2">
											<tr><?php  a("HECHAS EN SERIE",$y['MadeD1']);?></td></tr>
											<tr><?php  a("MADERA COMUN<",$y['MadeD2']);?></td></tr>
											<tr><?php  a("VENTANA CON POSTIGO",$y['MadeD3']);?></td></tr>
											<tr><?php  a("CON VIDRIO",$y['MadeD4']);?></td></tr>
										</table>
						</td>
						<td>
							<table class="table-huggi table2">
											<tr><?php  a("HECHAS EN SERIE",$y['MetaD1']);?></td></tr>
											<tr><?php  a("CON VIDRIO",$y['MetaD2']);?></td></tr>
											<tr><?php  a("POSTIGON DE CHAPA",$y['MetaD3']);?></td></tr>
										</table>
						</td>
						<!-- BAÑOS D-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("LAVATORIO DE PARED",$y['BanoD1']);?></td></tr>
								<tr><?php  a("DUCHA SIN BAÑERA",$y['BanoD2']);?></td></tr>
								<tr><?php  a("MULTIFAZ",$y['BanoD3']);?></td></tr>
							</table>
						</td>
						<!-- COCINA D-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("MESADA DE FORMICA",$y['CociD1']);?></td></tr>
							</table>
						</td>
						<!-- REVESTIMIENTO D-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("CEMENTO BLANCO EN BAÑO",$y['RevesD1']);?></td></tr>
							</table>
						</td>
						<!-- INSTALACIONES COMPLEMENTARIAS D-->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("EQUIPO DE BOMBEO DE AGUA",$y['InstaD1']);?></td></tr>
							</table>
						</td>
						<td><?php echo $Totales[3]; ?></td>
					</tr>
					<!-- E -->
					<tr>
						<td>E</td>
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("SIN TERMINAR",$y['FachaE1']);?></td></tr>
							</table>
						</td>
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("FIBROCEMENTO",$y['ParedE1']);?></td></tr>
								<tr><?php  a("ZINC",$y['ParedE2']);?></td></tr>
								<tr><?php  a("MADERA SIN TRABAJAR",$y['ParedE2']);?></td></tr>
							</table>
						</td>
						<td style="background-color: lightgrey"></td>
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("CHAPA RURAL",$y['TechoE1']);?></td></tr>
							</table>
						</td>
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("CELOTEX O SIMILAR",$y['CieloE1']);?></td></tr>
								<tr><?php  a("NO TIENE",$y['CieloE2']);?></td></tr>
							</table>
						</td>
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("BLANQUEADO",$y['RevoqE1']);?></td></tr>
								<tr><?php  a("NO TIENE",$y['RevoqE2']);?></td></tr>
							</table>
						</td>
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("LADRILLO",$y['PisosE1']);?></td></tr>
								<tr><?php  a("NO TIENE",$y['PisosE2']);?></td></tr>
							</table>
						</td>
						<td>
										<table class="table-huggi table2">
											<tr>
												<td>
													<?php  a(
													"VENTANAS SIN CORTINAS O POSTIGOS",
													$y['MadeE1']);?>
												</td>
											</tr>
											<tr><td><?php  a("NO TIENE",$y['MadeE2']);?></td></tr>
										</table>
						</td>
						<td>
							<table class="table-huggi table2">
											<tr>
												<td>
													<?php  a(
													"NO TIENE",
													$y['MetaE1']);?>
												</td>
											</tr>
										</table>
						</td>
						<td>
							<table class="table2  table-huggi">
								<tr>
										<?php
										a("INODORO A LA TURCA",
										$y['BanoE1']);?>
									</td>
								</tr>
								<tr><?php  a("PILETA DE LAVAR",$y['BanoE2']);?></td></tr>
								<tr><?php  a("MINGITORIO",$y['BanoE3']);?></td></tr>
							</table>
						</td>
						<td>
							<table class="table2  table-huggi">
								<tr>
									<?php  a("
										UNICO EQUIPAMIENTO PILETA DE COCINA",$y['CociE1']);?>
									</td>
								</tr>
							</table>
						</td>
						<td>
							<table class="table2  table-huggi">
								<tr>
									<?php  a("
										CEMENTO COMUN EN BAÑO",$y['RevesE1']);?>
									</td>
								</tr>
								<tr><?php  a("NO TIENE",$y['RevesE2']);?></td></tr>
							</table>
						</td>
						<td>
							<table class="table2 table-huggi">
								<tr>
									<?php  a("
										NO TIENE",$y['InstaE1']);?>
									</td>
								</tr>
							</table>
						</td>
						<td><?php echo $Totales[4]; ?></td>
					</tr>
					<!-- COMIENZO RUBRO 3 -->
					<tr>
						<td colspan="15" style="background-color: lightgrey; text-align: left;">RUBRO 3 : ESTADO DE CONSERVACION DEL EDIFICIO A trasladar a Rubro 5 inciso 3</td>
					</tr>
					<tr class="table-huggi2 text-center">
						<td>Estado conserv.</td>
						<td>
							<table class="table2">
								<tr>
									<?php MostrarEstado("Facha"); ?>
								</tr>
								<tr>
									<td>2</td>
									<td>1</td>
									<td>0</td>
								</tr>
							</table>
						</td>
						<td>
							<table class="table2">
								<tr>
									<?php MostrarEstado("Pared"); ?>
								</tr>
								<tr>
									<td>22</td>
									<td>15</td>
									<td>8</td>
								</tr>
							</table>
						</td>
						<td>
							<table class="table2">
								<tr>
									<?php MostrarEstado("Esca"); ?>
								</tr>
								<tr>
									<td>2</td>
									<td>1</td>
									<td>0</td>
								</tr>
							</table>
						</td>
						<td>
							<table class="table2">
								<tr>
									<?php MostrarEstado("Techo"); ?>
								</tr>
								<tr>
									<td>18</td>
									<td>14</td>
									<td>10</td>
								</tr>
							</table>
						</td>
						<td>
							<table class="table2">
								<tr>
									<?php MostrarEstado("Cielo"); ?>
								</tr>
								<tr>
									<td>3</td>
									<td>2</td>
									<td>1</td>
								</tr>
							</table>
						</td>
						<td>
							<table class="table2">
								<tr>
									<?php MostrarEstado("Revoq"); ?>
								</tr>
								<tr>
									<td>9</td>
									<td>5</td>
									<td>1</td>
								</tr>
							</table>
						</td>
						<td>
							<table class="table2">
								<tr>
									<?php MostrarEstado("Pisos"); ?>
								</tr>
								<tr>
									<td>8</td>
									<td>6</td>
									<td>3</td>
								</tr>
							</table>
						</td>
						<td>
										<table class="table2">
											<tr>
												<?php MostrarEstado("Made"); ?>
											</tr>
											<tr>
												<td>11</td>
												<td>8</td>
												<td>4</td>
											</tr>
										</table>
						</td>
						<td>
							<table class="table2">
											<tr>
												<?php MostrarEstado("Meta"); ?>
											</tr>
											<tr>
												<td>4</td>
												<td>3</td>
												<td>2</td>
											</tr>
										</table>
						</td>
						<td>
							<table class="table2">
								<tr>
									<?php MostrarEstado("Bano"); ?>
								</tr>
								<tr>
									<td>8</td>
									<td>6</td>
									<td>4</td>
								</tr>
							</table>
						</td>
						<td>
							<table class="table2">
								<tr>
									<?php MostrarEstado("Coci"); ?>
								</tr>
								<tr>
									<td>2</td>
									<td>1</td>
									<td>0</td>
								</tr>
							</table>
						</td>
						<td>
							<table class="table2">
								<tr>
									<?php MostrarEstado("Reves"); ?>
								</tr>
								<tr>
									<td>3</td>
									<td>2</td>
									<td>1</td>
								</tr>
							</table>
						</td>
						<td>
							<table class="table2">
								<tr>
									<?php MostrarEstado("Inst"); ?>
								</tr>
								<tr>
									<td>8</td>
									<td>6</td>
									<td>4</td>
								</tr>
							</table>
						</td>
						<td>
							<table class="table2">
								<tr>
									<td>Suma de puntos</td>
								</tr>
								<tr style="text-align: center;">
									<td><?php echo $TotalEstado; ?></td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
				<div class="saigonodiv">
					<table class="table table-huggi2">
						<tr>
							<td>Tipo</td>
							<td>A</td>
							<td>B</td>
							<td>C</td>
							<td>D</td>
							<td>E</td>
						</tr>
						<tr>
							<td>Rango de puntaje</td>
							<td>
								<table class="table2">
									<tr>
										<td>mas de 79</td>
										<td>de 50 a 79</td>
										<td>hasta 49</td>
									</tr>
								</table>
							</td>
							<td>
								<table class="table2">
									<tr>
										<td>mas de 79</td>
										<td>de 50 a 79</td>
										<td>hasta 49</td>
									</tr>
								</table>
							</td>
							<td>
								<table class="table2">
									<tr>
										<td>mas de 67</td>
										<td>de 42 a 67</td>
										<td>hasta 41</td>
									</tr>
								</table>
							</td>
							<td>
								<table class="table2">
									<tr>
										<td>mas de 65</td>
										<td>de 41 a 65</td>
										<td>hasta 40</td>
									</tr>
								</table>
							</td>
							<td>
								<table class="table2">
									<tr>
										<td>mas de 54</td>
										<td>de 37 a 54</td>
										<td>hasta 36</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td>Suma de puntos</td>
							<td>
								<table class="table2 smapts">
									<tr style="text-align: center;">
										<td><?php echo $A[0]; ?></td>
										<td><?php echo $A[1]; ?></td>
										<td><?php echo $A[2]; ?></td>
									</tr>
								</table>
							</td>
							<td>
								<table class="table2 smapts">
									<tr style="text-align: center;">
										<td><?php echo $B[0]; ?></td>
										<td><?php echo $B[1]; ?></td>
										<td><?php echo $B[2]; ?></td>
									</tr>
								</table>
							</td>
							<td>
								<table class="table2 smapts">
									<tr style="text-align: center;">
										<td><?php echo $C[0]; ?></td>
										<td><?php echo $C[1]; ?></td>
										<td><?php echo $C[2]; ?></td>
									</tr>
								</table>
							</td>
							<td>
								<table class="table2 smapts">
									<tr style="text-align: center;">
										<td><?php echo $D[0]; ?></td>
										<td><?php echo $D[1]; ?></td>
										<td><?php echo $D[2]; ?></td>
									</tr>
								</table>
							</td>
							<td>
								<table class="table2 smapts">
									<tr style="text-align: center;">
										<td><?php echo $E[0]; ?></td>
										<td><?php echo $E[1]; ?></td>
										<td><?php echo $E[2]; ?></td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td>Estado</td>
							<td>
								<table class="table2">
									<tr style="text-align: center;">
										<td>B</td>
										<td>R</td>
										<td>M</td>
									</tr>
								</table>
							</td>
							<td>
								<table class="table2">
									<tr style="text-align: center;">
										<td>B</td>
										<td>R</td>
										<td>M</td>
									</tr>
								</table>
							</td>
							<td>
								<table class="table2">
									<tr style="text-align: center;">
										<td>B</td>
										<td>R</td>
										<td>M</td>
									</tr>
								</table>
							</td>
							<td>
								<table class="table2">
									<tr style="text-align: center;">
										<td>B</td>
										<td>R</td>
										<td>M</td>
									</tr>
								</table>
							</td>
							<td>
								<table class="table2">
									<tr style="text-align: center;">
										<td>B</td>
										<td>R</td>
										<td>M</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</div>
				<div class="text">
					*Se considerará el edificio como reciclado cuando la suma de puntos
					del cuadro (Puntaje reciclado) sea igual o mayor a 40 puntos y se declarará
					la data del reciclado.
				</div>
				<table class="table">
					<tr>
						<td rowspan="2" bgcolor="lightgrey"> puntaje reciclado</td>
						<td>Muros y/o revoques exteriores</td>
						<td>Techos</td>
						<td>Cielorrasos</td>
						<td>Muros y/o revoques interiores</td>
						<td>Pisos</td>
						<td>Puertas y ventanas</td>
						<td>Baño</td>
						<td>Cocina</td>
						<td>Instalac. complementarias</td>
						<td>Suma de puntos</td>
					</tr>
					<tr class="comp2">
						<td><table><tr><td width="20%" align="center"><?php CalcularReci("ParedReci"); ?></td><td align="center">8</td></tr></table></td>
						<td><table><tr><td width="40%" align="center"><?php CalcularReci("TechoReci"); ?></td><td align="center">11</td></tr></table></td>
						<td><table><tr><td width="30%" align="center"><?php CalcularReci("CieloReci"); ?></td><td align="center">3</td></tr></table></td>
						<td><table><tr><td width="20%" align="center"><?php CalcularReci("RevoqReci"); ?></td><td align="center">10</td></tr></table></td>
						<td><table><tr><td width="40%" align="center"><?php CalcularReci("PisosReci"); ?></td><td align="center">8</td></tr></table></td>
						<td><table><tr><td width="20%" align="center"><?php CalcularReci("MadeReci"); ?></td><td align="center">10</td></tr></table></td>
						<td><table><tr><td width="40%" align="center"><?php CalcularReci("BanoReci"); ?></td><td align="center">20</td></tr></table></td>
						<td><table><tr><td width="40%" align="center"><?php CalcularReci("CociReci"); ?></td><td align="center">16</td></tr></table></td>
						<td><table><tr><td width="20%" align="center"><?php CalcularReci("InstReci1"); ?></td><td align="center">14</td></tr></table></td>
						<td align="center"><?php echo $TotalReciclado; ?></td>
					</tr>
				</table>
			</div>
		</div>
		<!-- RUBRO 1 -->
		<div class="rub1">
			<table class="table">
				<tr>
					<td style="width: 50%">RUBRO 1: Identificacion del inmueble</td>
					<td style="width: 50%">PARTIDO (en letras): <?php echo $Fpartido; ?></td>
				</tr>
			</table>
			<table class="table">
				<tr align="center">
					<td class="fondo">Partido</td>
					<td class="fondo">Partida</td>
					<td>Circunscripción</td>
					<td>Sección</td>
					<td>Ch.</td>
					<td>Qta.</td>
					<td>Fracc.</td>
					<td>Mz</td>
					<td>Parcela</td>
					<td>Subparcela</td>
				</tr>
				<tr align="center">
					<td><?php echo $FcodPartido ?></td>
					<td><?php echo $Fpartida ?></td>
					<td><?php echo $Fcir ?></td>
					<td><?php echo $Fsec ?></td>
					<td><?php echo $Fcha ?></td>
					<td><?php echo $Fqui ?></td>
					<td><?php echo $Ffra ?></td>
					<td><?php echo $Fman ?></td>
					<td><?php echo $Fpar ?></td>
					<td><?php echo $Fsub?></td>
				</tr>
			</table>
			<table class="table">
				<tr><td>OBSERVACIONES</td></tr>
				<tr><td height="34px" valign="top" style="padding:2px">
					<?php echo $Fobservaciones ?>
				</td></tr>
			</table>
		</div>


		<script src="javascript/obj903.js"></script>
		<script src="javascript/valores903.js"></script>
		<script src="javascript/session.js"></script>

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
		$dompdf->setPaper('A4', 'landscape');

		// Render the HTML as PDF
		$dompdf->render();

		// Output the generated PDF to Browser
		$filename = "903-HOJA2.pdf.pdf";
		$dompdf->stream($filename, array("Attachment" => 0));
?>
