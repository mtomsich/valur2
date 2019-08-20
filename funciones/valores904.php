<?php 
	$Formulario=904;
	//El nombre de los elementos tiene que se tal cual el ID de fachada, pared, etc sin la letra y el numero
	$elementos=["Facha","Pared","Esca","Techo","Cielo","Revoq","Pisos","Made","Meta","Bano","Coci","Reves","Insta"];
	//los numeros del vector rangos son los se encuentran en el rubro 3 'rango de puntaje'
	//van de a pares, los primers dos seria del tipo A, los otros del tipo B y asi
	//y son dos ya que el rango "bueno" seria mayor que el primero
	//el rango regular seria mayor que el segundo pero menor que el primero
	// y el rango malo seria menor que el segundo
	$Rangos=[74,46,74,46,66,40,60,38];
	//las categorias son la cantidad de tipos que hay en el formulario
	//y por cada categoria tiene que haber un vector de 3 elementos vacios
	$Categorias=["A","B","C","D"];
	$A=["","",""];$B=["","",""];$C=["","",""];$D=["","",""];
	//las cantidades son para cada tipo de fachada, pared, escalera, etc la cantidade opciones a elegir que hay en el formulario
	//---------------CANTIDADES DE A ---------------//
	$cantidadesA=[3, //FACHADA - A
				  3, //PAREDE - A
				  3, //ESCALERA - A
				  3, //TECHO - A
				  4, //CIELORRASO - A
				  2, //REVOQUES - A
				  4, //PISOS - A
				  3, //PUERTA DE MADERA - A
				  7, //PUERTA DE METAL - A
				  3, //BAÑOS - A
				  3, //COCINA - A
				  4, //REVESTIMIENTO - A
				  4];//INSTALACIONES COMPLEMENTARIAS - A

	//---------------CANTIDADES DE B ---------------//
	$cantidadesB=[4, //FACHADA - B
				  4, //PAREDE - B
				  2, //ESCALERA - B
				  3, //TECHO - B
				  6, //CIELORRASO - B
				  2, //REVOQUES - B
				  4, //PISOS - B
				  7, //PUERTA DE MADERA - B
				  4, //PUERTA DE METAL - B
				  2, //BAÑOS - B
				  3, //COCINA - B
				  5, //REVESTIMIENTO - B
				  2];//INSTALACIONES COMPLEMENTARIAS - B

	//---------------CANTIDADES DE C ---------------//
	$cantidadesC=[5, //FACHADA - C
				  2, //PARED - C
				  5, //ESCALERA - C
				  4, //TECHO - C
				  4, //CIELORRASO - C
				  4, //REVOQUES - C
				  6, //PISOS - C
				  4, //PUERTA DE MADERA - C
				  5, //PUERTA DE METAL - C
				  3, //BAÑOS - C
				  4, //COCINA - C
				  1, //REVESTIMIENTO - C
				  1];//INSTALACIONES COMPLEMENTARIAS - C

	//---------------CANTIDADES DE D ---------------//
	$cantidadesD=[2, //FACHADA - D
				  3, //PAREDE - D
				  "", //ESCALERA - D
				  1, //TECHO - D
				  2, //CIELORRASO - D
				  2, //REVOQUES - D
				  3, //PISOS - D
				  2, //PUERTA DE MADERA - D
				  1, //PUERTA DE METAL - D
				  2, //BAÑOS - D
				  2, //COCINA - D
				  1, //REVESTIMIENTO - D
				  1];//INSTALACIONES COMPLEMENTARIAS - D

	//--------------COMIENZO CALCULO DEL VALOR DE ESTADOS DE CONSERVACION-------------------//
	//El primer indice hace referencia al elemento siguiendo el orden del formulario pero empezando en 0
	//0 -> fachada, 1 -> pared, 2->escalera, etc
	//el segundo indice es para el estado 0 = bueno, 1 = regular, 2 = malo

	//FACHADA
	$ValEstado[0][0]=6;
	$ValEstado[0][1]=4;
	$ValEstado[0][2]=2;
	//PARED
	$ValEstado[1][0]=25;
	$ValEstado[1][1]=16;
	$ValEstado[1][2]=9;
	//ESCALERA
	$ValEstado[2][0]=3;
	$ValEstado[2][1]=2;
	$ValEstado[2][2]=1;
	//TECHOS
	$ValEstado[3][0]=18;
	$ValEstado[3][1]=14;
	$ValEstado[3][2]=10;
	//CIELORRASO
	$ValEstado[4][0]=7;
	$ValEstado[4][1]=4;
	$ValEstado[4][2]=2;
	//REVOQUES	
	$ValEstado[5][0]=7;
	$ValEstado[5][1]=4;
	$ValEstado[5][2]=1;
	//PISOS
	$ValEstado[6][0]=12;
	$ValEstado[6][1]=8;
	$ValEstado[6][2]=4;
	//PUERTA DE MADERA
	$ValEstado[7][0]=3;
	$ValEstado[7][1]=2;
	$ValEstado[7][2]=1;
	//PUERTA DE METAL
	$ValEstado[8][0]=8;
	$ValEstado[8][1]=5;
	$ValEstado[8][2]=3;
	//BAÑOS
	$ValEstado[9][0]=3;
	$ValEstado[9][1]=2;
	$ValEstado[9][2]=1;
	//COCINA
	$ValEstado[10][0]=2;
	$ValEstado[10][1]=1;
	$ValEstado[10][2]=0;
	//REVESTIMIENTO
	$ValEstado[11][0]=4;
	$ValEstado[11][1]=2;
	$ValEstado[11][2]=1;
	//INSTALACIONES COMPLEMENTARIAS
	$ValEstado[12][0]=2;
	$ValEstado[12][1]=1;
	$ValEstado[12][2]=0;

	//Este array es para los valores de reciclado del rubro 3
	$ValoresReci = array(
		"ParedReci" => 16,
		"TechoReci" => 12,
		"RevoqReci" => 14,
		"PisosReci" => 8,
		"BanoReci" => 19,
		"CociReci" => 17,
		"InstReci1" => 14,
	);
?>