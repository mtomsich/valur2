<?php
		include("sesion.php");
			$pagina='localidadModificarPHP';
			include ("encabezado.php");
			include("seguridad.php");
			include("sql/insert.php");
			include("sql/consultas.php");
			include("sql/update.php");


			$idlocalidad= $_REQUEST['idlocalidad'];

			$row = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM localidades where idLocalidad='$idlocalidad'"));

			$PidPartido= $row['idPartido'];
			$Plocalidad= $row['localidad'];
			$PcodPostal= $row['codigoPostal'];
			$PcodProvincia= $row['codProvincia'];
		?>
		<!DOCTYPE html>
		<html lang="es">
			<head>
			</head>
			<body>

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
																	<select name="provinciaSelect" id="provinciaSelect">
    																	<?php while ($fila = $consultaProvincia->fetch_assoc()): ?>
        															<?php $atributo = ($fila['codProvincia'] == $PcodProvincia) ? 'selected' : '' ?>
        													<?php echo "<option value='".$fila['codProvincia']."'".$atributo.">".$fila['provincia']. "</option>" ?>
    																	<?php endwhile; ?>
																	</select>
																</div>
													</div>
													</br>

													<div class="control-group">
														<label class="control-label" for="firstname">Partido: </label>
														<div class="controls">
															<select name="partidoSelect" id="partidoSelect">
																	<?php while ($fila = $consultaPartidos->fetch_assoc()): ?>
																	<?php $atributo = ($fila['idPartido'] == $PidPartido) ? 'selected' : '' ?>
																<?php echo "<option value='".$fila['idPartido']."'".$atributo.">".$fila['partido']. "</option>" ?>
																	<?php endwhile; ?>
															</select>
														</div>
													</div>
													</br>
													<div class="control-group">
														<label class="control-label" for="firstname">Localidad:</label>
														<div class="controls">
															<input class="form-control span3" name="localidad" id="localidad" value="<?php echo $Plocalidad?>">
														</div>
													</div>
													<div class="control-group">
														<label class="control-label" for="firstname">Código Postal</label>
														<div class="controls">
															<input class="form-control span2" name="codPostal" id="codPostal" value="<?php echo $PcodPostal?>">
														</div> <!-- /controls -->
													</div> <!-- /control-group -->

													</div>

													</div>

											<br />
											<div class="form-actions">
												<button class="btn btn-warning" name="actualizar"> Actualizar </button>
												<button type="button" onclick="window.location='localPart.php';" class="btn" name="cerrar">Cancelar</button>

											</div> <!-- /form-actions -->
									</fieldset>
											<?php
													if (isset($_POST['actualizar'])){

														$sqlLocMod= updateLocalidad($_POST['provinciaSelect'], $_POST['partidoSelect'], $_POST['localidad'],
														$_POST['codPostal'], $idlocalidad);

														mysqli_query($conexion,$sqlLocMod)
														or die("Problemas en la actualizacion".mysqli_error($conexion));

															echo "<script language='javascript'>";
															echo "alert('La localidad fue actualizada');";
															echo "window.location='localPart.php';";
															echo "</script>";
														}

											?>

											</div>

										</div>
									<!-- /form -->

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
