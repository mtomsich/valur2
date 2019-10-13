function selectLocalidad(element) {
	var partidoID = element.options[element.selectedIndex].value;
	var parx = document.getElementById("idPartido");
	if(parx)
		parx.value = partidoID;

	var xhttp;

  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
			clearSelect();
			addSelect(this.responseText);
    }


  };
  xhttp.open("POST", "selectLocalidad.php", true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("idPartido=" + partidoID);
	

}

function clearSelect() {
	var localidad = document.getElementById("localidad");
	while (localidad.length) {
  	localidad.remove(0);
	}

	$('#localidad').selectpicker('refresh');
}

function addSelect(sqlJson) {
	var array = JSON.parse(sqlJson);
  var select = document.getElementById("localidad");

	for (var obj in array) {
		var opt = document.createElement('option');
    opt.value = array[obj]["idLocalidad"];
    opt.innerHTML = array[obj]["localidad"];
    select.appendChild(opt);
	}


	$('#localidad').selectpicker('refresh');

}
