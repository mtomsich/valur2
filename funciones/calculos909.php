<?php
//EN ESTE ARCHIVOS ESTAN LOS VALORES BASICOS DE PLANTACION DE OLIVOS, FRUTALES Y FORESTALES


function OlivosB($OliHect,$OliArea,$OliCa){
  if (($OliHect > 0) or ($OliArea > 0) or ($OliCa > 0)){
    echo "<b>Olivo</b><div style='text-align:right!important;margin-top:-12px;margin-right:5px;'><b>B</b></div>";
  }else {
    echo '';
  }
  return;
}
function OlivosR($OliHect,$OliArea,$OliCa){
  if (($OliHect > 0) or ($OliArea > 0) or ($OliCa > 0)){
    echo "<b>Olivo</b><div style='text-align:right!important;margin-top:-12px;margin-right:5px;'><b>R</b></div>";
  }else {
    echo '';
  }
  return;
}
function OlivosM($OliHect,$OliArea,$OliCa){
  if (($OliHect > 0) or ($OliArea > 0) or ($OliCa > 0)){
    echo "<b>Olivo</b><div style='text-align:right!important;margin-top:-12px;margin-right:5px;'><b>M</b></div>";
  }else {
    echo '';
  }
  return;
}


//FUNCIONES OlivosEst1,OlivosEst2,OlivosEst3 SON PARA MOSTRAR EL ESTADO
function OlivosEst1($OliHect,$OliArea,$OliCa){
  if (($OliHect > 0) or ($OliArea > 0) or ($OliCa > 0)){
     $OliEst = 1.00;
     echo number_format($OliEst, 2, ',', '');
  }else {
    echo $OliEst = '';
  }
  return $OliEst;
}
function OlivosEst2($OliHect,$OliArea,$OliCa){
  if (($OliHect > 0) or ($OliArea > 0) or ($OliCa > 0)){
     $OliEst = 0.60;
     echo number_format($OliEst, 2, ',', '');
  }else {
    echo $OliEst = '';
  }
  return $OliEst;
}
function OlivosEst3($OliHect,$OliArea,$OliCa){
  if (($OliHect > 0) or ($OliArea > 0) or ($OliCa > 0)){
     $OliEst = 0.30;
     echo number_format($OliEst, 2, ',', '');
  }else {
    echo $OliEst = '';
  }
  return $OliEst;
}


//FUNCIONES OLIVOS PRE, PRO Y POS SON PARA MOSTRAR SUS VALORES BASICOS SI LA VARIABLE ES IGUAL A 1
function OlivosPre($data){
  if ($data == 1) {
    $OlivoPre = 76.400;
    echo number_format($OlivoPre, 2, ',', '.');
  }else {
    echo $OlivoPre = '';
  }
  return $OlivoPre;
}
function OlivosPro($data){
  if ($data == 1) {
    $OlivoPro = 833.626;
    echo number_format($OlivoPro, 2, ',', '.');
  }else {
    echo $OlivoPro = '';
  }
  return $OlivoPro;
}
function OlivosPos($data){
  if ($data == 1) {
    $OlivoPos = 277.894;
    echo number_format($OlivoPos, 2, ',', '.');
  }else {
    echo $OlivoPos = '';
  }
  return $OlivoPos;
}

