<?php
include("sesion.php");
	$pagina='formulario905rub3PHP';
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
						<h3 id="formNum">Formulario 905</h3>
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
												<a href="formulario905rub2pto2.php"><button class="btn btn-success">Anterior</button></a>
												<a><button class="btn btn-success" onClick="insertDB();">Finalizar</button></a>
												<a href="" ><button onclick="self.close()" class="btn">Cancelar</button></a>
												<br><br>
												<table class="table table-bordered responsive-table">
																								<thead>
																								<tr>
																								<th class='col-sm-2'>Tipo</th>
																								<th class='col-sm-2 text-center' colspan="3">B</th>
																								<th class='col-sm-2 text-center' colspan="3">C</th>
																								<th class='col-sm-2 text-center' colspan="3">D</th>
																								<th class='col-sm-2 text-center' colspan="3">E</th>
																								</tr>
																								</thead>
																								<tbody>
																								<tr>
																								<td>Rango de Puntaje</td>
																								<td class='text-center'>Mas de 75</td>
																								<td class='text-center'>De 42 a 75</td>
																								<td class='text-center'>Hasta 41</td>

																								<td class='text-center'>Mas de 73</td>
																								<td class='text-center'>De 42 a 73</td>
																								<td class='text-center'>Hasta 41</td>

																								<td class='text-center'>Mas de 67</td>
																								<td class='text-center'>De 42 a 67</td>
																								<td class='text-center'>Hasta 41</td>

																								<td class='text-center'>Mas de 57</td>
																								<td class='text-center'>De 34 a 57</td>
																								<td class='text-center'>Hasta 33</td>
																								</tr>
																								<tr>
																								<td>Suma de Puntaje</td>
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

																	Muros, Revoques o Cerramientos Exteriores (20)</br>
																	<input id="ParedReci" type="checkbox" name="ParedReci" value="1" onClick="reciValue(this);">

															</td>

															<td>

																	Esqueleto (10)</br>
																	<input id="EsqueReci" type="checkbox" name="EsqueReci" value="1" onClick="reciValue(this);">

															</td>

															<td>
															  	Armaduras o Techos (33)</br>
																	<input id="ArmaReci" type="checkbox" name="ArmaReci" value="1" onClick="reciValue(this);">

															</td>

															<td>
																  Tabiques, Revoques o Revestimientos Interiores (14)</br>
																	<input id="RevoqReci" type="checkbox" name="RevoqReci" value="1" onClick="reciValue(this);">

															</td>

															<td>
																Pisos (8)</br>
																	<input id="PisosReci" type="checkbox" name="PisosReci" value="1" onClick="reciValue(this);">

															</td>

															<td>
																	Baño o Vestuarios (9)</br>
																	<input id="BanoReci" type="checkbox" name="BanoReci" value="1" onClick="reciValue(this);">

															</td>

															<td>
																Instalaciones Complementarias (6)</br>
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
															<td class='text-center'>B</td>
															<td><input class="form-control text-center" type="text" name="capaTextoB" id="capaTextoB" disabled></td>
															<td><input class="form-control text-center" type="text" name="form905B" id="form905B" disabled></td>
															<td><input class="form-control text-center" type="text" name="vbB" id="vbB" disabled></td>
															<td rowspan="6"><input class="form-control btn-info text-center" type="text" name="totalvu" id="totalvu1" value="0" disabled></td>

														</tr>
														<tr>
															<td class='text-center'>C</td>
															<td><input class="form-control text-center" type="text" name="capaTextoC" id="capaTextoC" disabled></td>
															<td><input class="form-control text-center" type="text" name="form905C" id="form905C" disabled></td>
															<td><input class="form-control text-center" type="text" name="vbC" id="vbC" disabled></td>

														</tr>
														<tr>
															<td class='text-center'>D</td>
															<td><input class="form-control text-center" type="text" name="capaTextoD" id="capaTextoD" disabled></td>
															<td><input class="form-control text-center" type="text" name="form905D" id="form905D" disabled></td>
															<td><input class="form-control text-center" type="text" name="vbD" id="vbD" disabled></td>

														</tr>
														<tr>
															<td class='text-center'>E</td>
															<td><input class="form-control text-center" type="text" name="capaTextoE" id="capaTextoE" disabled></td>
															<td><input class="form-control text-center" type="text" name="form905E" id="form905E" disabled></td>
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
															<td><b>a- Cámara frigorífica (indique cantidad de m2)</b> </td>
															<td><input class="form-control text-center" type="text" name="cantFrigo" id="cantFrigo" oninput="valRub6(this);"></td>
															<td><input class="form-control text-center" type="text" name="dataFrigo" disabled id="dataFrigo"></td>
															<td><input class="form-control text-center" type="text" name="estConFrigo" disabled id="estConFrigo"></td>
															<td><input class="form-control text-center" type="text" name="coefAjFrigo" disabled id="coefAjFrigo"></td>
															<td><input class="form-control text-center" type="text" name="valUniFrigo" disabled id="valUniFrigo" value="0"></td>
															<td><input class="form-control text-center" type="text" name="valFrigo" disabled id="valFrigo" value="0"></td>
														</tr>
														<tr>
															<td rowspan="2"><b>b- Montacargas</b>
																<table class="table table-bordered responsive-table">
																	<tr>
																		<td>Mas de 3 Toneladas</td>
																		<td><div style="display:flex; flex-direction: row;"><label style="margin-right:10px">N° Paradas:</label><input name="cantMonta1" id="cantMonta1" oninput="valRub6(this);" style="width:50px; height:30px" class="form-control text-center" type="text"></div></td>
																	</tr>
																	<tr>
																		<td>3 Toneladas o Menos</td>
																		<td><div style="display:flex; flex-direction: row;"><label style="margin-right:10px">N° Paradas:</label><input name="cantMonta2" id="cantMonta2" oninput="valRub6(this);" style="width:50px; height:30px" class="form-control text-center" type="text"></div></td>
																	</tr>
																</table>
															</td>
															<td><input class="form-control text-center" type="text" name="paradasMonta1" id="paradasMonta1" oninput="unidadesMonta(this);"></td>
															<td><input class="form-control text-center" type="text" name="dataMonta1" disabled id="dataMonta1"></td>
															<td><input class="form-control text-center" type="text" name="estConMonta1" disabled id="estConMonta1"></td>
															<td><input class="form-control text-center" type="text" name="coefAjMonta1" disabled id="coefAjMonta1"></td>
															<td><input class="form-control text-center" type="text" name="valUniMonta1" disabled id="valUniMonta1" value="0"></td>
														<td><input class="form-control text-center" type="text" name="valMonta1" disabled id="valMonta1" value="0"></td>
													</tr>
														<tr>

															<td><input class="form-control text-center" type="text" name="paradasMonta2" id="paradasMonta2" oninput="unidadesMonta(this);"></td>
															<td><input class="form-control text-center" type="text" name="dataMonta2" disabled id="dataMonta2"></td>
															<td><input class="form-control text-center" type="text" name="estConMonta2" disabled id="estConMonta2"></td>
															<td><input class="form-control text-center" type="text" name="coefAjMonta2" disabled id="coefAjMonta2"></td>
															<td><input class="form-control text-center" type="text" name="valUniMonta2" disabled id="valUniMonta2" value="0"></td>
														<td><input class="form-control text-center" type="text" name="valMonta2" disabled id="valMonta2" value="0"></td>
														</tr>
														<tr>
															<td><b>c- Instalación contra incendios
																		(indique cantidad de rociadores/bocas)</b> </td>
															<td><input class="form-control text-center" type="text" name="cantIncen" id="cantIncen" oninput="valRub6(this);"></td>
															<td><input class="form-control text-center" type="text" name="dataIncen" disabled id="dataIncen"></td>
															<td><input class="form-control text-center" type="text" name="estConIncen" disabled id="estConIncen"></td>
															<td><input class="form-control text-center" type="text" name="coefAjIncen" disabled id="coefAjIncen"></td>
															<td><input class="form-control text-center" type="text" name="valUniIncen" disabled id="valUniIncen" value="0"></td>
															<td><input class="form-control text-center" type="text" name="valIncen" disabled id="valIncen" value="0"></td>
														</tr>
														<tr>
															<td rowspan="2"><b>d- Ascensores</b>
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
														<td><input class="form-control text-center" type="text" name="valAsc1" disabled id="valAsc1" value="0"></td>
													</tr>
														<tr>

															<td><input class="form-control text-center" type="text" name="paradasAsc2" id="paradasAsc2" oninput="unidadesAsc(this);"></td>
															<td><input class="form-control text-center" type="text" name="dataAsc2" disabled id="dataAsc2"></td>
															<td><input class="form-control text-center" type="text" name="estConAsc2" disabled id="estConAsc2"></td>
															<td><input class="form-control text-center" type="text" name="coefAjAsc2" disabled id="coefAjAsc2"></td>
															<td><input class="form-control text-center" type="text" name="valUniAsc2" disabled id="valUniAsc2" value="0"></td>
														<td><input class="form-control text-center" type="text" name="valAsc2" disabled id="valAsc2" value="0"></td>
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
									<div class="accordion-group"><!-- rub 6 -->
										<div class="accordion-heading area">
											<a class="accordion-toggle" data-toggle="collapse" href="#collapseEight">
												RUBRO 8: VALUACION DE TANQUES, PAVIMENTOS Y SILOS
											</a>
										</div>
										<div class="accordion-body collapse" disabled id="collapseEight">

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
													<tbody id="rub8">

														<tr>
															<td rowspan="3"><b>a- Tanques</b> (destinados a depósitos de líquidos  o gases excepto tanques australianos)
																 <div style="float:right; display:flex; flex-direction: row;"><label style="margin-right:10px">M3:</label><input name="cantTanque1" id="cantTanque1" oninput="valRub8(this);" style="width:70px; height:30px" class="form-control text-center" type="text"></div><br><br><br>
																 <div style="float:right; display:flex; flex-direction: row;"><label style="margin-right:10px">M3:</label><input name="cantTanque2" id="cantTanque2" oninput="valRub8(this);" style="width:70px; height:30px" class="form-control text-center" type="text"></div><br><br><br>
																 <div style="float:right; display:flex; flex-direction: row;"><label style="margin-right:10px">M3:</label><input name="cantTanque3" id="cantTanque3" oninput="valRub8(this);" style="width:70px; height:30px" class="form-control text-center" type="text"></div>
															</td>
															<td><input class="form-control text-center" type="text" name="metrosTanque1" id="metrosTanque1" oninput="metrosTanque(this);"></td>
															<td><input class="form-control text-center" type="text" disabled name="dataTanque1"  id="dataTanque1"></td>
															<td><input class="form-control text-center" type="text" disabled name="estConTanque1"  id="estConTanque1"></td>
															<td><input class="form-control text-center" type="text" disabled name="coefAjTanque1" id="coefAjTanque1"></td>
															<td><input class="form-control text-center" type="text" disabled name="valUniTanque1" id="valUniTanque1" value="0"></td>
															<td><input class="form-control text-center" type="text" disabled name="valTanque1" id="valTanque1" value="0"></td>
														</tr>
														<tr>
															<td><input class="form-control text-center" type="text" name="metrosTanque2" id="metrosTanque2" oninput="metrosTanque(this);"></td>
															<td><input class="form-control text-center" type="text" disabled name="dataTanque2"  id="dataTanque2"></td>
															<td><input class="form-control text-center" type="text" disabled name="estConTanque2"  id="estConTanque2"></td>
															<td><input class="form-control text-center" type="text" disabled name="coefAjTanque2" id="coefAjTanque2"></td>
															<td><input class="form-control text-center" type="text" disabled name="valUniTanque2" id="valUniTanque2" value="0"></td>
															<td><input class="form-control text-center" type="text" disabled name="valTanque2" id="valTanque2" value="0"></td>
														</tr>
														<tr>
															<td><input class="form-control text-center" type="text" name="metrosTanque3" id="metrosTanque3" oninput="metrosTanque(this);"></td>
															<td><input class="form-control text-center" type="text" disabled name="dataTanque3"  id="dataTanque3"></td>
															<td><input class="form-control text-center" type="text" disabled name="estConTanque3"  id="estConTanque3"></td>
															<td><input class="form-control text-center" type="text" disabled name="coefAjTanque3" id="coefAjTanque3"></td>
															<td><input class="form-control text-center" type="text" disabled name="valUniTanque3" id="valUniTanque3" value="0"></td>
															<td><input class="form-control text-center" type="text" disabled name="valTanque3" id="valTanque3" value="0"></td>
														</tr>
														<tr>
															<td rowspan="2"><b>b- Pavimentos</b>
																<table class="table table-bordered responsive-table">
																	<tr>
																		<td>rígidos (de hormigón, adoquines, de madera o piedra, etc) Indique cant. de M2</td>

																	</tr>
																	<tr>
																		<td>flexibles (asfálticos o similares) Indique cant. de M2</td>

																	</tr>
																</table>
															</td>
															<td><input class="form-control text-center" type="text" name="cantPaviRig" id="cantPaviRig" oninput="valRub8(this);"></td>
															<td><input class="form-control text-center" type="text" disabled name="dataPaviRig" id="dataPaviRig"></td>
															<td><input class="form-control text-center" type="text" disabled name="estConPaviRig"  id="estConPaviRig"></td>
															<td><input class="form-control text-center" type="text" disabled name="coefAjPaviRig" id="coefAjPaviRig"></td>
															<td><input class="form-control text-center" type="text" disabled name="valUniPaviRig" id="valUniPaviRig" value="0"></td>
														<td><input class="form-control text-center" type="text" disabled name="valPaviRig" id="valPaviRig" value="0"></td>
													</tr>
														<tr>

																<td><input class="form-control text-center" type="text" name="cantPaviFlex" id="cantPaviFlex" oninput="valRub8(this);"></td>
															<td><input class="form-control text-center" type="text" disabled name="dataPaviFlex" id="dataPaviFlex"></td>
															<td><input class="form-control text-center" type="text" disabled name="estConPaviFlex"  id="estConPaviFlex"></td>
															<td><input class="form-control text-center" type="text" disabled name="coefAjPaviFlex" id="coefAjPaviFlex"></td>
															<td><input class="form-control text-center" type="text" disabled name="valUniPaviFlex" id="valUniPaviFlex" value="0"></td>
														<td><input class="form-control text-center" type="text" disabled name="valPaviFlex" id="valPaviFlex" value="0"></td>
														</tr>
														<tr>
															<td rowspan="3"><b>c- Silos. Marcar según tipo</b>
																<table class="table table-bordered responsive-table">
																	<tr>
																		<td>
																		 a - Hormigón armado<div style="float:right; display:flex; flex-direction: row;"><label style="margin-right:10px">M3:</label><input name="cantSiloA" id="cantSiloA" oninput="valRub8(this);" style="width:70px; height:30px" class="form-control text-center" type="text"></div>

																		</td>
																	</tr>
																	<tr>
																		<td>
																		 b - Mamposteria<div style="float:right; display:flex; flex-direction: row;"><label style="margin-right:10px">M3:</label><input name="cantSiloB" id="cantSiloB" oninput="valRub8(this);" style="width:70px; height:30px" class="form-control text-center" type="text"></div>
																		</td>
																	</tr>
																	<tr>
																		<td>
																		 c - Chapa<div style="float:right; display:flex; flex-direction: row;"><label style="margin-right:10px">M3:</label><input name="cantSiloC" id="cantSiloC" oninput="valRub8(this);" style="width:70px; height:30px" class="form-control text-center" type="text"></div>
																		</td>
																	</tr>
																</table>
															</td>
															<td><input class="form-control text-center" type="text" name="metrosSiloA" id="metrosSiloA" oninput="metrosSilo(this);"></td>
															<td><input class="form-control text-center" type="text" disabled name="dataSiloA"  id="dataSiloA"></td>
															<td><input class="form-control text-center" type="text" disabled name="estConSiloA"  id="estConSiloA"></td>
															<td><input class="form-control text-center" type="text" disabled name="coefAjSiloA" id="coefAjSiloA"></td>
															<td><input class="form-control text-center" type="text" disabled name="valUniSiloA" id="valUniSiloA" value="0"></td>
														<td><input class="form-control text-center" type="text" disabled name="valSiloA" id="valSiloA" value="0"></td>
													</tr>
														<tr>

																<td><input class="form-control text-center" type="text" name="metrosSiloB" id="metrosSiloB" oninput="metrosSilo(this);"></td>
															<td><input class="form-control text-center" type="text" disabled name="dataSiloB"  id="dataSiloB"></td>
															<td><input class="form-control text-center" type="text" disabled name="estConSiloB"  id="estConSiloB"></td>
															<td><input class="form-control text-center" type="text" disabled name="coefAjSiloB" id="coefAjSiloB"></td>
															<td><input class="form-control text-center" type="text" disabled name="valUniSiloB" id="valUniSiloB" value="0"></td>
														<td><input class="form-control text-center" type="text" disabled name="valSiloB" id="valSiloB" value="0"></td>
														</tr>
														<tr>

																<td><input class="form-control text-center" type="text" name="metrosSiloC" id="metrosSiloC" oninput="metrosSilo(this);"></td>
															<td><input class="form-control text-center" type="text" disabled name="dataSiloC"  id="dataSiloC"></td>
															<td><input class="form-control text-center" type="text" disabled name="estConSiloC"  id="estConSiloC"></td>
															<td><input class="form-control text-center" type="text" disabled name="coefAjSiloC" id="coefAjSiloC"></td>
															<td><input class="form-control text-center" type="text" disabled name="valUniSiloC" id="valUniSiloC" value="0"></td>
														<td><input class="form-control text-center" type="text" disabled name="valSiloC" id="valSiloC" value="0"></td>
														</tr>

														<tr>
															<td colspan="6"><b>Total Rubro 8 </b> (con dos decimales) </td>

															<td><input class="form-control text-center" type="text" name="totalrub8" disabled id="totalrub8" value="0"></td>
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
						<a href="formulario905rub2pto2.php"><button class="btn btn-success">Anterior</button></a>
						<a><button class="btn btn-success" onClick="insertDB();">Finalizar</button></a>
						<a href="" ><button onclick="self.close()" class="btn">Cancelar</button></a>

					</div> <!-- /widget-content -->



		</div> <!-- /main -->

		<?php
			include("pie.php");
		?>
		<script src="javascript/obj905.js"></script>
		<script src="javascript/valores905.js"></script>
		<script src="javascript/valoresBasicos.js"></script>
		<script src="javascript/fechas.js"></script>
		<script src="javascript/rubro5.js"></script>
		<script src="javascript/rubro6.js"></script>
		<script src="javascript/rubro8.js"></script>
		<script src="javascript/calculos.js"></script>

	</body>
</html>
