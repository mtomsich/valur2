<?php
include("sesion.php");
$pagina='formularioAnGrrub2pto1PHP';
include("encabezado.php");
include("seguridadForm.php");
include("sql/consultas.php");
if (isset($_GET['idCedula'])) {
  $Cedula = $_GET['idCedula'];
  $TipoDeCedula = $_GET['cedula'];
  $edicion = false;
  # code...
}else{
  $edicion = true;
  $idForm = $_GET['idform'];
  $form = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `formangr` WHERE `codFormAnexo`= $idForm"));
  $Cedula = $form[1];
  $TipoDeCedula = $form[2];
}
$data = $_GET['aniotabla'];

$query = "SELECT `codForm`, `nroFormulario`, `version` FROM `cedulaformularios`
WHERE `idCedula`=$Cedula AND `tipoCedula` = $TipoDeCedula
 AND (`nroFormulario`='901' OR `nroFormulario`='A901' OR `nroFormulario`='910' OR `nroFormulario`='A910')";

$formularios_cedulas = mysqli_query($conexion,$query);
 $aux1 = mysqli_query($conexion,$query);


  // echo "SELECT `codForm`, `nroFormulario`, `version` FROM `cedulaformularios`
  // WHERE `idCedula`=$Cedula AND `tipoCedula` = $TipoDeCedula
  //  AND (`nroFormulario`='901' OR `nroFormulario`='A901' OR `nroFormulario`='910' OR `nroFormulario`='A910')";
?>
<!DOCTYPE html>
<html lang="es">
<head>
 <style>
    #area1{
        padding : 50px;
    }
    .aux{
        margin: 0 auto;
    }
 </style>
    <script>
      window.onload = function(){
        var nro = document.getElementById("FormOrig").value;
        actualizarNroForm(nro);
      }
      function actualizarNroForm(nro){
          document.getElementById("nroForm").value = document.getElementById("nro-"+nro).value;
      }

    </script>
</head>
<body>

  <div class="main">

    <div class="main-inner">

      <div class="container">

        <div class="widget ">

          <div class="widget-header">
            <i class="icon-user"></i>
            <h3>Formulario Anexo</h3>
          </div> <!-- /widget-header -->

          <div class="widget-content ">

            <div class="control-group">

              <div class="controls">

                <div class="accordion" id="accordion3">
                    <form method="POST">
                    <div class="accordion-group">
                    <!-- Área -->
                        <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" href="#area1">Datos del anexo</a>
                        </div><!-- /Área -->
                        <div class="accordion-body" id="area1">
                            <div class="aux">
                              <div class="row">
                                  <div class="col-lg-3 text-left">
                                      <label>Formulario al que se le realizara el anexo</label>
                                  </div>
                                  <div class="col-lg-4 text-left">
                                      <select class="form-control" type="text" name="FormOrig" id="FormOrig" onchange="actualizarNroForm(this.value)">
                                          <?php
                                              while($row = mysqli_fetch_row($formularios_cedulas)){
                                                if ($edicion && $form[3]==$row[0]) {
                                                  echo "<option selected value=".$row[0]." >".$row[1]." / ".$row[2]."</option>";
                                                }else{
                                                  echo "<option value=".$row[0]." >".$row[1]." / ".$row[2]."</option>";
                                                }
                                              }
                                          ?>
                                      </select>
                                      <input type="text" id="nroForm" name="nroForm" style="display:none">
                                  </div>
                              </div>
                              <br>
                              <div class="row">
                                  <div class="col-lg-3 text-left">
                                      <label>Mostrar datos del profesional en el pdf</label>
                                  </div>
                                  <div class="col-lg-4 text-left">
                                      <select class="form-control" type="text" name="mostrarDatos" id="mostrarDatos">
                                          <?php
                                            if (($edicion && $form['mostrarProf']=='1') || !$edicion) {
                                              echo '
                                                  <option value="1" selected>Si</option>
                                                  <option value="0">No</option>
                                              ';
                                            }else{
                                              echo '
                                                  <option value="1" >Si</option>
                                                  <option value="0" selected>No</option>
                                              ';
                                            }
                                          ?>
                                      </select>
                                  </div>
                              </div>
                              <div class="row">
                                  <table style="display:none">
                                    <tr>
                                        <?php
                                            while($row = mysqli_fetch_row($aux1)){
                                                // echo "<tr><td id='nro-".$row[0]."'>".$row[1]."</td></tr>";
                                                echo "<tr><td><input id='nro-".$row[0]."' type='text' value='".$row[1]."' disabled></td></tr>";
                                                // echo "<td>nro</td>";
                                            }
                                        ?>
                                        <!-- <td>nro</td> -->
                                    </tr>
                                  </table>
                              </div>
                            </div>
                        </div>
                    </div>
                  <button class="btn btn-success" name="guardar">Guardar</button>
                  <?php
                    if(isset($_POST['guardar'])){
                        echo "<br>";
                        $mostrar_datos = $_POST['mostrarDatos'];
                        // $aux = $_POST['FormOrig'];
                        $nroFormOrig = $_POST['nroForm'];
                        $codFormOrig = $_POST['FormOrig'];
                        // echo "numero del formulario: ".$nroFormOrig;
                        // echo "<br>";
                        // echo "codigo del formulario: ".$codFormOrig;
                        if (!$edicion) {
                          $query = "INSERT INTO `formangr`(`idCedula`, `tipoCedula`, `formOriginal`, `nroFormOrig`, `mostrarProf`) VALUES ('$Cedula','$TipoDeCedula','$codFormOrig','$nroFormOrig','$mostrar_datos')";
                          // echo $query;
                          mysqli_query($conexion,$query);

                          $version = mysqli_fetch_array(mysqli_query($conexion, "SELECT MAX(`version`) FROM `cedulaformularios` WHERE `idCedula` = $Cedula AND `tipoCedula`= $TipoDeCedula and `nroFormulario`='AnGr'"))[0];
                          if ($version == null) {
                            $version = 1;
                          }else{
                            $version++;
                          }
                          $codForm = mysqli_fetch_array(mysqli_query($conexion, "SELECT MAX(`codFormAnexo`) FROM `formangr`"))[0];
                          $query = "INSERT INTO `cedulaformularios`(`idCedula`, `tipoCedula`, `nroFormulario`, `version`, `data`, `codForm`)
                          VALUES ($Cedula,$TipoDeCedula,'AnGr',$version,$data,$codForm)"; // angr = anexo grafico
                          // echo $query;
                          mysqli_query($conexion,$query);
                          echo '<script language="javascript">alert("Se registro la forma correctamente!");</script>';
                        }else{
                          $query = "UPDATE `formangr` SET `formOriginal`='$codFormOrig',`nroFormOrig`='$nroFormOrig',`mostrarProf`='$mostrar_datos' WHERE  `codFormAnexo` = $idForm";
                          mysqli_query($conexion,$query);
                          echo '<script language="javascript">alert("Se actualizo la forma correctamente!");</script>';
                        }
                        echo '<script language="javascript">window.close();window.opener.getFormularios();</script>';
                    }
                  ?>
                </form>
                </div> <!-- /controls -->

              </div> <!-- /control-group -->

            </div> <!-- /widget-content -->

          </div> <!-- /widget -->

        </div> <!-- /container -->

      </div> <!-- /main-inner -->

    </div> <!-- /main -->
  </body>
</body>
</html>
