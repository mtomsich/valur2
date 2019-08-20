<?php
include("sesion.php");
		$pagina='formulario901rub2pto1PHP';
		include("encabezado.php");
		include("seguridadForm.php");
		include("sql/insertFormulario.php");
		include("sql/update.php");

		//FORMULARIO NUEVO
		if (isset($_GET['idCedula'])){
			include ("sql/mostrarDatosObra.php");
			include ('sql/mostrarForm901.php'); //SE INCLUYE PARA EL VALOR DE EDIFCIO
		//FORMULARIO PARA EDITAR
		} else {
			$idform = $_GET['idform'];
			//DATOS DE IDCEDULA Y EL TIPO DE CEDULA
			$formulario901 = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedulaformularios WHERE (codForm=$idform) and (nroFormulario='901')"));
			$Cedula = $formulario901['idCedula']; $TipoDeCedula= $formulario901['tipoCedula'];
			//DATOS DE IDOBRA Y EL AÑO
			switch ($TipoDeCedula) {
		    case '1': $cons=mysqli_fetch_array(mysqli_query($conexion, "SELECT `codObra`,`anioImp` FROM `cedula10707` WHERE `idCedula707` = $Cedula")); break;
		    case '2': $cons=mysqli_fetch_array(mysqli_query($conexion, "SELECT `codObra`,`anioImp` FROM `cedulaph` WHERE `idCedulaPH` = $Cedula"));  break;
		    case '3': $cons=mysqli_fetch_array(mysqli_query($conexion, "SELECT `codObra`,`anioImp` FROM `cedulade` WHERE `idCedulaDE` = $Cedula"));break;
		  }
		  $idobra=$cons[0];
			$anio=$cons['anioImp'];
			//DATOS DE PARTIDO, PARCELA Y SUBPARCELA
			$row = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM obras o, partidos pa, localidades l
		    where (o.codObra='$idobra') and (o.codPartido=pa.idPartido) and (o.idLocalidad=l.idLocalidad) and (o.desactivada=0)"));
			$Fpartido= $row['partido'];
			$Fpar= $row['parcela'];
		  $Fsub= $row['subparcela'];
			include ('sql/mostrarForm901.php'); //DATOS DE EDIFICIO Y DEL FORMULARIO 901
			//DESTINOS
			$cod = mysqli_fetch_array(mysqli_query($conexion,"SELECT Destino, Tipo, Codigo FROM destinos WHERE cNo='$destino'"));
			$codi = $cod['Destino']; $Codigo=$cod['Codigo']; $codigo = $Codigo." - ".$codi; $aux = $cod['Tipo'];
			$auxiliar = mysqli_query($conexion,"SELECT Destino, Tipo, Codigo FROM destinos WHERE Tipo='$aux'");
		}
		//PARA RECUPERAR EL VALOR DE TIERRA SI ES QUE YA EXISTIA UNO EN LA BASE
		if (isset($TipoDeCedula)){
		  switch ($TipoDeCedula) {
		    case '1':
		      $cedu = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedula10707 WHERE codObra=$idobra"));
		      break;
		    case '2':
		      $cedu = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedulaph WHERE codObra=$idobra"));
		      break;
		    case '3':
		      $cedu = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedulade WHERE codObra=$idobra"));
		      break;
		  }
			if (isset($cedu['tierra'])){
				$tierra = $cedu['tierra'];
			}
		}
		//PARA CALCULAR LAS MEJORAS DEL FORMULARIO 912
		if (isset($Cedula)){
			$codForm912 = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedulaformularios WHERE (idCedula='$Cedula') and (nroformulario='912')"));
			$codf912= $codForm912['codForm'];
			if ($codf912 > '0'){
				$Vec = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM form912 WHERE codForm912='$codf912'"));
				include ("funciones/calculos912.php");
				$mejora=$TotalRub2IncisoA+$TotalRub2IncisoB+$TotalRub2IncisoC+$TotalRub2IncisoD;
				include ("funciones/plantaciones910.php");
				$planBas = $ValTotalIncisoA+$ValTotalIncisoB+$ValTotalIncisoC;
			} else {
				$mejora="";
			}
		}
		$tipo = mysqli_query($conexion,"SELECT * FROM destinos GROUP BY Tipo");
		if ((isset($mostrarProf)) && ($mostrarProf === '1')) {
		   $mostrarProf = 'checked="checked" ';
		} else {
		    $mostrarProf = ' ';
		}
