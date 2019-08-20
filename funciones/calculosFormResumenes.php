<?php
include ("sql/consultas.php");
include ("funciones/calculosrub2.php");
include ("funciones/valores901.php");


function ValorUnitario($categoria,$formulario){
  global $conexion;
  $VU=mysqli_query($conexion,"SELECT * FROM `valoredificio` WHERE`codForm`='".$formulario."' AND `categoria`='".$categoria."'");
  $ValorUnitario=mysqli_fetch_array($VU);
  return $ValorUnitario['valorCat'];
}

function CalcularValorEstado($elementos,$ValEstado,$Formulario,$y){
  $TotalEstado=0;
  //conteo de los puntos del estado de conservacion
  for ($i=0; $i < sizeof($elementos) ; $i++) {
    if ($elementos[$i]=="Insta" && ($Formulario==903) || ($Formulario==904)) {
      switch ($y['InstEstado']) {
         case "Bueno":
            $TotalEstado = $TotalEstado + $ValEstado[$i][0];
          break;
        case "Regular":
            $TotalEstado = $TotalEstado + $ValEstado[$i][1];
          break;
        case "Malo":
            $TotalEstado = $TotalEstado + $ValEstado[$i][2];
          break;
        default:

          break;
      }
    }elseif ($elementos[$i]=="Reves" && ( $Formulario==906)) {
      switch ($y['ReveEstado']) {
         case "Bueno":
            $TotalEstado = $TotalEstado + $ValEstado[$i][0];
          break;
        case "Regular":
            $TotalEstado = $TotalEstado + $ValEstado[$i][1];
          break;
        case "Malo":
            $TotalEstado = $TotalEstado + $ValEstado[$i][2];
          break;
        default:

          break;
      }
    }else{
      switch ($y[$elementos[$i]."Estado"]) {
        case "Bueno":
            $TotalEstado = $TotalEstado + $ValEstado[$i][0];
          break;
        case "Regular":
            $TotalEstado = $TotalEstado + $ValEstado[$i][1];
          break;
        case "Malo":
            $TotalEstado = $TotalEstado + $ValEstado[$i][2];
          break;
        default:

        break;
      }
    }
  }
  return $TotalEstado;
}
function estado($dato) {
  if($dato>79) {
    echo 'B';
  }	else if (($dato >= 50) and ($dato <= 79)) {
      echo 'R';
    } else if ($dato <= 49) {
        echo 'M';
      }
  return $dato;
}
function pileA($pile,$cant) {
  if ($pile == 'A') {
    echo $cant;
  }
  return $cant;
}
function pileB($pile,$cant) {
  if ($pile == 'B') {
    echo $cant;
  }
  return $cant;
}
function pileC($pile,$cant) {
  if ($pile == 'C') {
    echo $cant;
  }
  return $cant;
}

function checkbox($a) {
  if($a==1){
    echo 'SI';
  } else {
      echo 'NO';
  }
  return $a;
}
switch ($TipoDeCedula) {
  case '1': $rowCedu=mysqli_fetch_array(mysqli_query($conexion, "SELECT `anioImp` FROM `cedula10707` WHERE `idCedula707` = $Cedula")); break;
  case '2': $rowCedu=mysqli_fetch_array(mysqli_query($conexion, "SELECT `anioImp` FROM `cedulaph` WHERE `idCedulaPH` = $Cedula"));  break;
  case '3': $rowCedu=mysqli_fetch_array(mysqli_query($conexion, "SELECT `anioImp` FROM `cedulade` WHERE `idCedulaDE` = $Cedula"));break;
}
$añoTabla= $rowCedu['anioImp'];
$a=0;$b=0;$c=0;$d=0;$e=0;$f=0;$edificio=0;$SupCub=0;$SupSemicub=0;$z=0;$detalleConc="";

//RECORRE LOS FORMULARIOS 903
$vector903 = []; $z = 0;
$query = "SELECT * FROM cedulaformularios WHERE (idCedula='$Cedula') and (tipoCedula='$TipoDeCedula') and (nroFormulario='903')";
$result = mysqli_query($conexion, $query);
if (mysqli_num_rows($result) > 0) {
    while($fila = mysqli_fetch_assoc($result)){
      $vector903[$fila['idCedulaFormularios']] = $fila['version'];
    }
}
//ORDENA LOS FORMULARIOS 903 POR VERSION
asort($vector903);
for ($i=0; $i < count($vector903) ; $i++) {
  $z = $z+1;
  ${'idced'.$z} = key($vector903);
  next($vector903);
}


//RECORRE LOS FORMULARIOS 904
$vector904 = [];
$query = "SELECT * FROM cedulaformularios WHERE (idCedula='$Cedula') and (tipoCedula='$TipoDeCedula') and (nroFormulario='904')";
$result = mysqli_query($conexion, $query);
if (mysqli_num_rows($result) > 0) {
    while($fila = mysqli_fetch_assoc($result)){
      $vector904[$fila['idCedulaFormularios']] = $fila['version'];
    }
}
//ORDENA LOS FORMULARIOS 904 POR VERSION
asort($vector904);
for ($i=0; $i < count($vector904) ; $i++) {
  $z = $z+1;
  ${'idced'.$z} = key($vector904);
  next($vector904);
}


