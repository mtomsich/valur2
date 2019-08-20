<?php
  include("sesion.php");
			$pagina='formulario903rub2pto1PHP';
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
				<h3>Formulario 903</h3>
			</div> <!-- /widget-header -->

			<div class="widget-content">

				<div class="control-group">

					<div class="controls">

							<div class="accordion-group "><!-- rub 2 -->

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
										<a href="formulario903rub2pto2.php"><button class="btn btn-success">Siguiente</button></a>
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
																<td>Revestimiento de Marmol</td>
																<td><input id="FachaA2" type="checkbox" name="FachaA2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Madera Tallada</td>
																<td><input id="FachaA3" type="checkbox" name="FachaA3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Ladrillo de Vidrio</td>
																<td><input id="FachaA4" type="checkbox" name="FachaA4" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Cristal Templado</td>
																<td><input id="FachaA5" type="checkbox" name="FachaA5" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>
													</td>
													<td>
														<table class="table-condensed" width="100%">

															<tr>
																<td>Muros Dobles</td>
																<td><input id="ParedA1" type="checkbox" name="ParedA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>De Piedra</td>
																<td><input id="ParedA2" type="checkbox" name="ParedA2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Placard a Medida</td>
																<td><input id="ParedA3" type="checkbox" name="ParedA3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Cristal Templado</td>
																<td><input id="ParedA4" type="checkbox" name="ParedA4" value="1" onClick="checkValue(this);"></td>
															</tr>

															<tr>
																<td>Ladrillo de Vidrio</td>
																<td><input id="ParedA5" type="checkbox" name="ParedA5" value="1" onClick="checkValue(this);"></td>
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
																<td>Baranda Artitica</td>
																<td><input id="EscaA3" type="checkbox" name="EscaA3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Revestido en Granito</td>
																<td><input id="EscaA4" type="checkbox" name="EscaA4" value="1" onClick="checkValue(this);"></td>
															</tr>


														</table>

													</td>
													<td>
														<table class="table-condensed" width="100%">


															<tr>

																<td>Pizarra</td>
																<td><input id="TechoA1" type="checkbox" name="TechoA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Teja Esmaltada</td>
																<td><input id="TechoA2" type="checkbox" name="TechoA2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Tejuela de Madera</td>
																<td><input id="TechoA3" type="checkbox" name="TechoA3" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>

													</td>
													<td>
														<table class="table-condensed" width="100%">


															<tr>

																<td>Artesanado de Yeso/Madera</td>
																<td><input id="CieloA1" type="checkbox" name="CieloA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Garganta Luz Difusa</td>
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
																<td>Marmol</td>
																<td><input id="PisosA2" type="checkbox" name="PisosA2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Parquet de Madera Fina</td>
																<td><input id="PisosA3" type="checkbox" name="PisosA3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Madera Entarugada</td>
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

																<td>Revestimiento Piedra tipo Mar del Plata</td>
																<td><input id="FachaB1" type="checkbox" name="FachaB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Instalacion Piedra Moldura</td>
																<td><input id="FachaB2" type="checkbox" name="FachaB2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Ladrillo Maquinado con junta Tomada</td>
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

																<td>Ladrillo Maquinado con Junta Tomada</td>
																<td><input id="ParedB1" type="checkbox" name="ParedB1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Placard Standard</td>
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
																<td>Ceramico Esmaltado</td>
																<td><input id="EscaB2" type="checkbox" name="EscaB2" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>

													</td>
													<td>
														<table class="table-condensed" width="100%">
															<tr>
																<td>Teja Curva o Plana</td>
																<td><input id="TechoB1" type="checkbox" name="TechoB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Baldosa Colorada sobre Losa</td>
																<td><input id="TechoB2" type="checkbox" name="TechoB2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Ceramico Esmaltado</td>
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
																<td>Metalico a Medida</td>
																<td><input id="CieloB3" type="checkbox" name="CieloB3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Madera Fina</td>
																<td><input id="CieloB4" type="checkbox" name="CieloB4" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>
													</td>
													<td>
														<table  class="table-condensed" width="100%">


															<tr>

																<td>Imitacion Piedra</td>
																<td><input id="RevoqB1" type="checkbox" name="RevoqB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Ladrillo con Junta Tomada</td>
																<td><input id="RevoqB2" type="checkbox" name="RevoqB2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Pintados al Aceite</td>
																<td><input id="RevoqB3" type="checkbox" name="RevoqB3" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>


													</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>

																<td>Mosaico Granito Medida Grande</td>
																<td><input id="PisosB1" type="checkbox" name="PisosB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Parquet Comun</td>
																<td><input id="PisosB2" type="checkbox" name="PisosB2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Ceramico Esmaltado</td>
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

																<td>Imitacion Piedra Lisa</td>
																<td><input id="FachaC1" type="checkbox" name="FachaC1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Ladrillo con Junta Tomada</td>
																<td><input id="FachaC2" type="checkbox" name="FachaC2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Ceramico Comun</td>
																<td><input id="FachaC3" type="checkbox" name="FachaC3" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Hormigo Visto</td>
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

																<td>Ladrillo de Cal</td>
																<td><input id="ParedC1" type="checkbox" name="ParedC1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Ladrillo Hueco</td>
																<td><input id="ParedC2" type="checkbox" name="ParedC2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Instalacion Electrica Embutida</td>
																<td><input id="ParedC3" type="checkbox" name="ParedC3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Tabique de Laminado Plastico</td>
																<td><input id="ParedC4" type="checkbox" name="ParedC4" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>
													</td>
													<td>
														<table  class="table-condensed" width="100%">


															<tr>

																<td>Madera Comun</td>
																<td><input id="EscaC1" type="checkbox" name="EscaC1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Hierro</td>
																<td><input id="EscaC2" type="checkbox" name="EscaC2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Alfombra</td>
																<td><input id="EscaC3" type="checkbox" name="EscaC3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Ceramico Comun</td>
																<td><input id="EscaC4" type="checkbox" name="EscaC4" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>

													</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>

																<td>Losa de Hormigon</td>
																<td><input id="TechoC1" type="checkbox" name="TechoC1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Canelon de Fibrocemento</td>
																<td><input id="TechoC2" type="checkbox" name="TechoC2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Canelon de Hierro Galvanizado</td>
																<td><input id="TechoC3" type="checkbox" name="TechoC3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Losa de Viguetas</td>
																<td><input id="TechoC4" type="checkbox" name="TechoC4" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Chapa Trapezoidal</td>
																<td><input id="TechoC5" type="checkbox" name="TechoC5" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>

													</td>
													<td>
														<table  class="table-condensed" width="100%">


															<tr>

																<td>Revoque a la cal</td>
																<td><input id="CieloC1" type="checkbox" name="CieloC1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Pintados a la cal</td>
																<td><input id="CieloC2" type="checkbox" name="CieloC2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Metalicos en placas</td>
																<td><input id="CieloC3" type="checkbox" name="CieloC3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Placas de Yeso/Sintet</td>
																<td><input id="CieloC4" type="checkbox" name="CieloC4" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>


													</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>

																<td>Pintados al Agua</td>
																<td><input id="RevoqC1" type="checkbox" name="RevoqC1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Pintados a la cal</td>
																<td><input id="RevoqC2" type="checkbox" name="RevoqC2" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>

													</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>

																<td>Mosaico Ganitico Medida Comun</td>
																<td><input id="PisosC1" type="checkbox" name="PisosC1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Madera de Pinotea</td>
																<td><input id="PisosC2" type="checkbox" name="PisosC2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Baldosa Colorada</td>
																<td><input id="PisosC3" type="checkbox" name="PisosC3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Mosaico Calcareo</td>
																<td><input id="PisosC4" type="checkbox" name="PisosC4" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Alfombra Sintetica</td>
																<td><input id="PisosC5" type="checkbox" name="PisosC5" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Alfombra Caucho</td>
																<td><input id="PisosC6" type="checkbox" name="PisosC6" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Ceramico Comun</td>
																<td><input id="PisosC7" type="checkbox" name="PisosC7" value="1" onClick="checkValue(this);"></td>
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

																<td>Revoque Comun</td>
																<td><input id="FachaD1" type="checkbox" name="FachaD1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Placas Premoldeadas</td>
																<td><input id="FachaD2" type="checkbox" name="FachaD2" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Madera Machimbrada</td>
																<td><input id="FachaD3" type="checkbox" name="FachaD3" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Zinc</td>
																<td><input id="FachaD4" type="checkbox" name="FachaD4" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Salpicado</td>
																<td><input id="FachaD5" type="checkbox" name="FachaD5" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Bolseado</td>
																<td><input id="FachaD6" type="checkbox" name="FachaD6" value="1" onClick="checkValue(this);"></td>

															</tr>

														</table>

													</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>

																<td>Ladrillo de Media Cal</td>
																<td><input id="ParedD1" type="checkbox" name="ParedD1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Blocks Cemento</td>
																<td><input id="ParedD2" type="checkbox" name="ParedD2" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Instalacion Electrica Exterior</td>
																<td><input id="ParedD3" type="checkbox" name="ParedD3" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Placas Premoldeadas</td>
																<td><input id="ParedD4" type="checkbox" name="ParedD4" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Tabique Madera</td>
																<td><input id="ParedD5" type="checkbox" name="ParedD5" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Madera Machimbrada</td>
																<td><input id="ParedD6" type="checkbox" name="ParedD6" value="1" onClick="checkValue(this);"></td>

															</tr>

														</table>
													</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>
																<td>Revestida con Cemento Alisado</td>
																<td><input id="EscaD1" type="checkbox" name="EscaD1" value="1" onClick="checkValue(this);"></td>

															</tr>

														</table>

													</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>

																<td>Chapa de Fibrocemento</td>
																<td><input id="TechoD1" type="checkbox" name="TechoD1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Chapa de Zinc</td>
																<td><input id="TechoD2" type="checkbox" name="TechoD2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Chapa Plastica/Aluminio</td>
																<td><input id="TechoD3" type="checkbox" name="TechoD3" value="1" onClick="checkValue(this);"></td>

															</tr>

														</table>

													</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>

																<td>Madera Machimbrada</td>
																<td><input id="CieloD1" type="checkbox" name="CieloD1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Fibra Prensada</td>
																<td><input id="CieloD2" type="checkbox" name="CieloD2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Telgopor</td>
																<td><input id="CieloD3" type="checkbox" name="CieloD3" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>

													</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>

																<td>Comunes a la cal</td>
																<td><input id="RevoqD1" type="checkbox" name="RevoqD1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Sapilcado</td>
																<td><input id="RevoqD2" type="checkbox" name="RevoqD2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Bolseado</td>
																<td><input id="RevoqD3" type="checkbox" name="RevoqD3" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>

													</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>
																<td>Mosaico de Vereda</td>
																<td><input id="PisosD1" type="checkbox" name="PisosD1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Lajas de Cemento</td>
																<td><input id="PisosD2" type="checkbox" name="PisosD2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Cemento Alisado</td>
																<td><input id="PisosD3" type="checkbox" name="PisosD3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Placas Vinilicas</td>
																<td><input id="PisosD4" type="checkbox" name="PisosD4" value="1" onClick="checkValue(this);"></td>
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

																<td>Sin terminar</td>
																<td><input id="FachaE1" type="checkbox" name="FachaE1" value="1" onClick="checkValue(this);"></td>

															</tr>

														</table>

													</td>
													<td>
														<table  class="table-condensed" width="100%">


															<tr>

																<td>Fibrocemento</td>
																<td><input id="ParedE1" type="checkbox" name="ParedE1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Zinc</td>
																<td><input id="ParedE2" type="checkbox" name="ParedE2" value="1" onClick="checkValue(this);"></td>


															</tr>
															<tr>
																<td>Madera sin Trabajar</td>
																<td><input id="ParedE3" type="checkbox" name="ParedE3" value="1" onClick="checkValue(this);"></td>

															</tr>

														</table>
													</td>
													<td>


													</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>

																<td>Sin Chapa</td>
																<td><input id="TechoE1" type="checkbox" name="TechoE1" value="1" onClick="checkValue(this);"></td>

															</tr>

														</table>

													</td>
													<td>
														<table  class="table-condensed" width="100%">


															<tr>

																<td>Celotex o similar</td>
																<td><input id="CieloE1" type="checkbox" name="CieloE1" value="1" onClick="checkValue(this);"></td>


															</tr>
															<tr>
																<td>No tiene</td>
																<td><input id="CieloE2" type="checkbox" name="CieloE2" value="1" onClick="checkValue(this);"></td>


															</tr>

														</table>



													</td>
													<td>
														<table  class="table-condensed" width="100%">


															<tr>

																<td>Blanqueado</td>
																<td><input id="RevoqE1" type="checkbox" name="RevoqE1" value="1" onClick="checkValue(this);"></td>



															</tr>
															<tr>
																<td>No tiene</td>
																<td><input id="RevoqE2" type="checkbox" name="RevoqE2" value="1" onClick="checkValue(this);"></td>

															</tr>

														</table>


													</td>
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
													<td><div id="capaTextoE">0</div></td>


												</tr>
													<tr>
													<td>

													Estado <br> Cons											</td>

													<td>
														<table>
															<tr>


																<td><input type="radio" id="FachaEstado1"  name="FachaEstado" value="Bueno" onClick="radioValue(this);" >B (2)</td>
																<td><input type="radio" id="FachaEstado2" name="FachaEstado" value="Regular" onClick="radioValue(this);">R (1)</td>
																<td><input type="radio" id="FachaEstado3" name="FachaEstado" value="Malo" onClick="radioValue(this);">M (0)</td>

															</tr>

														</table>
													</td>
													<td>
														<table>
															<tr>

																<td><input type="radio" id="ParedEstado1"  name="ParedEstado" value="Bueno" onClick="radioValue(this);" >B (22)</td>
																<td><input type="radio" id="ParedEstado2" name="ParedEstado" value="Regular" onClick="radioValue(this);">R (15)</td>
																<td><input type="radio" id="ParedEstado3" name="ParedEstado" value="Malo" onClick="radioValue(this);">M (8)</td>

															</tr>

														</table>

													</td>
													<td>
														<table>
															<tr>
																<td><input type="radio" id="EscaEstado1"  name="EscaEstado" value="Bueno" onClick="radioValue(this);" >B (2)</td>
																<td><input type="radio" id="EscaEstado2" name="EscaEstado" value="Regular" onClick="radioValue(this);">R (1)</td>
																<td><input type="radio" id="EscaEstado3" name="EscaEstado" value="Malo" onClick="radioValue(this);">M (0)</td>
															</tr>

														</table>

													</td>
													<td>
														<table>
															<tr>

																<td><input type="radio" id="TechoEstado1"  name="TechoEstado" value="Bueno" onClick="radioValue(this);" >B (18)</td>
																<td><input type="radio" id="TechoEstado2" name="TechoEstado" value="Regular" onClick="radioValue(this);">R (14)</td>
																<td>	<input type="radio" id="TechoEstado3" name="TechoEstado" value="Malo" onClick="radioValue(this);">M (10)</td>

															</tr>

														</table>

													</td>
													<td>
														<table>
															<tr>

																<td><input type="radio" id="CieloEstado1"  name="CieloEstado" value="Bueno" onClick="radioValue(this);" >B (3)</td>
																<td><input type="radio" id="CieloEstado2" name="CieloEstado" value="Regular" onClick="radioValue(this);">R (2)</td>
																<td>	<input type="radio" id="CieloEstado3" name="CieloEstado" value="Malo" onClick="radioValue(this);">M (1)</td>

															</tr>

														</table>

													</td>
													<td>
														<table>
															<tr>

																<td><input type="radio" id="RevoqEstado1"  name="RevoqEstado" value="Bueno" onClick="radioValue(this);" >B (9)</td>
																<td><input type="radio" id="RevoqEstado2" name="RevoqEstado" value="Regular" onClick="radioValue(this);">R (5)</td>
																<td><input type="radio" id="RevoqEstado3" name="RevoqEstado" value="Malo" onClick="radioValue(this);">M (1)</td>															</tr>

														</table>
													</td>
														<td>
														<table>
															<tr>

																<td><input type="radio" id="PisosEstado1"  name="PisosEstado" value="Bueno" onClick="radioValue(this);" >B (8)</td>
																<td><input type="radio" id="PisosEstado2" name="PisosEstado" value="Regular" onClick="radioValue(this);">R (6)</td>
																<td>	<input type="radio" id="PisosEstado3" name="PisosEstado" value="Malo" onClick="radioValue(this);">M (3)</td>

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
				<a href="formulario903rub2pto2.php"><button class="btn btn-success">Siguiente</button></a>

			</div> <!-- /widget-content -->

		</div> <!-- /main -->


		<script src="javascript/obj903.js"></script>
		<script src="javascript/valores903.js"></script>
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
					$queryCP = "SELECT * FROM form903 WHERE codForm3 = '$post'";

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
