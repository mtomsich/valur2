<?php
			include("sesion.php");
			$pagina='profesionalesModificarPHP';
			include ("encabezado.php");
			include("seguridad.php");
			include("sql/insert.php");
			include("sql/consultas.php");
			include("sql/update.php");

			$idprofesional =$_REQUEST['idprofesional'];

				if (isset($_POST['actualizar'])){

					$sqlpro= updateProfesional($_POST['nombreApellido'],$_POST['tipoDni'],$_POST['dni'],$_POST['sexo'],$_POST['cuit'],
					$_POST['distrito'],$_POST['matricula'],$_POST['titulo'],$_POST['telefono'],$_POST['calle'],$_POST['nroCalle'],$_POST['cuerpo'],$_POST['dpto'],$_POST['piso'],
					$_POST['localSeleccionada'],$idprofesional);

					mysqli_query($conexion,$sqlpro)
					or die("Problemas en la actualizacion".mysqli_error($conexion));

					echo "<script language='javascript'>";
					echo "alert('El profesional fue actualizado');";
				//echo "window.location='profesionalesModificar.php?idprofesional=$idprofesional';";
					echo "</script>";
				}

			$row = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM profesionales p, localidades l, provincias pr
				 	where (p.idProfesional=$idprofesional)and (p.idLocalidad=l.idLocalidad) and (l.codProvincia=pr.codProvincia)"));

			$PnombreApellido= $row['pnombreApellido'];
			$PtipoDni= $row['tipoDni'];
			$Pdni= $row['dni'];
			if ($row['sexo']==1){
				$Psexo="Masculino";
			}	else {
					if ($row['sexo']=='2'){
						$Psexo="Femenino";
						}else {
							if ($row['sexo']=='3'){
									$Psexo="Sociedad"	;
								}
								else {
									$Psexo=""	;
								}
							}
			}
			$Pcuit= $row['cuit'];
			$Pdistrito=$row['distrito'];
			$Pmatricula=$row['matricula'];
			$Ptitulo=$row['titulo'];
			$Ptelefono= $row['telefono'];
			$Pcalle= $row['calle'];
			$PnroCalle= $row['nroCalle'];
			$Pcuerpo= $row['cuerpo'];
			$Pdpto= $row['departamento'];
			$Ppiso= $row['piso'];
			$Psexo= $row['sexo'];
			$localidad= $row['localidad'];
			$provincia= $row['provincia'];

	$Cidlocalidad= $row['idLocalidad'];
		$cp= $row['codigoPostal'];


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
									<h3>Formulario de Profesional</h3>
								</div> <!-- /widget-header -->

								<div class="widget-content">

									<form method="post" id="edit-profile" class="form-horizontal">

										<div class="accordion" id="accordion2">
											<fieldset>
												<div class="accordion-group">
													<div class="accordion-heading">
														<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
															Datos del Profesional
														</a>
													</div>
													<div id="collapseOne" class="accordion-body collapse in">
														<div class="accordion-inner">

															<style> .control-group {display: inline-block;} </style>

															<div class="control-group">
																<label class="control-label" for="firstname">Apellido y Nombre</label>
																<div class="controls">
																	<input type="text" class="form-control span9" name="nombreApellido" id="firstname" value="<?php echo $PnombreApellido?>">
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="lastname">Tipo DNI<b style="color:#FF0000";>*</b></label>
																<div class="controls">
																	<select class="form-control" name="tipoDni" required>
																			<option selected><?php echo $PtipoDni?></option>
																		<option>DNI</option>
																		<option>LE</option>
																		<option>LC</option>
																		<option>CI</option>
																		<option>CUIT</option>
																	</select>
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="lastname">DNI<b style="color:#FF0000";>*</b></label>
																<div class="controls">
																	<input type="text" class="form-control span3" name="dni" id="dni" value="<?php echo $Pdni?>">
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="sexo">Sexo<b style="color:#FF0000";>*</b></label>
																<div class="controls">
																	<select name="sexo" class="form-control" name="sexo" id="sexo" required>
																		<option><?php echo $Psexo?></option>
																		<option value="1">Masculino</option>
																		<option value="2">Femenino</option>
																		<option value="3">Sociedad</option>
																	</select>

																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">

																<div class="controls">
																	<div class="input-append">
																		<button type="button" class="btn" onclick="generarCuit();" >Calcular CUIT</button>
																		<input class="form-control span3 m-wrap" name="cuit" id="result" type="text" value="<?php echo $Pcuit?>">

																	</div>
																</div>	<!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="lastname">Distrito</label>
																<div class="controls">
																	<input type="text" class="form-control span2" name="distrito" id="lastname" value="<?php echo $Pdistrito?>">
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="lastname">Matricula</label>
																<div class="controls">
																	<input type="text" class="form-control span2" name="matricula" id="lastname" value="<?php echo $Pmatricula?>">
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="lastname">Titulo</label>
																<div class="controls">
																	<input type="text" class="form-control span5" name="titulo" id="lastname" value="<?php echo $Ptitulo?>">
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="lastname">Teléfono</label>
																<div class="controls">
																	<input type="text" class="form-control span4" name="telefono" id="lastname" value="<?php echo $Ptelefono?>">
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="firstname">Calle</label>
																<div class="controls">
																	<input type="text" class="form-control text inline span5" name="calle" id="firstname" value="<?php echo $Pcalle?>">
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="firstname">Número</label>
																<div class="controls">
																	<input type="text" class="form-control text inline span2" name="nroCalle" id="firstname" value="<?php echo $PnroCalle?>">
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="firstname">Cuerpo</label>
																<div class="controls">
																	<input type="text" class="form-control span2" name="cuerpo" id="firstname" value="<?php echo $Pcuerpo?>">
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="firstname">Departamento</label>
																<div class="controls">
																	<input type="text" class="form-control span2" name="dpto" id="firstname" value="<?php echo $Pdpto?>">
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="firstname">Piso</label>
																<div class="controls">
																	<input type="text" class="form-control span2" name="piso" id="firstname" value="<?php echo $Ppiso?>">
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="localidad" required>Localidad<b style="color:#FF0000";>*</b></label>
																<div class="controls">
																	<select id="localidad" data-size="5" data-hide-disabled="true" data-dropup-auto="false" class="col-lg-12 text-left selectpicker dropup" data-live-search="true" title="Seleccione Localidad" name="localSeleccionada" onchange="selectCP(this);">
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
																	<input type="text" class="form-control span2 " name="cp" id="codigoPostal" value="<?php echo $cp?>" disabled>
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="firstname">Provincia</label>
																<div class="controls">
																	<input type="text" class="form-control span4 " name="provincia" id="lastname" value="<?php echo $provincia?>" disabled>

																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="firstname">Pais</label>
																<div class="controls">
																	<input type="text" class="form-control span3" name="pais" id="firstname" value="Argentina" disabled >
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="form-actions">
																<button class="btn btn-success" name="actualizar">Actualizar</button>
																<button type="button" class="btn" onclick="window.location='inicio.php';" name="cerrar">Cancelar</button>

															</div>

														</div>
													</div>
												</div>

											</fieldset>
										</div>

									</form>

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
	</body>

</html>
