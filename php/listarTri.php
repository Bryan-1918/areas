<?php
// Incluimos la conexión a la base de datos
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Triángulos</title>
</head>
<body>
    <h2>Listado de las areas de los triangulos</h2>
    <?php
    // Consultamos solo los datos necesarios del triángulo
    $sql = "SELECT id, baset, alturat, areaT, created_at FROM datosareas";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr>
            <th>ID</th>
            <th>Base Triángulo</th>
            <th>Altura Triángulo</th>
            <th>Área Triángulo</th>
            <th>Fecha</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>";

        // Imprimir los datos de cada fila
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["baset"] . "</td>";
            echo "<td>" . $row["alturat"] . "</td>";
            echo "<td>" . $row["areaT"] . "</td>";
            echo "<td>" . $row["created_at"] . "</td>";
            echo "<td>
                    <a href='updateData.php?id=" . $row['id'] . "&baset=" . $row['baset'] . "&alturat=" . $row['alturat'] . "'>
                        <button>Editar</button>
                    </a>
                </td>";
            echo "<td>
                    <a href='deleteData.php?id=" . $row["id"] . "' onclick=\"return confirm('¿Seguro que deseas eliminar este registro?');\">
                        <button>Eliminar</button>
                    </a>
                    </td>";

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