<?php
include("sesion.php");
	$pagina='insert903PHP';

	include("sql/conexion.php");
	include("seguridadForm.php");


	include("sql/sqlconnection.php");
	if($dbStatus != "Exitosa")
		exit($dbStatus);

	$objeto = json_decode(file_get_contents('php://input'), true);
	$nroFormulario = 903;
	$codCedula = $objeto["codcedula"];
	$tipoCedula = $objeto["tipocedula"];
	$post = $objeto["objeto"];
	$rub6 = $objeto["rub6"];

	if($post["codForm3"] == 0) {
	  unset($post["codForm3"]);
		$query903 = "INSERT INTO form903 (codForm3, ";

		foreach($post as $key => $value) {
			$query903 .= $key . ", ";
		}

		$query903 = substr($query903, 0, -2);
		$query903 .= ") VALUES (default, ";

		foreach($post as $key => $value) {
			$query903 .= "'" . $value . "', ";
		}

		$query903 = substr($query903, 0, -2);
		$query903 .= ");";
	} else {
		$query903 = "UPDATE form903 SET ";

		foreach($post as $key => $value) {
			$query903 .= $key . "='" . $value . "', ";
		}

		$query903 = substr($query903, 0, -2);
		$query903 .= " WHERE codForm3='" . $post["codForm3"] . "';";
	}

	try {
		if(!isset($post["codForm3"])) {
			if($post["Data"] != 0)
				$ano = $post["Data"];
			else
				$ano = $post["Data1"];

			$conn->beginTransaction();
			$conn->exec($query903);
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
				///////////////////////////////////Rubro6////////////////////////////

			}

			$conn->commit();
			echo "Se registro la forma correctamente!";
		} else {
			$conn->beginTransaction();
			$conn->exec($query903);

			///////////////////////////////////Rubro6////////////////////////////
			$conn->exec("DELETE FROM `rub6data` WHERE `codForm`=" . $post["codForm3"] . " and `numForm` = " . $nroFormulario);
			foreach ($rub6 as $key => $value) {
				$i = 0;

 				foreach ($value as $value2) {
					${"values" . $i} = $value2;
					$i++;
				}

				$queryRub6 = "INSERT INTO `rub6data` (`id`, `codForm`, `numForm`, `prop`, `cant`, `data`, `estCon`, `coefAj`, `valUni`, `val`)
										  VALUES (NULL, " . $post['codForm3'] . ", $nroFormulario, '$key', $values0, '$values1', '$values2', $values3, $values4, $values5)";

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
