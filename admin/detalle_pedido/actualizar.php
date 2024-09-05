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

$cod = $_GET['cod']; // Corregido el uso de los corchetes
if (isset($_POST['Modificar'])) {
    $produto = $_POST['producto'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $con_sql = "UPDATE detalle_pedidos SET producto='$producto', precio='$precio', cantidad='Scantidad' WHERE id='$cod'";
    $resm = mysqli_query($db, $con_sql); // Corregido el uso de la variable $b
    if ($resm) {
        echo "<script>
                    window.alert('registro modificado con exito');
                    window.location='listado.php';
                  </script>"; // Agregado el punto y coma al final del script
    }
}
?>
<div class="container">
    <div class="p-b-10">
        <h3 class="ltext-103 cl5">
            Modificar Detalle_Pedido
        </h3>
    </div>
</div>
<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
    <div class="flex-w flex-m m-r-20 m-tb-5">
        <div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
            <a href="/cozastore-master/admin/detalle_pedido/listado.php">Volver</a>
        </div>
    </div>
</div>
<?php
$consultar = "SELECT * FROM detalle_pedidos WHERE id='$cod'"; // Corregido el nombre de la variable
$res = mysqli_query($db, $consultar); // Corregido el nombre de la variable
while ($fila = mysqli_fetch_array($res)) {
?>
    <form class="bg0 p-t-75 p-b-85" action="actualizar.php?cod=<?php echo $fila['id']; ?>" method="post">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                    <div class="m-l-25 m-r--38 m-lr-0-xl">
                        <div class="wrap-table-shopping-cart">
                            <table class="table-shopping-cart">
                                <tr class="table_head">
                                    <th class="column-1">Producto</th>
                                    <td><input type="text" class="form-control" name="producto" id="producto" value="<?php echo $fila['producto']; ?>"> </td>
                                </tr>
                                <tr class="table_head">
                                    <th class="column-1">Precio</th>
                                    <td><input type="number" class="form-control" name="precio" id="precio" value="<?php echo $fila['precio']; ?>"> </td>
                                </tr>
                                <tr class="table_head">
                                    <th class="column-1">Cantidad</th>
                                    <td><input type="number" class="form-control" name="cantidad" id="cantidad" value="<?php echo $fila['cantidad']; ?>"> </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <div align="center"><input type="submit" name="Modificar" id="Modificar" value="Modificar" class="btn btn-primary"></div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

<?php
}
?>

<?php
incluirTemplate('footer');
?>