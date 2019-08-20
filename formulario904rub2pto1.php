<?php
include("sesion.php");
	$pagina='formulario904rub2pto1PHP';
	include("encabezado.php");
	include("seguridadForm.php");
	include("sql/consultas.php");
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
						<div class="accordion-inner">
							<div class="control-group">
								<label class="control-label" for="cliente">Destinos:</label>
								<div class=" controls ">
									<select id="destinos" onchange="changeDest();" class="form-control selectpicker" data-live-search="true" title="Seleccione destino" name="destinoSeleccionado">
										<?php
										while ($fila=mysqli_fetch_row($consultaDestinos)) {
											echo "<option value='".$fila['0']."'>".$fila['1']." - ".$fila['3']."</option>";
										}
										?>
									</select>
								</div>
								<label class="control-label" for="observaciones">Observaciones:</label>
								<div class=" controls ">
									<textarea class="form-control" onkeyup="changeObse();" rows="3" type="text" name="observaciones" id="observaciones"></textarea>
								</div>
							</div> <!-- /control-group -->
						</div>


						<div class="accordion" id="accordion2">
							<div class="accordion-group"><!-- rub 2 -->

								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" >
										RUBRO 2: CARACTERISTICAS DEL EDIFICIO
									</a>
								</div>
								<div class="accordion-body">
									<div class="accordion-inner">
										<a href="" ><button onclick="self.close()" class="btn">Cancelar</button></a>
										<a href="formulario904rub2pto2.php"><button class="btn btn-success">Siguiente</button></a>
										<br><br>
										<table class="table table-bordered responsive-table">
											<thead>
												<th>1- Tipo</th>
												<th>2- Fachada</th>
												<th>3- Paredes</th>
												<th>4- Escaleras</th>
												<th>5- Techos</th>
												<th>6- Cielorrasos</th>
												<th>7- Revoques</th>
												<th>8- Pisos</th>
												<th></th>
											</thead>
											<tbody>
												<tr>

													<td>A</td>
													<td>
														<table class="table-condensed" width="100%">

															<tr>
																<td>Revestimiento de Granito</td>
																<td><input id="FachaA1" type="checkbox" name="FachaA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Revestimiento de Mármol</td>
																<td><input id="FachaA2" type="checkbox" name="FachaA2" value="1" onClick="checkValue(this);"></td>
															</tr>


															<tr>
																<td>Crital Templado</td>
																<td><input id="FachaA3" type="checkbox" name="FachaA3" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>
													</td>
													<td>
														<table class="table-condensed" width="100%">


															<tr>
																<td>De Piedra</td>
																<td><input id="ParedA1" type="checkbox" name="ParedA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Ladrillo de Vidrio</td>
																<td><input id="ParedA2" type="checkbox" name="ParedA2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Muros Dobles</td>
																<td><input id="ParedA3" type="checkbox" name="ParedA3" value="1" onClick="checkValue(this);"></td>
															</tr>



														</table>
													</td>
													<td>
														<table class="table-condensed"  width="100%">
															<tr>

																<td>Revestido con Marmol</td>
																<td><input id="EscaA1" type="checkbox" name="EscaA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Madera Fina</td>
																<td><input id="EscaA2" type="checkbox" name="EscaA2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>

																<td>Revestido en Granito</td>
																<td><input id="EscaA3" type="checkbox" name="EscaA3" value="1" onClick="checkValue(this);"></td>
															</tr>


														</table>

													</td>
													<td>
														<table class="table-condensed" width="100%">


															<tr>

																<td>Baldosa Colorada Sobre Losa</td>
																<td><input id="TechoA1" type="checkbox" name="TechoA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Teja Curva o Plana</td>
																<td><input id="TechoA2" type="checkbox" name="TechoA2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Pizarra</td>
																<td><input id="TechoA3" type="checkbox" name="TechoA3" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>

													</td>
													<td>
														<table class="table-condensed" width="100%">


															<tr>

																<td>Artesonado de Yeso</td>
																<td><input id="CieloA1" type="checkbox" name="CieloA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Garganta para Luz Difusa</td>
																<td><input id="CieloA2" type="checkbox" name="CieloA2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Metalico a Medida</td>
																<td><input id="CieloA2" type="checkbox" name="CieloA2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Artesonado de Madera</td>
																<td><input id="CieloA2" type="checkbox" name="CieloA2" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>



													</td>
													<td>
														<table class="table-condensed" width="100%">


															<tr>

																<td>Paneles Moldurados</td>
																<td><input id="RevoqA1" type="checkbox" name="RevoqA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Estucados de Yeso</td>
																<td><input id="RevoqA2" type="checkbox" name="RevoqA2" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>


													</td>
													<td>
														<table class="table-condensed" width="100%">

															<tr>

																<td>Granito</td>
																<td><input id="PisosA1" type="checkbox" name="PisosA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Mármol</td>
																<td><input id="PisosA2" type="checkbox" name="PisosA2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Parquet de Madera Fina</td>
																<td><input id="PisosA3" type="checkbox" name="PisosA3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Entarugado</td>
																<td><input id="PisosA4" type="checkbox" name="PisosA4" value="1" onClick="checkValue(this);"></td>
															</tr>


														</table>


													</td>

													<td><div id="capaTextoA">0</div></td>
													<!-- </form> -->
												</tr>
												<tr>
													<td>B</td>
													<td>

														<table class="table-condensed" width="100%">

															<tr>

																<td>Revestimiento Piedra Tipo Mar del Plata</td>
																<td><input id="FachaB1" type="checkbox" name="FachaB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Imitacion Piedra Moldurada</td>
																<td><input id="FachaB2" type="checkbox" name="FachaB2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Ladrillo Maquinado con Junta Tomada</td>
																<td><input id="FachaB3" type="checkbox" name="FachaB3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Ceramico Esmaltado</td>
																<td><input id="FachaB4" type="checkbox" name="FachaB4" value="1" onClick="checkValue(this);"></td>
															</tr>


														</table>

													</td>
													<td>
														<table class="table-condensed" width="100%">


															<tr>

																<td>Ladrillo de Cal</td>
																<td><input id="ParedB1" type="checkbox" name="ParedB1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Instalacion Electrica Embutida</td>
																<td><input id="ParedB2" type="checkbox" name="ParedB2" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>
													</td>
													<td>
														<table class="table-condensed" width="100%">

															<tr>

																<td>Revestida con Material Reconstituido</td>
																<td><input id="EscaB1" type="checkbox" name="EscaB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Cerámico Esmaltado</td>
																<td><input id="EscaB2" type="checkbox" name="EscaB2" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>

													</td>
													<td>
														<table class="table-condensed" width="100%">
															<tr>
																<td>Losa de Hormigón</td>
																<td><input id="TechoB1" type="checkbox" name="TechoB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Baldosa Colorada sobre Losa</td>
																<td><input id="TechoB2" type="checkbox" name="TechoB2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>losa de Viguetas</td>
																<td><input id="TechoB3" type="checkbox" name="TechoB3" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<table class="table-condensed" width="100%">

															<tr>

																<td>Yeso Ileso</td>
																<td><input id="CieloB1" type="checkbox" name="CieloB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Pintados al Agua</td>
																<td><input id="CieloB2" type="checkbox" name="CieloB2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Metálico en Placas</td>
																<td><input id="CieloB3" type="checkbox" name="CieloB3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Placa de Yeso</td>
																<td><input id="CieloB4" type="checkbox" name="CieloB4" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>
													</td>
													<td>
														<table  class="table-condensed" width="100%">


															<tr>

																<td>Imitación Piedra</td>
																<td><input id="RevoqB1" type="checkbox" name="RevoqB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Pintados al agua</td>
																<td><input id="RevoqB2" type="checkbox" name="RevoqB2" value="1" onClick="checkValue(this);"></td>


															</tr>

														</table>


													</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>

																<td>Mosaico Granito</td>
																<td><input id="PisosB1" type="checkbox" name="PisosB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Parquet Común</td>
																<td><input id="PisosB2" type="checkbox" name="PisosB2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Cerámico Esmaltado</td>
																<td><input id="PisosB3" type="checkbox" name="PisosB3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Lajas Naturales</td>
																<td><input id="PisosB4" type="checkbox" name="PisosB4" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>


													</td>
													<td><div id="capaTextoB">0</div></td>
													<!-- </form> -->
												</tr>
												<tr>

													<td>C</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>

																<td>Ladrillo con Junta Tomada</td>
																<td><input id="FachaC1" type="checkbox" name="FachaC1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Revoque Común</td>
																<td><input id="FachaC2" type="checkbox" name="FachaC2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Ceramico Común</td>
																<td><input id="FachaC3" type="checkbox" name="FachaC3" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Hormigón Visto</td>
																<td><input id="FachaC4" type="checkbox" name="FachaC4" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Pentagres</td>
																<td><input id="FachaC5" type="checkbox" name="FachaC5" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>

													</td>
													<td>
														<table  class="table-condensed" width="100%">


															<tr>

																<td>Blocks Cemento</td>
																<td><input id="ParedC1" type="checkbox" name="ParedC1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Zinc o Madera</td>
																<td><input id="ParedC2" type="checkbox" name="ParedC2" value="1" onClick="checkValue(this);"></td>


															</tr>

														</table>
													</td>
													<td>
														<table  class="table-condensed" width="100%">


															<tr>

																<td>Revestida Cemento ANlisado</td>
																<td><input id="EscaC1" type="checkbox" name="EscaC1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Madera comun</td>
																<td><input id="EscaC2" type="checkbox" name="EscaC2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Ceramico comun</td>
																<td><input id="EscaC3" type="checkbox" name="EscaC3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Alfombra</td>
																<td><input id="EscaC4" type="checkbox" name="EscaC4" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>

													</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>

																<td>Chapa de Zinc o Fibro Cemento</td>
																<td><input id="TechoC1" type="checkbox" name="TechoC1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Chapa Plástica</td>
																<td><input id="TechoC2" type="checkbox" name="TechoC2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Chapa Alumínio</td>
																<td><input id="TechoC3" type="checkbox" name="TechoC3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Autoportante</td>
																<td><input id="TechoC4" type="checkbox" name="TechoC4" value="1" onClick="checkValue(this);"></td>

															</tr>

														</table>

													</td>
													<td>
														<table  class="table-condensed" width="100%">


															<tr>

																<td>Revoque a la Cal</td>
																<td><input id="CieloC1" type="checkbox" name="CieloC1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Madera</td>
																<td><input id="CieloC2" type="checkbox" name="CieloC2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Pintados a la Cal</td>
																<td><input id="CieloC3" type="checkbox" name="CieloC3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Celotex o Similiar</td>
																<td><input id="CieloC4" type="checkbox" name="CieloC4" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>


													</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>

																<td>Comunes a la Cal</td>
																<td><input id="RevoqC1" type="checkbox" name="RevoqC1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Pintados a la Cal</td>
																<td><input id="RevoqC2" type="checkbox" name="RevoqC2" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>

													</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>

																<td>Madera de Pinotea</td>
																<td><input id="PisosC1" type="checkbox" name="PisosC1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Mosaíco Calcário</td>
																<td><input id="PisosC2" type="checkbox" name="PisosC2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Cerámico Común</td>
																<td><input id="PisosC3" type="checkbox" name="PisosC3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Alfombra</td>
																<td><input id="PisosC4" type="checkbox" name="PisosC4" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Baldosa Colorada</td>
																<td><input id="PisosC5" type="checkbox" name="PisosC5" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Placas Vinílicas</td>
																<td><input id="PisosC6" type="checkbox" name="PisosC6" value="1" onClick="checkValue(this);"></td>

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

																<td>Placas Premoldeadas</td>
																<td><input id="FachaD1" type="checkbox" name="FachaD1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Sin Terminar</td>
																<td><input id="FachaD2" type="checkbox" name="FachaD2" value="1" onClick="checkValue(this);"></td>

															</tr>




														</table>

													</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>

																<td>Fibrocemento</td>
																<td><input id="ParedD1" type="checkbox" name="ParedD1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Instalacion Eléctrica Exterior</td>
																<td><input id="ParedD2" type="checkbox" name="ParedD2" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Placas Premoldeadas</td>
																<td><input id="ParedD3" type="checkbox" name="ParedD3" value="1" onClick="checkValue(this);"></td>



															</tr>

														</table>
													</td>
													<td>

													</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>

																<td>Chapa Rural</td>
																<td><input id="TechoD1" type="checkbox" name="TechoD1" value="1" onClick="checkValue(this);"></td>


															</tr>

														</table>

													</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>

																<td>Telgopor</td>
																<td><input id="CieloD1" type="checkbox" name="CieloD1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>No Tiene</td>
																<td><input id="CieloD2" type="checkbox" name="CieloD2" value="1" onClick="checkValue(this);"></td>

															</tr>

														</table>

													</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>

																<td>Blanqueado</td>
																<td><input id="RevoqD1" type="checkbox" name="RevoqD1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>No Tiene</td>
																<td><input id="RevoqD2" type="checkbox" name="RevoqD2" value="1" onClick="checkValue(this);"></td>

															</tr>

														</table>

													</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>
																<td>Ladrillo</td>
																<td><input id="PisosD1" type="checkbox" name="PisosD1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Cemento Alisado</td>
																<td><input id="PisosD2" type="checkbox" name="PisosD2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>No Tiene</td>
																<td><input id="PisosD3" type="checkbox" name="PisosD3" value="1" onClick="checkValue(this);"></td>
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


																<td><input type="radio" id="FachaEstado1"  name="FachaEstado" value="Bueno" onClick="radioValue(this);">B (6)</td>
																<td><input type="radio" id="FachaEstado2" name="FachaEstado" value="Regular" onClick="radioValue(this);">R (4)</td>
																<td><input type="radio" id="FachaEstado3" name="FachaEstado" value="Malo" onClick="radioValue(this);">M (2)</td>

															</tr>

														</table>
													</td>
													<td>
														<table>
															<tr>

																<td><input type="radio" id="ParedEstado1"  name="ParedEstado" value="Bueno" onClick="radioValue(this);">B (25)</td>
																<td><input type="radio" id="ParedEstado2" name="ParedEstado" value="Regular" onClick="radioValue(this);">R (16)</td>
																<td><input type="radio" id="ParedEstado3" name="ParedEstado" value="Malo" onClick="radioValue(this);">M (9)</td>

															</tr>

														</table>

													</td>
													<td>
														<table>
															<tr>
																<td><input type="radio" id="EscaEstado1"  name="EscaEstado" value="Bueno" onClick="radioValue(this);">B (3)</td>
																<td><input type="radio" id="EscaEstado2" name="EscaEstado" value="Regular" onClick="radioValue(this);">R (2)</td>
																<td><input type="radio" id="EscaEstado3" name="EscaEstado" value="Malo" onClick="radioValue(this);">M (1)</td>
															</tr>

														</table>

													</td>
													<td>
														<table>
															<tr>

																<td><input type="radio" id="TechoEstado1"  name="TechoEstado" value="Bueno" onClick="radioValue(this);">B (18)</td>
																<td><input type="radio" id="TechoEstado2" name="TechoEstado" value="Regular" onClick="radioValue(this);">R (14)</td>
																<td>	<input type="radio" id="TechoEstado3" name="TechoEstado" value="Malo" onClick="radioValue(this);">M (10)</td>

															</tr>

														</table>

													</td>
													<td>
														<table>
															<tr>

																<td><input type="radio" id="CieloEstado1"  name="CieloEstado" value="Bueno" onClick="radioValue(this);">B (7)</td>
																<td><input type="radio" id="CieloEstado2" name="CieloEstado" value="Regular" onClick="radioValue(this);">R (4)</td>
																<td>	<input type="radio" id="CieloEstado3" name="CieloEstado" value="Malo" onClick="radioValue(this);">M (2)</td>

															</tr>

														</table>

													</td>
													<td>
														<table>
															<tr>

																<td><input type="radio" id="RevoqEstado1"  name="RevoqEstado" value="Bueno" onClick="radioValue(this);">B (7)</td>
																<td><input type="radio" id="RevoqEstado2" name="RevoqEstado" value="Regular" onClick="radioValue(this);">R (4)</td>
																<td><input type="radio" id="RevoqEstado3" name="RevoqEstado" value="Malo" onClick="radioValue(this);">M (1)</td>															</tr>

														</table>
													</td>
														<td>
														<table>
															<tr>

																<td><input type="radio" id="PisosEstado1"  name="PisosEstado" value="Bueno" onClick="radioValue(this);">B (12)</td>
																<td><input type="radio" id="PisosEstado2" name="PisosEstado" value="Regular" onClick="radioValue(this);">R (8)</td>
																<td>	<input type="radio" id="PisosEstado3" name="PisosEstado" value="Malo" onClick="radioValue(this);">M (4)</td>

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

				<a href="" ><button onclick="self.close()" class="btn">Cancelar</button></a>
				<a href="formulario904rub2pto2.php"><button class="btn btn-success">Siguiente</button></a>

			</div> <!-- /widget-content -->

		</div> <!-- /main -->

		<script src="javascript/obj904.js"></script>
		<script src="javascript/valores904.js"></script>
		<script>
			valores["codCedula"] = <?php echo (isset($_GET["idCedula"]) ? $_GET["idCedula"] : "0"); ?>;
			valores["tipoCedula"] = <?php echo (isset($_GET["cedula"]) ? $_GET["cedula"] : "0"); ?>;
			valores["aniotabla"] = <?php echo (isset($_GET["aniotabla"]) ? $_GET["aniotabla"] : "0"); ?>;
			var tempID = <?php
				if(isset($_GET["idform"])) {
					include("sql/sqlconnection.php");

					if($dbStatus != "Exitosa")
						exit($dbStatus);

					$post = $_GET["idform"];
					$queryCP = "SELECT * FROM form904 WHERE codForm904 = '$post'";

					try {
						$statement = $conn->prepare($queryCP);
						$statement->execute();
						$results = $statement->fetchAll(PDO::FETCH_ASSOC);
						$json = json_encode($results[0]);
						echo $json;
					} catch(PDOException $e) {
						echo "0";
					}

					$conn = null;
				} else {
					echo "0";
				}
			?>;

			if(tempID != "0")
				obj = tempID;
		</script>
		<script src="javascript/session.js"></script>

	</body>

</html>
