<?php
include("sesion.php");
$pagina='PDFform9091PHP';
include("sql/conexion.php");
include("seguridadForm.php");

require_once 'lib/pdf/autoload.inc.php';
ob_start();
include ("sql/mostrarDatosObra.php");
include('sql/mostrarForm909.php');

?>
<!DOCTYPE html>
<html>
<head>
  <style>
    @charset "utf-8";
    body {
		   font-size:10px;
      /* to centre page on screen*/
      margin-left: auto;
      margin-right: auto;
		  font-family: 'Arial',sans-serif;
      }
		@page {
      margin-top: 1.5em;
      margin-left: 1.5em;
      margin-right: 1.5em;
      margin-bottom: 1.5em;
    }
    .logo{
	    margin-top: -5px;
      margin-left: -10px;
    }
    .img909{
	    position: absolute;
	    margin: -10px 0px 0px 600px;
    }
    table{
	    text-align: center;
	    width: 100%;
	    border-collapse: collapse;
    }
		td{
      height: 10px;
    }
    .tabla1{
	    margin-top:0px;
	    font-size:10px;
      border: solid 1px black;
    }
    .tabla2{
	    margin-top: 0px;
      font-size: 10px;
      padding-top:0px;
    }
    .td2{
	    height: 15px;
    }
    .textotabla{
	    margin:2px 0px -1px 0px;
	    border: groove 1px;
	    width: 472px;
	    padding: 2px;
    }
    .tabla3{
	    margin-top:5px;
	    font-size:10px;
    }
    .tabla4{
	    margin-top:-10px;
    }
    .tabla5{
      margin-top: -10px;
    }
    .rubro{
      margin-top:-10px;
	    margin-bottom:5px;
      font-size: 12px;
    }
    .rubro{
      margin-top:5px;
      margin-bottom:5px;
      font-size: 12px;
    }
    .rubro3{
      margin-top:-20px;
      margin-bottom:5px;
      font-size: 12px;
    }
    .rubro4{
      margin-top:-15px;
      margin-bottom:5px;
      font-size: 12px;
    }
    .rubro4b{
      margin-top:-10px;
	    font-size: 12px;
    }
    .inciso{
      margin-top:5px;
      margin-bottom:5px;
      font-size: 11px;
      text-align: left;
    }
    .incisob{
      margin-top:0px;
      margin-bottom:5px;
      font-size: 11px;
      text-align: left;
      padding-left: 0px;
    }
    .incisoc{
      margin-top:-15px;
	    margin-bottom:5px;
	    font-size: 11px;
      text-align: left;
      padding-left: 0px;
    }
    .prepropos{
      position:absolute;
	    font-size:9px;
    }
    .fondo{
	    background-color:#242424;
	    color:white;
    }
    .borde{
      border: 1px solid;
			border-bottom-style: solid;
			border-bottom-color: gray;
			border-right-style: solid;
			border-right-color: black;
		}
		.borden{
			border: 1px solid;
			border-bottom-style: solid;
			border-bottom-color: black;
			border-right-style: solid;
			border-right-color: black;
			border-top-style: solid;
			border-top-color: black;
			}
		.borden2{
			border: 1px solid;
			border-style: solid;
			border-color: black;
			}
		.borde1{
			border: 1px solid;
			border-bottom-style: solid;
			border-bottom-color: gray;
			border-right-style: solid;
			border-right-color: black;
			border-left-style: solid;
			border-left-color: black;
		}
		.borde2{
			border: 1px solid;
			border-bottom-style: solid;
			border-bottom-color: black;
			border-right-style: solid;
			border-right-color: black;
			border-left-style: solid;
			border-left-color: black;
			}
		.sinborde{
			border-width: 1px;
			border-right-style: solid;
			border-right-color: black;
			border-top-style: solid;
			border-top-color: black;}
		.sinborde2{
			border-width: 1px;
			border-right-style: solid;
			border-right-color: black;
			border-bottom-style: solid;
			border-bottom-color: black;
			border-left-style: solid;
			border-left-color: black;}
		.todosbordes{
      border:solid black 1px;
    }
		.todosbordes1{
      border:solid gray 1px;
			border-bottom-style: solid;
			border-bottom-color: black;}
		.todosbordes2{
      border:solid gray 1px;
			border-bottom-style: solid;
			border-bottom-color: black;
			border-right-style: solid;
			border-right-color: black;}
		.borde3{
			border: 1px;
			border-top-style: solid;
			border-top-color: black;
			border-right-style: solid;
			border-right-color: black;
			border-left-style: solid;
			border-left-color: black;
			}
		.bordebottom{
      border:1px;
			border-bottom-style: solid;
			border-bottom-color: black;
			border-right-style: solid;
			border-right-color: black;
			border-left-style: solid;
			border-left-color: black;}
		.bordederecha{
			border:1px;
			border-right-style: solid;
			border-right-color: black;
		}
    .w{
      width: 20%;
    }
    .w1{
      width: 6%;
    }
    .w2{
      width: 7%;
    }
    .w4{
      width: 19%;
    }
    .a{
      text-align: left!important;
      padding-left: 5px!important;
    }
  </style>
