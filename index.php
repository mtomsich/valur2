<?php
include("sesion.php");
include("sql/conexion.php");
$usuario = $pass = "";
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!DOCTYPE html>
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


<div class="account-container">

	<div class="content clearfix">

		<form action="#" method="post">

			<h1>Acceso de Usuario</h1>

			<div class="login-fields">

				<p>Ingrese el detalle de su cuenta</p>

				<div class="field">
					<label for="username">Usuario</label>
					<input type="text" id="username" name="usuario" value="" placeholder="Nombre de Usuario" class="login username-field" />
				</div> <!-- /field -->

				<div class="field">
					<label for="password">Contraseña:</label>
					<input type="password" id="password" name="password" value="" placeholder="Contraseña" class="login password-field"/>
				</div> <!-- /password -->

			</div> <!-- /login-fields -->

			<div class="login-actions">

				<button class="button btn btn-success btn-large" name="logeo">Ingresar</button>

			</div> <!-- .actions -->
			<?php
										if (isset($_POST['logeo']) and $_POST['usuario'] != "")
										{
											$usuario = test_input($_POST["usuario"]);
											$pass = test_input($_POST["password"]);


											$result=mysqli_query($conexion,"SELECT usuario, nombreUsuario, idUsuario, idProfesional, claveUsuario, codRol, mailUsuario
											FROM usuarios WHERE usuario like '$usuario' and claveUsuario like '$pass' and inhabilitado='NO'");

											 $row_cnt = mysqli_num_rows($result);
											if ($row_cnt==1){
											while($busqueda = mysqli_fetch_array($result))
													{
														$idUsuario = $busqueda['idUsuario'];
                            $idProfesional = $busqueda['idProfesional'];
														$usuario = $busqueda['usuario'];
														$clave = $busqueda['claveUsuario'];
														$codRol = $busqueda['codRol'];
														$nombreUsuario = $busqueda['nombreUsuario'];
														$mail = $busqueda['mailUsuario'];
													}
											/* cerrar el resulset */
												mysqli_free_result($result);
													$_SESSION['usuario']=$usuario;
													$_SESSION['clave']=$clave;
													$_SESSION['nombreUsuario']=$nombreUsuario;
													$_SESSION['codRol']=$codRol;
													$_SESSION['descRol']=mysqli_fetch_array(mysqli_query($conexion,"SELECT `nombreRol` FROM `roles` WHERE `codRol`= 1"))['nombreRol'];;
													$_SESSION['mail'] = $mail;
													$_SESSION['idUsuario']=$idUsuario;
                      		$_SESSION['idProfesional']=$idProfesional;

                          mysqli_query($conexion,"INSERT INTO logs(idLogs,idProfesional) VALUES ('',$idProfesional)")
                          or die("Problemas en el guardado de fecha ".mysqli_error($conexion));


													if($codRol==1)
														{
														echo "<script languaje= 'javascript'>";
													echo "window.location='inicio.php';";
														echo "</script>";
														}
													/*else {
														 if($codRol==2)
																{
																echo "<script languaje= 'javascript'>";
																echo "window.location='inicioVisador.php';";
																echo "</script>";
																}
														} */
											}  else		{
												echo "<script languaje= 'javascript'>";
												echo "window.location='index.php';";
												echo "alert ('Datos incorrectos')";
												echo "</script>";

											}
										}
											mysqli_close($conexion);
									?>

		</form>



	</div> <!-- /content -->

</div> <!-- /account-container -->





<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>

<script src="js/signin.js"></script>

</body>

</html>
