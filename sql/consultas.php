<?php

	include ("conexion.php");
    $consulta = "SELECT `idCliente` FROM `clientes` WHERE `idUsuario`=".$_SESSION['idUsuario'];

	if ($resultado = mysqli_query($conexion, $consulta)) {

	    $cantClientes=0;
	    while ($fila = mysqli_fetch_row($resultado)) {

	    	$id[$cantClientes] = $fila[0];
			$cantClientes++;

	    }
	    $consulta = "(";
	    if ($cantClientes > 0) {
			for ($i=0; $i < sizeof($id); $i++) {
				$consulta.= "`idCliente`=".$id[$i]." OR";
			}
			$condicion=substr($consulta, 0, -3).")";
	    }else{
	    	$condicion = "(`idCliente`= -1)";
	    }

	    mysqli_free_result($resultado);
	}

	$consultaLocalidades= mysqli_query($conexion,"SELECT * FROM localidades ORDER By localidad")
    or die("Problemas en el select".mysqli_error($conexion));

	$consultaProvincia= mysqli_query($conexion,"SELECT * FROM provincias ORDER By provincia")
    or die("Problemas en el select".mysqli_error($conexion));

	$consultaClientes= mysqli_query($conexion,"SELECT * FROM clientes WHERE $condicion ORDER By cnombreApellido")
    or die("No se puede traer listado de clientes".mysqli_error($conexion));


	$consultaFirmantes= mysqli_query($conexion,"SELECT * FROM firmantes  WHERE $condicion ORDER By fnombreApellido")
    or die("No se puede traer listado de firmantes".mysqli_error($conexion));

	$consultaDestinatarios= mysqli_query($conexion,"SELECT * FROM destinatarios  WHERE $condicion ORDER By dnombreApellido")
    or die("No se puede traer listado de destinatarios".mysqli_error($conexion));

	$consultaProfesionales= mysqli_query($conexion,"SELECT * FROM profesionales WHERE `idUsuario`=".$_SESSION['idUsuario']." ORDER By pnombreApellido")
    or die("No se puede traer listado de profesionales".mysqli_error($conexion));

	$consultaPartidos= mysqli_query($conexion,"SELECT * FROM partidos ORDER By partido")
    or die("No se puede traer listado de partidos".mysqli_error($conexion));

	$consultaObras= mysqli_query($conexion,"SELECT * FROM obras where desactivada='0' AND $condicion ORDER By partida")
    or die("No se puede traer listado de obras".mysqli_error($conexion));

	$consultaDestinos= mysqli_query($conexion,"SELECT * FROM destinos ORDER By codigo")
	    or die("No se puede traer listado de destinos".mysqli_error($conexion));

	$consultaCedulas10707= mysqli_query($conexion,"SELECT * FROM obras o, cedula10707 c where (c.codObra=o.codObra) ORDER By partida")
		    or die("No se puede traer listado de obras".mysqli_error($conexion));

	$consultaCedulasPH= mysqli_query($conexion,"SELECT * FROM obras o, cedulaph c where (c.codObra=o.codObra) ORDER By partida")
							or die("No se puede traer listado de obras".mysqli_error($conexion));

	$consultaCedulasCliente= mysqli_query($conexion,"SELECT * FROM obras o, cedula10707 c,clientes cl where (o.idCliente=cl.idCliente) and (c.codObra=o.codObra)  ORDER By partida")
						    or die("No se puede traer listado de obras".mysqli_error($conexion));


	//$consultaCPA= mysqli_query($conexion,"SELECT c.cpa FROM alturas a INNER JOIN cpa c ON a.id_cpa=c.id_cpa ")
						//   or die("Problemas en el select".mysqli_error($conexion));









?>
