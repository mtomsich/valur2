<?php
			include("sesion.php");
	  	$pagina='firmantesPHP';
			include("encabezado.php");
			include("seguridad.php");
			include("sql/insert.php");
			include("sql/consultas.php");

		?>
		<!DOCTYPE html>
		<html lang="es">

		<script type="text/javascript">
		function cambiar( obj ){
				var aux = document.getElementById("sexo");
				text = aux.options[aux.selectedIndex].innerText; //El texto de la opción seleccionada
				if (text == "Sociedad"){
					var container = document.getElementById("cambio");
					container.innerHTML = "CUIT"+"*".fontcolor("red");
					document.getElementById("boton").disabled = true;
					document.getElementById("result").disabled = true;
					$("#tipoDni option[value='cuit']").attr("selected", true);
				} else {
					var container = document.getElementById("cambio");
					container.innerHTML = "DNI"+"*".fontcolor("red");
					document.getElementById("boton").disabled = false;
					document.getElementById("result").disabled = false;
				}
		}
		function change( obj ){
			var auxTipoDni = document.getElementById("tipoDni");
			textTipoDni = auxTipoDni.options[auxTipoDni.selectedIndex].innerText; //El texto de la opción seleccionada
			if (textTipoDni == "CUIT"){
				var container = document.getElementById("cambio");
				container.innerHTML = "CUIT"+"*".fontcolor("red");
				document.getElementById("boton").disabled = true;
				document.getElementById("result").disabled = true;
				$("#sexo option[value='3']").attr("selected", true);
			} else {
				var container = document.getElementById("cambio");
				container.innerHTML = "DNI"+"*".fontcolor("red");
				document.getElementById("boton").disabled = false;
				document.getElementById("result").disabled = false;
				$("#sexo option[value='']").attr("selected", true);
			}
		}
		</script>

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
																<label class="control-label" for="cliente" >Cliente:<b style="color:#FF0000";>*</b></label>
																<div class="controls ">
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
																<label class="control-label" for="firstname">Apellido y Nombre<b style="color:#FF0000";>*</b></label>
																<div class="controls">
																	<input type="text" class="form-control span8" maxlength="35" name="nombreApellido" id="firstname" value="" required>
																	<div style="font-size:12px">Maximo 35 caracteres</div>
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="lastname">Tipo DNI</label>
																<div class="controls">
																	<select class="form-control" name="tipoDni" id="tipoDni" onchange="change(this);" required>
																		<option value="">Seleccionar...</option>
																		<option>Dni</option>
																		<option>LE</option>
																		<option>LC</option>
																		<option>CI</option>
																		<option value="cuit">CUIT</option>
																	</select>
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label id="cambio" class="control-label" for="lastname"required>DNI<b style="color:#FF0000";>*</b></label>
																<div class="controls">
																		<input type="text" class="form-control span2 " name="dni" id="dni" required>
																</div> <!-- /controls -->
															</div> <!-- /control-group -->
															<div class="control-group">
																<label class="control-label" for="sexo">Sexo<b style="color:#FF0000";>*</b></label>
																<div class="controls">
																	<select name="sexo" class="form-control" id="sexo" onchange="cambiar(this);" required>
																		<option value="">Seleccione...</option>
																		<option value="1">Masculino</option>
																		<option value="2">Femenino</option>
																		<option value="3">Sociedad</option>
																	</select>

																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">

																<div class="controls">
																	<div class="input-append">
																		<button type="button" class="btn" id="boton" onclick="generarCuit();" >Calcular CUIT</button>
																		<input class="form-control span4 m-wrap" name="cuit" id="result" type="text">

																	</div>
																</div>	<!-- /controls -->
															</div> <!-- /control-group -->


															<div class="control-group">
																<label class="control-label" for="firstname">Pais</label>
																<div class="controls">
																	<input type="text" class="form-control span3" name="pais" id="firstname" value="Argentina" >
																</div> <!-- /controls -->
															</div> <!-- /control-group -->


															<div class="control-group">
																<label class="control-label" for="firstname">Provincia</label>
																<div class="controls">

																	<select id="provincia" data-size="10" data-hide-disabled="true" data-dropup-auto="false" class="selectpicker " data-live-search="true" title="Seleccione Provincia" name="provinciaSeleccionada" >

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
																<label class="control-label" for="localidad" >Partido<b style="color:#FF0000";>*</b></label>
																<div class="controls">
																	<select id="partido" data-size="5" data-hide-disabled="true" onchange="selectLocalidad(this);" class="selectpicker" data-live-search="true" name="partidoSeleccionado" required>
																		<option value="" >Seleccione Partido</option>
																		<?php
																		while ($fila=mysqli_fetch_row($consultaPartidos)) {
																			echo "<option value='".$fila['0']."'>".$fila['3']."</option>";
																		}
																		?>
																	</select>
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="calles" >Localidad<b style="color:#FF0000";>*</b></label>
																<div class="controls">
																	<select id="localidad" data-size="5" data-hide-disabled="true" onchange="selectCalles(this);" class="selectpicker" data-live-search="true" title="Seleccione Localidad" name="localSeleccionada" required>
																		<option value="" >Seleccione Localidad</option>
																		<?php
																		/*while ($fila=mysqli_fetch_row($consultaLocalidades)) {
																		echo "<option value='".$fila['0']."'>".$fila['2']."</option>";
																	}*/
																	?>


																</select>
															</div> <!-- /controls -->
														</div> <!-- /control-group -->



														<div class="control-group">
															<label class="control-label" for="alturas">Calle<b style="color:#FF0000";>*</b></label>
															<div class="controls">
																<!--<input type="text" class="form-control text inline span6" name="calle" id="firstname" value="">-->
																<select id="calles" data-size="5" data-hide-disabled="true" onchange="selectAlturas(this) "  class="selectpicker" data-live-search="true" title="Seleccione Calle"  name="calleSeleccionada" required>
																	<option value="">Seleccione Calle</option>
																	<?php
																	/*while ($fila=mysqli_fetch_row($consultaLocalidades)) {
																	echo "<option value='".$fila['0']."'>".$fila['2']."</option>";
																}*/
																?>
															</select>
															</div> <!-- /controls -->
														</div> <!-- /control-group -->

														<div class="control-group">
															<label class="control-label" >Rango de altura<b style="color:#FF0000";>*</b></label>
															<div class="controls">
																<!--<input type="text" class="form-control text inline span6" name="calle" id="firstname" value="">-->
																<select id="alturas" data-size="5" data-hide-disabled="true"  onchange="selectCP(this); selectCPA(this)"  class="selectpicker" data-live-search="true" title="Seleccione Rango de Altura"  name="alturaSeleccionada" required>
																	<option value="">Seleccione Rango de altura</option>
																	<?php
																	/*while ($fila=mysqli_fetch_row($consultaLocalidades)) {
																	echo "<option value='".$fila['0']."'>".$fila['2']."</option>";
																}*/
																?>
																</select>
															</div> <!-- /controls -->
														</div> <!-- /control-group -->


														<div class="control-group">
															<label class="control-label" >CP<b style="color:#FF0000";>*</b></label>
															<div class="controls">
																<!--<input type="text" class="form-control text inline span6" name="calle" id="firstname" value="">-->
																<select id="cp" data-size="5" data-hide-disabled="true"  class="selectpicker" data-live-search="true" name="CP" disabled>
																	<option value="">CP</option>
																	<?php
																	/*while ($fila=mysqli_fetch_row($consultaLocalidades)) {
																	echo "<option value='".$fila['0']."'>".$fila['2']."</option>";
																}*/
																?>
																</select>
															</div> <!-- /controls -->
														</div> <!-- /control-group -->

														<div class="control-group">
															<label class="control-label" >CPA<b style="color:#FF0000";>*</b></label>
															<div class="controls">
																<!--<input type="text" class="form-control text inline span6" name="calle" id="firstname" value="">-->
																<select id="cpa" data-hide-disabled="true"  class="selectpicker" data-live-search="true" name="CPA" disabled>
																	<option value="">CPA</option>
																	<?php
																	/*while ($fila=mysqli_fetch_row($consultaLocalidades)) {
																	echo "<option value='".$fila['0']."'>".$fila['2']."</option>";
																}*/
																?>
																</select>
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
																<label class="control-label" for="lastname">Teléfono</label>
																<div class="controls">
																	<input type="text" class="form-control span2" name="telefono" id="lastname" value="">
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="control-group">
																<label class="control-label" for="lastname">Caracter</label>
																<div class="controls">
																	<input type="text" class="form-control span2" name="caracter" id="lastname" value="">
																</div> <!-- /controls -->
															</div> <!-- /control-group -->

															<div class="controls span9">
																<div class="alert">
																	<button type="button" class="close" data-dismiss="alert">&times;</button>


																	<label >Copiar datos a Destinatarios
																	<input type="checkbox"  name="des" id="check" value="1" /></label>
																</div>
															</div>

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

													if ($_POST['sexo'] == "3") {
														$cuit = $_POST['dni'];
														$dni = "";
													} else {
														$cuit = $_POST['cuit'];
														$dni = $_POST['dni'];
													}

													$sqlfir= insertFirmanteNuevo($_POST['nombreApellido'],$_POST['tipoDni'],$dni,$_POST['sexo'],
													$cuit,$_POST['telefono'],$_POST['caracter'],$_POST['calle'],$_POST['nroCalle'],$_POST['cuerpo'],$_POST['dpto'],$_POST['piso'],
													$_POST['partidoSeleccionado'],$_POST['localSeleccionada'] ,$_POST['clienteSeleccionado']);

													mysqli_query($conexion,$sqlfir)
													or die("Problemas en el alta del firmante".mysqli_error($conexion));

													if (isset($_POST['des']) && $_POST['des'] == '1'){

														/* se obtiene el ultimo codigo de firmante ingresado*/
														$sqldes= insertDestinatarioNuevo($_POST['nombreApellido'],$_POST['tipoDni'],$dni,
															$_POST['telefono'],$_POST['caracter'],$_POST['calle'],$_POST['nroCalle'],$_POST['cuerpo'],$_POST['dpto'],$_POST['piso'],
															$_POST['localSeleccionada'],$_POST['clienteSeleccionado']);

															mysqli_query($conexion,$sqldes)
															or die("Problemas en el alta ".mysqli_error($conexion));


														echo "<script language='javascript'>";
														echo "alert('El firmante y destinatario creado');";
														echo "window.location='firmantes.php';";
														echo "</script>";

														} else{

														echo "<script language='javascript'>";
														echo "alert('El firmante fue creado');";
														echo "window.location='firmantes.php';";
														echo "</script>";

													}

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


												<div class="col-lg-12">
												<div class="form-group">
												<script src="js/datatables.js"></script>
												<script src="js/dataTables.bootstrap.js"></script>
												<script src="js/jquery-3.4.1.min.js"></script>
												<?php
												echo "<table  class='table table-bordered table-hover table-striped display AllDataTables'>";
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


												echo "<tbody class='buscar'>";

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
												<a onClick='redirect(this);' id='$id'>  <i class='icon-large icon-trash btn btn-danger '></i>  </a>
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
		<script src="javascript/localidad.js"></script>
		<script src="javascript/calles.js"></script>
		<script src="javascript/alturas.js"></script>
		<script src="javascript/cpa.js"></script>

		<script>
		function redirect(element) {
		if (confirm('Esta seguro que quiere eliminar el firmante?'))
			window.location.href = "sql/firmantesBorrar.php?idfirmante=" + element.id;
		}
		</script>

	</body>

</html>