//FUNCIONES FRUTALES PRE, PRO Y POS SON PARA MOSTRAR LOS VALORES SEGUN LA VARIEDAD Y SI LA VARIABLES ES IGUAL A 1
function FrutalesPre($data,$dato){
  if ($data == 1) {
    switch ($dato) {
      case "Ciruelo":
        $FruPre = 89.701;
        echo number_format($FruPre, 2, ',', '.');
      break;
      case 'Duraznero':
        $FruPre = 80.040;
        echo number_format($FruPre, 2, ',', '.');
      break;
      case 'Limonero':
        $FruPre = 32.895;
        echo number_format($FruPre, 2, ',', '.');
      break;
      case 'Mandarino':
        $FruPre = 32.895;
        echo number_format($FruPre, 2, ',', '.');
      break;
      case 'Manzano':
        $FruPre = 73.877;
        echo number_format($FruPre, 2, ',', '.');
      break;
      case 'Naranjo':
        $FruPre = 32.895;
        echo number_format($FruPre, 2, ',', '.');
      break;
      case 'Peral':
        $FruPre = 92.319;
        echo number_format($FruPre, 2, ',', '.');
      break;
      case 'Pomelo':
        $FruPre = 32.895;
        echo number_format($FruPre, 2, ',', '.');
      break;
      case 'Vid':
        $FruPre = 140.600;
        echo number_format($FruPre, 2, ',', '.');
      break;
    }
    }else {
      $FruPre = "";
      echo $FruPre;
    }
  return $FruPre;
}
function FrutalesPro($data,$dato){
  if ($data == 1) {
    switch ($dato) {
      case "Ciruelo":
      $FruPro = 826.818;
      echo number_format($FruPro, 2, ',', '.');
      break;
      case 'Duraznero':
      $FruPro = 480.355;
      echo number_format($FruPro, 2, ',', '.');
      break;
      case 'Limonero':
      $FruPro = 172.504;
      echo number_format($FruPro, 2, ',', '.');
      break;
      case 'Mandarino':
      $FruPro = 172.504;
      echo number_format($FruPro, 2, ',', '.');
      break;
      case 'Manzano':
      $FruPro = 485.346;
      echo number_format($FruPro, 2, ',', '.');
      break;
      case 'Naranjo':
      $FruPro = 172.504;
      echo number_format($FruPro, 2, ',', '.');
      break;
      case 'Peral':
      $FruPro = 452.267;
      echo number_format($FruPro, 2, ',', '.');
      break;
      case 'Pomelo':
      $FruPro = 172.504;
      echo number_format($FruPro, 2, ',', '.');
      break;
      case 'Vid':
      $FruPro = 552.325;
      echo number_format($FruPro, 2, ',', '.');
      break;
    }
    }else {
      $FruPro = "";
      echo $FruPro;
    }
  return $FruPro;
}
function FrutalesPos($data,$dato){
  if ($data == 1) {
    switch ($dato) {
      case "Ciruelo":
        $FruPos = 272.920;
        echo number_format($FruPos, 2, ',', '.');
      break;
      case 'Duraznero':
        $FruPos = 153.497;
        echo number_format($FruPos, 2, ',', '.');
      break;
      case 'Limonero':
        $FruPos = 56.426;
        echo number_format($FruPos, 2, ',', '.');
      break;
      case 'Mandarino':
        $FruPos = 56.426;
        echo number_format($FruPos, 2, ',', '.');
      break;
      case 'Manzano':
        $FruPos = 165.649;
        echo number_format($FruPos, 2, ',', '.');
      break;
      case 'Naranjo':
        $FruPos = 56.426;
        echo number_format($FruPos, 2, ',', '.');
      break;
      case 'Peral':
        $FruPos = 144.219;
        echo number_format($FruPos, 2, ',', '.');
      break;
      case 'Pomelo':
        $FruPos = 56.426;
        echo number_format($FruPos, 2, ',', '.');
      break;
      case 'Vid':
        $FruPos = 182.379;
        echo number_format($FruPos, 2, ',', '.');
      break;
    }
    }else {
      $FruPos = "";
      echo $FruPos;
    }
    $FruPos = "";
  return $FruPos;
}

//FUNCIONES FORESTALES PRE Y PRO SON PARA MOSTRAR LOS VALORES SEGUN LA VARIEDAD Y SI LA VARIABLES ES IGUAL A 1
function ForestalesPre($data,$dato){
  if ($data == 1) {
    switch ($dato) {
      case 'Acacia':
        $ForesPre = '10.250';
        echo number_format($ForesPre, 2, ',', '.');
      break;
      case 'Alamo':
        $ForesPre = '16.250';
        echo number_format($ForesPre, 2, ',', '.');
      break;
      case 'Eucalipto':
        $ForesPre = '10.250';
        echo number_format($ForesPre, 2, ',', '.');
      break;
      case 'Pino':
        $ForesPre = '14.700';
        echo number_format($ForesPre, 2, ',', '.');
      break;
      case 'Sauce':
        $ForesPre = '16.500';
        echo number_format($ForesPre, 2, ',', '.');
      break;
    }
    }else {
      $ForesPre = "";
      echo $ForesPre;
    }
  return $ForesPre;
}
function ForestalesPro($data,$dato){
  if ($data == 1) {
    switch ($dato) {
      case 'Acacia':
        $ForesPro = '76.000';
        echo number_format($ForesPro, 2, ',', '.');
      break;
      case 'Alamo':
        $ForesPro = '28.000';
        echo number_format($ForesPro, 2, ',', '.');
      break;
      case 'Eucalipto':
        $ForesPro = '35.000';
        echo number_format($ForesPro, 2, ',', '.');
      break;
      case 'Pino':
        $ForesPro = '27.600';
        echo number_format($ForesPro, 2, ',', '.');
      break;
      case 'Sauce':
        $ForesPro = '42.000';
        echo number_format($ForesPro, 2, ',', '.');
      break;
    }
    }else {
      $ForesPro = "";
      echo $ForesPro;
    }
  return $ForesPro;
}

