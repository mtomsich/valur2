<?php

	include ("sql/conexion.php");


	$row = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedula10707 where idCedula707='$idCedula'"));
	$idobra= $row['codObra'];
	$FfechaImp= $row['fechaImp'];
	$Flugar= $row['lugar'];
	$FanioImp= $row['anioImp'];
	$Fdesct= $row['desct'];
	$Fcaract= $row['caract'];
	$Fpart= $row['part'];
	$Forden= $row['orden'];
	$Fanio= $row['anio'];
	$Fdesignacion= $row['designacion'];
	$FmedidasPd= $row['medidasPd'];
	$FmedidasPc= $row['medidasPc'];
	$FmedidasRA= $row['medidasRA'];
	$Finscriptipo1= $row['inscriptipo1'];
	if(!empty($row['inscripnro1'])){ 	$Finscripnro1= $row['inscripnro1'];}else{ $Finscripnro1= " ";}
	if(!empty($row['inscripanio1'])){ $Finscripanio1= $row['inscripanio1'];}else{ $Finscripanio1= " ";}

	$Finscriptipo2= $row['inscriptipo2'];
	if(!empty($row['inscripnro2'])){ $Finscripnro2= $row['inscripnro2'];}	else{	$Finscripnro2= " ";	}
	if(!empty($row['inscripanio2'])){ $Finscripanio2= $row['inscripanio2'];}else{ $Finscripanio2= " ";}

	$Finscriptipo3= $row['inscriptipo3'];
	if(!empty($row['inscripnro3'])){ $Finscripnro3= $row['inscripnro3'];}	else{	$Finscripnro3= " ";	}
	if(!empty($row['inscripanio3'])){ $Finscripanio3= $row['inscripanio3'];}else{ $Finscripanio3= " ";}
		if(!empty($row['inscriptipo4'])){ $Finscriptipo4= $row['inscriptipo4'];}	else{	$Finscriptipo4= " ";	}
	if(!empty($row['inscripnro4'])){ $Finscripnro4= $row['inscripnro4'];}	else{	$Finscripnro4= " ";	}
	if(!empty($row['inscripanio4'])){ $Finscripanio4= $row['inscripanio4'];}else{ $Finscripanio4= " ";}
if(!empty($row['inscriptipo5'])){ $Finscriptipo5= $row['inscriptipo5'];}	else{	$Finscriptipo5= " ";	}
	if(!empty($row['inscripnro5'])){ $Finscripnro5= $row['inscripnro5'];}	else{	$Finscripnro5= " ";	}
	if(!empty($row['inscripanio5'])){ $Finscripanio5= $row['inscripanio5'];}else{ $Finscripanio5= " ";}
	$FplanosAntA= $row['planosAntA'];
	$FplanosAntB= $row['planosAntB'];
  $FplanosAntC= $row['planosAntC'];
	$FedificioA= $row['edificioA'];
	$FedificioB= $row['edificioB'];
	$FedificioC= $row['edificioC'];
	$FedificioD= $row['edificioD'];
  $FedificioE= $row['edificioE'];
  $FedificioF= $row['edificioF'];
  $FedificioG= $row['edificioG'];
  $FedificioH= $row['edificioH'];
  $FedificioI= $row['edificioI'];
  $FedificioJ= $row['edificioJ'];
  $Fedificio= $row['edificio'];
	$Fmejora= $row['mejora'];
	$Ftierra= $row['tierra'];
	$Ftotal= $row['total'];
	$FmedidasO= $row['medidasO'];
	$FimpInm= '';
	$FimpSel=  '';
	$Fotrosph=  '';
	$Fcod=  '';
	$FefeMes=  '';
  $FefeAnio=  '';
	$Fhoja= $row['hoja'];
	$FcantHoja= $row['cantHoja'];
	$Fanexo= $row['anexo'];
	$FampAnexo= $row['ampAnexo'];

	?>
