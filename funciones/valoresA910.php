<?php
$tipo = mysqli_query($conexion,"SELECT * FROM destinos GROUP BY Tipo");
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

if (isset($cedu['edificio'])){
  $edifAct = $cedu['edificio'];
}
if (isset($cedu['mejora'])){
  $mejAct = $cedu['mejora'];
}
if (isset($cedu['tierra'])){
  $tierra = $cedu['tierra'];
}
if (isset($_POST['Aptitud'])){
  $aptitud = $_POST['Aptitud'];
}
if (isset($_POST['TierraBas'])){
  $tierraBas = $_POST['TierraBas'];
}
if (isset($_POST['TierraAju'])){
  $tierraAju = $_POST['TierraAju'];
}
if (isset($_POST['Superficie'])){
  $superficie = $_POST['Superficie'];
}
if (isset($_POST['Entero'])){
  $entero = $_POST['Entero'];
}
if (isset($_POST['TierraAct'])){
  $tierraAct = $_POST['TierraAct'];
}
if (isset($_POST['EdifAct'])){
  $edifAct = $_POST['EdifAct'];
}
if (isset($_POST['MejAct'])){
  $mejAct = $_POST['MejAct'];
}
if (isset($_POST['PlanAct'])){
  $planAct = $_POST['PlanAct'];
}
if (isset($_POST['Postura'])){
  $postura = $_POST['Postura'];
}
if (isset($_POST['destino'])){
  $destino = $_POST['destino'];
}
if (isset($_POST['tipo'])){
  $aux = $_POST['tipo'];
}
if (isset($_POST['observacion'])){
  $observacion = $_POST['observacion'];
}
if (isset($_POST['Articulo'])){
  $articulo = $_POST['Articulo'];
}
if (isset($_POST['mostrarProf'])){
  $mostrarProf = $_POST['mostrarProf'];
}
if (isset($_POST['auxObs'])){
  $auxObs= $_POST['auxObs'];
}
?>
