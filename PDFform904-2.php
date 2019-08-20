<?php
include("sesion.php");
	$pagina='PDFform9042PHP';
	include("sql/conexion.php");
	include("seguridadForm.php");

	include('sql/mostrarDatosObra.php');

	$post = $_GET["idform"];
	$x=mysqli_query($conexion, "SELECT * FROM `form904` WHERE `codForm904` = '".$post."'");
	$y = mysqli_fetch_array($x);
	function a($texto,$a){
		if ($a == 1)
			echo "<td style='background-color: #2F2C2C; color: white; padding: 0.5px' >".$texto."</td>";
		else
			echo "<td color: black;'>".$texto."</td>";
	}
	include('funciones/valores904.php');
	include('funciones/calculosrub2.php');
	include('funciones/calculosrub4.php');
	 include('funciones/Totales904.php');
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
				height: 16.3px;
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
				padding-top: 5px;
				margin-bottom: 3.5px;
			}
			table.smapts td{
				width: 33.3%
			}
			.version{
				position: absolute;
				margin-left: 435px;
				margin-top: 45px;
				font-size: 12px;
			}
		</style>
	</head>
	<body>
		<div style="float: left;">
			<div class="texto">
					EDIFICIOS destinados a negocios con superficie cubierta mayor de 100 m2; bancos oficinas públicas; recreos y balnearios o destinos similares.
			</div>
			<div class="version">
				<?php echo $version ?>
			</div>
			<div class="img">
				<img src="img/logopdf904.png">
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
								<tr><?php  a("REVESTIMIENTO DE GRANITO",$y['FachaA1']);?></td></tr>
								<tr><?php  a("REVESTIMIENTO DE MARMOL",$y['FachaA2']);?></td></tr>
								<tr><?php  a("CRISTAL TEMPLADO",$y['FachaA3']);?></td></tr>
							</table>
						</td>
						<!-- PAREDE A-->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("DE PIEDRA",$y['ParedA1']);?></td></tr>
								<tr><?php  a("LADRILLO DE VIDRIO",$y['ParedA2']);?></td></tr>
								<tr><?php  a("MUROS DOBLES",$y['ParedA3']);?></td></tr>
							</table>
						</td>
						<!-- ESCALERA A-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("REVESTIDA CON MARMOL",$y['EscaA1']);?></td></tr>
								<tr><?php  a("MADERA FINA",$y['EscaA2']);?></td></tr>
								<tr><?php  a("REVESTIDA EN GRANITO",$y['EscaA3']);?></td></tr>
							</table>
						</td>
						<!-- TECHO A-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("Baldosa 'colorada' sobre losa",$y['TechoA1']);?></td></tr>
								<tr><?php  a("Teja curva o plana",$y['TechoA2']);?></td></tr>
								<tr><?php  a("PIZARRA",$y['TechoA3']);?></td></tr>
							</table>
						</td>
						<!-- CIELORRASO A-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a(">ARTESONADO DE YESO",$y['CieloA1']);?></td></tr>
								<tr><?php  a("GARGANTA PARA LUZ DIFUSA",$y['CieloA2']);?></td></tr>
								<tr><?php  a("METALICO A MEDIDA",$y['CieloA3']);?></td></tr>
								<tr><?php  a("ARTESONADO DE MADERA",$y['CieloA4']);?></td></tr>
							</table>
						</td>
						<!-- REVOQUES A-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("CON 	PANELES MOLDURADOS",$y['RevoqA1']);?></td></tr>
								<tr><?php  a("ESTUCADOS EN YESO",$y['RevoqA2']);?></td></tr>
							</table>
						</td>
						<!-- PISOS A-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("GRANITO",$y['PisosA1']);?></td></tr>
								<tr><?php  a("MARMOL",$y['PisosA2']);?></td></tr>
								<tr><?php  a("PARQUET DE MADERA FINA",$y['PisosA3']);?></td></tr>
								<tr><?php  a("ENTARUGADO",$y['PisosA4']);?></td></tr>
							</table>
						</td>
						<!-- PUERTAS Y VENTANAS A-->
						<td>
										<table class="table-huggi table2">
											<tr><?php  a("PUERTAS MOLDURADAS",$y['MadeA1']);?></td></tr>
											<tr><?php  a("HECHAS A MEDIDA",$y['MadeA2']);?></td></tr>
											<tr><?php  a("CRISTAL BISELADO",$y['MadeA3']);?></td></tr>
										</table>
						</td>
						<td>
							<table class="table-huggi table2">
											<tr><?php  a("CORTINA DE MALLA",$y['MetaA1']);?></td></tr>
											<tr><?php  a("HECHAS A MEDIDA",$y['MetaA2']);?></td></tr>
											<tr><?php  a("VIDRIO TEMPLADO",$y['MetaA3']);?></td></tr>
											<tr><?php  a("CRISTALES",$y['MetaA4']);?></td></tr>
											<tr><?php  a("CELOSIAS",$y['MetaA5']);?></td></tr>
											<tr><?php  a("ANODIZADO DE COLOR",$y['MetaA6']);?></td></tr>
											<tr><?php  a("DOBLE CONTACTO",$y['MetaA7']);?></td></tr>
										</table>
						</td>
						<!-- BAÑOS A-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("BAÑO DE DOS AMBIENTES",$y['BanoA1']);?></td></tr>
								<tr><?php  a("LAVATORIO DE PIE",$y['BanoA2']);?></td></tr>
								<tr><?php  a("VANITORI",$y['BanoA3']);?></td></tr>
							</table>
						</td>
						<!-- COCINA A-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("HORNO EMBUTIDO",$y['CociA1']);?></td></tr>
								<tr><?php  a("COCINA A GAS O SUPERGAS",$y['CociA2']);?></td></tr>
								<tr><?php  a("COCINA INDUSTRIAL",$y['CociA3']);?></td></tr>
							</table>
						</td>
						<!-- REVESTIMIENTO A-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("MADERA FINA",$y['RevesA1']);?></td></tr>
								<tr><?php  a("AZULEJOS DECORADOS",$y['RevesA2']);?></td></tr>
								<tr><?php  a("CERAMICOS DECORADOS",$y['RevesA3']);?></td></tr>
								<tr><?php  a("PLACAS SINTETICAS",$y['RevesA4']);?></td></tr>
							</table>
						</td>
						<!-- INSTALACIONES COMPLEMENTARIAS A-->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("AIRE ACONDICIONADO<",$y['InstaA1']);?></td></tr>
								<tr><?php  a("ASCENSORES<",$y['InstaA2']);?></td></tr>
								<tr><?php  a("MONTACARGAS<",$y['InstaA3']);?></td></tr>
								<tr><?php  a("HELADERA CON EQUIPO CENTRAL<",$y['InstaA4']);?></td></tr>
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
								<tr><?php  a("LADRILLO MAQUINADO CON JUNTA TOMADA ",$y['FachaB3']);?></td></tr>
								<tr><?php  a("CERAMICO ESMALTADO",$y['FachaB4']);?></td></tr>
							</table>
						</td>
						<!-- PARED B -->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("LADRILLO DE CAL",$y['ParedB1']);?></td></tr>
								<tr><?php  a("INSTALACION ELECTRICA EMBUTIDA",$y['ParedB2']);?></td></tr>
								<tr><?php  a("LADRILLO HUECO",$y['ParedB3']);?></td></tr>
								<tr><?php  a("TABIQUE DE LAMINADO PLASTICO",$y['ParedB4']);?></td></tr>
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
								<tr><?php  a("LOSA DE HORMIGON",$y['TechoB1']);?></td></tr>
								<tr><?php  a("CERAMICO ESMALTADO",$y['TechoB2']);?></td></tr>
								<tr><?php  a("LOSA DE VIGUETAS",$y['TechoB3']);?></td></tr>
							</table>
						</td>
						<!-- CIELORRASOS B -->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("YESO LISO",$y['CieloB1']);?></td></tr>
								<tr><?php  a("PINTADOS AL AGUA",$y['CieloB2']);?></td></tr>
								<tr><?php  a("METALICOS EN PLACAS",$y['CieloB3']);?></td></tr>
								<tr><?php  a("PLACAS DE YESO",$y['CieloB4']);?></td></tr>
								<tr><?php  a("PLACA SINTETICA",$y['CieloB5']);?></td></tr>
								<tr><?php  a("MADERA FINA",$y['CieloB6']);?></td></tr>
							</table>
						</td>
						<!-- REVOQUES B -->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("IMITACION PIEDRA",$y['RevoqB1']);?></td></tr>
								<tr><?php  a("PINTADOS AL AGUA",$y['RevoqB2']);?></td></tr>
							</table>
						</td>
						<!-- PISOS B -->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("MOSAICO GRANITICO",$y['PisosB1']);?></td></tr>
								<tr><?php  a("PARQUET COMUN",$y['PisosB2']);?></td></tr>
								<tr><?php  a("CERAMICO ESMALTADO",$y['PisosB3']);?></td></tr>
								<tr><?php  a("LAJAS NATURALES",$y['PisosB4']);?></td></tr>
							</table>
						</td>
						<!-- PUERTAS Y VENTANAS B-->
						<td>
										<!-- DE MADERA B-->
										<table class="table-huggi table2">
											<tr><?php  a("LUSTRADAS",$y['MadeB1']);?></td></tr>
											<tr><?php  a("CORTINA TIPO BARRIO",$y['MadeB2']);?></td></tr>
											<tr><?php  a("PUERTA PLEGADIZA",$y['MadeB3']);?></td></tr>
											<tr><?php  a("PUERTA CORREDIZA EMBUTIDA",$y['MadeB4']);?></td></tr>
											<tr><?php  a("CELOSIAS",$y['MadeB5']);?></td></tr>
											<tr><?php  a("PINTADAS CON ESMALTE",$y['MadeB6']);?></td></tr>
											<tr><?php  a("BARNIZADA",$y['MadeB7']);?></td></tr>
										</table>
									</td>
						</td>
						<td>
							<table class="table-huggi table2">
											<tr><?php  a("CORTINAS DE CHAPAS MODULADAS",$y['MetaB1']);?></td></tr>
											<tr><?php  a("ALUMINIO",$y['MetaB2']);?></td></tr>
											<tr><?php  a("CORTINA ENROLLAR ALUMINIO",$y['MetaB3']);?></td></tr>
											<tr><?php  a("PINTADAS CON ESMALTE",$y['MetaB4']);?></td></tr>
										</table>
						</td>
						<!-- BAÑOS B-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("INODORO DE PEDESTAL",$y['BanoB1']);?></td></tr>
								<tr><?php  a("MINGITORIOS A PALANGANA ENLOZADOS O CANALETA ENLOZADOS CON SEPARACION DE MARMOL",$y['BanoB2']);?></td></tr>
							</table>
						</td>
						<!-- COCINA B-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("MESADA DE MADERA",$y['CociB1']);?></td></tr>
								<tr><?php  a("MESADA DE GRANITO",$y['CociB2']);?></td></tr>
								<tr><?php  a("MESADA DE MARMOL",$y['CociB3']);?></td></tr>
							</table>
						</td>
						<!-- REVESTIMIENTO B-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("AZULEJO COMUN",$y['RevesB1']);?></td></tr>
								<tr><?php  a("EMPAPELADO",$y['RevesB2']);?></td></tr>
								<tr><?php  a("PENTAGRÉS",$y['RevesB3']);?></td></tr>
								<tr><?php  a("MADERA COMUN",$y['RevesB4']);?></td></tr>
								<tr><?php  a("LAMINADO PLASTICO",$y['RevesB5']);?></td></tr>
							</table>
						</td>
						<!-- INSTALACIONES COMPLEMENTARIAS B-->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("CALEFACCION CENTRAL",$y['InstaB1']);?></td></tr>
								<tr><?php  a("ROCIADORES CENITALES",$y['InstaB2']);?></td></tr>
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
								<tr><?php  a("LADRILLO CON JUNTA TOMADA",$y['FachaC1']);?></td></tr>
								<tr><?php  a("REVOQUE COMUN",$y['FachaC2']);?></td></tr>
								<tr><?php  a("CERAMICO COMUN",$y['FachaC3']);?></td></tr>
								<tr><?php  a("HORMIGON VISTO",$y['FachaC4']);?></td></tr>
								<tr><?php  a("PENTAGRS",$y['FachaC5']);?></td></tr>
							</table>
						</td>
						<!-- PAREDES C-->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("BLOCKS CEMENTO",$y['ParedC1']);?></td></tr>
								<tr><?php  a("ZINC O MADERA",$y['ParedC2']);?></td></tr>
							</table>
						</td>
						<!-- ESCALERAS C-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("REVESTIDA CEMENTO ALISADO",$y['EscaC1']);?></td></tr>
								<tr><?php  a("MADERA COMUN",$y['EscaC2']);?></td></tr>
								<tr><?php  a("CERAMICO COMUN",$y['EscaC3']);?></td></tr>
								<tr><?php  a("ALFOMBRA",$y['EscaC4']);?></td></tr>
								<tr><?php  a("METALICA",$y['EscaC5']);?></td></tr>
							</table>
						</td>
						<!-- TECHOS C-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("CHAPA DE ZINC O FIBROCEMENTO",$y['TechoC1']);?></td></tr>
								<tr><?php  a("CHAPA PLASTICA",$y['TechoC2']);?></td></tr>
								<tr><?php  a("CHAPA ALUMINIO",$y['TechoC3']);?></td></tr>
								<tr><?php  a("AUTOPORTANTE",$y['TechoC4']);?></td></tr>
							</table>
						</td>
						<!-- CIELORRASOS C-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("REVOQUE A LA CAL",$y['CieloC1']);?></td></tr>
								<tr><?php  a("MADERA",$y['CieloC2']);?></td></tr>
								<tr><?php  a("PINTADOS A LA CAL",$y['CieloC3']);?></td></tr>
								<tr><?php  a("CELOTEX O SIMILAR",$y['CieloC4']);?></td></tr>
							</table>
						</td>
						<!-- REVOQUES C-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("COMUNES A LA CAL",$y['RevoqC1']);?></td></tr>
								<tr><?php  a("PINTADOS A LA CAL",$y['RevoqC2']);?></td></tr>
								<tr><?php  a("SALPICADO",$y['RevoqC3']);?></td></tr>
								<tr><?php  a("BOLSEADO",$y['RevoqC4']);?></td></tr>
							</table>
						</td>
						<!-- PISOS C-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("MADERA DE PINOTEA",$y['PisosC1']);?></td></tr>
								<tr><?php  a("MOSAICO CALCÁREO",$y['PisosC2']);?></td></tr>
								<tr><?php  a("CERAMICO COMUN",$y['PisosC3']);?></td></tr>
								<tr><?php  a("ALFOMBRA",$y['PisosC4']);?></td></tr>
								<tr><?php  a("BALDOSA COLORADA",$y['PisosC5']);?></td></tr>
								<tr><?php  a("PLACAS VINILICAS",$y['PisosC6']);?></td></tr>
							</table>
						</td>
						<!-- PUERTAS Y VENTANAS C-->
						<td>
										<table class="table-huggi table2">
											<tr><?php  a("HECHAS EN SERIE",$y['MadeC1']);?></td></tr>
											<tr><?php  a("PUERTAS CON POSTIGONES",$y['MadeC2']);?></td></tr>
											<tr><?php  a("CORTINA DE ENROLLAR MADERA O PLASTICO",$y['MadeC3']);?></td></tr>
											<tr><?php  a("CON VIDRIO",$y['MadeC4']);?></td></tr>
										</table>
						</td>
						<td>
							<table class="table-huggi table2">
											<tr><?php  a("HECHAS EN SERIE",$y['MetaC1']);?></td></tr>
											<tr><?php  a("CON VIDRIOS",$y['MetaC2']);?></td></tr>
											<tr><?php  a("CPOSTIGON DE CHAPA",$y['MetaC3']);?></td></tr>
											<tr><?php  a("VENTANA A BALANCIN",$y['MetaC4']);?></td></tr>
											<tr><?php  a("ANODIZADO COMUN",$y['MetaC5']);?></td></tr>
										</table>
						</td>
						<!-- BAÑOS C-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("LAVATORIO DE PARED",$y['BanoC1']);?></td></tr>
								<tr><?php  a("MINGITORIOS A CANALETA DE CEMENTO ALISADO",$y['BanoC2']);?></td></tr>
								<tr><?php  a("MULTIFAZ",$y['BanoC3']);?></td></tr>
							</table>
						</td>
						<!-- COCINA C-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("MESADA DE GRANITO RECONSTRUIDO",$y['CociC1']);?></td></tr>
								<tr><?php  a("MESADA DE ESCALLAS DE MARMOL",$y['CociC2']);?></td></tr>
								<tr><?php  a("MESADA ACERO INOXIDABLE",$y['CociC3']);?></td></tr>
								<tr><?php  a("MESADA DE CERAMICOS",$y['CociC4']);?></td></tr>
							</table>
						</td>
						<!-- REVESTIMIENTO C-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("CEMENTO COMUN O BLANCO EN BAÑOS",$y['RevesC1']);?></td></tr>
							</table>
						</td>
						<!-- INSTALACIONES COMPLEMENTARIAS C-->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("EQUIPO DE BOMBEO DE AGUA",$y['InstaC1']);?></td></tr>
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
								<tr><?php  a("PLACAS PREMOLDEADAS",$y['FachaD1']);?></td></tr>
								<tr><?php  a("SIN TERMINAR",$y['FachaD2']);?></td></tr>
							</table>
						</td>
						<!-- PAREDES D-->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("FIBROCEMENTO",$y['ParedD1']);?></td></tr>
								<tr><?php  a("INSTALACION ELECT. EXTERIOR",$y['ParedD2']);?></td></tr>
								<tr><?php  a("PLACAS PREMOLDEADAS",$y['ParedD3']);?></td></tr>
							</table>
						</td>
						<!-- ESCALERAS D-->
						<td style="background-color: lightgrey">
							<table class="table2  table-huggi" >
								<tr><td></td></tr>
							</table>
						</td>
						<!-- TECHOS D-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("CHAPA RURAL",$y['TechoD1']);?></td></tr>
							</table>
						</td>
						<!-- CIELORRASOS D-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("TELGOPOR",$y['CieloD1']);?></td></tr>
								<tr><?php  a("NO TIENE",$y['CieloD2']);?></td></tr>
							</table>
						</td>
						<!-- REVOQUES D-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("BLANQUEADO",$y['RevoqD1']);?></td></tr>
								<tr><?php  a("NO TIENE",$y['RevoqD2']);?></td></tr>
							</table>
						</td>
						<!-- PISOS D-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("LADRILLO",$y['PisosD1']);?></td></tr>
								<tr><?php  a("CEMENTO ALISADO",$y['PisosD2']);?></td></tr>
								<tr><?php  a("NO TIENE",$y['PisosD3']);?></td></tr>
							</table>
						</td>
						<!-- PUERTAS Y VENTANAS D-->
						<td>
										<table class="table-huggi table2">
											<tr><?php  a("VENTANA SIN CORTINA O POSTIGOS",$y['MadeD1']);?></td></tr>
											<tr><?php  a("NO TIENE",$y['MadeD2']);?></td></tr>
										</table>
						</td>
						<td>
							<table class="table-huggi table2">
											<tr><?php  a("NO TIENE",$y['MetaD1']);?></td></tr>
										</table>
						</td>
						<!-- BAÑOS D-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("INODORO A LA TURCA",$y['BanoD1']);?></td></tr>
								<tr><?php  a("PILETA DE LAVAR",$y['BanoD2']);?></td></tr>
							</table>
						</td>
						<!-- COCINA D-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("UNICO EQUIPAMIENTO PILETA DE COCINA",$y['CociD1']);?></td></tr>
								<tr><?php  a("NO TIENE",$y['CociD2']);?></td></tr>
							</table>
						</td>
						<!-- REVESTIMIENTO D-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("NO TIENE",$y['RevesD1']);?></td></tr>
							</table>
						</td>
						<!-- INSTALACIONES COMPLEMENTARIAS D-->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("NO TIENE",$y['InstaD1']);?></td></tr>
							</table>
						</td>
						<td><?php echo $Totales[3]; ?></td>
					</tr>
					<!-- COMIENZO RUBRO 3 -->
					<tr>
						<td colspan="15" style="background-color: lightgrey; text-align: left;">RUBRO 3 : ESTADO DE CONSERVACION DEL EDIFICIO A trasladar a Rubro 5 inciso 3</td>
					</tr>
					<tr class="table-huggi2">
						<td>Estado conserv.</td>
						<td>
							<table class="table2">
								<tr>
									<?php MostrarEstado("Facha"); ?>
								</tr>
								<tr>
									<td>6</td>
									<td>4</td>
									<td>2</td>
								</tr>
							</table>
						</td>
						<td>
							<table class="table2">
								<tr>
									<?php MostrarEstado("Pared"); ?>
								</tr>
								<tr>
									<td>25</td>
									<td>16</td>
									<td>9</td>
								</tr>
							</table>
						</td>
						<td>
							<table class="table2">
								<tr>
									<?php MostrarEstado("Esca"); ?>
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
									<td>7</td>
									<td>4</td>
									<td>2</td>
								</tr>
							</table>
						</td>
						<td>
							<table class="table2">
								<tr>
									<?php MostrarEstado("Revoq"); ?>
								</tr>
								<tr>
									<td>7</td>
									<td>4</td>
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
									<td>12</td>
									<td>8</td>
									<td>4</td>
								</tr>
							</table>
						</td>
						<td>
										<table class="table2">
											<tr>
												<?php MostrarEstado("Made"); ?>
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
												<?php MostrarEstado("Meta"); ?>
											</tr>
											<tr>
												<td>8</td>
												<td>5</td>
												<td>3</td>
											</tr>
										</table>
						</td>
						<td>
							<table class="table2">
								<tr>
									<?php MostrarEstado("Bano"); ?>
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
									<?php MostrarEstado("Coci"); ?>
								</tr>
								<tr>
									<td>4</td>
									<td>2</td>
									<td>1</td>
								</tr>
							</table>
						</td>
						<td>
							<table class="table2">
								<tr>
									<?php MostrarEstado("Reves"); ?>
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
									<?php MostrarEstado("Inst"); ?>
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
						</tr>
						<tr>
							<td>Rango de puntaje</td>
							<td>
								<table class="table2">
									<tr style="text-align: center;">
										<td>mas de 74</td>
										<td>de 46 a 74</td>
										<td>hasta 45</td>
									</tr>
								</table>
							</td>
							<td>
								<table class="table2">
									<tr style="text-align: center;">
										<td>mas de 74</td>
										<td>de 46 a 74</td>
										<td>hasta 45</td>
									</tr>
								</table>
							</td>
							<td>
								<table class="table2">
									<tr style="text-align: center;">
										<td>mas de 66</td>
										<td>de 40 a 66</td>
										<td>hasta 39</td>
									</tr>
								</table>
							</td>
							<td>
								<table class="table2">
									<tr style="text-align: center;">
										<td>mas de 60</td>
										<td>de 38 a 60</td>
										<td>hasta 37</td>
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
						<td width="180px">Muros revoques o cerramientos exteriores</td>
						<td width="100px">Techos o Cielorrasos</td>
						<td width="200px">Tabiques, revoques o revesitimientos interiores </td>
						<td >Pisos</td>
						<td >Baño - Toilette</td>
						<td >Cocina</td>
						<td >instalaciones Complementarias</td>
						<td >Suma de puntos</td>
					</tr>
					<tr class="comp2">
						<td><table><tr><td width="30%" align="center"><?php CalcularReci("ParedReci"); ?></td><td align="center">16</td></tr></table></td>
						<td><table><tr><td width="40%" align="center"><?php CalcularReci("TechoReci"); ?></td><td align="center">12</td></tr></table></td>
						<td><table><tr><td width="30%" align="center"><?php CalcularReci("RevoqReci"); ?></td><td align="center">14</td></tr></table></td>
						<td><table><tr><td width="50%" align="center"><?php CalcularReci("PisosReci"); ?></td><td align="center">8</td></tr></table></td>
						<td><table><tr><td width="30%" align="center"><?php CalcularReci("BanoReci"); ?></td><td align="center">19</td></tr></table></td>
						<td><table><tr><td width="30%" align="center"><?php CalcularReci("CociReci"); ?></td><td align="center">17</td></tr></table></td>
						<td><table><tr><td width="30%" align="center"><?php CalcularReci("InstReci1"); ?></td><td align="center">14</td></tr></table></td>
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
					<td style="width: 50%">PARTIDO (en letras):</td>
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
				<tr><td height="18.5px">
					<?php echo $Fobservaciones ?>
				</td></tr>
				<tr><td height="18.5px">
					<?php echo $Fobservaciones1 ?>
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
		$filename = "904-HOJA2.pdf";
		$dompdf->stream($filename, array("Attachment" => 0));
?>
