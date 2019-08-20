<?php
    $pagina='insertFormularioPHP';
      function insertFormA910($parcela,$subparcela,$aptitud,$tierraAju,$superficie, $entero, $tierraBas,$tierraAct,$edifAct,$mejAct,
      $planAct,	$postura, $articulo, $mostrarProf, $coefAjuste,	$destino,	$obervacion, $ala1, $ala2, $siloCant1, $siloEst1, $siloData1,
      $siloCap1, $tanCant1, $ala3, $ala4, $siloCant2, $siloEst2, $siloData2, $siloCap2, $tanCant2, $ala5, $ala6, $siloCant3, $siloEst3,
      $siloData3, $siloCap3, $tanCant3, $ala7, $ala8, $ala9, $ala10, $moliCant1, $plantDet1, $plantSup1, $plantP1, $plantEst1, $ala11,
      $ala12, $moliCant2, $plantDet2, $plantSup2, $plantP2, $plantEst2, $ala13, $ala14, $moliCant3, $plantDet3, $plantSup3, $plantP3,
      $plantEst3, $ala15, $ala16, $moliCant4, $plantDet4, $plantSup4, $plantP4, $plantEst4, $ala17, $ala18, $moliCant5, $plantDet5,
      $plantSup5, $plantP5, $plantEst5, $moliCant6, $plantDet6, $plantSup6, $plantP6, $plantEst6){

      $sqlA910="INSERT INTO forma910(codFormA910, Interno, Parcela, Subparcela, TierraAju, TierraBas, Superficie, Entero, Aptitud, EdifBas,
        EdifAct, MejBas, MejAct, PlanBas, PlanAct, MejAct912, MejBas912, Postura, Ala1, Ala2, Ala3, Ala4, observacion, Ala5, Ala6,
        Ala7, Ala8, Ala9, Ala10, Ala11, Ala12, Ala13, Ala14, Ala15, Ala16, Ala17, Ala18, SiloCant1, SiloEst1, SiloData1, SiloCap1, SiloCant2,
        SiloEst2, SiloData2, SiloCap2, SiloCant3, SiloEst3, SiloData3, SiloCap3, MoliCant1, MoliCant2, MoliCant3, MoliCant4, MoliCant5, MoliCant6,
        TanCant1, TanCant2, TanCant3, PlantDet1, PlantSup1, PlantP1, PlantEst1, PlantDet2, PlantSup2, PlantP2, PlantEst2, PlantDet3, PlantSup3,
        PlantP3, PlantEst3, PlantDet4, PlantSup4, PlantP4, PlantEst4, PlantDet5, PlantSup5, PlantP5, PlantEst5, PlantDet6, PlantSup6, PlantP6,
        PlantEst6, Fecha, Destino, Articulo, firmaprof, Tierra1, Tierra2, CoefAjuste)

      VALUES ('','','$parcela','$subparcela','$tierraAju','$tierraBas','$superficie','$entero','$aptitud','','$edifAct','','$mejAct','',
          '$planAct','','','$postura','$ala1','$ala2','$ala3','$ala4','$obervacion','$ala5','$ala6','$ala7','$ala8','$ala9','$ala10','$ala11',
          '$ala12','$ala13','$ala14','$ala15','$ala16','$ala17','$ala18','$siloCant1','$siloEst1','$siloData1','$siloCap1','$siloCant2',
          '$siloEst2','$siloData2','$siloCap2','$siloCant3','$siloEst3','$siloData3','$siloCap3','$moliCant1','$moliCant2','$moliCant3',
          '$moliCant4','$moliCant5','$moliCant6','$tanCant1','$tanCant2','$tanCant3','$plantDet1','$plantSup1','$plantP1','$plantEst1',
          '$plantDet2','$plantSup2','$plantP2','$plantEst2','$plantDet3','$plantSup3','$plantP3','$plantEst3','$plantDet4','$plantSup4',
          '$plantP4','$plantEst4','$plantDet5','$plantSup5','$plantP5','$plantEst5','$plantDet6','$plantSup6','$plantP6','$plantEst6',
          '','$destino','$articulo','$mostrarProf','','','$coefAjuste')";

        return $sqlA910;

      }

      function insertFormA901($parcela,$subparcela,$ajuste,$tierraBas,$superficie,$tierraAct,$edifAct,$mejAct,$comAct,$postura,
      $coefAjuste,$destino,$observacion,$articulo){

        $sqlA901="INSERT INTO forma901(Parcela, Subparcela, Ajuste, TierraBas, Superficie, TierraAct, EdifAct, MejAct, ComAct, Postura,
        CoefAjuste, Destino, Observacion, Articulo, firmaprof)

        VALUES ('$parcela','$subparcela','$ajuste','$tierraBas','$superficie','$tierraAct','$edifAct','$mejAct','$comAct','$postura',
          '$coefAjuste','$destino','$observacion','$articulo','$mostrarProf')";

          return $sqlA901;
      }

      function insertForm901 ($parcela,$subparcela,$ajuste,$basico,$superficie,$valor,$valor1955,$destino,$observacion,$valorCalle1,$valorCalle2,$valorCalle3,
      $valorCalle4,$calle1,$calle2,$calle3,$calle4,$mostrarProf){

        $sql901="INSERT INTO form901(Parcela, Subparcela, Ajuste, Basico, Superficie, Valor, Valor1955, Destino, observacion, ValorCalle1, ValorCalle2,
        ValorCalle3, ValorCalle4, Calle1, Calle2, Calle3, Calle4, firmaprof)

        VALUES ('$parcela','$subparcela','$ajuste','$basico','$superficie','$valor','$valor1955','$destino','$observacion','$valorCalle1','$valorCalle2',
        '$valorCalle3','$valorCalle4','$calle1','$calle2','$calle3','$calle4','$mostrarProf')";

        return $sql901;
      }

      function insertForm910 ($parcela,$subparcela,$superficie,$tierraBas,$mejyedi,$edifBas,$edifAct,$mejBas912,$planBas,
      $coefAjuste,$observacion,$articulo){

        $sql910="INSERT INTO form910(Parcela, Subparcela, Superficie, TierraBas, TierraAju, EdifBas, EdifAct, MejBas912, PlanBas, CoefAjuste, observacion, Articulo)

        VALUES ('$parcela','$subparcela','$superficie','$tierraBas','$mejyedi','$edifBas','$edifAct','$mejBas912','$planBas','$coefAjuste','$observacion','$articulo')";

        return $sql910;
      }

      function insertForm907($Parcela,$Subparcela,$Pais,$Partida,$Plano,$CoefAjuste,$VTierra,$TotPTSubp,$Accesiones,
        $Destino,$Fecha,$ApellidoResp,$TipoRes,$DocumentoRes,$LugarbRes,$observaciones,$mostrarProf,$tipo){

          $sql907 ="INSERT INTO form907(codForm907,Interno,Parcela,Subparcela,Pais,Partida,Plano,CoefAjuste,VTierra,TotPTSubp,Accesiones,
          Destino,Lugar,Fecha,ApellidoResp,TipoRes,DocumentoRes,LugarbRes,Fecha1,observaciones,firmaprof,Tipo)

          VALUES ('','','$Parcela','$Subparcela','$Pais ','$Partida','$Plano','$CoefAjuste','$VTierra','$TotPTSubp','$Accesiones',
          '$Destino','','$Fecha','$ApellidoResp','$TipoRes','$DocumentoRes','$LugarbRes','','$observaciones','$mostrarProf','$tipo')";

          return $sql907;
        }

      function insertForm909($Parcela,$Subparcela,$OliHect1,$OliArea1,$OliCa1,$OliPre1,$OliPro1,$OliPos1,$OliHect2,$OliArea2,
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

      $sql909="INSERT INTO form909(codForm909,Interno,Parcela,Subparcela,Pagina,OliHect1,OliArea1,OliCa1,OliPre1,OliPro1,OliPos1,OliHect2,OliArea2,
      OliCa2,OliPre2,OliPro2,OliPos2,OliHect3,OliArea3,OliCa3,OliPre3,OliPro3,OliPos3,OliHect4,OliArea4,OliCa4,OliPre4,OliPro4,OliPos4,OliHect5,
      OliArea5,OliCa5,OliPre5,OliPro5,OliPos5,OliHect6,OliArea6,OliCa6,OliPre6,OliPro6,OliPos6,OliHect7,OliArea7,OliCa7,OliPre7,OliPro7,OliPos7,
      OliCa8,OliHect8,OliArea8,OliPre8,OliPro8,OliPos8,OliHect9,OliArea9,OliCa9,OliPre9,OliPro9,OliPos9,FrutDet1,FruEst1,FruHect1,FruArea1,FruCa1,
      FruPre1,FruPro1,FruPos1,FrutDet2,FruEst2,FruHect2,FruArea2,FruCa2,FruPre2,FruPro2,FruPos2,FrutDet3,FruEst3,FruHect3,FruArea3,FruCa3,FruPre3,
      FruPro3,FruPos3,FrutDet4,FruEst4,FruHect4,FruArea4,FruCa4,FruPre4,FruPro4,FruPos4,FrutDet5,FruEst5,FruHect5,FruArea5,FruCa5,FruPre5,FruPro5,
      FruPos5,FrutDet6,FruEst6,FruHect6,FruArea6,FruCa6,FruPre6,FruPro6,FruPos6,FrutDet7,FruEst7,FruHect7,FruArea7,FruCa7,FruPre7,FruPro7,FruPos7,
      FrutDet8,FruEst8,FruHect8,FruArea8,FruCa8,FruPre8,FruPro8,FruPos8,FrutDet9,FruEst9,FruHect9,FruArea9,FruCa9,FruPre9,FruPro9,FruPos9,PlanDet1,
      PlanEst1,PlanHect1,PlanArea1,PlanCa1,PlanPre1,PlanPro1,PlanDet2,PlanEst2,PlanHect2,PlanArea2,PlanCa2,PlanPre2,PlanPro2,PlanDet3,PlanEst3,
      PlanHect3,PlanArea3,PlanCa3,PlanPre3,PlanPro3,PlanDet4,PlanEst4,PlanHect4,PlanArea4,PlanCa4,PlanPre4,PlanPro4,PlanDet5,PlanEst5,PlanHect5,
      PlanArea5,PlanCa5,PlanPre5,PlanPro5,PlanDet6,PlanEst6,PlanHect6,PlanArea6,PlanCa6,PlanPre6,PlanPro6,PlanDet7,PlanEst7,PlanHect7,PlanArea7,
      PlanCa7,PlanPre7,PlanPro7,PlanDet8,PlanEst8,PlanHect8,PlanArea8,PlanCa8,PlanPre8,PlanPro8,PlanDet9,PlanEst9,PlanHect9,PlanArea9,PlanCa9,
      PlanPre9,PlanPro9,firmaprof)

      VALUES ('','','$Parcela','$Subparcela','','$OliHect1','$OliArea1','$OliCa1','$OliPre1','$OliPro1','$OliPos1','$OliHect2',
      '$OliArea2','$OliCa2','$OliPre2','$OliPro2','$OliPos2','$OliHect3','$OliArea3','$OliCa3','$OliPre3','$OliPro3','$OliPos3','$OliHect4','$OliArea4',
      '$OliCa4','$OliPre4','$OliPro4','$OliPos4','$OliHect5','$OliArea5','$OliCa5','$OliPre5','$OliPro5','$OliPos5','$OliHect6','$OliArea6','$OliCa6',
      '$OliPre6','$OliPro6','$OliPos6','$OliHect7','$OliArea7','$OliCa7','$OliPre7','$OliPro7','$OliPos7','$OliCa8','$OliHect8','$OliArea8','$OliPre8',
      '$OliPro8','$OliPos8','$OliHect9','$OliArea9','$OliCa9','$OliPre9','$OliPro9','$OliPos9','$FrutDet1','$FruEst1','$FruHect1','$FruArea1','$FruCa1',
      '$FruPre1','$FruPro1','$FruPos1','$FrutDet2','$FruEst2','$FruHect2','$FruArea2','$FruCa2','$FruPre2','$FruPro2','$FruPos2','$FrutDet3','$FruEst3',
      '$FruHect3','$FruArea3','$FruCa3','$FruPre3','$FruPro3','$FruPos3','$FrutDet4','$FruEst4','$FruHect4','$FruArea4','$FruCa4','$FruPre4','$FruPro4',
      '$FruPos4','$FrutDet5','$FruEst5','$FruHect5','$FruArea5','$FruCa5','$FruPre5','$FruPro5','$FruPos5','$FrutDet6','$FruEst6','$FruHect6','$FruArea6',
      '$FruCa6','$FruPre6','$FruPro6','$FruPos6','$FrutDet7','$FruEst7','$FruHect7','$FruArea7','$FruCa7','$FruPre7','$FruPro7','$FruPos7','$FrutDet8',
      '$FruEst8','$FruHect8','$FruArea8','$FruCa8','$FruPre8','$FruPro8','$FruPos8','$FrutDet9','$FruEst9','$FruHect9','$FruArea9','$FruCa9','$FruPre9',
      '$FruPro9','$FruPos9','$PlanDet1','$PlanEst1','$PlanHect1','$PlanArea1','$PlanCa1','$PlanPre1','$PlanPro1','$PlanDet2','$PlanEst2','$PlanHect2',
      '$PlanArea2','$PlanCa2','$PlanPre2','$PlanPro2','$PlanDet3','$PlanEst3','$PlanHect3','$PlanArea3','$PlanCa3','$PlanPre3','$PlanPro3','$PlanDet4',
      '$PlanEst4','$PlanHect4','$PlanArea4','$PlanCa4','$PlanPre4','$PlanPro4','$PlanDet5','$PlanEst5','$PlanHect5','$PlanArea5','$PlanCa5','$PlanPre5',
      '$PlanPro5','$PlanDet6','$PlanEst6','$PlanHect6','$PlanArea6','$PlanCa6','$PlanPre6','$PlanPro6','$PlanDet7','$PlanEst7','$PlanHect7','$PlanArea7',
      '$PlanCa7','$PlanPre7','$PlanPro7','$PlanDet8','$PlanEst8','$PlanHect8','$PlanArea8','$PlanCa8','$PlanPre8','$PlanPro8','$PlanDet9','$PlanEst9',
      '$PlanHect9','$PlanArea9','$PlanCa9','$PlanPre9','$PlanPro9','$mostrarProf')";

      return $sql909;

      }

      function insertForm915($Parcela,$Subparcela,$AMetros,$AFachada,$AParedes,$ATechos,$ACielorrasos,$ARevoques,$APisos,$AHierro,$AMadera,
      $ABano,$ACocina,$ARevest,$AInstalac,$AEstado,$ABasico,$BMetros,$BTrabajos,$BMamposteria,$BHormigon,$BTechos,$BCielorrasos,$BRevesti,$BPisos,
      $BCarpinteria,$BSanitaria,$BCocina,$BRevesti2,$BInsta2,$BEstado,$BBasico,$CMetros,$CFachada,$CParedes,$CEsqueleto,$CArmada,$CTechos,$CCielorrasos,$CRevoques,
      $CPisos,$CHierro,$CMadera,$CBano,$CRevesti,$CInstalac,$CEstado,$CBasico,$mostrarProf){

      $sql915="INSERT INTO  form915 (codForm915,Interno,Parcela,Subparcela,AMetros,AFachada,AParedes,ATechos,ACielorrasos,ARevoques,APisos,AHierro,AMadera,ABano,ACocina,
      ARevest,AInstalac,AEstado,ABasico,BMetros,BTrabajos,BMamposteria,BHormigon,BTechos,BCielorrasos,BRevesti,BPisos,BCarpinteria,BSanitaria,BCocina,
      BRevesti2,BInsta2,BEstado,BBasico,CMetros,CFachada,CParedes,CEsqueleto,CArmada,CTechos,CCielorrasos,CRevoques,CPisos,CHierro,CMadera,CBano,CRevesti,CInstalac,
      CEstado,CBasico,Pagina,TipoForm,firmaprof)

      VALUES ('','','$Parcela','$Subparcela','$AMetros','$AFachada','$AParedes','$ATechos','$ACielorrasos','$ARevoques','$APisos',
      '$AHierro','$AMadera','$ABano','$ACocina','$ARevest','$AInstalac','$AEstado','$ABasico','$BMetros','$BTrabajos','$BMamposteria','$BHormigon',
      '$BTechos','$BCielorrasos','$BRevesti','$BPisos','$BCarpinteria','$BSanitaria','$BCocina','$BRevesti2','$BInsta2','$BEstado','$BBasico',
      '$CMetros','$CFachada','$CParedes','$CEsqueleto','$CArmada','$CTechos','$CCielorrasos','$CRevoques','$CPisos','$CHierro','$CMadera','$CBano',
      '$CRevesti','$CInstalac','$CEstado','$CBasico','','','$mostrarProf')";

      return $sql915;

      }

      function insertForm918($Parcela,$Subparcela,$Partida,$VSup,$VTierra,$ValuacionEP,$Destino,$observaciones){

      $sql918="INSERT INTO  form918 (codForm918,Parcela,Subparcela,Partida,VSup,VTierra,ValuacionEP,Destino,CodDestino,ApellidoResp,legajo,Fecha,observaciones)

      VALUES ('','$Parcela','$Subparcela','$Partida','$VSup','$VTierra','$ValuacionEP','$Destino','','','','','$observaciones')";

      return $sql918;

      }


?>