</head>
  <body>

	  <h1 style="position:absolute; margin-left:285px;margin-top:10px;">PLANTACIONES</h1><br>
    <h3 style="position:absolute; margin-left:300px;margin-top:12px;">Urbanas y suburbanas</h3>
    <b><img src="img/img2pdf909.png" alt="" width="98" height="56" class="img909"/></b>
    <img src="img/logopdf901.png" width="170" height="75" alt="" class="logo"/>
    <h1 class="rubro">RUBRO 1 Denominación Catastral</h1>
    <p class="textotabla a"><strong>PARTIDO</strong>(en letras):&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $Fpartido ?></b></p>

  		<table width="100%" class="tabla1">
  			<tbody>
    			<tr>
      				<th class="fondo" scope="col">Partido</th>
      				<th class="fondo" scope="col"> Partida</th>
      				<th class="todosbordes" scope="col"> Circunscripcion</th>
      				<th class="todosbordes" scope="col">Seccíon</th>
      				<th class="todosbordes" scope="col">Ch.</th>
      				<th class="todosbordes" scope="col">Qta.</th>
      				<th class="todosbordes" scope="col">Fracc.</th>
      				<th class="todosbordes" scope="col">Parcela</th>
    			</tr>
    			<tr>
      				<td class="todosbordes"><b><?php echo $FcodPartido ?></b></td>
      				<td class="todosbordes"><b><?php echo $Fpartida ?></b></td>
      				<td class="todosbordes"><b><?php echo $Fcir ?></b></td>
      				<td class="todosbordes"><b><?php echo $Fsec ?></b></td>
      				<td class="todosbordes"><b><?php echo $Fcha ?></b></td>
      				<td class="todosbordes"><b><?php echo $Fqui ?></b></td>
      				<td class="todosbordes"><b><?php echo $Ffra ?></b></td>
      				<td class="todosbordes"><b><?php echo $Parcela ?></b></td>
    			</tr>
    			<tr>
     				<td class="todosbordes" style="text-align: left;font-size:10px;padding: 2px;">PROPIETARIO<br>Apellido y Nombre</td>
      			<td class="todosbordes" colspan="5" style="text-align: left;"> <?php echo $FcnombreApellido ?></td>
      			<td class="todosbordes" colspan="2" style="text-align: left;font-size:10px;padding: 2px;">Expediente</td>
    			</tr>
  			</tbody>
		</table>

    <h1 class="rubro2">RUBRO 2: Valuación de plantaciones frutales y forestales</h1>

    <table class="tabla2" width="100%">
      <tbody>
        <tr>
          <td  class="borde3 td2">1 <br> Variedad de la plantacion</td>
          <td class="borde3 td2 w4" colspan="3">2 <br> Superficie</td>
          <td class="borde3 td2 w">3 <br> Coef. de ajuste por estado <br> sanitario de la plantac. Tabla 23</td>
          <td class="borde3 td2 w" colspan="3" >Valor basico por Ha. en periodo de</td>
          <td class="borde3 td2"  style="padding-top:5px;">Valor <br>&nbsp;(2x3x4) ó <br>&nbsp;(2x3x5) ó <br></td>
        </tr>
	      <tr>
		      <td class="bordebottom w"></td>
		      <td class="todosbordes1">Ha.</td>
		      <td class="todosbordes1">A</td>
		      <td class="todosbordes2">Ca.</td>
		      <td class="bordebottom"></td>
		      <td class="todosbordes1"></td>
		      <td class="todosbordes1"></td>
		      <td class="todosbordes2"></td>
		      <td class="bordederecha" style="padding-top:-5px;"> (2x3x6)</td>
	      </tr>
	      <tr>
		      <td colspan="5" rowspan="1" class="inciso"><b>Inciso A) Olivos</b></td>
          <td>4 Preprod</td>
          <td>5 Prod</td>
          <td>6 Posprod</td>
		      <td class="sinborde2">(con dos decimales)</td>
        </tr>
      </tbody>
    </table>

   <table class="tabla3" colspan="12">
     <tbody>
     <tr>
       <td class="borden2 w a"><?php echo OlivosB($OliHect1,$OliArea1,$OliCa1); ?></td>
       <td class="borden w1 "><b><?php echo $OliHect1; ?></b></td>
       <td class="borden w2 "><b><?php echo $OliArea1; ?></b></td>
       <td class="borden w1 "><b><?php echo $OliCa1; ?></b></td>
       <td class="borden w "><b><?php  $OliEst1 = OlivosEst1($OliHect1,$OliArea1,$OliCa1); ?></b></td>
       <td class="borden w1 "><b><?php $ROliPre1 = OlivosPre($OliPre1); ?></b></td>
       <td class="borden w2 "><b><?php $ROliPro1 = OlivosPro($OliPro1); ?></b></td>
       <td class="borden w2 "><b><?php $ROliPos1 = OlivosPos($OliPos1); ?></b></td>
       <td class="borden "><b><?php $TotalOli1 = TotalFrutales($OliHect1,$OliArea1,$OliCa1,$OliEst1,$ROliPre1,$ROliPro1,$ROliPos1); ?></b></td>
     </tr>
     <tr>
       <td class="borde1 w a"><?php echo OlivosR($OliHect2,$OliArea2,$OliCa2); ?></td>
       <td class="borde w1"><b><?php echo $OliHect2; ?></b></td>
       <td class="borde w2"><b><?php echo $OliArea2; ?></b></td>
       <td class="borde w1"><b><?php echo $OliCa2; ?></b></td>
       <td class="borde w"><b><?php  $OliEst2 = OlivosEst2($OliHect2,$OliArea2,$OliCa2); ?></b></td>
	     <td class="borde w1"><b><?php $ROliPre2 = OlivosPre($OliPre2); ?></b></td>
       <td class="borde w2"><b><?php $ROliPro2 = OlivosPro($OliPro2); ?></b></td>
       <td class="borde w2"><b><?php $ROliPos2 = OlivosPos($OliPos2); ?></b></td>
       <td class="borde"><b><?php $TotalOli2 = TotalFrutales($OliHect2,$OliArea2,$OliCa2,$OliEst2,$ROliPre2,$ROliPro2,$ROliPos2); ?></b></td>
     </tr>
     <tr>
       <td class="borde1 a"><?php echo OlivosM($OliHect3,$OliArea3,$OliCa3); ?></td>
       <td class="borde"><b><?php echo $OliHect3 ?><b></td>
       <td class="borde"><b><?php echo $OliArea3 ?><b></td>
       <td class="borde"><b><?php echo $OliCa3 ?><b></td>
       <td class="borde"><b><?php $OliEst3 = OlivosEst3($OliHect3,$OliArea3,$OliCa3); ?></b></td>
	     <td class="borde"><b><?php $ROliPre3 = OlivosPre($OliPre3); ?><b></td>
       <td class="borde"><b><?php $ROliPro3 = OlivosPro($OliPro3); ?><b></td>
       <td class="borde"><b><?php $ROliPos3 = OlivosPos($OliPos3); ?><b></td>
       <td class="borde"><b><?php $TotalOli3 = TotalFrutales($OliHect3,$OliArea3,$OliCa3,$OliEst3,$ROliPre3,$ROliPro3,$ROliPos3); ?></b></td>
     </tr>
     <tr>
       <td class="borde1 a"><?php echo OlivosB($OliHect4,$OliArea4,$OliCa4); ?></td>
       <td class="borde"><b><?php echo $OliHect4 ?><b></td>
       <td class="borde"><b><?php echo $OliArea4 ?><b></td>
       <td class="borde"><b><?php echo $OliCa4 ?><b></td>
       <td class="borde"><b><?php $OliEst4 = OlivosEst1($OliHect4,$OliArea4,$OliCa4); ?></b></td>
	     <td class="borde"><b><?php $ROliPre4 = OlivosPre($OliPre4); ?><b></td>
       <td class="borde"><b><?php $ROliPro4 = OlivosPro($OliPro4); ?><b></td>
       <td class="borde"><b><?php $ROliPos4 = OlivosPos($OliPos4); ?><b></td>
       <td class="borde"><b><?php $TotalOli4 = TotalFrutales($OliHect4,$OliArea4,$OliCa4,$OliEst4,$ROliPre4,$ROliPro4,$ROliPos4); ?></b></td>
     </tr>
     <tr>
       <td class="borde1 a"><?php echo OlivosR($OliHect5,$OliArea5,$OliCa5); ?></td>
      <td class="borde"><b><?php echo $OliHect5 ?><b></td>
      <td class="borde"><b><?php echo $OliArea5 ?><b></td>
      <td class="borde"><b><?php echo $OliCa5 ?><b></td>
      <td class="borde"><b><?php $OliEst5 = OlivosEst2($OliHect5,$OliArea5,$OliCa5); ?></b></td>
	    <td class="borde"><b><?php $ROliPre5 = OlivosPre($OliPre5); ?><b></td>
      <td class="borde"><b><?php $ROliPro5 = OlivosPro($OliPro5); ?><b></td>
      <td class="borde"><b><?php $ROliPos5 = OlivosPos($OliPos5); ?><b></td>
      <td class="borde"><b><?php $TotalOli5 = TotalFrutales($OliHect5,$OliArea5,$OliCa5,$OliEst5,$ROliPre5,$ROliPro5,$ROliPos5); ?></b></td>
    </tr>
    <tr>
      <td class="borde1 a"><?php echo OlivosM($OliHect6,$OliArea6,$OliCa6); ?></td>
      <td class="borde"><b><?php echo $OliHect6 ?><b></td>
      <td class="borde"><b><?php echo $OliArea6 ?><b></td>
      <td class="borde"><b><?php echo $OliCa6 ?><b></td>
      <td class="borde"><b><?php $OliEst6 = OlivosEst3($OliHect6,$OliArea6,$OliCa6); ?></b></td>
	    <td class="borde"><b><?php $ROliPre6 = OlivosPre($OliPre6); ?><b></td>
      <td class="borde"><b><?php $ROliPro6 = OlivosPro($OliPro6); ?><b></td>
      <td class="borde"><b><?php $ROliPos6 = OlivosPos($OliPos6); ?><b></td>
      <td class="borde"><b><?php $TotalOli6 = TotalFrutales($OliHect6,$OliArea6,$OliCa6,$OliEst6,$ROliPre6,$ROliPro6,$ROliPos6); ?></b></td>
    </tr>
    <tr>
      <td class="borde1 a"><?php echo OlivosB($OliHect7,$OliArea7,$OliCa7); ?></td>
      <td class="borde"><b><?php echo $OliHect7 ?><b></td>
      <td class="borde"><b><?php echo $OliArea7 ?><b></td>
      <td class="borde"><b><?php echo $OliCa7 ?><b></td>
      <td class="borde"><b><?php $OliEst7 = OlivosEst1($OliHect7,$OliArea7,$OliCa7); ?></b></td>
      <td class="borde"><b><?php $ROliPre7 = OlivosPre($OliPre7); ?><b></td>
      <td class="borde"><b><?php $ROliPro7 = OlivosPro($OliPro7); ?><b></td>
      <td class="borde"><b><?php $ROliPos7 = OlivosPos($OliPos7); ?><b></td>
      <td class="borde"><b><?php $TotalOli7 = TotalFrutales($OliHect7,$OliArea7,$OliCa7,$OliEst7,$ROliPre7,$ROliPro7,$ROliPos7); ?></b></td>
    </tr>
    <tr>
	    <td class="borde2 a"><?php echo OlivosR($OliHect8,$OliArea8,$OliCa8); ?></td>
      <td class="borde2"><b><?php echo $OliHect8 ?><b></td>
      <td class="borde2"><b><?php echo $OliArea8 ?><b></td>
      <td class="borde2"><b><?php echo $OliCa8 ?><b></td>
      <td class="borde2"><b><?php $OliEst8 = OlivosEst2($OliHect8,$OliArea8,$OliCa8); ?></b></td>
      <td class="borde2"><b><?php $ROliPre8 = OlivosPre($OliPre8); ?><b></td>
      <td class="borde2"><b><?php $ROliPro8 = OlivosPro($OliPro8); ?><b></td>
      <td class="borde2"><b><?php $ROliPos8 = OlivosPos($OliPos8); ?><b></td>
      <td class="borde1"><b><?php $TotalOli8 = TotalFrutales($OliHect8,$OliArea8,$OliCa8,$OliEst8,$ROliPre8,$ROliPro8,$ROliPos8); ?></b></td>
    </tr>
    <tr>
  	    <td class="borde2 a"><?php echo OlivosM($OliHect9,$OliArea9,$OliCa9); ?></td>
        <td class="borde2"><b><?php echo $OliHect9 ?><b></td>
        <td class="borde2"><b><?php echo $OliArea9 ?><b></td>
        <td class="borde2"><b><?php echo $OliCa9 ?><b></td>
        <td class="borde2"><b><?php $OliEst9 = OlivosEst3($OliHect9,$OliArea9,$OliCa9); ?></b></td>
        <td class="borde2"><b><?php $ROliPre9 = OlivosPre($OliPre9); ?><b></td>
        <td class="borde2"><b><?php $ROliPro9 = OlivosPro($OliPro9); ?><b></td>
        <td class="borde2"><b><?php $ROliPos9 = OlivosPos($OliPos9); ?><b></td>
        <td class="borde1"><b><?php $TotalOli9 = TotalFrutales($OliHect9,$OliArea9,$OliCa9,$OliEst9,$ROliPre9,$ROliPro9,$ROliPos9); ?></b></td>
      </tr>
	  <tr>
		  <td class="incisob"><b>Inciso B) Otros frutales</b></td>
      <td colspan="2" style="margin-left:40px;">A trasladar a Rubro 3</td>
      <td colspan="5" rowspan="2"><p style="text-align: right;margin-top: -0px;margin-right: 5px;">Total inciso A)<br><b style="font-size:8px;">(con 2 decimales)</b></p></td>
		  <td class="borde2"><b><?php $totalOLIVOS = Sumar($TotalOli1,$TotalOli2,$TotalOli3,$TotalOli4,$TotalOli5,$TotalOli6,$TotalOli7,$TotalOli8,$TotalOli9);if($totalOLIVOS >0){echo number_format($totalOLIVOS, 2, ',', '.');} ?></b></td>
	  </tr>
  </tbody>
  </table>
	<table class="tabla4">
    <tbody>
    <tr>
      <td class="borden2 w a"><b><?php echo $FrutDet1; ?></b>
      <div style="text-align:right!important;margin-top:-12px;margin-right:5px;"><b><?php Estado($FruEst1); ?></b></div>
      </td>
      <td class="borden w1 "><b><?php echo $FruHect1; ?></b></td>
      <td class="borden w2"><b><?php echo $FruArea1; ?></b></td>
      <td class="borden w1"><b><?php echo $FruCa1; ?></b></td>
      <td class="borden w"><b><?php if ($FruEst1 >0) {echo number_format($FruEst1, 2, ',', '.');} ?></b></td>
      <td class="borden w1"><b><?php $RFruPre1 = FrutalesPre($FruPre1,$FrutDet1); ?></b></td>
      <td class="borden w2"><b><?php $RFruPro1 = FrutalesPro($FruPro1,$FrutDet1); ?></b></td>
      <td class="borden w2"><b><?php $RFruPos1 = FrutalesPos($FruPos1,$FrutDet1); ?></b></td>
      <td class="borden "><b><?php $TotalFr1 = TotalFrutales($FruHect1,$FruArea1,$FruCa1,$FruEst1,$RFruPre1,$RFruPro1,$RFruPos1); ?></b></td>
    </tr>
    <tr>
      <td class="borde1 a"><b><?php echo $FrutDet2; ?></b>
      <div style="text-align:right!important;margin-top:-12px;margin-right:5px;"><b><?php Estado($FruEst2); ?></b></div>
      </td>
      <td class="borde"><b><?php echo $FruHect2; ?></b></td>
      <td class="borde"><b><?php echo $FruArea2; ?></b></td>
      <td class="borde"><b><?php echo $FruCa2; ?></b></td>
      <td class="borde"><b><?php if ($FruEst2 >0) {echo number_format($FruEst2, 2, ',', '.');} ?></b></td>
	    <td class="borde"><b><?php $RFruPre2 = FrutalesPre($FruPre2,$FrutDet2); ?></b></td>
      <td class="borde"><b><?php $RFruPro2 = FrutalesPro($FruPro2,$FrutDet2);  ?></b></td>
      <td class="borde"><b><?php $RFruPos2 = FrutalesPos($FruPos2,$FrutDet2); ?></b></td>
      <td class="borde"><b><?php $TotalFr2 = TotalFrutales($FruHect2,$FruArea2,$FruCa2,$FruEst2,$RFruPre2,$RFruPro2,$RFruPos2); ?></b></td>
    </tr>
    <tr>
      <td class="borde1 a"><b><?php echo $FrutDet3; ?></b>
      <div style="text-align:right!important;margin-top:-12px;margin-right:5px;"><b><?php Estado($FruEst3); ?></b></div>
      </td>
      <td class="borde"><b><?php echo $FruHect3; ?></b></td>
      <td class="borde"><b><?php echo $FruCa3; ?></b></td>
      <td class="borde"><b><?php echo $FruArea3; ?></b></td>
      <td class="borde"><b><?php if ($FruEst3 >0) {echo number_format($FruEst3, 2, ',', '.');} ?></b></td>
	    <td class="borde"><b><?php $RFruPre3 = FrutalesPre($FruPre3,$FrutDet3); ?></b></td>
      <td class="borde"><b><?php $RFruPro3 = FrutalesPro($FruPro3,$FrutDet3);  ?></b></td>
      <td class="borde"><b><?php $RFruPos3 = FrutalesPos($FruPos3,$FrutDet3); ?></b></td>
      <td class="borde"><b><?php $TotalFr3 = TotalFrutales($FruHect3,$FruArea3,$FruCa3,$FruEst3,$RFruPre3,$RFruPro3,$RFruPos3); ?></b></td>
    </tr>
    <tr>
      <td class="borde1 a"><b><?php echo $FrutDet4; ?></b>
      <div style="text-align:right!important;margin-top:-12px;margin-right:5px;"><b><?php Estado($FruEst4); ?></b></div>
      </td>
      <td class="borde"><b><?php echo $FruHect4; ?></b></td>
      <td class="borde"><b><?php echo $FruArea4; ?></b></td>
      <td class="borde"><b><?php echo $FruCa4; ?></b></td>
      <td class="borde"><b><?php if ($FruEst4 >0) {echo number_format($FruEst4, 2, ',', '.');} ?></b></td>
	    <td class="borde"><b><?php $RFruPre4 = FrutalesPre($FruPre4,$FrutDet4); ?></b></td>
      <td class="borde"><b><?php $RFruPro4 = FrutalesPro($FruPro4,$FrutDet4);  ?></b></td>
      <td class="borde"><b><?php $RFruPos4 = FrutalesPos($FruPos4,$FrutDet4); ?></b></td>
      <td class="borde"><b><?php $TotalFr4 = TotalFrutales($FruHect4,$FruArea4,$FruCa4,$FruEst4,$RFruPre4,$RFruPro4,$RFruPos4); ?></b></td>
    </tr>
    <tr>
      <td class="borde1 a"><b><?php echo $FrutDet5; ?></b>
      <div style="text-align:right!important;margin-top:-12px;margin-right:5px;"><b><?php Estado($FruEst5); ?></b></div>
      </td>
      <td class="borde"><b><?php echo $FruHect5 ; ?></b></td>
      <td class="borde"><b><?php echo $FruArea5 ; ?></b></td>
      <td class="borde"><b><?php echo $FruCa5 ; ?></b></td>
      <td class="borde"><b><?php if ($FruEst5 >0) {echo number_format($FruEst5, 2, ',', '.');} ?></b></td>
	    <td class="borde"><b><?php $RFruPre5 = FrutalesPre($FruPre5,$FrutDet5); ?></b></td>
      <td class="borde"><b><?php $RFruPro5 = FrutalesPro($FruPro5,$FrutDet5); ?></b></td>
      <td class="borde"><b><?php $RFruPos5 = FrutalesPos($FruPos5,$FrutDet5); ?></b></td>
      <td class="borde"><b><?php $TotalFr5 = TotalFrutales($FruHect5,$FruArea5,$FruCa5,$FruEst5,$RFruPre5,$RFruPro5,$RFruPos5); ?></b></td>
    </tr>
    <tr>
      <td class="borde1 a"><b><?php echo $FrutDet6; ?></b>
      <div style="text-align:right!important;margin-top:-12px;margin-right:5px;"><b><?php Estado($FruEst6); ?></b></div>
      </td>
      <td class="borde"><b><?php echo $FruHect6; ?></b></td>
      <td class="borde"><b><?php echo $FruArea6; ?></b></td>
      <td class="borde"><b><?php echo $FruCa6; ?></b></td>
      <td class="borde"><b><?php if ($FruEst6 >0) {echo number_format($FruEst6, 2, ',', '.');} ?></b></td>
	    <td class="borde"><b><?php $RFruPre6 = FrutalesPre($FruPre6,$FrutDet6); ?></b></td>
      <td class="borde"><b><?php $RFruPro6 = FrutalesPro($FruPro6,$FrutDet6); ?></b></td>
      <td class="borde"><b><?php $RFruPos6 = FrutalesPos($FruPos6,$FrutDet6); ?></b></td>
      <td class="borde"><b><?php $TotalFr6 = TotalFrutales($FruHect6,$FruArea6,$FruCa6,$FruEst6,$RFruPre6,$RFruPro6,$RFruPos6); ?></b></td>
    </tr>
    <tr>
      <td class="borde1 a"><b><?php echo $FrutDet7; ?></b>
      <div style="text-align:right!important;margin-top:-12px;margin-right:5px;"><b><?php Estado($FruEst7); ?></b></div>
      </td>
      <td class="borde"><b><?php echo $FruHect7; ?></b></td>
      <td class="borde"><b><?php echo $FruArea7; ?></b></td>
      <td class="borde"><b><?php echo $FruCa7; ?></b></td>
      <td class="borde"><b><?php if ($FruEst7 >0) {echo number_format($FruEst7, 2, ',', '.');} ?></b></td>
      <td class="borde"><b><?php $RFruPre7 = FrutalesPre($FruPre7,$FrutDet7); ?></b></td>
      <td class="borde"><b><?php $RFruPro7 = FrutalesPro($FruPro7,$FrutDet7); ?></b></td>
      <td class="borde"><b><?php $RFruPos7 = FrutalesPos($FruPos7,$FrutDet7); ?></b></td>
      <td class="borde"><b><?php $TotalFr7 = TotalFrutales($FruHect7,$FruArea7,$FruCa7,$FruEst7,$RFruPre7,$RFruPro7,$RFruPos7); ?></b></td>
    </tr>
    <tr>
	    <td class="borde2 a"><b><?php echo $FrutDet8; ?></b>
      <div style="text-align:right!important;margin-top:-12px;margin-right:5px;"><b><?php Estado($FruEst8); ?></b></div>
      </td>
      <td class="borde2"><b><?php echo $FruHect8; ?></b></td>
      <td class="borde2"><b><?php echo $FruArea8; ?></b></td>
      <td class="borde2"><b><?php echo $FruCa8; ?></b></td>
      <td class="borde2"><b><?php if ($FruEst8 >0) {echo number_format($FruEst8, 2, ',', '.');} ?></b></td>
      <td class="borde2"><b><?php $RFruPre8 = FrutalesPre($FruPre8,$FrutDet8); ?></b></td>
      <td class="borde2"><b><?php $RFruPro8 = FrutalesPro($FruPro8,$FrutDet8); ?></b></td>
      <td class="borde2"><b><?php $RFruPos8 = FrutalesPos($FruPos8,$FrutDet8); ?></b></td>
      <td class="borde1"><b><?php $TotalFr8 = TotalFrutales($FruHect8,$FruArea8,$FruCa8,$FruEst8,$RFruPre8,$RFruPro8,$RFruPos8); ?></b></td>
    </tr>
    <tr>
  	    <td class="borde2 a"><b><?php echo $FrutDet9; ?></b>
        <div style="text-align:right!important;margin-top:-12px;margin-right:5px;"><b><?php Estado($FruEst9); ?></b></div>
        </td>
        <td class="borde2"><b><?php echo $FruHect9; ?></b></td>
        <td class="borde2"><b><?php echo $FruArea9; ?></b></td>
        <td class="borde2"><b><?php echo $FruCa9; ?></b></td>
        <td class="borde2"><b><?php if ($FruEst9 >0) {echo number_format($FruEst9, 2, ',', '.');} ?></b></td>
        <td class="borde2"><b><?php $RFruPre9 = FrutalesPre($FruPre9,$FrutDet9); ?></b></td>
        <td class="borde2"><b><?php $RFruPro9 = FrutalesPro($FruPro9,$FrutDet9); ?></b></td>
        <td class="borde2"><b><?php $RFruPos9 = FrutalesPos($FruPos9,$FrutDet9); ?></b></td>
        <td class="borde1"><b><?php $TotalFr9 = TotalFrutales($FruHect9,$FruArea9,$FruCa9,$FruEst9,$RFruPre9,$RFruPro9,$RFruPos9); ?></b></td>
      </tr>
	  <tr>
      <td class="incisoc"><b>Inciso C) Forestales</b></td>
      <td colspan="2" style="margin-left:40px;">A trasladar a Rubro 3</td>
      <td colspan="5" rowspan="2"><p style="text-align: right;margin-top: -0px;margin-right: 5px;">Total inciso B)<br><b style="font-size:8px;">(con 2 decimales)</b></p></td>
		  <td class="borde2"><b><?php $totalFRUTAL = Sumar($TotalFr1,$TotalFr2,$TotalFr3,$TotalFr4,$TotalFr5,$TotalFr6,$TotalFr7,$TotalFr8,$TotalFr9);if($totalFRUTAL >0){echo number_format($totalFRUTAL, 2, ',', '.');} ?></b></td>
	  </tr>
  </tbody>
