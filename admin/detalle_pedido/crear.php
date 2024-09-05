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
            Crear Nuevo Detalle_Pedido
        </h3>
    </div>
</div>
<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
    <div class="flex-w flex-m m-r-20 m-tb-5">
        <div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
            <a href="/cozastore-master/admin/index.php">Volver</a>
        </div>
    </div>
</div>
<div class="container">
    <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
        <form class="bg0 p-t-75 p-b-85" method="post" action="registrardetalle.php" enctype="multipart/form-data">
            <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                <fieldset>
                    <legend>Información General</legend>
                    <label for="producto">Producto:</label>
                    <input type="text" name="producto" id="producto" placeholder="Nuevo Producto"><br>
                    <label for="precio">Precio:</label>
                    <input type="text" name="precio" id="precio" placeholder="Precio"><br>
                    <label for="cantidad">Cantidad:</label>
                    <input type="text" name="cantidad" id="cantidad" placeholder="Cantidad"><br>
                </fieldset>
                <fieldset>
                    <legend>Pedido</legend>
                    <select name="pedido" id="pedido">
                        <?php
                        $con_sql = 'SELECT * FROM pedidos';
                        $res = mysqli_query($db, $con_sql);
                        while ($reg = mysqli_fetch_assoc($res)) {
                        ?>
                            <option value="<?php echo $reg['id']; ?>">
                                <?php echo $reg['nombre']; ?>
                            </option>
                        <?php } ?>
                    </select>
                </fieldset>
            </div>
            <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                <div class="flex-w flex-m m-r-20 m-tb-5">
                    <div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
                        <input type="submit" value="Crear Detalle_pedido">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
incluirTemplate('footer');
?>