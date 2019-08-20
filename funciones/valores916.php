<?php
	$Formulario=916;
	//El nombre de los elementos tiene que se tal cual el ID de fachada, pared, etc sin la letra y el numero
	$elementos=["Pared","Esque","Arma","Techo","Revoq","Pisos","Made","Meta","Gas","Luz","Agua"];
	//los numeros del vector rangos son los se encuentran en el rubro 3 'rango de puntaje'
	//van de a pares, los primers dos seria del tipo A, los otros del tipo B y asi
	//y son dos ya que el rango "bueno" seria mayor que el primero
	//el rango regular seria mayor que el segundo pero menor que el primero
	// y el rango malo seria menor que el segundo
	$Rangos=[75,49,74,49,48,34];
	//las categorias son la cantidad de tipos que hay en el formulario
	//y por cada categoria tiene que haber un vector de 3 elementos vacios
	$Categorias=["A","B","C"];
	$A=["","",""];$B=["","",""];$C=["","",""];
	//las cantidades son para cada tipo de fachada, pared, escalera, etc la cantidade opciones a elegir que hay en el formulario
	//---------------CANTIDADES DE A ---------------//
	$cantidadesA=[4, //PARED - A
				  4, //ESQUELETO - A
				  4, //ARMADURA - A
				  4, //TECHOS - A
				  2, //REVOQUES- A
				  4, //PISOS - A
				  2, //PUERTA DE MADERA - A
				  1, //PUERTA DE METAL - A
				  4, //GAS - A
				  3, //LUZ - A
				  5]; //AGUA - A

	//---------------CANTIDADES DE B ---------------//
	$cantidadesB=[7, //PARED - B
				  5, //ESQUELETO - B
				  5, //ARMADURA - B
				  5, //TECHOS - B
				  2, //REVOQUES- B
				  3, //PISOS - B
				  1, //PUERTA DE MADERA - B
				  1, //PUERTA DE METAL - B
				  3, //GAS - B
				  3, //LUZ - B
				  3];//AGUA - B

	//---------------CANTIDADES DE C ---------------//
	$cantidadesC=[3, //PARED - C
				  3, //ESQUELETO - C
				  3, //ARMADURA - C
				  3, //TECHOS - C
				  1, //REVOQUES- C
				  1, //PISOS - C
				  1, //PUERTA DE MADERA - C
				  1, //PUERTA DE METAL - C
				  1, //GAS - C
				  1, //LUZ - C
				  1]; //AGUA - C


	//--------------COMIENZO CALCULO DEL VALOR DE ESTADOS DE CONSERVACION-------------------//
	//El primer indice hace referencia al elemento siguiendo el orden del formulario pero empezando en 0
	//0 -> fachada, 1 -> pared, 2->escalera, etc
	//el segundo indice es para el estado 0 = bueno, 1 = regular, 2 = malo

	//PARED
	$ValEstado[0][0]=12;
	$ValEstado[0][1]=8;
	$ValEstado[0][2]=4;
	//ESQUELETO
	$ValEstado[1][0]=5;
	$ValEstado[1][1]=4;
	$ValEstado[1][2]=1;
	//ARMADURA
	$ValEstado[2][0]=10;
	$ValEstado[2][1]=7;
	$ValEstado[2][2]=3;
	//TECHOS
	$ValEstado[3][0]=33;
	$ValEstado[3][1]=23;
	$ValEstado[3][2]=9;
	//REVOQUES
	$ValEstado[4][0]=5;
	$ValEstado[4][1]=4;
	$ValEstado[4][2]=1;
	//PISOS
	$ValEstado[5][0]=15;
	$ValEstado[5][1]=10;
	$ValEstado[5][2]=5;
	//PUERTA DE MADERA
	$ValEstado[6][0]=4;
	$ValEstado[6][1]=3;
	$ValEstado[6][2]=1;
	//PUERTA DE METAL
	$ValEstado[7][0]=5;
	$ValEstado[7][1]=4;
	$ValEstado[7][2]=2;
	//GAS
	$ValEstado[8][0]=5;
	$ValEstado[8][1]=4;
	$ValEstado[8][2]=2;
	//LUZ
	$ValEstado[9][0]=3;
	$ValEstado[9][1]=2;
	$ValEstado[9][2]=1;
	//AGUA
	$ValEstado[10][0]=3;
	$ValEstado[10][1]=2;
	$ValEstado[10][2]=1;

	//Este array es para los valores de reciclado del rubro 3
	$ValoresReci = array(
		"ParedReci" => 12,
		"EsqueReci" => 5,
		"ArmaReci" => 10,
		"TechoReci" => 33,
		"RevoqReci" => 5,
		"PisosReci" => 15,
		"MadeReci" => 4,
		"MetaReci" => 5,
		"GasReci" => 5,
		"LuzReci" => 3,
		"AguaReci" => 3,
	);
?>
