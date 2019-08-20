<?php
		include("sesion.php");
			$pagina='formulario915rub2pto1PHP';
			include("encabezado.php");
			include("seguridadForm.php");
			include("sql/insertFormulario.php");
			include ("sql/update.php");
			if (isset($_GET['idCedula'])){
			include ("sql/mostrarDatosObra.php");
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
			}

			}else {
				$idform = $_GET['idform'];
				$form915 = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM form915 WHERE codForm915=$idform"));
				$par = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedulaformularios WHERE (nroFormulario='915')
				and (codForm=$idform)"));
				$tipocedula = $par['tipoCedula']; $ced = $par['idCedula'];
				switch ($tipocedula) {
					case '1':
						$cedu = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedula10707 WHERE idCedula707=$ced"));
						break;
					case '2':
						$cedu = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedulaph WHERE idCedulaPH=$ced"));
						break;
					case '3':
						$cedu = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedulade WHERE idCedulaDE=$ced"));
						break;
				}
				$idObra = $cedu['codObra'];

				$AMetros = $form915['AMetros'];	$AFachada = $form915['AFachada']; $AParedes = $form915['AParedes']; $ATechos = $form915['ATechos'];
				$ACielorrasos = $form915['ACielorrasos']; $ARevoques = $form915['ARevoques']; $APisos = $form915['APisos']; $AHierro = $form915['AHierro'];
				$AMadera = $form915['AMadera']; $ABano = $form915['ABano']; $ACocina = $form915['ACocina']; $ARevest = $form915['ARevest'];
				$AInstalac = $form915['AInstalac']; $AEstado = $form915['AEstado']; $ABasico = $form915['ABasico'];
				$BMetros = $form915['BMetros']; $BTrabajos = $form915['BTrabajos']; $BMamposteria = $form915['BMamposteria']; $BHormigon = $form915['BHormigon'];
				$BTechos = $form915['BTechos']; $BCielorrasos = $form915['BCielorrasos']; $BRevesti = $form915['BRevesti']; $BPisos = $form915['BPisos'];
	     	$BCarpinteria = $form915['BCarpinteria']; $BSanitaria = $form915['BSanitaria']; $BCocina = $form915['BCocina']; $BRevesti2 = $form915['BRevesti2'];
				$BInsta2 = $form915['BInsta2']; $BEstado = $form915['BEstado']; $BBasico = $form915['BBasico'];
				$CMetros = $form915['CMetros']; $CFachada = $form915['CFachada']; $CParedes = $form915['CParedes']; $CEsqueleto = $form915['CEsqueleto'];
				$CArmada = $form915['CArmada'];	$CTechos = $form915['CTechos']; $CCielorrasos = $form915['CCielorrasos']; $CRevoques = $form915['CRevoques'];
	      $CPisos = $form915['CPisos']; $CHierro = $form915['CHierro']; $CMadera = $form915['CMadera']; $CBano = $form915['CBano'];
				$CRevesti = $form915['CRevesti']; $CInstalac = $form915['CInstalac']; $CEstado = $form915['CEstado']; $CBasico = $form915['CBasico']; $mostrarProf = $form915['firmaprof'];

			}
			if ((isset($mostrarProf)) && ($mostrarProf === '1')) {
				 $mostrarProf = 'checked="checked" ';
			} else {
					$mostrarProf = ' ';
			}
		if (isset($ABasico)){
			switch ($ABasico) {
				case '10000.00':
					$basico = '903';
					break;
				case '8520.00':
					$basico = '904';
					break;
			}
		}

		if (isset($AEstado)){
			switch ($AEstado) {
				case '1':
					$AEstadoM = 'Bueno';
				break;
				case '0.60':
					$AEstadoM = 'Regular';
				break;
				case '0.30':
					$AEstadoM = 'Malo';
				break;
			}
		}
		if (isset($BEstado)){
			switch ($BEstado) {
				case '1':
					$BEstadoM = 'Bueno';
				break;
				case '0.60':
					$BEstadoM = 'Regular';
				break;
				case '0.30':
					$BEstadoM = 'Malo';
				break;
			}
		}
		if (isset($CEstado)){
			switch ($CEstado) {
				case '1':
					$CEstadoM = 'Bueno';
				break;
				case '0.60':
					$CEstadoM = 'Regular';
				break;
				case '0.30':
					$CEstadoM = 'Malo';
				break;
			}
		}

		$RAFachada = 0;$RAParedes = 0;$RATechos = 0;$RACielorrasos = 0;$RARevoques = 0;$RAPisos = 0;$RAHierro = 0;$RAMadera = 0;$RABano = 0;$RACocina = 0;$RARevest = 0;$RAInstalac = 0;
		$RBTrabajos = 0;$RBMamposteria = 0;$RBHormigon = 0;$RBTechos = 0;$RBCielorrasos = 0;$RBRevesti = 0;$RBPisos = 0;$RBCarpinteria = 0;$RBSanitaria = 0;$RBCocina = 0;$RBRevesti2 = 0;$RBInsta2 = 0;
		$ResultadoC = 0;$RCFachada = 0;$RCParedes = 0;$RCEsqueleto = 0;$RCArmada = 0;$RCTechos = 0;$RCCielorrasos = 0;$RCRevoques = 0;$RCPisos = 0;$RCHierro = 0;$RCMadera = 0;$RCBano = 0;$RCRevesti = 0;$RCInstalac = 0;
		?>
		<!DOCTYPE html>
		<html lang="es">
			<head>
		<style>
			table th.text-center, td.text-center {
			text-align: center;
			}
			/*
			Descomentar para ver los limites de las tablas
			table,td{
				border-color: black !important;
				border-style: solid !important;
				border-width: 1px !important;
			}
			*/
			.borde{
				border-color: #00ba8b !important;
				border-style: solid !important;
				border-width: 1px !important;
			}
			.accordion-toggle:hover{
				color: white;
				background-color: #00ba8b;
			}
			/* no sacar, es para que los radio box queden bien alineados */
			.huggi{
				margin-left: 24px !important;
				margin-right: 24px !important;
				margin-top: 10px !important;
				margin-bottom: 10px !important;
			}
			.inp{
				width: 100px !important;
			}
		</style>

	</head>
	<body>
		<div class="main">
			<div class="main-inner">

				<div class="container">

					<div class="widget-header">
						<i class="icon-th-large"></i>
						<h3>Formulario 915</h3>
					</div> <!-- /widget-header -->
					<form method="post" name="sumar">
					<div class="widget-content">
						<div class="control-group">
							<div class="controls">
								<div class="accordion" id="accordion2">
									<!---------------------- Rubro 2 A ---------------------->
									<div class="accordion-group">
										<div class="accordion-heading">
											<a class="accordion-toggle" data-parent="#accordion2" data-toggle="collapse" href="#rub2">
												RUBRO 2: A
											</a>
										</div>
										<div id="rub2" class="accordion-body collapse in">
											<div class="accordion-inner">
												<table class="table table-bordered responsive-table">
													<thead>
														<th></th>
														<th width="4">1. Incidencia</th>
														<th>2. Porcentaje de Ejecucion %</th>
														<th>Parcial (1)*(2)/100</th>
													</thead>
													<tbody>
														<tr>
															<td>
															 <label align="center">Fachada:</label>
														 </td>
															<td>
																<input id="AFachadaFijo" class="inp form-control" type="number" name="" value="2" disabled>
															</td>
															<td>
																<input id="AFachadaInput" class="form-control loadsum" type="number" name="AFachada" value="<?php if (isset($AFachada)){echo $AFachada;}?>" oninput="calcularValor(this)">
															</td>
															<td class="sumTotal">
																<input id="AFachadaResultado" name="SumaA" class="inp form-control" value="" disabled>
															</td>
															</tr>
															<tr>
															<td>
																<label align="center">Paredes:</label>
															</td>
															<td>
																<input id="AParedesFijo" class="inp form-control" type="text" name="" value="24" disabled>
															</td>
															<td>
																<input id="AParedesInput" class="form-control loadsum" type="number" name="AParedes" value="<?php if (isset($AParedes)){echo $AParedes;}?>"	oninput="calcularValor(this)">
															</td>
															<td class="sumTotal">
																<input id="AParedesResultado" name="SumaA" class="inp form-control" value="" disabled>
															</td>
															</tr>
															<tr>
															<td>
																<label align="center">Techos:</label>
															</td>
															<td>
																<input id="ATechosFijo" class="inp form-control" type="text" name="" value="18" disabled>
															</td>
															<td>
																<input id="ATechosInput" class="form-control loadsum" type="number" name="ATechos" value="<?php if (isset($ATechos)){echo $ATechos;}?>" oninput="calcularValor(this)">
															</td>
															<td>
																<input id="ATechosResultado" name="SumaA" class="inp form-control" value="" disabled>
															</td>
															</tr>
															<tr>
															<td>
																<label align="center">Cielorrasos:</label>
															</td>
															<td>
																<input id="ACielorrasosFijo" class="inp form-control" type="text" name="" value="3" disabled>
															</td>
															<td>
																<input id="ACielorrasosInput" class="form-control loadsum" type="number" name="ACielorrasos" value="<?php if (isset($ACielorrasos)){echo $ACielorrasos;}?>" oninput="calcularValor(this)">
															</td>
															<td>
																<input id="ACielorrasosResultado" name="SumaA" class="inp form-control" value="" disabled>
															</td>
															</tr>
															<tr>
															<td>
																<label align="center">Revoques:</label>
															</td>
															<td>
																<input id="ARevoquesFijo" class="inp form-control" type="text" name="" value="9" disabled>
															</td>
															<td>
																<input id="ARevoquesInput" class="form-control loadsum" type="number" name="ARevoques" value="<?php if (isset($ARevoques)){echo $ARevoques;}?>" oninput="calcularValor(this)">
															</td>
															<td>
																<input id="ARevoquesResultado" name="SumaA" class="inp form-control" value="" disabled>
															</td>
															</tr>
															<tr>
															<td>
																<label align="center">Pisos:</label>
															</td>
															<td>
																<input id="APisosFijo" class="inp form-control" type="text" name="" value="8" disabled>
															</td>
															<td>
																<input id="APisosInput" class="form-control loadsum" type="number" name="APisos" value="<?php if (isset($APisos)){echo $APisos;}?>" oninput="calcularValor(this)">
															</td>
															<td>
																<input id="APisosResultado" name="SumaA" class="inp form-control" value="" disabled>
															</td>
															</tr>
															<tr>
															<td>
																<label align="center">Carp. de Hierro:</label>
															</td>
															<td>
																<input id="AHierroFijo" class="inp form-control" type="text" name="" value="11" disabled>
															</td>
															<td>
																<input id="AHierroInput" class="form-control loadsum" type="number" name="AHierro" value="<?php if (isset($AHierro)){echo $AHierro;}?>" oninput="calcularValor(this)">
															</td>
															<td>
																<input id="AHierroResultado" name="SumaA" class="inp form-control" value="" disabled>
															</td>
															</tr>
															<tr>
															<td>
																<label align="center">Carp. de Madera:</label>
															</td>
															<td>
																<input id="AMaderaFijo" class="inp form-control" type="text" name="" value="4" disabled>
															</td>
															<td>
																<input id="AMaderaInput" class="form-control loadsum" type="number" name="AMadera" value="<?php if (isset($AMadera)){echo $AMadera;}?>" oninput="calcularValor(this)">
															</td>
															<td>
																<input id="AMaderaResultado" name="SumaA" class="inp form-control" value="" disabled>
															</td>
															</tr>
															<tr>
															<td>
																<label align="center">Baños:</label>
															</td>
															<td>
																<input id="ABanoFijo" class="inp form-control" type="text" name="" value="8" disabled>
															</td>
															<td>
																<input id="ABanoInput" class="form-control loadsum" type="number" name="ABano" value="<?php if (isset($ABano)){echo $ABano;}?>" oninput="calcularValor(this)">
															</td>
															<td>
																<input id="ABanoResultado" name="SumaA" class="inp form-control" value="" disabled>
															</td>
															</tr>
															<tr>
															<td>
																<label align="center">Cocina:</label>
															</td>
															<td>
																<input id="ACocinaFijo" class="inp form-control" type="text" name="" value="2" disabled>
															</td>
															<td>
																<input id="ACocinaInput" class="form-control loadsum" type="number" name="ACocina" value="<?php if (isset($ACocina)){echo $ACocina;}?>" oninput="calcularValor(this)">
															</td>
															<td>
																<input id="ACocinaResultado" name="SumaA" class="inp form-control" value="" disabled>
															</td>
															</tr>
															<tr>
															<td>
																<label align="center">Revestimiento:</label>
															</td>
															<td>
																<input id="ARevestFijo" class="inp form-control" type="text" name="" value="3" disabled>
															</td>
															<td>
																<input id="ARevestInput" class="form-control loadsum" type="number" name="ARevest" value="<?php if (isset($ARevest)){echo $ARevest;}?>" oninput="calcularValor(this)">
															</td>
															<td>
																<input id="ARevestResultado" name="SumaA" class="inp form-control" value="" disabled>
															</td>
															</tr>
															<tr>
															<td>
																<label align="center">Inst. Complementarias:</label>
															</td>
															<td>
																<input id="AInstalacFijo" class="inp form-control" type="text" name="" value="8" disabled>
															</td>
															<td>
																<input id="AInstalacInput" class="form-control loadsum" type="number" name="AInstalac" value="<?php if (isset($AInstalac)){echo $AInstalac;}?>" oninput="calcularValor(this)">
															</td>
															<td>
																<input id="AInstalacResultado" name="SumaA" class="inp form-control" value="" disabled>
															</td>
														</tr>
													</tbody>
												</table>
												<?php

												$ResultadoA = $RAFachada + $RAParedes + $RATechos +	$RACielorrasos + $RARevoques + $RAPisos +	$RAHierro +	$RAMadera +	$RABano +	$RACocina +	$RARevest +	$RAInstalac;

												?>
												<div class="row">
													<div class="span5">
														<span>Metros Cuadrados a Justipreciar:</span>
														<input id="AMetrosInput" class="form-control" type="number" name="AMetros" value="<?php if (isset($AMetros)){echo $AMetros;}?>" oninput="mostrarvalor(this)">
													</div>
													<div class="span5">
														<span>Estado:</span>
														<select id="AEstadoInput" class="form-control" name="AEstado" onchange="mostrarvalor(this)">
															<option hidden value="<?php if (isset($AEstado)){echo $AEstado;}?>" selected><?php if (isset($AEstadoM)){echo $AEstadoM;}?> </option>
															<option value="1">Bueno</option>
															<option value="0.60">Regular</option>
															<option value="0.30">Malo</option>
														</select>
													</div>
													<div class="span5">
														<span>Determinar Tipo de Formulario:</span>
														<select id="ABasicoInput" class="form-control" name="ABasico" onchange="mostrarvalor(this)">
															<option hidden value="<?php if (isset($ABasico)){echo $ABasico;}?>" selected><?php if (isset($basico)){echo $basico;}?> </option>
															<option value="10000.00">903</option>
															<option value="8520.00">904</option>
														</select>
													</div>
													</div> <!-- row -->
													<table class="table table-bordered responsive-table">
														<tbody>
															<tr>
																<td>
																	<label align="center">M. a Justipreciar:</label>
																</td>
																<td>
																	<input id="AMetrosResultado" class="form-control" value="<?php if (isset($AMetros)){echo $AMetros;}?>" readonly>
																</td>
															</tr>
															<tr>
																<td>
																	<label align="center">Valor Basico:</label>
																</td>
																<td>
																	<input id="ABasicoResultado" class="form-control" value="<?php if (isset($ABasico)){echo $ABasico;}?>" readonly>
																</td>
															</tr>
															<tr>
																<td>
																	<label align="center">Coef. de Correc. Const:</label>
																</td>
																<td>
																	<input id="AEstadoResultado" class="form-control" value="<?php if (isset($AEstado)){echo $AEstado;}?>" readonly>
																</td>
															</tr>
															<tr>
																<td>
																	<label align="center">Total de Ejecucion:</label>
																</td>
																<td>
																	<input id="TotalA" type="text" class="form-control" value="" readonly>
																</td>
															</tr>
															<?php //echo $ResultadoA; ?>
															<tr>
																<td>
																	<label align="center">Valor Resultante:</label>
																</td>
																<td>
																	<input id="VtotalA" class="form-control" readonly>
																</td>
															</tr>
														</tbody>
													</table>
													<div class="row">
														<div class="span5">
														<label>Valor Total:</label>
														<input name="totalgeneral" class="form-control" readonly>
														</div>
													</div>
											</div>
										</div>
									</div>
									<!---------------------- Rubro 2 B ---------------------->
									<div class="accordion-group">
										<div class="accordion-heading">
											<a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#rub8">
												RUBRO 2: B
											</a>
										</div>
										<div id="rub8" class="accordion-body collapse">
											<div class="accordion-inner">
												<table class="table table-bordered responsive-table">
													<thead>
														<th></th>
														<th width="4">1. Incidencia</th>
														<th>2. Porcentaje de Ejecucion %</th>
														<th>Parcial (1)*(2)/100</th>
													</thead>
													<tbody>
														<tr>
															<td>
															 <label align="center">Trabajos Preliminares:</label>
														 </td>
															<td>
																<input id="BTrabajosFijo" class="inp form-control" type="text" name="" value="2" disabled>
															</td>
															<td>
																<input id="BTrabajosInput" class="form-control loadsum" type="number" name="BTrabajos" value="<?php if (isset($BTrabajos)){echo $BTrabajos;}?>" oninput="calcularValor(this)">
															</td>
															<td>
																<input id="BTrabajosResultado" name="SumaB" class="inp form-control"   value="" disabled>
															</td>
															</tr>
															<tr>
															<td>
																<label align="center">Mamposteria, Cimiento, Elev. y Elect.:</label>
															</td>
															<td>
																<input id="BMamposteriaFijo" class="inp form-control" type="text" name="" value="17" disabled>
															</td>
															<td>
																<input id="BMamposteriaInput" class="form-control loadsum" type="number" name="BMamposteria" value="<?php if (isset($BMamposteria)){echo $BMamposteria;}?>" oninput="calcularValor(this)">
															</td>
															<td>
																<input id="BMamposteriaResultado" name="SumaB" class="inp form-control" value="" disabled>
															</td>
															</tr>
															<tr>
															<td>
																<label align="center">Estructura Hormigon Armado:</label>
															</td>
															<td>
																<input id="BHormigonFijo" class="inp form-control" type="text" name="" value="17" disabled>
															</td>
															<td>
																<input id="BHormigonInput" class="form-control loadsum" type="number" name="BHormigon" value="<?php if (isset($BHormigon)){echo $BHormigon;}?>" oninput="calcularValor(this)">
															</td>
															<td>
																<input id="BHormigonResultado" name="SumaB" class="inp form-control" value="" disabled>
															</td>
															</tr>
															<tr>
															<td>
																<label align="center">Cubierta Techos:</label>
															</td>
															<td>
																<input id="BTechosFijo" class="inp form-control" type="text" name="" value="1" disabled>
															</td>
															<td>
																<input id="BTechosInput" class="form-control loadsum" type="number" name="BTechos" value="<?php if (isset($BTechos)){echo $BTechos;}?>" oninput="calcularValor(this)">
															</td>
															<td>
																<input id="BTechosResultado" name="SumaB" class="inp form-control"   value="" disabled>
															</td>
															</tr>
															<tr>
															<td>
																<label align="center">Cielorraso:</label>
															</td>
															<td>
																<input id="BCielorrasosFijo" class="inp form-control" type="text" name="" value="2" disabled>
															</td>
															<td>
																<input id="BCielorrasosInput" class="form-control loadsum" type="number" name="BCielorrasos" value="<?php if (isset($BCielorrasos)){echo $BCielorrasos;}?>" oninput="calcularValor(this)">
															</td>
															<td>
																<input id="BCielorrasosResultado" name="SumaB" class="inp form-control" value="" disabled>
															</td>
															</tr>
															<tr>
															<td>
																<label align="center">Revestimiento Grueso, Fino y Pintura:</label>
															</td>
															<td>
																<input id="BRevestiFijo" class="inp form-control" type="text" name="" value="11" disabled>
															</td>
															<td>
																<input id="BRevestiInput" class="form-control loadsum" type="number" name="BRevesti" value="<?php if (isset($BRevesti)){echo $BRevesti;}?>" oninput="calcularValor(this)">
															</td>
															<td>
																<input id="BRevestiResultado" name="SumaB" class="inp form-control" value="" disabled>
															</td>
															</tr>
															<tr>
															<td>
																<label align="center">Pisos y Contrapisos:</label>
															</td>
															<td>
																<input id="BPisosFijo" class="inp form-control" type="text" name="" value="7" disabled>
															</td>
															<td>
																<input id="BPisosInput" class="form-control loadsum" type="number" name="BPisos" value="<?php if (isset($BPisos)){echo $BPisos;}?>" oninput="calcularValor(this)">
															</td>
															<td>
																<input id="BPisosResultado" name="SumaB" class="inp form-control" value="" disabled>
															</td>
															</tr>
															<tr>
															<td>
																<label align="center">Carp. Madera, Metal, Hierro:</label>
															</td>
															<td>
																<input id="BCarpinteriaFijo" class="inp form-control" type="text" name="" value="17" disabled>
															</td>
															<td>
																<input id="BCarpinteriaInput" class="form-control loadsum" type="number" name="BCarpinteria" value="<?php if (isset($BCarpinteria)){echo $BCarpinteria;}?>" oninput="calcularValor(this)">
															</td>
															<td>
																<input id="BCarpinteriaResultado" name="SumaB" class="inp form-control" value="" disabled>
															</td>
															</tr>
															<tr>
															<td>
																<label align="center">Instalacion Sanitaria y Artefactos:</label>
															</td>
															<td>
																<input id="BSanitariaFijo" class="inp form-control" type="text" name="" value="8" disabled>
															</td>
															<td>
																<input id="BSanitariaInput" class="form-control loadsum" type="number" name="BSanitaria" value="<?php if (isset($BSanitaria)){echo $BSanitaria;}?>" oninput="calcularValor(this)">
															</td>
															<td>
																<input id="BSanitariaResultado" name="SumaB" class="inp form-control" value="" disabled>
															</td>
															</tr>
															<tr>
															<td>
																<label align="center">Cocina:</label>
															</td>
															<td>
																<input id="BCocinaFijo" class="inp form-control" type="text" name="" value="5" disabled>
															</td>
															<td>
																<input id="BCocinaInput" class="form-control loadsum" type="number" name="BCocina" value="<?php if (isset($BCocina)){echo $BCocina;}?>" oninput="calcularValor(this)">
															</td>
															<td>
																<input id="BCocinaResultado" name="SumaB" class="inp form-control" value="" disabled>
															</td>
															</tr>
															<tr>
															<td>
																<label align="center">Revestimiento:</label>
															</td>
															<td>
																<input id="BRevesti2Fijo" class="inp form-control" type="text" name="" value="3" disabled>
															</td>
															<td>
																<input id="BRevesti2Input" class="form-control loadsum" type="number" name="BRevesti2" value="<?php if (isset($BRevesti2)){echo $BRevesti2;}?>" oninput="calcularValor(this)">
															</td>
															<td>
																<input id="BRevesti2Resultado" name="SumaB" class="inp form-control" value="" disabled>
															</td>
															</tr>
															<tr>
															<td>
																<label align="center">Inst. Complementarias:</label>
															</td>
															<td>
																<input id="BInsta2Fijo" class="inp form-control" type="text" name="" value="10" disabled>
															</td>
															<td>
																<input id="BInsta2Input" class="form-control loadsum" type="number" name="BInsta2" value="<?php if (isset($BInsta2)){echo $BInsta2;}?>" oninput="calcularValor(this)">
															</td>
															<td>
																<input id="BInsta2Resultado" name="SumaB" class="inp form-control" value="" disabled>
															</td>
														</tr>
													</tbody>
												</table>

												<div class="row">
													<div class="span5">
														<span>Metros Cuadrados a Justipreciar:</span>
														<input id="BMetrosInput" class="form-control" type="number" name="BMetros" value="<?php if (isset($BMetros)){echo $BMetros;}?>" oninput="mostrarvalor(this)">
													</div>
													<div class="span5">
														<span>Estado:</span>
														<select id="BEstadoInput" class="form-control" name="BEstado" onchange="mostrarvalor(this)">
															<option hidden value="<?php if (isset($BEstado)){echo $BEstado;}?>" selected><?php if (isset($BEstadoM)){echo $BEstadoM;}?> </option>
															<option value="1">Bueno</option>
															<option value="0.60">Regular</option>
															<option value="0.30">Malo</option>
														</select>
													</div>
													<div class="span5">
														<span>Determinar Tipo de Formulario:</span>
														<select id="BBasicoInput" class="form-control" name="BBasico" onchange="mostrarvalor(this)">
															<option hidden value="<?php if (isset($BBasico)){echo $BBasico;}?>" selected><?php if (isset($basico)){echo $basico;}?> </option>
															<option value="10000.00">903</option>
															<option value="8520.00">904</option>
														</select>
													</div>
													</div> <!-- row -->
													<table class="table table-bordered responsive-table">
														<tbody>
															<tr>
																<td>
																	<label align="center">M. a Justipreciar:</label>
																</td>
																<td>
																	<input id="BMetrosResultado" class="form-control" value="<?php if (isset($BMetros)){echo $BMetros;}?>" readonly>
																</td>
															</tr>
															<tr>
																<td>
																	<label align="center">Valor Basico:</label>
																</td>
																<td>
																	<input id="BBasicoResultado" class="form-control" value="<?php if (isset($BBasico)){echo $BBasico;}?>" readonly>
																</td>
															</tr>
															<tr>
																<td>
																	<label align="center">Coef. de Correc. Const:</label>
																</td>
																<td>
																	<input id="BEstadoResultado" class="form-control" value="<?php if (isset($BEstado)){echo $BEstado;}?>" readonly>
																</td>
															</tr>
															<tr>
																<td>
																	<label align="center">Total de Ejecucion:</label>
																</td>
																<td>
																	<input id="TotalB" class="form-control" value="" readonly>
																</td>
															</tr>
															<tr>
																<td>
																	<label align="center">Valor Resultante:</label>
																</td>
																<td>
																	<input id="VtotalB" class="form-control" readonly>
																</td>
															</tr>
														</tbody>
													</table>
													<div class="row">
														<div class="span5">
														<label>Valor Total:</label>
														<input name="totalgeneral" class="form-control" readonly>
														</div>
													</div>
											</div>
										</div>
									</div>
									<!---------------------- Rubro 2 C ---------------------->
									<div class="accordion-group">
                    <div class="accordion-heading area">
                      <a class="accordion-toggle" data-toggle="collapse" href="#rub2c">
                        RUBRO 2: C
                      </a>
                    </div>
                    <div id="rub2c" class="accordion-body collapse">
                      <div class="accordion-inner">
                        <table class="table table-bordered responsive-table">
                          <thead>
                            <th></th>
                            <th width="4">1 Incidencia</th>
                            <th>2 Porcentaje de Ejecucion %</th>
                            <th>Parcial (1)*(2)/100</th>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                               <label align="center">Fachadas:</label>
                             </td>
                              <td>
                                <input id="CFachadaFijo" class="inp form-control" type="text" name="" value="3" disabled>
                              </td>
                              <td>
                                <input id="CFachadaInput" class="form-control loadsum" type="number" name="CFachada" value="<?php if (isset($CFachada)){echo $CFachada;}?>" oninput="calcularValor(this)">
                              </td>
                              <td>
																<input id="CFachadaResultado" name="SumaC" class="inp form-control" value="" disabled>
                              </td>
                              </tr>
                              <tr>
                              <td>
                                <label align="center">Paredes:</label>
                              </td>
                              <td>
                                <input id="CParedesFijo" class="inp form-control" type="text" name="" value="22" disabled>
                              </td>
                              <td>
                                <input id="CParedesInput" class="form-control loadsum" type="number" name="CParedes" value="<?php if (isset($CParedes)){echo $CParedes;}?>" oninput="calcularValor(this)">
                              </td>
                              <td>
																<input id="CParedesResultado" name="SumaC" class="inp form-control" value="" disabled>
                              </td>
                              </tr>
                              <tr>
                              <td>
                                <label align="center">Esqueleto:</label>
                              </td>
                              <td>
                                <input id="CEsqueletoFijo" class="inp form-control" type="text" name="" value="9" disabled>
                              </td>
                              <td>
                                <input id="CEsqueletoInput" class="form-control loadsum" type="number" name="CEsqueleto" value="<?php if (isset($CEsqueleto)){echo $CEsqueleto;}?>" oninput="calcularValor(this)">
                              </td>
                              <td>
																<input id="CEsqueletoResultado" name="SumaC" class="inp form-control" value="" disabled>
                              </td>
                              </tr>
                              <tr>
                              <td>
                                <label align="center">Armadura:</label>
                              </td>
                              <td>
                                <input id="CArmadaFijo" class="inp form-control" type="text" name="" value="22" disabled>
                              </td>
                              <td>
                                <input id="CArmadaInput" class="form-control loadsum" type="number" name="CArmada" value="<?php if (isset($CArmada)){echo $CArmada;}?>" oninput="calcularValor(this)">
                              </td>
                              <td>
																<input id="CArmadaResultado" name="SumaC" class="inp form-control" value="" disabled>
                              </td>
                              </tr>
                              <tr>
                              <td>
                                <label align="center">Techos:</label>
                              </td>
                              <td>
                                <input id="CTechosFijo" class="inp form-control" type="text" name="" value="10" disabled>
                              </td>
                              <td>
                                <input id="CTechosInput" class="form-control loadsum" type="number" name="CTechos" value="<?php if (isset($CTechos)){echo $CTechos;}?>" oninput="calcularValor(this)">
                              </td>
                              <td>
																<input id="CTechosResultado" name="SumaC" class="inp form-control" value="" disabled>
                              </td>
                              </tr>
                              <tr>
                              <td>
                                <label align="center">Cielorrasos:</label>
                              </td>
                              <td>
                                <input id="CCielorrasosFijo" class="inp form-control" type="text" name="" value="2" disabled>
                              </td>
                              <td>
                                <input id="CCielorrasosInput" class="form-control loadsum" type="number" name="CCielorrasos" value="<?php if (isset($CCielorrasos)){echo $CCielorrasos;}?>" oninput="calcularValor(this)">
                              </td>
                              <td>
																<input id="CCielorrasosResultado" name="SumaC" class="inp form-control" value="" disabled>
                              </td>
                              </tr>
                              <tr>
                              <td>
                                <label align="center">Revoques:</label>
                              </td>
                              <td>
                                <input id="CRevoquesFijo" class="inp form-control" type="text" name="" value="5" disabled>
                              </td>
                              <td>
                                <input id="CRevoquesInput" class="form-control loadsum" type="number" name="CRevoques" value="<?php if (isset($CRevoques)){echo $CRevoques;}?>" oninput="calcularValor(this)">
                              </td>
                              <td>
																<input id="CRevoquesResultado" name="SumaC" class="inp form-control" value="" disabled>
                              </td>
                              </tr>
                              <tr>
                              <td>
                                <label align="center">Pisos:</label>
                              </td>
                              <td>
                                <input id="CPisosFijo" class="inp form-control" type="text" name="" value="7" disabled>
                              </td>
                              <td>
                                <input id="CPisosInput" class="form-control loadsum" type="number" name="CPisos" value="<?php if (isset($CPisos)){echo $CPisos;}?>" oninput="calcularValor(this)">
                              </td>
                              <td>
																<input id="CPisosResultado" name="SumaC" class="inp form-control" value="" disabled>
                              </td>
                              </tr>
                              <tr>
                              <td>
                                <label align="center">Carp. de Hierro:</label>
                              </td>
                              <td>
                                <input id="CHierroFijo" class="inp form-control" type="text" name="" value="4" disabled>
                              </td>
                              <td>
                                <input id="CHierroInput" class="form-control loadsum" type="number" name="CHierro" value="<?php if (isset($CHierro)){echo $CHierro;}?>" oninput="calcularValor(this)">
                              </td>
                              <td>
																<input id="CHierroResultado" name="SumaC" class="inp form-control" value="" disabled>
                              </td>
                              </tr>
                              <tr>
                              <td>
                                <label align="center">Carp. de Madera:</label>
                              </td>
                              <td>
                                <input id="CMaderaFijo" class="inp form-control" type="text" name="" value="5" disabled>
                              </td>
                              <td>
                                <input id="CMaderaInput" class="form-control loadsum" type="number" name="CMadera" value="<?php if (isset($CMadera)){echo $CMadera;}?>" oninput="calcularValor(this)">
                              </td>
                              <td>
																<input id="CMaderaResultado" name="SumaC" class="inp form-control" value="" disabled>
                              </td>
                              </tr>
                              <tr>
                              <td>
                                <label align="center">Baños:</label>
                              </td>
                              <td>
                                <input id="CBanoFijo" class="inp form-control" type="text" name="" value="2" disabled>
                              </td>
                              <td>
                                <input id="CBanoInput" class="form-control loadsum" type="number" name="CBano" value="<?php if (isset($CBano)){echo $CBano;}?>" oninput="calcularValor(this)">
                              </td>
                              <td>
																<input id="CBanoResultado" name="SumaC" class="inp form-control" value="" disabled>
                              </td>
                              </tr>
                              <tr>
                              <td>
                                <label align="center">Revestimiento:</label>
                              </td>
                              <td>
                                <input id="CRevestiFijo" class="inp form-control" type="text" name="" value="2" disabled>
                              </td>
                              <td>
                                <input id="CRevestiInput" class="form-control loadsum" type="number" name="CRevesti" value="<?php if (isset($CRevesti)){echo $CRevesti;}?>" oninput="calcularValor(this)">
                              </td>
                              <td>
																<input id="CRevestiResultado" name="SumaC" class="inp form-control" value="" disabled>
                              </td>
                            </tr>
														<tr>
														<td>
															<label align="center">Inst. Complementarias:</label>
														</td>
														<td>
															<input id="CInstalacFijo" class="inp form-control" type="text" name="" value="7" disabled>
														</td>
														<td>
															<input id="CInstalacInput" class="form-control loadsum" type="number" name="CInstalac" value="<?php if (isset($CInstalac)){echo $CInstalac;}?>" oninput="calcularValor(this)">
														</td>
														<td>
															<input id="CInstalacResultado" name="SumaC" class="inp form-control" value="" disabled>
														</td>
													</tr>
                          </tbody>
                        </table>

                        <div class="row">
                          <div class="span5">
                            <span>Metros Cuadrados a Justipreciar:</span>
                            <input id="CMetrosInput" class="form-control" type="number" name="CMetros" value="<?php if (isset($CMetros)){echo $CMetros;}?>" oninput="mostrarvalor(this)">
                          </div>
                          <div class="span5">
                            <span>Estado:</span>
                            <select id="CEstadoInput" class="form-control" name="CEstado" oninput="mostrarvalor(this)">
                              <option hidden value="<?php if (isset($CEstado)){echo $CEstado;}?>" selected><?php if (isset($CEstadoM)){echo $CEstadoM;}?></option>
                              <option value="1">Bueno</option>
                              <option value="0.60">Regular</option>
                              <option value="0.30">Malo</option>
                            </select>
                          </div>
                          <div class="span5">
                            <span>Valor Unitario:</span>
                            <input class="form-control" type="text" name="CBasico" value="8046,00">
                          </div>
                          </div> <!-- row -->
                          <table class="table table-bordered responsive-table">
                            <tbody>
                              <tr>
                                <td>
                                  <label align="center">M. a Justipreciar:</label>
                                </td>
                                <td>
                                  <input id="CMetrosResultado" class="form-control" value="<?php if (isset($CMetros)){echo $CMetros;}?>" readonly>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <label align="center">Valor Basico:</label>
                                </td>
                                <td>
                                  <input id="CBasicoResultado" class="form-control" value="8046,00" readonly>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <label align="center">Coef. de Correc. Const:</label>
                                </td>
                                <td>
                                  <input id="CEstadoResultado" class="form-control" value="<?php if (isset($CEstado)){echo $CEstado;}?>" readonly>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <label align="center">Total de Ejecucion:</label>
                                </td>
                                <td>
                                  <input id="TotalC" class="form-control" value="" readonly>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <label align="center">Valor Resultante:</label>
                                </td>
                                <td>
                                  <input id="VtotalC" class="form-control" readonly>
                                </td>
                              </tr>
                            </tbody>
                          </table>
													<div class="row">
														<div class="span5">
														<label>Valor Total:</label>
														<input name="totalgeneral" class="form-control" readonly>
														</div>
													</div>
                      </div>
                    </div>
                  </div>
									<!---------------------- Rubro 3 OBSERVACIONES ---------------------->
									<div class="accordion-group">
										<div class="accordion-heading area ">
											<a class="accordion-toggle" data-toggle="collapse" href="#rub10">
												RUBRO 3: OBSERVACIONES
											</a>
										</div>
										<div id="rub10" class="accordion-body collapse">
											<div class="accordion-inner">
 												<table class="table table-bordered responsive-table">
 													<thead>
 														<th>Observaciones</th>
 													</thead>
 														<tbody>
 															<tr>
 																<td>
 																<textarea id="observaciones" class="form-control" name="observaciones" rows="4" ><?php // if (isset($Observaciones)){echo $Observaciones;}?></textarea>
																</td>
 															</tr>
 														</tbody>
 													</table>
 												</div>
											</div>
										</div>
									<!---------------------- Rubro 3 ---------------------->
								</div> <!-- /accordion -->
							</div> <!-- /controls -->
						</div> <!-- /control-group -->
						<div class="col-sm-2">
							<div class="form-group">
								<table>
									<tr> <td align="center"> <input type="checkbox" value="1" id="mostrarProf" name="mostrarProf" <?php if (isset($mostrarProf)){echo $mostrarProf;}?>> </td> </tr>
									<tr> <td> <h5> No mostrar profesional </h5> </td> </tr>
								</table>
							</div>
						</div>
						<a><button class="btn btn-success" name="insertar">Finalizar</button></a>
						<a href="" ><button onclick="self.close()" class="btn">Cancelar</button></a>
						<?php
							if (isset($_POST['insertar'])){


								if (isset($idobra)){
									$obra = mysqli_query($conexion,"SELECT Parcela,Partida,idFirmante FROM obras WHERE codObra = '$idobra'");
									$ob = mysqli_fetch_array($obra);


									//$idFir = $ob['idFirmante'];
									//$firman = mysqli_query($conexion,"SELECT fnombreApellido,tipoDni,dni FROM firmantes WHERE idFirmante = '$idFir'");
									//$Fir = mysqli_fetch_array($firman);

									$sqlF915= insertForm915($ob['Parcela'],$sub,$_POST['AMetros'],$_POST['AFachada'],$_POST['AParedes'],
									$_POST['ATechos'],$_POST['ACielorrasos'],$_POST['ARevoques'],$_POST['APisos'],$_POST['AHierro'],$_POST['AMadera'],
									$_POST['ABano'],$_POST['ACocina'],$_POST['ARevest'],$_POST['AInstalac'],$_POST['AEstado'],$_POST['ABasico'],
									$_POST['BMetros'],$_POST['BTrabajos'],
									$_POST['BMamposteria'],$_POST['BHormigon'],$_POST['BTechos'],$_POST['BCielorrasos'],$_POST['BRevesti'],$_POST['BPisos'],
									$_POST['BCarpinteria'],$_POST['BSanitaria'],$_POST['BCocina'],$_POST['BRevesti2'],$_POST['BInsta2'],$_POST['BEstado'],
									$_POST['BBasico'],$_POST['CMetros'],$_POST['CFachada'],$_POST['CParedes'],$_POST['CEsqueleto'],$_POST['CArmada'],
									$_POST['CTechos'],$_POST['CCielorrasos'],$_POST['CRevoques'],$_POST['CPisos'],$_POST['CHierro'],$_POST['CMadera'],
									$_POST['CBano'],$_POST['CRevesti'],$_POST['CInstalac'],$_POST['CEstado'],$_POST['CBasico'],$_POST['mostrarProf']);

								include("sql/sqlconnection.php");

								if($dbStatus != "Exitosa")
									exit($dbStatus);

								try {
									// use exec() because no results are returned
									$conn->exec($sqlF915);
									$lastID = $conn->lastInsertId();
									$queryCount = "SELECT COUNT(*) AS cuenta FROM `cedulaformularios` WHERE nroFormulario = 915 AND idCedula = $Cedula";
									$count = $conn->query($queryCount)->fetch();
									$version = ((int)$count["cuenta"]) + 1;
									$queryObra = "INSERT INTO cedulaformularios
									(idCedulaFormularios, idCedula, tipoCedula, nroFormulario, `version`, `data`, codForm)
									VALUES (default, $Cedula, $TipoDeCedula, 915, $version, YEAR(CURDATE()), $lastID)";
									$conn->exec($queryObra);
									} catch(PDOException $e) {
									echo "Fallo el registro:" . $e->getMessage();
									}
								}else{
										$sql = updateForm915($idform, $_POST['AMetros'],$_POST['AFachada'],$_POST['AParedes'],
										$_POST['ATechos'],$_POST['ACielorrasos'],$_POST['ARevoques'],$_POST['APisos'],$_POST['AHierro'],$_POST['AMadera'],
										$_POST['ABano'],$_POST['ACocina'],$_POST['ARevest'],$_POST['AInstalac'],$_POST['AEstado'],$_POST['ABasico'],
										$_POST['BMetros'],$_POST['BTrabajos'],
										$_POST['BMamposteria'],$_POST['BHormigon'],$_POST['BTechos'],$_POST['BCielorrasos'],$_POST['BRevesti'],$_POST['BPisos'],
										$_POST['BCarpinteria'],$_POST['BSanitaria'],$_POST['BCocina'],$_POST['BRevesti2'],$_POST['BInsta2'],$_POST['BEstado'],
										$_POST['BBasico'],$_POST['CMetros'],$_POST['CFachada'],$_POST['CParedes'],$_POST['CEsqueleto'],$_POST['CArmada'],
										$_POST['CTechos'],$_POST['CCielorrasos'],$_POST['CRevoques'],$_POST['CPisos'],$_POST['CHierro'],$_POST['CMadera'],
										$_POST['CBano'],$_POST['CRevesti'],$_POST['CInstalac'],$_POST['CEstado'],$_POST['CBasico'],$_POST['mostrarProf']);

										mysqli_query($conexion,$sql)
										or die("Problemas en la actualizacion".mysqli_error($conexion));
									}

								$conn = null;
								echo "<script language='javascript'>";
 								echo "alert('El formulario 915 se cargo correctamente');";
 								echo 'window.opener.getFormularios();';
 								echo "window.close();";
 								echo "</script>";
							}
						 ?>
					</div> <!-- /widget-content -->
				</form>
				</div> <!-- /container -->
			</div> <!-- /main-inner -->
		</div> <!-- /main -->
		<?php
			include("pie.php");
		?>
		<!---------------------- Scripts ---------------------->

	</body>
	<script type="text/javascript">

		window.onload = function() {

			var start = document.getElementsByClassName("loadsum");
			for (var i = 0; i < start.length; i++) {

				calcularValor(start[i]);
			}
		}

		function calcularValor(element) {
			if(isNaN(element.value))
				return;
			var elementName = element.id;
			var resultName = elementName.replace("Input", "") + "Resultado";
			var fijoName = elementName.replace("Input", "") + "Fijo";
			var fijo = document.getElementById(fijoName).value;
			var input = element.value;
			document.getElementById(resultName).value = (fijo*input)/100;
			calcularSuma(element);
			}

		function calcularSuma(element){
			var group = element.id.slice(0,1);
			var elements = document.getElementsByName("Suma" + group);
			var temp = 0;
			for (var i = 0; i < elements.length; i++) {
				if (elements[i].value)
					temp = parseFloat(temp) + parseFloat(elements[i].value);
			}
			document.getElementById("Total" + group).value = Math.round(temp * 100) /100;
			calcularSumaTotal(group);
		}
		function calcularSumaTotal(group) {
			var metros = document.getElementById(group + "MetrosResultado");
			var basico = document.getElementById(group + "BasicoResultado");
			var estado = document.getElementById(group + "EstadoResultado");
			var total = document.getElementById("Total" + group);
			if (isNaN(parseFloat(metros.value)) || isNaN(parseFloat(basico.value)) || isNaN(parseFloat(estado.value)) || isNaN(parseFloat(total.value)))
			return;
			var tempo = ((parseFloat(metros.value) * parseFloat(basico.value)  * parseFloat(total.value))/100) * parseFloat(estado.value);
			document.getElementById("Vtotal" + group).value = Math.round(tempo * 100) /100;
			calculoGeneral();
		}
		function calculoGeneral(){
			var totalA = document.getElementById("VtotalA");
			var totalB = document.getElementById("VtotalB");
			var totalC = document.getElementById("VtotalC");

			var numA = isNaN(parseFloat(totalA.value)) ? 0 : parseFloat(totalA.value);
			var numB = isNaN(parseFloat(totalB.value)) ? 0 : parseFloat(totalB.value);
			var numC = isNaN(parseFloat(totalC.value)) ? 0 : parseFloat(totalC.value);

			var elements = document.getElementsByName("totalgeneral");

			for (var i = 0; i < elements.length; i++) {
			 elements[i].value = numA + numB + numC;
			}
		}
		function mostrarvalor(element) {
			if(isNaN(element.value))
				return;
			var elementName = element.id;
			var resultName = elementName.replace("Input", "") + "Resultado";
			var input = element.value;
			document.getElementById(resultName).value = input;
			var group = element.id.slice(0,1);
			calcularSumaTotal(group);
			}
	</script>
</html>
