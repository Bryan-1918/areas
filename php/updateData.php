<?php
include 'conexion.php';

// Verificar si se recibió el ID del registro
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Consultar el registro a editar
    $sql = "SELECT * FROM datosareas WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "No se encontró el registro.";
        exit;
    }
} else {
    echo "No se recibió el ID.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Triángulo</title>
</head>
<body>
    <h3>Actualizar datos del triángulo</h3>

    <form action="saveUpdate.php">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <label>Base:</label>
        <input type="text" name="baset" value="<?php echo $row['baset']; ?>" required><br><br>

        <label>Altura:</label>
        <input type="text" name="alturat" value="<?php echo $row['alturat']; ?>" required><br><br>

        <input type="submit" value="Actualizar">
    </form>
</body>
</html>
