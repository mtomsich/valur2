<?php
include("sesion.php");
$pagina='partidoModificarPHP';
include ("encabezado.php");
include("seguridad.php");
include("sql/insert.php");
include("sql/consultas.php");
include("sql/update.php");

$idpartido= $_REQUEST['idpartido'];

$row = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM partidos where idPartido='$idpartido'"));

$Pcodpartido= $row['codPartido'];
$Ppartido= $row['partido'];

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
															<label class="control-label" for="provincia">Partido:</label>
															<div class=" controls ">
																<input class="form-control span3" name="partido" id="partido" value="<?php echo $Ppartido?>">
															</div>
														</div>

														<div class="control-group">
															<label class="control-label" for="firstname">Partido: </label>
															<div class="controls">
																<input class="form-control span3" name="codPartido" id="codPartido" value="<?php echo $Pcodpartido?>">
															</div>
														</div>
													</br>
												</div>

											</div>

											<br />
											<div class="form-actions">
												<button class="btn btn-warning" name="actualizar"> Actualizar </button>
												<button type="button" class="btn" onclick="window.location='localPart.php';" name="cerrar">Cancelar</button>

											</div> <!-- /form-actions -->
										</fieldset>
										<?php
										if (isset($_POST['actualizar'])){

											$sqlParMod= updatePartido($_POST['partido'], $_POST['codPartido'], $idpartido);

											mysqli_query($conexion,$sqlParMod)
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
