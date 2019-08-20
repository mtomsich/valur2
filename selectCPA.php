<?php
include("sesion.php");
	$pagina='selectCPAPHP';

	include("sql/conexion.php");
	include("seguridadForm.php");

	include("sql/sqlconnection.php");


	if($dbStatus != "Exitosa")
		exit($dbStatus);

	$postCPA = $_POST["idAlturas"];

	$queryCPA = "SELECT cpa.cpa FROM alturas a INNER JOIN cpa ON a.id_cpa=cpa.id_cpa WHERE a.idAlturas = $postCPA";

  $stmtCPA = $conn->query($queryCPA);

	try {
		$resultCPA = $stmtCPA->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($resultCPA);
  } catch(PDOException $e) {
		echo "Fallo el registro:" . $e->getMessage();
  }

	$conn = null;
?>
