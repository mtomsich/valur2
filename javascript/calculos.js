var formNumber;

window.onunload = function () {
	//var temp = window.opener.document.getElementById("status");
	window.opener.getFormularios();
}

window.onload = function () {
	readObjects();
  document.getElementById("aniodetabla").innerHTML = "Año de tabla: " + valores["aniotabla"];
	formNumber = document.getElementById("formNum").innerHTML.replace("Formulario ", "");
	getReci();
	getValues("capaTexto");
	getValues("form" + formNumber);
	var maxIndex = maxInd();
	var multpSum = getMultp("form" + formNumber);
	var checkSum = sumarChecks();
	var unitVal = inspectValue(round2(multpSum / checkSum));
	getEstado();
	setDate();
	document.getElementById("totalvu1").value = unitVal;
	document.getElementById("totalvu2").value = unitVal;
	getSecValue(maxIndex, unitVal);
	getCantValues();
	storeObjects();
}

function getSecValue(maxIndex, unitVal) {
	var secubVal = document.getElementById("totalvusc");
	if(secubVal) {
		if((maxIndex == "A") || (maxIndex == "B") || (maxIndex == "C")){
			secubVal.value = round2(unitVal / 2);
		} else {
			secubVal.value = round2(unitVal * 0.3);
		}
	}
}

function getValues(string) {
	for(var nextVal = 0;nextVal < 5;nextVal++) {
		var next = document.getElementById(string + (String.fromCharCode('A'.charCodeAt() + nextVal)));
		if(!next)
			continue;

		if(valores[next.id] || valores[next.id] == 0)
			next.value = valores[next.id];

		if(valoresBasicos[next.id] || valoresBasicos[next.id] == 0)
			next.value = valoresBasicos[next.id];
	}
}

function getMultp(string) {
	var currentIndex;
	var sum = 0;
	for(var nextVal = 0;nextVal < 5;nextVal++) {
		currentIndex = String.fromCharCode('A'.charCodeAt() + nextVal);
		var next = document.getElementById("vb" + currentIndex);
		if(!next)
			continue;
		next.value = valoresBasicos[string + currentIndex] * valores["capaTexto" + currentIndex];
		sum += parseInt(next.value);
	}
	document.getElementById("totalvb").value = sum;
	return sum;
}

function sumarChecks() {
	var sum = 0;
	for(var nextVal = 0;nextVal < 5;nextVal++) {
		var next = valores["capaTexto" + (String.fromCharCode('A'.charCodeAt() + nextVal))];
		if(next == undefined)
			continue;
		sum += next;
	}
	document.getElementById("totalcant").value = sum;
	return sum;
}

function maxInd() {
	var currentIndex;
	var max = 0;
	var maxInd;
	for(var nextVal = 0;nextVal < 5;nextVal++) {
		currentIndex = String.fromCharCode('A'.charCodeAt() + nextVal);
		var next = valores["capaTexto" + currentIndex];
		if((next == undefined) || !document.getElementById("sumaEstConPje" + currentIndex + "1"))
			continue;
		if(next >= max) {
			max = next;
			maxInd = currentIndex;
		}
	}
	maxInd = inspectValue(maxInd);
	for(var i = 1;;i++) {
		var ind = document.getElementById("maxInd" + i);
		if(!ind)
			break;

		ind.value = maxInd;
	}
	valores["estIndice"] = maxInd;
	storeObjects();
	return maxInd;
}

