<?php
		include("sesion.php");
	// muestra los datos de la obra ingresada y se carga cedula de acuerdo al tipo de obra elegida
	$pagina='cedulaDENuevaPHP';
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
	<script src="javascript/limitarcaracteres.js"></script>
	<script>
		function cargarDatos(element) {
			//window.location.href = "cedula10707Nueva.php?idobra=" + element.value;
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
							  	</div>
									<!-- /widget-header -->
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
															echo "<option value='".$fila['0']."'>".$fila['1']."-".$fila['2'] ."</option>";
														}
														?>
												</select>
											</div>
											<br>
											<br>
											<div class="col-lg-2">
												<label for="cliente">Clientes <b>(opcional)</b>:</label>
											</div>
											<div class="col-lg-8 text-left">
												<select onChange="cargarDatosObra(this);" id="idCliente" name="clienteSeleccionado" class="col-lg-12 selectpicker" data-size="5" data-live-search="true" title="Seleccione nombre">
													<option></option>
													<?php
													while ($fila=mysqli_fetch_assoc($consultaClientes)) {
														echo "<option value='".$fila['idCliente']."'>".$fila['cnombreApellido'] ."</option>";
													}
													?>
												</select>
											</div>
											<div id="reload">
												<div class="col-lg-3 text-left">
													<label>Direccion</label>
													<input class="form-control" type="text" value="<?php echo $Fdomicilio." ".$FnroCalle ?>"disabled>
												</div>
							        	<div class="col-lg-2 text-left">
							          	<label>Partido</label>
							          	<input type="text" class="form-control span2 " name="Clocalidad" id="lastname" value="<?php echo $Fpartido?>"disabled>
							        	</div>
							        	<div class="col-lg-1 text-left">
							          	<label>Cod</label>
							          	<input class="form-control span1" type="text" value="<?php echo $FcodPartido ?>"disabled>
							        	</div>
							        	<div class="col-lg-3 text-left">
							          	<label>Localidad</label>
							          	<input type="text" class="form-control span3 " name="Clocalidad" id="lastname" value="<?php echo $Flocalidad ?>"disabled>
							        	</div>
							        	<div class="col-lg-1 text-left">
							          	<label>CP</label>
							          	<input class="form-control span1" type="text" name="cp" value="<?php echo $FcodigoPostal ?>"disabled>
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
																<input type="text" class="form-control" name="cir" value="<?php echo $Fcir ?>" disabled>
															</td>
							              	<td>
																<input type="text" class="form-control" name="sec" value="<?php echo $Fsec ?>" disabled>
															</td>
							              	<td>
																<input type="text" class="form-control" name="cha" value="<?php echo $Fcha ?>" disabled>
															</td>
							              	<td>
																<input type="text" class="form-control" name="qui" value="<?php echo $Fqui ?>" disabled>
															</td>
							              	<td>
																<input type="text" class="form-control" name="fra" value="<?php echo $Ffra ?>" disabled>
															</td>
							              	<td>
																<input type="text" class="form-control" name="man" value="<?php echo $Fman ?>" disabled>
															</td>
							              	<td>
																<input type="text" class="form-control" name="par" value="<?php echo $Fpar ?>" disabled>
															</td>
							           		</tr>
							          	</tbody>
							        	</table>
											</div>
							  	</div>
									<!-- /widget-content -->
								</div>
								<!-- /widget -->
							</div>

							<div class="span12">
								<div class="widget">
									<div class="widget-header">
										<i class="icon-user"></i>
										<h3>Ficha Cedula PH 947</h3>
									</div>
									<div class="widget-content">
										<div class="menu">
											<div class="accordion">
												<!-- Áreas -->
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
																	<input class="form-control" type="date" name="fechaImp" id="fechaImp" value="<?php echo getdate()?>">
																</div>
																<div class="col-lg-6 text-left">
																	<label>Lugar:</label>
																	<input class="form-control" type="text" name="lugar" id="lugar">
																</div>
																<div class="col-lg-3 text-left">
																	<!-- Años del 2018 para atras-->
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
														<a class="accordion-toggle" data-toggle="collapse" href="#area2">Anverso</a>
													</div>
													<!-- /Área -->
													<div class="accordion-body collapse in" id="area2">
														<div class="accordion-inner">
															<fieldset>
																<legend>4- Descripcion del Inmueble</legend>
																<div class="col-lg-1">
																	<label>PH</label>
																	<input type="checkbox" name="ph" value="1">
																</div>
																<div class="col-lg-2 text-left">
																	<label>Numero</label>
																	<input class="form-control" type="number" name="nro">
																</div>
																<div class="col-lg-2 text-left">
																	<label>Año</label>
																	<input class="form-control" type="number" name="anio" id="anio" value="<?php echo date("Y"); ?>">
																</div>
																<div class="col-lg-3 text-left">
																	<label>F Aprobacion</label>
																	<input class="form-control" type="date" name="fechaAprob">
																</div>
																<div class="col-lg-1">
																	<label>Construida</label>
																	<input type="checkbox" name="con" value="1">
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
																				<input type="number" class="form-control" name="uf" value="">
																			</td>
																			<td rowspan="4">
																				<input type="number" class="form-control" name="pol" value="">
																			</td>
																			<td>Baja</td>
																			<td>
																				<input type="number" class="form-control" name="bcub"  id="baja1" oninput="calcularUnidadFuncional(this);" value="">
																			</td>
																			<td>
																				<input type="number" class="form-control" name="bscub" id="baja2" oninput="calcularUnidadFuncional(this);" value="">
																			</td>
																			<td>
																				<input type="number" class="form-control" name="bdes" id="baja3" oninput="calcularUnidadFuncional(this);" value="">
																			</td>
																			<td>
																				<input type="text" class="form-control" name="btotalPolig" id="bajatot" value="" disabled>
																			</td>
																		</tr>
																		<tr>
																			<td>1er Piso</td>
																			<td>
																				<input type="number" class="form-control" name="1pcub" id="primer1" oninput="calcularUnidadFuncional(this);" value="">
																			</td>
																			<td>
																				<input type="number" class="form-control" name="1pscu" id="primer2" oninput="calcularUnidadFuncional(this);" value="">
																			</td>
																			<td>
																				<input type="number" class="form-control" name="1pdes" id="primer3" oninput="calcularUnidadFuncional(this);" value="">
																			</td>
																			<td>
																				<input type="text" class="form-control" name="1ptotalPolig" id="primertot" value="" disabled>
																			</td>
																			<td>
																				<input type="text" class="form-control" name="totalFunc" id="primertotfun" value="" disabled>
																			</td>
																		</tr>
																		<tr>
																			<td>2do Piso</td>
																			<td>
																				<input type="number" class="form-control" name="2pcub" id ="segun1" oninput="calcularUnidadFuncional(this);" value="">
																			</td>
																			<td>
																				<input type="number" class="form-control" name="2pscu" id="segun2" oninput="calcularUnidadFuncional(this);" value="">
																			</td>
																			<td>
																				<input type="number" class="form-control" name="2pdes" id="segun3" oninput="calcularUnidadFuncional(this);" value="">
																			</td>
																			<td>
																				<input type="text" class="form-control" name="2ptotalPolig" id="seguntot" value="" disabled>
																			</td>
																		</tr>
																		<tr>
																			<td>Totales</td>
																			<td>
																				<input type="number" class="form-control" name="tcub" id="tot1" value="" disabled>
																			</td>
																			<td>
																				<input type="number" class="form-control" name="tscu" id="tot2" value="" disabled>
																			</td>
																			<td>
																				<input type="number" class="form-control" name="tdes" id="tot3" value="" disabled>
																			</td>
																			<td>
																				<input type="text" class="form-control" name="ttotalPolig" id="ttotalPolig" value="" disabled>
																			</td>
																			<td>
																				<input type="text" class="form-control" name="ttotalFunc" id="ttotalFunc" value="" disabled>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</fieldset>
															<fieldset>
																<legend>5- Restricciones y Afecciones</legend>
																<div class="col-lg-12 text-left">
																	<textarea id="DmedidasRAInput" class="form-control" rows="4" type="text" name="medidasRA" onkeypress="return limitar(this,event, 500);" onkeyup="actualizarInfo(this,500)" maxlength="500"></textarea>
																	<div class="col-lg-10 text-right">Cantidad De Caracteres Restantes</div>
																	<div id="DmedidasRAResultado" class="col-lg-2 text-right" style="background-color:#00ba8b;color:white;">500</div>
																</div>
															</fieldset>
															<fieldset>
																<legend>7- Valuacion basica de la Subparcela</legend>
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
																					<input type="number" class="form-control" name="tierra" id="tierra1" onkeyup="calcularUnidadFuncional(this);" value="">
																				</td>
																				<td>
																					<input type="number" class="form-control" name="vpropio" id="tierra2" onkeyup="calcularUnidadFuncional(this); calcularparcial(this);" value="">
																				</td>
																				<td>
																					<input type="number" class="form-control" name="vcomun" id="tierra3" onkeyup="calcularUnidadFuncional(this); calcularparcial(this);" value="">
																				</td>
																				<td>
																					<input type="text" class="form-control" name="totalEdificio" id="totalEdificio" value="" disabled>
																				</td>
																				<td>
																					<input class="form-control" type="text" name="suma"  id="tierratot" disabled>
																				</td>
																			</tr>
																		</tbody>
																	</table>
																</div>
															</fieldset>
															<fieldset>
																<legend>8- Observaciones para el Profesional</legend>
																<div class="col-lg-12 text-left">
																	<textarea id="DmedidasOpInput" class="form-control" rows="2" type="text" name="medidasOp" onkeypress="return limitar(this,event, 100);" onkeyup="actualizarInfo(this,100)" maxlength="100"></textarea>
																	<div class="col-lg-10 text-right">Cantidad De Caracteres Restantes</div>
																	<div id="DmedidasOpResultado" class="col-lg-2 text-right" style="background-color:#00ba8b;color:white;">100</div>
																</div>
																<div class="col-lg-3 text-left">
																	<label>Destino</label>
																	<input class="form-control" type="text" name="destino">
																</div>
															</fieldset>
															<!-- Estos rubros estan comentados porque los completa arba, los valores en el insert se introducieron en vacio
															<fieldset>
																<legend>9- Monto Imponible</legend>
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
																	<input class="form-control" type="text" name="otros" >
																</div>
															</fieldset>
															<fieldset>
																<legend>10- Caracteristicas Tributarias</legend>
																<div class="col-lg-4 text-left">
																	<label>Codigo</label>
																	<input class="form-control" type="text" name="cod" >
																</div>
																<div class="col-lg-4 text-left">
																	<label>Efectividad Mes</label>
																	<input class="form-control" type="text" name="efeMes" >
																</div>
																<div class="col-lg-4 text-left">
																	<label>Efectividad Año</label>
																	<input class="form-control" type="text" name="efeAnio" >
																</div>
															</fieldset>
															<fieldset>
																<legend>11- Observaciones</legend>
																<div class="col-lg-12 text-left">
																	<label>Lugar y Fecha de la Expedicion</label>
																	<textarea class="form-control" rows="2" type="text" name="medidasOb"></textarea>
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
													<div class="accordion-body collapse"  id="area4">
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
										</div>
										<button type="submit" class="btn btn-primary" name="insertar">Guardar</button>
										<button class="btn" onclick="window.location='obraBuscar.php';" name="cerrar">Cancelar</button>

										<?php
										if (isset($_POST['insertar'])){
											$idobra= $_POST['obraSeleccionada'];
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

											$sql= insertCedulaDE($idobra,$_POST['fechaImp'],$_POST['lugar'],$_POST['anioImp'],$ph,
											$_POST['nro'], $_POST['anio'],
											$_POST['fechaAprob'], $con, $_POST['uf'], $_POST['pol'], $_POST['bcub'],
											$_POST['bscub'], $_POST['bdes'], $btotalPolig, $_POST['1pcub'],
											$_POST['1pscu'], $_POST['1pdes'], $ttotalPolig, $totalFunc,
											$_POST['2pcub'], $_POST['2pscu'], $_POST['2pdes'], $segptotalPolig,
											$tcub, $tscu, $tdes, $ttotalFunc,
											$ttotalFunc, $_POST['medidasRA'], $_POST['tierra'], $_POST['vpropio'],
											$_POST['vcomun'], $totalEdificio,$suma, $_POST['destino'],
											$_POST['medidasOp'],'','','','','','','',$_POST['anexo'],$_POST['ampAnexo']);

											mysqli_query($conexion,$sql) or die("Problemas en el alta".mysqli_error($conexion));

											echo "<script language='javascript'>";
											echo "alert('La cedula DE fue creada');";
											echo "window.location='cedulaDEBuscar.php';";
											echo "</script>";
										}
										?>
									</form>
								</div>
								<!-- /widget-content -->
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
