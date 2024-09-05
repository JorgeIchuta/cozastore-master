<?php
session_start();
$auth = $_SESSION['login'];
if (!$auth) {
    header('location:/cozastore-master');
    exit;
}

require '../../includes/config/database.php';
$db = conectarDB();

require '../../includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor Seccion">
    <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
        <div class="flex-w flex-m m-r-20 m-tb-5">
            <div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
                <a href="/cozastore-master/admin/detalle_pedido/crear.php">Nueva Detalle_Pedido</a>
            </div>
            <div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
                <a href="/cozastore-master/admin/index.php">Volver</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="p-b-10">
            <h3 class="ltext-103 cl5">
                Listado de Detalle_Pedido
            </h3>
        </div>
    </div>
    <div class="container">
        <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
            <table class="table table-lg">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>PedidoNom</th>
                        <th colspan="2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $con_sql = "SELECT d.*, p.nombre as nombre_pedido FROM detalle_pedidos d INNER JOIN pedidos p ON d.id_pedido = p.id";
                    $res = mysqli_query($db, $con_sql);
                    while ($reg = mysqli_fetch_assoc($res)) {
                    ?>
                        <tr>
                            <td><?php echo $reg['id']; ?></td>
                            <td><?php echo $reg['producto']; ?></td>
                            <td><?php echo $reg['precio']; ?></td>
                            <td><?php echo $reg['cantidad']; ?></td>
                            <td><?php echo $reg['nombre_pedido']; ?></td>
                            <td><a class="btn btn-danger" href="borrar.php?cod=<?php echo $reg['id']; ?>" role="button">Eliminar</a></td>
                            <td><a class="btn btn-primary" href="actualizar.php?cod=<?php echo $reg['id']; ?>" role="button">Modificar</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php
incluirTemplate('footer');
?>