function getEstado() {
	var estado = valores["sumaEstCon"];
	switch(valores["estIndice"]) {
		case "A":
			if(estado > valores["EstadoA"][1]) {
				obj["Estado"] = "B";
				document.getElementById("sumaEstConPjeA1").innerHTML = estado;
			} else if( estado <= valores["EstadoA"][0]) {
				obj["Estado"] = "M";
				document.getElementById("sumaEstConPjeA3").innerHTML = estado;
			} else {
				obj["Estado"] = "R";
				document.getElementById("sumaEstConPjeA2").innerHTML = estado;
			}
			break;
		case "B":
			if(estado > valores["EstadoB"][1]) {
				obj["Estado"] = "B";
				document.getElementById("sumaEstConPjeB1").innerHTML = estado;
			} else if( estado <= valores["EstadoB"][0]) {
				obj["Estado"] = "M";
				document.getElementById("sumaEstConPjeB3").innerHTML = estado;
			} else {
				obj["Estado"] = "R";
				document.getElementById("sumaEstConPjeB2").innerHTML = estado;
			}
			break;
		case "C":
			if(estado > valores["EstadoC"][1]) {
				obj["Estado"] = "B";
				document.getElementById("sumaEstConPjeC1").innerHTML = estado;
			} else if( estado <= valores["EstadoC"][0]) {
				obj["Estado"] = "M";
				document.getElementById("sumaEstConPjeC3").innerHTML = estado;
			} else {
				obj["Estado"] = "R";
				document.getElementById("sumaEstConPjeC2").innerHTML = estado;
			}
			break;
		case "D":
			if(estado > valores["EstadoD"][1]) {
				obj["Estado"] = "B";
				document.getElementById("sumaEstConPjeD1").innerHTML = estado;
			} else if( estado <= valores["EstadoD"][0]) {
				obj["Estado"] = "M";
				document.getElementById("sumaEstConPjeD3").innerHTML = estado;
			} else {
				obj["Estado"] = "R";
				document.getElementById("sumaEstConPjeD2").innerHTML = estado;
			}
			break;
		case "E":
			if(estado > valores["EstadoE"][1]) {
				obj["Estado"] = "B";
				document.getElementById("sumaEstConPjeE1").innerHTML = estado;
			} else if( estado <= valores["EstadoE"][0]) {
				obj["Estado"] = "M";
				document.getElementById("sumaEstConPjeE3").innerHTML = estado;
			} else {
				obj["Estado"] = "R";
				document.getElementById("sumaEstConPjeE2").innerHTML = estado;
			}
			break;
		default: break;
	}
	var cub = document.getElementById("estConCub");
	var secub = document.getElementById("estConSeCub");
	if(cub)
		cub.value = obj["Estado"];
	if(secub)
		secub.value = obj["Estado"];

	storeObjects();
}

function getReci() {
	var checkElements = document.getElementsByTagName("input");
	//itera sobre todos los elementos de tipo input
	for (var i = 0; i < checkElements.length; i++) {
		//setea los valores de los items seleccionados
		if (checkElements[i].type != "checkbox")
		 continue;

		if(obj[checkElements[i].id] > 0)
			checkElements[i].checked = true;
	}
	document.getElementById("sumaPta").innerHTML = valores["sumaPta"];

	if(valores["sumaPta"] >= 40)
		document.getElementById("dataRecCub").disabled = false;
	else
		document.getElementById("dataRecCub").disabled = true;
}

function reciValue(element) {

	if(element.checked) {
		obj[element.id] = 1;
		changeSum(valores[element.id]);
	} else {
		obj[element.id] = 0;
		changeSum(-(valores[element.id]));
	}

	function changeSum(value) {
		valores["sumaPta"] += value;
		document.getElementById("sumaPta").innerHTML = valores["sumaPta"];
	}

	if(valores["sumaPta"] >= 40)
		document.getElementById("dataRecCub").disabled = false;
	else
		document.getElementById("dataRecCub").disabled = true;

	setDate();
	storeObjects();
}

function getCantValues() {
	/////////////////RUB6////////////////
	checkValue("Heladeras", "cantHel");
	checkValue("Aire", "cantAire");
	checkValue("AscensoresCant1", "cantAsc1");
	checkValue("AscensoresCant2", "cantAsc2");
	checkValue("Ascensores11", "cantAsc1");
	checkValue("Ascensores22", "cantAsc2");
	checkValue("Ascensores1", "paradasAsc1");
	checkValue("Ascensores2", "paradasAsc2");
	checkValue("Monta11", "cantMonta1");
	checkValue("Monta22", "cantMonta2");
	checkValue("Monta1", "paradasMonta1");
	checkValue("Monta2", "paradasMonta2");
	checkValue("Calefacion", "cantCalef");
	checkValue("Losa", "cantLosa");
	checkPiletaValue("Pileta", "Pileta");
	checkValue("Horno", "cantHorno");
	checkValue("Agua", "cantAguaCal");
	checkValue("Bano1", "cantBaniosPri");
	checkValue("Bano2", "cantBaniosSec");
	checkValue("PiletaCant", "cantPileta");
	checkValue("SupSemi", "supSeCub");
	checkValue("SupCub", "supCub");
	checkValue("Cubierta", "supCub");
	checkValue("Semicubierta", "supSeCub");
	checkValue("Avicola", "cantFrigo");
	checkValue("Incendio", "cantIncen");
	/////////////////RUB6////////////////

	/////////////////RUB8////////////////
	checkValue("TanquesCant1", "cantTanque1");
	checkValue("TanquesCant2", "cantTanque2");
	checkValue("TanquesCant3", "cantTanque3");
	checkValue("Tanques", "metrosTanque1");
	checkValue("Tanques2", "metrosTanque2");
	checkValue("Tanques3", "metrosTanque3");
	checkValue("Pavimento1", "cantPaviRig");
	checkValue("Pavimento2", "cantPaviFlex");
	checkValue("Silos1Metros", "cantSiloA");
	checkValue("Silos2Metros", "cantSiloB");
	checkValue("Silos3Metros", "cantSiloC");
	checkValue("Silo1", "metrosSiloA");
	checkValue("Silo2", "metrosSiloB");
	checkValue("Silo3", "metrosSiloC");
	/////////////////RUB8////////////////

	function checkValue(objProp, htmlId){
		if(obj.hasOwnProperty(objProp)) {
			var temp = document.getElementById(htmlId);
			if(temp)
				temp.value = obj[objProp];
		}
	}

	function checkPiletaValue(objProp, htmlId){
		if(obj.hasOwnProperty(objProp))
			if(obj[objProp])
				document.getElementById(htmlId + obj[objProp]).checked = true;
	}
}

