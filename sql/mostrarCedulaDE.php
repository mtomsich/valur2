<?php
// consulta sql mostrar los datos de la cedula 10707
	$pagina='mostrarCedulaDEPHP';
	include ("sql/conexion.php");

	

	$row = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedulade where idCedulaDE='$idCedula'"));
	$idobra= $row['codObra'];
	$Fph= $row['ph'];
	$Fnro= $row['nro'];
	$Fanio= $row['anio'];
	$FfechaAprob= $row['fechaAprob'];
	$FfechaImp= $row['fechaImp'];
	$FCon= $row['con'];
	$Fuf= $row['uf'];
	$Fpol= $row['pol'];
  $Fbcub= $row['bcub'];
  $Fbscub=$row['bscub'];
	$Fbdes= $row['bdes'];
	$FbtotalPolig= $row['btotalPolig'];
	$FunPcub= $row['unPcub'];
	$FunPscub= $row['unPscub'];
  $FunPdes= $row['unPdes'];
	$FunPtotalPolig= $row['unPtotalPolig'];
  $FtotalFunc= $row['totalFunc'];
  $FdosPcub= $row['dosPcub'];
  $FdosPscub= $row['dosPscub'];
	$FvdosPpdes= $row['dosPpdes'];
	$FdosPtotalPolig= $row['dosPtotalPolig'];
	$Ftcub= $row['tcub'];
	$Ftscu= $row['tscu'];
	$Ftdes= $row['tdes'];
	$FttotalPolig= $row['ttotalPolig'];
	$FttotalFunc= $row['ttotalFunc'];
	$FmedidasRa= $row['medidasRa'];
	$Ftierra= $row['tierra'];
	$Fvpropio= $row['vpropio'];
	$Fvcomun= $row['vcomun'];
	$FtotalEdificio= $row['totalEdificio'];
	$Fsuma= $row['suma'];
	$Fdestino= $row['destino'];
	$FmedidasOp= $row['medidasOp'];
	$FimpInm= $row['impInm'];
	$FimpSel= $row['impSel'];
	$Fotros= $row['otros'];
	$Fcod= $row['cod'];
	$FefeMes= $row['efeMes'];
	$FefeAnio= $row['efeAnio'];
	$FmedidasOb= $row['medidasOb'];
	$Fanexo = $row['anexo'];
	$FampAnexo = $row['ampAnexo'];
	$Flugar = $row['lugar'];
	$FanioImp = $row['anioImp'];
	$FidUnidFun = $row['uf'];
	$Fopol = $row['pol'];
	$Focub = $row['bcub'];
	$Foscub = $row['bscub'];
	$Fodescub = $row['bdes'];
	$Fobal = '';
	$otros = $row['otros'];
	$Fotpol = $row['btotalPolig'];

	// plantas que lo componen 
	$plantas = "";
	if (($Fbcub != 0)||($Fbscub!=0)||($Fbdes!=0)) {
		$plantas = "Baja";
		if (($FunPcub!=0)||($FunPscub!=0)||($FunPdes!=0)) {
			$plantas .= ", 1er Piso";
			if (($FdosPcub!=0)||($FdosPscub!=0)||($FvdosPpdes!=0)) {
				$plantas .= " y 2do Piso";
			}
		}
	}

	?>
