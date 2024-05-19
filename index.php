<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
        <h1 class="text-center p-2">Tareas</h1>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Prioridad</th>
                    <th scope="col">Estado</th>
                    <th scope="col">UserID</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
            <?php
                require("config/connection.php");

                $sql = $connection->query("SELECT * FROM tasks
                    INNER JOIN users ON tasks.userId = users.id         
                ");

                while($result = $sql->fetch_assoc()){
                ?>
                    <tr>
                        <th scope="row"><?php echo $result['id'] ?></th>
                        <td><?php echo $result['name'] ?></td>
                        <td><?php echo $result['description'] ?></td>
                        <td><?php echo $result['priority'] ?></td>
                        <td><?php echo $result['status'] ?></td>
                        <td><?php echo $result['userId'] ?></td>
                        <th>
                            <a href="views/forms/editform.php?id=<?php echo $result['id'] ?>" class="btn btn-warning">Editar</a>
                            <a href="crud/deletedata.php?id=<?php echo $result['id'] ?>" class="btn btn-danger">Eliminar</a>
                        </th>
                    </tr>
                <?php
                };
            ?>
        </table>
        <div class="container">
            <a href="./views/forms/addform.php" class="btn btn-success">Agregar Tarea</a>
        </div>
        </div>
        </div>
    </div>

















    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>