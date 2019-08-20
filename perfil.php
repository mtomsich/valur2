<?php
include("sesion.php");
$pagina='perfilPHP';
include("sql/conexion.php");
include ("encabezado.php");
include("seguridad.php");

include("seguridadForm.php");
$usuario=$_SESSION['usuario'];
$result = mysqli_query($conexion,"SELECT usuarios.*,roles.nombreRol FROM usuarios, roles where (usuarios.codRol=roles.codRol) and usuario= '$usuario'");
$test = mysqli_fetch_array($result);
if (!$result) {die("Error: Data not found..");}
$usuario=$test['usuario'];
$nombreUsuario=$test['nombreUsuario'];
$mail=$test['mailUsuario'];
$claveUsuario=$test['claveUsuario'];
$id=$test['idUsuario'];

$descripcion=$test['descripUsuario'];

?>
<!DOCTYPE html>
<html lang="es">
<body>

<div class="main">

	<div class="main-inner">

	    <div class="container">

	      <div class="row">

	      	<div class="span12">

	      		<div class="widget ">

	      			<div class="widget-header">
	      				<i class="icon-user"></i>
	      				<h3>Perfil de Usuario</h3>
	  				</div> <!-- /widget-header -->

					<div class="widget-content">

              <div class="col-sm-12">
                <form method="post">
                  <div class="panel panel-success">
                    <div class="panel-heading">
                      <h3 class="panel-title">Datos de Usuario</h3>
                    </div>
                    <div class="panel-body">
                      <div class="form-group">

                          <div class="col-lg-4 text-left">
                            <label>Usuario</label>
                            <input class="form-control" type="text" id="disabledInput" name="usuario" value="<?php echo $usuario ?>"disabled>
                          </div>
                          <div class="col-lg-6 text-left">
                            <label>Apellido y Nombre</label>
                            <input class="form-control" type="text" name="nombre" value="<?php echo $nombreUsuario ?>" disabled>
                          </div>
                                            </div>
                  </div>

                  </div>


                    </form>
                  </div> <!-- /.col-sm-12 -->


                  <div class="col-lg-8">
                    <div class="panel panel-success">
                      <div class="panel-heading">
                        <h3 class="panel-title">Cambio de clave</h3>
                      </div>
                      <div class="panel-body">
                        <div class="form-group">
                          <form method = 'POST'>
                            <strong>Ingrese contraseña anterior:</strong>
                            <input type="password" name="claveanterior" class="form-control" ></input>
                            <strong>Ingrese contraseña nueva:</strong>
                            <input type="password" name="clavenueva" class="form-control" ></input>
                            <strong>Ingrese nuevamente la contraseña nueva:</strong>
                            <input type="password" name="clavemacheo" class="form-control" ></input>

                            <input type="submit" class="btn btn-success" name='cambioClave' value='Cambiar Contraseña'>
                            <?php
                            if (isset($_POST['cambioClave']) )
                            { if (($_POST['claveanterior'] != "") and ($_POST['clavenueva'] != "") and ($_POST['clavemacheo'] != ""))
                              {
                                $claveanterior=$_POST['claveanterior'];
                                $clavenueva=$_POST['clavenueva'];
                                $clavemacheo=$_POST['clavemacheo'];
                                if($claveanterior== $claveUsuario )
                                {
                                  if ($clavenueva == $clavemacheo )
                                  {
                                    mysqli_query($conexion,"UPDATE `usuarios` SET
                                      `claveUsuario`='$clavenueva'
                                      WHERE idUsuario='$id'")
                                      or die("Problemas en la actualización.".mysqli_error($conexion));
                                      echo "<script language='javascript'>";
                                      echo "alert('Se ha actualizado la contraseña.');";
                                      echo "window.location='perfil.php';";
                                      echo "</script>";
                                    }else{
                                      echo "<script language='javascript'>";
                                      echo "alert('Las contraseñas ingresadas no coinciden.');";
                                      echo "window.location='perfil.php';";
                                      echo "</script>";
                                    }
                                  }else{
                                    echo "<script language='javascript'>";
                                    echo "alert('La contraseña anterior no es la correcta.');";
                                    echo "window.location='perfil.php';";
                                    echo "</script>";
                                  }
                                }
                                else{
                                  echo "<script language='javascript'>";
                                  echo "alert('Contraseña en blanco. Ingrese nuevamente.');";
                                  echo "window.location='perfil.php';";
                                  echo "</script>";
                                }
                              }
                              ?>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>





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

</html>
