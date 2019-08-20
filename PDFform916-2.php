<?php
include("sesion.php");
	$pagina='PDFform9162PHP';
	include("sql/conexion.php");
	include("seguridadForm.php");

	include('sql/mostrarDatosObra.php');

	$post = $_GET["idform"];
	$x=mysqli_query($conexion, "SELECT * FROM `form916` WHERE `codForm916` = '".$post."'");
	$y = mysqli_fetch_array($x);
	function a($texto,$a){
		if ($a == 1)
			echo "<td style='background-color: #2F2C2C; color: white; padding: 0.5px' >".$texto."</td>";
		else
			echo "<td color: black;'>".$texto."</td>";
	}
	include('funciones/valores916.php');
	include('funciones/calculosrub2.php');
	include('funciones/calculosrub4.php');
	include('funciones/Totales916.php');
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
				font-size: 8.5px !important;
			}
			.table-huggi2{
				font-size:9px !important;
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
				margin-left: 370px;
				margin-top: 25px;
				font-size: 10px;
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
				<img src="img/logopdf916hoja2.png">
			</div>
			<!-- RUBRO 2 -->
			<div class="rub2">
				<table class="table" style="width: 460px; text-align: left;">
					<tr><td>Destino: Edificios cuyo destino es la postura y cria de aves de corral</td></tr>
					<tr><td style="background-color: lightgrey;">RUBRO 2 : CARACTERISTICAS DEL EDIFICIO</td></tr>
				</table>
				<table class="table" style="text-align: center; font-size: 13px;">
					<tr>
						<td rowspan="2">1 <br>TIPO</td>
						<td rowspan="2">2 <br>PARED</td>
						<td rowspan="2">3 <br>ESQUELETO</td>
						<td rowspan="2">4 <br>ARMADURA</td>
						<td rowspan="2">5 <br>TECHOS</td>
						<td rowspan="2">6 <br>REVOQUES</td>
						<td rowspan="2">7 <br>PISOS</td>
						<td colspan="2">PUERTAS Y VENTANAS</td>
						<td colspan="3">INSTALACIONES</td>
						<td rowspan="2">13 <br>CANTIDAD DE CUADROS TACHADOS</td>
					</tr>
					<tr>
						<td>8 <br>DE MADERA</td>
						<td>9 <br>METALICA</td>
						<td>10 <br>GAS</td>
						<td>11 <br>LUZ</td>
						<td>12 <br>AGUA</td>
					</tr>
					<!-- A -->
					<tr>
						<td>A</td>
						<!-- PAREDE A-->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("LADRILLO DE CAL",$y['ParedA1']);?></td></tr>
								<tr><?php  a("LADRILLO HUECO CERAMICO",$y['ParedA2']);?></td></tr>
								<tr><?php  a("LADRILLO HUECO CEMENTO",$y['ParedA3']);?></td></tr>
								<tr><?php  a("PLACAS DE HORMIGON O SIMILARES",$y['ParedA4']);?></td></tr>
							</table>
						</td>
						<!-- ESQUELETO A-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("HORMIGON ARMADO",$y['EsqueA1']);?></td></tr>
								<tr><?php  a("HORMIGON PRETENSADO",$y['EsqueA2']);?></td></tr>
								<tr><?php  a("HORMIGON PREFABRICADO",$y['EsqueA3']);?></td></tr>
								<tr><?php  a("SIMILARES",$y['EsqueA4']);?></td></tr>
							</table>
						</td>
						<!-- ARMADURA A-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("HORMIGON ARMADO",$y['ArmaA1']);?></td></tr>
								<tr><?php  a("HORMIGON PRETENSADO",$y['ArmaA1']);?></td></tr>
								<tr><?php  a("HORMIGON PREFABRICADO",$y['ArmaA1']);?></td></tr>
								<tr><?php  a("SIMILARES",$y['ArmaA1']);?></td></tr>
							</table>
						</td>
						<!-- TECHOS A-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("CHAPA GALVANIZADA",$y['TechoA1']);?></td></tr>
								<tr><?php  a("CHAPA DE ZINC",$y['TechoA2']);?></td></tr>
								<tr><?php  a("CHAPA LISA",$y['TechoA3']);?></td></tr>
								<tr><?php  a("SIMILARES",$y['TechoA4']);?></td></tr>
							</table>
						</td>
						<!-- REVOQUES A-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("REVOQUE A LA CAL",$y['RevoqA1']);?></td></tr>
								<tr><?php  a("SIMILARES",$y['RevoqA2']);?></td></tr></tr>
							</table>
						</td>
						<!-- PISOS A-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("HORMIGON SIMPLE O ARMADO",$y['PisosA1']);?></td></tr>
								<tr><?php  a("MOSAICO GRANITICO MEDIDA COMUN",$y['PisosA2']);?></td></tr>
								<tr><?php  a("MOSAICO CALCAREO",$y['PisosA3']);?></td></tr>
								<tr><?php  a("SIMILARES",$y['PisosA4']);?></td></tr>
							</table>
						</td>
						<!-- PUERTAS Y VENTANAS A-->
						<td>
										<table class="table-huggi table2">
											<tr><?php  a("A MEDIDA CON TIRANTERIA",$y['MadeA1']);?></td></tr>
											<tr><?php  a("ESCUDERIAS NORMALES",$y['MadeA2']);?></td></tr>
										</table>
						</td>
						<td>
							<table class="table-huggi table2">
											<tr><?php  a("A MEDIDA CON PERFILERIA",$y['MetaA1']);?></td></tr>
										</table>
						</td>
						<!-- GAS A-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("CAÑO HIERRO GALVANIZADO",$y['GasA1']);?></td></tr>
								<tr><?php  a("CAÑO HIERRO NEGRO",$y['GasA2']);?></td></tr>
								<tr><?php  a("CAÑO COBRE",$y['GasA3']);?></td></tr>
								<tr><?php  a("SIMILARES",$y['GasA4']);?></td></tr>
							</table>
						</td>
						<!-- LUZ A-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("CAÑO HIERRO GALVANIZADO",$y['LuzA1']);?></td></tr>
								<tr><?php  a("CAÑO HIERRO NEGRO",$y['LuzA2']);?></td></tr>
								<tr><?php  a("SIMILARES",$y['LuzA3']);?></td></tr>
							</table>
						</td>
						<!-- AGUA A-->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("CAÑO HIERRO GALVANIZADO",$y['AguaA1']);?></td></tr>
								<tr><?php  a("CAÑO HIERRO NEGRO",$y['AguaA2']);?></td></tr>
								<tr><?php  a("CAÑO COBRE",$y['AguaA3']);?></td></tr>
								<tr><?php  a("CAÑO HIDROBONZ",$y['AguaA4']);?></td></tr>
								<tr><?php  a("SIMILARES",$y['AguaA5']);?></td></tr>
							</table>
						</td>
						<td><?php echo $Totales[0]; ?></td>
					</tr>
					<!-- B -->
					<tr>
						<td>B</td>
						<!-- PAREDE B-->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("MADERA DE PINO",$y['ParedB1']);?></td></tr>
								<tr><?php  a("MADERA DE EUCALIPTO",$y['ParedB2']);?></td></tr>
								<tr><?php  a("MADERA DE LAPACHO",$y['ParedB2']);?></td></tr>
								<tr><?php  a("MADERA DE URUNDAY",$y['ParedB3']);?></td></tr>
								<tr><?php  a("MADERA DE INCIENSO",$y['ParedB4']);?></td></tr>
								<tr><?php  a("MADERA DE PALMERA",$y['ParedB5']);?></td></tr>
								<tr><?php  a("SIMILAR",$y['ParedB6']);?></td></tr>
							</table>
						</td>
						<!-- ESQUELETO B-->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("MADERA DE LAPACHO",$y['EsqueB1']);?></td></tr>
								<tr><?php  a("MADERA DE URUNDAY",$y['EsqueB2']);?></td></tr>
								<tr><?php  a("MADERA DE INCIENSO",$y['EsqueB3']);?></td></tr>
								<tr><?php  a("MADERA DE PALMERA",$y['EsqueB4']);?></td></tr>
								<tr><?php  a("SIMILAR",$y['EsqueB5']);?></td></tr>
							</table>
						</td>
						<!-- ARMADURA B-->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("MADERA DE LAPACHO",$y['ArmaB1']);?></td></tr>
								<tr><?php  a("MADERA DE URUNDAY",$y['ArmaB2']);?></td></tr>
								<tr><?php  a("MADERA DE INCIENSO",$y['ArmaB3']);?></td></tr>
								<tr><?php  a("MADERA DE PALMERA",$y['ArmaB4']);?></td></tr>
								<tr><?php  a("SIMILAR",$y['ArmaB5']);?></td></tr>
							</table>
						</td>
						<!-- TECHOS B-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("CHAPA DE ALUMINIO",$y['TechoB1']);?></td></tr>
								<tr><?php  a("CHAPA DE FIBROCEMENTO",$y['TechoB2']);?></td></tr>
								<tr><?php  a("CHAPA PLASTICA",$y['TechoB3']);?></td></tr>
								<tr><?php  a("CHAPA TRANSLUCIDAS",$y['TechoB4']);?></td></tr>
								<tr><?php  a("SIMILARES",$y['TechoB5']);?></td></tr>
							</table>
						</td>
						<!-- REVOQUES B-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("GRUESO SIN AZOTADO",$y['RevoqB1']);?></td></tr>
								<tr><?php  a("SIMILARES",$y['RevoqB2']);?></td></tr>
							</table>
						</td>
						<!-- PISOS B-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("CEMENTO",$y['PisosB1']);?></td></tr>
								<tr><?php  a("CONTRAPISO EMPASTADO SIN ALISADO",$y['PisosB2']);?></td></tr>
								<tr><?php  a("SIMILARES",$y['PisosB3']);?></td></tr>
							</table>
						</td>
						<!-- PUERTAS Y VENTANAS A-->
						<td>
										<table class="table-huggi table2">
											<tr><?php  a("TIPO ESTANDAR",$y['MadeB1']);?></td></tr>
										</table>
						</td>
						<td>
							<table class="table-huggi table2">
											<tr><?php  a("TIPO ESTANDAR",$y['MetaB1']);?></td></tr>
										</table>
						</td>
						<!-- GAS B-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("CAÑO PLASTICO",$y['GasB1']);?></td></tr>
								<tr><?php  a("CAÑO GOMA",$y['GasB2']);?></td></tr>
								<tr><?php  a("SIMILARES",$y['GasB3']);?></td></tr>
							</table>
						</td>
						<!-- LUZ B-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("CAÑO PLASTICO",$y['LuzB1']);?></td></tr>
								<tr><?php  a("CAÑO GOMA",$y['LuzB2']);?></td></tr>
								<tr><?php  a("SIMILARES",$y['LuzB3']);?></td></tr>
							</table>
						</td>
						<!-- AGUA B-->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("CAÑO PLASTICO<",$y['AguaB1']);?></td></tr>
								<tr><?php  a("CAÑO GOMA",$y['AguaB2']);?></td></tr>
								<tr><?php  a("SIMILARES",$y['AguaB3']);?></td></tr>
							</table>
						</td>
						<td><?php echo $Totales[1]; ?></td>
					</tr>
					<!-- C -->
					<tr>
						<td>A</td>
						<!-- PAREDE C-->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("ALAMBRE ROMBOIDAL",$y['ParedC1']);?></td></tr>
								<tr><?php  a("ALAMBRE HEXAGONAL",$y['ParedC2']);?></td></tr>
								<tr><?php  a("NO TIENE",$y['ParedC3']);?></td></tr>
							</table>
						</td>
						<!-- ESQUELETO C-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("MADERA DE PINO",$y['EsqueC1']);?></td></tr>
								<tr><?php  a("MADERA DE EUCALIPTO",$y['EsqueC2']);?></td></tr>
								<tr><?php  a("MADERA DE SIMILAR",$y['EsqueC3']);?></td></tr>
							</table>
						</td>
						<!-- ARMADURA C-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("MADERA DE PINO",$y['ArmaC1']);?></td></tr>
								<tr><?php  a("MADERA DE EUCALIPTO",$y['ArmaC2']);?></td></tr>
								<tr><?php  a("MADERA DE SIMILAR",$y['ArmaC3']);?></td></tr>
							</table>
						</td>
						<!-- TECHOS C-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("CHAPA RURAL",$y['TechoA1']);?></td></tr>
								<tr><?php  a("CARTON ALQUITRANADO",$y['TechoA2']);?></td></tr>
								<tr><?php  a("SIMILAR",$y['TechoA2']);?></td></tr>
							</table>
						</td>
						<!-- REVOQUES C-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("NO TIENE",$y['RevoqC1']);?></td></tr>
							</table>
						</td>
						<!-- PISOS C-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("NO TIENE",$y['PisosC1']);?></td></tr>
							</table>
						</td>
						<!-- PUERTAS Y VENTANAS C-->
						<td>
										<table class="table-huggi table2">
											<tr><?php  a("NO TIENE",$y['MadeC1']);?></td></tr>
										</table>
						</td>
						<td>
							<table class="table-huggi table2">
											<tr><?php  a("NO TIENE",$y['MetaC1']);?></td></tr>
										</table>
						</td>
						<!-- GAS C-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("NO TIENE",$y['GasC1']);?></td></tr>
							</table>
						</td>
						<!-- LUZ C-->
						<td>
							<table class="table2  table-huggi">
								<tr><?php  a("NO TIENE",$y['LuzC1']);?></td></tr>
							</table>
						</td>
						<!-- AGUA C-->
						<td>
							<table class="table2 table-huggi">
								<tr><?php  a("NO TIENE",$y['AguaC1']);?></td></tr>
							</table>
						</td>
						<td><?php echo $Totales[2]; ?></td>
					</tr>
					<!-- COMIENZO RUBRO 3 -->
					<tr>
						<td colspan="13" style="background-color: lightgrey; text-align: left;">RUBRO 3 : ESTADO DE CONSERVACION DEL EDIFICIO A trasladar a Rubro 5 inciso 3</td>
					</tr>
					<tr class="table-huggi2">
						<td>Estado conserv.</td>
						<td>
							<table class="table2">
								<tr>
									<?php MostrarEstado("Pared"); ?>
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
									<?php MostrarEstado("Esque"); ?>
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
									<?php MostrarEstado("Arma"); ?>
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
									<?php MostrarEstado("Techo"); ?>
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
									<?php MostrarEstado("Revoq"); ?>
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
									<?php MostrarEstado("Pisos"); ?>
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
												<?php MostrarEstado("Made"); ?>
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
												<?php MostrarEstado("Meta"); ?>
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
									<?php MostrarEstado("Gas"); ?>
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
									<?php MostrarEstado("Luz"); ?>
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
									<?php MostrarEstado("Agua"); ?>
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
										<td>mas de 75</td>
										<td>de 49 a 74</td>
										<td>hasta 48</td>
									</tr>
								</table>
							</td>
							<td>
								<table class="table2">
									<tr>
										<td>mas de 74</td>
										<td>de 49 a 72</td>
										<td>hasta 48</td>
									</tr>
								</table>
							</td>
							<td>
								<table class="table2">
									<tr>
										<td>mas de 48</td>
										<td>de 34 a 47</td>
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
						<td rowspan="3" bgcolor="lightgrey" width="30px"> puntaje reciclado</td>
						<td rowspan="2"  width="60px">PAREDES</td>
						<td rowspan="2" width="70px">ESQUELETO</td>
						<td rowspan="2"  width="70px">ARMADURA</td>
						<td rowspan="2"  width="70px">TECHOS</td>
						<td rowspan="2" width="70px">REVOQUES</td>
						<td rowspan="2" width="70px">PISOS</td>
						<td rowspan="2">ABERTURAS MADERA</td>
						<td rowspan="2">ABERTURAS METAL</td>
						<td colspan="3">INSTALACIONES</td>
						<td  rowspan="2">Suma de puntos</td>
					</tr>
					<tr>
						<td>GAS</td>
						<td>LUZ</td>
						<td>AGUA</td>
					</tr>
					<tr class="comp2">
						<td><table><tr><td width="40%" align="center"><?php CalcularReci("ParedReci"); ?></td><td align="center">8</td></tr></table></td>
						<td><table><tr><td width="40%" align="center"><?php CalcularReci("RevoqReci"); ?></td><td align="center">28</td></tr></table></td>
						<td><table><tr><td width="40%" align="center"><?php CalcularReci("ArmaReci"); ?></td><td align="center">32</td></tr></table></td>
						<td><table><tr><td width="40%" align="center"><?php CalcularReci("TechoReci"); ?></td><td align="center">4</td></tr></table></td>
						<td><table><tr><td width="40%" align="center"><?php CalcularReci("RevoqReci"); ?></td><td align="center">11</td></tr></table></td>
						<td><table><tr><td width="40%" align="center"><?php CalcularReci("PisosReci"); ?></td><td align="center">8</td></tr></table></td>
						<td><table><tr><td width="30%" align="center"><?php CalcularReci("MadeReci"); ?></td><td align="center">9</td></tr></table></td>
						<td><table><tr><td width="30%" align="center"><?php CalcularReci("MetaReci"); ?></td><td align="center">9</td></tr></table></td>
						<td><table><tr><td width="40%" align="center"><?php CalcularReci("GasReci"); ?></td><td align="center">9</td></tr></table></td>
						<td><table><tr><td width="40%" align="center"><?php CalcularReci("LuzReci"); ?></td><td align="center">9</td></tr></table></td>
						<td><table><tr><td width="40%" align="center"><?php CalcularReci("AguaReci"); ?></td><td align="center">9</td></tr></table></td>
						<td align="center"><?php  echo $TotalReciclado; ?></td>
					</tr>
				</table>
			</div>
		</div>
		<!-- RUBRO 1 -->
		<div class="rub1">
			<table class="table">
				<tr>
					<td style="width: 50%; background-color: lightgrey;">RUBRO 1: Identificacion del inmueble</td>
					<td style="width: 50%">PARTIDO (en letras):</td>
				</tr>
			</table>
			<table class="table">
				<tr>
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
		$filename = $FcodPartido."-".$Fpartida."-Formulario 916.pdf";
		$dompdf->stream($filename, array("Attachment" => 0));
?>
