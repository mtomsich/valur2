function generarCuit() {
	var result = document.getElementById("result");
	var docID = document.getElementById("dni");
	var doc = docID.value;
	var sexID = document.getElementById("sexo");
	var sex = sexID.options[sexID.selectedIndex].value;

	if(doc == '' || sex == 0)
		return result.value = "Error al calcular el CUIT";
	if(doc.length == 7)
		doc = 0 + doc;
	if(doc.length != 8)
		return result.value = "Error al calcular el CUIT";
	if (isNaN(doc))
		return result.value = "Error al calcular el CUIT";

  var sexString = getSex(sex);
	var codVerif = getCodVerif(sexString + doc);
	result.value = sexString + "-" + doc + "-" + codVerif;

	function getSex(sex) {
		if(sex == 1)
	  	return "20";
		if(sex == 2)
	  	return "27";
		if(sex == 3)
	  	return "30";
	}

	function getCodVerif(cuit) {
		var temp 	= 0;
		var mult = [5, 4, 3, 2, 7, 6, 5, 4, 3, 2];
		var digitos	= cuit.split("");

		for(var i = 0; i < digitos.length; i++) {
			temp += digitos[i] * mult[i];
		}

		var codVerif = 11 - (temp % 11);
		if(codVerif == 11) {
			codVerif = 0;
		}

		return codVerif;
	}
}
