<?php
$pagina='mostrarFormA910PHP';

  include ("conexion.php");
  include ("funciones/calculosFormResumenes.php");

  if (isset($_GET['idform'])){
      $idform= $_GET['idform'];
      $rowA910 = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM forma910 WHERE codFormA910='$idform'"));
      if (isset($_GET['idCedula'])){
        $idCedula= $_GET['idCedula'];
      if (isset($_GET['cedula'])){
        $cedula= $_GET['cedula'];
        switch ($cedula) {
  		    case '1':
  		      $cedu = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedula10707 WHERE idCedula707=$idCedula"));
  		      break;
  		    case '2':
  		      $cedu = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedulaph WHERE idCedulaPH=$idCedula"));
  		      break;
  		    case '3':
  		      $cedu = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedulade WHERE idCedulaDE=$idCedula"));
  		      break;
  		  }
        $lugar = $cedu['lugar'];
      //DATOS FORMULARIO 912
      $rowced = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedulaformularios WHERE (idCedula='$idCedula') and (tipoCedula='$cedula') and (nroFormulario='912')"));
      if (isset($rowced['codForm'])){
        $codform= $rowced['codForm'];
        $Vec= mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM form912 WHERE codForm912='$codform'"));
        $ala1= $Vec['AlamA1']; $ala2= $Vec['AlamA2']; $siloCant1= $Vec['SiloCant1']; $siloEst1= $Vec['SiloEst1']; $siloData1= $Vec['SiloFec1'];
				$siloCap1= $Vec['SiloCap1']; $tanCant1= $Vec['Tanque1']; $ala3= $Vec['AlamA3']; $ala4= $Vec['AlamA4']; $siloCant2= $Vec['SiloCant2'];
				$siloEst2= $Vec['SiloEst2']; $siloData2= $Vec['SiloFec2']; $siloCap2= $Vec['SiloCap2']; $tanCant2= $Vec['Tanque2'];
				$ala5= $Vec['AlamA5']; $ala6= $Vec['AlamA6']; $siloCant3= $Vec['SiloCant3']; $siloEst3= $Vec['SiloEst3']; $siloData3= $Vec['SiloFec3'];
				$siloCap3= $Vec['SiloCap3']; $tanCant3= $Vec['Tanque3']; $ala7= $Vec['AlamA7']; $ala8= $Vec['AlamA8']; $ala9= $Vec['AlamA9'];
				$ala10= $Vec['AlamA10']; $moliCant1= $Vec['Molino1'];	$ala11= $Vec['AlamA11']; $ala12= $Vec['AlamA12']; $moliCant2= $Vec['Molino2'];
			  $ala13= $Vec['AlamA13']; $ala14= $Vec['AlamA14'];	$moliCant3= $Vec['Molino3'];$ala15= $Vec['AlamA15']; $ala16= $Vec['AlamA16'];
				$moliCant4= $Vec['Molino4'];$ala17= $Vec['AlamA17'];$ala18= $Vec['AlamA18']; $moliCant5= $Vec['Molino5']; $moliCant6= $Vec['Molino6'];
				$j=0;$plantEst="";$plantDet="";$plantSup="";$plantP="";
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
      }
      //DATOS FORMULARIO 915
      $form915 = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedulaformularios WHERE (idCedula='$idCedula') and (tipoCedula='$cedula')
      and (nroFormulario='915')"));
      if ($form915['codForm']){
        $idForm915 = $form915['codForm'];
        $row915 = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedulaformularios o, form915 f WHERE o.idCedula= $idCedula AND o.tipoCedula = $cedula AND o.codForm = $idForm915 AND o.codForm = f.codForm915"));

         $Parcela = $row915['Parcela'];
         $Subparcela = $row915['Subparcela'];
         $AMetros = $row915['AMetros'];
         $AFachada = $row915['AFachada'];
         $AParedes = $row915['AParedes'];
         $ATechos = $row915['ATechos'];
         $ACielorrasos = $row915['ACielorrasos'];
         $ARevoques = $row915['ARevoques'];
         $APisos = $row915['APisos'];
         $AHierro = $row915['AHierro'];
         $AMadera = $row915['AMadera'];
         $ABano = $row915['ABano'];
         $ACocina = $row915['ACocina'];
         $ARevest = $row915['ARevest'];
         $AInstalac = $row915['AInstalac'];
         $AEstado = $row915['AEstado'];
         $ABasico = $row915['ABasico'];

         $BMetros = $row915['BMetros'];
         $BTrabajos = $row915['BTrabajos'];
         $BMamposteria = $row915['BMamposteria'];
         $BHormigon = $row915['BHormigon'];
         $BTechos = $row915['BTechos'];
         $BCielorrasos = $row915['BCielorrasos'];
         $BRevesti = $row915['BRevesti'];
         $BPisos = $row915['BPisos'];
         $BCarpinteria = $row915['BCarpinteria'];
         $BSanitaria = $row915['BSanitaria'];
         $BCocina = $row915['BCocina'];
         $BRevesti2 = $row915['BRevesti2'];
         $BInsta2 = $row915['BInsta2'];
         $BEstado = $row915['BEstado'];
         $BBasico = $row915['BBasico'];
         $CMetros = $row915['CMetros'];
         $CFachada = $row915['CFachada'];
         $CParedes = $row915['CParedes'];
         $CEsqueleto = $row915['CEsqueleto'];
         $CArmada = $row915['CArmada'];
         $CTechos = $row915['CTechos'];
         $CCielorrasos = $row915['CCielorrasos'];
         $CRevoques = $row915['CRevoques'];
         $CPisos = $row915['CPisos'];
         $CHierro = $row915['CHierro'];
         $CMadera = $row915['CMadera'];
         $CBano = $row915['CBano'];
         $CRevesti = $row915['CRevesti'];
         $CInstalac = $row915['CInstalac'];
         $CEstado = $row915['CEstado'];
         $CBasico = $row915['CBasico'];

         $observaciones = $row915['observaciones'];

        // ESTADO A
          if($AEstado == '1') {
            $AEstadoB = 'B';
            $AEstadoR = '';
            $AEstadoM = '';
            }	else if ($AEstado == '0.60') {
            $AEstadoB = '';
            $AEstadoR = 'R';
            $AEstadoM = '';
            } else if ($AEstado == '0.30') {
            $AEstadoB = '';
            $AEstadoR = '';
            $AEstadoM = 'M';
            }else {
              $AEstadoB = 'B';
              $AEstadoR = 'R';
              $AEstadoM = 'M';
            }
        //ESTADO B
          if($BEstado == '1') {
            $BEstadoB = 'B';
            $BEstadoR = '';
            $BEstadoM = '';
            }	else if ($BEstado == '0.60') {
            $BEstadoB = '';
            $BEstadoR = 'R';
            $BEstadoM = '';
            } else if ($BEstado == '0.30') {
            $BEstadoB = '';
            $BEstadoR = '';
            $BEstadoM = 'M';
            }else {
            $BEstadoB = 'B';
            $BEstadoR = 'R';
            $BEstadoM = 'M';
            }
        //ESTADO C
          if($CEstado == '1') {
            $CEstadoB = 'B';
            $CEstadoR = '';
            $CEstadoM = '';
            }	else if ($CEstado == '0.60') {
            $CEstadoB = '';
            $CEstadoR = 'R';
            $CEstadoM = '';
            } else if ($CEstado == '0.30') {
            $CEstadoB = '';
            $CEstadoR = '';
            $CEstadoM = 'M';
            }else {
            $CEstadoB = 'B';
            $CEstadoR = 'R';
            $CEstadoM = 'M';
          }


         $arrayA1 = array(2,24,18,3,9,8,11,4,8,2,3,8);
         $arrayA2 = array($AFachada,$AParedes,$ATechos,$ACielorrasos,$ARevoques,$APisos,$AHierro,$AMadera,$ABano,$ACocina,$ARevest,$AInstalac);
         $arrayResulA = array();
         $resulArrayA = 0;

          for ($i = 0; $i < count($arrayA1); $i++) {
            $arrayA1[$i] = $arrayA1[$i]==null ? 0 : floatval( $arrayA1[$i]);
            $arrayA2[$i] = $arrayA2[$i]==null ? 0 : floatval( $arrayA2[$i]);

            $arrayResulA[$i] = ($arrayA1[$i] * $arrayA2[$i])/100;
            intval($resulArrayA = $resulArrayA + $arrayResulA[$i]);
          }

         $arrayB1 = array(2,17,17,1,2,11,7,17,8,5,3,10);
         $arrayB2 = array($BTrabajos,$BMamposteria,$BHormigon,$BTechos,$BCielorrasos,$BRevesti,$BPisos,$BCarpinteria,$BSanitaria,$BCocina,$BRevesti2,$BInsta2);
         $arrayResulB = array();
         $resulArrayB = 0;

          for ($i = 0; $i < count($arrayB1); $i++) {
            $arrayB1[$i] = $arrayB1[$i]==null ? 0 : floatval( $arrayB1[$i]);
            $arrayB2[$i] = $arrayB2[$i]==null ? 0 : floatval( $arrayB2[$i]);

            $arrayResulB[$i] = ($arrayB1[$i] * $arrayB2[$i])/100;
            intval($resulArrayB = $resulArrayB + $arrayResulB[$i]);
          }

         $arrayC1 = array(3,22,9,22,10,2,5,7,4,5,2,2,7);
         $arrayC2 = array($CFachada,$CParedes,$CEsqueleto,$CArmada,$CTechos,$CCielorrasos,$CRevoques,$CPisos,$CHierro,$CMadera,$CBano,$CRevesti,$CInstalac);
         $arrayResulC = array();
         $resulArrayC = 0;
          for ($i = 0; $i < count($arrayC1); $i++) {
            $arrayC1[$i] = $arrayC1[$i]==null ? 0 : floatval( $arrayC1[$i]);
            $arrayC2[$i] = $arrayC2[$i]==null ? 0 : floatval( $arrayC2[$i]);

            $arrayResulC[$i] = ($arrayC1[$i] * $arrayC2[$i])/100;
            intval($resulArrayC = $resulArrayC + $arrayResulC[$i]);
          }

         $totalecu1 = 0;
         ($totalecu1 = ((floatval($AMetros) *  floatval($ABasico) * $resulArrayA)/100) * floatval($AEstado));
         $totalecu2 =0;
         ($totalecu2 = ((floatval($BMetros) *  floatval($BBasico) * $resulArrayB)/100) * floatval($BEstado));
         $totalecu3 =0;
         ($totalecu3 = ((floatval($CMetros) *  floatval($CBasico) * $resulArrayC)/100) * floatval($CEstado));
         $totalForm915 = $totalecu1+$totalecu2+$totalecu3;
      }
    }
  }
  //DATOS FORMULARIO A910
  $tierraAju = $rowA910['TierraAju'];
  $tierraBas = $rowA910['TierraBas'];
  $superficie = $rowA910['Superficie'];
  $entero = $rowA910['Entero'];
  $aptitud = $rowA910['Aptitud'];
  $edifAct = $rowA910['EdifAct'];
  $mejAct = $rowA910['MejAct'];
  $planAct = $rowA910['PlanAct'];
  $postura = $rowA910['Postura'];
  $observacion = $rowA910['observacion'];
  $fecha = $rowA910['Fecha'];
  $destino = $rowA910['Destino'];
  $articulo = $rowA910['Articulo'];
  $coefAjusteAplica = $rowA910['CoefAjusteAplica'];
  $coefAjuste = $rowA910['CoefAjuste'];
  $mostrarProf = $rowA910['firmaprof'];

  $RowNombreDestino = mysqli_fetch_array(mysqli_query($conexion,"SELECT Destino FROM destinos WHERE cNo='$destino'"));
  $nombreDestino = $RowNombreDestino['Destino'];
  $auxObs = $destino;
}
?>
