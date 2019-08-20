<?php
	$pagina='insertPHP';

	// insert obra falta acomodar los campos con los de la obranueva

	function insertObra($Fpartido,$Flocalidad,$Fpartida, $FidCliente, $Fdomicilio,$FnroCalle,$Fcuerpo,$Fpiso,$Fdpto,$FesqCalle,$FyCalle,
	$Fcir,	$Fsec,	$Fcha,	$Fqui,	$Ffra,	$Fman,	$Fpar,$Fsub,$FinfraP, $FinfraA, $FinfraL, $FinfraAg, $FinfraG, $FinfraC,$FidFirmante,
	$FidDestinatario,$FidProfesional,$FtipoObra){

		$sqlobra="INSERT INTO obras(codObra,codPartido,idLocalidad,partida,idCliente,calle,nro,cuerpo,piso,dpto,entreCalle, yCalle,circuns,seccion,
			chacra,quinta,fraccion,manzana,parcela,subparcela,infraP,infraA,infraL,infraAg,infraG,infraC,idFirmante,idDestinatario,idProfesional,tipoObra)
		VALUES ('','$Fpartido','$Flocalidad','$Fpartida','$FidCliente','$Fdomicilio','$FnroCalle','$Fcuerpo','$Fpiso','$Fdpto','$FesqCalle',
			'$FyCalle','$Fcir','$Fsec','$Fcha','$Fqui','$Ffra','$Fman','$Fpar','$Fsub','$FinfraP','$FinfraA','$FinfraL','$FinfraAg','$FinfraG','$FinfraC',
			'$FidFirmante','$FidDestinatario','$FidProfesional','$FtipoObra')";

		return $sqlobra;

	}

	// insert cliente

	function insertCliente($FnombreApellido,$FtipoDni,$Fdni,$Fsexo,$Fcuit,$Ftelefono,$Fcaracter,$Fcalle,$FnroCalle,$Fcuerpo,
		$Fdepartamento,$Fpiso,$FidPartido,$FidLocalidad,$usuario)	{

		$sqlcliente="INSERT INTO clientes(idCliente, idUsuario, cnombreApellido, tipoDni, dni, sexo,cuit, telefono,caracter,
		calle, nroCalle, cuerpo, departamento,piso, idPartido,idLocalidad)
		VALUES ('', '$usuario', '$FnombreApellido', '$FtipoDni', '$Fdni','$Fsexo', '$Fcuit','$Ftelefono', '$Fcaracter',
		'$Fcalle', '$FnroCalle', '$Fcuerpo', '$Fdepartamento','$Fpiso', $FidPartido,$FidLocalidad)";

		return $sqlcliente;

	}

	// insert firmante nuevo

	function insertFirmanteNuevo($FnombreApellido,$FtipoDni,$Fdni,$Fsexo,$Fcuit,$Ftelefono,$Fcaracter,$Fcalle,$FnroCalle,$Fcuerpo,
	$Fdepartamento,$Fpiso,$FidPartido,$FidLocalidad,$FidCliente)	{

		$sqlfirnuevo="INSERT INTO firmantes(idFirmante, fnombreApellido, tipoDni, dni, sexo,cuit, telefono,caracter, calle, nroCalle, cuerpo, departamento,piso, idPartido,idLocalidad,idCliente)
		VALUES 	('', '$FnombreApellido', '$FtipoDni', '$Fdni', '$Fsexo', '$Fcuit','$Ftelefono', '$Fcaracter','$Fcalle', '$FnroCalle', '$Fcuerpo', '$Fdepartamento','$Fpiso', $FidPartido,$FidLocalidad,'$FidCliente')";

		return $sqlfirnuevo;
	}

	//insert Destinatario nuevo

	function insertDestinatarioNuevo($FnombreApellido,$FtipoDni,$Fdni,$Ftelefono,$Fcaracter,$Fcalle,$FnroCalle,$Fcuerpo,$Fdepartamento,$Fpiso,$FidLocalidad,$FidCliente)	{
		$sqldesnuevo="INSERT INTO destinatarios(idDestinatario, dnombreApellido, tipoDni, dni, telefono,caracter, calle, nroCalle, cuerpo, departamento,piso, idLocalidad,idCliente)
		VALUES  ('', '$FnombreApellido', '$FtipoDni', '$Fdni', '$Ftelefono', '$Fcaracter','$Fcalle', '$FnroCalle', '$Fcuerpo', '$Fdepartamento','$Fpiso', '$FidLocalidad','$FidCliente')";
		return $sqldesnuevo;
	}

	//insert profesional nuevo
	function insertProfesionalNuevo($FnombreApellido,$FtipoDni,$Fdni,$Fcuit,$Fdistrito,$Fmatricula,$Ftitulo,$Ftelefono,$Fcalle,$FnroCalle,$Fcuerpo,$Fdepartamento,$Fpiso,$FidLocalidad,$usuario)	{

		$sqlprof="INSERT INTO profesionales(idProfesional, idUsuario, pnombreApellido, tipoDni, dni, cuit, distrito, matricula, titulo, telefono, calle, nroCalle, cuerpo, departamento,piso, idLocalidad)
		VALUES  ('', '$usuario', '$FnombreApellido', '$FtipoDni', '$Fdni', '$Fcuit','$Fdistrito','$Fmatricula','$Ftitulo','$Ftelefono', '$Fcalle', '$FnroCalle', '$Fcuerpo', '$Fdepartamento','$Fpiso', '$FidLocalidad')";
		return $sqlprof;
	}

	//insert cedula 10707
	function insertCedula707($idobra,$FfechaImp,$Flugar,$FanioImp,$Fdesct,$Fcaract,$Fpart,$Forden,$Fanio, $Fdesignacion, $FmedidasPd,
		$FmedidasPc, $FmedidasRA, $Finscriptipo1, $Finscripnro1, $Finscripanio1, $Finscriptipo2, $Finscripnro2, $Finscripanio2, $Finscriptipo3,
		$Finscripnro3, $Finscripanio3, $Finscriptipo4, $Finscripnro4, $Finscripanio4,$Finscriptipo5, $Finscripnro5, $Finscripanio5, $FplanosAntA, $FplanosAntB, $FplanosAntC,
		$FedificioA, $FedificioB, $FedificioC, $FedificioD, $FedificioE, $FedificioF,$FedificioG, $FedificioH, $FedificioI,
		$FedificioJ, $Fedificio, $Fmejora, $Ftierra, $Ftotal, $FmedidasO,$FimpInm, $FimpSel, $Fotrosph, $Fcod, $FefeMes, $FefeAnio, $Fhoja, $FcantHoja,$Fanexo,$FampAnexo) {

		$sqlced7= "INSERT INTO cedula10707(idCedula707, codObra,fechaImp,lugar,anioImp,desct, caract, part, orden, anio, designacion, medidasPd,
			medidasPc, medidasRA, inscriptipo1, inscripnro1, inscripanio1, inscriptipo2, inscripnro2, inscripanio2, inscriptipo3,
			inscripnro3, inscripanio3, inscriptipo4, inscripnro4, inscripanio4, inscriptipo5, inscripnro5, inscripanio5, planosAntA, planosAntB, planosAntC,
			edificioA, edificioB, edificioC, edificioD, edificioE, edificioF,
			edificioG, edificioH, edificioI, edificioJ, edificio, mejora, tierra, total, medidasO, impInm, impSel, otrosph, cod,
			efeMes, efeAnio,  hoja, cantHoja,anexo,ampAnexo)
				VALUES ('','$idobra','$FfechaImp','$Flugar','$FanioImp','$Fdesct', '$Fcaract', '$Fpart', '$Forden', '$Fanio', '$Fdesignacion', '$FmedidasPd',
				 '$FmedidasPc', '$FmedidasRA', '$Finscriptipo1', '$Finscripnro1', '$Finscripanio1', '$Finscriptipo2', '$Finscripnro2', '$Finscripanio2', '$Finscriptipo3',
				 '$Finscripnro3', '$Finscripanio3','$Finscriptipo4', '$Finscripnro4', '$Finscripanio4','$Finscriptipo5', '$Finscripnro5', '$Finscripanio5', '$FplanosAntA', '$FplanosAntB', '$FplanosAntC',
				 '$FedificioA', '$FedificioB', '$FedificioC', '$FedificioD', '$FedificioE', '$FedificioF',
				 '$FedificioG', '$FedificioH', '$FedificioI', '$FedificioJ', '$Fedificio', '$Fmejora', '$Ftierra', '$Ftotal', '$FmedidasO',
				 '$FimpInm', '$FimpSel', '$Fotrosph', '$Fcod', '$FefeMes', '$FefeAnio', '$Fhoja', '$FcantHoja','$Fanexo','$FampAnexo')";

		return $sqlced7;
	}


	//Insert Decreto
	 function insertCedulaDE( $idobra,$FfechaImp,$Flugar,$FanioImp,$Fph, $Fnro, $Fanio,  $FfechaAprob,  $Fcon, $Fuf,  $Fpol,  $Fbcub,  $Fbscub,  $Fbdes,  $FbtotalPolig,  $F1pcub,
	 $F1pscu,  $F1pdes,  $F1ptotalPolig,  $FtotalFunc, $F2pcub,  $F2pscu,  $F2pdes,  $F2ptotalPolig,  $Ftcub,  $Ftscu,  $Ftdes,  $FttotalPolig,
	 $FttotalFunc,  $FmedidasRA,  $Ftierra,  $Fvpropio,  $Fvcomun,  $FtotalEdificio,  $Fsuma,  $Fdestino,
	 $FmedidasOp,  $FimpInm,  $FimpSel,  $Fotros,  $Fcod,  $FefeMes,  $FefeAnio,  $FmedidasOb,$anexo,$ampAnexo){

	 $sqlDE= "INSERT INTO cedulade(idCedulaDE, codObra, fechaImp,lugar,anioImp,ph, nro, anio, fechaAprob, con, uf, pol, bcub, bscub, bdes, btotalPolig, unPcub, unPscub, unPdes, unPtotalPolig,
	   totalFunc, dosPcub, dosPscub, dosPpdes, dosPtotalPolig, tcub, tscu, tdes, ttotalPolig, ttotalFunc, medidasRa, tierra, vpropio, vcomun, totalEdificio, suma, destino, medidasOp, impInm,
		 impSel, otros, cod, efeMes, efeAnio, medidasOb,anexo, ampAnexo)
	 			value ('','$idobra','$FfechaImp','$Flugar','$FanioImp','$Fph','$Fnro','$Fanio', '$FfechaAprob','$Fcon', '$Fuf', '$Fpol', '$Fbcub', '$Fbscub', '$Fbdes', '$FbtotalPolig', '$F1pcub', '$F1pscu', '$F1pdes', '$F1ptotalPolig', '$FtotalFunc',
				'$F2pcub', '$F2pscu', '$F2pdes', '$F2ptotalPolig', '$Ftcub', '$Ftscu', '$Ftdes', '$FttotalPolig',
				'$FttotalFunc', '$FmedidasRA', '$Ftierra', '$Fvpropio', '$Fvcomun', '$FtotalEdificio', '$Fsuma', '$Fdestino',
				'$FmedidasOp', '$FimpInm', '$FimpSel', '$Fotros', '$Fcod', '$FefeMes', '$FefeAnio', '$FmedidasOb','$anexo','$ampAnexo')";

	 return $sqlDE;
 }

 //Insert Ph falta armar la tabla y el insert
 function insertCedulaPH( $idobra,$FfechaImp,$Flugar,$FanioImp,$FinscripTipo,$FinscripNro,$Fplano,$Fph,$Fcpartido,$Fnro1,$Fnro2,
 $FUcUf,$FcantUF, $Fanio, $FfechaAprob,$estadoNro,$estado, $FaCon, $FeCon, $Fcons,
 $FmedidasRA,$FimpInm, $FimpSel, $Fotrosph,$Fcod, $FefeMes, $FefeAnio,$FmedidasOb,
 $Fdestino, $FmedidasOp,$Fanexo,$FampAnexo){

	 $sqlPH= "INSERT INTO cedulaph(idCedulaPH, codObra,fechaImp,lugar,anioImp,inscripTipo,inscripNro, plano,ph,cpartido,nro1,nro2,
		 unidad, cantUF, anio, fechaAprob, estadoNro, estado, aCon, eCon, cons,
		 medidasRA,impInm, impSel, otrosph,cod, efeMes, efeAnio,medidasOb,
		 destino, medidasOp,anexo,ampAnexo)
	 VALUES ('','$idobra','$FfechaImp','$Flugar','$FanioImp','$FinscripTipo','$FinscripNro','$Fplano','$Fph','$Fcpartido','$Fnro1','$Fnro2',
		 '$FUcUf','$FcantUF', '$Fanio', '$FfechaAprob','$estadoNro','$estado','$FaCon', '$FeCon', '$Fcons',
		 '$FmedidasRA', '$FimpInm','$FimpSel', '$Fotrosph', '$Fcod', '$FefeMes', '$FefeAnio', '$FmedidasOb',
		 '$Fdestino', '$FmedidasOp','$Fanexo','$FampAnexo')";

	 return $sqlPH;
 }


	//insert Partidos
	function insertProvinciaNuevo($provincia){

		$sqlProvincia= "INSERT INTO provincias(codProvincia, provincia)
		VALUES('','$provincia')";

		return $sqlProvincia;
	}

	function insertNuevoPartido($codPartido, $partido){

		$sqlPartido= "INSERT INTO partidos(idPartido, codPartido, partido)
		VALUES('','$codPartido','$partido')";

		return $sqlPartido;
	}

	function insertNuevaLocalidad($idPartido, $localidad, $codPostal, $codProvincia){

		$sqlLocalidad= "INSERT INTO localidades(idLocalidad, idPartido, localidad, codigoPostal, codProvincia)
		VALUES('','$idPartido','$localidad','$codPostal','$codProvincia')";

		return $sqlLocalidad;
	}

	function insertComunicado(    $tipo, $nro1, $nro2, $nro3, $apro, $insc, $desi, $nomo, $nomd, $part, $obje, $canp, $rest,
																$pat1, $cir1, $sec1, $cha1, $qui1, $fra1, $man1, $par1, $sup1, $des1, $pat2, $cir2, $sec2,
																$cha2, $qui2,	$fra2, $man2, $par2, $sup2, $des2, $pat3, $cir3, $sec3, $cha3, $qui3, $fra3,
																$man3, $par3, $sup3, $des3, $pat4, $cir4, $sec4, $cha4, $qui4, $fra4, $man4, $par4, $sup4,
																$des4, $pat5, $cir5, $sec5, $cha5, $qui5, $fra5, $man5, $par5, $sup5, $des5, $tcom, $canc, $rati, $firmaprof,$idUsuario)
{
	$sqlcomMRP="INSERT INTO comunicados(idComunicado, tipo, nro1, nro2, nro3, apro, insc, desi, nomo, nomd, part, obje, canp, rest,
		 																								pat1, cir1, sec1,	cha1, qui1, fra1, man1, par1, sup1, des1, pat2, cir2, sec2,
																										cha2, qui2,	fra2, man2, par2, sup2, des2, pat3, cir3, sec3, cha3, qui3, fra3,
																										man3,	par3, sup3, des3, pat4, cir4, sec4, cha4, qui4, fra4, man4, par4, sup4,
																										des4, pat5, cir5, sec5, cha5, qui5, fra5, man5, par5, sup5, des5, tcom, canc, rati, firmaprof,idUsuario)

											 VALUES( '',
											 			  '$tipo', '$nro1', '$nro2', '$nro3', '$apro', '$insc', '$desi', '$nomo', '$nomd', '$part', '$obje', '$canp','$rest',
														  '$pat1', '$cir1', '$sec1', '$cha1', '$qui1', '$fra1', '$man1', '$par1', '$sup1', '$des1', '$pat2', '$cir2', '$sec2',
															'$cha2', '$qui2',	'$fra2', '$man2', '$par2', '$sup2', '$des2', '$pat3', '$cir3', '$sec3', '$cha3', '$qui3', '$fra3',
															'$man3', '$par3', '$sup3', '$des3', '$pat4', '$cir4', '$sec4', '$cha4', '$qui4', '$fra4', '$man4', '$par4', '$sup4',
										 					'$des4', '$pat5', '$cir5', '$sec5', '$cha5', '$qui5', '$fra5', '$man5', '$par5', '$sup5', '$des5', '$tcom','$canc', '$rati','$firmaprof','$idUsuario')
								";

		return $sqlcomMRP;
		}


?>
