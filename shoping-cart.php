<?php
session_start();

// Función para agregar al carrito
function addToCart($id, $nombre, $precio, $imagen, $cantidad = 1) {
    $producto = [
        'id' => $id,
        'nombre' => $nombre,
        'precio' => $precio,
        'imagen' => $imagen,
        'cantidad' => $cantidad
    ];

    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = [];
    }

    // Verificamos si el producto ya está en el carrito
    $found = false;
    foreach ($_SESSION['carrito'] as &$item) {
        if ($item['id'] == $id) {
            $item['cantidad'] += $cantidad;
            $found = true;
            break;
        }
    }

    // Si no lo está, lo añadimos
    if (!$found) {
        $_SESSION['carrito'][] = $producto;
    }
}

// Función para eliminar del carrito
function removeFromCart($id) {
    if (isset($_SESSION['carrito'])) {
        foreach ($_SESSION['carrito'] as $key => $item) {
            if ($item['id'] == $id) {
                unset($_SESSION['carrito'][$key]);
                $_SESSION['carrito'] = array_values($_SESSION['carrito']); // Reindexamos el array
                break;
            }
        }
    }
}

// Verificamos si se ha enviado el formulario de agregar al carrito o eliminar del carrito
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['product_id']) && isset($_POST['product_nombre']) && isset($_POST['product_precio']) && isset($_POST['product_imagen']) && isset($_POST['product_cantidad'])) {
        $product_id = $_POST['product_id'];
        $product_nombre = $_POST['product_nombre'];
        $product_precio = $_POST['product_precio'];
        $product_imagen = $_POST['product_imagen'];
        $product_cantidad = $_POST['product_cantidad'];

        addToCart($product_id, $product_nombre, $product_precio, $product_imagen, $product_cantidad);
    } elseif (isset($_POST['remove_id'])) {
        $remove_id = $_POST['remove_id'];
        removeFromCart($remove_id);
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <!-- Aquí van tus enlaces a CSS -->
</head>
<body class="animsition">
    <!-- Header -->
    <?php include 'includes/templates/header.php'; ?>

    <!-- Cart -->
    <div class="bg0 p-t-75 p-b-85">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                    <div class="m-l-25 m-r--38 m-lr-0-xl">
                        <div class="wrap-table-shopping-cart">
                            <table class="table-shopping-cart">
                                <tr class="table_head">
                                    <th class="column-1">Producto</th>
                                    <th class="column-2"></th>
                                    <th class="column-3">Precio</th>
                                    <th class="column-4">Cantidad</th>
                                    <th class="column-5">Total</th>
                                    <th class="column-6">Acciones</th>
                                </tr>
                                <?php
                                $total = 0;
                                if (isset($_SESSION['carrito'])) {
                                    foreach ($_SESSION['carrito'] as $producto) {
                                        $subtotal = $producto['precio'] * $producto['cantidad'];
                                        $total += $subtotal;
                                ?>
                                        <tr class="table_row">
                                            <td class="column-1">
                                                <div class="how-itemcart1">
                                                    <img src="admin/producto/imagenes/<?php echo $producto['imagen']; ?>" alt="IMG">
                                                </div>
                                            </td>
                                            <td class="column-2"><?php echo $producto['nombre']; ?></td>
                                            <td class="column-3">Bs <?php echo $producto['precio']; ?></td>
                                            <td class="column-4">
                                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                                    <input type="hidden" name="product_id" value="<?php echo $producto['id']; ?>">
                                                    <input type="number" name="product_cantidad" value="<?php echo $producto['cantidad']; ?>">
                                                    <button type="submit" class="btn btn-sm btn-outline-secondary">Actualizar</button>
                                                </form>
                                            </td>
                                            <td class="column-5">Bs <?php echo $subtotal; ?></td>
                                            <td class="column-6">
                                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                                    <input type="hidden" name="remove_id" value="<?php echo $producto['id']; ?>">
                                                    <button type="submit" class="btn btn-sm btn-outline-danger">Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                            </table>
                        </div>

                        <!-- Total -->
                        <div class="flex-w flex-sb-m p-t-27 p-b-30">
                            <div class="flex-w flex-m m-r-50 m-tb-10">
                                <div class="stext-101 cl2 size-103">Total:</div>
                                <div class="stext-105 cl2 size-104">Bs <?php echo $total; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'includes/templates/footer.php'; ?>

    <!-- Scripts -->
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
