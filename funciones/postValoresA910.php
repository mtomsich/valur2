<?php
$idobra = $_GET['idobra'];
$TipoDeCedula = $_GET['cedula'];
$Cedula = $_GET['idCedula'];
$aptitud = $_GET['Aptitud'];
$tierraAju = $_GET['TierraAju'];
$superficie = $_GET['Superficie'];
$entero = $_GET['Entero'];
$tierraBas = $_GET['TierraBas'];
$tierraAct = $_GET['TierraAct'];
$edifAct = $_GET['EdifAct'];
$mejAct = $_GET['MejAct'];
$planAct = $_GET['PlanAct'];
$postura = $_GET['Postura'];
if (isset($_GET['destino'])){
  $destino = $_GET['destino'];
} else {
  $destino = "";
}
if (isset($_GET['tipo'])){
  $aux = $_GET['tipo'];
} else {
  $aux = "";
}
$observacion = $_GET['observacion'];
if (isset($_GET['Articulo'])){
  $articulo = $_GET['Articulo'];
} else {
  $articulo = 0;
}
if (isset($_GET['mostrarProf'])){
  $mostrarProf = $_GET['mostrarProf'];
} else {
  $mostrarProf = 0;
}
?>
