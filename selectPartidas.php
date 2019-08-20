<?php
include("sesion.php");
$pagina="selectPartidasPHP";

include("sql/conexion.php");
include("seguridadForm.php");

$idobra =$_REQUEST['idobra'];
include("sql/mostrarDatosObra.php");



$respuesta = '<div class="col-lg-4 text-left">
	<label>Direccion</label>
	<input class="form-control" type="text" value="' .  $Fdomicilio.' '.$FnroCalle. '" disabled>
</div>

<div class="col-lg-4 text-left">
	<label>Entre esq. calle y </label>
	<input class="form-control" type="text" name="esqCalle"value="' .$FesqCalle.'"disabled>
</div>
<div class="col-lg-4 text-left">
	<label>Calle</label>
	<input class="form-control" type="text" name="yCalle" value="'. $FyCalle.'"disabled>
</div>




	        <div class="col-lg-4 text-left">
	          <label>Partido</label>
	          <input type="text" class="form-control " name="Clocalidad" id="lastname" value="' .  $Fpartido. '" disabled>

	        </div>
	        <div class="col-lg-2 text-left">
	          <label>Codigo</label>
	          <input class="form-control" type="text" value="' .  $FcodPartido. '" disabled>
	        </div>

	        <div class="col-lg-4 text-left">
	          <label>Localidad</label>
	          <input type="text" class="form-control " name="Clocalidad" id="lastname" value="' .  $Flocalidad. '" disabled>
	        </div>

	        <div class="col-lg-2 text-left">
	          <label>Codigo Postal</label>
	          <input class="form-control" type="text" name="cp" value="' .  $FcodigoPostal. '" disabled>
	        </div>

	        <table class="table table-bordered responsive-table">
	          <thead>
	            <tr>
	              <th class="col-sm-1">Circunscripcion</th>
	              <th class="col-sm-1">Seccion</th>
	              <th class="col-sm-1">Chacra</th>
	              <th class="col-sm-1">Quinta</th>
	              <th class="col-sm-1">Fraccion</th>
	              <th class="col-sm-1">Manzana</th>
	              <th class="col-sm-1">Parcela</th>

	            </tr>
	          </thead>
	          <tbody>
	            <tr>

	              <td><input type="text" class="form-control" name="cir" value="' .  $Fcir. '" disabled></td>
	              <td><input type="text" class="form-control" name="sec" value="' .  $Fsec. '" disabled></td>
	              <td><input type="text" class="form-control" name="cha" value="' .  $Fcha. '" disabled></td>
	              <td><input type="text" class="form-control" name="qui" value="' .  $Fqui. '" disabled></td>
	              <td><input type="text" class="form-control" name="fra" value="' .  $Ffra. '" disabled></td>
	              <td><input type="text" class="form-control" name="man" value="' .  $Fman. '" disabled></td>
	              <td><input type="text" class="form-control" name="par" value="' .  $Fpar. '" disabled></td>
	           </tr>
	          </tbody>
	        </table>';
 echo $respuesta;
?>
