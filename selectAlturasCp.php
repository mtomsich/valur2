<?php
include("sesion.php");
	$pagina='selectAlturasCpPHP';

	include("sql/conexion.php");
	include("seguridadForm.php");

	include("sql/sqlconnection.php");


	if($dbStatus != "Exitosa")
		exit($dbStatus);

	$postACp = $_POST["idCalles"];

	$queryAlturasCp = "SELECT a.idAlturas, a.desde, a.hasta, a.id_cpa, c.cpa FROM alturas a INNER JOIN cpa c ON a.id_cpa=c.id_cpa WHERE a.idCalles = $postACp ORDER By a.desde";

  $stmtACp = $conn->query($queryAlturasCp);

	try {
		$resultACp = $stmtACp->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($resultACp);
  } catch(PDOException $e) {
		echo "Fallo el registro:" . $e->getMessage();
  }

	$conn = null;
?>
