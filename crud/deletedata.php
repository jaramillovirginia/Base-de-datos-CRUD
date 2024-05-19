<?php

    include("../config/connection.php");

    $id = $_GET['id'];
    $sql = "DELETE FROM tasks WHERE id = '$id'";

    $query = mysqli_query($connection, $sql);

    if($query === true){
        header("Location: ../index.php");
    }else{
        echo "No se pudo eliminar el registro";
    }

?>