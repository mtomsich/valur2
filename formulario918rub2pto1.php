<?php
include("sesion.php");
$pagina='formulario918rub2pto1PHP';
include("encabezado.php");
include("seguridadForm.php");
include("sql/insertFormulario.php");
include ("sql/update.php");

if (isset($_GET['idCedula'])){
include ("sql/mostrarDatosObra.php");
if (isset($TipoDeCedula)){
	switch ($TipoDeCedula) {
		case '1':
			$cedu = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedula10707 WHERE codObra=$idobra"));
			break;
		case '2':
			$cedu = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedulaph WHERE codObra=$idobra"));
			break;
		case '3':
			$cedu = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedulade WHERE codObra=$idobra"));
			break;
	}
}
}else {
	$idform = $_GET['idform'];
	$form918 = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM form918 WHERE codForm918=$idform"));
	$par = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedulaformularios WHERE (nroFormulario='918')
	and (codForm=$idform)"));
	$tipocedula = $par['tipoCedula']; $ced = $par['idCedula'];
	switch ($tipocedula) {
		case '1':
			$cedu = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedula10707 WHERE idCedula707=$ced"));
			break;
		case '2':
			$cedu = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedulaph WHERE idCedulaPH=$ced"));
			break;
		case '3':
			$cedu = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedulade WHERE idCedulaDE=$ced"));
			break;
	}
	$idObra = $cedu['codObra'];

 	$VSup = $form918['VSup']; $VTierra = $form918['VTierra'];
	$ValuacionEP = $form918['ValuacionEP']; $destino = $form918['Destino'];
	$CodDestino = $form918['CodDestino']; $Observaciones = $form918['observaciones'];
	$cod = mysqli_fetch_array(mysqli_query($conexion,"SELECT Destino, Tipo, Codigo FROM destinos WHERE `cNo`='$destino'"));

	$codi = $cod['Destino']; $Codigo=$cod['Codigo']; $codigo = $Codigo." - ".$codi; $aux = $cod['Tipo'];
	$auxiliar = mysqli_query($conexion,"SELECT Destino, Tipo, Codigo FROM destinos WHERE Tipo='$aux'");
}
$tipo = mysqli_query($conexion,"SELECT * FROM destinos GROUP BY Tipo");
?>