</table>

	  <table class="tabla5">
  <tbody>
    <tr>
      <td class="borden2 w a"><b><?php echo $PlanDet1; ?></b>
      <div style="text-align:right!important;margin-top:-12px;margin-right:5px;"><b><?php Estado($PlanEst1); ?></b></div>
      </td>
      <td class="borden w1"><b><?php echo $PlanHect1; ?></b></td>
      <td class="borden w2"><b><?php echo $PlanArea1; ?></b></td>
      <td class="borden w1"><b><?php echo $PlanCa1; ?></b></td>
      <td class="borden w"><b><?php if ($PlanEst1 >0) {echo number_format($PlanEst1, 2, ',', '.');} ?></b></td>
      <td class="borden w1"><b><?php $RPlanPre1 = ForestalesPre($PlanPre1,$PlanDet1); ?></b></td>
      <td class="borden w2"><b><?php $RPlanPro1 = ForestalesPro($PlanPro1,$PlanDet1); ?></b></td>
      <td class="borden w2"></td>
      <td class="borden "><b><?php $TotalFo1 = TotalForestales($PlanHect1,$PlanArea1,$PlanCa1,$PlanEst1,$RPlanPre1,$RPlanPro1); ?></b></td>
    </tr>
    <tr>
      <td class="borde1 a"><b><?php echo $PlanDet2; ?></b>
      <div style="text-align:right!important;margin-top:-12px;margin-right:5px;"><b><?php Estado($PlanEst2); ?></b></div>
      </td>
      <td class="borde"><b><?php echo $PlanHect2; ?></b></td>
      <td class="borde"><b><?php echo $PlanArea2; ?></b></td>
      <td class="borde"><b><?php echo $PlanCa2; ?></b></td>
      <td class="borde"><b><?php if ($PlanEst2 >0) {echo number_format($PlanEst2, 2, ',', '.');} ?></b></td>
	    <td class="borde"><b><?php $RPlanPre2 = ForestalesPre($PlanPre2,$PlanDet2); ?></b></td>
      <td class="borde"><b><?php $RPlanPro2 = ForestalesPro($PlanPro2,$PlanDet2); ?></b></td>
      <td class="borde"></td>
      <td class="borde"><b><?php $TotalFo2 = TotalForestales($PlanHect2,$PlanArea2,$PlanCa2,$PlanEst2,$RPlanPre2,$RPlanPro2); ?></b></td>
    </tr>
    <tr>
      <td class="borde1 a"><b><?php echo $PlanDet3; ?></b>
      <div style="text-align:right!important;margin-top:-12px;margin-right:5px;"><b><?php Estado($PlanEst3); ?></b></div>
      </td>
      <td class="borde"><b><?php echo $PlanHect3; ?></b></td>
      <td class="borde"><b><?php echo $PlanArea3; ?></b></td>
      <td class="borde"><b><?php echo $PlanCa3; ?></b></td>
      <td class="borde"><b><?php if ($PlanEst3 >0) {echo number_format($PlanEst3, 2, ',', '.');} ?></b></td>
	    <td class="borde"><b><?php $RPlanPre3 = ForestalesPre($PlanPre3,$PlanDet3); ?></b></td>
      <td class="borde"><b><?php $RPlanPro3 = ForestalesPro($PlanPro3,$PlanDet3); ?></b></td>
      <td class="borde"></td>
      <td class="borde"><b><?php $TotalFo3 = TotalForestales($PlanHect3,$PlanArea3,$PlanCa3,$PlanEst3,$RPlanPre3,$RPlanPro3); ?></b></td>
    </tr>
    <tr>
      <td class="borde1 a"><b><?php echo $PlanDet4; ?></b>
      <div style="text-align:right!important;margin-top:-12px;margin-right:5px;"><b><?php Estado($PlanEst4); ?></b></div>
      </td>
      <td class="borde"><b><?php echo $PlanHect4; ?></b></td>
      <td class="borde"><b><?php echo $PlanArea4; ?></b></td>
      <td class="borde"><b><?php echo $PlanCa4; ?></b></td>
      <td class="borde"><b><?php if ($PlanEst4 >0) {echo number_format($PlanEst4, 2, ',', '.');} ?></b></td>
	    <td class="borde"><b><?php $RPlanPre4 = ForestalesPre($PlanPre4,$PlanDet4); ?></b></td>
      <td class="borde"><b><?php $RPlanPro4 = ForestalesPro($PlanPro4,$PlanDet4); ?></b></td>
      <td class="borde"></td>
      <td class="borde"><b><?php $TotalFo4 = TotalForestales($PlanHect4,$PlanArea4,$PlanCa4,$PlanEst4,$RPlanPre4,$RPlanPro4); ?></b></td>
    </tr>
    <tr>
      <td class="borde1 a"><b><?php echo $PlanDet5; ?></b>
      <div style="text-align:right!important;margin-top:-12px;margin-right:5px;"><b><?php Estado($PlanEst5); ?></b></div>
      </td>
      <td class="borde"><b><?php echo $PlanHect5; ?></b></td>
      <td class="borde"><b><?php echo $PlanArea5; ?></b></td>
      <td class="borde"><b><?php echo $PlanCa5; ?></b></td>
      <td class="borde"><b><?php if ($PlanEst5 >0) {echo number_format($PlanEst5, 2, ',', '.');} ?></b></td>
	    <td class="borde"><b><?php $RPlanPre5 = ForestalesPre($PlanPre5,$PlanDet5); ?></b></td>
      <td class="borde"><b><?php $RPlanPro5 = ForestalesPro($PlanPro5,$PlanDet5); ?></b></td>
      <td class="borde"></td>
      <td class="borde"><b><?php $TotalFo5 = TotalForestales($PlanHect5,$PlanArea5,$PlanCa5,$PlanEst5,$RPlanPre5,$RPlanPro5); ?></b></td>
    </tr>
    <tr>
      <td class="borde1 a"><b><?php echo $PlanDet6 ; ?></b>
      <div style="text-align:right!important;margin-top:-12px;margin-right:5px;"><b><?php Estado($PlanEst6); ?></b></div>
      </td>
      <td class="borde"><b><?php echo $PlanHect6; ?></b></td>
      <td class="borde"><b><?php echo $PlanArea6; ?></b></td>
      <td class="borde"><b><?php echo $PlanCa6; ?></b></td>
      <td class="borde"><b><?php if ($PlanEst6 >0) {echo number_format($PlanEst6, 2, ',', '.');} ?></b></td>
	    <td class="borde"><b><?php $RPlanPre6 = ForestalesPre($PlanPre6,$PlanDet6); ?></b></td>
      <td class="borde"><b><?php $RPlanPro6 = ForestalesPro($PlanPro6,$PlanDet6); ?></b></td>
      <td class="borde"></td>
      <td class="borde"><b><?php $TotalFo6 = TotalForestales($PlanHect6,$PlanArea6,$PlanCa6,$PlanEst6,$RPlanPre6,$RPlanPro6); ?></b></td>
    </tr>
    <tr>
      <td class="borde1 a"><b><?php echo $PlanDet7 ; ?></b>
      <div style="text-align:right!important;margin-top:-12px;margin-right:5px;"><b><?php Estado($PlanEst7); ?></b></div>
      </td>
      <td class="borde"><b><?php echo $PlanHect7; ?></b></td>
      <td class="borde"><b><?php echo $PlanArea7; ?></b></td>
      <td class="borde"><b><?php echo $PlanCa7; ?></b></td>
      <td class="borde"><b><?php if ($PlanEst7 >0) {echo number_format($PlanEst7, 2, ',', '.');} ?></b></td>
      <td class="borde"><b><?php $RPlanPre7 = ForestalesPre($PlanPre7,$PlanDet7); ?></b></td>
      <td class="borde"><b><?php $RPlanPro7 = ForestalesPro($PlanPro7,$PlanDet7); ?></b></td>
      <td class="borde"></td>
      <td class="borde"><b><?php $TotalFo7 = TotalForestales($PlanHect7,$PlanArea7,$PlanCa7,$PlanEst7,$RPlanPre7,$RPlanPro7); ?></b></td>
    </tr>
    <tr>
	    <td class="borde a"><b><?php echo $PlanDet8 ; ?></b>
      <div style="text-align:right!important;margin-top:-12px;margin-right:5px;"><b><?php Estado($PlanEst8); ?></b></div>
      </td>
      <td class="borde"><b><?php echo $PlanHect8; ?></b></td>
      <td class="borde"><b><?php echo $PlanArea8; ?></b></td>
      <td class="borde"><b><?php echo $PlanCa8; ?></b></td>
      <td class="borde"><b><?php if ($PlanEst8 >0) { echo number_format($PlanEst8, 2, ',', '.');} ?></b></td>
      <td class="borde"><b><?php $RPlanPre8 = ForestalesPre($PlanPre8,$PlanDet8); ?></b></td>
      <td class="borde"><b><?php $RPlanPro8 = ForestalesPro($PlanPro8,$PlanDet8); ?></b></td>
      <td class="borde"></td>
      <td class="borde"><b><?php $TotalFo8 = TotalForestales($PlanHect8,$PlanArea8,$PlanCa8,$PlanEst8,$RPlanPre8,$RPlanPro8); ?></b></td>
    </tr>
    <tr>
	    <td class="borde2 a"><b><?php echo $PlanDet9 ; ?></b>
      <div style="text-align:right!important;margin-top:-12px;margin-right:5px;"><b><?php Estado($PlanEst9); ?></b></div>
      </td>
      <td class="borde2"><b><?php echo $PlanHect9; ?></b></td>
      <td class="borde2"><b><?php echo $PlanArea9; ?></b></td>
      <td class="borde2"><b><?php echo $PlanCa9; ?></b></td>
      <td class="borde2"><b><?php if ($PlanEst9 >0) {echo number_format($PlanEst9, 2, ',', '.');} ?></b></td>
      <td class="borde2"><b><?php $RPlanPre9 = ForestalesPre($PlanPre9,$PlanDet9); ?></b></td>
      <td class="borde2"><b><?php $RPlanPro9 = ForestalesPro($PlanPro9,$PlanDet9); ?></b></td>
      <td class="borde2"></td>
      <td class="borde1"><b><?php $TotalFo9 = TotalForestales($PlanHect9,$PlanArea9,$PlanCa9,$PlanEst9,$RPlanPre9,$RPlanPro9); ?></b></td>
    </tr>
	  <tr>
		  <td colspan="8" rowspan="2"><p style="text-align: left;margin-left: 153px;margin-top: 0px;margin-right: 5px;">A trasladar a Formulario 901, Rubro 5</p><p style="text-align: right;margin-top: -25px;margin-right: 5px;">Total inciso C)<br><b style="font-size:8px;">(con 2 decimales)</b></p>
		  </td>
		  <td class="borde2"><b><?php $totalFORES = Sumar($TotalFo1,$TotalFo2,$TotalFo3,$TotalFo4,$TotalFo5,$TotalFo6,$TotalFo7,$TotalFo8,$TotalFo9);if($totalFORES>0){echo number_format($totalFORES, 2, ',', '.');} ?></b></td>
	  </tr>
  </tbody>
