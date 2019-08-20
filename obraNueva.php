<?php
include("sesion.php");
// formulario de ingreso de datos de la obra
$pagina='obraNuevaPHP';
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

						<div class="tab-content">
							<div class="tab-pane active" id="datos">
								<div class="widget ">
									<div class="widget-header">
										<i class="icon-user"></i>
										<h3>Ingreso de Obra</h3>
									</div> <!-- /widget-header -->

									<div class="widget-content">
										<form method="post">
											<fieldset>
												<legend>Datos</legend>
												<div class="col-lg-1">
													<label for="cliente">Cliente:<b style="color:#FF0000";>*</b></label>
												</div>
												<div class="col-lg-9 text-left">
													<select required id="cliente" class="col-lg-12 text-left selectpicker"data-size="5" data-live-search="true" name="clienteSeleccionado">
														<option value="">Seleccione nombre</option>
														<?php
														while ($fila= $consultaClientes->fetch_assoc()) {
															echo "<option value='".$fila['idCliente']."'>".$fila['cnombreApellido']."</option>";
														}
														?>
													</select>
												</div>
												<br><br>
												<div class="col-lg-1">
													<label for="cliente">Firmante:<b style="color:#FF0000";>*</b></label>
												</div>
												<div class="col-lg-9 text-left">
													<select  class="col-lg-12 selectpicker" data-size="5" data-live-search="true" name="firmanteSeleccionado" id="firmante" required>

														<option value="">Seleccione nombre</option>
														<?php
														while ($fila=mysqli_fetch_row($consultaFirmantes)) {
															echo "<option value='".$fila['0']."'>".$fila['1']."</option>";
														}
														?>


													</select>
												</div>

												<br><br>
												<div class="col-lg-1">
													<label for="cliente">Destinatario:<b style="color:#FF0000";>*</b></label>
												</div>
												<div class="col-lg-9 text-left">
													<select id="destinatario" class="col-lg-12 text-left selectpicker" data-size="5" data-live-search="true" name="destinatarioSeleccionado" required>
														<option value="">Seleccione nombre</option>
														<?php
														while ($fila=mysqli_fetch_row($consultaDestinatarios)) {
															echo "<option value='".$fila['0']."'>".$fila['1']."</option>";
														}


														?>


													</select>
												</div>

												<br><br>


											</fieldset>
											<br>
											<fieldset>
												<legend>Ubicacion</legend>


												<div class="col-lg-3 text-left">
													<label>Partido<b style="color:#FF0000";>*</b></label>

													<select id="partido" data-size="5" data-hide-disabled="true" onchange="selectLocalidad(this);" class="selectpicker" data-live-search="true" title="Seleccione Partido" name="partidoSeleccionado" required>
														<option value="" >Seleccione Partido</option>
														<?php
														while ($fila=mysqli_fetch_row($consultaPartidos)) {
															echo "<option value='".$fila['0']."'>".$fila['2']."</option>";
														}
														?>
													</select>
												</div>

												<div class="col-lg-2 text-left">
													<label>Cod Partido</label>
													<input id="codPartido" class="form-control" type="text">
												</div>

												<div class="col-lg-3 text-left">
													<label>Localidad<b style="color:#FF0000";>*</b></label>

													<select id="localidad" data-size="5" data-hide-disabled="true" class="selectpicker" title="Seleccione Localidad" data-live-search="true" name="localSeleccionada" onchange="selectCP(this);" required>
														<option value="">Seleccione Localidad</option>
														<?php
														/*while ($fila=mysqli_fetch_row($consultaLocalidades)) {
														echo "<option value='".$fila['0']."'>".$fila['2']."</option>";
													}*/
													?>


												</select>
											</div>

											<div class="col-lg-2 text-left">
												<label>CP</label>
												<input class="form-control" type="text" name="cp" id="codigoPostal">
											</div>
											<div class="col-lg-2 text-left">
												<label>Partida</label>
												<input class="form-control" type="text" name="partida">
											</div>

											<div class="col-lg-7 text-left">
												<label>Domicilio</label>
												<input class="form-control" type="text" name="domicilio">
											</div>

											<div class="col-lg-2 text-left">
												<label>Nro</label>
												<input class="form-control" type="text" name="nroCalle">
											</div>
											<div class="col-lg-1 text-left">
												<label>Cuerpo</label>
												<input class="form-control" type="text" name="cuerpo">
											</div>
											<div class="col-lg-1 text-left">
												<label>Piso</label>
												<input class="form-control" type="text" name="piso">
											</div>
											<div class="col-lg-1 text-left">
												<label>Dpto</label>
												<input class="form-control" type="text" name="dpto">
											</div>

											<div class="col-lg-3 text-left">
												<label>Entre esq. calle y </label>
												<input class="form-control" type="text" name="esqCalle">
											</div>
											<div class="col-lg-3 text-left">
												<label>Calle</label>
												<input class="form-control" type="text" name="yCalle">
											</div>

										</fieldset>
										<fieldset>
											<legend>Nomenclatura</legend>
											<table class="table table-bordered responsive-table">
												<thead>
													<tr>
														<th class='col-sm-1'>Circunscripcion</th>
														<th class='col-sm-1'>Seccion</th>
														<th class='col-sm-1'>Chacra</th>
														<th class='col-sm-1'>Quinta</th>
														<th class='col-sm-1'>Fraccion</th>
														<th class='col-sm-1'>Manzana</th>
														<th class='col-sm-1'>Parcela</th>
														<th class='col-sm-1'>SubParcela</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><input type="text" class="form-control" name="cir" value=""></td>
														<td><input type="text" class="form-control" name="sec" value=""></td>
														<td><input type="text" class="form-control" name="cha" value=""></td>
														<td><input type="text" class="form-control" name="qui" value=""></td>
														<td><input type="text" class="form-control" name="fra" value=""></td>
														<td><input type="text" class="form-control" name="man" value=""></td>
														<td><input type="text" class="form-control" name="par" value=""></td>
														<td><input type="text" class="form-control" name="sub" value=""></td>
													</tr>
												</tbody>
											</table>
										</fieldset>
										<fieldset>
											<legend> Infraestructura </legend>
												<div class="col-lg-2 text-left"><input type="checkbox" name="infraP" value="1">Pavimento</div>
												<div class="col-lg-2 text-left"><input type="checkbox" name="infraA" value="1"> Alumbrado</div>
												<div class="col-lg-2 text-left"><input type="checkbox" name="infraL" value="1"> Luz	</div>
												<div class="col-lg-2 text-left"><input type="checkbox" name="infraAg" value="1"> Agua</div>
												<div class="col-lg-2 text-left"><input type="checkbox" name="infraC" value="1"> Cloacas	</div>
												<div class="col-lg-2 text-left"><input type="checkbox" name="infraG" value="1"> Gas	</div>
										</fieldset>
										<br>
										<fieldset>
											<legend>Tareas</legend>
											<div class="col-lg-1">
												<label class="control-label" >Tipo de Obra</label>
											</div>
											<div class="controls col-lg-4">
												<select id="tipoObra"  name="tipoObra" onChange="mostrar(this);" class="form-control" >
													<option value="Urbana">Urbana</option>
													<option value="Rural">Rural</option>
													<option value="PH">Propiedad Horizontal</option>
													<option value="Decreto">Decreto 947</option>
												</select>
											</div> <!-- /controls -->
										</fieldset>

										<button type="submit" class="btn btn-primary" name="insertar">Guardar</button>
										<button onclick="window.location='obraBuscar.php';" class="btn" name="cerrar">Cancelar</button>

										<?php
										if (isset($_POST['insertar'])){
											if(isset($_POST['infraP'])) {
												$infraP = 1;
											} else {
												$infraP = 0;
											}
											if(isset($_POST['infraA'])) {
												$infraA = 1;
											} else {
												$infraA = 0;
											}
											if(isset($_POST['infraAg'])) {
												$infraAg = 1;
											} else {
												$infraAg = 0;
											}
											if(isset($_POST['infraG'])) {
												$infraG = 1;
											} else {
												$infraG = 0;
											}
											if(isset($_POST['infraC'])) {
												$infraC = 1;
											} else {
												$infraC = 0;
											}
											if(isset($_POST['infraL'])) {
												$infraL = 1;
											} else {
												$infraL = 0;
											}

											$sqlobra= insertObra($_POST['partidoSeleccionado'],$_POST['localSeleccionada'],$_POST['partida'],
											$_POST['clienteSeleccionado'],$_POST['domicilio'],$_POST['nroCalle'],$_POST['cuerpo'],$_POST['piso'],
											$_POST['dpto'],$_POST['esqCalle'],$_POST['yCalle'],
											$_POST['cir'],$_POST['sec'],$_POST['cha'],$_POST['qui'],$_POST['fra'],$_POST['man'],
											$_POST['par'],$_POST['sub'],$infraP,$infraA,$infraL,$infraAg,$infraG,$infraC,$_POST['firmanteSeleccionado'],
											$_POST['destinatarioSeleccionado'],$_SESSION['idProfesional'],$_POST['tipoObra']);

											mysqli_query($conexion,$sqlobra)
											or die("Problemas en el alta ".mysqli_error($conexion));

											$rs=mysqli_query($conexion,"SELECT MAX(codObra) AS id FROM obras");
											if ($row1 = mysqli_fetch_row($rs)) {
												$idobra = trim($row1[0]);
											}
											$tipoObra=$_POST['tipoObra'];

											echo "<script language='javascript'>";
											echo "alert('La obra fue creada');";
											echo "window.location='obraBuscar.php';";
											echo "</script>";

										}


										?>
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

		<script src="javascript/codigoPostal.js"></script>
		<script src="javascript/localidad.js"></script>

		<script language="javascript">
		$(document).ready(function(){
			$("#cliente").change(function () {

				$("#cliente option:selected").each(function () {
					var idCliente = $(this).val();
					$.post("sql/getfirmante.php", {idCliente: idCliente }, function(data){
						$("#firmante").html(data);
						$("#firmante").selectpicker('refresh');
					});
				});
			})
		});

		$(document).ready(function(){
			$("#cliente").change(function () {
				$("#cliente option:selected").each(function () {
					var idCliente = $(this).val();
					$.post("sql/getdestinatario.php", {idCliente: idCliente}, function(data){
						$("#destinatario").html(data);
						$("#destinatario").selectpicker('refresh');
					});
				});
			})
		});



		</script>


	</body>

	</html>
