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
    
    
    if(isset($_POST['Modificar'])) { 
        $cod = $_GET['cod']; // Obtener el ID del vendedor de la URL
        
        $nombre = $_POST['nombre']; 
        $descripcion = $_POST['descripcion']; 
        $precio = $_POST['precio']; 
        $cantidad = $_POST['cantidad'];
        $imagen = $_POST['imagen']; 

        // Prevenir inyección SQL escapando las variables
        $nombre = mysqli_real_escape_string($db, $nombre);
        $descripcion = mysqli_real_escape_string($db, $descripcion);
        $precio = mysqli_real_escape_string($db, $precio);
        $cantidad = mysqli_real_escape_string($db, $cantidad);
        $imagen = mysqli_real_escape_string($db, $imagen);

        
        $con_sql = "UPDATE productos SET  
                    nombre='$nombre',  
                    descripcion='$descripcion',  
                    precio='$precio',  
                    cantidad='$cantidad',
                    imagen='$imagen'  
                    WHERE id='$cod'"; 

        $resm = mysqli_query($db, $con_sql); 

        if ($resm) { 
            echo " 
            <script> 
                window.alert('Registro modificado con éxito'); 
                window.location='listado.php';
                 
            </script>"; 
            header('Location: /cozastore/admin/producto/listado.php');
        } else {
            echo "Hubo un error al intentar modificar el registro.";
        }
    } else {
        echo "No se recibieron datos para modificar.";
        
    }
?> 
<div class="container">
    <div class="p-b-10">
        <h3 class="ltext-103 cl5">
            Modificar Producto
        </h3>
    </div>
</div>
    <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
    <div class="flex-w flex-m m-r-20 m-tb-5">
        <div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
            <a href="/cozastore-master/admin/producto/listado.php">Volver</a>
        </div>
    </div>
</div> 
    <?php 
        $cod = $_GET['cod']; // Obtener el ID del vendedor de la URL
        $consulta = "SELECT * FROM productos WHERE id='$cod'"; 
        $res = mysqli_query($db, $consulta); 
        
        while ($fila = mysqli_fetch_array($res)) { 
    ?> 
        <form action="actualizar.php?cod=<?php echo $fila['id']; ?>" method="post"> 
            <table class="table table-striped table-bordered table-hover"> 
                <tr> 
                    <td>Nombre</td> 
                    <td><input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $fila['nombre']; ?>"></td> 
                </tr> 
                <tr> 
                    <td>Descripcion</td> 
                    <td><input type="text" class="form-control" name="descripcion" id="descripcion" value="<?php echo $fila['descripcion']; ?>"></td> 
                </tr> 
                <tr> 
                    <td>Precio</td> 
                    <td><input type="number" class="form-control" name="precio" id="precio" value="<?php echo $fila['precio']; ?>"></td> 
                </tr> 
                <tr> 
                    <td>cantidad</td> 
                    <td><input type="number" class="form-control" name="cantidad" id="cantidad" value="<?php echo $fila['cantidad']; ?>"></td> 
                </tr> 
                <tr> 
                    <td>imagen</td> 
                    <td><input type="file" class="form-control" name="imagen" id="imagen" value="<?php echo $fila['imagen']; ?>"></td> 
                </tr>
                <tr> 
                    <td colspan="2"> 
                        <div align="center"> 
                            <input type="submit" name="Modificar" id="Modificar" value="Modificar" class="btn btn-primary"> 
                        </div> 
                    </td> 
                </tr> 
            </table> 
            
        </form> 

    <?php 
    
        } 
    ?> 
</main> 


<?php 
    incluirTemplate('footer'); 
?>
