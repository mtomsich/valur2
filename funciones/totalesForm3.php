<?php
	//col2- cantidad de check de cada cateroria 
	$valorCatA=2;
	$valorCatB=3;
	$valorCatC=10;
	$valorCatD=5;
	$valorCatE=6;
	
	//asigno a vector 	
	$vecValorCat['A']=$valorCatA;
	$vecValorCat['B']=$valorCatB;
	$vecValorCat['C']=$valorCatC;
	$vecValorCat['D']=$valorCatD;
	$vecValorCat['E']=$valorCatE;
	
	//ordenar vector asociativo
	$maxVal=$vecValorCat['A'];
	$maxInd='';
	foreach ($vecValorCat as $item => $value){
		if($maxVal<$value){
		$maxVal=$value;	
		$maxInd=$item ;
			}		
		}		
	
	//col3 valor basico
	$cantA=10;
	$cantB=20;
	$cantC=30;
	$cantD=40;
	$cantE=50;
	$totalcant=$cantA+$cantB+$cantC+$cantD+$cantE;	
	
	//col4 total	
	$vbA=$valorCatA*$cantA;
	$vbB=$valorCatB*$cantB;
	$vbC=$valorCatC*$cantC;
	$vbD=$valorCatD*$cantD;
	$vbE=$valorCatE*$cantE;
	$totalvb=$vbA+$vbB+$vbC+$vbD+$vbE;
	
	//col5 que pasa al rubro 5
	
	$totalvu=round($totalvb/$totalcant * 100) / 100; 
	
	//rub5 fila 7 superficie semi cubierta
	
	If (($maxInd=='A')||($maxInd=='B')||($maxInd=='C')){
		$totalvusc=$totalvu*50/100;
		}else{
		$totalvusc=$totalvu*30/100;
		}
	
	
?>