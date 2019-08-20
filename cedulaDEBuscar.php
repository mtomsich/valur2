<?php
		include("sesion.php");
		$pagina='cedulaDEBuscarPHP';
		include("encabezado.php");
		include("seguridad.php");

	?>

	<!DOCTYPE html>
	<head>
		<style type="text/css">
		@media only screen and (min-width: 1200px) {
			#huggibuton{
				position: absolute;
				margin-left: 290%;
				z-index: 3;
			}
		}
		@media only screen and (min-width: 1000px) and (max-width: 1199px){
			#huggibuton{
				position: absolute;
				margin-left: 43%;
				z-index: 3;
			}
		}
		@media only screen and (min-width: 980px) and (max-width: 999px){
			#huggibuton{
				position: absolute;
				margin-left: 43%;
				z-index: 3;
			}
		}
		@media only screen and (min-width: 900px) and (max-width: 980px){
			#huggibuton{
				position: absolute;
				margin-left: 40%;
				z-index: 3;
			}
		}
	</style>

	</head>
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
									<h3>Busqueda de Obras</h3>
								</div> <!-- /widget-header -->

								<div class="widget-content">

									<form >
										<div class="col-lg-2">
										<a href="cedulaDENueva.php" id="huggibuton"><button type="button" class="btn btn-success btn-large" >  <i class="icon-large icon-plus-sign"></i>  </button></a>
										</div>
											<div class="col-lg-12">
											<div class="form-group">
                                                <?php


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
																$consulta.= "`idCliente`=".$id[$i]." OR ";
															}
															$condicion=substr($consulta, 0, -3).")";
													    }else{
													    	$condicion = "(`idCliente`= -1)";
													    }

													    mysqli_free_result($resultado);
													}

													$consulta = "SELECT `codObra` FROM `obras` WHERE $condicion";
													// echo $consulta;
												  	if ($resultado = mysqli_query($conexion, $consulta)) {

													    $cantClientes=0;
													    while ($fila = mysqli_fetch_row($resultado)) {

													    	$id[$cantClientes] = $fila[0];
															$cantClientes++;

													    }
													    $consulta = "(";
													    if ($cantClientes > 0) {
															for ($i=0; $i < sizeof($id); $i++) {
																$consulta.= "o.`codObra`=".$id[$i]." OR ";
															}
															$condicion=substr($consulta, 0, -3).")";
													    }else{
													    	$condicion = "(o.`codObra`= -1)";
													    }

													    mysqli_free_result($resultado);
													}

													$resultobra=mysqli_query($conexion,"SELECT * FROM obras o, clientes c, localidades l, cedulade ce,partidos p
														 where (o.codObra=ce.codObra) and (o.idCliente=c.idCliente) and (o.idLocalidad=l.idLocalidad) and (l.idPartido=p.idPartido) and $condicion  order by partida asc");
														 ?>
 														<div class="table-responsive text-nowrap">
 															<?php
													echo "<table class='table table-bordered table-hover table-striped display AllDataTables'>";
									               	echo "<thead>";
													echo "<tr>";
													echo "<th class='col-sm-1'>Partido</th>";
													echo "<th class='col-sm-1'>Partida</th>";
													echo "<th class='col-sm-1'>Parcela</th>";
													echo "<th class='col-sm-1'>Cliente</th>";
													echo "<th class='col-sm-1'>Localidad</th>";
													echo "<th class='col-sm-1'>Edificio</th>";
													echo "<th class='col-sm-1'>Tierra</th>";

													echo "<th class='col-sm-2'></th>";
													echo "</tr>";
									               	echo "</thead>";


												  	echo "<tbody class='buscar'>"; /*agregado*/


												while($obra = mysqli_fetch_array($resultobra)){
													$idCedulaDE=$obra['idCedulaDE'];
													$idobra=$obra['codObra'];


													echo"<tr align='center'>";
													echo"<td>" .$obra['partido'] ."</td>";
														echo"<td>" .$obra['codPartido']."-".$obra['partida']."</td>";
													echo"<td>" .$obra['parcela'] ."</td>";
													echo"<td>" .$obra['cnombreApellido'] ."</td>";
													echo"<td>" .$obra['localidad'] ."</td>";
													echo"<td>" .number_format($obra['totalEdificio'],0,',','.') ."</td>";
													echo"<td>" .number_format($obra['tierra'] ,0,',','.')."</td>";


												echo"<td>
													<a href='cedulaDEModificar.php?idCedulaDE=$idCedulaDE'>  <i class='icon-large btn btn-info icon-pencil'></i></a>&nbsp;
													<a href='PDFcedulaDE.php?idCedulaDE=$idCedulaDE' target='_blank'>  <i class='icon-small btn btn-warning icon-print'></i></a>&nbsp;";
													$i = 2;
													while(true){
														if(file_exists('PDFcedulaDE-' . $i . '.php'))
															echo "<a href='PDFcedulaDE-" . $i . ".php?idCedulaDE=$idCedulaDE' target='_blank'>  <i class='icon-small btn btn-warning icon-print'></i></a>&nbsp;";
														else
															break;

														$i++;
													}

													echo "<br><a href='formulariosBuscar.php?idobra=$idobra&idCedula=$idCedulaDE&cedula=3'> <i class='icon-small btn btn-success icon-list'></i></a>&nbsp;

													<a onClick='redirect(this);' id='$idCedulaDE'> <i class='icon-large icon-trash btn btn-danger '></i></a>

													";

													echo "</tr>";
													}




												echo "</tbody>"; /*agregado*/


												echo "</table>";



											?>
											</div>

										</div>


									</div>





									</form>



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
	if (confirm('Esta seguro que quiere eliminar la cedula?'))
		window.location.href = "sql/cedulaDEBorrar.php?idCedulaDE=" + element.id;
	}
	</script>

</html>
