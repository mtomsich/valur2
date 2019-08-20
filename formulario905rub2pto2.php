<?php
	include("sesion.php");
		$pagina='formulario905rub2pto2PHP';
		include("encabezado.php");
		include("seguridadForm.php");
		?>

<!DOCTYPE html>
<html lang="es">
	<body>
		<div class="main">

			<div class="widget-header">
				<i class="icon-th-large"></i>
				<h3>Formulario 905</h3>
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
										<a href="formulario905rub2pto1.php"><button class="btn btn-success">Anterior</button></a>
										<a href="formulario905rub3.php"><button class="btn btn-success">Siguiente</button></a>
										<a href="" ><button onclick="self.close()" class="btn">Cancelar</button></a>

<br><br>
										<table class="table table-bordered responsive-table">
											<thead>

												<th>1- Tipo</th>
												<th class='col-sm-2'>9-Piso</th>
												<th class='col-sm-2'>10- Puertas y Ventanas <br>De Madera</th>
												<th class='col-sm-2'>11- Puertas y Ventanas <br>Metalica</th>
												<th class='col-sm-2'>12- Baños</th>
												<th class='col-sm-2'>13- Revestimiento</th>
												<th class='col-sm-2'>14- Instalaciones complementarias</th>
												<th></th>

											</thead>
											<tbody>

												<tr>

													<td>B</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>

																<td>Parquet de Madera Fina</td>
																<td><input id="PisosB1" type="checkbox" name="PisosB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Mosaico Granítico Medida Grande</td>
																<td><input id="PisosB2" type="checkbox" name="PisosB2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Entarugado</td>
																<td><input id="PisosB3" type="checkbox" name="PisosB3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Cerámico Esmaltado</td>
																<td><input id="PisosB4" type="checkbox" name="PisosB4" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>


													</td>
													<td>

														<table class="table-condensed" width="100%">

															<tr>
																<td>Madera Fina</td>
																<td><input id="MadeB1" type="checkbox" name="MadeB1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Cortina de Enrollar</td>
																<td><input id="MadeB2" type="checkbox" name="MadeB2" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Con Celosía</td>
																<td><input id="MadeB3" type="checkbox" name="MadeB3" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>A Medida</td>
																<td><input id="MadeB4" type="checkbox" name="MadeB4" value="1" onClick="checkValue(this);"></td>
															</tr>






														</table>

													</td>
													<td>
														<table class="table-condensed" width="100%">
															<tr>
																<td>A Medida</td>
																<td><input id="MetaB1" type="checkbox" name="MetaB1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Cortinas de Enrollar</td>
																<td><input id="MetaB2" type="checkbox" name="MetaB2" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Doble Contacto</td>
																<td><input id="MetaB3" type="checkbox" name="MetaB3" value="1" onClick="checkValue(this);"></td>

															</tr>

															<tr>
																<td>Contra Incendio</td>
																<td><input id="MetaB4" type="checkbox" name="MetaB4" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Vidrio Templado</td>
																<td><input id="MetaB5" type="checkbox" name="MetaB5" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Doble Contacto de Abrir</td>
																<td><input id="MetaB6" type="checkbox" name="MetaB6" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Con Celosia</td>
																<td><input id="MetaB7" type="checkbox" name="MetaB7" value="1" onClick="checkValue(this);"></td>

															</tr>

															<tr>
																<td>Anodizado Común</td>
																<td><input id="MetaB8" type="checkbox" name="MetaB8" value="1" onClick="checkValue(this);"></td>

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
																<td>Bidet</td>
																<td><input id="BanoB2" type="checkbox" name="BanoB2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Lavatorio de Pie</td>
																<td><input id="BanoB3" type="checkbox" name="BanoB3" value="1" onClick="checkValue(this);"></td>
															</tr>
                                                            <tr>
																<td>Mingitorios a Palangana Enlozados</td>
																<td><input id="BanoB4" type="checkbox" name="BanoB4" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>

													</td>
													<td>
														<table class="table-condensed" width="100%">

															<tr>
																<td>Acústicos</td>
																<td><input id="RevesB1" type="checkbox" name="RevesB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Aislación de Corcho</td>
																<td><input id="RevesB2" type="checkbox" name="RevesB2" value="1" onClick="checkValue(this);"></td>
															</tr>
                                                            <tr>
																<td>Lana de Vidrio</td>
																<td><input id="RevesB3" type="checkbox" name="RevesB3" value="1" onClick="checkValue(this);"></td>
															</tr>
														    <tr>
																<td>Azulejos Decorados</td>
																<td><input id="RevesB4" type="checkbox" name="RevesB4" value="1" onClick="checkValue(this);"></td>
															</tr>
														    <tr>
																<td>Cerámicos Esmaltados</td>
																<td><input id="RevesB5" type="checkbox" name="RevesB5" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>

																<td>Planta de Depuración de Líquidos Cloacales</td>
																<td><input id="InstaB1" type="checkbox" name="InstaB1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Montacargas</td>
																<td><input id="InstaB2" type="checkbox" name="InstaB2" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Camara Frigorífica</td>
																<td><input id="InstaB3" type="checkbox" name="InstaB3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Ascensores</td>
																<td><input id="InstaB4" type="checkbox" name="InstaB4" value="1" onClick="checkValue(this);"></td>
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

																<td>Mosaico Granitico Medida Comun</td>
																<td><input id="PisosC1" type="checkbox" name="PisosC1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Parquet Común</td>
																<td><input id="PisosC2" type="checkbox" name="PisosC2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Hormigón Simple o Armado</td>
																<td><input id="PisosC3" type="checkbox" name="PisosC3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Cerámico Común</td>
																<td><input id="PisosC4" type="checkbox" name="PisosC4" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Metálico</td>
																<td><input id="PisosC5" type="checkbox" name="PisosC5" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Pavimento Articulado</td>
																<td><input id="PisosC6" type="checkbox" name="PisosC6" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Goma</td>
																<td><input id="PisosC7" type="checkbox" name="PisosC7" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>
													</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>

																<td>Portones de Madera Dura</td>
																<td><input id="MadeC1" type="checkbox" name="MadeC1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Pintadas de Esmalte</td>
																<td><input id="MadeC2" type="checkbox" name="MadeC2" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Barnizadas</td>
																<td><input id="MadeC3" type="checkbox" name="MadeC3" value="1" onClick="checkValue(this);"></td>

															</tr>




														</table>

													</td>
													<td>
														<table  class="table-condensed" width="100%">


															<tr>

																<td>Hechas en Serie</td>
																<td><input id="MetaC1" type="checkbox" name="MetaC1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Con Marco y Hoja Común</td>
																<td><input id="MetaC2" type="checkbox" name="MetaC2" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Cortina de Chapa Ondulada</td>
																<td><input id="MetaC3" type="checkbox" name="MetaC3" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Cortina de Enrollar de Aluminio</td>
																<td><input id="MetaC4" type="checkbox" name="MetaC4" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Cortina Tipo Malla</td>
																<td><input id="MetaC5" type="checkbox" name="MetaC5" value="1" onClick="checkValue(this);"></td>
															</tr>
                                                            <tr>
																<td>Corrediza con Coliza</td>
																<td><input id="MetaC6" type="checkbox" name="MetaC6" value="1" onClick="checkValue(this);"></td>
															</tr>
														    <tr>
																<td>Pintadas Con Esmalte</td>
																<td><input id="MetaC7" type="checkbox" name="MetaC7" value="1" onClick="checkValue(this);"></td>
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
																<td>Mingitorios a Canaleta Enlozados</td>
																<td><input id="BanoC2" type="checkbox" name="BanoC2" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Con Duchas</td>
																<td><input id="BanoC3" type="checkbox" name="BanoC3" value="1" onClick="checkValue(this);"></td>

															</tr>
                                                            <tr>
																<td>Multifaz</td>
																<td><input id="BanoC4" type="checkbox" name="BanoC4" value="1" onClick="checkValue(this);"></td>

															</tr>

														</table>

													</td>
													<td>
														<table  class="table-condensed" width="100%">


															<tr>

																<td>Azulejos</td>
																<td><input id="RevesC1" type="checkbox" name="RevesC1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Pentagrés</td>
																<td><input id="RevesC2" type="checkbox" name="RevesC2" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>cerámico Común</td>
																<td><input id="RevesC3" type="checkbox" name="RevesC3" value="1" onClick="checkValue(this);"></td>

															</tr>



														</table>


													</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>

																<td>Servicio Contra Incendio</td>
																<td><input id="InstaC1" type="checkbox" name="InstaC1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Rociadores Cenitales</td>
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
																<td>Cemento Alisado</td>
																<td><input id="PisosD1" type="checkbox" name="PisosD1" value="1" onClick="checkValue(this);"></td>
															</tr>



														</table>


													</td>
													<td>

														<table  class="table-condensed" width="100%">

															<tr>

																<td>Madera de Pino</td>
																<td><input id="MadeD1" type="checkbox" name="MadeD1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Postigón de Madera</td>
																<td><input id="MadeD2" type="checkbox" name="MadeD2" value="1" onClick="checkValue(this);"></td>

															</tr>


														</table>

													</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>

																<td>Portón Corredizo de Chapa</td>
																<td><input id="MetaD1" type="checkbox" name="MetaD1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Con Vidrios</td>
																<td><input id="MetaD2" type="checkbox" name="MetaD2" value="1" onClick="checkValue(this);"></td>
															</tr>

															<tr>
																<td>Postigón</td>
																<td><input id="MetaD3" type="checkbox" name="MetaD3" value="1" onClick="checkValue(this);"></td>
															</tr>


														</table>
													</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>
																<td>Piletones</td>
																<td><input id="BanoD1" type="checkbox" name="BanoD1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Inodoro a la Turca</td>
																<td><input id="BanoD2" type="checkbox" name="BanoD2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Mingitorios a Canaleta de Cemento</td>
																<td><input id="BanoD3" type="checkbox" name="BanoD3" value="1" onClick="checkValue(this);"></td>
															</tr>


														</table>

													</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>
																<td>Cemento Común o Blanco</td>
																<td><input id="RevesD1" type="checkbox" name="RevesD1" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>

													</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>
																<td>Tanques para Líquidos o Gases (Con Exepción del tipo Australiano)</td>
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

																<td>Ladrillo</td>
																<td><input id="PisosE1" type="checkbox" name="PisosE1" value="1" onClick="checkValue(this);"></td>


															</tr>
															<tr>
																<td>No tiene</td>
																<td><input id="PisosE2" type="checkbox" name="PisosE2" value="1" onClick="checkValue(this);"></td>


															</tr>

														</table>


													</td>
													<td>

														<table  class="table-condensed" width="100%">
															<tr>

																<td>No Tiene</td>
																<td><input id="MadeE1" type="checkbox" name="MadeE1" value="1" onClick="checkValue(this);"></td>

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
																<td>No Tiene</td>
																<td><input id="BanoE1" type="checkbox" name="BanoE1" value="1" onClick="checkValue(this);"></td>
															</tr>



														</table>
													</td>
													<td>
														<table  class="table-condensed" width="100%">
															<tr>

																<td>No Tiene</td>
																<td><input id="RevesE1" type="checkbox" name="RevesE1" value="1" onClick="checkValue(this);"></td>

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
																<td><input type="radio" id="PisosEstado1" name="PisosEstado" value="Bueno" onClick="radioValue(this);">B (7)</td>
																<td><input type="radio" id="PisosEstado2" name="PisosEstado" value="Regular" onClick="radioValue(this);">R (5)</td>
																<td><input type="radio" id="PisosEstado3" name="PisosEstado" value="Malo" onClick="radioValue(this);">M (3)</td>
															</tr>

														</table>
													</td>
													<td>
														<table>
															<tr>
																<td><input type="radio" id="MadeEstado1" name="MadeEstado" value="Bueno" onClick="radioValue(this);">B (4)</td>
																<td><input type="radio" id="MadeEstado2" name="MadeEstado" value="Regular" onClick="radioValue(this);">R (2)</td>
																<td><input type="radio" id="MadeEstado3" name="MadeEstado" value="Malo" onClick="radioValue(this);">M (1)</td>
															</tr>

														</table>

													</td>
													<td>
														<table>
															<tr>
																<td><input type="radio" id="MetaEstado1" name="MetaEstado" value="Bueno" onClick="radioValue(this);">B (5)</td>

																<td><input type="radio" id="MetaEstado2" name="MetaEstado" value="Regular" onClick="radioValue(this);">R (3)</td>

																<td>	<input type="radio" id="MetaEstado3" name="MetaEstado" value="Malo" onClick="radioValue(this);">M (1)</td>
															</tr>

														</table>

													</td>
													<td>
														<table>
															<tr>
																<td><input type="radio" id="BanoEstado1" name="BanoEstado" value="Bueno" onClick="radioValue(this);">B (2)</td>

																<td><input type="radio" id="BanoEstado2" name="BanoEstado" value="Regular" onClick="radioValue(this);">R (1)</td>

																<td>	<input type="radio" id="BanoEstado3" name="BanoEstado" value="Malo" onClick="radioValue(this);">M (0)</td>
															</tr>

														</table>

													</td>
													<td>
														<table>
															<tr>
																<td><input type="radio" id="RevesEstado1" name="RevesEstado" value="Bueno" onClick="radioValue(this);">B (2)</td>

																<td><input type="radio" id="RevesEstado2" name="RevesEstado" value="Regular" onClick="radioValue(this);">R (1)</td>

																<td>	<input type="radio" id="RevesEstado3" name="RevesEstado" value="Malo" onClick="radioValue(this);">M (0)</td>
															</tr>

														</table>

													</td>
													<td>
														<table>
															<tr>
																<td><input type="radio" id="InstaEstado1" name="InstaEstado" value="Bueno" onClick="radioValue(this);">B (7)</td>

																<td><input type="radio" id="InstaEstado2" name="InstaEstado" value="Regular" onClick="radioValue(this);">R (5)</td>

																<td>	<input type="radio" id="InstaEstado3" name="InstaEstado" value="Malo" onClick="radioValue(this);">M (3)</td>
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

					<a href="formulario905rub2pto1.php"><button class="btn btn-success">Anterior</button></a>
					<a href="formulario905rub3.php"><button class="btn btn-success">Siguiente</button></a>

					<a href="" ><button onclick="self.close()" class="btn">Cancelar</button></a>

				</div> <!-- /widget-content -->

			</div> <!-- /main -->

			<?php
				include("pie.php");
			?>

			<script src="javascript/obj905.js"></script>
			<script src="javascript/valores905.js"></script>
			<script src="javascript/session.js"></script>

		</body>

	</html>
