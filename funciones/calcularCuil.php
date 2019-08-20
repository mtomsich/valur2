<script type="text/javascript"> 
			function Generar() { 
				var doc = $( "#dni" ).val () ; 
				var sex = ( sexo.options[sexo.selectedIndex].value ) ; 
				var cant_doc = $( "#dni" ).val().length; 
				
				/*verifico que haya seleccionado un sexo y completado el dni*/ 
				if( doc == '' || sex == 0 ) 
				{ 
					$( "#result" ).html( '' ) ; 
					$( "#error" ).html( '<center><font color="red" size=4>Campos vacios..!!</font></center>' ); 
				} 
				else 
				{ 
					/* verifico la longitud del campo documento sea = 8*/ 
					if( cant_doc == 8 ) 
					{ 
						/* verifico que solo se hayan ingresado numeros. Que el campo sea entero.*/ 
						if (isNaN(doc)) 
						{ 
							$( "#error" ).html( '<center><font color="red" size=4>Documento debe ser solo numeros...!!</font></center>' ); 
						} 
						else 
						{ 
							
							$.ajax({ 
								type: 'GET', 
								url: "Generar.php?dni="+doc+"&sexo="+sex, 
								success: function(data){ 
									$( "#result" ).html( "<center><font color='black' size=4>"+data+"</font></center>" ); 
								} 
							}); 
						} 
					} 
					else 
					{ 
						$( "#error" ).html( '<center><font color="red" size=4>Documento Incorrecto..!!</font></center>' ); 
					} 
				} 
			} 
		</script> 