function round2(number) {
	return Math.round(number * 100) / 100;
}

function inspectValue(value) {
	if(!value)
		return 0;
	return value;
}

function getTotalSum() {
	var rub7 = document.getElementById("totalrub7");

	if(rub7)
		rub7.value = Math.round(parseFloat(document.getElementById("atotalrub5").value) + parseFloat(document.getElementById("btotalrub6").value));
}

function insertDB() {
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			alert(this.responseText);
			if(this.responseText.indexOf("la forma correctamente!") != -1) {
				sessionStorage.removeItem("obj");
				sessionStorage.removeItem("valores");
				//location.reload(true);
				window.close();
			}
		}
	};
	xmlhttp.open("POST", "insert" + formNumber + ".php", true);
	xmlhttp.setRequestHeader("Content-Type", "application/json");
	xmlhttp.send(JSON.stringify({objeto:obj, codcedula:valores["codCedula"], tipocedula:valores["tipoCedula"], rub6:getRub6Values(), rub8:getRub8Values()}));


	function getRub6Values() {
		var rub6obj = new Object();
		var element = document.getElementById("rub6");

		if(!element)
			return 0;

		var elements = element.getElementsByTagName("*");
		var eleCant = elements.length;
		for(var i = 0;i < eleCant;i++) {
			if(elements[i].id.indexOf("cant") != -1) {
				var index = elements[i].id.replace("cant", "");
				rub6obj[index] = {
					cant:(document.getElementById("cant" + index).value ? document.getElementById("cant" + index).value : 0),
					data:document.getElementById("data" + index).value,
					estCon:document.getElementById("estCon" + index).value,
					coefAj:(document.getElementById("coefAj" + index).value ? document.getElementById("coefAj" + index).value : 0),
					valUni:document.getElementById("valUni" + index).value,
					val:document.getElementById("val" + index).value
				};
			}
		}

		return rub6obj;
	}

	function getRub8Values() {
		var rub8obj = new Object();
		var element = document.getElementById("rub8");

		if(!element)
			return 0;

		var elements = element.getElementsByTagName("*");
		var eleCant = elements.length;
		for(var i = 0;i < eleCant;i++) {
			if(elements[i].id.indexOf("cant") != -1) {
				var index = elements[i].id.replace("cant", "");
				rub8obj[index] = {
					cant:(document.getElementById("cant" + index).value ? document.getElementById("cant" + index).value : 0),
					data:document.getElementById("data" + index).value,
					estCon:document.getElementById("estCon" + index).value,
					coefAj:(document.getElementById("coefAj" + index).value ? document.getElementById("coefAj" + index).value : 0),
					valUni:document.getElementById("valUni" + index).value,
					val:document.getElementById("val" + index).value
				};
			}
		}

		return rub8obj;
	}
}

function storeObjects() {
	sessionStorage.setItem("obj", JSON.stringify(obj));
	sessionStorage.setItem("valores", JSON.stringify(valores));
}

function readObjects() {
	if(sessionStorage.getItem("obj"))
		obj = JSON.parse(sessionStorage.getItem("obj"));
	if(sessionStorage.getItem("valores"))
		valores = JSON.parse(sessionStorage.getItem("valores"));
}
