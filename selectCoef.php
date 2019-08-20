<?php
include("sesion.php");
	$pagina='selectCoefPHP';

	include("sql/conexion.php");
	include("seguridadForm.php");
	include("sql/sqlconnection.php");

	if($dbStatus != "Exitosa")
		exit($dbStatus);

	$postAnt = $_POST["antiguedad"];
  $postCat = $_POST["categoria"];
  $postCon = $_POST["conservacion"];
	$queryCP = "SELECT coef FROM coefdepreciacion WHERE antiguedad = '$postAnt' AND categoria = '$postCat' AND estCon = '$postCon'";

  $stmt = $conn->query($queryCP);

	try {
		$result = $stmt->fetch();
		echo $result[0];
  } catch(PDOException $e) {
		echo "Fallo el registro:" . $e->getMessage();
  }

	$conn = null;
?>
