<?php
    session_start();
    $auth=$_SESSION['login'];
    if(!$auth){
        header('location:/cozastore-master');
    }
    require '../../includes/config/database.php';
    $db=conectarDB();
    if ($_POST) {
        $nombre=$_POST['nombre'];
        $correo=$_POST['correo'];
        $clave=$_POST['clave'];
        $perfil=$_POST['perfil'];

        $con_sql = "INSERT INTO clientes (nombre, correo, clave, perfil) VALUES ('$nombre','$correo','$clave','$perfil')";
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