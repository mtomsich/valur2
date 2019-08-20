<?php
$pagina='formulario908rub2pto1PHP';
include("sesion.php");
include("encabezado.php");
include("seguridadForm.php");
include("sql/consultas.php");

  // include ("sql/mostrarDatosObra.php");
  // include ("sql/mostrarFormA901.php");

  if (isset($_GET['idform'])) {
    $abierto_como = "edicion";
  }else{
    $abierto_como = "creacion";
  }

  if($abierto_como == "creacion"){
      $TipoDeCedula=$_GET["cedula"];
      $Cedula=$_GET["idCedula"];
    }else{
      $idForm = $_GET['idform'];
      $cons_form = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `form908` WHERE `codForm908` = $idForm"));
      $Cedula = $cons_form['idCedula'];
      $TipoDeCedula = $cons_form['tipoCedula'];
    }
    
  $aniotabla = $_GET['aniotabla'];  
  switch ($TipoDeCedula) {
    // case '1': $cons=mysqli_fetch_array(mysqli_query($conexion, "SELECT `fechaImp`, `lugar`,`anioimp`,`cpartido`, `nro1` FROM `cedula10707` WHERE `idCedula707` = $Cedula")); break;
    case '1': 
          $cons=mysqli_fetch_array(mysqli_query($conexion, "SELECT `fechaImp`, `anioimp`, `anio`, `codObra`, `orden` FROM `cedula10707` WHERE `idCedula707` = $Cedula")); 
          $obra = mysqli_fetch_array(mysqli_query($conexion, "SELECT `codPartido`,`nro` FROM `obras` WHERE `codObra` = ".$cons['codObra']));
          $cod_partido = $obra['codPartido'];
          $nro = $cons['orden'];

    break;

    case '2': $cons=mysqli_fetch_array(mysqli_query($conexion, "SELECT `fechaImp`, `lugar`,`anioimp`,`cpartido`, `nro1` FROM `cedulaph` WHERE `idCedulaPH` =  $Cedula"));  break;
    case '3': $cons=mysqli_fetch_array(mysqli_query($conexion, "SELECT `fechaImp`, `lugar`,`anioimp`,`cpartido`, `nro1` FROM `cedulade` WHERE `idCedulaDE` =  $Cedula"));break;
  }
  $FechaImp = $cons['fechaImp'];

  $query = 'SELECT `edificio`,`tierra`,`total` FROM `cedula10707` WHERE `idCedula707` = '.$Cedula;
  // echo $query;
  $UF = mysqli_fetch_array(mysqli_query($conexion,$query));
  
  // $FtotalPolig = $UF[0];
  $edifAct = $UF[0];
  $tierraAct = $UF[1];
  // $total = $edifAct + $tierraAct;
  $total = $UF[2];  

  $planoNro = $cod_partido."-".$nro."-".$cons['anio'];

  include("funciones/valores903.php");

  $datos_basicos_903 = array(
      "elementos" => $elementos,
      "categorias" => $Categorias,
      "cantidadesA" => $cantidadesA,
      "cantidadesB" => $cantidadesB,
      "cantidadesC" => $cantidadesC,
      "cantidadesD" => $cantidadesD,
      "cantidadesE" => $cantidadesE
  );

  include("funciones/valores904.php");

  $datos_basicos_904 = array(
      "elementos" => $elementos,
      "categorias" => $Categorias,
      "cantidadesA" => $cantidadesA,
      "cantidadesB" => $cantidadesB,
      "cantidadesC" => $cantidadesC,
      "cantidadesD" => $cantidadesD,
      "cantidadesE" => $cantidadesE
  );

  include("funciones/valores905.php");

  $datos_basicos_905 = array(
      "elementos" => $elementos,
      "categorias" => $Categorias,
      "cantidadesA" => $cantidadesA,
      "cantidadesB" => $cantidadesB,
      "cantidadesC" => $cantidadesC,
      "cantidadesD" => $cantidadesD,
      "cantidadesE" => $cantidadesE
  );

  include("funciones/valores906.php");

  $datos_basicos_906 = array(
      "elementos" => $elementos,
      "categorias" => $Categorias,
      "cantidadesA" => $cantidadesA,
      "cantidadesB" => $cantidadesB,
      "cantidadesC" => $cantidadesC,
      "cantidadesD" => $cantidadesD,
      "cantidadesE" => $cantidadesE
  );

  include("funciones/valores916.php");

  $datos_basicos_916 = array(
      "elementos" => $elementos,
      "categorias" => $Categorias,
      "cantidadesA" => $cantidadesA,
      "cantidadesB" => $cantidadesB,
      "cantidadesC" => $cantidadesC,
      "cantidadesD" => $cantidadesD,
      "cantidadesE" => $cantidadesE
  );

  function mostrar($elem){
    if ($elem == 0) {
        $elem = "";
    }
      return $elem;
  }
function number_for($num,$decimales){
    $aux = number_format($num,$decimales);
    $aux = (string)$aux;
    $aux = str_replace(".","-",$aux);
    $aux = str_replace(",",".",$aux);
    $aux = str_replace("-",",",$aux);
    return $aux;
  }
  function number_for2($num,$decimales){
    $aux = $num;
    $aux = str_replace(".","-",$aux);
    $aux = str_replace(",",".",$aux);
    $aux = str_replace("-",",",$aux);
    echo $aux;
    $aux = (float)$aux;
    $aux = number_format($aux,$decimales);
    return $aux;
  }
  class formulario{

      function __construct($id, $nro, $version, $anioimp,$conexion, $datos_basicos){
          $this -> id = $id;  
          $this -> nro = $nro;  
          $this -> version = $version;  
          $this -> nombre = $this -> nro ."-". $this -> version;

          if ($this -> nro == 903) {
              $condicion = "codForm3 = " . $this -> id;
          }else{
              $condicion = "codForm".$this -> nro." = " . $this -> id;
          }

          $this -> consulta = mysqli_fetch_array(mysqli_query($conexion, "SELECT * FROM form".$this -> nro . " WHERE ".$condicion));

          $this -> totales = $this -> calcularTotales($datos_basicos);
          $this -> categoria = $this -> calcularCategoria($datos_basicos['categorias']);
          $this -> coef = $this -> calcularCoef($anioimp,$conexion);
          $this -> cubierta = $this -> ValorUnitarioTotal($datos_basicos['categorias'],$conexion);
          $this -> semiCubierta = $this -> ValorUnitarioTotal_SemiCub($datos_basicos['categorias'],$conexion);
          if (isset($this -> consulta ['Bano1'])) {
            $this -> banoPri = $this -> consulta ['Bano1'];
          }else{
            $this -> banoPri = 0;
          }
          if (isset($this -> consulta ['Bano2'])) {
            $this -> banoSec = $this -> consulta ['Bano2'];
          }else{
            $this -> banoSec = 0;
          }

          $this -> consulta_rub6 = mysqli_query($conexion, "SELECT `val` FROM `rub6data` WHERE `codForm` =". $this -> id);

          $this -> total_insta = $this -> totalinsta();


      }
      function totalinsta(){
        $total = 0;
        while ($fila = mysqli_fetch_row($this -> consulta_rub6)) {
          $total += $fila[0];
        }
        return $total;
      }
      function ValorUnitario($categoria,$conexion){
        $VU=mysqli_query($conexion,"SELECT * FROM `valoredificio` WHERE `codForm`='".$this -> nro."' AND `categoria`='".$categoria."'");
        $ValorUnitario=mysqli_fetch_array($VU);
        return $ValorUnitario['valorCat'];
      }
      function ValorUnitarioTotal_SemiCub(){
        if ($this -> categoria == "D" || $this -> categoria == "E") {
          return $this -> cubierta * 0.3;
        }else{
          return $this -> cubierta * 0.5;
        }
      }
      function ValorUnitarioTotal($categorias,$conexion){
          $Total = 0;
          for ($i=0; $i <sizeof($this -> totales) ; $i++) { 
            $Total=$Total+ $this -> totales[$i];
          }
          $ValorBasicoTotal = 0;
          for ($i=0; $i < sizeof($categorias); $i++) { 
              $ValorBasicoTotal += $this -> ValorUnitario($categorias[$i],$conexion) * $this -> totales [$i];
          }
          if ($Total == 0) {
            return 0;
          }else{
            return $ValorBasicoTotal/$Total;
          }
      }

      function contarSeccion($elem,$tipo,$cant){
        $total = 0;
        for ($i=1; $i <= $cant ; $i++) {
          if ($this -> consulta[$elem.$tipo.$i]==1) { $total++; }
        }
        return $total;
      }
      function contarFila($elem,$tipo,$cantidades){
        $totalT = 0;
        for ($i=0; $i < sizeof($elem) ; $i++) {
          $totalT += $this -> contarSeccion( $elem[$i] , $tipo , $cantidades[$i]);
        }
        return $totalT;
      }

      function calcularTotales($datos_basicos){
          $totales = [];
          for ($i=0; $i < sizeof($datos_basicos['categorias']); $i++) { 
            $totales[$i] = $this -> contarFila($datos_basicos['elementos'], $datos_basicos['categorias'][$i], $datos_basicos['cantidades'.$datos_basicos['categorias'][$i]]);
          }
          return $totales;
      }

      function calcularCategoria($Cat){
        $MAX = -1;
        $Totales = $this -> totales;
        for ($i=0; $i < sizeof($Cat) ; $i++) { 
          if ($Totales[$i]>=$MAX) {
            $MAX = $Totales[$i];
            $Categoria = $Cat[$i];
          }
        }
        return $Categoria;
      }

      function calcularCoef($anioimp,$conexion){
          $Estado = $this -> consulta['Estado'];
          $Categoria = $this -> categoria;
          if ($this -> consulta['Data']==0) {
                $Ant=$anioimp-$this -> consulta['Data1'];
              }
              else{
                $Ant=$anioimp-$this -> consulta['Data'];
              }
              if ($Ant>=100) {
                $coef=mysqli_query($conexion,"SELECT MIN(`coef`) FROM `coefdepreciacion`");
                $Fcoef=mysqli_fetch_array($coef);
              }elseif (($Ant == 0) || ($Ant < 0)){
                $coef=mysqli_query($conexion,"SELECT MAX(`coef`) FROM `coefdepreciacion`");
                $Fcoef=mysqli_fetch_array($coef);
              }else{
                $coef=mysqli_query($conexion,"SELECT `coef` FROM `coefdepreciacion` WHERE `antiguedad`='".$Ant."' AND `categoria`='".$Categoria."' AND`estCon`='".$Estado."'");
                $Fcoef=mysqli_fetch_array($coef);
              }
          return $Fcoef[0];
      }
      
      # getters #

      function getId(){ return $this -> id; }
      function getNro(){ return $this -> nro; }
      function getNombre(){ return $this -> nombre; }
      function getCoef(){ return $this -> coef; }
      function getCubierta(){ return $this -> cubierta; }
      function getSemiCubierta(){ return $this -> semiCubierta; }
      function getBanoPri(){ return $this -> banoPri; }
      function getBanoSec(){ return $this -> banoSec; }
      function getCategoria(){ return $this -> categoria; }
      function getInsta(){ return $this -> total_insta; }

  }

  class unidadFuncional {
      function __construct($superficiUf,$ValUniFunc,$valorTierra,$coef,$valorTotal){
          $this -> formularios = [];
          $this -> ultForm = 0;

          $this -> valUni = $ValUniFunc;
          $this -> superficiUf = $superficiUf;
          $this -> valorTierra = $valorTierra;
          $this -> valorTotal = $valorTotal;
          $this -> coef = $coef;
      }
      function cargarFormulario($elem){
        $this -> formularios[$this -> ultForm] = $elem;
        $this -> ultForm++;
      }
      function getFormularios(){ return $this -> formularios; }
      function getFormulario($i){ return $this -> formularios[$i]; }
  }

  $formularios_cedulas = mysqli_query($conexion,"SELECT `codForm`, `nroFormulario`, `version` FROM `cedulaformularios` WHERE `idCedula`=$Cedula AND `tipoCedula` = $TipoDeCedula AND (`nroFormulario`=903 OR `nroFormulario`=904 OR `nroFormulario`=905 OR `nroFormulario`=906 OR `nroFormulario`=916)");
  $prueba = 0;

  $formularios = [];
  $i = 0;
  while ($fila = mysqli_fetch_row($formularios_cedulas)) {
    $formularios[$i] = new formulario($fila[0], $fila[1], $fila[2],$cons['anioimp'],$conexion,${"datos_basicos_".$fila[1]});
    $i++;
  }

