<?php
include("sesion.php");
	$pagina='insert905PHP';
	include("sql/sqlconnection.php");
	include("sql/conexion.php");
	include("seguridadForm.php");

	if($dbStatus != "Exitosa")
		exit($dbStatus);

	$objeto = json_decode(file_get_contents('php://input'), true);
	$nroFormulario = 905;
	$codCedula = $objeto["codcedula"];
	$tipoCedula = $objeto["tipocedula"];
	$post = $objeto["objeto"];
	$rub6 = $objeto["rub6"];
	$rub8 = $objeto["rub8"];

	if($post["codForm905"] == 0) {
	  unset($post["codForm905"]);
		$query905 = "INSERT INTO form905 (codForm905, ";

		foreach($post as $key => $value) {
			$query905 .= $key . ", ";
		}

		$query905 = substr($query905, 0, -2);
		$query905 .= ") VALUES (default, ";

		foreach($post as $key => $value) {
			$query905 .= "'" . $value . "', ";
		}

		$query905 = substr($query905, 0, -2);
		$query905 .= ");";
	} else {
		$query905 = "UPDATE form905 SET ";

		foreach($post as $key => $value) {
			$query905 .= $key . "='" . $value . "', ";
		}

		$query905 = substr($query905, 0, -2);
		$query905 .= " WHERE codForm905='" . $post["codForm905"] . "';";
	}

	try {
		if(!isset($post["codForm905"])) {
			if($post["Data"] != 0)
				$ano = $post["Data"];
			else
				$ano = $post["Data1"];

			$conn->beginTransaction();
			$conn->exec($query905);
			$lastID = $conn->lastInsertId();
			$queryCount = "SELECT MAX(version) AS cuenta FROM `cedulaformularios` WHERE nroFormulario = $nroFormulario AND idCedula = $codCedula";
			$count = $conn->query($queryCount)->fetch();
			$version = ((int)$count["cuenta"]) + 1;
			$queryObra = "INSERT INTO `cedulaformularios` (`idCedulaFormularios`, `idCedula`, `tipoCedula`, `nroFormulario`, `version`, `data`, `codForm`)
										VALUES (default, $codCedula, $tipoCedula, $nroFormulario, $version, $ano, $lastID)";
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
			}
			///////////////////////////////////Rubro6////////////////////////////

			///////////////////////////////////Rubro8////////////////////////////
			foreach ($rub8 as $key => $value) {
				$i = 0;

				foreach ($value as $value2) {
					${"values" . $i} = $value2;
					$i++;
				}

				$queryRub8 = "INSERT INTO `rub8data` (`id`, `codForm`, `numForm`, `prop`, `cant`, `data`, `estCon`, `coefAj`, `valUni`, `val`)
											VALUES (NULL, $lastID, $nroFormulario, '$key', $values0, '$values1', '$values2', $values3, $values4, $values5)";

				$conn->exec($queryRub8);
			}
			///////////////////////////////////Rubro8////////////////////////////

			$conn->commit();
			echo "Se registro la forma correctamente!";
		} else {
			$conn->beginTransaction();
			$conn->exec($query905);

			///////////////////////////////////Rubro6////////////////////////////
			$conn->exec("DELETE FROM `rub6data` WHERE `codForm`=" . $post["codForm905"] . " and `numForm` = " . $nroFormulario);
			foreach ($rub6 as $key => $value) {
				$i = 0;

 				foreach ($value as $value2) {
					${"values" . $i} = $value2;
					$i++;
				}

				$queryRub6 = "INSERT INTO `rub6data` (`id`, `codForm`, `numForm`, `prop`, `cant`, `data`, `estCon`, `coefAj`, `valUni`, `val`)
										  VALUES (NULL, " . $post['codForm905'] . ", $nroFormulario, '$key', $values0, '$values1', '$values2', $values3, $values4, $values5)";

				$conn->exec($queryRub6);
			}
			///////////////////////////////////Rubro6////////////////////////////

			///////////////////////////////////Rubro8////////////////////////////
			$conn->exec("DELETE FROM `rub8data` WHERE `codForm`=" . $post["codForm905"] . " and `numForm` = " . $nroFormulario);
			foreach ($rub8 as $key => $value) {
				$i = 0;

 				foreach ($value as $value2) {
					${"values" . $i} = $value2;
					$i++;
				}

				$queryRub8 = "INSERT INTO `rub8data` (`id`, `codForm`, `numForm`, `prop`, `cant`, `data`, `estCon`, `coefAj`, `valUni`, `val`)
										  VALUES (NULL, " . $post['codForm905'] . ", $nroFormulario, '$key', $values0, '$values1', '$values2', $values3, $values4, $values5)";

				$conn->exec($queryRub8);
			}
			///////////////////////////////////Rubro8////////////////////////////

			$conn->commit();
			echo "Se actualizo la forma correctamente!";
		}
  } catch(PDOException $e) {
		$conn->rollBack();
		echo "Fallo el registro: " . $e->getMessage();
  }

	$conn = null;
?>
