<?php
include("sesion.php");
$pagina='firmantesModificarPHP';
include("encabezado.php");
include("seguridad.php");
include("sql/insert.php");
include("sql/consultas.php");
include("sql/update.php");


$idfirmante =$_REQUEST['idfirmante'];

$row = mysqli_fetch_array(mysqli_query($conexion,"SELECT *
	FROM firmantes f, localidades l, provincias p, partidos pa
	where idFirmante='$idfirmante' and (f.idPartido=pa.idPartido) and (f.idLocalidad=l.idLocalidad) and (l.codProvincia=p.codProvincia)"));

	$FnombreApellido= $row['fnombreApellido'];
	$FtipoDni= $row['tipoDni'];
	$Fdni= $row['dni'];
	$Fcuit= $row['cuit'];
	if ($row['sexo']=='1'){
		$Fsexo="Masculino";
	}	else {
		if ($row['sexo']=='2'){
			$Fsexo="Femenino";
		}else {
			if ($row['sexo']=='3'){
				$Fsexo="Sociedad"	;
			}
			else {
				$Fsexo=""	;
			}
		}
	}
	$Ftelefono= $row['telefono'];
	$Fcaracter= $row['caracter'];
	$Fcalle= $row['calle'];
	$FnroCalle= $row['nroCalle'];
	$Fcuerpo= $row['cuerpo'];
	$Fdpto= $row['departamento'];
	$Fpiso= $row['piso'];
	$Ccp= $row['codigoPostal'];

	$Clocalidad= $row['localidad'];
	$Cpartido= $row['partido'];
	$Cprovincia= $row['provincia'];

	$CidPartido= $row['idPartido'];
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
									<h3>Formulario de Firmante</h3>
								</div> <!-- /widget-header -->

								<div class="widget-content">


									<form method="post" id="edit-profile" class="form-horizontal">

										<div class="accordion" id="accordion2">

											<fieldset>
												<div class="accordion-group">
													<div class="accordion-heading">
														<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
															Datos del Firmante
														</a>
													</div>
													<div id="collapseOne" class="accordion-body collapse in">
														<div class="accordion-inner">

															<style> .control-group {display: inline-block;} </style>

															<div class="control-group">
																<label class="control-label" for="firstname">Apellido y Nombre</label>
																<div class="controls">
																	<input type="text" class="form-control span9 " name="FnombreApellido" id="firstname" value="<?php echo $FnombreApellido?>">
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="lastname">Tipo DNI</label>
																<div class="controls">
																	<input type="text" class="form-control span2 " name="FtipoDni" id="FtipoDni" value="<?php echo $FtipoDni?>" disabled>
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="lastname">DNI</label>
																<div class="controls">
																	<input type="text" class="form-control span2 " name="Fdni" id="Fdni" value="<?php echo $Fdni?>"disabled>
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="sexo">Sexo</label>
																<div class="controls">
																	<input type="text" class="form-control span2 " name="Fsexo" id="Fsexo" value="<?php echo $Fsexo?>" disabled>

																</div> <!-- /controls -->
															</div> <!-- /control-group -->


															<div class="control-group">
																<label class="control-label" for="radiobtns">CUIT </label>

																<div class="controls">
																	<div class="input-append">
																		<input class="form-control span2 m-wrap " name="Ccuit" id="appendedInputButton" type="text" value="<?php echo $Fcuit?>" disabled>

																	</div>
																</div>	<!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="lastname">Teléfono</label>
																<div class="controls">
																	<input type="text" class="form-control span4 " name="Ftelefono" id="lastname" value="<?php echo $Ftelefono?>">
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="lastname">Caracter</label>
																<div class="controls">
																	<input type="text" class="form-control span2 " name="Fcaracter" id="lastname" value="<?php echo $Fcaracter?>">
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="firstname">Calle</label>
																<div class="controls">
																	<input type="text" class="form-control text inline span4 " name="Fcalle" id="firstname" value="<?php echo $Fcalle?>">
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="firstname">Número</label>
																<div class="controls">
																	<input type="text" class="form-control text inline span1 " name="FnroCalle" id="firstname" value="<?php echo $FnroCalle?>">
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="firstname">Cuerpo</label>
																<div class="controls">
																	<input type="text" class="form-control span2 " name="Fcuerpo" id="firstname" value="<?php echo $Fcuerpo?>">
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="firstname">Departamento</label>
																<div class="controls">
																	<input type="text" class="form-control span2 " name="Fdpto" id="firstname" value="<?php echo $Fdpto?>">
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="firstname">Piso</label>
																<div class="controls">
																	<input type="text" class="form-control span2 " name="Fpiso" id="firstname" value="<?php echo $Fpiso?>">
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="partido">Partido</label>
																<div class="controls">
																	<select id="partido" data-size="5" data-hide-disabled="true" onchange="selectLocalidad(this);" class="selectpicker" data-live-search="true" title="Seleccione Partido" name="partidoSeleccionado">
																		<?php while ($fila = $consultaPartidos->fetch_assoc()): ?>
																			<?php $atributo = ($fila['idPartido'] == $CidPartido) ? 'selected' : '' ?>
																			<?php echo "<option value='".$fila['idPartido']."'".$atributo.">".$fila['partido']. "</option>" ?>
																		<?php endwhile; ?>
																	</select>
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
																	<label class="control-label" for="firstname">Código Postal</label>
																	<div class="controls">
																		<input type="text" class="form-control span2 " name="cp" id="codigoPostal" value="<?php echo $Ccp?>" disabled>
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

												$sqlfirAct= updateFirmante($_POST['FnombreApellido'],$_POST['Ftelefono'],$_POST['Fcaracter'],$_POST['Fcalle'],$_POST['FnroCalle'],$_POST['Fcuerpo'],
												$_POST['Fdpto'],$_POST['Fpiso'],$_POST['partidoSeleccionado'],$_POST['localSeleccionada'],$idfirmante);

												mysqli_query($conexion,$sqlfirAct)
												or die("Problemas en el alta ".mysqli_error($conexion));

												echo "<script language='javascript'>";
												echo "alert('El firmante fue actualizado ');";
												echo "window.location='firmantes.php';";
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
													Busqueda del Firmante
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
																echo "<th class='col-sm-4'>Nombre</th>";
																echo "<th class='col-sm-1'>DNI</th>";
																echo "<th class='col-sm-2'>Cuit</th>";
																echo "<th class='col-sm-2'>Telefono</th>";
																echo "<th class='col-sm-1'>Caracter</th>";
																echo "<th class='col-sm-2'>Acciones</th>";
																echo "</tr>";
																echo "</thead>";


																echo "<tbody class='buscar'>"; /*agregado*/


																while($obra = mysqli_fetch_array($consultaFirmantes)){
																	$id=$obra['idFirmante'];
																	echo"<tr align='center'>";
																	echo"<td>" .$obra['fnombreApellido']."</td>";
																	echo"<td>" .$obra['dni']."</td>";
																	echo"<td>" .$obra['cuit']."</td>";
																	echo"<td>" .$obra['telefono']."</td>";
																	echo"<td>" .$obra['caracter']."</td>";
																	echo"<td>
																	<a href='firmantesModificar.php?idfirmante=$id'>  <i class='icon-large btn btn-info icon-pencil'></i>  </a>
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
				window.location.href = "sql/firmantesBorrar.php?idobra=" + element.id;
			}
			</script>

		</body>

		</html>
