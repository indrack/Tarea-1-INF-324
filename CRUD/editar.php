<?php
    include "conexion.inc.php";
	session_start();
    $ci = "";
    $nombre = "";
    $paterno = "";
	$_SESSION["edicion"] = "NO";
    if(isset($_GET["ci"]))
    {
        $CI=$_GET["ci"];
        $res = mysqli_query($con, "SELECT * FROM alumno WHERE ci='".$CI."'");
        $fila = mysqli_fetch_array($res);
        $ci = $fila['ci'];
        $nombre = $fila['nombre'];
        $paterno = $fila['paterno'];
		$_SESSION["edicion"] = "SI";
    }
?>
<form action="guardar.php" method="GET">
    <label>CI:</label>
    <input type="text" name="ci" value="<?php echo $ci?>">
    <br>
    <label>Nombre:</label>
    <input type="text" name="nombre" value="<?php echo $nombre?>">
    <br>
    <label>Paterno:</label>
    <input type="text" name="paterno" value="<?php echo $paterno?>">
    <br>
    <input type="submit" name="Aceptar" value="Aceptar">
    <input type="submit" name="Cancelar" value="Cancelar">
</form>