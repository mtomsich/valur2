<?php
include("sesion.php");
	$pagina='formulario904rub2pto2PHP';
	include("encabezado.php");
	include("seguridadForm.php");

?>

<!DOCTYPE html>
<html lang="es">

	<body>

		<div class="main">

			<div class="widget-header">
				<i class="icon-th-large"></i>
				<h3>Formulario 904</h3>
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
										<a href="formulario904rub2pto1.php"><button class="btn btn-success">Anterior</button></a>
										<a href="formulario904rub3.php"><button class="btn btn-success">Siguiente</button></a>
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
																<td>Hechas a Medida</td>
																<td><input id="MadeA2" type="checkbox" name="MadeA2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Cristal Biselado</td>
																<td><input id="MadeA3" type="checkbox" name="MadeA3" value="1" onClick="checkValue(this);"></td>
															</tr>


														</table>


													</td>
													<td>
														<table class="table-condensed" width="100%">


															<tr>

																<td>Cortina de Malla</td>
																<td><input id="MetaA1" type="checkbox" name="MetaA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Hechas a Medida</td>
																<td><input id="MetaA2" type="checkbox" name="MetaA2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Vidrio Templado</td>
																<td><input id="MetaA3" type="checkbox" name="MetaA3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Cristales</td>
																<td><input id="MetaA4" type="checkbox" name="MetaA4" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Celosias</td>
																<td><input id="MetaA5" type="checkbox" name="MetaA5" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Anonizado de Color</td>
																<td><input id="MetaA6" type="checkbox" name="MetaA6" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Doble Contacto</td>
																<td><input id="MetaA7" type="checkbox" name="MetaA7" value="1" onClick="checkValue(this);"></td>
															</tr>


														</table>


													</td>
													<td>
														<table class="table-condensed" width="100%">


															<tr>

																<td>Baño de dos Ambientes</td>
																<td><input id="BanoA1" type="checkbox" name="BanoA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>lavatorio de Pie</td>
																<td><input id="BanoA2" type="checkbox" name="BanoA2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Vanitory</td>
																<td><input id="BanoA3" type="checkbox" name="BanoA3" value="1" onClick="checkValue(this);"></td>
															</tr>


														</table>


													</td>
													<td>
														<table class="table-condensed" width="100%">


															<tr>

																<td>Horno Embutido</td>
																<td><input id="CociA1" type="checkbox" name="CociA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Cocina a Gas o Supergas</td>
																<td><input id="CociA2" type="checkbox" name="CociA2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Cocina Industrial</td>
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
																<td>Azulejos Decorativos</td>
																<td><input id="RevesA2" type="checkbox" name="RevesA2" value="1" onClick="checkValue(this);"></td>
															</tr>
                                                            <tr>
																<td>cerámico Decorados</td>
																<td><input id="RevesA3" type="checkbox" name="RevesA3" value="1" onClick="checkValue(this);"></td>
															</tr>
														    <tr>
																<td>Placas Sintéticas</td>
																<td><input id="RevesA4" type="checkbox" name="RevesA4" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>



													</td>
													<td>
														<table class="table-condensed" width="100%">


															<tr>

																<td>Aire Acondicionado</td>
																<td><input id="InstaA1" type="checkbox" name="InstaA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Ascensores</td>
																<td><input id="InstaA2" type="checkbox" name="InstaA2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Montacargas</td>
																<td><input id="InstaA3" type="checkbox" name="InstaA3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Heladeras con Equipo Central</td>
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
																<td>Lustradas</td>
																<td><input id="MadeB1" type="checkbox" name="MadeB1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Cortinas Tipo Barrio</td>
																<td><input id="MadeB2" type="checkbox" name="MadeB2" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Puertas Plegadizas</td>
																<td><input id="MadeB3" type="checkbox" name="MadeB3" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Puerta Corrediza Embutida</td>
																<td><input id="MadeB4" type="checkbox" name="MadeB4" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Celosías</td>
																<td><input id="MadeB5" type="checkbox" name="MadeB5" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Pintadas con Esmalte</td>
																<td><input id="MadeB6" type="checkbox" name="MadeB6" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Barnizada</td>
																<td><input id="MadeB7" type="checkbox" name="MadeB7" value="1" onClick="checkValue(this);"></td>
															</tr>



														</table>

													</td>
													<td>
														<table class="table-condensed" width="100%">
															<tr>
																<td>Cortinas de Chapa Ondulada</td>
																<td><input id="MetaB1" type="checkbox" name="MetaB1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Aluminio</td>
																<td><input id="MetaB2" type="checkbox" name="MetaB2" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Cortina de Enrollar de Aluminio</td>
																<td><input id="MetaB3" type="checkbox" name="MetaB3" value="1" onClick="checkValue(this);"></td>

															</tr>

															<tr>
																<td>Pintadas con Esmalte</td>
																<td><input id="MetaB4" type="checkbox" name="MetaB4" value="1" onClick="checkValue(this);"></td>

															</tr>

														</table>
													</td>
													<td>
														<table class="table-condensed" width="100%">

															<tr>
																<td>Inodoro de Pedestal</td>
																<td><input id="BanoB1" type="checkbox" name="BanoB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Mingitorios a Palangana Enlosados o Canaleta Enlosados con Separación de Marmol</td>
																<td><input id="BanoB2" type="checkbox" name="BanoB2" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>

													</td>
													<td>
														<table class="table-condensed" width="100%">
															<tr>
																<td>Mesada de Madera</td>
																<td><input id="CociB1" type="checkbox" name="CociB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Mesada de Granito</td>
																<td><input id="CociB2" type="checkbox" name="CociB2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Mesada de Mármol</td>
																<td><input id="CociB3" type="checkbox" name="CociB3" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>
													</td>
													<td>
														<table class="table-condensed" width="100%">

															<tr>
																<td>Azulejo Común</td>
																<td><input id="RevesB1" type="checkbox" name="RevesB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Empapelado</td>
																<td><input id="RevesB2" type="checkbox" name="RevesB2" value="1" onClick="checkValue(this);"></td>
															</tr>
                                                            <tr>
																<td>Pentagrés</td>
																<td><input id="RevesB3" type="checkbox" name="RevesB3" value="1" onClick="checkValue(this);"></td>
															</tr>
															 <tr>
																<td>Madera Común</td>
																<td><input id="RevesB4" type="checkbox" name="RevesB4" value="1" onClick="checkValue(this);"></td>
															</tr>
														    <tr>
																<td>Laminado Plástico</td>
																<td><input id="RevesB5" type="checkbox" name="RevesB5" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>

																<td>Calefacción Central</td>
																<td><input id="InstaB1" type="checkbox" name="InstaB1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Rociadores Cenitales</td>
																<td><input id="InstaB2" type="checkbox" name="InstaB2" value="1" onClick="checkValue(this);"></td>

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
																<td>Hechas en Serie</td>
																<td><input id="MadeC1" type="checkbox" name="MadeC1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Puertas con  Postigones</td>
																<td><input id="MadeC2" type="checkbox" name="MadeC2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Cortinas de Enrollar madera o plásticas</td>
																<td><input id="MadeC3" type="checkbox" name="MadeC3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Con vidrio</td>
																<td><input id="MadeC4" type="checkbox" name="MadeC4" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<table  class="table-condensed" width="100%">
															<tr>
																<td>Hechas en serie</td>
																<td><input id="MetaC1" type="checkbox" name="MetaC1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Con Vidrio</td>
																<td><input id="MetaC2" type="checkbox" name="MetaC2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Postigón de Chapa</td>
																<td><input id="MetaC3" type="checkbox" name="MetaC3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Ventana Balancin</td>
																<td><input id="MetaC4" type="checkbox" name="MetaC4" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Anonizado Común</td>
																<td><input id="MetaC5" type="checkbox" name="MetaC5" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<table  class="table-condensed" width="100%">
															<tr>
																<td>Lavatorio de Pared</td>
																<td><input id="BanoC1" type="checkbox" name="BanoC1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Mingitorios a Canaleta de Cemento Alisado</td>
																<td><input id="BanoC2" type="checkbox" name="BanoC2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Multifaz</td>
																<td><input id="BanoC3" type="checkbox" name="BanoC3" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
													<table  class="table-condensed" width="100%">
															<tr>
																<td>Mesada de Granito Reconstituido</td>
																<td><input id="CociC1" type="checkbox" name="CociC1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Mesada de Escallas de Marmol</td>
																<td><input id="CociC2" type="checkbox" name="CociC2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Mesada Acero Inoxidable</td>
																<td><input id="CociC3" type="checkbox" name="CociC3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Mesada Cerámicos</td>
																<td><input id="CociC4" type="checkbox" name="CociC4" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<table  class="table-condensed" width="100%">
															<tr>
																<td>Cemento Común o Blanco en Blanco</td>
																<td><input id="RevesC1" type="checkbox" name="RevesC1" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<table  class="table-condensed" width="100%">
															<tr>
																<td>Equipo de Bombeo de Agua</td>
																<td><input id="InstaC1" type="checkbox" name="InstaC1" value="1" onClick="checkValue(this);"></td>
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
																<td>Ventana Sin Cortina o Postigo</td>
																<td><input id="MadeD1" type="checkbox" name="MadeD1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>No Tiene</td>
																<td><input id="MadeD2" type="checkbox" name="MadeD2" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<table  class="table-condensed" width="100%">
														<tr>
																<td>No Tiene</td>
																<td><input id="MetaD1" type="checkbox" name="MetaD1" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<table  class="table-condensed" width="100%">
															<tr>
																<td>Inodoro a la Turca</td>
																<td><input id="BanoD1" type="checkbox" name="BanoD1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Pileta de Lavar</td>
																<td><input id="BanoD2" type="checkbox" name="BanoD2" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<table  class="table-condensed" width="100%">
															<tr>
																<td>Unico Equipamiento Pileta de Cocina</td>
																<td><input id="CociD1" type="checkbox" name="CociD1" value="1" onClick="checkValue(this);"></td>
															</tr>

															<tr>
																<td>No Tiene</td>
																<td><input id="CociD1" type="checkbox" name="CociD1" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>

													</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>
																<td>No Tiene</td>
																<td><input id="RevesD1" type="checkbox" name="RevesD1" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>

													</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>
																<td>No Tiene</td>
																<td><input id="InstaD1" type="checkbox" name="InstaD1" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>

													</td>
													<td><div id="capaTextoD">0</div></td>
												</tr>


												<tr>
													<td>

													Estado <br> Cons											</td>

													<td>
														<table>
															<tr>
																<td><input type="radio" id="MadeEstado1" name="MadeEstado" value="Bueno" onClick="radioValue(this);">B (3)</td>
																<td><input type="radio" id="MadeEstado2" name="MadeEstado" value="Regular" onClick="radioValue(this);">R (2)</td>
																<td><input type="radio" id="MadeEstado3" name="MadeEstado" value="Malo" onClick="radioValue(this);">M (1)</td>
															</tr>

														</table>
													</td>
													<td>
														<table>
															<tr>
																<td><input type="radio" id="MetaEstado1" name="MetaEstado" value="Bueno" onClick="radioValue(this);">B (8)</td>
																<td><input type="radio" id="MetaEstado2" name="MetaEstado" value="Regular" onClick="radioValue(this);">R (5)</td>
																<td><input type="radio" id="MetaEstado3" name="MetaEstado" value="Malo" onClick="radioValue(this);">M (3)</td>
															</tr>

														</table>

													</td>
													<td>
														<table>
															<tr>
																<td><input type="radio" id="BanoEstado1" name="BanoEstado" value="Bueno" onClick="radioValue(this);">B (3)</td>

																<td><input type="radio" id="BanoEstado2" name="BanoEstado" value="Regular" onClick="radioValue(this);">R (2)</td>

																<td>	<input type="radio" id="BanoEstado3" name="BanoEstado" value="Malo" onClick="radioValue(this);">M (1)</td>
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
																<td><input type="radio" id="RevesEstado1" name="RevesEstado" value="Bueno" onClick="radioValue(this);">B (4)</td>

																<td><input type="radio" id="RevesEstado2" name="RevesEstado" value="Regular" onClick="radioValue(this);">R (2)</td>

																<td>	<input type="radio" id="RevesEstado3" name="RevesEstado" value="Malo" onClick="radioValue(this);">M (1)</td>
															</tr>

														</table>

													</td>
													<td>
														<table>
															<tr>
																<td><input type="radio" id="InstEstado1" name="InstEstado" value="Bueno" onClick="radioValue(this);">B (2)</td>

																<td><input type="radio" id="InstEstado2" name="InstEstado" value="Regular" onClick="radioValue(this);">R (1)</td>

																<td>	<input type="radio" id="InstEstado3" name="InstEstado" value="Malo" onClick="radioValue(this);">M (0)</td>
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

					<a href="formulario904rub2pto1.php"><button class="btn btn-success">Anterior</button></a>
					<a href="formulario904rub3.php"><button class="btn btn-success">Siguiente</button></a>
					<a href="" ><button onclick="self.close()" class="btn">Cancelar</button></a>

				</div> <!-- /widget-content -->

			</div> <!-- /main -->
			<script src="javascript/obj904.js"></script>
			<script src="javascript/valores904.js"></script>
			<script src="javascript/session.js"></script>

		</body>

	</html>
