<?php
    function conectarDB(){
        $db=mysqli_connect('localhost','root','','tienda_virtual');
        if(!$db){
            echo "No se Conecto";
            exit;
        }
        return $db;
    }

?>