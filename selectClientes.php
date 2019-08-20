<?php
include("sesion.php");
$pagina="selectClientesPHP";
include("sql/conexion.php");
include("seguridadForm.php");

$idcliente =$_REQUEST['idcliente'];


$clientes= mysqli_query($conexion,"SELECT * FROM obras where idCliente=$idcliente and desactivada=0 ORDER By partida");

$respuesta = '<select onChange="cargarDatos(this);" id="idobra" name="obraSeleccionada" class="col-lg-12 selectpicker" data-live-search="true">
<option value="">Seleccione partida</option>';

while ($fila = mysqli_fetch_row($clientes)) {
  $respuesta .= '<option value="' . $fila["0"] . '">' . $fila["2"] . '</option>';
}

$respuesta .= '</select>';
echo $respuesta;
?>
