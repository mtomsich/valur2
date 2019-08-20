<?php
		include("sesion.php"); 
	$pagina='deleteFormulariosPHP';

	include("sql/conexion.php");
	include("seguridadForm.php");

  include("sql/sqlconnection.php");

	$formID = $_POST["idForm"];
	$formNUM = strtolower($_POST["numForm"]);

	if ($formNUM == '901' || $formNUM == '910' || $formNUM == 'a901' || $formNUM == 'a910'){
		$formulario = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedulaformularios WHERE (nroFormulario='$formNUM') and (codForm='$formID')"));
		$cedula = $formulario['tipoCedula'];
		$idCedula = $formulario['idCedula'];
		switch ($cedula) {
			case '1': $tierraCero= "UPDATE cedula10707 SET tierra='0' WHERE idCedula707='$idCedula'"; break;
			case '2':	$tierraCero= "UPDATE obraunidadfuncional SET tierra='0' WHERE idCedulaPH='$idCedula'"; break;
			case '3': $tierraCero= "UPDATE cedulade SET tierra='0' WHERE idCedulaDE='$idCedula'"; break;
		}
		mysqli_query($conexion,$tierraCero)
		or die("Problemas en la actualizacion".mysqli_error($conexion));
	}
  $query1 = "DELETE FROM cedulaformularios WHERE codForm = $formID AND nroFormulario = '$formNUM'";
	$query3 = "SELECT * FROM form" . $formNUM . " LIMIT 0";

	try {
		$result = $conn->query($query3);
	  $col = $result->getColumnMeta(0);
	  $colName = $col['name'];

		$query2 = "DELETE FROM form$formNUM WHERE $colName = $formID";
		$conn->beginTransaction();
		$conn->exec($query2);
		$conn->exec($query1);
		$conn->commit();

		echo "Se borro el formulario";
	} catch(PDOException $e) {
		$conn->rollBack();
		echo "No se pudo borrar el formulario: " . $e->getMessage();
	}
?>
