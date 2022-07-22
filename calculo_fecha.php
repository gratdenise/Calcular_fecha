

<?php
if($_POST){

date_default_timezone_set("America/Argentina/Corrientes");

$dia_form = $_POST['dia'];
$mes_form = $_POST['mes'];
$anio_form = $_POST['anio'];

$fecha_elegida = date("$anio_form-$mes_form-$dia_form");
	
$fecha_hoy = date("Y-m-d");
	
	if($fecha_elegida<$fecha_hoy) {
		header("Location: index.php?fechaError");
	} else if ($fecha_elegida>$fecha_hoy){
		$calculo = strtotime($fecha_elegida) -strtotime($fecha_hoy);
		$dias = intval($calculo/86400);
		header("Location: index.php?dias=$dias");

	}
}


?>