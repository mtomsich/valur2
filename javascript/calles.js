function selectCalles(elementC) {
	var localidadID = elementC.options[elementC.selectedIndex].value;
	var parxC = document.getElementById("idLocalidad");
	if(parxC)
		parxC.value = localidadID;

	var xhttpC;

  xhttpC = new XMLHttpRequest();
  xhttpC.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
			clearSelectC();
			addSelectC(this.responseText);
    }

  };
  xhttpC.open("POST", "selectCalles.php", true);
	xhttpC.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttpC.send("idLocalidad=" + localidadID);
console.log(xhttpC);
}

function clearSelectC() {
	var calles = document.getElementById("calles");

	while (calles.length) {
  	calles.remove(0);

	}

	$('#calles').selectpicker('refresh');
}

function addSelectC(sqlJson) {
	var arrayC = JSON.parse(sqlJson);
  var selectC = document.getElementById("calles");

	for (var objC in arrayC) {
		var optC = document.createElement('option');
    optC.value = arrayC[objC]["idCalles"];
    optC.innerHTML = arrayC[objC]["nombre_abreviado"];
    selectC.appendChild(optC);
	}

	$('#calles').selectpicker('refresh');

}
