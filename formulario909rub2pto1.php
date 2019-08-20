<?php
	include("sesion.php");
$pagina='formulario909rub2pto1PHP';
include("encabezado.php");
include("seguridadForm.php");

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
$idObra = $cedu['codObra'];
}else {
	$idform = $_GET['idform'];
	$row909 = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM form909  WHERE codForm909 = $idform "));

	$OliHect1 = $row909['OliHect1']; $OliArea1 = $row909['OliArea1']; $OliCa1 = $row909['OliCa1'];
	$OliPre1 = $row909['OliPre1']; $OliPro1 = $row909['OliPro1']; $OliPos1 = $row909['OliPos1'];

	$OliHect2 = $row909['OliHect2']; $OliArea2 = $row909['OliArea2']; $OliCa2 = $row909['OliCa2'];
	$OliPre2 = $row909['OliPre2']; $OliPro2 = $row909['OliPro2']; $OliPos2 = $row909['OliPos2'];

	$OliHect3 = $row909['OliHect3']; $OliArea3 = $row909['OliArea3']; $OliCa3 = $row909['OliCa3'];
	$OliPre3 = $row909['OliPre3']; $OliPro3 = $row909['OliPro3'];	$OliPos3 = $row909['OliPos3'];

	$OliHect4 = $row909['OliHect4'];	$OliArea4 = $row909['OliArea4'];	$OliCa4 = $row909['OliCa4'];
	$OliPre4 = $row909['OliPre4'];	$OliPro4 = $row909['OliPro4'];	$OliPos4 = $row909['OliPos4'];

	$OliHect5 = $row909['OliHect5'];	$OliArea5 = $row909['OliArea5'];	$OliCa5 = $row909['OliCa5'];
	$OliPre5 = $row909['OliPre5']; $OliPro5 = $row909['OliPro5'];	$OliPos5 = $row909['OliPos5'];

	$OliHect6 = $row909['OliHect6'];	$OliArea6 = $row909['OliArea6'];	$OliCa6 = $row909['OliCa6'];
	$OliPre6 = $row909['OliPre6'];	$OliPro6 = $row909['OliPro6'];	$OliPos6 = $row909['OliPos6'];

	$OliHect7 = $row909['OliHect7'];  $OliArea7 = $row909['OliArea7'];  $OliCa7 = $row909['OliCa7'];
	$OliPre7 = $row909['OliPre7'];	$OliPro7 = $row909['OliPro7'];	$OliPos7 = $row909['OliPos7'];

	$OliHect8 = $row909['OliHect8'];  $OliArea8 = $row909['OliArea8'];	$OliCa8 = $row909['OliCa8'];
	$OliPre8 = $row909['OliPre8'];	$OliPro8 = $row909['OliPro8'];	$OliPos8 = $row909['OliPos8'];

	$OliHect9 = $row909['OliHect9'];	$OliArea9 = $row909['OliArea9'];	$OliCa9 = $row909['OliCa9'];
	$OliPre9 = $row909['OliPre9'];	$OliPro9 = $row909['OliPro9'];	$OliPos9 = $row909['OliPos9'];

	$FrutDet1 = $row909['FrutDet1'];	$FruEst1 = $row909['FruEst1'];	$FruHect1 = $row909['FruHect1'];
	$FruArea1 = $row909['FruArea1'];	$FruCa1 = $row909['FruCa1'];	$FruPre1 = $row909['FruPre1'];
	$FruPro1 = $row909['FruPro1'];	$FruPos1 = $row909['FruPos1'];

	$FrutDet2 = $row909['FrutDet2'];	$FruEst2 = $row909['FruEst2'];	$FruHect2 = $row909['FruHect2'];
	$FruArea2 = $row909['FruArea2'];	$FruCa2 = $row909['FruCa2'];	$FruPre2 = $row909['FruPre2'];
	$FruPro2 = $row909['FruPro2'];	$FruPos2 = $row909['FruPos2'];

	$FrutDet3 = $row909['FrutDet3'];	$FruEst3 = $row909['FruEst3'];	$FruHect3 = $row909['FruHect3'];
	$FruCa3 = $row909['FruCa3'];	$FruArea3 = $row909['FruArea3'];	$FruPre3 = $row909['FruPre3'];
	$FruPro3 = $row909['FruPro3'];	$FruPos3 = $row909['FruPos3'];

	$FrutDet4 = $row909['FrutDet4'];	$FruEst4 = $row909['FruEst4'];	$FruHect4 = $row909['FruHect4'];
	$FruArea4 = $row909['FruArea4'];	$FruCa4 = $row909['FruCa4'];	$FruPre4 = $row909['FruPre4'];
	$FruPro4 = $row909['FruPro4'];	$FruPos4 = $row909['FruPos4'];

	$FrutDet5 = $row909['FrutDet5'];	$FruEst5 = $row909['FruEst5'];	$FruHect5 = $row909['FruHect5'];
	$FruArea5 = $row909['FruArea5'];	$FruCa5 = $row909['FruCa5'];	$FruPre5 = $row909['FruPre5'];
	$FruPro5 = $row909['FruPro5'];	$FruPos5 = $row909['FruPos5'];

	$FrutDet6 = $row909['FrutDet6'];	$FruEst6 = $row909['FruEst6'];	$FruHect6 = $row909['FruHect6'];
	$FruArea6 = $row909['FruArea6'];	$FruCa6 = $row909['FruCa6'];	$FruPre6 = $row909['FruPre6'];
	$FruPro6 = $row909['FruPro6'];	$FruPos6 = $row909['FruPos6'];

	$FrutDet7 = $row909['FrutDet7'];	$FruEst7 = $row909['FruEst7'];	$FruHect7 = $row909['FruHect7'];
	$FruArea7 = $row909['FruArea7'];	$FruCa7 = $row909['FruCa7'];	$FruPre7 = $row909['FruPre7'];
	$FruPro7 = $row909['FruPro7'];	$FruPos7 = $row909['FruPos7'];

	$FrutDet8 = $row909['FrutDet8'];	$FruEst8 = $row909['FruEst8'];	$FruHect8 = $row909['FruHect8'];
	$FruArea8 = $row909['FruArea8'];	$FruCa8 = $row909['FruCa8'];	$FruPre8 = $row909['FruPre8'];
	$FruPro8 = $row909['FruPro8'];	$FruPos8 = $row909['FruPos8'];

	$FrutDet9 = $row909['FrutDet9'];	$FruEst9 = $row909['FruEst9'];	$FruHect9 = $row909['FruHect9'];
	$FruArea9 = $row909['FruArea9'];	$FruCa9 = $row909['FruCa9'];	$FruPre9 = $row909['FruPre9'];
	$FruPro9 = $row909['FruPro9'];	$FruPos9 = $row909['FruPos9'];

	$PlanDet1 = $row909['PlanDet1'];	$PlanEst1 = $row909['PlanEst1'];	$PlanHect1 = $row909['PlanHect1'];
	$PlanArea1 = $row909['PlanArea1'];	$PlanCa1 = $row909['PlanCa1'];	$PlanPre1 = $row909['PlanPre1'];
	$PlanPro1 = $row909['PlanPro1'];

	$PlanDet2 = $row909['PlanDet2'];	$PlanEst2 = $row909['PlanEst2'];	$PlanHect2 = $row909['PlanHect2'];
	$PlanArea2 = $row909['PlanArea2'];	$PlanCa2 = $row909['PlanCa2'];	$PlanPre2 = $row909['PlanPre2'];
	$PlanPro2 = $row909['PlanPro2'];

	$PlanDet3 = $row909['PlanDet3'];	$PlanEst3 = $row909['PlanEst3'];	$PlanHect3 = $row909['PlanHect3'];
	$PlanArea3 = $row909['PlanArea3'];  $PlanCa3 = $row909['PlanCa3'];	$PlanPre3 = $row909['PlanPre3'];
	$PlanPro3 = $row909['PlanPro3'];

	$PlanDet4 = $row909['PlanDet4'];	$PlanEst4 = $row909['PlanEst4'];	$PlanHect4 = $row909['PlanHect4'];
	$PlanArea4 = $row909['PlanArea4'];	$PlanCa4 = $row909['PlanCa4'];	$PlanPre4 = $row909['PlanPre4'];
	$PlanPro4 = $row909['PlanPro4'];

	$PlanDet5 = $row909['PlanDet5'];	$PlanEst5 = $row909['PlanEst5'];	$PlanHect5 = $row909['PlanHect5'];
	$PlanArea5 = $row909['PlanArea5'];	$PlanCa5 = $row909['PlanCa5'];  $PlanPre5 = $row909['PlanPre5'];
	$PlanPro5 = $row909['PlanPro5'];

	$PlanDet6 = $row909['PlanDet6'];	$PlanEst6 = $row909['PlanEst6'];	$PlanHect6 = $row909['PlanHect6'];
	$PlanArea6 = $row909['PlanArea6'];	$PlanCa6 = $row909['PlanCa6'];	$PlanPre6 = $row909['PlanPre6'];
	$PlanPro6 = $row909['PlanPro6'];

	$PlanDet7 = $row909['PlanDet7'];	$PlanEst7 = $row909['PlanEst7'];	$PlanHect7 = $row909['PlanHect7'];
	$PlanArea7 = $row909['PlanArea7'];	$PlanCa7 = $row909['PlanCa7'];	$PlanPre7 = $row909['PlanPre7'];
	$PlanPro7 = $row909['PlanPro7'];

	$PlanDet8 = $row909['PlanDet8'];	$PlanEst8 = $row909['PlanEst8'];	$PlanHect8 = $row909['PlanHect8'];
	$PlanArea8 = $row909['PlanArea8'];	$PlanCa8 = $row909['PlanCa8'];  $PlanPre8 = $row909['PlanPre8'];
	$PlanPro8 = $row909['PlanPro8'];

	$PlanDet9 = $row909['PlanDet9'];	$PlanEst9 = $row909['PlanEst9'];	$PlanHect9 = $row909['PlanHect9'];
	$PlanArea9 = $row909['PlanArea9'];	$PlanCa9 = $row909['PlanCa9'];	$PlanPre9 = $row909['PlanPre9'];
	$PlanPro9 = $row909['PlanPro9'];
	$mostrarProf = $row909['firmaprof'];

}
if ((isset($mostrarProf)) && ($mostrarProf === '1')) {
	 $mostrarProf = 'checked="checked" ';
} else {
		$mostrarProf = ' ';
}

