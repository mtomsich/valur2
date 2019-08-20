<?php
$pagina='mostrarUnidadesFuncionalesPHP';
// consulta sql muestra los datos de unidades funcionales
  include("sql/consultas.php");


	$row = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM obraunidadfuncional
    where idObraUnidadFuncional='$idObraUnidadFuncional' and idCedulaPH='$idCedula'"));

  $FidUnidFun= $row['idUnidFun'];
  $Fopol= $row['poligono'];
  $Focub= $row['cubierta'];
  $Foscub= $row['semicubierta'];
  $Fodescub= $row['descubierta'];
  $Fobal= $row['balcon'];
  $Fotpol= $row['totalPolig'];
  $otros= $row['otros'];
  $Ftierra= $row['tierra'];
	$Fvcomun= $row['vcomun'];
	$Fvpropio= $row['vpropio'];
	$totedificio=	$Fvcomun+$Fvpropio;
	$tot=$Ftierra+$totedificio;

?>
