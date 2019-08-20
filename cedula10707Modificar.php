<?php
		include("sesion.php");
		$pagina='cedula10707ModificarPHP';
		include("encabezado.php");
		include("seguridad.php");
		$idCedula =$_REQUEST['idCedula707'];
		include("sql/mostrarDatosCedula10707.php");
		include("sql/mostrarDatosObra.php");
		include("sql/update.php");
	?>
	<!DOCTYPE html>
	<html lang="es">
	<head>
		<script src="javascript/limitarcaracteres.js"></script>

		<script>
			function calcularSuma(){
				var ed = document.getElementById("edificio");
				var me = document.getElementById("mejora");
				var ti = document.getElementById("tierra");
				var tot = document.getElementById("total");
				tot.value = (parseFloat(ed.value) + parseFloat(me.value) + parseFloat(ti.value));
			}
		</script>
	</head>

	<body>
		<div class="main">
			<div class="main-inner">
				<div class="container">
					<div class="row">
						<div class="span12">
							<div class="widget ">
							  <div class="widget-header">
							    <i class="icon-user"></i>
							    <h3>Datos de Obra</h3>
							  </div> <!-- /widget-header -->
							  <div class="widget-content">
							    <form method="post">
										<div class="col-lg-1">
											<label for="partida">Partida:</label>
											<input class="form-control" type="text" name="partida" value="<?php echo $Fpartida?>">
										</div>
										<div class="col-lg-4 text-left">
											<label>Cliente</label>
											<input class="form-control" type="text" value="<?php echo $FcnombreApellido?>"disabled>
										</div>
										<div class="col-lg-2 text-left">
											<label>Direccion</label>
											<input class="form-control" type="text" name="domicilio" value="<?php echo $Fdomicilio?>">
										</div>
										<div class="col-lg-1 text-left">
											<label>Nro</label>
											<input class="form-control" type="text" name="nroCalle" value="<?php echo $FnroCalle?>">
										</div>
										<div class="col-lg-2 text-left">
											<label>Entre esq. calle y </label>
											<input class="form-control" type="text" name="esqCalle" value="<?php echo $FesqCalle?>">
										</div>
										<div class="col-lg-2 text-left">
											<label>Calle</label>
											<input class="form-control" type="text" name="yCalle" value="<?php echo $FyCalle?>">
										</div>
										<div class="col-lg-4 text-left">
											<label>Partido</label>
											<input type="text" class="form-control " name="Clocalidad" id="lastname" value="<?php echo $Fpartido?>"disabled>
										</div>
										<div class="col-lg-2 text-left">
											<label>Cod </label>
											<input class="form-control " type="text" value="<?php echo $FcodPartido?>"disabled>
										</div>
										<div class="col-lg-4 text-left">
											<label>Localidad</label>
											<input type="text" class="form-control " name="Clocalidad" id="lastname" value="<?php echo $Flocalidad?>"disabled>
										</div>
										<div class="col-lg-2 text-left">
											<label>CP</label>
											<input class="form-control " type="text" name="cp" value="<?php echo $FcodigoPostal?>"disabled>
										</div>
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
							            </tr>
							          </thead>
							          <tbody>
							            <tr>
							              <td>
															<input type="text" class="form-control" name="cir" value="<?php echo $Fcir?>" disabled>
														</td>
							              <td>
															<input type="text" class="form-control" name="sec" value="<?php echo $Fsec?>" disabled>
														</td>
							              <td>
															<input type="text" class="form-control" name="cha" value="<?php echo $Fcha?>" disabled>
														</td>
							              <td>
															<input type="text" class="form-control" name="qui" value="<?php echo $Fqui?>" disabled>
														</td>
							              <td>
															<input type="text" class="form-control" name="fra" value="<?php echo $Ffra?>" disabled>
														</td>
							              <td>
															<input type="text" class="form-control" name="man" value="<?php echo $Fman?>" >
														</td>
							              <td>
															<input type="text" class="form-control" name="par" value="<?php echo $Fpar?>" >
														</td>
							           	</tr>
							          </tbody>
							        </table>
							 	</div>
								<!-- /widget-content -->
							</div>
							<!-- /widget -->
						</div>
						<div class="span12">
							<div class="widget">
								<div class="widget-header">
									<i class="icon-user"></i>
									<h3>Ficha Cedula 10.707</h3>
								</div>
								<!-- /widget-header -->
								<div class="widget-content ">
										<div class="accordion">
											<div class="accordion-group">
												<!-- Área -->
												<div class="accordion-heading area">
													<a class="accordion-toggle" data-toggle="collapse" href="#area1">Datos para Formularios</a>
												</div>
												<!-- /Área -->
												<div class="accordion-body collapse in"  id="area1">
													<div class="accordion-inner">
														<fieldset>
															<div class="col-lg-3 text-left">
																<label>Fecha Impresion</label>
																<input class="form-control" type="date" name="fechaImp" id="fechaImp" value="<?php echo $FfechaImp?>">
															</div>
															<div class="col-lg-6 text-left">
																<label>Lugar:</label>
																<input class="form-control" type="text" name="lugar" id="lugar" value="<?php echo $Flugar?>">
															</div>
															<div class="col-lg-3 text-left"> <!-- Años del 2018 para atras-->
																<label>Año Tabla:</label>
																<input class="form-control" type="number" name="anioImp" id="anioImp" value="<?php echo $FanioImp?>">
															</div>
														</fieldset>
													</div>
												</div>
											</div>
											<div class="accordion-group">
												<!-- Área -->
												<div class="accordion-heading area">
													<a class="accordion-toggle" data-toggle="collapse" href="#area5">Cedula Anversa</a>
												</div>
												<!-- /Área -->
												<div class="accordion-body collapse in"  id="area5">
													<div class="accordion-inner">
														<fieldset>
															<legend>4- Parcela Dominal</legend>
																<div class="col-lg-4 text-left">
																	<label>Desc</label>
																	<select class="form-control" name="desct">
																		<?php
 																		if ($Fdesct=="Titulo"){
																			echo "<option>Titulo</option>";
																			echo "<option>Plano</option>";
																		} else {
																			echo "<option>Plano</option>";
																			echo "<option>Titulo</option>";
																		}
																		?>
																	</select>
																</div>
																<div class="col-lg-2 text-left">
																	<label>Caract.:</label>
																	<input class="form-control" type="text" name="caract" value="<?php echo $Fcaract?>">
																</div>
																<div class="col-lg-2 text-left">
																	<label>Part.:</label>
																	<input class="form-control" type="text" name="part" value="<?php echo $Fpart?>">
																</div>
																<div class="col-lg-2 text-left">
																	<label>Orden:</label>
																	<input class="form-control" type="text" name="orden" value="<?php echo $Forden?>">
																</div>
																<div class="col-lg-2 text-left">
																	<label>Año:</label>
																	<input class="form-control" type="text" name="anio" value="<?php echo $Fanio?>">
																</div>
																<div class="col-lg-12 text-left">
																	<label>Designacion del bien:</label>
																	<textarea class="form-control" rows="1" type="text" name="designacion" ><?php echo $Fdesignacion?></textarea>
																</div>
																<div class="col-lg-12 text-left">
																	<label>Medidas, Linderos y Superfice: Segun Titulo</label>
																	<textarea id="AAInput" class="form-control" rows="5" type="text" name="medidasPd" onkeypress="return limitar(this,event, 730);" onkeyup="actualizarInfo(this,730)" maxlength="730"><?php echo $FmedidasPd?></textarea>
																	<div class="col-lg-10 text-right">Cantidad De Caracteres Restantes</div>
																	<div id="AAResultado" class="col-lg-2 text-right" style="background-color:#00ba8b;color:white;">
																		<?php
																		$Num = 732;
																		if ($FmedidasPd !=""){
																			$A= $Num-strlen($FmedidasPd);
																			echo $A;
																		}else{
																			echo "730";
																		}
																		?>
																	</div>
																</div>
														</fieldset>
														<fieldset>
															<legend>5- Parcela Catrastal</legend>
																<div class="col-lg-12 text-left">
																	<label>Medidas, Linderos y Superfice: Segun Titulo</label>
																	<textarea id="BBInput" class="form-control" rows="4" type="text" name="medidasPc" onkeypress="return limitar(this,event, 730);" onkeyup="actualizarInfo(this,730)" maxlength="730"><?php echo $FmedidasPc?></textarea>
																	<div class="col-lg-10 text-right">Cantidad De Caracteres Restantes</div>
																	<div id="BBResultado" class="col-lg-2 text-right" style="background-color:#00ba8b;color:white;">
																		<?php if ($FmedidasPc !=""){
																			$A= $Num-strlen($FmedidasPc);
																			echo $A;
																		}else{
																			echo "730";
																		}
																		?>
																	</div>
																</div>
														</fieldset>
														<fieldset>
															<legend>6- Restricciones y Afecciones</legend>
																<div class="col-lg-12 text-left">
																	<textarea id="CCInput" class="form-control" rows="3" type="text" name="medidasRA" onkeypress="return limitar(this,event, 730);" onkeyup="actualizarInfo(this,730)" maxlength="730"><?php echo $FmedidasRA?></textarea>
																	<div class="col-lg-10 text-right">Cantidad De Caracteres Restantes</div>
																	<div id="CCResultado" class="col-lg-2 text-right" style="background-color:#00ba8b;color:white;">
																		<?php
																		if ($FmedidasRA !=""){
																			$A= $Num-strlen($FmedidasRA);
																			echo $A;
																		}else{
																			echo "730";
																		}
																		?>
																	</div>
																</div>
														</fieldset>
														<fieldset>
															<legend>7- Inscripcion</legend>
															<div class="col-lg-6 text-left">
																<table class="table table-bordered responsive-table">
																	<thead>
																		<tr>
																			<th class='col-sm-1'>Tipo</th>
																			<th class='col-sm-1'>Numero</th>
																			<th class='col-sm-1'>Año</th>
																		</tr>
																	</thead>
																	<tbody>
																		<tr>
																			<td>
																				<select class="form-control" name="inscriptipo1" >
																					<option><?php echo $Finscriptipo1?></option>
																					<option>DH</option>
																					<option>FOL</option>
																					<option>INS</option>
																					<option>LEG</option>
																					<option>MAT</option>
																				</select>
																			</td>
																			<td>
																				<input type="number" class="form-control" name="inscripnro1"  value="<?php echo $Finscripnro1?>">
																			</td>
																			<td>
																				<input type="number" class="form-control" name="inscripanio1" value="<?php echo $Finscripanio1?>">
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<select class="form-control" name="inscriptipo2" >
																					<option><?php echo $Finscriptipo2?></option>
																					<option>DH</option>
																					<option>FOL</option>
																					<option>INS</option>
																					<option>LEG</option>
																					<option>MAT</option>
																				</select>
																			</td>
																			<td>
																				<input type="number" class="form-control" name="inscripnro2" value="<?php echo $Finscripnro2?>">
																			</td>
																			<td>
																				<input type="number" class="form-control" name="inscripanio2" value="<?php echo $Finscripanio2?>">
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<select class="form-control" name="inscriptipo3" >
																					<option><?php echo $Finscriptipo3?></option>
																					<option>DH</option>
																					<option>FOL</option>
																					<option>INS</option>
																					<option>LEG</option>
																					<option>MAT</option>
																				</select>
																			</td>
																			<td>
																				<input type="number" class="form-control" name="inscripnro3"  value="<?php echo $Finscripnro3?>">
																			</td>
																			<td>
																				<input type="number" class="form-control" name="inscripanio3" value="<?php echo $Finscripanio3?>">
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<select class="form-control" name="inscriptipo4" >
																					<option><?php echo $Finscriptipo4?></option>
																					<option>DH</option>
																					<option>FOL</option>
																					<option>INS</option>
																					<option>LEG</option>
																					<option>MAT</option>
																				</select>
																			</td>
																			<td>
																				<input type="number" class="form-control" name="inscripnro4"  value="<?php echo $Finscripnro4?>">
																			</td>
																			<td>
																				<input type="number" class="form-control" name="inscripanio4" value="<?php echo $Finscripanio4?>">
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<select class="form-control" name="inscriptipo5" >
																					<option><?php echo $Finscriptipo5?></option>
																					<option>DH</option>
																					<option>FOL</option>
																					<option>INS</option>
																					<option>LEG</option>
																					<option>MAT</option>
																				</select>
																			</td>
																			<td>
																				<input type="number" class="form-control" name="inscripnro5"  value="<?php echo $Finscripnro5?>">
																			</td>
																			<td>
																				<input type="number" class="form-control" name="inscripanio5" value="<?php echo $Finscripanio5?>">
																			</td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</fieldset>
														<fieldset>
															<legend>8- Planos de Antecedentes</legend>
															<div class="col-lg-4 text-left">
																<label></label>
																<input class="form-control" type="text" name="planosAntA" value="<?php echo $FplanosAntA?>">
															</div>
															<div class="col-lg-4 text-left">
																<label></label>
																<input class="form-control" type="text" name="planosAntB" value="<?php echo $FplanosAntB?>">
															</div>
															<div class="col-lg-4 text-left">
																<label></label>
																<input class="form-control" type="text" name="planosAntC" value="<?php echo $FplanosAntC?>">
															</div>
														</fieldset>
													</div>
												</div>
											</div>
											<div class="accordion-group">
												<!-- Área -->
												<div class="accordion-heading area">
													<a class="accordion-toggle" data-toggle="collapse" href="#area6">Cedula Reversa</a>
												</div>
												<!-- /Área -->
												<div class="accordion-body collapse" id="area6">
													<div class="accordion-inner">
														<fieldset>
															<legend>12- Antecedentes de Empadronamiento</legend>
															<table class=" responsive-table">
																<tbody>
																	<tr>
																		<td class='col-sm-1'>
																			<input type="text" class="form-control" name="edificioA" value="<?php echo $FedificioA?>">
																		</td>
																		<td class='col-sm-2'>
																			<input type="text" class="form-control" name="edificioB" value="<?php echo $FedificioB?>">
																		</td>
																		<td class='col-sm-1'>
																			<input type="text" class="form-control" name="edificioC" value="<?php echo $FedificioC?>">
																		</td>
																		<td class='col-sm-2'>
																			<input type="text" class="form-control" name="edificioD" value="<?php echo $FedificioD?>">
																		</td>
																		<td class='col-sm-1'>
																			<input type="text" class="form-control" name="edificioE" value="<?php echo $FedificioE?>">
																		</td>
																		<td class='col-sm-2'>
																			<input type="text" class="form-control" name="edificioF" value="<?php echo $FedificioF?>">
																		</td>
																		<td class='col-sm-1'>
																			<input type="text" class="form-control" name="edificioG" value="<?php echo $FedificioG?>">
																		</td>
																		<td class='col-sm-2'>
																			<input type="text" class="form-control" name="edificioH" value="<?php echo $FedificioH?>">
																		</td>
																		<td class='col-sm-1'>
																			<input type="text" class="form-control" name="edificioI" value="<?php echo $FedificioI?>">
																		</td>
																		<td class='col-sm-2'>
																			<input type="text" class="form-control" name="edificioJ" value="<?php echo $FedificioJ?>">
																		</td>
																	</tr>
																</tbody>
															</table>
														</fieldset>
														<fieldset>
															<legend>13- Valuacion Basica</legend>
															<div class="col-lg-9 text-left">
																<table class="table table-bordered responsive-table">
																	<tr>
																		<td>Tierra</td>
																		<td>Edificio</td>
																		<td>Mejora/Comun</td>
																		<td>Total</td>
																	</tr>
																	<tr>
																		<td>
																			<input type="text" class="form-control" name="tierra" id="tierra" onkeyup="calcularSuma();" value="<?php echo $Ftierra?>">
																		</td>
																		<td>
																			<input type="text" class="form-control" name="edificio" id="edificio" onkeyup="calcularSuma();" value="<?php echo $Fedificio?>">
																		</td>
																		<td>
																			<input type="text" class="form-control" name="mejora" id="mejora" onkeyup="calcularSuma();" value="<?php echo $Fmejora?>">
																		</td>
																		<td>
																			<input type="text" class="form-control" name="total" id="total" onkeyup="calcularSuma();" value="<?php echo $Ftotal?>">
																		</td>
																	</tr>
																</table>
															</div>
														</fieldset>
														<fieldset>
															<legend>14- Observaciones</legend>
															<div class="col-lg-12 text-left">
																<textarea id="DDInput" class="form-control" rows="4" type="text" name="medidasO" onkeypress="return limitar(this,event, 300);" onkeyup="actualizarInfo(this,300)" maxlength="300"><?php echo $FmedidasO?></textarea>
																<div class="col-lg-10 text-right">Cantidad De Caracteres Restantes</div>
																<div id="DDResultado" class="col-lg-2 text-right" style="background-color:#00ba8b;color:white;">
																	<?php
																	if ($FmedidasO !=""){
																		$A= 300-intval(strlen($FmedidasO));
																		echo $A;
																	}else{
																		echo "300";
																	}
																	?>
																</div>
															</div>
															<div class="col-lg-3">
																<label>Valores de la/s hoja/s de la Cedula</label>
															</div>
															<div class="col-lg-4">
																<div class="col-lg-2 text-left"><label>Hoja:</label></div>
																<div class="col-lg-4 text-left"><input class="form-control" type="number" name="hoja" maxlength="2" value="<?php echo $Fhoja?>"></div>
																<div class="col-lg-2 text-left"><label>De:</label></div>
																<div class="col-lg-4 text-left"><input class="form-control" type="number" name="cantHoja" maxlength="2" value="<?php echo $FcantHoja?>"></div>
															</div>
														</fieldset>
														<!-- Estos rubros estan comentados porque los completa arba, los valores en el insert se introducieron en vacio
														<fieldset>
															<legend>15- Monto Imponible</legend>
																<div class="col-lg-4 text-left">
																	<label>Impuesto Inmobiiliario</label>
																	<input class="form-control" type="text" name="impInm" value="<?php echo $FimpInm?>">\
																</div>
																<div class="col-lg-4 text-left">
																	<label>Impuesto de Sellos</label>
																	<input class="form-control" type="text" name="impSel" value="<?php echo $FimpSel?>">
																</div>
																<div class="col-lg-4 text-left">
																	<label>Otros</label>
																	<input class="form-control" type="text" name="otrosph" value="<?php echo $Fotrosph?>">
																</div>
														</fieldset>
														<fieldset>
															<legend>16- Caracteristicas Tributarias</legend>
																<div class="col-lg-4 text-left">
																	<label>Codigo</label>
																	<input class="form-control" type="text" name="cod" value="<?php echo $Fcod?>">
																</div>
																<div class="col-lg-4 text-left">
																	<label>Efectividad Mes</label>
																	<input class="form-control" type="number" name="efeMes" value="<?php echo $FefeMes?>">
																</div>
																<div class="col-lg-4 text-left">
																	<label>Efectividad Año</label>
																	<input class="form-control" type="number" name="efeAnio" value="<?php echo $FefeAnio?>">
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
												<div class="accordion-body collapse"  id="area3">
													<div class="accordion-inner">
														<fieldset>
															<div class="col-lg-12 text-left">
																<textarea class="form-control" rows="6" type="text" name="anexo"><?php echo $Fanexo?></textarea>
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
																<textarea class="form-control" rows="6" type="text" name="ampAnexo"><?php echo $FampAnexo?></textarea>
															</div>
														</fieldset>
													</div>
												</div>
											</div>
										</div>
										<button type="submit" class="btn btn-primary" name="actualizar">Actualizar</button>
										<button type="button" class="btn" onclick="window.location='cedula10707Buscar.php';" name="cerrar">Cancelar</button>

										<?php
										if (isset($_POST['actualizar'])){

											if(isset($_POST['partida'])) {
												$FpartidaN = $_POST['partida'];
												$FmanN = $_POST['man'];
												$FparN = $_POST['par'];
												$Fdomicilio = $_POST['domicilio'];
												$FnroCalle = $_POST['nroCalle'];
												$FesqCalle = $_POST['esqCalle'];
												$FyCalle = $_POST['yCalle'];

												$sqlobra="UPDATE obras SET
												partida	='$FpartidaN',
												manzana ='$FmanN',
												parcela ='$FparN',
												calle='$Fdomicilio',
												nro='$FnroCalle',
												entreCalle='$FesqCalle',
												yCalle='$FyCalle'

												WHERE codObra='$idobra'";

												mysqli_query($conexion,$sqlobra) or die("Problemas en actualizacion con datos de obra ".mysqli_error($conexion));
											}

											$sql= updateCedula707($_POST['fechaImp'],$_POST['lugar'],$_POST['anioImp'],$_POST['desct'],
											$_POST['caract'], $_POST['part'], $_POST['orden'], $_POST['anio'], $_POST['designacion'],
											$_POST['medidasPd'], $_POST['medidasPc'],	$_POST['medidasRA'],
											$_POST['inscriptipo1'], $_POST['inscripnro1'], $_POST['inscripanio1'],
											$_POST['inscriptipo2'], $_POST['inscripnro2'], $_POST['inscripanio2'], $_POST['inscriptipo3'],
											$_POST['inscripnro3'], $_POST['inscripanio3'], $_POST['inscriptipo4'], $_POST['inscripnro4'],
											$_POST['inscripanio4'], $_POST['inscriptipo5'], $_POST['inscripnro5'], $_POST['inscripanio5'],
											$_POST['planosAntA'], $_POST['planosAntB'], $_POST['planosAntC'],
											$_POST['edificioA'], $_POST['edificioB'], $_POST['edificioC'],
											$_POST['edificioD'], $_POST['edificioE'], $_POST['edificioF'], $_POST['edificioG'],
											$_POST['edificioH'], $_POST['edificioI'], $_POST['edificioJ'], $_POST['edificio'],
											$_POST['mejora'], $_POST['tierra'], $_POST['total'], $_POST['medidasO'],'',
											'', '','', '', '',$_POST['hoja'],	$_POST['cantHoja'], $idCedula,$_POST['anexo'],$_POST['ampAnexo']);

											mysqli_query($conexion,$sql) or die("Problemas en el alta ".mysqli_error($conexion));

											echo "<script language='javascript'>";
											echo "alert('La cedula 10707 fue modificada');";
		   								echo "window.location='cedula10707Buscar.php';";
											echo "</script>";

										}
									?>
								</form>
							</div> <!-- /widget-content -->
						</div>
					</div> <!-- /row -->
				</div> <!-- /container -->
			</div> <!-- /main-inner -->
		</div> <!-- /main -->
		<?php
			include ("pie.php");
		?>
	</body>
</html>
