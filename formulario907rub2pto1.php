<?php
	include("sesion.php");
$pagina='formulario907rub2pto1PHP';
include("encabezado.php");
include("seguridadForm.php");

include("sql/insertFormulario.php");
include("sql/update.php");
if (isset($_GET['idCedula'])){
	include("sql/mostrarDatosObra.php");
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
	$form907 = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM form907 WHERE codForm907=$idform"));
	$par = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM cedulaformularios WHERE (nroFormulario='907')
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

 	$Plano = $form907['Plano']; $CoefAjuste = $form907['CoefAjuste']; $VTierra = $form907['VTierra'];
	$TotPTSubp = $form907['TotPTSubp']; $Accesiones = $form907['Accesiones']; $destino = $form907['Destino'];
	$Pais = $form907['Pais']; $Observaciones = $form907['observaciones']; $mostrarProf = $form907['firmaprof'];
	$cod = mysqli_fetch_array(mysqli_query($conexion,"SELECT Destino, Tipo, Codigo FROM destinos WHERE `cNo`='$destino'"));

	$codi = $cod['Destino']; $Codigo=$cod['Codigo']; $codigo = $Codigo." - ".$codi; $aux = $cod['Tipo'];
	$auxiliar = mysqli_query($conexion,"SELECT Destino, Tipo, Codigo FROM destinos WHERE Tipo='$aux'");
}
$tipo = mysqli_query($conexion,"SELECT * FROM destinos GROUP BY Tipo");
if ((isset($mostrarProf)) && ($mostrarProf === '1')) {
	 $mostrarProf = 'checked="checked" ';
} else {
		$mostrarProf = ' ';
}
?>
<!DOCTYPE html>
<html lang="es">
		<style>
			table th.text-center, td.text-center {
			text-align: center;
			}
			/*
			Descomentar para ver los limites de las tablas
			table,td{
				border-color: black !important;
				border-style: solid !important;
				border-width: 1px !important;
			}
			*/
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
			#pog{
				width :100px;
				height: 30px;
				/* background-color : blue; */
				border : 1px solid black;
				border-radius : 10px;
			}


			@import url("https://fonts.googleapis.com/css?family=Open+Sans:400,600");
			/* VARS */
			/* MIXINS */
			/* STYLE THE HTML ELEMENTS (INCLUDES RESETS FOR THE DEFAULT FIELDSET AND LEGEND STYLES) */
			/* body,
			html {
			margin: 0;
			padding: 1rem;
			box-sizing: border-box;
			width: 100%;
			height: 100%;
			font-size: 16px;
			font-family: "Open Sans", "Helvetica", sans-serif;
			-webkit-font-smoothing: antialiased;
			background-color: #eee;
			} */

			fieldset {
			margin: 0;
			padding: 2rem;
			box-sizing: border-box;
			display: block;
			border: none;
			border: solid 1px #ccc;
			min-width: 0;
			background-color: #fff;
			}
			fieldset legend {
			margin: 0 0 1.5rem;
			padding: 0;
			width: 100%;
			float: left;
			display: table;
			font-size: 1.5rem;
			line-height: 140%;
			font-weight: 600;
			color: #333;
			}
			fieldset legend + * {
			clear: both;
			}

			body:not(:-moz-handler-blocked) fieldset {
			display: table-cell;
			}

			/* TOGGLE STYLING */
			.toggle {
			margin: 0 0 1.5rem;
			box-sizing: border-box;
			font-size: 0;
			display: flex;
			flex-flow: row nowrap;
			justify-content: flex-start;
			align-items: stretch;
			}
			.toggle input {
			width: 0;
			height: 0;
			position: absolute;
			left: -9999px;
			}
			.toggle input + label {
			margin: 0;
			padding: 0.20rem 1rem;
			box-sizing: border-box;
			position: relative;
			display: inline-block;
			border: solid 1px #ddd;
			background-color: #fff;
			font-size: 1rem;
			line-height: 140%;
			font-weight: 600;
			text-align: center;
			box-shadow: 0 0 0 rgba(255, 255, 255, 0);
			transition: border-color 0.15s ease-out, color 0.25s ease-out, background-color 0.15s ease-out, box-shadow 0.15s ease-out;
			/* ADD THESE PROPERTIES TO SWITCH FROM AUTO WIDTH TO FULL WIDTH */
			/*flex: 0 0 50%; display: flex; justify-content: center; align-items: center;*/
			/* ----- */
			}
			.toggle input + label:first-of-type {
			border-radius: 6px 0 0 6px;
			border-right: none;
			}
			.toggle input + label:last-of-type {
			border-radius: 0 6px 6px 0;
			border-left: none;
			}
			.toggle input:hover + label {
			border-color: #213140;
			cursor : pointer;

			}
			.toggle input:checked + label {
			background-color: #4b9dea;
			color: #fff;
			box-shadow: 0 0 10px rgba(102, 179, 251, 0.5);
			border-color: #4b9dea;
			z-index: 1;
			}
			.toggle input:focus + label {
			outline: dotted 1px #ccc;
			outline-offset: 0.45rem;
			}
			@media (max-width: 800px) {
			.toggle input + label {
				padding: 0.75rem 0.25rem;
				flex: 0 0 50%;
				display: flex;
				justify-content: center;
				align-items: center;
			}
			}

			/* STYLING FOR THE STATUS HELPER TEXT FOR THE DEMO */
			.status {
			margin: 0;
			font-size: 1rem;
			font-weight: 400;
			}
			.status span {
			font-weight: 600;
			color: #b6985a;
			}
			.status span:first-of-type {
			display: inline;
			}
			.status span:last-of-type {
			display: none;
			}
			@media (max-width: 800px) {
			.status span:first-of-type {
				display: none;
			}
			.status span:last-of-type {
				display: inline;
			}
			}


			.pog:hover{
				cursor : pointer;
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
    </script>

	<body>
		<div class="main">
			<div class="main-inner">
				<div class="container">

					<div class="widget-header">
						<i class="icon-th-large"></i>
						<h3>Formulario 907</h3>
					</div> <!-- /widget-header -->
				<form method="post">
					<div class="widget-content">
					<table class=" table-bordered responsive-table">
							<thead>
								<th style="padding : 10px; text-align:center">Mostrar datos del profesional</th>
								<th style="padding : 10px; text-align:center">Tipo</th>
							</thead>
							<tbody>
								<td style="padding: 10px;">
									<div class="toggle">
										<input class="pog" type="radio" name="mostrarProf" value="ph" id="mostrarProf-si" checked="checked" />
										<label for="mostrarProf-si 	">Si</label>
										<input class="pog" type="radio" name="mostrarProf" value="geodesia" id="mostrarProf-no" />
										<label for="mostrarProf-no">No</label>
									</div>
								</td>
								<td style="padding: 10px;">
									<div class="toggle">
										<input class="pog" type="radio" name="tipo-form" value="ph" id="sizeWeight" checked="checked" />
										<label for="sizeWeight">PH</label>
										<input class="pog" type="radio" name="tipo-form" value="geodesia" id="sizeDimensions" />
										<label for="sizeDimensions">Geodesia</label>
									</div>
								</td>
							</tbody>
						</table>
						<div class="control-group">
							<div class="controls">
								<div class="accordion" id="accordion2">
									<!---------------------- Rubro ---------------------->
									<div class="accordion-group">
										<div class="accordion-heading">

												<a class="accordion-toggle" data-toggle="collapse" href="#rub1">
													RUBRO 1:
												</a>
											</div>
											<div id="rub1" class="accordion-body collapse in">
												<div class="accordion-inner">
												<table class="table table-bordered responsive-table">
													<thead>
														<th>Nombre del club de campo</th>
														<th>Plano N°</th>
													</thead>
													<tbody>
														<tr>
															<td>
																<input class="form-control" type="text" name="Pais" value="<?php if (isset($Pais)){echo $Pais;}?>">
															</td>
															<td>
																<input class="form-control" type="text" name="Plano" value="<?php if (isset($Plano)){echo $Plano;}?>">
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
												RUBRO 4: TIERRA
											</a>
										</div>
										<div id="rub4" class="accordion-body collapse">
											<div class="accordion-inner">
												<table class="table table-bordered responsive-table">
													<thead>
														<th>Coeficiente</th>
														<th>Valor Basico Tierra de la PARCELA</th>
														<th>VALOR PROPORCIONAL tierra de la SUBPARCELA</th>
													</thead>
													<tbody>
														<tr>
															<td>
																<input class="form-control" type="number" name="CoefAjuste" value="<?php if (isset($CoefAjuste)){echo $CoefAjuste;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="VTierra" value="<?php if (isset($VTierra)){echo $VTierra;}?>">
															</td>
															<td>
																<input class="form-control" type="number" name="TotPTSubp" value="<?php if (isset($TotPTSubp)){echo $TotPTSubp;}?>">
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
																	<input class="form-control" type="number" name="comunes" value="<?php if (isset($Accesiones)){echo $Accesiones;}?>">
																</td>
															</tr>
														</tbody>
													</table>
											</div>
										</div>
									</div>
									<!---------------------- Rubro 5 ---------------------->
									<div class="accordion-group">
										<div class="accordion-heading area ">
											<a  id="r7" class="accordion-toggle" data-toggle="collapse" href="#rub7" onclick="estilo(this)">
												RUBRO 7: DESTINO DEL EDIFICIO
											</a>
										</div>
										<div id="rub7" class="accordion-body collapse">
											<div class="accordion-inner">
												<div class="row">
													<div class="span5">
														<select class="form-control" name="tipo" id="tipo" required>
															<option value="0" selected disabled>Seleccione Tipo</option>
															<?php while($row = $tipo->fetch_assoc()) { ?>
																<?php $atributo = ($row['Tipo'] == $aux) ? 'selected' : '' ?>
														<?php echo "<option value='".$row['Tipo']."'".$atributo.">".$row['Tipo']. "</option>" ?>
													<?php } ?>
														</select>
											</div>
											<div class="span5">
												<?php if (isset($destino)){ ?>
													<select class='form-control' name='destino' id='destino' >
													<?php while($rows = $auxiliar->fetch_assoc()) { ?>
														<?php $atributo = ($rows['Codigo']." - ".$rows['Destino'] == $codigo) ? 'selected' : '' ?>
												<?php echo "<option value='".$rows['Codigo']." - ".$rows['Destino']."'".$atributo.">".$rows['Codigo']." - ".$rows['Destino']. "</option>" ?>
											<?php } ?> </select>
										<?php		} else { ?>
											<select class='form-control' name='destino' id='destino'>
											</select>
									<?php } ?>
											</div>
										</div>
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
						<!-- <div class="col-sm-2">
							<div class="form-group">
								<table>
									<tr> <td align="center"> <input type="checkbox" value="1" id="mostrarProf" name="mostrarProf" <?php if (isset($mostrarProf)){echo $mostrarProf;}?>> </td> </tr>
									<tr> <td> <h5> No mostrar profesional </h5> </td> </tr>
								</table>
							</div> -->
						<!-- </div> -->
						
						<!-- <div class="col-sm-2"> -->
							<!-- <div class="form-group"> -->
							<!-- <fieldset> -->
									<!-- <legend>Is this toggle switch awesome?</legend> -->
									
									<!-- <p class="status">Toggle is <span>auto width</span><span>full width</span>.</p> -->
								<!-- </fieldset> -->
							<!-- </div> -->
						<!-- </div> -->
						<a><button class="btn btn-success" name="insertar">Finalizar</button></a>
						<a href="" ><button onclick="self.close()" class="btn">Cancelar</button></a>
						<?php
						if (isset($_POST['insertar'])){
							// echo $_POST['sizeBy'];
							// echo $_POST['mostrarProf'];
							if (isset($cedu['subp'])){
								$sub = $cedu['subp'];
							}else {
								$sub = "";
							}
							if(isset($_POST['tipo'])){
								$destino1 = explode(" - ",$_POST['destino']);
								$destino2 = $destino1[0];
								$auxiliar1 = mysqli_fetch_array(mysqli_query($conexion,"SELECT `cNo` FROM destinos WHERE Codigo='$destino2'"));
								$destino = $auxiliar1['cNo'];
							} else {
								$destino = "";
							}
							if (isset($idobra)){

								$obra = mysqli_query($conexion,"SELECT Parcela,Partida,idDestinatario FROM obras WHERE codObra = '$idobra'");
								$ob = mysqli_fetch_array($obra);
								$idD = $ob['idDestinatario'];
								$destina = mysqli_query($conexion,"SELECT dnombreApellido,tipoDni,dni,idLocalidad FROM destinatarios WHERE idDestinatario = '$idD'");
								$desti = mysqli_fetch_array($destina);

							if (isset($_POST['mostrarProf'])) {
								$mostrarProf = 1;
							}else{
								$mostrarProf = 0;
							}
							
							$sqlF907= insertForm907($ob['Parcela'],$sub,$_POST['Pais'],$ob['Partida'],
							$_POST['Plano'],$_POST['CoefAjuste'],$_POST['VTierra'],$_POST['TotPTSubp'],
							$_POST['comunes'],$destino,$cedu['fechaImp'],$desti['dnombreApellido'],
							$desti['tipoDni'],$desti['dni'],$desti['idLocalidad'],$_POST['observaciones'],$mostrarProf,$_POST['tipo-form']);

							include("sql/sqlconnection.php");

							if($dbStatus != "Exitosa")
								exit($dbStatus);

							try {
								// use exec() because no results are returned
								$conn->exec($sqlF907);
								$lastID = $conn->lastInsertId();
								$queryCount = "SELECT COUNT(*) AS cuenta FROM `cedulaformularios` WHERE nroFormulario = 907 AND idCedula = $Cedula";
								$count = $conn->query($queryCount)->fetch();
								$version = ((int)$count["cuenta"]) + 1;
								$queryObra = "INSERT INTO cedulaformularios
								(idCedulaFormularios, idCedula, tipoCedula, nroFormulario, `version`, `data`, codForm)
								VALUES (default, $Cedula, $TipoDeCedula, 907, $version, YEAR(CURDATE()), $lastID)";
								$conn->exec($queryObra);
								} catch(PDOException $e) {
								echo "Fallo el registro:" . $e->getMessage();
								}
							}else{
									$sql = updateForm907($idform, $_POST['Plano'],$_POST['CoefAjuste'],$_POST['VTierra'],$_POST['TotPTSubp'],
									$_POST['comunes'],$destino,$_POST['Pais'],$_POST['observaciones'],$mostrarProf);

									mysqli_query($conexion,$sql)
									or die("Problemas en la actualizacion".mysqli_error($conexion));
								}

							$conn = null;
							 echo "<script language='javascript'>";
							 echo "alert('El formulario 907 se cargo correctamente');";
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

	</body>
	<script src="javascript/session.js"></script>
</html>
