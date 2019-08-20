<?php
include("sesion.php");
$pagina='comunicadosPHERPmodificarPHP';
include("encabezado.php");
include("seguridad.php");
$idComunicado=$_REQUEST['idComunicado'];
include("sql/mostrarComunicado.php");
include("sql/consultas.php");
include("sql/update.php");

if ((isset($mostrarProf)) && ($mostrarProf === '1')) {
	 $mostrarProf = 'checked="checked" ';
} else {
		$mostrarProf = ' ';
}
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
											<input class="form-control" type="text" value="<?php echo $tipo?>"  name="tipo" maxlength="3">
										</div>
										<div class="col-lg-4 text-left">
											<label>Numero </label>
											<div class="col-lg-4 text-left">
												<input class="form-control" type="text" value="<?php echo $nro1?>" name="nro1" maxlength="2">
											</div>
											<div class="col-lg-4 text-left">
												<input class="form-control" type="text" value="<?php echo $nro2?>" name="nro2" maxlength="3">
											</div>
											<div class="col-lg-4 text-left">
												<input class="form-control" type="text" value="<?php echo $nro3?>" name="nro3" maxlength="4">
											</div>
										</div>
											<div class="col-lg-2 text-left">
												<label>Aprobado</label>
												<input type="date" class="form-control" type="text" name="apro" value="<?php echo $apro?>" >
											</div>
											<div class="col-lg-5 text-left">
												<label>Plano de referencia que afecta a las inscripciones</label>
												<input class="form-control" type="text" name="insc" value="<?php echo $insc?>" maxlength="80">
											</div>
										</div>
										<div class="col-lg-12 text-left">
											<label>Designacion del Bien</label>
											<input type="text" class="form-control" name="desi" value="<?php echo $desi?>" maxlength="140">
										</div>
										<div class="col-lg-12 text-left">
											<label>Nomenclatura Origen</label>
											<input type="text" class="form-control"  name="nomo" value="<?php echo $nomo?>" maxlength="140">
										</div>
										<div class="col-lg-12 text-left">
											<label>Nomenclatura Definitiva</label>
											<input type="text" class="form-control" name="nomd" value="<?php echo $nomd?>" maxlength="140">
										</div>
										<div class="col-lg-12 text-left">
											<label >Partido</label>
											<select id="partido" data-size="5" data-hide-disabled="true" class="selectpicker" data-live-search="true" title="Seleccione Partido" name="part">
												<?php while ($fila = $consultaPartidos->fetch_assoc()): ?>
													<?php $atributo = ($fila['idPartido'] == $part) ? 'selected' : '' ?>
													<?php echo "<option value='".$fila['idPartido']."'".$atributo.">".$fila['partido']. "</option>" ?>
												<?php endwhile; ?>
											</select>
										</div> <!-- /control-group -->
										<div class="col-lg-12 text-left">
											<label>El objeto es</label>
											<input type="text" class="form-control" name="obje" value="<?php echo $obje?>" maxlength="300">
										</div>
										<div class="col-lg-8">
											<div class="form-inline">
												<label>Cantidad U. Privativas </label>
												<input type="text" class="form-control form-inline" name="canp" value="<?php echo $canp?>" maxlength="3" >
												<label>Cantidad U. Complementarias </label>
												<input type="text" class="form-control form-inline" name="canc" value="<?php echo $canc?>" maxlength="3">
											</div>
											</div>
											<div class="col-lg-12">
												<label>Notas del Plano de PHE:</label>
												<textarea class="form-control"  rows="6" type="text" name="rest"  maxlength="900"><?php echo $rest?></textarea>
										 </div>
										 <div class="col-sm-2">
											 <div class="form-group">
												 <table>
													 <tr> <td align="center"> <input type="checkbox" value="1" id="firmaprof" name="firmaprof" <?php if (isset($mostrarProf)){echo $mostrarProf;}?>> </td> </tr>
													 <tr> <td> <h5> No mostrar profesional </h5> </td> </tr>
												 </table>
											 </div>
										 </div>
										</div> <!-- /widget-content -->
									</div> <!-- /widget -->
									<button type="submit" class="btn btn-primary" name="actualizar">Actualizar</button>
									<button type="submit" class="btn btn-primary" name="imprimir" target="_blank" >Imprimir</button>
									<button type="button" class="btn" onclick="window.location='comunicadosVer.php';" name="cerrar">Cancelar</button>

								</div>
							</div>
							<!-- /row -->

							<?php
							if (isset($_POST['actualizar'])){
								$sqlmrp= updateComunicado($idComunicado,
								$_POST['tipo'], $_POST['nro1'], $_POST['nro2'], $_POST['nro3'], $_POST['apro'], $_POST['insc'],
								$_POST['desi'], $_POST['nomo'],	$_POST['nomd'], $_POST['part'], $_POST['obje'], $_POST['canp'],
								$_POST['rest'], '','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
								'','','','','','','','','','','','','','','','','','','','','',$_POST['canc'],'',$_POST['firmaprof']
							);

							mysqli_query($conexion,$sqlmrp)
							or die("Problemas en el alta del coumincado ".mysqli_error($conexion));

							echo "<script language='javascript'>";
							echo "alert('El comunicado ha sido actualizado');";
							echo "window.location='comunicadosVer.php';";

							echo "</script>";
						}

						if (isset($_POST['imprimir'])){
							$sqlmrp= updateComunicado($idComunicado,
							$_POST['tipo'], $_POST['nro1'], $_POST['nro2'], $_POST['nro3'], $_POST['apro'], $_POST['insc'],
							$_POST['desi'], $_POST['nomo'],	$_POST['nomd'], $_POST['part'], $_POST['obje'], $_POST['canp'],
							$_POST['rest'], '','','','','','','','','','','','','','','','','','','','','','','','','','','','','',
							'','','','','','','','','','','','','','','','','','','','','',$_POST['canc'], '',$_POST['firmaprof']
						);

						mysqli_query($conexion,$sqlmrp)
						or die("Problemas en la actualizacion del coumincado ".mysqli_error($conexion));

						$resultmrp = mysqli_query($conexion,"SELECT MAX(idComunicado) AS id FROM comunicados");
						$vecmrp = mysqli_fetch_array($resultmrp);
						if (!$resultmrp){
							die("Error: Datos no encontrados..");
						}

						$idComunicado=$vecmrp['id'] ;

						echo "<script language='javascript'>";
						echo "alert('El comunicado ha sido creado y se envia a imprimir');";
						echo "<a href='PDFcomunicaPHERP.php?idComunicado=$idComunicado' target='_blank'";
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
