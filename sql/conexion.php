<?php

/* conexion a la base */
   $conexion=mysqli_connect("localhost","root","","dbvalur") or
          die("Problemas con la conexion");

/* conexion a la base */
   $conexioncpa=mysqli_connect("localhost","root","","cpa") or
          die("Problemas con la conexion");

/* configuracion hora */
date_default_timezone_set('America/Argentina/Buenos_Aires');

mysqli_query($conexion,"SET CHARACTER SET utf8");
mysqli_query($conexioncpa,"SET CHARACTER SET utf8");
?>
