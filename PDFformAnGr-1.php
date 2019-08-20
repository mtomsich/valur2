<?php
	include("sesion.php");
	$pagina='PDFformAnGr-1PHP';
	include("sql/conexion.php");
	include("seguridadForm.php");

	require_once 'lib/pdf/autoload.inc.php';
	ob_start();
    include ("sql/mostrarDatosObra.php");

    $idForm = $_GET['idform'];
    $form = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM `formangr` WHERE `codFormAnexo`= $idForm"));
    $Cedula = $form[1];
    $TipoDeCedula = $form[2];
    switch ($TipoDeCedula) {
	    case '1': $cons=mysqli_fetch_array(mysqli_query($conexion, "SELECT `fechaImp`, `lugar` FROM `cedula10707` WHERE `idCedula707` = $Cedula")); break;
	    case '2': $cons=mysqli_fetch_array(mysqli_query($conexion, "SELECT `fechaImp`, `lugar` FROM `cedulaph` WHERE `idCedulaPH` =  $Cedula"));  break;
	    case '3': $cons=mysqli_fetch_array(mysqli_query($conexion, "SELECT `fechaImp`, `lugar` FROM `cedulade` WHERE `idCedulaDE` =  $Cedula"));break;
	  }
    $codFormOrig = $form['formOriginal'];
    $nroFormOrig = $form['nroFormOrig'];
    $query = "SELECT `version` FROM `cedulaformularios` WHERE `idCedula` = '$Cedula' AND `tipoCedula`= '$TipoDeCedula' and `nroFormulario`='$nroFormOrig' and `codForm` = '$codFormOrig'";
    // echo $query;
    $version = mysqli_fetch_array(mysqli_query($conexion, $query))[0];
    // echo "SELECT `version` FROM `cedulaformularios` WHERE `idCedula` = $Cedula AND `tipoCedula`= $TipoDeCedula and `nroFormulario`=$nroFormOrig and `codForm` = $codFormOrig";
    // echo $idobra;
    $calles = mysqli_fetch_array(mysqli_query($conexion,"SELECT `calle`,`entreCalle`,`yCalle` FROM `obras` WHERE `codObra` = $idobra"));
    $callePrincipal = $calles['calle'];
    $entre1 = $calles['entreCalle'];
    $entre2 = $calles['yCalle'];


?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>PDFform908-1.php</title>
	<style>
		@page {
			margin-top: 0.5em;
    	    margin-left: 1.5em;
	  	    margin-right: 1.5em;
			margin-bottom: 1.5em;
        }
        body{
            padding: 15px 50px 5px 50px;
            /* background-color : blue; */
        }
        #logo{
            top: 50px;
        }
        .imagen{
            /* height : 100%; */
            float : left;
            width : 67%;
            /* background-color : green; */
        }
        .cabecera{
            width : 100%;
            height: 10%;
            /* background-color : red; */
            /* overflow : hidden; */
        }
        .texto{
            width : 20%;
            float : left;
            /* background-color : yellow; */
        }
        .cuadrado{
            margin-left : 88%;
            margin-top: 1.6%;
            width: 12%;
            height : 4%;
            /* background-color : black; */
            border-style : solid;
            border-color : black;
            border-width : 1px;
            text-align : center;
            padding-top : 10px;
            font-size: 1.5em;
        }
        table.datosobra {
            border-collapse:collapse;
            width: 100%;
        }
		table.datosobra td {
            border: 1px solid #000000;
            font-size: 10px;
            padding: 2px 5px;
        }

        table.datosobra {
            border-collapse:collapse;
            width: 100%;
        }
		table.datosobra td {
            border: 1px solid #000000;
            font-size: 10px;
            padding: 2px 5px;
        }
        table.tabla-cuadricula{
            border-collapse:collapse;
            border-color:black;
            border-style:solid;
            border-width:2px;
            width: 90%;
            padding-top : 2px;
            z-index : 5;
            margin: 0 auto;
        }
        table.tabla-cuadricula td.tdtabla {
            border: 1px dotted lightgrey;
            padding: 2px 5px;
            color : white;
        }
        .pls{
            width:5%;
            height :80%;
            float:left;
            text-align : center;
        }
        .arotar{
            -webkit-transform: rotate(-90deg);
            transform: rotate(-90deg);
            margin-top:50%;
            width : 2000%;
            margin-left : -880%;
            /* background-color:red; */
            /* text-align : center; */
        }
        .arriba{
            text-align : center;
        }
        .intdderecha{
            float : left;
            margin-right : 10px;
        }
        .intdizquierda{
            margin-left : 10px;
        }
        .intd{
            width:4px;
            height:4px;
        }
        .intd1{
            background-color :blue;
        }
        .intd2{
            background-color :red;
        }
        .intd3{
            background-color :yellow;
        }
        .intd4{
            background-color :green;
        }
        .tabla2td{
            font-size : 0.4em;
            margin-left: 200px;
            /* background-color : blue; */

        }
        .ulttd{
            /* color:white;  */
            background-color:white;
            /* height:20px; */
        }
        table.ulttabla{
            margin: 0 auto;
            width: 90%;
            border-collapse : collapse;
            border: 2px solid black;
        }
        table.ulttabla td{
            border: 1px solid lightgrey;
            font-size: 0.8em;
            padding: 3px 0px;
            text-align : center;

        }
        table.ulttabla2{
            margin: 10px auto 0 auto;
            width: 100%;
        }
        table.ulttabla2 td{
            font-size: 0.8em;
            padding: 3px 0px;
            text-align : center;

        }
        table.parche2 td{
            /* background-color : blue; */
            margin: 0 5px;
        }
        .borde{
            border-bottom : 1px solid grey;
            color : white;
        }
        table.ulttable2{
            width : 90%;
            margin : 0 auto;
        }
	</style>
