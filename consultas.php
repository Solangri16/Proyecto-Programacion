<link rel="stylesheet" href="index.css">
<style>
    body {
        background-image: url('pngtree-photo-of-shelf-commodity-supermarket-image_1013437.jpg');
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>

<body>
    <form action="enlistar.php" method="POST">
        <h1>En Venta:</h1><h6><a href="index.html">Pag.Principal</a></h6>
    <table border="1">
    <tr>
        <th>Productos</th><th>Precio Unidad</th><th>Precio Mayor</th><th colspan="3">Opciones</th>
    </tr>
    <?php
        include 'conexion_db.php';
        $sql = "SELECT * FROM articulos";
        $result = $conex->query($sql);
    ?>
    <?php 
    while($row = $result->fetch_assoc()):
    ?>
    <tr>
        <td>
            <?php 
            echo $row['nombre'];
            ?>
        </td>
        <td>
            <?php
            echo $row['precio_uni'];
            ?>
        </td>
        <td>
            <?php
            echo $row['precio_may'];
            ?>
        </td>
        <td>    
            <a href="borrar.php?id=<?php echo $row['id']; ?>">Eliminar</a>
        </td>
        <td>
            <a href="editar.php?id=<?php echo $row['id']; ?>">Editar</a>
        </td>
        <td>
            <a href="index.html">Pag.Principal</a>
        </td>
    </tr>
    </form>
</body>
<?php 
    endwhile; 
?>