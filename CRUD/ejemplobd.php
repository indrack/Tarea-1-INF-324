<?php
    $con = mysqli_connect("localhost",'root','');
    mysqli_select_db($con, "academico");
    $res = mysqli_query($con, "SELECT * FROM alumno");
?>
<table border>
<th>CI</th>
<th>Nombre</th>
<th>Paterno</th>
<th colspan=2>Operaciones</th>
<?php
    while($fila = mysqli_fetch_array($res)){
        echo "<tr>
        <td>".$fila["ci"]."</td><td>".$fila["nombre"]."</td><td>".$fila["paterno"]."</td>
        <td><a href='editar.php?ci=".$fila["ci"]."'>Editar</a></td><td><a href='eliminar.php?ci=".$fila["ci"]."'>Eliminar</a></td>
        </tr>";
    }
?>
</table>
<?php
    echo "<a href='editar.php'>N uevo</a>";
?>
