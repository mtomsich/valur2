<?php
include("sesion.php");
// duplica cedulas
	$pagina='cedula10707CopiarPHP';
	$idCedula =$_REQUEST['idCedula707'];
	include("encabezado.php");
	include("seguridad.php");
	include("sql/mostrarDatosCedula10707.php");
	include("sql/mostrarDatosObra.php");
	include("sql/insert.php");


	$sqlobra= insertObra($FcodPartido,$FidLocalidad,$Fpartida, $FidCliente, $Fdomicilio,$FnroCalle,$Fcuerpo,$Fpiso,$Fdpto,$FesqCalle,$FyCalle,
	$Fcir,	$Fsec,	$Fcha,	$Fqui,	$Ffra,	$Fman,	$Fpar, $Fsub, $FinfraP, $FinfraA, $FinfraL, $FinfraAg, $FinfraG, $FinfraC,$FidFirmante,
	$FidDestinatario,$FidProfesional,$FtipoObra);

	mysqli_query($conexion,$sqlobra)
	or die("Problemas en el alta ".mysqli_error($conexion));

	$rs=mysqli_query($conexion,"SELECT MAX(codObra) AS id FROM obras");
	if ($row1 = mysqli_fetch_row($rs)) {
		$idobra = trim($row1[0]);
	}

		$sqlp= insertCedula707($idobra,$FfechaImp,$Flugar,$FanioImp,$Fdesct,$Fcaract,$Fpart,$Forden,$Fanio, $Fdesignacion, $FmedidasPd,
			$FmedidasPc, $FmedidasRA, $Finscriptipo1, $Finscripnro1, $Finscripanio1, $Finscriptipo2, $Finscripnro2, $Finscripanio2, $Finscriptipo3,
			$Finscripnro3, $Finscripanio3, $Finscriptipo4, $Finscripnro4, $Finscripanio4,$Finscriptipo5, $Finscripnro5, $Finscripanio5, $FplanosAntA, 
			$FplanosAntB, $FplanosAntC,$FedificioA, $FedificioB, $FedificioC, $FedificioD, $FedificioE, $FedificioF,$FedificioG, $FedificioH,
			$FedificioI, $FedificioJ, $Fedificio, $Fmejora, $Ftierra, $Ftotal, $FmedidasO,$FimpInm, $FimpSel, $Fotrosph, $Fcod, $FefeMes, $FefeAnio,  $Fhoja, $FcantHoja,$Fanexo,$FampAnexo);


		mysqli_query($conexion,$sqlp)
			or die("Problemas en el alta ".mysqli_error($conexion));

			echo "<script language='javascript'>";
			echo "alert('La cedula 10707 fue copiada');";
			echo "window.location='cedula10707Buscar.php';";
			echo "</script>";

	?>
