function setDate() {
	var date = new Date();
	var dd = date.getDate();
	var mm = date.getMonth() + 1;
	var yyyy = date.getFullYear();

	if(dd < 10)
		dd = '0' + dd;

	if(mm < 10)
		mm = '0' + mm;

	var htmlToday = yyyy + "-" + mm + "-" + dd;
	var jsonToday = toJsonDate(htmlToday);

	if(obj["Dia"] == 0) {
		checkElements(htmlToday);
		obj["Dia"] = jsonToday;
		obj["Data1"] = yyyy;
	} else {
		checkElements(toHtmlDate(obj["Dia"]));
	}

	if(obj["Dia1"] == 0) {
		checkRecElements(htmlToday);
		if(valores["sumaPta"] >= 40) {
			obj["Dia1"] = jsonToday;
			obj["Data"] = yyyy;
		}
	} else {
		if(valores["sumaPta"] < 40) {
			obj["Dia1"] = 0;
			obj["Data"] = 0;
			checkRecElements(htmlToday);
		} else {
			checkRecElements(toHtmlDate(obj["Dia1"]));
 		}
	}
	//console.log(obj["Dia"] + " " + obj["Data1"] + " " + obj["Dia1"] + " " + obj["Data"]);
  getRubDate();
	storeObjects();

	function checkElements(date) {
		var cub = document.getElementById("dataCub");
		var secub = document.getElementById("dataSeCub");
		if(cub)
			cub.value = date;
		if(secub)
			secub.value = date;
	}

	function checkRecElements(date) {
		var cub = document.getElementById("dataRecCub");
		var secub = document.getElementById("dataRecSeCub");
		if(cub)
			cub.value = date;
		if(secub)
			secub.value = date;
	}
}

function changeDate(element) {
	if(!element.value)
		return;

	var jsonDate = toJsonDate(element.value);

	if(element.id == "dataCub") {
		var seCub = document.getElementById("dataSeCub");
		if(seCub)
			seCub.value = element.value;
		obj["Dia"] = jsonDate;
		obj["Data1"] = jsonDate.slice(jsonDate.lastIndexOf("/") + 1);
	}

	if(element.id == "dataRecCub") {
		var recSeCub = document.getElementById("dataRecSeCub");
		if(recSeCub)
			recSeCub.value = element.value;
		obj["Dia1"] = jsonDate;
		obj["Data"] = jsonDate.slice(jsonDate.lastIndexOf("/") + 1);
	}
	//console.log(obj["Dia"] + " " + obj["Data1"] + " " + obj["Dia1"] + " " + obj["Data"]);
  getRubDate();
	storeObjects();
}

function toHtmlDate(jsonDate) {
	var date = jsonDate.split("/");
	return (date[2] + "-" + date[1] + "-" + date[0]);
}

function toJsonDate(htmlDate) {
	var date = htmlDate.split("-");
	return (date[2] + "/" + date[1] + "/" + date[0]);
}

function getRubDate() {
  var checkElements = document.getElementsByTagName("input");
  var coefArray = [];

	for (var i = 0; i < checkElements.length; i++) {
		if(checkElements[i].id.indexOf("data") != -1 && checkElements[i].type == "text") {
			getRubEstado(checkElements[i + 1]);
      coefArray.push(checkElements[i + 2]);

      if(obj["Dia1"] == 0)
        checkElements[i].value = obj["Dia"];
      else
        checkElements[i].value = obj["Dia1"];
		}
	}

  document.getElementById("coefAjSeCub") ? coefArray.push(document.getElementById("coefAjSeCub")):null;
  coefArray.push(document.getElementById("coefAjCub"));
  getRubCoef(coefArray);
}

function getRubEstado(element) {
  element.value = obj["Estado"];
}

function getRubCoef(coefArray) {
  var antiguedad;
	var tempDate = new Date();
  if(obj["Dia1"] == 0) {
    antiguedad = (valores["aniotabla"] - obj["Data1"]);
    //console.log(antiguedad + "No Reci");
    coefDbSearch(antiguedad, coefArray);
  }
  else {
    antiguedad = (valores["aniotabla"] - obj["Data"]);
    //console.log(antiguedad + "Reci");
    coefDbSearch(antiguedad, coefArray);
  }

  function coefDbSearch(antiguedad, coefArray) {
		if(antiguedad < 1)
			antiguedad = 1;

		if(antiguedad > 100)
			antiguedad = 100;

  	var xmlhttp = new XMLHttpRequest();
  	xmlhttp.onreadystatechange = function() {
  		if (this.readyState == 4 && this.status == 200) {
  			setCoef(this.responseText, coefArray);
        setRub5();
				if(typeof setRub6 == typeof Function)
      		setRub6();
				if(typeof setRub8 == typeof Function)
      		setRub8();
  		}
  	};
  	xmlhttp.open("POST", "selectCoef.php", true);
  	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  	xmlhttp.send("antiguedad=" + antiguedad + "&categoria=" + valores["estIndice"] + "&conservacion=" + obj["Estado"]);
  }
}

function setCoef(coef, coefArray) {
  for (var i = 0; i < coefArray.length; i++) {
      coefArray[i].value = coef;
  }
}
