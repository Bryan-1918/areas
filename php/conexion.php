<?php
$localhost = "localhost";
$loginDB = "root";
$passwordDB = "";
$nombreDB = "areas";

$conn = mysqli_connect($localhost, $loginDB, $passwordDB, $nombreDB);
if(!$conn){
    die("Falla en la conexión: " . mysqli_connect_error());
}
echo "Conectado correctamente"
?>