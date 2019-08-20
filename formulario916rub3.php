<?php
include("sesion.php");
		$pagina='formulario916rub3PHP';
	include("encabezado.php");
	include("seguridadForm.php");
	?>

<!-- FUNCION JS QUE VA EN CALCULOS -->
	<script>
		function checkProf(element) {

			if(element) {
				obj['firmaprof'] = 1;
			} else {
				obj['firmaprof'] = 0;
			}
			sessionStorage.setItem("obj", JSON.stringify(obj));
		}
	</script>
<!DOCTYPE html>
<html lang="es">

	<head>
		<style>
			table th.text-center, td.text-center {
			text-align: center;
			}

		</style>

	</head>

	<body>



		<div class="main">



					<div class="widget-header">
						<i class="icon-th-large"></i>
						<h3 id="formNum">Formulario 916</h3>
					</div> <!-- /widget-header -->

					<div class="widget-content">

						<div class="control-group">

							<div class="controls">

								<div class="accordion" id="accordion2">
									<div class="accordion-group"><!-- rub 3 -->
										<div class="accordion-heading">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" >
												RUBRO 3: ESTADO DE CONSERVACION DEL EDIFICIO
											</a>
										</div>
										<div class="accordion-body">
											<div class="accordion-inner">
												<a href="formulario916rub2pto2.php"><button class="btn btn-success">Anterior</button></a>
												<a><button class="btn btn-success" onClick="insertDB();">Finalizar</button></a>
												<a href="" ><button onclick="self.close()" class="btn">Cancelar</button></a>
												<br><br>
											  <table class="table table-bordered responsive-table">
												  <thead>
													  <tr>
														  <th class='col-sm-2'>Tipo</th>
															<th class='col-sm-2 text-center' colspan="3">A</th>
															<th class='col-sm-2 text-center' colspan="3">B</th>
															<th class='col-sm-2 text-center' colspan="3">C</th>
														</tr>
													</thead>
																								<tbody>
																								<tr>
																								<td>Rango de Puntaje</td>
																								<td class='text-center'>Mas de 75</td>
																								<td class='text-center'>De 49 a 74</td>
																								<td class='text-center'>Hasta 48</td>

																								<td class='text-center'>Mas de 74</td>
																								<td class='text-center'>De 49 a 72</td>
																								<td class='text-center'>Hasta 48</td>

																								<td class='text-center'>Mas de 48</td>
																								<td class='text-center'>De 34 a 47</td>
																								<td class='text-center'>Hasta 33</td>
																								</tr>
																								<tr>
																								<td>Suma de Puntaje</td>
																								<td>
																									<div class="controls" name="sumaEstConPjeA1" id="sumaEstConPjeA1">0
																													<!--<input type="text" class="form-control" name="sumaEstConPjeA1" id="sumaEstConPjeA1" disabled>-->
																												</div> <!-- /controls -->
																								</td>
																								<td>
																									<div class="controls" name="sumaEstConPjeA2" id="sumaEstConPjeA2">0
																														<!--<input type="text" class="form-control" name="sumaEstConPjeA2" id="sumaEstConPjeA2" disabled>-->
																													</div> <!-- /controls -->
																								</td>
																								<td>
																									<div class="controls" name="sumaEstConPjeA3" id="sumaEstConPjeA3">0
																														<!--<input type="text" class="form-control" name="sumaEstConPjeA3" id="sumaEstConPjeA3" disabled>-->
																													</div> <!-- /controls -->
																								</td>

																								<td>
																									<div class="controls" name="sumaEstConPjeB1" id="sumaEstConPjeB1">0
																													<!--<input type="text" class="form-control" name="sumaEstConPjeB1" id="sumaEstConPjeB1" disabled>-->
																												</div> <!-- /controls -->
																								</td>
																								<td>
																									<div class="controls" name="sumaEstConPjeB2" id="sumaEstConPjeB2">0
																														<!--<input type="text" class="form-control" name="sumaEstConPjeB2" id="sumaEstConPjeB2" disabled>-->
																													</div> <!-- /controls -->
																								</td>
																								<td>
																									<div class="controls" name="sumaEstConPjeB3" id="sumaEstConPjeB3">0
																														<!--<input type="text" class="form-control" name="sumaEstConPjeB3" id="sumaEstConPjeB3" disabled>-->
																													</div> <!-- /controls -->
																								</td>

																								<td>
																									<div class="controls" name="sumaEstConPjeC1" id="sumaEstConPjeC1">0
																													<!--<input type="text" class="form-control" name="sumaEstConPjeC1" id="sumaEstConPjeC1" disabled>-->
																												</div> <!-- /controls -->
																								</td>
																								<td>
																									<div class="controls" name="sumaEstConPjeC2" id="sumaEstConPjeC2">0
																														<!--<input type="text" class="form-control" name="sumaEstConPjeC2" id="sumaEstConPjeC2" disabled>-->
																													</div> <!-- /controls -->
																								</td>
																								<td>
																									<div class="controls" name="sumaEstConPjeC3" id="sumaEstConPjeC3">0
																														<!--<input type="text" class="form-control" name="sumaEstConPjeC3" id="sumaEstConPjeC3" disabled>-->
																													</div> <!-- /controls -->
																								</td>
																								</tr>
																								<tr>
																								<td>Estado</td>

																								<td class='text-center'>B</td>
																								<td class='text-center'>R</td>
																								<td class='text-center'>M</td>

																								<td class='text-center'>B</td>
																								<td class='text-center'>R</td>
																								<td class='text-center'>M</td>

																								<td class='text-center'>B</td>
																								<td class='text-center'>R</td>
																								<td class='text-center'>M</td>

																								</tr>
																								</tbody>
																								</table>

												<table class="table table-bordered responsive-table">
													<thead>
														<tr>
															<th class='col-sm-9 text-center' colspan="11">Puntaje Reciclado</th>
															<th class='col-sm-1 text-center'>Suma Ptos</th>
													</tr>
													</thead>
													<tbody>
														<tr>
															<td>

																	Paredes (12)
																	<input id="ParedReci" type="checkbox" name="ParedReci" value="1" onClick="reciValue(this);">

															</td>

															<td>

																	Esqueleto (5)
																		<input id="EsqueReci" type="checkbox" name="EsqueReci" value="1" onClick="reciValue(this);">

															</td>

															<td>
																	Armadura (10)
																	<input id="ArmaReci" type="checkbox" name="ArmaReci" value="1" onClick="reciValue(this);">

															</td>
															<td>
																	Techos (33)
																	<input id="TechoReci" type="checkbox" name="TechoReci" value="1" onClick="reciValue(this);">

															</td>

															<td>
																Revoques (5)
																	<input id="RevoqReci" type="checkbox" name="RevoqReci" value="1" onClick="reciValue(this);">

															</td>

															<td>
																Pisos (15)
																	<input id="PisosReci" type="checkbox" name="PisosReci" value="1" onClick="reciValue(this);">

															</td>

															<td>
																	Aberturas madera (4)
																	<input id="MadeReci" type="checkbox" name="MadeReci" value="1" onClick="reciValue(this);">

															</td>

															<td>
																	Aberturas metal (5)
																	<input id="MetaReci" type="checkbox" name="MetaReci" value="1" onClick="reciValue(this);">

															</td>
															<td>
																	Gas (5)
																	<input id="GasReci" type="checkbox" name="GasReci" value="1" onClick="reciValue(this);">

															</td>
															<td>
																	Luz (3)
																	<input id="LuzReci" type="checkbox" name="LuzReci" value="1" onClick="reciValue(this);">

															</td>
															<td>
																	Agua (3)
																	<input id="AguaReci" type="checkbox" name="AguaReci" value="1" onClick="reciValue(this);">

															</td>
															<td>
																	<div class="controls" name="sumaPta" id="sumaPta">0
																		<!--<input type="text" class="form-control" name="sumaPta" id="sumaPta" readonly>-->
																	</div> <!-- /controls -->
															</td>
														</tr>


													</tbody>
												</table>


											</div>
										</div>
									</div>

									<div class="accordion-group"><!-- rub 4  -->
										<div class="accordion-heading area">
											<a class="accordion-toggle" data-toggle="collapse" href="#collapseFour">
												RUBRO 4: DETERMINACION DEL VALOR
											</a>
										</div>
										<div id="collapseFour" class="accordion-body collapse">
											<div class="accordion-inner">
												<table class="table table-bordered responsive-table">
													<thead>
														<tr>
															<th class='col-sm-1 text-center'>1<br>Tipo de Edificio</th>
															<th class='col-sm-3 text-center'>2<br>Cant de cuadros tachados <br> en cada inciso</th>
															<th class='col-sm-3 text-center'>3<br>Valor basico por m2 <br> por cada uno</th>
															<th class='col-sm-3 text-center'>4<br>Multiplicacion <br> de valores</th>
															<th class='col-sm-2 text-center'>5<br>Valor Unitario </th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td class='text-center'>A</td>
															<td><input class="form-control text-center" type="text" name="capaTextoA" id="capaTextoA" disabled></td>
															<td><input class="form-control text-center" type="text" name="form916A" id="form916A" disabled></td>
															<td><input class="form-control text-center" type="text" name="vbA" id="vbA" disabled></td>
															<td rowspan="6"><input class="form-control btn-info text-center" type="text" name="totalvu" id="totalvu1" value="0" disabled></td>

														</tr>
														<tr>
															<td class='text-center'>B</td>
															<td><input class="form-control text-center" type="text" name="capaTextoB" id="capaTextoB" disabled></td>
															<td><input class="form-control text-center" type="text" name="form916B" id="form916B" disabled></td>
															<td><input class="form-control text-center" type="text" name="vbB" id="vbB" disabled></td>

														</tr>
														<tr>
															<td class='text-center'>C</td>
															<td><input class="form-control text-center" type="text" name="capaTextoC" id="capaTextoC" disabled></td>
															<td><input class="form-control text-center" type="text" name="form916C" id="form916C" disabled></td>
															<td><input class="form-control text-center" type="text" name="vbC" id="vbC" disabled></td>

														</tr>
														<tr>
															<td class='text-center'>Totales</td>
															<td><input class="form-control text-center" type="text" name="totalcant" id="totalcant" disabled></td>
															<td></td>
															<td><input class="form-control text-center" type="text" name="totalvb" id="totalvb" disabled></td>

														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div class="accordion-group"><!-- rub 5 -->
										<div class="accordion-heading area">
											<a class="accordion-toggle" data-toggle="collapse" href="#collapseFive">
												RUBRO 5: VALUACION DEL EDIFICIO
											</a>
										</div>
										<div id="collapseFive" class="accordion-body collapse">
											<div class="accordion-inner">
												<table class="table table-bordered responsive-table">
													<thead>
														<tr>
															<th class='col-sm-1 text-center'>1<br>Construccion</th>
															<th class='col-sm-1 text-center'>2<br>Tipo de Edificio</th>
															<th class='col-sm-1 text-center'>3<br>Est Conser.</th>
															<th class='col-sm-1 text-center'>4<br>Data</th>
															<th class='col-sm-1 text-center'>5<br>Data Rec </th>
															<th class='col-sm-1 text-center'>6<br>Coef de Ajuste </th>
															<th class='col-sm-2 text-center'>7<br>Valor Unitario x m2 </th>
															<th class='col-sm-2 text-center'>8<br>Superficie m2 </th>
															<th class='col-sm-2 text-center'>9<br>Valor  </th>

														</tr>
													</thead>
													<tbody>
														<tr>
															<td class='text-center'>1- Cubierta</td>
															<td><input class="form-control text-center" type="text" name="maxInd" id="maxInd1" value="0" disabled></td>
															<td><input class="form-control text-center" type="text" name="estConCub" id="estConCub" disabled></td>
															<td><input class="form-control text-center" type="date" onchange="changeDate(this);" name="dataCub" id="dataCub" ></td>
															<td><input class="form-control text-center" type="date" onchange="changeDate(this);" name="dataRecCub" id="dataRecCub" disabled></td>
															<td><input class="form-control text-center" type="text" name="coefAjCub" id="coefAjCub" disabled></td>
															<td><input class="form-control text-center" type="text" name="totalvu" id="totalvu2" value="0" disabled>	</td>
															<td><input class="form-control text-center" type="text" name="supCub" id="supCub" oninput="valRub5(this);"></td>
															<td> <input class="form-control text-center" type="text" name="totalValCub" id="totalValCub" value="0" disabled></td>

														</tr>
														<tr>
															<td colspan="7" id="aniodetabla"></td>
															<td class='text-center'>Total Rubro 5</td>

															<td  colspan="1"> <input class="form-control text-center" type="text" name="totalRub5" id="totalRub5" value="0" disabled></td>

														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>

								</div> <!-- /accordion -->

							</div> <!-- /controls -->

						</div> <!-- /control-group -->
						<div class="col-sm-2">
							<div class="form-group">
								<table>
									<tr> <td align="center"> <input type="checkbox" value="1" id="firmaprof" name="firmaprof" onClick="checkProf(this.checked)"> </td> </tr>
									<tr> <td> <h5> No mostrar profesional </h5> </td> </tr>
								</table>
							</div>
						</div>
						<a href="formulario916rub2pto2.php"><button class="btn btn-success">Anterior</button></a>
						<a><button class="btn btn-success" onClick="insertDB();">Finalizar</button></a>
						<a href="" ><button onclick="self.close()" class="btn">Cancelar</button></a>
					</div> <!-- /widget-content -->



		</div> <!-- /main -->

		<?php
			include("pie.php");
		?>

		<script src="javascript/obj916.js"></script>
		<script src="javascript/valores916.js"></script>
		<script src="javascript/valoresBasicos.js"></script>
		<script src="javascript/fechas.js"></script>
		<script src="javascript/rubro5.js"></script>
		<script src="javascript/calculos.js"></script>

	</body>

</html>
