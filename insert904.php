<?php
include("sesion.php");
		$pagina='insert904PHP';
	include("sql/sqlconnection.php");
	include("sql/conexion.php");
	include("seguridadForm.php");

	if($dbStatus != "Exitosa")
		exit($dbStatus);

	$objeto = json_decode(file_get_contents('php://input'), true);
	$nroFormulario = 904;
	$codCedula = $objeto["codcedula"];
	$tipoCedula = $objeto["tipocedula"];
	$post = $objeto["objeto"];
	$rub6 = $objeto["rub6"];

	if($post["codForm904"] == 0) {
	  unset($post["codForm904"]);
		$query904 = "INSERT INTO form904 (codForm904, ";

		foreach($post as $key => $value) {
			$query904 .= $key . ", ";
		}

		$query904 = substr($query904, 0, -2);
		$query904 .= ") VALUES (default, ";

		foreach($post as $key => $value) {
			$query904 .= "'" . $value . "', ";
		}

		$query904 = substr($query904, 0, -2);
		$query904 .= ");";
	} else {
		$query904 = "UPDATE form904 SET ";

		foreach($post as $key => $value) {
			$query904 .= $key . "='" . $value . "', ";
		}

		$query904 = substr($query904, 0, -2);
		$query904 .= " WHERE codForm904='" . $post["codForm904"] . "';";
	}

	try {
		if(!isset($post["codForm904"])) {
			$conn->beginTransaction();
			$conn->exec($query904);
			$lastID = $conn->lastInsertId();
			$queryCount = "SELECT MAX(version) AS cuenta FROM `cedulaformularios` WHERE nroFormulario = $nroFormulario AND idCedula = $codCedula";
			$count = $conn->query($queryCount)->fetch();
			$version = ((int)$count["cuenta"]) + 1;
			$queryObra = "INSERT INTO `cedulaformularios` (`idCedulaFormularios`, `idCedula`, `tipoCedula`, `nroFormulario`, `version`, `data`, `codForm`)
										VALUES (default, $codCedula, $tipoCedula, $nroFormulario, $version, YEAR(CURDATE()), $lastID)";
			$conn->exec($queryObra);
			foreach ($rub6 as $key => $value) {
				$i = 0;

 				foreach ($value as $value2) {
					${"values" . $i} = $value2;
					$i++;
				}

				$queryRub6 = "INSERT INTO `rub6data` (`id`, `codForm`, `numForm`, `prop`, `cant`, `data`, `estCon`, `coefAj`, `valUni`, `val`)
										  VALUES (NULL, $lastID, $nroFormulario, '$key', $values0, '$values1', '$values2', $values3, $values4, $values5)";

				$conn->exec($queryRub6);
			}

			$conn->commit();
			echo "Se registro la forma correctamente!";
		} else {
			$conn->beginTransaction();
			$conn->exec($query904);
			$conn->exec("DELETE FROM `rub6data` WHERE `codForm`=" . $post["codForm904"] . " and `numForm` = " . $nroFormulario);
			foreach ($rub6 as $key => $value) {
				$i = 0;

 				foreach ($value as $value2) {
					${"values" . $i} = $value2;
					$i++;
				}

				$queryRub6 = "INSERT INTO `rub6data` (`id`, `codForm`, `numForm`, `prop`, `cant`, `data`, `estCon`, `coefAj`, `valUni`, `val`)
										  VALUES (NULL, " . $post['codForm904'] . ", $nroFormulario, '$key', $values0, '$values1', '$values2', $values3, $values4, $values5)";

				$conn->exec($queryRub6);
			}

			$conn->commit();
			echo "Se actualizo la forma correctamente!";
		}
  } catch(PDOException $e) {
		$conn->rollBack();
		echo "Fallo el registro: " . $e->getMessage();
  }

	$conn = null;
?>
