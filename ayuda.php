<?php
    include("sesion.php");
  	$pagina='indexPHP';
		include ("encabezado.php");
		include ("menu.php");
    /// entrara al sistema sin loguearse
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
	      				<i class="icon-question-sign"></i>
	      				<h3>Ayuda</h3>
	  				</div> <!-- /widget-header -->

					<div class="widget-content">
<ul>
            <li>
              <a href="ManualdeUsuario.pdf" target="_blank">
                  <span>Manual de Usuario</span>
              </a>
            </li>
            <li>
              <a href="videos\Login.mp4" target="_blank">
                  <span>Video 1: Ingreso al sistema</span>
              </a>
            </li>
            <li>
              <a href="videos\Clientes.mp4" target="_blank">
                  <span>Video 2: Clientes</span>
              </a>
            </li>
            <li>
              <a href="videos\Firmantes.mp4" target="_blank">
                  <span>Video 3: Firmantes</span>
              </a>
            </li>
            <li>
              <a href="videos\Destinatarios.mp4" target="_blank">
                  <span>Video 4: Destinatarios</span>
              </a>
            </li>
            <li>
              <a href="videos\Obras.mp4" target="_blank">
                  <span>Video 5: Obras</span>
              </a>
            </li>
            <li>
              <a href="videos\Cedula10707.mp4" target="_blank">
                  <span>Video 6: Cedula 10707</span>
              </a>
            </li>
            <li>
              <a href="videos\CedulaPH.mp4" target="_blank">
                  <span>Video 7: Cedula PH</span>
              </a>
            </li>
</ul>


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
