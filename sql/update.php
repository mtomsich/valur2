<?php

	//actualizar cliente
	function updateCliente($FnombreApellido,$FtipoDni,$Fdni,$Fcuit,$Ftelefono,$Fcaracter,$Fcalle,$FnroCalle,$Fcuerpo,$Fdepartamento,$Fpiso,$FidPartido,$FidLocalidad,$idcliente)	{

		$sqlcliente="UPDATE clientes SET
			cnombreApellido='$FnombreApellido',
			tipoDni= '$FtipoDni',
			dni='$Fdni',
			cuit='$Fcuit',
			telefono='$Ftelefono',
			caracter='$Fcaracter',
			calle='$Fcalle',
			nroCalle='$FnroCalle',
			cuerpo='$Fcuerpo',
			departamento='$Fdepartamento',
			piso='$Fpiso',
			idPartido	='$FidPartido',
			idLocalidad	='$FidLocalidad'

		 WHERE idCliente='$idcliente'";

		return $sqlcliente;
	}

		//actualizar firmante
	function updateFirmante($FnombreApellido,$Ftelefono,$Fcaracter,$Fcalle,$FnroCalle,$Fcuerpo,$Fdepartamento,$Fpiso,$FidPartido,$FidLocalidad,$idfirmante)	{

		$sqlfirmante="UPDATE firmantes SET
			fnombreApellido='$FnombreApellido',
			telefono='$Ftelefono',
			caracter='$Fcaracter',
			calle='$Fcalle',
			nroCalle='$FnroCalle',
			cuerpo='$Fcuerpo',
			departamento='$Fdepartamento',
			piso='$Fpiso',
			idPartido	='$FidPartido',
			idLocalidad='$FidLocalidad'

		 WHERE idFirmante='$idfirmante'";

		return $sqlfirmante;
	}

		function updateDestinatario($FnombreApellido,$FtipoDni,$Fdni,$Ftelefono,$Fcaracter,$Fcalle,$FnroCalle,$Fcuerpo,$Fdepartamento,$Fpiso,$FidLocalidad,$iddestinatario)	{

		$sqldestinatario="UPDATE destinatarios SET
			dnombreApellido='$FnombreApellido',
			tipoDni= '$FtipoDni',
			dni='$Fdni',
			telefono='$Ftelefono',
			caracter='$Fcaracter',
			calle='$Fcalle',
			nroCalle='$FnroCalle',
			cuerpo='$Fcuerpo',
			departamento='$Fdepartamento',
			piso='$Fpiso',
			idLocalidad='$FidLocalidad'

		 WHERE idDestinatario='$iddestinatario'";

		return $sqldestinatario;
	}

		//actualizar profesional
	function updateProfesional($FnombreApellido,$FtipoDni,$Fdni,$Fsexo,$Fcuit,$Fdistrito,$Fmatricula,$Ftitulo,$Ftelefono,$Fcalle,$FnroCalle,$Fcuerpo,$Fdepartamento,$Fpiso,$FidLocalidad,$idprofesional)	{

		$sqlpro="UPDATE profesionales SET
			pnombreApellido='$FnombreApellido',
			tipoDni= '$FtipoDni',
			dni='$Fdni',
			sexo='$Fsexo',
			cuit='$Fcuit',
			distrito='$Fdistrito',
			matricula='$Fmatricula',
			titulo='$Ftitulo',
			telefono='$Ftelefono',
			calle='$Fcalle',
			nroCalle='$FnroCalle',
			cuerpo='$Fcuerpo',
			departamento='$Fdepartamento',
			piso='$Fpiso',
			idLocalidad='$FidLocalidad'

		 WHERE idProfesional='$idprofesional'";

		return $sqlpro;
	}


	function updateObra($Fpartido,$Flocalidad,$Fpartida, $Fdomicilio,$FnroCalle,$Fcuerpo,$Fpiso,$Fdpto,$FesqCalle,$FyCalle,
	$Fcir,$Fsec,$Fcha,$Fqui,$Ffra,$Fman,$Fpar,$Fsub,$FinfraP,$FinfraA,$FinfraL,$FinfraAg,$FinfraG,$FinfraC,$FidCliente,$FidFirmante,$FidDestinatario,$FidProfesional,$FtipoObra,$idObra){

	$sqlobra="UPDATE obras SET

	  codPartido	='$Fpartido',
	  partida	='$Fpartida',
	  idLocalidad='$Flocalidad',
  	calle ='$Fdomicilio',
		nro	='$FnroCalle',
		cuerpo='$Fcuerpo',
		piso	='$Fpiso',
		dpto 	='$Fdpto',
		entreCalle='$FesqCalle',
		yCalle	='$FyCalle',
		circuns	='$Fcir',
		seccion	='$Fsec',
		chacra ='$Fcha',
		quinta ='$Fqui',
		fraccion ='$Ffra',
		manzana ='$Fman',
		parcela ='$Fpar',
		subparcela ='$Fsub',
		infraP ='$FinfraP',
		infraA ='$FinfraA',
		infraL ='$FinfraL',
		infraAg ='$FinfraAg',
		infraG = '$FinfraG',
		infraC = '$FinfraC',
		idCliente ='$FidCliente',
		idFirmante='$FidFirmante',
		idDestinatario	='$FidDestinatario',
		idProfesional='$FidProfesional',
		tipoObra='$FtipoObra'

		WHERE codObra='$idObra'";

		return $sqlobra;

	}

	function updateLocalidad($idProvincia, $idPartido, $localidad, $codPostal, $idlocalidad){

		$sqlLocModificar="UPDATE localidades SET

	  idPartido ='$idPartido',
	  localidad	='$localidad',
	  codigoPostal ='$codPostal',
  	codProvincia ='$idProvincia'

		WHERE idLocalidad='$idlocalidad'";

		return $sqlLocModificar;
	}

	function updatePartido($partido, $codPartido, $idpartido){

		$sqlParModificar="UPDATE partidos SET

		codPartido ='$codPartido',
		partido ='$partido'

		WHERE idPartido='$idpartido'";

		return $sqlParModificar;
	}


	//actualizar cedula 10707
	function updateCedula707($FfechaImp,$Flugar,$FanioImp,$Fdesct,$Fcaract,$Fpart,$Forden,$Fanio, $Fdesignacion,
	$FmedidasPd, $FmedidasPc, $FmedidasRA, $Finscriptipo1, $Finscripnro1, $Finscripanio1, $Finscriptipo2,
	$Finscripnro2, $Finscripanio2, $Finscriptipo3, $Finscripnro3, $Finscripanio3, $Finscriptipo4, $Finscripnro4, $Finscripanio4,
	$Finscriptipo5, $Finscripnro5, $Finscripanio5,$FplanosAntA, $FplanosAntB, $FplanosAntC,
	$FedificioA, $FedificioB, $FedificioC, $FedificioD, $FedificioE, $FedificioF,
	 $FedificioG, $FedificioH, $FedificioI, $FedificioJ, $Fedificio, $Fmejora, $Ftierra, $Ftotal, $FmedidasO,
$FimpInm, $FimpSel, $Fotrosph, $Fcod, $FefeMes, $FefeAnio, $Fhoja, $FcantHoja, $idCedula707,$anexo,$ampAnexo) {

		$sqlced7= "UPDATE cedula10707 SET

		fechaImp='$FfechaImp',
		lugar='$Flugar',
		anioImp='$FanioImp',
		desct='$Fdesct',
		caract= '$Fcaract',
		part='$Fpart',
		orden= '$Forden',
		anio= '$Fanio',
		designacion=	'$Fdesignacion',
		medidasPd= '$FmedidasPd',
		medidasPc='$FmedidasPc',
		medidasRA=	'$FmedidasRA',
		inscriptipo1='$Finscriptipo1',
		inscripnro1= '$Finscripnro1',
		inscripanio1= '$Finscripanio1',
		inscriptipo2='$Finscriptipo2',
		inscripnro2= '$Finscripnro2',
		inscripanio2= 	 '$Finscripanio2',
		inscriptipo3='$Finscriptipo3',
		inscripnro3='$Finscripnro3',
		inscripanio3='$Finscripanio3',
		inscriptipo4= '$Finscriptipo4',
		inscripnro4= '$Finscripnro4',
		inscripanio4= 	 '$Finscripanio4',
		inscriptipo5= '$Finscriptipo5',
		inscripnro5= '$Finscripnro5',
		inscripanio5= 	 '$Finscripanio5',
		planosAntA= '$FplanosAntA',
		planosAntB= '$FplanosAntB',
		planosAntC= '$FplanosAntC',
		edificioA='$FedificioA',
		edificioB= '$FedificioB',
		edificioC= '$FedificioC',
		edificioD=	 '$FedificioD',
		edificioE= '$FedificioE',
		edificioF='$FedificioF',
		edificioG= '$FedificioG',
		edificioH=		 '$FedificioH',
		edificioI= '$FedificioI',
		edificioJ= '$FedificioJ',
		edificio='$Fedificio',
		mejora=	 '$Fmejora',
		tierra='$Ftierra',
		total= '$Ftotal',
		medidasO= '$FmedidasO',
		impInm=	'$FimpInm',
	  impSel= '$FimpSel',
	  otrosph= '$Fotrosph',
    cod ='$Fcod',
		efeMes= '$FefeMes',
		efeAnio= '$FefeAnio',
		hoja= '$Fhoja',
		cantHoja= '$FcantHoja',
		anexo='$anexo',
		ampAnexo='$ampAnexo'

		WHERE idCedula707='$idCedula707'";

		return $sqlced7;
	}

	//Actualizar cedulaph de una unidad funcional
  function ActualizarCedulaPH( $idCedulaPH,$FfechaImp,$Flugar,$FanioImp,$FinscripTipo,$FinscripNro,$Fplano,$Fph,$Fcpartido,$Fnro1,$Fnro2,
  $FunUF,$FcantUF, $Fanio, $FfechaAprob,$estadoNro,$estado, $FaCon, $FeCon, $Fcons,	$FmedidasRA,$FimpInm,
  $FimpSel, $Fotros,$Fcod, $FefeMes, $FefeAnio,$FmedidasOb, $Fdestino, $FmedidasOp,$anexo,$ampAnexo){

 	 $sqlPH= "UPDATE cedulaph SET

	fechaImp='$FfechaImp',
	lugar='$Flugar',
	anioImp='$FanioImp',
	inscripTipo='$FinscripTipo',
	inscripNro='$FinscripNro',
	plano='$Fplano',
  ph=	'$Fph',
	cpartido='$Fcpartido',
	nro1='$Fnro1',
	nro2='$Fnro2',
	unidad='$FunUF',
	cantUF='$FcantUF',
	anio= '$Fanio',
	fechaAprob='$FfechaAprob',
	estadoNro='$estadoNro',
	estado='$estado',
	aCon= '$FaCon',
	eCon= '$FeCon',
	cons= '$Fcons',
	medidasRA= '$FmedidasRA',
	impInm= '$FimpInm',
	impSel=  '$FimpSel',
	otrosph= '$Fotros',
	cod= '$Fcod',
	efeMes= '$FefeMes',
	efeAnio=  '$FefeAnio',
	medidasOb= '$FmedidasOb',
	destino= '$Fdestino',
	medidasOp='$FmedidasOp',
	anexo='$anexo',
	ampAnexo='$ampAnexo'

	WHERE idCedulaPH='$idCedulaPH'";

 	 return $sqlPH;
  }

	function updateCedulaDE($idCedulaDE,$ph,$nro,$anio,$fechaAprob,$con,$uf,$pol,$bcub,$bscub,$bdes,$btotalPolig,$unPcub,
	$unPscub,$unPdes,$unPtotalPolig,$totalFunc,$dosPcub,$dosPscub,$dosPpdes,$dosPtotalPolig,$tcub,$tscu,$tdes,$ttotalPolig,$ttotalFunc,
	$medidasRa,$tierra,$vpropio,$vcomun,$totalEdificio,$suma,$destino,$medidasOp,$anexo,$ampAnexo){

	  $sqlDE = "UPDATE cedulade SET
	  ph = '$ph',
	  nro = '$nro',
	  anio = '$anio',
	  fechaAprob = '$fechaAprob',
	  con = '$con',
	  uf = '$uf',
	  pol = '$pol',
	  bcub = '$bcub',
	  bscub = '$bscub',
	  bdes = '$bdes',
	  btotalPolig = '$btotalPolig',
	  unPcub = '$unPcub',
	  unPscub = '$unPscub',
	  unPdes = '$unPdes',
	  unPtotalPolig = '$unPtotalPolig',
	  totalFunc = '$totalFunc',
	  dosPcub = '$dosPcub',
	  dosPscub = '$dosPscub',
	  dosPpdes = '$dosPpdes',
	  dosPtotalPolig = '$dosPtotalPolig',
	  tcub = '$tcub',
	  tscu = '$tscu',
	  tdes = '$tdes',
	  ttotalPolig = '$ttotalPolig',
	  ttotalFunc = '$ttotalFunc',
	  medidasRa = '$medidasRa',
	  tierra = '$tierra',
	  vpropio = '$vpropio',
	  vcomun = '$vcomun',
	  totalEdificio = '$totalEdificio',
	  suma = '$suma',
	  destino = '$destino',
	  medidasOp = '$medidasOp',
	  anexo = '$anexo',
	  ampAnexo = '$ampAnexo'

	  WHERE idCedulaDE = '$idCedulaDE' ";

	  return $sqlDE;
	}

	function updateForm901($idform, $ajuste, $basico, $superficie, $valor, $valor1955, $aux,
	$observacion, $valorCalle1, $valorCalle2, $valorCalle3, $valorCalle4, $calle1, $calle2,
	$calle3, $calle4, $mostrarProf){
			$sql901="UPDATE form901 SET

			Ajuste= '$ajuste',
			Basico= '$basico',
			Superficie= '$superficie',
			Valor= '$valor',
			Valor1955= '$valor1955',
			Destino= '$aux',
			observacion= '$observacion',
			ValorCalle1= '$valorCalle1',
			ValorCalle2= '$valorCalle2',
			ValorCalle3= '$valorCalle3',
			ValorCalle4= '$valorCalle4',
			Calle1= '$calle1',
			Calle2= '$calle2',
			Calle3= '$calle3',
			Calle4= '$calle4',
			firmaprof= '$mostrarProf'

			WHERE codForm901='$idform'";

			return $sql901;
	}
	function updateFormA901($idform, $ajuste, $tierraBas, $superficie, $tierraAct, $edifAct, $mejAct,
	$comAct, $postura, $coefAjuste, $aux, $observacion, $articulo, $mostrarProf){
			$sqla901="UPDATE forma901 SET

			Ajuste= '$ajuste',
			TierraBas= '$tierraBas',
			Superficie= '$superficie',
			TierraAct= '$tierraAct',
			EdifAct= '$edifAct',
			MejAct= '$mejAct',
			ComAct= '$comAct',
			Postura= '$postura',
			CoefAjuste= '$coefAjuste',
			Destino= '$aux',
			observacion= '$observacion',
			Articulo= '$articulo',
			firmaprof= '$mostrarProf'

			WHERE codFormA901='$idform'";

			return $sqla901;
	}
	function updateForm910($idform,$superficie,$tierraBas,$mejyedi,$edifBas,$edifAct,
	$mejBas912,$planBas,$coefAjuste,$observacion,$detalle){
		$sql910="UPDATE form910 SET

		Superficie= '$superficie',
		TierraBas= '$tierraBas',
		TierraAju= '$mejyedi',
		EdifBas= '$edifBas',
		EdifAct= '$edifAct',
		MejBas912= $mejBas912,
		PlanBas= '$planBas',
		CoefAjuste= '$coefAjuste',
		observacion= '$observacion',
		Articulo= '$detalle'

		WHERE codForm910='$idform'";

		return $sql910;
	}
	function updateFormA910($idform, $aptitud, $tierraAju, $superficie, $entero, $tierraBas,
			$tierraAct, $edifAct, $mejAct, $planAct, $postura, $articulo, $mostrarProf,
			$coefAjuste, $destino, $observacion, $ala1, $ala2, $siloCant1, $siloEst1, $siloData1,
			$siloCap1, $tanCant1, $ala3, $ala4, $siloCant2, $siloEst2, $siloData2, $siloCap2,
			$tanCant2, $ala5, $ala6, $siloCant3, $siloEst3, $siloData3, $siloCap3, $tanCant3, $ala7,
			$ala8, $ala9, $ala10, $moliCant1, $plantDet1, $plantSup1, $plantP1, $plantEst1, $ala11,
			$ala12, $moliCant2, $plantDet2, $plantSup2, $plantP2, $plantEst2, $ala13, $ala14, $moliCant3,
			$plantDet3, $plantSup3, $plantP3, $plantEst3, $ala15, $ala16, $moliCant4, $plantDet4, $plantSup4,
			$plantP4, $plantEst4, $ala17, $ala18, $moliCant5, $plantDet5, $plantSup5, $plantP5, $plantEst5,
			$moliCant6, $plantDet6, $plantSup6, $plantP6, $plantEst6){
				$sqlA910="UPDATE forma910 SET

				Aptitud= '$aptitud',
				TierraAju= '$tierraAju',
				Superficie= '$superficie',
				Entero= '$entero',
				TierraBas= '$tierraBas',
				EdifAct= '$edifAct',
				MejAct= '$mejAct',
				PlanAct= '$planAct',
				Postura= '$postura',
				CoefAjuste= '$coefAjuste',
				Destino= '$destino',
				observacion= '$observacion',
				Articulo= '$articulo',
				firmaprof= '$mostrarProf',
				Ala1= '$ala1',
				Ala2= '$ala2',
				SiloCant1= '$siloCant1',
				SiloEst1= '$siloEst1',
				SiloData1= '$siloData1',
				SiloCap1= '$siloCap1',
				TanCant1= '$tanCant1',
				Ala3= '$ala3',
				Ala4= '$ala4',
				SiloCant2= '$siloCant2',
				SiloEst2= '$siloEst2',
				SiloData2= '$siloData2',
				SiloCap2= '$siloCap2',
				TanCant2= '$tanCant2',
				Ala5= '$ala5',
				Ala6= '$ala6',
				SiloCant3= '$siloCant3',
				SiloEst3= '$siloEst3',
				SiloData3= '$siloData3',
				SiloCap3= '$siloCap3',
				TanCant3= '$tanCant3',
				Ala7= '$ala7',
				Ala8= '$ala8',
				Ala9= '$ala9',
				Ala10= '$ala10',
				MoliCant1= '$moliCant1',
				PlantDet1= '$plantDet1',
				PlantSup1= '$plantSup1',
				PlantP1= '$plantP1',
				PlantEst1= '$plantEst1',
				Ala11= '$ala11',
				Ala12= '$ala12',
				MoliCant2= '$moliCant2',
				PlantDet2= '$plantDet2',
				PlantSup2= '$plantSup2',
				PlantP2= '$plantP2',
				PlantEst2= '$plantEst2',
				Ala13= '$ala13',
				Ala14= '$ala14',
				MoliCant3= '$moliCant3',
				PlantDet3= '$plantDet3',
				PlantSup3= '$plantSup3',
				PlantP3= '$plantP3',
				PlantEst3= '$plantEst3',
				Ala15= '$ala15',
				Ala16= '$ala16',
				MoliCant4= '$moliCant4',
				PlantDet4= '$plantDet4',
				PlantSup4= '$plantSup4',
				PlantP4= '$plantP4',
				PlantEst4= '$plantEst4',
				Ala17= '$ala17',
				Ala18= '$ala18',
				MoliCant5= '$moliCant5',
				PlantDet5= '$plantDet5',
				PlantSup5= '$plantSup5',
				PlantP5= '$plantP5',
				PlantEst5= '$plantEst5',
				MoliCant6= '$moliCant6',
				PlantDet6= '$plantDet6',
				PlantSup6= '$plantSup6',
				PlantP6= '$plantP6',
				PlantEst6= '$plantEst6'

				WHERE codFormA910 = '$idform'";

				return $sqlA910;
			}
			function updateForm907($idform,$Plano,$CoefAjuste,$VTierra,$TotPTSubp,$Accesiones,
			$Destino,$Pais,$observaciones,$mostrarProf){

			  $sql907="UPDATE form907 SET

			  Plano = '$Plano',
			  CoefAjuste = '$CoefAjuste',
			  VTierra = '$VTierra',
			  TotPTSubp = '$TotPTSubp',
			  Accesiones = '$Accesiones',
			  Destino = '$Destino',
			  Pais = '$Pais',
			  observaciones = '$observaciones',
				firmaprof = '$mostrarProf'

			  WHERE codForm907='$idform'";

			  return $sql907;

			}

			function updateForm909($idform,$OliHect1,$OliArea1,$OliCa1,$OliPre1,$OliPro1,$OliPos1,$OliHect2,$OliArea2,
			$OliCa2,$OliPre2,$OliPro2,$OliPos2,$OliHect3,$OliArea3,$OliCa3,$OliPre3,$OliPro3,$OliPos3,$OliHect4,$OliArea4,$OliCa4,$OliPre4,$OliPro4,$OliPos4,$OliHect5,
			$OliArea5,$OliCa5,$OliPre5,$OliPro5,$OliPos5,$OliHect6,$OliArea6,$OliCa6,$OliPre6,$OliPro6,$OliPos6,$OliHect7,$OliArea7,$OliCa7,$OliPre7,$OliPro7,$OliPos7,
			$OliCa8,$OliHect8,$OliArea8,$OliPre8,$OliPro8,$OliPos8,$OliHect9,$OliArea9,$OliCa9,$OliPre9,$OliPro9,$OliPos9,$FrutDet1,$FruEst1,$FruHect1,$FruArea1,$FruCa1,
			$FruPre1,$FruPro1,$FruPos1,$FrutDet2,$FruEst2,$FruHect2,$FruArea2,$FruCa2,$FruPre2,$FruPro2,$FruPos2,$FrutDet3,$FruEst3,$FruHect3,$FruArea3,$FruCa3,$FruPre3,
			$FruPro3,$FruPos3,$FrutDet4,$FruEst4,$FruHect4,$FruArea4,$FruCa4,$FruPre4,$FruPro4,$FruPos4,$FrutDet5,$FruEst5,$FruHect5,$FruArea5,$FruCa5,$FruPre5,$FruPro5,
			$FruPos5,$FrutDet6,$FruEst6,$FruHect6,$FruArea6,$FruCa6,$FruPre6,$FruPro6,$FruPos6,$FrutDet7,$FruEst7,$FruHect7,$FruArea7,$FruCa7,$FruPre7,$FruPro7,$FruPos7,
			$FrutDet8,$FruEst8,$FruHect8,$FruArea8,$FruCa8,$FruPre8,$FruPro8,$FruPos8,$FrutDet9,$FruEst9,$FruHect9,$FruArea9,$FruCa9,$FruPre9,$FruPro9,$FruPos9,$PlanDet1,
			$PlanEst1,$PlanHect1,$PlanArea1,$PlanCa1,$PlanPre1,$PlanPro1,$PlanDet2,$PlanEst2,$PlanHect2,$PlanArea2,$PlanCa2,$PlanPre2,$PlanPro2,$PlanDet3,$PlanEst3,
			$PlanHect3,$PlanArea3,$PlanCa3,$PlanPre3,$PlanPro3,$PlanDet4,$PlanEst4,$PlanHect4,$PlanArea4,$PlanCa4,$PlanPre4,$PlanPro4,$PlanDet5,$PlanEst5,$PlanHect5,
			$PlanArea5,$PlanCa5,$PlanPre5,$PlanPro5,$PlanDet6,$PlanEst6,$PlanHect6,$PlanArea6,$PlanCa6,$PlanPre6,$PlanPro6,$PlanDet7,$PlanEst7,$PlanHect7,$PlanArea7,
			$PlanCa7,$PlanPre7,$PlanPro7,$PlanDet8,$PlanEst8,$PlanHect8,$PlanArea8,$PlanCa8,$PlanPre8,$PlanPro8,$PlanDet9,$PlanEst9,$PlanHect9,$PlanArea9,$PlanCa9,
			$PlanPre9,$PlanPro9,$mostrarProf){

			  $sql909="UPDATE form909 SET

			  OliHect1 = '$OliHect1', OliArea1 = '$OliArea1', OliCa1 = '$OliCa1', OliPre1 = '$OliPre1', OliPro1 = '$OliPro1', OliPos1 = '$OliPos1', OliHect2 = '$OliHect2',
			  OliArea2 = '$OliArea2', OliCa2 = '$OliCa2', OliPre2 = '$OliPre2', OliPro2 = '$OliPro2', OliPos2 = '$OliPos2', OliHect3 = '$OliHect3', OliArea3 = '$OliArea3',
			  OliCa3 = '$OliCa3', OliPre3 = '$OliPre3', OliPro3 = '$OliPro3', OliPos3 = '$OliPos3', OliHect4 = '$OliHect4', OliArea4 = '$OliArea4', OliCa4 = '$OliCa4',
			  OliPre4 = '$OliPre4', OliPro4 = '$OliPro4', OliPos4 = '$OliPos4', OliHect5 = '$OliHect5', OliArea5 = '$OliArea5', OliCa5 = '$OliCa5', OliPre5 = '$OliPre5',
			  OliPro5 = '$OliPro5', OliPos5 = '$OliPos5', OliHect6 = '$OliHect6', OliArea6 = '$OliArea6', OliCa6 = '$OliCa6', OliPre6 = '$OliPre6', OliPro6 = '$OliPro6',
			  OliPos6 = '$OliPos6', OliHect7 = '$OliHect7', OliArea7 = '$OliArea7', OliCa7 = '$OliCa7', OliPre7 = '$OliPre7', OliPro7 = '$OliPro7', OliPos7 = '$OliPos7',
			  OliCa8 = '$OliCa8', OliHect8 = '$OliHect8', OliArea8 = '$OliArea8', OliPre8 = '$OliPre8', OliPro8 = '$OliPro8', OliPos8 = '$OliPos8', OliHect9 = '$OliHect9',
			  OliArea9 = '$OliArea9', OliCa9 = '$OliCa9', OliPre9 = '$OliPre9', OliPro9 = '$OliPro9', OliPos9 = '$OliPos9',
			  FrutDet1 = '$FrutDet1', FruEst1 = '$FruEst1', FruHect1 = '$FruHect1', FruArea1 = '$FruArea1', FruCa1 = '$FruCa1', FruPre1 = '$FruPre1', FruPro1 = '$FruPro1',
			  FruPos1 = '$FruPos1', FrutDet2 = '$FrutDet2', FruEst2 = '$FruEst2', FruHect2 = '$FruHect2', FruArea2 = '$FruArea2', FruCa2 = '$FruCa2', FruPre2 = '$FruPre2',
			  FruPro2 = '$FruPro2', FruPos2 = '$FruPos2', FrutDet3 = '$FrutDet3', FruEst3 = '$FruEst3', FruHect3 = '$FruHect3', FruArea3 = '$FruArea3', FruCa3 = '$FruCa3',
			  FruPre3 = '$FruPre3', FruPro3 = '$FruPro3', FruPos3 = '$FruPos3', FrutDet4 = '$FrutDet4', FruEst4 = '$FruEst4', FruHect4 = '$FruHect4', FruArea4 = '$FruArea4',
			  FruCa4 = '$FruCa4', FruPre4 = '$FruPre4', FruPro4 = '$FruPro4', FruPos4 = '$FruPos4', FrutDet5 = '$FrutDet5', FruEst5 = '$FruEst5', FruHect5 = '$FruHect5',
			  FruArea5 = '$FruArea5', FruCa5 = '$FruCa5', FruPre5 = '$FruPre5', FruPro5 = '$FruPro5', FruPos5 = '$FruPos5', FrutDet6 = '$FrutDet6', FruEst6 = '$FruEst6',
			  FruHect6 = '$FruHect6', FruArea6 = '$FruArea6', FruCa6 = '$FruCa6', FruPre6 = '$FruPre6', FruPro6 = '$FruPro6', FruPos6 = '$FruPos6', FrutDet7 = '$FrutDet7',
			  FruEst7 = '$FruEst7', FruHect7 = '$FruHect7', FruArea7 = '$FruArea7', FruCa7 = '$FruCa7', FruPre7 = '$FruPre7', FruPro7 = '$FruPro7', FruPos7 = '$FruPos7',
			  FrutDet8 = '$FrutDet8', FruEst8 = '$FruEst8', FruHect8 = '$FruHect8', FruArea8 = '$FruArea8', FruCa8 = '$FruCa8', FruPre8 = '$FruPre8', FruPro8 = '$FruPro8',
			  FruPos8 = '$FruPos8', FrutDet9 = '$FrutDet9', FruEst9 = '$FruEst9', FruHect9 = '$FruHect9', FruArea9 = '$FruArea9', FruCa9 = '$FruCa9', FruPre9 = '$FruPre9',
			  FruPro9 = '$FruPro9', FruPos9 = '$FruPos9',
			  PlanDet1 = '$PlanDet1', PlanEst1 = '$PlanEst1', PlanHect1 = '$PlanHect1', PlanArea1 = '$PlanArea1', PlanCa1 = '$PlanCa1', PlanPre1 = '$PlanPre1',
			  PlanPro1 = '$PlanPro1', PlanDet2 = '$PlanDet2', PlanEst2 = '$PlanEst2', PlanHect2 = '$PlanHect2', PlanArea2 = '$PlanArea2', PlanCa2 = '$PlanCa2',
			  PlanPre2 = '$PlanPre2', PlanPro2 = '$PlanPro2', PlanDet3 = '$PlanDet3', PlanEst3 = '$PlanEst3', PlanHect3 = '$PlanHect3', PlanArea3 = '$PlanArea3',
			  PlanCa3 = '$PlanCa3', PlanPro3 = '$PlanPro3', PlanPre3 = '$PlanPre3', PlanDet4 = '$PlanDet4', PlanEst4 = '$PlanEst4', PlanHect4 = '$PlanHect4',
			  PlanArea4 = '$PlanArea4', PlanCa4 = '$PlanCa4', PlanPre4 = '$PlanPre4', PlanPro4 = '$PlanPro4', PlanDet5 = '$PlanDet5', PlanEst5 = '$PlanEst5',
			  PlanHect5 = '$PlanHect5', PlanArea5 = '$PlanArea5', PlanCa5 = '$PlanCa5', PlanPro5 = '$PlanPro5', PlanPre5 = '$PlanPre5', PlanDet6 = '$PlanDet6',
			  PlanEst6 = '$PlanEst6', PlanHect6 = '$PlanHect6', PlanArea6 = '$PlanArea6', PlanCa6 = '$PlanCa6', PlanPre6 = '$PlanPre6', PlanPro6 = '$PlanPro6',
			  PlanDet7 = '$PlanDet7', PlanEst7 = '$PlanEst7', PlanHect7 = '$PlanHect7', PlanArea7 = '$PlanArea7', PlanCa7 = '$PlanCa7', PlanPre7 = '$PlanPre7',
			  PlanPro7 = '$PlanPro7', PlanDet8 = '$PlanDet8', PlanEst8 = '$PlanEst8', PlanHect8 = '$PlanHect8', PlanArea8 = '$PlanArea8', PlanCa8 = '$PlanCa8',
			  PlanPre8 = '$PlanPre8', PlanPro8 = '$PlanPro8', PlanDet9 = '$PlanDet9', PlanEst9 = '$PlanEst9', PlanHect9 = '$PlanHect9', PlanArea9 = '$PlanArea9',
			  PlanCa9 = '$PlanCa9', PlanPre9 = '$PlanPre9', PlanPro9 = '$PlanPro9', firmaprof = '$mostrarProf'

			  WHERE codForm909='$idform'";

			  return $sql909;

			}

			function updateForm915($idform,$AMetros,$AFachada,$AParedes,$ATechos,$ACielorrasos,$ARevoques,$APisos,$AHierro,$AMadera,
			$ABano,$ACocina,$ARevest,$AInstalac,$AEstado,$ABasico,$BMetros,$BTrabajos,$BMamposteria,$BHormigon,$BTechos,$BCielorrasos,$BRevesti,$BPisos,
			$BCarpinteria,$BSanitaria,$BCocina,$BRevesti2,$BInsta2,$BEstado,$BBasico,$CMetros,$CFachada,$CParedes,$CEsqueleto,$CArmada,$CTechos,$CCielorrasos,$CRevoques,
			$CPisos,$CHierro,$CMadera,$CBano,$CRevesti,$CInstalac,$CEstado,$CBasico,$mostrarProf){

			$sql915="UPDATE form915 SET
			  AMetros = '$AMetros', AFachada = '$AFachada', AParedes = '$AParedes', ATechos = '$ATechos', ACielorrasos = '$ACielorrasos', ARevoques = '$ARevoques',
			  APisos = '$APisos', AHierro = '$AHierro', AMadera = '$AMadera', ABano = '$ABano', ACocina = '$ACocina', ARevest = '$ARevest', AInstalac = '$AInstalac',
			  AEstado = '$AEstado', ABasico = '$ABasico',
			  BMetros = '$BMetros', BTrabajos = '$BTrabajos', BMamposteria = '$BMamposteria', BHormigon = '$BHormigon', BTechos = '$BTechos', BCielorrasos = '$BCielorrasos',
			  BRevesti = '$BRevesti',	BPisos = '$BPisos', BCarpinteria = '$BCarpinteria', BSanitaria = '$BSanitaria', BCocina = '$BCocina', BRevesti2 = '$BRevesti2',
			  BInsta2 = '$BInsta2',	BEstado = '$BEstado', BBasico = '$BBasico',
			  CMetros = '$CMetros', CFachada = '$CFachada', CParedes = '$CParedes', CEsqueleto = '$CEsqueleto', CArmada = '$CArmada', CTechos = '$CTechos',
			  CCielorrasos = '$CCielorrasos',	CRevoques = '$CRevoques', CPisos = '$CPisos', CHierro = '$CHierro', CMadera = '$CMadera', CBano = '$CBano',
			  CRevesti = '$CRevesti', CInstalac = '$CInstalac', CEstado = '$CEstado', CBasico = '$CBasico', firmaprof = '$mostrarProf'

			  WHERE codForm915='$idform'";

			  return $sql915;

			}

			function updateForm918($idform,$Parcela,$Subparcela,$Partida,$VSup,$VTierra,$ValuacionEP,
      $Destino,$CodDestino,$observaciones){

      $sql918 ="UPDATE form918 SET

		 	VSup = '$VSup', VTierra = '$VTierra', ValuacionEP = '$ValuacionEP',
      Destino = '$Destino', CodDestino = '$CodDestino', observaciones = '$observaciones'

			WHERE codForm918 = '$idform'";

			return $sql918;
			}

			function updateComunicado( $idComunicado,
				$tipo, $nro1, $nro2, $nro3, $apro, $insc, $desi, $nomo,	$nomd, $part, $obje, $canp,
				$rest, $pat1, $cir1, $sec1, $cha1, $qui1,	$fra1, $man1, $par1, $sup1,	$des1, $pat2,
				$cir2, $sec2, $cha2, $qui2, $fra2, $man2,	$par2, $sup2, $des2, $pat3,	$cir3, $sec3,
				$cha3, $qui3, $fra3, $man3, $par3, $sup3,	$des3, $pat4, $cir4, $sec4, $cha4, $qui4,
				$fra4, $man4, $par4, $sup4, $des4, $pat5,	$cir5, $sec5, $cha5, $qui5, $fra5, $man5,
				$par5, $sup5, $des5, $canc, $rati, $mostrarProf)
		{
			$sqlcom= "UPDATE comunicados SET
			  tipo='$tipo',	nro1='$nro1', nro2='$nro2', nro3='$nro3', apro='$apro',	insc='$insc', desi='$desi', nomo='$nomo', nomd='$nomd',
				part='$part', obje='$obje', canp='$canp', rest='$rest', pat1='$pat1',	cir1='$cir1',	sec1='$sec1',	cha1='$cha1', qui1='$qui1',
				fra1='$fra1',	man1='$man1', par1='$par1', sup1='$sup1', des1='$des1', pat2='$pat2', cir2='$cir2', sec2='$sec2',	cha2='$cha2',
				qui2='$qui2', fra2='$fra2', man2='$man2', par2='$par2', sup2='$sup2', des2='$des2', pat3='$pat3', cir3='$cir3', sec3='$sec3',
			  cha3='$cha3',	qui3='$qui3',	fra3='$fra3',	man3='$man3',	par3='$par3',	sup3='$sup3',	des3='$des3',	pat4='$pat4',	cir4='$cir4',
				sec4='$sec4',	cha4='$cha4',	qui4='$qui4', fra4='$fra4',	man4='$man4',	par4='$par4',	sup4='$sup4',	des4='$des4', pat5='$pat5',
				cir5='$cir5', sec5='$sec5', cha5='$cha5', qui5='$qui5', fra5='$fra5', man5='$man5', par5='$par5', sup5='$sup5', des5='$des5',
				canc='$canc', rati='$rati', firmaprof='$mostrarProf'

				WHERE idComunicado = '$idComunicado'";
			return $sqlcom;
			}
?>
