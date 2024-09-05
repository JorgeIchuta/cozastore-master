<?php
session_start();
$auth=$_SESSION['login'];
if(!$auth){
    header('location:/cozastore-master');
}
require '../../includes/config/database.php';
$db = conectarDB();

require '../../includes/funciones.php';
incluirTemplate('header');
?>

<div class="container">
    <div class="p-b-10">
        <h3 class="ltext-103 cl5">
            Eliminar
        </h3>
    </div>
</div>

<?php
$cod = $_GET['cod'];
$con_sql = "UPDATE detalle_pedidos WHERE id='$cod'";
$res = mysqli_query($db, $con_sql);
if ($res) {
    echo "
        <script>
            alert('Se eliminó');
            location.href='listado.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('No se eliminó');
        </script>
    ";
}
?>

<?php
incluirTemplate('footer');
?>
