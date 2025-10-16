<?php
// Incluimos la conexion en la bases de datos
include 'conexion.php';

$baset = $_POST['baset'];
$alturat = $_POST['alturat'];
$ladoC = $_POST['ladoC'];
$radioC = $_POST['radioC'];

echo "la base del triangulo es: ", $baset;
echo "la altura del triangulo es: ", $alturat;

$areaT = ($baset * $alturat) / 2;
echo "El area del triangulo es: ", $areaT;

$areaC = ($ladoC * $ladoC);
echo "El area del cuadrado es: ", $areaC;

$areaCi = (3.14159265359 * $radioC^2);
echo "El area del circulo es: ", $areaCi;

$sql = "INSERT INTO datosAreas (baset, alturat, areaT, ladoC, AreaCua, radioC, AreaCir)
VALUES ('$baset', '$alturat','$areaT','$ladoC','$ladoC','$radioC','$areaCi')";

if (mysqli_query($conn ,$sql)) {
  echo "<script>
              alert('Registro creado correctamente ✅');
              window.location.href = '../index.html'; // <-- Redirige al menú de listar triángulos
            </script>";
} else {
  echo "<script>
              alert('❌No se pudo crear el registro: " . mysqli_error($conn) . "');
              window.location.href = '../index.html'; // <-- También redirige en caso de error
            </script>";
}

mysqli_close($conn);

?>