<?php
// consulta sql mostrar los datos de la cedula PH

include ("sql/conexion.php");



	$row = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedulaph where idCedulaPH='$idCedula'"));

	$Fph= $row['ph'];
	$idobra= $row['codObra'];
	$FfechaImp= $row['fechaImp'];
	$Flugar= $row['lugar'];
	$FanioImp= $row['anioImp'];
	$FinscripTipo= $row['inscripTipo'];
	$FinscripNro= $row['inscripNro'];
	$FcantUF= $row['cantUF'];
	$Fanio= $row['anio'];
	$Fplano= $row['plano'];
	$Fcpartido= $row['cpartido'];
	$Fnro1= $row['nro1'];
	$Fnro2= $row['nro2'];
	$FfechaAprob= $row['fechaAprob'];
	$FaCon= $row['aCon'];
	$FeCon= $row['eCon'];
	$Fcons= $row['cons'];
  $FmedidasRA= $row['medidasRA'];
  $FimpInm= '';
	$FimpSel= '';
	$Fotrosph= '';
	$Fcod= '';
	$FefeMes= '';
  $FefeAnio= '';
  $Fdestino= $row['destino'];
  $FmedidasOb= '';
  $FmedidasOp= $row['medidasOp'];
  $Fanexo= $row['anexo'];
  $FampAnexo= $row['ampAnexo'];

  function a($dato) {
    if($dato==1){
      echo '<input type="checkbox" value="0" checked>';
    } else {
        echo '<input type="checkbox" value="0">';
    }
    return $dato;
  }


	?>
