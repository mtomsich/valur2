<?php
include("sesion.php");
 $pagina='tablaDepreciacionPHP';
 include("encabezado.php");
  include("seguridad.php");

?>

<!DOCTYPE html>
<html lang="es">
		<style>
			table th.text-center, td.text-center {
			text-align: center;
			}
			/*
			Descomentar para ver los limites de las tablas
			table,td{
				border-color: black !important;
				border-style: solid !important;
				border-width: 1px !important;
			}
			*/
			.borde{
				border-color: #00ba8b !important;
				border-style: solid !important;
				border-width: 1px !important;
			}
			.accordion-toggle:hover{
				color: white;
				background-color: #00ba8b;
			}
			/* no sacar, es para que los radio box queden bien alineados */
			.huggi{
				margin-left: 24px !important;
				margin-right: 24px !important;
				margin-top: 10px !important;
				margin-bottom: 10px !important;
			}
		</style>
	<body>
		<div class="main">
			<div class="main-inner">
				<div class="container">
					<div class="widget-header">
						<i class="icon-th-large"></i>
						<h3>Tabla De Depreciacion</h3>
					</div> <!-- /widget-header -->
				<form method="post">
					<div class="widget-content">
						<div class="control-group">
							<div class="controls">
								<div class="accordion" id="accordion2">
									<!---------------------- Rubro ---------------------->
									<div class="accordion-group">
										<div class="accordion-heading">

												<a class="accordion-toggle">
													Consulta de Coeficientes
												</a>
											</div>
											<div class="accordion-body">
												<div class="accordion-inner">
													<style> .control-group {display: inline-block;} </style>

													<form method="post">
													<div class="control-group">
														<label class="control-label" for="fecha">Año Tabla XII</label>
														<div class="controls">
															<input class="form-control span3" type="number" name="fecha" value="<?php echo date("Y"); ?>">

															</select>

														</div> <!-- /controls -->
													</div> <!-- /control-group -->

													<div class="control-group">
														<label class="control-label" for="datao">Data Origen</label>
														<div class="controls">
															<input type="number" class="form-control span3" name="datao" value="<?php echo date("Y"); ?>">
														</div> <!-- /controls -->
													</div> <!-- /control-group -->

													<div class="control-group">
														<label class="control-label" for="categoria">Categoria</label>
														<div class="controls">
															<select class="form-control span3" name="categoria" required>
																<option value="0" selected disabled>Seleccione Categoria</option>
																<option value="A">A</option>
																<option value="B">B</option>
																<option value="C">C</option>
																<option value="D">D</option>
																<option value="E">E</option>
															</select>

														</div> <!-- /controls -->
													</div> <!-- /control-group -->
													<div class="control-group">
														<label class="control-label" for="estado">Estado</label>
														<div class="controls">
															<select class="form-control span3" name="estado" required>
																<option value="0" selected disabled>Seleccione Estado</option>
																<option value="B">Bueno</option>
																<option value="R">Regular</option>
																<option value="M">Malo</option>
															</select>
														</div> <!-- /controls -->
													</div> <!-- /control-group -->
													<div class="form-actions">
														<button class="btn" type="submit" name="buscar" value="buscar">Buscar</button>
													</div>

												</form>
												<table class="table table-bordered responsive-table">
													<thead>
                            <th>Año Tabla XII</th>
														<th>Data Origen</th>
														<th>Antiguedad</th>
														<th>Categoria</th>
														<th>Estado</th>
														<th>Coeficiente</th>
													</thead>
													<tbody>
														<?php

														if (isset($_POST['categoria']) && isset($_POST['estado'])){

															$data=$_POST['fecha']-$_POST['datao'];
															if ($data>=100) {
																	$fa='100';
															}elseif($data<=1){
                                $fa='1';
                              }
															else {
																	$fa=$data;
															}
															$filtroc="'%$_POST[categoria]%'";
															$filtroe="'%$_POST[estado]%'";
															$resultc=mysqli_query($conexion,"SELECT antiguedad,categoria,estCon,coef FROM coefdepreciacion WHERE antiguedad='$fa' AND categoria LIKE $filtroc AND estCon LIKE $filtroe");
														?>
														<tr>
                            <td><?php echo $_POST['fecha']; ?></td>
														<td><?php echo $_POST['datao']; ?></td>
														<?php
															while($cd = mysqli_fetch_array($resultc))
															{
																echo"<td>" .$cd['antiguedad']."</td>";
																echo"<td>" .$cd['categoria']."</td>";
																echo"<td>" .$cd['estCon']."</td>";
																echo"<td style='background-color:#00ba8b; color:white; text-align: center; font-weight: bold;'>". $cd['coef']. "</td>";
																echo"</tr>";
															}
														}
														?>
													</tbody>
												</table>

											</div>
										</div>
									</div>

								</div> <!-- /accordion -->
							</div> <!-- /controls -->
						</div> <!-- /control-group -->
					</div> <!-- /widget-content -->

				</div> <!-- /container -->
			</div> <!-- /main-inner -->
		</div> <!-- /main -->
		<?php
			include("pie.php");
		?>

	</body>

</html>
