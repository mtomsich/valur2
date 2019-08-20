<?php
include("sesion.php");
$pagina='cedulaDEModificarPHP';
include("encabezado.php");
include("seguridad.php");
$idCedula=$_REQUEST['idCedulaDE'];
include("sql/mostrarCedulaDE.php");
include("sql/mostrarDatosObra.php");
include("sql/update.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<script src="javascript/limitarcaracteres.js"></script>
	<script>

	//Calculo Cedula DE
	function calcularUnidadFuncional(string) {
		var elemento = string.id.slice(0, -1);
		var cub = document.getElementById(elemento + "1");
		var scub = document.getElementById(elemento + "2");
		var des = document.getElementById(elemento + "3");
		var total = document.getElementById(elemento + "tot");

		if(isNaN(cub.value) || isNaN(scub.value) || isNaN(des.value))
			return;

		total.value = (parseInt(cub.value) || 0) + (parseInt(scub.value) || 0) + (parseInt(des.value) || 0);

		calcularTotales(string.id.substr(string.id.length - 1));
	}

	function calcularTotales(elemento) {
		var cub = document.getElementById("baja" + elemento);
		var scub = document.getElementById("primer" + elemento);
		var des = document.getElementById("segun" + elemento);
		var total = document.getElementById("tot" + elemento);


		if(isNaN(cub.value) || isNaN(scub.value) || isNaN(des.value))
			return;

		var totemp = (parseInt(cub.value) || 0) + (parseInt(scub.value) || 0) + (parseInt(des.value) || 0);

		total.value = totemp;

		calcularFinal();
	}

	function calcularFinal() {
		var total1 = document.getElementById("tot1");
		var total2 = document.getElementById("tot2");
		var total3 = document.getElementById("tot3");
		var totalP = document.getElementById("ttotalPolig");
		var totalF = document.getElementById("ttotalFunc");
		var totalPF = document.getElementById("primertotfun");

		if(isNaN(total1.value) || isNaN(total2.value) || isNaN(total3.value))
			return;

		var total = (parseInt(total1.value) || 0) + (parseInt(total2.value) || 0) + (parseInt(total3.value) || 0);

		totalP.value = total;
		totalF.value = total;
		totalPF.value = total;
	}
</script>
</head>
<body>
	<div class="main">
		<div class="main-inner">
			<div class="container">
				<div class="row">
					<div class="span12">
						<div class="widget">
							<div class="widget-header">
								<i class="icon-user"></i>
								<h3>Ficha Cedula DE 947</h3>
							</div>
							<!-- /widget-header -->
							<div class="widget-content">
								<form method="post">
									<div class="menu">
										<div class="accordion">
											<!-- Áreas -->
											<div class="accordion-group">
												<!-- Área -->
												<div class="accordion-heading area">
													<a class="accordion-toggle" data-toggle="collapse" href="#area1">Anverso</a>
												</div>
												<!-- /Área -->
												<div class="accordion-body collapse in" id="area1">
													<div class="accordion-inner">
														<fieldset>
															<legend>4- Descripcion del Inmueble</legend>
															<div class="col-lg-1">
																<label>PH</label>
																<input type="checkbox" name="ph" <?php a($Fph);?>
															</div>
															<div class="col-lg-2 text-left">
																<label>Numero</label>
																<input class="form-control" type="number" name="nro" value="<?php echo $Fnro; ?>">
															</div>
															<div class="col-lg-2 text-left">
																<label>Año</label>
																<input class="form-control" type="number" name="anio" value="<?php echo $Fanio; ?>">
															</div>
															<div class="col-lg-3 text-left">
																<label>F Aprobacion</label>
																<input class="form-control" type="date" name="fechaAprob" value="<?php echo $FfechaAprob; ?>">
															</div>
															<div class="col-lg-1">
																<label>Construida</label>
																<input type="checkbox" name="con" <?php a($FCon); ?>
															</div>
															<table class="table table-bordered responsive-table">
																<thead>
																	<tr>
																		<th class='col-sm-1'>Unidad Func</th>
																		<th class='col-sm-2'>Poligonos</th>
																		<th class='col-sm-2'>Plantas</th>
																		<th class='col-sm-1'>Sup. Cubierta</th>
																		<th class='col-sm-1'>Sup. SemiCub</th>
																		<th class='col-sm-1'>Sup. Descubierta</th>
																		<th class='col-sm-1'>Total Poligono</th>
																		<th class='col-sm-1'>Total Unidad</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td rowspan="4">
																			<input type="number" class="form-control" name="uf" value="<?php echo $Fuf; ?>" >
																		</td>
																		<td rowspan="4">
																			<input type="number" class="form-control" name="pol" value="<?php echo $Fpol; ?>" >
																		</td>
																		<td>Baja</td>
																		<td>
																			<input type="number" class="form-control" name="bcub" id="baja1" oninput="calcularUnidadFuncional(this);" value="<?php echo $Fbcub; ?>" >
																		</td>
																		<td>
																			<input type="number" class="form-control" name="bscub" id="baja2" oninput="calcularUnidadFuncional(this);" value="<?php echo $Fbscub; ?>">
																		</td>
																		<td>
																			<input type="number" class="form-control" name="bdes" id="baja3" oninput="calcularUnidadFuncional(this);" value="<?php echo $Fbdes; ?>">
																		</td>
																		<td>
																			<input type="text" class="form-control" name="" id="bajatot" value="<?php echo $FbtotalPolig; ?>" readonly>
																		</td>

																	</tr>
																	<tr>
																		<td>1er Piso</td>
																		<td>
																			<input type="number" class="form-control" name="1pcub" id="primer1" oninput="calcularUnidadFuncional(this);" value="<?php echo $FunPcub; ?>">
																		</td>
																		<td>
																			<input type="number" class="form-control" name="1pscu" id="primer2" oninput="calcularUnidadFuncional(this);" value="<?php echo $FunPscub; ?>">
																		</td>
																		<td>
																			<input type="number" class="form-control" name="1pdes" id="primer3" oninput="calcularUnidadFuncional(this);" value="<?php echo $FunPdes; ?>">
																		</td>
																		<td>
																			<input type="text" class="form-control" name="1ptotalPolig" id="primertot" value="<?php echo $FtotalFunc; ?>" disabled>
																		</td>
																		<td>
																			<input type="text" class="form-control" name="totalFunc" id="primertotfun" value="<?php echo $FtotalFunc; ?>" disabled>
																		</td>
																	</tr>
																	<tr>
																		<td>2do Piso</td>
																		<td>
																			<input type="number" class="form-control" name="2pcub" id ="segun1" oninput="calcularUnidadFuncional(this);" value="<?php echo $FdosPcub; ?>">
																		</td>
																		<td>
																			<input type="number" class="form-control" name="2pscu" id="segun2" oninput="calcularUnidadFuncional(this);" value="<?php echo $FdosPscub; ?>">
																		</td>
																		<td>
																			<input type="number" class="form-control" name="2pdes" id="segun3" oninput="calcularUnidadFuncional(this);"value="<?php echo $FvdosPpdes; ?>">
																		</td>
																		<td>
																			<input type="text" class="form-control" name="2ptotalPolig" id="seguntot" value="<?php echo $FdosPtotalPolig; ?>" disabled>
																		</td>
																	</tr>
																	<tr>
																		<td>Totales</td>
																		<td>
																			<input type="text" class="form-control" name="tscu" id="tot1" value="<?php echo $Ftcub; ?>" disabled>
																		</td>
																		<td>
																			<input type="text" class="form-control" name="tcub" id="tot2" value="<?php echo $Ftscu; ?>" disabled>
																		</td>
																		<td>
																			<input type="text" class="form-control" name="tdes" id="tot3" value="<?php echo $Ftdes; ?>" disabled>
																		</td>
																		<td>
																			<input type="text" class="form-control" name="ttotalPolig" id="ttotalPolig" value="<?php echo $FttotalPolig; ?>" disabled>
																		</td>
																		<td>
																			<input type="text" class="form-control" name="ttotalFunc" id="ttotalFunc" value="<?php echo $FttotalFunc; ?>" disabled>
																		</td>
																	</tr>
																</tbody>
															</table>
														</fieldset>
														<fieldset>
															<legend>5- Restricciones y Afecciones</legend>
															<div class="col-lg-12 text-left">
																<textarea id="DMedidasRAInput" class="form-control" rows="4" type="text" name="medidasRA" onkeypress="return limitar(this,event, 500);" onkeyup="actualizarInfo(this,500)"  maxlength="500"><?php echo $FmedidasRa?></textarea>
																<div class="col-lg-10 text-right">Cantidad De Caracteres Restantes</div>
																<div id="DMedidasRAResultado" class="col-lg-2 text-right" style="background-color:#00ba8b;color:white;">
																	<?php
																	$Num = 500;
																	if ($FmedidasRa !=""){
																		$A= $Num-strlen($FmedidasRa);
																		echo $A;
																	}else{
																		echo "500";
																	}
																	?>
															</div>
														</fieldset>
														<fieldset>
															<legend>7- Valuacion basica de las Subparcela</legend>
															<div class="col-lg-12 text-left">
																<table class="table table-bordered responsive-table">
																	<thead>
																		<tr>
																			<th class='col-sm-2'><center>Valor</center></th>
																			<th colspan="3"><center>Edificio</center></th>
																			<th class='cols-sm-2'><center> Valor </center></th>
																		</tr>
																	</thead>
																	<tbody>
																		<tr>
																			<td>
																				<center>Tierra </center>
																			</td>
																			<td>Valor Propio</td>
																			<td>Valor Comun</td>
																			<td>Total </td>
																			<td>
																				<center>Total </center>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<input type="number" class="form-control" name="tierra" value="<?php echo $Ftierra; ?>">
																			</td>
																			<td>
																				<input type="number" class="form-control" name="vpropio" value="<?php echo $Fvpropio; ?>">
																			</td>
																			<td>
																				<input type="number" class="form-control"name="vcomun" value="<?php echo $Fvcomun; ?>">
																			</td>
																			<td>
																				<input type="text" class="form-control" name="totalEdificio" value="<?php echo $FtotalEdificio; ?>" disabled>
																			</td>
																			<td>
																				<input class="form-control" type="text" name="suma" value="<?php echo $Fsuma; ?>" disabled>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</fieldset>
														<fieldset>
															<legend>8- Observaciones para el Profesional</legend>
															<div class="col-lg-12 text-left">
																<textarea id="MedidasOpInput" class="form-control" rows="2" type="text" name="medidasOp" onkeypress="return limitar(this,event, 250);" onkeyup="actualizarInfo(this,250)" maxlength="250"><?php echo $FmedidasOp?></textarea>
																<div class="col-lg-10 text-right">Cantidad De Caracteres Restantes</div>
																<div id="MedidasOpResultado" class="col-lg-2 text-right" style="background-color:#00ba8b;color:white;">
																	<?php
																	$Num = 250;
																	if ($FmedidasOp !=""){
																		$A= $Num-strlen($FmedidasOp);
																		echo $A;
																	}else{
																		echo "250";
																	}
																	?>
															</div>
															<div class="col-lg-3 text-left">
																<label>Destino</label>
																<input class="form-control" type="text" name="destino" value="<?php echo $Fdestino ?>">
															</div>
														</fieldset>
														<!-- Estos rubros estan comentados porque los completa arba, los valores en el insert se introducieron en vacio
														<fieldset>
															<legend>9- Monto Imponible</legend>
															<div class="col-lg-4 text-left">
																<label>Impuesto Inmobiiliario</label>
																<input class="form-control" type="text" name="impInm" value="<?php echo $FimpInm ?>" disabled>
															</div>
															<div class="col-lg-4 text-left">
																<label>Impuesto de Sellos</label>
																<input class="form-control" type="text" name="impSel" value="<?php echo $FimpSel ?>" disabled>
															</div>
															<div class="col-lg-4 text-left">
																<label>Otros</label>
																<input class="form-control" type="text" name="otros" value="<?php echo $Fotros ?>" disabled>
															</div>
														</fieldset>
														<fieldset>
															<legend>10- Caracteristicas Tributarias</legend>
															<div class="col-lg-4 text-left">
																<label>Codigo</label>
																<input class="form-control" type="text" name="cod" value="<?php echo $Fcod ?>" disabled>
															</div>
															<div class="col-lg-4 text-left">
																<label>Efectividad Mes</label>
																<input class="form-control" type="text" name="efeMes" value="<?php echo $FefeMes ?>" disabled>
															</div>
															<div class="col-lg-4 text-left">
																<label>Efectividad Año</label>
																<input class="form-control" type="text" name="efeAnio" value="<?php echo $FefeAnio ?>" disabled>
															</div>
														</fieldset>
														<fieldset>
															<legend>11- Observaciones</legend>
															<div class="col-lg-12 text-left">
																<label>Lugar y Fecha de la Expedicion</label>
																<textarea class="form-control" rows="2" type="text" name="medidasOb" disabled><?php echo $FmedidasOb ?></textarea>
															</div>
														</fieldset>
														-->
													</div>
												</div>
											</div>
											<div class="accordion-group">
												<!-- Área -->
												<div class="accordion-heading area">
													<a class="accordion-toggle" data-toggle="collapse" href="#area3">Anexo de Cedula</a>
												</div>
												<!-- /Área -->
												<div class="accordion-body collapse" id="area3">
													<div class="accordion-inner">
														<fieldset>
															<div class="col-lg-12 text-left">
																<textarea class="form-control" rows="6" type="text" name="anexo"><?php echo $Fanexo; ?></textarea>
															</div>
														</fieldset>
													</div>
												</div>
											</div>
											<div class="accordion-group">
												<!-- Área -->
												<div class="accordion-heading area">
													<a class="accordion-toggle" data-toggle="collapse" href="#area4">Ampliacion Anexo</a>
												</div>
												<!-- /Área -->
												<div class="accordion-body collapse"  id="area4">
													<div class="accordion-inner">
														<fieldset>
															<div class="col-lg-12 text-left">
																<textarea class="form-control" rows="6" type="text" name="ampAnexo"><?php echo $FampAnexo; ?></textarea>
															</div>
														</fieldset>
													</div>
												</div>
											</div>
										</div>
										<button type="submit" class="btn btn-primary" name="actualizar">Actualizar</button>
										<button class="btn" onclick="window.location='obraBuscar.php';" name="cerrar">Cancelar</button>

										<?php

										if (isset($_POST['actualizar'])){
											//modifica la cedula de todas las unidades funcionaels

											if(isset($_POST['ph'])) {
												$ph = 1;
											} else {
												$ph = 0;
											}

											if(isset($_POST['con'])) {
												$con = 1;
											} else {
												$con = 0;
											}
											$btotalPolig = $_POST['bcub']+$_POST['bscub']+$_POST['bdes'];
											$primptotalPolig = $_POST['1pcub'] + $_POST['1pscu'] + $_POST['1pdes'];
											$totalFunc =  $_POST['bcub']+$_POST['bscub']+$_POST['bdes'] + $_POST['1pcub'] + $_POST['1pscu'] + $_POST['1pdes'] + $_POST['2pcub'] + $_POST['2pscu'] + $_POST['2pdes'];
											$segptotalPolig = $_POST['2pcub'] + $_POST['2pscu'] + $_POST['2pdes'];
											$ttotalPolig = $_POST['bcub']+$_POST['bscub']+$_POST['bdes'] + $_POST['1pcub'] + $_POST['1pscu'] + $_POST['1pdes'] + $_POST['2pcub'] + $_POST['2pscu'] + $_POST['2pdes'];
											$ttotalFunc =  $_POST['bcub']+$_POST['bscub']+$_POST['bdes'] + $_POST['1pcub'] + $_POST['1pscu'] + $_POST['1pdes'] + $_POST['2pcub'] + $_POST['2pscu'] + $_POST['2pdes'];

											$totalEdificio = $_POST['vpropio'] +	$_POST['vcomun'];
											$suma = $_POST['tierra'] + $_POST['vpropio'] +	$_POST['vcomun'];
											$tcub = $_POST['bcub'] + $_POST['1pcub'] + $_POST['2pcub'];
											$tscu = $_POST['bscub'] + $_POST['1pscu'] + $_POST['2pscu'];
											$tdes = $_POST['bdes'] + $_POST['1pdes'] + $_POST['2pdes'];

											$queryDE = updateCedulaDE($idCedula,$ph,$_POST['nro'],$_POST['anio'],$_POST['fechaAprob'],$con,
											$_POST['uf'], $_POST['pol'], $_POST['bcub'],
											$_POST['bscub'], $_POST['bdes'], $btotalPolig, $_POST['1pcub'],
											$_POST['1pscu'], $_POST['1pdes'], $primptotalPolig, $totalFunc,
											$_POST['2pcub'], $_POST['2pscu'], $_POST['2pdes'], $segptotalPolig,
											$tcub, $tscu, $tdes, $ttotalPolig,
											$ttotalFunc,
											$_POST['medidasRA'],$_POST['tierra'], $_POST['vpropio'],
											$_POST['vcomun'], $totalEdificio,$suma,$_POST['destino'],
											$_POST['medidasOp'],$_POST['anexo'],$_POST['ampAnexo']);
											mysqli_query($conexion,$queryDE) or die("Problemas en el alta ".mysqli_error($conexion));

											echo "<script language='javascript'>";
											echo "alert('La cedula DE fue actualizada');";
											echo "window.location='cedulaDEBuscar.php';";
											echo "</script>";

										}
										?>
									</div>
									<!-- /widget-content -->
								</div>
								<!-- /widget -->
							</form>
						</div>
					</div>
					<!-- /row -->
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
