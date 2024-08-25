<link rel="stylesheet" href="index.css">
    <style type="text/css">
        body {
            background-image: url('pngtree-photo-of-shelf-commodity-supermarket-image_1013437.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
<?php
include 'conexion_db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM articulos WHERE id = $id";
$result = $conex->query($sql);
$row = $result->fetch_assoc();
?>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
	<h2>Editar</h2><br><br>
		<label for="nombre">Articulo</label>
		<input type="text" id="nombre" name="nombre" value="<?php echo $row['nombre']; ?>"><br>
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<input type="numbre" id="precio_uni" name="precio_uni" value="<?php echo $row['precio_uni']; ?>"><br>
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<input type="numbre" id="precio_may" name="precio_may" value="<?php echo $row['precio_may']; ?>"><br>
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<input type="submit" name="guardar" value="Guardar"><br><br>
		<a href="index.html">Pag.Principal</a><br>
		<a href="consultas.php">Ver Lista</a>
</form>

<?php
if (isset($_POST['guardar'])) {
	$precio_uni=$_POST['precio_uni'];
	$precio_may=$_POST['precio_may'];
	$nombre=$_POST['nombre'];
	$id=$_POST['id'];

	$precio_uni = $conex->real_escape_string($precio_uni);
    $precio_may = $conex->real_escape_string($precio_may);
    $nombre = $conex->real_escape_string($nombre);
    $id = $conex->real_escape_string($id);

    $sql = "UPDATE articulos SET precio_uni = '$precio_uni', precio_may = '$precio_may', nombre = '$nombre' WHERE id = '$id'";

	if ($conex->query($sql) === TRUE) {
		echo "Se guardo correctamente";
	}
	else {
		echo "Algo salio mal: $conex->error";
	}
}
?>