</table>
	  <h1 class="rubro3">RUBRO 3: Resumen de valuación de plantaciones</h1>
	  <table>
  <tbody>
    <tr>
      <th class="borden2" scope="row" style="text-align: left;padding-left:5px;width:590px;">Total inciso A) -Olivos</th>
      <td class="borden2"><b><?php $totalOLIVOS; if ($totalOLIVOS >0) { echo number_format($totalOLIVOS, 2, ',', '.');} ?></b></td>
    </tr>
    <tr>
      <th class="borden2" scope="row" style="text-align: left;padding-left:5px;">Total inciso B) -Otros frutales</th>
      <td class="borden2"><b><?php $totalFRUTAL; if($totalFRUTAL > 0){echo number_format($totalFRUTAL, 2, ',', '.');} ?></b></td>
    </tr>
    <tr>
      <th class="borden2" scope="row" style="text-align: left;padding-left:5px;">Total inciso C) -Forestales</th>
      <td class="borden2"><b><?php $totalFORES; if ($totalFORES > 0) {echo number_format($totalFORES, 2, ',', '.');} ?></b></td>
    </tr>
	  <tr>
		  <td colspan="1" rowspan="2">A trasladar a Formulario 901, Rubro 5<p style="text-align: right;margin-top: -12px;margin-right: 5px;">Total Rubro 3<b style="font-size:8px;"><br>(entero redondeado)</b></p>
		  </td>
		  <td class="borde2"><b><?php floatval($TOTAL =floatval($totalOLIVOS)+floatval($totalFRUTAL)+floatval($totalFORES));if($TOTAL >0){echo number_format($TOTAL, 2,',','.');}?></b></td>
	  </tr>
  </tbody>
