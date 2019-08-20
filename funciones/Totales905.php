<?php 
	$Totales[0] = contarFila($elementos,"B",$cantidadesB,0); //La posicion 0 es el total de la fila B
	$Totales[1] = contarFila($elementos,"C",$cantidadesC,0); //La posicion 0 es el total de la fila C
	$Totales[2] = contarFila($elementos,"D",$cantidadesD,0); //La posicion 0 es el total de la fila D
	$Totales[3] = contarFila($elementos,"E",$cantidadesE,0); //La posicion 0 es el total de la fila E
	$Total=0;
	for ($i=0; $i <sizeof($Totales) ; $i++) { 
		$Total=$Total+$Totales[$i];
	}
	 $ValorBasicoB= ValorUnitario("B","905");//Se debe arreglar la base de datos puesto que el form905 no tiene clase A, empieza en la B y 	
	 $ValorBasicoC= ValorUnitario("C","905");//termina en la E
	 $ValorBasicoD= ValorUnitario("D","905");
	 $ValorBasicoE= ValorUnitario("E","905");
	 $ValorBasicoTotal=$ValorBasicoB*$Totales[0]+
					  $ValorBasicoC*$Totales[1]+
					  $ValorBasicoD*$Totales[2]+
					  $ValorBasicoE*$Totales[3];
	if ($Total==0) {
		$ValorUnitarioTotal=0;
	}else{
		$ValorUnitarioTotal=$ValorBasicoTotal/$Total;
	}
?>