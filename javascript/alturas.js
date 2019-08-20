function selectAlturas(elementA) {
	var callesID = elementA.options[elementA.selectedIndex].value;
	var parxA = document.getElementById("idCalles");
	if(parxA)
		parxA.value = callesID;

	var xhttpA;


  xhttpA = new XMLHttpRequest();
  xhttpA.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
			clearSelectA();
			addSelectA(this.responseText);
    }

  };
  xhttpA.open("POST", "selectAlturas.php", true);
	xhttpA.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttpA.send("idCalles=" + callesID);


}

function clearSelectA() {
	var alturas = document.getElementById("alturas");

	while (alturas.length) {
  	alturas.remove(0);

	}

	$('#alturas').selectpicker('refresh');
}

function addSelectA(sqlJson) {
	var arrayA = JSON.parse(sqlJson);
  var selectA = document.getElementById("alturas");

	for (var objA in arrayA) {
		var optA = document.createElement('option');
    optA.value = arrayA[objA]["idAlturas"];
    optA.innerHTML = (arrayA[objA]["desde"])+"-"+(arrayA[objA]["hasta"])//+"_"+"CPA:"+(arrayA[objA]["cpa"]);
    selectA.appendChild(optA);
	}


	$('#alturas').selectpicker('refresh');

}
