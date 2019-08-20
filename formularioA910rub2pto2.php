<?php
include("sesion.php");
			$pagina='formulario910rub2pto2PHP';
				include ("encabezado.php");
			include("seguridadForm.php");


		include ("sql/insertFormulario.php");
		include ("sql/update.php");
			include ("funciones/postValoresA910.php");
			$idform = $_GET['idform'];
			$codForm912 = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedulaformularios WHERE (idCedula='$Cedula') and (nroformulario='912')"));
			$codf912= $codForm912['codForm'];
			if ($codf912 > '0'){
				$Vec = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM form912 WHERE codForm912='$codf912'"));
				$ala1= $Vec['AlamA1']; $ala2= $Vec['AlamA2']; $siloCant1= $Vec['SiloCant1']; $siloEst1= $Vec['SiloEst1']; $siloData1= $Vec['SiloFec1'];
				$siloCap1= $Vec['SiloCap1']; $tanCant1= $Vec['Tanque1']; $ala3= $Vec['AlamA3']; $ala4= $Vec['AlamA4']; $siloCant2= $Vec['SiloCant2'];
				$siloEst2= $Vec['SiloEst2']; $siloData2= $Vec['SiloFec2']; $siloCap2= $Vec['SiloCap2']; $tanCant2= $Vec['Tanque2'];
				$ala5= $Vec['AlamA5']; $ala6= $Vec['AlamA6']; $siloCant3= $Vec['SiloCant3']; $siloEst3= $Vec['SiloEst3']; $siloData3= $Vec['SiloFec3'];
				$siloCap3= $Vec['SiloCap3']; $tanCant3= $Vec['Tanque3']; $ala7= $Vec['AlamA7']; $ala8= $Vec['AlamA8']; $ala9= $Vec['AlamA9'];
				$ala10= $Vec['AlamA10']; $moliCant1= $Vec['Molino1'];	$ala11= $Vec['AlamA11']; $ala12= $Vec['AlamA12']; $moliCant2= $Vec['Molino2'];
			  $ala13= $Vec['AlamA13']; $ala14= $Vec['AlamA14'];	$moliCant3= $Vec['Molino3'];$ala15= $Vec['AlamA15']; $ala16= $Vec['AlamA16'];
				$moliCant4= $Vec['Molino4'];$ala17= $Vec['AlamA17'];$ala18= $Vec['AlamA18']; $moliCant5= $Vec['Molino5']; $moliCant6= $Vec['Molino6'];
				$auxObs= $_GET['auxObs'];$j=0;$plantEst="";$plantDet="";$plantSup="";$plantP="";$plantDet1=0;$plantDet2=0;$plantDet3=0;$plantDet4=0;$plantDet5=0;$plantDet6=0;
				$plantSup1=0;$plantSup2=0;$plantSup3=0;$plantSup4=0;$plantSup5=0;$plantSup6=0;$plantP1=0;$plantP2=0;$plantP3=0;$plantP4=0;$plantP5=0;$plantP6=0;$plantEst1=0;
				$plantEst2=0;$plantEst3=0;$plantEst4=0;$plantEst5=0;$plantEst6=0;$TotalRub2IncisoA=0;$TotalRub2IncisoB=0;$TotalRub2IncisoC=0;$TotalRub2IncisoD=0;
				for ($i=1; $i < 10 ; $i++) {
			  	if ($Vec['OliHect'.$i] > 0){
						$j=$j+1;
				  	if ($Vec['OliPre'.$i] == 2){
							${'plantEst'.$j}= 6;
						}if ($Vec['OliPre'.$i] == 1){
								${'plantEst'.$j}= 5;
						}if ($Vec['OliPre'.$i] == 3){
								${'plantEst'.$j}= 7;
						}
						switch ($i) {
							case '1': ${'plantDet'.$j} = 'B'; break;
							case '2': ${'plantDet'.$j} = 'R'; break;
							case '3': ${'plantDet'.$j} = 'M'; break;
							case '4': ${'plantDet'.$j} = 'B'; break;
							case '5': ${'plantDet'.$j} = 'R'; break;
							case '6': ${'plantDet'.$j} = 'M'; break;
							case '7': ${'plantDet'.$j} = 'B'; break;
							case '8': ${'plantDet'.$j} = 'R'; break;
							case '9': ${'plantDet'.$j} = 'M'; break;
						}
						${'plantSup'.$j}= 'Olivo';
						$auxO1= $Vec['OliHect'.$i];
						$auxO2= $Vec['OliArea'.$i];
						$auxO3= $Vec['OliCa'.$i];
						if ($Vec['OliHect'.$i] < 10){
							$auxO1= '0'.$Vec['OliHect'.$i];
						}
						if ($Vec['OliArea'.$i] < 10){
							$auxO2= '0'.$Vec['OliArea'.$i];
						}
						if ($Vec['OliCa'.$i] < 10){
							$auxO3= '0'.$Vec['OliCa'.$i];
						}
						${'plantP'.$j}= $auxO1.",".$auxO2.$auxO3;
					}
				}
				for ($i=1; $i < 10 ; $i++) {
			  	if ($Vec['FruHect'.$i] > 0){
						$j=$j+1;
				  	if ($Vec['FruPre'.$i] == 2){
							${'plantEst'.$j}= 6;
						}if ($Vec['FruPre'.$i] == 1){
								${'plantEst'.$j}= 5;
						}if ($Vec['FruPre'.$i] == 3){
								${'plantEst'.$j}= 7;
						}
						switch ($i) {
							case '1': ${'plantDet'.$j} = 'B'; break;
							case '2': ${'plantDet'.$j} = 'R'; break;
							case '3': ${'plantDet'.$j} = 'M'; break;
							case '4': ${'plantDet'.$j} = 'B'; break;
							case '5': ${'plantDet'.$j} = 'R'; break;
							case '6': ${'plantDet'.$j} = 'M'; break;
							case '7': ${'plantDet'.$j} = 'B'; break;
							case '8': ${'plantDet'.$j} = 'R'; break;
							case '9': ${'plantDet'.$j} = 'M'; break;
						}
						${'plantSup'.$j}= $Vec['FrutDet'.$i];
						$auxO1= $Vec['FruHect'.$i];
						$auxO2= $Vec['FruArea'.$i];
						$auxO3= $Vec['FruCa'.$i];
						if ($Vec['FruHect'.$i] < 10){
							$auxO1= '0'.$Vec['FruHect'.$i];
						}
						if ($Vec['FruArea'.$i] < 10){
							$auxO2= '0'.$Vec['FruArea'.$i];
						}
						if ($Vec['FruCa'.$i] < 10){
							$auxO3= '0'.$Vec['FruCa'.$i];
						}
						${'plantP'.$j}= $auxO1.",".$auxO2.$auxO3;
					}
				}
				for ($i=1; $i < 10 ; $i++) {
			  	if ($Vec['PlanHect'.$i] > 0){
						$j=$j+1;
				  	if ($Vec['PlanPre'.$i] == 2){
							${'plantEst'.$j}= 6;
						}if ($Vec['PlanPro'.$i] == 1){
								${'plantEst'.$j}= 5;
						}if ($Vec['PlanPro'.$i] == 3){
								${'plantEst'.$j}= 7;
						}
						switch ($i) {
							case '1': ${'plantDet'.$j} = 'B'; break;
							case '2': ${'plantDet'.$j} = 'R'; break;
							case '3': ${'plantDet'.$j} = 'M'; break;
							case '4': ${'plantDet'.$j} = 'B'; break;
							case '5': ${'plantDet'.$j} = 'R'; break;
							case '6': ${'plantDet'.$j} = 'M'; break;
							case '7': ${'plantDet'.$j} = 'B'; break;
							case '8': ${'plantDet'.$j} = 'R'; break;
							case '9': ${'plantDet'.$j} = 'M'; break;
						}
						${'plantSup'.$j}= $Vec['PlanDet'.$i];
						$auxO1= $Vec['PlanHect'.$i];
						$auxO2= $Vec['PlanArea'.$i];
						$auxO3= $Vec['PlanCa'.$i];
						if ($Vec['PlanHect'.$i] < 10){
							$auxO1= '0'.$Vec['PlanHect'.$i];
						}
						if ($Vec['PlanArea'.$i] < 10){
							$auxO2= '0'.$Vec['PlanArea'.$i];
						}
						if ($Vec['PlanCa'.$i] < 10){
							$auxO3= '0'.$Vec['PlanCa'.$i];
						}
						${'plantP'.$j}= $auxO1.",".$auxO2.$auxO3;
					}
				}
				include ("funciones/calculos912.php");
				$TotalRub2IncisoA=0;
				for ($i=1; $i <= 9 ; $i++) {
					$TotalRub2IncisoA=  $TotalRub2IncisoA + Rub2IncisoATotal($i);
				}
				$TotalRub2IncisoA = round($TotalRub2IncisoA, 2);
				$TotalRub2IncisoB = Mul4($Vec['SiloCant1'],$Vec['SiloCap1'],CoefRub2IncisoB($Vec['SiloEst1'], $Vec['SiloFec1']), ValorBasicoRub2IncisoB("A",$Vec['SiloCap1'])) +
									Mul4($Vec['SiloCant2'],$Vec['SiloCap2'],CoefRub2IncisoB($Vec['SiloEst2'], $Vec['SiloFec2']), ValorBasicoRub2IncisoB("B",$Vec['SiloCap2'])) +
									Mul4($Vec['SiloCant3'],$Vec['SiloCap3'],CoefRub2IncisoB($Vec['SiloEst3'], $Vec['SiloFec3']), ValorBasicoRub2IncisoB("C",$Vec['SiloCap3']));

				$TotalRub2IncisoC = round((Multiplicacion($Vec['Molino1'], 50000) + Multiplicacion($Vec['Molino2'], 40000) + Multiplicacion($Vec['Molino3'], 30000) +
									Multiplicacion($Vec['Molino4'], 35000) + Multiplicacion($Vec['Molino5'], 25000) + Multiplicacion($Vec['Molino6'], 20000)),2);

				$TotalRub2IncisoD = round(Multiplicacion($Vec['Tanque1'], 15000) + Multiplicacion($Vec['Tanque2'], 10000) + Multiplicacion($Vec['Tanque3'], 7500),2)+
									round(Multiplicacion($Vec['Tanque4'], 15000) + Multiplicacion($Vec['Tanque5'], 10000) + Multiplicacion($Vec['Tanque6'], 7500),2);
				$TotalMejora=$TotalRub2IncisoA+$TotalRub2IncisoB+$TotalRub2IncisoC+$TotalRub2IncisoD;
			} else {
				$TotalMejora="";
			}
