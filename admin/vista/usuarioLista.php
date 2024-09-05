<?php
session_start();
$auth = $_SESSION['login'];
if (!$auth) {
    header('location:/cozastore-master');
}
require '../../includes/funciones.php';
incluirTemplate('header');
?>


<main class="contenedor Seccion">
    <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
        <div class="flex-w flex-m m-r-20 m-tb-5">
            <div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
                <a href="/cozastore-master/admin/index.php">Volver</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="p-b-10">
            <h3 class="ltext-103 cl5">
                Lista de Usuarios
            </h3>
        </div>
    </div>
    <div class="container">
        <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
            <table class="table table-lg">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($reg = mysqli_fetch_array($res)) {
                        echo "<tr>";
                        echo "<td>" . $reg['id'] . "</td>";
                        echo "<td>" . $reg['email'] . "</td>";
                        echo "<td><a href='../controlador/usuarioElimina.php?cod=" . $reg['id'] . "' class='btn btn-danger'>Eliminar</a></td>";
                        echo "<td><a href='../controlador/usuarioModifica.php?cod=" . $reg['id'] . "' class='btn btn-success'>Modificar</a></td>";
                        echo "</tr>";
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