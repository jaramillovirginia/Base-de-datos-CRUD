<?php

    include("../config/connection.php");

    $name = $_POST['name'];
    $description = $_POST['description'];
    $priority = $_POST['priority'];
    $status = $_POST['status'];
    $userid = $_POST['userId'];

    $sql = "INSERT  INTO tasks(name, description, priority, status, userId) 
    VALUES('$name', '$description', '$priority', '$status', '$userid')";

    $result = mysqli_query($connection, $sql);

    if($result == true){
        header("location:../index.php");
    }else{
        echo "Datos No Insertados";
    }
?>