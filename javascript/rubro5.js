function valRub5(ele) {
	if(isNaN(ele.value) || ele.value < 0)
		return;

	var semiCub = document.getElementById("totalValSeCub");
	var cub = document.getElementById("totalValCub");
	var total = document.getElementById("totalRub5");
	var coef = document.getElementById("coefAjCub");
	var rub5secondary = document.getElementById("atotalrub5");

	if(ele.id == "supSeCub") {
		semiCub.value = round2(ele.value * document.getElementById("totalvusc").value * coef.value);
		checkValue("SupSemi", ele.value);
		checkValue("Semicubierta", ele.value);
	}

	if(ele.id == "supCub") {
		cub.value = round2(ele.value * document.getElementById("totalvu2").value * coef.value);
		checkValue("SupCub", ele.value);
		checkValue("Cubierta", ele.value);
	}

	var semiCubValue = semiCub ? parseFloat(semiCub.value):0;
	total.value = round2(parseFloat(cub.value) + semiCubValue);

	if(rub5secondary)
		rub5secondary.value = round2(parseFloat(cub.value) + semiCubValue);
		
	getTotalSum();
	storeObjects();

	function checkValue(prop, value){
		if(obj.hasOwnProperty(prop))
			obj[prop] = value;
	}
}

function setRub5() {
	var semiCub = document.getElementById("totalValSeCub");
	var cub = document.getElementById("totalValCub");
	var total = document.getElementById("totalRub5");
	var coef = document.getElementById("coefAjCub");
	var valueCUB = getValue("SupCub", "Cubierta");
	var valueSEMI = getValue("SupSemi", "Semicubierta");
	var rub5secondary = document.getElementById("atotalrub5");

	if(semiCub)
		semiCub.value = round2(valueSEMI * document.getElementById("totalvusc").value * coef.value);

	if(cub)
		cub.value = round2(valueCUB * document.getElementById("totalvu2").value * coef.value);

	var semiCubValue = semiCub ? parseFloat(semiCub.value):0;
	total.value = round2(parseFloat(cub.value) + semiCubValue);

	if(rub5secondary)
		rub5secondary.value = round2(parseFloat(cub.value) + semiCubValue);

	getTotalSum();

	function getValue(prop1, prop2){
		if(obj.hasOwnProperty(prop1))
			return obj[prop1];
		if(obj.hasOwnProperty(prop2))
			return obj[prop2];
	}
}
