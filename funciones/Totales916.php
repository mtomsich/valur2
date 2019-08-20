<?php 
	$Totales[0] = contarFila($elementos,"A",$cantidadesA,0); //La posicion 0 es el total de la fila A
	$Totales[1] = contarFila($elementos,"B",$cantidadesB,0); //La posicion 0 es el total de la fila B
	$Totales[2] = contarFila($elementos,"C",$cantidadesC,0); //La posicion 0 es el total de la fila C
	$Total=0;
	for ($i=0; $i <sizeof($Totales) ; $i++) { 
		$Total=$Total+$Totales[$i];
	}
	 $ValorBasicoA= ValorUnitario("A","916");
	 $ValorBasicoB= ValorUnitario("B","916");
	 $ValorBasicoC= ValorUnitario("C","916");
	 $ValorBasicoTotal=$ValorBasicoA*$Totales[0]+
					  $ValorBasicoB*$Totales[1]+
					  $ValorBasicoC*$Totales[2];
	if ($Total==0) {
		$ValorUnitarioTotal=0;
	}else{
		$ValorUnitarioTotal=$ValorBasicoTotal/$Total;
	}
	
?>