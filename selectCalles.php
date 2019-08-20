<?php
include("sesion.php");
	$pagina='selectCallesPHP';

	include("sql/conexion.php");
	include("seguridadForm.php");

	include("sql/sqlconnection.php");


	if($dbStatus != "Exitosa")
		exit($dbStatus);

	$postc = $_POST["idLocalidad"];

	$queryCalles = "SELECT idCalles, nombre_abreviado FROM calles WHERE idLocalidad = $postc ORDER By nombre_abreviado";

  $stmtC = $conn->query($queryCalles);

	try {
		$resultC = $stmtC->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($resultC);
  } catch(PDOException $e) {
		echo "Fallo el registro:" . $e->getMessage();
  }

	$conn = null;
?>
