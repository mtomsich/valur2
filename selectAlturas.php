<?php
include("sesion.php");
	$pagina='selectAlturasPHP';

	include("sql/conexion.php");
	include("seguridadForm.php");

	include("sql/sqlconnection.php");


	if($dbStatus != "Exitosa")
		exit($dbStatus);

	$postA = $_POST["idCalles"];

	$queryAlturas = "SELECT a.idAlturas, a.desde, a.hasta, a.id_cpa, c.cpa FROM alturas a INNER JOIN cpa c ON a.id_cpa=c.id_cpa WHERE a.idCalles = $postA ORDER By a.desde";

  $stmtA = $conn->query($queryAlturas);

	try {
		$resultA = $stmtA->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($resultA);
  } catch(PDOException $e) {
		echo "Fallo el registro:" . $e->getMessage();
  }

	$conn = null;
?>
