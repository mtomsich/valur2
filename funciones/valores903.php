<?php 
	$Formulario=903;
	//El nombre de los elementos tiene que se tal cual el ID de fachada, pared, etc sin la letra y el numero
	$elementos=["Facha","Pared","Esca","Techo","Cielo","Revoq","Pisos","Made","Meta","Bano","Coci","Reves","Insta"];
	//los numeros del vector rangos son los se encuentran en el rubro 3 'rango de puntaje'
	//van de a pares, los primers dos seria del tipo A, los otros del tipo B y asi
	//y son dos ya que el rango "bueno" seria mayor que el primero
	//el rango regular seria mayor que el segundo pero menor que el primero
	// y el rango malo seria menor que el segundo
	$Rangos=[79,50,79,50,67,42,65,41,54,37];
	//las categorias son la cantidad de tipos que hay en el formulario
	//y por cada categoria tiene que haber un vector de 3 elementos vacios
	$Categorias=["A","B","C","D","E"];
	$A=["","",""];$B=["","",""];$C=["","",""];$D=["","",""];$E=["","",""];
	//las cantidades son para cada tipo de fachada, pared, escalera, etc la cantidade opciones a elegir que hay en el formulario
	//---------------CANTIDADES DE A ---------------//
	$cantidadesA=[5, //FACHADA - A
				  5, //PAREDE - A
				  4, //ESCALERA - A
				  3, //TECHO - A
				  2, //CIELORRASO - A
				  2, //REVOQUES - A
				  4, //PISOS - A
				  5, //PUERTA DE MADERA - A
				  7, //PUERTA DE METAL - A
				  3, //BAÑOS - A
				  3, //COCINA - A
				  2, //REVESTIMIENTO - A
				  4];//INSTALACIONES COMPLEMENTARIAS - A

	//---------------CANTIDADES DE B ---------------//
	$cantidadesB=[4, //FACHADA - B
				  2, //PAREDE - B
				  2, //ESCALERA - B
				  3, //TECHO - B
				  4, //CIELORRASO - B
				  3, //REVOQUES - B
				  4, //PISOS - B
				  9, //PUERTA DE MADERA - B
				  7, //PUERTA DE METAL - B
				  3, //BAÑOS - B
				  4, //COCINA - B
				  2, //REVESTIMIENTO - B
				  5];//INSTALACIONES COMPLEMENTARIAS - B

	//---------------CANTIDADES DE C ---------------//
	$cantidadesC=[5, //FACHADA - C
				  4, //PARED - C
				  4, //ESCALERA - C
				  5, //TECHO - C
				  4, //CIELORRASO - C
				  2, //REVOQUES - C
				  7, //PISOS - C
				  7, //PUERTA DE MADERA - C
				  5, //PUERTA DE METAL - C
				  3, //BAÑOS - C
				  6, //COCINA - C
				  5, //REVESTIMIENTO - C
				  2];//INSTALACIONES COMPLEMENTARIAS - C

	//---------------CANTIDADES DE D ---------------//
	$cantidadesD=[6, //FACHADA - D
				  6, //PAREDE - D
				  1, //ESCALERA - D
				  3, //TECHO - D
				  3, //CIELORRASO - D
				  3, //REVOQUES - D
				  4, //PISOS - D
				  4, //PUERTA DE MADERA - D
				  3, //PUERTA DE METAL - D
				  3, //BAÑOS - D
				  1, //COCINA - D
				  1, //REVESTIMIENTO - D
				  1];//INSTALACIONES COMPLEMENTARIAS - D

	//---------------CANTIDADES DE E ---------------//
	$cantidadesE=[1, //FACHADA - E
				  3, //PAREDE - E
				  0, //ESCALERA - E
				  1, //TECHO - E
				  2, //CIELORRASO - E
				  2, //REVOQUES - E
				  2, //PISOS - E
				  2, //PUERTA DE MADERA - E
				  1, //PUERTA DE METAL - E
				  3, //BAÑOS - E
				  1, //COCINA - E
				  2, //REVESTIMIENTO - E
				  1];//INSTALACIONES COMPLEMENTARIAS - E
	//--------------COMIENZO CALCULO DEL VALOR DE ESTADOS DE CONSERVACION-------------------//
	//El primer indice hace referencia al elemento siguiendo el orden del formulario pero empezando en 0
	//0 -> fachada, 1 -> pared, 2->escalera, etc
	//el segundo indice es para el estado 0 = bueno, 1 = regular, 2 = malo

	//FACHADA
	$ValEstado[0][0]=2;
	$ValEstado[0][1]=1;
	$ValEstado[0][2]=0;
	//PARED
	$ValEstado[1][0]=22;
	$ValEstado[1][1]=15;
	$ValEstado[1][2]=8;
	//ESCALERA
	$ValEstado[2][0]=2;
	$ValEstado[2][1]=1;
	$ValEstado[2][2]=0;
	//TECHOS
	$ValEstado[3][0]=18;
	$ValEstado[3][1]=14;
	$ValEstado[3][2]=10;
	//CIELORRASO
	$ValEstado[4][0]=3;
	$ValEstado[4][1]=2;
	$ValEstado[4][2]=1;
	//REVOQUES	
	$ValEstado[5][0]=9;
	$ValEstado[5][1]=5;
	$ValEstado[5][2]=1;
	//PISOS
	$ValEstado[6][0]=8;
	$ValEstado[6][1]=6;
	$ValEstado[6][2]=3;
	//PUERTA DE MADERA
	$ValEstado[7][0]=11;
	$ValEstado[7][1]=8;
	$ValEstado[7][2]=4;
	//PUERTA DE METAL
	$ValEstado[8][0]=4;
	$ValEstado[8][1]=3;
	$ValEstado[8][2]=2;
	//BAÑOS
	$ValEstado[9][0]=8;
	$ValEstado[9][1]=6;
	$ValEstado[9][2]=4;
	//COCINA
	$ValEstado[10][0]=2;
	$ValEstado[10][1]=1;
	$ValEstado[10][2]=0;
	//REVESTIMIENTO
	$ValEstado[11][0]=3;
	$ValEstado[11][1]=2;
	$ValEstado[11][2]=1;
	//INSTALACIONES COMPLEMENTARIAS
	$ValEstado[12][0]=8;
	$ValEstado[12][1]=6;
	$ValEstado[12][2]=4;

	//Este array es para los valores de reciclado del rubro 3
	$ValoresReci = array(
		"ParedReci" => 8,
		"TechoReci" => 11,
		"CieloReci" => 3,
		"RevoqReci" => 10,
		"PisosReci" => 8,
		"MadeReci" => 10,
		"BanoReci" => 20,
		"CociReci" => 16,
		"InstReci1" => 14,
	);
?>