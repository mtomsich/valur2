<?php
include("sesion.php");
	$pagina='PDFform9062PHP';
	include("sql/conexion.php");
	include("seguridadForm.php");
	include('sql/mostrarDatosObra.php');

	$post = $_GET["idform"];
	$x=mysqli_query($conexion, "SELECT * FROM `form906` WHERE `codForm906` = '".$post."'");
	$y = mysqli_fetch_array($x);
	function a($texto,$a){
		if ($a == 1)
			echo "<td style='background-color: #2F2C2C; color: white; padding: 0.5px' >".$texto."</td>";
		else
			echo "<td color: black;'>".$texto."</td>";
	}
	include('funciones/valores906.php');
	include('funciones/calculosrub2.php');
	include('funciones/calculosrub4.php');
	include('funciones/Totales906.php');
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
					EDIFICIOS destinados a teatros; cinematografos; salones de actos con superficiemayor a 300m2; casinos o destinos similares.
			</div>
			<div class="version">
				<?php echo $version ?>
			</div>
			<div class="img">
				<img src="img/logopdf906.png">
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
						<td rowspan="2">5 <br>ESQUELETO</td>
						<td rowspan="2">6 <br>ARMADURA</td>
						<td rowspan="2">7 <br>TECHOS</td>
						<td rowspan="2">8 <br>CIELORRASOS</td>
						<td rowspan="2" style="width: 80px;">9 <br>REVOQUES</td>
						<td rowspan="2" style="width: 80px;">10<br>PISOS</td>
						<td colspan="2" ">PUERTAS Y VENTANAS</td>
						<td rowspan="2">13 <br>BAÑOS</td>
						<td rowspan="2">14 <br>REVESTIMIENTO</td>
						<td rowspan="2">15 <br>INSTALACIONES COMPLEMENTARIAS</td>
						<td rowspan="2">16 <br>CANTIDAD CUADROS TACHADOS</td>
					</tr>
					<tr>
						<td>11 <br>DE MADERA</td>
						<td>12 <br>METALICA</td>
					</tr>
					<!-- A -->
					<tr>
						<td>A</td>
						<!-- FACHADA A-->
						<td>
							<table" class="table2 table-huggi">
								<tr><?php  a("REVESTIMIENTO DE GRANITO O MARMOL",$y['FachaA1']);?></td></tr>
								<tr><?php  a("REVESTIMIENTO PIEDRA TIPO M. DEL PLATA",$y['FachaA2']);?></td></tr>
								<tr><?php  a("CRISTAL TEMPLADO",$y['FachaA3']);?></td></tr>
								<tr><?php  a("REVESTIMIENTO METALICO",$y['FachaA4']);?></td></tr>
							</table>
						</td>
						<!-- PAREDE A-->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("MUROS DOBLES",$y['ParedA1']);?></td></tr>
								<tr><?php  a("LADRILLOS DE VIDRIO",$y['ParedA2']);?></td></tr>
							</table>
						</td>
						<!-- ESCALERA A-->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("REVESTIDA CON MARMOL",$y['EscaA1']);?></td></tr>
								<tr><?php  a("BARANDA ARTISTICA",$y['EscaA2']);?></td></tr>
								<tr><?php  a("REVESTIDA EN GRANITO",$y['EscaA3']);?></td></tr>
								<tr><?php  a("MADERA FINA",$y['EscaA4']);?></td></tr>
							</table>
						</td>
						<!-- ESQUELETO A-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("HORMIGON ARMADO",$y['EsqueA1']);?></td></tr>
							</table>
						</td>
						<!-- ARMADURA A-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("HORMIGON ARMADO",$y['ArmaA1']);?></td></tr>
							</table>
						</td>
						<!-- TECHOS A-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("TEJA",$y['TechoA1']);?></td></tr>
								<tr><?php  a("BALDOSA COLORADA SOBRE LOSA",$y['TechoA2']);?></td></tr>
							</table>
						</td>
						<!-- CIELORRASOS A-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("ARTESONADO EN YESO",$y['CieloA1']);?></td></tr>
								<tr><?php  a("GARGANTA PARA LUZ DIFUSA",$y['CieloA2']);?></td></tr>
								<tr><?php  a("METALICO A MEDIDA",$y['CieloA3']);?></td></tr>
								<tr><?php  a("MADERA FINA",$y['CieloA4']);?></td></tr>
							</table>
						</td>
						<!-- REVOQUES A-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("PANELES MOLDURADOS",$y['RevoqA1']);?></td></tr>
								<tr><?php  a("ESTUCADOS DE YESO",$y['RevoqA2']);?></td></tr>
								<tr><?php  a("IMITACION DE PIEDRA",$y['RevoqA3']);?></td></tr>
								<tr><?php  a("PINTADOS AL ACEITE",$y['RevoqA4']);?></td></tr>
								<tr><?php  a("LADRILLO CON JUNTA TOMADA",$y['RevoqA5']);?></td></tr>
							</table>
						</td>
						<!-- PISOS A-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("MARMOL",$y['PisosA1']);?></td></tr>
								<tr><?php  a("PARQUET DE MADERA FINA",$y['PisosA1']);?></td></tr>
								<tr><?php  a("MOSAICO GRANITICO",$y['PisosA1']);?></td></tr>
								<tr><?php  a("CERAMICO ESMALTADO",$y['PisosA1']);?></td></tr>
							</table>
						</td>
						<!-- PUERTAS Y VENTANAS A-->
						<td>
										<table class="table-huggi table2">
											<tr><?php  a("MADERA FINA",$y['MadeA1']);?></td></tr>
											<tr><?php  a("CORTINA DE ENROLLAR",$y['MadeA2']);?></td></tr>
											<tr><?php  a("CON CELOSIA",$y['MadeA3']);?></td></tr>
											<tr><?php  a("A MEDIDA",$y['MadeA4']);?></td></tr>
										</table>
						</td>
						<td>
							<table class="table-huggi table2">
											<tr><?php  a("MADERA FINA",$y['MetaA1']);?></td></tr>
											<tr><?php  a("HECHAS A MEDIDA",$y['MetaA2']);?></td></tr>
											<tr><?php  a("CRISTALES",$y['MetaA3']);?></td></tr>
											<tr><?php  a("PUERTAS FORRADAS EN CUERO<",$y['MetaA4']);?></td></tr>
											<tr><?php  a("PUERTAS CORREDIZAS",$y['MetaA5']);?></td></tr>
										</table>
						</td>
						<!-- BAÑOS A-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("BAÑO DE DOS AMBIENTES",$y['BanoA1']);?></td></tr>
								<tr><?php  a("INODORO DE PEDESTAL",$y['BanoA2']);?></td></tr>
								<tr><?php  a("LAVATORIO DE PIE",$y['BanoA3']);?></td></tr>
								<tr><?php  a("MINGITORIOS A PALANGANA O CANALETA ENLOZADOS",$y['BanoA4']);?></td></tr>
								<tr><?php  a("MULTIFAZ",$y['BanoA5']);?></td></tr>
							</table>
						</td>
						<!-- REVESTIMIENTO A-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("ACUSTICOS",$y['RevesA1']);?></td></tr>
								<tr><?php  a("MARMOL O GRANITO",$y['RevesA2']);?></td></tr>
								<tr><?php  a("MADERA MODULADA",$y['RevesA3']);?></td></tr>
								<tr><?php  a("PIEDRA TIPO MAR DEL PLATA",$y['RevesA4']);?></td></tr>
								<tr><?php  a("AZULEJO DECORADO",$y['RevesA5']);?></td></tr>
								<tr><?php  a("CERAMICO ESMALTADO",$y['RevesA6']);?></td></tr>
							</table>
						</td>
						<!-- INSTALACIONES COMPLEMENTARIAS A-->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("AIRE ACONDICIONADO",$y['InstaA1']);?></td></tr>
								<tr><?php  a("CALEFACCION CENTRAL",$y['InstaA2']);?></td></tr>
								<tr><?php  a("LOSA RADIANTE",$y['InstaA3']);?></td></tr>
							</table>
						</td>
						<td><?php echo $Totales[0]; ?></td>
					</tr>
					<!-- B -->
					<tr>
						<td>B</td>
						<!-- FACHADA B-->
						<td>
							<table" class="table2 table-huggi">
								<tr><?php  a("CERAMICO ESMALTADO",$y['FachaB1']);?></td></tr>
								<tr><?php  a("IMITACION DE PIERA",$y['FachaB2']);?></td></tr>
								<tr><?php  a("LADRILLO CON JUNTA TOMADA",$y['FachaB3']);?></td></tr>
								<tr><?php  a("LADRILLO DE VIDRIO",$y['FachaB4']);?></td></tr>
								<tr><?php  a("HORMIGON VISTO",$y['FachaB5']);?></td></tr>
							</table>
						</td>
						<!-- PAREDE B-->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("LADRILLO DE CAL",$y['ParedB1']);?></td></tr>
								<tr><?php  a("LADRILLO HUEVO",$y['ParedB2']);?></td></tr>
								<tr><?php  a("INSTALACION ELECTRICA EMBUTIDA",$y['ParedB3']);?></td></tr>
							</table>
						</td>
						<!-- ESCALERA B-->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("REVESTIDA CON MATERIAL RECONSTRUIDO ",$y['EscaB1']);?></td></tr>
								<tr><?php  a("BARANDA COMUN",$y['EscaB2']);?></td></tr>
								<tr><?php  a("HORMIGON ARMADO",$y['EscaB3']);?></td></tr>
								<tr><?php  a("CERAMICO",$y['EscaB4']);?></td></tr>
								<tr><?php  a("MADERA COMUN",$y['EscaB5']);?></td></tr>
								<tr><?php  a("METALICA",$y['EscaB6']);?></td></tr>
								<tr><?php  a("ALFOMBRA",$y['EscaB7']);?></td></tr>
							</table>
						</td>
						<!-- ESQUELETO B-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("HIERRO",$y['EsqueB1']);?></td></tr>
							</table>
						</td>
						<!-- ARMADURA B-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("HIERRO",$y['ArmaB1']);?></td></tr>
							</table>
						</td>
						<!-- TECHOS B-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("LOSA DE HORMIGON",$y['TechoB1']);?></td></tr>
								<tr><?php  a("LOSA DE VIGUETAS",$y['TechoB2']);?></td></tr>
								<tr><?php  a("CANALON AUTOPORTANTE",$y['TechoB3']);?></td></tr>
							</table>
						</td>
						<!-- CIELORRASOS B-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("YESO LISO",$y['CieloB1']);?></td></tr>
								<tr><?php  a("PINTADOS AL AGUA",$y['CieloB2']);?></td></tr>
								<tr><?php  a("PLACAS ACUSTICAS",$y['CieloB3']);?></td></tr>
							</table>
						</td>
						<!-- REVOQUES B-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("COMUNES A LA CAL",$y['RevoqB1']);?></td></tr>
								<tr><?php  a("PINTADOS AL AGUA",$y['RevoqB2']);?></td></tr>
								<tr><?php  a("SALPICADO",$y['RevoqB3']);?></td></tr>
								<tr><?php  a("BOLSEADO",$y['RevoqB4']);?></td></tr>
							</table>
						</td>
						<!-- PISOS B-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("PARQUET COMUN",$y['PisosB1']);?></td></tr>
								<tr><?php  a("MADERA DE PINOTEA",$y['PisosB2']);?></td></tr>
								<tr><?php  a("CERAMICO COMUN",$y['PisosB3']);?></td></tr>
								<tr><?php  a("ALFOMBRA",$y['PisosB4']);?></td></tr>
								<tr><?php  a("GOMA",$y['PisosB5']);?></td></tr>
							</table>
						</td>
						<!-- PUERTAS Y VENTANAS B-->
						<td>
										<table class="table-huggi table2">
											<tr><?php  a("HECHAS EN SERIE",$y['MadeB1']);?></td></tr>
											<tr><?php  a("BARNIZADAS",$y['MadeB2']);?></td></tr>
											<tr><?php  a("PINTADAS CON ESMALTE",$y['MadeB3']);?></td></tr>
										</table>
						</td>
						<td>
							<table class="table-huggi table2">
											<tr><?php  a("PINTADAS CON ESMALTE",$y['MetaB1']);?></td></tr>
											<tr><?php  a("HERRERIA COMUN",$y['MetaB2']);?></td></tr>
											<tr><?php  a("CORREDIZA ALUMINIO CON COLIZA",$y['MetaB3']);?></td></tr>
											<tr><?php  a("SIMPLE CONTACTO",$y['MetaB4']);?></td></tr>
											<tr><?php  a("ANODIZADO COMUN",$y['MetaB5']);?></td></tr>
										</table>
						</td>
						<!-- BAÑOS B-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("MINGITORIOS A CANALETA CON SEPARACION DE MARMOL",$y['BanoB1']);?></td></tr>
								<tr><?php  a("LAVATORIO DE PARED",$y['BanoB2']);?></td></tr>
								<tr><?php  a("DUCHA SIN ABAÑERA",$y['BanoB3']);?></td></tr>
							</table>
						</td>
						<!-- REVESTIMIENTO B-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("AZULEJOS EN BAÑO",$y['RevesB1']);?></td></tr>
								<tr><?php  a("PENTAGRES",$y['RevesB2']);?></td></tr>
								<tr><?php  a("CERAMICO COMUN",$y['RevesB3']);?></td></tr>
								<tr><?php  a("LAMINADOS PLASTICOS",$y['RevesB4']);?></td></tr>
							</table>
						</td>
						<!-- INSTALACIONES COMPLEMENTARIAS B-->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("SERVICIO CONTRA INCENDIO",$y['InstaB1']);?></td></tr>
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
							<table" class="table2 table-huggi">
								<tr><?php  a("REVOQUE COMUN",$y['FachaC1']);?></td></tr>
								<tr><?php  a("CERAMICO COMUN",$y['FachaC2']);?></td></tr>
								<tr><?php  a("VENECITA CERAMICA",$y['FachaC3']);?></td></tr>
								<tr><?php  a("SALPICADO",$y['FachaC4']);?></td></tr>
							</table>
						</td>
						<!-- PAREDE C-->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("BLOCKS DE CEMENTO",$y['ParedC1']);?></td></tr>
								<tr><?php  a("INSTALACION ELECTRICA EXTERIOR",$y['ParedC2']);?></td></tr>
							</table>
						</td>
						<!-- ESCALERA C-->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("REVESTIDA CON CEMENTO ALISADO",$y['EscaC1']);?></td></tr>
							</table>
						</td>
						<!-- ESQUELETO C-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("MADERA",$y['EsqueC1']);?></td></tr>
								<tr><?php  a("NO TIENE",$y['EsqueC2']);?></td></tr>
							</table>
						</td>
						<!-- ARMADURA C-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("MADERA",$y['ArmaC1']);?></td></tr>
							</table>
						</td>
						<!-- TECHOS C-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("CHAPA DE ZINC",$y['TechoC1']);?></td></tr>
								<tr><?php  a("CHAPA DE FIBROCEMENTO",$y['TechoC2']);?></td></tr>
								<tr><?php  a("CHAPA DE PLASTICA",$y['TechoC3']);?></td></tr>
								<tr><?php  a("CHAPA DE ALUMINIO",$y['TechoC4']);?></td></tr>
							</table>
						</td>
						<!-- CIELORRASOS C-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("MADERA",$y['CieloC1']);?></td></tr>
								<tr><?php  a("CHAPA ESMALTADA",$y['CieloC2']);?></td></tr>
								<tr><?php  a("COMUNES A LA CAL",$y['CieloC3']);?></td></tr>
								<tr><?php  a("PINTADOS A LA CAL",$y['CieloC4']);?></td></tr>
							</table>
						</td>
						<!-- REVOQUES C-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("PINTADOS A LA CAL",$y['RevoqC1']);?></td></tr>
							</table>
						</td>
						<!-- PISOS C-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("CEMENTO ALISADO",$y['PisosC1']);?></td></tr>
							</table>
						</td>
						<!-- PUERTAS Y VENTANAS C-->
						<td>
										<table class="table-huggi table2">
											<tr><?php  a("CON VIDRIOS",$y['MadeC1']);?></td></tr>
										</table>
						</td>
						<td>
							<table class="table-huggi table2">
											<tr><?php  a("CON VIDRIOS",$y['MetaC1']);?></td></tr>
											<tr><?php  a("HECHAS EN SERIE",$y['MetaC2']);?></td></tr>
										</table>
						</td>
						<!-- BAÑOS C-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("MINGITORIOS A CANALETA DE CEMENTO ALISADO",$y['BanoC1']);?></td></tr>
								<tr><?php  a("INODORO A LA TURCA",$y['BanoC2']);?></td></tr>
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
								<tr><?php  a("NO TIENE",$y['InstaC1']);?></td></tr>
							</table>
						</td>
						<td><?php echo $Totales[2]; ?></td>
					</tr>
					<!-- COMIENZO RUBRO 3 -->
					<tr>
						<td colspan="16" style="background-color: lightgrey; text-align: left;">RUBRO 3 : ESTADO DE CONSERVACION DEL EDIFICIO A trasladar a Rubro 5 inciso 3</td>
					</tr>
					<tr class="table-huggi2">
						<td>Estado conserv.</td>
						<td>
							<table class="table2">
								<tr>
									<?php MostrarEstado("Facha"); ?>
								</tr>
								<tr>
									<td><?php echo $ValEstado[0][0] ?></td>
									<td><?php echo $ValEstado[0][1] ?></td>
									<td><?php echo $ValEstado[0][2] ?></td>
								</tr>
							</table>
						</td>
						<td>
							<table class="table2">
								<tr>
									<?php MostrarEstado("Pared"); ?>
								</tr>
								<tr>
									<td><?php echo $ValEstado[1][0] ?></td>
									<td><?php echo $ValEstado[1][1] ?></td>
									<td><?php echo $ValEstado[1][2] ?></td>
								</tr>
							</table>
						</td>
						<td>
							<table class="table2">
								<tr>
									<?php MostrarEstado("Esca"); ?>
								</tr>
								<tr>
									<td><?php echo $ValEstado[2][0] ?></td>
									<td><?php echo $ValEstado[2][1] ?></td>
									<td><?php echo $ValEstado[2][2] ?></td>
								</tr>
							</table>
						</td>
						<td>
							<table class="table2">
								<tr>
									<?php MostrarEstado("Esque"); ?>
								</tr>
								<tr>
									<td><?php echo $ValEstado[3][0] ?></td>
									<td><?php echo $ValEstado[3][1] ?></td>
									<td><?php echo $ValEstado[3][2] ?></td>
								</tr>
							</table>
						</td>
						<td>
							<table class="table2">
								<tr>
									<?php MostrarEstado("Arma"); ?>
								</tr>
								<tr>
									<td><?php echo $ValEstado[4][0] ?></td>
									<td><?php echo $ValEstado[4][1] ?></td>
									<td><?php echo $ValEstado[4][2] ?></td>
								</tr>
							</table>
						</td>
						<td>
							<table class="table2">
								<tr>
									<?php MostrarEstado("Techo"); ?>
								</tr>
								<tr>
									<td><?php echo $ValEstado[5][0] ?></td>
									<td><?php echo $ValEstado[5][1] ?></td>
									<td><?php echo $ValEstado[5][2] ?></td>
								</tr>
							</table>
						</td>
						<td>
							<table class="table2">
								<tr>
									<?php MostrarEstado("Cielo"); ?>
								</tr>
								<tr>
									<td><?php echo $ValEstado[6][0] ?></td>
									<td><?php echo $ValEstado[6][1] ?></td>
									<td><?php echo $ValEstado[6][2] ?></td>
								</tr>
							</table>
						</td>
						<td>
							<table class="table2">
								<tr>
									<?php MostrarEstado("Revoq"); ?>
								</tr>
								<tr>
									<td><?php echo $ValEstado[7][0] ?></td>
									<td><?php echo $ValEstado[7][1] ?></td>
									<td><?php echo $ValEstado[7][2] ?></td>
								</tr>
							</table>
						</td>
						<td>
							<table class="table2">
								<tr>
									<?php MostrarEstado("Pisos"); ?>
								</tr>
								<tr>
									<td><?php echo $ValEstado[8][0] ?></td>
									<td><?php echo $ValEstado[8][1] ?></td>
									<td><?php echo $ValEstado[8][2] ?></td>
								</tr>
							</table>
						</td>
						<td>
										<table class="table2">
											<tr>
												<?php MostrarEstado("Made"); ?>
											</tr>
											<tr>
												<td><?php echo $ValEstado[9][0] ?></td>
												<td><?php echo $ValEstado[9][1] ?></td>
												<td><?php echo $ValEstado[9][2] ?></td>
											</tr>
										</table>
						</td>
						<td>
							<table class="table2">
											<tr>
												<?php MostrarEstado("Meta"); ?>
											</tr>
											<tr>
												<td><?php echo $ValEstado[10][0] ?></td>
												<td><?php echo $ValEstado[10][1] ?></td>
												<td><?php echo $ValEstado[10][2] ?></td>
											</tr>
										</table>
						</td>
						<td>
							<table class="table2">
								<tr>
									<?php MostrarEstado("Bano"); ?>
								</tr>
								<tr>
									<td><?php echo $ValEstado[11][0] ?></td>
									<td><?php echo $ValEstado[11][1] ?></td>
									<td><?php echo $ValEstado[11][2] ?></td>
								</tr>
							</table>
						</td>
						<td>
							<table class="table2">
								<tr>
									<?php MostrarEstado("Reve"); ?>
								</tr>
								<tr>
									<td><?php echo $ValEstado[12][0] ?></td>
									<td><?php echo $ValEstado[12][1] ?></td>
									<td><?php echo $ValEstado[12][2] ?></td>
								</tr>
							</table>
						</td>
						<td>
							<table class="table2">
								<tr>
									<?php MostrarEstado("Insta"); ?>
								</tr>
								<tr>
									<td><?php echo $ValEstado[13][0] ?></td>
									<td><?php echo $ValEstado[13][1] ?></td>
									<td><?php echo $ValEstado[13][2] ?></td>
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
						</tr>
						<tr>
							<td>Rango de puntaje</td>
							<td>
								<table class="table2">
									<tr>
										<td>mas de 74</td>
										<td>de 41 a 74</td>
										<td>hasta 40</td>
									</tr>
								</table>
							</td>
							<td>
								<table class="table2">
									<tr>
										<td>mas de 63</td>
										<td>de 35 a 63</td>
										<td>hasta 34</td>
									</tr>
								</table>
							</td>
							<td>
								<table class="table2">
									<tr>
										<td>mas de 59</td>
										<td>de 32 a 59</td>
										<td>hasta 31</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td>Suma de puntos</td>
							<td>
								<table class="table2 smapts" style="width: 33.3%">
									<tr style="text-align: center;">
										<td><?php echo $A[0]; ?></td>
										<td><?php echo $A[1]; ?></td>
										<td><?php echo $A[2]; ?></td>
									</tr>
								</table>
							</td>
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
						</tr>
						<tr>
							<td>Estado</td>
							<td>
								<table class="table2">
									<tr>
										<td>B</td>
										<td>R</td>
										<td>M</td>
									</tr>
								</table>
							</td>
							<td>
								<table class="table2">
									<tr>
										<td>B</td>
										<td>R</td>
										<td>M</td>
									</tr>
								</table>
							</td>
							<td>
								<table class="table2">
									<tr>
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
						<td width="200px">Tabiques, revoques o revestimientos interiores</td>
						<td >Armaduras o Techos</td>
						<td width="100px">Cielorrasos</td>
						<td >Pisos</td>
						<td >Baños</td>
						<td >instalaciones Complementarias</td>
						<td >Suma de puntos</td>
					</tr>
					<tr class="comp2">
						<td><table><tr><td width="30%" align="center"><?php CalcularReci("ParedReci"); ?></td><td align="center">8</td></tr></table></td>
						<td><table><tr><td width="30%" align="center"><?php CalcularReci("RevoqReci"); ?></td><td align="center">28</td></tr></table></td>
						<td><table><tr><td width="30%" align="center"><?php CalcularReci("ArmaReci"); ?></td><td align="center">32</td></tr></table></td>
						<td><table><tr><td width="40%" align="center"><?php CalcularReci("CieloReci"); ?></td><td align="center">4</td></tr></table></td>
						<td><table><tr><td width="30%" align="center"><?php CalcularReci("PisosReci"); ?></td><td align="center">11</td></tr></table></td>
						<td><table><tr><td width="30%" align="center"><?php CalcularReci("BanoReci"); ?></td><td align="center">8</td></tr></table></td>
						<td><table><tr><td width="30%" align="center"><?php CalcularReci("InstReci1"); ?></td><td align="center">9</td></tr></table></td>
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
		$filename = $FcodPartido."-".$Fpartida."-Formulario 906.pdf";
		$dompdf->stream($filename, array("Attachment" => 0));
?>