<!DOCTYPE html>
<html lang="es">
		<style>
			table th.text-center, td.text-center {
			text-align: center;
			}
			.borde{
				border-color: #00ba8b !important;
				border-style: solid !important;
				border-width: 1px !important;
			}
			.accordion-toggle:hover{
				color: white;
				background-color: #00ba8b;
			}
			/* no sacar, es para que los radio box queden bien alineados */
			.huggi{
				margin-left: 24px !important;
				margin-right: 24px !important;
				margin-top: 10px !important;
				margin-bottom: 10px !important;
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
		<div class="main">
			<div class="main-inner">
				<div class="container">

					<div class="widget-header">
						<i class="icon-th-large"></i>
						<h3>Formulario 918</h3>
					</div> <!-- /widget-header -->
				<form method="post">
					<div class="widget-content">
						<div class="control-group">
							<div class="controls">
								<div class="accordion" id="accordion2">
									<!---------------------- Rubro ---------------------->
									<div class="accordion-group">
										<div class="accordion-heading">

												<a class="accordion-toggle" data-toggle="collapse" href="#rub1">
													RUBRO 3: TIERRA
												</a>
											</div>
											<div id="rub1" class="accordion-body collapse in">
												<div class="accordion-inner">
												<table class="table table-bordered responsive-table">
													<thead>
														<th>Superficie</th>
														<th>Valor</th>
													</thead>
													<tbody>
														<tr>
															<td>
																<input class="form-control" type="text" name="VSup" value="<?php if (isset($VSup)){echo $VSup;}?>">
															</td>
															<td>
																<input class="form-control" type="text" name="VTierra" value="<?php if (isset($VTierra)){echo $VTierra;}?>">
															</td>
														</tr>
													</tbody>
												</table>
											</div>
											</div>
											</div>
									<!---------------------- Rubro 4 ---------------------->
									<div class="accordion-group">
										<div class="accordion-heading area ">
											<a  class="accordion-toggle" data-toggle="collapse" href="#rub4">
												RUBRO 4: DESTINO
											</a>
										</div>
										<div id="rub4" class="accordion-body collapse">
												<div class="accordion-inner">
													<div class="row">
														<div class="span5">
	                        		<select class="form-control" name="tipo" id="tipo" required >
																<option value="0" selected disabled>Seleccione Tipo</option>
																<?php while($row = $tipo->fetch_assoc()) { ?>
																	<?php $atributo = ($row['Tipo'] == $aux) ? 'selected' : '' ?>
															<?php echo "<option value='".$row['Tipo']."'".$atributo.">".$row['Tipo']. "</option>" ?>
														<?php } ?>
															</select>
												</div>
												<div class="span5">
													<?php if (isset($destino)){ ?>
														<select class='form-control' name='destino' id='destino'>
														<?php while($rows = $auxiliar->fetch_assoc()) { ?>
															<?php $atributo = ($rows['Codigo']." - ".$rows['Destino'] == $codigo) ? 'selected' : '' ?>
													<?php echo "<option value='".$rows['Codigo']." - ".$rows['Destino']."'".$atributo.">".$rows['Codigo']." - ".$rows['Destino']. "</option>" ?>
												<?php } ?> </select>
											<?php		} else { ?>
												<select class='form-control' name='destino' id='destino' onchange='mostrar()'>
												</select>
										<?php } ?>
												</div>
											</div>
										</div>
								</div>
									</div>
									<!---------------------- Rubro 4 ---------------------->
									<!--
									<div class="accordion-group">
										<div class="accordion-heading area ">
											<a class="accordion-toggle" data-toggle="collapse" href="#rub5">
												RUBRO 5: ACCESIONES - PROPIAS Y COMUNES
											</a>
										</div>
										<div id="rub5" class="accordion-body collapse">
											<div class="accordion-inner">
												<table class="table table-bordered responsive-table">
													<thead>
														<th>Accesiones Comunes</th>
													</thead>
														<tbody>
															<tr>
																<td>
																	<input class="form-control" type="text" name="comunes" value="">
																</td>
															</tr>
														</tbody>
													</table>
											</div>
										</div>
									</div> -->
									<!---------------------- Rubro 5 ---------------------->
								 <div class="accordion-group">
										<div class="accordion-heading area">
											<a class="accordion-toggle" data-toggle="collapse" href="#rub6">
												RUBRO 6: VALUACION DEL EDIFICIO PREINCORPORADO
											</a>
										</div>
										<div id="rub6" class="accordion-body collapse">
											<div class="accordion-inner">
												<table class="table table-bordered responsive-table">
													<thead>
														<th>Valuacion</th>
													</thead>
														<tbody>
															<tr>
																<td>
																	<input class="form-control" type="text" name="ValuacionEP" value="<?php if (isset($ValuacionEP)){echo $ValuacionEP;}?>">
																</td>
															</tr>
														</tbody>
													</table>
											</div>
										</div>
								</div>
									<!---------------------- Rubro 7 ---------------------->
									<div class="accordion-group">
										<div class="accordion-heading area ">
											<a class="accordion-toggle" data-toggle="collapse" href="#rub10">
												RUBRO 10: OBSERVACIONES
											</a>
										</div>
										<div id="rub10" class="accordion-body collapse">
											<div class="accordion-inner">
 												<table class="table table-bordered responsive-table">
 													<thead>
 														<th>Observaciones</th>
 													</thead>
 														<tbody>
 															<tr>
 																<td>
 																<textarea id="observaciones" class="form-control" name="observaciones" rows="4" ><?php if (isset($Observaciones)){echo $Observaciones;}?></textarea>
																</td>
 															</tr>
 														</tbody>
 													</table>
 												</div>
											</div>
										</div>
									<!---------------------- Rubro 10 ---------------------->
								</div> <!-- /accordion -->
							</div> <!-- /controls -->
						</div> <!-- /control-group -->
						<a><button class="btn btn-success" name="insertar">Finalizar</button></a>
						<a href="" ><button onclick="self.close()" class="btn">Cancelar</button></a>
						<?php
						if (isset($_POST['insertar'])){

							if(isset($_POST['tipo'])){
								$destino1 = explode(" - ",$_POST['destino']);
								$destino2 = $destino1[0];
								$auxiliar1 = mysqli_fetch_array(mysqli_query($conexion,"SELECT `cNo` FROM destinos WHERE Codigo='$destino2'"));
								$destino = $auxiliar1['cNo'];
							} else {
								$destino = "";
							}
							if (isset($idobra)){
								$obra = mysqli_query($conexion,"SELECT Parcela,Partida,subparcela,idFirmante FROM obras WHERE codObra = '$idobra'");
								$ob = mysqli_fetch_array($obra);
								$idFir = $ob['idFirmante'];
								$firman = mysqli_query($conexion,"SELECT fnombreApellido,tipoDni,dni FROM firmantes WHERE idFirmante = '$idFir'");
								$Fir = mysqli_fetch_array($firman);

								$sqlF918= insertForm918($ob['Parcela'],$ob['subparcela'],$ob['Partida'],
								$_POST['VSup'],$_POST['VTierra'],$_POST['ValuacionEP'],$destino,
								$_POST['observaciones']);

							include("sql/sqlconnection.php");

							if($dbStatus != "Exitosa")
								exit($dbStatus);

							try {
								// use exec() because no results are returned
								$conn->exec($sqlF918);
								$lastID = $conn->lastInsertId();
								$queryCount = "SELECT COUNT(*) AS cuenta FROM `cedulaformularios` WHERE nroFormulario = 918 AND idCedula = $Cedula";
								$count = $conn->query($queryCount)->fetch();
								$version = ((int)$count["cuenta"]) + 1;
								$queryObra = "INSERT INTO cedulaformularios
								(idCedulaFormularios, idCedula, tipoCedula, nroFormulario, `version`, `data`, codForm)
								VALUES (default, $Cedula, $TipoDeCedula, 918, $version, YEAR(CURDATE()), $lastID)";
								$conn->exec($queryObra);
								} catch(PDOException $e) {
								echo "Fallo el registro:" . $e->getMessage();
								}
							}else{
								$sql = updateForm918($idform,$ob['Parcela'],$ob['subparcela'],$ob['Partida'], $_POST['VSup'],$_POST['VTierra'],$_POST['ValuacionEP'],
								$_POST['tipo'],$destino,$_POST['observaciones']);
								mysqli_query($conexion,$sql)or die("Problemas en la actualizacion".mysqli_error($conexion));
								}

							$conn = null;
							echo "<script language='javascript'>";
							echo "alert('El formulario 918 se cargo correctamente');";
							echo 'window.opener.getFormularios();';
							echo "window.close();";
							echo "</script>";
						}
						 ?>
					</div> <!-- /widget-content -->
					</form>
				</div> <!-- /container -->
			</div> <!-- /main-inner -->
		</div> <!-- /main -->
		<?php
			include("pie.php");
		?>
		<!---------------------- Scripts ---------------------->
		<!-- <script src="javascript/obj912.js"></script> -->
	</body>
	<script src="javascript/session.js"></script>
</html>
