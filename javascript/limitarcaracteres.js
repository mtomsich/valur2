function limitar(element,elEvento, maximoCaracteres) {

  var input = element.value;
  // Obtener la tecla pulsada
  var evento = elEvento || window.event;
  var codigoCaracter = evento.charCode || evento.keyCode;
  // Permitir utilizar las teclas con flecha horizontal
  if(codigoCaracter == 37 || codigoCaracter == 39) {
    return true;
  }

  // Permitir borrar con la tecla Backspace y con la tecla Supr.
  if(codigoCaracter == 8 || codigoCaracter == 46) {
    return true;
  }
  else if(input.length >= maximoCaracteres ) {

    return false;
  }
  else {
    return true;
  }
  }
  function actualizarInfo(element,maximoCaracteres) {
    var elementName = element.id;
    var resultName = elementName.replace("Input", "") + "Resultado";
    var input = element.value;

    if(input.length >= maximoCaracteres ) {
      document.getElementById(resultName).innerHTML = "0";
    }
    else {
      document.getElementById(resultName).innerHTML = (maximoCaracteres-input.length);
    }
  }
