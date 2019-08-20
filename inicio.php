<?php
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

Bienvenido <b>	<?php echo $_SESSION['nombreUsuario'] ?> </b>al sistema Valur.
<br><br>
En el menu "Ayuda" podra ver el manual y los videos que lo ayudaran a utilizar este sistema.
<br><br>
Al pie de la pagina puede ver los datos de soporte.




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