function checked($dato){
		if ($dato==1){
			echo 'checked';
		}
}
function Estado($dato){
	if (isset($dato)){
		switch ($dato) {
			case '1':
			echo	$dato = 'Bueno';
			break;
			case '0.60':
			echo	$dato = 'Regular';
			break;
			case '0.30':
			echo $dato = 'Malo';
			break;
		}
	}
}
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
			.select-f{
				width: 110px !important;
			}
		</style>
	</head>
	<body>
		<?php
			$pagina='formulario909rub2pto1PHP';
			//include("sql/insertFormulario.php");
		?>
		<div class="main">
			<div class="main-inner">

				<div class="container">

					<div class="widget-header">
						<i class="icon-th-large"></i>
						<h3>Formulario 909</h3>
					</div> <!-- /widget-header -->
					<form method="post">
					<div class="widget-content">
						<div class="control-group">
							<div class="controls">
								<div class="accordion" id="accordion2">
									<!---------------------- INCISO A ---------------------->
									<div class="accordion-group">
										<div class="accordion-heading">
											<a class="accordion-toggle" data-toggle="collapse" href="#rub2">
												INCISO A: OLIVOS
											</a>
										</div>
										<div id="rub2" class="accordion-body collapse in">
											<div class="accordion-inner">
												<table class="table table-bordered responsive-table">
													<thead>
														<th>Plantaciones</th>
														<th>Hectarea</th>
														<th>Area</th>
														<th>Cent</th>
														<th>Preproduccion</th>
														<th>Produccion</th>
														<th>Posproduccion</th>
													</thead>
													<tbody>
														<tr>
															<td>
															<label align="center">Bueno</label>
														</td>
															<td>
																<input class="form-control" type="number" name="OliHect1" value="<?php if (isset($OliHect1)){echo $OliHect1;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="OliArea1" value="<?php if (isset($OliArea1)){echo $OliArea1;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="OliCa1" value="<?php if (isset($OliCa1)){echo $OliCa1;}?>">
															</td>
															<td>
																<input type="checkbox" name="OliPre1" value="<?php if(isset($OliPre1)){echo $OliPre1;}?>" <?php if(isset($OliPre1)){checked($OliPre1);} ?> >
															</td>
															<td>
																<input type="checkbox" name="OliPro1" value="<?php if(isset($OliPro1)){echo $OliPro1;}?>" <?php if(isset($OliPro1)){checked($OliPro1);} ?> >
															</td>
															<td>
																<input type="checkbox" name="OliPos1" value="<?php if(isset($OliPos1)){echo $OliPos1;}?>" <?php if(isset($OliPos1)){checked($OliPos1);} ?> >
															</td>
														</tr>
														<tr>
															<td>
																<label align="center">Regular</label>
															</td>
															<td>
																<input class="form-control" type="number" name="OliHect2" value="<?php if (isset($OliHect2)){echo $OliHect2;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="OliArea2" value="<?php if (isset($OliArea2)){echo $OliArea2;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="OliCa2" value="<?php if (isset($OliCa2)){echo $OliCa2;}?>">
															</td>
															<td>
																<input type="checkbox" name="OliPre2" value="<?php if (isset($OliPre2)){echo $OliPre2;}?>" <?php if(isset($OliPre2)){ checked($OliPre2);} ?> >
															</td>
															<td>
																<input type="checkbox" name="OliPro2" value="<?php if (isset($OliPro2)){echo $OliPro2;}?>" <?php if(isset($OliPro2)){ checked($OliPro2);} ?> >
															</td>
															<td>
																<input type="checkbox" name="OliPos2" value="<?php if (isset($OliPos2)){echo $OliPos2;}?>" <?php if(isset($OliPos2)){ checked($OliPos2);} ?> >
															</td>
														</tr>
														<tr>
															<td>
																<label align="center">Malo</label>
															</td>
															<td>
																<input class="form-control" type="number" name="OliHect3" value="<?php if (isset($OliHect3)){echo $OliHect3;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="OliArea3" value="<?php if (isset($OliArea3)){echo $OliArea3;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="OliCa3" value="<?php if (isset($OliCa3)){echo $OliCa3;}?>">
															</td>
															<td>
																<input type="checkbox" name="OliPre3" value="<?php if (isset($OliPre3)){echo $OliPre3;}?>" <?php if(isset($OliPre3)){ checked($OliPre3);} ?> >
															</td>
															<td>
																<input type="checkbox" name="OliPro3" value="<?php if (isset($OliPro3)){echo $OliPro3;}?>" <?php if(isset($OliPro3)){ checked($OliPro3);} ?> >
															</td>
															<td>
																<input type="checkbox" name="OliPos3" value="<?php if (isset($OliPos3)){echo $OliPos3;}?>" <?php if(isset($OliPos3)){ checked($OliPos3);} ?> >
															</td>
														</tr>
														<tr>
															<td>
															<label align="center">Bueno</label>
														</td>
														<td>
															<input class="form-control" type="number" name="OliHect4" value="<?php if (isset($OliHect4)){echo $OliHect4;}?>">
														</td>
														<td>
															<input class="form-control" type="number" name="OliArea4" value="<?php if (isset($OliArea4)){echo $OliArea4;}?>">
														</td>
														<td>
															<input class="form-control" type="number" name="OliCa4" value="<?php if (isset($OliCa4)){echo $OliCa4;}?>">
														</td>
														<td>
															<input type="checkbox" name="OliPre4" value="<?php if (isset($OliPre4)){echo $OliPre4;}?>" <?php if(isset($OliPre4)){ checked($OliPre4);} ?> >
														</td>
														<td>
															<input type="checkbox" name="OliPro4" value="<?php if (isset($OliPro4)){echo $OliPro4;}?>" <?php if(isset($OliPro4)){checked($OliPro4);} ?> >
														</td>
														<td>
															<input type="checkbox" name="OliPos4" value="<?php if (isset($OliPos4)){echo $OliPos4;}?>" <?php if(isset($OliPos4)){checked($OliPos4);} ?> >
														</td>
														</tr>
														<tr>
															<td>
																<label align="center">Regular</label>
															</td>
															<td>
																<input class="form-control" type="number" name="OliHect5" value="<?php if (isset($OliHect5)){echo $OliHect5;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="OliArea5" value="<?php if (isset($OliArea5)){echo $OliArea5;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="OliCa5" value="<?php if (isset($OliCa5)){echo $OliCa5;}?>">
															</td>
															<td>
																<input type="checkbox" name="OliPre5" value="<?php if (isset($OliPre5)){echo $OliPre5;}?>" <?php if(isset($OliPre5)){checked($OliPre5);} ?> >
															</td>
															<td>
																<input type="checkbox" name="OliPro5" value="<?php if (isset($OliPro5)){echo $OliPro5;}?>" <?php if(isset($OliPro5)){checked($OliPro5);} ?> >
															</td>
															<td>
																<input type="checkbox" name="OliPos5" value="<?php if (isset($OliPos5)){echo $OliPos5;}?>" <?php if(isset($OliPos5)){checked($OliPos5);} ?> >
															</td>
														</tr>
														<tr>
															<td>
																<label align="center">Malo</label>
															</td>
															<td>
																<input class="form-control" type="number" name="OliHect6" value="<?php if (isset($OliHect6)){echo $OliHect6;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="OliArea6" value="<?php if (isset($OliArea6)){echo $OliArea6;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="OliCa6" value="<?php if (isset($OliCa6)){echo $OliCa6;}?>">
															</td>
															<td>
																<input type="checkbox" name="OliPre6" value="<?php if (isset($OliPre6)){echo $OliPre6;}?>" <?php if(isset($OliPre6)){checked($OliPre6);} ?> >
															</td>
															<td>
																<input type="checkbox" name="OliPro6" value="<?php if (isset($OliPro6)){echo $OliPro6;}?>" <?php if(isset($OliPro6)){checked($OliPro6);} ?> >
															</td>
															<td>
																<input type="checkbox" name="OliPos6" value="<?php if (isset($OliPos6)){echo $OliPos6;}?>" <?php if(isset($OliPos6)){checked($OliPos6);} ?> >
															</td>
														</tr>
														<tr>
															<td>
															<label align="center">Bueno</label>
														</td>
														<td>
															<input class="form-control" type="number" name="OliHect7" value="<?php if (isset($OliHect7)){echo $OliHect7;}?>">
														</td>
														<td>
															<input class="form-control" type="number" name="OliArea7" value="<?php if (isset($OliArea7)){echo $OliArea7;}?>">
														</td>
														<td>
															<input class="form-control" type="number" name="OliCa7" value="<?php if (isset($OliCa7)){echo $OliCa7;}?>">
														</td>
														<td>
															<input type="checkbox" name="OliPre7" value="<?php if (isset($OliPre7)){echo $OliPre7;}?>" <?php if(isset($OliPre7)){checked($OliPre7);} ?>>
														</td>
														<td>
															<input type="checkbox" name="OliPro7" value="<?php if (isset($OliPro7)){echo $OliPro7;}?>" <?php if(isset($OliPro7)){checked($OliPro7);} ?>>
														</td>
														<td>
															<input type="checkbox" name="OliPos7" value="<?php if (isset($OliPos7)){echo $OliPos7;}?>" <?php if(isset($OliPos7)){checked($OliPos7);} ?>>
														</td>
														</tr>
														<tr>
															<td>
															<label align="center">Regular</label>
															</td>
															<td>
																<input class="form-control" type="number" name="OliHect8" value="<?php if (isset($OliHect8)){echo $OliHect8;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="OliArea8" value="<?php if (isset($OliArea8)){echo $OliArea8;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="OliCa8" value="<?php if (isset($OliCa8)){echo $OliCa8;}?>">
															</td>
															<td>
																<input type="checkbox" name="OliPre8" value="<?php if (isset($OliPre8)){echo $OliPre8;}?>" <?php if(isset($OliPre8)){checked($OliPre8);} ?>>
															</td>
															<td>
																<input type="checkbox" name="OliPro8" value="<?php if (isset($OliPro8)){echo $OliPro8;}?>" <?php if(isset($OliPro8)){checked($OliPro8);} ?>>
															</td>
															<td>
																<input type="checkbox" name="OliPos8" value="<?php if (isset($OliPos8)){echo $OliPos8;}?>" <?php if(isset($OliPos8)){checked($OliPos8);} ?>>
															</td>
														</tr>
														<tr>
															<td>
																<label align="center">Malo</label>
															</td>
															<td>
																<input class="form-control" type="number" name="OliHect9" value="<?php if (isset($OliHect9)){echo $OliHect9;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="OliArea9" value="<?php if (isset($OliArea9)){echo $OliArea9;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="OliCa9" value="<?php if (isset($OliCa9)){echo $OliCa9;}?>">
															</td>
															<td>
																<input type="checkbox" name="OliPre9" value="<?php if (isset($OliPre9)){echo $OliPre9;}?>" <?php if(isset($OliPre9)){checked($OliPre9);} ?>>
															</td>
															<td>
																<input type="checkbox" name="OliPro9" value="<?php if (isset($OliPro9)){echo $OliPro9;}?>" <?php if(isset($OliPro9)){checked($OliPro9);} ?>>
															</td>
															<td>
																<input type="checkbox" name="OliPos9" value="<?php if (isset($OliPos9)){echo $OliPos9;}?>" <?php if(isset($OliPos9)){checked($OliPos9);} ?>>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<!---------------------- INCISO A ---------------------->
									<div class="accordion-group">
										<div class="accordion-heading">
											<a class="accordion-toggle" data-toggle="collapse" href="#rub2b">
												INCISO B: OTROS FRUTALES
											</a>
										</div>
										<div id="rub2b" class="accordion-body collapse">
											<div class="accordion-inner">
												<table class="table table-bordered responsive-table">
													<thead>
														<th>Frutales</th>
														<th>Estado</th>
														<th>Hectarea</th>
														<th>Area</th>
														<th>Cent</th>
														<th>Preprod</th>
														<th>Produccion</th>
														<th>Pospro</th>
													</thead>
													<tbody>
														<tr>
															<td>
															<select class="select-f selectpicker" name="FruDet1">
																<option value="<?php if(isset($FrutDet1)){echo $FrutDet1;}?>" selected><?php if(isset($FrutDet1)){echo $FrutDet1;}?> </option>
																<option value="Ciruelo">Ciruelo</option>
																<option value="Duraznero">Duraznero</option>
																<option value="Limonero">Limonero</option>
																<option value="Mandarino">Mandarino</option>
																<option value="Manzano">Manzano</option>
																<option value="Naranjo">Naranjo</option>
																<option value="Peral">Peral</option>
																<option value="Pomelo">Pomelo</option>
																<option value="Vid">Vid</option>
															</select>
														</td>
														<td>
															<select class="select-f selectpicker" name="FruEst1">
																<option value="<?php if(isset($FruEst1)){echo $FruEst1;}?>" selected><?php if(isset($FruEst1)){ Estado($FruEst1);}?> </option>
																<option value="1">Bueno</option>
																<option value="0.60">Regular</option>
																<option value="0.30">Malo</option>
															</select>
														</td>
															<td>
																<input class="form-control" type="number" name="FruHect1" value="<?php if (isset($FruHect1)){echo $FruHect1;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="FruArea1" value="<?php if (isset($FruArea1)){echo $FruArea1;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="FruCa1" value="<?php if (isset($FruCa1)){echo $FruCa1;}?>">
															</td>
															<td>
																<input type="checkbox" name="FruPre1" value="<?php if (isset($FruPre1)){echo $FruPre1;}?>" <?php if(isset($FruPre1)){checked($FruPre1);} ?>>
															</td>
															<td>
																<input type="checkbox" name="FruPro1" value="<?php if (isset($FruPro1)){echo $FruPro1;}?>" <?php if(isset($FruPro1)){checked($FruPro1);} ?>>
															</td>
															<td>
																<input type="checkbox" name="FruPos1" value="<?php if (isset($FruPos1)){echo $FruPos1;}?>" <?php if(isset($FruPos1)){checked($FruPos1);} ?>>
															</td>
														</tr>
														<tr>
															<td>
															<select class="select-f selectpicker" name="FruDet2">
																<option value="<?php if(isset($FrutDet2)){echo $FrutDet2;}?>" selected><?php if(isset($FrutDet2)){echo $FrutDet2;}?> </option>
																<option value="Ciruelo">Ciruelo</option>
																<option value="Duraznero">Duraznero</option>
																<option value="Limonero">Limonero</option>
																<option value="Mandarino">Mandarino</option>
																<option value="Manzano">Manzano</option>
																<option value="Naranjo">Naranjo</option>
																<option value="Peral">Peral</option>
																<option value="Pomelo">Pomelo</option>
																<option value="Vid">Vid</option>
															</select>
														</td>
														<td>
															<select class="select-f selectpicker" name="FruEst2">
																<option value="<?php if(isset($FruEst2)){echo $FruEst2;}?>" selected><?php if(isset($FruEst2)){ Estado($FruEst2);}?> </option>
																<option value="1">Bueno</option>
																<option value="0.60">Regular</option>
																<option value="0.30">Malo</option>
															</select>
														</td>
															<td>
																<input class="form-control" type="number" name="FruHect2" value="<?php if (isset($FruHect2)){echo $FruHect2;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="FruArea2" value="<?php if (isset($FruArea2)){echo $FruArea2;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="FruCa2" value="<?php if (isset($FruCa2)){echo $FruCa2;}?>">
															</td>
															<td>
																<input type="checkbox" name="FruPre2" value="<?php if (isset($FruPre2)){echo $FruPre2;}?>" <?php if(isset($FruPre2)){checked($FruPre2);} ?>>
															</td>
															<td>
																<input type="checkbox" name="FruPro2" value="<?php if (isset($FruPro2)){echo $FruPro2;}?>" <?php if(isset($FruPro2)){checked($FruPro2);} ?>>
															</td>
															<td>
																<input type="checkbox" name="FruPos2" value="<?php if (isset($FruPos2)){echo $FruPos2;}?>" <?php if(isset($FruPos2)){checked($FruPos2);} ?>>
															</td>
														</tr>
														<tr>
															<td>
																<select class="select-f selectpicker" name="FruDet3">
																	<option value="<?php if(isset($FrutDet3)){echo $FrutDet3;}?>" selected><?php if(isset($FrutDet3)){echo $FrutDet3;}?> </option>
																	<option value="Ciruelo">Ciruelo</option>
																	<option value="Duraznero">Duraznero</option>
																	<option value="Limonero">Limonero</option>
																	<option value="Mandarino">Mandarino</option>
																	<option value="Manzano">Manzano</option>
																	<option value="Naranjo">Naranjo</option>
																	<option value="Peral">Peral</option>
																	<option value="Pomelo">Pomelo</option>
																	<option value="Vid">Vid</option>
																</select>
															</td>
															<td>
																<select class="select-f selectpicker" name="FruEst3">
																	<option value="<?php if(isset($FruEst3)){echo $FruEst3;}?>" selected><?php if(isset($FruEst3)){ Estado($FruEst3);}?> </option>
																	<option value="1">Bueno</option>
																	<option value="0.60">Regular</option>
																	<option value="0.30">Malo</option>
																</select>
															</td>
																<td>
																	<input class="form-control" type="number" name="FruHect3" value="<?php if (isset($FruHect3)){echo $FruHect3;}?>">
																</td>
																<td>
																	<input class="form-control" type="number" name="FruArea3" value="<?php if (isset($FruCa3)){echo $FruCa3;}?>">
																</td>
																<td>
																	<input class="form-control" type="number" name="FruCa3" value="<?php if (isset($FruArea3)){echo $FruArea3;}?>">
																</td>
																<td>
																	<input type="checkbox" name="FruPre3" value="<?php if (isset($FruPre3)){echo $FruPre3;}?>" <?php if(isset($FruPre3)){checked($FruPre3);} ?>>
																</td>
																<td>
																	<input type="checkbox" name="FruPro3" value="<?php if (isset($FruPro3)){echo $FruPro3;}?>" <?php if(isset($FruPro3)){checked($FruPro3);} ?>>
																</td>
																<td>
																	<input type="checkbox" name="FruPos3" value="<?php if (isset($FruPos3)){echo $FruPos3;}?>" <?php if(isset($FruPos3)){checked($FruPos3);} ?>>
																</td>
														</tr>
														<tr>
															<td>
															<select class="select-f selectpicker" name="FruDet4">
																<option value="<?php if(isset($FrutDet4)){echo $FrutDet4;}?>" selected><?php if(isset($FrutDet4)){echo $FrutDet4;}?> </option>
																<option value="Ciruelo">Ciruelo</option>
																<option value="Duraznero">Duraznero</option>
																<option value="Limonero">Limonero</option>
																<option value="Mandarino">Mandarino</option>
																<option value="Manzano">Manzano</option>
																<option value="Naranjo">Naranjo</option>
																<option value="Peral">Peral</option>
																<option value="Pomelo">Pomelo</option>
																<option value="Vid">Vid</option>
															</select>
														</td>
														<td>
															<select class="select-f selectpicker" name="FruEst4">
																<option value="<?php if(isset($FruEst4)){echo $FruEst4;}?>" selected><?php if(isset($FruEst4)){ Estado($FruEst4);}?> </option>
																<option value="1">Bueno</option>
																<option value="0.60">Regular</option>
																<option value="0.30">Malo</option>
															</select>
														</td>
															<td>
																<input class="form-control" type="number" name="FruHect4" value="<?php if (isset($FruHect4)){echo $FruHect4;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="FruArea4" value="<?php if (isset($FruArea4)){echo $FruArea4;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="FruCa4" value="<?php if (isset($FruCa4)){echo $FruCa4;}?>">
															</td>
															<td>
																<input type="checkbox" name="FruPre4" value="<?php if (isset($FruPre4)){echo $FruPre4;}?>" <?php if(isset($FruPre4)){checked($FruPre4);} ?>>
															</td>
															<td>
																<input type="checkbox" name="FruPro4" value="<?php if (isset($FruPro4)){echo $FruPro4;}?>" <?php if(isset($FruPro4)){checked($FruPro4);} ?>>
															</td>
															<td>
																<input type="checkbox" name="FruPos4" value="<?php if (isset($FruPos4)){echo $FruPos4;}?>" <?php if(isset($FruPos4)){checked($FruPos4);} ?>>
															</td>
														</tr>
														<tr>
															<td>
															<select class="select-f selectpicker" name="FruDet5">
																<option value="<?php if(isset($FrutDet5)){echo $FrutDet5;}?>" selected><?php if(isset($FrutDet5)){echo $FrutDet5;}?> </option>
																<option value="Ciruelo">Ciruelo</option>
																<option value="Duraznero">Duraznero</option>
																<option value="Limonero">Limonero</option>
																<option value="Mandarino">Mandarino</option>
																<option value="Manzano">Manzano</option>
																<option value="Naranjo">Naranjo</option>
																<option value="Peral">Peral</option>
																<option value="Pomelo">Pomelo</option>
																<option value="Vid">Vid</option>
															</select>
														</td>
														<td>
															<select class="select-f selectpicker" name="FruEst5">
																<option value="<?php if(isset($FruEst5)){echo $FruEst5;}?>" selected><?php if(isset($FruEst5)){ Estado($FruEst5);}?> </option>
																<option value="1">Bueno</option>
																<option value="0.60">Regular</option>
																<option value="0.30">Malo</option>
															</select>
														</td>
															<td>
																<input class="form-control" type="number" name="FruHect5" value="<?php if (isset($FruHect5)){echo $FruHect5;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="FruArea5" value="<?php if (isset($FruArea5)){echo $FruArea5;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="FruCa5" value="<?php if (isset($FruCa5)){echo $FruCa5;}?>">
															</td>
															<td>
																<input type="checkbox" name="FruPre5" value="<?php if (isset($FruPre5)){echo $FruPre5;}?>" <?php if(isset($FruPre5)){checked($FruPre5);} ?>>
															</td>
															<td>
																<input type="checkbox" name="FruPro5" value="<?php if (isset($FruPro5)){echo $FruPro5;}?>" <?php if(isset($FruPro5)){checked($FruPro5);} ?>>
															</td>
															<td>
																<input type="checkbox" name="FruPos5" value="<?php if (isset($FruPos5)){echo $FruPos5;}?>" <?php if(isset($FruPos5)){checked($FruPos5);} ?>>
															</td>
														</tr>
														<tr>
															<td>
															<select class="select-f selectpicker" name="FruDet6">
																<option value="<?php if(isset($FrutDet6)){echo $FrutDet6;}?>" selected><?php if(isset($FrutDet6)){echo $FrutDet6;}?> </option>
																<option value="Ciruelo">Ciruelo</option>
																<option value="Duraznero">Duraznero</option>
																<option value="Limonero">Limonero</option>
																<option value="Mandarino">Mandarino</option>
																<option value="Manzano">Manzano</option>
																<option value="Naranjo">Naranjo</option>
																<option value="Peral">Peral</option>
																<option value="Pomelo">Pomelo</option>
																<option value="Vid">Vid</option>
															</select>
														</td>
														<td>
															<select class="select-f selectpicker" name="FruEst6">
																<option value="<?php if(isset($FruEst6)){echo $FruEst6;}?>" selected><?php if(isset($FruEst6)){ Estado($FruEst6);}?> </option>
																<option value="1">Bueno</option>
																<option value="0.60">Regular</option>
																<option value="0.30">Malo</option>
															</select>
														</td>
															<td>
																<input class="form-control" type="number" name="FruHect6" value="<?php if (isset($FruHect6)){echo $FruHect6;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="FruArea6" value="<?php if (isset($FruArea6)){echo $FruArea6;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="FruCa6" value="<?php if (isset($FruCa6)){echo $FruCa6;}?>">
															</td>
															<td>
																<input type="checkbox" name="FruPre6" value="<?php if (isset($FruPre6)){echo $FruPre6;}?>" <?php if(isset($FruPre6)){checked($FruPre6);} ?>>
															</td>
															<td>
																<input type="checkbox" name="FruPro6" value="<?php if (isset($FruPro6)){echo $FruPro6;}?>" <?php if(isset($FruPro6)){checked($FruPro6);} ?>>
															</td>
															<td>
																<input type="checkbox" name="FruPos6" value="<?php if (isset($FruPos6)){echo $FruPos6;}?>" <?php if(isset($FruPos6)){checked($FruPos6);} ?>>
															</td>
														</tr>
														<tr>
															<td>
															<select class="select-f selectpicker" name="FruDet7">
																<option value="<?php if(isset($FrutDet7)){echo $FrutDet7;}?>" selected><?php if(isset($FrutDet7)){echo $FrutDet7;}?> </option>
																<option value="Ciruelo">Ciruelo</option>
																<option value="Duraznero">Duraznero</option>
																<option value="Limonero">Limonero</option>
																<option value="Mandarino">Mandarino</option>
																<option value="Manzano">Manzano</option>
																<option value="Naranjo">Naranjo</option>
																<option value="Peral">Peral</option>
																<option value="Pomelo">Pomelo</option>
																<option value="Vid">Vid</option>
															</select>
														</td>
														<td>
															<select class="select-f selectpicker" name="FruEst7">
																<option value="<?php if(isset($FruEst7)){echo $FruEst7;}?>" selected><?php if(isset($FruEst7)){ Estado($FruEst7);}?> </option>
																<option value="1">Bueno</option>
																<option value="0.60">Regular</option>
																<option value="0.30">Malo</option>
															</select>
														</td>
															<td>
																<input class="form-control" type="number" name="FruHect7" value="<?php if (isset($FruHect7)){echo $FruHect7;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="FruArea7" value="<?php if (isset($FruArea7)){echo $FruArea7;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="FruCa7" value="<?php if (isset($FruCa7)){echo $FruCa7;}?>">
															</td>
															<td>
																<input type="checkbox" name="FruPre7" value="<?php if (isset($FruPre7)){echo $FruPre7;}?>" <?php if(isset($FruPre7)){checked($FruPre7);} ?>>
															</td>
															<td>
																<input type="checkbox" name="FruPro7" value="<?php if (isset($FruPro7)){echo $FruPro7;}?>" <?php if(isset($FruPro7)){checked($FruPro7);} ?>>
															</td>
															<td>
																<input type="checkbox" name="FruPos7" value="<?php if (isset($FruPos7)){echo $FruPos7;}?>" <?php if(isset($FruPos7)){checked($FruPos7);} ?>>
															</td>
														</tr>
														<tr>
															<td>
															<select class="select-f selectpicker" name="FruDet8">
																<option value="<?php if(isset($FrutDet8)){echo $FrutDet8;}?>" selected><?php if(isset($FrutDet8)){echo $FrutDet8;}?> </option>
																<option value="Ciruelo">Ciruelo</option>
																<option value="Duraznero">Duraznero</option>
																<option value="Limonero">Limonero</option>
																<option value="Mandarino">Mandarino</option>
																<option value="Manzano">Manzano</option>
																<option value="Naranjo">Naranjo</option>
																<option value="Peral">Peral</option>
																<option value="Pomelo">Pomelo</option>
																<option value="Vid">Vid</option>
															</select>
														</td>
														<td>
															<select class="select-f selectpicker" name="FruEst8">
																<option value="<?php if(isset($FruEst8)){echo $FruEst8;}?>" selected><?php if(isset($FruEst8)){ Estado($FruEst8);}?> </option>
																<option value="1">Bueno</option>
																<option value="0.60">Regular</option>
																<option value="0.30">Malo</option>
															</select>
														</td>
															<td>
																<input class="form-control" type="number" name="FruHect8" value="<?php if (isset($FruHect8)){echo $FruHect8;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="FruArea8" value="<?php if (isset($FruArea8)){echo $FruArea8;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="FruCa8" value="<?php if (isset($FruCa8)){echo $FruCa8;}?>">
															</td>
															<td>
																<input type="checkbox" name="FruPre8" value="<?php if (isset($FruPre8)){echo $FruPre8;}?>" <?php if(isset($FruPre8)){checked($FruPre8);} ?>>
															</td>
															<td>
																<input type="checkbox" name="FruPro8" value="<?php if (isset($FruPro8)){echo $FruPro8;}?>" <?php if(isset($FruPro8)){checked($FruPro8);} ?>>
															</td>
															<td>
																<input type="checkbox" name="FruPos8" value="<?php if (isset($FruPos8)){echo $FruPos8;}?>" <?php if(isset($FruPos8)){checked($FruPos8);} ?>>
															</td>
														</tr>
														<tr>
															<td>
															<select class="select-f selectpicker" name="FruDet9">
																<option value="<?php if(isset($FrutDet9)){echo $FrutDet9;}?>" selected><?php if(isset($FrutDet9)){echo $FrutDet9;}?> </option>
																<option value="Ciruelo">Ciruelo</option>
																<option value="Duraznero">Duraznero</option>
																<option value="Limonero">Limonero</option>
																<option value="Mandarino">Mandarino</option>
																<option value="Manzano">Manzano</option>
																<option value="Naranjo">Naranjo</option>
																<option value="Peral">Peral</option>
																<option value="Pomelo">Pomelo</option>
																<option value="Vid">Vid</option>
															</select>
														</td>
														<td>
															<select class="select-f selectpicker" name="FruEst9">
																<option value="<?php if(isset($FruEst9)){echo $FruEst9;}?>" selected><?php if(isset($FruEst9)){ Estado($FruEst9);}?> </option>
																<option value="1">Bueno</option>
																<option value="0.60">Regular</option>
																<option value="0.30">Malo</option>
															</select>
														</td>
															<td>
																<input class="form-control" type="number" name="FruHect9" value="<?php if (isset($FruHect9)){echo $FruHect9;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="FruArea9" value="<?php if (isset($FruArea9)){echo $FruArea9;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="FruCa9" value="<?php if (isset($FruCa9)){echo $FruCa9;}?>">
															</td>
															<td>
																<input type="checkbox" name="FruPre9" value="<?php if (isset($FruPre9)){echo $FruPre9;}?>" <?php if(isset($FruPre9)){checked($FruPre9);} ?>>
															</td>
															<td>
																<input type="checkbox" name="FruPro9" value="<?php if (isset($FruPro9)){echo $FruPro9;}?>" <?php if(isset($FruPro9)){checked($FruPro9);} ?>>
															</td>
															<td>
																<input type="checkbox" name="FruPos9" value="<?php if (isset($FruPos9)){echo $FruPos9;}?>" <?php if(isset($FruPos9)){checked($FruPos9);} ?>>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<!---------------------- INCISO B ---------------------->
								 <div class="accordion-group">
										<div class="accordion-heading">
											<a class="accordion-toggle" data-toggle="collapse" href="#rub2c">
												INCISO C: FORESTALES
											</a>
										</div>
										<div id="rub2c" class="accordion-body collapse">
											<div class="accordion-inner in">
												<table class="table table-bordered responsive-table">
													<thead>
														<th>Forestales</th>
														<th>Estado</th>
														<th>Hectarea</th>
														<th>Area</th>
														<th>Cent</th>
														<th>Preproduccion</th>
														<th>Produccion</th>
													</thead>
													<tbody>
														<tr>
															<td>
															<select class="selectpicker" name="PlanDet1">
																<option value="<?php if(isset($PlanDet1)){echo $PlanDet1;}?>" selected><?php if(isset($PlanDet1)){echo $PlanDet1;}?> </option>
																<option value="Acacia">Acacia</option>
																<option value="Alamo">Alamo</option>
																<option value="Eucalipto">Eucalipto</option>
																<option value="Pino">Pino</option>
																<option value="Sauce">Sauce</option>
															</select>
														</td>
														<td>
															<select class="selectpicker" name="PlanEst1">
																<option value="<?php if(isset($PlanEst1)){echo $PlanEst1;}?>" selected><?php if(isset($PlanEst1)){ Estado($PlanEst1);}?> </option>
																<option value="1">Bueno</option>
																<option value="0.60">Regular</option>
																<option value="0.30">Malo</option>
															</select>
														</td>
															<td>
																<input class="form-control" type="number" name="PlanHect1" value="<?php if (isset($PlanHect1)){echo $PlanHect1;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="PlanArea1" value="<?php if (isset($PlanArea1)){echo $PlanArea1;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="PlanCa1" value="<?php if (isset($PlanCa1)){echo $PlanCa1;}?>">
															</td>
															<td>
																<input type="checkbox" name="PlanPre1" value="<?php if (isset($PlanPre1)){echo $PlanPre1;}?>" <?php if(isset($PlanPre1)){checked($PlanPre1);} ?>>
															</td>
															<td>
																<input type="checkbox" name="PlanPro1" value="<?php if (isset($PlanPro1)){echo $PlanPro1;}?>" <?php if(isset($PlanPro1)){checked($PlanPro1);} ?>>
															</td>
														</tr>
														<tr>
															<td>
															<select class="selectpicker" name="PlanDet2">
																<option value="<?php if(isset($PlanDet2)){echo $PlanDet2;}?>" selected><?php if(isset($PlanDet2)){echo $PlanDet2;}?> </option>
																<option value="Acacia">Acacia</option>
																<option value="Alamo">Alamo</option>
																<option value="Eucalipto">Eucalipto</option>
																<option value="Pino">Pino</option>
																<option value="Sauce">Sauce</option>
															</select>
														</td>
														<td>
															<select class="selectpicker" name="PlanEst2">
																<option value="<?php if(isset($PlanEst2)){echo $PlanEst2;}?>" selected><?php if(isset($PlanEst2)){ Estado($PlanEst2);}?> </option>
																<option value="1">Bueno</option>
																<option value="0.60">Regular</option>
																<option value="0.30">Malo</option>
															</select>
														</td>
															<td>
																<input class="form-control" type="number" name="PlanHect2" value="<?php if (isset($PlanHect2)){echo $PlanHect2;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="PlanArea2" value="<?php if (isset($PlanArea2)){echo $PlanArea2;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="PlanCa2" value="<?php if (isset($PlanCa2)){echo $PlanCa2;}?>">
															</td>
															<td>
																<input type="checkbox" name="PlanPre2" value="<?php if (isset($PlanPre2)){echo $PlanPre2;}?>" <?php if(isset($PlanPre2)){checked($PlanPre2);} ?>>
															</td>
															<td>
																<input type="checkbox" name="PlanPro2" value="<?php if (isset($PlanPro2)){echo $PlanPro2;}?>" <?php if(isset($PlanPro2)){checked($PlanPro2);} ?>>
															</td>
														</tr>
														<tr>
															<td>
															<select class="selectpicker" name="PlanDet3">
																<option value="<?php if(isset($PlanDet3)){echo $PlanDet3;}?>" selected><?php if(isset($PlanDet3)){echo $PlanDet3;}?> </option>
																<option value="Acacia">Acacia</option>
																<option value="Alamo">Alamo</option>
																<option value="Eucalipto">Eucalipto</option>
																<option value="Pino">Pino</option>
																<option value="Sauce">Sauce</option>
															</select>
														</td>
														<td>
															<select class="selectpicker" name="PlanEst3">
																<option value="<?php if(isset($PlanEst3)){echo $PlanEst3;}?>" selected><?php if(isset($PlanEst3)){ Estado($PlanEst3);}?> </option>
																<option value="1">Bueno</option>
																<option value="0.60">Regular</option>
																<option value="0.30">Malo</option>
															</select>
														</td>
															<td>
																<input class="form-control" type="number" name="PlanHect3" value="<?php if (isset($PlanHect3)){echo $PlanHect3;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="PlanArea3" value="<?php if (isset($PlanArea3)){echo $PlanArea3;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="PlanCa3" value="<?php if (isset($PlanCa3)){echo $PlanCa3;}?>">
															</td>
															<td>
																<input type="checkbox" name="PlanPre3" value="<?php if (isset($PlanPre3)){echo $PlanPre3;}?>" <?php if(isset($PlanPre3)){checked($PlanPre3);} ?>>
															</td>
															<td>
																<input type="checkbox" name="PlanPro3" value="<?php if (isset($PlanPro3)){echo $PlanPro3;}?>" <?php if(isset($PlanPro3)){checked($PlanPro3);} ?>>
															</td>
														</tr>
														<tr>
															<td>
															<select class="selectpicker" name="PlanDet4">
																<option value="<?php if(isset($PlanDet4)){echo $PlanDet4;}?>" selected><?php if(isset($PlanDet4)){echo $PlanDet4;}?> </option>
																<option value="Acacia">Acacia</option>
																<option value="Alamo">Alamo</option>
																<option value="Eucalipto">Eucalipto</option>
																<option value="Pino">Pino</option>
																<option value="Sauce">Sauce</option>
															</select>
														</td>
														<td>
															<select class="selectpicker" name="PlanEst4">
																<option value="<?php if(isset($PlanEst4)){echo $PlanEst4;}?>" selected><?php if(isset($PlanEst4)){ Estado($PlanEst4);}?> </option>
																<option value="1">Bueno</option>
																<option value="0.60">Regular</option>
																<option value="0.30">Malo</option>
															</select>
														</td>
															<td>
																<input class="form-control" type="number" name="PlanHect4" value="<?php if (isset($PlanHect4)){echo $PlanHect4;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="PlanArea4" value="<?php if (isset($PlanArea4)){echo $PlanArea4;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="PlanCa4" value="<?php if (isset($PlanCa4)){echo $PlanCa4;}?>">
															</td>
															<td>
																<input type="checkbox" name="PlanPre4" value="<?php if (isset($PlanPre4)){echo $PlanPre4;}?>" <?php if(isset($PlanPre4)){checked($PlanPre4);} ?>>
															</td>
															<td>
																<input type="checkbox" name="PlanPro4" value="<?php if (isset($PlanPro4)){echo $PlanPro4;}?>" <?php if(isset($PlanPro4)){checked($PlanPro4);} ?>>
															</td>
														</tr>
														<tr>
															<td>
															<select class="selectpicker" name="PlanDet5">
																<option value="<?php if(isset($PlanDet5)){echo $PlanDet5;}?>" selected><?php if(isset($PlanDet5)){echo $PlanDet5;}?> </option>
																<option value="Acacia">Acacia</option>
																<option value="Alamo">Alamo</option>
																<option value="Eucalipto">Eucalipto</option>
																<option value="Pino">Pino</option>
																<option value="Sauce">Sauce</option>
															</select>
														</td>
														<td>
															<select class="selectpicker" name="PlanEst5">
																<option value="<?php if(isset($PlanEst5)){echo $PlanEst5;}?>" selected><?php if(isset($PlanEst5)){ Estado($PlanEst5);}?> </option>
																<option value="1">Bueno</option>
																<option value="0.60">Regular</option>
																<option value="0.30">Malo</option>
															</select>
														</td>
															<td>
																<input class="form-control" type="number" name="PlanHect5" value="<?php if (isset($PlanHect5)){echo $PlanHect5;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="PlanArea5" value="<?php if (isset($PlanArea5)){echo $PlanArea5;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="PlanCa5" value="<?php if (isset($PlanCa5)){echo $PlanCa5;}?>">
															</td>
															<td>
																<input type="checkbox" name="PlanPre5" value="<?php if (isset($PlanPre5)){echo $PlanPre5;}?>" <?php if(isset($PlanPre5)){checked($PlanPre5);} ?>>
															</td>
															<td>
																<input type="checkbox" name="PlanPro5" value="<?php if (isset($PlanPro5)){echo $PlanPro5;}?>" <?php if(isset($PlanPro5)){checked($PlanPro5);} ?>>
															</td>
														</tr>
														<tr>
															<td>
															<select class="selectpicker" name="PlanDet6">
																<option value="<?php if(isset($PlanDet6)){echo $PlanDet6;}?>" selected><?php if(isset($PlanDet6)){echo $PlanDet6;}?> </option>
																<option value="Acacia">Acacia</option>
																<option value="Alamo">Alamo</option>
																<option value="Eucalipto">Eucalipto</option>
																<option value="Pino">Pino</option>
																<option value="Sauce">Sauce</option>
															</select>
														</td>
														<td>
															<select class="selectpicker" name="PlanEst6">
																<option value="<?php if(isset($PlanEst6)){echo $PlanEst6;}?>" selected><?php if(isset($PlanEst6)){ Estado($PlanEst6);}?> </option>
																<option value="1">Bueno</option>
																<option value="0.60">Regular</option>
																<option value="0.30">Malo</option>
															</select>
														</td>
															<td>
																<input class="form-control" type="number" name="PlanHect6" value="<?php if (isset($PlanHect6)){echo $PlanHect6;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="PlanArea6" value="<?php if (isset($PlanArea6)){echo $PlanArea6;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="PlanCa6" value="<?php if (isset($PlanCa6)){echo $PlanCa6;}?>">
															</td>
															<td>
																<input type="checkbox" name="PlanPre6" value="<?php if (isset($PlanPre6)){echo $PlanPre6;}?>" <?php if(isset($PlanPre6)){checked($PlanPre6);} ?>>
															</td>
															<td>
																<input type="checkbox" name="PlanPro6" value="<?php if (isset($PlanPro6)){echo $PlanPro6;}?>" <?php if(isset($PlanPro6)){checked($PlanPro6);} ?>>
															</td>
														</tr>
														<tr>
															<td>
															<select class="selectpicker" name="PlanDet7">
																<option value="<?php if(isset($PlanDet7)){echo $PlanDet7;}?>" selected><?php if(isset($PlanDet7)){echo $PlanDet7;}?> </option>
																<option value="Acacia">Acacia</option>
																<option value="Alamo">Alamo</option>
																<option value="Eucalipto">Eucalipto</option>
																<option value="Pino">Pino</option>
																<option value="Sauce">Sauce</option>
															</select>
														</td>
														<td>
															<select class="selectpicker" name="PlanEst7">
																<option value="<?php if(isset($PlanEst7)){echo $PlanEst7;}?>" selected><?php if(isset($PlanEst7)){ Estado($PlanEst7);}?> </option>
																<option value="1">Bueno</option>
																<option value="0.60">Regular</option>
																<option value="0.30">Malo</option>
															</select>
														</td>
															<td>
																<input class="form-control" type="number" name="PlanHect7" value="<?php if (isset($PlanHect7)){echo $PlanHect7;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="PlanArea7" value="<?php if (isset($PlanArea7)){echo $PlanArea7;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="PlanCa7" value="<?php if (isset($PlanCa7)){echo $PlanCa7;}?>">
															</td>
															<td>
																<input type="checkbox" name="PlanPre7" value="<?php if (isset($PlanPre7)){echo $PlanPre7;}?>" <?php if(isset($PlanPre7)){checked($PlanPre7);} ?>>
															</td>
															<td>
																<input type="checkbox" name="PlanPro7" value="<?php if (isset($PlanPro7)){echo $PlanPro7;}?>" <?php if(isset($PlanPro7)){checked($PlanPro7);} ?>>
															</td>
														</tr>
														<tr>
															<td>
															<select class="selectpicker" name="PlanDet8">
																<option value="<?php if(isset($PlanDet8)){echo $PlanDet8;}?>" selected><?php if(isset($PlanDet8)){echo $PlanDet8;}?> </option>
																<option value="Acacia">Acacia</option>
																<option value="Alamo">Alamo</option>
																<option value="Eucalipto">Eucalipto</option>
																<option value="Pino">Pino</option>
																<option value="Sauce">Sauce</option>
															</select>
														</td>
														<td>
															<select class="selectpicker" name="PlanEst8">
																<option value="<?php if(isset($PlanEst8)){echo $PlanEst8;}?>" selected><?php if(isset($PlanEst8)){ Estado($PlanEst8);}?> </option>
																<option value="1">Bueno</option>
																<option value="0.60">Regular</option>
																<option value="0.30">Malo</option>
															</select>
														</td>
															<td>
																<input class="form-control" type="number" name="PlanHect8" value="<?php if (isset($PlanHect8)){echo $PlanHect8;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="PlanArea8" value="<?php if (isset($PlanArea8)){echo $PlanArea8;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="PlanCa8" value="<?php if (isset($PlanCa8)){echo $PlanCa8;}?>">
															</td>
															<td>
																<input type="checkbox" name="PlanPre8" value="<?php if (isset($PlanPre8)){echo $PlanPre8;}?>" <?php if(isset($PlanPre8)){checked($PlanPre8);} ?>>
															</td>
															<td>
																<input type="checkbox" name="PlanPro8" value="<?php if (isset($PlanPro8)){echo $PlanPro8;}?>" <?php if(isset($PlanPro8)){checked($PlanPro8);} ?>>
															</td>
														</tr>
														<tr>
															<td>
															<select class="selectpicker" name="PlanDet9">
																<option value="<?php if(isset($PlanDet9)){echo $PlanDet9;}?>" selected><?php if(isset($PlanDet9)){echo $PlanDet9;}?> </option>
																<option value="Acacia">Acacia</option>
																<option value="Alamo">Alamo</option>
																<option value="Eucalipto">Eucalipto</option>
																<option value="Pino">Pino</option>
																<option value="Sauce">Sauce</option>
															</select>
														</td>
														<td>
															<select class="selectpicker" name="PlanEst9">
																<option value="<?php if(isset($PlanEst9)){echo $PlanEst9;}?>" selected><?php if(isset($PlanEst9)){ Estado($PlanEst9);}?> </option>
																<option value="1">Bueno</option>
																<option value="0.60">Regular</option>
																<option value="0.30">Malo</option>
															</select>
														</td>
															<td>
																<input class="form-control" type="number" name="PlanHect9" value="<?php if (isset($PlanHect9)){echo $PlanHect9;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="PlanArea9" value="<?php if (isset($PlanArea9)){echo $PlanArea9;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="PlanCa9" value="<?php if (isset($PlanCa9)){echo $PlanCa9;}?>">
															</td>
															<td>
																<input type="checkbox" name="PlanPre9" value="<?php if (isset($PlanPre9)){echo $PlanPre9;}?>" <?php if(isset($PlanPre9)){checked($PlanPre9);} ?>>
															</td>
															<td>
																<input type="checkbox" name="PlanPro9" value="<?php if (isset($PlanPro9)){echo $PlanPro9;}?>" <?php if(isset($PlanPro9)){checked($PlanPro9);} ?>>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<!---------------------- INCISO C ---------------------->
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
					</div> <!-- /widget-content -->
					<?php
					 include("insert909.php");
					?>
				</form>
				</div> <!-- /container -->
			</div> <!-- /main-inner -->
		</div> <!-- /main -->
		<?php
			include("pie.php");
		?>
		<!---------------------- Scripts ---------------------->
		<!-- <script src="javascript/obj912.js"></script> -->
	</body>
</html>
