<?php
require 'includes/config/database.php';
$db = conectarDB();
$errores = [];

// Autenticar el usuario
if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Corrección del operador de comparación
    /*echo "<pre>";
    var_dump($_POST);
    echo "</pre>";*/
    $e = mysqli_real_escape_string($db, $_POST['email']);
    $p = mysqli_real_escape_string($db, $_POST['pass']);
    if (!$e) {
        $errores[] = "El email es obligatorio";
    }
    if (!$p) {
        $errores[] = "El password es obligatorio";
    }
    if (empty($errores)) {
        $con_sql = "SELECT * FROM usuarios WHERE email='$e'";
        echo $con_sql;
        $res = mysqli_query($db, $con_sql);
        //var_dump($res);
        if ($res->num_rows) {
            //revisar si el password es correcto
            $usuario = mysqli_fetch_array($res);
            //var_dump($usuario);
            $auth = password_verify($p, $usuario['password']);
            //var_dump($auth);
            if ($auth) {
                session_start();
                //llenar el arreglo de la sesion
                $_SESSION['usuario'] = $usuario['email']; // Corrección en el nombre del índice
                $_SESSION['login'] = true;
                /*echo "<pre>";
                var_dump($_SESSION);
                echo "</pre>";*/
                header("location: /cozastore-master/admin");
                exit; // Asegura que el script se detiene después de la redirección
            } else {
                $errores[] = "El password es incorrecto";
            }
        } else {
            $errores[] = "El usuario no existe";
        }
    }
}

require 'includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
    <div class="container">
        <div class="p-b-10">
            <h3 class="ltext-103 cl5">
                Iniciar Sesión
            </h3>
        </div>
    </div>
    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo htmlspecialchars($error); ?>
        </div>
    <?php endforeach; ?>
    <div class="container">
        <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
            <form action="" method="post" class="formulario"> <!-- Formulario correctamente ubicado -->
                <fieldset>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" placeholder="Tu email" required>

                    <label for="pass">Password</label>
                    <input type="password" name="pass" id="pass" placeholder="Tu password" required>
                </fieldset>
                <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                    <div class="flex-w flex-m m-r-20 m-tb-5">
                        <div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
                            <input type="submit" value="Iniciar Sesión" class="boton boton-verde">
                        </div>
                    </div>
                </div>
            </form> <!-- Formulario cerrado correctamente -->
        </div>
    </div>
</main>

<?php
incluirTemplate('footer');
?>

<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<script>
    $(".js-select2").each(function() {
        $(this).select2({
            minimumResultsForSearch: 20,
            dropdownParent: $(this).next('.dropDownSelect2')
        });
    })
</script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/slick/slick.min.js"></script>
<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
<script src="vendor/parallax100/parallax100.js"></script>
<script>
    $('.parallax100').parallax100();
</script>
<!--===============================================================================================-->
<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<script>
    $('.gallery-lb').each(function() { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
                enabled: true
            },
            mainClass: 'mfp-fade'
        });
    });
</script>
<!--===============================================================================================-->
<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/sweetalert/sweetalert.min.js"></script>
<script>
    $('.js-addwish-b2').on('click', function(e) {
        e.preventDefault();
    });

    $('.js-addwish-b2').each(function() {
        var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
        $(this).on('click', function() {
            swal(nameProduct, "is added to wishlist !", "success");

            $(this).addClass('js-addedwish-b2');
            $(this).off('click');
        });
    });

    $('.js-addwish-detail').each(function() {
        var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

        $(this).on('click', function() {
            swal(nameProduct, "is added to wishlist !", "success");

            $(this).addClass('js-addedwish-detail');
            $(this).off('click');
        });
    });

    /*---------------------------------------------*/

    $('.js-addcart-detail').each(function() {
        var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
        $(this).on('click', function() {
            swal(nameProduct, "is added to cart !", "success");
        });
    });
</script>
<!--===============================================================================================-->
<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script>
    $('.js-pscroll').each(function() {
        $(this).css('position', 'relative');
        $(this).css('overflow', 'hidden');
        var ps = new PerfectScrollbar(this, {
            wheelSpeed: 1,
            scrollingThreshold: 1000,
            wheelPropagation: false,
        });

        $(window).on('resize', function() {
            ps.update();
        })
    });
</script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>

</html>