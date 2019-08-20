<?php
include("sesion.php");
	$pagina='PDFform9051PHP';
	include("sql/conexion.php");
	include("seguridadForm.php");
	include('sql/mostrarDatosObra.php');

	$post = $_GET["idform"];
	$x=mysqli_query($conexion, "SELECT * FROM `form905` WHERE `codForm905` = '".$post."'");
	$y = mysqli_fetch_array($x);
	function a($texto,$a){
		if ($a == 1)
			echo "<td style='background-color: #2F2C2C; color: white; padding: 0.5px' >".$texto."</td>";
		else
			echo "<td color: black;'>".$texto."</td>";
	}
	include('funciones/valores905.php');
	include('funciones/calculosrub2.php');
	include('funciones/calculosrub4.php');
	include('funciones/Totales905.php');
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
				padding-top: 10px;
				margin-bottom: 5px;
			}
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
					EDIFICIOS destinados a fábricas; talleres; depósitos; garages para uso público, estaciones de servicio; astilleros; elevadores de granos; aeropuertos o destinos similares
			</div>
			<div class="version">
				<?php echo $version ?>
			</div>
			<div class="img">
				<img src="img/logopdf905.png">
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
						<td rowspan="2">4 <br>ESQUELETO</td>
						<td rowspan="2">5 <br>ARMADURA</td>
						<td rowspan="2">6 <br>TECHOS</td>
						<td rowspan="2">7 <br>CIELORRASOS</td>
						<td rowspan="2" style="width: 80px;">8 <br>REVOQUES</td>
						<td rowspan="2" style="width: 80px;">9 <br>PISOS</td>
						<td colspan="2">PUERTAS Y VENTANAS</td>
						<td rowspan="2">12 <br>BAÑOS</td>
						<td rowspan="2">13 <br>REVESTIMIENTO</td>
						<td rowspan="2">14 <br>INSTALACIONES COMPLEMENTARIAS</td>
						<td rowspan="2">15 <br>CANTIDAD CUADROS TACHADOS</td>
					</tr>
					<tr>
						<td>10 <br>DE MADERA</td>
						<td>11 <br>METALICA</td>
					</tr>
					<!-- B -->
					<tr>
						<td>B</td>
						<!-- FACHADA B-->
						<td>
							<table" class="table2 table-huggi">
								<tr><?php  a("REVESTIMIENTO DE GRANITO O MARMOL",$y['FachaB1']);?></td></tr>
								<tr><?php  a("REVOQUE ESPECIAL",$y['FachaB2']);?></td></tr>
								<tr><?php  a("IMITACION PIEDRA MOLDURADA",$y['FachaB3']);?></td></tr>
							</table>
						</td>
						<!-- PAREDE B-->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("MUROS DOBLES",$y['ParedB1']);?></td></tr>
								<tr><?php  a("LADRILLO A LA CAL",$y['ParedB2']);?></td></tr>
								<tr><?php  a("CON AISLACION",$y['ParedB3']);?></td></tr>
								<tr><?php  a("LADRILLOS DE VIDRIO",$y['ParedB4']);?></td></tr>
								<tr><?php  a("LADRILLOS HUECOS",$y['ParedB5']);?></td></tr>
							</table>
						</td>
						<!-- ESQUELETO B-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("HORMIGON ARMADO (LUZ DE 10M O MAS)",$y['EsqueB1']);?></td></tr>
								<tr><?php  a("HORMIGON PRETENSADO<",$y['EsqueB2']);?></td></tr>
								<tr><?php  a("MADERA LAMINADA",$y['EsqueB3']);?></td></tr>
							</table>
						</td>
						<!-- ARMADURA B-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("PÓRTICO",$y['ArmaB1']);?></td></tr>
								<tr><?php  a("TIPO 'SHED'",$y['ArmaB2']);?></td></tr>
								<tr><?php  a("ESTEREO ESTRUCTURAS",$y['ArmaB3']);?></td></tr>
								<tr><?php  a("PLAGADO DE HORMIGON",$y['ArmaB4']);?></td></tr>
								<tr><?php  a("PARABOLOIDE HIPERBOLICO",$y['ArmaB5']);?></td></tr>
							</table>
						</td>
						<!-- TECHOS B-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("TEJA",$y['TechoB1']);?></td></tr>
								<tr><?php  a("BALDOSA COLORADA SOBRE LOSA",$y['TechoB2']);?></td></tr>
							</table>
						</td>
						<!-- CIELORRASOS B-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("ARTESONADO EN YESO",$y['CieloB1']);?></td></tr>
								<tr><?php  a("GARGANTA PARA LUZ DIFUSA",$y['CieloB2']);?></td></tr>
							</table>
						</td>
						<!-- REVOQUES B-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("ESTUCADOS DE YESO",$y['RevoqB1']);?></td></tr>
								<tr><?php  a("IMITACION DE PIEDRA MODULADA",$y['RevoqB2']);?></td></tr>
								<tr><?php  a("REVOQUES ESPECIALES",$y['RevoqB3']);?></td></tr>
								<tr><?php  a("PINTADOS AL ACEITE",$y['RevoqB4']);?></td></tr>
							</table>
						</td>
						<!-- PISOS B-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("PARQUET DE MADERA FINA<",$y['PisosB1']);?></td></tr>
								<tr><?php  a("MOSAICO GRANITICO MEDIDA GRANDE",$y['PisosB2']);?></td></tr>
								<tr><?php  a("ENTARUGADO",$y['PisosB3']);?></td></tr>
								<tr><?php  a("CERAMICO ESMALTADO",$y['PisosB4']);?></td></tr>
							</table>
						</td>
						<!-- PUERTAS Y VENTANAS B-->
						<td>
										<table class="table-huggi table2">
											<tr><?php  a("MADERA FINA",$y['MadeB1']);?></td></tr>
											<tr><?php  a("CORTINA DE ENROLLAR",$y['MadeB2']);?></td></tr>
											<tr><?php  a("CON CELOSIA",$y['MadeB3']);?></td></tr>
											<tr><?php  a("A MEDIDA",$y['MadeB4']);?></td></tr>
										</table>
						</td>
						<td>
							<table class="table-huggi table2">
											<tr><?php  a("A MEDIDA",$y['MetaB1']);?></td></tr>
											<tr><?php  a("CORTINAS DE ENROLLAR",$y['MetaB2']);?></td></tr>
											<tr><?php  a("DOBLE CONTACTO",$y['MetaB3']);?></td></tr>
											<tr><?php  a("CONTRA INCENDIO",$y['MetaB4']);?></td></tr>
											<tr><?php  a("VIDRIO TEMPLADO",$y['MetaB5']);?></td></tr>
											<tr><?php  a("DOBLE CONTACTO DE ABRIR",$y['MetaB6']);?></td></tr>
											<tr><?php  a("CON CELOSIA",$y['MetaB7']);?></td></tr>
											<tr><?php  a("ANODIZADO COMUN",$y['MetaB8']);?></td></tr>
										</table>
						</td>
						<!-- BAÑOS B-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("INODORO DE PEDESTAL",$y['BanoB1']);?></td></tr>
								<tr><?php  a("BIDET",$y['BanoB2']);?></td></tr>
								<tr><?php  a("LAVATORIO DE PIE",$y['BanoB3']);?></td></tr>
								<tr><?php  a("MINGITORIOS A PALANGANA ENLOZADOS",$y['BanoB4']);?></td></tr>
							</table>
						</td>
						<!-- REVESTIMIENTO B-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("ACUSTICOS",$y['RevesB1']);?></td></tr>
								<tr><?php  a("AISLACION DE CORCHO",$y['RevesB2']);?></td></tr>
								<tr><?php  a("'LANA' DE VIDRIO",$y['RevesB3']);?></td></tr>
								<tr><?php  a("AZULEJOS DECORADOS",$y['RevesB4']);?></td></tr>
								<tr><?php  a("CERAMICOS ESMALTADOS",$y['RevesB5']);?></td></tr>
							</table>
						</td>
						<!-- INSTALACIONES COMPLEMENTARIAS B-->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("PLANTA DE DEPURACION DE LIQUIDOS CLOACALES",$y['InstaB1']);?></td></tr>
								<tr><?php  a("AMONTACARGAS",$y['InstaB2']);?></td></tr>
								<tr><?php  a("CAMARA FRIGORIFICA",$y['InstaB3']);?></td></tr>
								<tr><?php  a("ASCENSORES",$y['InstaB4']);?></td></tr>
							</table>
						</td>
						<td><?php echo $Totales[0]; ?></td>
					</tr>
					<!-- C -->
					<tr>
						<td>C</td>
						<!-- FACHADA C-->
						<td>
							<table" class="table2 table-huggi">
								<tr><?php  a("IMITACION PIEDRA LISA",$y['FachaC1']);?></td></tr>
								<tr><?php  a("LADRILLO CON JUNTA TOMADA",$y['FachaC2']);?></td></tr>
								<tr><?php  a("HORMIGON VISTO",$y['FachaC3']);?></td></tr>
								<tr><?php  a("CERAMICO ESMALTADO",$y['FachaC4']);?></td></tr>
							</table>
						</td>
						<!-- PAREDE C-->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("BLOCKS DE CEMENTO",$y['ParedC1']);?></td></tr>
								<tr><?php  a("INSTALACION ELECTRICA EMBUTIDA",$y['ParedC2']);?></td></tr>
							</table>
						</td>
						<!-- ESQUELETO C-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("HORMIGON ARMADO",$y['EsqueC1']);?></td></tr>
								<tr><?php  a("DE HIERRO",$y['EsqueC2']);?></td></tr>
							</table>
						</td>
						<!-- ARMADURA C-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("COMUNES DE HIERRO U HORMIGON",$y['ArmaC1']);?></td></tr>
								<tr><?php  a("PREFABRICADAS",$y['ArmaC2']);?></td></tr>
								<tr><?php  a("PARABOLICOS COMUNES DE HIERRO",$y['ArmaC3']);?></td></tr>
							</table>
						</td>
						<!-- TECHOS C-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("BOBEDA CASCARA",$y['TechoC1']);?></td></tr>
								<tr><?php  a("LOSA DE HORMIGON",$y['TechoC2']);?></td></tr>
								<tr><?php  a("AUTOPORTANTE HIERRO O FIBROCEMENTO MAS DE 10 mts DE LUZ",$y['TechoC3']);?></td></tr>
							</table>
						</td>
						<!-- CIELORRASOS C-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("YESO LISO",$y['CieloC1']);?></td></tr>
								<tr><?php  a("PINTADOS AL AGUA",$y['CieloC2']);?></td></tr>
								<tr><?php  a("METALICO EN PLACAS",$y['CieloC3']);?></td></tr>
								<tr><?php  a("PLACAS DE YESO",$y['CieloC4']);?></td></tr>
							</table>
						</td>
						<!-- REVOQUES C-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("IMITACION DE PIEDRA LISA",$y['RevoqC1']);?></td></tr>
								<tr><?php  a("PINTADOS AL AGUA",$y['RevoqC2']);?></td></tr>
							</table>
						</td>
						<!-- PISOS C-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("MOSAICO GRANITICO MEDIDA COMUN",$y['PisosC1']);?></td></tr>
								<tr><?php  a("PARQUET COMUN",$y['PisosC2']);?></td></tr>
								<tr><?php  a("HORMIGON SIMPLE O ARMADO",$y['PisosC3']);?></td></tr>
								<tr><?php  a("CERAMICO COMUN",$y['PisosC4']);?></td></tr>
								<tr><?php  a("METALICO",$y['PisosC5']);?></td></tr>
								<tr><?php  a("PAVIMENTO ARTICULADO",$y['PisosC6']);?></td></tr>
								<tr><?php  a("GOMA",$y['PisosC7']);?></td></tr>
							</table>
						</td>
						<!-- PUERTAS Y VENTANAS C-->
						<td>
										<table class="table-huggi table2">
											<tr><?php  a("PORTONES DE MADERA DURA",$y['MadeC1']);?></td></tr>
											<tr><?php  a("PINTADAS CON ESMALTE",$y['MadeC2']);?></td></tr>
											<tr><?php  a("BARNIZADAS",$y['MadeC3']);?></td></tr>
										</table>
						</td>
						<td>
							<table class="table-huggi table2">
											<tr><?php  a("HECHAS EN SERIE",$y['MetaC1']);?></td></tr>
											<tr><?php  a("CON MARCO Y HOJA COMUN",$y['MetaC2']);?></td></tr>
											<tr><?php  a("CORTINA DE CHAPA ONDULADA",$y['MetaC3']);?></td></tr>
											<tr><?php  a("CORTINA DE ENROLLAR DE ALUMINIO",$y['MetaC4']);?></td></tr>
											<tr><?php  a("CORTINA TIPO MALLA",$y['MetaC5']);?></td></tr>
											<tr><?php  a("CORREDIZA CON COLIZA",$y['MetaC6']);?></td></tr>
											<tr><?php  a("PINTADAS CON ESMALTE",$y['MetaC7']);?></td></tr>
										</table>
						</td>
						<!-- BAÑOS C-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("LAVATORIO DE PARED<",$y['BanoC1']);?></td></tr>
								<tr><?php  a("MINGITORIOS A CANALETA ENLOZADOS",$y['BanoC2']);?></td></tr>
								<tr><?php  a("CON DUCHAS",$y['BanoC3']);?></td></tr>
								<tr><?php  a("MULTIFAZ",$y['BanoC4']);?></td></tr>
							</table>
						</td>
						<!-- REVESTIMIENTO C-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("AZULEJOS",$y['RevesC1']);?></td></tr>
								<tr><?php  a("PENTAGRES",$y['RevesC2']);?></td></tr>
								<tr><?php  a("CERAMICO COMUN",$y['RevesC3']);?></td></tr>
							</table>
						</td>
						<!-- INSTALACIONES COMPLEMENTARIAS C-->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("SERVICIO CONTRA INCENDIO",$y['InstaC1']);?></td></tr>
								<tr><?php  a("ROCIADORES CENITALES",$y['InstaC2']);?></td></tr>
							</table>
						</td>
						<td><?php echo $Totales[1]; ?></td>
					</tr>
					<!-- D -->
					<tr>
						<td>D</td>
						<!-- FACHADA D-->
						<td>
							<table" class="table2 table-huggi">
								<tr><?php  a("REVOQUE COMUN",$y['FachaD1']);?></td></tr>
								<tr><?php  a("SALPICADO",$y['FachaD2']);?></td></tr>
								<tr><?php  a("PLACAS PREMOLDEADAS",$y['FachaD3']);?></td></tr>
								<tr><?php  a("CERAMICO COMUN",$y['FachaD4']);?></td></tr>
							</table>
						</td>
						<!-- PAREDE D-->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("MIXTA: PARTE LADRILLO Y PARTE ZINC O FIBROCEMENTO",$y['ParedD1']);?></td></tr>
								<tr><?php  a("INSTALACION ELECTRICA EXTERIOR CON CAÑO",$y['ParedD2']);?></td></tr>
								<tr><?php  a("PLACAS PREMOLDEADAS",$y['ParedD3']);?></td></tr>
							</table>
						</td>
						<!-- ESQUELETO D-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("PILARES DE MAMPOSTERIA",$y['EsqueD1']);?></td></tr>
								<tr><?php  a("DE HIERRO REDONDO COMUN",$y['EsqueD2']);?></td></tr>
							</table>
						</td>
						<!-- ARMADURA D-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("PMADERA",$y['ArmaD1']);?></td></tr>
							</table>
						</td>
						<!-- TECHOS D-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("CHAPA DE ZINC",$y['TechoD1']);?></td></tr>
								<tr><?php  a("CHAPA DE FIBROCEMENTO",$y['TechoD2']);?></td></tr>
								<tr><?php  a("CHAPA PLASTICA",$y['TechoD3']);?></td></tr>
								<tr><?php  a("CHAPA DE ALUMINIO<",$y['TechoD4']);?></td></tr>
								<tr><?php  a("AUTOPORTANTE (hasta 10m)",$y['TechoD5']);?></td></tr>
								<tr><?php  a("AUTOPORTANTE CHAPA CURVA",$y['TechoD6']);?></td></tr>
							</table>
						</td>
						<!-- CIELORRASOS D-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("REVOQUE A LA CAL",$y['CieloD1']);?></td></tr>
								<tr><?php  a("CELOTEX O SIMILAR",$y['CieloD2']);?></td></tr>
								<tr><?php  a("PINTADOS A LA CAL",$y['CieloD3']);?></td></tr>
								<tr><?php  a("MADERA",$y['CieloD4']);?></td></tr>
								<tr><?php  a("TELGOPOR",$y['CieloD5']);?></td></tr>
							</table>
						</td>
						<!-- REVOQUES D-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("COMUNES A LA CAL",$y['RevoqD1']);?></td></tr>
								<tr><?php  a("PINTADOS A LA CAL",$y['RevoqD2']);?></td></tr>
								<tr><?php  a("SALPICADO",$y['RevoqD3']);?></td></tr>
							</table>
						</td>
						<!-- PISOS D-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("CEMENTO ALISADO",$y['PisosD1']);?></td></tr>
							</table>
						</td>
						<!-- PUERTAS Y VENTANAS D-->
						<td>
										<table class="table-huggi table2">
											<tr><?php  a("MADERA DE PINO",$y['MadeD1']);?></td></tr>
											<tr><?php  a("POSTIGON DE MADERA",$y['MadeD2']);?></td></tr>
										</table>
						</td>
						<td>
							<table class="table-huggi table2">
											<tr><?php  a("PORTON CORREDIZO DE CHAPA",$y['MetaD1']);?></td></tr>
											<tr><?php  a("CON VIDRIOS",$y['MetaD2']);?></td></tr>
											<tr><?php  a("POSTIGON",$y['MetaD3']);?></td></tr>
										</table>
						</td>
						<!-- BAÑOS D-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("PILETONES",$y['BanoD1']);?></td></tr>
								<tr><?php  a("INODORO A LA TURCA",$y['BanoD2']);?></td></tr>
								<tr><?php  a("MINGITORIOS A CANALETA DE CEMENTO",$y['BanoD3']);?></td></tr>
							</table>
						</td>
						<!-- REVESTIMIENTO D-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("CEMENTO COMUN O BLANCO",$y['RevesD1']);?></td></tr>
							</table>
						</td>
						<!-- INSTALACIONES COMPLEMENTARIAS D-->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("TANQUES PARA LIQUIDOS O GASES (CON EXEPCION DEL 'TIPO' AUSTRALIANO)",$y['InstaD1']);?></td></tr>
							</table>
						</td>
						<td><?php echo $Totales[2]; ?></td>
					</tr>
					<!-- E -->
					<tr>
						<td>E</td>
						<!-- FACHADA E-->
						<td>
							<table" class="table2 table-huggi">
								<tr><?php  a("ZINC",$y['FachaE1']);?></td></tr>
								<tr><?php  a("MADERA SIN TRABAJAR",$y['FachaE2']);?></td></tr>
								<tr><?php  a("SIN TERMINAR",$y['FachaE3']);?></td></tr>
							</table>
						</td>
						<!-- PAREDE E-->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("ZINC, FIBROCEMENTO, ALUMINIO O MADERA",$y['ParedE1']);?></td></tr>
								<tr><?php  a("INSTALACION ELECTRICA EXTERIOR SIN CAÑO",$y['ParedE2']);?></td></tr>
								<tr><?php  a("NO TIENE",$y['ParedE3']);?></td></tr>
							</table>
						</td>
						<!-- ESQUELETO E-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("MADERA",$y['EsqueE1']);?></td></tr>
								<tr><?php  a("NO TIENE",$y['EsqueE2']);?></td></tr>
							</table>
						</td>
						<!-- ARMADURA E-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("MADERA",$y['ArmaE1']);?></td></tr>
							</table>
						</td>
						<!-- TECHOS E-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("CHAPA RURAL",$y['TechoE1']);?></td></tr>
							</table>
						</td>
						<!-- CIELORRASOS E-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("NO TIENE",$y['CieloE1']);?></td></tr>
							</table>
						</td>
						<!-- REVOQUES E-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("NO TIENE",$y['RevoqE1']);?></td></tr>
							</table>
						</td>
						<!-- PISOS E-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("LADRILLO",$y['PisosE1']);?></td></tr>
								<tr><?php  a("NO TIENE",$y['PisosE2']);?></td></tr>
							</table>
						</td>
						<!-- PUERTAS Y VENTANAS E-->
						<td>
										<table class="table-huggi table2">
											<tr><?php  a("NO TIENE",$y['MadeE1']);?></td></tr>
										</table>

						</td>
						<td>
							<table class="table-huggi table2">
											<tr><?php  a("NO TIENE",$y['MetaE1']);?></td></tr>
										</table>
						</td>
						<!-- BAÑOS E-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("NO TIENE",$y['BanoE1']);?></td></tr>
							</table>
						</td>
						<!-- REVESTIMIENTO E-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("NO TIENE",$y['RevesE1']);?></td></tr>
							</table>
						</td>
						<!-- INSTALACIONES COMPLEMENTARIAS E-->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("NO TIENE",$y['InstaE1']);?></td></tr>
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
									<?php MostrarEstado("Esque"); ?>
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
									<?php MostrarEstado("Arma"); ?>
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
									<?php MostrarEstado("Techo"); ?>
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
									<?php MostrarEstado("Cielo"); ?>
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
									<?php MostrarEstado("Revoq"); ?>
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
									<?php MostrarEstado("Pisos"); ?>
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
									<?php MostrarEstado("Insta"); ?>
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
							<td>B</td>
							<td>C</td>
							<td>D</td>
							<td>E</td>
						</tr>
						<tr>
							<td>Rango de puntaje</td>
							<td>
								<table class="table2">
									<tr style="text-align: center;">
										<td>mas de 75</td>
										<td>de 44 a 75</td>
										<td>hasta 41</td>
									</tr>
								</table>
							</td>
							<td>
								<table class="table2">
									<tr style="text-align: center;">
										<td>mas de 73</td>
										<td>de 42 a 73</td>
										<td>hasta 41</td>
									</tr>
								</table>
							</td>
							<td>
								<table class="table2">
									<tr style="text-align: center;">
										<td>mas de 67</td>
										<td>de 42 a 67</td>
										<td>hasta 41</td>
									</tr>
								</table>
							</td>
							<td>
								<table class="table2">
									<tr style="text-align: center;">
										<td>mas de 57</td>
										<td>de 34 a 57</td>
										<td>hasta 33</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td>Suma de puntos</td>
							<td>
								<table class="table2 smapts" style="width: 33.3%">
									<tr style="text-align: center;">
										<td><?php echo $B[0]; ?></td>
										<td><?php echo $B[1]; ?></td>
										<td><?php echo $B[2]; ?></td>
									</tr>
								</table>
							</td>
							<td>
								<table class="table2 smapts" style="width: 33.3%">
									<tr style="text-align: center;">
										<td><?php echo $C[0]; ?></td>
										<td><?php echo $C[1]; ?></td>
										<td><?php echo $C[2]; ?></td>
									</tr>
								</table>
							</td>
							<td>
								<table class="table2 smapts" style="width: 33.3%">
									<tr style="text-align: center;">
										<td><?php echo $D[0]; ?></td>
										<td><?php echo $D[1]; ?></td>
										<td><?php echo $D[2]; ?></td>
									</tr>
								</table>
							</td>
							<td>
								<table class="table2 smapts" style="width: 33.3%">
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
						<td width="100px">Esqueleto</td>
						<td >Armaduras o Techos</td>
						<td width="200px">Tabiques, revoques o revestimientos interiores</td>
						<td >Pisos</td>
						<td >Baños o Vestuarios</td>
						<td >instalaciones Complementarias</td>
						<td >Suma de puntos</td>
					</tr>
					<tr class="comp2">
						<td><table><tr><td width="30%" align="center"><?php CalcularReci("ParedReci"); ?></td><td align="center">16</td></tr></table></td>
						<td><table><tr><td width="40%" align="center"><?php CalcularReci("EsqueReci"); ?></td><td align="center">12</td></tr></table></td>
						<td><table><tr><td width="30%" align="center"><?php CalcularReci("ArmaReci"); ?></td><td align="center">14</td></tr></table></td>
						<td><table><tr><td width="30%" align="center"><?php CalcularReci("RevoqReci"); ?></td><td align="center">8</td></tr></table></td>
						<td><table><tr><td width="30%" align="center"><?php CalcularReci("PisosReci"); ?></td><td align="center">19</td></tr></table></td>
						<td><table><tr><td width="30%" align="center"><?php CalcularReci("BanoReci"); ?></td><td align="center">17</td></tr></table></td>
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
		$filename = $FcodPartido."-".$Fpartida."-Formulario 905.pdf";
		$dompdf->stream($filename, array("Attachment" => 0));
?>
