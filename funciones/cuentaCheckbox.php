<script language="javascript">
	
	function contar(checkboxFormulario) {
		var checkboxes = checkboxFormulario; //Array que contiene los checkbox
		var cont = 0; //Variable que lleva la cuenta de los checkbox pulsados
		
		for (var x=0; x < checkboxes.length; x++) {
			if (checkboxes[x].checked) {
			    localStorage.setItem("var"+x, "1");
				cont = cont + 1;				
			}
		}
		document.all.capaTexto.innerHTML = localStorage.getItem("var3");
		
	}
	
	
	
	
	
	function contarB(checkboxFormulario) {
		var checkboxes = checkboxFormulario; //Array que contiene los checkbox
		var cont = 0; //Variable que lleva la cuenta de los checkbox pulsados
		
		for (var x=0; x < checkboxes.length; x++) {
			if (checkboxes[x].checked) {
				cont = cont + 1;
			}
		}
		document.all.capaTextoB.innerHTML = cont	
		
	}
	function contarC(checkboxFormulario) {
		var checkboxes = checkboxFormulario; //Array que contiene los checkbox
		var cont = 0; //Variable que lleva la cuenta de los checkbox pulsados
		
		for (var x=0; x < checkboxes.length; x++) {
			if (checkboxes[x].checked) {
				cont = cont + 1;
			}
		}
		document.all.capaTextoC.innerHTML = cont	
		
	}
	function contarD(checkboxFormulario) {
		var checkboxes = checkboxFormulario; //Array que contiene los checkbox
		var cont = 0; //Variable que lleva la cuenta de los checkbox pulsados
		
		for (var x=0; x < checkboxes.length; x++) {
			if (checkboxes[x].checked) {
				cont = cont + 1;
			}
		}
		document.all.capaTextoD.innerHTML = cont	
		
	}
	function contarE(checkboxFormulario) {
		var checkboxes = checkboxFormulario; //Array que contiene los checkbox
		var cont = 0; //Variable que lleva la cuenta de los checkbox pulsados
		
		for (var x=0; x < checkboxes.length; x++) {
			if (checkboxes[x].checked) {
				cont = cont + 1;
			}
		}
		document.all.capaTextoE.innerHTML = cont	
		
	}
	
	
	
</script>