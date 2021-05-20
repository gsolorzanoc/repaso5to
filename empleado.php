<!DOCTYPE html>
<html>
<head>
	<title>Empleado</title>
</head>
<body>
<?php

include "encabezado.php";

?>
<center>

<form action="manejadoremp.php" method="post">
	<font face="Arial" size="6">FORMULARIO DE PAGO DE PLANILLA</font>
	<br>
	<input type="text" name="nom" placeholder="Ingrese nombre">
	<br>
	<select name="puesto">
		<optgroup label="administrativo">
			<option value="1">Supervisor</option>
			<option value="2">Cajero</option>
		</optgroup>
		<optgroup label="operacional">
			<option value="3">Limpieza</option>
			<option value="4">Vendedor</option>
		</optgroup>
	</select>
	<br>
	<input type="number" name="sueldo" placeholder="Ingrese sueldo">
	<br>
	<input type="number" name="descuentos" placeholder="Ingrese descuentos">
	<br>
	<input type="number" name="horasext" placeholder="Ingrese horas extra">
	<br>
	<input type="number" name="anticipos" placeholder="Ingrese anticipos">
	<br><br>
	<input type="submit" name="calcular" value="CALCULAR" class="btn btn-primary">
</form>

</center>
</body>
</html>