?>
<!DOCTYPE html>
<html lang="es">
<head>

  <script>
    $(document).ready(function(){
      $("#addUnit").click(function(){
        var txt2 = $("<div></div>").html($("#unidadFuncional").html());   // Create with jQuery
        $("#accordion3").append(txt2);      // Append the new elements
      });

      $('#bt_add').click(function(){
        agregar();
      });
    });
    function agregar(){
      var fila= $("<tr></tr>").html($("#filaUF").html());
      $('#tabla').append(fila);
    }
  </script>

  <script type="text/javascript">
    var vpm = 0;
    var id_uf = 0;
    var totalGlobalUf = 0;
    var unidades_funcionales = [];
    
    class formulario{
      constructor(uf,cub,semiCub,coef, nombre){

          // identificadores
          this.uf = uf;
          this.id = uf.getUltForm(); // unidad funcional padre

          // valores basicos
          this.cubiertaBase = parseFloat(cub);
          this.semiCubiertaBase = parseFloat(semiCub);
          this.coefBase = parseFloat(coef);
          this.nombre = nombre;

          // valores del formulario

          this.cubierta = 0;
          this.cubierta_comun = 0;
          this.semi_cubierta = 0;
          this.semi_cubierta_comun = 0;
          this.propio = 0;
          this.comun = 0;
          this.complementarias = 0;
          this.formOriginal = 0;
      }
      // getters
      getCubiertaBase(){
        return this.cubiertaBase;
      }
      getSemiCubiertaBase(){
        return this.semiCubiertaBase;
      }
      getId(){
        return this.id;
      } 
      getCubierta(){
        return this.cubierta;
      }
      getCubiertaComun(){
        return this.cubierta_comun;
      }
      getSemiCubierta(){
        return this.semi_cubierta;
      }
      getSemiCubiertaComun(){
        return this.semi_cubierta_comun;
      }
      getPropio(){
        return this.propio;
      }
      getComun(){
        return this.comun;
      }
      getComplementarias(){
        return this.complementarias;
      }
      getFormOriginal(){
        return this.formOriginal;
      }
      getNombre(){
        return this.nombre;
      }

      // setters
      setBasicos(cub,semiCub,coef,insta, nombre){
        this.cubiertaBase = parseFloat(cub);
        this.semiCubiertaBase = parseFloat(semiCub);
        this.coefBase = parseFloat(coef);
        this.complementarias = parseFloat(insta);
        this.nombre = nombre;
        this.actualizar();
      }
      setCubierta(val){
        val = arregarNaN(val);
        // console.log(val);
        this.cubierta = parseFloat(val);
        this.actualizar();
      }
      setSemiCubierta(val){
        val = arregarNaN(val);
        this.semi_cubierta = parseFloat(val);
        this.actualizar();
      }
      setCubiertaComun(val){
        val = arregarNaN(val);
        this.cubierta_comun = parseFloat(val);
        this.actualizar();
      }
      setSemiCubiertaComun(val){
        val = arregarNaN(val);
        this.semi_cubierta_comun = parseFloat(val);
        this.actualizar();
      }
      setComplementarias(val){
        val = arregarNaN(val);
        this.complementarias = parseFloat(val);
        this.actualizar();
      }
      setFormOrignal(val){
        this.formOriginal = val;
      }
      setPropio(val){
        this.propio = parseFloat(val);
      }
      setComun(val){
        this.comun = parseFloat(val);
      }

      eliminar(){
        // console.log("eliminando");
        this.setBasicos(0,0,0,0,"borrado");
        this.setCubierta(0);
        this.setSemiCubierta(0);
        this.setCubiertaComun(0);
        this.setSemiCubiertaComun(0);
        this.setComplementarias(0);
        this.propio = 0;
        this.comun = 0;
      }
      actualizar(){
        this.propio = arregarNaN(
                                  (
                                    (
                                      (this.cubierta * this.cubiertaBase) 
                                      + 
                                      (this.semi_cubierta * this.semiCubiertaBase)
                                    ) 
                                    * 
                                    this.coefBase
                                  ) 
                                  + 
                                  this.complementarias
                                );
        // console.log(this.complementarias);
        this.comun = arregarNaN(((this.cubierta_comun * this.cubiertaBase) + (this.semi_cubierta_comun * this.semiCubiertaBase)) * this.coefBase);
      }
    }
    class unidadFuncional{
        constructor(id, nombre){
            this.id = id;
            this.formularios = [];
            this.ultForm = 0;
            this.superficie = 0;
            this.vuf = 0; // valor de la unidad funcional
            this.tierra = 0;
            this.coef = 0;  
            this.totalUF = 0;
            this.nombre = nombre;
            this.totalP = 0;
            this.totalC = 0;
        }

        // setters
        setSuperficie(val){
          val = arregarNaN(val);
          this.superficie = parseFloat(val);
          this.actualizarVT();
        }
        setTierra(val){
          val = arregarNaN(val);
          this.tierra = parseFloat(val);
        }
        setCoef(val){
          val = arregarNaN(val);
          this.coef = parseFloat(val);
        }
        setAll_edicion(sup, vuf, vtu, coef, tp, tc, total){
          this.superficie = sup;
          this.vuf = vuf;
          this.tierra = vtu;
          this.coef = coef;
          this.totalP = tp;
          this.totalC = tc;
          this.totalUF = total;
        } 
        setNombre(nombre){
          this.nombre = nombre;
        }
        // getters
        getId(){
          return this.id;
        }
        getSuperficie(){
          if (isNaN(this.superficie)) {
            return 0;
          }else{
            return this.superficie;
          }
        }
        getTierra(){
          return this.tierra;
        }
        getCoef(){
          return this.coef;
        }
        getUltForm(){
          return this.ultForm;
        }
        getVUF(){
          return this.vuf;
        }
        getFormulario(form){
          return this.formularios[form];
        }
        getFormularios(){
          return this.formularios;
        }
        getTotalUF(){
          return this.totalUF;
        }
        getNombre(){
          return this.nombre;
        }
        getTotalPropio(){
          return this.totalP;
        }
        getTotalComun(){
          return this.totalC;
        }
        // metodos
        
        agregar_formulario(form){
            this.formularios[this.ultForm] = form;
            this.ultForm++;
        }
        removeForm(form){
          console.log("borrando el formulario: "+form);
          var form2 = this.getFormulario(form);
          form2.eliminar();
        }
        actualizarTotalesPC(){
          var totalP = 0;
          var totalC = 0;
          for (let i = 0; i < this.formularios.length; i++) {
              totalP += this.formularios[i].getPropio();
              totalC += this.formularios[i].getComun();
          }
          this.totalP = totalP;
          this.totalC = totalC;

        }
        actualizarVUF(){
          var valVUF = 0;
          for (var i = this.formularios.length - 1; i >= 0; i--) {
             valVUF += this.formularios[i].getPropio() + this.formularios[i].getComun(); 
          }
          if (isNaN(valVUF)) {
            valVUF = 0;
          }
          this.vuf = valVUF;
          this.totalUF = this.vuf + this.tierra;
          actualizarTotalGlobalUf(this.totalUF);
        }
        actualizarVT(){
          this.tierra = this.superficie * vpm;
          this.totalUF = this.vuf + this.tierra;
          // console.log(vpm);
          actualizarTotalGlobalUf(this.totalUF);
        }
        actualizarCoef(totalGlobalUf){
          this.coef = this.totalUF / totalGlobalUf;
        }
    }

    window.onload=function(){
      <?php
        if ($abierto_como == "edicion") {
          // echo "actvpm(".$cons_form['SuperficieTotalUF'].");";
          echo "vpm = ".$tierraAct/$cons_form['SuperficieTotalUF'].";";
          $cons_ufs = mysqli_query($conexion,"SELECT * FROM `f908unidadesfuncionales` WHERE `idForm908`= $idForm");
          // echo "console.log('SELECT `idUf`, `Nombre`, `idForm908`, `Superficie`, `valorUf`, `valorTierraUf`, `Coeficiente`, `totalPropio`, `totalComun`, `Total` FROM `f908unidadesfuncionales` WHERE `idForm908`= $idForm');";
          $num_uf = 0;
          while ($fila = mysqli_fetch_row($cons_ufs)) {
            $aux = [];
            for ($i=0; $i < sizeof($fila); $i++) { 
               if($fila[$i] == 0){
                 $fila[$i] = '';
               }
            }
            echo "agregar_uf_edicion('".$fila[1]."','".$fila[3]."','".$fila[4]."','".$fila[5]."','".$fila[6]."','".$fila[7]."','".$fila[8]."','".$fila[9]."');";
            
            $cons_forms = mysqli_query($conexion,"SELECT * FROM `f908formulariosuf` WHERE `idUf`=".$fila[0]);
            $num_form = 0;
            while($row = mysqli_fetch_row($cons_forms)){
              $aux = "agregar_form_edicion('".$num_uf."','".$row[3]."','".$row[4]."','".$row[5]."','".$row[6]."','".$row[7]."','".$row[8]."','".$row[9]."','".$row[10]."');";
              // echo "console.log(".$aux.")";
              echo $aux;
              $num_form++;
            }
            // echo "console.log(id_uf);";
            echo "unidades_funcionales[id_uf-1].actualizarVUF();";
            echo "unidades_funcionales[id_uf-1].actualizarTotalesPC();";
            $num_uf++;
          }
        }
      ?>
    }
    function actvpm(val){
      vpm = conv(document.getElementById("valorTierraTotal").value) / conv(val);
      if (isNaN(vpm)) {
        vpm = 0;  
        console.log("ES NAN");
      }
      for (let i = 0; i < unidades_funcionales.length; i++) {
        // const element = array[i];
        // console.log("hola");
        var uf = unidades_funcionales[i];
        uf.actualizarVT();
        console.log(uf.getSuperficie());
        document.getElementById("valorTierra"+i).value = mostrar(round(uf.getTierra())); 
        document.getElementById("valorTotalUf"+i).value = mostrar(round(uf.getTotalUF()));
        // actualizarSupUf(i,uf.getSuperficie());


        
      }
    }
    function round(num){
      return Math.round(num * 100) / 100;
    }
   

    function actualizarTotalGlobalUf(val){
      totalGlobalUf = 0;
      for (var i = unidades_funcionales.length - 1; i >= 0; i--) {
        totalGlobalUf += unidades_funcionales[i].getTotalUF();
      }
      if (totalGlobalUf <= 0) {
        totalGlobalUf = 1;
      }
      for (var i = unidades_funcionales.length - 1; i >= 0; i--) {
        unidades_funcionales[i].actualizarCoef(totalGlobalUf);
        document.getElementById("coefUf"+i).value = mostrar(unidades_funcionales[i].getCoef()); 
      }
    }
    function actualizarBasicos(formulario,id_uf,id_form){
      // console.log(formulario);
      var coef = arregarNaN(conv(document.getElementById("coef"+formulario).value));
      var cub = arregarNaN(conv(document.getElementById("cubierta"+formulario).value));
      var semiCub = arregarNaN(conv(document.getElementById("semiCubierta"+formulario).value));
      var nombre = document.getElementById("nombre"+formulario).value;
      var insta = arregarNaN(conv(document.getElementById("insta_uf"+id_uf+"_form"+id_form).value));
      
      var form_viejo = unidades_funcionales[id_uf].getFormulario(id_form).getFormOriginal();
      var id_form_viejo = unidades_funcionales[id_uf].getFormulario(id_form).getId();
      unidades_funcionales[id_uf].getFormulario(id_form).setBasicos(cub,semiCub,coef,insta, nombre);
      unidades_funcionales[id_uf].getFormulario(id_form).setFormOrignal(formulario);
      actualizar_insta_total(formulario,id_uf,id_form);
      actualizar_insta_total(form_viejo,id_uf,id_form);
      // document.getElementById("insta_uf"+id_uf+"_form"+id_form).value = mostrar(unidades_funcionales[id_uf].getFormulario(id_form).getComplementarias());
      document.getElementById("propio_uf"+id_uf+"_form"+id_form).value = mostrar(round(unidades_funcionales[id_uf].getFormulario(id_form).getPropio()));
      document.getElementById("comun_uf"+id_uf+"_form"+id_form).value = mostrar(round(unidades_funcionales[id_uf].getFormulario(id_form).getComun()));

      unidades_funcionales[id_uf].actualizarVUF();
      unidades_funcionales[id_uf].actualizarTotalesPC();


      document.getElementById("valorUniFunc"+id_uf).value = mostrar(round(unidades_funcionales[id_uf].getVUF()));
      document.getElementById("valorTotalUf"+id_uf).value = mostrar(round(unidades_funcionales[id_uf].getTotalUF()));

      document.getElementById("TotalComunfUf"+id_uf).value = mostrar(round(unidades_funcionales[id_uf].getTotalComun()));
      document.getElementById("TotalPropiofUf"+id_uf).value = mostrar(round(unidades_funcionales[id_uf].getTotalPropio()));

    }
    function actualizar_valores(campo,id_form,id_uf,valor){

      var uf = unidades_funcionales[id_uf];
      var form = uf.getFormulario(id_form);
      valor = conv(valor)
      if (valor == '' || isNaN(valor)) { valor = 0;}
      switch(campo){
        case 1:
          form.setCubierta(valor);
        break;
        case 2:
          form.setSemiCubierta(valor);
        break;
        case 3:
          form.setCubiertaComun(valor);
        break;
        case 4:
          form.setSemiCubiertaComun(valor);
        break;
        case 5:
          form.setComplementarias(valor);
          actualizar_insta_total(form.getFormOriginal(),id_uf,id_form);
        break;
      }
      document.getElementById("propio_uf"+id_uf+"_form"+id_form).value = mostrar(round(form.getPropio()));
      document.getElementById("comun_uf"+id_uf+"_form"+id_form).value = mostrar(round(form.getComun()));

      // console.log(form.getPropio());


      uf.actualizarVUF();
      uf.actualizarTotalesPC();

      document.getElementById("TotalComunfUf"+id_uf).value = mostrar(round(uf.getTotalComun()));
      document.getElementById("TotalPropiofUf"+id_uf).value = mostrar(round(uf.getTotalPropio()));

      document.getElementById("valorUniFunc"+id_uf).value = mostrar(round(uf.getVUF()));
      document.getElementById("valorTotalUf"+id_uf).value = mostrar(round(uf.getTotalUF()));

    }

    function actualizarSupUf(id_uf, sup){
      var val = conv(sup);
      if (isNaN(val) || val == '') {
        val = 0;
      }
      // console.log(val);
      unidades_funcionales[id_uf].setSuperficie(arregarNaN(val));
      document.getElementById("valorTierra"+id_uf).value = mostrar(round(unidades_funcionales[id_uf].getTierra())); 
      document.getElementById("valorTotalUf"+id_uf).value = mostrar(round(unidades_funcionales[id_uf].getTotalUF()));

      // console.log(unidades_funcionales[id_uf].getSuperficie());
      // informar_uf(id_uf);

      // var totalsup = 0;
      // for (var i = unidades_funcionales.length - 1; i >= 0; i--) {
      //   totalsup += unidades_funcionales[i].getSuperficie();
      // }
      // document.getElementById("superficieTotalUF").value = totalsup;

      // for (var i = unidades_funcionales.length - 1; i >= 0; i--) {
      //   // unidades_funcionales[i].actualizarVT();
      //   document.getElementById("valorTierra"+i).value = mostrar(round(unidades_funcionales[i].getTierra())); 
      //   document.getElementById("valorTotalUf"+i).value = mostrar(round(unidades_funcionales[i].getTotalUF()));
      // }
    }
    function agregar_form_edicion(id_uf, formbase, cubierta, scubierta, cubiertac, scubiertac, propio, comun, complementarias){
      var uf = unidades_funcionales[id_uf];
      var cub = arregarNaN(conv(document.getElementById("cubierta"+formbase).value));
      var semiCub = arregarNaN(conv(document.getElementById("semiCubierta"+formbase).value));
      var coef = arregarNaN(conv(document.getElementById("coef"+formbase).value));
      var nombre = document.getElementById("nombre"+formbase).value;
      var form = new formulario(uf,cub,semiCub,coef, nombre);

      var cub_aux = cubierta;
      var scub_aux = scubierta;
      var ccub_aux = cubiertac;
      var sccub_aux = scubiertac;

      // form.actualizar();

      form.setFormOrignal(formbase);
      form.setCubierta(cubierta);
      form.setSemiCubierta(scubierta);
      form.setCubiertaComun(cubiertac);
      form.setSemiCubiertaComun(scubiertac);
      form.setComplementarias(complementarias);
      // form.setPropio(propio);
      // form.setComun(comun);

      cubierta = mostrar(cubierta);
      scubierta= mostrar(scubierta);
      cubiertac = mostrar(cubiertac);
      scubiertac= mostrar(scubiertac);
      propio= mostrar(propio);
      comun= mostrar(comun);
      complementarias= mostrar(complementarias);

      


      var table_body = document.getElementById("tabla"+uf.getId());
      
      var tr = document.createElement("tr");
      
      tr.setAttribute("id","uf"+uf.getId()+"form"+form.getId());
        
        var td = document.createElement("td");
          <?php 
            $Nom = "";
            for ($i=0; $i < sizeof($formularios); $i++) { 
              $Nom .= "'".$formularios[$i] -> getNombre()."',";

            }
            echo "nombres = [".$Nom."];";
            $Nom = substr($Nom,0, strlen($Nom)-1);
          ?>

          var selec = document.createElement("select");
          // selec.onchange='actualizarBasicos(this.value,uf.getId(),form.getId())';
          selec.setAttribute("onchange", "actualizarBasicos(this.value,"+uf.getId()+","+form.getId()+")");
          selec.classList.add("form-control");
          selec.classList.add("cda"+form.getId()+'_'+uf.getId());
          selec.setAttribute("id", 'base_uf'+uf.getId()+'_form'+form.getId() ); 
          for (let index = 0; index < nombres.length; index++) {
              var op = document.createElement("option");
              if (index == formbase) {
                op.setAttribute("selected", true);    
              }
              op.value = index;
              op.innerHTML = nombres[index];
              selec.appendChild(op); 
            
          }
          td.appendChild(selec);

        tr.appendChild(td);
        

        // segundo td
        var td = document.createElement("td");
        td.innerHTML = "<input type='text' value="+cubierta+" onkeyup='actualizar_valores(1,"+form.getId()+","+uf.getId()+",this.value)' class='cda"+form.getId()+"_"+uf.getId()+" form-control'>";
        tr.appendChild(td);

        // tercer td
        var td = document.createElement("td");
        td.innerHTML = "<input type='text' value="+scubierta+" onkeyup='actualizar_valores(2,"+form.getId()+","+uf.getId()+",this.value)' class='cda"+form.getId()+"_"+uf.getId()+" form-control'>";
        tr.appendChild(td);

        // cuerto td
        var td = document.createElement("td");
        td.innerHTML = "<input type='text' value="+cubiertac+" onkeyup='actualizar_valores(3,"+form.getId()+","+uf.getId()+",this.value)' class='cda"+form.getId()+"_"+uf.getId()+" form-control'>";
        tr.appendChild(td);

        // quinto td
        var td = document.createElement("td");
        td.innerHTML = "<input type='text' value="+scubiertac+" onkeyup='actualizar_valores(4,"+form.getId()+","+uf.getId()+",this.value)' class='cda"+form.getId()+"_"+uf.getId()+" form-control'>";
        tr.appendChild(td);

        // sexto td
        var td = document.createElement("td");
        td.innerHTML = "<input type='text' value="+propio+" id='propio_uf"+uf.getId()+"_form"+form.getId()+"' class='cda"+form.getId()+"_"+uf.getId()+" form-control' disabled>";
        tr.appendChild(td);

        // septimo td
        var td = document.createElement("td");
        td.innerHTML = "<input type='text' value="+comun+" id='comun_uf"+uf.getId()+"_form"+form.getId()+"' class='cda"+form.getId()+"_"+uf.getId()+" form-control' disabled>";
        tr.appendChild(td);

        // octavo td
        var td = document.createElement("td");
        td.innerHTML = "<input type='text' value="+complementarias+" id='insta_uf"+uf.getId()+"_form"+form.getId()+"' onkeyup='actualizar_valores(5,"+form.getId()+","+uf.getId()+",this.value)' class='cda"+form.getId()+"_"+uf.getId()+" form-control'>";
        tr.appendChild(td);

        // noveno td
        var td = document.createElement("td");
        td.innerHTML = "<button type='button' class='btn btn-danger'  onclick = 'borrar_fila("+uf.getId()+","+form.getId()+")'>Borrar</button>";
        tr.appendChild(td);

        tr.appendChild(td);
      
      table_body.appendChild(tr);

      uf.agregar_formulario(form);

      // console.log(form.getId());
      actualizar_insta_total(formbase,id_uf,form.getId());
      
      // console.log("cubierta" + cub_aux);

      // actualizar_valores(1,form.getId(),uf.getId(),conv(cubierta));
      // actualizar_valores(2,form.getId(),uf.getId(),conv(scub_aux));
      // actualizar_valores(3,form.getId(),uf.getId(),conv(ccub_aux));
      // actualizar_valores(4,form.getId(),uf.getId(),conv(sccub_aux));

      // console.log("cubierta: "+form.getCubierta());


    }
    function agregar_form(id_uf){

      var cub = arregarNaN(conv(document.getElementById("cubierta0").value));
      var semiCub = arregarNaN(conv(document.getElementById("semiCubierta0").value));
      var coef = arregarNaN(conv(document.getElementById("coef0").value));
      var nombre = document.getElementById("nombre0").value;
      // var comp = arregarNaN(conv(document.getElementById("totalInsta0").value));
      


      var uf = unidades_funcionales[id_uf];

      var form = new formulario(uf,cub,semiCub,coef, nombre);
      
      var table_body = document.getElementById("tabla"+uf.getId());
      
      var tr = document.createElement("tr");
      
      tr.setAttribute("id","uf"+uf.getId()+"form"+form.getId());
        
        var td = document.createElement("td");
          <?php 
            $Nom = "";
            for ($i=0; $i < sizeof($formularios); $i++) { 
              $Nom .= "'".$formularios[$i] -> getNombre()."',";

            }
            echo "nombres = [".$Nom."];";
            $Nom = substr($Nom,0, strlen($Nom)-1);
          ?>

          var selec = document.createElement("select");
          // selec.onchange='actualizarBasicos(this.value,uf.getId(),form.getId())';
          selec.setAttribute("onchange", "actualizarBasicos(this.value,"+uf.getId()+","+form.getId()+")");
          selec.classList.add("form-control");
          selec.classList.add("cda"+form.getId()+'_'+uf.getId());
          selec.setAttribute("id", 'base_uf'+uf.getId()+'_form'+form.getId() ); 
          for (let index = 0; index < nombres.length; index++) {
              var op = document.createElement("option");
              op.value = index;
              op.innerHTML = nombres[index];
              selec.appendChild(op); 
            
          }
          td.appendChild(selec);

        tr.appendChild(td);
        

        // segundo td
        var td = document.createElement("td");
        td.innerHTML = "<input type='text' onkeyup='actualizar_valores(1,"+form.getId()+","+uf.getId()+",this.value)' class='cda"+form.getId()+"_"+uf.getId()+" form-control'>";
        tr.appendChild(td);

        // tercer td
        var td = document.createElement("td");
        td.innerHTML = "<input type='text' onkeyup='actualizar_valores(2,"+form.getId()+","+uf.getId()+",this.value)' class='cda"+form.getId()+"_"+uf.getId()+" form-control'>";
        tr.appendChild(td);

        // cuerto td
        var td = document.createElement("td");
        td.innerHTML = "<input type='text' onkeyup='actualizar_valores(3,"+form.getId()+","+uf.getId()+",this.value)' class='cda"+form.getId()+"_"+uf.getId()+" form-control'>";
        tr.appendChild(td);

        // quinto td
        var td = document.createElement("td");
        td.innerHTML = "<input type='text' onkeyup='actualizar_valores(4,"+form.getId()+","+uf.getId()+",this.value)' class='cda"+form.getId()+"_"+uf.getId()+" form-control'>";
        tr.appendChild(td);

        // sexto td
        var td = document.createElement("td");
        td.innerHTML = "<input type='text' id='propio_uf"+uf.getId()+"_form"+form.getId()+"' class='cda"+form.getId()+"_"+uf.getId()+" form-control' disabled>";
        tr.appendChild(td);

        // septimo td
        var td = document.createElement("td");
        td.innerHTML = "<input type='text' id='comun_uf"+uf.getId()+"_form"+form.getId()+"' class='cda"+form.getId()+"_"+uf.getId()+" form-control' disabled>";
        tr.appendChild(td);

        // octavo td
        var td = document.createElement("td");
        td.innerHTML = "<input type='text' id='insta_uf"+uf.getId()+"_form"+form.getId()+"' onkeyup='actualizar_valores(5,"+form.getId()+","+uf.getId()+",this.value)' class='cda"+form.getId()+"_"+uf.getId()+" form-control'>";
        tr.appendChild(td);

        // noveno td
        var td = document.createElement("td");
        td.innerHTML = "<button type='button' class='btn btn-danger'  onclick = 'borrar_fila("+uf.getId()+","+form.getId()+")'>Borrar</button>";
        tr.appendChild(td);

        tr.appendChild(td);
      
      table_body.appendChild(tr);

      uf.agregar_formulario(form);

    }
    function agregar_uf_edicion(nombre, sup, vuf, vtu, coef, tp, tc, total){
        var uf = new unidadFuncional(id_uf, nombre);
        // uf.setAll_edicion(sup,vuf,vtu,coef,tp,tc,total);
        uf.setNombre(nombre);
        // console.log(nombre);
        uf.setSuperficie(sup);
        sup= mostrar(sup);
        vuf= mostrar(vuf);
        vtu= mostrar(vtu);
        coef= mostrar(coef);
        tp= mostrar(tp);
        tc= mostrar(tc);
        total= mostrar(total);
        unidades_funcionales[id_uf] = uf;
        var padre = document.getElementById("unidadFuncional");
        var datos = document.createElement("div");
        datos.classList.add("accordion-group");
        datos.innerHTML = '<div class="accordion-heading area">'+
                        '<a class="accordion-toggle" data-toggle="collapse" href="#area1">Datos de Unidad Funcional '+nombre+'</a>'+
                        '</div><div style = "padding : 15px;">'+
                        '<button class="btn btn-info" onclick="agregar_form('+id_uf+')"> Agregar Formulario  </button><br><br>'+
                        '<table id="tabla'+id_uf+'" class="table table-bordered responsive-table">'+
                            '<thead>'+
                              '<tr>'+
                                '<th class="col-sm-1" rowspan="2">Formulario</th>'+
                                '<th colspan="4"><center>Superficies</center></th>'+
                                '<th colspan="3"><center>Valuaciones Parciales</center></th>'+
                                '<th class="col-sm-1" rowspan="2">Acciones</th>'+
                              '</tr>'+
                              '<tr>'+
                                '<th class="col-sm-1">Cubierta</th>'+
                                '<th class="col-sm-1">SemiCubierta</th>'+
                                '<th class="col-sm-1">Cubierta Comun</th>'+
                                '<th class="col-sm-1">Semicub. Comun</th>'+
                                '<th class="col-sm-1">Propio</th>'+
                                '<th class="col-sm-1">Comun</th>'+
                                '<th class="col-sm-1">Inst. Compl.</th>'+
                              '</tr>'+
                            '</thead>'+
                            '<tbody id="cuerpoTabla">'+
                            '</tbody>'+
                            '</table>'+
                            '<div class="row" style = "margin-left: 5px">'+
                              '<div class="col-lg-3 text-left">'+
                                '<label>Superficie de la UF</label>'+
                              '</div>'+
                              '<div class="col-lg-4 text-left">'+
                                '<input class="form-control valsuf'+id_uf+'" required type="text" id="superficiUf'+id_uf+'" onkeyup="actualizarSupUf('+id_uf+',this.value)" name="superficiUf'+id_uf+'" value = "'+sup+'">'+
                             ' </div>'+
                            '</div>'+
                            '<div class="row" style = "margin-left: 5px">'+
                              '<div class="col-lg-3 text-left">'+
                                '<label>Valor Unidad Funcional</label>'+
                              '</div>'+
                              '<div class="col-lg-4 text-left">'+
                                '<input class="form-control valsuf'+id_uf+'" type="text" id="valorUniFunc'+id_uf+'" name="valorUniFunc'+id_uf+'" value = "'+vuf+'" disabled>'+
                              '</div>'+
                            '</div>'+
                            '<div class="row" style = "margin-left: 5px">'+
                              '<div class="col-lg-3 text-left">'+
                                '<label>Valor Tierra de la UF</label>'+
                              '</div>'+
                              '<div class="col-lg-4 text-left">'+
                                '<input class="form-control valsuf'+id_uf+'" type="text" id="valorTierra'+id_uf+'"  name="valorTierra'+id_uf+'" value = "'+vtu+'" disabled>'+
                              '</div>'+
                            '</div>'+
                           '<div class="row" style = "margin-left: 5px">'+
                              '<div class="col-lg-3 text-left">'+
                                '<label>Coeficiente</label>'+
                              '</div>'+
                              '<div class="col-lg-4 text-left">'+
                                '<input class="form-control valsuf'+id_uf+'" type="text" id="coefUf'+id_uf+'" name="coefUf'+id_uf+'" value = "'+coef+'" disabled>'+
                              '</div>'+
                           ' </div>'+
                           '<div class="row" style = "margin-left: 5px">'+
                              '<div class="col-lg-3 text-left">'+
                                '<label>Total propio</label>'+
                              '</div>'+
                              '<div class="col-lg-4 text-left">'+
                                '<input class="form-control valsuf'+id_uf+'" type="text" id="TotalPropiofUf'+id_uf+'" name="coefUf'+id_uf+'" value = "'+tp+'" disabled>'+
                              '</div>'+
                           ' </div>'+
                           '<div class="row" style = "margin-left: 5px">'+
                              '<div class="col-lg-3 text-left">'+
                                '<label>Total comun</label>'+
                              '</div>'+
                              '<div class="col-lg-4 text-left">'+
                                '<input class="form-control valsuf'+id_uf+'" type="text" id="TotalComunfUf'+id_uf+'" name="coefUf'+id_uf+'" value = "'+tc+'" disabled>'+
                              '</div>'+
                           ' </div>'+
                            '<div class="row" style = "margin-left: 5px">'+
                              '<div class="col-lg-3 text-left">'+
                                '<label>Valor Total de la UF</label>'+
                              '</div>'+
                              '<div class="col-lg-4 text-left">'+
                                '<input class="form-control valsuf'+id_uf+'" type="text" id="valorTotalUf'+id_uf+'" name="valorTotalUf'+id_uf+'" value = "'+total+'" disabled>'+
                              '</div>'+
                           ' </div>'+
                           '<input style="display:none" class="form-control valsuf'+id_uf+'" type="text" id="nombreUf'+id_uf+'" value="'+nombre+'">'+
                           '</div>';


        padre.appendChild(datos);
        id_uf++;

    }
    function agregar_uf(){
        var nombre = prompt("Ingrese el nombre de la unidad funcional");
        var uf = new unidadFuncional(id_uf, nombre);
        unidades_funcionales[id_uf] = uf;
        var padre = document.getElementById("unidadFuncional");

        var datos = document.createElement("div");
        datos.classList.add("accordion-group");
        datos.innerHTML = '<div class="accordion-heading area">'+
                        '<a class="accordion-toggle" data-toggle="collapse" href="#area1">Datos de Unidad Funcional '+nombre+'</a>'+
                        '</div><div style = "padding : 15px;">'+
                        '<button type="button" class="btn btn-info" onclick="agregar_form('+id_uf+')"> Agregar Formulario  </button><br><br>'+
                        '<table id="tabla'+id_uf+'" class="table table-bordered responsive-table">'+
                            '<thead>'+
                              '<tr>'+
                                '<th class="col-sm-1" rowspan="2">Formulario</th>'+
                                '<th colspan="4"><center>Superficies</center></th>'+
                                '<th colspan="3"><center>Valuaciones Parciales</center></th>'+
                                '<th class="col-sm-1" rowspan="2">Acciones</th>'+
                              '</tr>'+
                              '<tr>'+
                                '<th class="col-sm-1">Cubierta</th>'+
                                '<th class="col-sm-1">SemiCubierta</th>'+
                                '<th class="col-sm-1">Cubierta Comun</th>'+
                                '<th class="col-sm-1">Semicub. Comun</th>'+
                                '<th class="col-sm-1">Propio</th>'+
                                '<th class="col-sm-1">Comun</th>'+
                                '<th class="col-sm-1">Inst. Compl.</th>'+
                              '</tr>'+
                            '</thead>'+
                            '<tbody id="cuerpoTabla">'+
                            '</tbody>'+
                            '</table>'+
                            '<div class="row" style = "margin-left: 5px">'+
                              '<div class="col-lg-3 text-left">'+
                                '<label>Superficie de la UF</label>'+
                              '</div>'+
                              '<div class="col-lg-4 text-left">'+
                                '<input class="form-control valsuf'+id_uf+'" type="text" id="superficiUf'+id_uf+'" onkeyup="actualizarSupUf('+id_uf+',this.value)" name="superficiUf'+id_uf+'">'+
                             ' </div>'+
                            '</div>'+
                            '<div class="row" style = "margin-left: 5px">'+
                              '<div class="col-lg-3 text-left">'+
                                '<label>Valor Unidad Funcional</label>'+
                              '</div>'+
                              '<div class="col-lg-4 text-left">'+
                                '<input class="form-control valsuf'+id_uf+'" type="text" id="valorUniFunc'+id_uf+'" name="valorUniFunc'+id_uf+'" disabled>'+
                              '</div>'+
                            '</div>'+
                            '<div class="row" style = "margin-left: 5px">'+
                              '<div class="col-lg-3 text-left">'+
                                '<label>Valor Tierra de la UF</label>'+
                              '</div>'+
                              '<div class="col-lg-4 text-left">'+
                                '<input class="form-control valsuf'+id_uf+'" type="text" id="valorTierra'+id_uf+'"  name="valorTierra'+id_uf+'" disabled>'+
                              '</div>'+
                            '</div>'+
                           '<div class="row" style = "margin-left: 5px">'+
                              '<div class="col-lg-3 text-left">'+
                                '<label>Coeficiente</label>'+
                              '</div>'+
                              '<div class="col-lg-4 text-left">'+
                                '<input class="form-control valsuf'+id_uf+'" type="text" id="coefUf'+id_uf+'" name="coefUf'+id_uf+'" disabled>'+
                              '</div>'+
                           ' </div>'+
                           '<div class="row" style = "margin-left: 5px">'+
                              '<div class="col-lg-3 text-left">'+
                                '<label>Total propio</label>'+
                              '</div>'+
                              '<div class="col-lg-4 text-left">'+
                                '<input class="form-control valsuf'+id_uf+'" type="text" id="TotalPropiofUf'+id_uf+'" name="coefUf'+id_uf+'" disabled>'+
                              '</div>'+
                           ' </div>'+
                           '<div class="row" style = "margin-left: 5px">'+
                              '<div class="col-lg-3 text-left">'+
                                '<label>Total comun</label>'+
                              '</div>'+
                              '<div class="col-lg-4 text-left">'+
                                '<input class="form-control valsuf'+id_uf+'" type="text" id="TotalComunfUf'+id_uf+'" name="coefUf'+id_uf+'" disabled>'+
                              '</div>'+
                           ' </div>'+
                            '<div class="row" style = "margin-left: 5px">'+
                              '<div class="col-lg-3 text-left">'+
                                '<label>Valor Total de la UF</label>'+
                              '</div>'+
                              '<div class="col-lg-4 text-left">'+
                                '<input class="form-control valsuf'+id_uf+'" type="text" id="valorTotalUf'+id_uf+'" name="valorTotalUf'+id_uf+'" disabled>'+
                              '</div>'+
                           ' </div>'+
                           '<input style="display:none" class="form-control valsuf'+id_uf+'" type="text" id="nombreUf'+id_uf+'" value="'+nombre+'">'+
                           '</div>';


        padre.appendChild(datos);
        // agregar_form(id_uf);
        id_uf++;

    }

    function arregarNaN(elem){
      if (isNaN(elem)) {
        return 0;
      }else{
        return elem;
      }
    }

    function borrar_fila(id_uf,form){
      $("#uf" + id_uf + "form" + form).remove();

      unidades_funcionales[id_uf].removeForm(form);
      unidades_funcionales[id_uf].actualizarVUF();
      unidades_funcionales[id_uf].actualizarTotalesPC();
      document.getElementById("TotalComunfUf"+id_uf).value = mostrar(unidades_funcionales[id_uf].getTotalComun());
      document.getElementById("TotalPropiofUf"+id_uf).value = mostrar(unidades_funcionales[id_uf].getTotalPropio());

      document.getElementById("valorUniFunc"+id_uf).value = mostrar(round(unidades_funcionales[id_uf].getVUF()));
      document.getElementById("valorTotalUf"+id_uf).value = mostrar(round(unidades_funcionales[id_uf].getTotalUF()));

    }
    
    function finalizar(){
      var div = document.getElementById("aux");
      var planonro = document.createElement("input");
      planonro.value = document.getElementById("planoNro").value;
      planonro.setAttribute("name", "plano");
      planonro.setAttribute("id", "plano");

      var suptotal = document.createElement("input");
      suptotal.value = conv(document.getElementById("superficieTotalUF").value);
      suptotal.setAttribute("id", "suptotaluf");
      suptotal.setAttribute("name", "suptotaluf");

      div.appendChild(planonro);
      div.appendChild(suptotal);  

      for (var i = 0; i < id_uf; i++) {
        // console.log(i)
        var unidad_funcional = unidades_funcionales[i];
        var table = document.createElement("table");
        table.setAttribute("id", "ta"+i);
        table.setAttribute("name", "ta"+i);
        
        var tr = document.createElement("tr"); 
        
        var valsuf = document.getElementsByClassName("valsuf"+i);
        // console.log(valsuf.length);
        for (let index = 0; index < valsuf.length; index++) {
            var td = document.createElement("td");
            var celda = document.createElement("input");
            if(valsuf[index].value == ''){
              celda.value = 0;
            }else{
              if(index == 7){
                celda.value = valsuf[index].value;                
              }else{
                celda.value = conv(valsuf[index].value);
              }
            }
            celda.setAttribute("id", "vals_uf"+i+"nro"+index);
            celda.setAttribute("name", "vals_uf"+i+"nro"+index);
            td.appendChild(celda);
            tr.appendChild(td);
        }
        table.appendChild(tr);

        var tabla_formularios = document.getElementById("tabla"+i);
        for (var j = 2; j < tabla_formularios.rows.length; j++) {
          var nom = unidad_funcional.getFormulario(j-2).getNombre();
          console.log(nom);
          if(nom != "borrado"){
            var tr = document.createElement("tr");
            tr.setAttribute("id", "ta"+i+"tr"+parseInt(j - 2));
            tr.setAttribute("name", "ta"+i+"tr"+parseInt(j - 2));
            var fila = tabla_formularios.rows[j]; 
            var celdas = document.getElementsByClassName("cda"+parseInt(j-2)+"_"+i);
            for (var k = 0 ; k < fila.cells.length - 1; k++) {
              // console.log(fila.cells[k].innerHTML);
              var td = document.createElement("td");
              var input = document.createElement("input");
              // input.setAttribute("value", document.getElementById("uf"+i+"_form"+parseInt(j-2)+"_celda"+k).value);
              var aux = conv(celdas[k].value);
              if (isNaN(aux)) {
                aux = 0;
              }
              input.setAttribute("value", aux);
              // console.log("uf"+i+"_form"+j+"_celda"+k);
              input.setAttribute("id", "ta"+i+"tr"+parseInt(j - 2)+"in"+k);
              input.setAttribute("name", "ta"+i+"tr"+parseInt(j - 2)+"in"+k);
              input.style.width = "50px";
              td.appendChild(input);
              tr.appendChild(td);
            }
          }
          table.appendChild(tr);
        }
        div.appendChild(table);
        div.style.display = 'none';
      }

    }
    function finalizar_edicion(){
      var div = document.getElementById("aux");
      var planonro = document.createElement("input");
      planonro.value = document.getElementById("planoNro").value;
      planonro.setAttribute("name", "plano");
      planonro.setAttribute("id", "plano");

      var suptotal = document.createElement("input");
      suptotal.value = conv(document.getElementById("superficieTotalUF").value);
      suptotal.setAttribute("id", "suptotaluf");
      suptotal.setAttribute("name", "suptotaluf");

      var cant_uf = document.createElement("input");
      cant_uf.value = unidades_funcionales.length;
      cant_uf.setAttribute("name", "cant_uf");

      div.appendChild(planonro);
      div.appendChild(suptotal);
      div.appendChild(cant_uf);
      div.appendChild(document.createElement("br"));
      // div.innerHTML += "<br>";
      for (let i = 0; i < unidades_funcionales.length; i++) {
        uf_actual = unidades_funcionales[i];
        var nombre = document.createElement("input");
        nombre.setAttribute("name", "nombre_uf"+i);
        nombre.value = uf_actual.getNombre();
        var sup = document.createElement("input");
        sup.setAttribute("name", "sup_uf"+i);
        sup.value = arregarNaN(parseFloat(uf_actual.getSuperficie()));
        var vuf = document.createElement("input");
        vuf.setAttribute("name", "vuf_uf"+i);
        vuf.value = arregarNaN(parseFloat(uf_actual.getVUF()));
        var vtu = document.createElement("input");
        vtu.setAttribute("name", "vtu_uf"+i);
        vtu.value = arregarNaN(parseFloat(uf_actual.getTierra()));
        var coef = document.createElement("input");
        coef.setAttribute("name", "coef_uf"+i);
        coef.value = arregarNaN(parseFloat(uf_actual.getCoef()));
        var tp = document.createElement("input");
        tp.setAttribute("name", "tp_uf"+i);
        tp.value = arregarNaN(parseFloat(uf_actual.getTotalPropio()));
        var tc = document.createElement("input");
        tc.setAttribute("name", "tc_uf"+i);
        tc.value = arregarNaN(parseFloat(uf_actual.getTotalComun()));
        var total = document.createElement("input");
        total.setAttribute("name", "total_uf"+i);
        total.value = arregarNaN(parseFloat(uf_actual.getTotalUF()));
        var cant_form = document.createElement("input");
        cant_form.value = uf_actual.getFormularios().length;
        cant_form.setAttribute("name", "cant_form_uf"+i);
        div.appendChild(nombre);
        div.appendChild(sup);
        div.appendChild(vuf);
        div.appendChild(vtu);
        div.appendChild(coef);
        div.appendChild(tp);
        div.appendChild(tc);
        div.appendChild(total);
        div.appendChild(cant_form);
        div.appendChild(document.createElement("br"));
        for (let j = 0; j < uf_actual.getFormularios().length; j++) {
          form_actual = uf_actual.getFormulario(j);
          var formbase = document.createElement("input");
          formbase.setAttribute("name","formbase_uf"+i+"form_"+j);
          formbase.value = form_actual.getFormOriginal();
          var cub = document.createElement("input");
          cub.setAttribute("name","cub_uf"+i+"form_"+j);
          cub.value = form_actual.getCubierta();
          var scub = document.createElement("input");
          scub.setAttribute("name","scub_uf"+i+"form_"+j);
          scub.value = form_actual.getSemiCubierta();
          var cubc = document.createElement("input");
          cubc.setAttribute("name","cubc_uf"+i+"form_"+j);
          cubc.value = form_actual.getCubiertaComun();
          var scubc = document.createElement("input");
          scubc.setAttribute("name","scubc_uf"+i+"form_"+j);
          scubc.value = form_actual.getSemiCubiertaComun();
          var propio = document.createElement("input");
          propio.setAttribute("name","propio_uf"+i+"form_"+j);
          propio.value = form_actual.getPropio();
          var comun = document.createElement("input");
          comun.setAttribute("name","comun_uf"+i+"form_"+j);
          comun.value = form_actual.getComun();
          var comp = document.createElement("input");
          comp.setAttribute("name","comp_uf"+i+"form_"+j);
          comp.value = form_actual.getComplementarias();

          div.appendChild(formbase);
          div.appendChild(cub);
          div.appendChild(scub);
          div.appendChild(cubc);
          div.appendChild(scubc);
          div.appendChild(propio);
          div.appendChild(comun);
          div.appendChild(comp);
          div.appendChild(document.createElement("br"));
        }
        
      }
      div.style.display = 'none';
    }
    function conv(num){
      var numero = ''
      for (var i = 0; i < num.length; i++) {
        if (num[i] != '.') {
          if (num[i] == ',') {
            numero += '.'
          }else{
            numero += num[i]
          }
        }
      }
      return parseFloat(numero);
    }
    function mostrar(num){
      // console.log(num);
      var newnum = '';
      num = num+'';
      var pos = num.length;
      for (var i = 0; i < num.length; i++) {
        if (num[i] == '.') {
          newnum += ','
          pos = i;
        }else{
          newnum += num[i];
        }
      }
      var cant = 0;

      var aux = pos;

      while(aux % 3 != 0){
        cant++;
        aux--;
      }
      if (cant > 0) {
        cant=3-cant;
      }
      // console.log("cantidad: "+cant);
      var num_aux = '';
      var numdef = ''
      for (var i = 0; i < pos; i++) {
        num_aux += newnum[i];
        cant++;
        if (cant == 3) {
          numdef += num_aux+'.';
          num_aux = '';
          cant = 0;
        }
      }
      numdef = numdef.substr(0,numdef.length-1);
      for (var i = pos; i < newnum.length; i++) {
        numdef += newnum[i];
      }

      // console.log(numdef);

      return numdef;
    }
    function informar_uf(id_uf){
        uf = unidades_funcionales[id_uf];
        console.log('Tierra: '+uf.getTierra());

        console.log('Coeficiente: '+uf.getCoef());

        console.log('Valor unidad funcional: '+uf.getVUF());
        console.log('total: '+uf.getTotalUF());
    }

    function actualizar_insta_total(formulario, id_uf, id_form){
      // console.log("form base: "+ formulario);
      // function actualizar_insta_total(formulario){
      form_orig = document.getElementById("total_inst_comp"+formulario);
      // var uf = unidades_funcionales[id_uf];
      
      
      var form;
      var total = 0;
      for (let i = 0; i < unidades_funcionales.length; i++) {
        uf = unidades_funcionales[i];
        for (var index = 0; index < uf.getFormularios().length; index++) {
            form = uf.getFormulario(index);
            if (form.getFormOriginal() == formulario) {
              total += form.getComplementarias();
            }
        }
      }

      var orig = parseFloat(conv(document.getElementById("totalInsta"+formulario).value));
      if(isNaN(orig)){ orig = 0; }
      form_orig.value = mostrar(round(orig - total));
      // console.log(total);
      if(round(orig - total) < 0){
        alert("ATENCION! se excedio del maximo de las instalaciones complementarias del formulario: "+uf.getFormulario(id_form).getNombre());
      }
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
            <h3>Formulario 908</h3>
          </div> <!-- /widget-header -->
          <form method="POST">
          <div class="widget-content ">

            <div class="control-group">

              <div class="controls">

                <div class="accordion" id="accordion3">
                  <div class="accordion-group">
                    <!-- Área -->
                    <div class="accordion-heading">
                      <a class="accordion-toggle" data-toggle="collapse" href="#area1">Datos de Unidades Funcionales</a>
                    </div><!-- /Área -->
                    <div class="accordion-body" id="area1">
                      <div class="accordion-inner">
                        <div class="row">
                          <div class="col-lg-3 text-left">
                            <label>Plano Nro</label>
                            <input class="form-control" type="text" name="planoNro" id="planoNro" value="<?php echo $planoNro?>" disabled>
                          </div>
                          <div class="col-lg-3 text-left">
                            <label>Superfice Total UF</label>
                            <?php 
                              if ($abierto_como == "creacion") {
                                echo "<input required class='form-control' type='text' name='superficieTotalUF' id='superficieTotalUF' onkeyup='actvpm(this.value)'>";
                              }else{
                                echo "<input required class='form-control' type='text' name='superficieTotalUF' id='superficieTotalUF' onkeyup='actvpm(this.value)' value= ".number_format((float)$cons_form['SuperficieTotalUF'],2,',','.').">";
                                
                              }
                            ?>
                            
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-3 text-left">
                            <label>Valor del Edificio</label>
                          </div>
                          <div class="col-lg-4 text-left">
                            <input class="form-control" type="text" id="valorEdificio" name="valorEdificio" value="<?php echo number_format((float)$edifAct,0,',','.');?>" disabled>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-3 text-left">
                            <label>Valor de la Tierra</label>
                          </div>
                          <div class="col-lg-4 text-left">
                            <input class="form-control" type="text" id="valorTierraTotal" name="valorTierraTotal" value="<?php echo number_format((float)$tierraAct,0,',','.') ?>" disabled>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-3 text-left">
                            <label>Total</label>
                          </div>
                          <div class="col-lg-4 text-left">
                            <input class="form-control" type="text" id="valorTotal" name="valorTotal" value="<?php echo number_format((float)$total,0,',','.') ?>" disabled>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-12 text-left">
                            <table class="table table-bordered responsive-table">
                              <thead>
                                <tr>
                                  <th width='2%'>Formularios</th>
                                  <th width='2%'>Coef. de Dep.</th>
                                  <th >Cubierta</th>
                                  <th >SemiCubierta</th>
                                  <th >Baño Ppal.</th>
                                  <th >Baño Sec.</th>
                                  <th >Total original INST. COMPL.</th>
                                  <th >Total restante INST. COMPL.</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                    for ($i=0; $i < sizeof($formularios); $i++) { 
                                        echo "<tr>";
                                          echo "<td width='2%'><input type='text' class='form-control' name='nombre".$i."' id='nombre".$i."' value='".mostrar($formularios[$i] -> getNombre())."' disabled></td>";
                                          echo "<td width='2%'><input type='text' class='form-control' name='coef".$i."' id='coef".$i."' value='".(number_for($formularios[$i] -> getCoef(),2))."' disabled></td>";
                                          echo "<td width='2%'><input type='text' class='form-control' name='cubierta".$i."' id='cubierta".$i."' value='".mostrar(number_for($formularios[$i] -> getCubierta(),2))."' disabled></td>";
                                          echo "<td width='2%'><input type='text' class='form-control' name='semiCubierta".$i."' id='semiCubierta".$i."' value='".mostrar(number_for($formularios[$i] -> getSemiCubierta(),2))."' disabled></td>";
                                          echo "<td width='2%'><input type='text' class='form-control' name='banoPri".$i."' id='banoPri".$i."' value='".mostrar(number_for($formularios[$i] -> getBanoPri(),2))."' disabled></td>";
                                          echo "<td width='2%'><input type='text' class='form-control' name='banoSec".$i."' id='banoSec".$i."' value='".mostrar(number_for($formularios[$i] -> getBanoSec(),2))."' disabled></td>";
                                          echo "<td width='2%' style='/* display:none */'><input disabled class='form-control' type='text' id='totalInsta".$i."' name='totalInsta".$i."' value='".mostrar(number_for($formularios[$i] -> getInsta(),2))."'></td>";
                                          echo "<td width='2%'><input type='text' class='form-control' name='total_inst_comp".$i."' id='total_inst_comp".$i."' value='".mostrar(number_for($formularios[$i] -> getInsta(),2))."' disabled></td>";



                                        echo "</tr>";
                                    }
                                ?>

                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div  id="unidadFuncional"></div> <!-- /accordion -->
                  <!-- </form> -->
                  <button type="button" class="btn btn-success" onclick="agregar_uf()">Agregar UF</button>
                  <!-- <button class="btn btn-success" onclick="finalizar()">finalizar2</button> -->
                  <!-- <button class="btn btn-success" onclick="finalizar_edicion()">finalizar3</button> -->
                  <br>
                  <!-- <form method="POST"> -->
                  <?php 
                    if ($abierto_como == "creacion") {
                      echo '<button type="submit" style="margin-top : 15px" class="btn" name="guardar" onclick="finalizar_edicion()">Guardar</button>';
                    }else{
                      echo '<button type="submit" style="margin-top : 15px" class="btn" name="guardar-c" onclick="finalizar_edicion()">Guardar cambios</button>';
                    }
                  ?>
                  
                  <div id="aux"></div>
                  <?php 
                    if (isset($_POST['guardar'])) {
                        // datos propios del formulario 908
                        $supTotal = $_POST['suptotaluf'];
                        $planoNro = $_POST['plano'];
                        $idCedula = $_GET['idCedula'];
                        $tipoCedula = $_GET['cedula'];
                        $query = "INSERT INTO `form908`(`idCedula`, `tipoCedula`, `PlanoNro`, `SuperficieTotalUF`) 
                        VALUES ('$idCedula','$tipoCedula','$planoNro','$supTotal')";
                        mysqli_query($conexion, $query);
                        //datos de los formularios base
                        $idForm908 = mysqli_fetch_array(mysqli_query($conexion,"SELECT MAX(`codForm908`) FROM `form908`"))[0];
                        $cant_uf = $_POST['cant_uf'];
                        for ($i=0; $i < $cant_uf; $i++) { 
                          $nombre = $_POST['nombre_uf'.$i];
                          $sup= $_POST['sup_uf'.$i];
                          $vuf= $_POST['vuf_uf'.$i];
                          $vtu= $_POST['vtu_uf'.$i];
                          $coef= $_POST['coef_uf'.$i];
                          $tp= $_POST['tp_uf'.$i];
                          $tc= $_POST['tc_uf'.$i];
                          $total= $_POST['total_uf'.$i];
                          $query_uf = "INSERT INTO `f908unidadesfuncionales`(`Nombre`, `idForm908`, `Superficie`, `valorUf`, `valorTierraUf`, `Coeficiente`, `totalPropio`, `totalComun`, `Total`) 
                          VALUES ('$nombre','$idForm908','$sup','$vuf','$vtu','$coef','$tp','$tc','$total')";
                          mysqli_query($conexion,$query_uf);
                          $id_uf = mysqli_fetch_array(mysqli_query($conexion,"SELECT MAX(`idUf`) FROM `f908unidadesfuncionales`"))[0];
                          $cant_form = $_POST['cant_form_uf'.$i];
                          for ($j=0; $j < $cant_form; $j++) { 
                            $formbase = $_POST['formbase_uf'.$i.'form_'.$j];
                            $cub = $_POST['cub_uf'.$i.'form_'.$j];
                            $scub = $_POST['scub_uf'.$i.'form_'.$j];
                            $cubc = $_POST['cubc_uf'.$i.'form_'.$j];
                            $scubc = $_POST['scubc_uf'.$i.'form_'.$j];
                            $propio = $_POST['propio_uf'.$i.'form_'.$j];
                            $comun = $_POST['comun_uf'.$i.'form_'.$j];
                            $comp = $_POST['comp_uf'.$i.'form_'.$j];
                            $query_form = "INSERT INTO `f908formulariosuf`(`idForm908`, `idUf`, `formBase`, `Cubierta`, `semiCubierta`, `cubiertaComun`, `SemiCubiertaComun`, `Propio`, `Comun`, `Complementarias`) 
                            VALUES ('$idForm908','$id_uf','$formbase','$cub','$scub','$cubc','$scubc','$propio','$comun','$comp')";
                            mysqli_query($conexion,$query_form);
                          }

                        }


                        $version = mysqli_fetch_array(mysqli_query($conexion, "SELECT MAX(`version`) FROM `cedulaformularios` WHERE `idCedula` = $Cedula AND `tipoCedula`= $TipoDeCedula and `nroFormulario`=908"))[0];
                        if ($version == null) {
                          $version = 1;
                        }else{
                          $version++;
                        }


                        $query = "INSERT INTO `cedulaformularios`(`idCedula`, `tipoCedula`, `nroFormulario`, `version`, `data`, `codForm`) 
                        VALUES ('$Cedula','$TipoDeCedula','908','$version','$aniotabla','$idForm908')";
                        mysqli_query($conexion,$query);
                        echo '<script language="javascript">alert("Se registro la forma correctamente!");</script>';
                        echo '<script language="javascript">window.close();window.opener.getFormularios();</script>';
                    }else{
                      if (isset($_POST['guardar-c'])) {
                        $superficie_global = $_POST['suptotaluf'];
                        mysqli_query($conexion, "DELETE FROM `f908formulariosuf` WHERE `idForm908` = ".$idForm);
                        mysqli_query($conexion, "DELETE FROM `f908unidadesfuncionales` WHERE `idForm908` = ".$idForm);
                        mysqli_query($conexion, "UPDATE `form908` SET `SuperficieTotalUF`=$superficie_global WHERE `codForm908` = $idForm");
                        $cant_uf = $_POST['cant_uf'];
                        for ($i=0; $i < $cant_uf; $i++) { 
                          $nombre = $_POST['nombre_uf'.$i];
                          $sup= $_POST['sup_uf'.$i];
                          $vuf= $_POST['vuf_uf'.$i];
                          $vtu= $_POST['vtu_uf'.$i];
                          $coef= $_POST['coef_uf'.$i];
                          $tp= $_POST['tp_uf'.$i];
                          $tc= $_POST['tc_uf'.$i];
                          $total= $_POST['total_uf'.$i];
                          $query_uf = "INSERT INTO `f908unidadesfuncionales`(`Nombre`, `idForm908`, `Superficie`, `valorUf`, `valorTierraUf`, `Coeficiente`, `totalPropio`, `totalComun`, `Total`) 
                          VALUES ('$nombre','$idForm','$sup','$vuf','$vtu','$coef','$tp','$tc','$total')";
                          mysqli_query($conexion,$query_uf);
                          $id_uf = mysqli_fetch_array(mysqli_query($conexion,"SELECT MAX(`idUf`) FROM `f908unidadesfuncionales`"))[0];
                          $cant_form = $_POST['cant_form_uf'.$i];
                          for ($j=0; $j < $cant_form; $j++) { 
                            $formbase = $_POST['formbase_uf'.$i.'form_'.$j];
                            $cub = $_POST['cub_uf'.$i.'form_'.$j];
                            $scub = $_POST['scub_uf'.$i.'form_'.$j];
                            $cubc = $_POST['cubc_uf'.$i.'form_'.$j];
                            $scubc = $_POST['scubc_uf'.$i.'form_'.$j];
                            $propio = $_POST['propio_uf'.$i.'form_'.$j];
                            $comun = $_POST['comun_uf'.$i.'form_'.$j];
                            $comp = $_POST['comp_uf'.$i.'form_'.$j];
                            $query_form = "INSERT INTO `f908formulariosuf`(`idForm908`, `idUf`, `formBase`, `Cubierta`, `semiCubierta`, `cubiertaComun`, `SemiCubiertaComun`, `Propio`, `Comun`, `Complementarias`) 
                            VALUES ('$idForm','$id_uf','$formbase','$cub','$scub','$cubc','$scubc','$propio','$comun','$comp')";
                            mysqli_query($conexion,$query_form);
                          }

                        }
                        echo '<script language="javascript">alert("Se registro la forma correctamente!");</script>';
                        echo '<script language="javascript">window.close();window.opener.getFormularios();</script>';
                      }
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