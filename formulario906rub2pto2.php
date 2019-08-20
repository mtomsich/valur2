<?php
	include("sesion.php");
		$pagina='formulario9061rub2pto2PHP';
		include("encabezado.php");
		include("seguridadForm.php");

	?>
	<!DOCTYPE html>
	<html lang="es">

	<body>
		<div class="main">

			<div class="widget-header">
				<i class="icon-th-large"></i>
				<h3>Formulario 906</h3>
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
										<a href="formulario906rub2pto1.php"><button class="btn btn-success">Anterior</button></a>
										<a href="formulario906rub3.php"><button class="btn btn-success">Siguiente</button></a>

										<a href="" ><button onclick="self.close()" class="btn">Cancelar</button></a>
										<br><br>
										<table class="table table-bordered responsive-table">
											<thead>
												<th>1- Tipo</th>
												<th class='col-sm-2'>9- Revoques</th>
												<th class='col-sm-2'>10- Pisos</th>
												<th class='col-sm-2'>11- Puertas y Ventanas <br>De Madera</th>
												<th class='col-sm-2'>12- Puertas y Ventanas <br>Metalica</th>
												<th class='col-sm-2'>13- Baños</th>
												<th class='col-sm-2'>14- Revestimiento</th>
												<th class='col-sm-2'>15- Instalaciones complementarias</th>
												<th></th>
											</thead>
											<tbody>
												<tr>
													<!-- Comienzo tipo A -->
													<td>A</td>
													<td>
														<!-- Revoques tipo A -->
														<table class="table-condensed" width="100%">
															<tr>
																<td>Paneles Moldurados</td>
																<td><input id="RevoqA1" type="checkbox" name="RevoqA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Estucados en yeso</td>
																<td><input id="RevoqA2" type="checkbox" name="RevoqA2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>imitacion piedra</td>
																<td><input id="RevoqA3" type="checkbox" name="RevoqA3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Pintados al aceite</td>
																<td><input id="RevoqA4" type="checkbox" name="RevoqA4" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Ladrillo con junta tomada</td>
																<td><input id="RevoqA5" type="checkbox" name="RevoqA5" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- pisos tipo A -->
														<table class="table-condensed" width="100%">
															<tr>
																<td>Marmol</td>
																<td><input id="PisosA1" type="checkbox" name="PisosA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Paquet de madera fina</td>
																<td><input id="PisosA2" type="checkbox" name="PisosA2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Mosaico granito</td>
																<td><input id="PisosA3" type="checkbox" name="PisosA3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Ceramico esmaltado</td>
																<td><input id="PisosA4" type="checkbox" name="PisosA4" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- puerta de madera tipo A -->
														<table class="table-condensed" width="100%">
															<tr>
																<td>Madera fina</td>
																<td><input id="MadeA1" type="checkbox" name="MadeA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Hechas a medida</td>
																<td><input id="MadeA2" type="checkbox" name="MadeA2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Cristales</td>
																<td><input id="MadeA3" type="checkbox" name="MadeA3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Puertas forradas en cuero</td>
																<td><input id="MadeA4" type="checkbox" name="MadeA4" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Puertas plegadizas</td>
																<td><input id="MadeA5" type="checkbox" name="MadeA5" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- puerta Metalica tipo A -->
														<table class="table-condensed" width="100%">
															<tr>
																<td>Hechas a medida</td>
																<td><input id="MetaA1" type="checkbox" name="MetaA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Cristales</td>
																<td><input id="MetaA2" type="checkbox" name="MetaA2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Plegadiza</td>
																<td><input id="MetaA3" type="checkbox" name="MetaA3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Contra incendio</td>
																<td><input id="MetaA4" type="checkbox" name="MetaA4" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Anodizado de color</td>
																<td><input id="MetaA5" type="checkbox" name="MetaA5" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Doble contacto</td>
																<td><input id="MetaA6" type="checkbox" name="MetaA6" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Doble contacto</td>
																<td><input id="MetaA7" type="checkbox" name="MetaA7" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Baños tipo A-->
														<table class="table-condensed" width="100%">
															<tr>
																<td>Baño de dos ambientes</td>
																<td><input id="BanoA1" type="checkbox" name="BanoA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Inodoro de pedestal</td>
																<td><input id="BanoA2" type="checkbox" name="BanoA2" value="1" onClick="checkValue(this);"></td>
															</tr>
                              <tr>
																<td>Lavatorio de pie</td>
																<td><input id="BanoA3" type="checkbox" name="BanoA3" value="1" onClick="checkValue(this);"></td>
															</tr>
														  <tr>
																<td>Mingitorio a plangana o canaleta enlozado</td>
																<td><input id="BanoA4" type="checkbox" name="BanoA4" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Multifaz</td>
																<td><input id="BanoA5" type="checkbox" name="BanoA5" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Revestimiento tipo A -->
														<table class="table-condensed" width="100%">
															<tr>
																<td>Acusticos</td>
																<td><input id="RevesA1" type="checkbox" name="RevesA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>marmol o granito</td>
																<td><input id="RevesA2" type="checkbox" name="RevesA2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Madera modulada</td>
																<td><input id="RevesA3" type="checkbox" name="RevesA3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Piedra tipo mar del plata</td>
																<td><input id="RevesA4" type="checkbox" name="RevesA4" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Azulejo decorado</td>
																<td><input id="RevesA5" type="checkbox" name="RevesA5" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Ceramico esmaltado</td>
																<td><input id="RevesA6" type="checkbox" name="RevesA6" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Instalaciones complementarias tipo A -->
														<table class="table-condensed" width="100%">
															<tr>
																<td>Aire acondicionado</td>
																<td><input id="InstaA1" type="checkbox" name="InstaA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Calefaccion central</td>
																<td><input id="InstaA2" type="checkbox" name="InstaA2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Losa radiante</td>
																<td><input id="InstaA3" type="checkbox" name="InstaA3" value="1" onClick="checkValue(this);"></td>
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
														<!-- Revoques tipo B -->
														<table class="table-condensed" width="100%">
															<tr>
																<td>Comunes a la cal</td>
																<td><input id="RevoqB1" type="checkbox" name="RevoqB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Pintados al agua</td>
																<td><input id="RevoqB2" type="checkbox" name="RevoqB2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Salpicado</td>
																<td><input id="RevoqB3" type="checkbox" name="RevoqB3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Bolseado</td>
																<td><input id="RevoqB4" type="checkbox" name="RevoqB4" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Pisos tipo B -->
														<table class="table-condensed" width="100%">
															<tr>
																<td>Parquet comun</td>
																<td><input id="PisosB1" type="checkbox" name="PisosB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Madera de pinotea</td>
																<td><input id="PisosB2" type="checkbox" name="PisosB2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Ceramico comun</td>
																<td><input id="PisosB3" type="checkbox" name="PisosB3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Alfombra</td>
																<td><input id="PisosB4" type="checkbox" name="PisosB4" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Goma</td>
																<td><input id="PisosB5" type="checkbox" name="PisosB5" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- puertas de Madera tipo B -->
														<table class="table-condensed" width="100%">
															<tr>
																<td>Hechas en serie</td>
																<td><input id="MadeB1" type="checkbox" name="MadeB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Barnizadas</td>
																<td><input id="MadeB2" type="checkbox" name="MadeB2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Pintadas con esmalte</td>
																<td><input id="MadeB3" type="checkbox" name="MadeB3" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- puertas Metalica tipo B -->
														<table class="table-condensed" width="100%">
															<tr>
																<td>Pintadas con esmalte</td>
																<td><input id="MetaB1" type="checkbox" name="MetaB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Herreria comun</td>
																<td><input id="MetaB2" type="checkbox" name="MetaB2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Corrediza aluminio con coliza</td>
																<td><input id="MetaB3" type="checkbox" name="MetaB3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Simple contacto</td>
																<td><input id="MetaB4" type="checkbox" name="MetaB4" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Anodizado comun</td>
																<td><input id="MetaB5" type="checkbox" name="MetaB5" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- baños tipo B -->
														<table class="table-condensed" width="100%">
															<tr>
																<td>Mingitorios a canaleta con separacion de marmol</td>
																<td><input id="BanoB1" type="checkbox" name="BanoB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Lavatorio de pared</td>
																<td><input id="BanoB2" type="checkbox" name="BanoB2" value="1" onClick="checkValue(this);"></td>
															</tr>
                              <tr>
																<td>Ducha sin bañera</td>
																<td><input id="BanoB3" type="checkbox" name="BanoB3" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Revestimiento tipo B -->
														<table  class="table-condensed" width="100%">
															<tr>
																<td>Azulejos en baño</td>
																<td><input id="RevesB1" type="checkbox" name="RevesB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Pentagres</td>
																<td><input id="RevesB2" type="checkbox" name="RevesB2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Ceramico comun</td>
																<td><input id="RevesB2" type="checkbox" name="RevesB2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Laminados plasticos</td>
																<td><input id="RevesB2" type="checkbox" name="RevesB2" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Instalaciones complementarias tipo B -->
														<table  class="table-condensed" width="100%">
															<tr>
																<td>Azulejos en baño</td>
																<td><input id="InstaB1" type="checkbox" name="InstaB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Pentagres</td>
																<td><input id="InstaB2" type="checkbox" name="InstaB2" value="1" onClick="checkValue(this);"></td>
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
														<!-- Revoques tipo C -->
														<table  class="table-condensed" width="100%">
															<tr>
																<td>Pintados a la cal</td>
																<td><input id="RevoqC1" type="checkbox" name="RevoqC1" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Pisos tipo C -->
														<table  class="table-condensed" width="100%">
															<tr>
																<td>Cemento alisado</td>
																<td><input id="PisosC1" type="checkbox" name="PisosC1" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Puertas de madera tipo C -->
														<table  class="table-condensed" width="100%">
															<tr>
																<td>Con vidrios</td>
																<td><input id="MadeC1" type="checkbox" name="MadeC1" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Puertas Metalicas tipo C -->
														<table  class="table-condensed" width="100%">
															<tr>
																<td>Con vidrios</td>
																<td><input id="MetaC1" type="checkbox" name="MetaC1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Hechas en serie</td>
																<td><input id="MetaC2" type="checkbox" name="MetaC2" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- baños tipo C -->
														<table  class="table-condensed" width="100%">
															<tr>
																<td>Mingitorios a canaleta de cemento alisado</td>
																<td><input id="BanoC1" type="checkbox" name="BanoC1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Inodoros a la turca</td>
																<td><input id="BanoC2" type="checkbox" name="BanoC2" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Revestimiento tipo C -->
														<table  class="table-condensed" width="100%">
															<tr>
																<td>Cemento comun o blanco en baños</td>
																<td><input id="RevesC1" type="checkbox" name="RevesC1" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Instalaciones complementarias tipo C -->
														<table  class="table-condensed" width="100%">
															<tr>
																<td>No tiene</td>
																<td><input id="InstaC1" type="checkbox" name="InstaC1" value="1" onClick="checkValue(this);"></td>
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
														<!-- Estado revoques -->
														<table>
															<tr>
																<td><input type="radio" id="RevoqEstado1" checked name="RevoqEstado" value="Bueno" onClick="radioValue(this);">B (7)</td>
																<td><input type="radio" id="RevoqEstado2" name="RevoqEstado" value="Regular" onClick="radioValue(this);">R (4)</td>
																<td><input type="radio" id="RevoqEstado3" name="RevoqEstado" value="Malo" onClick="radioValue(this);">M (1)</td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Estado Pisos -->
														<table>
															<tr>
																<td><input type="radio" id="PisosEstado1" checked name="PisosEstado" value="Bueno" onClick="radioValue(this);">B (7)</td>
																<td><input type="radio" id="PisosEstado2" name="PisosEstado" value="Regular" onClick="radioValue(this);">R (4)</td>
																<td><input type="radio" id="PisosEstado3" name="PisosEstado" value="Malo" onClick="radioValue(this);">M (1)</td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Estado puertas de madera -->
														<table>
															<tr>
																<td><input type="radio" id="MadeEstado1" checked name="MadeEstado" value="Bueno" onClick="radioValue(this);">B (5)</td>
																<td><input type="radio" id="MadeEstado2" name="MadeEstado" value="Regular" onClick="radioValue(this);">R (3)</td>
																<td><input type="radio" id="MadeEstado3" name="MadeEstado" value="Malo" onClick="radioValue(this);">M (1)</td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Estado puertas metalicas -->
														<table>
															<tr>
																<td><input type="radio" id="MetaEstado1" checked name="MetaEstado" value="Bueno" onClick="radioValue(this);">B (3)</td>
																<td><input type="radio" id="MetaEstado2" name="MetaEstado" value="Regular" onClick="radioValue(this);">R (2)</td>
																<td><input type="radio" id="MetaEstado3" name="MetaEstado" value="Malo" onClick="radioValue(this);">M (1)</td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Estado baños -->
														<table>
															<tr>
																<td><input type="radio" id="BanoEstado1" checked name="BanoEstado" value="Bueno" onClick="radioValue(this);">B (2)</td>
																<td><input type="radio" id="BanoEstado2" name="BanoEstado" value="Regular" onClick="radioValue(this);">R (1)</td>
																<td><input type="radio" id="BanoEstado3" name="BanoEstado" value="Malo" onClick="radioValue(this);">M (0)</td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Estado revestimiento -->
														<table>
															<tr>
																<td><input type="radio" id="RevesEstado1" checked name="ReveEstado" value="Bueno" onClick="radioValue(this);">B (3)</td>
																<td><input type="radio" id="RevesEstado2" name="ReveEstado" value="Regular" onClick="radioValue(this);">R (2)</td>
																<td><input type="radio" id="RevesEstado3" name="ReveEstado" value="Malo" onClick="radioValue(this);">M (1)</td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Estado Instalaciones complementarias -->
														<table>
															<tr>
																<td><input type="radio" id="InstEstado1" checked name="InstaEstado" value="Bueno" onClick="radioValue(this);">B (4)</td>
																<td><input type="radio" id="InstEstado2" name="InstaEstado" value="Regular" onClick="radioValue(this);">R (3)</td>
																<td><input type="radio" id="InstEstado3" name="InstaEstado" value="Malo" onClick="radioValue(this);">M (2)</td>
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

					<a href="formulario906rub2pto1.php"><button class="btn btn-success">Anterior</button></a>
					<a href="formulario906rub3.php"><button class="btn btn-success">Siguiente</button></a>
					<a href="" ><button onclick="self.close()" class="btn">Cancelar</button></a>

				</div> <!-- /widget-content -->

			</div> <!-- /main -->

			<?php
				include("pie.php");
			?>

			<script src="javascript/obj906.js"></script>
			<script src="javascript/valores906.js"></script>
			<script src="javascript/session.js"></script>

		</body>

	</html>
