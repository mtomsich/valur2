<?php
	include("sesion.php");
		$pagina='formulario916rub2pto2PHP';
		include("encabezado.php");
		include("seguridadForm.php");

	?>
	<!DOCTYPE html>
	<html lang="es">

	<body>
		<div class="main">

			<div class="widget-header">
				<i class="icon-th-large"></i>
				<h3>Formulario 916</h3>
			</div> <!-- /widget-header -->

			<div class="widget-content">

				<div class="control-group">

					<div class="controls">
						<div class="accordion" id="accordion2">
							<div class="accordion-group">
								<!-- Comienzo rubro 2 -->
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" >
										RUBRO 2: CARACTERISTICAS DEL EDIFICIO
									</a>
								</div>
								<div class="accordion-body">
									<div class="accordion-inner">
										<a href="formulario916rub2pto1.php"><button class="btn btn-success">Anterior</button></a>
										<a href="formulario916rub3.php"><button class="btn btn-success">Siguiente</button></a>
										<a href="" ><button onclick="self.close()" class="btn">Cancelar</button></a>
										<br><br>
										<table class="table table-bordered responsive-table">
											<thead>
												<th>1- Tipo</th>
												<th class='col-sm-2'>7- Pisos</th>
												<th class='col-sm-2'>8- Puertas y Ventanas <br>De Madera</th>
												<th class='col-sm-2'>9- Puertas y Ventanas <br>Metalica</th>
												<th class='col-sm-2'>10- Insatalaciones <br> Gas</th>
												<th class='col-sm-2'>11- Insatalaciones <br> Luz</th>
												<th class='col-sm-2'>12- Insatalaciones <br> Agua</th>
												<th></th>
											</thead>
											<tbody>
												<tr>
													<!-- Comienzo tipo A -->
													<td>A</td>
													<td>
														<!-- pisos tipo A -->
														<table class="table-condensed" width="100%">
															<tr>
																<td>Hormigon simple o armado</td>
																<td><input id="PisosA1" type="checkbox" name="pisosA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Mosaico granito o medida comun</td>
																<td><input id="PisosA2" type="checkbox" name="pisosA2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Mosaico calcereo</td>
																<td><input id="PisosA3" type="checkbox" name="pisosA3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Similares</td>
																<td><input id="PisosA4" type="checkbox" name="pisosA4" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- puerta de madera tipo A -->
														<table class="table-condensed" width="100%">
															<tr>
																<td>A medida con tiranteria</td>
																<td><input id="MadeA1" type="checkbox" name="MadeA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Escuderias normales</td>
																<td><input id="MadeA2" type="checkbox" name="MadeA2" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- puerta Metalica tipo A -->
														<table class="table-condensed" width="100%">
															<tr>
																<td>A medida con perfileria</td>
																<td><input id="MetaA1" type="checkbox" name="MetaA1" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Instalaciones gas tipo A-->
														<table class="table-condensed" width="100%">
															<tr>
																<td>Caño de hierro galvanizado</td>
																<td><input id="GasA1" type="checkbox" name="GasA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Caño hierro negro</td>
																<td><input id="GasA2" type="checkbox" name="GasA2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Caño Cobre</td>
																<td><input id="GasA3" type="checkbox" name="GasA3" value="1" onClick="checkValue(this);"></td>
															</tr>
                              <tr>
																<td>Similares</td>
																<td><input id="GasA4" type="checkbox" name="GasA4" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Instalaciones luz tipo A -->
														<table class="table-condensed" width="100%">
															<tr>
																<td>Caño hierro galvanizado</td>
																<td><input id="LuzA1" type="checkbox" name="LuzA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Caño hierro negro</td>
																<td><input id="LuzA2" type="checkbox" name="LuzA2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Similares</td>
																<td><input id="LuzA3" type="checkbox" name="LuzA3" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Instalaciones agua tipo A -->
														<table class="table-condensed" width="100%">
															<tr>
																<td>Caño hierro galvanizado</td>
																<td><input id="AguaA1" type="checkbox" name="AguaA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Caño hierro negro</td>
																<td><input id="AguaA2" type="checkbox" name="AguaA2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Caño cobre</td>
																<td><input id="AguaA3" type="checkbox" name="AguaA3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Caño hidrobonz</td>
																<td><input id="AguaA4" type="checkbox" name="AguaA4" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Similares</td>
																<td><input id="AguaA5" type="checkbox" name="AguaA5" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td><div id="capaTextoA">0</div></td>
													<!-- Fin tipo A -->
												</tr>
												<tr>
													<!-- Comienzo tipo B -->
													<td>B</td>
													<td>
														<!-- Pisos tipo B -->
														<table class="table-condensed" width="100%">
															<tr>
																<td>Cemento</td>
																<td><input id="PisosB1" type="checkbox" name="PisosB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Contrapiso empastado sin alisado</td>
																<td><input id="PisosaB2" type="checkbox" name="PisosB2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Similar</td>
																<td><input id="PisosaB3" type="checkbox" name="PisosB3" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- puertas de Madera tipo B -->
														<table class="table-condensed" width="100%">
															<tr>
																<td>Tipo estandar</td>
																<td><input id="MadeB1" type="checkbox" name="MadeB1" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- puertas Metalica tipo B -->
														<table class="table-condensed" width="100%">
															<tr>
																<td>Tipo estandar</td>
																<td><input id="MetaB1" type="checkbox" name="MetaB1" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Instalaciones gas tipo B-->
														<table class="table-condensed" width="100%">
															<tr>
																<td>Caño Plastico</td>
																<td><input id="GasB1" type="checkbox" name="GasB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Caño goma</td>
																<td><input id="GasB2" type="checkbox" name="GasB2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Similares</td>
																<td><input id="GasB3" type="checkbox" name="GasB3" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Instalaciones luz tipo B -->
														<table class="table-condensed" width="100%">
															<tr>
																<td>Caño Plastico</td>
																<td><input id="LuzB1" type="checkbox" name="LuzB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Caño goma</td>
																<td><input id="LuzB2" type="checkbox" name="LuzB2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Similares</td>
																<td><input id="LuzB3" type="checkbox" name="LuzB3" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Instalaciones Agua tipo B -->
														<table class="table-condensed" width="100%">
															<tr>
																<td>Caño Plastico</td>
																<td><input id="AguaB1" type="checkbox" name="AguaB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Caño goma</td>
																<td><input id="AguaB2" type="checkbox" name="AguaB2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Similares</td>
																<td><input id="AguaB3" type="checkbox" name="AguaB3" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td><div id="capaTextoB">0</div></td>
													<!-- Fin tipo B -->
												</tr>
												<tr>
													<!-- Comienzo tipo C -->
													<td>C</td>
													<td>
														<!-- Pisos tipo C -->
														<table  class="table-condensed" width="100%">
															<tr>
																<td>No tiene</td>
																<td><input id="PisosC1" type="checkbox" name="PisosC1" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Puertas de madera tipo C -->
														<table  class="table-condensed" width="100%">
															<tr>
																<td>No tiene</td>
																<td><input id="MadeC1" type="checkbox" name="MadeC1" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Puertas Metalicas tipo C -->
														<table  class="table-condensed" width="100%">
															<tr>
																<td>No tiene</td>
																<td><input id="MetaC1" type="checkbox" name="MetaC1" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Instalaciones gas tipo C-->
														<table class="table-condensed" width="100%">
															<tr>
																<td>No tiene</td>
																<td><input id="GasC1" type="checkbox" name="GasC1" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Instalaciones luz tipo B -->
														<table class="table-condensed" width="100%">
															<tr>
																<td>No tiene</td>
																<td><input id="LuzC1" type="checkbox" name="LuzC1" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Instalaciones Agua tipo B -->
														<table class="table-condensed" width="100%">
															<tr>
																<td>No tiene</td>
																<td><input id="AguaC1" type="checkbox" name="AguaC1" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td><div id="capaTextoC">0</div></td>
													<!-- Fin tipo C -->
													<!-- Fin rubro 2 -->
												</tr>
												<!-- Comienzo rubro 3 -->
												<tr>
													<td>
														Estado de conservacion del edificio
													  <!-- Estado <br> Cons -->
													</td>
													<td>
														<!-- Estado Pisos -->
														<table>
															<tr>
																<td><input type="radio" id="PisosEstado1" name="PisosEstado" value="Bueno" onClick="radioValue(this);">B (15)</td>
																<td><input type="radio" id="PisosEstado2" name="PisosEstado" value="Regular" onClick="radioValue(this);">R (10)</td>
																<td><input type="radio" id="PisosEstado3" name="PisosEstado" value="Malo" onClick="radioValue(this);">M (5)</td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Estado puertas de madera -->
														<table>
															<tr>
																<td><input type="radio" id="MadeEstado1" name="MadeEstado" value="Bueno" onClick="radioValue(this);">B (4)</td>
																<td><input type="radio" id="MadeEstado2" name="MadeEstado" value="Regular" onClick="radioValue(this);">R (3)</td>
																<td><input type="radio" id="MadeEstado3" name="MadeEstado" value="Malo" onClick="radioValue(this);">M (1)</td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Estado puertas metalicas -->
														<table>
															<tr>
																<td><input type="radio" id="MetaEstado1" name="MetaEstado" value="Bueno" onClick="radioValue(this);">B (5)</td>
																<td><input type="radio" id="MetaEstado2" name="MetaEstado" value="Regular" onClick="radioValue(this);">R (4)</td>
																<td><input type="radio" id="MetaEstado3" name="MetaEstado" value="Malo" onClick="radioValue(this);">M (2)</td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Estado Instalaciones gas -->
														<table>
															<tr>
																<td><input type="radio" id="GasEstado1" name="GasEstado" value="Bueno" onClick="radioValue(this);">B (5)</td>
																<td><input type="radio" id="GasEstado2" name="GasEstado" value="Regular" onClick="radioValue(this);">R (4)</td>
																<td><input type="radio" id="GasEstado3" name="GasEstado" value="Malo" onClick="radioValue(this);">M (2)</td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Estado Instalaciones luz -->
														<table>
															<tr>
																<td><input type="radio" id="LuzEstado1" name="LuzEstado" value="Bueno" onClick="radioValue(this);">B (3)</td>
																<td><input type="radio" id="LuzEstado2" name="LuzEstado" value="Regular" onClick="radioValue(this);">R (2)</td>
																<td><input type="radio" id="LuzEstado3" name="LuzEstado" value="Malo" onClick="radioValue(this);">M (1)</td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Estado Instalaciones agua -->
														<table>
															<tr>
																<td><input type="radio" id="AguaEstado1" name="AguaEstado" value="Bueno" onClick="radioValue(this);">B (3)</td>
																<td><input type="radio" id="AguaEstado2" name="AguaEstado" value="Regular" onClick="radioValue(this);">R (2)</td>
																<td><input type="radio" id="AguaEstado3" name="AguaEstado" value="Malo" onClick="radioValue(this);">M (1)</td>
															</tr>
														</table>
													</td>
													<td>
														<div class="controls" name="sumaEstCon" id="sumaEstCon">0
																<!--<input type="text" class="form-control" name="sumaEstCon" id="sumaEstCon" disabled>-->
														</div> <!-- /controls -->
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div> <!-- /accordion -->
					</div> <!-- /controls -->

					</div> <!-- /control-group -->

					<a href="formulario916rub2pto1.php"><button class="btn btn-success">Anterior</button></a>
					<a href="formulario916rub3.php"><button class="btn btn-success">Siguiente</button></a>

					<a href="" ><button onclick="self.close()" class="btn">Cancelar</button></a>

				</div> <!-- /widget-content -->

			</div> <!-- /main -->

			<?php
				include("pie.php");
			?>

			<script src="javascript/obj916.js"></script>
			<script src="javascript/valores916.js"></script>
			<script src="javascript/session.js"></script>

		</body>

	</html>