//RECORRE LOS FORMULARIOS 905
$vector905 = [];
$query = "SELECT * FROM cedulaformularios WHERE (idCedula='$Cedula') and (tipoCedula='$TipoDeCedula') and (nroFormulario='905')";
$result = mysqli_query($conexion, $query);
if (mysqli_num_rows($result) > 0) {
    while($fila = mysqli_fetch_assoc($result)){
      $vector905[$fila['idCedulaFormularios']] = $fila['version'];
    }
}
//ORDENA LOS FORMULARIOS 905 POR VERSION
asort($vector905);
for ($i=0; $i < count($vector905) ; $i++) {
  $z = $z+1;
  ${'idced'.$z} = key($vector905);
  next($vector905);
}


//RECORRE LOS FORMULARIOS 906
$vector906 = array();
$query = "SELECT * FROM cedulaformularios WHERE (idCedula='$Cedula') and (tipoCedula='$TipoDeCedula') and (nroFormulario='906')";
$result = mysqli_query($conexion, $query);
if (mysqli_num_rows($result) > 0) {
    while($fila = mysqli_fetch_assoc($result)){
      $vector906[$fila['idCedulaFormularios']] = $fila['version'];
    }
}
//ORDENA LOS FORMULARIOS 906 POR VERSION
asort($vector906);
for ($i=0; $i < count($vector906) ; $i++) {
  $z = $z+1;
  ${'idced'.$z} = key($vector906);
  next($vector906);
}


//RECORRE LOS FORMULARIOS 916
$vector916 = array();
$query = "SELECT * FROM cedulaformularios WHERE (idCedula='$Cedula') and (tipoCedula='$TipoDeCedula') and (nroFormulario='916')";
$result = mysqli_query($conexion, $query);
if (mysqli_num_rows($result) > 0) {
    while($fila = mysqli_fetch_assoc($result)){
      $vector916[$fila['idCedulaFormularios']] = $fila['version'];
    }
}
//ORDENA LOS FORMULARIOS 916 POR VERSION
asort($vector916);
for ($i=0; $i < count($vector916) ; $i++) {
  $z = $z+1;
  ${'idced'.$z} = key($vector916);
  next($vector916);
}