//FUNCION TotalFrutales ES LA FUNCION PARA HACER LA MULTIPLICACION (2X3X4) O (2X3X5) O (2X3X6)
//COMO ES EL MISMO CALCULO QUE HAY QUE HACER EN OLIVOS, USE LA MISMA FUNCION
function TotalFrutales($hect,$area,$ca,$est,$pre,$pro,$pos){
  if ($pre > 0) {
    $FP = $pre;
  }elseif ($pro > 0){
    $FP = $pro;
  }elseif ($pos > 0){
    $FP = $pos;
  }else {
    $FP = 0;
  }
  if ($hect > 0) {
    $Total = $hect*$est*$FP;
    if ($Total > 0) {
    echo number_format($Total, 2, ',', '.');
    }else {
      echo $Total = '';
    }
  } elseif ($area > 0) {
    $Total = $area*$est*$FP;
    if ($Total > 0) {
    echo number_format($Total, 2, ',', '.');
    }else {
      echo $Total = '';
    }
  } elseif ($ca > 0) {
    $Total = $ca*$est*$FP;
    if ($Total > 0) {
    echo number_format($Total, 2, ',', '.');
    }else {
      echo $Total = '';
    }
  } else{
    echo $Total = '';
  }
  return $Total;
}

//FUNCION TotalForestales ES PARA HACER LA MULTIPLICACION DE FORESTALES
function TotalForestales($hect,$area,$ca,$est,$pre,$pro){
  if ($pre > 0) {
    $FP = $pre;
  }elseif ($pro > 0){
    $FP = $pro;
  }else {
    $FP = 0;
  }
  if ($hect > 0) {
    $Total = $hect*$est*$FP;
    if ($Total > 0) {
    echo number_format($Total, 2, ',', '.');
    }else {
      echo $Total = '';
    }
  } elseif ($area > 0) {
    $Total = $area*$est*$FP;
    if ($Total > 0) {
    echo number_format($Total, 2, ',', '.');
    }else {
    echo $Total = '';
    }
  } elseif ($ca > 0) {
    $Total = $ca*$est*$FP;
    if ($Total > 0) {
    echo number_format($Total, 2, ',', '.');
    }else {
    echo $Total = '';
    }
  } else{
    echo $Total = '';
  }
  return $Total;
}

//ESTA FUNCION ES PARA MOSTRAR EL ESTADO SEGUN LA NUMERACION
function Estado($estado){
  if (isset($estado)) {
    switch ($estado) {
      case 1:
        echo "B";
      break;
      case 0.60:
        echo "R";
      break;
      case 0.30:
        echo "M";
      break;
    }
  }else {
    echo "";
  }
}

//ESTA FUNCION ES PARA HACER LA SUMA TOTAL DE LOS INCISO
function Sumar($uno,$dos,$tres,$cuatro,$cinco,$seis,$siete,$ocho,$nueve){
  $resulArray = 0;
  $array = array($uno,$dos,$tres,$cuatro,$cinco,$seis,$siete,$ocho,$nueve);
  for ($i = 0; $i < count($array); $i++) {
    $resulArray = $resulArray + floatval($array[$i]);
  }
  if ($resulArray > 0) {
  //  echo $result = number_format($resulArray, 2, ',', '.');
  $result = $resulArray;
  }else {
    echo $result = '';
  }

  return $result;
}


?>
