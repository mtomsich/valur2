<?php
include("sesion.php");
	$pagina='selectFormulariosPHP';

	include("sql/conexion.php");
	include("seguridadForm.php");

	include("sql/sqlconnection.php");

	$cedula = $_POST["idCedula"];
	$tipoCedula = $_POST["cedula"];

  $respuesta = "<br>";

  $querycedula = "SELECT * FROM cedulaformularios WHERE idCedula = $cedula and tipoCedula=$tipoCedula order by nroFormulario asc, version asc";
	$stmt = $conn->query($querycedula);

  $respuesta .= "<table class='table table-bordered table-hover table-striped'>";
  $respuesta .= "<thead>";
  $respuesta .= "<tr>";
  $respuesta .= "<th class='col-sm-1'>Form</th>";
  $respuesta .= "<th class='col-sm-1'>Version</th>";
  $respuesta .= "<th class='col-sm-1'>Data</th>";
  $respuesta .= "<th class='col-sm-8'>Visualizar</th>";
  $respuesta .= "</tr>";
  $respuesta .= "</thead>";


  $respuesta .= "<tbody class='buscar'>"; /*agregado*/


  while(($cedula = $stmt->fetch()) !== false) {

		$formNUM = strtolower($cedula['nroFormulario']);
		$query1 = "SELECT * FROM form" . $formNUM . " LIMIT 0";
		$result = $conn->query($query1);
		$col = $result->getColumnMeta(0);
		$colName = $col['name'];
		$query2 = "SELECT * FROM form$formNUM WHERE $colName = " .  $cedula['codForm'];
		$dataInfo = $conn->query($query2)->fetch();
		$dataRec = array_key_exists('Data', $dataInfo) ? $dataInfo['Data'] : "";
		$data = array_key_exists('Data1', $dataInfo) ? $dataInfo['Data1'] : "";

		if($dataRec == 0)
			$formData = $data;
		else
			$formData = $dataRec;

    $respuesta .= "<tr align='center'>";
    $respuesta .= "<td>" .$cedula['nroFormulario']."</td>";
    $respuesta .= "<td><input name='versionchange' id='" . $cedula['idCedulaFormularios'] . "' style='width:100%;height:100%;box-shadow:none;border:none;background-color:inherit' type='number' value=" .$cedula['version']."></td>";
    $respuesta .= "<td>" .$formData."</td>";
    $respuesta .= "<td>";
		$respuesta .= '<a name="formEdit" title=' . $cedula['codForm'] . ' href="formulario' . $cedula['nroFormulario'] . 'rub2pto1.php" target="_blank" onclick="openEditWindows(this);return false;"><button type="submit" class="btn btn-info btn-medium">  <i class="icon-small icon-pencil"></i>  </button>';
		$i = 1;
		while(true){
			if(file_exists('PDFform' . $cedula['nroFormulario'] . '-' . $i . '.php'))
				$respuesta .= '<a name="formView" title=' . $cedula['codForm'] . ' href="PDFform' . $cedula['nroFormulario'] . '-' . $i . '.php" target="_blank" onclick="openViewWindows(this);return false;"><button type="submit" class="btn btn-warning btn-medium">  <i class="icon-small icon-print"></i>  </button>';
			else
				break;

			$i++;
		}
		$respuesta .= '<a name=' . $cedula['nroFormulario'] . ' title=' . $cedula['codForm'] . ' onclick="deleteForm(this);"><button type="button" class="btn btn-danger btn-medium">  <i class="icon-small icon-trash"></i>  </button>';
		$respuesta .= "</td>";
    $respuesta .= "</tr>";
  }

  $respuesta .=  "</tbody>"; /*agregado*/
  $respuesta .=  "</table>";
	$respuesta .=  "<br><br>	<br><br>	<br><br>	<br><br>	<br><br>	<br><br>	<br><br>	<br>";

  echo $respuesta;

?>
