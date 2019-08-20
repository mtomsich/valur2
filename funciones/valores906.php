<?php 
	$Formulario=906;
	//El nombre de los elementos tiene que se tal cual el ID de fachada, pared, etc sin la letra y el numero
	$elementos=["Facha","Pared","Esca","Esque","Arma","Techo","Cielo","Revoq","Pisos","Made","Meta","Bano","Reves","Insta"];
	//los numeros del vector rangos son los se encuentran en el rubro 3 'rango de puntaje'
	//van de a pares, los primers dos seria del tipo A, los otros del tipo B y asi
	//y son dos ya que el rango "bueno" seria mayor que el primero
	//el rango regular seria mayor que el segundo pero menor que el primero
	// y el rango malo seria menor que el segundo
	$Rangos=[74,41,63,35,59,32];
	//las categorias son la cantidad de tipos que hay en el formulario
	//y por cada categoria tiene que haber un vector de 3 elementos vacios
	$Categorias=["A","B","C"];
	$A=["","",""];$B=["","",""];$C=["","",""];
	//las cantidades son para cada tipo de fachada, pared, escalera, etc la cantidade opciones a elegir que hay en el formulario
	//---------------CANTIDADES DE A ---------------//
	$cantidadesA=[4, //FACHADA - A
				  2, //PARED - A
				  4, //ESCALERA - A
				  1, //ESQUELETO - A
				  1, //ARMADURA- A
				  2, //TECHOS - A
				  4, //CIELORRASOS - A
				  5, //REVOQUES - A
				  4, //PISOS - A
				  5, //PUERTA DE MADERA - A
				  7, //PUERTA DE METAL - A
				  5, //BAÑO - A
				  6, //REVESTIMIENTO - A
				  3];//INSTALACIONES COMPLEMENTARIAS - A
	//---------------CANTIDADES DE B ---------------//
	$cantidadesB=[5, //FACHADA - B
				  3, //PARED - B
				  7, //ESCALERA - B
				  1, //ESQUELETO - B
				  1, //ARMADURA- B
				  3, //TECHOS - B
				  3, //CIELORRASOS - B
				  4, //REVOQUES - B
				  5, //PISOS - B
				  3, //PUERTA DE MADERA - B
				  5, //PUERTA DE METAL - B
				  3, //BAÑO - B
				  4, //REVESTIMIENTO - B
				  2];//INSTALACIONES COMPLEMENTARIAS - B

	//---------------CANTIDADES DE C ---------------//
	$cantidadesC=[4, //FACHADA - C
				  2, //PARED - C
				  1, //ESCALERA - C
				  2, //ESQUELETO - C
				  1, //ARMADURA- C
				  4, //TECHOS - C
				  4, //CIELORRASOS - C
				  1, //REVOQUES - C
				  1, //PISOS - C
				  1, //PUERTA DE MADERA - C
				  2, //PUERTA DE METAL - C
				  2, //BAÑO - C
				  1, //REVESTIMIENTO - C
				  1];//INSTALACIONES COMPLEMENTARIAS - C

	//--------------COMIENZO CALCULO DEL VALOR DE ESTADOS DE CONSERVACION-------------------//
	//El primer indice hace referencia al elemento siguiendo el orden del formulario pero empezando en 0
	//0 -> fachada, 1 -> pared, 2->escalera, etc
	//el segundo indice es para el estado 0 = bueno, 1 = regular, 2 = malo

	//FACHADA
	$ValEstado[0][0]=2;
	$ValEstado[0][1]=1;
	$ValEstado[0][2]=0;
	//PARED
	$ValEstado[1][0]=27;
	$ValEstado[1][1]=17;
	$ValEstado[1][2]=10;
	//ESCALERA
	$ValEstado[2][0]=2;
	$ValEstado[2][1]=1;
	$ValEstado[2][2]=0;
	//ESQUELETO
	$ValEstado[3][0]=10;
	$ValEstado[3][1]=4;
	$ValEstado[3][2]=2;
	//ARMADURA
	$ValEstado[4][0]=15;
	$ValEstado[4][1]=11;
	$ValEstado[4][2]=7;
	//TECHOS
	$ValEstado[5][0]=7;
	$ValEstado[5][1]=4;
	$ValEstado[5][2]=1;
	//CIELORRASO	
	$ValEstado[6][0]=6;
	$ValEstado[6][1]=4;
	$ValEstado[6][2]=2;
	//REVOQUES
	$ValEstado[7][0]=7;
	$ValEstado[7][1]=4;
	$ValEstado[7][2]=1;
	//PISOS
	$ValEstado[8][0]=7;
	$ValEstado[8][1]=4;
	$ValEstado[8][2]=1;
	//PUERTA DE MADERA
	$ValEstado[9][0]=5;
	$ValEstado[9][1]=3;
	$ValEstado[9][2]=1;
	//PUERTA DE METAL
	$ValEstado[10][0]=3;
	$ValEstado[10][1]=2;
	$ValEstado[10][2]=1;
	//BAÑOS
	$ValEstado[11][0]=2;
	$ValEstado[11][1]=1;
	$ValEstado[11][2]=0;
	//REVESTIMIENTO
	$ValEstado[12][0]=3;
	$ValEstado[12][1]=2;
	$ValEstado[12][2]=1;
	//INSTALACIONES COMPLEMENTARIAS
	$ValEstado[13][0]=4;
	$ValEstado[13][1]=3;
	$ValEstado[13][2]=2;

	//Este array es para los valores de reciclado del rubro 3
	$ValoresReci = array(
		"ParedReci" => 8,
		"RevoqReci" => 28,
		"ArmaReci" => 32,
		"CieloReci" => 4,
		"PisosReci" => 11,
		"BanoReci" => 8,
		"InstaReci" => 9,
	);
?>