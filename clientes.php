<?php
include("sesion.php");
$pagina='clientesPHP';
include("encabezado.php");
include("seguridad.php");
include("sql/insert.php");
include("sql/consultas.php");
include("funciones/calcularCuil.php");

?>
<!DOCTYPE html>
<html lang="es">

<script type="text/javascript">
    function cambiar( obj ){
				var aux = document.getElementById("sexo");
        text = aux.options[aux.selectedIndex].innerText; //El texto de la opción seleccionada
				if (text == "Sociedad"){
					var container = document.getElementById("cambio");
	        container.innerHTML = "CUIT"+"*".fontcolor("red");
					document.getElementById("boton").disabled = true;
					document.getElementById("result").disabled = true;
          $("#tipoDni option[value='cuit']").attr("selected", true);
				} else {
					var container = document.getElementById("cambio");
	        container.innerHTML = "DNI"+"*".fontcolor("red");
					document.getElementById("boton").disabled = false;
					document.getElementById("result").disabled = false;
				}
    }
    function change( obj ){
      var auxTipoDni = document.getElementById("tipoDni");
      textTipoDni = auxTipoDni.options[auxTipoDni.selectedIndex].innerText; //El texto de la opción seleccionada
      if (textTipoDni == "CUIT"){
        var container = document.getElementById("cambio");
        container.innerHTML = "CUIT"+"*".fontcolor("red");
        document.getElementById("boton").disabled = true;
        document.getElementById("result").disabled = true;
        $("#sexo option[value='3']").attr("selected", true);
      } else {
        var container = document.getElementById("cambio");
        container.innerHTML = "DNI"+"*".fontcolor("red");
        document.getElementById("boton").disabled = false;
        document.getElementById("result").disabled = false;
        $("#sexo option[value='']").attr("selected", true);
      }
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
								<i class="icon-group"></i>
								<h3>Formulario de Clientes</h3>
							</div> <!-- /widget-header -->

							<div class="widget-content">



								<form method="post" id="edit-profile" class="form-horizontal">

									<div class="accordion" id="accordion2">
										<fieldset>
											<div class="accordion-group">
												<div class="accordion-heading">
													<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
														Datos del Cliente
													</a>
												</div>
												<div id="collapseOne" class="accordion-body collapse in">
													<div class="accordion-inner">

														<style> .control-group {display: inline-block;} </style>

														<div class="control-group">
															<label class="control-label" for="firstname">Apellido y Nombre<b style="color:#FF0000";>*</b></label>
															<div class="controls">
																<input type="text" class="form-control span9 " name="nombreApellido" id="firstname" required>
															</div> <!-- /controls -->
														</div> <!-- /control-group -->

														<div class="control-group">
															<label class="control-label" for="lastname">Tipo DNI<b style="color:#FF0000";>*</b></label>
															<div class="controls">
																<select class="form-control" name="tipoDni" id="tipoDni" onchange="change(this);" required>
																	<option value="">Seleccionar...</option>
																	<option>DNI</option>
																	<option>LE</option>
																	<option>LC</option>
																	<option>CI</option>
																	<option value="cuit">CUIT</option>
																</select>

															</div> <!-- /controls -->
														</div> <!-- /control-group -->

														<div class="control-group">
															<label id="cambio" class="control-label" for="lastname">DNI<b style="color:#FF0000";>*</b></label>
															<div class="controls">
																<input type="text" class="form-control span2 " name="dni" id="dni" required>
															</div> <!-- /controls -->
														</div> <!-- /control-group -->

														<div class="control-group">
															<label class="control-label" for="sexo">Sexo<b style="color:#FF0000";>*</b></label>
															<div class="controls">
																<select name="sexo" class="form-control" id="sexo" onchange="cambiar(this);" required>
																	<option value="">Seleccione...</option>
																	<option value="1">Masculino</option>
																	<option value="2">Femenino</option>
																	<option value="3">Sociedad</option>
																</select>

															</div> <!-- /controls -->
														</div> <!-- /control-group -->

														<div class="control-group">
															<div class="controls">
																<div class="input-append">
																	<button type="button" class="btn" id="boton" onclick="generarCuit();" >Calcular CUIT</button>
																	<input class="form-control span4 m-wrap" name="cuit" id="result" type="text">
																</div>
															</div>	<!-- /controls -->
														</div> <!-- /control-group -->

														<div class="control-group">
															<label class="control-label" for="lastname">Teléfono</label>
															<div class="controls">
																<input type="text" class="form-control span4 " name="telefono" id="lastname">
															</div> <!-- /controls -->
														</div> <!-- /control-group -->

														<div class="control-group">
															<label class="control-label" for="lastname">Caracter</label>
															<div class="controls">
																<input type="text" class="form-control span3 " name="caracter" id="lastname" >
															</div> <!-- /controls -->
														</div> <!-- /control-group -->

														<div class="control-group">
															<label class="control-label" for="firstname">Calle</label>
															<div class="controls">
																<input type="text" class="form-control text inline span6 " name="calle" id="firstname" >
															</div> <!-- /controls -->
														</div> <!-- /control-group -->

														<div class="control-group">
															<label class="control-label" for="firstname">Número</label>
															<div class="controls">
																<input type="text" class="form-control text inline span2 " name="nroCalle" id="firstname" >
															</div> <!-- /controls -->
														</div> <!-- /control-group -->

														<div class="control-group">
															<label class="control-label" for="firstname">Cuerpo</label>
															<div class="controls">
																<input type="text" class="form-control span2 " name="cuerpo" id="firstname" >
															</div> <!-- /controls -->
														</div> <!-- /control-group -->

														<div class="control-group">
															<label class="control-label" for="firstname">Departamento</label>
															<div class="controls">
																<input type="text" class="form-control span2 " name="dpto" id="firstname" >
															</div> <!-- /controls -->
														</div> <!-- /control-group -->

														<div class="control-group">
															<label class="control-label" for="firstname">Piso</label>
															<div class="controls">
																<input type="text" class="form-control span2 " name="piso" id="firstname" >
															</div> <!-- /controls -->
														</div> <!-- /control-group -->

														<div class="control-group">
															<label class="control-label" for="localidad" >Partido<b style="color:#FF0000";>*</b></label>
															<div class="controls">
																<select id="partido" data-size="5" data-hide-disabled="true" onchange="selectLocalidad(this);" class="selectpicker" data-live-search="true" name="partidoSeleccionado" required>
																	<option value="" >Seleccione Partido</option>
																	<?php
																	while ($fila=mysqli_fetch_row($consultaPartidos)) {
																		echo "<option value='".$fila['0']."'>".$fila['2']."</option>";
																	}
																	?>
																</select>
															</div> <!-- /controls -->
														</div> <!-- /control-group -->

														<div class="control-group">
															<label class="control-label" for="localidad" >Localidad<b style="color:#FF0000";>*</b></label>
															<div class="controls">
																<select id="localidad" data-size="5" data-hide-disabled="true" class="selectpicker" title="Seleccione Localidad" data-live-search="true" name="localSeleccionada" onchange="selectCP(this);" required>
																	<option value="">Seleccione Localidad</option>
																	<?php
																	/*while ($fila=mysqli_fetch_row($consultaLocalidades)) {
																	echo "<option value='".$fila['0']."'>".$fila['2']."</option>";
																}*/
																?>


															</select>
														</div> <!-- /controls -->
													</div> <!-- /control-group -->

													<div class="control-group">
														<label class="control-label" for="firstname">Código Postal</label>
														<div class="controls">
															<input type="text" class="form-control span2 " name="cp" id="codigoPostal" disabled>
														</div> <!-- /controls -->
													</div> <!-- /control-group -->

													<div class="control-group">
														<label class="control-label" for="firstname">Provincia</label>
														<div class="controls">

															<select id="provincia" data-size="10" data-hide-disabled="true" data-dropup-auto="false" class="col-lg-12 text-left selectpicker dropup" data-live-search="true" title="Seleccione Provincia" name="provinciaSeleccionada" >

																<?php
																$i = 0;
																while ($fila=mysqli_fetch_row($consultaProvincia)) {
																	if($i === 0) {
																		echo "<option selected value='".$fila['0']."'>".$fila['1']."</option>";
																	}
																	else {
																		echo "<option value='".$fila['0']."'>".$fila['1']."</option>";
																	}

																	$i++;
																}
																?>
															</select>
														</div> <!-- /controls -->
													</div> <!-- /control-group -->

													<div class="control-group">
														<label class="control-label" for="firstname">Pais</label>
														<div class="controls">
															<input type="text" class="form-control span3" name="pais" value="Argentina" id="pais">
														</div> <!-- /controls -->
													</div> <!-- /control-group -->

													<div class="control-group">
														<div class="controls">
															<div class="input-append">
																<button type="button" class="btn" data-toggle="modal" data-target="#cpa">Buscar CPA</button>
															</div>
														</div>	<!-- /controls -->
													</div> <!-- /control-group -->
                          <!-- Inicio Modal Ingreso -->
                          <div class="modal fade" id="cpa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">CPA</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <!-- Inicio del cuerpo de formulario de ingreso -->
                                  <div class="card text-center">
                                    <h3 class="card-header success-color white-text">Cálculo de cpa</h3>
                                    <div class="card-body">
                                      <form method="post">
                                        <div class="control-group">
            															<label class="control-label" for="alturas">Calle<b style="color:#FF0000";>*</b></label>
            															<div class="controls">
            																<!--<input type="text" class="form-control text inline span6" name="calle" id="firstname" value="">-->
            																<select id="calles" data-size="5" data-hide-disabled="true" onchange="selectAlturas(this) ;"  class="selectpicker" data-live-search="true" title="Seleccione Calle"  name="calleSeleccionada" required>
            																	<option value="">Seleccione Calle</option>
            																	<?php
            																	/*while ($fila=mysqli_fetch_row($consultaLocalidades)) {
            																	echo "<option value='".$fila['0']."'>".$fila['2']."</option>";
            																}*/
            																?>
            															</select>
            															</div> <!-- /controls -->
            														</div> <!-- /control-group -->
                                        <div class="row">
                                          <div class="col-md-12 mb-4">
                                            <div class="md-form">
                                              <input type="text" id="form3" class="form-control" name="descripcion">
                                              <label for="form3" class="">Descripcion</label>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12 mb-4">
                                            <div class="md-form">
                                              <input type="text" id="form4" class="form-control" name="importe">
                                              <label for="form4" class="">Importe</label>
                                            </div>
                                          </div>
                                        </div>
                                        <input type="submit" name="GuardarIngreso" value="Guardar" class="btn btn-success">
                                        <input type="reset" name="Cancelar" value="Cancelar" class="btn btn-info" onClick="location.href='caja.php'">
                                      </form>
                                        <!--FIN -->
                                        <?php //Acción al presionar GuardarIngreso
                                          if (isset($_POST['GuardarIngreso'])){
                                            $sqlCajaIngreso = insertCajaIngreso($_POST['fecha'],$_POST['tipoMov'],$_POST['descripcion'],$_POST['importe'],$_POST['$nroCajaCierre']);
                                            $conexiones->exec($sqlCajaIngreso);

                                            echo "<script language='javascript'>";
                                           echo "window.location='caja.php';";
                                            echo "</script>";

                                          }
                                        ?>

                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <!-- Fin del cuerpo de agregar Ingreso -->

													<div class="controls span9">
														<div class="alert">
															<button type="button" class="close" data-dismiss="alert">&times;</button>

															<label >Copiar datos a Firmantes
																<input type="checkbox"  name="fir" id="check" value="1" /></label>

																<label >Copiar datos a Destinatarios
																	<input type="checkbox"  name="des" id="check" value="1" /></label>

																	<label >Copiar datos a Obras
																		<input type="checkbox"  name="obr" id="check" value="1" /></label>

																	</div>

																</div>


																<div class="form-actions">
																	<button class="btn btn-success" name="guardar">Guardar</button>
																	<input type="reset" class="btn " name="limpiar" value="Limpiar" />
																</div>

															</div>

														</div>

													</div>

												</fieldset>

											</div>
											<?php



											if (isset($_POST['guardar'])){

												if ($_POST['sexo'] == "3") {
													$cuit = $_POST['dni'];
													$dni = "";
												} else {
													$cuit = $_POST['cuit'];
													$dni = $_POST['dni'];
												}

												$sqlcli= insertCliente($_POST['nombreApellido'],$_POST['tipoDni'],$dni,$_POST['sexo'],
												$cuit,$_POST['telefono'],$_POST['caracter'],$_POST['calle'],$_POST['nroCalle'],
												$_POST['cuerpo'],$_POST['dpto'],$_POST['piso'],$_POST['partidoSeleccionado'],$_POST['localSeleccionada'],$_SESSION['idUsuario']);


												mysqli_query($conexion,$sqlcli)
												or die("Problemas en el alta del cliente".mysqli_error($conexion));

												if (isset($_POST['fir']) && $_POST['fir'] == '1'){

													/* se obtiene el ultimo codigo de cliente ingresado */
													$resultcli = mysqli_query($conexion,"SELECT MAX(idCliente) AS id FROM clientes WHERE`idUsuario` = ".$_SESSION['idUsuario']);
													$veccli = mysqli_fetch_array($resultcli);
													if (!$resultcli){
														die("Error: Datos no encontrados..");
													}

													$FidCliente=$veccli['id'] ;

													$sqlfir= insertFirmanteNuevo($_POST['nombreApellido'],$_POST['tipoDni'],$dni,$_POST['sexo'],
													$cuit,$_POST['telefono'],$_POST['caracter'],$_POST['calle'],$_POST['nroCalle'],$_POST['cuerpo'],$_POST['dpto'],$_POST['piso'],
													$_POST['partidoSeleccionado'], $_POST['localSeleccionada'],$FidCliente);

													mysqli_query($conexion,$sqlfir)
													or die("Problemas en el alta ".mysqli_error($conexion));

													$resultfir = mysqli_query($conexion,"SELECT MAX(idFirmante) AS idfirmante FROM firmantes" );
													$vecfir = mysqli_fetch_array($resultfir);

													if (!$resultfir){
														die("Error: Datos no encontrados..");
													}

													$Fidfirmante=$vecfir['idfirmante'] ;

													if (isset($_POST['des']) && $_POST['des'] == '1'){

														/* se obtiene el ultimo codigo de cliente ingresado */

														$sqldes= insertDestinatarioNuevo($_POST['nombreApellido'],$_POST['tipoDni'],$dni,
														$_POST['telefono'],$_POST['caracter'],$_POST['calle'],$_POST['nroCalle'],$_POST['cuerpo'],$_POST['dpto'],$_POST['piso'],
														$_POST['localSeleccionada'],$FidCliente);

														mysqli_query($conexion,$sqldes)
														or die("Problemas en el alta ".mysqli_error($conexion));

														$resultdes = mysqli_query($conexion,"SELECT MAX(idDestinatario) AS iddestinatario FROM destinatarios");
														$vecdes = mysqli_fetch_array($resultdes);
														if (!$resultdes){
															die("Error: Datos no encontrados..");
														}

														$Fiddestinatario=$vecdes['iddestinatario'] ;

														if (isset($_POST['obr']) && $_POST['obr'] == '1'){


															$sqlobr= insertObra($_POST['partidoSeleccionado'],$_POST['localSeleccionada'],'',
															$FidCliente,$_POST['calle'],$_POST['nroCalle'],$_POST['cuerpo'],$_POST['piso'],
															$_POST['dpto'],'','','','','','','','','','',0,0,0,0,0,0,$Fidfirmante,$Fiddestinatario,$_SESSION['idProfesional'],'');


															mysqli_query($conexion,$sqlobr)
															or die("Problemas en el alta ".mysqli_error($conexion));

															echo "<script language='javascript'>";
															echo "alert('El cliente, el firmante, el destinatario y la obra fueron creados');";
															echo "window.location='';";
															echo "</script>";

														} else{

															echo "<script language='javascript'>";
															echo "alert('El cliente, el firmante y el destinatario fueron creados');";
															echo "window.location='';";
															echo "</script>";

														}


													} else{

														echo "<script language='javascript'>";
														echo "alert('El cliente y firmante fue creado');";
														echo "window.location='';";
														echo "</script>";

													}

												}

												else{

													echo "<script language='javascript'>";
													echo "alert('El cliente fue creado ');";
													echo "window.location='';";
													echo "</script>";
												}

											}

											?>


										</form>


										<div class="accordion-group">
											<div class="accordion-heading">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
													Busqueda del Cliente
												</a>
											</div>
											<div id="collapseOne" class="accordion-body collapse in">
												<div class="accordion-inner">
													<form method="post">


														<div class="col-lg-12">
															<div class="form-group">
																<script src="js/datatables.js"></script>
																<script src="js/dataTables.bootstrap.js"></script>
																<?php
																echo "<table  class='table table-bordered table-hover table-striped display AllDataTables'>";
																echo "<thead>";
																echo "<tr>";
																echo "<th class='col-sm-4'>Nombre</th>";
																echo "<th class='col-sm-1'>DNI</th>";
																echo "<th class='col-sm-2'>Cuit</th>";
																echo "<th class='col-sm-2'>Telefono</th>";
																echo "<th class='col-sm-1'>Caracter</th>";
																echo "<th class='col-sm-2'>Acciones</th>";
																echo "</tr>";
																echo "</thead>";


																echo "<tbody class='buscar'>"; /*agregado*/

																while($obra = mysqli_fetch_array($consultaClientes)){
																	$id=$obra['idCliente'];
																	echo"<tr align='center'>";
																	echo"<td>" .$obra['cnombreApellido']."</td>";
																	echo"<td>" .$obra['dni']."</td>";
																	echo"<td>" .$obra['cuit']."</td>";
																	echo"<td>" .$obra['telefono']."</td>";
																	echo"<td>" .$obra['caracter']."</td>";
																	echo"<td>
																	<a href='clientesModificar.php?idcliente=$id'>  <i class='icon-large btn btn-info icon-pencil'></i>  </a>
																	<a onClick='redirect(this);' id='$id'> <i class='icon-large icon-trash btn btn-danger '></i>  </a>
																	";
																	echo "</tr>";
																}
																echo "</tbody>";
																echo "</table>";
																?>

															</div>

														</div>

													</form>

												</div>

											</div>

										</div>

									</div> <!-- /widget  content-->

								</div> <!-- /widget -->

							</div> <!-- /span12 -->

						</div> <!-- /row -->

					</div> <!-- /container -->

				</div> <!-- /main-inner -->

			</div> <!-- /main -->




			<?php
			include("pie.php");
			?>


			<script src="javascript/cuit.js"></script>
			<script src="javascript/codigoPostal.js"></script>
			<script src="javascript/localidad.js"></script>
			<script>

			function redirect(element) {
				if (confirm('Esta seguro que quiere eliminar el cliente?'))
				window.location.href = "sql/clientesBorrar.php?idcliente=" + element.id;
			}
			</script>

		</body>
		</html>
