<?php
include("sesion.php");

	$pagina='cedula10707FormulariosCopiarPHP';
// duplica cedulas y formularios
  include("encabezado.php");
include("seguridad.php");

$idCedula =$_REQUEST['idCedula707'];
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
			or die("Problemas en el alta copia formularios ".mysqli_error($conexion));

			/* se obtiene el ultimo codigo de la cedula ingresado */
										$resultob = mysqli_query($conexion,"SELECT MAX(idCedula707) AS id FROM cedula10707");
										$vecob = mysqli_fetch_array($resultob);
									if (!$resultob){
										die("Error: Datos no encontrados..");
									}

									$idCedulaN=$vecob['id'] ;

// Muestra formularios
			$rowVec = mysqli_query($conexion,"SELECT * FROM cedulaformularios WHERE (idCedula = '$idCedula')and (tipoCedula='1')");

				while($row= mysqli_fetch_array($rowVec)){

					$nroFormulario=$row['nroFormulario'];
					$version=	$row['version'];
					$dataN=$row['data'];
					$codForm=	$row['codForm'];

				include("formulariosDuplicacion.php");

  mysqli_query($conexion,"INSERT INTO cedulaformularios
		(idCedulaFormularios, idCedula,tipoCedula,nroFormulario,version,data,codForm)
	 		VALUES ('','$idCedulaN','1','$nroFormulario','$version','$dataN','$codFormNue')");


}
			echo "<script language='javascript'>";
			echo "alert('La cedula y formularios fueron copiados');";
    	echo "window.location='cedula10707Buscar.php';";
			echo "</script>";



	?>
