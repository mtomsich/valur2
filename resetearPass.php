<?php
include("sesion.php");
	$pagina='resetearPassPHP';
include("sql\conexion.php");
include("seguridad.php");

$matricula =$_REQUEST['usuario'];
$result = mysqli_query($conexion,"SELECT * FROM profesionales WHERE matricula  = '$matricula'");
$test = mysqli_fetch_array($result);

if (!$result)
	{
	die("Error: Dato no encontrado..");
	}
Mysqli_query($conexion,"UPDATE usuarios SET claveUsuario ='$matricula' WHERE usuario  = '$matricula'")
                or die(mysqli_error($conexion));
	echo "<script language='javascript'>";
	echo "window.location='seguridad.php';";
	echo "window.location='index.php';";
	echo "alert('Ingrese al sistema con su número de Matrícula como contraseña.');";

	echo "</script>";

mysqli_close($conexion);
?>
