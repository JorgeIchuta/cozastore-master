<?php
    session_start();
    $auth=$_SESSION['login'];
    if(!$auth){
        header('location:/cozastore-master');
    }
    require '../../includes/config/database.php';
    $db=conectarDB();
    if ($_POST) {
        $categoria=$_POST['categoria'];
        $ima=$_FILES['ima']['name'];

        $con_sql = "INSERT INTO categorias (categoria, imagen) VALUES ('$categoria','$ima')";
        $res = mysqli_query($db, $con_sql);
        if ($res) {
            $tmp = $_FILES['ima']['tmp_name'];
            @copy($tmp, 'imagenes/'.$i);
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