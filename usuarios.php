<?php
include("sesion.php");
$pagina='usuariosPHP';
include ("encabezado.php");
include("seguridad.php");
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
	      				<h3>Registro de Usuarios</h3>
	  				</div> <!-- /widget-header -->

					<div class="widget-content">


              <div class="col-lg-12">

                  <div class="panel panel-success">
                    <div class="panel-heading">
                      <h3 class="panel-title">Ingreso Datos</h3>
                    </div>
                    <div class="panel-body">
                      <div class="form-group">
												  <form method="post">

                          <div class="col-lg-2 text-left">
                            <label>Usuario</label>
                            <input class="form-control" type="text" name="usuario"required>
                          </div>
                          <div class="col-lg-6 text-left">
                            <label>Apellido y Nombre</label>
                            <input class="form-control" type="text" name="nombre" required>
                          </div>
                          <div class="col-lg-4 text-left">
                            <label>Mail</label>
                            <input class="form-control" type="text" name="mail">
                          </div>
                          <div class="col-lg-6 text-left">
                            <label>Contraseña</label>
                            <input class="form-control" type="text" name="clave"required>
                          </div>

                          <div class="col-lg-6 text-left">
                            <label>Rol del Usuario </label>
                            <select class="form-control" name="codRol" required>
                              <option value="" selected>Seleccione Rol</option>
                              <?php
                              $consultarol= mysqli_query($conexion,"SELECT `codRol`, `nombreRol` FROM roles ORDER By nombreRol")
                              or die("Problemas en la lectura de Roles".mysqli_error($conexion));
                              while ($fila=mysqli_fetch_row($consultarol)) {
                                echo "<option value='".$fila['0']."'>".$fila['1']."</option>";
                              }
                              ?>
                            </select>
                          </div>
                          <div class="col-lg-12 text-left">
                            <label>Observaciones</label>
                            <input class="form-control" type="text" name="descripcion" >
                          </div>

                      </div>
                      <input type="submit" class="btn btn-success" name="insertar" value="Guardar" />
                      <input type="reset" class="btn btn-success" name="limpiar" value="Limpiar" />
                    </div>
                  </div>
                  <?php
                  if (isset($_POST['insertar'])){
                    $Fusuario=$_POST['usuario'];
                    $Fnombre=$_POST['nombre'];
                    $Fmail=$_POST['mail'];
                    $Fclave=$_POST['clave'];
                    $Fdescripcion=$_POST['descripcion'];

                    $FcodRol=$_POST['codRol'];
                    mysqli_query($conexion,"INSERT INTO usuarios(idUsuario,usuario, codRol, nombreUsuario, mailUsuario, claveUsuario, descripUsuario,  inhabilitado)
                    VALUES('', '$Fusuario', '$FcodRol', '$Fnombre', '$Fmail', '$Fclave','$Fdescripcion', 'NO')")
                    or die("Problemas en el alta ".mysqli_error($conexion));
                    echo "<script language='javascript'>";
                    echo "alert('El usuario fue ingresado');";
                    echo "</script>";
                  }
                  ?>
                </form>
              </div> <!-- /.col-sm-12 -->


              <div class="col-lg-12">
                <div class="panel panel-success">
                  <div class="panel-heading">
                    <h3 class="panel-title">Búsqueda de Usuario para modificar o inhabilitar</h3>
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
                        $result=mysqli_query($conexion,"SELECT * FROM usuarios, roles where (usuarios.codRol=roles.codRol and inhabilitado='NO') order by nombreUsuario asc");
                      }
                      else{
                        $filtro="'%$_POST[filtro]%'";
                        $result=mysqli_query($conexion,"SELECT * FROM usuarios, roles WHERE (nombreUsuario LIKE $filtro) and (usuarios.codRol=roles.codRol and inhabilitado='NO') order by nombreUsuario asc");
                      }
                      echo "<br>";
                      echo "<table class='table table-bordered table-hover table-striped'>";
                      echo "<thead>";
                      echo "<tr>";
                      echo "<th>Apellido y Nombre</th>";
                      echo "<th>Usuario</th>";
                      echo "<th>Rol</th>";
                      echo "<th>Mail</th>";
                      echo "<th></th>";
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
                        echo"<td> <a href ='usuarioActualizar.php?idUsuario=$id'><i class='icon-large btn btn-danger icon-remove'></i> </a>";
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
