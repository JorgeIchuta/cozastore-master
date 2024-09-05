<?php
    session_start();
    $auth=$_SESSION['login'];
    if(!$auth){
        header('location:/cozastore-master');
    }
    require '../../includes/config/database.php';
    $db=conectarDB();
    if ($_POST) {
        $monto=$_POST['monto'];
        $estado=$_POST['estado'];
        $email=$_POST['email'];
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $direccion=$_POST['direccion'];
        $ciudad=$_POST['ciudad'];

        $con_sql = "INSERT INTO pedidos (monto, estado, email, nombre, apellido, direccion, ciudad) VALUES ('$monto','$estado','$email','$nombre','$apellido','$direccion','$ciudad')";
        $res = mysqli_query($db, $con_sql);
        if ($res) {
            ?>
            <script>
                alert('Se registró');
                location.href = 'listado.php';
            </script>
<?php
        } else {
            echo "ERROR";
        }
    }
?>