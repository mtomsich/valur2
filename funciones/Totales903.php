<?php 
	$Totales[0] = contarFila($elementos,"A",$cantidadesA,0); //La posicion 0 es el total de la fila A
	$Totales[1] = contarFila($elementos,"B",$cantidadesB,0); //La posicion 0 es el total de la fila B
	$Totales[2] = contarFila($elementos,"C",$cantidadesC,0); //La posicion 0 es el total de la fila C
	$Totales[3] = contarFila($elementos,"D",$cantidadesD,0); //La posicion 0 es el total de la fila D
	$Totales[4] = contarFila($elementos,"E",$cantidadesE,0); //La posicion 0 es el total de la fila E
	$Total=0;
	for ($i=0; $i <sizeof($Totales) ; $i++) { 
		$Total=$Total+$Totales[$i];
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
	if ($Total==0) {
		$ValorUnitarioTotal=0;
	}else{
		$ValorUnitarioTotal=$ValorBasicoTotal/$Total;
	}
?>