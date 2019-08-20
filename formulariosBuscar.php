<?php
include("sesion.php");
    	$pagina='formulariosBuscarPHP';
      include("encabezado.php");
      include("seguridad.php");

    $cedula=$_REQUEST['cedula'];

    If ($cedula=='1'){
      $idCedula =$_REQUEST['idCedula'];
    include("sql/mostrarDatosCedula10707.php");
  }else{
    If ($cedula=='2'){
      $idCedula =$_REQUEST['idCedula'];
      include("sql/mostrarCedulaPH.php");
      $idObraUnidadFuncional =$_REQUEST['idObraUnidadFuncional'];
    include("sql/mostrarUnidadesFuncionales.php");
  }else{
    $idCedula=$_REQUEST['idCedula'];
    include("sql/mostrarCedulaDE.php");

  }

  }



    include("sql/mostrarDatosObra.php");


?>
<!DOCTYPE html>
<html lang="es">

<body>

<div class="main">

      <div class="main-inner">

          <div class="container">

            <div class="row">


              						<div class="span7">
              							<div class="widget ">
              							  <div class="widget-header">
              							    <i class="icon-user"></i>
              							    <h3>Datos de Obra</h3>
              							  </div> <!-- /widget-header -->

              							  <div class="widget-content">
              							    <form method="post">
              										<div class="col-lg-2">
              											<label for="partida">Partida:</label>

              											<input class="form-control" type="text" value="<?php echo $Fpartida?>"disabled>


              										</div>

              						<div class="col-lg-6 text-left">
              							<label>Cliente</label>
              							<input class="form-control" type="text" value="<?php echo $FcnombreApellido?>"disabled>
              						</div>

              						<div class="col-lg-4 text-left">
              							<label>Direccion</label>
              							<input class="form-control" type="text" value="<?php echo $Fdomicilio." ".$FnroCalle?>"disabled>
              						</div>
              											<div class="col-lg-4 text-left">
              												<label>Partido</label>
              												<input type="text" class="form-control " name="Clocalidad" id="lastname" value="<?php echo $Fpartido?>"disabled>

              											</div>

              											<div class="col-lg-2 text-left">
              												<label>Cod </label>
              												<input class="form-control " type="text" value="<?php echo $FcodPartido?>"disabled>
              											</div>

              											<div class="col-lg-4 text-left">
              												<label>Localidad</label>
              												<input type="text" class="form-control " name="Clocalidad" id="lastname" value="<?php echo $Flocalidad?>"disabled>
              											</div>

              											<div class="col-lg-2 text-left">
              												<label>CP</label>
              												<input class="form-control " type="text" name="cp" value="<?php echo $FcodigoPostal?>"disabled>
              											</div>

              										  <table class="table table-bordered responsive-table">
              							          <thead>
              							            <tr>
              							              <th class='col-sm-1'>Circunscripcion</th>
              							              <th class='col-sm-1'>Seccion</th>
              							              <th class='col-sm-1'>Chacra</th>
              							              <th class='col-sm-1'>Quinta</th>
              							              <th class='col-sm-1'>Fraccion</th>
              							              <th class='col-sm-1'>Manzana</th>
              							              <th class='col-sm-1'>Parcela</th>

              							            </tr>
              							          </thead>
              							          <tbody>
              							            <tr>

              							              <td><input type="text" class="form-control" name="cir" value="<?php echo $Fcir?>" disabled></td>
              							              <td><input type="text" class="form-control" name="sec" value="<?php echo $Fsec?>" disabled></td>
              							              <td><input type="text" class="form-control" name="cha" value="<?php echo $Fcha?>" disabled></td>
              							              <td><input type="text" class="form-control" name="qui" value="<?php echo $Fqui?>" disabled></td>
              							              <td><input type="text" class="form-control" name="fra" value="<?php echo $Ffra?>" disabled></td>
              							              <td><input type="text" class="form-control" name="man" value="<?php echo $Fman?>" disabled></td>
              							              <td><input type="text" class="form-control" name="par" value="<?php echo $Fpar?>" disabled></td>
              							           </tr>
              							          </tbody>
              							        </table>

              							  </div> <!-- /widget-content -->
              							</div> <!-- /widget -->

              <div class="widget ">
              	<div class="widget-header">
              		<i class="icon-user"></i>
              		<h3>Ficha Cedula</h3>
              	</div> <!-- /widget-header -->

              	<div class="widget-content ">
              	<form method="post">
              								<div class="col-lg-4 text-left">
              									<label>Fecha Impresion</label>
              									<input class="form-control" type="text" name="fechaImp" id="fechaImp" value="<?php echo $FfechaImp?>" disabled>
              								</div>
              								<div class="col-lg-5 text-left">
              									<label>Lugar:</label>
              									<input class="form-control" type="text" name="lugar" id="lugar" value="<?php echo $Flugar?>" disabled>
              								</div>
              								<div class="col-lg-3 text-left"> <!-- Años del 2018 para atras-->
              									<label>Año Tabla:</label>
              									<input class="form-control" type="text" name="anioImp" id="anioImp" value="<?php echo $FanioImp?>" disabled>
              								</div>
