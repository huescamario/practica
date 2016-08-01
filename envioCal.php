 <?php
 
 
include "conexion2.php";

$nuc=$_POST["numero_de_control"]; 
$pa1=$_POST["parcial1"]; 
$pa2=$_POST["parcial2"]; 
$pa3=$_POST["parcial3"]; 
$pa4=$_POST["parcial4"]; 
$pro=$_POST["promedio"]; 

$sql="INSERT INTO calificaciones (numero_de_control, parcial1,parcial2,parcial3, parcial4,promedio)"
        . "VALUES('$nuc','$pa1','$pa2','$pa3','$pa4','$pro')";
$insertar=mysql_query($sql,$conexion);
if($insertar){
echo "numero_de_control: ".$nuc."<br>";
echo "parcial1: ".$pa1."<br>";
echo "parcial2: ".$pa2."<br>";
echo "parcial3: ".$pa3."<br>";
echo "parcial4: ".$pa4."<br>";
echo "promedio: ".$pro."<br>";
echo "Datos guardados correctamente";
}else{
echo "error no se pudieron guardar los datos";
}

mysql_close($conexion);
?>
 