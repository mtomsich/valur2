<?php
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
$idobra = $cedu['codObra'];
$parti = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM obras WHERE codObra=$idobra"));
$partido = $parti['codPartido'];$Fpar= $parti['parcela'];
$par = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM partidos WHERE idPartido=$partido"));
$Fpartido = $par['partido'];
?>
