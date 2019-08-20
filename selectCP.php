<?php
include("sesion.php");
	$pagina='selectCPPHP';

	include("sql/conexion.php");
	include("seguridadForm.php");

	include("sql/sqlconnection.php");


	if($dbStatus != "Exitosa")
		exit($dbStatus);

	$postCP = $_POST["idAlturas"];
	
	$queryCP = "SELECT c.cod_postal FROM alturas a INNER JOIN cp_1974 c ON a.id_cp_1974=c.id WHERE a.idAlturas = $postCP";

  $stmtCP = $conn->query($queryCP);

	try {
		$resultCP = $stmtCP->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($resultCP);
  } catch(PDOException $e) {
		echo "Fallo el registro:" . $e->getMessage();
  }

	$conn = null;
?>
