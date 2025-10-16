<?php
include 'conexion.php';

$sql = "SELECT * FROM areasfiguras";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "Base triángulo: " . $row["baset"]. "- Altura Triangulo: " . $row["alturat"]. "El area del triangulo es: " . $row["areaT"];
        echo "Lado Cuadrado: " . $row["ladoC"]. "- Area cuadrado: " . $row["areaC"];
        echo "Radio Circulo: " . $row["radioC"]. "- Area circulo: " . $row["areaCir"];
    }
}

?>