<?php
include("sesion.php");
$pagina='comunicadosVerPHP';
include("encabezado.php");
include("seguridad.php");



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

						<div class=" accordion-groupcol-lg-12 text-center">
						<a href='comunicaMRP.php' class="btn btn-info" name="comunicaMRP">comunicacionMRP</a>
            <a href='comunicaPH-RP.php' class="btn btn-info" name="comunicaPH">comunicacionPH</a>
            <a href='comunicaPHE-RP.php' class="btn btn-info" name="comunicaPHE">comunicacionPHE</a>
</br></br>
          	</div>

            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                  Busqueda de Planos
                </a>
              </div>
              <div id="collapseOne" class="accordion-body collapse in">
                <div class="accordion-inner">
                  <form method="post">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <script src="js/datatables.js"></script>
                        <script src="js/dataTables.bootstrap.js"></script>
                        <?php
						$resultcomuni=mysqli_query($conexion,"SELECT * FROM comunicados c where c.idUsuario=".$_SESSION['idUsuario']." order by nro1,nro2,nro3 asc");
                        echo "<table  class='table table-bordered table-hover table-striped display AllDataTables'>";
                        echo "<thead>";
                        echo "<tr>";
												echo "<th class='col-sm-1'>Comunicado</th>";
                        echo "<th class='col-sm-2'>Plano</th>";
                        echo "<th class='col-sm-2'>Aprobado</th>";
                        echo "<th class='col-sm-5'>Designacion del Bien</th>";
                        echo "<th class='col-sm-2'>Acciones</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody class='buscar'>"; /*agregado*/

                        while($obra = mysqli_fetch_array($resultcomuni)){
                          $id=$obra['idComunicado'];
                          echo"<tr align='center'>";
												  echo"<td>" .$obra['tcom']."</td>";
                          echo"<td>" .$obra['nro1']."-".$obra['nro2']."-".$obra['nro3']."</td>";
                          echo"<td>" .date("d/m/Y", strtotime($obra['apro']))."</td>";
                          echo"<td>" .$obra['desi']."</td>";
                          echo"<td>";
													if ($obra['tcom']=='MRP'){
                          	echo"<a href='comunicaMRPmodificar.php?idComunicado=$id'> <i class='icon-small btn btn-info icon-pencil'></i></a>&nbsp;";
														echo"<a href='PDFcomunicaMRP.php?idComunicado=$id' target='_blank'><i class='icon-small btn btn-warning icon-print'></i></a>";
													}
													if ($obra['tcom']=='PH'){
														echo"<a href='comunicaPHRPmodificar.php?idComunicado=$id'> <i class='icon-small btn btn-info icon-pencil'></i></a>&nbsp;";
														echo"<a href='PDFcomunicaPHRP.php?idComunicado=$id' target='_blank'><i class='icon-small btn btn-warning icon-print'></i></a>";
													}
													if ($obra['tcom']=='PHE'){
														echo"<a href='comunicaPHERPmodificar.php?idComunicado=$id'> <i class='icon-small btn btn-info icon-pencil'></i></a>&nbsp;";
														echo"<a href='PDFcomunicaPHERP.php?idComunicado=$id' target='_blank'><i class='icon-small btn btn-warning icon-print'></i></a>";
													}
													echo"<a onClick='redirect(this);' id='$id'> <i class='icon-small btn btn-danger icon-trash'></i>  </a> ";
                          echo "</tr>";
                        }
                        echo "</tbody>";
                        echo "</table>";
                        ?>

                      </div>

                    </div>

                  </form>

                </div>

              </div>

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
	<script>
	function redirect(element) {
	if (confirm('Esta seguro que quiere eliminar el comunicado?'))
		window.location.href = "sql/comunicadosBorrar.php?idComunicado=" + element.id;
	}
	</script>

</html>
