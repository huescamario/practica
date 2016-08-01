<?php 
$usuario="root";
$servidor="localhost";
$BD="calificaciones";
$password="";

$conexion=mysql_connect($servidor,$usuario,$password)or die("Error en la conecion".mysql_erorr());
mysql_select_db($BD,$conexion);
?>
