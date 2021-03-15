<?php
    include "conexion.inc.php";
    $CI=$_GET["ci"];
    $res = mysqli_query($con, "DELETE FROM alumno WHERE ci='".$CI."'");
    echo "Registro Eliminado.";
?>