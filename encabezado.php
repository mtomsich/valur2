<?php
	include("sql/conexion.php");
?>
<head>
	<meta charset="utf-8">
	<title>VALUR NatBra</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<link href="css/bootstrap334.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">

	<link rel="icon" type="image/png" href="img/favicon2.png" />

	<link href="js/fontsans.css"rel="stylesheet">
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

	<link href="css/pages/dashboard.css" rel="stylesheet">
	<link href="css/pages/reports.css" rel="stylesheet">

	<!-- link href="css/jquery-ui.min.css" rel="stylesheet" -->

	<link href="css/bootstrap-select.css" rel="stylesheet">
	<link href="css/bootstrap-select.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.css">


<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jqueryhabilitar.js"></script>
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<!-- script src="js/jquery-ui.min.js"></script -->
<script src="js/bootstrap.js"></script>
<script src="js/base.js"></script>
<script src="js/bootstrap-select.js"></script>
<script src="js/datatables.js"></script>
<script src="js/dataTables.bootstrap.js"></script>

	<script type="text/javascript">

        $(document).ready(function () {
        	$('.AllDataTables').DataTable({
		    	language: {
		    		"sProcessing":     "Procesando...",
				    "sLengthMenu":     "Mostrar _MENU_ registros",
				    "sZeroRecords":    "No se encontraron resultados",
				    "sEmptyTable":     "Ningún dato disponible en esta tabla",
				    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
				    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
				    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
				    "sInfoPostFix":    "",
				    "sSearch":         "Buscar:",
				    "sUrl":            "",
				    "sInfoThousands":  ",",
				    "sLoadingRecords": "Cargando...",
				    "oPaginate": {
				        "sFirst":    "Primero",
				        "sLast":     "Último",
				        "sNext":     "Siguiente",
				        "sPrevious": "Anterior"
				    },
				    "oAria": {
				        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
				        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
				    }
		    	}
		    });
            (function ($) {

                $('#filtrar').keyup(function () {

                    var rex = new RegExp($(this).val(), 'i');
                    $('.buscar tr').hide();
                    $('.buscar tr').filter(function () {
                        return rex.test($(this).text());
					}).show();

				})

			}(jQuery));

			var miArray=new Array();
			var i=0;

			$(':checkbox').click(function(){
				miArray[i]=$(this).val();

			$('#total').append(miArray[i]);
			i++;
			});




			});
			</script>



<script type="text/javascript">
function mostrar(id) {
	if (id == "UR") {
		$("#UR").show();
		$("#RU").hide();
		$("#PH").hide();
		$("#DE").hide();
	}
	if (id == "RU") {
		$("#UR").hide();
		$("#RU").show();
		$("#PH").hide();
		$("#DE").hide();
	}
	if (id == "PH") {
		$("#UR").hide();
		$("#RU").hide();
		$("#PH").show();
		$("#DE").hide();
	}
	if (id == "DE") {
		$("#UR").hide();
		$("#RU").hide();
		$("#PH").hide();
		$("#DE").show();
	}
}



</script>



			<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
			<!--[if lt IE 9]>
			<script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
</head>
