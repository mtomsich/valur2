<?php
		include("sesion.php");
			$pagina='formulario906rub3PHP';
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
						<h3 id="formNum">Formulario 906</h3>
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
																		<a href="formulario906rub2pto2.php"><button class="btn btn-success">Anterior</button></a>
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
																								<td class='text-center'>Mas de 74</td>
																								<td class='text-center'>De 41 a 74</td>
																								<td class='text-center'>Hasta 40</td>

																								<td class='text-center'>Mas de 63</td>
																								<td class='text-center'>De 35 a 63</td>
																								<td class='text-center'>Hasta 34</td>

																								<td class='text-center'>Mas de 59</td>
																								<td class='text-center'>De 32 a 59</td>
																								<td class='text-center'>Hasta 31</td>
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
															<th class='col-sm-9 text-center' colspan="7">Puntaje Reciclado</th>
															<th class='col-sm-1 text-center'>Suma Ptos</th>
													</tr>
													</thead>
													<tbody>
														<tr>
															<td>

																	Muros, revoques o cerramientos exteriores (8)
																	<input id="ParedReci" type="checkbox" name="ParedReci" value="1" onClick="reciValue(this);">

															</td>

															<td>

																	Tabiques, revoques o revestimiento exteriores (28)
																		<input id="RevoqReci" type="checkbox" name="RevoqReci" value="1" onClick="reciValue(this);">

															</td>

															<td>
																	Armadura o techos (32)
																	<input id="TechoReci" type="checkbox" name="TechoReci" value="1" onClick="reciValue(this);">

															</td>

															<td>
																Cielorrasos (4)
																	<input id="CieloReci" type="checkbox" name="CieloReci" value="1" onClick="reciValue(this);">

															</td>

															<td>
																Pisos (11)
																	<input id="PisosReci" type="checkbox" name="PisosReci" value="1" onClick="reciValue(this);">

															</td>

															<td>
																	Baños (8)
																	<input id="BanoReci" type="checkbox" name="BanoReci" value="1" onClick="reciValue(this);">

															</td>

															<td>
																Instalaciones Complementarias (9)
																	<input id="InstReci1" type="checkbox" name="InstReci1" value="1" onClick="reciValue(this);">

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
															<td><input class="form-control text-center" type="text" name="form906A" id="form906A" disabled></td>
															<td><input class="form-control text-center" type="text" name="vbA" id="vbA" disabled></td>
															<td rowspan="6"><input class="form-control btn-info text-center" type="text" name="totalvu" id="totalvu1" value="0" disabled></td>

														</tr>
														<tr>
															<td class='text-center'>B</td>
															<td><input class="form-control text-center" type="text" name="capaTextoB" id="capaTextoB" disabled></td>
															<td><input class="form-control text-center" type="text" name="form906B" id="form906B" disabled></td>
															<td><input class="form-control text-center" type="text" name="vbB" id="vbB" disabled></td>

														</tr>
														<tr>
															<td class='text-center'>C</td>
															<td><input class="form-control text-center" type="text" name="capaTextoC" id="capaTextoC" disabled></td>
															<td><input class="form-control text-center" type="text" name="form906C" id="form906C" disabled></td>
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
															<td class='text-center'>1- SUPERFICIE EDIFICADA</td>
															<td><input class="form-control text-center" type="text" name="maxInd" id="maxInd1" value="0" disabled></td>
															<td><input class="form-control text-center" type="text" name="estConCub" id="estConCub" disabled></td>
															<td><input class="form-control text-center" type="date" onchange="changeDate(this);" name="dataCub" id="dataCub" ></td>
															<td><input class="form-control text-center" type="date" onchange="changeDate(this);" name="dataRecCub" id="dataRecCub" disabled></td>
															<td><input class="form-control text-center" type="text" name="coefAjCub" id="coefAjCub" disabled></td>
															<td><input class="form-control text-center" type="text" name="totalvu" id="totalvu2" value="0" disabled>	</td>
															<td><input class="form-control text-center" type="text" name="supCub" id="supCub" oninput="valRub5(this);"></td>
															<td> <input class="form-control text-center" type="text" name="totalValCub" id="totalValCub" value="0" disabled></td>

														</tr>
														<tr style="display: none;">
															<td class='text-center'>2- Semi-Cubierta</td>
															<td><input class="form-control text-center" type="text" name="maxInd" id="maxInd2" value="0" disabled></td>
															<td><input class="form-control text-center" type="text" name="estConSeCub" id="estConSeCub" disabled></td>
															<td><input class="form-control text-center" type="date" onchange="changeDate(this);" name="dataSeCub" id="dataSeCub" disabled></td>
															<td><input class="form-control text-center" type="date" onchange="changeDate(this);" name="dataRecSeCub" id="dataRecSeCub" disabled></td>
													  	<td><input class="form-control text-center" type="text" name="coefAjSeCub" id="coefAjSeCub" disabled></td>
															<td><input class="form-control text-center" type="text" name="totalvusc" id="totalvusc" value="0" disabled>	</td>
															<td><input class="form-control text-center" type="text" name="supSeCub" id="supSeCub" oninput="valRub5(this);"></td>
														<td> <input class="form-control text-center" type="text" name="totalValSeCub" id="totalValSeCub" value="0" disabled></td>
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
									<div class="accordion-group"><!-- rub 6 -->
										<div class="accordion-heading area">
											<a class="accordion-toggle" data-toggle="collapse" href="#collapseSix">
												RUBRO 6: VALUACION DE LAS INSTALACIONES COMPLEMENTARIAS
											</a>
										</div>
										<div class="accordion-body collapse" disabled id="collapseSix">

											<div class="accordion-inner">
												<table class="table table-bordered responsive-table">
													<thead>
														<tr>
															<th class='col-sm-3 text-center'>1<br>Instalaciones</th>
															<th class='col-sm-1 text-center'>2<br>Cant unidades</th>
															<th class='col-sm-1 text-center'>3<br>Data</th>
															<th class='col-sm-1 text-center'>4<br>Estado de Conserv</th>
															<th class='col-sm-1 text-center'>5<br>Coef de Ajuste </th>
															<th class='col-sm-1 text-center'>6<br>Valor Unitario </th>
															<th class='col-sm-1 text-center'>7<br>Valor</th>
														</tr>
													</thead>
													<tbody id="rub6">
														<tr>
															<td><b>a- Aire Acondicionado</b> <br>
																(m2 de superficie acondicionada)
															</td>
															<td><input class="form-control text-center" type="text" name="cantAire" id="cantAire" oninput="valRub6(this);"></td>
															<td><input class="form-control text-center" type="text" name="dataAire" disabled id="dataAire"></td>
															<td><input class="form-control text-center" type="text" name="estConAire" disabled id="estConAire"></td>
															<td><input class="form-control text-center" type="text" name="coefAjAire" disabled id="coefAjAire"></td>
															<td><input class="form-control text-center" type="text" name="valUniAire" disabled id="valUniAire" value="0"></td>
															<td><input class="form-control text-center" type="text" name="valAire" disabled id="valAire" value="0"></td>
														</tr>
														<tr>
															<td><b>b- Calefaccion Central</b> <br>
																(nro de radiadores en todo el edificio)
															</td>
															<td><input class="form-control text-center" type="text" name="cantCalef" id="cantCalef" oninput="valRub6(this);"></td>
															<td><input class="form-control text-center" type="text" name="dataCalef" disabled id="dataCalef"></td>
															<td><input class="form-control text-center" type="text" name="estConCalef" disabled id="estConCalef"></td>
															<td><input class="form-control text-center" type="text" name="coefAjCalef" disabled id="coefAjCalef"></td>
															<td><input class="form-control text-center" type="text" name="valUniCalef" disabled id="valUniCalef" value="0"></td>
																<td><input class="form-control text-center" type="text" name="valCalef" disabled id="valCalef" value="0"></td>
														</tr>
														 <tr>
															<td><b>c- Contra incendio</b> <br>
																(m2 de superficie acondicionada)
															</td>
															<td><input class="form-control text-center" type="text" name="cantIncen" id="cantIncen" oninput="valRub6(this);"></td>
															<td><input class="form-control text-center" type="text" name="dataIncen" disabled id="dataIncen"></td>
															<td><input class="form-control text-center" type="text" name="estConIncen" disabled id="estConIncen"></td>
															<td><input class="form-control text-center" type="text" name="coefAjIncen" disabled id="coefAjIncen"></td>
															<td><input class="form-control text-center" type="text" name="valUniIncen" disabled id="valUniIncen" value="0"></td>
															<td><input class="form-control text-center" type="text" name="valIncen" disabled id="valIncen" value="0"></td>
														</tr>
														<tr>
															<td><b>d- Losa Radiante</b> <br>
																(m2 de superficie acondicionada)
															</td>
															<td><input class="form-control text-center" type="text" name="cantLosa" id="cantLosa" oninput="valRub6(this);"></td>
															<td><input class="form-control text-center" type="text" name="dataLosa" disabled id="dataLosa"></td>
															<td><input class="form-control text-center" type="text" name="estConLosa" disabled id="estConLosa"></td>
															<td><input class="form-control text-center" type="text" name="coefAjLosa" disabled id="coefAjLosa"></td>
															<td><input class="form-control text-center" type="text" name="valUniLosa" disabled id="valUniLosa" value="0"></td>
															<td><input class="form-control text-center" type="text" name="valLosa" disabled id="valLosa" value="0"></td>
														</tr>
														<tr>
															<td colspan="6"><b>Total Rubro 6 </b> (con dos decimales) </td>

															<td><input class="form-control text-center" type="text" name="totalrub6" disabled id="totalrub6" value="0"></td>
														</tr>
													</tbody>
												</table>



											</div>
										</div>
									</div>
									<div class="accordion-group"><!-- rub 7 -->
										<div class="accordion-heading area">
											<a class="accordion-toggle" data-toggle="collapse" href="#collapseSeven">
												RUBRO 7: RESUMEN DE VALUACION DE LOS RUBROS 5 Y 6
											</a>
										</div>
										<div id="collapseSeven" class="accordion-body collapse">
											<div class="accordion-inner">
												<table class="table table-bordered responsive-table">
													<thead>
														<tr>
															<th class='span9 text-center'>Concepto</th>
															<th class='span3 text-center'>Valor</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																<b>a- Total Rubro 5 </b>
															</td>
															<td><input class="form-control" type="text" name="atotalrub5" id="atotalrub5" value="0" disabled></td>
														</tr>
														<tr>
															<td>
																<b>b- Total Rubro 6 </b>
															</td>
															<td><input class="form-control" type="text" name="btotalrub6" id="btotalrub6" value="0" disabled></td>
														</tr>
														<tr>
															<td><b>Total Rubro 7 </b> </td>
															<td><input class="form-control" type="text" name="totalrub7" id="totalrub7" value="0" disabled></td>
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
						<a href="formulario906rub2pto2.php"><button class="btn btn-success">Anterior</button></a>
						<a><button class="btn btn-success" onClick="insertDB();">Finalizar</button></a>
						<a href="" ><button onclick="self.close()" class="btn">Cancelar</button></a>

					</div> <!-- /widget-content -->



		</div> <!-- /main -->

		<?php
			include("pie.php");
		?>
		<script src="javascript/obj906.js"></script>
		<script src="javascript/valores906.js"></script>
		<script src="javascript/valoresBasicos.js"></script>
		<script src="javascript/fechas.js"></script>
		<script src="javascript/rubro5.js"></script>
		<script src="javascript/rubro6.js"></script>
		<script src="javascript/calculos.js"></script>

	</body>
</html>
