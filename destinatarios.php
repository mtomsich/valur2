<?php
				include("sesion.php");
			$pagina='destinatariosPHP';
			include("encabezado.php");
	 		include("seguridad.php");
			include("sql/insert.php");
			include("sql/consultas.php");
		?>
		<!DOCTYPE html>
		<html lang="es">
				<body>
		<div class="main">

			<div class="main-inner">

				<div class="container">

					<div class="row">

						<div class="span12">

							<div class="widget ">

								<div class="widget-header">
									<i class="icon-group"></i>
									<h3>Formulario de Destinatario</h3>
								</div> <!-- /widget-header -->

								<div class="widget-content">

									<form method="post" id="edit-profile" class="form-horizontal">

											<div class="accordion" id="accordion2">
														<fieldset>
												<div class="accordion-group">
													<div class="accordion-heading">
														<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
															Datos del Destinatario
														</a>
													</div>
													<div id="collapseOne" class="accordion-body collapse in">
														<div class="accordion-inner">
															<style> .control-group {display: inline-block;} </style>
															<div class="control-group">
																<label class="control-label" for="cliente" required>Cliente:<b style="color:#FF0000";>*</b></label>
																<div class=" controls ">
																	<select id="cliente" class="form-control selectpicker" data-size="5" data-live-search="true" title="Seleccione nombre" name="clienteSeleccionado" required>
																		<option value="">Seleccione Cliente</option>
																		<?php
																			while ($fila=mysqli_fetch_row($consultaClientes)) {
																				echo "<option value='".$fila['0']."'>".$fila['2']."</option>";
																			}
																		?>
																	</select>
																</div>
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="cliente" required>Firmante:<b style="color:#FF0000";>*</b></label>
																<div class=" controls ">
																	<select id="firmante" class="form-control selectpicker" data-size="5" data-live-search="true" title="Seleccione nombre" name="firmanteSeleccionado" required>
																		<option value="">Seleccione Firmante</option>
																		<?php
																			while ($fila=mysqli_fetch_row($consultaFirmantes)) {
																				echo "<option value='".$fila['0']."'>".$fila['1']."</option>";
																			}
																		?>
																	</select>
																</div>
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="firstname">Apellido y Nombre<b style="color:#FF0000";>*</b></label>
																<div class="controls">
																	<input type="text" class="form-control span8" name="nombreApellido" id="firstname" value="" required>
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="lastname">Tipo DNI</label>
																<div class="controls">
																	<select class="form-control" name="tipoDni" required>
																		<option value="">Seleccionar...</option>
																		<option>Dni</option>
																		<option>LE</option>
																		<option>LC</option>
																		<option>CI</option>

																	</select>
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="lastname" required>DNI<b style="color:#FF0000";>*</b></label>
																<div class="controls">
																	<input type="text" class="form-control span2" name="dni" id="lastname" value="">
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="lastname">Teléfono</label>
																<div class="controls">
																	<input type="text" class="form-control span4" name="telefono" id="lastname" value="">
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="lastname">Caracter</label>
																<div class="controls">
																	<input type="text" class="form-control span2" name="caracter" id="lastname" value="">
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="firstname">Calle</label>
																<div class="controls">
																	<input type="text" class="form-control text inline span6" name="calle" id="firstname" value="">
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="firstname">Número</label>
																<div class="controls">
																	<input type="text" class="form-control text inline span2" name="nroCalle" id="firstname" value="">
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="firstname">Cuerpo</label>
																<div class="controls">
																	<input type="text" class="form-control span2" name="cuerpo" id="firstname" value="">
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="firstname">Departamento</label>
																<div class="controls">
																	<input type="text" class="form-control span2" name="dpto" id="firstname" value="">
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

														<div class="control-group">
																<label class="control-label" for="firstname">Piso</label>
																<div class="controls">
																	<input type="text" class="form-control span2" name="piso" id="firstname" value="">
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="localidad">Localidad <b style="color:#FF0000";>*</b></label>
																<div class="controls">

																	<select id="localidad" data-size="4" data-hide-disabled="true" data-dropup-auto="false" class="col-lg-12 text-left selectpicker dropup" data-live-search="true" title="Seleccione Localidad" name="localSeleccionada" onchange="selectCP(this);" required>
																		<option value="">Seleccione Localidad</option>
																		<?php
																			while ($fila=mysqli_fetch_row($consultaLocalidades)) {
																				echo "<option value='".$fila['0']."'>".$fila['2']."</option>";
																			}
																		?>
																	</select>
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="firstname">Provincia</label>
																<div class="controls">

																	<select id="provincia" class="col-lg-12 text-left selectpicker" data-live-search="true" title="Seleccione provincia" name="provinciaSeleccionada">


																		<?php
																			$i = 0;
																			while ($fila=mysqli_fetch_row($consultaProvincia)) {
																				if($i === 0) {
																					echo "<option selected value='".$fila['0']."'>".$fila['1']."</option>";
																				}
																				else {
																					echo "<option value='".$fila['0']."'>".$fila['1']."</option>";
																				}

																				$i++;
																			}
																				?>
																	</select>
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="firstname">Código Postal</label>
																<div class="controls">
																	<input type="text" class="form-control span2 " name="cp" id="codigoPostal" disabled>
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="firstname">Pais</label>
																<div class="controls">
																	<input type="text" class="form-control span3" name="pais" id="firstname" value="Argentina" >
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="form-actions">
											<button class="btn btn-warning" name="guardar">Guardar</button>
													<input type="reset" class="btn " name="limpiar" value="Limpiar" />

											</div>



														</div>
													</div>
												</div>





										</fieldset>
											</div>


											<?php
												if (isset($_POST['guardar'])){

													$sqldes= insertDestinatarioNuevo($_POST['nombreApellido'],$_POST['tipoDni'],$_POST['dni'],
													$_POST['telefono'],$_POST['caracter'],$_POST['calle'],$_POST['nroCalle'],$_POST['cuerpo'],$_POST['dpto'],$_POST['piso'],
													$_POST['localSeleccionada'] ,$_POST['clienteSeleccionado']);

													mysqli_query($conexion,$sqldes)
													or die("Problemas en el alta ".mysqli_error($conexion));

														echo "<script language='javascript'>";
														echo "alert('El destinatario fue creado');";
														echo "window.location='destinatarios.php';";
														echo "</script>";

												}

												?>

										</form>
										<div class="accordion-group">
												<div class="accordion-heading">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
												Busqueda del Destinatario
												</a>
												</div>
												<div id="collapseOne" class="accordion-body collapse in">
												<div class="accordion-inner">
												<form method="post">

												<div class="col-lg-12">
												<div class="form-group">
												<script src="js/datatables.js"></script>
												<script src="js/dataTables.bootstrap.js"></script>
												<?php
												echo "<table  class='table table-bordered table-hover table-striped display AllDataTables'>";
												echo "<thead>";
												echo "<tr>";
												echo "<th class='col-sm-5'>Nombre</th>";
												echo "<th class='col-sm-2'>DNI</th>";
												echo "<th class='col-sm-1'>Telefono</th>";
												echo "<th class='col-sm-1'>Caracter</th>";
												echo "<th class='col-sm-2'>Acciones</th>";
												echo "</tr>";
												echo "</thead>";


												echo "<tbody class='buscar'>";

												while($obra = mysqli_fetch_array($consultaDestinatarios)){
												$id=$obra['idDestinatario'];
												echo"<tr align='center'>";
												echo"<td>" .$obra['dnombreApellido']."</td>";
												echo"<td>" .$obra['dni']."</td>";
												echo"<td>" .$obra['telefono']."</td>";
												echo"<td>" .$obra['caracter']."</td>";
												echo"<td>
												<a href='destinatariosModificar.php?iddestinatario=$id'>  <i class='icon-large btn btn-info icon-pencil'></i>  </a>
												<a onClick='redirect(this);' id='$id'> <i class='icon-large icon-trash btn btn-danger '></i>  </a>
												";

												echo "</tr>";
												}


												echo "</tbody>";


												echo "</table>";



												?>


												</div>


												</div>


												</form>

												</div>

												</div>

												</div>



									</div> <!-- /widget-content -->

								</div> <!-- /widget -->



							</div> <!-- /span8 -->




						</div> <!-- /row -->

					</div> <!-- /container -->

				</div> <!-- /main-inner -->

			</div> <!-- /main -->






			<?php
				include("pie.php");
			?>
			<script src="javascript/cuit.js"></script>
			<script src="javascript/codigoPostal.js"></script>
			<script>
			function redirect(element) {
			if (confirm('Esta seguro que quiere eliminar el firmante?'))
				window.location.href = "sql/destinatariosBorrar.php?iddestinatario=" + element.id;
			}
			</script>

		</body>

	</html>
