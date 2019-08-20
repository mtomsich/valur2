<?php
	include("sesion.php");
$pagina='cedulaPHBuscarPHP';
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

								<form method="post">
									<div class="col-lg-2">
										<a href="cedulaPHNueva.php" id="huggibuton"><button type="button" class="btn btn-success btn-large" >  <i class="icon-large icon-plus-sign"></i>  </button></a>

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

											$resultobra=mysqli_query($conexion,"SELECT * FROM obras o, clientes c, localidades l, partidos p, cedulaph ce, obraunidadfuncional ou
												where (o.desactivada=0) and (ou.idCedulaPH=ce.idCedulaPH) and (ce.codObra=o.codObra) and (o.idCliente=c.idCliente) and (o.idLocalidad=l.idLocalidad)and (l.idPartido=p.idPartido) AND $condicion order by ce.idCedulaPH desc, ou.idObraUnidadFuncional desc");
												?>
												<div class="table-responsive text-nowrap">
													<?php
												echo "<table class='table table-bordered table-hover table-striped display AllDataTables'>";
												echo "<thead>";
												echo "<tr>";
												echo "<th class='col-sm-1'>Partido</th>";
												echo "<th class='col-sm-1'>Partida</th>";
												echo "<th class='col-sm-1'>Par</th>";
												echo "<th class='col-sm-1'>SubPar</th>";
												echo "<th class='col-sm-1'>Cliente</th>";
												echo "<th class='col-sm-1'>Localidad</th>";
												echo "<th class='col-sm-1'>Poligono</th>";
												echo "<th class='col-sm-1'>Total Pol</th>";
												echo "<th class='col-sm-1'>No Imprimir</th>";
												echo "<th class='col-sm-3'>Acciones</th>";
												echo "</tr>";
												echo "</thead>";


												echo "<tbody class='buscar'>"; /*agregado*/

												$o = 1;
												while($obra = mysqli_fetch_array($resultobra)){
													$idCedulaPH=$obra['idCedulaPH'];
													$idObraUnidadFuncional=$obra['idObraUnidadFuncional'];
													$idobra=$obra['codObra'];

													echo"<tr align='center'>";
													echo"<td>" .$obra['partido']."</td>";
													if(Empty($obra['partida'])) {
														echo"<td>" .$obra['partida']."</td>";
													} else{

														echo"<td>" .$obra['codPartido']."-".$obra['partida']."</td>";
													}

													echo"<td>" .$obra['parcela']."</td>";
													echo"<td>" .$obra['subparcela']."</td>";
													echo"<td>" .$obra['cnombreApellido']."</td>";
													echo"<td>" .$obra['localidad']."</td>";
													echo"<td>" .$obra['poligono']."</td>";
													echo"<td>" .number_format($obra['totalPolig'],2,',','.')."</td>";
													?>
													<td class='col-sm-1'>

													<input type='checkbox' id='rubro3-<?php echo $o; ?>' name='rubro3-<?php echo $o; ?>' value='1'>Rubro 3<div></div>
													<input type='checkbox' id='rubro6-<?php echo $o; ?>' name='rubro6-<?php echo $o; ?>' value='1'>Rubro 6<div></div>
													<input type='checkbox' id='rubro7-<?php echo $o; ?>' name='rubro7-<?php echo $o; ?>' value='1'>Rubro 7<div></div>
													</td>
													<?php
												echo"<td class='col-sm-3'>
												<a href='cedulaPHModificar.php?idObraUnidadFuncional=$idObraUnidadFuncional&idCedulaPH=$idCedulaPH'>  <i class='icon-small btn btn-info icon-pencil'></i></a>&nbsp;";
												//echo "<a><button class="btn-link" name="insertar" style="margin-top: -0.5px;width:38px;height:21px;"><div style="margin-top:-2px;margin-left:-8.5px;"><i class='icon-small btn btn-warning icon-print'></i></div></button></a>";
												echo "<a id='$o' href='PDFcedulaPH.php?idCedulaPH=$idCedulaPH&idObraUnidadFuncional=$idObraUnidadFuncional&rubro3=0&rubro6=0&rubro7=0' target='_blank'>  <i class='icon-small btn btn-warning icon-print'></i></a>&nbsp;";

												$i = 2;
												while(true){
													if(file_exists('PDFcedulaPH-' . $i . '.php'))
														echo "<a href='PDFcedulaPH-" . $i . ".php?idCedulaPH=$idCedulaPH&idObraUnidadFuncional=$idObraUnidadFuncional' target='_blank'><i class='icon-small btn btn-warning icon-print'></i></a>&nbsp;";
														else
														break;

														$i++;
													}
													echo "<a href='formulariosBuscar.php?idCedula=$idCedulaPH&idObraUnidadFuncional=$idObraUnidadFuncional&cedula=2'> <i class='icon-small btn btn-success icon-list'></i></a>&nbsp;
													<a onClick='redirect(this);' idCedulaPH='$idCedulaPH' & id='$idObraUnidadFuncional'> <i class='icon-small icon-trash btn btn-danger '></i></a>&nbsp;
													<br>
													<a href='cedulaPHCopiar.php?idCedulaPH=$idCedulaPH&idObraUnidadFuncional=$idObraUnidadFuncional'>  <i class='icon-small btn btn-info  icon-folder-close '></i></a>&nbsp;
													<a href='cedulaPHFormulariosCopiar.php?idCedulaPH=$idCedulaPH&idObraUnidadFuncional=$idObraUnidadFuncional'>  <i class='icon-small btn btn-warning icon-copy '></i></a>

													";

													echo "</tr>";
													$o++;
													}




												echo "</tbody>"; /*agregado*/


												echo "</table>";



												?>
											</div>

											</div>


									</div>
									<?php
											/*if (isset($_POST['insertar'])){
												$r3 = (isset($_POST['rubro3'])? 1 : 0);
												$r6 = (isset($_POST['rubro6']) ? 1 : 0);
												$r7 = (isset($_POST['rubro7']) ? 1 : 0);
												echo "<script language='javascript'>";
	                      echo "window.open('PDFcedulaPH.php?idCedulaPH=$idCedulaPH&idObraUnidadFuncional=$idObraUnidadFuncional&rubro3=$r3&rubro6=$r6&rubro7=$r7','_blank');";
												//echo "window.location='cedulaPHBuscar.php';";
	                      echo "</script>";
												// <a href='' target='_blank'>  <i class='icon-small btn btn-warning icon-print'></i>  </a>
											}*/


										?>




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
			window.location.href = "sql/cedulaPHBorrar.php?idObraUnidadFuncional=" + element.id + "&idCedulaPH=" + element.idCedulaPH;
		}
		window.onload = function () {
			var checkboxs = document.getElementsByTagName('input');

			for(i = 0; i < checkboxs.length; i++) {
				if (checkboxs[i].name.includes("rubro")) {
					checkboxs[i].addEventListener('change', (event) => {
					  checkParameters(event.target);
					})
				}
			}
		}


		function checkParameters(checkb) {
			var pos = checkb.name.substr(-1);
			var rub3 = document.getElementById("rubro3-" + pos);
			var rub6 = document.getElementById("rubro6-" + pos);
			var rub7 = document.getElementById("rubro7-" + pos);
			var ele = document.getElementById(pos);
			console.log(ele);
			if(rub3.checked)
				ele.href = ele.href.replace("rubro3=0", "rubro3=1");
			else
				ele.href = ele.href.replace("rubro3=1", "rubro3=0");

			if(rub6.checked)
				ele.href = ele.href.replace("rubro6=0", "rubro6=1");
			else
				ele.href = ele.href.replace("rubro6=1", "rubro6=0");

			if(rub7.checked)
				ele.href = ele.href.replace("rubro7=0", "rubro7=1");
			else
				ele.href = ele.href.replace("rubro7=1", "rubro7=0");

		}
	</script>

	</html>
