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

<main class="contenedor seccion">
    <h1>Eliminar</h1>
    <?php
        if(isset($_GET['cod'])) {
            $id = $_GET['cod'];
            $id = mysqli_real_escape_string($db, $id);

            $con = "DELETE FROM productos WHERE id = $id";
            $res = mysqli_query($db, $con);

            if($res) {
                echo "El producto se eliminó correctamente.";
            } else {
                echo "Hubo un error al intentar eliminar el producto.";
            }

            // Redirigir después de mostrar el mensaje
            echo "<script>
                setTimeout(function() {
                    window.location.href = '/cozastore-master/admin/producto/listado.php';
                }, 3000); // Espera de 3 segundos antes de redirigir
            </script>";
        } else {
            echo "ID del producto no proporcionado.";
        }
    ?>
</main>

<?php
    incluirTemplate('footer');
?>