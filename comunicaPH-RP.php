<?php
		include("sesion.php");
	// muestra los datos de la obra ingresada y se carga cedula de acuerdo al tipo de obra elegida

		$pagina='comunicadosPHRPPHP';
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
							<div class="widget">
	  						<div class="widget-header">
	    						<i class="icon-user"></i>
	    						<h3>Comunicacion Registro de la Propiedad</h3>
	  						</div> <!-- /widget-header -->

								<div class="widget-content">
	    						<form method="post">
	<div>
										<label>Comunicacion sobre plano: </label>
										<div class="col-lg-1 text-left">
											<label>Tipo </label>
											<input class="form-control" type="text" name="tipo" maxlength="3">
										</div>
										<div class="col-lg-4 text-left">
											<label>Numero </label>
											<div class="col-lg-4 text-left">
											<input class="form-control" type="text" name="nro1" maxlength="2">
										</div>
											<div class="col-lg-4 text-left">
											<input class="form-control" type="text" name="nro2" maxlength="3">
												</div>
											<div class="col-lg-4 text-left">
											<input class="form-control" type="text" name="nro3" maxlength="4">
										</div>
											</div>
										<div class="col-lg-1 text-left">
													<label>Ratificacion</label>
										<input class="form-control" type="text" name="rati" maxlength="2">
									</div>
									<div class="col-lg-2 text-left">
										<label>Aprobado</label>
										<input type="date" class="form-control" name="apro">
									</div>
									<div class="col-lg-4 text-left">
										<label>Plano de referencia que afecta a las inscripciones</label>
										<input class="form-control" type="text" name="insc" maxlength="80">
									</div>
							</div>
							<div class="col-lg-12 text-left">
								<label>Designacion del Bien</label>
								<input type="text" class="form-control" name="desi" maxlength="140">
							</div>
							<div class="col-lg-12 text-left">
								<label>Nomenclatura Origen</label>
								<input type="text" class="form-control"  name="nomo" maxlength="140">
							</div>

							<div class="col-lg-12 text-left">
								<label>Nomenclatura Definitiva</label>
								<input type="text" class="form-control" name="nomd" maxlength="140">
							</div>

							<div class="col-lg-12 text-left">
								<label >Partido</label>
									<select id="partido" data-size="5" data-hide-disabled="true" class="form-control selectpicker" data-live-search="true" name="part" required>
										<option value="" >Seleccione Partido</option>
										<?php
										while ($fila=mysqli_fetch_row($consultaPartidos)) {
											echo "<option value='".$fila['0']."'>".$fila['2']."</option>";
										}
										?>
									</select>
							</div> <!-- /control-group -->


							<div class="col-lg-12 text-left">
								<label>El objeto es</label>
								<input type="text" class="form-control" name="obje" maxlength="300">
							</div>
							<div class="col-lg-8">
									<div class="form-inline">
								<label>Cantidad U. Funcionales </label>
								<input type="text" class="form-control form-inline" name="canp" maxlength="3">
								<label>Cantidad U. Complementarias </label>
								<input type="text" class="form-control form-inline" name="canc" maxlength="3">
							</div>
								</div>
							<div class="col-lg-12">
								<label>Notas del Plano de PH: </label>
								<textarea class="form-control"  rows="6" type="text" name="rest" maxlength="900"></textarea>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<table>
										<tr> <td align="center"> <input type="checkbox" value="1" id="firmaprof" name="firmaprof" onClick="checkProf(this.checked)"> </td> </tr>
										<tr> <td> <h5> No mostrar profesional </h5> </td> </tr>
									</table>
								</div>
							</div>
	  						</div> <!-- /widget-content -->
						</div> <!-- /widget -->
						<button type="submit" class="btn btn-primary" name="insertar">Guardar</button>
						<button type="submit" class="btn btn-primary" name="imprimir">Imprimir</button>
							<button type="button" class="btn" onclick="window.location='comunicadosVer.php';" name="cerrar">Cancelar</button>
						</div>
					</div>
					<!-- /row -->
					<?php
					if (isset($_POST['insertar'])){
						if (isset($_POST['firmaprof'])){
							$firmaprof=$_POST['firmaprof'];
						} else {
							$firmaprof=0;
						}
						$sqlmrp= insertComunicado(
							$_POST['tipo'], $_POST['nro1'], $_POST['nro2'], $_POST['nro3'], $_POST['apro'], $_POST['insc'],	$_POST['desi'],
							$_POST['nomo'],	$_POST['nomd'], $_POST['part'], $_POST['obje'], $_POST['canp'],	$_POST['rest'],
							'','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
							'','','','','','','','','','','','','','','','','','','','','','PH', $_POST['canc'],$_POST['rati'],$firmaprof ,$_SESSION['idUsuario']
						);

						mysqli_query($conexion,$sqlmrp)
						or die("Problemas en el alta del comunincado ".mysqli_error($conexion));

						echo "<script language='javascript'>";
						echo "alert('El comunicado ha sido creado');";
						echo "window.location='comunicadosVer.php';";
						echo "</script>";
					}

					if (isset($_POST['imprimir'])){
						if (isset($_POST['firmaprof'])){
							$firmaprof=$_POST['firmaprof'];
						} else {
							$firmaprof=0;
						}
						$sqlmrp= insertComunicado(
							$_POST['tipo'], $_POST['nro1'], $_POST['nro2'], $_POST['nro3'], $_POST['apro'], $_POST['insc'],	$_POST['desi'],
							$_POST['nomo'],	$_POST['nomd'], $_POST['part'], $_POST['obje'], $_POST['canp'],	$_POST['rest'],
							'','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
							'','','','','','','','','','','','','','','','','','','','','','PH', $_POST['canc'],$_POST['rati'],$firmaprof ,$_SESSION['idUsuario']
						);

						mysqli_query($conexion,$sqlmrp)
						or die("Problemas en el alta del coumincado ".mysqli_error($conexion));

						$resultmrp = mysqli_query($conexion,"SELECT MAX(idComunicado) AS id FROM comunicados");

						$vecmrp = mysqli_fetch_array($resultmrp);

						if (!$resultmrp){
							die("Error: Datos no encontrados..");
						}
						$idComunicado=$vecmrp['id'] ;

						echo "<script language='javascript'>";
						echo "alert('El comunicado ha sido creado y se envia a imprimir');";
						echo "window.open('PDFcomunicaPHRP.php?idComunicado=$idComunicado', '_blank');";
						echo "window.location.href = 'comunicadosVer.php';";
						echo "</script>";

					}
					?>
	</form>
				</div>
				<!-- /container -->
			</div>
			<!-- /main-inner -->
		</div>
		<!-- /main -->
		<?php
			include ("pie.php");
		?>
	</body>
</html>
