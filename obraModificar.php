<?php
	include("sesion.php");
		$pagina='obraModificarPHP';
		include("encabezado.php");
		include("seguridad.php");
		include("sql/insert.php");
		include("sql/consultas.php");
		include("sql/mostrarDatosObra.php");
		include("sql/consultas.php");
		include("sql/update.php");

		$idobra=$_REQUEST['idobra'];
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
							    <i class="icon-user"></i>
							    <h3>Ingreso de Obra</h3>
							  </div> <!-- /widget-header -->

							  <div class="widget-content">
							  <form method="post" id="edit-profile" class="form-horizontal">
									<fieldset>
						 			 <legend>Datos</legend>
						 			 <div class="col-lg-3 text-left">
						 				 <label for="cliente">Cliente:</label>
									 <select id="cliente" class="col-lg-12 text-left selectpicker" data-size="5" data-live-search="true" title="Seleccione cliente" name="clienteSeleccionado">
											<?php while ($fila = $consultaClientes->fetch_assoc()): ?>
											<?php $atributo = ($fila['idCliente'] == $FidCliente) ? 'selected' : '' ?>
											<?php echo "<option value='".$fila['idCliente']."'".$atributo.">".$fila['cnombreApellido']. "</option>" ?>
											<?php endwhile; ?>
										</select>
						  </div>

						 			 <div class="col-lg-3 text-left">
						 				 <label for="cliente">Firmante:</label>
											 <select id="firmante" class="col-lg-12 text-left selectpicker" data-size="5" data-live-search="true" title="Seleccione firmante" name="firmanteSeleccionado">
											 <?php while ($fila = $consultaFirmantes->fetch_assoc()): ?>
											 <?php $atributo = ($fila['idFirmante'] == $FidFirmante) ? 'selected' : '' ?>
											 <?php echo "<option value='".$fila['idFirmante']."'".$atributo.">".$fila['fnombreApellido']. "</option>" ?>
											 <?php endwhile; ?>
										 </select>
						 			 </div>

						 			 <div class="col-lg-3 text-left">
						 				 <label for="cliente">Destinatario:</label>
						 				 <select class="col-lg-12 text-left selectpicker" data-size="5" data-live-search="true" title="Seleccione destinatario" name="destinatarioSeleccionado">
										 <?php while ($fila = $consultaDestinatarios->fetch_assoc()): ?>
										 <?php $atributo = ($fila['idDestinatario'] == $FidDestinatario) ? 'selected' : '' ?>
										 <?php echo "<option value='".$fila['idDestinatario']."'".$atributo.">".$fila['dnombreApellido']. "</option>" ?>
										 <?php endwhile; ?>
									 </select>
						 			 </div>

						 		 </fieldset>
						 		 <br>

						 		 <fieldset>
								    <fieldset>
							        <legend>Ubicacion</legend>
							        <div class="col-lg-3 text-left">
							          <label>Partido</label>
												<select id="partido" data-size="5" data-hide-disabled="true" onchange="selectLocalidad(this);" class="selectpicker" data-live-search="true" title="Seleccione Partido" name="partidoSeleccionado">
												<?php while ($fila = $consultaPartidos->fetch_assoc()): ?>
												<?php $atributo = ($fila['idPartido'] == $FidPartido) ? 'selected' : '' ?>
												<?php echo "<option value='".$fila['idPartido']."'".$atributo.">".$fila['partido']. "</option>" ?>
												<?php endwhile; ?>
											</select>
							        </div>
											<div class="col-lg-2 text-left">
												<label>Cod Partido</label>
												<input id="codPartido" class="form-control" type="text" value="<?php echo $FcodPartido?>">
											</div>
							        <div class="col-lg-3 text-left">
							          <label>Localidad</label>
												<select id="localidad" data-size="5" data-hide-disabled="true" class="selectpicker" title="Seleccione Localidad" data-live-search="true" name="localSeleccionada" onchange="selectCP(this);">
												<?php while ($fila = $consultaLocalidades->fetch_assoc()): ?>
												<?php $atributo = ($fila['idLocalidad'] == $FidLocalidad) ? 'selected' : '' ?>
												<?php echo "<option value='".$fila['idLocalidad']."'".$atributo.">".$fila['localidad']. "</option>" ?>
												<?php endwhile; ?>
											</select>
							  </div>
							        <div class="col-lg-2 text-left">
							          <label>CP</label>
							          <input class="form-control" type="text" name="cp"  id="codigoPostal" value="<?php echo $FcodigoPostal?>" disabled>
							        </div>
							        <div class="col-lg-2 text-left">
							          <label>Partida</label>
							          <input class="form-control" type="text" name="partida" value="<?php echo $Fpartida?>">
							        </div>
							        <div class="col-lg-7 text-left">
							          <label>Domicilio</label>
							          <input class="form-control" type="text" name="domicilio" value="<?php echo $Fdomicilio?>">
							        </div>
							        <div class="col-lg-2 text-left">
							          <label>Nro</label>
							          <input class="form-control" type="text" name="nroCalle" value="<?php echo $FnroCalle?>">
							        </div>
							        <div class="col-lg-1 text-left">
							          <label>Cuerpo</label>
							          <input class="form-control" type="text" name="cuerpo" value="<?php echo $Fcuerpo?>">
							        </div>
							        <div class="col-lg-1 text-left">
							          <label>Piso</label>
							          <input class="form-control" type="text" name="piso" value="<?php echo $Fpiso?>">
							        </div>
							        <div class="col-lg-1 text-left">
							          <label>Dpto</label>
							          <input class="form-control" type="text" name="dpto" value="<?php echo $Fdpto?>">
							        </div>
							        <div class="col-lg-3 text-left">
							          <label>Entre esq. calle y </label>
							          <input class="form-control" type="text" name="esqCalle" value="<?php echo $FesqCalle?>">
							        </div>
							        <div class="col-lg-3 text-left">
							          <label>Calle</label>
							          <input class="form-control" type="text" name="yCalle" value="<?php echo $FyCalle?>">
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

							              <td><input type="text" class="form-control" name="cir" value="<?php echo $Fcir?>" ></td>
							              <td><input type="text" class="form-control" name="sec" value="<?php echo $Fsec?>" ></td>
							              <td><input type="text" class="form-control" name="cha" value="<?php echo $Fcha?>" ></td>
							              <td><input type="text" class="form-control" name="qui" value="<?php echo $Fqui?>" ></td>
							              <td><input type="text" class="form-control" name="fra" value="<?php echo $Ffra?>" ></td>
							              <td><input type="text" class="form-control" name="man" value="<?php echo $Fman?>" ></td>
							              <td><input type="text" class="form-control" name="par" value="<?php echo $Fpar?>" ></td>
														<td><input type="text" class="form-control" name="sub" value="<?php echo $Fsub?>" ></td>
							            </tr>
							          </tbody>
							        </table>

							      </fieldset>
										<fieldset>
											<legend> Infraestructura </legend>
											<div class="col-lg-2 text-left"><input type="checkbox" name="infraP" <?php a($FinfraP) ?> Pavimento</div>
											<div class="col-lg-2 text-left"><input type="checkbox" name="infraA" <?php a($FinfraA) ?>  Alumbrado</div>
											<div class="col-lg-2 text-left"><input type="checkbox" name="infraL" <?php a($FinfraL) ?>   Luz	</div>
											<div class="col-lg-2 text-left"><input type="checkbox" name="infraAg" <?php a($FinfraAg) ?>  Agua</div>
											<div class="col-lg-2 text-left"><input type="checkbox" name="infraC" <?php a($FinfraC) ?> Cloacas	</div>
											<div class="col-lg-2 text-left"><input type="checkbox" name="infraG" <?php a($FinfraG) ?> Gas	</div>
										</fieldset>
										<br>
										<fieldset>
							        <legend>Tareas</legend>
							        <div class="col-lg-4 text-left">
							          <label class="control-label" for="lastname">Tipo de Obra</label>
							        	<select id="tipoObra"  name="tipoObra" onChange="mostrar(this);" class="form-control" >
													<option selected><?php echo $FtipoObra?></option>
													<option value="Urbana">Urbana</option>
													<option value="Rural">Rural</option>
													<option value="PH">Propiedad Horizontal</option>
													<option value="Decreto">Decreto 947</option>
												</select>

							        </div> <!-- /controls -->

							        <br>	<br><br><br>


							      </fieldset>
										<button type="submit" class="btn btn-primary" name="actualizar">Actualizar</button>
										<button class="btn" name="cerrar">Cancelar</button>
							      <?php
							        if (isset($_POST['actualizar'])){
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

									       $sqlobra= updateObra($_POST['partidoSeleccionado'],	$_POST['localSeleccionada'],$_POST['partida'],
							          $_POST['domicilio'],$_POST['nroCalle'],$_POST['cuerpo'],$_POST['piso'],
							          $_POST['dpto'],$_POST['esqCalle'],$_POST['yCalle'],
							          $_POST['cir'],$_POST['sec'],$_POST['cha'],$_POST['qui'],$_POST['fra'],$_POST['man'],
							          $_POST['par'],$_POST['sub'],$infraP,$infraA,$infraL,$infraAg,$infraG,$infraC,$_POST['clienteSeleccionado'],$_POST['firmanteSeleccionado'],
							          $_POST['destinatarioSeleccionado'],$_SESSION['idProfesional'],$_POST['tipoObra'], $idobra);

							          mysqli_query($conexion,$sqlobra)
							          or die("Problemas en la actualizacion ".mysqli_error($conexion));

							          echo "<script language='javascript'>";
							          echo "alert('La obra fue actualizada');";
												echo "window.location='obraBuscar.php';";
							          echo "</script>";

							        }

											if (isset($_POST['cerrar'])){
												echo "<script language='javascript'>";
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
			include ("pie.php");

		?>
		<script src="javascript/codigoPostal.js"></script>
		<script src="javascript/localidad.js"></script>
		<script>
		  function mostrar(select) {
		    hideAll();
		    var selectID = select.options[select.selectedIndex].value;
		    document.getElementById(selectID).style.display = "inline";
		  }

		</script>


	</body>

</html>
