window.onload = function () {
	readObjects();
	function checkEstado(element) {
		if(obj[element.id.slice(0,-1)] == "Bueno")
			checkElements[element.id.slice(0,-1) + 1].checked = true;

		if(obj[element.id.slice(0,-1)] == "Regular")
			checkElements[element.id.slice(0,-1) + 2].checked = true;

		if(obj[element.id.slice(0,-1)] == "Malo")
			checkElements[element.id.slice(0,-1) + 3].checked = true;
	}

	function loadVolatile() {
		if(sessionStorage.getItem("volatil") == 1)
			return;

		for (var key in obj) {
	    if (obj.hasOwnProperty(key)) {
        switch(key.slice(-2, -1)) {
					case "A": obj[key] == 1 ? valores["capaTextoA"]++:null;break;
					case "B": obj[key] == 1 ? valores["capaTextoB"]++:null;break;
					case "C": obj[key] == 1 ? valores["capaTextoC"]++:null;break;
					case "D": obj[key] == 1 ? valores["capaTextoD"]++:null;break;
					case "E": obj[key] == 1 ? valores["capaTextoE"]++:null;break;
				}

				if(key.indexOf("Estado") != -1) {
					switch(obj[key]) {
						case "Bueno": valores["sumaEstCon"] += valores[key][1]; break;
						case "Regular": valores["sumaEstCon"] += valores[key][2]; break;
						case "Malo": valores["sumaEstCon"] += valores[key][3]; break;
						default: value = 0;
					}
				}

				if(key.indexOf("Reci") != -1) {
					if(obj[key] == 1) {
						valores["sumaPta"] += valores[key];
					}
				}
	    }
		}

		sessionStorage.setItem("volatil", 1);
		storeObjects();
	}

	loadVolatile();
	var checkElements = document.getElementsByTagName("input");

	//itera sobre todos los elementos de tipo input
	for (var i = 0; i < checkElements.length; i++) {
		//setea los valores de los items seleccionados
		if(obj[checkElements[i].id] > 0) {
			checkElements[i].checked = true;
			continue;
		}
		//setea los valores de los estados
		if(checkElements[i].id.indexOf("Estado") != -1) {
			checkEstado(checkElements[i]);
		}
	}
	//setea los valores de las sumas de los items seleccionados
	for(var nextVal = 0;nextVal < 5;nextVal++) {
		var next = document.getElementById("capaTexto" + (String.fromCharCode('A'.charCodeAt() + nextVal)));
		if(!next)
			continue;
		next.innerHTML = valores[next.id];
	}
	//setea el valor de la suma de los estados
	document.getElementById("sumaEstCon").innerHTML = valores["sumaEstCon"];

	//setea el valor del destino
	if(document.getElementById("destinos")) {
		var dest = document.getElementById("destinos");
		if(obj["Destino"])
			dest.value = obj["Destino"].substring(0, obj["Destino"].indexOf(" -"));
		else
			obj["Destino"] = dest.options[dest.selectedIndex].value + " - " + dest.options[dest.selectedIndex].text;

		$('#destinos').selectpicker('refresh');
	}
	//setea las Observaciones
	if(document.getElementById("observaciones"))
		document.getElementById("observaciones").value = obj["observaciones"];
}

function checkValue(element) {

	if(element.checked) {
		obj[element.id] = 1;
		changeSum(1);
	} else {
		obj[element.id] = 0;
		changeSum(-1);
	}

	function changeSum(value) {
		var htmlEle = document.getElementById("capaTexto" + element.id.slice(-2, -1));
		valores["capaTexto" + element.id.slice(-2, -1)] += value;
		htmlEle.innerHTML = valores["capaTexto" + element.id.slice(-2, -1)];
		conservCheck();
	}

	function conservCheck() {
		var items = document.getElementsByTagName("input");
		var ini = element.id.slice(0,-2);
		var ele = 0;

		for(i = 0; items.length > i; i++) {
			if(items[i].id.includes(ini))
				if(items[i].type == "checkbox")
					if(items[i].checked)
						if(!items[i].parentNode.previousElementSibling.innerHTML.toUpperCase().includes("NO TIENE"))
						  ele +=1;
		}

		var estado = ini + "Estado";

		if(!document.getElementById(estado + "1"))
			estado = element.id.slice(0,-3) + "Estado";

		var estado1 = document.getElementById(estado + "1");
		var estado2 = document.getElementById(estado + "2");
		var estado3 = document.getElementById(estado + "3");

		if(ele == 0) {
			if(estado1.checked) {
				estado1.checked = false;
				radioValue(estado1);
				return;
			}
			if(estado2.checked) {
				estado2.checked = false;
				radioValue(estado2);
				return;
			}
			if(estado3.checked) {
				estado3.checked = false;
				radioValue(estado3);
				return;
			}

			return;
		}

		if(!estado1.checked && !estado2.checked && !estado3.checked) {
			estado1.checked = true;
			radioValue(estado1);
		}

	}

	storeObjects();
}

function radioValue(element) {

	function getValue(estado) {
		var value;

		switch(estado) {
			case "Bueno": value = valores[element.name][1]; break;
			case "Regular": value = valores[element.name][2]; break;
			case "Malo": value = valores[element.name][3]; break;
			default: value = 0;
		}

		return value;
	}

	function changeValue(suma) {
		if(suma) {
			valores["sumaEstCon"] += getValue(element.value);
			valores["sumaEstCon"] -= getValue(obj[element.name]);
		}
		else
			valores["sumaEstCon"] -= getValue(element.value);

		document.getElementById("sumaEstCon").innerHTML = valores["sumaEstCon"];
	}

	if(obj[element.name] == element.value) {
		obj[element.name] = "No Tiene";
		changeValue(false);
		element.checked = false;
	} else {
		changeValue(true);
		obj[element.name] = element.value;
	}

	storeObjects();
}

function changeDest() {
	var dest = document.getElementById("destinos");
	obj["Destino"] = dest.options[dest.selectedIndex].value;
	storeObjects();
}

function changeObse() {
	obj["observaciones"] = document.getElementById("observaciones").value;
	storeObjects();
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

	storeObjects();
}
