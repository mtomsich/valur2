<?php
include("sesion.php");
$pagina='comunicadosMRPmodificarPHP';
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
												<input class="form-control" type="text" value="<?php echo $nro3?>" name="nro3" maxlength="4">										</div>
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
									<div class="col-lg-4">
										<div class="form-inline">
											<label>Cantidad Parcelas </label>
											<input type="text" class="form-control form-inline" name="canp" value="<?php echo $canp?>" maxlength="2">
										</div>
									</div>

									<div class="col-lg-12">
										<label>Restricciones del Plano </label>
										<textarea class="form-control"  rows="6" type="text" name="rest"  maxlength="900"><?php echo $rest?></textarea>

									</div>

									<div class="col-lg-12">
										<p>Para las parcelas destinadas a espacio verde y libre público/equipamiento comunitario/ equipamiento comunitario e industrial que se listan a continuación, se solicita la actualización del Índice de Titulares</p>
									</div>

									<table class="table table-bordered responsive-table">
										<thead>
											<tr>
												<th class='col-sm-1'>Partido</th>
												<th class='col-sm-1'>Circunscripcion</th>
												<th class='col-sm-1'>Seccion</th>
												<th class='col-sm-1'>Chacra</th>
												<th class='col-sm-1'>Quinta</th>
												<th class='col-sm-1'>Fraccion</th>
												<th class='col-sm-1'>Manzana</th>
												<th class='col-sm-1'>Parcela</th>
												<th class='col-sm-1'>Superficie</th>
												<th class='col-sm-1'>Destino (EV/EC)</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><input type="text" class="form-control" name="pat1" value="<?php echo $pat1?>" maxlength="2"></td>
												<td><input type="text" class="form-control" name="cir1" value="<?php echo $cir1?>" maxlength="5"></td>
												<td><input type="text" class="form-control" name="sec1" value="<?php echo $sec1?>" maxlength="3"></td>
												<td><input type="text" class="form-control" name="cha1" value="<?php echo $cha1?>" maxlength="3"></td>
												<td><input type="text" class="form-control" name="qui1" value="<?php echo $qui1?>" maxlength="3"></td>
												<td><input type="text" class="form-control" name="fra1" value="<?php echo $fra1?>" maxlength="3"></td>
												<td><input type="text" class="form-control" name="man1" value="<?php echo $man1?>" maxlength="5"></td>
												<td><input type="text" class="form-control" name="par1" value="<?php echo $par1?>" maxlength="10"></td>
												<td><input type="text" class="form-control" name="sup1" value="<?php echo $sup1?>" maxlength="3"> </td>
												<td><input type="text" class="form-control" name="des1" value="<?php echo $des1?>" maxlength="10" ></td>
											</tr>
											<tr>
												<td><input type="text" class="form-control" name="pat2" value="<?php echo $pat2?>" maxlength="2"></td>
												<td><input type="text" class="form-control" name="cir2" value="<?php echo $cir2?>" maxlength="5"></td>
												<td><input type="text" class="form-control" name="sec2" value="<?php echo $sec2?>" maxlength="3"></td>
												<td><input type="text" class="form-control" name="cha2" value="<?php echo $cha2?>" maxlength="3"></td>
												<td><input type="text" class="form-control" name="qui2" value="<?php echo $qui2?>" maxlength="3"></td>
												<td><input type="text" class="form-control" name="fra2" value="<?php echo $fra2?>" maxlength="3"></td>
												<td><input type="text" class="form-control" name="man2" value="<?php echo $man2?>" maxlength="5"></td>
												<td><input type="text" class="form-control" name="par2" value="<?php echo $par2?>" maxlength="10"></td>
												<td><input type="text" class="form-control" name="sup2" value="<?php echo $sup2?>" maxlength="3"></td>
												<td><input type="text" class="form-control" name="des2" value="<?php echo $des2?>" maxlength="10"></td>
											</tr>
											<tr>
												<td><input type="text" class="form-control" name="pat3" value="<?php echo $pat3?>" maxlength="2"></td>
												<td><input type="text" class="form-control" name="cir3" value="<?php echo $cir3?>" maxlength="5"></td>
												<td><input type="text" class="form-control" name="sec3" value="<?php echo $sec3?>" maxlength="3"></td>
												<td><input type="text" class="form-control" name="cha3" value="<?php echo $cha3?>" maxlength="3"></td>
												<td><input type="text" class="form-control" name="qui3" value="<?php echo $qui3?>" maxlength="3"></td>
												<td><input type="text" class="form-control" name="fra3" value="<?php echo $fra3?>" maxlength="3"></td>
												<td><input type="text" class="form-control" name="man3" value="<?php echo $man3?>" maxlength="5"></td>
												<td><input type="text" class="form-control" name="par3" value="<?php echo $par3?>" maxlength="10"></td>
												<td><input type="text" class="form-control" name="sup3" value="<?php echo $sup3?>" maxlength="3"></td>
												<td><input type="text" class="form-control" name="des3" value="<?php echo $des3?>" maxlength="10"></td>
											</tr>
											<tr>
												<td><input type="text" class="form-control" name="pat4" value="<?php echo $pat4?>" maxlength="2"></td>
												<td><input type="text" class="form-control" name="cir4" value="<?php echo $cir4?>" maxlength="5"></td>
												<td><input type="text" class="form-control" name="sec4" value="<?php echo $sec4?>" maxlength="3"></td>
												<td><input type="text" class="form-control" name="cha4" value="<?php echo $cha4?>" maxlength="3"></td>
												<td><input type="text" class="form-control" name="qui4" value="<?php echo $qui4?>" maxlength="3"></td>
												<td><input type="text" class="form-control" name="fra4" value="<?php echo $fra4?>" maxlength="3"></td>
												<td><input type="text" class="form-control" name="man4" value="<?php echo $man4?>" maxlength="5"></td>
												<td><input type="text" class="form-control" name="par4" value="<?php echo $par4?>" maxlength="10"></td>
												<td><input type="text" class="form-control" name="sup4" value="<?php echo $sup4?>" maxlength="3"></td>
												<td><input type="text" class="form-control" name="des4" value="<?php echo $des4?>" maxlength="10"></td>
											</tr>
											<tr>
												<td><input type="text" class="form-control" name="pat5" value="<?php echo $pat5?>" maxlength="2"></td>
												<td><input type="text" class="form-control" name="cir5" value="<?php echo $cir5?>" maxlength="5"></td>
												<td><input type="text" class="form-control" name="sec5" value="<?php echo $sec5?>" maxlength="3"></td>
												<td><input type="text" class="form-control" name="cha5" value="<?php echo $cha5?>" maxlength="3"></td>
												<td><input type="text" class="form-control" name="qui5" value="<?php echo $qui5?>" maxlength="3"></td>
												<td><input type="text" class="form-control" name="fra5" value="<?php echo $fra5?>" maxlength="3"></td>
												<td><input type="text" class="form-control" name="man5" value="<?php echo $man5?>" maxlength="5"></td>
												<td><input type="text" class="form-control" name="par5" value="<?php echo $par5?>" maxlength="10"></td>
												<td><input type="text" class="form-control" name="sup5" value="<?php echo $sup5?>" maxlength="3"></td>
												<td><input type="text" class="form-control" name="des5" value="<?php echo $des5?>" maxlength="10"></td>
											</tr>
										</tbody>
									</table>
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
						  $_POST['rest'], $_POST['pat1'], $_POST['cir1'], $_POST['sec1'], $_POST['cha1'], $_POST['qui1'],
							$_POST['fra1'], $_POST['man1'], $_POST['par1'], $_POST['sup1'],	$_POST['des1'], $_POST['pat2'],
							$_POST['cir2'], $_POST['sec2'], $_POST['cha2'], $_POST['qui2'], $_POST['fra2'], $_POST['man2'],
							$_POST['par2'], $_POST['sup2'], $_POST['des2'], $_POST['pat3'],	$_POST['cir3'], $_POST['sec3'],
							$_POST['cha3'], $_POST['qui3'], $_POST['fra3'], $_POST['man3'], $_POST['par3'], $_POST['sup3'],
							$_POST['des3'], $_POST['pat4'], $_POST['cir4'], $_POST['sec4'], $_POST['cha4'], $_POST['qui4'],
							$_POST['fra4'], $_POST['man4'], $_POST['par4'], $_POST['sup4'], $_POST['des4'], $_POST['pat5'],
							$_POST['cir5'], $_POST['sec5'], $_POST['cha5'], $_POST['qui5'], $_POST['fra5'], $_POST['man5'],
							$_POST['par5'], $_POST['sup5'], $_POST['des5'],'','',$_POST['firmaprof']
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
						  $_POST['rest'], $_POST['pat1'], $_POST['cir1'], $_POST['sec1'], $_POST['cha1'], $_POST['qui1'],
							$_POST['fra1'], $_POST['man1'], $_POST['par1'], $_POST['sup1'],	$_POST['des1'], $_POST['pat2'],
							$_POST['cir2'], $_POST['sec2'], $_POST['cha2'], $_POST['qui2'], $_POST['fra2'], $_POST['man2'],
							$_POST['par2'], $_POST['sup2'], $_POST['des2'], $_POST['pat3'],	$_POST['cir3'], $_POST['sec3'],
							$_POST['cha3'], $_POST['qui3'], $_POST['fra3'], $_POST['man3'], $_POST['par3'], $_POST['sup3'],
							$_POST['des3'], $_POST['pat4'], $_POST['cir4'], $_POST['sec4'], $_POST['cha4'], $_POST['qui4'],
							$_POST['fra4'], $_POST['man4'], $_POST['par4'], $_POST['sup4'], $_POST['des4'], $_POST['pat5'],
							$_POST['cir5'], $_POST['sec5'], $_POST['cha5'], $_POST['qui5'], $_POST['fra5'], $_POST['man5'],
							$_POST['par5'], $_POST['sup5'], $_POST['des5'], '','',$_POST['firmaprof']
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
						echo "<a href='PDFcomunicaMRP.php?idComunicado=$idComunicado' target='_blank'";
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
