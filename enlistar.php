<?php
include 'conexion_db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $precio_uni = $_POST['precio_uni'];
    $precio_may = $_POST['precio_may'];
    $sql = "INSERT INTO articulos (nombre,precio_uni,precio_may) VALUES ('$nombre','$precio_uni','$precio_may')";
    $conex->query($sql);
}

header("Location: index.html");
?>