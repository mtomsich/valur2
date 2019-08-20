<?php
	//conteo de cuadros
	function contarSeccion($elem,$tipo,$cant,$total){
		global $y;
		for ($i=1; $i <= $cant ; $i++) {
			//echo $elem.$tipo.$i;
			//echo "<br>";
			if ($y[$elem.$tipo.$i]==1) {
				$total++;
			}
		}
		return $total;
	}
	function contarFila($elem,$tipo,$cantidades,$totalT){
		for ($q=0; $q < sizeof($elem) ; $q++) {
			$totalT = contarSeccion($elem[$q],$tipo,$cantidades[$q],$totalT);
		}
		return $totalT;
	}

	//echo "El total de la fila A es:", $TotalA;
	//$T = contar($elementos[0],$tipos[0],5,0);
	//echo $T;

?>