?>
<!DOCTYPE html>
<html lang="es">

<style>
	td {
		text-align:center !important; padding: 2px !important; width: 60px !important
	}
	th {
		text-align:center !important
	}
	input {
		margin-top: 8px !important; text-align: center;
	}
</style>
<body>

<div class="main enviar">

	<div class="main-inner">

	    <div class="container">

	      <div class="row">

	      	<div class="span12">

	      		<div class="widget ">

	      			<div class="widget-header">
	      					<i class="icon-th-large"></i>
	      				<h3>Formulario A910</h3>
	  				</div> <!-- /widget-header -->

					<div class="widget-content">
						<form action="formularioA910rub2pto1.php" method="post">
            <div class="control-group">
              <div class="controls">
                <div class="accordion" id="accordion2">

									<div class="accordion-heading area ">
										<a  id="datos" class="accordion-toggle" data-toggle="collapse" onclick="estilo(this)">
											RESUMEN DEL FORMULARIO 912
										</a>
									</div>
										<div class="accordion-inner">
													<table class="table table-bordered responsive-table">
												<thead>
													<tr>
														<th colspan="9"> Resumenes del Formulario 912 </th>
													</tr>
													<tr>
														<th colspan="3"> Alambrados </th>
														<th colspan="4" rowspan="2"> Silos </th>
														<th colspan="2" rowspan="2"> Tanques </th>
												</thead>
												<tbody>
													<tr>
														<td style="width:10px !important"> </td>
														<td> No medianero </td>
														<td> Medianero </td>
													</tr>
													<tr>
														<td style="width:10px !important"> </td>
														<td> <input class="form-control" value="<?php if(isset($ala1)){echo $ala1;}?>" id="Ala1" name="Ala1"> </td>
														<td> <input class="form-control" value="<?php if(isset($ala4)){echo $ala4;}?>" id="Ala2" name="Ala2"> </td>
														<td style="width:40px !important"> <input class="form-control" value="<?php if(isset($siloEst1)){echo $siloEst1;}?>" id="SiloCant1" name="SiloCant1">  </td>
														<td> <input class="form-control" value="<?php if(isset($siloData1)){echo $siloData1;}?>" id="SiloEst1" name="SiloEst1"> </td>
														<td> <input class="form-control" value="<?php if(isset($siloCant1)){echo $siloCant1;}?>" id="SiloData1" name="SiloData1"> </td>
														<td> <input class="form-control" value="<?php if(isset($siloCap1)){echo $siloCap1;}?>" id="SiloCap1" name="SiloCap1"> </td>
														<td style="width:10px !important"><br> A </td>
														<td> <input class="form-control" value="<?php if(isset($tanCant1)){echo $tanCant1;}?>" id="TanCant1" name="TanCant1"> </td>
													</tr>
													<tr>
														<td style="width:17px !important" rowspan="2"> <br><br> A </td>
														<td> <input class="form-control" value="<?php if(isset($ala2)){echo $ala2;}?>" id="Ala3" name="Ala3"> </td>
														<td> <input class="form-control" value="<?php if(isset($ala5)){echo $ala5;}?>" id="Ala4" name="Ala4"> </td>
														<td style="width:40px !important"> <input class="form-control" value="<?php if(isset($siloEst2)){echo $siloEst2;}?>" id="SiloCant2" name="SiloCant2"> </td>
														<td> <input class="form-control" value="<?php if(isset($siloData2)){echo $siloData2;}?>" id="SiloEst2" name="SiloEst2"> </td>
														<td> <input class="form-control" value="<?php if(isset($siloCant2)){echo $siloCant2;}?>" id="SiloData2" name="SiloData2"> </td>
														<td> <input class="form-control" value="<?php if(isset($siloCap2)){echo $siloCap2;}?>" id="SiloCap2" name="SiloCap2"> </td>
														<td style="width:10px !important"><br> B </td>
														<td> <input class="form-control" value="<?php if(isset($tanCant2)){echo $tanCant2;}?>" id="TanCant2" name="TanCant2"> </td>
													</tr>
													<tr>
														<td> <input class="form-control" value="<?php if(isset($ala3)){echo $ala3;}?>" id="Ala5" name="Ala5"> </td>
														<td> <input class="form-control" value="<?php if(isset($ala6)){echo $ala6;}?>" id="Ala6" name="Ala6"> </td>
														<td style="width:40px !important"> <input class="form-control" value="<?php if(isset($siloEst3)){echo $siloEst3;}?>" id="SiloCant3" name="SiloCant3"> </td>
														<td> <input class="form-control" value="<?php if(isset($siloData3)){echo $siloData3;}?>" id="SiloEst3" name="SiloEst3"> </td>
														<td> <input class="form-control" value="<?php if(isset($siloCant3)){echo $siloCant3;}?>" id="SiloData3" name="SiloData3"> </td>
														<td> <input class="form-control" value="<?php if(isset($siloCap3)){echo $siloCap3;}?>" id="SiloCap3" name="SiloCap3"> </td>
														<td style="width:10px !important"><br> C </td>
														<td> <input class="form-control" value="<?php if(isset($tanCant3)){echo $tanCant3;}?>" id="TanCant3" name="TanCant3"> </td>
													</tr>
													<tr>
														<td colspan="9">
															<table style="width:1100px !important">
																<tr>
																	<td style="width:5px !important" rowspan="3"> <br><br><br> B </td>
																	<td> <input class="form-control" value="<?php if(isset($ala7)){echo $ala7;}?>" id="Ala7" name="Ala7"> </td>
																	<td> <input class="form-control" value="<?php if(isset($ala10)){echo $ala10;}?>" id="Ala8" name="Ala8"> </td>
																	<th style="width:115px !important" colspan="2"> Molinos </th>
																	<th  colspan="4"> Plantaciones </th>
																</tr>
																<tr>
																	<td> <input class="form-control" value="<?php if(isset($ala8)){echo $ala8;}?>" id="Ala9" name="Ala9"> </td>
																	<td> <input class="form-control" value="<?php if(isset($ala11)){echo $ala11;}?>" id="Ala10" name="Ala10"> </td>
																	<td style="width:10px !important" rowspan="3"> <br> A </td>
																	<td> <input class="form-control" value="<?php if(isset($moliCant1)){echo $moliCant1;}?>" id="MoliCant1" name="MoliCant1"> </td>
																	<td style="width:20px !important"> <input class="form-control" value="<?php if(isset($plantDet1)){echo $plantDet1;}?>" id="PlantDet1" name="PlantDet1"> </td>
																	<td> <input class="form-control" value="<?php if(isset($plantSup1)){echo $plantSup1;}?>" id="PlantSup1" name="PlantSup1"> </td>
																	<td> <input class="form-control" value="<?php if(isset($plantP1)){echo $plantP1;}?>" id="PlantP1" name="PlantP1"> </td>
																	<td style="width:20px !important"> <input class="form-control" value="<?php if(isset($plantEst1)){echo $plantEst1;}?>" id="PlantEst1" name="PlantEst1"> </td>
																</tr>
																<tr>
																	<td> <input class="form-control" value="<?php if(isset($ala9)){echo $ala9;}?>" id="Ala11" name="Ala11"> </td>
																	<td> <input class="form-control" value="<?php if(isset($ala12)){echo $ala12;}?>" id="Ala12" name="Ala12"> </td>
																	<td> <input class="form-control" value="<?php if(isset($moliCant2)){echo $moliCant2;}?>" id="MoliCant2" name="MoliCant2"> </td>
																	<td style="width:20px !important"> <input class="form-control" value="<?php if(isset($plantDet2)){echo $plantDet2;}?>" id="PlantDet2" name="PlantDet2"> </td>
																	<td> <input class="form-control" value="<?php if(isset($plantSup2)){echo $plantSup2;}?>" id="PlantSup2" name="PlantSup2"> </td>
																	<td> <input class="form-control" value="<?php if(isset($plantP2)){echo $plantP2;}?>" id="PlantP2" name="PlantP2"> </td>
																	<td style="width:20px !important"> <input class="form-control" value="<?php if(isset($plantEst2)){echo $plantEst2;}?>" id="PlantEst2" name="PlantEst2"> </td>
																</tr>
																<tr>
																	<td style="width:5px !important" rowspan="3"> <br> C </td>
																	<td> <input class="form-control" value="<?php if(isset($ala13)){echo $ala13;}?>" id="Ala13" name="Ala13"> </td>
																	<td> <input class="form-control" value="<?php if(isset($ala16)){echo $ala16;}?>" id="Ala14" name="Ala14"> </td>
																	<td> <input class="form-control" value="<?php if(isset($moliCant3)){echo $moliCant3;}?>" id="MoliCant3" name="MoliCant3"> </td>
																	<td style="width:20px !important"> <input class="form-control" value="<?php if(isset($plantDet3)){echo $plantDet3;}?>" id="PlantDet3" name="PlantDet3"> </td>
																	<td> <input class="form-control" value="<?php if(isset($plantSup3)){echo $plantSup3;}?>" id="PlantSup3" name="PlantSup3"> </td>
																	<td> <input class="form-control" value="<?php if(isset($plantP3)){echo $plantP3;}?>" id="PlantP3" name="PlantP3"> </td>
																	<td style="width:20px !important"> <input class="form-control" value="<?php if(isset($plantEst3)){echo $plantEst3;}?>" id="PlantEst3" name="PlantEst3"> </td>
																</tr>
																<tr>
																	<td> <input class="form-control" value="<?php if(isset($ala14)){echo $ala14;}?>" id="Ala15" name="Ala15"> </td>
																	<td> <input class="form-control" value="<?php if(isset($ala17)){echo $ala17;}?>" id="Ala16" name="Ala16"> </td>
																	<td style="width:10px !important" rowspan="3"> <br> B </td>
																	<td> <input class="form-control" value="<?php if(isset($moliCant4)){echo $moliCant4;}?>" id="MoliCant4" name="MoliCant4"> </td>
																	<td style="width:20px !important"> <input class="form-control" value="<?php if(isset($plantDet4)){echo $plantDet4;}?>" id="PlantDet4" name="PlantDet4"> </td>
																	<td> <input class="form-control" value="<?php if(isset($plantSup4)){echo $plantSup4;}?>" id="PlantSup4" name="PlantSup4"> </td>
																	<td> <input class="form-control" value="<?php if(isset($plantP4)){echo $plantP4;}?>" id="PlantP4" name="PlantP4"> </td>
																	<td style="width:20px !important"> <input class="form-control" value="<?php if(isset($plantEst4)){echo $plantEst4;}?>" id="PlantEst4" name="PlantEst4"> </td>
																</tr>
																<tr>
																	<td> <input class="form-control" value="<?php if(isset($ala15)){echo $ala15;}?>" id="Ala17" name="Ala17"> </td>
																	<td> <input class="form-control" value="<?php if(isset($ala18)){echo $ala18;}?>" id="Ala18" name="Ala18"> </td>
																	<td> <input class="form-control" value="<?php if(isset($moliCant5)){echo $moliCant5;}?>" id="MoliCant5" name="MoliCant5"> </td>
																	<td style="width:20px !important"> <input class="form-control" value="<?php if(isset($plantDet5)){echo $plantDet5;}?>" id="PlantDet5" name="PlantDet5"> </td>
																	<td> <input class="form-control" value="<?php if(isset($plantSup5)){echo $plantSup5;}?>" id="PlantSup5" name="PlantSup5"> </td>
																	<td> <input class="form-control" value="<?php if(isset($plantP5)){echo $plantP5;}?>" id="PlantP5" name="PlantP5"> </td>
																	<td style="width:20px !important"> <input class="form-control" value="<?php if(isset($plantEst5)){echo $plantEst5;}?>" id="PlantEst5" name="PlantEst5"> </td>
																</tr>
																<tr>
																	<td colspan="3"> </td>
																	<td> <input class="form-control" value="<?php if(isset($moliCant6)){echo $moliCant6;}?>" id="MoliCant6" name="MoliCant6"> </td>
																	<td style="width:20px !important"> <input class="form-control" value="<?php if(isset($plantDet6)){echo $plantDet6;}?>" id="PlantDet6" name="PlantDet6"> </td>
																	<td> <input class="form-control" value="<?php if(isset($plantSup6)){echo $plantSup6;}?>" id="PlantSup6" name="PlantSup6"> </td>
																	<td> <input class="form-control" value="<?php if(isset($plantP6)){echo $plantP6;}?>" id="PlantP6" name="PlantP6"> </td>
																	<td style="width:20px !important"> <input class="form-control" value="<?php if(isset($plantEst6)){echo $plantEst6;}?>" id="PlantEst6" name="PlantEst6"> </td>
																</tr>
															</table>
														</td>
													</table>
													<div class="col-sm-12">
														<div class="form-group">
															<div class="col-sm-6">
															</div>
															<div class="col-sm-6">
															<b>Total Mejoras: <?php if (isset($TotalMejora)){echo $TotalMejora;} ?></b>
														</div>
													</div>
													</div>
												</div>
              </div> <!-- /accordion -->
              </div> <!-- /controls -->
            </div> <!-- /control-group -->

					</br>
						<div class="col-sm-12">
						  <div class="form-group">
								<div class="col-sm-6">
								<h5> No se olvide si realiza algún cambio en los FORMULARIOS deberá volver a EDITAR <br> este formulario para que pueda actualizar los cambios. </h5>
							</div>
						<input type="hidden" name="Aptitud" value="<?php echo $aptitud ?>">
						<input type="hidden" name="idform" value="<?php echo $idform ?>">
						<input type="hidden" name="idCedula" value="<?php echo $Cedula ?>">
						<input type="hidden" name="idobra" value="<?php echo $idobra ?>">
						<input type="hidden" name="cedula" value="<?php echo $TipoDeCedula ?>">
						<input type="hidden" name="TierraAju" value="<?php echo $tierraAju ?>">
						<input type="hidden" name="Superficie" value="<?php echo $superficie ?>">
						<input type="hidden" name="Entero" value="<?php echo $entero ?>">
						<input type="hidden" name="TierraBas" value="<?php echo $tierraBas ?>">
						<input type="hidden" name="TierraAct" value="<?php echo $tierraAct ?>">
						<input type="hidden" name="EdifAct" value="<?php echo $edifAct ?>">
						<input type="hidden" name="MejAct" value="<?php echo $mejAct ?>">
						<input type="hidden" name="PlanAct" value="<?php echo $planAct ?>">
						<input type="hidden" name="Postura" value="<?php echo $postura ?>">
						<input type="hidden" name="CoefAjuste" value="<?php echo $coefAjuste ?>">
						<input type="hidden" name="destino" value="<?php echo $destino ?>">
						<input type="hidden" name="tipo" value="<?php echo $aux ?>">
						<input type="hidden" name="observacion" value="<?php echo $observacion ?>">
						<input type="hidden" name="Articulo" value="<?php echo $articulo ?>">
						<input type="hidden" name="mostrarProf" value="<?php echo $mostrarProf ?>">
						<div class="col-sm-6">
							<a href="formularioA910rub2pto1.php"><button class="btn btn-success">Anterior</button></a>
            	<a href="" ><button onclick="self.close()" class="btn">Cancelar</button></a>
