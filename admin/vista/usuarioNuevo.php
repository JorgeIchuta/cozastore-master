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
                Crear
            </h3>
        </div>
    </div>
    <div class="container">
        <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
            <table class="table table-lg">
                <thead>
                    <form action="" method="post" class="formulario">
                        <fieldset>
                            <legend>Informacion General</legend>
                            <label for="">Email</label>
                            <input type="email" name="ema" id="ema">
                            <label for="">Escriba Password</label>
                            <input type="password" name="pas1" id="pas1">
                            <label for="">Confirmar Password</label>
                            <input type="password" name="pas2" id="pas2">
                            <br><br>
                            <input type="submit" name="registrar" value="Registrar Usuario" class="btn btn-primary">
                            <a href="../controlador/usuarioLista.php" class="btn btn-danger">Cancelar</a>
                        </fieldset>
                </thead>
            </table>
        </div>
    </div>
</main>


<?php
incluirTemplate('footer');
?>