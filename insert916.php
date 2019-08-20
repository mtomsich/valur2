<?php
include("sesion.php");
		$pagina='insert916PHP';
	include("sql/sqlconnection.php");
	include("sql/conexion.php");
	include("seguridadForm.php");
	if($dbStatus != "Exitosa")
		exit($dbStatus);

	$objeto = json_decode(file_get_contents('php://input'), true);
	$nroFormulario = 916;
	$codCedula = $objeto["codcedula"];
	$tipoCedula = $objeto["tipocedula"];
	$post = $objeto["objeto"];
	$rub6 = $objeto["rub6"];

	if($post["codForm916"] == 0) {
	  unset($post["codForm916"]);
		$query916 = "INSERT INTO form916 (codForm916, ";

		foreach($post as $key => $value) {
			$query916 .= $key . ", ";
		}

		$query916 = substr($query916, 0, -2);
		$query916 .= ") VALUES (default, ";

		foreach($post as $key => $value) {
			$query916 .= "'" . $value . "', ";
		}

		$query916 = substr($query916, 0, -2);
		$query916 .= ");";
	} else {
		$query916 = "UPDATE form916 SET ";

		foreach($post as $key => $value) {
			$query916 .= $key . "='" . $value . "', ";
		}

		$query916 = substr($query916, 0, -2);
		$query916 .= " WHERE codForm916='" . $post["codForm916"] . "';";
	}

	try {
		if(!isset($post["codForm916"])) {
			$conn->beginTransaction();
			$conn->exec($query916);
			$lastID = $conn->lastInsertId();
			$queryCount = "SELECT MAX(version) AS cuenta FROM `cedulaformularios` WHERE nroFormulario = $nroFormulario AND idCedula = $codCedula";
			$count = $conn->query($queryCount)->fetch();
			$version = ((int)$count["cuenta"]) + 1;
			$queryObra = "INSERT INTO `cedulaformularios` (`idCedulaFormularios`, `idCedula`, `tipoCedula`, `nroFormulario`, `version`, `data`, `codForm`)
										VALUES (default, $codCedula, $tipoCedula, $nroFormulario, $version, YEAR(CURDATE()), $lastID)";
			$conn->exec($queryObra);
			$conn->commit();
			echo "Se registro la forma correctamente!";
		} else {
			$conn->beginTransaction();
			$conn->exec($query916);
			$conn->commit();
			echo "Se actualizo la forma correctamente!";
		}
  } catch(PDOException $e) {
		$conn->rollBack();
		echo "Fallo el registro: " . $e->getMessage();
  }

	$conn = null;
?>
