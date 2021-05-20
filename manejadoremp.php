<?php

$n=$_POST["nom"];
$p=$_POST["puesto"];
$s=$_POST["sueldo"];
$d = $_POST["descuentos"];
$h = $_POST["horasext"];
$a = $_POST["anticipos"];

$tothrs = $s/30/8*1.5*$h;
$sd = $s+$tothrs;
$igss = $s*0.0483;
$td = $d+$a+$igss;
$liq = $sd-$td+250;

switch ($p) {
	case '1':
		$pue= "supervisor";
		break;
	case '2':
	 	$pue= "cajero";
	 	break;
	 case '3':
	 	$pue= "limpieza";
	 	break;
	 case '4':
	 	$pue="vendedor";
	 	break;
}

echo "informacion calculada<br>";
echo "nombre: ".$n."<br>";
echo "Puesto: ".$pue."<br>";
echo "Sueldo base: ".$s."<br>";
echo "Horas Extra: ".$h."<br>";
echo "Total Hrs. Extra: ".$tothrs."<br>";
echo "Sueldo Devengado: ".$sd."<br>";
echo "IGSS: ".$igss."<br>";
echo "descuentos".$d."<br>";
echo "anticipos".$a."<br>";
echo "Total Descuentos: ".$td."<br>";
echo "Liquido a recibir: ".$liq."<br>";




?>