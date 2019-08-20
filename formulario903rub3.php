<?php
include("sesion.php");
	$pagina='formulario903rub3PHP';
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
						<h3 id="formNum">Formulario 903</h3>
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

												<a href="formulario903rub2pto2.php"><button class="btn btn-success">Anterior</button></a>
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
																								<th class='col-sm-2 text-center' colspan="3">D</th>
																								<th class='col-sm-2 text-center' colspan="3">E</th>
																								</tr>
																								</thead>
																								<tbody>
																								<tr>
																								<td>Rango de Puntaje</td>
																								<td class='text-center'>Mas de 79</td>
																								<td class='text-center'>De 50 a 79</td>
																								<td class='text-center'>Hasta 49</td>

																								<td class='text-center'>Mas de 79</td>
																								<td class='text-center'>De 50 a 79</td>
																								<td class='text-center'>Hasta 49</td>

																								<td class='text-center'>Mas de 67</td>
																								<td class='text-center'>De 42 a 67</td>
																								<td class='text-center'>Hasta 41</td>

																								<td class='text-center'>Mas de 65</td>
																								<td class='text-center'>De 41 a 65</td>
																								<td class='text-center'>Hasta 40</td>

																								<td class='text-center'>Mas de 54</td>
																								<td class='text-center'>De 37 a 54</td>
																								<td class='text-center'>Hasta 36</td>
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

																								<td>
																									<div class="controls" name="sumaEstConPjeD1" id="sumaEstConPjeD1">0
																													<!--<input type="text" class="form-control" name="sumaEstConPjeD1" id="sumaEstConPjeD1" disabled>-->
																												</div> <!-- /controls -->
																								</td>
																								<td>
																									<div class="controls" name="sumaEstConPjeD2" id="sumaEstConPjeD2">0
																														<!--<input type="text" class="form-control" name="sumaEstConPjeD2" id="sumaEstConPjeD2" disabled>-->
																													</div> <!-- /controls -->
																								</td>
																								<td>
																									<div class="controls" name="sumaEstConPjeD3" id="sumaEstConPjeD3">0
																														<!--<input type="text" class="form-control" name="sumaEstConPjeD3" id="sumaEstConPjeD3" disabled>-->
																													</div> <!-- /controls -->
																								</td>

																								<td>
																									<div class="controls" name="sumaEstConPjeE1" id="sumaEstConPjeE1">0
																													<!--<input type="text" class="form-control" name="sumaEstConPjeE1" id="sumaEstConPjeE1" disabled>-->
																												</div> <!-- /controls -->
																								</td>
																								<td>
																									<div class="controls" name="sumaEstConPjeE2" id="sumaEstConPjeE2">0
																														<!--<input type="text" class="form-control" name="sumaEstConPjeE2" id="sumaEstConPjeE2" disabled>-->
																													</div> <!-- /controls -->
																								</td>
																								<td>
																									<div class="controls" name="sumaEstConPjeE3" id="sumaEstConPjeE3">0
																														<!--<input type="text" class="form-control" name="sumaEstConPjeE3" id="sumaEstConPjeE3" disabled>-->
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

															<th class='col-sm-9 text-center' colspan="9">Puntaje Reciclado</th>
															<th class='col-sm-1 text-center'>Suma Ptos</th>
													</tr>
													</thead>
													<tbody>
														<tr>
															<td>

																	Muros y/o Revoques Exteriores (8)
																	<input id="ParedReci" type="checkbox" name="ParedReci" value="1" onClick="reciValue(this);">

															</td>

															<td>

																	Techos (11)
																	<input id="TechoReci" type="checkbox" name="TechoReci" value="1" onClick="reciValue(this);">

															</td>

															<td>
																	Cielorrasos (3)
																	<input id="CieloReci" type="checkbox" name="CieloReci" value="1" onClick="reciValue(this);">

															</td>

															<td>
																Muros y/o Revoques Interiores (10)
																	<input id="RevoqReci" type="checkbox" name="RevoqReci" value="1" onClick="reciValue(this);">

															</td>

															<td>
																Pisos (8)
																	<input id="PisosReci" type="checkbox" name="PisosReci" value="1" onClick="reciValue(this);">

															</td>

															<td>
																	Puertas y Ventanas (10)
																	<input id="MadeReci" type="checkbox" name="MadeReci" value="1" onClick="reciValue(this);">

															</td>

															<td>
																	Baño (20)
																	<input id="BanoReci" type="checkbox" name="BanoReci" value="1" onClick="reciValue(this);">

															</td>

															<td>
																Cocina (16)
																	<input id="CociReci" type="checkbox" name="CociReci" value="1" onClick="reciValue(this);">

															</td>

															<td>
																Instalaciones Complementarias (14)
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
															<td><input class="form-control text-center" type="text" name="form903A" id="form903A" disabled></td>
															<td><input class="form-control text-center" type="text" name="vbA" id="vbA" disabled></td>
															<td rowspan="6"><input class="form-control btn-info text-center" type="text" name="totalvu" id="totalvu1" value="0" disabled></td>

														</tr>
														<tr>
															<td class='text-center'>B</td>
															<td><input class="form-control text-center" type="text" name="capaTextoB" id="capaTextoB" disabled></td>
															<td><input class="form-control text-center" type="text" name="form903B" id="form903B" disabled></td>
															<td><input class="form-control text-center" type="text" name="vbB" id="vbB" disabled></td>

														</tr>
														<tr>
															<td class='text-center'>C</td>
															<td><input class="form-control text-center" type="text" name="capaTextoC" id="capaTextoC" disabled></td>
															<td><input class="form-control text-center" type="text" name="form903C" id="form903C" disabled></td>
															<td><input class="form-control text-center" type="text" name="vbC" id="vbC" disabled></td>

														</tr>
														<tr>
															<td class='text-center'>D</td>
															<td><input class="form-control text-center" type="text" name="capaTextoD" id="capaTextoD" disabled></td>
															<td><input class="form-control text-center" type="text" name="form903D" id="form903D" disabled></td>
															<td><input class="form-control text-center" type="text" name="vbD" id="vbD" disabled></td>

														</tr>
														<tr>
															<td class='text-center'>E</td>
															<td><input class="form-control text-center" type="text" name="capaTextoE" id="capaTextoE" disabled></td>
															<td><input class="form-control text-center" type="text" name="form903E" id="form903E" disabled></td>
															<td><input class="form-control text-center" type="text" name="vbE" id="vbE" disabled></td>

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
															<td><b>a- Heladeras con equipo central</b> <br>
																(nro de heladeras en todo el edificio)
															</td>
															<td><input class="form-control text-center" type="text" name="cantHel" id="cantHel" oninput="valRub6(this);"></td>
															<td><input class="form-control text-center" type="text" name="dataHel" disabled id="dataHel"></td>
															<td><input class="form-control text-center" type="text" name="estConHel" disabled id="estConHel"></td>
															<td><input class="form-control text-center" type="text" name="coefAjHel" disabled id="coefAjHel"></td>
															<td><input class="form-control text-center" type="text" name="valUniHel" disabled id="valUniHel" value="0"></td>
															<td><input class="form-control text-center" type="text" name="valHel" disabled id="valHel" value="0"></td>

														</tr>
														<tr>
															<td><b>b- Aire Acondicionado</b> <br>
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
															<td rowspan="2"><b>c- Ascensores</b>
																<table class="table table-bordered responsive-table">
																	<tr>
																		<td>Mas de 4 Personas</td>
																		<td><div style="display:flex; flex-direction: row;"><label style="margin-right:10px">N° Paradas:</label><input name="cantAsc1" id="cantAsc1" oninput="valRub6(this);" style="width:50px; height:30px" class="form-control text-center" type="text"></div></td>
																	</tr>
																	<tr>
																		<td>4 o Menos Personas</td>
																		<td><div style="display:flex; flex-direction: row;"><label style="margin-right:10px">N° Paradas:</label><input name="cantAsc2" id="cantAsc2" oninput="valRub6(this);" style="width:50px; height:30px" class="form-control text-center" type="text"></div></td>
																	</tr>
																</table>
															</td>
															<td><input class="form-control text-center" type="text" name="paradasAsc1" id="paradasAsc1" oninput="unidadesAsc(this);"></td>
															<td><input class="form-control text-center" type="text" name="dataAsc1" disabled id="dataAsc1"></td>
															<td><input class="form-control text-center" type="text" name="estConAsc1" disabled id="estConAsc1"></td>
															<td><input class="form-control text-center" type="text" name="coefAjAsc1" disabled id="coefAjAsc1"></td>
															<td><input class="form-control text-center" type="text" name="valUniAsc1" disabled id="valUniAsc1" value="0"></td>
														<td><input class="form-control text-center" type="text" name="valAsc1" disabled id="valAsc1" value="0"></td>														</tr>
														<tr>

																<td><input class="form-control text-center" type="text" name="paradasAsc2" id="paradasAsc2" oninput="unidadesAsc(this);"></td>
															<td><input class="form-control text-center" type="text" name="dataAsc2" disabled id="dataAsc2"></td>
															<td><input class="form-control text-center" type="text" name="estConAsc2" disabled id="estConAsc2"></td>
															<td><input class="form-control text-center" type="text" name="coefAjAsc2" disabled id="coefAjAsc2"></td>
															<td><input class="form-control text-center" type="text" name="valUniAsc2" disabled id="valUniAsc2" value="0"></td>
														<td><input class="form-control text-center" type="text" name="valAsc2" disabled id="valAsc2" value="0"></td>
														</tr>
														<tr>
															<td><b>d- Calefaccion Central</b> <br>
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
															<td><b>e- Losa Radiante</b> <br>
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
															<td><b>f- Horno Incinerador</b> <br>
																(nro de dptos en todo el edificio)
															</td>
															<td><input class="form-control text-center" type="text" name="cantHorno" id="cantHorno" oninput="valRub6(this);"></td>
															<td><input class="form-control text-center" type="text" name="dataHorno" disabled id="dataHorno"></td>
															<td><input class="form-control text-center" type="text" name="estConHorno" disabled id="estConHorno"></td>
															<td><input class="form-control text-center" type="text" name="coefAjHorno" disabled id="coefAjHorno"></td>
															<td><input class="form-control text-center" type="text" name="valUniHorno" disabled id="valUniHorno" value="0"></td>
															<td><input class="form-control text-center" type="text" name="valHorno" disabled id="valHorno" value="0"></td>
														</tr>
														<tr>
															<td><b>g- Agua Caliente Central</b> <br>
																(nro de dptos en todo el edificio)
															</td>
															<td><input class="form-control text-center" type="text" name="cantAguaCal" id="cantAguaCal" oninput="valRub6(this);"></td>
															<td><input class="form-control text-center" type="text" name="dataAguaCal" disabled id="dataAguaCal"></td>
															<td><input class="form-control text-center" type="text" name="estConAguaCal" disabled id="estConAguaCal"></td>
															<td><input class="form-control text-center" type="text" name="coefAjAguaCal" disabled id="coefAjAguaCal"></td>
															<td><input class="form-control text-center" type="text" name="valUniAguaCal" disabled id="valUniAguaCal" value="0"></td>
															<td><input class="form-control text-center" type="text" name="valAguaCal" disabled id="valAguaCal" value="0"></td>
														</tr>
														<tr>
															<td><b>h- Baños Principales</b> </td>
															<td><input class="form-control text-center" type="text" name="cantBaniosPri" id="cantBaniosPri" oninput="valRub6(this);"></td>
															<td><input class="form-control text-center" type="text" name="dataBaniosPri" disabled id="dataBaniosPri"></td>
															<td><input class="form-control text-center" type="text" name="estConBaniosPri" disabled id="estConBaniosPri"></td>
															<td><input class="form-control text-center" type="text" name="coefAjBaniosPri" disabled id="coefAjBaniosPri"></td>
															<td><input class="form-control text-center" type="text" name="valUniBaniosPri" disabled id="valUniBaniosPri" value="0"></td>
															<td><input class="form-control text-center" type="text" name="valBaniosPri" disabled id="valBaniosPri" value="0"></td>
														</tr>
														<tr>
															<td><b>i- Baños Secundarios</b> 	</td>
															<td><input class="form-control text-center" type="text" name="cantBaniosSec" id="cantBaniosSec" oninput="valRub6(this);"></td>
															<td><input class="form-control text-center" type="text" name="dataBaniosSec" disabled id="dataBaniosSec"></td>
															<td><input class="form-control text-center" type="text" name="estConBaniosSec" disabled id="estConBaniosSec"></td>
															<td><input class="form-control text-center" type="text" name="coefAjBaniosSec" disabled id="coefAjBaniosSec"></td>
															<td><input class="form-control text-center" type="text" name="valUniBaniosSec" disabled id="valUniBaniosSec" value="0"></td>
															<td><input class="form-control text-center" type="text" name="valBaniosSec" disabled id="valBaniosSec" value="0"></td>
														</tr>
														<tr>
															<td><b>j- Pileta de Natacion</b>
																<input style="margin-left:100px" type="radio" id="PiletaA" name="Pileta" value="A" onClick="piletaRadioValue(this);">A
																<input type="radio" id="PiletaB" name="Pileta" value="B" onClick="piletaRadioValue(this);">B
																<input type="radio" id="PiletaC" name="Pileta" value="C" onClick="piletaRadioValue(this);">C
																<br>
																(superficie de plano de agua m2)
															</td>
															<td><input class="form-control text-center" type="text" name="cantPileta" id="cantPileta" oninput="valRub6(this);"></td>
															<td><input class="form-control text-center" type="text" name="dataPileta" disabled id="dataPileta"></td>
															<td><input class="form-control text-center" type="text" name="estConPileta" disabled id="estConPileta"></td>
															<td><input class="form-control text-center" type="text" name="coefAjPileta" disabled id="coefAjPileta"></td>
															<td><input class="form-control text-center" type="text" name="valUniPileta" disabled id="valUniPileta" value="0"></td>
															<td><input class="form-control text-center" type="text" name="valPileta" disabled id="valPileta" value="0"></td>
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
						<a href="formulario903rub2pto2.php"><button class="btn btn-success">Anterior</button></a>
						<a><button class="btn btn-success" onClick="insertDB();">Finalizar</button></a>
						<a href="" ><button onclick="self.close()" class="btn">Cancelar</button></a>

					</div> <!-- /widget-content -->


		</div> <!-- /main -->

		<?php
			include("pie.php");
		?>
		<script src="javascript/obj903.js"></script>
		<script src="javascript/valores903.js"></script>
		<script src="javascript/valoresBasicos.js"></script>
		<script src="javascript/fechas.js"></script>
		<script src="javascript/rubro5.js"></script>
		<script src="javascript/rubro6.js"></script>
		<script src="javascript/calculos.js"></script>

	</body>
</html>
