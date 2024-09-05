<?php
    session_start();
    $auth=$_SESSION['login'];
    if(!$auth){
        header('location:/cozastore-master');
    }
    require '../includes/funciones.php';
    incluirTemplate('header');
?>

<div class="container">
	<div class="p-b-10">
            <h3 class="ltext-103 cl5">
                Administrador de Venta de Poleras
            </h3>
            
        <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
            <div class="flex-w flex-m m-r-20 m-tb-5">                       
                <div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
                    <a href="/cozastore-master/admin/categorias/listado.php">Categorias</a>
                </div>
                <div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
                    <a href="/cozastore-master/admin/cliente/listado.php">Clientes</a>
                </div>
                <div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
                    <a href="/cozastore-master/admin/detalle_pedido/listado.php">Detalle_Pedido</a>
                </div>
                <div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
                    <a href="/cozastore-master/admin/pedido/listado.php">Pedido</a>
                </div>
                <div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
                    <a href="/cozastore-master/admin/producto/listado.php">Producto</a>
                </div>
                <div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
                    <a href="/cozastore-master/admin/controlador/nuevo.php">Usuarios</a>
                </div>
                <div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
                    <a href="/cozastore-master/admin/controlador/usuarioLista.php">Lista Usuarios</a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
    incluirTemplate('footer');
?>
