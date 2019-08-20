<?php
  include("sesion.php");
  	$pagina='formulariosDuplicacionPHP';
      include("encabezado.php");
    include("seguridadForm.php");

switch ($nroFormulario) {
  case '901':
  $sql="INSERT INTO form901(codForm901, Interno, Parcela, Subparcela, Ajuste, Basico, Superficie, Valor, Ajuste1955, Valor1955, Calle1, Calle2, Calle3, Calle4, ValorCalle1, ValorCalle2 ,  ValorCalle3 ,  ValorCalle4 ,  Fecha ,  Destino, Articulo, Tierra1, Tierra2, Tierra55, Rubro5 , Mejora, Edificio, Postura, CoefAjusteAplica, CoefAjuste,  observacion )
  SELECT null, Interno, Parcela, Subparcela, Ajuste, Basico, Superficie, Valor, Ajuste1955, Valor1955, Calle1, Calle2, Calle3, Calle4, ValorCalle1, ValorCalle2, ValorCalle3, ValorCalle4, Fecha, Destino, Articulo, Tierra1, Tierra2, Tierra55, Rubro5, Mejora, Edificio, Postura, CoefAjusteAplica, CoefAjuste, observacion
  FROM form901
  WHERE codForm901=$codForm";


  mysqli_query($conexion,$sql)
  or die("Problemas en la duplicacion ".mysqli_error($conexion));

  /* se obtiene el ultimo codigo de la formulrio ingresado */
                $resultob = mysqli_query($conexion,"SELECT MAX(codForm901) AS id FROM form901");
                $vecob = mysqli_fetch_array($resultob);
              if (!$resultob){
                die("Error: Datos no encontrados..");
              }

              $codFormNue=$vecob['id'] ;
  break;

  case '903':
  $sql="INSERT INTO form903(codForm3, interno, Parcela, Subparcela, FachaA1, FachaA2, FachaA3, FachaA4, FachaA5, FachaB1, FachaB2, FachaB3, FachaB4, FachaC1, FachaC2, FachaC3, FachaC4, observaciones, FachaC5, FachaD1, FachaD2, FachaD3, FachaD4, FachaD5, FachaD6, FachaE1, FachaEstado, FachaReci, ParedA1, ParedA2, ParedA3, ParedA4, ParedA5, ParedB1, ParedB2,
  ParedC1, ParedC2, ParedC3, ParedC4, ParedD1, ParedD2, ParedD3, ParedD4, ParedD5, ParedD6, ParedE1, ParedE2, ParedE3, ParedEstado, ParedReci, EscaA1, EscaA2, EscaA3, EscaA4, EscaB1, EscaB2, EscaC1, EscaC2, EscaC3, EscaC4, EscaD1, EscaE1, EscaEstado, EscaReci, TechoA1, TechoA2, TechoA3, TechoB1, TechoB2, TechoB3, TechoC1, TechoC2, TechoC3, TechoC4, TechoC5,
  TechoD1, TechoD2, TechoD3, TechoD4, TechoE1, TechoEstado, TechoReci, CieloA1, CieloA2, CieloB1, CieloB2, CieloB3, CieloB4, CieloC1, CieloC2, CieloC3, CieloC4, CieloD1, CieloD2, CieloD3, CieloE1, CieloE2, CieloEstado, CieloReci, RevoqA1, RevoqA2, RevoqB1, RevoqB2, RevoqB3, RevoqC1, RevoqC2, RevoqD1, RevoqD2, RevoqD3, RevoqE1, RevoqE2, RevoqEstado, RevoqReci,
  PisosA1, PisosA2, PisosA3, PisosA4, PisosB1, PisosB2, PisosB3, PisosB4, PisosC1, PisosC2, PisosC3, PisosC4, PisosC5, PisosC6, PisosC7, PisosD1, PisosD2, PisosD3, PisosD4, PisosE1, PisosE2, PisosEstado, PisosReci, MadeA1, MadeA2, MadeA3, MadeA4, MadeA5, MadeB1, MadeB2, MadeB3, MadeB4, MadeB5, MadeB6, MadeB7, MadeB8, MadeB9, MadeC1, MadeC2, MadeC3, MadeC4,
  MadeC5, MadeC6, MadeC7, MadeD1, MadeD2, MadeD3, MadeD4, MadeE1, MadeE2, MadeEstado, MadeReci, MetaA1, MetaA2, MetaA3, MetaA4, MetaA5, MetaA6, MetaA7, MetaB1, MetaB2, MetaB3, MetaB4, MetaB5, MetaB6, MetaB7, MetaC1, MetaC2, MetaC3, MetaC4, MetaC5, MetaD1, MetaD2, MetaD3, MetaE1, MetaEstado, MetaReci, BanoA1, BanoA2, BanoA3, BanoB1, BanoB2, BanoB3, BanoC1,
  BanoC2, BanoC3, BanoD1, BanoD2, BanoD3, BanoE1, BanoE2, BanoE3, BanoEstado, BanoReci, CociA1, CociA2, CociA3, CociB1, CociB2, CociB3, CociB4, CociC1, CociC2, CociC3, CociC4, CociC5, CociC6, CociD1, CociE1, CociEstado, CociReci, RevesA1, RevesA2, RevesB1, RevesB2, RevesC1, RevesC2, RevesC3, RevesC4, RevesC5, RevesD1, RevesE1, RevesE2, RevesEstado, RevesReci,
  InstaA1, InstaA2, InstaA3, InstaA4, InstaB1, InstaB2, InstaB3, InstaB4, InstaB5, InstaC1, InstaC2, InstaD1, InstaE1, InstEstado, InstReci1, InstReci2, InstReci3, Heladeras, Aire, Ascensores1, AscensoresCant1, Ascensores2, AscensoresCant2, Calefacion, Losa, Horno, Agua, Bano1, Bano2, Pileta, PiletaCant, Rubro, Estado, Data, Dia1, Dia, Data1, SupCub, SupSemi,
  Pagina, Destino, EstadoCategoria)
  SELECT null, interno, Parcela, Subparcela, FachaA1, FachaA2, FachaA3, FachaA4, FachaA5, FachaB1, FachaB2, FachaB3, FachaB4, FachaC1, FachaC2, FachaC3, FachaC4, observaciones, FachaC5, FachaD1, FachaD2, FachaD3, FachaD4, FachaD5, FachaD6, FachaE1, FachaEstado, FachaReci, ParedA1, ParedA2, ParedA3, ParedA4, ParedA5, ParedB1, ParedB2, ParedC1, ParedC2, ParedC3,
  ParedC4, ParedD1, ParedD2, ParedD3, ParedD4, ParedD5, ParedD6, ParedE1, ParedE2, ParedE3, ParedEstado, ParedReci, EscaA1, EscaA2, EscaA3, EscaA4, EscaB1, EscaB2, EscaC1, EscaC2, EscaC3, EscaC4, EscaD1, EscaE1, EscaEstado, EscaReci, TechoA1, TechoA2, TechoA3, TechoB1, TechoB2, TechoB3, TechoC1, TechoC2, TechoC3, TechoC4, TechoC5, TechoD1, TechoD2, TechoD3,
  TechoD4, TechoE1, TechoEstado, TechoReci, CieloA1, CieloA2, CieloB1, CieloB2, CieloB3, CieloB4, CieloC1, CieloC2, CieloC3, CieloC4, CieloD1, CieloD2, CieloD3, CieloE1, CieloE2, CieloEstado, CieloReci, RevoqA1, RevoqA2, RevoqB1, RevoqB2, RevoqB3, RevoqC1, RevoqC2, RevoqD1, RevoqD2, RevoqD3, RevoqE1, RevoqE2, RevoqEstado, RevoqReci, PisosA1, PisosA2, PisosA3,
  PisosA4, PisosB1, PisosB2, PisosB3, PisosB4, PisosC1, PisosC2, PisosC3, PisosC4, PisosC5, PisosC6, PisosC7, PisosD1, PisosD2, PisosD3, PisosD4, PisosE1, PisosE2, PisosEstado, PisosReci, MadeA1, MadeA2, MadeA3, MadeA4, MadeA5, MadeB1, MadeB2, MadeB3, MadeB4, MadeB5, MadeB6, MadeB7, MadeB8, MadeB9, MadeC1, MadeC2, MadeC3, MadeC4, MadeC5, MadeC6, MadeC7, MadeD1,
  MadeD2, MadeD3, MadeD4, MadeE1, MadeE2, MadeEstado, MadeReci, MetaA1, MetaA2, MetaA3, MetaA4, MetaA5, MetaA6, MetaA7, MetaB1, MetaB2, MetaB3, MetaB4, MetaB5, MetaB6, MetaB7, MetaC1, MetaC2, MetaC3, MetaC4, MetaC5, MetaD1, MetaD2, MetaD3, MetaE1, MetaEstado, MetaReci, BanoA1, BanoA2, BanoA3, BanoB1, BanoB2, BanoB3, BanoC1, BanoC2, BanoC3, BanoD1, BanoD2, BanoD3,
  BanoE1, BanoE2, BanoE3, BanoEstado, BanoReci, CociA1, CociA2, CociA3, CociB1, CociB2, CociB3, CociB4, CociC1, CociC2, CociC3, CociC4, CociC5, CociC6, CociD1, CociE1, CociEstado, CociReci, RevesA1, RevesA2, RevesB1, RevesB2, RevesC1, RevesC2, RevesC3, RevesC4, RevesC5, RevesD1, RevesE1, RevesE2, RevesEstado, RevesReci, InstaA1, InstaA2, InstaA3, InstaA4, InstaB1,
  InstaB2, InstaB3, InstaB4, InstaB5, InstaC1, InstaC2, InstaD1, InstaE1, InstEstado, InstReci1, InstReci2, InstReci3, Heladeras, Aire, Ascensores1, AscensoresCant1, Ascensores2, AscensoresCant2, Calefacion, Losa, Horno, Agua, Bano1, Bano2, Pileta, PiletaCant, Rubro, Estado, Data, Dia1, Dia, Data1, SupCub, SupSemi, Pagina, Destino, EstadoCategoria
  FROM form903
  WHERE codForm3=$codForm";


  mysqli_query($conexion,$sql)
  or die("Problemas en la duplicacion ".mysqli_error($conexion));

  /* se obtiene el ultimo codigo de la formulrio ingresado */
                $resultob = mysqli_query($conexion,"SELECT MAX(codForm3) AS id FROM form903");
                $vecob = mysqli_fetch_array($resultob);
              if (!$resultob){
                die("Error: Datos no encontrados..");
              }

              $codFormNue=$vecob['id'] ;

              $rowVec6 = mysqli_query($conexion,"SELECT * FROM rub6data WHERE (codForm=$codForm) and (numForm=903)");

                while($row= mysqli_fetch_array($rowVec6)){

                  $numForm=$row['numForm'];
                  $prop=	$row['prop'];
                  $cant=	$row['cant'];
                  $data=	$row['data'];
                  $estCona=	$row['estCon'];
                  $coefAj=	$row['coefAj'];
                  $valUni=	$row['valUni'];
                  $val=	$row['val'];

            mysqli_query($conexion,"INSERT INTO rub6data(id, codForm,numForm,prop,cant,data,estCon,coefAj,valUni,val)
              VALUES ('','$codFormNue','$numForm','$prop','$cant','$data','$estCona','$coefAj','$coefAj','$valUni','$val')");

              }
  break;

  case '904':
  $sql="INSERT INTO form904( codForm904,  Interno,  Parcela,  Subparcela,  FachaA1,  FachaA2,  FachaA3,  FachaB1,  FachaB2,  FachaB3,  FachaB4,  FachaC1,  FachaC2,  FachaC3,  FachaC4,  FachaC5,  FachaD1,  FachaD2,  FachaEstado,  FachaReci,  ParedA1,  ParedA2,  ParedA3,  ParedB1,  ParedB2,  ParedB3,  ParedB4,  observaciones,  ParedC1,  ParedC2,  ParedD1,  ParedD2,  ParedD3,
  ParedEstado,  ParedReci,  EscaA1,  EscaA2,  EscaA3,  EscaB1,  EscaB2,  EscaC1,  EscaC2,  EscaC3,  EscaC4,  EscaC5,  EscaD1,  EscaEstado,  EscaReci,  TechoA1,  TechoA2,  TechoA3,  TechoB1,  TechoB2,  TechoB3,  TechoC1,  TechoC2,  TechoC3,  TechoC4,  TechoD1,  TechoEstado,  TechoReci,  CieloA1,  CieloA2,  CieloA3,  CieloA4,  CieloB1,  CieloB2,  CieloB3,  CieloB4,  CieloB5,
  CieloB6,  CieloC1,  CieloC2,  CieloC3,  CieloC4,  CieloD1,  CieloD2,  CieloEstado,  CieloReci,  RevoqA1,  RevoqA2,  RevoqB1,  RevoqB2,  RevoqC1,  RevoqC2,  RevoqC3,  RevoqC4,  RevoqD1,  RevoqD2,  RevoqEstado,  RevoqReci,  PisosA1,  PisosA2,  PisosA3,  PisosA4,  PisosB1,  PisosB2,  PisosB3,  PisosB4,  PisosC1,  PisosC2,  PisosC3,  PisosC4,  PisosC5,  PisosC6,  PisosD1,
  PisosD2,  PisosD3,  PisosEstado,  PisosReci,  MadeA1,  MadeA2,  MadeA3,  MadeB1,  MadeB2,  MadeB3,  MadeB4,  MadeB5,  MadeB6,  MadeB7,  MadeC1,  MadeC2,  MadeC3,  MadeC4,  MadeD1,  MadeD2,  MadeEstado,  MadeReci,  MetaA1,  MetaA2,  MetaA3,  MetaA4,  MetaA5,  MetaA6,  MetaA7,  MetaB1,  MetaB2,  MetaB3,  MetaB4,  MetaC1,  MetaC2,  MetaC3,  MetaC4,  MetaC5,  MetaD1,  MetaEstado,
  MetaReci,  BanoA1,  BanoA2,  BanoA3,  BanoB1,  BanoB2,  BanoC1,  BanoC2,  BanoC3,  BanoD1,  BanoD2,  BanoEstado,  BanoReci,  CociA1,  CociA2,  CociA3,  CociB1,  CociB2,  CociB3,  CociC1,  CociC2,  CociC3,  CociC4,  CociD1,  CociD2,  CociEstado,  CociReci,  RevesA1,  RevesA2,  RevesA3,  RevesA4,  RevesB1,  RevesB2,  RevesB3,  RevesB4,  RevesB5,  RevesC1,  RevesD1,  RevesEstado,
  RevesReci,  InstaA1,  InstaA2,  InstaA3,  InstaA4,  InstaB1,  InstaB2,  InstaC1,  InstaD1,  InstEstado,  InstReci1,  InstReci2,  InstReci3,  Aire,  Ascensores1,  AscensoresCant1,  Ascensores2,  AscensoresCant2,  Monta1,  Monta11,  Monta2,  Monta22,  Calefacion,  Heladeras,  Losa,  Tipo,  Pileta,  PiletaCant,  Referencia,  Rubrorural,  Estado,  Data,  Dia1,  Dia,  Data1,  Cubierta,
  Semicubierta,  Pagina,  Destino )
  SELECT null, Interno, Parcela, Subparcela, FachaA1, FachaA2, FachaA3, FachaB1, FachaB2, FachaB3, FachaB4, FachaC1, FachaC2, FachaC3, FachaC4, FachaC5, FachaD1, FachaD2, FachaEstado, FachaReci, ParedA1, ParedA2, ParedA3, ParedB1, ParedB2, ParedB3, ParedB4, observaciones, ParedC1, ParedC2, ParedD1, ParedD2, ParedD3, ParedEstado, ParedReci, EscaA1, EscaA2, EscaA3, EscaB1, EscaB2,
  EscaC1, EscaC2, EscaC3, EscaC4, EscaC5, EscaD1, EscaEstado, EscaReci, TechoA1, TechoA2, TechoA3, TechoB1, TechoB2, TechoB3, TechoC1, TechoC2, TechoC3, TechoC4, TechoD1, TechoEstado, TechoReci, CieloA1, CieloA2, CieloA3, CieloA4, CieloB1, CieloB2, CieloB3, CieloB4, CieloB5, CieloB6, CieloC1, CieloC2, CieloC3, CieloC4, CieloD1, CieloD2, CieloEstado, CieloReci, RevoqA1, RevoqA2,
  RevoqB1, RevoqB2, RevoqC1, RevoqC2, RevoqC3, RevoqC4, RevoqD1, RevoqD2, RevoqEstado, RevoqReci, PisosA1, PisosA2, PisosA3, PisosA4, PisosB1, PisosB2, PisosB3, PisosB4, PisosC1, PisosC2, PisosC3, PisosC4, PisosC5, PisosC6, PisosD1, PisosD2, PisosD3, PisosEstado, PisosReci, MadeA1, MadeA2, MadeA3, MadeB1, MadeB2, MadeB3, MadeB4, MadeB5, MadeB6, MadeB7, MadeC1, MadeC2, MadeC3,
  MadeC4, MadeD1, MadeD2, MadeEstado, MadeReci, MetaA1, MetaA2, MetaA3, MetaA4, MetaA5, MetaA6, MetaA7, MetaB1, MetaB2, MetaB3, MetaB4, MetaC1, MetaC2, MetaC3, MetaC4, MetaC5, MetaD1, MetaEstado, MetaReci, BanoA1, BanoA2, BanoA3, BanoB1, BanoB2, BanoC1, BanoC2, BanoC3, BanoD1, BanoD2, BanoEstado, BanoReci, CociA1, CociA2, CociA3, CociB1, CociB2, CociB3, CociC1, CociC2, CociC3,
  CociC4, CociD1, CociD2, CociEstado, CociReci, RevesA1, RevesA2, RevesA3, RevesA4, RevesB1, RevesB2, RevesB3, RevesB4, RevesB5, RevesC1, RevesD1, RevesEstado, RevesReci, InstaA1, InstaA2, InstaA3, InstaA4, InstaB1, InstaB2, InstaC1, InstaD1, InstEstado, InstReci1, InstReci2, InstReci3, Aire, Ascensores1, AscensoresCant1, Ascensores2, AscensoresCant2, Monta1, Monta11, Monta2,
  Monta22, Calefacion, Heladeras, Losa, Tipo, Pileta, PiletaCant, Referencia, Rubrorural, Estado, Data, Dia1, Dia, Data1, Cubierta, Semicubierta, Pagina, Destino
  FROM form904
  WHERE codForm904=$codForm";


  mysqli_query($conexion,$sql)
  or die("Problemas en la duplicacion ".mysqli_error($conexion));

  /* se obtiene el ultimo codigo de la formulrio ingresado */
                $resultob = mysqli_query($conexion,"SELECT MAX(codForm904) AS id FROM form904");
                $vecob = mysqli_fetch_array($resultob);
              if (!$resultob){
                die("Error: Datos no encontrados..");
              }

              $codFormNue=$vecob['id'] ;
  break;

  case '905':
  $sql="INSERT INTO form905(codForm905, Interno, Parcela, Subparcela, FachaB1, FachaB2, FachaB3, FachaC1, FachaC2, FachaC3, FachaC4, FachaD1, FachaD2, FachaD3, FachaD4, FachaE1, FachaE2, FachaE3, FachaEstado, FachaReci, ParedB1, ParedB2, ParedB3, ParedB4, ParedB5, ParedC1, ParedC2, ParedD1, ParedD2, observaciones, ParedD3, ParedE1, ParedE2, ParedE3, ParedEstado, ParedReci, EsqueB1,
    EsqueB2, EsqueB3, EsqueC1, EsqueC2, EsqueD1, EsqueD2, EsqueE1, EsqueE2, EsqueEstado, EsqueReci, ArmaB1, ArmaB2, ArmaB3, ArmaB4, ArmaB5, ArmaC1, ArmaC2, ArmaC3, ArmaD1, ArmaE1, ArmaEstado, ArmaReci, TechoB1, TechoB2, TechoC1, TechoC2, TechoC3, TechoD1, TechoD2, TechoD3, TechoD4, TechoD5, TechoD6, TechoE1, TechoEstado, TechoReci, CieloB1, CieloB2, CieloC1, CieloC2, CieloC3, CieloC4,
    CieloD1, CieloD2, CieloD3, CieloD4, CieloD5, CieloE1, CieloEstado, CieloReci, RevoqB1, RevoqB2, RevoqB3, RevoqB4, RevoqC1, RevoqC2, RevoqD1, RevoqD2, RevoqD3, RevoqE1, RevoqEstado, RevoqReci, PisosB1, PisosB2, PisosB3, PisosB4, PisosC1, PisosC2, PisosC3, PisosC4, PisosC5, PisosC6, PisosC7, PisosD1, PisosE1, PisosE2, PisosEstado, PisosReci, MadeB1, MadeB2, MadeB3, MadeB4, MadeC1,
    MadeC2, MadeC3, MadeD1, MadeD2, MadeE1, MadeEstado, MadeReci, MetaB1, MetaB2, MetaB3, MetaB4, MetaB5, MetaB6, MetaB7, MetaB8, MetaC1, MetaC2, MetaC3, MetaC4, MetaC5, MetaC6, MetaC7, MetaD1, MetaD2, MetaD3, MetaE1, MetaEstado, MetaReci, BanoB1, BanoB2, BanoB3, BanoB4, BanoC1, BanoC2, BanoC3, BanoC4, BanoD1, BanoD2, BanoD3, BanoE1, BanoEstado, BanoReci, RevesB1, RevesB2, RevesB3,
    RevesB4, RevesB5, RevesC1, RevesC2, RevesC3, RevesD1, RevesE1, RevesEstado, RevesReci, InstaB1, InstaB2, InstaB3, InstaB4, InstaC1, InstaC2, InstaD1, InstaE1, InstaEstado, InstReci1, InstReci2, InstReci3, Cubierta, Semicubierta, Avicola, Camara, Monta1, Monta11, Monta2, Monta22, Incendio, Ascensores1, Ascensores11, Ascensores2, Ascensores22, Tanques, TanquesCant1, TanqueEstado,
    Tanques2, TanquesCant2, TanqueEstado2, Tanques3, TanquesCant3, TanqueEstado3, Pavimento1, PaviEstado, Pavimento2, Pavi2Estado, Silo1, Silos1Metros, Silo1Estado, Silo2, Silos2Metros, Silo2Estado, Silo3, Silos3Metros, Silo3Estado, LetraAve, Data, Dia1, Dia, Data1, Estado, Referencia, Corral, Rubrorural, Pagina, Destino, CodDestino)
  SELECT null,  `Interno`, `Parcela`, `Subparcela`, `FachaB1`, `FachaB2`, `FachaB3`, `FachaC1`, `FachaC2`, `FachaC3`, `FachaC4`, `FachaD1`, `FachaD2`, `FachaD3`, `FachaD4`, `FachaE1`, `FachaE2`, `FachaE3`, `FachaEstado`,
  `FachaReci`, `ParedB1`, `ParedB2`, `ParedB3`, `ParedB4`, `ParedB5`, `ParedC1`, `ParedC2`, `ParedD1`, `ParedD2`, `observaciones`, `ParedD3`, `ParedE1`, `ParedE2`, `ParedE3`, `ParedEstado`, `ParedReci`, `EsqueB1`, `EsqueB2`,
  `EsqueB3`, `EsqueC1`, `EsqueC2`, `EsqueD1`, `EsqueD2`, `EsqueE1`, `EsqueE2`, `EsqueEstado`, `EsqueReci`, `ArmaB1`, `ArmaB2`, `ArmaB3`, `ArmaB4`, `ArmaB5`, `ArmaC1`, `ArmaC2`, `ArmaC3`, `ArmaD1`, `ArmaE1`,
  `ArmaEstado`, `ArmaReci`, `TechoB1`, `TechoB2`, `TechoC1`, `TechoC2`, `TechoC3`, `TechoD1`, `TechoD2`, `TechoD3`, `TechoD4`, `TechoD5`, `TechoD6`, `TechoE1`, `TechoEstado`, `TechoReci`, `CieloB1`, `CieloB2`, `CieloC1`,
  `CieloC2`, `CieloC3`, `CieloC4`, `CieloD1`, `CieloD2`, `CieloD3`, `CieloD4`, `CieloD5`, `CieloE1`, `CieloEstado`, `CieloReci`, `RevoqB1`, `RevoqB2`, `RevoqB3`, `RevoqB4`, `RevoqC1`, `RevoqC2`, `RevoqD1`, `RevoqD2`,
  `RevoqD3`, `RevoqE1`, `RevoqEstado`, `RevoqReci`, `PisosB1`, `PisosB2`, `PisosB3`, `PisosB4`, `PisosC1`, `PisosC2`, `PisosC3`, `PisosC4`, `PisosC5`, `PisosC6`, `PisosC7`, `PisosD1`, `PisosE1`, `PisosE2`, `PisosEstado`,
  `PisosReci`, `MadeB1`, `MadeB2`, `MadeB3`, `MadeB4`, `MadeC1`, `MadeC2`, `MadeC3`, `MadeD1`, `MadeD2`, `MadeE1`, `MadeEstado`, `MadeReci`, `MetaB1`, `MetaB2`, `MetaB3`, `MetaB4`, `MetaB5`, `MetaB6`,
  `MetaB7`, `MetaB8`, `MetaC1`, `MetaC2`, `MetaC3`, `MetaC4`, `MetaC5`, `MetaC6`, `MetaC7`, `MetaD1`, `MetaD2`, `MetaD3`, `MetaE1`, `MetaEstado`, `MetaReci`, `BanoB1`, `BanoB2`, `BanoB3`, `BanoB4`,
  `BanoC1`, `BanoC2`, `BanoC3`, `BanoC4`, `BanoD1`, `BanoD2`, `BanoD3`, `BanoE1`, `BanoEstado`, `BanoReci`, `RevesB1`, `RevesB2`, `RevesB3`, `RevesB4`, `RevesB5`, `RevesC1`, `RevesC2`, `RevesC3`,
  `RevesD1`, `RevesE1`, `RevesEstado`, `RevesReci`, `InstaB1`, `InstaB2`, `InstaB3`, `InstaB4`, `InstaC1`, `InstaC2`, `InstaD1`, `InstaE1`, `InstaEstado`, `InstReci1`, `InstReci2`, `InstReci3`, `Cubierta`, `Semicubierta`, `Avicola`,
  `Camara`, `Monta1`, `Monta11`, `Monta2`, `Monta22`, `Incendio`, `Ascensores1`, `Ascensores11`, `Ascensores2`, `Ascensores22`, `Tanques`, `TanquesCant1`, `TanqueEstado`, `Tanques2`, `TanquesCant2`, `TanqueEstado2`, `Tanques3`, `TanquesCant3`, `TanqueEstado3`,
  `Pavimento1`, `PaviEstado`, `Pavimento2`, `Pavi2Estado`, `Silo1`, `Silos1Metros`, `Silo1Estado`, `Silo2`, `Silos2Metros`, `Silo2Estado`, `Silo3`, `Silos3Metros`, `Silo3Estado`, `LetraAve`, `Data`, `Dia1`, `Dia`, `Data1`, `Estado`,
  `Referencia`, `Corral`, `Rubrorural`, `Pagina`, `Destino`, `CodDestino`
  FROM form905
  WHERE codForm905=$codForm";


  mysqli_query($conexion,$sql)
  or die("Problemas en la duplicacion ".mysqli_error($conexion));

  /* se obtiene el ultimo codigo de la formulrio ingresado */
                $resultob = mysqli_query($conexion,"SELECT MAX(codForm905) AS id FROM form905");
                $vecob = mysqli_fetch_array($resultob);
              if (!$resultob){
                die("Error: Datos no encontrados..");
              }

              $codFormNue=$vecob['id'] ;

              $rowVec6 = mysqli_query($conexion,"SELECT * FROM rub6data WHERE (codForm=$codForm) and (numForm=905)");

                while($row= mysqli_fetch_array($rowVec6)){

                  $numForm=$row['numForm'];
                  $prop=	$row['prop'];
                  $cant=	$row['cant'];
                  $data=	$row['data'];
                  $estCona=	$row['estCon'];
                  $coefAj=	$row['coefAj'];
                  $valUni=	$row['valUni'];
                  $val=	$row['val'];

            mysqli_query($conexion,"INSERT INTO rub6data(id, codForm,numForm,prop,cant,data,estCon,coefAj,valUni,val)
              VALUES ('','$codFormNue','$numForm','$prop','$cant','$data','$estCona','$coefAj','$coefAj','$valUni','$val')");

              }

              $rowVec8 = mysqli_query($conexion,"SELECT * FROM rub8data WHERE (codForm=$codForm) and (numForm=905)");

                while($row= mysqli_fetch_array($rowVec8)){

                  $numForm=$row['numForm'];
                  $prop=	$row['prop'];
                  $cant=	$row['cant'];
                  $data=	$row['data'];
                  $estCona=	$row['estCon'];
                  $coefAj=	$row['coefAj'];
                  $valUni=	$row['valUni'];
                  $val=	$row['val'];

            mysqli_query($conexion,"INSERT INTO rub8data(id, codForm,numForm,prop,cant,data,estCon,coefAj,valUni,val)
              VALUES ('','$codFormNue','$numForm','$prop','$cant','$data','$estCona','$coefAj','$coefAj','$valUni','$val')");

              }


  break;

  case '906':
  $sql="INSERT INTO form906( codForm906 ,  Interno ,  Parcela ,  Subparcela ,  FachaA1 ,  FachaA2 ,  FachaA3 ,  FachaA4 ,  FachaB1 ,  FachaB2 ,  FachaB3 ,  FachaB4 ,  FachaB5 ,  FachaC1 ,  FachaC2 ,  FachaC3 ,  FachaC4 ,  FachaEstado ,  FachaReci ,  ParedA1 ,  ParedA2 ,  ParedB1 ,  observaciones ,  ParedB2 ,  ParedB3 ,  ParedC1 ,  ParedC2 ,  ParedEstado ,  ParedReci ,  EscaA1 ,  EscaA2 ,
  EscaA3 ,  EscaA4 ,  EscaB1 ,  EscaB2 ,  EscaB3 ,  EscaB4 ,  EscaB5 ,  EscaB6 ,  EscaB7 ,  EscaC1, EscaC2 ,  EscaEstado ,  EscaReci ,  EsqueA1 ,  EsqueB1 ,  EsqueC1 ,  EsqueC2 ,  EsqueEstado ,  EsqueReci ,  ArmaA1 ,  ArmaB1 ,  ArmaC1 ,  ArmaEstado ,  ArmaReci ,  TechoA1 ,  TechoA2 ,  TechoB1 ,  TechoB2 ,  TechoB3 ,  TechoC1 ,  TechoC2 ,  TechoC3 ,  TechoC4 ,  TechoEstado ,  TechoReci ,
  CieloA1 ,  CieloA2 ,  CieloA3 ,  CieloA4 ,  CieloB1 ,  CieloB2 ,  CieloB3 ,  CieloC1 ,  CieloC2 ,  CieloC3 ,  CieloC4 ,  CieloEstado ,  CieloReci ,  RevoqA1 ,  RevoqA2 ,  RevoqA3 ,  RevoqA4 ,  RevoqA5 ,  RevoqB1 ,  RevoqB2 ,  RevoqB3 ,  RevoqB4 ,  RevoqC1 ,  RevoqEstado ,  RevoqReci ,  PisosA1 ,  PisosA2 ,  PisosA3 ,  PisosA4 ,  PisosB1 ,  PisosB2 ,  PisosB3 ,  PisosB4 ,  PisosB5 ,
  PisosC1 ,  PisosEstado ,  PisosReci ,  MadeA1 ,  MadeA2 ,  MadeA3 ,  MadeA4 ,  MadeA5 ,  MadeB1 ,  MadeB2 ,  MadeB3 ,  MadeC1 ,  MadeEstado ,  MadeReci ,  MetaA1 ,  MetaA2 ,  MetaA3 ,  MetaA4 ,  MetaA5 ,  MetaA6 ,  MetaA7 ,  MetaB1 ,  MetaB2 ,  MetaB3 ,  MetaB4 ,  MetaB5 ,  MetaC1 ,  MetaC2 ,  MetaEstado ,  MetaReci ,  BanoA1 ,  BanoA2 ,  BanoA3 ,  BanoA4 ,  BanoA5 ,  BanoB1 ,  BanoB2 ,
  BanoB3 ,  BanoC1 ,  BanoC2 ,  BanoEstado ,  BanoReci ,  RevesA1 ,  RevesA2 ,  RevesA3 ,  RevesA4 ,  RevesA5 ,  RevesA6 ,  RevesB1 ,  RevesB2 ,  RevesB3 ,  RevesB4 ,  RevesC1 ,  ReveEstado ,  RevesReci ,  InstaA1 ,  InstaA2 ,  InstaA3 ,  InstaB1 ,  InstaB2 ,  InstaC1 ,  InstaEstado ,  InstReci1 ,  InstReci2 ,  InstReci3 ,  Cubierta ,  Semicubierta ,  Aire ,  Calefacion ,  Incendio ,  Losa,
  Data ,  Dia1 ,  Dia ,  Data1 ,  Estado ,  Referencia ,  Corral ,  Rubrorural ,  Pagina ,  Destino)
  SELECT null, `Interno`, `Parcela`, `Subparcela`, `FachaA1`, `FachaA2`, `FachaA3`, `FachaA4`, `FachaB1`, `FachaB2`, `FachaB3`, `FachaB4`, `FachaB5`, `FachaC1`, `FachaC2`, `FachaC3`, `FachaC4`, `FachaEstado`, `FachaReci`,
  `ParedA1`, `ParedA2`, `ParedB1`, `observaciones`, `ParedB2`, `ParedB3`, `ParedC1`, `ParedC2`, `ParedEstado`, `ParedReci`, `EscaA1`, `EscaA2`, `EscaA3`, `EscaA4`, `EscaB1`, `EscaB2`, `EscaB3`, `EscaB4`, `EscaB5`,
  `EscaB6`, `EscaB7`, `EscaC1`, `EscaC2`, `EscaEstado`, `EscaReci`, `EsqueA1`, `EsqueB1`, `EsqueC1`, `EsqueC2`, `EsqueEstado`, `EsqueReci`, `ArmaA1`, `ArmaB1`, `ArmaC1`, `ArmaEstado`, `ArmaReci`, `TechoA1`, `TechoA2`,
  `TechoB1`, `TechoB2`, `TechoB3`, `TechoC1`, `TechoC2`, `TechoC3`, `TechoC4`, `TechoEstado`, `TechoReci`, `CieloA1`, `CieloA2`, `CieloA3`, `CieloA4`, `CieloB1`, `CieloB2`, `CieloB3`, `CieloC1`, `CieloC2`, `CieloC3`,
  `CieloC4`, `CieloEstado`, `CieloReci`, `RevoqA1`, `RevoqA2`, `RevoqA3`, `RevoqA4`, `RevoqA5`, `RevoqB1`, `RevoqB2`, `RevoqB3`, `RevoqB4`, `RevoqC1`, `RevoqEstado`, `RevoqReci`, `PisosA1`, `PisosA2`, `PisosA3`, `PisosA4`,
  `PisosB1`, `PisosB2`, `PisosB3`, `PisosB4`, `PisosB5`, `PisosC1`, `PisosEstado`, `PisosReci`, `MadeA1`, `MadeA2`, `MadeA3`, `MadeA4`, `MadeA5`, `MadeB1`, `MadeB2`, `MadeB3`, `MadeC1`, `MadeEstado`, `MadeReci`,
  `MetaA1`, `MetaA2`, `MetaA3`, `MetaA4`, `MetaA5`, `MetaA6`, `MetaA7`, `MetaB1`, `MetaB2`, `MetaB3`, `MetaB4`, `MetaB5`, `MetaC1`, `MetaC2`, `MetaEstado`, `MetaReci`, `BanoA1`, `BanoA2`, `BanoA3`,
  `BanoA4`, `BanoA5`, `BanoB1`, `BanoB2`, `BanoB3`, `BanoC1`, `BanoC2`, `BanoEstado`, `BanoReci`, `RevesA1`, `RevesA2`, `RevesA3`, `RevesA4`, `RevesA5`, `RevesA6`, `RevesB1`, `RevesB2`, `RevesB3`, `RevesB4`,
  `RevesC1`, `ReveEstado`, `RevesReci`, `InstaA1`, `InstaA2`, `InstaA3`, `InstaB1`, `InstaB2`, `InstaC1`, `InstaEstado`, `InstReci1`, `InstReci2`, `InstReci3`, `Cubierta`, `Semicubierta`, `Aire`, `Calefacion`, `Incendio`, `Losa`,
  `Data`, `Dia1`, `Dia`, `Data1`, `Estado`, `Referencia`, `Corral`, `Rubrorural`, `Pagina`, `Destino`
  FROM form906
  WHERE codForm906=$codForm";


  mysqli_query($conexion,$sql)
  or die("Problemas en la duplicacion ".mysqli_error($conexion));

  /* se obtiene el ultimo codigo de la formulrio ingresado */
                $resultob = mysqli_query($conexion,"SELECT MAX(codForm906) AS id FROM form906");
                $vecob = mysqli_fetch_array($resultob);
              if (!$resultob){
                die("Error: Datos no encontrados..");
              }

              $codFormNue=$vecob['id'] ;
  break;

  case '907':
  $sql="INSERT INTO form907(codForm907, Interno, Parcela, Subparcela, Pais, Partida, Plano, CoefAjuste, VTierra, TotPTSubp, Accesiones, Destino, Lugar, Fecha, ApellidoResp, TipoRes, DocumentoRes, LugarbRes, Fecha1,  observaciones )
  SELECT null,`Interno`, `Parcela`, `Subparcela`, `Pais`, `Partida`, `Plano`, `CoefAjuste`, `VTierra`, `TotPTSubp`, `Accesiones`, `Destino`, `Lugar`, `Fecha`, `ApellidoResp`, `TipoRes`, `DocumentoRes`, `LugarbRes`, `Fecha1`, `observaciones`
  FROM form907
  WHERE codForm907=$codForm";

  mysqli_query($conexion,$sql)
  or die("Problemas en la duplicacion ".mysqli_error($conexion));

  /* se obtiene el ultimo codigo de la formulrio ingresado */
                $resultob = mysqli_query($conexion,"SELECT MAX(codForm907) AS id FROM form907");
                $vecob = mysqli_fetch_array($resultob);
              if (!$resultob){
                die("Error: Datos no encontrados..");
              }

              $codFormNue=$vecob['id'] ;
  break;

  case '909':
  $sql="INSERT INTO form909(codForm909, Interno, Parcela, Subparcela, Pagina, OliHect1, OliArea1,  OliCa1 ,  OliPre1 ,  OliPro1 ,  OliPos1 ,  OliHect2 ,  OliArea2 ,  OliCa2 ,  OliPre2 ,  OliPro2 ,  OliPos2 ,  OliHect3 ,  OliArea3 ,  OliCa3 ,  OliPre3 ,  OliPro3 ,  OliPos3 ,  OliHect4 ,  OliArea4 ,  OliCa4 ,  OliPre4 ,  OliPro4 ,  OliPos4 ,  OliHect5 ,  OliArea5 ,  OliCa5 ,  OliPre5 ,  OliPro5 ,
  OliPos5 ,  OliHect6 ,  OliArea6 ,  OliCa6 ,  OliPre6 ,  OliPro6 ,  OliPos6 ,  OliHect7 ,  OliArea7 , OliCa7 ,  OliPre7 ,  OliPro7 ,  OliPos7 ,  OliCa8 ,  OliHect8 ,  OliArea8 ,  OliPre8 ,  OliPro8 ,  OliPos8 ,  OliHect9 ,  OliArea9 ,  OliCa9 ,  OliPre9 ,  OliPro9 ,  OliPos9 ,  FrutDet1 ,  FruEst1 ,  FruHect1 ,  FruArea1 ,  FruCa1 ,  FruPre1 ,  FruPro1 ,  FruPos1 ,  FrutDet2 ,  FruEst2 ,  FruHect2 ,
  FruArea2 ,  FruCa2 ,  FruPre2 ,  FruPro2 ,  FruPos2 ,  FrutDet3 ,  FruEst3 ,  FruHect3 ,  FruArea3 ,  FruCa3 ,  FruPre3 ,  FruPro3 ,  FruPos3 ,  FrutDet4 ,  FruEst4 ,  FruHect4 ,  FruArea4 ,  FruCa4 ,  FruPre4 ,  FruPro4 ,  FruPos4 ,  FrutDet5 ,  FruEst5 ,  FruHect5 ,  FruArea5 ,  FruCa5 ,  FruPre5 ,  FruPro5 ,  FruPos5 ,  FrutDet6 ,  FruEst6 ,  FruHect6 ,  FruArea6 ,  FruCa6 ,  FruPre6 ,  FruPro6 ,
  FruPos6 ,  FrutDet7 ,  FruEst7 ,  FruHect7 ,  FruArea7 ,  FruCa7 ,  FruPre7 ,  FruPro7 ,  FruPos7 ,  FrutDet8 ,  FruEst8 ,  FruHect8 ,  FruArea8 ,  FruCa8 ,  FruPre8 ,  FruPro8 ,  FruPos8 ,  FrutDet9 ,  FruEst9 ,  FruHect9 ,  FruArea9 ,  FruCa9 ,  FruPre9 ,  FruPro9 ,  FruPos9 ,  PlanDet1 ,  PlanEst1 ,  PlanHect1 ,  PlanArea1 ,  PlanCa1 ,  PlanPre1 ,  PlanPro1 ,  PlanDet2 ,  PlanEst2 ,  PlanHect2 ,
  PlanArea2 ,  PlanCa2 ,  PlanPre2 ,  PlanPro2 ,  PlanDet3 ,  PlanEst3 ,  PlanHect3 ,  PlanArea3 ,  PlanCa3 ,  PlanPre3 ,  PlanPro3 ,  PlanDet4 ,  PlanEst4 ,  PlanHect4 ,  PlanArea4 ,  PlanCa4 ,  PlanPre4 ,  PlanPro4 ,  PlanDet5 ,  PlanEst5 ,  PlanHect5 ,  PlanArea5 ,  PlanCa5 ,  PlanPre5 ,  PlanPro5 ,  PlanDet6 ,  PlanEst6 ,  PlanHect6 ,  PlanArea6 ,  PlanCa6 ,  PlanPre6 ,  PlanPro6 ,  PlanDet7 ,
  PlanEst7 ,  PlanHect7 ,  PlanArea7 ,  PlanCa7 ,  PlanPre7 ,  PlanPro7 ,  PlanDet8 ,  PlanEst8 ,  PlanHect8 ,  PlanArea8 ,  PlanCa8 ,  PlanPre8 ,  PlanPro8 ,  PlanDet9 ,  PlanEst9 ,  PlanHect9 ,  PlanArea9 ,  PlanCa9 ,  PlanPre9 ,  PlanPro9 )
  SELECT null, `Interno`, `Parcela`, `Subparcela`, `Pagina`, `OliHect1`, `OliArea1`, `OliCa1`, `OliPre1`, `OliPro1`, `OliPos1`, `OliHect2`, `OliArea2`, `OliCa2`, `OliPre2`, `OliPro2`, `OliPos2`, `OliHect3`, `OliArea3`,
  `OliCa3`, `OliPre3`, `OliPro3`, `OliPos3`, `OliHect4`, `OliArea4`, `OliCa4`, `OliPre4`, `OliPro4`, `OliPos4`, `OliHect5`, `OliArea5`, `OliCa5`, `OliPre5`, `OliPro5`, `OliPos5`, `OliHect6`, `OliArea6`, `OliCa6`,
  `OliPre6`, `OliPro6`, `OliPos6`, `OliHect7`, `OliArea7`, `OliCa7`, `OliPre7`, `OliPro7`, `OliPos7`, `OliCa8`, `OliHect8`, `OliArea8`, `OliPre8`, `OliPro8`, `OliPos8`, `OliHect9`, `OliArea9`, `OliCa9`, `OliPre9`,
  `OliPro9`, `OliPos9`, `FrutDet1`, `FruEst1`, `FruHect1`, `FruArea1`, `FruCa1`, `FruPre1`, `FruPro1`, `FruPos1`, `FrutDet2`, `FruEst2`, `FruHect2`, `FruArea2`, `FruCa2`, `FruPre2`, `FruPro2`, `FruPos2`, `FrutDet3`,
  `FruEst3`, `FruHect3`, `FruArea3`, `FruCa3`, `FruPre3`, `FruPro3`, `FruPos3`, `FrutDet4`, `FruEst4`, `FruHect4`, `FruArea4`, `FruCa4`, `FruPre4`, `FruPro4`, `FruPos4`, `FrutDet5`, `FruEst5`, `FruHect5`, `FruArea5`,
  `FruCa5`, `FruPre5`, `FruPro5`, `FruPos5`, `FrutDet6`, `FruEst6`, `FruHect6`, `FruArea6`, `FruCa6`, `FruPre6`, `FruPro6`, `FruPos6`, `FrutDet7`, `FruEst7`, `FruHect7`, `FruArea7`, `FruCa7`, `FruPre7`, `FruPro7`,
  `FruPos7`, `FrutDet8`, `FruEst8`, `FruHect8`, `FruArea8`, `FruCa8`, `FruPre8`, `FruPro8`, `FruPos8`, `FrutDet9`, `FruEst9`, `FruHect9`, `FruArea9`, `FruCa9`, `FruPre9`, `FruPro9`, `FruPos9`, `PlanDet1`, `PlanEst1`,
  `PlanHect1`, `PlanArea1`, `PlanCa1`, `PlanPre1`, `PlanPro1`, `PlanDet2`, `PlanEst2`, `PlanHect2`, `PlanArea2`, `PlanCa2`, `PlanPre2`, `PlanPro2`, `PlanDet3`, `PlanEst3`, `PlanHect3`, `PlanArea3`, `PlanCa3`, `PlanPre3`, `PlanPro3`,
  `PlanDet4`, `PlanEst4`, `PlanHect4`, `PlanArea4`, `PlanCa4`, `PlanPre4`, `PlanPro4`, `PlanDet5`, `PlanEst5`, `PlanHect5`, `PlanArea5`, `PlanCa5`, `PlanPre5`, `PlanPro5`, `PlanDet6`, `PlanEst6`, `PlanHect6`, `PlanArea6`, `PlanCa6`,
  `PlanPre6`, `PlanPro6`, `PlanDet7`, `PlanEst7`, `PlanHect7`, `PlanArea7`, `PlanCa7`, `PlanPre7`, `PlanPro7`, `PlanDet8`, `PlanEst8`, `PlanHect8`, `PlanArea8`, `PlanCa8`, `PlanPre8`, `PlanPro8`, `PlanDet9`, `PlanEst9`, `PlanHect9`,
  `PlanArea9`, `PlanCa9`, `PlanPre9`, `PlanPro9`
  FROM form909
  WHERE codForm909=$codForm";

  mysqli_query($conexion,$sql)
  or die("Problemas en la duplicacion ".mysqli_error($conexion));

  /* se obtiene el ultimo codigo de la formulrio ingresado */
                $resultob = mysqli_query($conexion,"SELECT MAX(codForm909) AS id FROM form909");
                $vecob = mysqli_fetch_array($resultob);
              if (!$resultob){
                die("Error: Datos no encontrados..");
              }

              $codFormNue=$vecob['id'] ;
  break;

  case '910':
  $sql="INSERT INTO form910(codForm910 ,  Interno ,  Parcela ,  Subparcela ,  TierraAju ,  TierraBas ,  Superficie ,  Entero ,  Aptitud ,  EdifBas ,  EdifAct ,  MejBas ,  MejAct ,  PlanBas ,  PlanAct ,  MejAct912 ,  MejBas912 ,  Postura ,  Ala1 ,  Ala2 ,  Ala3 ,  Ala4 ,  observacion ,  Ala5 ,  Ala6 ,  Ala7 ,  Ala8 ,  Ala9 ,  Ala10 ,  Ala11 ,  Ala12 ,  Ala13 ,  Ala14 ,  Ala15 ,  Ala16 ,  Ala17 ,
  Ala18 ,  SiloCant1 ,  SiloEst1 ,  SiloData1 ,  SiloCap1 ,  SiloCant2 ,  SiloEst2 ,  SiloData2 ,  SiloCap2 ,  SiloCant3 ,  SiloEst3 ,  SiloData3 ,  SiloCap3 ,  MoliCant1 ,  MoliCant2 ,  MoliCant3 ,  MoliCant4 ,  MoliCant5 ,  MoliCant6 ,  TanCant1 ,  TanCant2 ,  TanCant3 ,  PlantDet1 ,  PlantSup1 ,  PlantP1 ,  PlantEst1 ,  PlantDet2 ,  PlantSup2 ,  PlantP2 ,  PlantEst2 ,  PlantDet3 ,  PlantSup3 ,
  PlantP3 ,  PlantEst3 ,  PlantDet4 ,  PlantSup4 ,  PlantP4 ,  PlantEst4 ,  PlantDet5 ,  PlantSup5 ,  PlantP5 ,  PlantEst5 ,  PlantDet6 ,  PlantSup6 ,  PlantP6 ,  PlantEst6,  Fecha ,  Destino ,  Articulo ,  Tierra1 ,  Tierra2 ,  CoefAjusteAplica ,  CoefAjuste )
  SELECT null, `Interno`, `Parcela`, `Subparcela`, `TierraAju`, `TierraBas`, `Superficie`, `Entero`, `Aptitud`, `EdifBas`, `EdifAct`, `MejBas`, `MejAct`, `PlanBas`, `PlanAct`, `MejAct912`, `MejBas912`, `Postura`, `Ala1`,
  `Ala2`, `Ala3`, `Ala4`, `observacion`, `Ala5`, `Ala6`, `Ala7`, `Ala8`, `Ala9`, `Ala10`, `Ala11`, `Ala12`, `Ala13`, `Ala14`, `Ala15`, `Ala16`, `Ala17`, `Ala18`, `SiloCant1`,
  `SiloEst1`, `SiloData1`, `SiloCap1`, `SiloCant2`, `SiloEst2`, `SiloData2`, `SiloCap2`, `SiloCant3`, `SiloEst3`, `SiloData3`, `SiloCap3`, `MoliCant1`, `MoliCant2`, `MoliCant3`, `MoliCant4`, `MoliCant5`, `MoliCant6`, `TanCant1`, `TanCant2`,
  `TanCant3`, `PlantDet1`, `PlantSup1`, `PlantP1`, `PlantEst1`, `PlantDet2`, `PlantSup2`, `PlantP2`, `PlantEst2`, `PlantDet3`, `PlantSup3`, `PlantP3`, `PlantEst3`, `PlantDet4`, `PlantSup4`, `PlantP4`, `PlantEst4`, `PlantDet5`, `PlantSup5`,
  `PlantP5`, `PlantEst5`, `PlantDet6`, `PlantSup6`, `PlantP6`, `PlantEst6`, `Fecha`, `Destino`, `Articulo`, `Tierra1`, `Tierra2`, `CoefAjusteAplica`, `CoefAjuste`
  FROM form910
  WHERE codForm910=$codForm";

  mysqli_query($conexion,$sql)
  or die("Problemas en la duplicacion ".mysqli_error($conexion));

  /* se obtiene el ultimo codigo de la formulrio ingresado */
                $resultob = mysqli_query($conexion,"SELECT MAX(codForm910) AS id FROM form910");
                $vecob = mysqli_fetch_array($resultob);
              if (!$resultob){
                die("Error: Datos no encontrados..");
              }

              $codFormNue=$vecob['id'] ;
  break;

  case '911':
  $sql="INSERT INTO form911( codForm911 ,  Interno ,  Parcela ,  Pagina ,  Partido ,  Altura1 ,  Altura2 ,  Altura3 ,  Altura4 ,  Altura5 ,  Altura6 ,  Altura7 ,  Altura8 ,  Relieve1 ,  Relieve2 ,  Relieve3 ,  Relieve4 ,  Relieve5 ,  Relieve6 ,  Relieve7 ,  Relieve8 ,  Espesor1 ,  Espesor2 ,  Espesor3 ,  Espesor4 ,  Espesor5 ,  Espesor6 ,  Espesor7 ,  Espesor8 ,  Color1 ,  Color2 ,  Color3 ,
    Color4 ,  Color5 ,  Color6 ,  Color7 ,  Color8 ,  Estancamiento1 ,  Estancamiento2 ,  Estancamiento3 ,  Estancamiento4 ,  Estancamiento5 ,  Estancamiento6 ,  Estancamiento7 ,  Estancamiento8 ,  Subsuelo1 ,  Subsuelo2 ,  Subsuelo3 ,  Subsuelo4 ,  Subsuelo5 ,  Subsuelo6 ,  Subsuelo7 ,  Subsuelo8 ,  Salinidad1 ,  Salinidad2 ,  Salinidad3 ,  Salinidad4 ,  Salinidad5 ,  Salinidad6 ,  Salinidad7 ,
    Salinidad8 ,  Animales1 ,  Animales2 ,  Animales3 ,  Animales4 ,  Animales5 ,  Animales6 ,  Animales7 ,  Animales8 ,  Distancia1 ,  Distancia2 ,  Distancia3 ,  Distancia4 ,  Distancia5 ,  Distancia6 ,  Distancia7 ,  Distancia8 ,  Ganadera1 ,  Ganadera2 ,  Ganadera3 ,  Ganadera4 ,  Ganadera5 ,  Ganadera6 ,  Ganadera7 ,  Ganadera8 ,  Tierra1 ,  Tierra2 ,  Tierra3 ,  Tierra4 ,  Tierra5 ,  Tierra6 ,
    Tierra7 ,  Tierra8 ,  Laguna1 ,  Laguna2 ,  Laguna3 ,  Laguna4 ,  Laguna5 ,  Laguna6 ,  Laguna7 ,  Laguna8 ,  ValorRubro21 ,  ValorRubro22 ,  ValorRubro23 ,  ValorRubro24 ,  ValorRubro25 ,  ValorRubro26 ,  ValorRubro27 ,  ValorRubro28 ,  ValorRubro41 ,  ValorRubro42 ,  ValorRubro43 ,  ValorRubro44 ,  ValorRubro45 ,  ValorRubro46 ,  ValorRubro47 ,  ValorRubro48 ,  ValorRubro51 ,  ValorRubro52 ,
    ValorRubro53 ,  ValorRubro54 ,  ValorRubro55 ,  ValorRubro56 ,  ValorRubro57 ,  ValorRubro58 ,  ValorRubro61 ,  ValorRubro62 ,  ValorRubro63 ,  ValorRubro64 ,  ValorRubro65 ,  ValorRubro66 ,  ValorRubro67 ,  ValorRubro68 ,  SupRubro21 ,  SupRubro22 ,  SupRubro23 ,  SupRubro24 ,  SupRubro25 ,  SupRubro26 ,  SupRubro27 ,  SupRubro28 ,  SupRubro41 ,  SupRubro42 ,  SupRubro43 ,  SupRubro44 ,
    SupRubro45 ,  SupRubro46 ,  SupRubro47 ,  SupRubro48 ,  SupRubro51 ,  SupRubro52 ,  SupRubro53 ,  SupRubro54 ,  SupRubro55 ,  SupRubro56 ,  SupRubro57 ,  SupRubro58 ,  SupRubro61 ,  SupRubro62 ,  SupRubro63 ,  SupRubro64 ,  SupRubro65 ,  SupRubro66 ,  SupRubro67 ,  SupRubro68 ,  TipoRubro21 ,  TipoRubro22 ,  TipoRubro23 ,  TipoRubro24 ,  TipoRubro25 ,  TipoRubro26 ,  TipoRubro27 ,  TipoRubro28 ,
    TipoRubro41 ,  TipoRubro42 ,  TipoRubro43 ,  TipoRubro44 ,  TipoRubro45 ,  TipoRubro46 ,  TipoRubro47 ,  TipoRubro48 ,  TipoRubro51 ,  TipoRubro52 ,  TipoRubro53 ,  TipoRubro54 ,  TipoRubro55 ,  TipoRubro56 ,  TipoRubro57 ,  TipoRubro58 ,  TipoRubro61 ,  TipoRubro62 ,  TipoRubro63 ,  TipoRubro64 ,  TipoRubro65 ,  TipoRubro66 ,  TipoRubro67 ,  TipoRubro68 ,  SupArroyo ,  Solototales ,  SuperficieTotales ,  ValorTotal )
  SELECT null,`Interno`, `Parcela`, `Pagina`, `Partido`, `Altura1`, `Altura2`, `Altura3`, `Altura4`, `Altura5`, `Altura6`, `Altura7`, `Altura8`, `Relieve1`, `Relieve2`, `Relieve3`, `Relieve4`, `Relieve5`, `Relieve6`, `Relieve7`,
  `Relieve8`, `Espesor1`, `Espesor2`, `Espesor3`, `Espesor4`, `Espesor5`, `Espesor6`, `Espesor7`, `Espesor8`, `Color1`, `Color2`, `Color3`, `Color4`, `Color5`, `Color6`, `Color7`, `Color8`, `Estancamiento1`, `Estancamiento2`,
  `Estancamiento3`, `Estancamiento4`, `Estancamiento5`, `Estancamiento6`, `Estancamiento7`, `Estancamiento8`, `Subsuelo1`, `Subsuelo2`, `Subsuelo3`, `Subsuelo4`, `Subsuelo5`, `Subsuelo6`, `Subsuelo7`, `Subsuelo8`, `Salinidad1`, `Salinidad2`, `Salinidad3`, `Salinidad4`, `Salinidad5`,
  `Salinidad6`, `Salinidad7`, `Salinidad8`, `Animales1`, `Animales2`, `Animales3`, `Animales4`, `Animales5`, `Animales6`, `Animales7`, `Animales8`, `Distancia1`, `Distancia2`, `Distancia3`, `Distancia4`, `Distancia5`, `Distancia6`, `Distancia7`, `Distancia8`,
  `Ganadera1`, `Ganadera2`, `Ganadera3`, `Ganadera4`, `Ganadera5`, `Ganadera6`, `Ganadera7`, `Ganadera8`, `Tierra1`, `Tierra2`, `Tierra3`, `Tierra4`, `Tierra5`, `Tierra6`, `Tierra7`, `Tierra8`, `Laguna1`, `Laguna2`, `Laguna3`,
  `Laguna4`, `Laguna5`, `Laguna6`, `Laguna7`, `Laguna8`, `ValorRubro21`, `ValorRubro22`, `ValorRubro23`, `ValorRubro24`, `ValorRubro25`, `ValorRubro26`, `ValorRubro27`, `ValorRubro28`, `ValorRubro41`, `ValorRubro42`, `ValorRubro43`, `ValorRubro44`, `ValorRubro45`, `ValorRubro46`,
  `ValorRubro47`, `ValorRubro48`, `ValorRubro51`, `ValorRubro52`, `ValorRubro53`, `ValorRubro54`, `ValorRubro55`, `ValorRubro56`, `ValorRubro57`, `ValorRubro58`, `ValorRubro61`, `ValorRubro62`, `ValorRubro63`, `ValorRubro64`, `ValorRubro65`, `ValorRubro66`, `ValorRubro67`, `ValorRubro68`, `SupRubro21`,
  `SupRubro22`, `SupRubro23`, `SupRubro24`, `SupRubro25`, `SupRubro26`, `SupRubro27`, `SupRubro28`, `SupRubro41`, `SupRubro42`, `SupRubro43`, `SupRubro44`, `SupRubro45`, `SupRubro46`, `SupRubro47`, `SupRubro48`, `SupRubro51`, `SupRubro52`, `SupRubro53`, `SupRubro54`,
  `SupRubro55`, `SupRubro56`, `SupRubro57`, `SupRubro58`, `SupRubro61`, `SupRubro62`, `SupRubro63`, `SupRubro64`, `SupRubro65`, `SupRubro66`, `SupRubro67`, `SupRubro68`, `TipoRubro21`, `TipoRubro22`, `TipoRubro23`, `TipoRubro24`, `TipoRubro25`, `TipoRubro26`, `TipoRubro27`,
  `TipoRubro28`, `TipoRubro41`, `TipoRubro42`, `TipoRubro43`, `TipoRubro44`, `TipoRubro45`, `TipoRubro46`, `TipoRubro47`, `TipoRubro48`, `TipoRubro51`, `TipoRubro52`, `TipoRubro53`, `TipoRubro54`, `TipoRubro55`, `TipoRubro56`, `TipoRubro57`, `TipoRubro58`, `TipoRubro61`, `TipoRubro62`,
  `TipoRubro63`, `TipoRubro64`, `TipoRubro65`, `TipoRubro66`, `TipoRubro67`, `TipoRubro68`, `SupArroyo`, `Solototales`, `SuperficieTotales`, `ValorTotal`
  FROM form911
  WHERE codForm911=$codForm";

  mysqli_query($conexion,$sql)
  or die("Problemas en la duplicacion ".mysqli_error($conexion));

  /* se obtiene el ultimo codigo de la formulrio ingresado */
                $resultob = mysqli_query($conexion,"SELECT MAX(codForm911) AS id FROM form911");
                $vecob = mysqli_fetch_array($resultob);
              if (!$resultob){
                die("Error: Datos no encontrados..");
              }

              $codFormNue=$vecob['id'] ;
  break;

  case '912':
  $sql="INSERT INTO form912( codForm912 ,  Interno ,  Parcela ,  Subparcela ,  Pagina ,  AlamA1 ,  AlamA2 ,  AlamA3 ,  AlamA4 ,  AlamA5 ,  AlamA6 ,  AlamA7 ,  AlamA8 ,  AlamA9 ,  AlamA10 ,  AlamA11 ,  AlamA12 ,  AlamA13 ,  AlamA14 ,  AlamA15 ,  AlamA16 ,  AlamA17 ,  AlamA18 ,  SiloEst1 ,  SiloFec1 ,  SiloCant1 ,  SiloCap1 ,  SiloEst2 ,  SiloFec2 ,  SiloCant2 ,  SiloCap2 ,  SiloEst3 ,  SiloFec3 ,
    SiloCant3 ,  SiloCap3 ,  Molino1 ,  Molino2 ,  Molino3 ,  Molino4 ,  Molino5 ,  Molino6,  Tanque1 ,  Tanque2 ,  Tanque3 ,  Tanque4 ,  Tanque5 ,  Tanque6 ,  OliHect1 ,  OliArea1 ,  OliCa1 ,  OliPre1 ,  OliPro1 ,  OliPos1 ,  OliHect2 ,  OliArea2 ,  OliCa2 ,  OliPre2 ,  OliPro2 ,  OliPos2 ,  OliHect3 ,  OliArea3 ,  OliCa3 ,  OliPre3 ,  OliPro3 ,  OliPos3 ,  OliHect4 ,  OliArea4 ,  OliCa4 ,  OliPre4 ,
    OliPro4 ,  OliPos4 ,  OliHect5 ,  OliArea5 ,  OliCa5 ,  OliPre5 ,  OliPro5 ,  OliPos5 ,  OliHect6 ,  OliArea6 ,  OliCa6 ,  OliPre6 ,  OliPro6 ,  OliPos6 ,  OliHect7 ,  OliArea7 ,  OliCa7 ,  OliPre7 ,  OliPro7 ,  OliPos7 ,  OliCa8 ,  OliHect8 ,  OliArea8 ,  OliPre8 ,  OliPro8 ,  OliPos8 ,  OliHect9 ,  OliArea9 ,  OliCa9 ,  OliPre9 ,  OliPro9 ,  OliPos9 ,  FrutDet1 ,  FruEst1 ,  FruHect1 ,  FruArea1 ,
    FruCa1 ,  FruPre1 ,  FruPro1 ,  FruPos1 ,  FrutDet2 ,  FruEst2 ,  FruHect2 ,  FruArea2 ,  FruCa2 ,  FruPre2 ,  FruPro2 ,  FruPos2 ,  FrutDet3 ,  FruEst3 ,  FruHect3 ,  FruArea3 ,  FruCa3 ,  FruPre3 ,  FruPro3 ,  FruPos3 ,  FrutDet4 ,  FruEst4 ,  FruHect4 ,  FruArea4 ,  FruCa4 ,  FruPre4 ,  FruPro4 ,  FruPos4 ,  FrutDet5 ,  FruEst5 ,  FruHect5 ,  FruArea5 ,  FruCa5 ,  FruPre5 ,  FruPro5 ,  FruPos5 ,
    FrutDet6 ,  FruEst6 ,  FruHect6 ,  FruArea6 ,  FruCa6 ,  FruPre6 ,  FruPro6 ,  FruPos6 ,  FrutDet7 ,  FruEst7 ,  FruHect7 ,  FruArea7 ,  FruCa7 ,  FruPre7 ,  FruPro7 ,  FruPos7 ,  FrutDet8 ,  FruEst8 ,  FruHect8 ,  FruArea8 ,  FruCa8 ,  FruPre8 ,  FruPro8 ,  FruPos8 ,  FrutDet9 ,  FruEst9 ,  FruHect9 ,  FruArea9 ,  FruCa9 ,  FruPre9 ,  FruPro9 ,  FruPos9 ,  PlanDet1 ,  PlanEst1 ,  PlanHect1 ,
    PlanArea1 ,  PlanCa1 ,  PlanPre1 ,  PlanPro1 ,  PlanDet2 ,  PlanEst2 ,  PlanHect2 ,  PlanArea2 ,  PlanCa2 ,  PlanPre2 ,  PlanPro2 ,  PlanDet3 ,  PlanEst3 ,  PlanHect3 ,  PlanArea3 ,  PlanCa3 ,  PlanPre3 ,  PlanPro3 ,  PlanDet4 ,  PlanEst4 ,  PlanHect4 ,  PlanArea4 ,  PlanCa4 ,  PlanPre4 ,  PlanPro4 ,  PlanDet5 ,  PlanEst5 ,  PlanHect5 ,  PlanArea5 ,  PlanCa5 ,  PlanPre5 ,  PlanPro5 ,  PlanDet6 ,
    PlanEst6 ,  PlanHect6 ,  PlanArea6 ,  PlanCa6 ,  PlanPre6 ,  PlanPro6 ,  PlanDet7 ,  PlanEst7 ,  PlanHect7 ,  PlanArea7 ,  PlanCa7 ,  PlanPre7 ,  PlanPro7 ,  PlanDet8 ,  PlanEst8 ,  PlanHect8 ,  PlanArea8 ,  PlanCa8 ,  PlanPre8 ,  PlanPro8 ,  PlanDet9 ,  PlanEst9 ,  PlanHect9 ,  PlanArea9 ,  PlanCa9 ,  PlanPre9 ,  PlanPro9 )
  SELECT null, `Interno`, `Parcela`, `Subparcela`, `Pagina`, `AlamA1`, `AlamA2`, `AlamA3`, `AlamA4`, `AlamA5`, `AlamA6`, `AlamA7`, `AlamA8`, `AlamA9`, `AlamA10`, `AlamA11`, `AlamA12`, `AlamA13`, `AlamA14`,
  `AlamA15`, `AlamA16`, `AlamA17`, `AlamA18`, `SiloEst1`, `SiloFec1`, `SiloCant1`, `SiloCap1`, `SiloEst2`, `SiloFec2`, `SiloCant2`, `SiloCap2`, `SiloEst3`, `SiloFec3`, `SiloCant3`, `SiloCap3`, `Molino1`, `Molino2`, `Molino3`,
  `Molino4`, `Molino5`, `Molino6`, `Tanque1`, `Tanque2`, `Tanque3`, `Tanque4`, `Tanque5`, `Tanque6`, `OliHect1`, `OliArea1`, `OliCa1`, `OliPre1`, `OliPro1`, `OliPos1`, `OliHect2`, `OliArea2`, `OliCa2`, `OliPre2`,
  `OliPro2`, `OliPos2`, `OliHect3`, `OliArea3`, `OliCa3`, `OliPre3`, `OliPro3`, `OliPos3`, `OliHect4`, `OliArea4`, `OliCa4`, `OliPre4`, `OliPro4`, `OliPos4`, `OliHect5`, `OliArea5`, `OliCa5`, `OliPre5`, `OliPro5`,
  `OliPos5`, `OliHect6`, `OliArea6`, `OliCa6`, `OliPre6`, `OliPro6`, `OliPos6`, `OliHect7`, `OliArea7`, `OliCa7`, `OliPre7`, `OliPro7`, `OliPos7`, `OliCa8`, `OliHect8`, `OliArea8`, `OliPre8`, `OliPro8`, `OliPos8`,
  `OliHect9`, `OliArea9`, `OliCa9`, `OliPre9`, `OliPro9`, `OliPos9`, `FrutDet1`, `FruEst1`, `FruHect1`, `FruArea1`, `FruCa1`, `FruPre1`, `FruPro1`, `FruPos1`, `FrutDet2`, `FruEst2`, `FruHect2`, `FruArea2`, `FruCa2`,
  `FruPre2`, `FruPro2`, `FruPos2`, `FrutDet3`, `FruEst3`, `FruHect3`, `FruArea3`, `FruCa3`, `FruPre3`, `FruPro3`, `FruPos3`, `FrutDet4`, `FruEst4`, `FruHect4`, `FruArea4`, `FruCa4`, `FruPre4`, `FruPro4`, `FruPos4`,
  `FrutDet5`, `FruEst5`, `FruHect5`, `FruArea5`, `FruCa5`, `FruPre5`, `FruPro5`, `FruPos5`, `FrutDet6`, `FruEst6`, `FruHect6`, `FruArea6`, `FruCa6`, `FruPre6`, `FruPro6`, `FruPos6`, `FrutDet7`, `FruEst7`, `FruHect7`,
  `FruArea7`, `FruCa7`, `FruPre7`, `FruPro7`, `FruPos7`, `FrutDet8`, `FruEst8`, `FruHect8`, `FruArea8`, `FruCa8`, `FruPre8`, `FruPro8`, `FruPos8`, `FrutDet9`, `FruEst9`, `FruHect9`, `FruArea9`, `FruCa9`, `FruPre9`,
  `FruPro9`, `FruPos9`, `PlanDet1`, `PlanEst1`, `PlanHect1`, `PlanArea1`, `PlanCa1`, `PlanPre1`, `PlanPro1`, `PlanDet2`, `PlanEst2`, `PlanHect2`, `PlanArea2`, `PlanCa2`, `PlanPre2`, `PlanPro2`, `PlanDet3`, `PlanEst3`, `PlanHect3`,
  `PlanArea3`, `PlanCa3`, `PlanPre3`, `PlanPro3`, `PlanDet4`, `PlanEst4`, `PlanHect4`, `PlanArea4`, `PlanCa4`, `PlanPre4`, `PlanPro4`, `PlanDet5`, `PlanEst5`, `PlanHect5`, `PlanArea5`, `PlanCa5`, `PlanPre5`, `PlanPro5`, `PlanDet6`,
  `PlanEst6`, `PlanHect6`, `PlanArea6`, `PlanCa6`, `PlanPre6`, `PlanPro6`, `PlanDet7`, `PlanEst7`, `PlanHect7`, `PlanArea7`, `PlanCa7`, `PlanPre7`, `PlanPro7`, `PlanDet8`, `PlanEst8`, `PlanHect8`, `PlanArea8`, `PlanCa8`, `PlanPre8`,
  `PlanPro8`, `PlanDet9`, `PlanEst9`, `PlanHect9`, `PlanArea9`, `PlanCa9`, `PlanPre9`, `PlanPro9`
  FROM form912
  WHERE codForm912=$codForm";

  mysqli_query($conexion,$sql)
  or die("Problemas en la duplicacion ".mysqli_error($conexion));

  /* se obtiene el ultimo codigo de la formulrio ingresado */
                $resultob = mysqli_query($conexion,"SELECT MAX(codForm912) AS id FROM form912");
                $vecob = mysqli_fetch_array($resultob);
              if (!$resultob){
                die("Error: Datos no encontrados..");
              }

              $codFormNue=$vecob['id'] ;
  break;

  case '915':
  $sql="INSERT INTO form915( codForm915 ,  Interno ,  Parcela ,  Subparcela ,  AMetros ,  AFachada ,  AParedes ,  ATechos ,  ACielorrasos ,  ARevoques ,  APisos ,  AHierro ,  AMadera ,  ABano ,  ACocina ,  ARevest ,  AInstalac ,  AEstado ,  ABasico ,  BMetros ,  BTrabajos ,  BMamposteria ,  BHormigon ,  BTechos ,  BCielorrasos ,  BRevesti ,  tecnico ,  BPisos ,  BCarpinteria ,  BSanitaria ,  BCocina ,
  BRevesti2 ,  BInsta2 ,  BEstado ,  BBasico ,  CMetros ,  CFachada ,  CParedes,  CEsqueleto ,  CArmada ,  CTechos ,  CCielorrasos ,  CRevoques ,  CPisos ,  CHierro ,  CMadera ,  CBano ,  CRevesti ,  CInstalac ,  CEstado ,  CBasico ,  Pagina ,  TipoForm )
  SELECT null, `Interno`, `Parcela`, `Subparcela`, `AMetros`, `AFachada`, `AParedes`, `ATechos`, `ACielorrasos`, `ARevoques`, `APisos`, `AHierro`, `AMadera`, `ABano`, `ACocina`, `ARevest`, `AInstalac`, `AEstado`, `ABasico`,
  `BMetros`, `BTrabajos`, `BMamposteria`, `BHormigon`, `BTechos`, `BCielorrasos`, `BRevesti`, `tecnico`, `BPisos`, `BCarpinteria`, `BSanitaria`, `BCocina`, `BRevesti2`, `BInsta2`, `BEstado`, `BBasico`, `CMetros`, `CFachada`, `CParedes`,
  `CEsqueleto`, `CArmada`, `CTechos`, `CCielorrasos`, `CRevoques`, `CPisos`, `CHierro`, `CMadera`, `CBano`, `CRevesti`, `CInstalac`, `CEstado`, `CBasico`, `Pagina`, `TipoForm`
  FROM form915
  WHERE codForm915=$codForm";

  mysqli_query($conexion,$sql)
  or die("Problemas en la duplicacion ".mysqli_error($conexion));

  /* se obtiene el ultimo codigo de la formulrio ingresado */
                $resultob = mysqli_query($conexion,"SELECT MAX(codForm915) AS id FROM form915");
                $vecob = mysqli_fetch_array($resultob);
              if (!$resultob){
                die("Error: Datos no encontrados..");
              }

              $codFormNue=$vecob['id'] ;
  break;

  case '916':
  $sql="INSERT INTO form916( codForm916 ,  Interno ,  Parcela ,  Subparcela ,  Tipo ,  ParedA1 ,  ParedA2 ,  ParedA3 ,  ParedA4 ,  ParedB1 ,  ParedB2 ,  ParedB3 ,  ParedB4 ,  ParedB5 ,  ParedB6 ,  ParedB7 ,  observaciones ,  ParedC1 ,  ParedC2 ,  ParedC3 ,  ParedEstado ,  ParedReci ,  EsqueA1 ,  EsqueA2 ,  EsqueA3 ,  EsqueA4 ,  EsqueB1 ,  EsqueB2 ,  EsqueB3 ,  EsqueB4 ,  EsqueB5 ,  EsqueC1 ,  EsqueC2 ,
  EsqueC3 ,  EsqueEstado ,  EsqueReci ,  ArmaA1 ,  ArmaA2 ,  ArmaA3 ,  ArmaA4 ,  ArmaB1 ,  ArmaB2 ,  ArmaB3 ,  ArmaB4 ,  ArmaB5 ,  ArmaC1 ,  ArmaC2 ,  ArmaC3 ,  ArmaEstado ,  ArmaReci ,  TechoA1 ,  TechoA2 ,  TechoA3 ,  TechoA4 ,  TechoB1 ,  TechoB2 ,  TechoB3 ,  TechoB4 ,  TechoB5 ,  TechoC1 ,  TechoC2 ,  TechoC3 ,  TechoEstado ,  TechoReci ,  RevoqA1 ,  RevoqA2 ,  RevoqB1 ,  RevoqB2 ,  RevoqC1 ,
  RevoqEstado ,  RevoqReci ,  PisosA1 ,  PisosA2 ,  PisosA3 ,  PisosA4 ,  PisosB1 ,  PisosB2 ,  PisosB3 ,  PisosC1 ,  PisosEstado ,  PisosReci ,  MadeA1 ,  MadeA2 ,  MadeB1 ,  MadeC1 ,  MadeEstado ,  MadeReci ,  MetaA1 ,  MetaB1 ,  MetaC1 ,  MetaEstado ,  MetaReci ,  GasA1 ,  GasA2 ,  GasA3 ,  GasA4 ,  GasB1 ,  GasB2 ,  GasB3 ,  GasC1 ,  GasEstado ,  GasReci ,  LuzA1 ,  LuzA2 ,  LuzA3 ,  LuzB1 ,
  LuzB2 ,  LuzB3 ,  LuzC1 ,  LuzEstado ,  LuzReci ,  AguaA1 ,  AguaA2 ,  AguaA3 ,  AguaA4 ,  AguaA5 ,  AguaB1 ,  AguaB2 ,  AguaB3 ,  AguaC1 ,  AguaEstado ,  AguaReci ,  Cubierta ,  Data ,  Dia1 ,  Dia ,  Data1 ,  Estado ,  Rubrorural ,  Pagina ,  Destino)
  SELECT null,`Interno`, `Parcela`, `Subparcela`, `Tipo`, `ParedA1`, `ParedA2`, `ParedA3`, `ParedA4`, `ParedB1`, `ParedB2`, `ParedB3`, `ParedB4`, `ParedB5`, `ParedB6`, `ParedB7`, `observaciones`, `ParedC1`, `ParedC2`, `ParedC3`,
  `ParedEstado`, `ParedReci`, `EsqueA1`, `EsqueA2`, `EsqueA3`, `EsqueA4`, `EsqueB1`, `EsqueB2`, `EsqueB3`, `EsqueB4`, `EsqueB5`, `EsqueC1`, `EsqueC2`, `EsqueC3`, `EsqueEstado`, `EsqueReci`, `ArmaA1`, `ArmaA2`, `ArmaA3`,
  `ArmaA4`, `ArmaB1`, `ArmaB2`, `ArmaB3`, `ArmaB4`, `ArmaB5`, `ArmaC1`, `ArmaC2`, `ArmaC3`, `ArmaEstado`, `ArmaReci`, `TechoA1`, `TechoA2`, `TechoA3`, `TechoA4`, `TechoB1`, `TechoB2`, `TechoB3`, `TechoB4`,
  `TechoB5`, `TechoC1`, `TechoC2`, `TechoC3`, `TechoEstado`, `TechoReci`, `RevoqA1`, `RevoqA2`, `RevoqB1`, `RevoqB2`, `RevoqC1`, `RevoqEstado`, `RevoqReci`, `PisosA1`, `PisosA2`, `PisosA3`, `PisosA4`, `PisosB1`, `PisosB2`,
  `PisosB3`, `PisosC1`, `PisosEstado`, `PisosReci`, `MadeA1`, `MadeA2`, `MadeB1`, `MadeC1`, `MadeEstado`, `MadeReci`, `MetaA1`, `MetaB1`, `MetaC1`, `MetaEstado`, `MetaReci`, `GasA1`, `GasA2`, `GasA3`, `GasA4`,
  `GasB1`, `GasB2`, `GasB3`, `GasC1`, `GasEstado`, `GasReci`, `LuzA1`, `LuzA2`, `LuzA3`, `LuzB1`, `LuzB2`, `LuzB3`, `LuzC1`, `LuzEstado`, `LuzReci`, `AguaA1`, `AguaA2`, `AguaA3`, `AguaA4`,
  `AguaA5`, `AguaB1`, `AguaB2`, `AguaB3`, `AguaC1`, `AguaEstado`, `AguaReci`, `Cubierta`, `Data`, `Dia1`, `Dia`, `Data1`, `Estado`, `Rubrorural`, `Pagina`, `Destino`
  FROM form916
  WHERE codForm916=$codForm";

  mysqli_query($conexion,$sql)
  or die("Problemas en la duplicacion ".mysqli_error($conexion));

  /* se obtiene el ultimo codigo de la formulrio ingresado */
                $resultob = mysqli_query($conexion,"SELECT MAX(codForm916) AS id FROM form916");
                $vecob = mysqli_fetch_array($resultob);
              if (!$resultob){
                die("Error: Datos no encontrados..");
              }

              $codFormNue=$vecob['id'] ;
  break;

  case 'A901':
  $sql="INSERT INTO forma901(codFormA901, Interno, Parcela, Subparcela, Ajuste, TierraBas, TierraAct, Superficie,
                              EdifBas, EdifAct, MejBas, MejAct, ComBas, ComAct, Postura, Tierra1, Tierra2, Fecha,
                              Destino, Articulo, CoefAjuste, CoefAjusteAplica, observacion)
  SELECT null, `Interno`, `Parcela`, `Subparcela`, `Ajuste`, `TierraBas`, `TierraAct`, `Superficie`,
              `EdifBas`, `EdifAct`, `MejBas`, `MejAct`, `ComBas`, `ComAct`, `Postura`, `Tierra1`, `Tierra2`, `Fecha`,
              `Destino`, `Articulo`, `CoefAjuste`, `CoefAjusteAplica`, `observacion`
  FROM forma901
  WHERE codFormA901=$codForm";

  mysqli_query($conexion,$sql)
  or die("Problemas en la duplicacion ".mysqli_error($conexion));

  /* se obtiene el ultimo codigo de la formulrio ingresado */
                $resultob = mysqli_query($conexion,"SELECT MAX(codFormA901) AS id FROM forma901");
                $vecob = mysqli_fetch_array($resultob);
              if (!$resultob){
                die("Error: Datos no encontrados..");
              }

              $codFormNue=$vecob['id'] ;
  break;

  case 'A910':
  $sql="INSERT INTO forma910(codFormA910, Interno, Parcela, Subparcela ,  TierraAju ,  TierraBas ,  Superficie ,  Entero ,  Aptitud ,  EdifBas ,  EdifAct ,  MejBas ,  MejAct ,  PlanBas ,  PlanAct ,  MejAct912 ,  MejBas912 ,  Postura ,  Ala1 ,  Ala2 ,  Ala3 ,  Ala4 ,  observacion ,  Ala5 ,  Ala6 ,  Ala7 ,  Ala8 ,  Ala9 ,  Ala10 ,  Ala11 ,  Ala12 ,  Ala13 ,  Ala14 ,  Ala15 ,  Ala16 ,  Ala17 ,  Ala18 ,
  SiloCant1 ,  SiloEst1 ,  SiloData1 ,  SiloCap1 ,  SiloCant2 ,  SiloEst2,  SiloData2 ,  SiloCap2 ,  SiloCant3 ,  SiloEst3 ,  SiloData3, SiloCap3 ,  MoliCant1 ,  MoliCant2 ,  MoliCant3 ,  MoliCant4 ,  MoliCant5 ,  MoliCant6 ,  TanCant1 ,  TanCant2 ,  TanCant3 ,  PlantDet1 ,  PlantSup1 ,  PlantP1 ,  PlantEst1 ,  PlantDet2 ,  PlantSup2 ,  PlantP2 ,  PlantEst2 ,  PlantDet3 ,  PlantSup3 ,  PlantP3 ,
  PlantEst3 ,  PlantDet4 ,  PlantSup4 ,  PlantP4 ,  PlantEst4 ,  PlantDet5 ,  PlantSup5 ,  PlantP5 ,  PlantEst5 ,  PlantDet6 ,  PlantSup6 ,  PlantP6 ,  PlantEst6,  Fecha ,  Destino ,  Articulo ,  Tierra1 ,  Tierra2 ,  CoefAjusteAplica ,  CoefAjuste )
  SELECT null,`Interno`, `Parcela`, `Subparcela`, `TierraAju`, `TierraBas`, `Superficie`, `Entero`, `Aptitud`, `EdifBas`, `EdifAct`, `MejBas`, `MejAct`, `PlanBas`, `PlanAct`, `MejAct912`, `MejBas912`, `Postura`, `Ala1`,
  `Ala2`, `Ala3`, `Ala4`, `observacion`, `Ala5`, `Ala6`, `Ala7`, `Ala8`, `Ala9`, `Ala10`, `Ala11`, `Ala12`, `Ala13`, `Ala14`, `Ala15`, `Ala16`, `Ala17`, `Ala18`, `SiloCant1`,
  `SiloEst1`, `SiloData1`, `SiloCap1`, `SiloCant2`, `SiloEst2`, `SiloData2`, `SiloCap2`, `SiloCant3`, `SiloEst3`, `SiloData3`, `SiloCap3`, `MoliCant1`, `MoliCant2`, `MoliCant3`, `MoliCant4`, `MoliCant5`, `MoliCant6`, `TanCant1`, `TanCant2`,
  `TanCant3`, `PlantDet1`, `PlantSup1`, `PlantP1`, `PlantEst1`, `PlantDet2`, `PlantSup2`, `PlantP2`, `PlantEst2`, `PlantDet3`, `PlantSup3`, `PlantP3`, `PlantEst3`, `PlantDet4`, `PlantSup4`, `PlantP4`, `PlantEst4`, `PlantDet5`, `PlantSup5`,
  `PlantP5`, `PlantEst5`, `PlantDet6`, `PlantSup6`, `PlantP6`, `PlantEst6`, `Fecha`, `Destino`, `Articulo`, `Tierra1`, `Tierra2`, `CoefAjusteAplica`, `CoefAjuste`
  FROM forma910
  WHERE codFormA910=$codForm";

  mysqli_query($conexion,$sql)
  or die("Problemas en la duplicacion ".mysqli_error($conexion));
  /* se obtiene el ultimo codigo de la formulrio ingresado */
                $resultob = mysqli_query($conexion,"SELECT MAX(codFormA910) AS id FROM forma910");
                $vecob = mysqli_fetch_array($resultob);
              if (!$resultob){
                die("Error: Datos no encontrados..");
              }

              $codFormNue=$vecob['id'] ;
  break;

}


	?>