</form>
<form method="post">
	<div class="col-sm-12">
	<div class="form-group">
		<div class="col-sm-2"></div><div class="col-sm-2"></div><div class="col-sm-2"></div>
		<div class="col-sm-6">
<button type="submit" class="btn btn-success" name="insertar">Finalizar</button>
<?php
if (isset($_POST['insertar'])){
	include ("funciones/postValoresA910.php");
	if(isset($_GET['destino'])){
		$aux1 = explode(" ", $_GET['destino']);
		$destino2 = $aux1[0];
		$auxiliar1 = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM destinos WHERE Codigo='$destino2'"));
		$destino = $auxiliar1['cNo']; $auxDestino= $auxiliar1['Codigo'];
	} else {
		$destino = "";
	}
	$coefAjuste = 0;
	$obsAux= "Disp. 78/06 - Cód. Nomenclador de Destino: ".$auxDestino." - ".$observacion;
	$obs= nl2br($obsAux);
	if ($idform == 0){
	$obra = mysqli_query($conexion,"SELECT parcela, subparcela FROM obras WHERE codObra = '$idobra'");
	$ob = mysqli_fetch_array($obra);

	$sql= insertFormA910($ob['parcela'],$ob['subparcela'],$aptitud, $tierraAju, $superficie, $entero, $tierraBas,
			$tierraAct, $edifAct, $mejAct, $planAct, $postura, $articulo, $mostrarProf,
			$coefAjuste, $destino, $obs, $ala1, $ala2, $siloCant1, $siloEst1, $siloData1,
			$siloCap1, $tanCant1, $ala3, $ala4, $siloCant2, $siloEst2, $siloData2, $siloCap2,
			$tanCant2, $ala5, $ala6, $siloCant3, $siloEst3, $siloData3, $siloCap3, $tanCant3, $ala7,
			$ala8, $ala9, $ala10, $moliCant1, $plantDet1, $plantSup1, $plantP1, $plantEst1, $ala11,
			$ala12, $moliCant2, $plantDet2, $plantSup2, $plantP2, $plantEst2, $ala13, $ala14, $moliCant3,
			$plantDet3, $plantSup3, $plantP3, $plantEst3, $ala15, $ala16, $moliCant4, $plantDet4, $plantSup4,
			$plantP4, $plantEst4, $ala17, $ala18, $moliCant5, $plantDet5, $plantSup5, $plantP5, $plantEst5,
			$moliCant6, $plantDet6, $plantSup6, $plantP6, $plantEst6);

			include("sql/sqlconnection.php");

			if($dbStatus != "Exitosa")
				exit($dbStatus);

			try {
				// use exec() because no results are returned
				$conn->exec($sql);
				$lastID = $conn->lastInsertId();
				$queryCount = "SELECT COUNT(*) AS cuenta FROM `cedulaformularios` WHERE nroFormulario = 'A910' AND idCedula = $Cedula";
				$count = $conn->query($queryCount)->fetch();
				$version = ((int)$count["cuenta"]) + 1;
				$queryObra = "INSERT INTO cedulaformularios
											(idCedulaFormularios, idCedula, tipoCedula, nroFormulario, `version`, `data`, codForm)
											VALUES (default, $Cedula, $TipoDeCedula, 'A910', $version, YEAR(CURDATE()), $lastID)";
				$conn->exec($queryObra);
				} catch(PDOException $e) {
				echo "Fallo el registro:" . $e->getMessage();
				}

			$conn = null;
		} else {
			if ($auxObs == $destino){
				$obs = $observacion;
			}
			$sql= updateFormA910($idform, $aptitud, $tierraAju, $superficie, $entero, $tierraBas,
					$tierraAct, $edifAct, $mejAct, $planAct, $postura, $articulo, $mostrarProf,
					$coefAjuste, $destino, $obs, $ala1, $ala2, $siloCant1, $siloEst1, $siloData1,
					$siloCap1, $tanCant1, $ala3, $ala4, $siloCant2, $siloEst2, $siloData2, $siloCap2,
					$tanCant2, $ala5, $ala6, $siloCant3, $siloEst3, $siloData3, $siloCap3, $tanCant3, $ala7,
					$ala8, $ala9, $ala10, $moliCant1, $plantDet1, $plantSup1, $plantP1, $plantEst1, $ala11,
					$ala12, $moliCant2, $plantDet2, $plantSup2, $plantP2, $plantEst2, $ala13, $ala14, $moliCant3,
					$plantDet3, $plantSup3, $plantP3, $plantEst3, $ala15, $ala16, $moliCant4, $plantDet4, $plantSup4,
					$plantP4, $plantEst4, $ala17, $ala18, $moliCant5, $plantDet5, $plantSup5, $plantP5, $plantEst5,
					$moliCant6, $plantDet6, $plantSup6, $plantP6, $plantEst6);

					mysqli_query($conexion,$sql)
					or die("Problemas en la actualizacion".mysqli_error($conexion));
		}
		$totalUp= $tierraBas+$edifAct+$TotalMejora;
		$idform = $_GET['idform'];
		if (isset($TipoDeCedula)) {
				switch ($TipoDeCedula) {
					case '1': $cedulaUpdate= "UPDATE cedula10707 SET edificio='$edifAct', tierra='$tierraBas', mejora='$TotalMejora', total= '$totalUp' WHERE idCedula707='$Cedula'"; break;
					case '2': $cedulaUpdate= "UPDATE obraunidadfuncional SET tierra='$tierraBas', vpropio='$edifAct' WHERE idCedulaPH='$Cedula'"; break;
					case '3': $suma = mysqli_fetch_array(mysqli_query($conexion,"SELECT vcomun FROM cedulade WHERE idCedulaDE='$Cedula'"));
										$vcomun=$suma['vcomun'];
										$totalEdificio= (real)$edificio+(real)$vcomun;
										$cedulaUpdate= "UPDATE cedulade SET tierra='$tierraBas', vpropio='$edifAct', totalEdificio='$totalEdificio' WHERE idCedulaDE='$Cedula'";
						break;
				}
			}
			if (isset($cedulaUpdate)){
				mysqli_query($conexion,$cedulaUpdate)
				or die("Problemas en la actualizacion".mysqli_error($conexion));
			}

			echo "<script language='javascript'>";
			echo "alert('El formulario A910 se cargo correctamente');";
			echo 'window.opener.getFormularios();';
			echo "window.close();";
			echo "</script>";

}
?>
</form>
</div>
</div>
</div>
					</div> <!-- /widget-content -->
				</div>
		</div>
			</div>
				</div> <!-- /widget -->

		    </div> <!-- /span8 -->

	      </div> <!-- /row -->

	    </div> <!-- /container -->

	</div> <!-- /main-inner -->

</div> <!-- /main -->


  </body>
</html>
