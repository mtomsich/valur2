function selectAlturasCp(elementACp) {
	var callesIDCp = elementACp.options[elementACp.selectedIndex].value;
	var parxACp = document.getElementById("idCalles");
	if(parxACp)
		parxACp.value = callesIDCp;

	var xhttpACp;


  xhttpACp = new XMLHttpRequest();
  xhttpACp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
			clearSelectACp();
			addSelectACp(this.responseText);
    }

  };
  xhttpACp.open("POST", "selectAlturasCp.php", true);
	xhttpACp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttpACp.send("idCalles=" + callesIDCp);
console.log(xhttpACp);

}

function clearSelectACp() {
	var alturasCp = document.getElementById("alturasCp");

	while (alturasCp.length) {
  	alturasCp.remove(0);

	}

	$('#alturasCp').selectpicker('refresh');
}

function addSelectACp(sqlJson) {
	var arrayACp = JSON.parse(sqlJson);
  var selectACp = document.getElementById("alturasCp");

	for (var objACp in arrayACp) {
		var optACp = document.createElement('option');
    optACp.value = arrayACp[objACp]["idAlturas"];
    optACp.innerHTML = (arrayACp[objACp]["desde"])+"-"+(arrayACp[objACp]["hasta"])//+"_"+"CPA:"+(arrayA[objA]["cpa"]);
    selectACp.appendChild(optACp);
	}


	$('#alturasCp').selectpicker('refresh');

}
