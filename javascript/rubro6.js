function valRub6(ele) {
  if(isNaN(ele.value) || ele.value < 0)
		return;

  var coef = document.getElementById("coefAjCub");
  var name = ele.id.replace("cant","");
  switch(name) {
    case "Hel":
      document.getElementById("valUniHel").value = searchProp("Hel");
      obj["Heladeras"] = ele.value;
      break;
    case "Aire":
      document.getElementById("valUniAire").value = getPropByForm("Aire");
      obj["Aire"] = ele.value;
      break;
    case "Asc1":
      document.getElementById("valUniAsc1").value = searchProp("Asc1");
      obj.hasOwnProperty("AscensoresCant1") ? (obj["AscensoresCant1"] = ele.value) : (obj["Ascensores11"] = ele.value);
      break;
    case "Asc2":
      document.getElementById("valUniAsc2").value = searchProp("Asc2");
      obj.hasOwnProperty("AscensoresCant2") ? (obj["AscensoresCant2"] = ele.value) : (obj["Ascensores22"] = ele.value);
      break;
    case "Monta1":
      document.getElementById("valUniMonta1").value = searchProp("Monta1");
      obj["Monta11"] = ele.value;
      break;
    case "Monta2":
      document.getElementById("valUniMonta2").value = searchProp("Monta2");
      obj["Monta22"] = ele.value;
        break;
    case "Calef":
      document.getElementById("valUniCalef").value = searchProp("Calef");
      obj["Calefacion"] = ele.value;
      break;
    case "Losa":
      document.getElementById("valUniLosa").value = getPropByForm("Losa");
      obj["Losa"] = ele.value;
      break;
    case "Horno":
      document.getElementById("valUniHorno").value = searchProp("Horno");
      obj["Horno"] = ele.value;
      break;
    case "AguaCal":
      document.getElementById("valUniAguaCal").value = searchProp("AguaCal");
      obj["Agua"] = ele.value;
      break;
    case "BaniosPri":
      document.getElementById("valUniBaniosPri").value = getPropByType("BaniosPri");
      obj["Bano1"] = ele.value;
      break;
    case "BaniosSec":
      document.getElementById("valUniBaniosSec").value = getPropByType("BaniosSec");
      obj["Bano2"] = ele.value;
      break;
    case "Pileta":
      document.getElementById("valUniPileta").value = getPiletaProp("Pileta");
      obj["PiletaCant"] = ele.value;
      break;
    case "Frigo":
      document.getElementById("valUniFrigo").value = searchProp("Frigo");
      obj["Avicola"] = ele.value;
      break;
    case "Incen":
      document.getElementById("valUniIncen").value = getPropDirect("Incen");
      obj["Incendio"] = ele.value;
      break;
  }

  if(name.includes("Asc") || name.includes("Monta")) {
    var paradas = document.getElementById("paradas" + name).value;
    if(isNaN(paradas) || paradas < 0)
  		paradas = 0;
    document.getElementById("val" + name).value = round2(paradas * document.getElementById("valUni" + name).value * coef.value);
  } else {
    document.getElementById("val" + name).value = round2(document.getElementById("valUni" + name).value * ele.value * coef.value);
  }
  document.getElementById("totalrub6").value = sumaTotal();
  document.getElementById("btotalrub6").value = sumaTotal();
  getTotalSum();
  storeObjects();

  function searchProp(prop) {
    if(ele.value == 0)
      return 0;

    var cant;
    for (var property in valoresBasicos) {
      if (valoresBasicos.hasOwnProperty(property)) {
        if(property.indexOf(prop) != -1) {
          cant = parseInt(property.replace(prop,""));
          if(ele.value <= cant)
            return valoresBasicos[property];
        }
      }
    }

    return valoresBasicos[prop + cant];
  }

  function getPropByForm(prop) {
    if(ele.value == 0)
      return 0;

    return valoresBasicos[prop + formNumber];
  }

  function getPropByType(prop) {
    if(ele.value == 0)
      return 0;

    return valoresBasicos[prop + valores["estIndice"]];
  }

  function getPropDirect(prop) {
    if(ele.value == 0)
      return 0;

    return valoresBasicos[prop];
  }

  function getPiletaProp(prop) {
    if(ele.value == 0)
      return 0;

    if(!obj[prop]) {
      obj[prop] = "A";
      document.getElementById(prop + "A").checked = true;
      storeObjects();
    }

    return valoresBasicos[prop + obj[prop]];
  }
}

