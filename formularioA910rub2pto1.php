<?php
include("sesion.php");
			$pagina='formularioA910rub2pto1PHP';
			include("encabezado.php");
			include("seguridadForm.php");
		$a = 0;

		//SI VUELVE PARA ATRAS DE LA PAGINA SIGUIENTE
		if (isset($_POST['idCedula'])){
			$Cedula= $_POST['idCedula'];
			$idobra= $_POST['idobra'];
			$TipoDeCedula= $_POST['cedula'];
			$idform= $_POST['idform'];
			include ("sql/mostrarDatosObra.php");
			include ("funciones/valoresA910.php");
			include ("sql/mostrarFormA910.php");
			$edifAct= $edificio;
			//DATOS DE IDOBRA Y EL AÑO
			switch ($TipoDeCedula) {
		    case '1': $cons=mysqli_fetch_array(mysqli_query($conexion, "SELECT `codObra`,`anioImp` FROM `cedula10707` WHERE `idCedula707` = $Cedula")); break;
		    case '2': $cons=mysqli_fetch_array(mysqli_query($conexion, "SELECT `codObra`,`anioImp` FROM `cedulaph` WHERE `idCedulaPH` = $Cedula"));  break;
		    case '3': $cons=mysqli_fetch_array(mysqli_query($conexion, "SELECT `codObra`,`anioImp` FROM `cedulade` WHERE `idCedulaDE` = $Cedula"));break;
		  }
		  $idobra=$cons[0];
			$anio=$cons['anioImp'];
			//ABRE UN FORMULARIO PARA EDITAR
		} elseif (!isset($_GET['idCedula'])) {
			$idform = $_GET['idform'];
			//DATOS DE IDCEDULA Y EL TIPO DE CEDULA
			$formularioA910 = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedulaformularios WHERE (codForm=$idform) and (nroFormulario='A910')"));
			$Cedula = $formularioA910['idCedula']; $TipoDeCedula= $formularioA910['tipoCedula'];
			//DATOS DE IDOBRA Y EL AÑO
			switch ($TipoDeCedula) {
		    case '1': $cons=mysqli_fetch_array(mysqli_query($conexion, "SELECT `codObra`,`anioImp` FROM `cedula10707` WHERE `idCedula707` = $Cedula")); break;
		    case '2': $cons=mysqli_fetch_array(mysqli_query($conexion, "SELECT `codObra`,`anioImp` FROM `cedulaph` WHERE `idCedulaPH` = $Cedula"));  break;
		    case '3': $cons=mysqli_fetch_array(mysqli_query($conexion, "SELECT `codObra`,`anioImp` FROM `cedulade` WHERE `idCedulaDE` = $Cedula"));break;
		  }
		  $idobra=$cons[0];
			$anio=$cons['anioImp'];
			//DATOS DE PARTIDO, PARCELA Y SUBPARCELA
			$row = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM obras o, partidos pa, localidades l
		    where (o.codObra='$idobra') and (o.codPartido=pa.idPartido) and (o.idLocalidad=l.idLocalidad) and (o.desactivada=0)"));
			$Fpartido= $row['partido'];
			$Fpar= $row['parcela'];
		  $Fsub= $row['subparcela'];
			include ('sql/mostrarFormA910.php'); //DATOS DE EDIFICIO Y DEL FORMULARIO A901
			//DESTINOS
			$cod = mysqli_fetch_array(mysqli_query($conexion,"SELECT Destino, Tipo, Codigo FROM destinos WHERE cNo='$destino'"));
			$codi = $cod['Destino']; $Codigo=$cod['Codigo']; $codigo = $Codigo." - ".$codi; $aux = $cod['Tipo'];
			$auxiliar = mysqli_query($conexion,"SELECT Destino, Tipo, Codigo FROM destinos WHERE Tipo='$aux'");
			$a = 0;
		}
		//ABRE UN FORMULARIO NUEVO
		if (isset($_GET['idCedula'])){
			include ("sql/mostrarDatosObra.php");
			include ("funciones/valoresA910.php");
			include ("sql/mostrarFormA910.php");
			$idform = 0;
		}
		$codForm912 = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedulaformularios WHERE (idCedula='$Cedula') and (nroformulario='912')"));
		$codf912= $codForm912['codForm'];
		if ($codf912 > '0'){
			$Vec = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM form912 WHERE codForm912='$codf912'"));
			include ("funciones/calculos912.php");
			$mejAct=$TotalRub2IncisoA+$TotalRub2IncisoB+$TotalRub2IncisoC+$TotalRub2IncisoD;
		} else {
			$mejAct="";
		}
		$edifAct= $edificio;
		include ("funciones/plantaciones910.php");
		$planAct = $ValTotalIncisoA+$ValTotalIncisoB+$ValTotalIncisoC;
		$tipo = mysqli_query($conexion,"SELECT * FROM destinos GROUP BY Tipo");
		if ((isset($articulo)) && ($articulo === '1')) {
		   $checked = 'checked="checked" ';
		} else {
		    $checked = ' ';
		}
		if ((isset($mostrarProf)) && ($mostrarProf === '1')) {
		   $mostrarProf = 'checked="checked" ';
		} else {
		    $mostrarProf = ' ';
		}
