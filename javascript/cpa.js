function selectCPA(elementCPA) {
	var alturasID2 = elementCPA.options[elementCPA.selectedIndex].value;
	var parxCPA = document.getElementById("idAlturas");
	if(parxCPA)
		parxCPA.value = alturasID2;

	var xhttpCPA;



xhttpCPA = new XMLHttpRequest();
xhttpCPA.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
		clearSelectCPA();
		addSelectCPA(this.responseText);
	}

};
xhttpCPA.open("POST", "selectCPA.php", true);
xhttpCPA.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttpCPA.send("idAlturas=" + alturasID2);
console.log(xhttpCPA);
}


function clearSelectCPA() {
	var cpa = document.getElementById("cpa");

	while (cpa.length) {
  	cpa.remove(0);

	}
console.log(cpa);
	$('#cpa').selectpicker('refresh');
}

function addSelectCPA(sqlJson) {
	var arrayCPA = JSON.parse(sqlJson);
  var selectCPA = document.getElementById("cpa");

	for (var objCPA in arrayCPA) {
		var optCPA = document.createElement('option');
    optCPA.value = arrayCPA[objCPA]["cpa"];
    optCPA.innerHTML = (arrayCPA[objCPA]["cpa"]);
    selectCPA.appendChild(optCPA);
	}


	$('#cpa').selectpicker('refresh');

}
