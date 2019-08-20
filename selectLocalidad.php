<?php
include("sesion.php");
	$pagina='selectLocalidadPHP';

	include("sql/conexion.php");
	include("seguridadForm.php");

	include("sql/sqlconnection.php");


	if($dbStatus != "Exitosa")
		exit($dbStatus);

	$post = $_POST["idPartido"];

	$queryCP = "SELECT idLocalidad, localidad FROM localidades WHERE idPartido = $post ORDER By localidad";

  $stmt = $conn->query($queryCP);

	try {
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($result);
  } catch(PDOException $e) {
		echo "Fallo el registro:" . $e->getMessage();
  }

	$conn = null;
?>