function setRub6() {
  var ele;
  var coef = document.getElementById("coefAjCub");

  ele = document.getElementById("cantHel");
  if(ele){
    document.getElementById("valUniHel").value = searchProp("Hel");
    setElement();
  }
  ele = document.getElementById("cantAire");
  if(ele){
    document.getElementById("valUniAire").value = getPropByForm("Aire");
    setElement();
  }
  ele = document.getElementById("cantAsc1");
  if(ele){
    document.getElementById("valUniAsc1").value = searchProp("Asc1");
    setElement();
  }
  ele = document.getElementById("cantAsc2");
  if(ele){
    document.getElementById("valUniAsc2").value = searchProp("Asc2");
    setElement();
  }
  ele = document.getElementById("cantMonta1");
  if(ele){
    document.getElementById("valUniMonta1").value = searchProp("Monta1");
    setElement();
  }
  ele = document.getElementById("cantMonta2");
  if(ele){
    document.getElementById("valUniMonta2").value = searchProp("Monta2");
    setElement();
  }
  ele = document.getElementById("cantCalef");
  if(ele){
    document.getElementById("valUniCalef").value = searchProp("Calef");
    setElement();
  }
  ele = document.getElementById("cantLosa");
  if(ele){
    document.getElementById("valUniLosa").value = getPropByForm("Losa");
    setElement();
  }
  ele = document.getElementById("cantHorno");
  if(ele){
    document.getElementById("valUniHorno").value = searchProp("Horno");
    setElement();
  }
  ele = document.getElementById("cantAguaCal");
  if(ele){
    document.getElementById("valUniAguaCal").value = searchProp("AguaCal");
    setElement();
  }
  ele = document.getElementById("cantBaniosPri");
  if(ele){
    document.getElementById("valUniBaniosPri").value = getPropByType("BaniosPri");
    setElement();
  }
  ele = document.getElementById("cantBaniosSec");
  if(ele){
    document.getElementById("valUniBaniosSec").value = getPropByType("BaniosSec");
    setElement();
  }
  ele = document.getElementById("cantPileta");
  if(ele){
    document.getElementById("valUniPileta").value = getPiletaProp("Pileta");
    setElement();
  }
  ele = document.getElementById("cantFrigo");
  if(ele){
    document.getElementById("valUniFrigo").value = searchProp("Frigo");
    setElement();
  }
  ele = document.getElementById("cantIncen");
  if(ele){
    document.getElementById("valUniIncen").value = getPropDirect("Incen");
    setElement();
  }

  document.getElementById("totalrub6").value = sumaTotal();
  document.getElementById("btotalrub6").value = sumaTotal();
  getTotalSum();

  function setElement() {
    var name = ele.id.replace("cant","");
    if(name.includes("Asc") || name.includes("Monta")) {
      var paradas = document.getElementById("paradas" + name).value;
      if(isNaN(paradas) || paradas < 0)
    		paradas = 0;
      document.getElementById("val" + name).value = round2(paradas * document.getElementById("valUni" + name).value * coef.value);
    } else {
      document.getElementById("val" + name).value = round2(document.getElementById("valUni" + name).value * ele.value * coef.value);
    }
  }

  function searchProp(prop) {
    if(ele.value == 0)
      return 0;

    var cant;
    for (var property in valoresBasicos) {
      if (valoresBasicos.hasOwnProperty(property)) {
        if(property.indexOf(prop) != -1) {
          cant = parseInt(property.replace(prop,""));
          if(ele.value <= cant)
            return valoresBasicos[property];
        }
      }
    }

    return valoresBasicos[prop + cant];
  }

  function getPropByForm(prop) {
    if(ele.value == 0)
      return 0;

    return valoresBasicos[prop + formNumber];
  }

  function getPropByType(prop) {
    if(ele.value == 0)
      return 0;

    return valoresBasicos[prop + valores["estIndice"]];
  }

  function getPropDirect(prop) {
    if(ele.value == 0)
      return 0;

    return valoresBasicos[prop];
  }

  function getPiletaProp(prop) {
    setPiletaRadioValue();

    if(ele.value == 0)
      return 0;

    if(!obj[prop]) {
      obj[prop] = "A";
      document.getElementById(prop + "A").checked = true;
      storeObjects();
    }

    return valoresBasicos[prop + obj[prop]];

    function setPiletaRadioValue() {
    	if(!obj["Pileta"])
        return;

      switch(obj["Pileta"]) {
      	case "A": document.getElementById("PiletaA").checked = true; break;
      	case "B": document.getElementById("PiletaB").checked = true; break;
      	case "C": document.getElementById("PiletaC").checked = true; break;
      }
    }
  }
}

function piletaRadioValue(element) {
	if(obj[element.name] == element.value) {
		obj[element.name] = "";
		element.checked = false;
	} else {
    switch(element.value) {
    	case "A": obj[element.name] = "A"; break;
    	case "B": obj[element.name] = "B"; break;
    	case "C": obj[element.name] = "C"; break;
    }
    element.checked = true;
  }

  var ele = document.getElementById("cantPileta");
  ele.value = 0;
  valRub6(ele);
	storeObjects();
}

function unidadesAsc(element) {
	if(isNaN(element.value) || element.value < 0)
    return;

  var ascNumber = element.id.slice(-1);
  obj["Ascensores" + ascNumber] = element.value;

  var ele = document.getElementById("cantAsc" + ascNumber);
  valRub6(ele);
	storeObjects();
}

function unidadesMonta(element) {
	if(isNaN(element.value) || element.value < 0)
    return;

  var montaNumber = element.id.slice(-1);
  obj["Monta" + montaNumber] = element.value;

  var ele = document.getElementById("cantMonta" + montaNumber);
  valRub6(ele);
	storeObjects();
}

function round2(number) {
	return Math.round(number * 100) / 100;
}

function sumaTotal() {
  return (round2(checkValue("val" + "Hel") +
        checkValue("val" + "Aire") +
        checkValue("val" + "Asc1") +
        checkValue("val" + "Asc2") +
        checkValue("val" + "Monta1") +
        checkValue("val" + "Monta2") +
        checkValue("val" + "Calef") +
        checkValue("val" + "Losa") +
        checkValue("val" + "Horno") +
        checkValue("val" + "AguaCal") +
        checkValue("val" + "BaniosPri") +
        checkValue("val" + "BaniosSec") +
        checkValue("val" + "Pileta") +
        checkValue("val" + "Frigo") +
        checkValue("val" + "Incen")));

  function checkValue(prop) {
    var ele = document.getElementById(prop);
    if(ele)
      return parseFloat(ele.value);
    else
      return 0;
  }
}
