<?php
$pagina='mostrarFormA901PHP';

  include ("conexion.php");
  include ("funciones/calculosFormResumenes.php");

  if (isset($_GET['idform'])){
      $idform= $_GET['idform'];
      $row = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM forma901 WHERE codFormA901='$idform'"));
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
        //FORMULARIO 915
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
         $lugar = $cedu['lugar'];
      }
    }

  //FORMULARIO A901
  $ajuste = $row['Ajuste'];
  $tierraBas = $row['TierraBas'];
  $superficie = $row['Superficie'];
  $tierraAct = $row['TierraAct'];
  $edifAct = $row['EdifAct'];
  $mejAct = $row['MejAct'];
  $comAct = $row['ComAct'];
  $postura = $row['Postura'];
  $coefAjuste = $row['CoefAjuste'];
  $destino = $row['Destino'];
  $observacion = $row['observacion'];
  $articulo = $row['Articulo'];
  $mostrarProf = $row['firmaprof'];

  $RowNombreDestino = mysqli_fetch_array(mysqli_query($conexion,"SELECT Destino FROM destinos WHERE cNo='$destino'"));
  $nombreDestino = $RowNombreDestino['Destino'];
  $auxObs = $destino;
}
?>