</table>
	  <h1 class="rubro4">RUBRO 4: Responsables de la presentación<br>4-A: Propietario, condómino, etc.</h1>
	  <p style="margin-top:-7px;"><b>Declaro/ramos bajo juramento en mi/nuestro carácter indicado, que los datos consignados en esta Declaración son correctos y completos y que la misma se ha confeccionado sin omitir ni falsear dato alguno que deba contener, siendo fiel expresión de la verdad.<br>Lugar y fecha:</b></p>

	  <table style="margin-top:-7px;" width="100%" border="1">
  <tbody>
    <tr>
      <th scope="col">APELLIDO Y NOMBRE</th>
      <th scope="col">DOCUMENTO DE IDENTIDAD</th>
      <th scope="col">CARACTER(**)</th>
      <th scope="col">FIRMA</th>
    </tr>
    <tr>
      <td class="a"><?php echo $cnombreApellido; ?></td>
      <td class="a"><?php echo $ctipoDni; echo " - "; echo $cdni; ?></td>
      <td class="a"><?php echo $caracter ?></td>
      <td></td>
    </tr>
  </tbody>
</table>

<p style="margin-top:0px;">(*) Unicamente Libreta Civica, Libreta Enrolamiento ó Doc. Nac. de Identidad&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(**) Propietario, condóminos, usufructuario/s, poseedor/es a título de dueño/s.</p>

