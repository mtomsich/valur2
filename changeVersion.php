<?php
		include("sesion.php");
	$pagina='deleteFormulariosPHP';

	include("sql/conexion.php");
	include("seguridadForm.php");

  include("sql/sqlconnection.php");

	$cedFormID = $_POST["idCedForm"];
	$version = strtolower($_POST["version"]);

	try {
		$query = "UPDATE `cedulaformularios` SET `version`=$version WHERE `idCedulaFormularios`=$cedFormID";
		$conn->beginTransaction();
		$conn->exec($query);
		$conn->commit();
	} catch(PDOException $e) {
		$conn->rollBack();
	}
?>
