<?php
session_start();
$auth=$_SESSION['login'];
if(!$auth){
    header('location:/cozastore-master');
}
require '../../includes/config/database.php';
$db = conectarDB();
if ($_POST) {
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $id_pedido = $_POST['pedido'];

    $con_sql = "INSERT INTO detalle_pedidos (producto, precio, cantidad, id_pedido) VALUES ('$producto', '$precio', '$cantidad', '$id_pedido')";
    $res = mysqli_query($db, $con_sql);
    if ($res) {
?>
        <script>
            alert('Se registró');
            location.href = 'listado.php';
        </script>
<?php
    } else {
        echo "ERROR";
    }
}
?>