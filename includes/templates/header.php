<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    $auth = $_SESSION['login'] ?? false;
    // Obtener la cantidad de productos en el carrito
    $totalProductos = isset($_SESSION['carrito']) ? count($_SESSION['carrito']) : 0;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda virtual</title>
    <link rel="icon" type="image/png" href="/cozastore-master/admin/producto/imagenes/icons/favicon.png"/>
    <link rel="stylesheet" type="text/css" href="/cozastore-master/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/cozastore-master/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/cozastore-master/fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="/cozastore-master/fonts/linearicons-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="/cozastore-master/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="/cozastore-master/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="/cozastore-master/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="/cozastore-master/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="/cozastore-master/vendor/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="/cozastore-master/vendor/MagnificPopup/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="/cozastore-master/vendor/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" type="text/css" href="/cozastore-master/css/util.css">
    <link rel="stylesheet" type="text/css" href="/cozastore-master/css/main.css">
</head>
<body class="animsition">
    <!-- Header -->
    <header class="header-v2">
        <!-- Header desktop -->
        <div class="container-menu-desktop trans-03">
            <div class="wrap-menu-desktop">
                <nav class="limiter-menu-desktop p-l-45">
                     <!-- Logo desktop -->
                     <a href="http://localhost/cozastore-master/index.php" class="logo">
                        <img src="/cozastore-master/images/icons/polpaca.png" alt="IMG-LOGO">
                    </a>
                    <!-- Menu desktop -->
                    <div class="menu-desktop">
                        <ul class="main-menu">
                            <li class="active-menu">
                                <a href="index.php">Inicio</a>
                            </li>
                            <li>
                                <a href="product.php">Tienda</a>
                            </li>
                            <li>
                                <a href="blog.php">Blog</a>
                            </li>
                            <li>
                                <a href="about.php">Acerca de</a>
                            </li>
                            <li>
                                <a href="contact.php">Contactenos</a>
                            </li>
                            <li>
                                <a href="shoping-cart.php">Carrito (<?php echo $totalProductos; ?>)</a>
                            </li>
                            <?php if ($auth) : ?>
                                <li>
                                    <a href="cerrarsesion.php">Cerrar Sesion</a>
                                </li>
                            <?php else : ?>
                                <li>
                                    <a href="login.php">Iniciar Sesion</a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <!-- Icon header -->
                    <div class="wrap-icon-header flex-w flex-r-m h-full">
                        <div class="flex-c-m h-full p-r-24">
                            <div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-modal-search">
                                <i class="zmdi zmdi-search"></i>
                            </div>
                        </div>
                        <div class="flex-c-m h-full p-lr-19">
                            <a href="shoping-cart.php" class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-cart" data-notify="<?php echo $totalProductos; ?>">
                                <i class="zmdi zmdi-shopping-cart"></i>
                            </a>
                        </div>
                        <div class="flex-c-m h-full p-lr-19">
                            <div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-sidebar">
                                <i class="zmdi zmdi-menu"></i>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Header Mobile -->
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->
            <div class="logo-mobile">
                <a href="index.php"><img src="/cozastore-master/images/icons/polpaca.png" alt="IMG-LOGO"></a>
            </div>
            <!-- Icon header -->
            <div class="wrap-icon-header flex-w flex-r-m h-full m-r-15">
                <div class="flex-c-m h-full p-r-10">
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-modal-search">
                        <i class="zmdi zmdi-search"></i>
                    </div>
                </div>
                <div class="flex-c-m h-full p-lr-10 bor5">
                    <a href="shoping-cart.php" class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="<?php echo $totalProductos; ?>">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </a>
                </div>
            </div>
            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>
        <!-- Menu Mobile -->
        <div class="menu-mobile">
            <ul class="main-menu-m">
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                <li>
                    <a href="product.php">Tienda</a>
                </li>
                <li>
                    <a href="shoping-cart.php" class="label1 rs1" data-label1="hot">Features</a>
                </li>
                <li>
                    <a href="blog.php">Blog</a>
                </li>
                <li>
                    <a href="about.php">Acerca de</a>
                </li>
                <li>
                    <a href="contact.php">Contactenos</a>
                </li>
				<?php if ($auth) : ?>
                                <li>
                                    <a href="cerrarsesion.php">Cerrar Sesion</a>
                                </li>
                            <?php else : ?>
                                <li>
                                    <a href="login.php">Iniciar Sesion</a>
                                </li>
                            <?php endif; ?>
            </ul>
        </div>
        <!-- Modal Search -->
        <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
            <div class="container-search-header">
                <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                    <img src="/cozastore-master/admin/producto/imagenes/icons/icon-close2.png" alt="CLOSE">
                </button>
                <form class="wrap-search-header flex-w p-l-15">
                    <button class="flex-c-m trans-04">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                    <input class="plh3" type="text" name="search" placeholder="Search...">
                </form>
            </div>
        </div>
    </header>
    <!-- Sidebar -->
    <aside class="wrap-sidebar js-sidebar">
        <div class="s-full js-hide-sidebar"></div>
        <div class="sidebar flex-col-l p-t-22 p-b-25">
            <div class="flex-r w-full p-b-30 p-r-27">
                <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-sidebar">
                    <i class="zmdi zmdi-close"></i>
                </div>
            </div>
            <div class="sidebar-content flex-w w-full p-lr-65 js-pscroll">
                
                    
                <div class="sidebar-gallery w-full p-tb-30">
                    <span class="mtext-101 cl5">
                    
                    <img src="/cozastore-master/images/icons/polpaca.png" alt="IMG-LOGO"></a>
                    </span>
                    <div class="flex-w flex-sb p-t-36 gallery-lb">
                        <div class="wrap-item-gallery m-b-10">
                            <a class="item-gallery bg-img1" href="/cozastore-master/admin/producto/imagenes/muj1.jpg" data-lightbox="gallery" style="background-image: url('/cozastore-master/admin/producto/imagenes/muj1.jpg');"></a>
                        </div>
                        <div class="wrap-item-gallery m-b-10">
                            <a class="item-gallery bg-img1" href="/cozastore-master/admin/producto/imagenes/muj2.jpg" data-lightbox="gallery" style="background-image: url('/cozastore-master/admin/producto/imagenes/muj2.jpg');"></a>
                        </div>
                        <div class="wrap-item-gallery m-b-10">
                            <a class="item-gallery bg-img1" href="/cozastore-master/admin/producto/imagenes/muj3.jpg" data-lightbox="gallery" style="background-image: url('/cozastore-master/admin/producto/imagenes/muj3.jpg');"></a>
                        </div>
                        <div class="wrap-item-gallery m-b-10">
                            <a class="item-gallery bg-img1" href="/cozastore-master/admin/producto/imagenes/product-01.jpg" data-lightbox="gallery" style="background-image: url('/cozastore-master/admin/producto/imagenes/product-01.jpg');"></a>
                        </div>
                        <div class="wrap-item-gallery m-b-10">
                            <a class="item-gallery bg-img1" href="/cozastore-master/admin/producto/imagenes/hom1.jpg" data-lightbox="gallery" style="background-image: url('/cozastore-master/admin/producto/imagenes/hom1.jpg');"></a>
                        </div>
                        <div class="wrap-item-gallery m-b-10">
                            <a class="item-gallery bg-img1" href="/cozastore-master/admin/producto/imagenes/hom2.jpg" data-lightbox="gallery" style="background-image: url('/cozastore-master/admin/producto/imagenes/hom2.jpg');"></a>
                        </div>
                        <div class="wrap-item-gallery m-b-10">
                            <a class="item-gallery bg-img1" href="/cozastore-master/admin/producto/imagenes/hom3.jpg" data-lightbox="gallery" style="background-image: url('/cozastore-master/admin/producto/imagenes/hom3.jpg');"></a>
                        </div>
                        <div class="wrap-item-gallery m-b-10">
                            <a class="item-gallery bg-img1" href="/cozastore-master/admin/producto/imagenes/hom4.jpg" data-lightbox="gallery" style="background-image: url('/cozastore-master/admin/producto/imagenes/hom4.jpg');"></a>
                        </div>
                        <div class="wrap-item-gallery m-b-10">
                            <a class="item-gallery bg-img1" href="/cozastore-master/admin/producto/imagenes/hom5.jpg" data-lightbox="gallery" style="background-image: url('/cozastore-master/admin/producto/imagenes/hom5.jpg');"></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-gallery w-full">
                    <span class="mtext-101 cl5">
                        SOBRE NOSTROS CASE
                    </span>
                    <p class="stext-108 cl6 p-t-27">
                    En Polandinos, somos apasionados por la moda y el estilo. Nos especializamos en ofrecer una amplia gama de poleras únicas y de alta calidad que se adaptan a todas las personalidades y gustos. Nuestro objetivo es proporcionarte prendas cómodas, modernas y con un toque distintivo que te haga sentir auténtico y seguro.



                    </p>
                </div>
            </div>
        </div>
    </aside>
    <script src="/cozastore-master/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="/cozastore-master/vendor/animsition/js/animsition.min.js"></script>
    <script src="/cozastore-master/vendor/bootstrap/js/popper.js"></script>
    <script src="/cozastore-master/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/cozastore-master/vendor/select2/select2.min.js"></script>
    <script src="/cozastore-master/vendor/daterangepicker/moment.min.js"></script>
    <script src="/cozastore-master/vendor/daterangepicker/daterangepicker.js"></script>
    <script src="/cozastore-master/vendor/slick/slick.min.js"></script>
    <script src="/cozastore-master/vendor/parallax100/parallax100.js"></script>
    <script src="/cozastore-master/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
    <script src="/cozastore-master/vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="/cozastore-master/vendor/sweetalert/sweetalert.min.js"></script>
    <script src="/cozastore-master/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/cozastore-master/js/main.js"></script>
</body>
</html>
