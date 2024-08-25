<?php
include 'conexion_db.php';

$id = $_GET['id'];
$sql = "DELETE FROM articulos WHERE id=$id";
$conex->query($sql);

return header("Location: consultas.php");
header("Location: index.html");	
?>