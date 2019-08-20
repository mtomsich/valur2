<?php
if (isset($_POST['idform'])){
  $_POST['idform'];
}
if (isset($_POST['idCedula'])){
  $_POST['idCedula'];
}
if (isset($_POST['Aptitud'])){
  $aptitud = $_POST['Aptitud'];
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
if (isset($_POST['TierraBas'])){
  $tierraBas = $_POST['TierraBas'];
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
      if (isset($_POST['tipo'])){
        $aux = $_POST['tipo'];
      } else {
          $aux = "";
      }
      if (isset($_POST['destino'])){
        $aux = $_POST['destino'];
      } else {
          $aux = "";
      }
if (isset($_POST['observacion'])){
  $observacion = $_POST['observacion'];
}
if (isset($_POST['Articulo'])){
  $articulo = $_POST['Articulo'];
} else {
  $articulo = 0;
}
if (isset($_POST['mostrarProf'])){
  $mostrarProf = $_POST['mostrarProf'];
} else {
  $mostrarProf = 0;
}

?>
