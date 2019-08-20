<?php

date_default_timezone_set('America/Argentina/Buenos_Aires');
$servername = "localhost";
$username = "root";
$password = "";
$db = "dbvalur";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password, array('charset'=>'utf8'));
  $conn->query("SET CHARACTER SET utf8");
  //setear el modo de error de PDO a exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $dbStatus = "Exitosa";
} catch(PDOException $e) {
  $dbStatus = "Fallo la conexion: " . utf8_encode($e->getMessage());
}
?>
