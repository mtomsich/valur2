<?php

/* conexion a la base */
   $conexion=mysqli_connect("localhost","root","","dbvalur") or
          die("Problemas con la conexion");

/* configuracion hora */
date_default_timezone_set('America/Argentina/Buenos_Aires');

mysqli_query($conexion,"SET CHARACTER SET utf8");

$consultacpa= mysqli_query($conexion,"select partido, localidad, codigoPostal from partidos, localidades where localidades.idPartido=partidos.idPartido  ORDER By localidad")
	or die("Problemas en el select".mysqli_error($conexion));

include("sesion.php");
		include ("encabezado.php");
		include ("menu.php");
?>

<!DOCTYPE html>
<html lang="es">

<body>

<div class="main">

	<div class="main-inner">

	    <div class="container">

	      <div class="row">

	      	<div class="span12">

	      		<div class="widget ">

	      			<div class="widget-header">
	      				<i class="icon-user"></i>
	      				<h3>Datos de tu cuenta</h3>
	  				</div> <!-- /widget-header -->

					<div class="widget-content">

						<div class="col-lg-12 text-center">

							<div class="control-group">
								<label class="control-label" for="localidad" >CPA</label>
								<div class="controls">
									<select id="partido" data-size="5" data-hide-disabled="true" onchange="selectLocalidad(this);" class="selectpicker" data-live-search="true" name="partidoSeleccionado" required>
										<option value="" >Seleccione Partido</option>
										<?php
										while ($fila=mysqli_fetch_row($consultacpa)) {
											echo "<option value='".$fila['0']."'>".$fila['0'].", ".$fila['1']."</option>";
										}
										?>
									</select>
									<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>
								</div> <!-- /controls -->
							</div> <!-- /control-group -->



						</div>

					</div> <!-- /widget-content -->

				</div> <!-- /widget -->

		    </div> <!-- /span8 -->




	      </div> <!-- /row -->

	    </div> <!-- /container -->

	</div> <!-- /main-inner -->

</div> <!-- /main -->


<?php
		include ("pie.php");

?>



  </body>

</html>
