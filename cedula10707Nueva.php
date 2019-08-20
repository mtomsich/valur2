<?php
		include("sesion.php");
	// muestra los datos de la obra ingresada y se carga cedula de acuerdo al tipo de obra elegida

		$pagina='cedula10707NuevaPHP';
		include("encabezado.php");
		include("seguridad.php");
		include("sql/insert.php");
		include("sql/consultas.php");

		$Fpartido="";
		$FcodPartido="";
		$Fpartida="";
		$Flocalidad="";
		$FcodigoPostal="";
		$Fdomicilio="";
		$FnroCalle="";
		$Fcuerpo="";
		$Fpiso="";
		$Fdpto="";
		$FesqCalle="";
		$FyCalle="";
		$Fcir="";
		$Fsec="";
		$Fcha="";
		$Fqui="";
		$Ffra="";
		$Fman="";
		$Fpar="";
		$Fsub="";
		$Fcdni="";
		$FctipoDni="";
		$FcnombreApellido="";

		// datos firmantes
		$FfnombreApellido="";

		// datos destinatario
		$FdnombreApellido="";

		 //profesional
		$FidProfesional="";

	?>
	<!DOCTYPE html>
	<html lang="es">
	<head>
		<script src="javascript/limitarcaracteres.js"></script>
		<script>
			function cargarDatos(element) {
				//window.location.href = "cedula10707Nueva.php?idobra=" + element.value;
				cargarDatos2(element);
				var xhttp;
      	xhttp = new XMLHttpRequest();
      	xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("reload").innerHTML = this.responseText;
          }
      	};
      	xhttp.open("POST", "selectPartidas.php", true);
      	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      	xhttp.send("idobra=" + element.value);
			}

			function cargarDatos2(element) {
				//window.location.href = "cedula10707Nueva.php?idobra=" + element.value;
				var xhttp;
      	xhttp = new XMLHttpRequest();
      	xhttp.onreadystatechange = function() {
        	if (this.readyState == 4 && this.status == 200) {
          	document.getElementById("reload2").innerHTML = this.responseText;
          }
      	};
      	xhttp.open("POST", "selectPartidas2.php", true);
      	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      	xhttp.send("idobra=" + element.value);
			}
			function cargarDatosObra(element) {
				//window.location.href = "cedula10707Nueva.php?idobra=" + element.value;
				var xhttp;
      	xhttp = new XMLHttpRequest();
      	xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("idobra").innerHTML = this.responseText;
						$('#idobra').selectpicker('refresh');
          }
      	};
      	xhttp.open("POST", "selectClientes.php", true);
      	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      	xhttp.send("idcliente=" + element.value);
			}
		</script>

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
							<div class="widget">
	  						<div class="widget-header">
	    						<i class="icon-user"></i>
	    						<h3>Datos de Obra</h3>
	  						</div> <!-- /widget-header -->

								<div class="widget-content">
	    						<form method="post">
										<div class="col-lg-1">
											<label for="partida">Partida:<b style="color:#FF0000";>*</b></label>
										</div>
										<div class="col-lg-9 text-left">
											<select onChange="cargarDatos(this);" id="idobra" name="obraSeleccionada" class="col-lg-12 selectpicker" data-size="5" data-live-search="true" required>
												<option value="">Seleccione partida</option>
												<?php
												while ($fila=mysqli_fetch_row($consultaObras)) {
													echo "<option value='".$fila['0']."'>".$fila['1']."-".$fila['2']."</option>";
												}
												?>
											</select>
										</div>
										<br><br>
										<div class="col-lg-2">
											<label for="cliente">Clientes <b>(opcional)</b>:</label>
										</div>
										<div class="col-lg-8 text-left">
											<select onChange="cargarDatosObra(this);" id="idCliente" name="clienteSeleccionado" class="col-lg-12 selectpicker" data-size="5" data-live-search="true" title="Seleccione nombre" >
												<option></option>
												<?php
												while ($fila=mysqli_fetch_assoc($consultaClientes)) {
													echo "<option value='".$fila['idCliente']."'>".$fila['cnombreApellido']."</option>";
												}
												?>
											</select>
										</div>

										<div id="reload">
											<div class="col-lg-4 text-left">
												<label>Direccion</label>
												<input class="form-control" type="text" value="<?php echo $Fdomicilio." ".$FnroCalle?>"disabled>
											</div>
											<div class="col-lg-4 text-left">
												<label>Entre esq. calle y </label>
												<input class="form-control" type="text" name="esqCalle" value="<?php echo $FesqCalle?>"disabled>
											</div>
											<div class="col-lg-4 text-left">
												<label>Calle</label>
												<input class="form-control" type="text" name="yCalle" value="<?php echo $FyCalle?>"disabled>
											</div>
	        						<div class="col-lg-4 text-left">
	          						<label>Partido</label>
	          						<input type="text" class="form-control " name="Clocalidad" id="lastname" value="<?php echo $Fpartido?>"disabled>
	        						</div>
	        						<div class="col-lg-2 text-left">
	          						<label>Codigo</label>
	          						<input class="form-control" type="text" value="<?php echo $FcodPartido?>"disabled>
	        						</div>
	        						<div class="col-lg-4 text-left">
	          						<label>Localidad</label>
	          						<input type="text" class="form-control " name="Clocalidad" id="lastname" value="<?php echo $Flocalidad?>"disabled>
	        						</div>
	        						<div class="col-lg-2 text-left">
	          						<label>Codigo Postal</label>
	          						<input class="form-control" type="text" name="cp" value="<?php echo $FcodigoPostal?>"disabled>
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
															<input type="text" class="form-control" name="man" value="<?php echo $Fman?>" disabled>
														</td>
	              						<td>
															<input type="text" class="form-control" name="par" value="<?php echo $Fpar?>" disabled>
														</td>
	           							</tr>
	          						</tbody>
	        						</table>
										</div>
	  						</div> <!-- /widget-content -->
							</div> <!-- /widget -->
						</div>
						<div class="span12">
							<div class="widget ">
								<div class="widget-header">
									<i class="icon-user"></i>
									<h3>Ficha Cedula 10.707</h3>
								</div> <!-- /widget-header -->
									<div class="widget-content ">
										<div class="accordion">
										<!-- Áreas -->
											<div class="accordion-group">
											<!-- Área -->
												<div class="accordion-heading area">
													<a class="accordion-toggle" data-toggle="collapse" href="#area1">Datos para Formularios</a>
												</div><!-- /Área -->
												<div class="accordion-body collapse in"  id="area1">
													<div class="accordion-inner">
														<fieldset>
															<div class="col-lg-3 text-left">
																<label>Fecha Impresion</label>
																<input class="form-control" type="date" name="fechaImp" id="fechaImp" value="<?php echo getdate()?>">
															</div>
															<div class="col-lg-6 text-left">
																<label>Lugar:</label>
																<input class="form-control" type="text" name="lugar" id="lugar">
															</div>
															<div class="col-lg-3 text-left"> <!-- Años del 2018 para atras-->
																<label>Año Tabla:</label>
																<input class="form-control" type="number" name="anioImp" id="anioImp" value="<?php echo date("Y"); ?>">
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
												<div class="accordion-body collapse"  id="area5">
													<div class="accordion-inner">
														<fieldset>
															<legend>4- Parcela Dominal</legend>
																<div class="col-lg-4 text-left">
																	<label>Desc Titulo/Plano</label>
																	<select class="form-control" name="desct">
																		<option>Titulo</option>
																		<option>Plano</option>
																	</select>
																</div>
																<div class="col-lg-2 text-left">
																	<label>Caract.:</label>
																	<input class="form-control" type="text" name="caract">
																</div>
																<div class="col-lg-2 text-left">
																	<label>Part.:</label>
																	<input class="form-control" type="text" name="part">
																</div>
																<div class="col-lg-2 text-left">
																	<label>Orden:</label>
																	<input class="form-control" type="text" name="orden">
																</div>
																<div class="col-lg-2 text-left">
																	<label>Año:</label>
																	<input class="form-control" type="number" name="anio" id="anio" value="<?php echo date("Y"); ?>">
																</div>
																<div class="col-lg-12 text-left">
																	<label>Designacion del bien:</label>
																	<textarea class="form-control" rows="1" type="text" name="designacion"></textarea>
																</div>
																<div class="col-lg-12 text-left">
																	<label>Medidas, Linderos y Superfice: Segun Titulo</label>
																	<textarea id="AInput" class="form-control" rows="5" type="text" name="medidasPd" onkeypress="return limitar(this,event, 730);" onkeyup="actualizarInfo(this,730)" maxlength="730"></textarea>
																	<div class="col-lg-10 text-right">Cantidad De Caracteres Restantes</div>
																	<div id="AResultado" class="col-lg-2 text-right" style="background-color:#00ba8b;color:white;">730</div>
																</div>
														</fieldset>
														<fieldset>
															<legend>5- Parcela Catrastal</legend>
																<div class="col-lg-12 text-left">
																	<label>Medidas, Linderos y Superfice: Segun Titulo</label>
																	<textarea id="BInput" class="form-control" rows="4" type="text" name="medidasPc" onkeypress="return limitar(this,event, 730);" onkeyup="actualizarInfo(this,730)" maxlength="730"></textarea>
																	<div class="col-lg-10 text-right">Cantidad De Caracteres Restantes</div>
																	<div id="BResultado" class="col-lg-2 text-right" style="background-color:#00ba8b;color:white;">730</div>
																</div>
															</fieldset>
															<fieldset>
																<legend>6- Restricciones y Afecciones</legend>
																	<div class="col-lg-12 text-left">
																		<textarea id="CInput" class="form-control" rows="3" type="text" name="medidasRA" onkeypress="return limitar(this,event, 730);" onkeyup="actualizarInfo(this,730)" maxlength="730"></textarea>
																		<div class="col-lg-10 text-right">Cantidad De Caracteres Restantes</div>
																		<div id="CResultado" class="col-lg-2 text-right" style="background-color:#00ba8b;color:white;">730</div>
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
																						<select class="form-control" name="inscriptipo1">
																							<option></option>
																							<option>DH</option>
																							<option>FOL</option>
																							<option>INS</option>
																							<option>LEG</option>
																							<option>MAT</option>
																						</select>
																					</td>
																					<td>
																						<input type="number" class="form-control" name="inscripnro1">
																					</td>
																					<td>
																						<input type="number" class="form-control" name="inscripanio1">
																					</td>
																				</tr>
																				<tr>
																					<td>
																						<select class="form-control" name="inscriptipo2">
																							<option></option>
																							<option>DH</option>
																							<option>FOL</option>
																							<option>INS</option>
																							<option>LEG</option>
																							<option>MAT</option>
																						</select>
																					</td>
																					<td>
																						<input type="number" class="form-control" name="inscripnro2" value="">
																					</td>
																					<td>
																						<input type="number" class="form-control" name="inscripanio2" value="">
																					</td>
																				</tr>
																				<tr>
																					<td>
																						<select class="form-control" name="inscriptipo3">
																							<option></option>
																							<option>DH</option>
																							<option>FOL</option>
																							<option>INS</option>
																							<option>LEG</option>
																							<option>MAT</option>
																						</select>
																					</td>
																					<td>
																						<input type="number" class="form-control" name="inscripnro3" value="">
																					</td>
																					<td>
																						<input type="number" class="form-control" name="inscripanio3" value="">
																					</td>
																				</tr>
																				<tr>
																					<td>
																						<select class="form-control" name="inscriptipo4">
																							<option></option>
																							<option>DH</option>
																							<option>FOL</option>
																							<option>INS</option>
																							<option>LEG</option>
																							<option>MAT</option>
																						</select>
																					</td>
																					<td>
																						<input type="number" class="form-control" name="inscripnro4" value="">
																					</td>
																					<td>
																						<input type="number" class="form-control" name="inscripanio4" value="">
																					</td>
																				</tr>
																				<tr>
																					<td>
																						<select class="form-control" name="inscriptipo5">
																							<option></option>
																							<option>DH</option>
																							<option>FOL</option>
																							<option>INS</option>
																							<option>LEG</option>
																							<option>MAT</option>
																						</select>
																					</td>
																					<td>
																						<input type="number" class="form-control" name="inscripnro5" value="">
																					</td>
																					<td>
																						<input type="number" class="form-control" name="inscripanio5" value="">
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
																		<input class="form-control" type="text" name="planosAntA">
																	</div>
																	<div class="col-lg-4 text-left">
																		<label></label>
																		<input class="form-control" type="text" name="planosAntB">
																	</div>
																	<div class="col-lg-4 text-left">
																		<label></label>
																		<input class="form-control" type="text" name="planosAntC">
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
																<table class=" responsive-table" id=reload2>
																	<tbody>
																		<tr>
																			<td class='col-sm-1'><input type="text" class="form-control" name="edificioA" value="<?php echo $FcodPartido?>"></td>
																			<td class='col-sm-2'><input type="text" class="form-control" name="edificioB" value="<?php echo $Fpartida?>"></td>
																			<td class='col-sm-1'><input type="text" class="form-control" name="edificioC" value=""></td>
																			<td class='col-sm-2'><input type="text" class="form-control" name="edificioD" value=""></td>
																			<td class='col-sm-1'><input type="text" class="form-control" name="edificioE" value=""></td>
																			<td class='col-sm-2'><input type="text" class="form-control" name="edificioF" value=""></td>
																			<td class='col-sm-1'><input type="text" class="form-control" name="edificioG" value=""></td>
																			<td class='col-sm-2'><input type="text" class="form-control" name="edificioH" value=""></td>
																			<td class='col-sm-1'><input type="text" class="form-control" name="edificioI" value=""></td>
																			<td class='col-sm-2'><input type="text" class="form-control" name="edificioJ" value=""></td>
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
																				<input type="text" class="form-control" name="tierra" id="tierra" onkeyup="calcularSuma();" value="0">
																			</td>
																			<td>
																				<input type="text" class="form-control" name="edificio" id="edificio" onkeyup="calcularSuma();"  value="0">
																			</td>
																			<td>
																				<input type="text" class="form-control" name="mejora" id="mejora" onkeyup="calcularSuma();" value="0">
																			</td>
																			<td>
																				<input type="text" class="form-control" name="total" id="total" onkeyup="calcularSuma();" value="" disabled>
																			</td>
																		</tr>
																	</table>
																</div>
														</fieldset>
														<fieldset>
															<legend>14- Observaciones</legend>
																<div class="col-lg-12 text-left">
																	<textarea id="DInput"class="form-control" rows="4" type="text" name="medidasO" onkeypress="return limitar(this,event, 300);" onkeyup="actualizarInfo(this,300)"></textarea>
																	<div class="col-lg-10 text-right">Cantidad De Caracteres Restantes</div>
																	<div id="DResultado" class="col-lg-2 text-right" style="background-color:#00ba8b;color:white;">300</div>
																</div>
																<div class="col-lg-3">
																	<label>Valores de la/s hoja/s de la Cedula</label>
																</div>
																<div class="col-lg-4">
																	<div class="col-lg-2 text-left"><label>Hoja:</label></div>
																	<div class="col-lg-4 text-left"><input class="form-control" type="number" name="hoja" maxlength="2" value="1"></div>
																	<div class="col-lg-2 text-left"><label>De:</label></div>
																	<div class="col-lg-4 text-left"><input class="form-control" type="number" name="cantHoja" maxlength="2" value="1"></div>
																</div>
														</fieldset>
														<!-- Estos rubros estan comentados porque los completa arba, los valores en el insert se introducieron en vacio
														<fieldset>
															<legend>15- Monto Imponible</legend>
																<div class="col-lg-4 text-left">
																	<label>Impuesto Inmobiiliario</label>
																	<input class="form-control" type="text" name="impInm" >
																</div>
																<div class="col-lg-4 text-left">
																	<label>Impuesto de Sellos</label>
																	<input class="form-control" type="text" name="impSel" >
																</div>
																<div class="col-lg-4 text-left">
																	<label>Otros</label>
																	<input class="form-control" type="text" name="otrosph" >
																</div>
																</fieldset>
																<fieldset>
																	<legend>16- Caracteristicas Tributarias</legend>
																		<div class="col-lg-4 text-left">
																			<label>Codigo</label>
																			<input class="form-control" type="text" name="cod" >
																		</div>
																		<div class="col-lg-4 text-left">
																			<label>Efectividad Mes</label>
																			<input class="form-control" type="number" name="efeMes" value="<?php echo date("m"); ?>">
																		</div>
																		<div class="col-lg-4 text-left">
																			<label>Efectividad Año</label>
																			<input class="form-control" type="number" name="efeAnio" value="<?php echo date("Y"); ?>">
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
																<textarea class="form-control" rows="6" type="text" name="anexo"></textarea>
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
												<div class="accordion-body collapse" id="area4">
													<div class="accordion-inner">
														<fieldset>
															<div class="col-lg-12 text-left">
																<textarea class="form-control" rows="6" type="text" name="ampAnexo"></textarea>
															</div>
														</fieldset>
													</div>
												</div>
											</div>
										</div>

											<button type="submit" class="btn btn-primary" name="insertar">Guardar</button>
											<button type="button" class="btn" onclick="window.location='obraBuscar.php';" name="cerrar">Cancelar</button>
											<?php
												if (isset($_POST['insertar'])){
													$idobra= $_POST['obraSeleccionada'];

													$total= $_POST['edificio'] + $_POST['mejora'] + $_POST['tierra'];

													$sql= insertCedula707($idobra,$_POST['fechaImp'],$_POST['lugar'],$_POST['anioImp'],
													 	$_POST['desct'],$_POST['caract'], $_POST['part'], $_POST['orden'],
														$_POST['anio'], $_POST['designacion'], $_POST['medidasPd'], $_POST['medidasPc'],
														$_POST['medidasRA'],$_POST['inscriptipo1'], $_POST['inscripnro1'], $_POST['inscripanio1'],
														$_POST['inscriptipo2'], $_POST['inscripnro2'], $_POST['inscripanio2'], $_POST['inscriptipo3'],
														$_POST['inscripnro3'], $_POST['inscripanio3'], $_POST['inscriptipo4'], $_POST['inscripnro4'],
														$_POST['inscripanio4'],$_POST['inscriptipo5'], $_POST['inscripnro5'], $_POST['inscripanio5'], $_POST['planosAntA'], $_POST['planosAntB'], $_POST['planosAntC'],
														$_POST['edificioA'], $_POST['edificioB'], $_POST['edificioC'],
														$_POST['edificioD'], $_POST['edificioE'], $_POST['edificioF'], $_POST['edificioG'],
														$_POST['edificioH'], $_POST['edificioI'], $_POST['edificioJ'], $_POST['edificio'],
														$_POST['mejora'], $_POST['tierra'], $total, $_POST['medidasO'],'',
														'', '','','', '', $_POST['hoja'],$_POST['cantHoja'],$_POST['anexo'],$_POST['ampAnexo'] );

														mysqli_query($conexion,$sql) or die("Problemas en el alta ".mysqli_error($conexion));

														echo "<script language='javascript'>";
								  					echo "alert('La cedula 10707 fue creada');";
														echo "window.location='cedula10707Buscar.php';";
														echo "</script>";

													}
													if (isset($_POST['cerrar'])){
														echo "<script language='javascript'>";
														echo "window.location='cedula10707Buscar.php';";
														echo "</script>";
													}
												?>
									</form>
								</div>
								<!-- /widget-content -->
							</div>
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
