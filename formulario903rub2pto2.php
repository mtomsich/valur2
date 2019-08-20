<?php
	include("sesion.php");
		$pagina='formulario903rub2pto2PHP';
		include("encabezado.php");
			include("seguridadForm.php");

	?>
	<!DOCTYPE html>
	<html lang="es">

	<body>
		<div class="main">

			<div class="widget-header">
				<i class="icon-th-large"></i>
				<h3>Formulario 903</h3>
			</div> <!-- /widget-header -->

			<div class="widget-content">

				<div class="control-group">

					<div class="controls">

						<div class="accordion" id="accordion2">
							<div class="accordion-group"><!-- rub 2 -->
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" >
										RUBRO 2: CARACTERISTICAS DEL EDIFICIO
									</a>
								</div>
								<div class="accordion-body">
									<div class="accordion-inner">
										<a href="formulario903rub2pto1.php"><button class="btn btn-success">Anterior</button></a>
										<a href="formulario903rub3.php"><button class="btn btn-success">Siguiente</button></a>

										<a href="" ><button onclick="self.close()" class="btn">Cancelar</button></a>
<br><br>
										<table class="table table-bordered responsive-table">
											<thead>

												<th>1- Tipo</th>
												<th class='col-sm-2'>9- Puertas y Ventanas <br>De Madera</th>
												<th class='col-sm-2'>10- Puertas y Ventanas <br>Metalica</th>
												<th class='col-sm-2'>11- Baños</th>
												<th class='col-sm-2'>12- Cocina</th>
												<th class='col-sm-2'>13- Revestimiento</th>
												<th class='col-sm-2'>14- Instalaciones complementarias</th>
												<th></th>

											</thead>
											<tbody>
												<tr>
													<td>A</td>
													<td>
														<table class="table-condensed" width="100%">

															<tr>
																<td>Puertas Moldurados</td>
																<td><input id="MadeA1" type="checkbox" name="MadeA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Madera Fina</td>
																<td><input id="MadeA2" type="checkbox" name="MadeA2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Vitraux</td>
																<td><input id="MadeA3" type="checkbox" name="MadeA3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Herrajes de Estilo</td>
																<td><input id="MadeA4" type="checkbox" name="MadeA4" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Crital Biselado</td>
																<td><input id="MadeA5" type="checkbox" name="MadeA5" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>


													</td>
													<td>
														<table class="table-condensed" width="100%">


															<tr>

																<td>Puertas Artisticas</td>
																<td><input id="MetaA1" type="checkbox" name="MetaA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Rejas Artisticas</td>
																<td><input id="MetaA2" type="checkbox" name="MetaA2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Vitraux</td>
																<td><input id="MetaA3" type="checkbox" name="MetaA3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Herrajes de Estilo</td>
																<td><input id="MetaA4" type="checkbox" name="MetaA4" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Anizado de Color</td>
																<td><input id="MetaA5" type="checkbox" name="MetaA5" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Doble Contacto</td>
																<td><input id="MetaA6" type="checkbox" name="MetaA6" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Vidrio Templado</td>
																<td><input id="MetaA7" type="checkbox" name="MetaA7" value="1" onClick="checkValue(this);"></td>
															</tr>


														</table>


													</td>
													<td>
														<table class="table-condensed" width="100%">


															<tr>

																<td>Baño de dos ambientes</td>
																<td><input id="BanoA1" type="checkbox" name="BanoA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Hidromasaje</td>
																<td><input id="BanoA2" type="checkbox" name="BanoA2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Sauna</td>
																<td><input id="BanoA3" type="checkbox" name="BanoA3" value="1" onClick="checkValue(this);"></td>
															</tr>


														</table>


													</td>
													<td>
														<table class="table-condensed" width="100%">


															<tr>

																<td>Parrilla y calienta platos
																<br> a gas, supergas o electrica </td>
																<td><input id="CociA1" type="checkbox" name="CociA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Horno Embutido y anafe</td>
																<td><input id="CociA2" type="checkbox" name="CociA2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Heladera bajo mesada</td>
																<td><input id="CociA3" type="checkbox" name="CociA3" value="1" onClick="checkValue(this);"></td>
															</tr>



														</table>


													</td>
													<td>
														<table class="table-condensed" width="100%">


															<tr>

																<td>Madera Fina</td>
																<td><input id="RevesA1" type="checkbox" name="RevesA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Mayolica granito o marmol en baños o toilettes</td>
																<td><input id="RevesA2" type="checkbox" name="RevesA2" value="1" onClick="checkValue(this);"></td>
															</tr>


														</table>


													</td>
													<td>
														<table class="table-condensed" width="100%">


															<tr>

																<td>Heladera con Equipo Central</td>
																<td><input id="InstaA1" type="checkbox" name="InstaA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Pileta de Natacion</td>
																<td><input id="InstaA2" type="checkbox" name="InstaA2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Aire Acondicionado</td>
																<td><input id="InstaA3" type="checkbox" name="InstaA3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Chiminea Artistica</td>
																<td><input id="InstaA4" type="checkbox" name="InstaA4" value="1" onClick="checkValue(this);"></td>
															</tr>


														</table>


													</td>

													<td><div id="capaTextoA">0</div></td>
												</tr>
												<tr>

													<td>B</td>
													<td>

														<table class="table-condensed" width="100%">

															<tr>
																<td>Hechas a Medida</td>
																<td><input id="MadeB1" type="checkbox" name="MadeB1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Cortinas de Enrollar</td>
																<td><input id="MadeB2" type="checkbox" name="MadeB2" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Vidrios Emplomados</td>
																<td><input id="MadeB3" type="checkbox" name="MadeB3" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Lustradas</td>
																<td><input id="MadeB4" type="checkbox" name="MadeB4" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Corredizas</td>
																<td><input id="MadeB5" type="checkbox" name="MadeB5" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Guillotina</td>
																<td><input id="MadeB6" type="checkbox" name="MadeB6" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Cortina Americana/Veneciana</td>
																<td><input id="MadeB7" type="checkbox" name="MadeB7" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Celosias</td>
																<td><input id="MadeB8" type="checkbox" name="MadeB8" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Cortinas Tipo Barrio</td>
																<td><input id="MadeB9" type="checkbox" name="MadeB9" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>

													</td>
													<td>
														<table class="table-condensed" width="100%">
															<tr>
																<td>Hechas a Medida</td>
																<td><input id="MetaB1" type="checkbox" name="MetaB1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Cortinas Americana</td>
																<td><input id="MetaB2" type="checkbox" name="MetaB2" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Vidrios Emplomados</td>
																<td><input id="MetaB3" type="checkbox" name="MetaB3" value="1" onClick="checkValue(this);"></td>

															</tr>

															<tr>
																<td>Celosias</td>
																<td><input id="MetaB4" type="checkbox" name="MetaB4" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Corrediza con Colisa</td>
																<td><input id="MetaB5" type="checkbox" name="MetaB5" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Cortina de Aluminio</td>
																<td><input id="MetaB6" type="checkbox" name="MetaB6" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Anodizado Comun</td>
																<td><input id="MetaB7" type="checkbox" name="MetaB7" value="1" onClick="checkValue(this);"></td>

															</tr>

														</table>
													</td>
													<td>
														<table class="table-condensed" width="100%">

															<tr>

																<td>Calefon o Termotanque</td>
																<td><input id="BanoB1" type="checkbox" name="BanoB1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Vanitory</td>
																<td><input id="BanoB2" type="checkbox" name="BanoB2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Lavatorio de Pie</td>
																<td><input id="BanoB3" type="checkbox" name="BanoB3" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>

													</td>
													<td>
														<table class="table-condensed" width="100%">
															<tr>
																<td>Calefon o Termotanque</td>
																<td><input id="CociB1" type="checkbox" name="CociB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Mueble Bajo Mesada a Medida</td>
																<td><input id="CociB2" type="checkbox" name="CociB2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Mesada de Granito o Marmol</td>
																<td><input id="CociB3" type="checkbox" name="CociB3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Mesada de Madera</td>
																<td><input id="CociB4" type="checkbox" name="CociB4" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<table class="table-condensed" width="100%">

															<tr>
																<td>Azulejos Decorados en Cocina y Baño</td>
																<td><input id="RevesB1" type="checkbox" name="RevesB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Ceramico Decorado en Cocina y Baño</td>
																<td><input id="RevesB2" type="checkbox" name="RevesB2" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>
													</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>

																<td>Ascensores para mas de 4 Personas</td>
																<td><input id="InstaB1" type="checkbox" name="InstaB1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Calefaccion Central por Radiadores</td>
																<td><input id="InstaB2" type="checkbox" name="InstaB2" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Losa Radiante</td>
																<td><input id="InstaB3" type="checkbox" name="InstaB3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Agua Caliente Central</td>
																<td><input id="InstaB4" type="checkbox" name="InstaB4" value="1" onClick="checkValue(this);"></td>
															</tr>

															<tr>
																<td>Rociadores Cenitales</td>
																<td><input id="InstaB5" type="checkbox" name="InstaB5" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>


													</td>
													<td><div id="capaTextoB">0</div></td>
												</tr>
												<tr>
													<td>C</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>

																<td>Puertas Lisas con o sin Celosias</td>
																<td><input id="MadeC1" type="checkbox" name="MadeC1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Herrajes de Primera</td>
																<td><input id="MadeC2" type="checkbox" name="MadeC2" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Plegadizas</td>
																<td><input id="MadeC3" type="checkbox" name="MadeC3" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Cortinas Plasticas</td>
																<td><input id="MadeC4" type="checkbox" name="MadeC4" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Corredizas Embutidas</td>
																<td><input id="MadeC5" type="checkbox" name="MadeC5" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Pintadas con Esmalte</td>
																<td><input id="MadeC6" type="checkbox" name="MadeC6" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Barnizada</td>
																<td><input id="MadeC7" type="checkbox" name="MadeC7" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>

													</td>
													<td>
														<table  class="table-condensed" width="100%">


															<tr>

																<td>Ventanas a Balancin</td>
																<td><input id="MetaC1" type="checkbox" name="MetaC1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Cortina de Malla</td>
																<td><input id="MetaC2" type="checkbox" name="MetaC2" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Contravidrio de Aluminio</td>
																<td><input id="MetaC3" type="checkbox" name="MetaC3" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Cortina Chapa Ondulada</td>
																<td><input id="MetaC4" type="checkbox" name="MetaC4" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Pintadas con Esmalte</td>
																<td><input id="MetaC5" type="checkbox" name="MetaC5" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>
													</td>
													<td>
														<table  class="table-condensed" width="100%">


															<tr>

																<td>Bidet</td>
																<td><input id="BanoC1" type="checkbox" name="BanoC1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Inodoro de Pedestal</td>
																<td><input id="BanoC2" type="checkbox" name="BanoC2" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Bañera</td>
																<td><input id="BanoC3" type="checkbox" name="BanoC3" value="1" onClick="checkValue(this);"></td>

															</tr>


														</table>

													</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>

																<td>Cocina a gas o Supergas</td>
																<td><input id="CociC1" type="checkbox" name="CociC1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Mesada Ceramico</td>
																<td><input id="CociC2" type="checkbox" name="CociC2" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Mesada Acero Inoxidable</td>
																<td><input id="CociC3" type="checkbox" name="CociC3" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Mesada Granito Reconstituido</td>
																<td><input id="CociC4" type="checkbox" name="CociC4" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Mesadas Escallas de Marmol Trapezoidal</td>
																<td><input id="CociC5" type="checkbox" name="CociC5" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Mueble Bajo Mesada Estandard</td>
																<td><input id="CociC6" type="checkbox" name="CociC6" value="1" onClick="checkValue(this);"></td>

															</tr>


														</table>

													</td>
													<td>
														<table  class="table-condensed" width="100%">


															<tr>

																<td>Azulejos en Cocina y Baño</td>
																<td><input id="RevesC1" type="checkbox" name="RevesC1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Madera Terciada o Prensada en Habitacion</td>
																<td><input id="RevesC2" type="checkbox" name="RevesC2" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Ceramico Comun</td>
																<td><input id="RevesC3" type="checkbox" name="RevesC3" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Laminados Plasticos</td>
																<td><input id="RevesC4" type="checkbox" name="RevesC4" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Empapelado</td>
																<td><input id="RevesC5" type="checkbox" name="RevesC5" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>


													</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>

																<td>Ascensores para 4 personas o menos</td>
																<td><input id="InstaC1" type="checkbox" name="InstaC1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Chimena Comun</td>
																<td><input id="InstaC2" type="checkbox" name="InstaC2" value="1" onClick="checkValue(this);"></td>

															</tr>


														</table>

													</td>
													<td><div id="capaTextoC">0</div></td>
												</tr>
												<tr>
													<td>D</td>
													<td>

														<table  class="table-condensed" width="100%">

															<tr>

																<td>Hechas en Serie</td>
																<td><input id="MadeD1" type="checkbox" name="MadeD1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Madera Comun</td>
																<td><input id="MadeD2" type="checkbox" name="MadeD2" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Ventana con Postigo</td>
																<td><input id="MadeD3" type="checkbox" name="MadeD3" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Con Vidrios</td>
																<td><input id="MadeD4" type="checkbox" name="MadeD4" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>

													</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>

																<td>Hechas en Serie</td>
																<td><input id="MetaD1" type="checkbox" name="MetaD1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Con Vidrios</td>
																<td><input id="MetaD2" type="checkbox" name="MetaD2" value="1" onClick="checkValue(this);"></td>
															</tr>

															<tr>
																<td>Postigon de Chapa</td>
																<td><input id="MetaD3" type="checkbox" name="MetaD3" value="1" onClick="checkValue(this);"></td>
															</tr>


														</table>
													</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>
																<td>Lavatorio de Pared</td>
																<td><input id="BanoD1" type="checkbox" name="BanoD1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Ducha sin Bañera</td>
																<td><input id="BanoD2" type="checkbox" name="BanoD2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Multifaz</td>
																<td><input id="BanoD3" type="checkbox" name="BanoD3" value="1" onClick="checkValue(this);"></td>
															</tr>


														</table>

													</td>
													<td>
														<table  class="table-condensed" width="100%">
															<tr>
																<td>Mesada de Fórmica</td>
																<td><input id="CociD1" type="checkbox" name="CociD1" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>

													</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>
																<td>Cemento Blanco en Baño</td>
																<td><input id="RevesD1" type="checkbox" name="RevesD1" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>

													</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>
																<td>Equipo de Bombeo de Agua</td>
																<td><input id="InstaD1" type="checkbox" name="InstaD1" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>

													</td>
													<td><div id="capaTextoD">0</div></td>
												</tr>
												<tr>
													<td>E</td>
													<td>

														<table  class="table-condensed" width="100%">
															<tr>

																<td>Ventanas sin Cortinas o Postigos</td>
																<td><input id="MadeE1" type="checkbox" name="MadeE1" value="1" onClick="checkValue(this);"></td>

															</tr>

															<tr>

																<td>No tiene</td>
																<td><input id="MadeE2" type="checkbox" name="MadeE2" value="1" onClick="checkValue(this);"></td>

															</tr>

														</table>

													</td>

													<td>
														<table  class="table-condensed" width="100%">
															<tr>
																<td>No tiene</td>
																<td><input id="MetaE1" type="checkbox" name="MetaE1" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>

													</td>

													<td>
														<table  class="table-condensed" width="100%">
															<tr>
																<td>Inodoro a la Turca</td>
																<td><input id="BanoE1" type="checkbox" name="BanoE1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Pileta de Lavar</td>
																<td><input id="BanoE2" type="checkbox" name="BanoE2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Mingitorio</td>
																<td><input id="BanoE3" type="checkbox" name="BanoE3" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>
													</td>
													<td>
														<table  class="table-condensed" width="100%">
															<tr>
																<td>Unico Equipamiento Pïleta de Cocina</td>
																<td><input id="CociE1" type="checkbox" name="CociE1" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<table  class="table-condensed" width="100%">
															<tr>

																<td>Cemento Comun en baño</td>
																<td><input id="RevesE1" type="checkbox" name="RevesE1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>No tiene</td>
																<td><input id="RevesE2" type="checkbox" name="RevesE2" value="1" onClick="checkValue(this);"></td>

															</tr>

														</table>
													</td>
													<td>
														<table  class="table-condensed" width="100%">
															<tr>
																<td>No tiene</td>
																<td><input id="InstaE1" type="checkbox" name="InstaE1" value="1" onClick="checkValue(this);"></td>

															</tr>

														</table>

													</td>
													<td><div id="capaTextoE">0</div></td>
												</tr>

												<tr>
													<td>

													Estado <br> Cons											</td>

													<td>
														<table>
															<tr>
																<td><input type="radio" id="MadeEstado1" name="MadeEstado" value="Bueno" onClick="radioValue(this);">B (11)</td>
																<td><input type="radio" id="MadeEstado2" name="MadeEstado" value="Regular" onClick="radioValue(this);">R (8)</td>
																<td><input type="radio" id="MadeEstado3" name="MadeEstado" value="Malo" onClick="radioValue(this);">M (4)</td>
															</tr>

														</table>
													</td>
													<td>
														<table>
															<tr>
																<td><input type="radio" id="MetaEstado1" name="MetaEstado" value="Bueno" onClick="radioValue(this);">B (4)</td>
																<td><input type="radio" id="MetaEstado2" name="MetaEstado" value="Regular" onClick="radioValue(this);">R (3)</td>
																<td><input type="radio" id="MetaEstado3" name="MetaEstado" value="Malo" onClick="radioValue(this);">M (2)</td>
															</tr>

														</table>

													</td>
													<td>
														<table>
															<tr>
																<td><input type="radio" id="BanoEstado1" name="BanoEstado" value="Bueno" onClick="radioValue(this);">B (8)</td>

																<td><input type="radio" id="BanoEstado2" name="BanoEstado" value="Regular" onClick="radioValue(this);">R (6)</td>

																<td>	<input type="radio" id="BanoEstado3" name="BanoEstado" value="Malo" onClick="radioValue(this);">M (4)</td>
															</tr>

														</table>

													</td>
													<td>
														<table>
															<tr>
																<td><input type="radio" id="CociEstado1" name="CociEstado" value="Bueno" onClick="radioValue(this);">B (2)</td>

																<td><input type="radio" id="CociEstado2" name="CociEstado" value="Regular" onClick="radioValue(this);">R (1)</td>

																<td>	<input type="radio" id="CociEstado3" name="CociEstado" value="Malo" onClick="radioValue(this);">M (0)</td>
															</tr>

														</table>

													</td>
													<td>
														<table>
															<tr>
																<td><input type="radio" id="RevesEstado1" name="RevesEstado" value="Bueno" onClick="radioValue(this);">B (3)</td>

																<td><input type="radio" id="RevesEstado2" name="RevesEstado" value="Regular" onClick="radioValue(this);">R (2)</td>

																<td>	<input type="radio" id="RevesEstado3" name="RevesEstado" value="Malo" onClick="radioValue(this);">M (1)</td>
															</tr>

														</table>

													</td>
													<td>
														<table>
															<tr>
																<td><input type="radio" id="InstEstado1" name="InstEstado" value="Bueno" onClick="radioValue(this);">B (8)</td>

																<td><input type="radio" id="InstEstado2" name="InstEstado" value="Regular" onClick="radioValue(this);">R (6)</td>

																<td>	<input type="radio" id="InstEstado3" name="InstEstado" value="Malo" onClick="radioValue(this);">M (4)</td>
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

					<a href="formulario903rub2pto1.php"><button class="btn btn-success">Anterior</button></a>
					<a href="formulario903rub3.php"><button class="btn btn-success">Siguiente</button></a>

					<a href="" ><button onclick="self.close()" class="btn">Cancelar</button></a>

				</div> <!-- /widget-content -->

			</div> <!-- /main -->

			<?php
				include("pie.php");
			?>

			<script src="javascript/obj903.js"></script>
			<script src="javascript/valores903.js"></script>
			<script src="javascript/session.js"></script>

		</body>

	</html>
