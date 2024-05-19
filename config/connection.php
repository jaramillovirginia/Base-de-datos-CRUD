<?php


    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "organizaciontareas";

    $connection = new mysqli($host, $user, $pass, $db);

    if(!$connection){
        echo 'Conexion Fallida';
    }

?>