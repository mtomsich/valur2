function valRub8(ele) {
  if(isNaN(ele.value) || ele.value < 0)
		return;

  var coef = document.getElementById("coefAjCub");
  var name = ele.id.replace("cant","");
  switch(name) {
    case "Tanque1":
      document.getElementById("valUniTanque1").value = searchPropLess("Tanque1");
      obj["TanquesCant1"] = ele.value;
      break;
    case "Tanque2":
      document.getElementById("valUniTanque2").value = searchPropLess("Tanque2");
      obj["TanquesCant2"] = ele.value;
      break;
    case "Tanque3":
      document.getElementById("valUniTanque3").value = searchPropLess("Tanque3");
      obj["TanquesCant3"] = ele.value;
      break;
    case "PaviRig":
      document.getElementById("valUniPaviRig").value = getPropDirect("PaviRig");
      obj["Pavimento1"] = ele.value;
      break;
    case "PaviFlex":
      document.getElementById("valUniPaviFlex").value = getPropDirect("PaviFlex");
      obj["Pavimento2"] = ele.value;
      break;
    case "SiloA":
      document.getElementById("valUniSiloA").value = searchProp("SiloA");
      obj["Silos1Metros"] = ele.value;
        break;
    case "SiloB":
      document.getElementById("valUniSiloB").value = searchProp("SiloB");
      obj["Silos2Metros"] = ele.value;
      break;
    case "SiloC":
      document.getElementById("valUniSiloC").value = searchProp("SiloC");
      obj["Silos3Metros"] = ele.value;
      break;
  }

  if(name.includes("Tanque") || name.includes("Silo")) {
    var metros = document.getElementById("metros" + name).value;
    if(isNaN(metros) || metros < 0)
      metros = 0;
    document.getElementById("val" + name).value = round2(metros * document.getElementById("valUni" + name).value * coef.value);
  } else {
    document.getElementById("val" + name).value = round2(document.getElementById("valUni" + name).value * ele.value * coef.value);
  }
  document.getElementById("totalrub8").value = sumaTotal8();
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

  function searchPropLess(prop) {
    return searchProp(prop.slice(0, -1));
  }

  function getPropDirect(prop) {
    if(ele.value == 0)
      return 0;

    return valoresBasicos[prop];
  }
}

function setRub8() {
  var ele;
  var coef = document.getElementById("coefAjCub");

  ele = document.getElementById("cantTanque1");
  if(ele){
    document.getElementById("valUniTanque1").value = searchPropLess("Tanque1");
    setElement();
  }
  ele = document.getElementById("cantTanque2");
  if(ele){
    document.getElementById("valUniTanque2").value = searchPropLess("Tanque2");
    setElement();
  }
  ele = document.getElementById("cantTanque3");
  if(ele){
    document.getElementById("valUniTanque3").value = searchPropLess("Tanque3");
    setElement();
  }
  ele = document.getElementById("cantPaviRig");
  if(ele){
    document.getElementById("valUniPaviRig").value = getPropDirect("PaviRig");
    setElement();
  }
  ele = document.getElementById("cantPaviFlex");
  if(ele){
    document.getElementById("valUniPaviFlex").value = getPropDirect("PaviFlex");
    setElement();
  }
  ele = document.getElementById("cantSiloA");
  if(ele){
    document.getElementById("valUniSiloA").value = searchProp("SiloA");
    setElement();
  }
  ele = document.getElementById("cantSiloB");
  if(ele){
    document.getElementById("valUniSiloB").value = searchProp("SiloB");
    setElement();
  }
  ele = document.getElementById("cantSiloC");
  if(ele){
    document.getElementById("valUniSiloC").value = searchProp("SiloC");
    setElement();
  }

  document.getElementById("totalrub8").value = sumaTotal8();

  function setElement() {
    var name = ele.id.replace("cant","");
    if(name.includes("Tanque") || name.includes("Silo")) {
      var metros = document.getElementById("metros" + name).value;
      if(isNaN(metros) || metros < 0)
    		metros = 0;
      document.getElementById("val" + name).value = round2(metros * document.getElementById("valUni" + name).value * coef.value);
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

  function searchPropLess(prop) {
    return searchProp(prop.slice(0, -1));
  }

  function getPropDirect(prop) {
    if(ele.value == 0)
      return 0;

    return valoresBasicos[prop];
  }
}

function metrosTanque(element) {
	if(isNaN(element.value) || element.value < 0)
    return;

  var tanqueNumber = element.id.slice(-1);

  if(tanqueNumber == 1) tanqueNumber = "";

  obj["Tanques" + tanqueNumber] = element.value;

  if(tanqueNumber == "") tanqueNumber = 1;

  var ele = document.getElementById("cantTanque" + tanqueNumber);
  valRub8(ele);
	storeObjects();
}

function metrosSilo(element) {
	if(isNaN(element.value) || element.value < 0)
    return;


  var siloLetter = element.id.slice(-1);

  var siloNumber;

  switch(siloLetter) {
    case "A": siloNumber = 1;break;
    case "B": siloNumber = 2;break;
    case "C": siloNumber = 3;break;
  }

  obj["Silo" + siloNumber] = element.value;

  var ele = document.getElementById("cantSilo" + siloLetter);
  valRub8(ele);
	storeObjects();
}

function round2(number) {
	return Math.round(number * 100) / 100;
}

function sumaTotal8() {
  return (round2(checkValue("val" + "Tanque1") +
        checkValue("val" + "Tanque2") +
        checkValue("val" + "Tanque3") +
        checkValue("val" + "PaviRig") +
        checkValue("val" + "PaviFlex") +
        checkValue("val" + "SiloA") +
        checkValue("val" + "SiloB") +
        checkValue("val" + "SiloC")));

  function checkValue(prop) {
    var ele = document.getElementById(prop);
    if(ele)
      return parseFloat(ele.value);
    else
      return 0;
  }
}
