<?php
  include("sesion.php");
	//formulario que muestr datos de cedula PH
	$pagina='cedulaPHModificarPHP';
	include("encabezado.php");
	include("seguridad.php");
	$idObraUnidadFuncional=$_REQUEST['idObraUnidadFuncional'];
	$idCedula=$_REQUEST['idCedulaPH'];
	include("sql/mostrarUnidadesFuncionales.php");
	include("sql/mostrarCedulaPH.php");
	include("sql/mostrarDatosObra.php");
	include("sql/update.php");

  if (($Festado == "") or ($Festado == '0')){
    $Festado = "Seleccionar...";
  }
	?>
	<head>
		<script src="javascript/limitarcaracteres.js"></script>
		<script>
			function calcularSuma(element){
				var ed = document.getElementById("bcub");
				var me = document.getElementById("bscub");
				var ti = document.getElementById("bdes");
				var ba = document.getElementById("balcon");
				var ot = document.getElementById("otros");
				var tot = document.getElementById("btotalPolig");

				var total = (parseFloat(ed.value) + parseFloat(me.value) + parseFloat(ti.value)+ parseFloat(ba.value)+ parseFloat(ot.value));

				if(isNaN(total))
					return;

				tot.value = total;
			}

			function calcularUnidadFuncional(string) {
				var tierra = document.getElementById("tierra");
				var vpropio = document.getElementById("vpropio");
				var vcomun = document.getElementById("vcomun");
				var totalEdificio = document.getElementById("totalEdificio");
				var tierratot = document.getElementById("tierratot");

				if(isNaN(tierra.value) || isNaN(vpropio.value) || isNaN(vcomun.value))
					return;

				tierratot.value = Math.round((parseFloat(tierra.value) || 0) + (parseFloat(vpropio.value) || 0) + (parseFloat(vcomun.value) || 0));
			}

			function calcularParcial(string) {
				var vpropio = document.getElementById("vpropio");
				var vcomun = document.getElementById("vcomun");
				var totalEdificio = document.getElementById("totalEdificio");

				if(isNaN(vpropio.value) || isNaN(vcomun.value))
					return;

				totalEdificio.value = (parseInt(vpropio.value) || 0) + (parseInt(vcomun.value) || 0);
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
							  </div>
								<!-- /widget-header -->
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
												<label>Calle</label>
												<input class="form-control" type="text" name="calle" value="<?php echo $Fdomicilio?>">
				  						</div>
											<div class="col-lg-1 text-left">
												<label>Nro</label>
												<input class="form-control" type="text" name="nrocalle" value="<?php echo $FnroCalle?>">
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
												 		<th class='col-sm-1'>SubParcela</th>
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
															<input type="text" class="form-control" name="par" value="<?php echo $Fpar?>">
														</td>
														<td>
															<input type="text" class="form-control" name="sub" value="<?php echo $Fsub?>">
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
									<h3>Ficha Cedula PH</h3>
								</div>
								<!-- /widget-header -->
								<div class="widget-content">
									<div class="accordion">
										<div class="accordion-group">
											<!-- Área -->
											<div class="accordion-heading area">
												<a class="accordion-toggle" data-toggle="collapse" href="#area1">Datos para Formularios</a>
											</div>
											<!-- /Área -->
											<div class="accordion-body collapse in" id="area1">
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
															<input class="form-control" type="text" name="anioImp" id="anioImp" value="<?php echo $FanioImp?>">
														</div>
													</fieldset>
												</div>
											</div>
										</div>
										<!-- Áreas -->
										<div class="accordion-group">
											<!-- Área -->
											<div class="accordion-heading area">
												<a class="accordion-toggle" data-toggle="collapse" href="#area2">Anverso</a>
											</div>
											<!-- /Área -->
											<div class="accordion-body collapse in" id="area2">
												<div class="accordion-inner">
                          <fieldset>
                            <legend>3- Dominio </legend>
                              <div class="col-lg-2">
                                <label>Tipo</label>
                                <input class="form-control" type="text" name="inscripTipo" value="<?php echo $FinscripTipo?>">
                              </div>
                              <div class="col-lg-6">
                                <label>Inscripcion</label>
                                <input class="form-control" type="text" name="inscripNro" value="<?php echo $FinscripNro?>" >
                              </div>
                            </fieldset>
													<fieldset>
														<legend>4- Descripcion del Inmueble</legend>
														<div class="col-lg-3">
															<label>Design Plano</label>
															<input class="form-control" type="text" name="plano" value="<?php echo $Fplano?>">
														</div>
														<div class="col-lg-1" style="width:50px">
															<label>PH</label>
															<input type="checkbox" name="ph" <?php a($Fph)?>
														</div>
														<div class="col-lg-2">
															<label>Cod Partido</label>
															<input class="form-control" type="text" name="cpartido" value="<?php echo $Fcpartido?>">
														</div>
														<div class="col-lg-2">
															<label>Numero</label>
															<input class="form-control" type="text" name="nro1" value="<?php echo $Fnro1?>">
														</div>
														<div class="col-lg-3">
															<label><br ></label>
															<input class="form-control" type="text" name="nro2" value="<?php echo $Fnro2?>">
														</div>
														<div class="col-lg-1 text-left" style="width:110px">
															<label>Año</label>
															<input class="form-control" type="numeric" name="anio" value="<?php echo $Fanio?>">
														</div>
														<div class="col-lg-2 text-left">
															<label>F Aprobacion</label>
															<input class="form-control" type="date" name="fechaAprob" value="<?php echo $FfechaAprob?>" >
														</div>
                            <div class="col-lg-1 text-right">
															<label>Numero</label>
															<input class="form-control" type="number" name="estadoNro" value="<?php echo $FestadoNro ?>">
														</div>
                            <div class="col-lg-1" style="width:1px">
															<label> y </label>
														</div>
														<div class="col-lg-1 text-left" style="width:165px">
															<label> Estado </label>
															<select class="form-control" name="estado">
																<option> <?php echo $Festado ?> </option>
                              	<option> </option>
																<option> Correccion </option>
																<option> Ratificacion </option>
															</select>
														</div>
                            <div class="col-sm-1 text-left" style="width:50px">
															<label>UC</label>
															<input type="radio" value="1" name="UcUf" <?php if( $FunUF == "1" ) { ?>checked="checked"<?php } ?> >
														</div>
                            <div class="col-sm-1 text-left" style="width:50px">
															<label>UF</label>
															<input type="radio" value="2" name="UcUf" <?php if( $FunUF == "2" ) { ?>checked="checked"<?php } ?> >
														</div>
														<div class="col-lg-1 text-left">
															<label>UC/UF</label>
															<input class="form-control" type="text" name="cantUF"  value="<?php echo $FcantUF?>" >
														</div>

														<div class="col-lg-2" style="width:140px">
															<label>A contruir</label>
															<input type="checkbox" name="aCon" <?php a($FaCon)?>
														</div>
														<div class="col-lg-2" style="width:140px">
															<label>En construccion</label>
															<input type="checkbox" name="eCon" <?php  a($FeCon)?>
														</div>
														<div class="col-lg-2" style="width:140px">
															<label>Construido</label>
															<input type="checkbox" name="cons" <?php  a($Fcons)?>
														</div>
														<div class="col-lg-12">
															<table class="table table-bordered responsive-table">
																<thead>
																	<tr>
																		<th class='col-sm-1'>UF</th>
																		<th class='col-sm-1'>Poligonos</th>
																		<th class='col-sm-1'>Sup. Cubierta</th>
																		<th class='col-sm-1'>Sup. SemiCubierta</th>
																		<th class='col-sm-1'>Sup. Descubierta</th>
																		<th class='col-sm-1'>Sup. Balcon</th>
																		<th class='col-sm-1'>Otros</th>
																		<th class='col-sm-1'>Total Poligono</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>
																			<input type="text" class="form-control" name="iduf"  id="iduf" value="<?php echo $FidUnidFun ?>">
																		</td>
																		<td>
																			<input type="text" class="form-control" name="pol" id="pol" value="<?php echo $Fopol ?>">
																		</td>
																		<td>
																			<input type="text" class="form-control" name="bcub" onkeyup="calcularSuma(this);" id="bcub" value="<?php echo $Focub ?>">
																		</td>
																		<td>
																			<input type="text" class="form-control" name="bscub" onkeyup="calcularSuma(this);" id="bscub" value="<?php echo $Foscub ?>">
																		</td>
																		<td>
																			<input type="text" class="form-control" name="bdes" onkeyup="calcularSuma(this);" id="bdes"  value="<?php echo $Fodescub ?>">
																		</td>
																		<td>
																			<input type="text" class="form-control" name="balcon" onkeyup="calcularSuma(this);" id="balcon"  value="<?php echo $Fobal ?>">
																		</td>
																		<td>
																			<input type="text" class="form-control" name="otros"onkeyup="calcularSuma(this);"  id="otros" value="<?php echo $otros ?>">
																		</td>
																		<td>
																			<input type="text" class="form-control" name="btotalPolig" id="btotalPolig" value="<?php echo $Fotpol ?>">
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</fieldset>
													<fieldset>
														<legend>5- Restricciones y Afecciones</legend>
														<div class="col-lg-12 text-left">
															<textarea id="MedidasRAInput" class="form-control" rows="4" type="text" name="medidasRA" onkeypress="return limitar(this,event, 500);" onkeyup="actualizarInfo(this,500)" maxlength="500"><?php echo $FmedidasRA?></textarea>
															<div class="col-lg-10 text-right">Cantidad De Caracteres Restantes</div>
															<div id="MedidasRAResultado" class="col-lg-2 text-right" style="background-color:#00ba8b;color:white;">
																<?php
																$Num = 500;
																if ($FmedidasRA !=""){
																	$A= intval($Num)-intval(strlen($FmedidasRA));
																	echo $A;
																}else{
																	echo "500";
																}
																?>
															</div>
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
																		<td><center>Tierra </center></td>
																		<td>Valor Propio</td>
																		<td>Valor Comun</td>
																		<td>Total </td>
																		<td><center>Total </center> </td>
																	</tr>
																	<tr>
																		<td>
																			<input type="text" class="form-control" name="tierra" id="tierra" onkeyup="calcularUnidadFuncional(this);" value="<?php echo $Ftierra?>">
																		</td>
																		<td>
																			<input type="text" class="form-control" name="vpropio" id="vpropio" onkeyup="calcularUnidadFuncional(this); calcularParcial(this);" value="<?php echo $Fvpropio?>">
																		</td>
																		<td>
																			<input type="text" class="form-control" name="vcomun" id="vcomun" onkeyup="calcularUnidadFuncional(this); calcularParcial(this);" value="<?php echo $Fvcomun?>">
																		</td>
																		<td>
																			<input type="text" class="form-control" name="totalEdificio" id="totalEdificio" value="<?php echo $totedificio?>" disabled>
																		</td>
																		<td>
																			<input class="form-control" type="text" name="suma"  id="tierratot" value="<?php echo $tot?>" disabled>
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
																		$A= intval($Num)-intval(strlen($FmedidasOp));
																		echo $A;
																	}else{
																		echo "250";
																	}
																	?>
															</div>
															<div class="col-lg-3 text-left">
																<label>Destino</label>
																<input class="form-control" type="text" name="destino"value="<?php echo $Fdestino?>">
															</div>
													</fieldset>
													<!-- Estos rubros estan comentados porque los completa arba, los valores en el insert se introducieron en vacio
													<fieldset>
														<legend>9- Monto Imponible</legend>
														<div class="col-lg-4 text-left">
															<label>Impuesto Inmobiiliario</label>
															<input class="form-control" type="text" name="impInm" value="<?php echo $FimpInm?>" >
														</div>
														<div class="col-lg-4 text-left">
															<label>Impuesto de Sellos</label>
															<input class="form-control" type="text" name="impSel" value="<?php echo $FimpSel?>" >\
														</div>
														<div class="col-lg-4 text-left">
															<label>Otros</label>
															<input class="form-control" type="text" name="otrosph" value="<?php echo $Fotrosph?>" >
														</div>
													</fieldset>
													<fieldset>
														<legend>10- Caracteristicas Tributarias</legend>
														<div class="col-lg-4 text-left">
															<label>Codigo</label>
															<input class="form-control" type="text" name="cod" value="<?php echo $Fcod?>" >
														</div>
														<div class="col-lg-4 text-left">
															<label>Efectividad Mes</label>
															<input class="form-control" type="number" name="efeMes" value="<?php echo $FefeMes?>" >
														</div>
														<div class="col-lg-4 text-left">
															<label>Efectividad Año</label>
															<input class="form-control" type="number" name="efeAnio" value="<?php echo $FefeAnio?>" >
														</div>
													</fieldset>
													<fieldset>
														<legend>11- Observaciones</legend>
														<div class="col-lg-12 text-left">
															<textarea class="form-control" rows="2" type="text" name="medidasOb" ><?php echo $FmedidasOb?></textarea>
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
											<div class="accordion-body collapse" id="area4">
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
									<button type="button" class="btn" onclick="window.location='cedulaPHBuscar.php';" name="cerrar">Cancelar</button>									<?php

										if (isset($_POST['actualizar'])){
											//modifica la cedula de todas las unidades funcionaels

											if(isset($_POST['ph'])) {
												$ph = 1;
											} else {
												$ph = 0;
											}

											if(isset($_POST['aCon'])) {
												$aCon = 1;
											} else {
												$aCon = 0;
											}

											if(isset($_POST['eCon'])) {
												$eCon = 1;
											} else {
												$eCon = 0;
											}

											if(isset($_POST['cons'])) {
												$cons = 1;
											} else {
												$cons = 0;
											}

											if(isset($_POST['partida'])) {
												$FpartidaN = $_POST['partida'];
												$FparN = $_POST['par'];
												$FsubN = $_POST['sub'];
												$FcalleN = $_POST['calle'];
												$FnrocalleN = $_POST['nrocalle'];
                        $FesqCalle = $_POST['esqCalle'];
												$FyCalle = $_POST['yCalle'];

												$sqlobra="UPDATE obras SET
												partida	='$FpartidaN',
												parcela ='$FparN',
												subparcela ='$FsubN',
												calle='$FcalleN',
												nro='$FnrocalleN',
                        entreCalle='$FesqCalle',
                        yCalle='$FyCalle'

												WHERE codObra='$idobra'";

												mysqli_query($conexion,$sqlobra) or die("Problemas en actualizacion con datos de obra ".mysqli_error($conexion));
											}

											$sql= ActualizarCedulaPH($idCedula, $_POST['fechaImp'],$_POST['lugar'],$_POST['anioImp'],$_POST['inscripTipo'],$_POST['inscripNro'],$_POST['plano'],
											$ph,$_POST['cpartido'],$_POST['nro1'],$_POST['nro2'],$_POST['UcUf'],$_POST['cantUF'],$_POST['anio'],
											$_POST['fechaAprob'],$_POST['estadoNro'],$_POST['estado'],$aCon, $eCon, $cons, $_POST['medidasRA'],'','','',
											'', '', '','', $_POST['destino'],	$_POST['medidasOp'],$_POST['anexo'],$_POST['ampAnexo']);

											mysqli_query($conexion,$sql) or die("Problemas en el alta ".mysqli_error($conexion));

 											$iduf= $_POST['iduf'];
						 					$pol= $_POST['pol'];
						 					$bcub= $_POST['bcub'];
						 					$bscub= $_POST['bscub'];
						 					$bdes= $_POST['bdes'];
						 					$balcon= $_POST['balcon'];
						 					$btotalPolig= $_POST['btotalPolig'];
						 					$otros= $_POST['otros'];
											$tierra=$_POST['tierra'];
											$vpropio=$_POST['vpropio'];
											$vcomun=$_POST['vcomun'];

						 					$query="UPDATE obraunidadfuncional SET

						 					idUnidFun='$iduf',
						 					poligono='$pol',
						 					cubierta='$bcub',
						 					semicubierta='$bscub',
						 					descubierta='$bdes',
						 					balcon='$balcon',
						 					totalPolig='$btotalPolig',
						 					otros='$otros',
											tierra='$tierra',
											vpropio='$vpropio',
											vcomun='$vcomun'
						 					where (idUnidFun='$FidUnidFun') and (idCedulaPH='$idCedula')";

						 					mysqli_query($conexion,$query) or die("Problemas en el alta ".mysqli_error($conexion));

											echo "<script language='javascript'>";
											echo "alert('La cedula PH fue actualizada');";
											echo "window.location='cedulaPHBuscar.php';";
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