?>
<!DOCTYPE html>
<html lang="es">

<style>
	td {
		text-align:center !important; padding: 2px !important
	}
	th {
		text-align:center !important
	}
	input {
		margin-top: 8px !important; text-align:center;
	}
</style>
<script language="JavaScript" type="text/javascript">
$(document).ready(function(jQuery){
		$("#tipo").change(function () {
			$("#tipo option:selected").each(function () {
				Tipo = $(this).val();
				$.post("sql/destino.php", { Tipo: Tipo }, function(data){
					$("#destino").html(data);
				});
			});
		})
	})
		var destino = document.getElementById("destino"),
		observaciones = document.getElementById("observaciones");
		if(observaciones)
			observaciones.value = destino.value;
</script>
<body>

<div class="main">

	<div class="main-inner">

	    <div class="container">

	      <div class="row">

	      	<div class="span12">

	      		<div class="widget ">

	      			<div class="widget-header">
	      					<i class="icon-th-large"></i>
	      				<h3>Formulario 901</h3>
	  				</div> <!-- /widget-header -->

					<div class="widget-content">
						<form method="post">
            <div class="control-group">
              <div class="controls">
                <div class="accordion" id="accordion2">
									<div class="accordion-heading area ">
										<a  id="datos" class="accordion-toggle" data-toggle="collapse" onclick="estilo(this)">
											<table>
												<tr>
													<td> Parcela </td>
													<td> <input disabled type="text" class="form-control" id="Parcela" name="Parcela" value="<?php if (isset($Fpar)){echo $Fpar;}?>"> </td>
													<td> Subparcela </td>
													<td> <input disabled type="text" class="form-control" id="Subparcela" name="Subparcela" value="<?php if(isset($Fsub)){echo $Fsub;}?>"> </td>
													<td> Partido </td>
													<td> <input disabled type="text" class="form-control" id="partido" name="partido" value="<?php if (isset($Fpartido)){echo $Fpartido;}?>">  </td>
												</tr>
											</table>
										</a>
									</div>
                  <!--- - - - - - - - Rubro 4 ---------------------->
                  <div class="accordion-group">
                    <div class="accordion-heading area ">
                      <a  id="r4" class="accordion-toggle" data-toggle="collapse" href="#rub4" onclick="estilo(this)">
                        RUBRO 4: TIERRA VALORES VIGENTES
                      </a>
                    </div>
                    <div id="rub4" class="accordion-body">
                      <div class="accordion-inner">
                        <table class="table table-bordered responsive-table">
													<thead>
                            <tr>
                              <th> Coef. de Ajuste </th>
                              <th> Valor Básico </th>
															<th> Superficie en m2. </th>
															<th> Valor </th>
															<th> V. B. Tierra 1955 </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td> <input type="number" step="any" class="form-control" onkeyup="ActualizaValor()" onchange="ActualizaValor()" onclick="ActualizaValor()" value="<?php if(isset($ajuste)){echo $ajuste;}?>" id="Ajuste" name="Ajuste"> </td>
                              <td> <input type="number" step="any" class="form-control" onkeyup="ActualizaValor()" onchange="ActualizaValor()" onclick="ActualizaValor()" value="<?php if(isset($basico)){echo $basico;}?>" id="Basico" name="Basico"> </td>
                              <td><input type="number" step="any" class="form-control" onkeyup="ActualizaValor()" onchange="ActualizaValor()" onclick="ActualizaValor()" value="<?php if(isset($superficie)){echo $superficie;}?>" id="Superficie" name="Superficie"> </td>
                              <td> <input type="number" step="any" class="form-control" value="<?php if(isset($valor)){echo $valor;}?>" id="Valor" name="Valor"> </td>
															<td> <input type="number" step="any" class="form-control" value="<?php if(isset($valor1955)){echo $valor1955;}?>" id="Valor1955" name="Valor1955"> </td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    </div>
                  </div>
									<!--- Rubro 7 ----->
									<div class="accordion-group">
                    <div class="accordion-heading area ">
                      <a  id="r7" class="accordion-toggle" data-toggle="collapse" href="#rub7">
                        RUBRO 7: DESTINO DEL EDIFICIO
                      </a>
                    </div>
                    <div id="rub7" class="accordion-body collapse">
                      <div class="accordion-inner">
												<div class="row">
													<div class="span5">
                        		<select class="form-control" name="tipo" id="tipo" required>
															<option value="0" selected disabled>Seleccione Tipo</option>
															<?php while($row = $tipo->fetch_assoc()) { ?>
																<?php $atributo = ($row['Tipo'] == $aux) ? 'selected' : '' ?>
														<?php echo "<option value='".$row['Tipo']."'".$atributo.">".$row['Tipo']. "</option>" ?>
													<?php } ?>
														</select>
											</div>
											<div class="span5">
												<?php if (isset($destino)){ ?>
													<select class='form-control' name='destino' id='destino'>
													<?php while($rows = $auxiliar->fetch_assoc()) { ?>
														<?php $atributo = ($rows['Codigo']." - ".$rows['Destino'] == $codigo) ? 'selected' : '' ?>
												<?php echo "<option value='".$rows['Codigo']." - ".$rows['Destino']."'".$atributo.">".$rows['Codigo']." - ".$rows['Destino']. "</option>" ?>
											<?php } ?> </select>
										<?php		} else { ?>
											<select class='form-control' name='destino' id='destino' onchange='mostrar()'>
											</select>
									<?php } ?>
											</div>
										</div>
									</div>
								</div>
								</div>
									<!--- - - - - - Rubro 10 ------------>
									<div class="accordion-group">
                    <div class="accordion-heading area ">
                      <a  id="r10" class="accordion-toggle" data-toggle="collapse" href="#rub10" onclick="estilo(this)">
                        RUBRO 10: OBSERVACIONES
                      </a>
                    </div>
                    <div id="rub10" class="accordion-body collapse">
                      <div class="accordion-inner">
                        <table class="table table-bordered responsive-table">
													<thead>
														<tr>
															<th style="text-align:left !important"> Observaciones </th>
														</tr>
													</thead>
													<tr>
														<td><textarea class="form-control" name="observacion" id="observacion" rows="6"> <?php if(isset($observacion)){echo strip_tags($observacion);}?></textarea> </td>
													</tr>
												</table>
											</div>
										</div>
									</div>
									<!--- - - - - - Croquis de ubicacion ------------>
									<div class="accordion-group">
                    <div class="accordion-heading area ">
                      <a  id="cro" class="accordion-toggle" data-toggle="collapse" href="#croquis" onclick="estilo(this)">
                        CROQUIS DE UBICACIÓN
                      </a>
                    </div>
                    <div id="croquis" class="accordion-body collapse">
                      <div class="accordion-inner">
                        <table class="table table-bordered responsive-table" style="width:65% !important;">
													<thead>
														<tr>
															<th colspan="4" style="text-align:left"> Croquis de ubicación </th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td style="width:20px !important; border-right-style:none !important"> <br> V1: </td>
															<td style="border-left-style:none"> <input step="any" class="form-control" value="<?php if(isset($valorCalle1)){echo $valorCalle1;}?>" id="ValorCalle1" name="ValorCalle1"> </td>
															<td style="width:20px !important; border-right-style:none !important"><br> C1: </td>
															<td style="border-left-style:none"> <input step="any" class="form-control" value="<?php if(isset($calle1)){echo $calle1;}?>" id="Calle1" name="Calle1"> </td>
														</tr>
														<tr>
															<td style="width:20px !important; border-right-style:none !important"> <br> V2: </td>
															<td style="border-left-style:none"> <input step="any" class="form-control" value="<?php if(isset($valorCalle2)){echo $valorCalle2;}?>" id="ValorCalle2" name="ValorCalle2"> </td>
															<td style="width:20px !important; border-right-style:none !important"><br> C2: </td>
															<td style="border-left-style:none"> <input step="any" class="form-control" value="<?php if(isset($calle2)){echo $calle2;}?>" id="Calle2" name="Calle2"> </td>
														</tr>
														<tr>
															<td style="width:20px !important; border-right-style:none !important"> <br> V3: </td>
															<td style="border-left-style:none"> <input step="any" class="form-control" value="<?php if(isset($valorCalle3)){echo $valorCalle3;}?>" id="ValorCalle3" name="ValorCalle3"> </td>
															<td style="width:20px !important; border-right-style:none !important"><br> C3: </td>
															<td style="border-left-style:none"> <input step="any" class="form-control" value="<?php if(isset($calle3)){echo $calle3;}?>" id="Calle3" name="Calle3"> </td>
														</tr>
														<tr>
															<td style="width:20px !important; border-right-style:none !important"> <br> V4: </td>
															<td style="border-left-style:none"> <input step="any" class="form-control" value="<?php if(isset($valorCalle4)){echo $valorCalle4;}?>" id="ValorCalle4" name="ValorCalle4"> </td>
															<td style="width:20px !important; border-right-style:none !important"><br> C4: </td>
															<td style="border-left-style:none"> <input step="any" class="form-control" value="<?php if(isset($calle4)){echo $calle4;}?>" id="Calle4" name="Calle4"> </td>
														</tr>
													</tbody>
												</table>
												<table class="table table-bordered responsive-table" style="width:30% !important;float:right !important;margin-top:-240px !important">
													<thead>
														<th colspan="2"> RUBRO 6 </th>
													</thead>
													<tbody>
														<tr>
															<td><br> Rubro 5: </td>
															<td> <input disabled type="number" step="any" value="<?php if(isset($edificio)){echo round($edificio);}?>" class="form-control" id="Rubro5" name="Rubro5"> </td>
														</tr>
														<tr>
															<td><br> Edificio: </td>
															<td> <input disabled type="number" step="any" class="form-control" id="Edificio" name="Edificio"> </td>
														</tr>
														<tr>
															<td><br> Mejoras: </td>
															<td> <input disabled type="number" step="any" class="form-control" id="Mejora" name="Mejora"> </td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
              </div> <!-- /accordion -->
              </div> <!-- /controls -->
            </div> <!-- /control-group -->
						<div class="col-sm-6">
						  <div class="form-group">
								<h5> No se olvide si realiza algún cambio en los FORMULARIOS deberá volver a EDITAR <br> este formulario para que pueda actualizar los cambios. </h5>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="form-group">
								<table>
									<tr> <td> <input type="checkbox" value="1" id="mostrarProf" name="mostrarProf" <?php if (isset($mostrarProf)){echo $mostrarProf;}?>> </td> </tr>
									<tr> <td> <h5> No mostrar profesional </h5> </td> </tr>
								</table>
							</div>
						</div>
						<div class="col-sm-4">
						  <div class="form-group">
            <a><button class="btn btn-success" name="insertar">Finalizar</button></a>
            <a href="" ><button onclick="self.close()" class="btn">Cancelar</button></a>
					</div>
				</div>
						<?php
								if (isset($_POST['insertar'])){

									if(isset($_POST['tipo'])){
										$destino1 = explode(" ", $_POST['destino']);
										$destino2 = $destino1[0];
										$auxiliar1 = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM destinos WHERE Codigo='$destino2'"));
										$destino = $auxiliar1['cNo']; $auxDestino= $auxiliar1['Codigo'];
									} else {
										$destino = "";
										$auxDestino = "";
									}
									$obs= $_POST['observacion'];
									$observacionAux= "Disp. 78/06 - Cód. Nomenclador de Destino: ".$auxDestino." - ".$obs;
									$observacion= nl2br($observacionAux);
									if (isset($_GET['idform'])){
										if ($auxObs == $destino){
											$observacion = $_POST['observacion'];
										}
										$sql = updateForm901($idform, $_POST['Ajuste'],$_POST['Basico'],$_POST['Superficie'],$_POST['Valor'],$_POST['Valor1955'],$destino,
										$observacion,$_POST['ValorCalle1'],$_POST['ValorCalle2'],$_POST['ValorCalle3'],$_POST['ValorCalle4'],$_POST['Calle1'],
										$_POST['Calle2'],$_POST['Calle3'],$_POST['Calle4'],$_POST['mostrarProf']);

										mysqli_query($conexion,$sql)
										or die("Problemas en la actualizacion".mysqli_error($conexion));
									} else {
											$obra = mysqli_query($conexion,"SELECT parcela,subparcela FROM obras WHERE codObra = '$idobra'");
											$ob = mysqli_fetch_array($obra);

											$sql = insertForm901($ob['parcela'],$ob['subparcela'],$_POST['Ajuste'],$_POST['Basico'],$_POST['Superficie'],$_POST['Valor'],$_POST['Valor1955'],$destino,
											$observacion,$_POST['ValorCalle1'],$_POST['ValorCalle2'],$_POST['ValorCalle3'],$_POST['ValorCalle4'],$_POST['Calle1'],
											$_POST['Calle2'],$_POST['Calle3'],$_POST['Calle4'],$_POST['mostrarProf']);

											include("sql/sqlconnection.php");

											if($dbStatus != "Exitosa")
												exit($dbStatus);

											try {
												// use exec() because no results are returned
												$conn->exec($sql);
												$lastID = $conn->lastInsertId();
												$queryCount = "SELECT COUNT(*) AS cuenta FROM `cedulaformularios` WHERE nroFormulario = 901 AND idCedula = $Cedula";
												$count = $conn->query($queryCount)->fetch();
												$version = ((int)$count["cuenta"]) + 1;
												$queryObra = "INSERT INTO cedulaformularios
																			(idCedulaFormularios, idCedula, tipoCedula, nroFormulario, `version`, `data`, codForm)
																			VALUES (default, $Cedula, $TipoDeCedula, 901, $version, YEAR(CURDATE()), $lastID)";
												$conn->exec($queryObra);
												} catch(PDOException $e) {
												echo "Fallo el registro:" . $e->getMessage();
												}

											$conn = null;
								}
								$tierraUp= $_POST['Valor'];
								$totalUp= (real)$tierraUp+(real)$edificio+(real)$mejora;

								if (isset($TipoDeCedula)) {
										switch ($TipoDeCedula) {
											case '1': $cedulaUpdate= "UPDATE cedula10707 SET edificio='$edificio', mejora='$mejora', tierra='$tierraUp', total= '$totalUp' WHERE idCedula707='$Cedula'"; break;
											case '2': $cedulaUpdate= "UPDATE obraunidadfuncional SET tierra='$tierraUp', vpropio='$edificio' WHERE idCedulaPH='$Cedula'"; break;
											case '3': $suma = mysqli_fetch_array(mysqli_query($conexion,"SELECT vcomun FROM cedulade WHERE idCedulaDE='$Cedula'"));
																$vcomun=$suma['vcomun'];
																$totalEdificio= (real)$edificio+(real)$vcomun;
																$cedulaUpdate= "UPDATE cedulade SET tierra='$tierraUp', vpropio='$edificio', totalEdificio='$totalEdificio' WHERE idCedulaDE='$Cedula'";
											  break;
										}
									}
								if (isset($cedulaUpdate)){
									mysqli_query($conexion,$cedulaUpdate)
									or die("Problemas en la actualizacion".mysqli_error($conexion));
								}
									echo "<script language='javascript'>";
									echo "alert('El formulario 901 se cargo correctamente');";
									echo 'window.opener.getFormularios();';
									echo "window.close();";
									echo "</script>";

								}
						?>


					</form>
					</div> <!-- /widget-content -->

				</div> <!-- /widget -->

		    </div> <!-- /span8 -->




	      </div> <!-- /row -->

	    </div> <!-- /container -->

	</div> <!-- /main-inner -->

</div> <!-- /main -->




  </body>
</html>
