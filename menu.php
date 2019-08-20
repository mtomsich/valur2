<?php

if (!isset($_SESSION)) { session_start(); }

?>
<div class="navbar navbar-fixed-top">

	<div class="navbar-inner">

		<div class="container">

			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>

			<a class="brand" href="inicio.php">
				VALUR NatBra
			</a>

			<div class="nav-collapse">
				<ul class="nav pull-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-cog"></i>
							Configuración
							<b class="caret"></b>
						</a>

						<ul class="dropdown-menu">
							<?php
							$idp=$_SESSION['idProfesional'];

							echo '<li><a href="profesionalesModificar.php?idprofesional=' . $idp . '">Profesional</a></li>'
							?>

						</ul>
					</li>

					<li>
						<a href="ayuda.php">
							<i class=" icon-question-sign"></i>
							<span>Ayuda</span>
						</a>
					</li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-user"></i>
							<?php echo $_SESSION['nombreUsuario']; ?>
							<b class="caret"></b>
						</a>

						<ul class="dropdown-menu">
							<li><a href="perfil.php">Perfil</a></li>
							<li><a href="logout.php">Salir</a></li>
						</ul>
					</li>
				</ul>


			</div><!--/.nav-collapse -->

		</div> <!-- /container -->

	</div> <!-- /navbar-inner -->

</div> <!-- /navbar -->




<div class="subnavbar">

	<div class="subnavbar-inner">

		<div class="container">

			<ul class="mainnav">

				<li>
					<a href="inicio.php">
						<i class="icon-dashboard"></i>
						<span>Dashboard</span>
					</a>
				</li>

				<li>
					<a href="clientes.php">
						<i class=" icon-group"></i>
						<span>Clientes</span>
					</a>
				</li>

				<li>
					<a href="firmantes.php">
						<i class="icon-user"></i>
						<span>Firmantes</span>
					</a>
				</li>

				<li>
					<a href="destinatarios.php">
						<i class="icon-user"></i>
						<span>Destinatario</span>
					</a>
				</li>

				<li>
					<a href="obraBuscar.php">
						<i class="icon-wrench"></i>
						<span>Obras</span>
					</a>
				</li>

				<li>
					<a href="cedula10707Buscar.php">
						<i class="icon-list-alt"></i>
						<span>Cedula 10707</span>
					</a>
				</li>

				<li>
					<a href="cedulaPHBuscar.php">
						<i class="icon-list-alt"></i>
						<span>Cedula PH</span>
					</a>
				</li>

				<li>
					<a href="cedulaDEBuscar.php">
						<i class="icon-list-alt"></i>
						<span>Cedula Decreto</span>
					</a>
				</li>

				<li>
					<a href="comunicadosVer.php">
						<i class="icon-envelope"></i>
						<span>Comunicaciones</span>
					</a>
				</li>


				<li class="dropdown">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-long-arrow-down"></i>
						<span>Tablas</span>
						<b class="caret"></b>
					</a>

					<ul class="dropdown-menu">
						<li><a href="localPart.php">Partidos</a></li>
						<li><a href="tabladepreciacion.php">Tabla XII - Tabla de Depreciacion</a></li>
					</ul>
				</li>
				<li>	</li>
				<!--
					<li>
					<a href="javascript:backup();">
					<i class="icon-cogs"></i>
					<span>Backup</span>
				</a>
			</li>
		-->
	</ul>

</div> <!-- /container -->

</div> <!-- /subnavbar-inner -->

</div> <!-- /subnavbar -->
<script>
function backup() {
	var xhttp;

	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			// The actual download
			var backup = new Blob([xhttp.response], { type: 'application/octet-stream' });
			var link = document.createElement('a');
			var url = window.URL.createObjectURL(backup)
			link.href = url;
			var disposition = xhttp.getResponseHeader('content-disposition');
			var filename = disposition.substring(disposition.lastIndexOf("filename=") + "filename=".length, disposition.lastIndexOf("sql") + "sql".length);
			link.download = filename ? filename : backupDate();
			document.body.appendChild(link);
			link.click();
			document.body.removeChild(link);
			window.URL.revokeObjectURL(url);
		}
	};
	xhttp.open("POST", "sql/backup.php", true);
	xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
	xhttp.responseType = "blob";
	xhttp.send();
}

function backupDate() {
	var date = new Date();
	return (date.getFullYear() + "-" +
	(date.getMonth()+1) + "-" +
	date.getDate() + " " +
	date.getHours() + "-" +
	date.getMinutes()+ "-" +
	date.getSeconds());
}
</script>