?>
<!DOCTYPE html>
<html lang="es">

<style>
	td {
		text-align:center !important; padding: 2px !important
	}
	th {
		text-align:center !important
	}
	input {
		margin-top: 8px !important; text-align: center;
	}
</style>
<script language="JavaScript" type="text/javascript">
$(document).ready(function(jQuery){
		$("#tipo").change(function () {
			$("#tipo option:selected").each(function () {
				Tipo = $(this).val();
				$.post("sql/destino.php", { Tipo: Tipo }, function(data){
					$("#destino").html(data);
				});
			});
		})
	})
	function mostrar() {
		var destino = document.getElementById("destino"),
		observaciones = document.getElementById("observaciones");
		observaciones.value = destino.value;
}
</script>
<body>
<script>
$(document).ready(function () {
    $("#Entero").keyup(function () {
        var value = $(this).val();
        $("#TierraAct").val(value);
    });
});
</script>
<div class="main">

	<div class="main-inner">

	    <div class="container">

	      <div class="row">

	      	<div class="span12">

	      		<div class="widget ">
							<form action="formularioA910rub2pto2.php" method="get">
	      			<div class="widget-header">
	      					<i class="icon-th-large"></i>
	      				<h3>Formulario A910</h3>
	  				</div> <!-- /widget-header -->

					<div class="widget-content">


            <div class="control-group">
              <div class="controls">
                <div class="accordion" id="accordion2">
									<div class="accordion-heading area ">
										<a  id="datos" class="accordion-toggle" data-toggle="collapse" onclick="estilo(this)">
											<table>
												<tr>
													<td> Parcela </td>
													<td> <input disabled type="text" class="form-control" id="Parcela" name="Parcela" value="<?php if(isset($Fpar)){echo $Fpar;}?>"> </td>
													<td> Subparcela </td>
													<td> <input disabled type="text" class="form-control" id="Subparcela" name="Subparcela" value="<?php if(isset($Fsub)){echo $Fsub;}?>"> </td>
													<td> Partido </td>
													<td> <input disabled type="text" class="form-control" id="partido" name="partido" value="<?php if(isset($Fpartido)){echo $Fpartido;}?>">  </td>
												</tr>
											</table>
										</a>
									</div>
                  <!--- - - - - - - - Tierra ---------------------->
                  <div class="accordion-group">
                    <div class="accordion-heading area ">
                      <a  id="r2" class="accordion-toggle" data-toggle="collapse" href="#rub2" onclick="estilo(this)">
                        TIERRA
                      </a>
                    </div>
                    <div id="rub2" class="accordion-body">
                      <div class="accordion-inner">

                        <table class="table table-bordered responsive-table">
                          <thead>
                            <tr>
                              <th><center> Aptitud media </center></th>
                              <th><center> Valor Optimo </center></th>
															<th><center> Superficie en Ha. </center></th>
															<th><center> Valor Entero </center></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td> <input type="number" step="any" class="form-control" onkeyup="ActualizaValor()" onchange="ActualizaValor()" onclick="ActualizaValor()" value="<?php if(isset($aptitud)) {echo $aptitud;} ?>" id="Aptitud" name="Aptitud"> </td>
                              <td> <input type="number" step="any" class="form-control" onkeyup="ActualizaValor()" onchange="ActualizaValor()" onclick="ActualizaValor()" value="<?php if(isset($tierraAju)) {echo $tierraAju;} ?>" id="TierraAju" name="TierraAju"> </td>
                              <td><input type="number" step="any" class="form-control" onkeyup="ActualizaValor()" onchange="ActualizaValor()" onclick="ActualizaValor()" value="<?php if(isset($superficie)) {echo $superficie;} ?>" id="Superficie" name="Superficie"> </td>
                              <td> <input type="number" step="any" class="form-control" value="<?php if(isset($entero)) {echo $entero;} ?>" id="Entero" name="Entero"> </td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    </div>
                  </div>
									<!--- Resumen de valores ----->
									<div class="accordion-group">
                    <div class="accordion-heading area ">
                      <a  id="val" class="accordion-toggle" data-toggle="collapse" href="#valores" onclick="estilo(this)">
                        RESUMEN DE VALORES
                      </a>
                    </div>
                    <div id="valores" class="accordion-body collapse">
                      <div class="accordion-inner">
                        <table class="table table-bordered responsive-table">
													<thead>
														<tr>
															<th> </th>
															<th> Valor Basico </th>
															<th> Valor actualizado </th>
														</tr>
													</thead>
													<tr>
														<td><center> <br>Tierra </center></td>
														<td> <input type="number" step="any" class="form-control" value="<?php if(isset($entero)){echo $entero;} ?>" id="TierraAct" name="TierraAct"> </td>
														<td> <input type="number" step="any" class="form-control campos" value="<?php if(isset($tierraBas)) {echo $tierraBas;} ?>" id="TierraBas" name="TierraBas"> </td>
													</tr>
													<tr>
														<td><center> <br>Edificio </center> </td>
														<td> </td>
														<td> <input type="number" step="any" value="<?php if(isset($edifAct)){echo round($edifAct);} ?>" class="form-control campos" id="EdifAct" name="EdifAct"> </td>
													</tr>
													<tr>
														<td><center> <br>Mejoras </center> </td>
														<td> </td>
														<td> <input type="number" step="any" value="<?php if(isset($mejAct)){echo round($mejAct);} ?>" class="form-control campos" id="MejAct" name="MejAct"> </td>
													</tr>
													<tr>
														<td><center> <br>Plantación </center> </td>
														<td> </td>
														<td> <input type="number" step="any" class="form-control campos" value="<?php if(isset($planAct)) {echo round($planAct);} ?>" id="PlanAct" name="PlanAct"> </td>
													</tr>
													<tr>
														<td><center> <br>Postura </center> </td>
														<td>  </td>
														<td> <input type="text" step="any" class="form-control campos" value="<?php if(isset($postura)) {echo $postura;} ?>" id="Postura" name="Postura"> </td>
														<td style="width:50px !important"><br> Total </td>
														<td> <input class="form-control" step="any" id="demo"> </td>

														<script type="text/javascript">
														$(document).ready(function() {
															campos();
														});
														function campos() {
															total=0;
															//itera por todos los input con la clase campos y va almacenando el valor en total
															$.each($('.campos'), function (index, value) {
																	num=Number($(value).val());
																	total=total+num;
																});
															document.getElementById("demo").value=dosDecimales(total);
															setTimeout ("campos()", 50);
															function dosDecimales(n) {
															  let t=n.toString();
															  let regex=/(\d*.\d{0,2})/;
															  return t.match(regex)[0];
															}
														}
														</script>
													</tr>
												</table>
												<table class="table table-bordered responsive-table">
													<tbody>
														<tr>
															<td width="630"> </td>
															<td style="border-right-style:none !important"><br> Total(Coef. Act.) </td>
															<td style="border-left-style:none !important"> <input disabled type="number" class="form-control" value="0" id="CoefAjuste" name="CoefAjuste"> </td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<!--- - - - - - Destino principal ------------>
									<div class="accordion-group">
                    <div class="accordion-heading area ">
                      <a  id="r7" class="accordion-toggle" data-toggle="collapse" href="#rub7" onclick="estilo(this)">
                         DESTINO
                      </a>
                    </div>
                    <div id="rub7" class="accordion-body collapse">
                      <div class="accordion-inner">
												<div class="row">
													<div class="span4">
														<select class="form-control" name="tipo" id="tipo" required>
															<option value="0" selected disabled>Seleccione Tipo</option>
															<?php while($row = $tipo->fetch_assoc()) { ?>
																<?php $atributo = ($row['Tipo'] == $aux) ? 'selected' : '' ?>
														<?php echo "<option value='".$row['Tipo']."'".$atributo.">".$row['Tipo']. "</option>" ?>
													<?php } ?>
												</select>
											</div>
											<div class="span4">
												<?php if (isset($_GET['idform'])){ ?>
													<select class='form-control' name='destino' id='destino'>
													<?php while($rows = $auxiliar->fetch_assoc()) { ?>
														<?php $atributo = ($rows['Codigo']." - ".$rows['Destino'] == $codigo) ? 'selected' : '' ?>
												<?php echo "<option value='".$rows['Codigo']." - ".$rows['Destino']."'".$atributo.">".$rows['Codigo']." - ".$rows['Destino']. "</option>" ?>
											<?php } ?> </select>
										<?php		} elseif (isset($aux)) {
													$auxiliar = mysqli_query($conexion,"SELECT Destino, Tipo, Codigo FROM destinos WHERE Tipo='$aux'"); ?>
													<select class='form-control' name='destino' id='destino'>
													<?php while($rows = $auxiliar->fetch_assoc()) { ?>
														<?php $atributo = ($rows['Codigo']." - ".$rows['Destino'] == $destino) ? 'selected' : '' ?>
												<?php echo "<option value='".$rows['Codigo']." - ".$rows['Destino']."'".$atributo.">".$rows['Codigo']." - ".$rows['Destino']. "</option>" ?>
											<?php } ?> </select>
										<?php		} else { ?>
											<select class='form-control' name='destino' id='destino' onchange='mostrar()'>
											</select>
									<?php } ?>
											</div>
											<div class="span3">
												<input type="checkbox" value="1" id="Articulo" name="Articulo" <?php if(isset($checked)){echo $checked;}?>> CUMPLE ARTICULO 8° 2010/94 </input>
										</div>
										</div>
									</div>
								</div>
								</div>
									<!--- - - - - - Observaciones ------------>
									<div class="accordion-group">
                    <div class="accordion-heading area ">
                      <a  id="ob" class="accordion-toggle" data-toggle="collapse" href="#observaciones" onclick="estilo(this)">
                        OBSERVACIONES
                      </a>
                    </div>
                    <div id="observaciones" class="accordion-body collapse">
                      <div class="accordion-inner">
                        <table class="table table-bordered responsive-table">
													<thead>
														<tr>
															<th style="text-align:left !important"> Observaciones </th>
														</tr>
													</thead>
													<tr>
														<td><textarea class="form-control" name="observacion" id="observacion" rows="6"> <?php if(isset($observacion)) {echo strip_tags($observacion);} ?> </textarea> </td>
													</tr>
												</table>
											</div>
										</div>
									</div>

              </div> <!-- /accordion -->
              </div> <!-- /controls -->
            </div> <!-- /control-group -->
						<div class="col-sm-6">
						  <div class="form-group">
								<h5> No se olvide si realiza algún cambio en los FORMULARIOS deberá volver a EDITAR <br> este formulario para que pueda actualizar los cambios. </h5>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="form-group">
								<table>
									<tr> <td> <input type="checkbox" value="1" id="mostrarProf" name="mostrarProf" <?php if (isset($mostrarProf)){echo $mostrarProf;}?>> </td> </tr>
									<tr> <td> <h5> No mostrar profesional </h5> </td> </tr>
								</table>
							</div>
						</div>

						<div class="col-sm-4">
						  <div class="form-group">
						<a href="login.html"><button class="btn">Cancelar</button></a>
						<input type="hidden" name="idform" value="<?php echo $idform?>">
						<input type="hidden" name="auxObs" value="<?php echo $auxObs?>">
						<input type="hidden" name="idCedula" value="<?php echo $Cedula?>">
						<input type="hidden" name="cedula" value="<?php echo $TipoDeCedula?>">
						<input type="hidden" name="idobra" value="<?php echo $idobra?>">
						<?php include ("funciones/getValoresA910.php"); ?>
            <a href="formularioA910rub2pto2.php"><button class="btn btn-success">Siguiente</button></a>
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


  </body>
</html>
