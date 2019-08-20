<?php
	$Formulario=903;
	//El nombre de los elementos tiene que se tal cual el ID de fachada, pared, etc sin la letra y el numero
	$elementos903=["Facha","Pared","Esca","Techo","Cielo","Revoq","Pisos","Made","Meta","Bano","Coci","Reves","Insta"];
	//los numeros del vector rangos son los se encuentran en el rubro 3 'rango de puntaje'
	//van de a pares, los primers dos seria del tipo A, los otros del tipo B y asi
	//y son dos ya que el rango "bueno" seria mayor que el primero
	//el rango regular seria mayor que el segundo pero menor que el primero
	// y el rango malo seria menor que el segundo
	$Rangos903=[79,50,79,50,67,42,65,41,54,37];
	//las categorias son la cantidad de tipos que hay en el formulario
	//y por cada categoria tiene que haber un vector de 3 elementos vacios
	$Categorias903=["A","B","C","D","E"];
	$A903=["","",""];$B903=["","",""];$C903=["","",""];$D903=["","",""];$E903=["","",""];
	//las cantidades son para cada tipo de fachada, pared, escalera, etc la cantidade opciones a elegir que hay en el formulario
	//---------------CANTIDADES DE A ---------------//
	$cantidadesA903=[5, //FACHADA - A
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
	$cantidadesB903=[4, //FACHADA - B
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
	$cantidadesC903=[5, //FACHADA - C
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
	$cantidadesD903=[6, //FACHADA - D
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
	$cantidadesE903=[1, //FACHADA - E
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
	$ValEstado903[0][0]=2;
	$ValEstado903[0][1]=1;
	$ValEstado903[0][2]=0;
	//PARED
	$ValEstado903[1][0]=22;
	$ValEstado903[1][1]=15;
	$ValEstado903[1][2]=8;
	//ESCALERA
	$ValEstado903[2][0]=2;
	$ValEstado903[2][1]=1;
	$ValEstado903[2][2]=0;
	//TECHOS
	$ValEstado903[3][0]=18;
	$ValEstado903[3][1]=14;
	$ValEstado903[3][2]=10;
	//CIELORRASO
	$ValEstado903[4][0]=3;
	$ValEstado903[4][1]=2;
	$ValEstado903[4][2]=1;
	//REVOQUES
	$ValEstado903[5][0]=9;
	$ValEstado903[5][1]=5;
	$ValEstado903[5][2]=1;
	//PISOS
	$ValEstado903[6][0]=8;
	$ValEstado903[6][1]=6;
	$ValEstado903[6][2]=3;
	//PUERTA DE MADERA
	$ValEstado903[7][0]=11;
	$ValEstado903[7][1]=8;
	$ValEstado903[7][2]=4;
	//PUERTA DE METAL
	$ValEstado903[8][0]=4;
	$ValEstado903[8][1]=3;
	$ValEstado903[8][2]=2;
	//BAÑOS
	$ValEstado903[9][0]=8;
	$ValEstado903[9][1]=6;
	$ValEstado903[9][2]=4;
	//COCINA
	$ValEstado903[10][0]=2;
	$ValEstado903[10][1]=1;
	$ValEstado903[10][2]=0;
	//REVESTIMIENTO
	$ValEstado903[11][0]=3;
	$ValEstado903[11][1]=2;
	$ValEstado903[11][2]=1;
	//INSTALACIONES COMPLEMENTARIAS
	$ValEstado903[12][0]=8;
	$ValEstado903[12][1]=6;
	$ValEstado903[12][2]=4;

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
<?php
	$Formulario=904;
	//El nombre de los elementos tiene que se tal cual el ID de fachada, pared, etc sin la letra y el numero
	$elementos904=["Facha","Pared","Esca","Techo","Cielo","Revoq","Pisos","Made","Meta","Bano","Coci","Reves","Insta"];
	//los numeros del vector rangos son los se encuentran en el rubro 3 'rango de puntaje'
	//van de a pares, los primers dos seria del tipo A, los otros del tipo B y asi
	//y son dos ya que el rango "bueno" seria mayor que el primero
	//el rango regular seria mayor que el segundo pero menor que el primero
	// y el rango malo seria menor que el segundo
	$Rangos904=[74,46,74,46,66,40,60,38];
	//las categorias son la cantidad de tipos que hay en el formulario
	//y por cada categoria tiene que haber un vector de 3 elementos vacios
	$Categorias904=["A","B","C","D"];
	$A904=["","",""];$B904=["","",""];$C904=["","",""];$D904=["","",""];
	//las cantidades son para cada tipo de fachada, pared, escalera, etc la cantidade opciones a elegir que hay en el formulario
	//---------------CANTIDADES DE A ---------------//
	$cantidadesA904=[3, //FACHADA - A
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
	$cantidadesB904=[4, //FACHADA - B
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
	$cantidadesC904=[5, //FACHADA - C
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
	$cantidadesD904=[2, //FACHADA - D
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
	$ValEstado904[0][0]=6;
	$ValEstado904[0][1]=4;
	$ValEstado904[0][2]=2;
	//PARED
	$ValEstado904[1][0]=25;
	$ValEstado904[1][1]=16;
	$ValEstado904[1][2]=9;
	//ESCALERA
	$ValEstado904[2][0]=3;
	$ValEstado904[2][1]=2;
	$ValEstado904[2][2]=1;
	//TECHOS
	$ValEstado904[3][0]=18;
	$ValEstado904[3][1]=14;
	$ValEstado904[3][2]=10;
	//CIELORRASO
	$ValEstado904[4][0]=7;
	$ValEstado904[4][1]=4;
	$ValEstado904[4][2]=2;
	//REVOQUES
	$ValEstado904[5][0]=7;
	$ValEstado904[5][1]=4;
	$ValEstado904[5][2]=1;
	//PISOS
	$ValEstado904[6][0]=12;
	$ValEstado904[6][1]=8;
	$ValEstado904[6][2]=4;
	//PUERTA DE MADERA
	$ValEstado904[7][0]=3;
	$ValEstado904[7][1]=2;
	$ValEstado904[7][2]=1;
	//PUERTA DE METAL
	$ValEstado904[8][0]=8;
	$ValEstado904[8][1]=5;
	$ValEstado904[8][2]=3;
	//BAÑOS
	$ValEstado904[9][0]=3;
	$ValEstado904[9][1]=2;
	$ValEstado904[9][2]=1;
	//COCINA
	$ValEstado904[10][0]=2;
	$ValEstado904[10][1]=1;
	$ValEstado904[10][2]=0;
	//REVESTIMIENTO
	$ValEstado904[11][0]=4;
	$ValEstado904[11][1]=2;
	$ValEstado904[11][2]=1;
	//INSTALACIONES COMPLEMENTARIAS
	$ValEstado904[12][0]=2;
	$ValEstado904[12][1]=1;
	$ValEstado904[12][2]=0;

	//Este array es para los valores de reciclado del rubro 3
	$ValoresReci = array(
		"ParedReci" => 16,
		"TechoReci" => 12,
		"RevesReci" => 14,
		"PisosReci" => 8,
		"BanoReci" => 19,
		"CociReci" => 17,
		"InstaReci" => 14,
	);
?>

<?php
	$Formulario=905;
	//El nombre de los elementos tiene que se tal cual el ID de fachada, pared, etc sin la letra y el numero
	$elementos905=["Facha","Pared","Esque","Arma","Techo","Cielo","Revoq","Pisos","Made","Meta","Bano","Reves","Insta"];
	//los numeros del vector rangos son los se encuentran en el rubro 3 'rango de puntaje'
	//van de a pares, los primers dos seria del tipo A, los otros del tipo B y asi
	//y son dos ya que el rango "bueno" seria mayor que el primero
	//el rango regular seria mayor que el segundo pero menor que el primero
	// y el rango malo seria menor que el segundo
	$Rangos905=[75,42,73,42,67,42,57,34];
	//las categorias son la cantidad de tipos que hay en el formulario
	//y por cada categoria tiene que haber un vector de 3 elementos vacios
	$Categorias905=["B","C","D","E"];
	$B905=["","",""];$C905=["","",""];$D905=["","",""];$E905=["","",""];
	//las cantidades son para cada tipo de fachada, pared, escalera, etc la cantidade opciones a elegir que hay en el formulario
	//---------------CANTIDADES DE B ---------------//
	$cantidadesB905=[3, //FACHADA - B
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
	$cantidadesC905=[4, //FACHADA - C
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
	$cantidadesD905=[4, //FACHADA - D
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
	$cantidadesE905=[3, //FACHADA - E
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
	$ValEstado905[0][0]=3;
	$ValEstado905[0][1]=2;
	$ValEstado905[0][2]=1;
	//PARED
	$ValEstado905[1][0]=22;
	$ValEstado905[1][1]=15;
	$ValEstado905[1][2]=10;
	//ESQUELETO
	$ValEstado905[2][0]=9;
	$ValEstado905[2][1]=4;
	$ValEstado905[2][2]=2;
	//ARMADURA
	$ValEstado905[3][0]=22;
	$ValEstado905[3][1]=15;
	$ValEstado905[3][2]=7;
	//TECHOS
	$ValEstado905[4][0]=10;
	$ValEstado905[4][1]=6;
	$ValEstado905[4][2]=3;
	//CIELORRASO
	$ValEstado905[5][0]=2;
	$ValEstado905[5][1]=1;
	$ValEstado905[5][2]=0;
	//REVOQUES
	$ValEstado905[6][0]=5;
	$ValEstado905[6][1]=3;
	$ValEstado905[6][2]=1;
	//PISOS
	$ValEstado905[7][0]=7;
	$ValEstado905[7][1]=5;
	$ValEstado905[7][2]=3;
	//PUERTA DE MADERA
	$ValEstado905[8][0]=4;
	$ValEstado905[8][1]=2;
	$ValEstado905[8][2]=1;
	//PUERTA DE METAL
	$ValEstado905[9][0]=5;
	$ValEstado905[9][1]=3;
	$ValEstado905[9][2]=1;
	//BAÑOS
	$ValEstado905[10][0]=2;
	$ValEstado905[10][1]=1;
	$ValEstado905[10][2]=0;
	//REVESTIMIENTO
	$ValEstado905[11][0]=2;
	$ValEstado905[11][1]=1;
	$ValEstado905[11][2]=0;
	//INSTALACIONES COMPLEMENTARIAS
	$ValEstado905[12][0]=7;
	$ValEstado905[12][1]=5;
	$ValEstado905[12][2]=3;

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
<?php
	$Formulario=906;
	//El nombre de los elementos tiene que se tal cual el ID de fachada, pared, etc sin la letra y el numero
	$elementos906=["Facha","Pared","Esca","Esque","Arma","Techo","Cielo","Revoq","Pisos","Made","Meta","Bano","Reves","Insta"];
	//los numeros del vector rangos son los se encuentran en el rubro 3 'rango de puntaje'
	//van de a pares, los primers dos seria del tipo A, los otros del tipo B y asi
	//y son dos ya que el rango "bueno" seria mayor que el primero
	//el rango regular seria mayor que el segundo pero menor que el primero
	// y el rango malo seria menor que el segundo
	$Rangos906=[74,41,63,35,59,32];
	//las categorias son la cantidad de tipos que hay en el formulario
	//y por cada categoria tiene que haber un vector de 3 elementos vacios
	$Categorias906=["A","B","C"];
	$A906=["","",""];$B906=["","",""];$C906=["","",""];
	//las cantidades son para cada tipo de fachada, pared, escalera, etc la cantidade opciones a elegir que hay en el formulario
	//---------------CANTIDADES DE A ---------------//
	$cantidadesA906=[4, //FACHADA - A
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
	$cantidadesB906=[5, //FACHADA - B
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
	$cantidadesC906=[4, //FACHADA - C
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
	$ValEstado906[0][0]=2;
	$ValEstado906[0][1]=1;
	$ValEstado906[0][2]=0;
	//PARED
	$ValEstado906[1][0]=27;
	$ValEstado906[1][1]=17;
	$ValEstado906[1][2]=10;
	//ESCALERA
	$ValEstado906[2][0]=2;
	$ValEstado906[2][1]=1;
	$ValEstado906[2][2]=0;
	//ESQUELETO
	$ValEstado906[3][0]=10;
	$ValEstado906[3][1]=4;
	$ValEstado906[3][2]=2;
	//ARMADURA
	$ValEstado906[4][0]=15;
	$ValEstado906[4][1]=11;
	$ValEstado906[4][2]=7;
	//TECHOS
	$ValEstado906[5][0]=7;
	$ValEstado906[5][1]=4;
	$ValEstado906[5][2]=1;
	//CIELORRASO
	$ValEstado906[6][0]=6;
	$ValEstado906[6][1]=4;
	$ValEstado906[6][2]=2;
	//REVOQUES
	$ValEstado906[7][0]=7;
	$ValEstado906[7][1]=4;
	$ValEstado906[7][2]=1;
	//PISOS
	$ValEstado906[8][0]=7;
	$ValEstado906[8][1]=4;
	$ValEstado906[8][2]=1;
	//PUERTA DE MADERA
	$ValEstado906[9][0]=5;
	$ValEstado906[9][1]=3;
	$ValEstado906[9][2]=1;
	//PUERTA DE METAL
	$ValEstado906[10][0]=3;
	$ValEstado906[10][1]=2;
	$ValEstado906[10][2]=1;
	//BAÑOS
	$ValEstado906[11][0]=2;
	$ValEstado906[11][1]=1;
	$ValEstado906[11][2]=0;
	//REVESTIMIENTO
	$ValEstado906[12][0]=3;
	$ValEstado906[12][1]=2;
	$ValEstado906[12][2]=1;
	//INSTALACIONES COMPLEMENTARIAS
	$ValEstado906[13][0]=4;
	$ValEstado906[13][1]=3;
	$ValEstado906[13][2]=2;

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
<?php
	$Formulario=916;
	//El nombre de los elementos tiene que se tal cual el ID de fachada, pared, etc sin la letra y el numero
	$elementos916=["Pared","Esque","Arma","Techo","Revoq"];
	//los numeros del vector rangos son los se encuentran en el rubro 3 'rango de puntaje'
	//van de a pares, los primers dos seria del tipo A, los otros del tipo B y asi
	//y son dos ya que el rango "bueno" seria mayor que el primero
	//el rango regular seria mayor que el segundo pero menor que el primero
	// y el rango malo seria menor que el segundo
	$Rangos916=[74,41,63,35,59,32];
	//las categorias son la cantidad de tipos que hay en el formulario
	//y por cada categoria tiene que haber un vector de 3 elementos vacios
	$Categorias916=["A","B","C"];
	$A916=["","",""];$B916=["","",""];$C916=["","",""];
	//las cantidades son para cada tipo de fachada, pared, escalera, etc la cantidade opciones a elegir que hay en el formulario
	//---------------CANTIDADES DE A ---------------//
	$cantidadesA916=[4, //PARED - A
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
	$cantidadesB916=[7, //PARED - B
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
	$cantidadesC916=[3, //PARED - C
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
	$ValEstado916[0][0]=12;
	$ValEstado916[0][1]=8;
	$ValEstado916[0][2]=4;
	//ESQUELETO
	$ValEstado916[1][0]=5;
	$ValEstado916[1][1]=4;
	$ValEstado916[1][2]=1;
	//ARMADURA
	$ValEstado916[2][0]=10;
	$ValEstado916[2][1]=7;
	$ValEstado916[2][2]=3;
	//TECHOS
	$ValEstado916[3][0]=33;
	$ValEstado916[3][1]=23;
	$ValEstado916[3][2]=9;
	//REVOQUES
	$ValEstado916[4][0]=5;
	$ValEstado916[4][1]=4;
	$ValEstado916[4][2]=1;
	//PISOS
	$ValEstado916[5][0]=15;
	$ValEstado916[5][1]=10;
	$ValEstado916[5][2]=5;
	//PUERTA DE MADERA
	$ValEstado916[6][0]=4;
	$ValEstado916[6][1]=3;
	$ValEstado916[6][2]=1;
	//PUERTA DE METAL
	$ValEstado916[7][0]=5;
	$ValEstado916[7][1]=4;
	$ValEstado916[7][2]=2;
	//GAS
	$ValEstado916[8][0]=5;
	$ValEstado916[8][1]=4;
	$ValEstado916[8][2]=2;
	//LUZ
	$ValEstado916[9][0]=3;
	$ValEstado916[9][1]=2;
	$ValEstado916[9][2]=1;
	//AGUA
	$ValEstado916[10][0]=3;
	$ValEstado916[10][1]=2;
	$ValEstado916[10][2]=1;

	//Este array es para los valores de reciclado del rubro 3
	$ValoresReci = array(
		"ParedReci" => 12,
		"EsqueReci" => 5,
		"ArmaReci" => 10,
		"RevoqsReci" => 33,
		"PisosReci" => 5,
		"BanoReci" => 15,
		"InstaReci" => 4,
		"InstaReci" => 5,
		"InstaReci" => 5,
		"InstaReci" => 3,
		"InstaReci" => 3,
	);
?>
