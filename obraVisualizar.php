<?php
include("sesion.php");
$pagina='obraVisualizarPHP';
include ("encabezado.php");
include("seguridad.php");
include("sql/insert.php");
include("sql/consultas.php");
include("sql/mostrarDatosObra.php");

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
								<form method="post">
									<fieldset>
										<legend>Ubicacion</legend>


										<div class="col-lg-3 text-left">
											<label>Partido</label>
											<input type="text" class="form-control span4 " name="Clocalidad" id="lastname" value="<?php echo $Fpartido?>"disabled>

										</div>


										<div class="col-lg-2 text-left">
											<label>Cod Partido</label>
											<input class="form-control" type="text" value="<?php echo $FcodPartido?>"disabled>
										</div>


										<div class="col-lg-3 text-left">
											<label>Localidad</label>
											<input type="text" class="form-control span4 " name="Clocalidad" id="lastname" value="<?php echo $Flocalidad?>"disabled>
										</div>

										<div class="col-lg-2 text-left">
											<label>CP</label>
											<input class="form-control" type="text" name="cp" value="<?php echo $FcodigoPostal?>"disabled>
										</div>
										<div class="col-lg-2 text-left">
											<label>Partida</label>
											<input class="form-control" type="text" name="partida" value="<?php echo $Fpartida?>"disabled>
										</div>

										<div class="col-lg-7 text-left">
											<label>Domicilio</label>
											<input class="form-control" type="text" name="domicilio" value="<?php echo $Fdomicilio?>"disabled>
										</div>

										<div class="col-lg-2 text-left">
											<label>Nro</label>
											<input class="form-control" type="text" name="nroCalle" value="<?php echo $FnroCalle?>"disabled>
										</div>
										<div class="col-lg-1 text-left">
											<label>Cuerpo</label>
											<input class="form-control" type="text" name="cuerpo" value="<?php echo $Fcuerpo?>"disabled>
										</div>
										<div class="col-lg-1 text-left">
											<label>Piso</label>
											<input class="form-control" type="text" name="piso" value="<?php echo $Fpiso?>"disabled>
										</div>
										<div class="col-lg-1 text-left">
											<label>Dpto</label>
											<input class="form-control" type="text" name="dpto" value="<?php echo $Fdpto?>"disabled>
										</div>

										<div class="col-lg-3 text-left">
											<label>Entre esq. calle y </label>
											<input class="form-control" type="text" name="esqCalle" value="<?php echo $FesqCalle?>"disabled>
										</div>
										<div class="col-lg-3 text-left">
											<label>Calle</label>
											<input class="form-control" type="text" name="yCalle" value="<?php echo $FyCalle?>"disabled>
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
													<th class='col-sm-1'>Subparcela</th>

												</tr>
											</thead>
											<tbody>
												<tr>

													<td><input type="text" class="form-control" name="cir" value="<?php echo $Fcir?>" disabled></td>
													<td><input type="text" class="form-control" name="sec" value="<?php echo $Fsec?>" disabled></td>
													<td><input type="text" class="form-control" name="cha" value="<?php echo $Fcha?>" disabled></td>
													<td><input type="text" class="form-control" name="qui" value="<?php echo $Fqui?>" disabled></td>
													<td><input type="text" class="form-control" name="fra" value="<?php echo $Ffra?>" disabled></td>
													<td><input type="text" class="form-control" name="man" value="<?php echo $Fman?>" disabled></td>
													<td><input type="text" class="form-control" name="par" value="<?php echo $Fpar?>" disabled></td>
													<td><input type="text" class="form-control" name="sub" value="<?php echo $Fsub?>" disabled></td>
												</tr>
											</tbody>
										</table>

									</fieldset>
									<fieldset>
										<legend> Infraestructura </legend>
										<div class="col-lg-2 text-left"><input type="checkbox" name="infraP" <?php b($FinfraP) ?> Pavimento</div>
										<div class="col-lg-2 text-left"><input type="checkbox" name="infraA" <?php b($FinfraA) ?>  Alumbrado</div>
										<div class="col-lg-2 text-left"><input type="checkbox" name="infraL" <?php b($FinfraL) ?>   Luz	</div>
										<div class="col-lg-2 text-left"><input type="checkbox" name="infraAg" <?php b($FinfraAg) ?>  Agua</div>
										<div class="col-lg-2 text-left"><input type="checkbox" name="infraC" <?php b($FinfraC) ?> Cloacas	</div>
										<div class="col-lg-2 text-left"><input type="checkbox" name="infraG" <?php b($FinfraG) ?> Gas	</div>
									</fieldset>
									<br>
									<fieldset>
										<legend>Datos</legend>
										<div class="col-lg-3 text-left">
											<label for="cliente">Cliente:</label>


											<input class="form-control" type="text" value="<?php echo $FcnombreApellido?>"disabled>
										</div>



										<div class="col-lg-3 text-left">
											<label for="cliente">Firmante:</label>

											<input class="form-control" type="text" value="<?php echo $FfnombreApellido?>"disabled>
										</div>




										<div class="col-lg-3 text-left">
											<label for="cliente">Destinatario:</label>
											<input class="form-control" type="text" value="<?php echo $FdnombreApellido?>"disabled>

										</div>



										<div class="col-lg-3 text-left">
											<label for="cliente">Profesional:</label>
											<input class="form-control" type="text" value="<?php echo $FidProfesional?>"disabled>

										</div>
									</fieldset>
									<br>

									<fieldset>
										<legend>Tareas</legend>

										<div class="col-lg-4 text-left">
											<label class="control-label" for="lastname">Tipo de Obra</label>
											<input class="form-control" type="text" value="<?php echo $FtipoObra?>"disabled>


										</div> <!-- /controls -->


									</fieldset>

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



</body>

</html>
