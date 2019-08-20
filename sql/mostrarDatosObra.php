<?php

// consulta para buscar los datos de la obra
  include("sql/consultas.php");
  // if(isset($_REQUEST['idobra'])) {
  //   $idobra =$_REQUEST['idobra'];
  // }
  if(!function_exists("a")) {
    function a($dato) {
  		if($dato==1){
  			echo '<input type="checkbox" value="0" checked>';
  		} else {
  				echo '<input type="checkbox" value="0">';
  		}
  		return $dato;
  	}
  }
  function b($dato) {
		if($dato==1){
			echo '<input type="checkbox" value="0" checked disabled>';
		} else {
				echo '<input type="checkbox" value="0" disabled>';
		}
		return $dato;
	}

  if (isset($_GET['idCedula'])){
  $TipoDeCedula=$_GET["cedula"];
  $Cedula=$_GET["idCedula"];
  switch ($TipoDeCedula) {
    case '1': $cons=mysqli_fetch_array(mysqli_query($conexion, "SELECT `codObra` FROM `cedula10707` WHERE `idCedula707` = $Cedula")); break;
    case '2': $cons=mysqli_fetch_array(mysqli_query($conexion, "SELECT `codObra` FROM `cedulaph` WHERE `idCedulaPH` = $Cedula"));  break;
    case '3': $cons=mysqli_fetch_array(mysqli_query($conexion, "SELECT `codObra` FROM `cedulade` WHERE `idCedulaDE` = $Cedula"));break;
  }
  $idobra=$cons[0];
}
if (isset($_GET['idobra'])){
    $idobra = $_GET['idobra'];
  }

  $row = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM obras o, partidos pa, localidades l
    where (o.codObra='$idobra') and (o.codPartido=pa.idPartido) and (o.idLocalidad=l.idLocalidad) and (o.desactivada=0)"));


  //obras
  $Fpartido= $row['partido'];
  $FcodPartido= $row['codPartido'];
  $Fpartida= $row['partida'];
  $Flocalidad= $row['localidad'];
  $FcodigoPostal= $row['codigoPostal'];
  $Fdomicilio= $row['calle'];
  $FnroCalle= $row['nro'];
  $Fcuerpo= $row['cuerpo'];
  $Fpiso= $row['piso'];
  $Fdpto= $row['dpto'];
  $FesqCalle= $row['entreCalle'];
  $FyCalle= $row['yCalle'];
  $Fcir= $row['circuns'];
  $Fsec= $row['seccion'];
  $Fcha= $row['chacra'];
  $Fqui= $row['quinta'];
  $Ffra= $row['fraccion'];
  $Fman= $row['manzana'];
  $Fpar= $row['parcela'];
  $Fsub= $row['subparcela'];
  $FinfraP= $row['infraP'];
  $FinfraA= $row['infraA'];
  $FinfraAg= $row['infraAg'];
  $FinfraG= $row['infraG'];
  $FinfraC= $row['infraC'];
  $FinfraL= $row['infraL'];
  $FidCliente= $row['idCliente'];
  $FidFirmante= $row['idFirmante'];
  $FidDestinatario= $row['idDestinatario'];
  $FidLocalidad= $row['idLocalidad'];
  $FidProfesional= $row['idProfesional'];
  $FidPartido= $row['idPartido'];
  $FtipoObra= $row['tipoObra'];

  //Descomentar si esta agregada la columna Observaciones en la tabla obras, siendo de tipo varchar(302)
  //---------------------------------------------------//
  $Fobservaciones1="";
  $Fobservaciones="";
  //$Fobservaciones1="";
  //$Fobservaciones=$row['Observaciones'];
  //if (strlen($Fobservaciones)>151) {
  //  $Fobservaciones1=substr($Fobservaciones,151);
  //  $Fobservaciones=substr($Fobservaciones,0,151);
  //}
  //---------------------------------------------------//

  //Asegurarse de que el cliente tenga un valor de idLocalidad válido
  $rowClie = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM clientes d, localidades l, provincias p where (d.idCliente='$FidCliente')
   and (d.idLocalidad=l.idLocalidad) and (l.codProvincia=p.codProvincia)"));

  //datos cliente
  $Fcdni=$rowClie['dni'];

  $FctipoDni=$rowClie['tipoDni'];
  if($FctipoDni=='CUIT'){
    $Fcdni=$rowClie['cuit'];
  } else {
    $Fcdni=$rowClie['dni'];
  }
  $FcnombreApellido= $rowClie['cnombreApellido'];
  $Fccalle= $rowClie['calle'];
  $FcnroCalle= $rowClie['nroCalle'];
  $Fccuerpo= $rowClie['cuerpo'];
  $Fcpiso= $rowClie['piso'];
  $Fcdpto= $rowClie['departamento'];
  $Fclocalidad= $rowClie['localidad'];
  $Fcprovincia= $rowClie['provincia'];
  $Fccp= $rowClie['codigoPostal'];
  $FcCaracter = $rowClie['caracter'];

  //Asegurarse de que el firmante tenga un valor de idLocalidad válido
  $rowFirm = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM firmantes d, localidades l, provincias p where (d.idFirmante='$FidFirmante')
   and (d.idLocalidad=l.idLocalidad) and (l.codProvincia=p.codProvincia)"));

  // datos firmantes
  $FfnombreApellido= $rowFirm['fnombreApellido'];
  $FftipoDni= $rowFirm['tipoDni'];
  if($FftipoDni=='CUIT'){
    $Ffdni=$rowFirm['cuit'];
  } else {
    $Ffdni= $rowFirm['dni'];
  }
  $Ffcalle= $rowFirm['calle'];
  $Ffnrocalle= $rowFirm['nroCalle'];
  $Ffcuerpo= $rowFirm['cuerpo'];
  $Ffdpto= $rowFirm['departamento'];
  $Ffpiso= $rowFirm['piso'];
  $Fflocalidad= $rowFirm['localidad'];
  $Ffprovincia= $rowFirm['provincia'];
  $Ffcp= $rowFirm['codigoPostal'];
  $Ffcaracter = $rowFirm['caracter'];

  //Asegurarse de que el destinatario tenga un valor de idLocalidad válido
  $rowDest = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM destinatarios d, localidades l, provincias p where (d.idDestinatario='$FidDestinatario')
   and (d.idLocalidad=l.idLocalidad) and (l.codProvincia=p.codProvincia)"));

  // datos destinatario
  if ($rowClie['sexo'] == "3"){
    $Fddni="";$Fdtipodni="";
  } else {
    $Fddni = $rowDest['dni'];
    $Fdtipodni = $rowDest['tipoDni'];
  }
    $FdnombreApellido= $rowDest['dnombreApellido'];
    $Fdcalle= $rowDest['calle'];
    $FdnroCalle= $rowDest['nroCalle'];
    $Fdcuerpo= $rowDest['cuerpo'];
    $Fdpiso= $rowDest['piso'];
    $Fddpto= $rowDest['departamento'];
    $Fdlocalidad= $rowDest['localidad'];
    $Fdprovincia= $rowDest['provincia'];
    $Fdcp= $rowDest['codigoPostal'];
    //averiguar que es cc $Fdcc= $rowDes['cc'];

  //Asegurarse de que el profesional tenga un valor de idLocalidad válido
  $rowProfe = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM profesionales d, localidades l, provincias p where (d.idProfesional='$FidProfesional')
   and (d.idLocalidad=l.idLocalidad) and (l.codProvincia=p.codProvincia)"));

  //profesional
  $FpnombreApellido= $rowProfe['pnombreApellido'];
  $Fptipodni = $rowProfe['tipoDni'];
  $Fpdni = $rowProfe['dni'];
  $Fpcuit= $rowProfe['cuit'];
  $Fpdomicilio = $rowProfe['calle'];
  $Fpnrocalle= $rowProfe['nroCalle'];
  $Fpdpto= $rowProfe['departamento'];
  $Fppiso= $rowProfe['piso'];
  $Fptitulo= $rowProfe['titulo'];
  $Fptelefono= $rowProfe['telefono'];
  $Fpmatricula = $rowProfe['matricula'];
  $Fplocalidad= $rowProfe['localidad'];
  $Fpprovincia= $rowProfe['provincia'];
  $Fpcp= $rowProfe['codigoPostal'];
?>
