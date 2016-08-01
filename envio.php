 <?php
include "conexion2.php";

$nuc=$_POST["numero_de_control"]; 
$nom=$_POST["nombre"]; 
$app=$_POST["apellidos"]; 
$ing=$_POST["ingenieria"]; 
$sem=$_POST["semestre"]; 

$sql="INSERT INTO datos_alumno (numero_de_control, nombre,apellidos,ingenieria, semestre)"
        . "VALUES('$nuc','$nom','$app','$ing','$sem')";
$insertar=mysql_query($sql,$conexion);
if($insertar){
echo "numero_de_control: ".$nuc."<br>";
echo "nombre: ".$nom."<br>";
echo "apellidos: ".$app."<br>";
echo "ingenieria: ".$ing."<br>";
echo "semestre: ".$sem."<br>";
echo "Datos guardados correctamente";
}else{
echo "error no se pudieron guardar los datos";
}
mysql_close($conexion);

?>
 