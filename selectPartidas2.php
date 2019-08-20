<?php
include("sesion.php"); 
	$pagina="selectPartidas2PHP";

	include("sql/conexion.php");
	include("seguridadForm.php");

    $idobra =$_REQUEST['idobra'];
    include("sql/mostrarDatosObra.php");



$respuesta = '<tbody >
	<tr>
		<td class="col-sm-1"><input type="text" class="form-control" name="edificioA" value="' . $FcodPartido . '"></td>
		<td class="col-sm-2"><input type="text" class="form-control" name="edificioB" value="' . $Fpartida . '"></td>
		<td class="col-sm-1"><input type="text" class="form-control" name="edificioC" value=""></td>
		<td class="col-sm-2"><input type="text" class="form-control" name="edificioD" value=""></td>
		<td class="col-sm-1"><input type="text" class="form-control" name="edificioE" value=""></td>
		<td class="col-sm-2"><input type="text" class="form-control" name="edificioF" value=""></td>
		<td class="col-sm-1"><input type="text" class="form-control" name="edificioG" value=""></td>
		<td class="col-sm-2"><input type="text" class="form-control" name="edificioH" value=""></td>
		<td class="col-sm-1"><input type="text" class="form-control" name="edificioI" value=""></td>
		<td class="col-sm-2"><input type="text" class="form-control" name="edificioJ" value=""></td>



	</tr>

</tbody>';
 echo $respuesta;
?>
