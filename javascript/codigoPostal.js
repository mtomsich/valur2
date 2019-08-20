function selectCP(elementCP) {
	var alturasID = elementCP.options[elementCP.selectedIndex].value;
	var parxCP = document.getElementById("idAlturas");
	if(parxCP)
		parxCP.value = alturasID;

	var xhttpCP;



xhttpCP = new XMLHttpRequest();
xhttpCP.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
		clearSelectCP();
		addSelectCP(this.responseText);
	}

};
xhttpCP.open("POST", "selectCP.php", true);
xhttpCP.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttpCP.send("idAlturas=" + alturasID);
console.log(xhttpCP);
}


function clearSelectCP() {
	var cp = document.getElementById("cp");

	while (cp.length) {
  	cp.remove(0);

	}
console.log(cp);
	$('#cp').selectpicker('refresh');
}

function addSelectCP(sqlJson) {
	var arrayCP = JSON.parse(sqlJson);
  var selectCP = document.getElementById("cp");

	for (var objCP in arrayCP) {
		var optCP = document.createElement('option');
    optCP.value = arrayCP[objCP]["cod_postal"];
    optCP.innerHTML = (arrayCP[objCP]["cod_postal"]);
    selectCP.appendChild(optCP);
	}


	$('#cp').selectpicker('refresh');

}
