<!DOCTYPE html>
<?php

$pagina='registroUsuarioPHP';


?>
<html lang="es">
 <head>
    <meta charset="utf-8">
    <title>Login - VALUR</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

<link href="css/font-awesome.css" rel="stylesheet">
<link href="js/fontsans.css"rel="stylesheet">

<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/pages/signin.css" rel="stylesheet" type="text/css">

</head>
<body>


<div class="navbar navbar-fixed-top">

	<div class="navbar-inner">

		<div class="container">

			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>

			<a class="brand" href="index.html">
				VALUR
			</a>



		</div> <!-- /container -->

	</div> <!-- /navbar-inner -->

</div> <!-- /navbar -->



<div class="account-container register">

	<div class="content clearfix">

		<form action="#" method="post">

			<h1>Registro de Usuario</h1>

			<div class="login-fields">

				<p>Creación de cuenta:</p>

				<div class="field">
					<label for="firstname">Usuario:</label>
					<input type="text" id="firstname" name="firstname" value="" placeholder="Matrícula" class="login" />
				</div> <!-- /field -->

				<div class="field">
					<label for="lastname">Apellido y Nombre:</label>
					<input type="text" id="lastname" name="lastname" value="" placeholder="Apellido y Nombre" class="login" />
				</div> <!-- /field -->


				<div class="field">
					<label for="email">Mail:</label>
					<input type="text" id="email" name="email" value="" placeholder="Mail" class="login"/>
				</div> <!-- /field -->

				<div class="field">
					<label for="password">Contraseña:</label>
					<input type="password" id="password" name="password" value="" placeholder="Contraseña" class="login"/>
				</div> <!-- /field -->

				<div class="field">
					<label for="confirm_password">Confirme Contraseña:</label>
					<input type="password" id="confirm_password" name="confirm_password" value="" placeholder="Contraseña" class="login"/>
				</div> <!-- /field -->

			</div> <!-- /login-fields -->

			<div class="login-actions">



				<button class="button btn btn-primary btn-large">Registrarse</button>

			</div> <!-- .actions -->

		</form>

	</div> <!-- /content -->

</div> <!-- /account-container -->





<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>

<script src="js/signin.js"></script>

</body>

 </html>
