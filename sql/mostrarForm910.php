<?php
$pagina='mostrarForm910PHP';
include ("conexion.php");

function suma($total,$v1,$v2,$v3,$v4,$v5){
  $total= round($v1)+round($v2)+round($v3)+round($v4)+round($v5);
  return $total;
}

  //INICIALIZACION DE VARIABLES
  $TotalRubro71="";$TotalRubro72="";$TotalRubro73="";$TotalRubro74="";$TotalRubro75="";$TotalRubro76="";$TotalRubro77="";$TotalRubro78="";
  $TotalRubro79="";$TotalRubro710="";$TotalRubro711="";$subtotal1="";$subtotal2="";$TotalRubro712="";$TotalRubro713="";$TotalRubro714="";
  $TotalRubro715="";$TotalRubro716="";$TotalRubro717="";$TotalRubro718="";$TotalRubro719="";$TotalRubro720="";$subtotal3="";$subtotal4="";

  include ("funciones/calculosFormResumenes.php");

if (isset($_GET['idform'])){
  $idform= $_GET['idform'];
  $row910 = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM form910 WHERE codForm910='$idform'"));
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
  }
}
  //Formulario 910
  $superficie = $row910['Superficie'];
  $tierraBas = $row910['TierraBas'];
  $edifBas = $row910['EdifBas'];
  $mejyedi = $row910['TierraAju'];
  $edifAct = $row910['EdifAct'];
  $mejBas912 = $row910['MejBas912'];
  $planBas = $row910['PlanBas'];
  $observacion = $row910['observacion'];
  $detalle= $row910['Articulo'];
}
?>