<h1 class="rubro4b">4-B: Profesional interviniente</h1>
	  <p style="margin-top:-15px;"><b>Suscribo la presente documentación en su aspecto técnico, asumiendo la responsabilidad propia del ejercício profesional que me compete.<br>Lugar y fecha</b></p>
	  <table style="margin-top:-10px;" width="100%" border="1">
  <tbody>
    <tr>
      <th scope="col">APELLIDO Y NOMBRE</th>
      <th scope="col">MATRICULA N°</th>
      <th scope="col">FIRMA Y SELLO</th>
    </tr>
    <tr>
      <td class="a"><?php if ((isset($mostrarProf)) && ($mostrarProf == 0)) {echo $pnombreApellido;} ?></td>
      <td class="a"><?php if ((isset($mostrarProf)) && ($mostrarProf == 0)) {echo $pmatricula;} ?></td>
      <td></td>
    </tr>
  </tbody>
</table>
	  <table style="margin-top:10px;margin-left:20px; text-align:center;width:700px">
		<tr><td></td></tr>
		<tr>
			<td style="font-size:11px;">___________________________________ </td>
			<td> ________________________________________________ </td>
		</tr>

		<tr>
			<td>SELLO FECHADOR </td>
			<td style="font-size:11px"> Firma del agente receptor</td>
		</tr>
	</table>
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
$filename = "PDFform909-1.pdf";
$dompdf->stream($filename, array("Attachment" => 0));
?>
