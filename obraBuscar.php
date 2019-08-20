<?php
include("sesion.php");
$pagina='obraBuscarPHP';
include ("encabezado.php");
include("seguridad.php");
include("sql/consultas.php");

?>
<!DOCTYPE html>
<head>
	<style type="text/css">
		@media only screen and (min-width: 1200px) {
			#huggibuton{
				position: absolute;
				margin-left: 193%;
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
	<script src="js/datatables.js"></script>
	<script src="js/dataTables.bootstrap.js"></script>
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

									<div class="col-lg-3">
										<a href="obraNueva.php" id="huggibuton">
											<button type="button" class="btn btn-success btn-large" ><i class="icon-large icon-plus-sign"></i>  </button>
										</a>
									</div>

									<div class="col-lg-12">
										<div class="form-group">
											<?php
											$aux = mysqli_query($conexion,"SELECT `idCliente` FROM `clientes` WHERE `idUsuario`=".$_SESSION['idUsuario']);
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
														$consulta.= "o.`idCliente`=".$id[$i]." OR ";
													}
													$condicion=substr($consulta, 0, -3).")";
												}else{
													$condicion = "(o.`idCliente`= -1)";
												}

												mysqli_free_result($resultado);
											}
											$resultobra=mysqli_query($conexion,"SELECT o.codObra, o.partida,l.localidad,o.calle,o.nro, c.cnombreApellido,p.codPartido FROM obras o, clientes c, localidades l,partidos p
												where (o.idCliente=c.idCliente) and (o.idLocalidad=l.idLocalidad) and (l.idPartido=p.idPartido)and (desactivada='0')
												AND $condicion
												order by partida asc");

												echo "<table class='table table-bordered table-hover table-striped display AllDataTables'>";
												echo "<thead>";
												echo "<tr>";
												echo "<th class='col-sm-2'>Partida</th>";
												echo "<th class='col-sm-2'>Localidad</th>";
												echo "<th class='col-sm-2'>Domicilio</th>";
												echo "<th class='col-sm-3'>Cliente</th>";
												echo "<th class='col-sm-3'></th>";
												echo "</tr>";
												echo "</thead>";


												echo "<tbody class='buscar'>"; /*agregado*/


												while($obra = mysqli_fetch_array($resultobra)){
													$idobra=$obra['codObra'];
													echo"<tr align='center'>";
													echo"<td>" .$obra['codPartido']."-".$obra['partida']."</td>";
													echo"<td>" .$obra['localidad']."</td>";
													echo"<td>" .$obra['calle']." Nro: ".$obra['nro']."</td>";
													echo"<td>" .$obra['cnombreApellido']."</td>";
													echo"<td>
													<a href='obraModificar.php?idobra=$idobra'>  <i class='icon-large btn btn-info icon-pencil'></i>  </a>
													<a onClick='redirect(this);' id='$idobra'> <i class='icon-large icon-trash btn btn-danger '></i>  </a>
													<a href='obraVisualizar.php?idobra=$idobra'> <i class='icon-large btn btn-warning icon-eye-open'></i>   </a>


													";

													echo "</tr>";
												}




												echo "</tbody>"; /*agregado*/


												echo "</table>";



												?>


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
		if (confirm('Esta seguro que quiere eliminar la obra y la cedula asociada?'))
		window.location.href = "sql/obrasBorrar.php?idobra=" + element.id;
	}
	</script>

	</html>
