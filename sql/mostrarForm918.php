<?php
  include ("conexion.php");
  $idcedula =$_GET['idCedula'];
  $cedula =$_GET['cedula'];
	$idform = $_GET['idform'];

  if (isset($_GET['idCedula'])){
  $TipoDeCedula=$_GET["cedula"];
  $Cedula=$_GET["idCedula"];
  switch ($TipoDeCedula) {
    case '1': $cons=mysqli_fetch_array(mysqli_query($conexion, "SELECT `codObra` FROM `cedula10707` WHERE `idCedula707` = $Cedula")); break;
    case '2': $cons=mysqli_fetch_array(mysqli_query($conexion, "SELECT `codObra`,`cantUF` FROM `cedulaph` WHERE `idCedulaPH` = $Cedula"));  break;
    case '3': $cons=mysqli_fetch_array(mysqli_query($conexion, "SELECT `codObra` FROM `cedulade` WHERE `idCedulaDE` = $Cedula"));break;
  }
}

//RUBRO 3 INFRAESTRUCTURA
$idobra = $cons['codObra'];

$rowRub3Ce10707 = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedula10707 WHERE codObra='$idobra'"));
$infraP = $rowRub3Ce10707['infraP'];
$infraA = $rowRub3Ce10707['infraA'];
$infraL = $rowRub3Ce10707['infraL'];
$infraAg = $rowRub3Ce10707['infraAg'];
$infraG = $rowRub3Ce10707['infraG'];
$infraC = $rowRub3Ce10707['infraC'];

//DOMICILIO OBRA, EN LA CONSULTA DE MOSTRAR DATOS OBRA NO TRAIA NINGUN DATO
$rowm = mysqli_fetch_array(mysqli_query($conexion,"SELECT calle FROM obras WHERE codObra='$idobra' "));

  $domicilio= $rowm['calle'];


//DATOS FORMULARIO 918
$row918 = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedulaformularios o, form918 f WHERE o.idCedula= $idcedula and o.tipoCedula = $cedula and o.codForm = $idform and o.codForm = f.codForm918"));
$Parcela = $row918['Parcela'];
$Subparcela = $row918['Subparcela'];
$Partida = $row918['Partida'];
$VSup = $row918['VSup'];
$VTierra = $row918['VTierra'];
$ValuacionEP = $row918['ValuacionEP'];
$CodDest = $row918['CodDestino'];
$ApellidoResp = $row918['ApellidoResp'];
$legajo = $row918['legajo'];
$Fecha = $row918['Fecha'];
$observaciones = $row918['observaciones'];


//DESTINO
$rowdest = mysqli_fetch_array(mysqli_query($conexion,"SELECT Tipo,Destino,Codigo FROM destinos WHERE `cNo`='$CodDest'"));
$Dest = $rowdest['Tipo'];
$Desti = $rowdest['Destino'];
$CodD = $rowdest['Codigo'];
?>
