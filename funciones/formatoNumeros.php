<?php
//Estas funciones sirven para guardar los nros con decimales y mostrarlos con comas en lugar de puntos
function mostrarN($numero)
{
    
	//$numero=floatval($numero);
	
	
	$valorFormateado = number_format($numero, 2, ',', '');
	return $valorFormateado;
	
}

function guardarN($numero)
{
	//$numero=floatval($numero);
	$valorFormateado = str_replace(",",".",$numero); 
    //$valorFormateado = number_format($numero, 2, '.', '');
	return $valorFormateado;
}


?>
