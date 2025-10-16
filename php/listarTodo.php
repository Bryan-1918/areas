<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado Completo de Registros</title>
</head>
<body>

    <h2>Listado Completo de las areas de las figuras</h2>
    
    <?php
    // Consulta para seleccionar todos los datos de la tabla
    $sql = "SELECT id, baset, alturat, areaT, ladoC, AreaCua, radioC, AreaCir, created_at FROM datosAreas";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Base T.</th><th>Altura T.</th><th>Área T.</th><th>Lado C.</th><th>Área C.</th><th>Radio Cir.</th><th>Área Cir.</th><th>Fecha</th></tr>";
        
        // Imprimir los datos de cada fila
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["baset"] . "</td>";
            echo "<td>" . $row["alturat"] . "</td>";
            echo "<td>" . $row["areaT"] . "</td>";
            echo "<td>" . $row["ladoC"] . "</td>";
            echo "<td>" . $row["AreaCua"] . "</td>";
            echo "<td>" . $row["radioC"] . "</td>";
            echo "<td>" . $row["AreaCir"] . "</td>";
            echo "<td>" . $row["created_at"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No se encontraron resultados.</p>";
    }
    
    mysqli_close($conn);
    ?>

<a href="../index.html">Volver</a>
</body>
</html>