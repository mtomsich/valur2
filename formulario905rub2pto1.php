<?php
	include("sesion.php");
		$pagina='formulario905rub2pto1PHP';
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
				<h3>Formulario 905</h3>
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
										<a href="formulario905rub2pto2.php"><button class="btn btn-success">Siguiente</button></a>
<br><br>
										<table class="table table-bordered responsive-table">
											<thead>
												<th>1- Tipo</th>
												<th>2- Fachada</th>
												<th>3- Paredes</th>
												<th>4- Esqueleto</th>
												<th>5- Armadura</th>
												<th>6- Techos</th>
												<th>7- Cielorrasos</th>
												<th>8- Revoques</th>

												<th></th>
											</thead>
											<tbody>
												<tr>
													<td>B</td>
													<td>

														<table class="table-condensed" width="100%">

															<tr>

																<td>Revestida de Granito o Marmol</td>
																<td><input id="FachaB1" type="checkbox" name="FachaB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Revoque Especial</td>
																<td><input id="FachaB2" type="checkbox" name="FachaB2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Imitación Piedra Moldurada</td>
																<td><input id="FachaB3" type="checkbox" name="FachaB3" value="1" onClick="checkValue(this);"></td>
															</tr>



														</table>

													</td>
													<td>
														<table class="table-condensed" width="100%">


															<tr>

																<td>Muros Dobles</td>
																<td><input id="ParedB1" type="checkbox" name="ParedB1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Ladrillo de Cal</td>
																<td><input id="ParedB2" type="checkbox" name="ParedB2" value="1" onClick="checkValue(this);"></td>
															</tr>
                                                            <tr>
																<td>Con Aislación</td>
																<td><input id="ParedB3" type="checkbox" name="ParedB3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Ladrillo de Vidrio</td>
																<td><input id="ParedB4" type="checkbox" name="ParedB4" value="1" onClick="checkValue(this);"></td>
															</tr>
                                                            <tr>
																<td>Ladrillo Hueco</td>
																<td><input id="ParedB5" type="checkbox" name="ParedB5" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>

													</td>
													<td>
														<table class="table-condensed" width="100%">

															<tr>

																<td>Hormigón Armado (Luz de 10m o Mas)</td>
																<td><input id="EsqueB1" type="checkbox" name="EsqueB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Hormigón Pretensado</td>
																<td><input id="EsqueB2" type="checkbox" name="EsqueB2" value="1" onClick="checkValue(this);"></td>
															</tr>
                                                            <tr>
																<td>Madera Laminada</td>
																<td><input id="EsqueB3" type="checkbox" name="EsqueB3" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>

													</td>
													<td>
														<table class="table-condensed" width="100%">

															<tr>

																<td>Pórtico</td>
																<td><input id="ArmaB1" type="checkbox" name="ArmaB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Tipo Shed</td>
																<td><input id="ArmaB2" type="checkbox" name="ArmaB2" value="1" onClick="checkValue(this);"></td>
															</tr>
                                                            <tr>
																<td>Estereo Estructura</td>
																<td><input id="ArmaB3" type="checkbox" name="ArmaB3" value="1" onClick="checkValue(this);"></td>
															</tr>
                                                            <tr>
																<td>Plegado de Hormigón</td>
																<td><input id="ArmaB4" type="checkbox" name="ArmaB4" value="1" onClick="checkValue(this);"></td>
															</tr>
														    <tr>
																<td>Paraboloide Hiperbólico</td>
																<td><input id="ArmaB5" type="checkbox" name="ArmaB5" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>

													</td>
													<td>
														<table class="table-condensed" width="100%">
															<tr>
																<td>Teja</td>
																<td><input id="TechoB1" type="checkbox" name="TechoB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Baldosa Colorada Sobre Losa</td>
																<td><input id="TechoB2" type="checkbox" name="TechoB2" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>
													</td>
													<td>
														<table class="table-condensed" width="100%">

															<tr>

																<td>Artesonado en Yeso</td>
																<td><input id="CieloB1" type="checkbox" name="CieloB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Garganta para Luz Difusa</td>
																<td><input id="CieloB2" type="checkbox" name="CieloB2" value="1" onClick="checkValue(this);"></td>
															</tr>



														</table>
													</td>
													<td>
														<table  class="table-condensed" width="100%">


															<tr>

																<td>Estucados de Yeso</td>
																<td><input id="RevoqB1" type="checkbox" name="RevoqB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Imitacion Piedra Moldurada</td>
																<td><input id="RevoqB2" type="checkbox" name="RevoqB2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Revoque Especiales</td>
																<td><input id="RevoqB3" type="checkbox" name="RevoqB3" value="1" onClick="checkValue(this);"></td>
															</tr>
                                                            <tr>
																<td>Pintados al Aceite</td>
																<td><input id="RevoqB4" type="checkbox" name="RevoqB4" value="1" onClick="checkValue(this);"></td>
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

																<td>Imitación Piedra Lisa</td>
																<td><input id="FachaC1" type="checkbox" name="FachaC1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Ladrillo con Junta Tomada</td>
																<td><input id="FachaC2" type="checkbox" name="FachaC2" value="1" onClick="checkValue(this);"></td>
															</tr>

															<tr>
																<td>Hormigón Visto</td>
																<td><input id="FachaC3" type="checkbox" name="FachaC3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Cerámico Esmaltado</td>
																<td><input id="FachaC4" type="checkbox" name="FachaC4" value="1" onClick="checkValue(this);"></td>
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
																<td>Instalacion Electrica Embutida</td>
																<td><input id="ParedC2" type="checkbox" name="ParedC2" value="1" onClick="checkValue(this);"></td>
															</tr>


														</table>
													</td>
													<td>
														<table  class="table-condensed" width="100%">


															<tr>

																<td>Hormigón Armado</td>
																<td><input id="EsqueC1" type="checkbox" name="EsqueC1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>De Hierro</td>
																<td><input id="EsqueC2" type="checkbox" name="EsqueC2" value="1" onClick="checkValue(this);"></td>
															</tr>




														</table>

													</td>
														<td>
														<table  class="table-condensed" width="100%">


															<tr>

																<td>Comunes de Hierro u Hormigón</td>
																<td><input id="ArmaC1" type="checkbox" name="ArmaC1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Prefabricadas</td>
																<td><input id="ArmaC2" type="checkbox" name="ArmaC2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Parabólicos Comunes de Hierro</td>
																<td><input id="ArmaC3" type="checkbox" name="EsqueC3" value="1" onClick="checkValue(this);"></td>
															</tr>


														</table>

													</td>

													<td>
														<table  class="table-condensed" width="100%">

															<tr>

																<td>Boveda Cascara</td>
																<td><input id="TechoC1" type="checkbox" name="TechoC1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Losa de Hormigón</td>
																<td><input id="TechoC2" type="checkbox" name="TechoC2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Autoportante Hierro o Fibrocemento mas de 10mts de Luz</td>
																<td><input id="TechoC3" type="checkbox" name="TechoC3" value="1" onClick="checkValue(this);"></td>
															</tr>



														</table>

													</td>
													<td>
														<table  class="table-condensed" width="100%">


															<tr>

																<td>Yeso Liso </td>
																<td><input id="CieloC1" type="checkbox" name="CieloC1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Pintados al Agua</td>
																<td><input id="CieloC2" type="checkbox" name="CieloC2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Metalicos en Placas</td>
																<td><input id="CieloC3" type="checkbox" name="CieloC3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Placas de Yeso</td>
																<td><input id="CieloC4" type="checkbox" name="CieloC4" value="1" onClick="checkValue(this);"></td>
															</tr>

														</table>


													</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>

																<td>Imitación Piedra Lisa</td>
																<td><input id="RevoqC1" type="checkbox" name="RevoqC1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Pintados aL Agua</td>
																<td><input id="RevoqC2" type="checkbox" name="RevoqC2" value="1" onClick="checkValue(this);"></td>
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

																<td>Revoque Común</td>
																<td><input id="FachaD1" type="checkbox" name="FachaD1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Salpicado</td>
																<td><input id="FachaD2" type="checkbox" name="FachaD2" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Placas Premoldeadas</td>
																<td><input id="FachaD3" type="checkbox" name="FachaD3" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Cerámico Común</td>
																<td><input id="FachaD4" type="checkbox" name="FachaD4" value="1" onClick="checkValue(this);"></td>

															</tr>



														</table>

													</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>

																<td>Mixta: Parte Ladrillo y Parte Zinc o Fibrocemento</td>
																<td><input id="ParedD1" type="checkbox" name="ParedD1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Instalación Eléctrica Exterior con Caño</td>
																<td><input id="ParedD2" type="checkbox" name="ParedD2" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Placas Premoldeadas</td>
																<td><input id="ParedD3" type="checkbox" name="ParedD3" value="1" onClick="checkValue(this);"></td>

															</tr>




														</table>
													</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>
																<td>Pilares de Mamposteria </td>
																<td><input id="EsqueD1" type="checkbox" name="EsqueD1" value="1" onClick="checkValue(this);"></td>

															</tr>
                                                         <tr>
																<td>De Hierro Redondo Común </td>
																<td><input id="EsqueD2" type="checkbox" name="EsqueD2" value="1" onClick="checkValue(this);"></td>

															</tr>
														</table>

													</td>
														<td>
														<table  class="table-condensed" width="100%">

															<tr>
																<td>Madera</td>
																<td><input id="ArmaD1" type="checkbox" name="ArmaD1" value="1" onClick="checkValue(this);"></td>

															</tr>

														</table>

													</td>

													<td>
														<table  class="table-condensed" width="100%">

															<tr>

																<td>Chapas de Zinc</td>
																<td><input id="TechoD1" type="checkbox" name="TechoD1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Chapa de Fibrocemento</td>
																<td><input id="TechoD2" type="checkbox" name="TechoD2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Chapa Plástica</td>
																<td><input id="TechoD3" type="checkbox" name="TechoD3" value="1" onClick="checkValue(this);"></td>

															</tr>
                                                            <tr>
																<td>Chapa de Alumínio</td>
																<td><input id="TechoD4" type="checkbox" name="TechoD4" value="1" onClick="checkValue(this);"></td>

															</tr>
														    <tr>
																<td>Autoportante (hasta 10m.)</td>
																<td><input id="TechoD5" type="checkbox" name="TechoD5" value="1" onClick="checkValue(this);"></td>

															</tr>
														    <tr>
																<td>Autoportante Chapa Curva</td>
																<td><input id="TechoD6" type="checkbox" name="TechoD6" value="1" onClick="checkValue(this);"></td>

															</tr>
														</table>

													</td>
													<td>
														<table  class="table-condensed" width="100%">

															<tr>

																<td>Revoque a la Cal</td>
																<td><input id="CieloD1" type="checkbox" name="CieloD1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Celotex o Similar</td>
																<td><input id="CieloD2" type="checkbox" name="CieloD2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Pintados a la Cal</td>
																<td><input id="CieloD3" type="checkbox" name="CieloD3" value="1" onClick="checkValue(this);"></td>
															</tr>
                                                            <tr>
																<td>Madera</td>
																<td><input id="CieloD4" type="checkbox" name="CieloD4" value="1" onClick="checkValue(this);"></td>
															</tr>
														    <tr>
																<td>Telgopor</td>
																<td><input id="CieloD5" type="checkbox" name="CieloD5" value="1" onClick="checkValue(this);"></td>
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
																<td>Pintados a la Cal</td>
																<td><input id="RevoqD2" type="checkbox" name="RevoqD2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Salpicado</td>
																<td><input id="RevoqD3" type="checkbox" name="RevoqD3" value="1" onClick="checkValue(this);"></td>
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

																<td>Zinc</td>
																<td><input id="FachaE1" type="checkbox" name="FachaE1" value="1" onClick="checkValue(this);"></td>

															</tr>
                                                            <tr>

																<td>Madera Sin Trabajar</td>
																<td><input id="FachaE2" type="checkbox" name="FachaE2" value="1" onClick="checkValue(this);"></td>

															</tr>
                                                            <tr>

																<td>Sin Terminar</td>
																<td><input id="FachaE3" type="checkbox" name="FachaE3" value="1" onClick="checkValue(this);"></td>

															</tr>

														</table>

													</td>
													<td>
														<table  class="table-condensed" width="100%">


															<tr>

																<td>Zinc, Fibrocemento, Alumínio o Madera</td>
																<td><input id="ParedE1" type="checkbox" name="ParedE1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>
																<td>Instalación Eléctrica Exterior Sin Caño</td>
																<td><input id="ParedE2" type="checkbox" name="ParedE2" value="1" onClick="checkValue(this);"></td>


															</tr>
															<tr>
																<td>No Tiene</td>
																<td><input id="ParedE3" type="checkbox" name="ParedE3" value="1" onClick="checkValue(this);"></td>

															</tr>

														</table>
													</td>
													<td>
	<table  class="table-condensed" width="100%">


															<tr>

																<td>Madera</td>
																<td><input id="EsqueE1" type="checkbox" name="EsqueE1" value="1" onClick="checkValue(this);"></td>

															</tr>
															<tr>

																<td>No Tiene</td>
																<td><input id="EsqueE2" type="checkbox" name="EsqueE2" value="1" onClick="checkValue(this);"></td>

															</tr>


														</table>



													</td>
														<td>
	<table  class="table-condensed" width="100%">


															<tr>

																<td>No Tiene</td>
																<td><input id="ArmaE1" type="checkbox" name="ArmaE1" value="1" onClick="checkValue(this);"></td>

															</tr>



														</table>

													</td>

													<td>
														<table  class="table-condensed" width="100%">

															<tr>

																<td>Chapa Rural</td>
																<td><input id="TechoE1" type="checkbox" name="TechoE1" value="1" onClick="checkValue(this);"></td>

															</tr>

														</table>

													</td>
													<td>
														<table  class="table-condensed" width="100%">


															<tr>

																<td>No Tiene</td>
																<td><input id="CieloE1" type="checkbox" name="CieloE1" value="1" onClick="checkValue(this);"></td>


															</tr>


														</table>



													</td>
													<td>
														<table  class="table-condensed" width="100%">


															<tr>

																<td>No Tiene</td>
																<td><input id="RevoqE1" type="checkbox" name="RevoqE1" value="1" onClick="checkValue(this);"></td>



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


																<td><input type="radio" id="FachaEstado1"  name="FachaEstado" value="Bueno" onClick="radioValue(this);">B (3)</td>
																<td><input type="radio" id="FachaEstado2" name="FachaEstado" value="Regular" onClick="radioValue(this);">R (2)</td>
																<td><input type="radio" id="FachaEstado3" name="FachaEstado" value="Malo" onClick="radioValue(this);">M (1)</td>

															</tr>

														</table>
													</td>
													<td>
														<table>
															<tr>

																<td><input type="radio" id="ParedEstado1"  name="ParedEstado" value="Bueno" onClick="radioValue(this);">B (22)</td>
																<td><input type="radio" id="ParedEstado2" name="ParedEstado" value="Regular" onClick="radioValue(this);">R (15)</td>
																<td><input type="radio" id="ParedEstado3" name="ParedEstado" value="Malo" onClick="radioValue(this);">M (10)</td>

															</tr>

														</table>

													</td>
													<td>
														<table>
															<tr>
																<td><input type="radio" id="EsqueEstado1"  name="EsqueEstado" value="Bueno" onClick="radioValue(this);">B (9)</td>
																<td><input type="radio" id="EsqueEstado2" name="EsqueEstado" value="Regular" onClick="radioValue(this);">R (4)</td>
																<td><input type="radio" id="EsqueEstado3" name="EsqueEstado" value="Malo" onClick="radioValue(this);">M (2)</td>
															</tr>

														</table>

													</td>
													<td>
														<table>
															<tr>

																<td><input type="radio" id="ArmaEstado1"  name="ArmaEstado" value="Bueno" onClick="radioValue(this);">B (22)</td>
																<td><input type="radio" id="ArmaEstado2" name="ArmaEstado" value="Regular" onClick="radioValue(this);">R (15)</td>
																<td>	<input type="radio" id="ArmaEstado3" name="ArmaEstado" value="Malo" onClick="radioValue(this);">M (7)</td>

															</tr>

														</table>

													</td>
													<td>
														<table>
															<tr>

																<td><input type="radio" id="TechoEstado1"  name="TechoEstado" value="Bueno" onClick="radioValue(this);">B (10)</td>
																<td><input type="radio" id="TechoEstado2" name="TechoEstado" value="Regular" onClick="radioValue(this);">R (6)</td>
																<td>	<input type="radio" id="TechoEstado3" name="TechoEstado" value="Malo" onClick="radioValue(this);">M (3)</td>

															</tr>

														</table>

													</td>
													<td>
														<table>
															<tr>

																<td><input type="radio" id="CieloEstado1"  name="CieloEstado" value="Bueno" onClick="radioValue(this);">B (2)</td>
																<td><input type="radio" id="CieloEstado2" name="CieloEstado" value="Regular" onClick="radioValue(this);">R (1)</td>
																<td><input type="radio" id="CieloEstado3" name="CieloEstado" value="Malo" onClick="radioValue(this);">M (0)</td>															</tr>

														</table>
													</td>
														<td>
														<table>
															<tr>

																<td><input type="radio" id="RevoqEstado1"  name="RevoqEstado" value="Bueno" onClick="radioValue(this);">B (5)</td>
																<td><input type="radio" id="RevoqEstado2" name="RevoqEstado" value="Regular" onClick="radioValue(this);">R (3)</td>
																<td>	<input type="radio" id="RevoqEstado3" name="RevoqEstado" value="Malo" onClick="radioValue(this);">M (1)</td>

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
				<a href="formulario905rub2pto2.php"><button class="btn btn-success">Siguiente</button></a>

			</div> <!-- /widget-content -->

		</div> <!-- /main -->


		<script src="javascript/obj905.js"></script>
		<script src="javascript/valores905.js"></script>
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
					$queryCP = "SELECT * FROM form905 WHERE codForm905 = '$post'";

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
