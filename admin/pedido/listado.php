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
<main class="contenedor Seccion">
    <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
        <div class="flex-w flex-m m-r-20 m-tb-5">
            <div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
                <a href="/cozastore-master/admin/pedido/crear.php">Nuevo Pedido</a>
            </div>
            <div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
                <a href="/cozastore-master/admin/index.php">Volver</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="p-b-10">
            <h3 class="ltext-103 cl5">
                Listado de Pedidos
            </h3>
        </div>
    </div>
    <div class="container">
        <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
            <table class="table table-lg">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Monto</th>
                        <th>Estado</th>
                        <th>Email</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Direccion</th>
                        <th>Ciudad</th>
                        <th colspan="2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $con_sql = "SELECT * FROM pedidos";
                    $res = mysqli_query($db, $con_sql);
                    while ($reg = mysqli_fetch_assoc($res)) {
                    ?>
                        <tr>
                            <td><?php echo $reg['monto']; ?></td>
                            <td><?php echo $reg['estado']; ?></td>
                            <td><?php echo $reg['email']; ?></td>
                            <td><?php echo $reg['nombre']; ?></td>
                            <td><?php echo $reg['apellido']; ?></td>
                            <td><?php echo $reg['direccion']; ?></td>
                            <td><?php echo $reg['ciudad']; ?></td>
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