<?php If ($cedula=='1') { //Para cedulas 10707?>
                          <label>13- Valuacion Basica</label>
                          <div class="col-lg-12 text-left">
                          <table class="table table-bordered responsive-table">
                          <tr>
                          <td>Edificio</td>
                          <td>Mejora</td>
                          <td>tierra</td>
                          <td>Total</td>
                          </tr>
                          <tr>
                          <td><input type="text" class="form-control" name="edificio" value="<?php echo number_format($Fedificio,0,',','.')?>" disabled></td>
                          <td><input type="text" class="form-control" name="mejora" value="<?php echo number_format($Fmejora,0,',','.')?>" disabled></td>
                          <td><input type="text" class="form-control" name="tierra" value="<?php echo number_format($Ftierra,0,',','.')?>" disabled></td>
                          <td><input type="text" class="form-control" name="total" value="<?php echo number_format($Ftotal,0,',','.')?>" disabled></td>
                          </tr>
                          </table>
                          </div>
<?php } else{ //PAra cedulas de PH?>

    <legend>Datos de Unidades Funcionales</legend>
<div class="col-lg-12 text-left">
    <table class="table table-bordered responsive-table">
      <thead>
        <tr>
          <th class='col-sm-1'>Unidad Func</th>
          <th class='col-sm-1'>Poligonos</th>
          <th class='col-sm-1'>Sup. Cubierta</th>
          <th class='col-sm-1'>Sup. SemiCubierta</th>
          <th class='col-sm-1'>Sup. Descubierta</th>
          <th class='col-sm-1'>Sup. Balcon</th>
          <th class='col-sm-1'>Otros</th>
          <th class='col-sm-1'>Total UF</th>
        </tr>
      </thead>
      <tbody>

        <tr>
          <td><input type="text" class="form-control" name="iduf"  id="iduf" value="<?php echo number_format($FidUnidFun,0,',','.') ?>" disabled></td>
          <td><input type="text" class="form-control" name="pol" id="pol" value="<?php echo number_format($Fopol,0,',','.') ?>" disabled></td>
          <td><input type="text" class="form-control" name="bcub" id="bcub" value="<?php echo number_format($Focub,0,',','.') ?>" disabled></td>
          <td><input type="text" class="form-control" name="bscub" id="bscub" value="<?php echo number_format($Foscub,0,',','.') ?>" disabled></td>
          <td><input type="text" class="form-control" name="bdes" id="bdes"  value="<?php echo number_format($Fodescub,0,',','.') ?>" disabled></td>
          <td><input type="text" class="form-control" name="balcon" id="balcon"  value="<?php echo number_format($Fobal,0,',','.') ?>" disabled></td>
          <td><input type="text" class="form-control" name="otros"  id="otros" value="<?php echo number_format($otros,0,',','.') ?>" disabled></td>
          <td><input type="text" class="form-control" name="btotalPolig" id="btotalPolig" value="<?php echo number_format($Fotpol,0,',','.') ?>"disabled></td>
                  </tr>


      </tbody>
    </table>
</div>
  <?php } ?>

              		<button class="btn" name="cerrar">Cancelar</button>
              		<?php

              			if (isset($_POST['cerrar'])){
              				echo "<script language='javascript'>";
              				echo "window.location='cedula10707Buscar.php';";
              				echo "</script>";

              }

              		?>
              		</form>


              </div> <!-- /widget-content -->
              </div>

              					</div> <!-- /row -->
                  <div class="span4">

            <div class="widget ">
                  <div class="widget-header">
                        <i class="icon-user"></i>
                        <h3>Ingreso de Formularios</h3>
                  </div> <!-- /widget-header -->

                  <div class="widget-content">

                        <form method="post" >
