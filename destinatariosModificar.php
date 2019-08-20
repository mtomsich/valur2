<?php
include("sesion.php");
$pagina='destinatariosModificarPHP';
include("encabezado.php");
include("seguridad.php");
include("sql/insert.php");
include("sql/consultas.php");
include("sql/update.php");


$iddestinatario =$_REQUEST['iddestinatario'];

$row = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM destinatarios d, localidades l, provincias p
	where (idDestinatario='$iddestinatario') and (d.idLocalidad=l.idLocalidad) and (l.codProvincia=p.codProvincia)"));

	$DnombreApellido= $row['dnombreApellido'];
	$DtipoDni= $row['tipoDni'];
	$Ddni= $row['dni'];
	$Dtelefono= $row['telefono'];
	$Dcaracter= $row['caracter'];
	$Dcalle= $row['calle'];
	$DnroCalle= $row['nroCalle'];
	$Dcuerpo= $row['cuerpo'];
	$Ddpto= $row['departamento'];
	$Dpiso= $row['piso'];

	$Ccp= $row['codigoPostal'];

	$Clocalidad= $row['localidad'];
	$Cprovincia= $row['provincia'];

	$Cidlocalidad= $row['idLocalidad'];
	$Ccodprovincia= $row['codProvincia'];


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
																<label class="control-label" for="firstname">Apellido y Nombre</label>
																<div class="controls">
																	<input type="text" class="form-control span9 " name="DnombreApellido" id="firstname" value="<?php echo $DnombreApellido?>">
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

																<div class="control-group">
																<label class="control-label" for="lastname">Tipo DNI</label>
																<div class="controls">
																	<select class="form-control" name="DtipoDni" required>
																		<option value=""><?php echo $DtipoDni?></option>
																		<option>Dni</option>
																		<option>LE</option>
																		<option>LC</option>
																		<option>CI</option>
																	</select>
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="lastname">DNI</label>
																<div class="controls">
																	<input type="text" class="form-control span2 " name="Ddni" id="lastname" value="<?php echo $Ddni?>">
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="lastname">Teléfono</label>
																<div class="controls">
																	<input type="text" class="form-control span4 " name="Dtelefono" id="lastname" value="<?php echo $Dtelefono?>">
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="lastname">Caracter</label>
																<div class="controls">
																	<input type="text" class="form-control span2 " name="Dcaracter" id="lastname" value="<?php echo $Dcaracter?>">
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="firstname">Calle</label>
																<div class="controls">
																	<input type="text" class="form-control text inline span6 " name="Dcalle" id="firstname" value="<?php echo $Dcalle?>">
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="firstname">Número</label>
																<div class="controls">
																	<input type="text" class="form-control text inline span2 " name="DnroCalle" id="firstname" value="<?php echo $DnroCalle?>">
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="firstname">Cuerpo</label>
																<div class="controls">
																	<input type="text" class="form-control span2 " name="Dcuerpo" id="firstname" value="<?php echo $Dcuerpo?>">
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="firstname">Departamento</label>
																<div class="controls">
																	<input type="text" class="form-control span2 " name="Ddpto" id="firstname" value="<?php echo $Ddpto?>">
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="firstname">Piso</label>
																<div class="controls">
																	<input type="text" class="form-control span2 " name="Dpiso" id="firstname" value="<?php echo $Dpiso?>">
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="localidad">Localidad</label>
																<div class="controls">
																	<select id="localidad" data-size="4" data-hide-disabled="true" data-dropup-auto="false" class="col-lg-12 text-left selectpicker dropup" data-live-search="true" title="Seleccione Localidad" name="localSeleccionada" onchange="selectCP(this);">
																		<?php while ($fila = $consultaLocalidades->fetch_assoc()): ?>
																			<?php $atributo = ($fila['idLocalidad'] == $Cidlocalidad) ? 'selected' : '' ?>
																			<?php echo "<option value='".$fila['idLocalidad']."'".$atributo.">".$fila['localidad']. "</option>" ?>
																		<?php endwhile; ?>
																	</select>
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="firstname">Provincia</label>
																<div class="controls">
																	<select id="provincia" data-size="4" data-hide-disabled="true" data-dropup-auto="false" class="col-lg-12 text-left selectpicker dropup" data-live-search="true" title="Seleccione Provincia" name="provinciaSeleccionada" >

																		<?php while ($fila = $consultaProvincia->fetch_assoc()): ?>
																			<?php $atributo = ($fila['codProvincia'] == $CcodProvincia) ? 'selected' : '' ?>
																			<?php echo "<option value='".$fila['codProvincia']."'".$atributo.">".$fila['provincia']. "</option>" ?>
																		<?php endwhile; ?>
																	</select>	</div> <!-- /controls -->
																</div> <!-- /control-group -->

																<div class="control-group">
																	<label class="control-label" for="firstname">Código Postal</label>
																	<div class="controls">
																		<input type="text" class="form-control span2 " name="cp" id="codigoPostal" value="<?php echo $Ccp?>" disabled>
																	</div> <!-- /controls -->
																</div> <!-- /control-group -->

																<div class="control-group">
																	<label class="control-label" for="firstname">Pais</label>
																	<div class="controls">
																		<input type="text" class="form-control span3 " name="Cpais" id="firstname" value="Argentina" >
																	</div> <!-- /controls -->
																</div> <!-- /control-group -->

																<div class="form-actions">
																	<button class="btn btn-success" name="actualizar">Actualizar</button>
																	<input type="submit" class="btn " name="cerrar" value="Cerrar" />
																</div>




															</div>
														</div>
													</div>





												</fieldset>
											</div>


											<?php
											if (isset($_POST['actualizar'])){

												$sqldes= updateDestinatario($_POST['DnombreApellido'],$_POST['DtipoDni'],$_POST['Ddni'],
												$_POST['Dtelefono'],$_POST['Dcaracter'],$_POST['Dcalle'],$_POST['DnroCalle'],
												$_POST['Dcuerpo'],$_POST['Ddpto'],$_POST['Dpiso'],$_POST['localSeleccionada'] ,$iddestinatario);

												mysqli_query($conexion,$sqldes)
												or die("Problemas en el alta ".mysqli_error($conexion));

												echo "<script language='javascript'>";
												echo "alert('El destinatario fue actualizado');";
												echo "window.location='destinatarios.php';";
												echo "</script>";

											}

											if (isset($_POST['cerrar'])){
												echo "<script language='javascript'>";
												echo "window.location='inicio.php';";
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

														<div class="col-lg-2">
														</div>

														<div class="col-lg-12">
															<div class="form-group">
																<?php
														 	echo "<table class='table table-bordered table-hover table-striped display AllDataTables'>";
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
