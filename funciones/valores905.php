<?php 
	$Formulario=905;
	//El nombre de los elementos tiene que se tal cual el ID de fachada, pared, etc sin la letra y el numero
	$elementos=["Facha","Pared","Esque","Arma","Techo","Cielo","Revoq","Pisos","Made","Meta","Bano","Reves","Insta"];
	//los numeros del vector rangos son los se encuentran en el rubro 3 'rango de puntaje'
	//van de a pares, los primers dos seria del tipo A, los otros del tipo B y asi
	//y son dos ya que el rango "bueno" seria mayor que el primero
	//el rango regular seria mayor que el segundo pero menor que el primero
	// y el rango malo seria menor que el segundo
	$Rangos=[75,42,73,42,67,42,57,34];
	//las categorias son la cantidad de tipos que hay en el formulario
	//y por cada categoria tiene que haber un vector de 3 elementos vacios
	$Categorias=["B","C","D","E"];
	$B=["","",""];$C=["","",""];$D=["","",""];$E=["","",""];
	//las cantidades son para cada tipo de fachada, pared, escalera, etc la cantidade opciones a elegir que hay en el formulario
	//---------------CANTIDADES DE B ---------------//
	$cantidadesB=[3, //FACHADA - B
				  5, //PARED - B
				  3, //ESQUELETO - B
				  5, //ARMADURA- B
				  2, //TECHOS - B
				  2, //CIELORRASOS - B
				  4, //REVOQUES - B
				  4, //PISOS - B
				  4, //PUERTA DE MADERA - B
				  8, //PUERTA DE METAL - B
				  4, //BAÑO - B
				  5, //REVESTIMIENTO - B
				  4];//INSTALACIONES COMPLEMENTARIAS - B

	//---------------CANTIDADES DE C ---------------//
	$cantidadesC=[4, //FACHADA - C
				  2, //PARED - C
				  2, //ESQUELETO - C
				  3, //ARMADURA- C
				  3, //TECHOS - C
				  4, //CIELORRASOS - C
				  2, //REVOQUES - C
				  7, //PISOS - C
				  3, //PUERTA DE MADERA - C
				  7, //PUERTA DE METAL - C
				  4, //BAÑO - C
				  3, //REVESTIMIENTO - C
				  2];//INSTALACIONES COMPLEMENTARIAS - C

	//---------------CANTIDADES DE D ---------------//
	$cantidadesD=[4, //FACHADA - D
				  3, //PARED - D
				  2, //ESQUELETO - D
				  1, //ARMADURA- D
				  6, //TECHOS - D
				  5, //CIELORRASOS - D
				  3, //REVOQUES - D
				  1, //PISOS - D
				  2, //PUERTA DE MADERA - D
				  3, //PUERTA DE METAL - D
				  3, //BAÑO - D
				  1, //REVESTIMIENTO - D
				  1];//INSTALACIONES COMPLEMENTARIAS - D

	//---------------CANTIDADES DE E ---------------//
	$cantidadesE=[3, //FACHADA - E
				  3, //PAREDE -E
				  2, //ESCALERA - E
				  1, //TECHO - E
				  1, //CIELORRASE - E
				  1, //REVOQUES - E
				  1, //PISOS - E
				  2, //PUERTA DE MADERA - E
				  1, //PUERTA DE METAL - E
				  1, //BAÑOS - E
				  1, //COCINA - E
				  1, //REVESTIMIENTO - E
				  1];//INSTALACIONES COMPLEMENTARIAS - E

	//--------------COMIENZO CALCULO DEL VALOR DE ESTADOS DE CONSERVACION-------------------//
	//El primer indice hace referencia al elemento siguiendo el orden del formulario pero empezando en 0
	//0 -> fachada, 1 -> pared, 2->escalera, etc
	//el segundo indice es para el estado 0 = bueno, 1 = regular, 2 = malo

	//FACHADA
	$ValEstado[0][0]=3;
	$ValEstado[0][1]=2;
	$ValEstado[0][2]=1;
	//PARED
	$ValEstado[1][0]=22;
	$ValEstado[1][1]=15;
	$ValEstado[1][2]=10;
	//ESQUELETO
	$ValEstado[2][0]=9;
	$ValEstado[2][1]=4;
	$ValEstado[2][2]=2;
	//ARMADURA
	$ValEstado[3][0]=22;
	$ValEstado[3][1]=15;
	$ValEstado[3][2]=7;
	//TECHOS
	$ValEstado[4][0]=10;
	$ValEstado[4][1]=6;
	$ValEstado[4][2]=3;
	//CIELORRASO
	$ValEstado[5][0]=2;
	$ValEstado[5][1]=1;
	$ValEstado[5][2]=0;
	//REVOQUES	
	$ValEstado[6][0]=5;
	$ValEstado[6][1]=3;
	$ValEstado[6][2]=1;
	//PISOS
	$ValEstado[7][0]=7;
	$ValEstado[7][1]=5;
	$ValEstado[7][2]=3;
	//PUERTA DE MADERA
	$ValEstado[8][0]=4;
	$ValEstado[8][1]=2;
	$ValEstado[8][2]=1;
	//PUERTA DE METAL
	$ValEstado[9][0]=5;
	$ValEstado[9][1]=3;
	$ValEstado[9][2]=1;
	//BAÑOS
	$ValEstado[10][0]=2;
	$ValEstado[10][1]=1;
	$ValEstado[10][2]=0;
	//REVESTIMIENTO
	$ValEstado[11][0]=2;
	$ValEstado[11][1]=1;
	$ValEstado[11][2]=0;
	//INSTALACIONES COMPLEMENTARIAS
	$ValEstado[12][0]=7;
	$ValEstado[12][1]=5;
	$ValEstado[12][2]=3;

	//Este array es para los valores de reciclado del rubro 3
	$ValoresReci = array(
		"ParedReci" => 20,
		"EsqueReci" => 10,
		"ArmaReci" => 33,
		"RevoqsReci" => 14,
		"PisosReci" => 8,
		"BanoReci" => 9,
		"InstaReci" => 6,
	);
?>