//RECORRE TODOS LOS FORMULARIOS PARA LUEGO IMPRIMIRLOS
for ($i=1; $i <= $z; $i++) {
  $y = ${'idced'.$i};
  $rowRub5 = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedulaformularios WHERE (idCedulaFormularios=$y) and (idCedula='$Cedula')"));
  $row903 = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedulaformularios o, form903 f WHERE
    (idCedulaFormularios=$y) and (o.idCedula='$Cedula') and (o.codForm=f.codForm3)"));
  $row904 = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedulaformularios o, form904 a WHERE
    (idCedulaFormularios=$y) and (o.idCedula='$Cedula') and (o.codForm=a.codForm904)"));
  $row905 = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedulaformularios o, form905 p WHERE
    (idCedulaFormularios=$y) and (o.idCedula='$Cedula') and (o.codForm=p.codForm905)"));
  $row906 = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedulaformularios o, form906 d WHERE
    (idCedulaFormularios=$y) and (o.idCedula='$Cedula') and (o.codForm=d.codForm906)"));
  $row916 = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedulaformularios o, form916 e WHERE
    (idCedulaFormularios=$y) and (o.idCedula='$Cedula') and (o.codForm=e.codForm916)"));

  if (isset($rowRub5['nroFormulario'])){
    switch ($rowRub5['nroFormulario']) {
        case '903':
            $a=$a+1;
            $b=$b+1;
            $detalleConc .= "903/".$b." ";
            ${'formulario'.$a} = $rowRub5['nroFormulario'].'-'.$b;
            ${'datare'.$a} = $row903['Dia1'];
            ${'data'.$a} = $row903['Dia'];
            ${'cubierta'.$a} = round($row903['SupCub']);
            ${'semicub'.$a} = round($row903['SupSemi']);
            $SupCub= $SupCub+${'cubierta'.$a};
            $SupSemicub= $SupSemicub+${'semicub'.$a};
            ${'totalmejoras'.$a}= "";
            ${'heladera'.$a} = $row903['Heladeras'];
            ${'aire'.$a} = $row903['Aire'];
            ${'calefaccion'.$a} = $row903['Calefacion'];
            ${'losa'.$a} = $row903['Losa'];
            ${'horno'.$a} = $row903['Horno'];
            ${'agua'.$a} = $row903['Agua'];
            ${'bano1'.$a} = $row903['Bano1'];
            ${'bano2'.$a} = $row903['Bano2'];
            ${'pileta'.$a} = $row903['Pileta'];
            ${'piletaCant'.$a} = $row903['PiletaCant'];
            ${'ascensores1'.$a} = $row903['Ascensores1'];
            ${'ascensores2'.$a} = $row903['Ascensores2'];
            ${'ascensoresCant1'.$a} = $row903['AscensoresCant1'];
            ${'ascensoresCant2'.$a} = $row903['AscensoresCant2'];
            $y=$row903;
            $Totales[0] = contarFila($elementos903,"A",$cantidadesA903,0); //La posicion 0 es el total de la fila A
            ${'totalA'.$a} = $Totales[0];
            $Totales[1] = contarFila($elementos903,"B",$cantidadesB903,0); //La posicion 0 es el total de la fila B
            ${'totalB'.$a} = $Totales[1];
            $Totales[2] = contarFila($elementos903,"C",$cantidadesC903,0); //La posicion 0 es el total de la fila C
            ${'totalC'.$a} = $Totales[2];
            $Totales[3] = contarFila($elementos903,"D",$cantidadesD903,0); //La posicion 0 es el total de la fila D
            ${'totalD'.$a} = $Totales[3];
            $Totales[4] = contarFila($elementos903,"E",$cantidadesE903,0); //La posicion 0 es el total de la fila E
            ${'totalE'.$a} = $Totales[4];
            ${'totaledificio'.$a} = ${'totalA'.$a}+${'totalB'.$a}+${'totalC'.$a}+${'totalD'.$a}+${'totalE'.$a};
            $TipoCategoria= array(${'totalE'.$a},${'totalD'.$a},${'totalC'.$a},${'totalB'.$a},${'totalA'.$a});
            $max= max($TipoCategoria);
            for ($j = 4; $j >= 0; $j--) {
              if ($TipoCategoria[$j] === $max){
                $nroCategoria = $j;
              }
            }
            switch ($nroCategoria) {
              case '0': $Categoria='E';
                break;
              case '1': $Categoria='D';
                break;
              case '2': $Categoria='C';
                break;
              case '3': $Categoria='B';
                break;
              case '4': $Categoria='A';
                break;
            }
            ${'Estado'.$a} = $row903['Estado'];
            $Estado = ${'Estado'.$a};
            ${'valorEstado'.$a} = CalcularValorEstado($elementos903,$ValEstado903,$rowRub5['nroFormulario'],$row903);
            if ($row903['Data']==0) {
            		$Ant=$añoTabla-$row903['Data1'];
            	}
            	else{
            		$Ant=$añoTabla-$row903['Data'];
            	}
            	if ($Ant>=100) {
                $coef=mysqli_query($conexion,"SELECT `coef` FROM `coefdepreciacion` WHERE `antiguedad`='100' AND `categoria`='".$Categoria."' AND`estCon`='".$Estado."'");
            		$Fcoef=mysqli_fetch_array($coef);
            	}elseif (($Ant == 0) || ($Ant < 0)){
                $coef=mysqli_query($conexion,"SELECT MAX(`coef`) FROM `coefdepreciacion`");
            		$Fcoef=mysqli_fetch_array($coef);
              } else {
            		  $coef=mysqli_query($conexion,"SELECT `coef` FROM `coefdepreciacion` WHERE `antiguedad`='".$Ant."' AND `categoria`='".$Categoria."' AND`estCon`='".$Estado."'");
            		  $Fcoef=mysqli_fetch_array($coef);
            	}
          	$ValorBasicoA= ValorUnitario("A","903");
          	$ValorBasicoB= ValorUnitario("B","903");
          	$ValorBasicoC= ValorUnitario("C","903");
          	$ValorBasicoD= ValorUnitario("D","903");
          	$ValorBasicoE= ValorUnitario("E","903");
          	$ValorBasicoTotal=$ValorBasicoA*$Totales[0]+
          					  $ValorBasicoB*$Totales[1]+
          					  $ValorBasicoC*$Totales[2]+
          					  $ValorBasicoD*$Totales[3]+
          					  $ValorBasicoE*$Totales[4];
            if (${'totaledificio'.$a} != 0){
              if (((${'totalD'.$a} >= ${'totalA'.$a}) && (${'totalD'.$a} >= ${'totalB'.$a}) && (${'totalD'.$a} >= ${'totalC'.$a})) || ((${'totalE'.$a} >= ${'totalA'.$a}) &&
              (${'totalE'.$a} >= ${'totalB'.$a}) && (${'totalE'.$a} >= ${'totalC'.$a}))){
                $ValorBasicoCubierta = (($ValorBasicoTotal/${'totaledificio'.$a})*${'cubierta'.$a})*$Fcoef[0];
                $ValorBasicoSemicubierta = (0.3*($ValorBasicoTotal/(${'totaledificio'.$a}))*${'semicub'.$a})*$Fcoef[0];
              } else {
                  $ValorBasicoCubierta = (($ValorBasicoTotal/${'totaledificio'.$a})*${'cubierta'.$a})*$Fcoef[0];
                  $ValorBasicoSemicubierta = (($ValorBasicoTotal/(${'totaledificio'.$a}*2))*${'semicub'.$a})*$Fcoef[0];
            }} else {
                $ValorBasicoCubierta = 0;
                $ValorBasicoSemicubierta = 0;
            }
            $TotalRubro5 = $ValorBasicoCubierta+$ValorBasicoSemicubierta;
            $codForm = $row903['codForm3'];
            $Hel=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub6data` WHERE `codForm`= $codForm AND `prop`= 'Hel' AND `numForm`= '903'"));
          	$Aire=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub6data` WHERE `codForm`= $codForm AND `prop`= 'Aire' AND `numForm`= '903'"));
          	$Asc1=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub6data` WHERE `codForm`= $codForm AND `prop`= 'Asc1' AND `numForm`= '903'"));
          	$Asc2=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub6data` WHERE `codForm`= $codForm AND `prop`= 'Asc2' AND `numForm`= '903'"));
          	$Calef=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub6data` WHERE `codForm`= $codForm AND `prop`= 'Calef' AND `numForm`= '903'"));
          	$Losa=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub6data` WHERE `codForm`= $codForm AND `prop`= 'Losa' AND `numForm`= '903'"));
          	$Horno=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub6data` WHERE `codForm`= $codForm AND `prop`= 'Horno' AND `numForm`= '903'"));
          	$AguaCal=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub6data` WHERE `codForm`= $codForm AND `prop`= 'AguaCal' AND `numForm`= '903'"));
          	$BaniosPri=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub6data` WHERE `codForm`= $codForm AND `prop`= 'BaniosPri' AND `numForm`= '903'"));
          	$BaniosSec=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub6data` WHERE `codForm`= $codForm AND `prop`= 'BaniosSec' AND `numForm`= '903'"));
          	$Pileta=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub6data` WHERE `codForm`= $codForm AND `prop`= 'Pileta' AND `numForm`= '903'"));
            $TotalRubro6 = $Hel['val']+$Aire['val']+$Asc1['val']+$Asc2['val']+$Calef['val']+$Losa['val']+$Horno['val']+$AguaCal['val']+$BaniosPri['val']+$BaniosSec['val']+$Pileta['val'];
            ${'TotalRubro7'.$a} = $TotalRubro5+$TotalRubro6;
            $edificio = $edificio+${'TotalRubro7'.$a};
            break;
        case '904':
            $a=$a+1;
            $c=$c+1;
            $detalleConc .= "904/".$c." ";
            ${'formulario'.$a} = $rowRub5['nroFormulario'].'-'.$c;
            $y=$row904;
            $Totales[0] = contarFila($elementos904,"A",$cantidadesA904,0); //La posicion 0 es el total de la fila A
            ${'totalA'.$a} = $Totales[0];
            $Totales[1] = contarFila($elementos904,"B",$cantidadesB904,0); //La posicion 0 es el total de la fila B
            ${'totalB'.$a} = $Totales[1];
            $Totales[2] = contarFila($elementos904,"C",$cantidadesC904,0); //La posicion 0 es el total de la fila C
            ${'totalC'.$a} = $Totales[2];
            $Totales[3] = contarFila($elementos904,"D",$cantidadesD904,0); //La posicion 0 es el total de la fila D
            ${'totalD'.$a} = $Totales[3];
            ${'totaledificio'.$a} = ${'totalA'.$a}+${'totalB'.$a}+${'totalC'.$a}+${'totalD'.$a};
            ${'totalmejoras'.$a} = "";
            ${'datare'.$a} = $row904['Dia1'];
            ${'data'.$a} = $row904['Dia'];
            ${'cubierta'.$a} = round($row904['Cubierta']);
            ${'semicub'.$a} = round($row904['Semicubierta']);
            $SupCub= $SupCub+${'cubierta'.$a};
            $SupSemicub= $SupSemicub+${'semicub'.$a};
            ${'aire'.$a} = $row904['Aire'];
            ${'ascensoresCant1'.$a} = $row904['AscensoresCant1'];
            ${'ascensoresCant2'.$a} = $row904['AscensoresCant2'];
            ${'ascensores1'.$a} = $row904['Ascensores1'];
            ${'ascensores2'.$a} = $row904['Ascensores2'];
            ${'monta11'.$a} = $row904['Monta11'];
            ${'monta22'.$a} = $row904['Monta22'];
            ${'monta1'.$a} = $row904['Monta1'];
            ${'monta2'.$a} = $row904['Monta2'];
            ${'calefaccion'.$a} = $row904['Calefacion'];
            ${'heladera'.$a} = $row904['Heladeras'];
            ${'losa'.$a} = $row904['Losa'];
            $TipoCategoria= array(${'totalD'.$a},${'totalC'.$a},${'totalB'.$a},${'totalA'.$a});
            $max= max($TipoCategoria);
            for ($j = 3; $j >= 0; $j--) {
              if ($TipoCategoria[$j] === $max){
                $nroCategoria = $j;
              }
            }
            switch ($nroCategoria) {
              case '0': $Categoria='D';
                break;
              case '1': $Categoria='C';
                break;
              case '2': $Categoria='B';
                break;
              case '3': $Categoria='A';
                break;
            }
            ${'Estado'.$a} = $row904['Estado'];
            $Estado = ${'Estado'.$a};
            ${'valorEstado'.$a} = CalcularValorEstado($elementos904,$ValEstado904,$rowRub5['nroFormulario'],$row904);
            if ($row904['Data']==0) {
            		$Ant=$añoTabla-$row904['Data1'];
            	}
            	else{
            		$Ant=$añoTabla-$row904['Data'];
            	}
            	if ($Ant>=100) {
            		$coef=mysqli_query($conexion,"SELECT MIN(`coef`) FROM `coefdepreciacion`");
            		$Fcoef=mysqli_fetch_array($coef);
              }elseif (($Ant == 0) || ($Ant < 0)){
                $coef=mysqli_query($conexion,"SELECT MAX(`coef`) FROM `coefdepreciacion`");
                $Fcoef=mysqli_fetch_array($coef);
            	}else{
            		$coef=mysqli_query($conexion,"SELECT `coef` FROM `coefdepreciacion` WHERE `antiguedad`='".$Ant."' AND `categoria`='".$Categoria."' AND`estCon`='".$Estado."'");
            		$Fcoef=mysqli_fetch_array($coef);
            	}
            $ValorBasicoA= ValorUnitario("A","904");
          	$ValorBasicoB= ValorUnitario("B","904");
          	$ValorBasicoC= ValorUnitario("C","904");
          	$ValorBasicoD= ValorUnitario("D","904");
          	$ValorBasicoTotal=$ValorBasicoA*$Totales[0]+
          					  $ValorBasicoB*$Totales[1]+
          					  $ValorBasicoC*$Totales[2]+
          					  $ValorBasicoD*$Totales[3];
            if (${'totaledificio'.$a} != 0){
              $ValorBasicoCubierta = (($ValorBasicoTotal/${'totaledificio'.$a})*${'cubierta'.$a})*$Fcoef[0];
            } else {
                $ValorBasicoCubierta = 0;
            }
            $TotalRubro5 = $ValorBasicoCubierta;
            $codForm = $row904['codForm904'];
            $Hel=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub6data` WHERE `codForm`= $codForm AND `prop`= 'Hel' AND `numForm`= '904'"));
          	$Aire=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub6data` WHERE `codForm`= $codForm AND `prop`= 'Aire' AND `numForm`= '904'"));
          	$Asc1=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub6data` WHERE `codForm`= $codForm AND `prop`= 'Asc1' AND `numForm`= '904'"));
          	$Asc2=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub6data` WHERE `codForm`= $codForm AND `prop`= 'Asc2' AND `numForm`= '904'"));
          	$Calef=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub6data` WHERE `codForm`= $codForm AND `prop`= 'Calef' AND `numForm`= '904'"));
          	$Losa=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub6data` WHERE `codForm`= $codForm AND `prop`= 'Losa' AND `numForm`= '904'"));
            $Monta1=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub6data` WHERE `codForm`= $codForm AND `prop`= 'Monta1' AND `numForm`= '904'"));
            $Monta2=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub6data` WHERE `codForm`= $codForm AND `prop`= 'Monta2' AND `numForm`= '904'"));
            $TotalRubro6 = $Hel['val']+$Aire['val']+$Asc1['val']+$Asc2['val']+$Calef['val']+$Losa['val']+$Monta1['val']+$Monta2['val'];
            ${'TotalRubro7'.$a} = $TotalRubro5+$TotalRubro6;
            $edificio = $edificio+${'TotalRubro7'.$a};
            break;
        case '905':
            $a=$a+1;
            $d=$d+1;
            $detalleConc .= "905/".$d." ";
            ${'formulario'.$a} = $rowRub5['nroFormulario'].'-'.$d;
            $y=$row905;
            $Totales[0] = contarFila($elementos905,"B",$cantidadesB905,0); //La posicion 0 es el total de la fila B
            ${'totalB'.$a} = $Totales[0];
            $Totales[1] = contarFila($elementos905,"C",$cantidadesC905,0); //La posicion 0 es el total de la fila C
            ${'totalC'.$a} = $Totales[1];
            $Totales[2] = contarFila($elementos905,"D",$cantidadesD905,0); //La posicion 0 es el total de la fila D
            ${'totalD'.$a} = $Totales[2];
            $Totales[3] = contarFila($elementos905,"E",$cantidadesE905,0); //La posicion 0 es el total de la fila E
            ${'totalE'.$a} = $Totales[3];
            ${'totaledificio'.$a} = ${'totalB'.$a}+${'totalC'.$a}+${'totalD'.$a}+${'totalE'.$a};
            ${'totalmejoras'.$a} = "";
            ${'camara'.$a} = $row905['Avicola'];
            ${'monta11'.$a} = $row905['Monta11'];
            ${'monta22'.$a} = $row905['Monta22'];
            ${'monta1'.$a} = $row905['Monta1'];
            ${'monta2'.$a} = $row905['Monta2'];
            ${'incendio'.$a} = $row905['Incendio'];
            ${'ascensoresCant1'.$a} = $row905['Ascensores11'];
            ${'ascensoresCant2'.$a} = $row905['Ascensores22'];
            ${'ascensores2'.$a} = $row905['Ascensores2'];
            ${'ascensores1'.$a} = $row905['Ascensores1'];
            ${'datare'.$a} = $row905['Dia1'];
            ${'data'.$a} = $row905['Dia'];
            ${'cubierta'.$a} = round($row905['Cubierta']);
            ${'semicub'.$a} = round($row905['Semicubierta']);
            $SupCub= $SupCub+${'cubierta'.$a};
            $SupSemicub= $SupSemicub+${'semicub'.$a};
            $TipoCategoria= array(${'totalE'.$a},${'totalD'.$a},${'totalC'.$a},${'totalB'.$a});
            $max= max($TipoCategoria);
            for ($j = 3; $j >= 0; $j--) {
              if ($TipoCategoria[$j] === $max){
                $nroCategoria = $j;
              }
            }
            switch ($nroCategoria) {
              case '0': $Categoria='E';
                break;
              case '1': $Categoria='D';
                break;
              case '2': $Categoria='C';
                break;
              case '3': $Categoria='B';
                break;
            }
            ${'Estado'.$a} = $row905['Estado'];
            $Estado = ${'Estado'.$a};
            ${'valorEstado'.$a} = CalcularValorEstado($elementos905,$ValEstado905,$rowRub5['nroFormulario'],$row905);
            if ($row905['Data']==0) {
            		$Ant=$añoTabla-$row905['Data1'];
            	}
            	else{
            		$Ant=$añoTabla-$row905['Data'];
            	}
            	if ($Ant>=100) {
            		$coef=mysqli_query($conexion,"SELECT MIN(`coef`) FROM `coefdepreciacion`");
            		$Fcoef=mysqli_fetch_array($coef);
              }elseif (($Ant == 0) || ($Ant < 0)){
                $coef=mysqli_query($conexion,"SELECT MAX(`coef`) FROM `coefdepreciacion`");
                $Fcoef=mysqli_fetch_array($coef);
            	}else{
            		$coef=mysqli_query($conexion,"SELECT `coef` FROM `coefdepreciacion` WHERE `antiguedad`='".$Ant."' AND `categoria`='".$Categoria."' AND`estCon`='".$Estado."'");
            		$Fcoef=mysqli_fetch_array($coef);
            	}
          	$ValorBasicoB= ValorUnitario("B","905");
          	$ValorBasicoC= ValorUnitario("C","905");
          	$ValorBasicoD= ValorUnitario("D","905");
            $ValorBasicoE= ValorUnitario("E","905");
          	$ValorBasicoTotal= $ValorBasicoB*$Totales[0]+
          					  $ValorBasicoC*$Totales[1]+
          					  $ValorBasicoD*$Totales[2]+
                      $ValorBasicoE*$Totales[3];
            if (${'totaledificio'.$a} != 0){
              $ValorBasicoCubierta = (($ValorBasicoTotal/${'totaledificio'.$a})*${'cubierta'.$a})*$Fcoef[0];
            } else {
                $ValorBasicoCubierta = 0;
            }
            $TotalRubro5 = $ValorBasicoCubierta;
            $codForm = $row905['codForm905'];
            $Frigo=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub6data` WHERE `codForm`= $codForm AND `prop`= 'Frigo' AND `numForm`= '905'"));
          	$Monta1=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub6data` WHERE `codForm`= $codForm AND `prop`= 'Monta1' AND `numForm`= '905'"));
          	$Monta2=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub6data` WHERE `codForm`= $codForm AND `prop`= 'Monta2' AND `numForm`= '905'"));
          	$Incen=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub6data` WHERE `codForm`= $codForm AND `prop`= 'Incen' AND `numForm`= '905'"));
          	$Asc1=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub6data` WHERE `codForm`= $codForm AND `prop`= 'Asc1' AND `numForm`= '905'"));
          	$Asc2=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub6data` WHERE `codForm`= $codForm AND `prop`= 'Asc2' AND `numForm`= '905'"));
            $TotalRubro6 = $Frigo['val']+$Monta1['val']+$Monta2['val']+$Incen['val']+$Asc1['val']+$Asc2['val'];
            ${'TotalRubro7'.$a} = $TotalRubro5+$TotalRubro6;
            $edificio = $edificio+${'TotalRubro7'.$a};
            ${'tancant1'.$a} = $row905['TanquesCant1'];
            ${'tancant2'.$a} = $row905['TanquesCant2'];
            ${'tancant3'.$a} = $row905['TanquesCant3'];
            ${'pavrig'.$a} = $row905['Pavimento1'];
            ${'pavflex'.$a} = $row905['Pavimento2'];
            ${'silos1'.$a} = $row905['Silo1'];
            ${'silos2'.$a} = $row905['Silo2'];
            ${'silos3'.$a} = $row905['Silo3'];
            break;
        case '906':
            $a=$a+1;
            $e=$e+1;
            $detalleConc .= "906/".$e." ";
            ${'formulario'.$a} = $rowRub5['nroFormulario'].'-'.$e;
            $y=$row906;
            $Totales[0] = contarFila($elementos906,"A",$cantidadesA906,0); //La posicion 0 es el total de la fila A
            ${'totalA'.$a} = $Totales[0];
            $Totales[1] = contarFila($elementos906,"B",$cantidadesB906,0); //La posicion 0 es el total de la fila B
            ${'totalB'.$a} = $Totales[1];
            $Totales[2] = contarFila($elementos906,"C",$cantidadesC906,0); //La posicion 0 es el total de la fila C
            ${'totalC'.$a} = $Totales[2];
            ${'totaledificio'.$a} = ${'totalA'.$a}+${'totalB'.$a}+${'totalC'.$a};
            ${'totalmejoras'.$a} = "";
            ${'datare'.$a} = $row906['Dia1'];
            ${'data'.$a} = $row906['Dia'];
            ${'cubierta'.$a} = round($row906['Cubierta']);
            ${'semicub'.$a} = round($row906['Semicubierta']);
            $SupCub= $SupCub+${'cubierta'.$a};
            $SupSemicub= $SupSemicub+${'semicub'.$a};
            ${'aire'.$a} = $row906['Aire'];
            ${'calefaccion'.$a} = $row906['Calefacion'];
            ${'incendio'.$a} = $row906['Incendio'];
            ${'losa'.$a} = $row906['Losa'];
            $TipoCategoria= array(${'totalC'.$a},${'totalB'.$a},${'totalA'.$a});
            $max= max($TipoCategoria);
            for ($j = 2; $j >= 0; $j--) {
              if ($TipoCategoria[$j] === $max){
                $nroCategoria = $j;
              }
            }
            switch ($nroCategoria) {
              case '0': $Categoria='C';
                break;
              case '1': $Categoria='B';
                break;
              case '2': $Categoria='A';
                break;
            }
            ${'Estado'.$a} = $row906['Estado'];
            $Estado = ${'Estado'.$a};
            ${'valorEstado'.$a} = CalcularValorEstado($elementos906,$ValEstado906,$rowRub5['nroFormulario'],$row906);
            if ($row906['Data']==0) {
            		$Ant=$añoTabla-$row906['Data1'];
            	}
            	else{
            		$Ant=$añoTabla-$row906['Data'];
            	}
            	if ($Ant>=100) {
            		$coef=mysqli_query($conexion,"SELECT MIN(`coef`) FROM `coefdepreciacion`");
            		$Fcoef=mysqli_fetch_array($coef);
              }elseif (($Ant == 0) || ($Ant < 0)){
                $coef=mysqli_query($conexion,"SELECT MAX(`coef`) FROM `coefdepreciacion`");
                $Fcoef=mysqli_fetch_array($coef);
            	}else{
            		$coef=mysqli_query($conexion,"SELECT `coef` FROM `coefdepreciacion` WHERE `antiguedad`='".$Ant."' AND `categoria`='".$Categoria."' AND`estCon`='".$Estado."'");
            		$Fcoef=mysqli_fetch_array($coef);
            	}
            $ValorBasicoA= ValorUnitario("A","906");
            $ValorBasicoB= ValorUnitario("B","906");
          	$ValorBasicoC= ValorUnitario("C","906");
          	$ValorBasicoTotal= $ValorBasicoA*$Totales[0]+
          					  $ValorBasicoB*$Totales[1]+
          					  $ValorBasicoC*$Totales[2];
            if (${'totaledificio'.$a} != 0){
              $ValorBasicoCubierta = (($ValorBasicoTotal/${'totaledificio'.$a})*${'cubierta'.$a})*$Fcoef[0];
            } else {
                $ValorBasicoCubierta = 0;
            }
            $TotalRubro5 = $ValorBasicoCubierta;
            $codForm = $row906['codForm906'];
            $Aire=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub6data` WHERE `codForm`= $codForm AND `prop`= 'Aire' AND `numForm`= '906'"));
          	$Calef=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub6data` WHERE `codForm`= $codForm AND `prop`= 'Calef' AND `numForm`= '906'"));
          	$Losa=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub6data` WHERE `codForm`= $codForm AND `prop`= 'Losa' AND `numForm`= '906'"));
          	$Incen=mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `rub6data` WHERE `codForm`= $codForm AND `prop`= 'Incen' AND `numForm`= '906'"));
            $TotalRubro6 = $Aire['val']+$Calef['val']+$Losa['val']+$Incen['val'];
            ${'TotalRubro7'.$a} = $TotalRubro5+$TotalRubro6;
            $edificio = $edificio+${'TotalRubro7'.$a};
            break;
        case '916':
            $a=$a+1;
            $f=$f+1;
            $detalleConc .= "916/".$f." ";
            ${'formulario'.$a} = $rowRub5['nroFormulario'].'-'.$f;
            $y=$row916;
            $Totales[0] = contarFila($elementos916,"A",$cantidadesA916,0); //La posicion 0 es el total de la fila A
            ${'totalA'.$a} = $Totales[0];
            $Totales[1] = contarFila($elementos916,"B",$cantidadesB916,0); //La posicion 0 es el total de la fila B
            ${'totalB'.$a} = $Totales[1];
            $Totales[2] = contarFila($elementos916,"C",$cantidadesC916,0); //La posicion 0 es el total de la fila C
            ${'totalC'.$a} = $Totales[2];
            ${'totaledificio'.$a} = ${'totalA'.$a}+${'totalB'.$a}+${'totalC'.$a};
            $TipoCategoria= array(${'totalC'.$a},${'totalB'.$a},${'totalA'.$a});
            $max= max($TipoCategoria);
            for ($j = 2; $j >= 0; $j--) {
              if ($TipoCategoria[$j] === $max){
                $nroCategoria = $j;
              }
            }
            switch ($nroCategoria) {
              case '0': $Categoria='C';
                break;
              case '1': $Categoria='B';
                break;
              case '2': $Categoria='A';
                break;
            }
            ${'Estado'.$a} = $row916['Estado'];
            $Estado = ${'Estado'.$a};
            ${'valorEstado'.$a} = CalcularValorEstado($elementos916,$ValEstado916,$rowRub5['nroFormulario'],$row916);
            if ($row916['Data']==0) {
            		$Ant=$añoTabla-$row916['Data1'];
            	}
            	else{
            		$Ant=$añoTabla-$row916['Data'];
            	}
            	if ($Ant>=100) {
            		$coef=mysqli_query($conexion,"SELECT MIN(`coef`) FROM `coefdepreciacion`");
            		$Fcoef=mysqli_fetch_array($coef);
              }elseif (($Ant == 0) || ($Ant < 0)){
                $coef=mysqli_query($conexion,"SELECT MAX(`coef`) FROM `coefdepreciacion`");
                $Fcoef=mysqli_fetch_array($coef);
            	}else{
            		$coef=mysqli_query($conexion,"SELECT `coef` FROM `coefdepreciacion` WHERE `antiguedad`='".$Ant."' AND `categoria`='".$Categoria."' AND`estCon`='".$Estado."'");
            		$Fcoef=mysqli_fetch_array($coef);
            	}
            ${'totalmejoras'.$a} = "";
            ${'datare'.$a} = $row916['Dia1'];
            ${'data'.$a} = $row916['Dia'];
            ${'cubierta'.$a} = round($row916['Cubierta']);
            $SupCub= $SupCub+${'cubierta'.$a};
            $ValorBasicoA= ValorUnitario("A","916");
            $ValorBasicoB= ValorUnitario("B","916");
          	$ValorBasicoC= ValorUnitario("C","916");
          	$ValorBasicoTotal= $ValorBasicoA*$Totales[0]+
          					  $ValorBasicoB*$Totales[1]+
          					  $ValorBasicoC*$Totales[2];
            if (${'totaledificio'.$a} != 0){
              $ValorBasicoCubierta = (($ValorBasicoTotal/${'totaledificio'.$a})*${'cubierta'.$a})*$Fcoef[0];
            } else {
                $ValorBasicoCubierta = 0;
            }
            ${'TotalRubro7'.$a} = $ValorBasicoCubierta;
            $edificio = $edificio+${'TotalRubro7'.$a};
            break;
    }
  }
}
  if (isset($Cedula)){
  $rowRub3Ce10707 = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedula10707 WHERE idCedula707='$Cedula'"));
  $obra= $rowRub3Ce10707['codObra'];
  $rowRub3Obra = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM obras WHERE codObra='$obra'"));
  //Rubro 3 Infraestructura
  $infraP = $rowRub3Obra['infraP'];
  $infraA = $rowRub3Obra['infraA'];
  $infraL = $rowRub3Obra['infraL'];
  $infraAg = $rowRub3Obra['infraAg'];
  $infraG = $rowRub3Obra['infraG'];
  $infraC = $rowRub3Obra['infraC'];
}
?>
