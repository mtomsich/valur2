<?php
include("sesion.php");
	$pagina='selectAlturasCpaPHP';

	include("sql/conexion.php");
	include("seguridadForm.php");

	include("sql/sqlconnection.php");


	if($dbStatus != "Exitosa")
		exit($dbStatus);

	$postACpa = $_POST["idCalles"];

	$queryAlturasCpa = "SELECT a.idAlturas, a.desde, a.hasta, a.id_cpa, c.cpa FROM alturas a INNER JOIN cpa c ON a.id_cpa=c.id_cpa WHERE a.idCalles = $postACpa ORDER By a.desde";

  $stmtACpa = $conn->query($queryAlturasCpa);

	try {
		$resultACpa = $stmtACpa->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($resultACpa);
  } catch(PDOException $e) {
		echo "Fallo el registro:" . $e->getMessage();
  }

	$conn = null;
?>
