<?php
require '../../includes/funciones.php';
incluirTemplate('header');
$cod = $_GET['cod'];
echo $cod;
include "../modelo/usuario.php";
$usu = new Usuario("", "", "");
$r = $usu->buscarUsuario($cod);
$reg = mysqli_fetch_array($r);
if (isset($_POST['registrar'])) {
    $e = $_POST['ema'];
    $p1 = $_POST['pas1'];
    $p2 = $_POST['pas2'];
    if (strcmp($p1, $p2) == 0) {
        $pashash = password_hash($p1, PASSWORD_DEFAULT);
        //include "../modelo/usuario.php";
        $usu = new Usuario("", "", "");
        $r = $usu->modificarUsuario($cod, $pashash);
        if ($r) {
            echo "<script>
                        alert('Se modifico');
                        location.href='/usuarioLista.php';
                </script>";
        } else {
            echo "<script>
                        alert('No se modifico');
                        location.href='usuarioLista.php';
                </script>";
        }
    } else {
        echo "Las contrasenas deben ser iguales";
    }
}

?>
<main class="contenedor Seccion">
    <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
        <div class="flex-w flex-m m-r-20 m-tb-5">
            <div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
                <div class="container">
                    <div class="p-b-10">
                        <h3 class="ltext-103 cl5">
                            Modificar Contraseña
                        </h3>
                    </div>
                </div>
            </div>
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
                            <input type="email" name="ema" id="ema" value="<?php echo $reg['email'] ?>">
                            <label for="">Esciba Password</label>
                            <input type="password" name="pas1" id="pas1">
                            <label for="">Confirmar Password</label>
                            <input type="password" name="pas2" id="pas2">
                            <br><br>
                            <input type="submit" name="modificar" value="Modificar Contraseña" class="btn btn-primary">
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