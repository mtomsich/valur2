<?php
include("sesion.php");
	$pagina='usuarioActualizarPHP';
    include("encabezado.php");
		include("seguridad.php");

	$id =$_REQUEST['idUsuario'];
	$result = mysqli_query($conexion,"SELECT usuarios.*,roles.nombreRol FROM usuarios, roles where (usuarios.codRol=roles.codRol) and idUsuario= '$id'");
	$test = mysqli_fetch_array($result);
	if (!$result)
		{
		die("Error: Data not found..");
		}
    $usuario=$test['usuario'];
    $nombreUsuario=$test['nombreUsuario'];
    $codRol=$test['codRol'];
	$mail=$test['mailUsuario'];

	$descripcion=$test['descripUsuario'];
	$inhabilitado=$test['inhabilitado'];

	$resultE = mysqli_query($conexion,"SELECT `codRol`, `nombreRol` FROM roles WHERE codRol='$codRol' ORDER By nombreRol")
	or die("Problemas en la lectura de Roles".mysqli_error($conexion));
	$testE = mysqli_fetch_array($resultE);
	$rol=$testE['nombreRol'];
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
	      				<h3>Actualizacion de Datos de Usuarios</h3>
	  				</div> <!-- /widget-header -->

					<div class="widget-content">

                 <div class="col-sm-12">
                <form method="post">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">Ingreso Datos de Usuarios</h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">

                    <div class="col-lg-2 text-left">
                        <label>Usuario</label>
                        <input class="form-control" type="text" id="disabledInput" name="usuario" value="<?php echo $usuario ?>"disabled>
                    </div>
                      <div class="col-lg-6 text-left">
                        <label>Apellido y Nombre</label>
                        <input class="form-control" type="text" name="nombre" value="<?php echo $nombreUsuario ?>" required>
                    </div>
										<div class="col-lg-4 text-left">
										 <label>Mail</label>
										 <input class="form-control" type="text" name="mail" value="<?php echo $mail ?>">
								 </div>
                                             <div class="col-lg-4 text-left">
                        <label>Contraseña</label>
                        <input class="form-control" type="password" name="clave" >
                    </div>


                     <div class="col-lg-4 text-left">
                        <label>Rol</label>
                        <select class="form-control" name="codRol" required>
                                  <option><?php echo $rol ?></option>
                                    <?php
                                        $consultarol= mysqli_query($conexion,"SELECT `codRol`, `nombreRol` FROM roles ORDER By nombreRol")
                            or die("Problemas en la lectura de Roles".mysqli_error($conexion));
                            while ($fila=mysqli_fetch_row($consultarol)) {
                                      echo "<option value='".$fila['0']."'>".$fila['1']."</option>";
                                  }
                                      ?>
                                 </select>
                    </div>
                                           <div class="col-lg-4 text-left">
                        <label>Inhabilitar Usuario</label>
                                    <select class="form-control text-left" name="inhabilitado" />

                                      <option><?php echo $inhabilitado; ?></option>
                                      <option>No</option>
                                      <option>Si</option>
                                    </select>
                        </div>
                                            <div class="col-lg-12 text-left">
                        <label>Observaciones</label>
                        <input class="form-control" type="text" name="descripcion" value="<?php echo $descripcion ?>">
                    </div>
                                          </div>

                               <input type="submit" class="btn btn-success" name="actualizar" value="Guardar" />
               <input type="reset" class="btn btn-success" name="limpiar" value="Limpiar" />
                        </div>
                    </div>
                      <?php
                  if (isset($_POST['actualizar'])){
                    $Fnombre=$_POST['nombre'];
                    $Fmail=$_POST['mail'];
                    $Fclave=$_POST['clave'];
                    $Fdescripcion=$_POST['descripcion'];
                    $Finhabilitado=$_POST['inhabilitado'];

                    if (is_numeric($_POST['codRol'])){$FcodRol=$_POST['codRol'];}
                    else{
                      $codigorol=$_POST['codRol'];
                      $resultL = mysqli_query($conexion,"SELECT codRol, nombreRol FROM roles
                      WHERE nombreRol='$codigorol'");
                      $testL = mysqli_fetch_array($resultL);
                      $FcodRol=$testL['codRol'];
                    }
                    if (strlen($Fclave)>0){$Fclave=$_POST['clave'];
                      mysqli_query($conexion,"UPDATE `usuarios` SET `codRol`='$FcodRol',
                    `nombreUsuario`='$Fnombre',`claveUsuario`='$Fclave',`mailUsuario`='$Fmail',
                    `descripUsuario`='$Fdescripcion',`inhabilitado`='$Finhabilitado'
                                WHERE idUsuario='$id'")
                        or die("Problemas en la actualización.".mysqli_error($conexion));
                      }
                    else{
                    mysqli_query($conexion,"UPDATE `usuarios` SET `codRol`='$FcodRol',
                    `nombreUsuario`='$Fnombre',`mailUsuario`='$Fmail',
                    `descripUsuario`='$Fdescripcion',`inhabilitado`='$Finhabilitado'
                                WHERE idUsuario='$id'")
                        or die("Problemas en la actualización.".mysqli_error($conexion));
                                  }
                    echo "<script language='javascript'>";
                    echo "alert('El usuario fue actualizado');";
                    echo "window.location='usuarioActualizar.php?idUsuario=$id';";
                    echo "</script>";
                  }
                ?>
                    </form>
                </div> <!-- /.col-sm-12 -->


                <div class="col-lg-12">
           <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">Busqueda Usuario para modificar o eliminar</h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
              <form method = 'POST'>
								<div class="col-lg-6 text-left">
								<strong>Ingrese Apellido y Nombre:</strong>
								<input type="text" name="filtro" class="form-control" >
							</div>
								<div class="col-lg-3 text-left">
									<br>
								<input type='submit' class="btn btn-info" name='buscarusuario' value='Buscar'>
									</div>
              </form>
              <?php
                if (!isset($_POST['buscarusuario']) or ($_POST['filtro'] == ""))	{
                  $result=mysqli_query($conexion,"SELECT * FROM usuarios, roles
                  where (usuarios.codRol=roles.codRol and inhabilitado='NO' ) order by nombreUsuario asc");
                }
                else{
                  $filtro="'%$_POST[filtro]%'";
                  $result=mysqli_query($conexion,"SELECT * FROM usuarios, roles
                  WHERE (nombreUsuario LIKE $filtro) and (usuarios.codRol=roles.codRol and inhabilitado='NO') order by nombreUsuario asc");
                }
              echo "<br>";
              echo "<table class='table table-bordered table-hover table-striped'>";
                echo "<thead>";
                  echo "<tr>";
                        echo "<th>Apellido y Nombre</th>";
                    echo "<th>Usuario</th>";
                    echo "<th>Rol</th>";
                    echo "<th>Mail</th>";
                                            echo "<th>Modificar</th>";
                  echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                while($test = mysqli_fetch_array($result)){
                  $id = $test['idUsuario'];
                  echo"<tr align='center'>";
                                        echo"<td>" .$test['nombreUsuario']."</td>";
                  echo"<td>" .$test['usuario']."</td>";
                  echo"<td>" .$test['nombreRol']."</td>";
                                        echo"<td>" .$test['mailUsuario']."</td>";
                  echo"<td> <a href ='usuarioActualizar.php?idUsuario=$id'><i class='icon-large btn btn-info icon-pencil'></i> </a>";
                  echo "</tr>";
                }
                echo "</tbody>";
              echo "</table>";
            ?>
            </div>
          </div>
                    </div>
      </div>

                <div class="col-lg-12">
           <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">Usuarios inhabilitados</h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
              <?php
                if (!isset($_POST['buscarusuario']) or ($_POST['filtro'] == ""))	{
                  $result=mysqli_query($conexion,"SELECT * FROM usuarios, roles where (usuarios.codRol=roles.codRol and inhabilitado='SI') order by nombreUsuario asc");
                }
                else{
                  $filtro="'%$_POST[filtro]%'";
                  $result=mysqli_query($conexion,"SELECT * FROM usuarios, roles WHERE (nombreUsuario LIKE $filtro) and (usuarios.codRol=roles.codRol and inhabilitado='SI') order by nombreUsuario asc");
                }
              echo "<br>";
              echo "<table class='table table-bordered table-hover table-striped'>";
                echo "<thead>";
                  echo "<tr>";
                        echo "<th>Apellido y Nombre</th>";
                    echo "<th>Usuario</th>";
                    echo "<th>Rol</th>";
                    echo "<th>Mail</th>";
                                            echo "<th>Modificar</th>";
                  echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                while($test = mysqli_fetch_array($result)){
                  $id = $test['idUsuario'];
                  echo"<tr align='center'>";
                                        echo"<td>" .$test['nombreUsuario']."</td>";
                  echo"<td>" .$test['usuario']."</td>";
                  echo"<td>" .$test['nombreRol']."</td>";
                                        echo"<td>" .$test['mailUsuario']."</td>";
                  echo"<td> <a href ='usuarioActualizar.php?idUsuario=$id'><i class='icon-large btn btn-danger icon-remove'></a>";
                  echo "</tr>";
                }
                echo "</tbody>";
              echo "</table>";
            ?>
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

<?php mysqli_close($conexion); ?>
