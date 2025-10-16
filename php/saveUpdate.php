<?php
include 'conexion.php';

$id = $_GET["id"];
$baset = $_GET["baset"];
$alturat = $_GET["alturat"];

$areaT = ($baset * $alturat) / 2;

$sql = "UPDATE datosareas 
        SET baset = '$baset', alturat = '$alturat', areaT = '$areaT'
        WHERE id = '$id'";

if (mysqli_query($conn, $sql)) {
    echo "<script>
            alert('Registro actualizado correctamente ✅');
            window.location.href = './listarTri.php';
        </script>";
} else {
   echo "<script>
              alert('❌ Error eliminando el registro: " . mysqli_error($conn) . "');
              window.location.href = './listarTri.php';
        </script>";
}

mysqli_close($conn);
?>
