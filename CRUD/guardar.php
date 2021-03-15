<?php
include "conexion.inc.php";
session_start();
$ci=$_GET["ci"];
$nombre=$_GET["nombre"];
$paterno=$_GET["paterno"];
//$edicion=$_GET["edicion"];
$editar = $_SESSION["edicion"];
echo "sesion ".$_SESSION["edicion"];
if (isset($_GET["Cancelar"])) 
{
	//header("Location: ejemplobd.php");
}
if ($editar=="SI")
{
$sql="update alumno set nombre='".$nombre."',";
$sql.="paterno='$paterno' where ci='$ci'";
}
else
{
$sql="insert into alumno(ci,nombre,paterno)";
$sql.="values('$ci','$nombre','$paterno')";	
}	
mysqli_query($con, $sql);
?>
<a href="ejemplobd.php">Retornar</a>