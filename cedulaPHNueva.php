<?php
	include("sesion.php");
// muestra los datos de la obra ingresada y se carga cedula de acuerdo al tipo de obra elegida
$pagina='cedulaPHNuevaPHP';
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
	function calcularSuma(element){
		var ed = document.getElementById("bcub");
		var me = document.getElementById("bscub");
		var ti = document.getElementById("bdes");
		var ba = document.getElementById("balcon" );
		var ot = document.getElementById("otros");
		var tot = document.getElementById("btotalPolig" );

		var total =(parseFloat(ed.value) + parseFloat(me.value) + parseFloat(ti.value)+ parseFloat(ba.value)+ parseFloat(ot.value));

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
						<div class="widget">
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
										<select onChange="cargarDatos(this);" id="idobra" name="obraSeleccionada" class="col-lg-12 selectpicker" data-size="5" data-live-search="true" required >
											<option value="">Seleccione partida</option>
											<?php
											while ($fila=mysqli_fetch_row($consultaObras)) {
												echo "<option value='".$fila['0']."'>".$fila['1']."-".$fila['2']."</option>";
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
										<div class="col-lg-2 text-left">
											<label>Partido</label>
											<input type="text" class="form-control  " name="Clocalidad" id="lastname" value="<?php echo $Fpartido?>"disabled>
										</div>
										<div class="col-lg-1 text-left">
											<label>Codigo</label>
											<input class="form-control " type="text" value="<?php echo $FcodPartido?>"disabled>
										</div>
										<div class="col-lg-3 text-left">
											<label>Localidad</label>
											<input type="text" class="form-control  " name="Clocalidad" id="lastname" value="<?php echo $Flocalidad?>"disabled>
										</div>
										<div class="col-lg-1 text-left">
											<label>Codigo Postal</label>
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
														<input type="text" class="form-control" name="man" value="<?php echo $Fman?>" disabled>
													</td>
													<td>
														<input type="text" class="form-control" name="par" value="<?php echo $Fpar?>" disabled>
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
									<h3>Ficha Cedula PH</h3>
								</div>
								<!-- /widget-header -->
								<div class="widget-content ">
									<div class="accordion">
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
															<input class="form-control" type="date" name="fechaImp" id="fechaImp" >
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
																<input class="form-control" type="text" name="inscripTipo">
															</div>
															<div class="col-lg-6">
																<label>Inscripcion</label>
																<input class="form-control" type="text" name="inscripNro" >
															</div>
														</fieldset>
													<fieldset>
														<legend>4- Descripcion del Inmueble</legend>
															<div class="col-lg-3">
																<label>Design Plano</label>
																<input class="form-control" type="text" name="plano">
															</div>
															<div class="col-lg-1" style="width:50px">
																<label>PH</label>
																<input class="form-control" type="checkbox" name="ph" value="1">
															</div>
															<div class="col-lg-2">
																<label>Cod Partido</label>
																<input class="form-control" type="text" name="cpartido" >
															</div>
															<div class="col-lg-2">
																<label>Numero</label>
																<input class="form-control" type="text" name="nro1" >
															</div>
															<div class="col-lg-3">
																<label><br ></label>
																<input class="form-control" type="text" name="nro2" >
															</div>

														<div class="col-lg-1 text-left" style="width:110px">
															<label>Año</label>
															<input class="form-control" type="number" name="anio" value="<?php echo date("Y"); ?>">
														</div>
														<div class="col-lg-2 text-left">
															<label>F Aprobacion</label>
															<input class="form-control" type="date" name="fechaAprob">
														</div>
														<div class="col-lg-1 text-right">
															<label>Numero</label>
															<input class="form-control" type="number" name="estadoNro">
														</div>
														<div class="col-lg-1" style="width:1px">
															<label> y </label>
														</div>
														<div class="col-lg-1 text-left" style="width:165px">
															<label> Estado </label>
															<select class="form-control" name="estado">
																<option value=""> Seleccionar... </option>
																<option> Correccion </option>
																<option> Ratificacion </option>
															</select>
														</div>
														<div class="col-sm-1 text-left" style="width:50px">
															<label>UC</label>
															<input type="radio" name="UcUf" value="1">
														</div>
                            <div class="col-sm-1 text-left" style="width:50px">
															<label>UF</label>
															<input type="radio" name="UcUf" velue="2">
														</div>
														<div class="col-lg-1 text-left">
															<label>UC/UF</label>
															<input class="form-control" type="number" name="cantUF">
														</div>
														<div class="col-lg-2" style="width:140px">
															<label>A contruir</label>
															<input type="checkbox" name="aCon" value="1">
														</div>
														<div class="col-lg-2" style="width:140px">
															<label>En construccion</label>
															<input type="checkbox" name="eCon" value="1">
														</div>
														<div class="col-lg-2" style="width:140px">
															<label>Construido</label>
															<input type="checkbox" name="cons" value="1">
														</div>

														<div class="col-lg-12">
															<table class="table table-bordered responsive-table">
																<thead>
																	<tr>
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
																			<input type="text" class="form-control" name="pol" id="pol">
																		</td>
																		<td>
																			<input type="text" class="form-control" name="bcub" onkeyup="calcularSuma(this);" id="bcub" value="0">
																		</td>
																		<td>
																			<input type="text" class="form-control" name="bscub" onkeyup="calcularSuma(this);" id="bscub" value="0">
																		</td>
																		<td>
																			<input type="text" class="form-control" name="bdes" onkeyup="calcularSuma(this);" id="bdes"  value="0">
																		</td>
																		<td>
																			<input type="text" class="form-control" name="balcon" onkeyup="calcularSuma(this);" id="balcon"  value="0">
																		</td>
																		<td>
																			<input type="text" class="form-control" name="otros" onkeyup="calcularSuma(this);" id="otros" value="0">
																		</td>
																		<td>
																			<input type="text" class="form-control" name="btotalPolig" id="btotalPolig" value="0">
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</fieldset>
													<fieldset>
														<legend>5- Restricciones y Afecciones</legend>
														<div class="col-lg-12 text-left">
															<textarea id="medidasRAInput" class="form-control" rows="4" type="text" name="medidasRA" onkeypress="return limitar(this,event, 500);" onkeyup="actualizarInfo(this,500)" maxlength="730"></textarea>
															<div class="col-lg-10 text-right">Cantidad De Caracteres Restantes</div>
															<div id="medidasRAResultado" class="col-lg-2 text-right" style="background-color:#00ba8b;color:white;">500</div>
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
																			<input type="text" class="form-control" name="tierra" id="tierra" onkeyup="calcularUnidadFuncional(this);" value="0">
																		</td>
																		<td>
																			<input type="text" class="form-control" name="vpropio" id="vpropio" onkeyup="calcularUnidadFuncional(this); calcularParcial(this);" value="0">
																		</td>
																		<td>
																			<input type="text" class="form-control" name="vcomun" id="vcomun" onkeyup="calcularUnidadFuncional(this); calcularParcial(this);" value="0">
																		</td>
																		<td>
																			<input type="text" class="form-control" name="totalEdificio" id="totalEdificio" value="0" disabled>
																		</td>
																		<td>
																			<input class="form-control" type="text" name="suma"  id="tierratot"disabled>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</fieldset>
													<fieldset>
														<legend>8- Observaciones para el Profesional</legend>
														<div class="col-lg-12 text-left">
															<textarea id="medidasOpInput" class="form-control" rows="2" type="text" name="medidasOp" onkeypress="return limitar(this,event, 250);" onkeyup="actualizarInfo(this,250)" maxlength="730"></textarea>
															<div class="col-lg-10 text-right">Cantidad De Caracteres Restantes</div>
															<div id="medidasOpResultado" class="col-lg-2 text-right" style="background-color:#00ba8b;color:white;">250</div>
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
											<input class="form-control" type="text" name="otrosph" >
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
								<input class="form-control" type="number" name="efeMes" value="<?php echo date("m"); ?>">
							</div>
							<div class="col-lg-4 text-left">
							<label>Efectividad Año</label>
							<input class="form-control" type="number" name="efeAnio" value="<?php echo date("Y"); ?>">
						</div>
					</fieldset>
					<fieldset>
					<legend>11- Observaciones</legend>
					<div class="col-lg-12 text-left">
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
</div>
<button type="submit" class="btn btn-primary" name="insertar">Guardar</button>
<button class="btn" onclick="window.location='cedulaPHBuscar.php';" name="cerrar">Cancelar</button>
<?php
if (isset($_POST['insertar'])){
	$idobra= $_POST['obraSeleccionada'];
	if(isset($_POST['ph'])) {
		$ph= 1;
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
	$sql= insertCedulaPH( $idobra,$_POST['fechaImp'],$_POST['lugar'],$_POST['anioImp'],$_POST['inscripTipo'],$_POST['inscripNro'],$_POST['plano'],
	$ph,$_POST['cpartido'],$_POST['nro1'],$_POST['nro2'],$_POST['UcUf'],$_POST['cantUF'], $_POST['anio'], $_POST['fechaAprob'],$_POST['estadoNro'],$_POST['estado'],$aCon,$eCon,$cons,
	$_POST['medidasRA'],'','', '', '', '','','', $_POST['destino'],	$_POST['medidasOp'],$_POST['anexo'],$_POST['ampAnexo']);

	mysqli_query($conexion,$sql)	or die("Problemas en el alta ".mysqli_error($conexion));

	$idUnidFun = $_POST['cantUF'];
	$pol= $_POST['pol'];
	$bcub= $_POST['bcub'];
	$bscub= $_POST['bscub'];
	$bdes= $_POST['bdes'];
	$balcon= $_POST['balcon'];
	$btotalPolig= $_POST['btotalPolig'];
	$otros= $_POST['otros'];
	$tierra=$_POST['tierra'];
	$vcomun=$_POST['vcomun'];
	$vpropio=$_POST['vpropio'];

	/* se obtiene el ultimo codigo de la cedula ingresado */
	$resultob = mysqli_query($conexion,"SELECT MAX(idCedulaPH) AS id FROM cedulaph");
	$vecob = mysqli_fetch_array($resultob);
	if (!$resultob){
		die("Error: Datos no encontrados..");
	}

	$idCedulaPH=$vecob['id'] ;

	$query="INSERT INTO obraunidadfuncional(idObraUnidadFuncional, idCedulaPH, idUnidFun, poligono, cubierta, semicubierta, descubierta, balcon, totalPolig, otros, tierra, vcomun,vpropio)
	VALUES ('','$idCedulaPH','$idUnidFun','$pol','$bcub','$bscub','$bdes','$balcon','$btotalPolig','$otros','$tierra','$vcomun','$vpropio')";

	mysqli_query($conexion,$query) or die("Problemas en el alta de la unidad funcional ".mysqli_error($conexion));

	echo "<script language='javascript'>";
	echo "alert('La cedula PH fue creada');";
	echo "window.location='cedulaPHBuscar.php';";
	echo "</script>";

}
?>
</form>
</div>
<!-- /widget-content -->
</div>
<!-- /widget -->
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
