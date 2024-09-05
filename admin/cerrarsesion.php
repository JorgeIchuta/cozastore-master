<?php
    session_start();
    $_SESSION=[];
    session_destroy();
    header('location:/cozastore-master');
?>