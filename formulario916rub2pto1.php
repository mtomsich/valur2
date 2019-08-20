<?php
	include("sesion.php");
		$pagina='formulario916rub2pto1PHP';
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
				<h3>Formulario 916</h3>
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
						<div class="accordion" id="accordion">
							<div class="accordion-group">
								<!-- Comienzo rubro 2 -->
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" >
										RUBRO 2: CARACTERISTICAS DEL EDIFICIO
									</a>
								</div>
								<div class="accordion-body">
									<div class="accordion-inner">
										<a href="" ><button onclick="self.close()" class="btn">Cancelar</button></a>
										<a href="formulario916rub2pto2.php"><button class="btn btn-success">Siguiente</button></a>

										<br><br>
										<table class="table table-bordered responsive-table">
											<thead>
												<th  class='col-sm-1'>1- Tipo</th>
												<th  class='col-sm-2'>2- Paredes</th>
												<th  class='col-sm-2'>3- Esqueleto</th>
												<th  class='col-sm-2'>6- Armadura</th>
												<th  class='col-sm-2'>5- Techos</th>
												<th  class='col-sm-2'>6- Revoques</th>
												<th  class='col-sm-1'></th>
											</thead>
											<tbody>
												<tr>
													<!-- Comienzo tipo A -->
													<td>A</td>
													<td>
														<!-- Pared tipo A -->
														<table class="table-condensed" width="100%">
															<tr>
																<td>Ladrillo de cal</td>
																<td><input id="ParedA1" type="checkbox" name="ParedA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Ladrillo hueco ceramico</td>
																<td><input id="ParedA2" type="checkbox" name="ParedA2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Ladrillo hueco cemento</td>
																<td><input id="ParedA3" type="checkbox" name="ParedA3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Placas de hormigon o similares</td>
																<td><input id="ParedA4" type="checkbox" name="ParedA4" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Esqueleto tipo A -->
														<table class="table-condensed" width="100%">
															<tr>
																<td>Hormigon armado</td>
																<td><input id="EsqueA1" type="checkbox" name="EsqueA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Hormigon pretensado</td>
																<td><input id="EsqueA2" type="checkbox" name="EsqueA2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Hormigon prefabricado</td>
																<td><input id="EsqueA3" type="checkbox" name="EsqueA3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Similares</td>
																<td><input id="EsqueA4" type="checkbox" name="EsqueA4" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Armadura tipo A -->
														<table class="table-condensed" width="100%">
															<tr>
																<td>Hormigon armado</td>
																<td><input id="ArmaA1" type="checkbox" name="ArmaA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Hormigon pretensado</td>
																<td><input id="ArmaA2" type="checkbox" name="ArmaA2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Hormigon prefabricado</td>
																<td><input id="ArmaA3" type="checkbox" name="ArmaA3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Similares</td>
																<td><input id="ArmaA4" type="checkbox" name="ArmaA4" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Techos tipo A -->
														<table class="table-condensed" width="100%">
															<tr>
																<td>Chapa galvanizada</td>
																<td><input id="TechoA1" type="checkbox" name="TechoA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Chapa de zinc</td>
																<td><input id="TechoA2" type="checkbox" name="TechoA2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Chapa lisa</td>
																<td><input id="TechoA3" type="checkbox" name="TechoA3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Similares</td>
																<td><input id="TechoA4" type="checkbox" name="TechoA4" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Revoques tipo A -->
														<table class="table-condensed" width="100%">
															<tr>
																<td>Reqvoque a la cal</td>
																<td><input id="RevoqA1" type="checkbox" name="RevoqA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Similares</td>
																<td><input id="RevoqA2" type="checkbox" name="RevoqA2" value="1" onClick="checkValue(this);"></td>
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
														<!-- Paredes tipo B -->
														<table class="table-condensed" width="100%">
															<tr>
																<td>Madrea de pino</td>
																<td><input id="ParedB1" type="checkbox" name="ParedB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Madera de eucalipto</td>
																<td><input id="ParedB2" type="checkbox" name="ParedB2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Madera de lapacho</td>
																<td><input id="ParedB3" type="checkbox" name="ParedB3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Madera de urunday</td>
																<td><input id="ParedB4" type="checkbox" name="ParedB4" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Madera de incienso</td>
																<td><input id="ParedB5" type="checkbox" name="ParedB5" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Madera de palmera</td>
																<td><input id="ParedB6" type="checkbox" name="ParedB6" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Similar</td>
																<td><input id="ParedB7" type="checkbox" name="ParedB7" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Esqueleto tipo B -->
														<table class="table-condensed" width="100%">
																<tr>
																	<td>Madera de lapacho</td>
																	<td><input id="ParedB4" type="checkbox" name="ParedB4" value="1" onClick="checkValue(this);"></td>
																</tr>
																<tr>
																	<td>Madera de urunday</td>
																	<td><input id="ParedB5" type="checkbox" name="ParedB5" value="1" onClick="checkValue(this);"></td>
																</tr>
																<tr>
																	<td>Madera de incienso</td>
																	<td><input id="ParedB6" type="checkbox" name="ParedB6" value="1" onClick="checkValue(this);"></td>
																</tr>
																<tr>
																	<td>Madera de palmera</td>
																	<td><input id="ParedB7" type="checkbox" name="ParedB7" value="1" onClick="checkValue(this);"></td>
																</tr>
																<tr>
																	<td>Similar</td>
																	<td><input id="ParedB8" type="checkbox" name="ParedB8" value="1" onClick="checkValue(this);"></td>
																</tr>
														</table>
													</td>
													<td>
														<!-- Armadura tipo B -->
														<table class="table-condensed" width="100%">
																<tr>
																	<td>Madera de lapacho</td>
																	<td><input id="ArmaB4" type="checkbox" name="ArmaB4" value="1" onClick="checkValue(this);"></td>
																</tr>
																<tr>
																	<td>Madera de urunday</td>
																	<td><input id="ArmaB5" type="checkbox" name="ArmaB5" value="1" onClick="checkValue(this);"></td>
																</tr>
																<tr>
																	<td>Madera de incienso</td>
																	<td><input id="ArmaB6" type="checkbox" name="ArmaB6" value="1" onClick="checkValue(this);"></td>
																</tr>
																<tr>
																	<td>Madera de palmera</td>
																	<td><input id="ArmaB7" type="checkbox" name="ArmaB7" value="1" onClick="checkValue(this);"></td>
																</tr>
																<tr>
																	<td>Similar</td>
																	<td><input id="ArmaB8" type="checkbox" name="ArmaB8" value="1" onClick="checkValue(this);"></td>
																</tr>
														</table>
													</td>
													<td>
														<!-- Techo tipo B -->
														<table  class="table-condensed" width="100%">
															<tr>
																<td>Chapa de aluminio</td>
																<td><input id="TechoB1" type="checkbox" name="TechoB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Chapa de fibrocemento</td>
																<td><input id="TechoB2" type="checkbox" name="TechoB2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Chapa plastica</td>
																<td><input id="TechoB3" type="checkbox" name="TechoB3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Chapa translucidas</td>
																<td><input id="TechoB3" type="checkbox" name="TechoB3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Similar</td>
																<td><input id="TechoB3" type="checkbox" name="TechoB3" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Revoques tipo B -->
														<table  class="table-condensed" width="100%">
															<tr>
																<td>Grueso sin azotado</td>
																<td><input id="RevoqB1" type="checkbox" name="RevoqB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Similar</td>
																<td><input id="RevoqB2" type="checkbox" name="RevoqB2" value="1" onClick="checkValue(this);"></td>
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
														<!-- Paredes tipo C -->
														<table  class="table-condensed" width="100%">
															<tr>
																<td>Alambre romboidal</td>
																<td><input id="ParedC1" type="checkbox" name="ParedC1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Alambre hexagonal</td>
																<td><input id="ParedC2" type="checkbox" name="ParedC2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>No tiene</td>
																<td><input id="ParedC3" type="checkbox" name="ParedC3" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Esqueleto tipo C -->
														<table  class="table-condensed" width="100%">
															<tr>
																<td>Madera de pino</td>
																<td><input id="EsqueC1" type="checkbox" name="EsqueC1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Madera de eucalipto</td>
																<td><input id="EsqueC2" type="checkbox" name="EsqueC2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Similar</td>
																<td><input id="EsqueC3" type="checkbox" name="EsqueC3" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Armadura tipo C -->
														<table  class="table-condensed" width="100%">
															<tr>
																<td>Madera de pino</td>
																<td><input id="ArmaC1" type="checkbox" name="ArmaC1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Madera de eucalipto</td>
																<td><input id="ArmaC2" type="checkbox" name="ArmaC2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Similar</td>
																<td><input id="ArmaC3" type="checkbox" name="ArmaC3" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Techos tipo C -->
														<table  class="table-condensed" width="100%">
															<tr>
																<td>Chapa de rural</td>
																<td><input id="TechoC1" type="checkbox" name="TechoC1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Carton alquitranado</td>
																<td><input id="TechoC2" type="checkbox" name="TechoC2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Similar</td>
																<td><input id="TechoC3" type="checkbox" name="TechoC3" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Revoque tipo C -->
														<table  class="table-condensed" width="100%">
															<tr>
																<td>No tiene</td>
																<td><input id="RevoqC1" type="checkbox" name="RevoqC1" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td><div id="capaTextoC">0</div></td>
												<!-- </tr> creo que esta de mas -->
												<!-- Fin rubro 2 -->
												<tr>
												 <!-- comienzo rubro 3 -->
													<td>
														Estado de conservacion del edificio
														<!-- <br>
														Cons -->
													</td>
													<td>
														<table>
															<!-- Pared estado -->
															<tr>
																<td><input type="radio" id="ParedEstado1"  name="ParedEstado" value="Bueno" onClick="radioValue(this);">B (12)</td>
																<td><input type="radio" id="ParedEstado2" name="ParedEstado" value="Regular" onClick="radioValue(this);">R (8)</td>
																<td><input type="radio" id="ParedEstado3" name="ParedEstado" value="Malo" onClick="radioValue(this);">M (4)</td>
															</tr>
														</table>
													</td>
													<td>
														<table>
															<!-- Esqueleto estado -->
															<tr>
																<td><input type="radio" id="EsqueEstado1"  name="EsqueEstado" value="Bueno" onClick="radioValue(this);">B (5)</td>
																<td><input type="radio" id="EsqueEstado2" name="EsqueEstado" value="Regular" onClick="radioValue(this);">R (4)</td>
																<td><input type="radio" id="EsqueEstado3" name="EsqueEstado" value="Malo" onClick="radioValue(this);">M (1)</td>
															</tr>
														</table>
													</td>
													<td>
														<table>
															<!-- Armadura estado -->
															<tr>
																<td><input type="radio" id="ArmaEstado1"  name="ArmaEstado" value="Bueno" onClick="radioValue(this);">B (10)</td>
																<td><input type="radio" id="ArmaEstado2" name="ArmaEstado" value="Regular" onClick="radioValue(this);">R (7)</td>
																<td><input type="radio" id="ArmaEstado3" name="ArmaEstado" value="Malo" onClick="radioValue(this);">M (3)</td>
															</tr>
														</table>
													</td>
													<td>
														<table>
															<!-- Techos estado -->
															<tr>
																<td><input type="radio" id="TechoEstado1"  name="TechoEstado" value="Bueno" onClick="radioValue(this);">B (33)</td>
																<td><input type="radio" id="TechoEstado2" name="TechoEstado" value="Regular" onClick="radioValue(this);">R (23)</td>
																<td><input type="radio" id="TechoEstado3" name="TechoEstado" value="Malo" onClick="radioValue(this);">M (9)</td>
															</tr>
														</table>
													</td>
													<td>
														<table>
															<!-- Revoques estado -->
															<tr>
																<td><input type="radio" id="RevoqEstado1" name="RevoqEstado" value="Bueno" onClick="radioValue(this);">B (5)</td>
																<td><input type="radio" id="RevoqEstado2" name="RevoqEstado" value="Regular" onClick="radioValue(this);">R (4)</td>
																<td><input type="radio" id="RevoqEstado3" name="RevoqEstado" value="Malo" onClick="radioValue(this);">M (1)</td>
															</tr>
														</table>
													</td>
													<td>
														<div class="controls" name="sumaEstCon" id="sumaEstCon">0
															<!--<input type="text" class="form-control" name="sumaEstCon" id="sumaEstCon" disabled>-->
														</div> <!-- /controls -->
													</td>
													<!-- Fin rubro 3 -->
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div> <!-- /accordion -->
					</div> <!-- /controls -->

				<a href="" ><button onclick="self.close()" class="btn">Cancelar</button></a>
				<a href="formulario916rub2pto2.php"><button class="btn btn-success">Siguiente</button></a>

			</div> <!-- /widget-content -->

		</div> <!-- /main -->


		<script src="javascript/obj916.js"></script>
		<script src="javascript/valores916.js"></script>
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
				$queryCP = "SELECT * FROM form916 WHERE codForm916 = '$post'";

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