<div class="col-lg-8 text-left">
                              <label class="control-label" for="lastname">Agregar Formulario</label>

                                    <select id="status" class="selectpicker span3" data-live-search="true" name="seleccionForm" onChange="getFormLink(this);" class="form-control" >

                                          <option value="form901">Formulario 901</option>
                                          <option value="form903">Formulario 903</option>
                                          <option value="form904">Formulario 904</option>
                                          <option value="form905">Formulario 905</option>
                                          <option value="form906">Formulario 906</option>
                                          <option value="form907">Formulario 907</option>
                                          <option value="form908">Formulario 908</option>
                                          <option value="form909">Formulario 909</option>
                                          <option value="form910">Formulario 910</option>
                                          <option value="form912">Formulario 912</option>
                                          <option value="form915">Formulario 915</option>
                                          <option value="form916">Formulario 916</option>
                                          <option value="form918">Formulario 918</option>
                                          <option value="formA901">Formulario A901</option>
                                          <option value="formA910">Formulario A910</option>
                                          <option value="formAnGr">Formulario Anexo</option>

                                    </select>

                              </div>

                            <div class="col-lg-2 text-left">
<br>
                              <a id="formLink" href="formulario901rub2pto1.php" target="_blank" onclick="openWindows(this);return false;"><button type="button" class="btn btn-success btn-large" > <i class="icon-large icon-plus-sign"></i>  </button></a>

                              </div>

                              <div class="col-lg-12">
                                    <div id="formResponse" class="form-group">
                                    </div>
                              </div>
                        </form>

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

<script>
getFormularios();

function getFormLink(element) {
  var formID = element.options[element.selectedIndex].value.replace("form", "");
  document.getElementById("formLink").href = "formulario" + formID + "rub2pto1.php";
}

function getFormularios() {

      /*var x = document.getElementsByName("formEdit");
      var y = document.getElementsByName("formView");
      for (var i = 0; i < x.length; i++) {
            x[i].href = "formulario" + formID + "rub2pto1.php";
      y[i].href = "PDFform" + formID + "-1.php";
      }
      //document.getElementById("formEdit").href = "formulario" + formID + "rub2pto1.php";
      //document.getElementById("formView").href = "From" + formID + "-1.php";*/
      var xhttp;

      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                  document.getElementById("formResponse").innerHTML = this.responseText;
                  changeVersion();
            }
      };
      xhttp.open("POST", "selectFormularios.php", true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send("idCedula=" + <?php echo $_GET["idCedula"]; ?> +"&"+ "cedula=" + <?php echo $_GET["cedula"]; ?>);
}

function openWindows(link) {
      var h = screen.height * 0.80;
      var w = screen.width * 0.95;
      var top = /*(screen.height - screen.height * 0.9) / 2*/ 0;
      var left = (screen.width - screen.width * 0.95) / 2.5;
      window.open(link.href + "?idCedula=" + <?php echo $_GET["idCedula"]; ?> + "&cedula=" + <?php echo $_GET["cedula"]; ?> + "&aniotabla=" + <?php echo $FanioImp; ?>,link.target,'width=' + w + ',height=' + h + ',top=' + top + ',left= ' + left + ',resizable=yes');
}

function openEditWindows(link) {
      var h = screen.height * 0.80;
      var w = screen.width * 0.95;
      var top = /*(screen.height - screen.height * 0.9) / 2*/ 0;
      var left = (screen.width - screen.width * 0.95) / 2.5;
      window.open(link.href + "?idform=" + link.title + "&aniotabla=" + <?php echo $FanioImp; ?>,link.target,'width=' + w + ',height=' + h + ',top=' + top + ',left= ' + left + ',resizable=yes');
}

function openViewWindows(link) {
      var h = screen.height * 0.80;
      var w = screen.width * 0.95;
      var top = /*(screen.height - screen.height * 0.9) / 2*/ 0;
      var left = (screen.width - screen.width * 0.95) / 2.5;
      window.open(link.href + "?idform=" + link.title + "&idCedula=" + <?php echo $_GET["idCedula"]; ?>+ "&cedula=" + <?php echo $_GET["cedula"]; ?>,link.target,'width=' + w + ',height=' + h + ',top=' + top + ',left= ' + left + ',resizable=yes');
}

function deleteForm(element) {
  var r = confirm("Esta seguro que quiere borrar el formulario?");
  if (r == true) {
    var formID = element.title;
    var formNum = element.name;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
                getFormularios();
                alert(this.responseText);
          }
    };
    xhttp.open("POST", "deleteFormularios.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("idForm=" + formID + "&numForm=" + formNum);
  }
}

function changeVersion() {
  $("input[name='versionchange']").change(function() {
    if(!$.isNumeric(this.value) || this.value <= 0)
  		this.value = 1;

      var cedformID = this.id;
      var version = this.value;
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                  getFormularios();
            }
      };
      xhttp.open("POST", "changeVersion.php", true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send("idCedForm=" + cedformID + "&version=" + version);
  });
}
</script>


  </body>

</html>
