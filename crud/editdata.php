<?php

    include("../config/connection.php");

    $name = $_POST['name'];
    $description = $_POST['description'];
    $priority = $_POST['priority'];
    $status = $_POST['status'];
    $userid = $_POST['userId'];

    $sql = "UPDATE tasks SET 
    '$name', '$description', '$priority', '$status', '$userid')";

    $result = mysqli_query($connection, $sql);

    if($result == true){
        header("location:../index.php");
    }else{
        echo "Datos No Insertados";
    }
?>