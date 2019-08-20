<?php
	include("sesion.php");
		$pagina='formulario910rub2pto1PHP';
		include ("encabezado.php");
		include("seguridadForm.php");

		include ("sql/insertFormulario.php");
		include ("sql/update.php");
		//FORMULARIO NUEVO
		if (isset($_GET['idCedula'])){
			include ("sql/mostrarDatosObra.php");
		//FORMULARIO PARA EDITAR
		} else {
			$idform = $_GET['idform'];
			//DATOS DE IDCEDULA Y EL TIPO DE CEDULA
			$formulario910 = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedulaformularios WHERE (codForm=$idform) and (nroFormulario='910')"));
			$Cedula = $formulario910['idCedula']; $TipoDeCedula= $formulario910['tipoCedula'];
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
		}
		//PARA CALCULAR EL VALOR DEL EDIFICIO Y PARA LOS VALORES DEL 910 YA CARGADO (SI EXISTE)
		include ('sql/mostrarForm910.php');
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
<body>
<div class="main">

	<div class="main-inner">

	    <div class="container">

	      <div class="row">

	      	<div class="span12">

	      		<div class="widget ">

	      			<div class="widget-header">
	      					<i class="icon-th-large"></i>
	      				<h3>Formulario 910</h3>
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
                  <!--- - - - - - - - Rubro 4 ---------------------->
                  <div class="accordion-group">
                    <div class="accordion-heading area ">
                      <a  id="r4" class="accordion-toggle" data-toggle="collapse" href="#rub4" onclick="estilo(this)">
                        RUBRO 4: VALUACIÓN
                      </a>
                    </div>
                    <div id="rub4" class="accordion-body">
                      <div class="accordion-inner">
                        <table class="table table-bordered responsive-table">
                          <tbody>
                            <tr>
															<td style="width:250px !important"> <br> Tierra libre de mejoras (Form. 911). </td>
                              <td style="width:70px !important;border-right-style:none !important"><br> Superficie: </td>
															<td style="border-left-style:none !important"> <input type="number" step="any" class="form-control" value="<?php if(isset($superficie)){echo $superficie;}?>" id="Superficie" name="Superficie"> </td>
                              <td> <input class="form-control suma" step="any" value="<?php if(isset($tierraBas)){echo $tierraBas;}?>" id="TierraBas" name="TierraBas"> </td>
														</tr>
														<tr>
															<td colspan="3"> <br> Edificio Grupo 1. (Total Rubro 2). </td>
                              <td> <input class="form-control suma" step="any" value="<?php if(isset($edificio)){echo round($edificio);}?>" id="EdifBas" name="EdifBas"> </p> </disabled> </td>
														</tr>
														<tr>
															<td colspan="3"><br> Valor de la tierra libre de mejoras + edificios Grupo 1 (a + b) </td>
                              <td> <input class="form-control campos" step="any" id="mejyedi" name="mejyedi"> </td>
                            </tr>
														<tr>
															<td colspan="3"><br> Edificio Grupo 2. (Total RUBRO 3) </td>
															<td><input class="form-control campos" step="any" value="<?php if(isset($edifAct)){echo $edifAct;}?>" id="EdifAct" name="EdifAct">  </p> </disabled> </td>
														</tr>
														<tr>
															<td colspan="3"><br> Instalaciones y obras accesorias (Form. 912). </td>
															<td> <input class="form-control campos" step="any" value="<?php if(isset($mejora)){echo round($mejora);}?>" id="MejBas912" name="MejBas912"> </td>
														</tr>
														<tr>
															<td colspan="3"> <br> Plantaciones (Form. 912). </td>
															<td> <input class="form-control campos" step="any" value="<?php if(isset($planBas)){echo round($planBas);}?>" id="PlanBas" name="PlanBas"> </td>
															<td colspan="2"> <br> Total(Coef. Act.) </td>
															<td> <input disabled class="form-control" value="0" id="CoefAjuste" name="CoefAjuste"> </td>
														</tr>
														<tr>
															<td colspan="2" style="border-style:none !important"> </td>
															<td> <br> TOTAL </td>
															<td> <input class="form-control" step="any" id="demo"> </td>

															<script type="text/javascript">
																	$(document).ready(function() {
																		campos();
																	});
																	function campos() {
																		total=0;total2=0;
																		//itera por todos los input con la clase campos y va almacenando el valor en total
																		$.each($('.suma'), function (index, valu) {
																			  num=Number($(valu).val());
																				total=total+num;
																			});
																		$.each($('.campos'), function (index, valu) {
																				num=Number($(valu).val());
																				total2=total2+num;
																			});
																		document.getElementById("mejyedi").value=dosDecimales(total);
																		document.getElementById("demo").value=dosDecimales(total2);
																		setTimeout ("campos()", 50);
																		function dosDecimales(n) {
																		  let t=n.toString();
																		  let regex=/(\d*.\d{0,2})/;
																		  return t.match(regex)[0];
																		}
																	}
															</script>
														</tr>
                        </tbody>
                        </table>
                    </div>
                    </div>
                  </div>
									<!--- Rubro 5 ----->
									<div class="accordion-group">
                    <div class="accordion-heading area ">
                      <a  id="r5" class="accordion-toggle" data-toggle="collapse" href="#rub5" onclick="estilo(this)">
                        RUBRO 5: DETALLE Y CANTIDAD DE LOS FORMULARIOS ANEXOS QUE SE ACOMPAÑAN
                      </a>
                    </div>
                    <div id="rub5" class="accordion-body collapse">
                      <div class="accordion-inner">
                        <table class="table table-bordered responsive-table">
													<thead>
														<tr>
															<th style="text-align:left !important"> Detalle </th>
														</tr>
													</thead>
													<tr>
														<td><textarea class="form-control" name="Articulo" id="Articulo" rows="6"><?php if(isset($detalleConc)){echo $detalleConc;}?> </textarea> </td>
													</tr>
												</table>
											</div>
										</div>
									</div>
									<!--- - - - - - Rubro 6 ------------>
									<div class="accordion-group">
                    <div class="accordion-heading area ">
                      <a  id="r6" class="accordion-toggle" data-toggle="collapse" href="#rub6" onclick="estilo(this)">
                        RUBRO 6: OBSERVACIONES
                      </a>
                    </div>
                    <div id="rub6" class="accordion-body collapse">
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
            <a><button class="btn btn-success" name="insertar">Finalizar</button></a>
            <a href="" ><button onclick="self.close()" class="btn">Cancelar</button></a>

						<?php
						if (isset($_POST['insertar'])){

							if (isset($_POST['CoefAjuste'])) {
								$coefAjuste = $_POST['CoefAjuste'];
							}	else {
							  	$coefAjuste = " ";
						  	}
							$observacionAux= $_POST['observacion'];
							$observacion= nl2br($observacionAux);
							if(isset($_GET['idform'])){
								$sql = updateForm910($idform,$_POST['Superficie'],$_POST['TierraBas'],$_POST['mejyedi'],$_POST['EdifBas'],$_POST['EdifAct'],
								$_POST['MejBas912'],$_POST['PlanBas'],$coefAjuste,$observacion,$_POST['Articulo']);

								mysqli_query($conexion,$sql)
								or die("Problemas en la actualizacion".mysqli_error($conexion));
							} else {
								$obra = mysqli_query($conexion,"SELECT parcela,subparcela FROM obras WHERE codObra = '$idobra'");
								$ob = mysqli_fetch_array($obra);

								$sql = insertForm910($ob['parcela'],$ob['subparcela'],$_POST['Superficie'],$_POST['TierraBas'],
								$_POST['mejyedi'],$_POST['EdifBas'],$_POST['EdifAct'],$_POST['MejBas912'],$_POST['PlanBas'],$coefAjuste,$observacion,$_POST['Articulo']);

								include("sql/sqlconnection.php");

								if($dbStatus != "Exitosa")
									exit($dbStatus);

								try {
									// use exec() because no results are returned
									$conn->exec($sql);
									$lastID = $conn->lastInsertId();
									$queryCount = "SELECT COUNT(*) AS cuenta FROM `cedulaformularios` WHERE nroFormulario = 910 AND idCedula = $Cedula";
									$count = $conn->query($queryCount)->fetch();
									$version = ((int)$count["cuenta"]) + 1;
									$queryObra = "INSERT INTO cedulaformularios
																(idCedulaFormularios, idCedula, tipoCedula, nroFormulario, `version`, `data`, codForm)
																VALUES (default, $Cedula, $TipoDeCedula, 910, $version, YEAR(CURDATE()), $lastID)";
									$conn->exec($queryObra);
									} catch(PDOException $e) {
									echo "Fallo el registro:" . $e->getMessage();
									}

								$conn = null;
							}
						$tierraUp= $_POST['TierraBas'];
						$totalUp= (real)$tierraUp+(real)$edificio+(real)$mejora;

						//if (isset($tipocedula)){
						//		switch ($tipocedula) {
						//			case '1': $cedulaUpdate= "UPDATE cedula10707 SET edificio='$edificio', mejora='$mejora', tierra='$tierraUp', total= '$totalUp' WHERE idCedula707='$Cedula'"; break;
						//			case '2':	$cedulaUpdate= "UPDATE obraunidadfuncional SET tierra='$tierraUp', vpropio='$edificio' WHERE idCedulaPH='$Cedula'"; break; //EN DUDA
						//			case '3': $suma = mysqli_fetch_array(mysqli_query($conexion,"SELECT vcomun FROM cedulade WHERE idCedulaDE='$Cedula'")); // EN DUDA
						//								$vcomun=$suma['vcomun'];
						//								$totalEdificio= (real)$edificio+(real)$vcomun;
						//								$cedulaUpdate= "UPDATE cedulade SET tierra='$tierraUp', vpropio='$edificio', totalEdificio='$totalEdificio' WHERE idCedulaDE='$Cedula'";
						//				break;
						//		}
						if (isset($TipoDeCedula)) {
								switch ($TipoDeCedula) {
									case '1': $cedulaUpdate= "UPDATE cedula10707 SET edificio='$edificio', mejora='$mejora', tierra='$tierraUp', total= '$totalUp' WHERE idCedula707='$Cedula'"; break;
									case '2': $cedulaUpdate= "UPDATE obraunidadfuncional SET tierra='$tierraUp', vpropio='$edificio' WHERE idCedulaPH='$Cedula'"; break; //EN DUDA
									case '3': $suma = mysqli_fetch_array(mysqli_query($conexion,"SELECT vcomun FROM cedulade WHERE idCedulaDE='$Cedula'"));// EN DUDA
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
							echo "alert('El formulario 910 se cargo correctamente');";
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
