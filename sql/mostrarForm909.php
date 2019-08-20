<?php
include ("conexion.php");
include('funciones/calculos909.php');
$idcedula =$_GET['idCedula'];
$cedula =$_GET['cedula'];
$idform = $_GET['idform'];

if (isset($_GET['idCedula'])){
$TipoDeCedula=$_GET["cedula"];
$Cedula=$_GET["idCedula"];
switch ($TipoDeCedula) {
  case '1': $cons=mysqli_fetch_array(mysqli_query($conexion, "SELECT `codObra`,`fechaImp`,`lugar` FROM `cedula10707` WHERE `idCedula707` = $Cedula")); break;
  case '2': $cons=mysqli_fetch_array(mysqli_query($conexion, "SELECT `codObra`,`cantUF`,`fechaImp`,`lugar` FROM `cedulaph` WHERE `idCedulaPH` = $Cedula"));  break;
  case '3': $cons=mysqli_fetch_array(mysqli_query($conexion, "SELECT `codObra` FROM `cedulade` WHERE `idCedulaDE` = $Cedula"));break;
}

}
$idobra = $cons['codObra'];
$rownProf = mysqli_fetch_array(mysqli_query($conexion,"SELECT pnombreApellido,matricula FROM obras o, profesionales p
  WHERE o.codObra=$idobra AND o.idProfesional=p.idProfesional"));

    $pnombreApellido= $rownProf['pnombreApellido'];
    $pmatricula = $rownProf['matricula'];
$roww = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM obras o, clientes c where (o.codObra='$idobra') AND (o.idCliente=c.idCliente)"));
  $cdni=$roww['dni'];
  $ctipoDni=$roww['tipoDni'];
  $cnombreApellido= $roww['cnombreApellido'];
  $caracter = $roww['caracter'];
//DATOS FORMULARIO 909
$row909 = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedulaformularios o, form909 f WHERE o.idCedula= $idcedula AND o.tipoCedula = $cedula AND o.codForm = $idform AND o.codForm = f.codForm909"));

$Parcela = $row909['Parcela'];
$OliHect1 = $row909['OliHect1'];
$OliArea1 = $row909['OliArea1'];
$OliCa1 = $row909['OliCa1'];
$OliPre1 = $row909['OliPre1'];
$OliPro1 = $row909['OliPro1'];
$OliPos1 = $row909['OliPos1'];

$OliHect2 = $row909['OliHect2'];
$OliArea2 = $row909['OliArea2'];
$OliCa2 = $row909['OliCa2'];
$OliPre2 = $row909['OliPre2'];
$OliPro2 = $row909['OliPro2'];
$OliPos2 = $row909['OliPos2'];

$OliHect3 = $row909['OliHect3'];
$OliArea3 = $row909['OliArea3'];
$OliCa3 = $row909['OliCa3'];
$OliPre3 = $row909['OliPre3'];
$OliPro3 = $row909['OliPro3'];
$OliPos3 = $row909['OliPos3'];

$OliHect4 = $row909['OliHect4'];
$OliArea4 = $row909['OliArea4'];
$OliCa4 = $row909['OliCa4'];
$OliPre4 = $row909['OliPre4'];
$OliPro4 = $row909['OliPro4'];
$OliPos4 = $row909['OliPos4'];

$OliHect5 = $row909['OliHect5'];
$OliArea5 = $row909['OliArea5'];
$OliCa5 = $row909['OliCa5'];
$OliPre5 = $row909['OliPre5'];
$OliPro5 = $row909['OliPro5'];
$OliPos5 = $row909['OliPos5'];

$OliHect6 = $row909['OliHect6'];
$OliArea6 = $row909['OliArea6'];
$OliCa6 = $row909['OliCa6'];
$OliPre6 = $row909['OliPre6'];
$OliPro6 = $row909['OliPro6'];
$OliPos6 = $row909['OliPos6'];

$OliHect7 = $row909['OliHect7'];
$OliArea7 = $row909['OliArea7'];
$OliCa7 = $row909['OliCa7'];
$OliPre7 = $row909['OliPre7'];
$OliPro7 = $row909['OliPro7'];
$OliPos7 = $row909['OliPos7'];

$OliHect8 = $row909['OliHect8'];
$OliArea8 = $row909['OliArea8'];
$OliCa8 = $row909['OliCa8'];
$OliPre8 = $row909['OliPre8'];
$OliPro8 = $row909['OliPro8'];
$OliPos8 = $row909['OliPos8'];

$OliHect9 = $row909['OliHect9'];
$OliArea9 = $row909['OliArea9'];
$OliCa9 = $row909['OliCa9'];
$OliPre9 = $row909['OliPre9'];
$OliPro9 = $row909['OliPro9'];
$OliPos9 = $row909['OliPos9'];

$FrutDet1 = $row909['FrutDet1'];
$FruEst1 = $row909['FruEst1'];
$FruHect1 = $row909['FruHect1'];
$FruArea1 = $row909['FruArea1'];
$FruCa1 = $row909['FruCa1'];
$FruPre1 = $row909['FruPre1'];
$FruPro1 = $row909['FruPro1'];
$FruPos1 = $row909['FruPos1'];

$FrutDet2 = $row909['FrutDet2'];
$FruEst2 = $row909['FruEst2'];
$FruHect2 = $row909['FruHect2'];
$FruArea2 = $row909['FruArea2'];
$FruCa2 = $row909['FruCa2'];
$FruPre2 = $row909['FruPre2'];
$FruPro2 = $row909['FruPro2'];
$FruPos2 = $row909['FruPos2'];

$FrutDet3 = $row909['FrutDet3'];
$FruEst3 = $row909['FruEst3'];
$FruHect3 = $row909['FruHect3'];
$FruCa3 = $row909['FruCa3'];
$FruArea3 = $row909['FruArea3'];
$FruPre3 = $row909['FruPre3'];
$FruPro3 = $row909['FruPro3'];
$FruPos3 = $row909['FruPos3'];

$FrutDet4 = $row909['FrutDet4'];
$FruEst4 = $row909['FruEst4'];
$FruHect4 = $row909['FruHect4'];
$FruArea4 = $row909['FruArea4'];
$FruCa4 = $row909['FruCa4'];
$FruPre4 = $row909['FruPre4'];
$FruPro4 = $row909['FruPro4'];
$FruPos4 = $row909['FruPos4'];

$FrutDet5 = $row909['FrutDet5'];
$FruEst5 = $row909['FruEst5'];
$FruHect5 = $row909['FruHect5'];
$FruArea5 = $row909['FruArea5'];
$FruCa5 = $row909['FruCa5'];
$FruPre5 = $row909['FruPre5'];
$FruPro5 = $row909['FruPro5'];
$FruPos5 = $row909['FruPos5'];

$FrutDet6 = $row909['FrutDet6'];
$FruEst6 = $row909['FruEst6'];
$FruHect6 = $row909['FruHect6'];
$FruArea6 = $row909['FruArea6'];
$FruCa6 = $row909['FruCa6'];
$FruPre6 = $row909['FruPre6'];
$FruPro6 = $row909['FruPro6'];
$FruPos6 = $row909['FruPos6'];

$FrutDet7 = $row909['FrutDet7'];
$FruEst7 = $row909['FruEst7'];
$FruHect7 = $row909['FruHect7'];
$FruArea7 = $row909['FruArea7'];
$FruCa7 = $row909['FruCa7'];
$FruPre7 = $row909['FruPre7'];
$FruPro7 = $row909['FruPro7'];
$FruPos7 = $row909['FruPos7'];

$FrutDet8 = $row909['FrutDet8'];
$FruEst8 = $row909['FruEst8'];
$FruHect8 = $row909['FruHect8'];
$FruArea8 = $row909['FruArea8'];
$FruCa8 = $row909['FruCa8'];
$FruPre8 = $row909['FruPre8'];
$FruPro8 = $row909['FruPro8'];
$FruPos8 = $row909['FruPos8'];

$FrutDet9 = $row909['FrutDet9'];
$FruEst9 = $row909['FruEst9'];
$FruHect9 = $row909['FruHect9'];
$FruArea9 = $row909['FruArea9'];
$FruCa9 = $row909['FruCa9'];
$FruPre9 = $row909['FruPre9'];
$FruPro9 = $row909['FruPro9'];
$FruPos9 = $row909['FruPos9'];

$PlanDet1 = $row909['PlanDet1'];
$PlanEst1 = $row909['PlanEst1'];
$PlanHect1 = $row909['PlanHect1'];
$PlanArea1 = $row909['PlanArea1'];
$PlanCa1 = $row909['PlanCa1'];
$PlanPre1 = $row909['PlanPre1'];
$PlanPro1 = $row909['PlanPro1'];

$PlanDet2 = $row909['PlanDet2'];
$PlanEst2 = $row909['PlanEst2'];
$PlanHect2 = $row909['PlanHect2'];
$PlanArea2 = $row909['PlanArea2'];
$PlanCa2 = $row909['PlanCa2'];
$PlanPre2 = $row909['PlanPre2'];
$PlanPro2 = $row909['PlanPro2'];

$PlanDet3 = $row909['PlanDet3'];
$PlanEst3 = $row909['PlanEst3'];
$PlanHect3 = $row909['PlanHect3'];
$PlanArea3 = $row909['PlanArea3'];
$PlanCa3 = $row909['PlanCa3'];
$PlanPre3 = $row909['PlanPre3'];
$PlanPro3 = $row909['PlanPro3'];

$PlanDet4 = $row909['PlanDet4'];
$PlanEst4 = $row909['PlanEst4'];
$PlanHect4 = $row909['PlanHect4'];
$PlanArea4 = $row909['PlanArea4'];
$PlanCa4 = $row909['PlanCa4'];
$PlanPre4 = $row909['PlanPre4'];
$PlanPro4 = $row909['PlanPro4'];

$PlanDet5 = $row909['PlanDet5'];
$PlanEst5 = $row909['PlanEst5'];
$PlanHect5 = $row909['PlanHect5'];
$PlanArea5 = $row909['PlanArea5'];
$PlanCa5 = $row909['PlanCa5'];
$PlanPre5 = $row909['PlanPre5'];
$PlanPro5 = $row909['PlanPro5'];

$PlanDet6 = $row909['PlanDet6'];
$PlanEst6 = $row909['PlanEst6'];
$PlanHect6 = $row909['PlanHect6'];
$PlanArea6 = $row909['PlanArea6'];
$PlanCa6 = $row909['PlanCa6'];
$PlanPre6 = $row909['PlanPre6'];
$PlanPro6 = $row909['PlanPro6'];

$PlanDet7 = $row909['PlanDet7'];
$PlanEst7 = $row909['PlanEst7'];
$PlanHect7 = $row909['PlanHect7'];
$PlanArea7 = $row909['PlanArea7'];
$PlanCa7 = $row909['PlanCa7'];
$PlanPre7 = $row909['PlanPre7'];
$PlanPro7 = $row909['PlanPro7'];

$PlanDet8 = $row909['PlanDet8'];
$PlanEst8 = $row909['PlanEst8'];
$PlanHect8 = $row909['PlanHect8'];
$PlanArea8 = $row909['PlanArea8'];
$PlanCa8 = $row909['PlanCa8'];
$PlanPre8 = $row909['PlanPre8'];
$PlanPro8 = $row909['PlanPro8'];

$PlanDet9 = $row909['PlanDet9'];
$PlanEst9 = $row909['PlanEst9'];
$PlanHect9 = $row909['PlanHect9'];
$PlanArea9 = $row909['PlanArea9'];
$PlanCa9 = $row909['PlanCa9'];
$PlanPre9 = $row909['PlanPre9'];
$PlanPro9 = $row909['PlanPro9'];

$mostrarProf = $row909['firmaprof'];
?>