</head>

<body>
    <div class="cabecera">
        <div class="imagen">
            <img src="img/logopdfAnexo.png" width="150px" class="logo">
        </div>
        <div class="texto">
            <h3><b> Anexo grafico del formulario:</b></h3>
        </div>
        <div class="cuadrado"><?php echo $form['nroFormOrig']."/".$version;?></div>
    </div>
    <div class="cuerpo">

        <table class="datosobra">
            <tr>
                <td colspan="5"><b>Partido</b> (en letras): <span style="color:white">aaaa</span><?php echo $Fpartido ?></td>
                <td style="border: 0"></td>
            </tr>
            <tr>
                <td style="color:white; background-color:black; border-right-color:white"><b>Partido</b></td>
                <td style="color:white; background-color:black;"><b>Partida</b></td>
                <td>Circunscripcion</td>
                <td>Seccion</td>
                <td>Ch.</td>
                <td>Qta.</td>
                <td>Fracc.</td>
                <td>Mz.</td>
                <td>Parcela</td>
                <td>Subparcela</td>
            </tr>
            <tr>
                <td><?php echo $FcodPartido ?></td>
                <td><?php echo $Fpartida ?></td>
                <td><?php echo $Fcir ?></td>
                <td><?php echo $Fsec ?></td>
                <td><?php echo $Fcha ?></td>
                <td><?php echo $Fqui ?></td>
                <td><?php echo $Ffra ?></td>
                <td><?php echo $Fman ?></td>
                <td><?php echo $Fpar ?></td>
                <td><?php echo $Fsub ?></td>
            </tr>
        </table>
        <div class="cuadricula">
            <div class="arriba">
                    CALLE :
                    <?php
                        if ($entre1 != '') {
                            // $entre1 = "<span style='color:trasparent'> a </span>";
                            echo "
                                    <u>
                                    <span style='color:white'>__________________ </span>
                                    ".$entre1."
                                    <span style='color:white'>__________________ </span>
                                    </u>
                                ";
                        }else{
                            echo "
                                    <u>
                                    <span style='color:white'>____________________________________ </span>
                                    </u>
                                ";
                        }
                    ?>
            </div>
            <div class="pls">
                <div class="arotar" style=" /* background-color : red */">
                    <span style="float:left; margin-left:267px;"> CALLE : </span>
                    <u>
                    <span style="float:left; color:white; margin-left:332px;">__________________</span>

                    <?php
                        echo '<span top:-500px;">'.$callePrincipal.'</span>';
                    ?>
                    </u>
                    <u><span style="float:left; color:white; margin-left:493px; margin-top:-38px;">__________________</span></u>
                </div>
            </div>
            <table class="tabla-cuadricula">
                <?php
                    $columnas = 19;
                    $filas = 28;
                    for ($j=0; $j < $filas; $j++) {
                        echo '<tr>';
                        for ($i=0; $i < $columnas; $i++) {
                            if ($j == $filas-2) {
                                echo '<td style="border-bottom:1px solid black; border-right:1px dotted lightgrey;color:white">a</td>';
                            }else{
                                if ($j == $filas-1) {
                                    echo '<td colspan="19" class="ulttd">';
                                        echo '<table class="parche2">';
                                            echo '<tr>';
                                                echo '<td><u>REFERENCIAS</u></td>';
                                                echo '<td style="color:white">aaa</td>';
                                                // echo '<div class="parche1">';
                                                echo '<td class="tabla2td">Piso 2°</td>';
                                                echo '<td class="img1"><img src="img/img9081.png" height="15px" width="40px"></td>';
                                                // echo '</div>';
                                                echo '<td style="color:white">a</td>';
                                                echo '<td class="tabla2td">Piso 3°</td>';
                                                echo '<td class="img1"><img src="img/img9082.png" height="15px" width="40px"></td>';
                                                echo '<td style="color:white">a</td>';
                                                echo '<td class="tabla2td">Piso 4°</td>';
                                                echo '<td class="img1"><img src="img/img9083.png" height="15px" width="40px"></td>';
                                                echo '<td style="color:white">a</td>';
                                                echo '<td class="tabla2td">Sobre 1° terraza</td>';
                                                echo '<td class="img1"><img src="img/img9084.png" height="15px" width="40px"></td>';
                                                echo '<td style="color:white">a</td>';
                                                echo '<td class="tabla2td">Sobre 2° terraza</td>';
                                                echo '<td class="img1"><img src="img/img9085.png" height="15px" width="40px"></td>';
                                            echo '</tr>';
                                        echo '</table>';
                                    echo '</td>';
                                    break;
                                }else{
                                    echo '<td class="tdtabla">a</td>';
                                }
                            }
                        }
                        echo '</tr>';
                    }
                    ?>
                    <!-- <tr>
                        <td colspan="19" style="border-style-top: solid; border-color-top: black;">a</td>
                    </tr> -->
            </table>
        </div>
        <div class="arriba">
                    CALLE :
                    <?php
                        if ($entre1 != '') {
                            // $entre1 = "<span style='color:trasparent'> a </span>";
                            echo "
                                    <u>
                                    <span style='color:white'>__________________ </span>
                                    ".$entre1."
                                    <span style='color:white'>__________________ </span>
                                    </u>
                                ";
                        }else{
                            echo "
                                    <u>
                                    <span style='color:white'>____________________________________ </span>
                                    </u>
                                ";
                        }
                    ?>
            </div>
    </div>
    6 - B Profesional Interviniente
    <div style="font-size: 0.6em">
    suscribo la presente documentacion en su aspecto tecnico, asumiendo la responsabilidad propia del ejercicio profesional que me compete
    </div>
    <div style="font-size: 0.8em">
    Lugar y fecha   ....................<?php echo $cons['lugar']; ?>................<?php echo $cons['fechaImp']; ?>..............................
    </div>
    <table class="ulttabla">
        <tr>
            <td>APELLIDO Y NOMBRE</td>
            <td>MATRICULA N°</td>
            <td>FIRMA Y SELLO</td>
        </tr>
        <tr>
            <?php
                if ($form['mostrarProf']=="1") {
                    echo "
                        <td>$FpnombreApellido</td>
                        <td>$Fpmatricula</td>
                        <td></td>
                    ";
                }else{
                    echo "
                        <td style='color:white'>a</td>
                        <td></td>
                        <td></td>
                    ";
                }
            ?>
        </tr>
    </table>
    <br>
    <table class="ulttabla2">
        <tr>
            <td width="40%" class="borde"></td>
            <td width="20%"></td>
            <td width="40%" class="borde"></td>
        </tr>
        <tr>
            <td width="40%">SELLO FECHADOR</td>
            <td width="20%"></td>
            <td width="40%">Firma del agente receptor</td>
        </tr>
    </table>
   <!-- <div id="logo">
   </div> -->
</body>
</html>

<?php
$output = ob_get_clean();

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($output);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$filename = "PDFanexo.pdf";
$dompdf->stream($filename, array("Attachment" => 0));
?>
