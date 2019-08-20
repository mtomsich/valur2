<?php
$pagina='mostrarForm901PHP';
include ("conexion.php");

  //INICIALIZACION DE VARIABLES
  $totaledificio1 = ""; $totalmejoras1 = "";  $cubierta1 = "";  $semicub1 = ""; $totalsup1 = 0; $totalvalor1 = 0; $totalRubro4= 0;
  $totaledificio2 = ""; $totalmejoras2 = "";  $cubierta2 = "";  $semicub2 = ""; $totalsup2 = 0; $totalvalor2 = 0;
  $totaledificio3 = ""; $totalmejoras3 = "";  $cubierta3 = "";  $semicub3 = ""; $totalsup3 = 0; $totalvalor3 = 0;
  $totaledificio4 = ""; $totalmejoras4 = "";  $cubierta4 = "";  $semicub4 = ""; $totalsup4 = 0; $totalvalor4 = 0;
  $totaledificio5 = ""; $totalmejoras5 = "";  $cubierta5 = "";  $semicub5 = ""; $totalsup5 = 0; $totalvalor5 = 0;
  $totaledificio6 = ""; $totalmejoras6 = "";  $cubierta6 = "";  $semicub6 = ""; $totalsup6 = 0; $totalvalor6 = 0;
  $totaledificio7 = ""; $totalmejoras7 = "";  $cubierta7 = "";  $semicub7 = ""; $totalsup7 = 0; $totalvalor7 = 0;
  $totaledificio8 = ""; $totalmejoras8 = "";  $cubierta8 = "";  $semicub8 = ""; $totalsup8 = 0; $totalvalor8 = 0;
  $totaledificio9 = ""; $totalmejoras9 = "";  $cubierta9 = "";  $semicub9 = ""; $totalsup9 = 0; $totalvalor9 = 0;
  $totaledificio10 = ""; $totalmejoras10 = ""; $cubierta10 = ""; $semicub10 = ""; $totalsup10 = 0; $totalvalor10 = 0;
  $totaledificio11 = ""; $totalmejoras11 = ""; $cubierta11 = ""; $semicub11 = ""; $totalsup11 = 0; $totalvalor11 = 0;
  $totaledificio12 = ""; $totalmejoras12 = ""; $cubierta12 = ""; $semicub12 = ""; $totalsup12 = 0; $totalvalor12 = 0;
  $totaledificio13 = ""; $totalmejoras13 = ""; $cubierta13 = ""; $semicub13 = ""; $totalsup13 = 0; $totalvalor13 = 0;
  $totaledificio14 = ""; $totalmejoras14 = ""; $cubierta14 = ""; $semicub14 = ""; $totalsup14 = 0; $totalvalor14 = 0;
  $totaledificio15 = ""; $totalmejoras15 = ""; $cubierta15 = ""; $semicub15 = ""; $totalsup15 = 0; $totalvalor15 = 0;
  $totaledificio16 = ""; $totalmejoras16 = ""; $cubierta16 = ""; $semicub16 = ""; $totalsup16 = 0; $totalvalor16 = 0;
  $totaledificio17 = ""; $totalmejoras17 = ""; $cubierta17 = ""; $semicub17 = ""; $totalsup17 = 0; $totalvalor17 = 0;
  $totaledificio18 = ""; $totalmejoras18 = ""; $cubierta18 = ""; $semicub18 = ""; $totalsup18 = 0; $totalvalor18 = 0;
  $totaledificio19 = ""; $totalmejoras19 = ""; $cubierta19 = ""; $semicub19 = ""; $totalsup19 = 0; $totalvalor19 = 0;
  $totaledificio20 = ""; $totalmejoras20 = ""; $cubierta20 = ""; $semicub20 = ""; $totalsup20 = 0; $totalvalor20 = 0;

  include ("funciones/calculosFormResumenes.php");

  function suma($t,$v,$a,$s,$b){
    if ($v > 0){
      $t = $t+$v;
    }
    if ($a > 0){
      $t = $t+$a;
    }
    if ($s > 0){
      $t = $t+$s;
    }
    if ($b > 0){
      $t = $t+$b;
    }
    echo round($t);
    return $t;
  }

  if (isset($_GET['idform'])){
      $idform= $_GET['idform'];
      $row = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM form901 WHERE codForm901='$idform'"));
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

  //Formulario 901
  $ajuste = $row['Ajuste'];
  $basico = $row['Basico'];
  $superficie = $row['Superficie'];
  $valor = $row['Valor'];
  $valor1955 = $row['Valor1955'];
  $destino = $row['Destino'];
  $observacion = $row['observacion'];
  $valorCalle1 = $row['ValorCalle1'];
  $valorCalle2 = $row['ValorCalle2'];
  $valorCalle3 = $row['ValorCalle3'];
  $valorCalle4 = $row['ValorCalle4'];
  $calle1 = $row['Calle1'];
  $calle2 = $row['Calle2'];
  $calle3 = $row['Calle3'];
  $calle4 = $row['Calle4'];
  $mostrarProf = $row['firmaprof'];

  $RowNombreDestino = mysqli_fetch_array(mysqli_query($conexion,"SELECT Destino FROM destinos WHERE cNo='$destino'"));
  $nombreDestino = $RowNombreDestino['Destino'];
  $auxObs = $destino;
}

?>
