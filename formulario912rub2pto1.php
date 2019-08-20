<?php
include("sesion.php");
$pagina='formulario912rub2pto1PHP';
include("sql/conexion.php");
include("seguridadForm.php");
	if (isset($_GET['idform'])) {
		$idform = $_GET['idform'];
		$cons = mysqli_fetch_array(mysqli_query($conexion, "SELECT * FROM `form912` WHERE `codForm912`= '$idform'"));
		$lote = 1; $mostrarProf = $cons['firmaprof'];
	}
	if ((isset($mostrarProf)) && ($mostrarProf === '1')) {
		 $mostrarProf = 'checked="checked" ';
	} else {
			$mostrarProf = ' ';
	}
	function e($most){
		global $cons;
		if (isset($_GET['idform'])) {
			echo $cons[$most];
		}else if (isset($_GET['idCedula'])) {
			echo 0;
		}
	}
	function AutoRadioBox($plantacion, $val){
		global $cons;
		$aux = $val;
		if ($val >= 10) {
			if ($val >= 19) {
				$aux = $val - 18;
			}else{
				$aux = $val - 9;
			}
		}
		if (isset($_GET['idform'])) {
			switch ($cons[$plantacion."Pro".$aux]) {
				case 1:

					echo "
						<td><div class='boxHuggi'><input type='radio' checked name='OliPe".$val."' value='1'></div></td>
						<td><div class='boxHuggi'><input type='radio' name='OliPe".$val."' value='2'></div></td>
						<td><div class='boxHuggi'><input type='radio' name='OliPe".$val."' value='3'></div></td>
					";

					break;
				case 2:
					echo "

						<td><div class='boxHuggi'><input type='radio' name='OliPe".$val."' value='1'></div></td>
						<td><div class='boxHuggi'><input type='radio' checked name='OliPe".$val."' value='2'></div></td>
						<td><div class='boxHuggi'><input type='radio' name='OliPe".$val."' value='3'></div></td>


					";
					break;
				case 3:
					echo "

						<td><div class='boxHuggi'><input type='radio' name='OliPe".$val."' value='1'></div></td>
						<td><div class='boxHuggi'><input type='radio' name='OliPe".$val."' value='2'></div></td>
						<td><div class='boxHuggi'><input type='radio' checked name='OliPe".$val."' value='3'></div></td>


					";
					break;
				default:
					echo "

						<td><div class='boxHuggi'><input type='radio' name='OliPe".$val."' value='1'></div></td>
						<td><div class='boxHuggi'><input type='radio' checked name='OliPe".$val."' value='2'></div></td>
						<td><div class='boxHuggi'><input type='radio' name='OliPe".$val."' value='3'></div></td>


					";
					break;
			}
		}else if (isset($_GET['idCedula'])) {
			echo "

				<td><div class='boxHuggi'><input type='radio' name='OliPe".$val."' value='1'></div></td>
				<td><div class='boxHuggi'><input type='radio' checked name='OliPe".$val."' value='2'></div></td>
				<td><div class='boxHuggi'><input type='radio' name='OliPe".$val."' value='3'></div></td>


			";
		}
	}
	function AutoSelec($plantacion, $val){
		global $cons;
		if (isset($_GET['idform'])) {
			$aux = $val - 9;
			if ($val >= 19) {
				$aux = $val - 18;
			}
			switch ($cons[$plantacion.$aux]) {
				case "Ciruelo":

					echo "
							<select class='inputHuggi' id='Cultivo".$val."' name='Cultivo".$val."'>
								<option selected>Ciruelo</option>
								<option>Duraznero</option>
								<option>Limonero</option>
								<option>Mandarino</option>
								<option>Manzano</option>
								<option>Naranjo</option>
								<option>Peral</option>
								<option>Pomelo</option>
								<option>Vid</option>
							</select>

						";

					break;
				case "Duraznero":

					echo "
							<select class='inputHuggi' id='Cultivo".$val."' name='Cultivo".$val."'>
								<option>Ciruelo</option>
								<option selected>Duraznero</option>
								<option>Limonero</option>
								<option>Mandarino</option>
								<option>Manzano</option>
								<option>Naranjo</option>
								<option>Peral</option>
								<option>Pomelo</option>
								<option>Vid</option>
							</select>

						";

					break;
				case "Limonero":

					echo "
							<select class='inputHuggi' id='Cultivo".$val."' name='Cultivo".$val."'>
								<option>Ciruelo</option>
								<option>Duraznero</option>
								<option selected>Limonero</option>
								<option>Mandarino</option>
								<option>Manzano</option>
								<option>Naranjo</option>
								<option>Peral</option>
								<option>Pomelo</option>
								<option>Vid</option>
							</select>

						";

					break;
				case "Mandarino":

					echo "
							<select class='inputHuggi' id='Cultivo".$val."' name='Cultivo".$val."'>
								<option>Ciruelo</option>
								<option>Duraznero</option>
								<option>Limonero</option>
								<option selected>Mandarino</option>
								<option>Manzano</option>
								<option>Naranjo</option>
								<option>Peral</option>
								<option>Pomelo</option>
								<option>Vid</option>
							</select>

						";

					break;
				case "Manzano":

					echo "
							<select class='inputHuggi' id='Cultivo".$val."' name='Cultivo".$val."'>
								<option>Ciruelo</option>
								<option>Duraznero</option>
								<option>Limonero</option>
								<option>Mandarino</option>
								<option selected>Manzano</option>
								<option>Naranjo</option>
								<option>Peral</option>
								<option>Pomelo</option>
								<option>Vid</option>
							</select>

						";

					break;
				case "Naranjo":

					echo "
							<select class='inputHuggi' id='Cultivo".$val."' name='Cultivo".$val."'>
								<option>Ciruelo</option>
								<option>Duraznero</option>
								<option>Limonero</option>
								<option>Mandarino</option>
								<option>Manzano</option>
								<option selected>Naranjo</option>
								<option>Peral</option>
								<option>Pomelo</option>
								<option>Vid</option>
							</select>

						";

					break;
				case "Peral":

					echo "
							<select class='inputHuggi' id='Cultivo".$val."' name='Cultivo".$val."'>
								<option>Ciruelo</option>
								<option>Duraznero</option>
								<option>Limonero</option>
								<option>Mandarino</option>
								<option>Manzano</option>
								<option>Naranjo</option>
								<option selected>Peral</option>
								<option>Pomelo</option>
								<option>Vid</option>
							</select>

						";

					break;
				case "Pomelo":

					echo "
							<select class='inputHuggi' id='Cultivo".$val."' name='Cultivo".$val."'>
								<option>Ciruelo</option>
								<option>Duraznero</option>
								<option>Limonero</option>
								<option>Mandarino</option>
								<option>Manzano</option>
								<option>Naranjo</option>
								<option>Peral</option>
								<option selected>Pomelo</option>
								<option>Vid</option>
							</select>

						";

					break;
				case "Vid":

					echo "
							<select class='inputHuggi' id='Cultivo".$val."' name='Cultivo".$val."'>
								<option>Ciruelo</option>
								<option>Duraznero</option>
								<option>Limonero</option>
								<option>Mandarino</option>
								<option>Manzano</option>
								<option>Naranjo</option>
								<option>Peral</option>
								<option>Pomelo</option>
								<option selected>Vid</option>
							</select>

						";

					break;
				case "Acacia":

					echo "
							<select class='inputHuggi' id='Cultivo".$val."' name='Cultivo".$val."'>
								<option selected>Acacia</option>
								<option>Alamo</option>
								<option>Eucalipto</option>
								<option>Pino</option>
								<option>Sauce</option>
							</select>

						";

					break;
				case "Alamo":

					echo "
							<select class='inputHuggi' id='Cultivo".$val."' name='Cultivo".$val."'>
								<option>Acacia</option>
								<option selected>Alamo</option>
								<option>Eucalipto</option>
								<option>Pino</option>
								<option>Sauce</option>
							</select>

						";

					break;
				case "Eucalipto":

					echo "
							<select class='inputHuggi' id='Cultivo".$val."' name='Cultivo".$val."'>
								<option>Acacia</option>
								<option>Alamo</option>
								<option selected>Eucalipto</option>
								<option>Pino</option>
								<option>Sauce</option>
							</select>

						";

					break;
				case "Pino":

					echo "
							<select class='inputHuggi' id='Cultivo".$val."' name='Cultivo".$val."'>
								<option>Acacia</option>
								<option>Alamo</option>
								<option>Eucalipto</option>
								<option selected>Pino</option>
								<option>Sauce</option>
							</select>

						";

					break;
				case "Sauce":

					echo "
							<select class='inputHuggi' id='Cultivo".$val."' name='Cultivo".$val."'>
								<option>Acacia</option>
								<option>Alamo</option>
								<option>Eucalipto</option>
								<option>Pino</option>
								<option selected>Sauce</option>
							</select>

						";

					break;
				default:

					echo "
							<select class='inputHuggi' id='Cultivo".$val."' name='Cultivo".$val."'>
								<option selected>Ciruelo</option>
								<option>Duraznero</option>
								<option>Limonero</option>
								<option>Mandarino</option>
								<option>Manzano</option>
								<option>Naranjo</option>
								<option>Peral</option>
								<option>Pomelo</option>
								<option>Vid</option>
							</select>

						";

					break;

			}
		}else if (isset($_GET['idCedula'])) {
			if ($plantacion == "FrutDet") {
				echo "
					<select class='inputHuggi' id='Cultivo".$val."' name='Cultivo".$val."'>
						<option selected>Ciruelo</option>
						<option>Duraznero</option>
						<option>Limonero</option>
						<option>Mandarino</option>
						<option>Manzano</option>
						<option>Naranjo</option>
						<option>Peral</option>
						<option>Pomelo</option>
						<option>Vid</option>
					</select>

				";
			}else{
				echo "
							<select class='inputHuggi' id='Cultivo".$val."' name='Cultivo".$val."'>
								<option selected>Acacia</option>
								<option>Alamo</option>
								<option>Eucalipto</option>
								<option>Pino</option>
								<option>Sauce</option>
							</select>

						";
			}
		}
	}

	function ValEstSilos($val,$est){
		global $cons;
		$aux = trim($cons["SiloEst".$val]);
		if (!isset($_POST['idform']) && $est=="Bueno") {
			echo "checked";
		}else if ($aux==$est) {
			echo "checked";
		}

	}
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<style>
			table th.text-center, td.text-center {
			text-align: center;
			}
			/*
			Descomentar para ver los limites de las tablas
			table,td{
				border-color: black !important;
				border-style: solid !important;
				border-width: 1px !important;
			}
			*/
			.borde{
				border-color: #00ba8b !important;
				border-style: solid !important;
				border-width: 1px !important;
			}
			.accordion-toggle:hover{
				color: white;
				background-color: #00ba8b;
			}
			/* no sacar, es para que los radio box queden bien alineados */
			.huggi{
				margin-left: 24px !important;
				margin-right: 24px !important;
				margin-top: 10px !important;
				margin-bottom: 10px !important;
			}
			.huggiV3{
				width: 47% !important;
			}
			.huggiV4{
				width: 50% !important;
			}
			tr.huggiV2 input {
				width:100%;
			}
			.inputHuggi{
				width: 90%;
				height: 100%;
				margin: 5px;

			}
			.boxHuggi{
				text-align: center;
				vertical-align: middle;
			}
			.Encabezado-Inciso{
				background-color: lightgrey;
			}
		</style>

	</head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script>
		var prueba = function(id,ant,estado){
			$.post("funciones/coef912.php?antiguedad="+ant+"&estado="+estado, function(datos){
				$("#CoefSilos"+id).val(datos);
			});

		};
	</script>
	<script type="text/javascript">
		window.onload=function(){
			ActualizarCoef(1);
			ActualizarCoef(2);
			ActualizarCoef(3);
			Actualizar();
		}

		function round(num){
			return Math.round(num * 100) / 100;
		}
		function ActualizarCoef(j){
			var newDate = new Date();
				var fecha = document.getElementById("SiloFec"+j).value;
				// var anio = newDate.getFullYear();
				var anio = <?php echo $_GET['aniotabla']; ?>;
				var antiguedad = anio - fecha.substr(0,4);
				if (antiguedad <= 0) {
					antiguedad = 1;
				}

				var radios = document.getElementsByName('SiloEst'+j);
				var estado;
				for (var i = 0, length = radios.length; i < length; i++){
					if (radios[i].checked) {
						estado = radios[i].value;
						break;
					}
				}
				if (estado == "Bueno") {
					estado = "B"
				}
				if (estado == "Regular") {
					estado = "R"
				}
				if (estado == "Malo") {
					estado = "M"
				}
				// alert(estado);
				prueba(j, parseInt(antiguedad), estado);



		}
		function Rub2IncisoB(){
			var fechaAct = document.getElementById("SiloFec1").value;

			var CoefA =  parseFloat(document.getElementById("CoefSilos1").value);
			var CoefB =  parseFloat(document.getElementById("CoefSilos2").value);
			var CoefC =  parseFloat(document.getElementById("CoefSilos3").value);
			document.getElementById
			if (document.getElementById("SiloCap1").value=="") {
				document.getElementById("SiloCap1").value=0
			}
			if (document.getElementById("SiloCap2").value=="") {
				document.getElementById("SiloCap2").value=0
			}
			if (document.getElementById("SiloCap3").value=="") {
				document.getElementById("SiloCap3").value=0
			}

			var CapSilos1 = parseFloat(document.getElementById("SiloCap1").value);
			if (CapSilos1<=320) {
				document.getElementById("ValorBasicoSilos1").value= 495;
			}else if (CapSilos1<=670) {
				document.getElementById("ValorBasicoSilos1").value= 327;
			}else if (CapSilos1<=910) {
				document.getElementById("ValorBasicoSilos1").value= 216;
			}else if (CapSilos1<=1280) {
				document.getElementById("ValorBasicoSilos1").value= 163;
			}else{
				document.getElementById("ValorBasicoSilos1").value= 142;
			}

			var CapSilos1 = parseFloat(document.getElementById("SiloCap2").value);
			if (CapSilos1<=320) {
				document.getElementById("ValorBasicoSilos2").value= 423;
			}else if (CapSilos1<=670) {
				document.getElementById("ValorBasicoSilos2").value= 280;
			}else if (CapSilos1<=910) {
				document.getElementById("ValorBasicoSilos2").value= 184;
			}else if (CapSilos1<=1280) {
				document.getElementById("ValorBasicoSilos2").value= 138;
			}else{
				document.getElementById("ValorBasicoSilos2").value= 120;
			}

			var CapSilos1 = parseFloat(document.getElementById("SiloCap3").value);
			if (CapSilos1<=320) {
				document.getElementById("ValorBasicoSilos3").value= 380;
			}else if (CapSilos1<=670) {
				document.getElementById("ValorBasicoSilos3").value= 250;
			}else if (CapSilos1<=910) {
				document.getElementById("ValorBasicoSilos3").value= 165;
			}else if (CapSilos1<=1280) {
				document.getElementById("ValorBasicoSilos3").value= 124;
			}else{
				document.getElementById("ValorBasicoSilos3").value= 106;
			}

			if (isNaN(CoefA)) {
				CoefA= 0;
			}
			if (isNaN(CoefB)) {
				CoefB= 0;
			}
			if (isNaN(CoefC)) {
				CoefC= 0;
			}

			var TotalSilosA;
			var num = TotalSilosA
			TotalSilosA = parseFloat(document.getElementById("SiloCap1").value) * parseFloat(document.getElementById("ValorBasicoSilos1").value) * CoefA
			* parseFloat(document.getElementById("SiloCant1").value);
			document.getElementById("ValorTotalSilos1").value = round(TotalSilosA);

			var TotalSilosB;
			TotalSilosB = parseFloat(document.getElementById("SiloCap2").value) * parseFloat(document.getElementById("ValorBasicoSilos2").value) * CoefB
			* parseFloat(document.getElementById("SiloCant2").value);
			document.getElementById("ValorTotalSilos2").value = round(TotalSilosB);

			var TotalSilosC;
			TotalSilosC = parseFloat(document.getElementById("SiloCap3").value) * parseFloat(document.getElementById("ValorBasicoSilos3").value) * CoefC
			* parseFloat(document.getElementById("SiloCant3").value);
			document.getElementById("ValorTotalSilos3").value = round(TotalSilosC);

			var TotalSilos;
			TotalSilos= TotalSilosA + TotalSilosB + TotalSilosC;
			document.getElementById("TotalSilos").value = round(TotalSilos);
			document.getElementById("TotalIncisoB1").value = round(TotalSilos);
		}
		function Rub2IncisoA(){
			for (var k = 1; k <= 3; k++) {
				for (var i = 1; i <= 18 ; i++) {
					if (isNaN(parseInt(document.getElementById("AlamA"+i+k).value,10))) {
						document.getElementById("AlamA"+i+k).value=0;
					}
				}
			}
			var c = [0,1,2,3,4,5,6];
			var totalrub=0;
			for (var j = 1; j <= 3; j++) {
				for (var i = 1; i <= 3; i++) {
					var valor1=parseFloat(document.getElementById("AlamA"+c[1]+i).value,10)*
							parseFloat(document.getElementById("AlamA"+c[3]+i).value,10);
					var valor2=parseFloat(document.getElementById("AlamA"+c[2]+i).value,10)*
							parseFloat(document.getElementById("AlamA"+c[4]+i).value,10);
					var total=valor1+valor2
					document.getElementById("AlamA"+c[5]+i).value=round(valor1);
					document.getElementById("AlamA"+c[6]+i).value=round(valor2);

					document.getElementById("AlamATotal"+j+i).value=round(total);
					totalrub = totalrub + total;
				}
				for (var i = c.length - 1; i >= 0; i--) {
					c[i]=c[i]+6;
				}
			}
			document.getElementById("TotalIncisoA").value = round(totalrub);
			document.getElementById("TotalIncisoA1").value = round(totalrub);

		}
		function Rub2IncisoC(val){
			// alert("probando");
			var valor;
			for (var i = 1; i < 4 ; i++) {
				if (document.getElementById(val+'1'+i).value == "") {
					document.getElementById(val+'1'+i).value = 0;
				}
				if (document.getElementById(val+'4'+i).value == "") {
					document.getElementById(val+'4'+i).value = 0;
				}
			}

			var totalA=0;
			var totalB=0;
			var Molino11 = parseFloat(document.getElementById(val+'11').value);
			var Molino21 = parseFloat(document.getElementById(val+'21').value);
			var TotalMolino1= Molino11 * Molino21;
			totalA=totalA+TotalMolino1;
			 if (isNaN(TotalMolino1)) {
					document.getElementById(val+'31').value = " ";
			 }else {document.getElementById(val+'31').value = TotalMolino1;}

			var Molino12 = parseFloat(document.getElementById(val+'12').value);
			var Molino22 = parseFloat(document.getElementById(val+'22').value);
			var TotalMolino2= Molino12* Molino22;
			 if (isNaN(TotalMolino2)) {
					document.getElementById(val+'32').value = " ";
			 }else {document.getElementById(val+'32').value = TotalMolino2;totalA=totalA+TotalMolino2;}

			var Molino13 = parseFloat(document.getElementById(val+'13').value);
			var Molino23 = parseFloat(document.getElementById(val+'23').value);
			var TotalMolino3= Molino13 * Molino23;

			 if (isNaN(TotalMolino3)) {
					document.getElementById(val+'33').value = " ";
			 }else {document.getElementById(val+'33').value = TotalMolino3; totalA=totalA+TotalMolino3;}

			var Molino41 = parseFloat(document.getElementById(val+'41').value);
			var Molino51 = parseFloat(document.getElementById(val+'51').value);
			var TotalMolino4= Molino41 * Molino51;

			 if (isNaN(TotalMolino4)) {
					document.getElementById(val+'61').value = " ";
			 }else {document.getElementById(val+'61').value = TotalMolino4; totalB=totalB+TotalMolino4;}

			var Molino42 = parseFloat(document.getElementById(val+'42').value);
			var Molino52 = parseFloat(document.getElementById(val+'52').value);
			var TotalMolino5= Molino42* Molino52;

			 if (isNaN(TotalMolino5)) {
					document.getElementById(val+'62').value = " ";
			 }else {document.getElementById(val+'62').value = TotalMolino5; totalB=totalB+TotalMolino5;}

			var Molino43 = parseFloat(document.getElementById(val+'43').value);
			var Molino53 = parseFloat(document.getElementById(val+'53').value);
			var TotalMolino6= Molino43 * Molino53;
			 if (isNaN(TotalMolino6)) {
					document.getElementById(val+'63').value = " ";
			 }else {document.getElementById(val+'63').value = TotalMolino6; totalB=totalB+TotalMolino6;}

			 // var totalA = TotalMolino1 + TotalMolino2 TotalMolino3
			 if (isNaN(totalA)) {
			 	totalA=0;
			 };
			 if (isNaN(totalB)) {
			 	totalB=0;
			 };
			 var TotalIncisoC= totalA+ totalB
			 if (val=="Molino") {
				 document.getElementById("TotalMolinoA").value = round(totalA);
				 document.getElementById("TotalMolinoB").value = round(totalB);
				 document.getElementById("TotalIncisoC").value = round(TotalIncisoC);
				 document.getElementById("TotalIncisoC1").value = round(TotalIncisoC);
			 }
			 if (val=="Tanque"){
			 	document.getElementById("TotalTanqueA").value = round(totalA);
				document.getElementById("TotalTanqueB").value = round(totalB);
				document.getElementById("TotalIncisoD").value = round(TotalIncisoC);
				document.getElementById("TotalIncisoD1").value = round(TotalIncisoC);

			 }
		}
		function Rub4IncisoA(){
			var totalIncisoA = 0;
			var totalIncisoB = 0;
			var totalIncisoC = 0;
			for (var j =  1; j <=27; j++) {

				var cultivo = document.getElementById("Cultivo"+j).value;
				var hect = document.getElementById("OliHect"+j).value;
				var ca = document.getElementById("OliCa"+j).value;
				var a = document.getElementById("OliArea"+j).value;

				if (hect == "") {
					document.getElementById("OliHect"+j).value = 0;
				}
				if (ca == "") {
					document.getElementById("OliCa"+j).value = 0;
				}
				if (a == "") {
					document.getElementById("OliArea"+j).value = 0;
				}

				var coef = document.getElementById("OliCoef"+j).innerHTML;
				if (ca < 10) {
					ca = "0"+ca;
				}
				if (a < 10) {
					a = "0"+a;
				}
				var ValorColumna3 = hect+"."+a+ca;
				var radios = document.getElementsByName('OliPe'+j);
				var periodo;
				var ValorPeriodo;
				for (var i = 0, length = radios.length; i < length; i++){
					if (radios[i].checked) {
						periodo = radios[i].value;
						break;
					}
				}
				switch (cultivo) {
				    case "Olivo":
				        if (periodo == 1) {
							 ValorPeriodo = 76400;
						}
						if (periodo == 2) {
							 ValorPeriodo = 833626;
						}
						if (periodo == 3) {
							 ValorPeriodo = 277894;
						}
				    break;
				    case "Ciruelo":
				        if (periodo == 1) {
							 ValorPeriodo = 89701;
						}
						if (periodo == 2) {
							 ValorPeriodo = 826818;
						}
						if (periodo == 3) {
							 ValorPeriodo = 272920;
						}
				    break;
				    case "Duraznero":
				        if (periodo == 1) {
							 ValorPeriodo = 80040;
						}
						if (periodo == 2) {
							 ValorPeriodo = 480355;
						}
						if (periodo == 3) {
							 ValorPeriodo = 153497;
						}
				    break;
				    case "Limonero":
				        if (periodo == 1) {
							 ValorPeriodo = 32895;
						}
						if (periodo == 2) {
							 ValorPeriodo = 172504;
						}
						if (periodo == 3) {
							 ValorPeriodo = 56426;
						}
				    break;
				    case "Mandarino":
				        if (periodo == 1) {
							 ValorPeriodo = 32895;
						}
						if (periodo == 2) {
							 ValorPeriodo = 172504;
						}
						if (periodo == 3) {
							 ValorPeriodo = 56426;
						}
				    break;
				    case "Manzano":
				        if (periodo == 1) {
							 ValorPeriodo = 73877;
						}
						if (periodo == 2) {
							 ValorPeriodo = 485346;
						}
						if (periodo == 3) {
							 ValorPeriodo = 165649;
						}
				    break;
				    case "Naranjo":
				        if (periodo == 1) {
							 ValorPeriodo = 32895;
						}
						if (periodo == 2) {
							 ValorPeriodo = 172504;
						}
						if (periodo == 3) {
							 ValorPeriodo = 56426;
						}
				    break;
				    case "Peral":
				        if (periodo == 1) {
							 ValorPeriodo = 92319;
						}
						if (periodo == 2) {
							 ValorPeriodo = 452267;
						}
						if (periodo == 3) {
							 ValorPeriodo = 144219;
						}
				    break;
				    case "Pomelo":
				        if (periodo == 1) {
							 ValorPeriodo = 32895;
						}
						if (periodo == 2) {
							 ValorPeriodo = 172504;
						}
						if (periodo == 3) {
							 ValorPeriodo = 56426;
						}
				    break;
				    case "Vid":
				        if (periodo == 1) {
							 ValorPeriodo = 140600;
						}
						if (periodo == 2) {
							 ValorPeriodo = 552325;
						}
						if (periodo == 3) {
							 ValorPeriodo = 182379;
						}
				    break;
				    case "Acacia":
				        if (periodo == 1) {
							 ValorPeriodo = 10250;
						}
						if (periodo == 2) {
							 ValorPeriodo = 76000;
						}
				    break;
				    case "Alamo":
				        if (periodo == 1) {
							 ValorPeriodo = 16250;
						}
						if (periodo == 2) {
							 ValorPeriodo = 28000;
						}
				    break;
				    case "Eucalipto":
				        if (periodo == 1) {
							 ValorPeriodo = 10250;
						}
						if (periodo == 2) {
							 ValorPeriodo = 35000;
						}
				    break;
				    case "Pino":
				        if (periodo == 1) {
							 ValorPeriodo = 14700;
						}
						if (periodo == 2) {
							 ValorPeriodo = 27600;
						}
				    break;
				    case "Sauce":
				        if (periodo == 1) {
							 ValorPeriodo = 16500;
						}
						if (periodo == 2) {
							 ValorPeriodo = 42000;
						}
				    break;

				}
				var aux = parseFloat(ValorColumna3) * ValorPeriodo * parseFloat(coef)
				document.getElementById("OliVal"+j).value = round(aux);
				document.getElementById("OliVP"+j).value = round(aux);
				if (j<10) {
					totalIncisoA =  (parseFloat(ValorColumna3) * ValorPeriodo * parseFloat(coef)) + totalIncisoA;
				}else if (j<19) {
					totalIncisoB =  (parseFloat(ValorColumna3) * ValorPeriodo * parseFloat(coef)) + totalIncisoB;
				}else if (j>=19	) {
					totalIncisoC =  (parseFloat(ValorColumna3) * ValorPeriodo * parseFloat(coef)) + totalIncisoC;
				}
			}
			document.getElementById("Rub4IncisoA").value = round(parseFloat(totalIncisoA));
			document.getElementById("Rub4IncisoB").value = round(parseFloat(totalIncisoB));
			document.getElementById("Rub4IncisoC").value = round(parseFloat(totalIncisoC));

			document.getElementById("TotalRub4IncisoA").value = round(parseFloat(totalIncisoA));
			document.getElementById("TotalRub4IncisoB").value = round(parseFloat(totalIncisoB));
			document.getElementById("TotalRub4IncisoC").value = round(parseFloat(totalIncisoC));

			document.getElementById("TotalRub4").value = round(parseFloat(totalIncisoA) + parseFloat(totalIncisoB) + parseFloat(totalIncisoC));


		}
		function Actualizar(){
			var totalRub2=0;
			Rub2IncisoA();
			Rub2IncisoC("Molino");
			Rub2IncisoC("Tanque");
			totalRub2 = parseFloat(document.getElementById("TotalIncisoD1").value) +
						parseFloat(document.getElementById("TotalIncisoC1").value) +
						parseFloat(document.getElementById("TotalIncisoB1").value) +
						parseFloat(document.getElementById("TotalIncisoA1").value);
			document.getElementById("TotalRub2").value = totalRub2;

			Rub2IncisoB();
			Rub4IncisoA();

			setTimeout("Actualizar()", 150);

		}
	</script>
	<body>
		<?php
			$pagina='formulario912rub2pto1PHP';
			include("encabezado.php");

		?>
		<div class="main">
			<div class="main-inner">

				<div class="container">

					<div class="widget-header">
						<i class="icon-th-large"></i>
						<h3>Formulario 912</h3>
					</div> <!-- /widget-header -->

					<div class="widget-content">
						<div class="control-group">
							<div class="controls">

							  <form method="POST">
								<div class="accordion" id="accordion2">
									<!---------------------- Rubro 3 ---------------------->
									<div class="accordion-group huggiV3" style="float: left; margin-right: 6%; margin-bottom: 30px;">
										<div class="accordion-heading area">
											<a class="accordion-toggle" href="#rub3" >
												RUBRO 3: RESUMEN DE VALUACION DE INSTALACIONES Y OBRAS ACCESORIAS
											</a>
										</div>
										<div id="rub3" class="accordion-body">
											<div class="accordion-inner">
												<table class="responsive-table table">
													<tr>
														<td class="huggiV3">Total inciso A) Alambrados</td>
														<td class="huggiV4"><input class="form-control" type="text" id="TotalIncisoA1" name="TotalIncisoA1" disabled></td>
													</tr>
													<tr>
														<td>Total inciso B) Silos</td>
														<td><input class="form-control" type="text" id="TotalIncisoB1" name="TotalIncisoB1" disabled value="0"></td>
													</tr>
													<tr>
														<td>Total inciso C) Molinos</td>
														<td><input class="form-control" type="text" id="TotalIncisoC1" name="TotalIncisoC1" disabled></td>
													</tr>
													<tr>
														<td>Total inciso D) Tanques australianos</td>
														<td><input class="form-control" type="text" id="TotalIncisoD1" name="TotalIncisoD1" disabled></td>
													</tr>
													<tr>
														<td>Valor total</td>
														<td><input class="form-control" type="text" id="TotalRub2" name="TotalRub2" disabled></td>
													</tr>
												</table>
											</div>
										</div>
									</div>
									<!---------------------- Rubro 5 ---------------------->
									<div class="accordion-group huggiV3" style="float: left;">
										<div class="accordion-heading area">
											<a class="accordion-toggle" href="#rub5">
												RUBRO 5: RESUMEN DE VALUACION DE PLANTACIONES
											</a>
										</div>
										<div id="rub5" class="accordion-body">
											<div class="accordion-inner">
												<table class="responsive-table table tablahuggi">
													<tr>
														<td class="huggiV3">Total inciso A) Olivos</td>
														<td class="huggiV4"><input class="form-control" type="text" id="TotalRub4IncisoA" name="TotalRub4IncisoA" disabled></td>
													</tr>
													<tr>
														<td >Total inciso B) Otros frutales</td>
														<td ><input class="form-control" type="text" id="TotalRub4IncisoB" name="TotalRub4IncisoB" disabled></td>
													</tr>
													<tr>
														<td >Total inciso C) Forestales</td>
														<td ><input class="form-control" type="text" id="TotalRub4IncisoC" name="TotalRub4IncisoC" disabled></td>
													</tr>
													<tr>
														<td >Valor total</td>
														<td ><input class="form-control" type="text" id="TotalRub4" name="TotalRub4" disabled></td>
													</tr>
												</table>
											</div>
										</div>
									</div>
									<!---------------------- Rubro 2 ---------------------->
									<div class="accordion-group" style=" clear: both;">
										<div class="accordion-heading area ">
											<a  id="r2" class="accordion-toggle" data-toggle="collapse" href="#rub2" onclick="estilo(this)">
												RUBRO 2: VALUACION DE INSTALACIONES Y OBRAS ACCESORIAS
											</a>
										</div>
										<div id="rub2" class="accordion-body collapse">
											<div class="accordion-inner">
												<!-- Inciso A -->

												<table class="table table-bordered responsive-table borde">
													<tr>
														<td colspan="10" class="Encabezado-Inciso"><h3 align="center">Inciso A -- Alambrados</h3>
														</td>
													</tr>
													<tr>
														<td rowspan="2" width="5%">Tipo</td>
														<td rowspan="2" width="20%">Descripcion</td>
														<td rowspan="2" width="10%">Estado de <br>conservacc</td>
														<td width="15%" colspan="2">Longitud en m</td>
														<td width="15%" colspan="2">Valores basicos por m</td>
														<td width="15%" colspan="2" width="200px">valor</td>
														<td width="7%" rowspan="2">valor total</td>
													</tr>
													<tr>
														<td>1 No med</td>
														<td>2 med</td>
														<td>3 No med</td>
														<td>4 med</td>
														<td>5 No med</td>
														<td>6 med</td>
													</tr>
													<tr>
														<td rowspan="4">A</td>
														<td rowspan="4">7 Hilos lisos, 2 hilos de púas, postes de madera dura a 12 mts, 5 varillas de madera dura</td>
													</tr>
													<tr>
														<td>Bueno</td>
														<td><input class="form-control"  name="AlamA11" id="AlamA11" value="<?php e("AlamA1"); ?>"></td>
														<td><input class="form-control"  name="AlamA21" id="AlamA21" value="<?php e("AlamA4"); ?>"></td>
														<td><input class="form-control"  name="AlamA31" id="AlamA31" value="60" disabled></td>
														<td><input class="form-control"  name="AlamA41" id="AlamA41" value="30" disabled></td>
														<td><input class="form-control"  name="AlamA51" id="AlamA51" value="0" disabled></td>
														<td><input class="form-control"  name="AlamA61" id="AlamA61" value="0" disabled></td>
														<td><input class="form-control"  name="AlamATotal11" id="AlamATotal11" disabled></td>
													</tr>
													<tr>
														<td>Regular</td>
														<td><input class="form-control"  name="AlamA12" id="AlamA12" value="<?php e("AlamA2"); ?>"></td>
														<td><input class="form-control"  name="AlamA22" id="AlamA22" value="<?php e("AlamA5"); ?>"></td>
														<td><input class="form-control"  name="AlamA32" id="AlamA32" value="30" disabled></td>
														<td><input class="form-control"  name="AlamA42" id="AlamA42" value="15" disabled></td>
														<td><input class="form-control"  name="AlamA52" id="AlamA52" disabled></td>
														<td><input class="form-control"  name="AlamA62" id="AlamA62" disabled></td>
														<td><input class="form-control"  name="AlamATotal12" id="AlamATotal12" disabled></td>
													</tr>
													<tr>
														<td>Malo</td>
														<td><input class="form-control"  name="AlamA13" id="AlamA13" value="<?php e("AlamA3"); ?>"></td>
														<td><input class="form-control"  name="AlamA23" id="AlamA23" value="<?php e("AlamA6"); ?>"></td>
														<td><input class="form-control"  name="AlamA33" id="AlamA33" value="15" disabled></td>
														<td><input class="form-control"  name="AlamA43" id="AlamA43" value="7.5" disabled></td>
														<td><input class="form-control"  name="AlamA53" id="AlamA53" disabled></td>
														<td><input class="form-control"  name="AlamA63" id="AlamA63" disabled></td>
														<td><input class="form-control"  name="AlamATotal13" id="AlamATotal13" disabled></td>
													</tr>
													<tr>
														<td rowspan="4">B</td>
														<td rowspan="4">5 Hilos lisos, 2 hilos de púas, postes de madera dura a 15 mts, 5 varillas de madera dura</td>
													</tr>
													<tr>
														<td>Bueno</td>
														<td><input class="form-control"  name="AlamA71" id="AlamA71" value="<?php e("AlamA7"); ?>"></td>
														<td><input class="form-control"  name="AlamA81" id="AlamA81" value="<?php e("AlamA10"); ?>"></td>
														<td><input class="form-control"  name="AlamA91" id="AlamA91" value="45" disabled></td>
														<td><input class="form-control"  name="AlamA101" id="AlamA101" value="22.5" disabled></td>
														<td><input class="form-control"  name="AlamA111" id="AlamA111" disabled></td>
														<td><input class="form-control"  name="AlamA121" id="AlamA121" disabled></td>
														<td><input class="form-control"  name="AlamATotal21" id="AlamATotal21" disabled></td>
													</tr>
													<tr>
														<td>Regular</td>
														<td><input class="form-control"  name="AlamA72" id="AlamA72" value="<?php e("AlamA8"); ?>"></td>
														<td><input class="form-control"  name="AlamA82" id="AlamA82" value="<?php e("AlamA11"); ?>"></td>
														<td><input class="form-control"  name="AlamA92" id="AlamA92" value="22.5" disabled></td>
														<td><input class="form-control"  name="AlamA102" id="AlamA102" value="12" disabled></td>
														<td><input class="form-control"  name="AlamA112" id="AlamA112" disabled></td>
														<td><input class="form-control"  name="AlamA122" id="AlamA122" disabled></td>
														<td><input class="form-control"  name="AlamATotal22" id="AlamATotal22" disabled></td>
													</tr>
													<tr>
														<td>Malo</td>
														<td><input class="form-control"  name="AlamA73" id="AlamA73" value="<?php e("AlamA9"); ?>"></td>
														<td><input class="form-control"  name="AlamA83" id="AlamA83" value="<?php e("AlamA12"); ?>"></td>
														<td><input class="form-control"  name="AlamA93" id="AlamA93" value="12.5" disabled></td>
														<td><input class="form-control"  name="AlamA103" id="AlamA103" value="6" disabled></td>
														<td><input class="form-control"  name="AlamA113" id="AlamA113" disabled></td>
														<td><input class="form-control"  name="AlamA123" id="AlamA123" disabled></td>
														<td><input class="form-control"  name="AlamATotal23" id="AlamATotal23" disabled></td>
													</tr>
													<tr>
														<td rowspan="4">C</td>
														<td rowspan="4">2 Hilos lisos, 1 hilos de púas, postes de madera semidura a 15 mts, 5 varillas de madera semidura</td>
													</tr>
													<tr>
														<td>Bueno</td>
														<td><input class="form-control"  name="AlamA131" id="AlamA131" value="<?php e("AlamA13"); ?>"></td>
														<td><input class="form-control"  name="AlamA141" id="AlamA141" value="<?php e("AlamA16"); ?>"></td>
														<td><input class="form-control"  name="AlamA151" id="AlamA151" value="30" disabled></td>
														<td><input class="form-control"  name="AlamA161" id="AlamA161"value="15" disabled></td>
														<td><input class="form-control"  name="AlamA171" id="AlamA171" disabled></td>
														<td><input class="form-control"  name="AlamA181" id="AlamA181" disabled></td>
														<td><input class="form-control"  name="AlamATotal31" id="AlamATotal31" disabled></td>
													</tr>
													<tr>
														<td>Regular</td>
														<td><input class="form-control"  name="AlamA132" id="AlamA132" value="<?php e("AlamA14"); ?>"></td>
														<td><input class="form-control"  name="AlamA142" id="AlamA142" value="<?php e("AlamA17"); ?>"></td>
														<td><input class="form-control"  name="AlamA152" id="AlamA152" value="15" disabled></td>
														<td><input class="form-control"  name="AlamA162" id="AlamA162" value="7.5" disabled></td>
														<td><input class="form-control"  name="AlamA172" id="AlamA172" disabled></td>
														<td><input class="form-control"  name="AlamA182" id="AlamA182" disabled></td>
														<td><input class="form-control"  name="AlamATotal32" id="AlamATotal32" disabled></td>
													</tr>
													<tr>
														<td>Malo</td>
														<td><input class="form-control"  name="AlamA133" id="AlamA133" value="<?php e("AlamA15"); ?>"></td>
														<td><input class="form-control"  name="AlamA143" id="AlamA143" value="<?php e("AlamA18"); ?>"></td>
														<td><input class="form-control"  name="AlamA153" id="AlamA153" value="7.5" disabled></td>
														<td><input class="form-control"  name="AlamA163" id="AlamA163" value="5" disabled></td>
														<td><input class="form-control"  name="AlamA173" id="AlamA173" disabled></td>
														<td><input class="form-control"  name="AlamA183" id="AlamA183" disabled></td>
														<td><input class="form-control"  name="AlamATotal33" id="AlamATotal33" disabled>
													</td>
													<tr>
														<td colspan="9">Total inciso A rub 2:</td> <td><input class="form-control"  name="TotalIncisoA" id="TotalIncisoA" disabled> </td>
													</tr>
												</table>
												<!-- Inciso B -->

												<table class="table table-bordered responsive-table borde text-center">
													<tr>
														<td colspan="13" class="Encabezado-Inciso"><h3 align="center">inciso B -- Silos</h3>
														</td>
													</tr>
													<tr>
														<td rowspan="2">Tipo</td>
														<td rowspan="2">Descripcion</td>
														<td rowspan="2" colspan="2">Estado de conservacion</td>
														<td colspan="4">Data</td>
														<td rowspan="2">Cantidad de Silos</td>
														<td>1</td>
														<td>2</td>
														<td>3</td>
														<td rowspan="2">Valor total</td>
													</tr>
													<tr>
														<td colspan="2">Dia</td>
														<td>Mes</td>
														<td>Año</td>
														<td>Capacidad en M3</td>
														<td>Coeficiente de ajuste tabla de deprecia</td>
														<td>Valor basico por M3</td>
													</tr>
													<tr>
														<td rowspan="3">A</td>
														<td rowspan="3">De hormigon</td>
														<td>bueno</td>
														<td><input id="SiloEst1" type="radio" name="SiloEst1" value="Bueno" onclick="ActualizarCoef(1)"
															<?php ValEstSilos(1,"Bueno") ?> ></td>
														<td colspan="4" rowspan="3"><input class="form-control" type="date" name="SiloFec1" id="SiloFec1" onchange="ActualizarCoef(1)" value="<?php e("SiloFec1"); ?>"></td>
														<td rowspan="3"><input class="form-control" type="text" name="SiloCant1" id="SiloCant1"
															value="<?php e("SiloCant1"); ?>">
														</td>
														<td rowspan="3"> <input class="form-control" type="text" name="SiloCap1" id="SiloCap1"
															value="<?php e("SiloCap1"); ?>">
														</td>
														<td rowspan="3"><input class="form-control" type="text" name="CoefSilos1" id="CoefSilos1" value="0" disabled>
														</td>
														<td rowspan="3"><input class="form-control" type="text" name="ValorBasicoSilos1" id="ValorBasicoSilos1" value="0" disabled>
														</td>
														<td rowspan="3"><input class="form-control" type="text" name="ValorTotalSilos1" id="ValorTotalSilos1" value="0" disabled>
														</td>
													</tr>
													<tr>
														<td>Regular</td>
														<td><input id="SiloEst1" type="radio" name="SiloEst1" value="Regular" onclick="ActualizarCoef(1)"
															<?php ValEstSilos(1,"Regular") ?> ></td>
													</tr>
													<tr>
														<td>Malo</td>
														<td><input id="SiloEst1" type="radio" name="SiloEst1" value="Malo" onclick="ActualizarCoef(1)"
															<?php ValEstSilos(1,"Malo") ?> ></td>
													</tr>
													<tr>
														<td rowspan="3">B</td>
														<td rowspan="3">De mamposteria</td>
														<td>bueno</td>
														<td><input id="SiloEst2" type="radio" name="SiloEst2" value="Bueno" checked onclick="ActualizarCoef(2)"
															<?php ValEstSilos(2,"Bueno") ?> ></td>
														<td colspan="4" rowspan="3"><input class="form-control" type="date" name="SiloFec2" id="SiloFec2" onchange="ActualizarCoef(2)"
															value="<?php e("SiloFec2"); ?>"></td>
														<td rowspan="3"><input class="form-control" type="text" name="SiloCant2" id="SiloCant2"
															value="<?php e("SiloCant2"); ?>">
														</td>
														<td rowspan="3"> <input class="form-control" type="text" name="SiloCap2" id="SiloCap2"
															value="<?php e("SiloCap2"); ?>">
														</td>
														<td rowspan="3"><input class="form-control" type="text" name="CoefSilos2" id="CoefSilos2" value="0" disabled>
														</td>
														<td rowspan="3"><input class="form-control" type="text" name="ValorBasicoSilos2" id="ValorBasicoSilos2" value="0" disabled>
														</td>
														<td rowspan="3"><input class="form-control" type="text" name="ValorTotalSilos2" id="ValorTotalSilos2" value="0" disabled>
														</td>
													</tr>
													<tr>
														<td>Regular</td>
														<td><input id="SiloEst2" type="radio" name="SiloEst2" value="Regular" onclick="ActualizarCoef(2)"
															<?php ValEstSilos(2,"Regular") ?> ></td>
													</tr>
													<tr>
														<td>Malo</td>
														<td><input id="SiloEst2" type="radio" name="SiloEst2" value="Malo" onclick="ActualizarCoef(2)"
															<?php ValEstSilos(2,"Malo") ?> ></td>
													</tr>
													<tr>
														<td rowspan="3">C</td>
														<td rowspan="3">De Chapa</td>
														<td>bueno</td>
														<td><input id="SiloEst3" type="radio" name="SiloEst3" value="Bueno" checked onclick="ActualizarCoef(3)"
															<?php ValEstSilos(3,"Bueno") ?> ></td>
														<td colspan="4" rowspan="3"><input class="form-control" type="date" name="SiloFec3" id="SiloFec3" onchange="ActualizarCoef(3)"
															value="<?php e("SiloFec3"); ?>"></td>
														<td rowspan="3"><input class="form-control" type="text" name="SiloCant3" id="SiloCant3"
															value="<?php e("SiloCant3"); ?>">
														</td>
														<td rowspan="3"> <input class="form-control" type="text" name="SiloCap3" id="SiloCap3"
															value="<?php e("SiloCap3"); ?>">
														</td>
														<td rowspan="3"><input class="form-control" type="text" name="CoefSilos3" id="CoefSilos3" value="0" disabled>
														</td>
														<td rowspan="3"><input class="form-control" type="text" name="ValorBasicoSilos3" id="ValorBasicoSilos3" value="0" disabled>
														</td>
														<td rowspan="3"><input class="form-control" type="text" name="ValorTotalSilos3" id="ValorTotalSilos3" value="0" disabled>
														</td>
													</tr>
													<tr>
														<td>Regular</td>
														<td><input id="SiloEst3" type="radio" name="SiloEst3" value="Regular" onclick="ActualizarCoef(3)"
															<?php ValEstSilos(3,"Regular") ?> ></td>
													</tr>
													<tr>
														<td>Malo</td>
														<td><input id="SiloEst3" type="radio" name="SiloEst3" value="Malo" onclick="ActualizarCoef(3)"
															<?php ValEstSilos(3,"Malo") ?> ></td>
													</tr>
													<tr>
														<td colspan="12">Total Inciso B rub 2: </td><td><input class="form-control" name="TotalSilos" id="TotalSilos" value="0" disabled>
														</td>
													</tr>
												</table>
												<!-- Inciso C Version 2-->

												<table class="table table-bordered responsive-table borde" align="center">
													<tr>
														<td colspan="12" class="Encabezado-Inciso"><h3 align="center">Inciso C -- Molinos</h3>
														</td>
													</tr>
													<tr>
														<td width="3%" rowspan="3">tipo</td>
														<td width="10%" rowspan="3">Descripcion</td>
														<td width="60%" colspan="9">Estado de conservacion</td>
														<td width="10%" rowspan="3">Valor</td>
													</tr>
													<tr>
														<td colspan="3" width="20%">Bueno</td>
														<td colspan="3" width="20%">Regular</td>
														<td colspan="3" width="20%">Malo</td>
													</tr>
													<tr>
														<td >1 <br> Cant de unid</td>
														<td >2 <br> Valor basico por unidad</td>
														<td>3 <br> Valor (1*2)</td>
														<td>4 <br> Cant de unid</td>
														<td>5 <br> Valor basico por unidad</td>
														<td>6 <br> Valor (4*5)</td>
														<td>7 <br> Cant de unid</td>
														<td>8 <br> Valor basico por unidad</td>
														<td>9 <br> Valor (7*8)</td>
													</tr>
													<tr class="huggiV2">
														<td>A</td>
														<td>Torre reforzada c/ tanque elevado</td>
														<td><input class="form-control" type="text" id="Molino11" name="Molino11" value="<?php e("Molino1"); ?>"></td>
														<td><input class="form-control" type="text" id="Molino21" name="Molino21" disabled value="50000"></td>
														<td><input class="form-control" type="text" id="Molino31" name="Molino31" disabled></td>
														<td><input class="form-control" type="text" id="Molino12" name="Molino12" value="<?php e("Molino2"); ?>"></td>
														<td><input class="form-control" type="text" id="Molino22" name="Molino22" disabled value="40000"></td>
														<td><input class="form-control" type="text" id="Molino32" name="Molino32" disabled></td>
														<td><input class="form-control" type="text" id="Molino13" name="Molino13" value="<?php e("Molino3"); ?>"></td>
														<td><input class="form-control" type="text" id="Molino23" name="Molino23" disabled value="30000"></td>
														<td><input class="form-control" type="text" id="Molino33" name="Molino33" disabled></td>
														<td><input class="form-control" type="text" id="TotalMolinoA" name="TotalMolinoA" disabled></td>
													</tr>
													<tr>
														<td>B</td>
														<td>Torre comun s/ tanque elevado</td>
														<td><input class="form-control" type="text" id="Molino41" name="Molino41" value="<?php e("Molino4"); ?>"></td>
														<td><input class="form-control" type="text" id="Molino51" name="Molino51" disabled value="35000"></td>
														<td><input class="form-control" type="text" id="Molino61" name="Molino61" disabled></td>
														<td><input class="form-control" type="text" id="Molino42" name="Molino42" value="<?php e("Molino5"); ?>"></td>
														<td><input class="form-control" type="text" id="Molino52" name="Molino52" disabled value="25000"></td>
														<td><input class="form-control" type="text" id="Molino62" name="Molino62" disabled></td>
														<td><input class="form-control" type="text" id="Molino43" name="Molino43" value="<?php e("Molino6"); ?>"></td>
														<td><input class="form-control" type="text" id="Molino53" name="Molino53" disabled value="20000"></td>
														<td><input class="form-control" type="text" id="Molino63" name="Molino63" disabled></td>
														<td><input class="form-control" type="text" id="TotalMolinoB" name="TotalMolinoB" disabled></td>
													</tr>
													<tr>
														<td colspan="11"></td><td><input class="form-control" type="text" id="TotalIncisoC" name="TotalIncisoC" disabled></td>
													</tr>
												</table>
												<!-- Inciso D -->

												<table class="table table-bordered responsive-table borde" align="center">
													<tr>
														<td colspan="12" class="Encabezado-Inciso"><h3 align="center">Inciso D -- Tanques australianos</h3>
														</td>
													</tr>
													<tr>
														<td width="3%" rowspan="3">tipo</td>
														<td width="10%" rowspan="3">Descripcion</td>
														<td width="60%" colspan="9">Estado de conservacion</td>
														<td width="10%" rowspan="3">Valor</td>
													</tr>
													<tr>
														<td colspan="3" width="20%">Bueno</td>
														<td colspan="3" width="20%">Regular</td>
														<td colspan="3" width="20%">Malo</td>
													</tr>
													<tr>
														<td >1 <br> Cant de unid</td>
														<td >2 <br> Valor basico por unidad</td>
														<td>3 <br> Valor (1*2)</td>
														<td>4 <br> Cant de unid</td>
														<td>5 <br> Valor basico por unidad</td>
														<td>6 <br> Valor (4*5)</td>
														<td>7 <br> Cant de unid</td>
														<td>8 <br> Valor basico por unidad</td>
														<td>9 <br> Valor (7*8)</td>
													</tr>
													<tr class="huggiV2">
														<td>A</td>
														<td>De chapa de zinc</td>
														<td><input class="form-control" type="text" id="Tanque11" name="Tanque11" value="<?php e("Tanque1"); ?>"></td>
														<td><input class="form-control" type="text" id="Tanque21" name="Tanque21" disabled value="15000"></td>
														<td><input class="form-control" type="text" id="Tanque31" name="Tanque31" disabled></td>
														<td><input class="form-control" type="text" id="Tanque12" name="Tanque12" value="<?php e("Tanque2"); ?>"></td>
														<td><input class="form-control" type="text" id="Tanque22" name="Tanque22" disabled value="10000"></td>
														<td><input class="form-control" type="text" id="Tanque32" name="Tanque32" disabled></td>
														<td><input class="form-control" type="text" id="Tanque13" name="Tanque13" value="<?php e("Tanque3"); ?>"></td>
														<td><input class="form-control" type="text" id="Tanque23" name="Tanque23" disabled value="7500"></td>
														<td><input class="form-control" type="text" id="Tanque33" name="Tanque33" disabled></td>
														<td><input class="form-control" type="text" id="TotalTanqueA" name="TotalTanqueA" disabled></td>
													</tr>
													<tr>
														<td>B</td>
														<td>De hormigon</td>
														<td><input class="form-control" type="text" id="Tanque41" name="Tanque41" value="<?php e("Tanque4"); ?>"></td>
														<td><input class="form-control" type="text" id="Tanque51" name="Tanque51" disabled value="15000"></td>
														<td><input class="form-control" type="text" id="Tanque61" name="Tanque61" disabled></td>
														<td><input class="form-control" type="text" id="Tanque42" name="Tanque42" value="<?php e("Tanque5"); ?>"></td>
														<td><input class="form-control" type="text" id="Tanque52" name="Tanque52" disabled value="10000"></td>
														<td><input class="form-control" type="text" id="Tanque62" name="Tanque62" disabled></td>
														<td><input class="form-control" type="text" id="Tanque43" name="Tanque43" value="<?php e("Tanque6"); ?>"></td>
														<td><input class="form-control" type="text" id="Tanque53" name="Tanque53" disabled value="7500"></td>
														<td><input class="form-control" type="text" id="Tanque63" name="Tanque63" disabled></td>
														<td><input class="form-control" type="text" id="TotalTanqueB" name="TotalTanqueB" disabled></td>
													</tr>
													<tr>
														<td colspan="11"></td><td><input class="form-control" type="text" id="TotalIncisoD" name="TotalIncisoD" disabled></td>
													</tr>
												</table>
											</div>
										</div>
									</div>

									<!---------------------- Rubro 4 ---------------------->
									<div class="accordion-group">
										<div class="accordion-heading area">
											<a class="accordion-toggle" data-toggle="collapse" href="#rub4">
												RUBRO 4: VALUACION DE PLANTACIONES FRUTALES Y FORESTALES
											</a>
										</div>
										<div id="rub4" class="accordion-body collapse">
											<div class="accordion-inner">
												<table class="table table-bordered responsive-table borde">
													<tr>
														<td >Plantaciones</td>
														<td >Hectarea</td>
														<td >Area</td>
														<td >Cantiarea</td>
														<td  colspan="2">Coef de ajuste por estado sanitario</td>
														<td colspan="3">Valor basico por Ha. en periodo de</td>
														<td > <br>Valor</td>
														<td >Valor por parcela</td>
													</tr>

													<tr>
														<td colspan="6" style="background-color: #D9D9D9"> <h4>Inciso A) Olivos</h4> </td>
														<td style="background-color: #D9D9D9; border-color: grey !important;"><strong>Prep.</strong> </td>
														<td style="background-color: #D9D9D9; border-color: grey !important;"><strong>Produc.</strong> </td>
														<td style="background-color: #D9D9D9; border-color: grey !important;"><strong>Posp.</strong> </td>
														<td colspan="2" style="background-color: #D9D9D9"></td>
													</tr>
													<tr>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="Cultivo1" name="Cultivo1" value="Olivo" disabled></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliHect1" name="OliHect1" value="<?php e("OliHect1"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliArea1" name="OliArea1" value="<?php e("OliArea1"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliCa1" name="OliCa1" value="<?php e("OliCa1"); ?>"></td>
														<td id="">Bueno</td>
														<td id="OliCoef1">1.00</td>
														<?php AutoRadioBox("Oli",1); ?>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVal1" name="OliVal1" disabled></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVP1" name="OliVP1" disabled></td>
													</tr>
													<tr>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="Cultivo2" name="Cultivo2" value="Olivo" disabled></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliHect2" name="OliHect2" value="<?php e("OliHect2"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliArea2" name="OliArea2" value="<?php e("OliArea2"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliCa2" name="OliCa2" value="<?php e("OliCa2"); ?>"></td>
														<td id="">Regular</td>
														<td id="OliCoef2">0.60</td>
														<?php AutoRadioBox("Oli",2); ?>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVal2" name="OliVal2" disabled></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVP2" name="OliVP2" disabled></td>
													</tr>
													<tr>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="Cultivo3" name="Cultivo3" value="Olivo" disabled></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliHect3" name="OliHect3" value="<?php e("OliHect3"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliArea3" name="OliArea3" value="<?php e("OliArea3"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliCa3" name="OliCa3" value="<?php e("OliCa3"); ?>"></td>
														<td id="">Malo</td>
														<td id="OliCoef3">0.25</td>
														<?php AutoRadioBox("Oli",3); ?>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVal3" name="OliVal3" disabled></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVP3" name="OliVP3" disabled></td>
													</tr>

													<tr>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="Cultivo4" name="Cultivo4" value="Olivo" disabled></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliHect4" name="OliHect4" value="<?php e("OliHect4"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliArea4" name="OliArea4" value="<?php e("OliArea4"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliCa4" name="OliCa4" value="<?php e("OliCa4"); ?>"></td>
														<td id="">Bueno</td>
														<td id="OliCoef4">1.00</td>
														<?php AutoRadioBox("Oli",4); ?>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVal4" name="OliVal4" disabled></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVP4" name="OliVP4" disabled></td>
													</tr>
													<tr>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="Cultivo5" name="Cultivo5" value="Olivo" disabled></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliHect5" name="OliHect5" value="<?php e("OliHect5"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliArea5" name="OliArea5" value="<?php e("OliArea5"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliCa5" name="OliCa5" value="<?php e("OliCa5"); ?>"></td>
														<td id="">Regular</td>
														<td id="OliCoef5">0.60</td>
														<?php AutoRadioBox("Oli",5); ?>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVal5" name="OliVal5" disabled></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVP5" name="OliVP5" disabled></td>
													</tr>
													<tr>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="Cultivo6" name="Cultivo6" value="Olivo" disabled></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliHect6" name="OliHect6" value="<?php e("OliHect6"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliArea6" name="OliArea6" value="<?php e("OliArea6"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliCa6" name="OliCa6" value="<?php e("OliCa6"); ?>"></td>
														<td id="">Malo</td>
														<td id="OliCoef6">0.25</td>
														<?php AutoRadioBox("Oli",6); ?>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVal6" name="OliVal6" disabled></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVP6" name="OliVP6" disabled></td>
													</tr>

													<tr>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="Cultivo7" name="Cultivo7" value="Olivo" disabled></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliHect7" name="OliHect7" value="<?php e("OliHect7"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliArea7" name="OliArea7" value="<?php e("OliArea7"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliCa7" name="OliCa7" value="<?php e("OliCa7"); ?>"></td>
														<td id="">Bueno</td>
														<td id="OliCoef7">1.00</td>
														<?php AutoRadioBox("Oli",7); ?>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVal7" name="OliVal7" disabled></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVP7" name="OliVP7" disabled></td>
													</tr>
													<tr>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="Cultivo8" name="Cultivo8" value="Olivo" disabled></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliHect8" name="OliHect8" value="<?php e("OliHect8"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliArea8" name="OliArea8" value="<?php e("OliArea8"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliCa8" name="OliCa8" value="<?php e("OliCa8"); ?>"></td>
														<td id="">Regular</td>
														<td id="OliCoef8">0.60</td>
														<?php AutoRadioBox("Oli",8); ?>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVal8" name="OliVal8" disabled></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVP8" name="OliVP8" disabled></td>
													</tr>
													<tr>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="Cultivo9" name="Cultivo9" value="Olivo" disabled></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliHect9" name="OliHect9" value="<?php e("OliHect9"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliArea9" name="OliArea9" value="<?php e("OliArea9"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliCa9" name="OliCa9" value="<?php e("OliCa9"); ?>"></td>
														<td id="">Malo</td>
														<td id="OliCoef9">0.25</td>
														<?php AutoRadioBox("Oli",9); ?>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVal9" name="OliVal9" disabled></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVP9" name="OliVP9" disabled></td>
													</tr>
													<tr>
														<td colspan="9"></td>
														<td >Total Inciso A)</td>
														<td style="padding: 0 !important;"><input type="text"  class="inputHuggi" id="Rub4IncisoA" name="Rub4IncisoA" disabled></td>
													</tr>

													<tr>
														<td colspan="6" style="background-color: #D9D9D9"> <h4>Inciso B) Otros frutales</h4> </td>
														<td style="background-color: #D9D9D9; border-color: grey !important;"><strong>Prep.</strong> </td>
														<td style="background-color: #D9D9D9; border-color: grey !important;"><strong>Produc.</strong> </td>
														<td style="background-color: #D9D9D9; border-color: grey !important;"><strong>Posp.</strong> </td>
														<td colspan="2" style="background-color: #D9D9D9"></td>
													</tr>
													<tr>
														<td style="padding: 0 !important;">
															<?php AutoSelec("FrutDet",10); ?>
														</td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliHect10" name="OliHect10" value="<?php e("FruHect1"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliArea10" name="OliArea10" value="<?php e("FruArea1"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliCa10" name="OliCa10" value="<?php e("FruCa1"); ?>"></td>
														<td id="">Bueno</td>
														<td id="OliCoef10">1.00</td>
														<?php AutoRadioBox("Fru",10); ?>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVal10" name="OliVal10" disabled></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVP10" name="OliVP10" disabled></td>
													</tr>

													<tr>
														<td style="padding: 0 !important;">
															<?php AutoSelec("FrutDet",11); ?>
														</td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliHect11" name="OliHect11" value="<?php e("FruHect2"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliArea11" name="OliArea11" value="<?php e("FruArea2"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliCa11" name="OliCa11" value="<?php e("FruCa2"); ?>"></td>
														<td id="">Regular</td>
														<td id="OliCoef11">0.60</td>
														<?php AutoRadioBox("Fru",11); ?>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVal11" name="OliVal11" disabled></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVP11" name="OliVP11" disabled></td>
													</tr>

													<tr>
														<td style="padding: 0 !important;">
															<?php AutoSelec("FrutDet",12); ?>
														</td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliHect12" name="OliHect12" value="<?php e("FruHect3"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliArea12" name="OliArea12" value="<?php e("FruArea3"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliCa12" name="OliCa12" value="<?php e("FruCa3"); ?>"></td>
														<td id="">Malo</td>
														<td id="OliCoef12">0.25</td>
														<?php AutoRadioBox("Fru",12); ?>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVal12" name="OliVal12" disabled></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVP12" name="OliVP12" disabled></td>
													</tr>
													<tr>
														<td style="padding: 0 !important;">
															<?php AutoSelec("FrutDet",13); ?>
														</td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliHect13" name="OliHect13" value="<?php e("FruHect4"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliArea13" name="OliArea13" value="<?php e("FruArea4"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliCa13" name="OliCa13" value="<?php e("FruCa4"); ?>"></td>
														<td id="">Bueno</td>
														<td id="OliCoef13">1.00</td>
														<?php AutoRadioBox("Fru",13); ?>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVal13" name="OliVal13" disabled></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVP13" name="OliVP13" disabled></td>
													</tr>

													<tr>
														<td style="padding: 0 !important;">
															<?php AutoSelec("FrutDet",14); ?>
														</td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliHect14" name="OliHect14" value="<?php e("FruHect5"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliArea14" name="OliArea14" value="<?php e("FruArea5"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliCa14" name="OliCa14" value="<?php e("FruCa5"); ?>"></td>
														<td id="">Regular</td>
														<td id="OliCoef14">0.60</td>
														<?php AutoRadioBox("Fru",14); ?>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVal14" name="OliVal14" disabled></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVP14" name="OliVP14" disabled></td>
													</tr>

													<tr>
														<td style="padding: 0 !important;">
															<?php AutoSelec("FrutDet",15); ?>
														</td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliHect15" name="OliHect15" value="<?php e("FruHect6"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliArea15" name="OliArea15" value="<?php e("FruArea6"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliCa15" name="OliCa15" value="<?php e("FruCa6"); ?>"></td>
														<td id="">Malo</td>
														<td id="OliCoef15">0.25</td>
														<?php AutoRadioBox("Fru",15); ?>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVal15" name="OliVal15" disabled></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVP15" name="OliVP15" disabled></td>
													</tr>
													<tr>
														<td style="padding: 0 !important;">
															<?php AutoSelec("FrutDet",16); ?>
														</td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliHect16" name="OliHect16" value="<?php e("FruHect7"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliArea16" name="OliArea16" value="<?php e("FruArea7"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliCa16" name="OliCa16" value="<?php e("FruCa7"); ?>"></td>
														<td id="">Bueno</td>
														<td id="OliCoef16">1.00</td>
														<?php AutoRadioBox("Fru",16); ?>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVal16" name="OliVal16" disabled></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVP16" name="OliVP16" disabled></td>
													</tr>

													<tr>
														<td style="padding: 0 !important;">
															<?php AutoSelec("FrutDet",17); ?>
														</td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliHect17" name="OliHect17" value="<?php e("FruHect8"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliArea17" name="OliArea17" value="<?php e("FruArea8"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliCa17" name="OliCa17" value="<?php e("FruCa8"); ?>"></td>
														<td id="">Regular</td>
														<td id="OliCoef17">0.60</td>
														<?php AutoRadioBox("Fru",17); ?>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVal17" name="OliVal17" disabled></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVP17" name="OliVP17" disabled></td>
													</tr>

													<tr>
														<td style="padding: 0 !important;">
															<?php AutoSelec("FrutDet",18); ?>
														</td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliHect18" name="OliHect18" value="<?php e("FruHect9"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliArea18" name="OliArea18" value="<?php e("FruArea9"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliCa18" name="OliCa18" value="<?php e("FruCa9"); ?>"></td>
														<td id="">Malo</td>
														<td id="OliCoef18">0.25</td>
														<?php AutoRadioBox("Fru",18); ?>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVal18" name="OliVal18" disabled></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVP18" name="OliVP18" disabled></td>
													</tr>
													<tr>
														<td colspan="9"></td>
														<td >Total Inciso B)</td>
														<td style="padding: 0 !important;"><input type="text"  class="inputHuggi" id="Rub4IncisoB" name="Rub4IncisoB" disabled></td>
													</tr>



													<tr>
														<td colspan="6" style="background-color: #D9D9D9"> <h4>Inciso C) Forestales</h4> </td>
														<td style="background-color: #D9D9D9; border-color: grey !important;"><strong>Prep.</strong> </td>
														<td style="background-color: #D9D9D9; border-color: grey !important;"><strong>Produc.</strong> </td>
														<td style="background-color: #D9D9D9; border-color: grey !important;"><strong>Posp.</strong> </td>
														<td colspan="2" style="background-color: #D9D9D9"></td>
													</tr>
													<tr>
														<td style="padding: 0 !important;">
															<?php AutoSelec("PlanDet",19); ?>
														</td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliHect19" name="OliHect19" value="<?php e("PlanHect1"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliArea19" name="OliArea19" value="<?php e("PlanArea1"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliCa19" name="OliCa19" value="<?php e("PlanCa1"); ?>"></td>
														<td id="">Bueno</td>
														<td id="OliCoef19">1.00</td>
														<?php AutoRadioBox("Plan",19); ?>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVal19" name="OliVal19" disabled></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVP19" name="OliVP19" disabled></td>
													</tr>
													<tr>
														<td style="padding: 0 !important;">
															<?php AutoSelec("PlanDet",20); ?>
														</td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliHect20" name="OliHect20" value="<?php e("PlanHect2"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliArea20" name="OliArea20" value="<?php e("PlanArea2"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliCa20" name="OliCa20" value="<?php e("PlanCa2"); ?>"></td>
														<td id="">Regular</td>
														<td id="OliCoef20">0.60</td>
														<?php AutoRadioBox("Plan",20); ?>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVal20" name="OliVal20" disabled></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVP20" name="OliVP20" disabled></td>
													</tr>
													<tr>
														<td style="padding: 0 !important;">
															<?php AutoSelec("PlanDet",21); ?>
														</td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliHect21" name="OliHect21" value="<?php e("PlanHect3"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliArea21" name="OliArea21" value="<?php e("PlanArea3"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliCa21" name="OliCa21" value="<?php e("PlanCa3"); ?>"></td>
														<td id="">Malo</td>
														<td id="OliCoef21">0.25</td>
														<?php AutoRadioBox("Plan",21); ?>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVal21" name="OliVal21" disabled></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVP21" name="OliVP21" disabled></td>
													</tr>

													<tr>
														<td style="padding: 0 !important;">
															<?php AutoSelec("PlanDet",22); ?>
														</td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliHect22" name="OliHect22" value="<?php e("PlanHect4"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliArea22" name="OliArea22" value="<?php e("PlanArea4"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliCa22" name="OliCa22" value="<?php e("PlanCa4"); ?>"></td>
														<td id="">Bueno</td>
														<td id="OliCoef22">1.00</td>
														<?php AutoRadioBox("Plan",22); ?>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVal22" name="OliVal22" disabled></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVP22" name="OliVP22" disabled></td>
													</tr>
													<tr>
														<td style="padding: 0 !important;">
															<?php AutoSelec("PlanDet",23); ?>
														</td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliHect23" name="OliHect23" value="<?php e("PlanHect5"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliArea23" name="OliArea23" value="<?php e("PlanArea5"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliCa23" name="OliCa23" value="<?php e("PlanCa5"); ?>"></td>
														<td id="">Regular</td>
														<td id="OliCoef23">0.60</td>
														<?php AutoRadioBox("Plan",23); ?>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVal23" name="OliVal23" disabled></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVP23" name="OliVP23" disabled></td>
													</tr>
													<tr>
														<td style="padding: 0 !important;">
															<?php AutoSelec("PlanDet",24); ?>
														</td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliHect24" name="OliHect24" value="<?php e("PlanHect6"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliArea24" name="OliArea24" value="<?php e("PlanArea6"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliCa24" name="OliCa24" value="<?php e("PlanCa6"); ?>"></td>
														<td id="">Malo</td>
														<td id="OliCoef24">0.25</td>
														<?php AutoRadioBox("Plan",24); ?>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVal24" name="OliVal24" disabled></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVP24" name="OliVP24" disabled></td>
													</tr>
													<tr>
														<td style="padding: 0 !important;">
															<?php AutoSelec("PlanDet",25); ?>
														</td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliHect25" name="OliHect25" value="<?php e("PlanHect7"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliArea25" name="OliArea25" value="<?php e("PlanArea7"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliCa25" name="OliCa25" value="<?php e("PlanCa7"); ?>"></td>
														<td id="">Bueno</td>
														<td id="OliCoef25">1.00</td>
														<?php AutoRadioBox("Plan",25); ?>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVal25" name="OliVal25" disabled></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVP25" name="OliVP25" disabled></td>
													</tr>
													<tr>
														<td style="padding: 0 !important;">
															<?php AutoSelec("PlanDet",26); ?>
														</td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliHect26" name="OliHect26" value="<?php e("PlanHect8"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliArea26" name="OliArea26" value="<?php e("PlanArea8"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliCa26" name="OliCa26" value="<?php e("PlanCa8"); ?>"></td>
														<td id="">Regular</td>
														<td id="OliCoef26">0.60</td>
														<?php AutoRadioBox("Plan",26); ?>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVal26" name="OliVal26" disabled></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVP26" name="OliVP26" disabled></td>
													</tr>
													<tr>
														<td style="padding: 0 !important;">
															<?php AutoSelec("PlanDet",27); ?>
														</td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliHect27" name="OliHect27" value="<?php e("PlanHect9"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliArea27" name="OliArea27" value="<?php e("PlanArea9"); ?>"></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliCa27" name="OliCa27" value="<?php e("PlanCa9"); ?>"></td>
														<td id="">Malo</td>
														<td id="OliCoef27">0.25</td>
														<?php AutoRadioBox("Plan",27); ?>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVal27" name="OliVal27" disabled></td>
														<td style="padding: 0 !important;"><input type="text" class="inputHuggi" id="OliVP27" name="OliVP27" disabled></td>
													</tr>


													<tr>
														<td colspan="9"></td>
														<td >Total Inciso C)</td>
														<td style="padding: 0 !important;"><input type="text"  class="inputHuggi" id="Rub4IncisoC" name="Rub4IncisoC" disabled></td>
													</tr>

												</table>

											</div>
										</div>
									</div>

								</div> <!-- /accordion -->
								<div class="col-sm-2">
									<div class="form-group">
										<table>
											<tr> <td align="center"> <input type="checkbox" value="1" id="mostrarProf" name="mostrarProf" <?php if (isset($mostrarProf)){echo $mostrarProf;}?>> </td> </tr>
											<tr> <td> <h5> No mostrar profesional </h5> </td> </tr>
										</table>
									</div>
								</div>
								<?php
									if (isset($_GET['idform'])) {
										echo "<input class='btn btn-success' type='submit' name='guardar' id='guardar' value='Guardar'>";
									}else if (isset($_GET['idCedula'])) {
										echo "<input class='btn btn-success' type='submit' name='guardar' id='guardar' value='Finalizar'>";
									}
								 ?>
							<a href="" ><button onclick="self.close()" class="btn">Cancelar</button></a>	<script type="text/javascript">
									function alerta(){

									      	window.close();

									}
								</script>
								<?php
									if (isset($_POST['guardar'])) {

										if (isset($_GET['idform'])) {

												$SilosParte1="";
												$SilosParte2="";
												for ($i=1; $i <= 3 ; $i++) {
														if (isset($_POST['SiloEst'.$i])) {
															$SilosParte1.="SiloEst".$i.",";
															$SilosParte2.=" ' ".$_POST['SiloEst'.$i]." ' ".",";
														}
														if ($_POST['SiloFec'.$i]!="") {
															$SilosParte1.="SiloFec".$i.",";
															$SilosParte2.=" ' ".$_POST['SiloFec'.$i]." ' ".",";
														}
														$SilosParte1.="SiloCant".$i.",";
														$SilosParte2.=$_POST['SiloCant'.$i].",";
														$SilosParte1.="SiloCap".$i.",";
														$SilosParte2.=$_POST['SiloCap'.$i].",";

												}
												$SilosParte1=substr($SilosParte1, 0, -1);
												$SilosParte2=substr($SilosParte2, 0, -1);


												$Alambrados = "";

												$Alambrados .= " AlamA1 = '".$_POST['AlamA11']." ' ". ","	;
												$Alambrados .= " AlamA4 = '".$_POST['AlamA21']." ' ". ","	;

												$Alambrados .= " AlamA2 = '".$_POST['AlamA12']." ' ". ","	;
												$Alambrados .= " AlamA5 = '".$_POST['AlamA22']." ' ". ","	;

												$Alambrados .= " AlamA3 = '".$_POST['AlamA13']." ' ". ","	;
												$Alambrados .= " AlamA6 = '".$_POST['AlamA23']." ' ". ","	;

												$Alambrados .= " AlamA7 = '".$_POST['AlamA71']." ' ". ","	;
												$Alambrados .= " AlamA10 = '".$_POST['AlamA81']." ' ". ","	;

												$Alambrados .= " AlamA8 = '".$_POST['AlamA72']." ' ". ","	;
												$Alambrados .= " AlamA11 = '".$_POST['AlamA82']." ' ". ","	;

												$Alambrados .= " AlamA9 = '".$_POST['AlamA73']." ' ". ",";
												$Alambrados .= " AlamA12 = '".$_POST['AlamA83']." ' ". ","	;

												$Alambrados .= " AlamA13 = '".$_POST['AlamA131']." ' ". ","	;
												$Alambrados .= " AlamA16 = '".$_POST['AlamA141']." ' ". ",";

												$Alambrados .= " AlamA14 = '".$_POST['AlamA132']." ' ". ","	;
												$Alambrados .= " AlamA17 = '".$_POST['AlamA142']." ' ". ","	;

												$Alambrados .= " AlamA15 = '".$_POST['AlamA133']." ' ". ","	;
												$Alambrados .= " AlamA18 = '".$_POST['AlamA143']." ' "	;


												$Silos = "";

												$Silos .= "SiloCant1 = '".$_POST['SiloCant1']. " ' " . " , ";
												$Silos .= "SiloCap1 = '".$_POST['SiloCap1']. " ' " . " , ";
												$Silos .= "SiloFec1 = '".$_POST['SiloFec1']. " ' " . " , ";
												$Silos .= "SiloEst1 = '".$_POST['SiloEst1']. " ' " . " , ";
												$Silos .= "SiloCant2 = '".$_POST['SiloCant2']. " ' " . " , ";
												$Silos .= "SiloCap2 = '".$_POST['SiloCap2']. " ' " . " , ";
												$Silos .= "SiloFec2 = '".$_POST['SiloFec2']. " ' " . " , ";
												$Silos .= "SiloEst2 = '".$_POST['SiloEst2']. " ' " . " , ";
												$Silos .= "SiloCant3 = '".$_POST['SiloCant3']. " ' " . " , ";
												$Silos .= "SiloCap3 = '".$_POST['SiloCap3']. " ' " . " , ";
												$Silos .= "SiloFec3 = '".$_POST['SiloFec3']. " ' " . " , ";
												$Silos .= "SiloEst3 = '".$_POST['SiloEst3']. " ' ";

												$Molinos = "";

												$Molinos .= "Molino1 = '".$_POST['Molino11']. "', ";
												$Molinos .= "Molino2 = '".$_POST['Molino12']. "', ";
												$Molinos .= "Molino3 = '".$_POST['Molino13']. "', ";
												$Molinos .= "Molino4 = '".$_POST['Molino41']. "', ";
												$Molinos .= "Molino5 = '".$_POST['Molino42']. "', ";
												$Molinos .= "Molino6 = '".$_POST['Molino43']. "' ";

												$Tanques="";
												$Tanques .= "Tanque1 = '".$_POST['Tanque11']. "', ";
												$Tanques .= "Tanque2 = '".$_POST['Tanque12']. "', ";
												$Tanques .= "Tanque3 = '".$_POST['Tanque13']. "', ";
												$Tanques .= "Tanque4 = '".$_POST['Tanque41']. "', ";
												$Tanques.= "Tanque5 = '".$_POST['Tanque42']. "', ";
												$Tanques.= "Tanque6 = '".$_POST['Tanque43']. "' ";

												$Rubro4="";
												for ($i=1; $i <= 9 ; $i++) {
													$Rubro4.= "OliHect".$i."=".'"'.$_POST['OliHect'.$i].'"'.",";
													$Rubro4.= "OliArea".$i."=".'"'.$_POST['OliArea'.$i].'"'.",";
													$Rubro4.= "OliCa".$i."=".'"'.$_POST['OliCa'.$i].'"'.",";
													$Rubro4.= "OliPre".$i."=".'"'.$_POST['OliPe'.$i].'"'.",";
													$Rubro4.= "OliPro".$i."=".'"'.$_POST['OliPe'.$i].'"'.",";
													$Rubro4.= "OliPos".$i."=".'"'.$_POST['OliPe'.$i].'"'.",";

													$aux = $i +9;

													$Rubro4.= "FrutDet".$i."=".'"'.$_POST['Cultivo'.$aux].'"'.",";
													$Rubro4.= "FruHect".$i."=".'"'.$_POST['OliHect'.$aux].'"'.",";
													$Rubro4.= "FruArea".$i."=".'"'.$_POST['OliArea'.$aux].'"'.",";
													$Rubro4.= "FruCa".$i."=".'"'.$_POST['OliCa'.$aux].'"'.",";
													$Rubro4.= "FruPre".$i."=".'"'.$_POST['OliPe'.$aux].'"'.",";
													$Rubro4.= "FruPro".$i."=".'"'.$_POST['OliPe'.$aux].'"'.",";
													$Rubro4.= "FruPos".$i."=".'"'.$_POST['OliPe'.$aux].'"'.",";

													$aux = $i + 18;

													$Rubro4.= "PlanDet".$i."=".'"'.$_POST['Cultivo'.$aux].'"'.",";
													$Rubro4.= "PlanHect".$i."=".'"'.$_POST['OliHect'.$aux].'"'.",";
													$Rubro4.= "PlanArea".$i."=".'"'.$_POST['OliArea'.$aux].'"'.",";
													$Rubro4.= "PlanCa".$i."=".'"'.$_POST['OliCa'.$aux].'"'.",";
													$Rubro4.= "PlanPre".$i."=".'"'.$_POST['OliPe'.$aux].'"'.",";
													$Rubro4.= "PlanPro".$i."=".'"'.$_POST['OliPe'.$aux].'"'.",";

												}
												$firmaprof = $_POST['mostrarProf'];
												$Rubro4 = substr($Rubro4, 0, -1);
												mysqli_query($conexion,"UPDATE `form912` SET `Interno`='0',`Parcela`='0',`Subparcela`='0',`Pagina`='0', $Alambrados, $Silos, $Molinos, $Tanques, $Rubro4, `firmaprof`='$firmaprof'  WHERE `codForm912` ='$idform'");
												echo "<br>";


												// echo "UPDATE `form912` SET `Interno`='0',`Parcela`='0',`Subparcela`='0',`Pagina`='0', $Alambrados, $Silos, $Molinos, $Tanques, $Rubro4 WHERE `codForm912` ='$idform'";
												// otras tablas

												$aniotabla = $_GET['aniotabla'];

												// $version = mysqli_fetch_array(mysqli_query($conexion,"SELECT MAX(version) FROM `cedulaformularios` WHERE `nroFormulario` = '912' and `idCedula` = '$idCedula'"))[0] + 1;

												$codform = mysqli_fetch_array(mysqli_query($conexion, "SELECT MAX(codForm912) FROM `form912`"))[0] + 1;

												echo '<script language="javascript">alert("Se actualizo la forma correctamente!");</script>';
												echo '<script language="javascript">window.close();window.opener.getFormularios();</script>';



										}else if (isset($_GET['idCedula'])) {
											//cargar
												$EstA="";
												$EstB="";
												$EstC="";
												$AlambradosParte1="";
												$AlambradosParte2="";

												$AlambradosParte2.=$_POST['AlamA11'].",";
												$AlambradosParte2.=$_POST['AlamA12'].",";
												$AlambradosParte2.=$_POST['AlamA13'].",";

												$AlambradosParte2.=$_POST['AlamA21'].",";
												$AlambradosParte2.=$_POST['AlamA22'].",";
												$AlambradosParte2.=$_POST['AlamA23'].",";

												$AlambradosParte2.=$_POST['AlamA71'].",";
												$AlambradosParte2.=$_POST['AlamA72'].",";
												$AlambradosParte2.=$_POST['AlamA73'].",";

												$AlambradosParte2.=$_POST['AlamA81'].",";
												$AlambradosParte2.=$_POST['AlamA82'].",";
												$AlambradosParte2.=$_POST['AlamA83'].",";

												$AlambradosParte2.=$_POST['AlamA131'].",";
												$AlambradosParte2.=$_POST['AlamA132'].",";
												$AlambradosParte2.=$_POST['AlamA133'].",";

												$AlambradosParte2.=$_POST['AlamA141'].",";
												$AlambradosParte2.=$_POST['AlamA142'].",";
												$AlambradosParte2.=$_POST['AlamA143'].",";

												$TanquesPart1="";
												$TanquesPart2="";
												if (isset($_POST['Tanque11'])) {
													$TanquesPart1.=$_POST['Tanque11'].",";
												}else{
													$TanquesPart1.="0";
												}
												if (isset($_POST['Tanque12'])) {
													$TanquesPart1.=$_POST['Tanque12'].",";
												}else{
													$TanquesPart1.="0";
												}
												if (isset($_POST['Tanque13'])) {
													$TanquesPart1.=$_POST['Tanque13'].",";
												}else{
													$TanquesPart1.="0";
												}
												if (isset($_POST['Tanque41'])) {
													$TanquesPart1.=$_POST['Tanque41'].",";
												}else{
													$TanquesPart1.="0";
												}
												if (isset($_POST['Tanque42'])) {
													$TanquesPart1.=$_POST['Tanque42'].",";
												}else{
													$TanquesPart1.="0";
												}
												if (isset($_POST['Tanque43'])) {
													$TanquesPart1.=$_POST['Tanque43'].",";
												}else{
													$TanquesPart1.="0";
												}
												for ($i=1; $i <= 6 ; $i++) {
													$TanquesPart2.="Tanque".$i.",";
												}


												$MolinoPart1="";
												$MolinoPart2="";
												if (isset($_POST['Molino11'])) {
													$MolinoPart1.=$_POST['Molino11'].",";
												}else{
													$MolinoPart1.="0";
												}
												if (isset($_POST['Molino12'])) {
													$MolinoPart1.=$_POST['Molino12'].",";
												}else{
													$MolinoPart1.="0";
												}
												if (isset($_POST['Molino13'])) {
													$MolinoPart1.=$_POST['Molino13'].",";
												}else{
													$MolinoPart1.="0";
												}
												if (isset($_POST['Molino41'])) {
													$MolinoPart1.=$_POST['Molino41'].",";
												}else{
													$MolinoPart1.="0";
												}
												if (isset($_POST['Molino42'])) {
													$MolinoPart1.=$_POST['Molino42'].",";
												}else{
													$MolinoPart1.="0";
												}
												if (isset($_POST['Molino43'])) {
													$MolinoPart1.=$_POST['Molino43'].",";
												}else{
													$MolinoPart1.="0";
												}
												for ($i=1; $i <= 6 ; $i++) {
													$MolinoPart2.="Molino".$i.",";
												}

												$MolinoPart1 = substr($MolinoPart1, 0, -1);
												$MolinoPart2 = substr($MolinoPart2, 0, -1);

												$TanquesPart1 = substr($TanquesPart1, 0, -1);
												$TanquesPart2 = substr($TanquesPart2, 0, -1);

												for ($i=1; $i <=18 ; $i++) {
													$AlambradosParte1.="AlamA".$i.",";
												}
												$AlambradosParte1 = substr($AlambradosParte1, 0, -1);
												$AlambradosParte2 = substr($AlambradosParte2, 0, -1);
												// echo $AlambradosParte1,"<br>",$AlambradosParte2;
												// ------------------- INCISO B -------------------
												$SilosParte1="";
												$SilosParte2="";
												for ($i=1; $i <= 3 ; $i++) {
														if (isset($_POST['SiloEst'.$i])) {
															$SilosParte1.="SiloEst".$i.",";
															$SilosParte2.=" ' ".$_POST['SiloEst'.$i]." ' ".",";
														}
															$SilosParte1.="SiloFec".$i.",";
															$SilosParte2.=" '".$_POST['SiloFec'.$i]."' ".",";
														$SilosParte1.="SiloCant".$i.",";
														$SilosParte2.=$_POST['SiloCant'.$i].",";
														$SilosParte1.="SiloCap".$i.",";
														$SilosParte2.=$_POST['SiloCap'.$i].",";

												}
												$SilosParte1=substr($SilosParte1, 0, -1);
												$SilosParte2=substr($SilosParte2, 0, -1);

												$Rub4Part1 = "";
												$Rub4Part2 = "";
												for ($i=1; $i <= 9 ; $i++) {

													$Rub4Part1 .= "OliHect".$i.",";
													$Rub4Part1 .= "OliArea".$i.",";
													$Rub4Part1 .= "OliCa".$i.",";
													$Rub4Part1 .= "OliPre".$i.",";
													$Rub4Part1 .= "OliPro".$i.",";
													$Rub4Part1 .= "OliPos".$i.",";

													$Rub4Part2 .= '"'.$_POST['OliHect'.$i].'"'.",";
													$Rub4Part2 .= '"'.$_POST['OliArea'.$i].'"'.",";
													$Rub4Part2 .= '"'.$_POST['OliCa'.$i].'"'.",";
													$Rub4Part2 .= '"'.$_POST['OliPe'.$i].'"'.",";
													$Rub4Part2 .= '"'.$_POST['OliPe'.$i].'"'.",";
													$Rub4Part2 .= '"'.$_POST['OliPe'.$i].'"'.",";

													$Rub4Part1 .= "FrutDet".$i.",";
													$Rub4Part1 .= "FruHect".$i.",";
													$Rub4Part1 .= "FruArea".$i.",";
													$Rub4Part1 .= "FruCa".$i.",";
													$Rub4Part1 .= "FruPre".$i.",";
													$Rub4Part1 .= "FruPro".$i.",";
													$Rub4Part1 .= "FruPos".$i.",";

													$i+= 9;

													$Rub4Part2 .= '"'.$_POST['Cultivo'.$i].'"'.",";
													$Rub4Part2 .= '"'.$_POST['OliHect'.$i].'"'.",";
													$Rub4Part2 .= '"'.$_POST['OliArea'.$i].'"'.",";
													$Rub4Part2 .= '"'.$_POST['OliCa'.$i].'"'.",";
													$Rub4Part2 .= '"'.$_POST['OliPe'.$i].'"'.",";
													$Rub4Part2 .= '"'.$_POST['OliPe'.$i].'"'.",";
													$Rub4Part2 .= '"'.$_POST['OliPe'.$i].'"'.",";

													$i-=9;

													$Rub4Part1 .= "PlanDet".$i.",";
													$Rub4Part1 .= "PlanHect".$i.",";
													$Rub4Part1 .= "PlanArea".$i.",";
													$Rub4Part1 .= "PlanCa".$i.",";
													$Rub4Part1 .= "PlanPre".$i.",";
													$Rub4Part1 .= "PlanPro".$i.",";

													$i+= 18;

													$Rub4Part2 .= '"'.$_POST['Cultivo'.$i].'"'.",";
													$Rub4Part2 .= '"'.$_POST['OliHect'.$i].'"'.",";
													$Rub4Part2 .= '"'.$_POST['OliArea'.$i].'"'.",";
													$Rub4Part2 .= '"'.$_POST['OliCa'.$i].'"'.",";
													$Rub4Part2 .= '"'.$_POST['OliPe'.$i].'"'.",";
													$Rub4Part2 .= '"'.$_POST['OliPe'.$i].'"'.",";

													$i-=18;

												}
												$Rub4Part1=substr($Rub4Part1, 0, -1);
												$Rub4Part2=substr($Rub4Part2, 0, -1);
												// echo "INSERT INTO `form912`(Interno,Parcela,Subparcela,Pagina,".$AlambradosParte1.",".$SilosParte1.") VALUES ('0','0','0','0',".$AlambradosParte2.",".$SilosParte2.")";
												$firmaprof = $_POST['mostrarProf'];
												mysqli_query($conexion,"INSERT INTO `form912`(Interno,Parcela,Subparcela,firmaprof,Pagina,".$AlambradosParte1.",".$SilosParte1.",".$TanquesPart2.",".$MolinoPart2.",".$Rub4Part1.") VALUES ('0','0','0','$firmaprof','0',".$AlambradosParte2.",".$SilosParte2.",".$TanquesPart1.",".$MolinoPart1.",".$Rub4Part2.")");

												// echo "INSERT INTO `form912`(Interno,Parcela,Subparcela,Pagina,".$AlambradosParte1.",".$SilosParte1.",".$TanquesPart2.",".$MolinoPart2.",".$Rub4Part1.") VALUES ('0','0','0','0',".$AlambradosParte2.",".$SilosParte2.",".$TanquesPart1.",".$MolinoPart1.",".$Rub4Part2.")";


												// echo '<script language="javascript">alert("la forma se cargo correctamente!");</script>';


												//otras tablas

												$idCedula = $_GET['idCedula'];
												$cedula = $_GET['cedula'];
												$aniotabla = $_GET['aniotabla'];

												$version = mysqli_fetch_array(mysqli_query($conexion,"SELECT MAX(version) FROM `cedulaformularios` WHERE `nroFormulario` = '912' and `idCedula` = '$idCedula'"))[0] + 1;

												$codform = mysqli_fetch_array(mysqli_query($conexion, "SELECT MAX(codForm912) FROM `form912`"))[0];

												mysqli_query($conexion, "INSERT INTO `cedulaformularios`(`idCedulaFormularios`, `idCedula`, `tipoCedula`, `nroFormulario`, `version`, `data`, `codForm`) VALUES (default, $idCedula, $cedula, '912', $version, $aniotabla, $codform)");

												echo '<script language="javascript">alert("Se registro la forma correctamente!");</script>';
												echo '<script language="javascript">window.close();window.opener.getFormularios();</script>';


										}
									}
								?>
							  </form>
							</div> <!-- /controls -->
						</div> <!-- /control-group -->
					</div> <!-- /widget-content -->
				</div> <!-- /container -->
			</div> <!-- /main-inner -->
		</div> <!-- /main -->
		<?php
			include("pie.php");
		?>
		<!---------------------- Scripts ---------------------->
		<script src="javascript/obj912.js"></script>
	</body>
</html>
