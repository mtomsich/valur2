<?php
		include("sesion.php");
			$pagina='localPartPHP';
			include ("encabezado.php");
				include("seguridad.php");
			include("sql/insert.php");
			include("sql/consultas.php");

		?>
		<!DOCTYPE html>
		<html lang="es">
			<head>
			</head>
			<body>

		<script src="js/datatables.js"></script>
		<script src="js/dataTables.bootstrap.js"></script>
		<div class="main">
			<div class="main-inner">
				<div class="container">
					<div class="row">
						<div class="span12">
							<div class="widget ">
								<div class="widget-header">
									<i class="icon-group"></i>
									<h3>Formulario Localidades, Partidos y Provincias</h3>
								</div> <!-- /widget-header -->

								<div class="widget-content">

									<form method="post" id="edit-profile" class="form-horizontal">

										<div class="accordion" id="accordion2">

											<fieldset>

												<div class="accordion-group">
													<div class="accordion-heading">
														<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
															Datos de Localidades, Partidos y Provincias
														</a>
													</div>

													<div id="collapseOne" class="accordion-body collapse in">
														<div class="accordion-inner">

															<style> .control-group {display: inline-block;} </style>

															<div class="control-group">
																<label class="control-label" for="provincia">Provincia:</label>
																<div class=" controls ">
																	<select class="form-control" name="provinciaSelect">
																		<option value="1" selected>Buenos Aires</option>
																		<?php
																			while ($fila=mysqli_fetch_row($consultaProvincia)) {
																				echo "<option value='".$fila['0']."'>".$fila['1']."</option>";
																			}
																		?>
																	</select>
																</div>
															</div>
															</br>
															<div class="control-group">
																<label class="control-label" for="firstname">Partido</label>
																<div class="controls">
																	<select class="form-control" name="partidoSelect">
																		<option value="" selected>Seleccione Partido</option>
																		<?php
																			while ($fila=mysqli_fetch_row($consultaPartidos)) {
																				echo "<option value='".$fila['0']."'>".$fila['2']."</option>";
																			}
																		?>
																	</select>
																</div>
															</div>
															<div class="control-group">
																<label class="control-label" for="firstname">Nuevo Partido</label>
																<div class="controls">
																	<input type="text" class="form-control span2" name="partido" id="partido" value="" >
																</div> <!-- /controls -->
															</div> <!-- /control-group -->
															<div class="control-group">
																<label class="control-label" for="firstname">Codigo Partido</label>
																<div class="controls">
																	<input type="text" class="form-control span2" name="codPartido" id="codPartido" value="" >
																</div> <!-- /controls -->
															</div> <!-- /control-group -->
															</br>
															<div class="control-group">
																<label class="control-label" for="firstname">Localidad</label>
																<div class="controls">
																	<select class="form-control" onchange="ShowSelected();" name="localidadSelect">
																		<option value="" selected>Seleccione Localidad</option>
																		<?php
																			while ($fila=mysqli_fetch_row($consultaLocalidades)) {
																				echo "<option value='".$fila['2']."'>".$fila['2']."</option>";
																			}
																		?>
																	</select>
																</div>
															</div>
															<div class="control-group">
																<label class="control-label" for="firstname">Nueva Localidad</label>
																<div class="controls">
																	<input type="text" class="form-control span2" name="localidad" id="localidad" value="" >
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="firstname">Código Postal</label>
																<div class="controls">
																	<input type="text" class="form-control span2" name="codPostal" id="codPostal" value="" >
																</div> <!-- /controls -->
															</div> <!-- /control-group -->
														</div>
													</div>
												</div> <!-- /control-group -->
												<br />
												<div class="form-actions">
													<button class="btn btn-warning" name="guardar">Guardar</button>
													<button class="btn">Cancelar</button>
												</div> <!-- /form-actions -->
											</fieldset>
											<?php
											if (isset($_POST['guardar'])){
												//traigo los ultimos id de provincias y partidos
												$resultob = mysqli_query($conexion,"SELECT MAX(idPartido) AS id FROM partidos");
													$vecob = mysqli_fetch_array($resultob);
													if (!$resultob){
														die("Error: Datos no encontrados..");
													}

													$idPartido=$vecob['id']+1;

													//Si se ingresan nueva localidad y nuevo partido
													if(!empty($_POST['localidad']) && !empty($_POST['partido'])){

														$sqlPar= insertNuevoPartido($_POST['codPartido'], $_POST['partido']);
														mysqli_query($conexion,$sqlPar)
														or die("Problemas en el alta ".mysqli_error($conexion));

														$sqlLoc= insertNuevaLocalidad($idPartido, $_POST['localidad'], $_POST['codPostal'], $_POST['provinciaSelect']);
														mysqli_query($conexion,$sqlLoc)
														or die("Problemas en el alta ".mysqli_error($conexion));

														//si se elije localidad desde el select y se ingresa un nuevo partido
														}	elseif (empty($_POST['localidad']) && !empty($_POST['partido'])){

														$sqlPar= insertNuevoPartido($_POST['codPartido'], $_POST['partido']);
														mysqli_query($conexion,$sqlPar)
														or die("Problemas en el alta ".mysqli_error($conexion));

														$sqlLoc= insertNuevaLocalidad($idPartido, $_POST['localidadSelect'], $_POST['codPostal'], $_POST['provinciaSelect']);
														mysqli_query($conexion,$sqlLoc)
														or die("Problemas en el alta ".mysqli_error($conexion));

														//si se ingresa nueva localidad y se elije partido desde el select
														} elseif(!empty($_POST['localidad']) && empty($_POST['partido'])) {

														$sqlLoc= insertNuevaLocalidad($_POST['partidoSelect'], $_POST['localidad'], $_POST['codPostal'], $_POST['provinciaSelect']);
														mysqli_query($conexion,$sqlLoc)
														or die("Problemas en el alta ".mysqli_error($conexion));

														//si se elijen partido y localidad desde el select
														} elseif (empty($_POST['localidad']) && empty($_POST['partido'])) {

														$sqlLoc= insertNuevaLocalidad($_POST['partidoSelect'], $_POST['localidadSelect'], $_POST['codPostal'], $_POST['provinciaSelect']);
														mysqli_query($conexion,$sqlLoc)
														or die("Problemas en el alta ".mysqli_error($conexion));
													}

													echo "<script language='javascript'>";
													echo "alert('La localidad fue creada');";
													//echo "window.location='firmantesClientes.php?codCliente=$FidCliente';";
													echo "</script>";
												}
											?>
										</div>
									</form>

									<div class="accordion-group">
										<div class="accordion-heading">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
												Busqueda de Localidades y Partidos
											</a>
										</div>
										<div id="collapseTwo" class="accordion-body collapse in">
											<div class="accordion-inner">
												<form method="post">
													<div class="col-lg-12">
														<br>
														<div class="col-lg-12">
															<div class="form-group">
																<?php
																	$resultobra=mysqli_query($conexion,"SELECT * FROM localidades order by localidad asc");

																	echo "<table class='table table-bordered table-hover table-striped display AllDataTables' >";
																	echo "<thead>";
																	echo "<tr>";
																	echo "<th class='col-sm-5'>Localidad</th>";
																	echo "<th class='col-sm-4'>Codigo Postal</th>";
																	echo "<th class='col-sm-3'>Acciones</th>";
																	echo "</tr>";
																	echo "</thead>";


																	echo "<tbody class='buscar'>"; /*agregado*/


																	while($obra = mysqli_fetch_array($resultobra)){
																		$id=$obra['idLocalidad'];
																		echo"<tr align='center'>";
																		echo"<td>" .$obra['localidad']."</td>";
																		echo"<td>" .$obra['codigoPostal']."</td>";
																		echo"<td>
																		<a href='localidadModificar.php?idlocalidad=$id'>  <i class='icon-large btn btn-info icon-pencil'></i>  </a>
																";

																		echo "</tr>";
																	}

																	echo "</tbody>";
																	echo "</table>";

																?>

															</div>
														</div>
													</div>

													<div class="col-lg-12">
														<br>
														<div class="col-lg-12">
															<div class="form-group">
																<?php
																	$resultobra=mysqli_query($conexion,"SELECT * FROM partidos order by partido asc");

																	echo "<table class='table table-bordered table-hover table-striped display AllDataTables'>";
																	echo "<thead>";
																	echo "<tr>";
																	echo "<th class='col-sm-5'>Partido</th>";
																	echo "<th class='col-sm-4'>Codigo de Partido</th>";
																	echo "<th class='col-sm-3'>Acciones</th>";
																	echo "</tr>";
																	echo "</thead>";


																	echo "<tbody class='buscar'>"; /*agregado*/


																	while($obra = mysqli_fetch_array($resultobra)){
																		$id=$obra['idPartido'];
																		echo"<tr align='center'>";
																		echo"<td>" .$obra['partido']."</td>";
																		echo"<td>" .$obra['codPartido']."</td>";
																		echo"<td>
																		<a href='partidoModificar.php?idpartido=$id'>  <i class='icon-large btn btn-info icon-pencil'></i>  </a>
																	";

																		echo "</tr>";
																	}

																	echo "</tbody>";
																	echo "</table>";

																?>
															</div>
														</div>
													</div>

												</form>

											</div>

										</div>


									</div> <!-- /widget-content -->
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
	</body>
	</html>
