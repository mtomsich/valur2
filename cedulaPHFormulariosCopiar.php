<?php
include("sesion.php");
// duplica cedulas falta duplicar formularios

$pagina='cedulaPHFormulariosCopiarPHP';
include("encabezado.php");
include("seguridad.php");
$idObraUnidadFuncional=$_REQUEST['idObraUnidadFuncional'];
$idCedula=$_REQUEST['idCedulaPH'];
include("sql/mostrarCedulaPH.php");
include("sql/mostrarDatosObra.php");
include("sql/mostrarUnidadesFuncionales.php");
include("sql/insert.php");


	$sqlobra= insertObra($FcodPartido,$FidLocalidad,$Fpartida, $FidCliente, $Fdomicilio,$FnroCalle,$Fcuerpo,$Fpiso,$Fdpto,$FesqCalle,$FyCalle,
	$Fcir,	$Fsec,	$Fcha,	$Fqui,	$Ffra,	$Fman,	$Fpar,$Fsub,$FinfraP, $FinfraA, $FinfraL, $FinfraAg, $FinfraG, $FinfraC,	$FidFirmante,$FidDestinatario,$FidProfesional,$FtipoObra);

	mysqli_query($conexion,$sqlobra)
	or die("Problemas en el alta ".mysqli_error($conexion));

	$rs=mysqli_query($conexion,"SELECT MAX(codObra) AS id FROM obras");
	if ($row1 = mysqli_fetch_row($rs)) {
		$idobra = trim($row1[0]);
	}

	$sqlc= insertCedulaPH($idobra,$FfechaImp,$Flugar,$FanioImp,$FinscripTipo,$FinscripNro,$Fplano,$Fph,
	$Fcpartido,$Fnro1,$Fnro2,$FunUF,$FcantUF, $Fanio, $FfechaAprob, $FestadoNro,
	$Festado, $FaCon, $FeCon, $Fcons, $FmedidasRA,$FimpInm, $FimpSel, $Fotrosph,$Fcod, $FefeMes, $FefeAnio,$FmedidasOb,
  $Fdestino, $FmedidasOp,$Fanexo,$FampAnexo);

		mysqli_query($conexion,$sqlc)
			or die("Problemas en el alta ".mysqli_error($conexion));

			/* se obtiene el ultimo codigo de la cedula ingresado*/
										$resultob = mysqli_query($conexion,"SELECT MAX(idCedulaPH) AS id FROM cedulaph");
										$vecob = mysqli_fetch_array($resultob);
									if (!$resultob){
										die("Error: Datos no encontrados..");
									}

									$idCedulaN=$vecob['id'] ;

								$query="INSERT INTO obraunidadfuncional(idObraUnidadFuncional, idCedulaPH, idUnidFun, poligono, cubierta, semicubierta, descubierta, balcon, totalPolig, otros, tierra, vcomun,vpropio)
								 VALUES ('','$idCedulaN','$FidUnidFun','$Fopol','$Focub','$Foscub','$Fodescub','$Fobal','$Fotpol',' $otros','$Ftierra','$Fvcomun','$Fvpropio')";

								 mysqli_query($conexion,$query)
								 or die("Problemas en el alta de la unidad funcional ".mysqli_error($conexion));

								 // Muestra formularios
	 										$rowVec = mysqli_query($conexion,"SELECT * FROM cedulaformularios WHERE (idCedula = '$idCedula')
	 										and (tipoCedula='2')");

	 											while($row= mysqli_fetch_array($rowVec)){

	 												$nroFormulario=$row['nroFormulario'];
	 												$version=	$row['version'];
	 												$dataN=	$row['data'];
	 												$codForm=	$row['codForm'];

														include("formulariosDuplicacion.php");

	 							  mysqli_query($conexion,"INSERT INTO cedulaformularios(idCedulaFormularios, idCedula,tipoCedula,nroFormulario,version,data,codForm)
	 								 		VALUES ('','$idCedulaN','2','$nroFormulario','$version','$dataN','$codFormNue')");

	 							}

			echo "<script language='javascript'>";
			echo "alert('La cedula PH fue copiada');";
			echo "window.location='cedulaPHBuscar.php';";
			echo "</script>";



	?>
