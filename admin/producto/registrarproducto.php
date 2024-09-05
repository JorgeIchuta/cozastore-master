<?php
session_start();
$auth=$_SESSION['login'];
if(!$auth){
    header('location:/cozastore-master');
    exit();
}
require '../../includes/config/database.php';
$db = conectarDB();

if ($_POST) {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $id_categoria = $_POST['categoria'];  // Corrección aquí
    $imagen = $_FILES['ima']['name'];

    $con_sql = "INSERT INTO productos (nombre, descripcion, precio, cantidad, id_categoria, imagen) VALUES ('$nombre', '$descripcion', '$precio', '$cantidad', '$id_categoria', '$imagen')";
    $res = mysqli_query($db, $con_sql);
    if ($res) {
        ?>
        <script>
            alert('Se registró');
            location.href = 'listado.php';
        </script>
        <?php
    } else {
        echo "ERROR: " . mysqli_error($db);
    }
}
?>
