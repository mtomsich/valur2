<?php
	include("sesion.php");
		$pagina='formulario9061rub2pto1PHP';
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
				<h3>Formulario 906</h3>
			</div> <!-- /widget-header -->

			<div class="widget-content">

				<div class="control-group">
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

					<div class="controls">

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
										<a href="formulario906rub2pto2.php"><button class="btn btn-success">Siguiente</button></a>
<br><br>

										<table class="table table-bordered responsive-table">
											<thead>
												<th>1- Tipo</th>
												<th>2- Fachada</th>
												<th>3- Paredes</th>
												<th>4- Escaleras</th>
												<th>5- Esqueleto</th>
												<th>6- Armadura</th>
												<th>7- Techos</th>
												<th>8- Cielorrasos</th>
												<th></th>
											</thead>
											<tbody>
												<tr>
													<!-- Comienzo tipo A -->
													<td>A</td>
													<td>
														<!-- Fachada tipo A -->
														<table class="table-condensed" width="100%">
															<tr>
																<td>Revestimiento de Granito o Marmol</td>
																<td><input id="FachaA1" type="checkbox" name="FachaA1" id="FachaA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Revestimiento piedra tipo M del plata</td>
																<td><input id="FachaA2" type="checkbox" name="FachaA2" id="FachaA2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Crital Templado</td>
																<td><input id="FachaA3" type="checkbox" name="FachaA3" id="FachaA3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Revestimiento metalico</td>
																<td><input id="FachaA4" type="checkbox" name="FachaA4" id="FachaA4" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Pared tipo A -->
														<table class="table-condensed" width="100%">
															<tr>
																<td>Muros dobles</td>
																<td><input id="ParedA1" type="checkbox" name="ParedA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Ladrillo de Vidrio</td>
																<td><input id="ParedA2" type="checkbox" name="ParedA2" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Escalera tipo A -->
														<table class="table-condensed"  width="100%">
															<tr>
																<td>Revestida con Marmol</td>
																<td><input id="EscaA1" type="checkbox" name="EscaA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Baranda artistica</td>
																<td><input id="EscaA2" type="checkbox" name="EscaA2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Revestido en Granito</td>
																<td><input id="EscaA3" type="checkbox" name="EscaA3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Madera Fina</td>
																<td><input id="EscaA4" type="checkbox" name="EscaA4" value="1" onClick="checkValue(this);"></td>
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
														</table>
													</td>
													<td>
														<!-- Armadura tipo A -->
														<table class="table-condensed" width="100%">
															<tr>
																<td>Hormigon armado</td>
																<td><input id="ArmaA1" type="checkbox" name="ArmaA1" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Techos tipo A -->
														<table class="table-condensed" width="100%">
															<tr>
																<td>Teja</td>
																<td><input id="TechoA1" type="checkbox" name="TechoA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Baldosa colorada sobre losa</td>
																<td><input id="TechoA2" type="checkbox" name="TechoA2" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Cielorrasos tipo A -->
														<table class="table-condensed" width="100%">
															<tr>
																<td>Artesonado de yeso</td>
																<td><input id="CieloA1" type="checkbox" name="CieloA1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Garganta para luz difusa</td>
																<td><input id="CieloA2" type="checkbox" name="CieloA2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Metalico a medida</td>
																<td><input id="CieloA3" type="checkbox" name="CieloA3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Madera fina</td>
																<td><input id="CieloA4" type="checkbox" name="CieloA4" value="1" onClick="checkValue(this);"></td>
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
														<!-- Fachada tipo B -->
														<table class="table-condensed" width="100%">
															<tr>
																<td>Ceramico Esmaltado</td>
																<td><input id="FachaB1" type="checkbox" name="FachaB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Imitacion Piedra</td>
																<td><input id="FachaB2" type="checkbox" name="FachaB2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Ladrillo con Junta Tomada</td>
																<td><input id="FachaB3" type="checkbox" name="FachaB3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Ladrillo de vidrio</td>
																<td><input id="FachaB4" type="checkbox" name="FachaB4" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Hormigon visto</td>
																<td><input id="FachaB5" type="checkbox" name="FachaB5" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Paredes tipo B -->
														<table class="table-condensed" width="100%">
															<tr>
																<td>Ladrillo de Cal</td>
																<td><input id="ParedB1" type="checkbox" name="ParedB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Ladrillo hueco</td>
																<td><input id="ParedB2" type="checkbox" name="ParedB2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Instalacion Electrica Embutida</td>
																<td><input id="ParedB3" type="checkbox" name="ParedB3" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Escaleras tipo B -->
														<table class="table-condensed" width="100%">
															<tr>
																<td>Revestida con Material Reconstituido</td>
																<td><input id="EscaB1" type="checkbox" name="EscaB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Baranda comun</td>
																<td><input id="EscaB2" type="checkbox" name="EscaB2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Hotmigon armado</td>
																<td><input id="EscaB3" type="checkbox" name="EscaB3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Cerámico</td>
																<td><input id="EscaB4" type="checkbox" name="EscaB4" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Madera comun</td>
																<td><input id="EscaB5" type="checkbox" name="EscaB5" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Metalica</td>
																<td><input id="EscaB6" type="checkbox" name="EscaB6" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Alfombra</td>
																<td><input id="EscaB7" type="checkbox" name="EscaB7" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Esqueleto tipo B -->
														<table class="table-condensed" width="100%">
															<tr>
																<td>Hierro</td>
																<td><input id="EsqueB1" type="checkbox" name="EsqueB1" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Armadura tipo B -->
														<table class="table-condensed" width="100%">
															<tr>
																<td>Hierro</td>
																<td><input id="ArmaB1" type="checkbox" name="ArmaB1" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Techo tipo B -->
														<table  class="table-condensed" width="100%">
															<tr>
																<td>Losa de Hormigon</td>
																<td><input id="TechoB1" type="checkbox" name="TechoB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Losa de viguetas</td>
																<td><input id="TechoB2" type="checkbox" name="TechoB2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Canalon autoportante</td>
																<td><input id="TechoB3" type="checkbox" name="TechoB3" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Cielorrasos tipo B -->
														<table  class="table-condensed" width="100%">
															<tr>
																<td>Yeso liso</td>
																<td><input id="CieloB1" type="checkbox" name="CieloB1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Pintados al agua</td>
																<td><input id="CieloB2" type="checkbox" name="CieloB2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Placas de acustica</td>
																<td><input id="CieloB3" type="checkbox" name="CieloB3" value="1" onClick="checkValue(this);"></td>
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
														<!-- Fachada tipo C -->
														<table  class="table-condensed" width="100%">
															<tr>
																<td>Revoque Común</td>
																<td><input id="FachaC1" type="checkbox" name="FachaC1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Ceramico Común</td>
																<td><input id="FachaC2" type="checkbox" name="FachaC2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Venecita tomada</td>
																<td><input id="FachaC3" type="checkbox" name="FachaC3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Salpicado</td>
																<td><input id="FachaC4" type="checkbox" name="FachaC4" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Paredes tipo C -->
														<table  class="table-condensed" width="100%">
															<tr>
																<td>Blocks Cemento</td>
																<td><input id="ParedC1" type="checkbox" name="ParedC1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Instalacion electrica exterior</td>
																<td><input id="ParedC2" type="checkbox" name="ParedC2" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Escaleras tipo C -->
														<table  class="table-condensed" width="100%">
															<tr>
																<td>Revestida Cemento Alisado</td>
																<td><input id="EscaC1" type="checkbox" name="EscaC1" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Esqueleto tipo C -->
														<table  class="table-condensed" width="100%">
															<tr>
																<td>Madera</td>
																<td><input id="EsqueC1" type="checkbox" name="EsqueC1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>No tiene</td>
																<td><input id="EsqueC2" type="checkbox" name="EsqueC2" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Armadura tipo C -->
														<table  class="table-condensed" width="100%">
															<tr>
																<td>Madera</td>
																<td><input id="ArmaC1" type="checkbox" name="ArmaC1" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Techos tipo C -->
														<table  class="table-condensed" width="100%">
															<tr>
																<td>Chapa de 'zinc'</td>
																<td><input id="TechoC1" type="checkbox" name="TechoC1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Chapa de fibrocemento</td>
																<td><input id="TechoC2" type="checkbox" name="TechoC2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Chapa plastica</td>
																<td><input id="TechoC3" type="checkbox" name="TechoC3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Chapa aluminio</td>
																<td><input id="TechoC4" type="checkbox" name="TechoC4" value="1" onClick="checkValue(this);"></td>
															</tr>
														</table>
													</td>
													<td>
														<!-- Cielorrasos tipo C -->
														<table  class="table-condensed" width="100%">
															<tr>
																<td>Madera</td>
																<td><input id="CieloC1" type="checkbox" name="CieloC1" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Chapa estampada</td>
																<td><input id="CieloC2" type="checkbox" name="CieloC2" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Comunes a la cal</td>
																<td><input id="CieloC3" type="checkbox" name="CieloC3" value="1" onClick="checkValue(this);"></td>
															</tr>
															<tr>
																<td>Pintados a la cal</td>
																<td><input id="CieloC4" type="checkbox" name="CieloC4" value="1" onClick="checkValue(this);"></td>
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
															<!-- Fachada estado -->
															<tr>
																<td><input type="radio" id="FachaEstado1"  checked name="FachaEstado" value="Bueno" onClick="radioValue(this);">B (2)</td>
																<td><input type="radio" id="FachaEstado2" name="FachaEstado" value="Regular" onClick="radioValue(this);">R (1)</td>
																<td><input type="radio" id="FachaEstado3" name="FachaEstado" value="Malo" onClick="radioValue(this);">M (0)</td>
															</tr>
														</table>
													</td>
													<td>
														<table>
															<!-- Pared estado -->
															<tr>
																<td><input type="radio" id="ParedEstado1"  checked name="ParedEstado" value="Bueno" onClick="radioValue(this);">B (27)</td>
																<td><input type="radio" id="ParedEstado2" name="ParedEstado" value="Regular" onClick="radioValue(this);">R (17)</td>
																<td><input type="radio" id="ParedEstado3" name="ParedEstado" value="Malo" onClick="radioValue(this);">M (10)</td>
															</tr>
														</table>
													</td>
													<td>
														<table>
															<!-- Escaleras estado -->
															<tr>
																<td><input type="radio" id="EscaEstado1" checked  name="EscaEstado" value="Bueno" onClick="radioValue(this);">B (2)</td>
																<td><input type="radio" id="EscaEstado2" name="EscaEstado" value="Regular" onClick="radioValue(this);">R (1)</td>
																<td><input type="radio" id="EscaEstado3" name="EscaEstado" value="Malo" onClick="radioValue(this);">M (0)</td>
															</tr>
														</table>
													</td>
													<td>
														<table>
															<!-- Esqueleto estado -->
															<tr>
																<td><input type="radio" id="EsqueEstado1" checked  name="EsqueEstado" value="Bueno" onClick="radioValue(this);">B (10)</td>
																<td><input type="radio" id="EsqueEstado2" name="EsqueEstado" value="Regular" onClick="radioValue(this);">R (4)</td>
																<td><input type="radio" id="EsqueEstado3" name="EsqueEstado" value="Malo" onClick="radioValue(this);">M (2)</td>
															</tr>
														</table>
													</td>
													<td>
														<table>
															<!-- Armadura estado -->
															<tr>
																<td><input type="radio" id="ArmaEstado1"  checked name="ArmaEstado" value="Bueno" onClick="radioValue(this);">B (15)</td>
																<td><input type="radio" id="ArmaEstado2" name="ArmaEstado" value="Regular" onClick="radioValue(this);">R (11)</td>
																<td><input type="radio" id="ArmaEstado3" name="ArmaEstado" value="Malo" onClick="radioValue(this);">M (7)</td>
															</tr>
														</table>
													</td>
													<td>
														<table>
															<!-- Techos estado -->
															<tr>
																<td><input type="radio" id="TechoEstado1" checked  name="TechoEstado" value="Bueno" onClick="radioValue(this);">B (7)</td>
																<td><input type="radio" id="TechoEstado2" name="TechoEstado" value="Regular" onClick="radioValue(this);">R (4)</td>
																<td><input type="radio" id="TechoEstado3" name="TechoEstado" value="Malo" onClick="radioValue(this);">M (1)</td>
															</tr>
														</table>
													</td>
													<td>
														<table>
															<!-- Cielorassos estado -->
															<tr>
																<td><input type="radio" id="CieloEstado1" checked  name="CieloEstado" value="Bueno" onClick="radioValue(this);">B (6)</td>
																<td><input type="radio" id="CieloEstado2" name="CieloEstado" value="Regular" onClick="radioValue(this);">R (4)</td>
																<td><input type="radio" id="CieloEstado3" name="CieloEstado" value="Malo" onClick="radioValue(this);">M (2)</td>
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

				</div> <!-- /control-group -->

				<a href="" ><button onclick="self.close()" class="btn">Cancelar</button></a>
				<a href="formulario906rub2pto2.php"><button class="btn btn-success">Siguiente</button></a>

			</div> <!-- /widget-content -->

		</div> <!-- /main -->


		<script src="javascript/obj906.js"></script>
		<script src="javascript/valores906.js"></script>
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
					$queryCP = "SELECT * FROM form906 WHERE codForm906 = '$post'";

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
