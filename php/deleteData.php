<?php
include 'conexion.php';
$id = $_GET["id"];

$check = "SELECT * FROM datosareas WHERE id = '$id'";
$result = mysqli_query($conn, $check);

if(mysqli_num_rows($result) > 0) {
    $sql = "DELETE FROM datosareas WHERE id = '$id'";

    if(mysqli_query($conn, $sql)) {
        echo "<script>
              alert('Registro eliminado correctamente ✅');
              window.location.href = './listarTri.php'; // <-- Redirige al menú de listar triángulos
            </script>";

    }else {
    echo "<script>
              alert('❌ Error eliminando el registro: " . mysqli_error($conn) . "');
              window.location.href = './listarTri.php'; // <-- También redirige en caso de error
            </script>";
    }
}else {
    echo "El registro no existe en la base de datos";
}

mysqli_close($conn);

?>