<?php 
	include("../sql/conexion.php"); 
	$ant = $_GET['antiguedad'];
	$estado = $_GET['estado'];
	$test = mysqli_fetch_array(mysqli_query($conexion,"SELECT `coef` FROM `coefdepreciacion` WHERE `antiguedad` = '$ant' AND `categoria` = 'D' AND `estCon`='$estado'"))[0];
	echo $test;
?>