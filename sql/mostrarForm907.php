<?php
  $pagina='mostrarForm907PHP';
  include ("conexion.php");
  include ("sql/consultas.php");

  //INICIALIZACION DE VARIABLES
  $totaledificio1 = ""; $totalmejoras1 = "";  $cubierta1 = "";  $semicub1 = ""; $totalsup1 = 0; $totalvalor1 = 0; $totalRubro4= 0;
  $totaledificio2 = ""; $totalmejoras2 = "";  $cubierta2 = "";  $semicub2 = ""; $totalsup2 = 0; $totalvalor2 = 0;
  $totaledificio3 = ""; $totalmejoras3 = "";  $cubierta3 = "";  $semicub3 = ""; $totalsup3 = 0; $totalvalor3 = 0;
  $totaledificio4 = ""; $totalmejoras4 = "";  $cubierta4 = "";  $semicub4 = ""; $totalsup4 = 0; $totalvalor4 = 0;
  $totaledificio5 = ""; $totalmejoras5 = "";  $cubierta5 = "";  $semicub5 = ""; $totalsup5 = 0; $totalvalor5 = 0;
  $totaledificio6 = ""; $totalmejoras6 = "";  $cubierta6 = "";  $semicub6 = ""; $totalsup6 = 0; $totalvalor6 = 0;
  $totaledificio7 = ""; $totalmejoras7 = "";  $cubierta7 = "";  $semicub7 = ""; $totalsup7 = 0; $totalvalor7 = 0;
  $totaledificio8 = ""; $totalmejoras8 = "";  $cubierta8 = "";  $semicub8 = ""; $totalsup8 = 0; $totalvalor8 = 0;
  $totaledificio9 = ""; $totalmejoras9 = "";  $cubierta9 = "";  $semicub9 = ""; $totalsup9 = 0; $totalvalor9 = 0;
  $totaledificio10 = ""; $totalmejoras10 = "";  $cubierta10 = "";  $semicub10 = ""; $totalsup10 = 0; $totalvalor10 = 0;

  include ("funciones/calculosFormResumenes.php");

  function suma($t,$v,$a,$s,$b){
    if ($v > 0){
      $t = $t+$v;
    }
    if ($a > 0){
      $t = $t+$a;
    }
    if ($s > 0){
      $t = $t+$s;
    }
    if ($b > 0){
      $t = $t+$b;
    }
    echo round($t);
    return $t;
  }


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

// $infraP = $rowRub3Ce10707['infraP'];
// $infraA = $rowRub3Ce10707['infraA'];
// $infraL = $rowRub3Ce10707['infraL'];
// $infraAg = $rowRub3Ce10707['infraAg'];
// $infraG = $rowRub3Ce10707['infraG'];
// $infraC = $rowRub3Ce10707['infraC'];

$cons_obra = mysqli_fetch_array(mysqli_query($conexion,"SELECT `infraP`,`infraA`,`infraL`,`infraAg`,`infraG`,`infraC` FROM `obras` WHERE codObra='$idobra'"));
$infraP = $cons_obra['infraP'];
$infraA = $cons_obra['infraA'];
$infraL = $cons_obra['infraL'];
$infraAg = $cons_obra['infraAg'];
$infraG = $cons_obra['infraG'];
$infraC = $cons_obra['infraC'];

//DOMICILIO OBRA, EN LA CONSULTA DE MOSTRAR DATOS OBRA NO TRAIA NINGUN DATO
$rowm = mysqli_fetch_array(mysqli_query($conexion,"SELECT calle FROM obras WHERE codObra='$idobra' "));

  $domicilio= $rowm['calle'];


//DATOS FORMULARIO 907
$row907 = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedulaformularios o, form907 f WHERE o.idCedula= $idcedula and o.tipoCedula = $cedula and o.codForm = $idform and o.codForm = f.codForm907"));

 $Interno = $row907['Interno'];
 $Parcela = $row907['Parcela'];
 $Subparcela = $row907['Subparcela'];
 $Pais = $row907['Pais'];
 $Partida = $row907['Partida'];
 $Plano = $row907['Plano'];
 $CoefAjuste = $row907['CoefAjuste'];
 $VTierra = $row907['VTierra'];
 $TotPTSubp = $row907['TotPTSubp'];
 $Accesiones = $row907['Accesiones'];
 $Destino = $row907['Destino'];
 $Lugar = $row907['Lugar'];
 $Fecha = $row907['Fecha'];
 $ApellidoResp = $row907['ApellidoResp'];
 $TipoRes = $row907['TipoRes'];
 $DocumentoRes = $row907['DocumentoRes'];
 $LugarbRes = $row907['LugarbRes'];
 $Fecha1 = $row907['Fecha1'];
 $observaciones = $row907['observaciones'];
 $mostrarProf = $row907['firmaprof'];
 //FORMATO FECHA
 $strdate =  strtotime($Fecha);
//DESTINO
$rowDesti = mysqli_fetch_array(mysqli_query($conexion,"SELECT `cNo`, `Codigo`, `Tipo`, `Destino` FROM `destinos` WHERE `cNo`='$Destino'"));
$RDesti = $rowDesti['Destino'];
$RCod = $rowDesti['Codigo'];
$RTipo = $rowDesti['Tipo'];
//DATO LOCALIDAD
if ($LugarbRes !=0) {
  $rowLoca = mysqli_fetch_array(mysqli_query($conexion,"SELECT `idLocalidad`, `idPartido`, `localidad`, `codigoPostal`, `codProvincia`, `fechaDato` FROM `localidades` WHERE `idLocalidad`=$LugarbRes"));
  $local = $rowLoca['localidad'];
}else {
  $local=0;
}

$rowPro = mysqli_fetch_array(mysqli_query($conexion,"SELECT `pnombreApellido`,`matricula` FROM obras o, profesionales p where (o.codObra='$idobra') and (o.idProfesional=p.idProfesional)"));

$RpnombreApellido= $rowPro['pnombreApellido'];
$Rpmatricula = $rowPro['matricula'];

$rowD = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM obras o, destinatarios d, localidades l, provincias pr
      where (o.codObra='$idobra') and (o.idDestinatario=d.idDestinatario) and (d.idLocalidad=l.idLocalidad) and (o.desactivada=0)"));

$DnombreApellido= $rowD['dnombreApellido'];
$Dcalle= $rowD['calle'];
$Ddni = $rowD['dni'];
$Dtipodni = $rowD['tipoDni'];
$DnroCalle= $rowD['nroCalle'];
$Dcuerpo= $rowD['cuerpo'];
$Dpiso= $rowD['piso'];
$Ddpto= $rowD['departamento'];
$Dlocalidad= $rowD['localidad'];
$Dcp= $rowD['codigoPostal'];
?>
