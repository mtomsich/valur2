<?php
include("sesion.php");
	$pagina='insert906PHP';
	include("sql/sqlconnection.php");
	include("sql/conexion.php");
	include("seguridadForm.php");

	if($dbStatus != "Exitosa")
		exit($dbStatus);

	$objeto = json_decode(file_get_contents('php://input'), true);
	$nroFormulario = 906;
	$codCedula = $objeto["codcedula"];
	$tipoCedula = $objeto["tipocedula"];
	$post = $objeto["objeto"];
	$rub6 = $objeto["rub6"];

	if($post["codForm906"] == 0) {
	  unset($post["codForm906"]);
		$query906 = "INSERT INTO form906 (codForm906, ";

		foreach($post as $key => $value) {
			$query906 .= $key . ", ";
		}

		$query906 = substr($query906, 0, -2);
		$query906 .= ") VALUES (default, ";

		foreach($post as $key => $value) {
			$query906 .= "'" . $value . "', ";
		}

		$query906 = substr($query906, 0, -2);
		$query906 .= ");";
	} else {
		$query906 = "UPDATE form906 SET ";

		foreach($post as $key => $value) {
			$query906 .= $key . "='" . $value . "', ";
		}

		$query906 = substr($query906, 0, -2);
		$query906 .= " WHERE codForm906='" . $post["codForm906"] . "';";
	}

	try {
		if(!isset($post["codForm906"])) {
			$conn->beginTransaction();
			$conn->exec($query906);
			$lastID = $conn->lastInsertId();
			$queryCount = "SELECT MAX(version) AS cuenta FROM `cedulaformularios` WHERE nroFormulario = $nroFormulario AND idCedula = $codCedula";
			$count = $conn->query($queryCount)->fetch();
			$version = ((int)$count["cuenta"]) + 1;
			$queryObra = "INSERT INTO `cedulaformularios` (`idCedulaFormularios`, `idCedula`, `tipoCedula`, `nroFormulario`, `version`, `data`, `codForm`)
										VALUES (default, $codCedula, $tipoCedula, $nroFormulario, $version, YEAR(CURDATE()), $lastID)";
			$conn->exec($queryObra);

			///////////////////////////////////Rubro6////////////////////////////
			foreach ($rub6 as $key => $value) {
				$i = 0;

 				foreach ($value as $value2) {
					${"values" . $i} = $value2;
					$i++;
				}

				$queryRub6 = "INSERT INTO `rub6data` (`id`, `codForm`, `numForm`, `prop`, `cant`, `data`, `estCon`, `coefAj`, `valUni`, `val`)
										  VALUES (NULL, $lastID, $nroFormulario, '$key', $values0, '$values1', '$values2', $values3, $values4, $values5)";

				$conn->exec($queryRub6);
				///////////////////////////////////Rubro6////////////////////////////

			}

			$conn->commit();
			echo "Se registro la forma correctamente!";
		} else {
			$conn->beginTransaction();
			$conn->exec($query906);

			///////////////////////////////////Rubro6////////////////////////////
			$conn->exec("DELETE FROM `rub6data` WHERE `codForm`=" . $post["codForm906"] . " and `numForm` = " . $nroFormulario);
			foreach ($rub6 as $key => $value) {
				$i = 0;

 				foreach ($value as $value2) {
					${"values" . $i} = $value2;
					$i++;
				}

				$queryRub6 = "INSERT INTO `rub6data` (`id`, `codForm`, `numForm`, `prop`, `cant`, `data`, `estCon`, `coefAj`, `valUni`, `val`)
										  VALUES (NULL, " . $post['codForm906'] . ", $nroFormulario, '$key', $values0, '$values1', '$values2', $values3, $values4, $values5)";

				$conn->exec($queryRub6);
			}
			///////////////////////////////////Rubro6////////////////////////////

			$conn->commit();
			echo "Se actualizo la forma correctamente!";
		}
  } catch(PDOException $e) {
		$conn->rollBack();
		echo "Fallo el registro: " . $e->getMessage();
  }

	$conn = null;
?>
