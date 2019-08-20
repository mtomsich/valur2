<?php
function Columna($Plant, $Val){
global $Vec;$vec = $Vec;
if (($vec[$Plant."Hect".$Val]!="0") || ($vec[$Plant."Ca".$Val]!="0") || ($vec[$Plant."Area".$Val]!="0")) {
  if ((int)$vec[$Plant."Hect".$Val] < 10) {
    $ValHect = "000".(int)$vec[$Plant."Hect".$Val];
  }elseif ($vec[$Plant."Hect".$Val] < 100) {
    $ValHect = "00".(int)$vec[$Plant."Hect".$Val];
  }elseif ($vec[$Plant."Hect".$Val] < 1000) {
    $ValHect = "0".(int)$vec[$Plant."Hect".$Val];
  }else{$ValHect=(int)$vec[$Plant."Hect".$Val];}

  if ((int)$vec[$Plant."Ca".$Val] < 10) {
    $ValCa = "0".(int)$vec[$Plant."Ca".$Val];
  }else{$ValCa =(int)$vec[$Plant."Ca".$Val];}

  if ((int)$vec[$Plant."Area".$Val] < 10) {
    $ValArea = "0".(int)$vec[$Plant."Area".$Val];
  }else{$ValArea =(int)$vec[$Plant."Area".$Val];}

  return $ValHect.".".$ValArea.$ValCa;
}
}
function ValorCol($cultivo,$Col3,$periodo,$coef,$x,$T){
global $ValTotalIncisoA;
global $ValTotalIncisoB;
global $ValTotalIncisoC;
$ValorPeriodo=0;
switch ($cultivo) {
        case "Olivo":
            if ($periodo == 1) {
           $ValorPeriodo = 76400;
        }
        if ($periodo == 2) {
           $ValorPeriodo = 833626;
        }
        if ($periodo == 3) {
           $ValorPeriodo = 277894;
        }
        break;
        case "Ciruelo":
            if ($periodo == 1) {
          $ValorPeriodo = 89701;
        }
        if ($periodo == 2) {
           $ValorPeriodo = 826818;
        }
        if ($periodo == 3) {
           $ValorPeriodo = 272920;
        }
        break;
        case "Duraznero":
            if ($periodo == 1) {
           $ValorPeriodo = 80040;
        }
        if ($periodo == 2) {
           $ValorPeriodo = 480355;
        }
        if ($periodo == 3) {
           $ValorPeriodo = 153497;
        }
        break;
        case "Limonero":
            if ($periodo == 1) {
           $ValorPeriodo = 32895;
        }
        if ($periodo == 2) {
          $ValorPeriodo = 172504;
        }
        if ($periodo == 3) {
           $ValorPeriodo = 56426;
        }
        break;
        case "Mandarino":
            if ($periodo == 1) {
           $ValorPeriodo = 32895;
        }
        if ($periodo == 2) {
           $ValorPeriodo = 172504;
        }
        if ($periodo == 3) {
           $ValorPeriodo = 56426;
        }
        break;
        case "Manzano":
            if ($periodo == 1) {
           $ValorPeriodo = 73877;
        }
        if ($periodo == 2) {
           $ValorPeriodo = 485346;
        }
        if ($periodo == 3) {
           $ValorPeriodo = 165649;
        }
        break;
        case "Naranjo":
            if ($periodo == 1) {
           $ValorPeriodo = 32895;
        }
        if ($periodo == 2) {
           $ValorPeriodo = 172504;
        }
        if ($periodo == 3) {
           $ValorPeriodo = 56426;
        }
        break;
        case "Peral":
            if ($periodo == 1) {
           $ValorPeriodo = 92319;
        }
        if ($periodo == 2) {
           $ValorPeriodo = 452267;
        }
        if ($periodo == 3) {
          $ValorPeriodo = 144219;
        }
        break;
        case "Pomelo":
            if ($periodo == 1) {
           $ValorPeriodo = 32895;
        }
        if ($periodo == 2) {
           $ValorPeriodo = 172504;
        }
        if ($periodo == 3) {
           $ValorPeriodo = 56426;
        }
        break;
        case "Vid":
            if ($periodo == 1) {
           $ValorPeriodo = 140600;
        }
        if ($periodo == 2) {
           $ValorPeriodo = 552325;
        }
        if ($periodo == 3) {
           $ValorPeriodo = 182379;
        }
        break;
        case "Acacia":
            if ($periodo == 1) {
           $ValorPeriodo = 10250;
        }
        if ($periodo == 2) {
           $ValorPeriodo = 76000;
        }
        break;
        case "Alamo":
            if ($periodo == 1) {
           $ValorPeriodo = 16250;
        }
        if ($periodo == 2) {
           $ValorPeriodo = 28000;
        }
        break;
        case "Eucalipto":
            if ($periodo == 1) {
           $ValorPeriodo = 10250;
        }
        if ($periodo == 2) {
           $ValorPeriodo = 35000;
        }
        break;
        case "Pino":
            if ($periodo == 1) {
           $ValorPeriodo = 14700;
        }
        if ($periodo == 2) {
           $ValorPeriodo = 27600;
        }
        break;
        case "Sauce":
            if ($periodo == 1) {
           $ValorPeriodo = 16500;
        }
        if ($periodo == 2) {
           $ValorPeriodo = 42000;
        }
        break;

    }
  if ($ValorPeriodo*(float)$Col3*(float)$coef != 0) {
    echo round($ValorPeriodo*(float)$Col3*(float)$coef,2);
  }
  if ($x == 1 ) {
    ${$T} += ($ValorPeriodo*(float)$Col3*(float)$coef);
  }
}
function FilaRub($estado,$coef,$cultivo,$id,$val,$total){
global $Vec;
echo ValorCol($cultivo,Columna($id,$val),$Vec[$id.'Pro'.$val],(float)$coef,1,$total);
}
echo "<div style='display:none'>";
FilaRub("Bueno","1.00","Olivo","Oli","1","ValTotalIncisoA");
FilaRub("Regular","0.60","Olivo","Oli","2","ValTotalIncisoA");
FilaRub("Malo","0.25","Olivo","Oli","3","ValTotalIncisoA");
FilaRub("Bueno","1.00","Olivo","Oli","4","ValTotalIncisoA");
FilaRub("Regular","0.60","Olivo","Oli","5","ValTotalIncisoA");
FilaRub("Malo","0.25","Olivo","Oli","6","ValTotalIncisoA");
FilaRub("Bueno","1.00","Olivo","Oli","7","ValTotalIncisoA");
FilaRub("Regular","0.60","Olivo","Oli","8","ValTotalIncisoA");
FilaRub("Malo","0.25","Olivo","Oli","9","ValTotalIncisoA");
FilaRub("Bueno","1.00",$Vec['FrutDet1'],"Fru","1","ValTotalIncisoB");
FilaRub("Regular","0.60",$Vec['FrutDet2'],"Fru","2","ValTotalIncisoB");
FilaRub("Malo","0.25",$Vec['FrutDet3'],"Fru","3","ValTotalIncisoB");
FilaRub("Bueno","1.00",$Vec['FrutDet4'],"Fru","4","ValTotalIncisoB");
FilaRub("Regular","0.60",$Vec['FrutDet5'],"Fru","5","ValTotalIncisoB");
FilaRub("Malo","0.25",$Vec['FrutDet6'],"Fru","6","ValTotalIncisoB");
FilaRub("Bueno","1.00",$Vec['FrutDet7'],"Fru","7","ValTotalIncisoB");
FilaRub("Regular","0.60",$Vec['FrutDet8'],"Fru","8","ValTotalIncisoB");
FilaRub("Malo","0.25",$Vec['FrutDet9'],"Fru","9","ValTotalIncisoB");
FilaRub("Bueno","1.00",$Vec['PlanDet1'],"Plan","1","ValTotalIncisoC");
FilaRub("Regular","0.60",$Vec['PlanDet2'],"Plan","2","ValTotalIncisoC");
FilaRub("Malo","0.25",$Vec['PlanDet3'],"Plan","3","ValTotalIncisoC");
FilaRub("Bueno","1.00",$Vec['PlanDet4'],"Plan","4","ValTotalIncisoC");
FilaRub("Regular","0.60",$Vec['PlanDet5'],"Plan","5","ValTotalIncisoC");
FilaRub("Malo","0.25",$Vec['PlanDet6'],"Plan","6","ValTotalIncisoC");
FilaRub("Bueno","1.00",$Vec['PlanDet7'],"Plan","7","ValTotalIncisoC");
FilaRub("Regular","0.60",$Vec['PlanDet8'],"Plan","8","ValTotalIncisoC");
FilaRub("Malo","0.25",$Vec['PlanDet9'],"Plan","9","ValTotalIncisoC");

echo "</div>";
?>
