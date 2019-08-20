<?php
include("sesion.php");
		$pagina='formularioA901rub2pto1PHP';
		include("encabezado.php");
		include("seguridadForm.php");
		include("sql/insertFormulario.php");
		include("sql/update.php");

		//FORMULARIO NUEVO
		if (isset($_GET['idCedula'])){
			include ("sql/mostrarDatosObra.php");
			include ('sql/mostrarFormA901.php'); //SE INCLUYE PARA EL VALOR DE EDIFCIO
		//FORMULARIO PARA EDITAR
		} else {
			$idform = $_GET['idform'];
			//DATOS DE IDCEDULA Y EL TIPO DE CEDULA
			$formularioA901 = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedulaformularios WHERE (codForm=$idform) and (nroFormulario='A901')"));
			$Cedula = $formularioA901['idCedula']; $TipoDeCedula= $formularioA901['tipoCedula'];
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
			include ('sql/mostrarFormA901.php'); //DATOS DE EDIFICIO Y DEL FORMULARIO A901
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
		if ((isset($articulo)) && ($articulo === '1')) {
		   $checked = 'checked="checked" ';
		} else {
		    $checked = ' ';
		}
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
	function mostrar() {
	var destino = document.getElementById("destino"),
	observaciones = document.getElementById("observaciones");
	observaciones.value = destino.value;
}
</script>
<body>
	<script>
	$(document).ready(function () {
	    $("#valorEntero").keyup(function () {
	        var value = $(this).val();
	        $("#TierraAct").val(value);
	    });
	});
	</script>
<div class="main">

	<div class="main-inner">

	    <div class="container">

	      <div class="row">

	      	<div class="span12">

	      		<div class="widget ">

	      			<div class="widget-header">
	      					<i class="icon-th-large"></i>
	      				<h3>Formulario A901</h3>
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
													<td> <input disabled type="text" class="form-control" id="Parcela" name="Parcela" value="<?php if(isset($Fpar)){echo $Fpar;}?>"> </td>
													<td> Subparcela </td>
													<td> <input disabled type="text" class="form-control" id="Subparcela" name="Subparcela" value="<?php if(isset($Fsub)){echo $Fsub;}?>"> </td>
													<td> Partido </td>
													<td> <input disabled type="text" class="form-control" id="partido" name="partido" value="<?php if(isset($Fpartido)){echo $Fpartido;}?>">  </td>
												</tr>
											</table>
										</a>
									</div>
                  <!--- - - - - - - - Tierra ---------------------->
                  <div class="accordion-group">
                    <div class="accordion-heading area ">
                      <a  id="r2" class="accordion-toggle" data-toggle="collapse" href="#rub2" onclick="estilo(this)">
                        TIERRA
                      </a>
                    </div>
                    <div id="rub2" class="accordion-body">
                      <div class="accordion-inner">
                        <table class="table table-bordered responsive-table">
                          <thead>
                            <tr>
                              <th><center> Coef. de Ajuste </center></th>
                              <th><center> Valor Básico </center></th>
															<th><center> Superficie en m2. </center></th>
															<th><center> Valor Entero </center></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td> <input type="number" class="form-control multi" step="any" value="<?php if(isset($ajuste)){echo $ajuste;}?>" id="Ajuste" name="Ajuste" onkeyup="multi();sumar();"> </td>
                              <td> <input type="number" class="form-control multi" step="any" value="<?php if(isset($tierraBas)){echo $tierraBas;}?>" id="TierraBas" name="TierraBas" onkeyup="multi();sumar();"> </td>
                              <td> <input type="number" class="form-control multi" step="any" value="<?php if(isset($superficie)){echo $superficie;}?>" id="Superficie" name="Superficie" onkeyup="multi();sumar();"> </td>
                              <td> <input type="number" class="form-control" step="any" value="<?php if(isset($tierraAct)){echo $tierraAct;}?>" id="valorEntero" name="valorEntero" onkeyup="sumar();"> </td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    </div>
                  </div>
									<!--- Resumen de valores ----->
									<div class="accordion-group">
                    <div class="accordion-heading area ">
                      <a  id="val" class="accordion-toggle" data-toggle="collapse" href="#valores" onclick="estilo(this)">
                        RESUMEN DE VALORES
                      </a>
                    </div>
                    <div id="valores" class="accordion-body collapse">
                      <div class="accordion-inner">
                        <table class="table table-bordered responsive-table">
													<thead>
														<tr>
															<th> Formulario </th>
															<th><center> Valor actualizado </center></th>
														</tr>
													</thead>
													<tr>
														<td><center> <br>Tierra </center></td>
														<td> <input type="number" step="any" value="<?php if(isset($tierra)){echo $tierra;}elseif (isset($tierraAct)){echo $tierraAct;}?>" class="form-control campos" id="TierraAct" name="TierraAct" onkeyup="sumar();"> </td>
													</tr>
													<tr>
														<td><center> <br>Edificio </center> </td>
														<td> <input type="number" step="any" value="<?php if(isset($edificio)){echo round($edificio);}?>" class="form-control campos" id="EdifAct" name="EdifAct" onkeyup="sumar();"> </td>
													</tr>
													<tr>
														<td><center> <br>Mejoras </center> </td>
														<td> <input type="number" step="any" value="<?php if(isset($mejora)){echo $mejora;}elseif (isset($mejAct)){echo $mejAct;}?>" class="form-control campos" id="MejAct" name="MejAct" onkeyup="sumar();"> </td>
													</tr>
													<tr>
														<td><center> <br>Común </center> </td>
														<td> <input type="number" step="any" class="form-control campos" value="<?php if (isset($comAct)){echo $comAct;}?>" id="ComAct" name="ComAct" onkeyup="sumar();"> </td>
													</tr>
													<tr>
														<td><center> <br>Postura </center> </td>
														<td> <input class="form-control campos" step="any" value="<?php if (isset($postura)){echo $postura;}?>" id="Postura" name="Postura" onkeyup="sumar();"> </td>
													</tr>
													<tr>
														<td><br> Total </td>
														<td> <input class="form-control" step="any" id="demo" name="demo"> </td>

														<script type="text/javascript">
														function sumar() {
														  var total = 0;
														  $(".campos").each(function() {
														    if (isNaN(parseFloat($(this).val()))) {
														      total += 0;
														    } else {
														      total += parseFloat($(this).val());
														    }
														  });
															document.getElementById("demo").value=total;
														}
														function multi(){
															  m1 = document.getElementById("Ajuste").value;
															  m2 = document.getElementById("TierraBas").value;
																m3 = document.getElementById("Superficie").value;
															  total = m1*m2*m3;
																if (total == 0){
																	total = "";
																}
																document.getElementById("valorEntero").value=total;
																document.getElementById("TierraAct").value=total;
															}
														</script>

														<td> <br> Total(Coef. Act.) </td>
														<td> <input disabled type="number" class="form-control" value="0" id="CoefAjuste" name="CoefAjuste"> </td>
													</tr>
												</table>
											</div>
										</div>
									</div>
									<!--- - - - - - Destino principal ------------>
									<div class="accordion-group">
                    <div class="accordion-heading area ">
                      <a  id="r7" class="accordion-toggle" data-toggle="collapse" href="#rub7" onclick="estilo(this)">
                       	DESTINO PRINCIPAL
                      </a>
                    </div>
                    <div id="rub7" class="accordion-body collapse">
                      <div class="accordion-inner">
												<div class="row">
													<div class="span4">
                        		<select class="form-control" name="tipo" id="tipo" required>
															<option value="0" selected disabled>Seleccione Tipo</option>
															<?php while($row = $tipo->fetch_assoc()) { ?>
																<?php $atributo = ($row['Tipo'] == $aux) ? 'selected' : '' ?>
														<?php echo "<option value='".$row['Tipo']."'".$atributo.">".$row['Tipo']. "</option>" ?>
													<?php } ?>
														</select>
											</div>
											<div class="span4">
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
											<div class="span3">
												<input type="checkbox" value="1" id="Articulo" name="Articulo" <?php if(isset($checked)){echo $checked;}?>> CUMPLE ARTICULO 8° 2010/94 </input>
										</div>
										</div>
									</div>
								</div>
								</div>

									<!--- - - - - - Observaciones ------------>
									<div class="accordion-group">
                    <div class="accordion-heading area ">
                      <a  id="ob" class="accordion-toggle" data-toggle="collapse" href="#observaciones" onclick="estilo(this)">
                        OBSERVACIONES
                      </a>
                    </div>
                    <div id="observaciones" class="accordion-body collapse">
                      <div class="accordion-inner">
                        <table class="table table-bordered responsive-table">
													<thead>
														<tr>
															<th style="text-align:left !important"> Observaciones </th>
														</tr>
													</thead>
													<tr>
														<td><textarea class="form-control" name="observacion" id="observacion" rows="6"> <?php if(isset($observacion)){echo strip_tags($observacion);}?> </textarea> </td>
													</tr>
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
							if(isset($_POST['CoefAjuste'])){
								$coefAjuste = $_POST['CoefAjuste'];
							} else {
								$coefAjuste = 0;
							}
							if(isset($_POST['Articulo'])){
								$articulo = $_POST['Articulo'];
							} else {
								$articulo= 0;
							}
							$obs= $_POST['observacion'];
							$observacionAux= "Disp. 78/06 - Cód. Nomenclador de Destino: ".$auxDestino." - ".$obs;
							$observacion= nl2br($observacionAux);
							if (isset($_GET['idform'])){
								if ($auxObs == $destino){
									$observacion = $_POST['observacion'];
								}
								$sql = updateFormA901($idform, $_POST['Ajuste'],$_POST['TierraBas'],$_POST['Superficie'],$_POST['TierraAct'],$_POST['EdifAct'],$_POST['MejAct'],
								$_POST['ComAct'],$_POST['Postura'],$coefAjuste,$destino,$observacion,$articulo,$_POST['mostrarProf']);

								mysqli_query($conexion,$sql)
								or die("Problemas en la actualizacion".mysqli_error($conexion));
							} else {
							$obra = mysqli_query($conexion,"SELECT parcela, subparcela FROM obras WHERE codObra = '$idobra'");
							$ob = mysqli_fetch_array($obra);

							$sql = insertFormA901($ob['parcela'],$ob['subparcela'],$_POST['Ajuste'],$_POST['TierraBas'],$_POST['Superficie'],$_POST['TierraAct'],
							$_POST['EdifAct'],$_POST['MejAct'],$_POST['ComAct'],$_POST['Postura'],$coefAjuste,$destino,$observacion,$articulo,$_POST['mostrarProf']);

							include("sql/sqlconnection.php");

							if($dbStatus != "Exitosa")
								exit($dbStatus);

							try {
								// use exec() because no results are returned
								$conn->exec($sql);
								$lastID = $conn->lastInsertId();
								$queryCount = "SELECT COUNT(*) AS cuenta FROM `cedulaformularios` WHERE nroFormulario = 'A901' AND idCedula = $Cedula";
								$count = $conn->query($queryCount)->fetch();
								$version = ((int)$count["cuenta"]) + 1;
								$queryObra = "INSERT INTO cedulaformularios
															(idCedulaFormularios, idCedula, tipoCedula, nroFormulario, `version`, `data`, codForm)
															VALUES (default, $Cedula, $TipoDeCedula, 'A901', $version, YEAR(CURDATE()), $lastID)";
								$conn->exec($queryObra);
								} catch(PDOException $e) {
								echo "Fallo el registro:" . $e->getMessage();
								}

							$conn = null;
						}
							$tierraUp= $_POST['TierraAct'];
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
							echo "alert('El formulario A901 se cargo correctamente');";
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
