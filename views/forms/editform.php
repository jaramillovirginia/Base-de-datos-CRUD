<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Tarea</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center p-2">Editar Tareas</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <form action="../../crud/editdata.php" method="post">

                    <?php ?>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descripcion</label>
                        <input type="textarea" class="form-control" name="description" id="description">
                    </div>

                    <label for="">Prioridad</label>
                    <select class="form-select mb-3" name="priority">
                        <option selected disabled>Selecciona Prioridad</option>
                        <option value="1">Alta</option>
                        <option value="2">Media</option>
                        <option value="3">Baja</option>
                    </select>
                    </select>
                    <label for="">Estado</label>
                    <select class="form-select mb-3" name="status">
                        <option selected disabled>Selecciona Estado</option>
                        <option value="1">Sin Completar</option>
                        <option value="2">Procesando...</option>
                        <option value="3">Completa</option>
                    </select>
                    <label for="">ID del Usuario</label>
                    <select class="form-select mb-3 color blue" name="userId">
                        <option selected disabled>Seleccionar Prioridad</option>
                        <?php

                        include("../../config/connection.php");

                        $sql = $connection->query("SELECT * FROM users");

                        while ($result = $sql->fetch_assoc()) {
                            echo "<option value='" . $result['id'] . "'>" . $resultado['name'] . "</option>";
                        }

                        ?>
                    </select>
                    <div class="text-center">
                        <a href="../../index.php" class="btn btn-secondary">Volver</a>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                    <input type="hidden" class="form-control" name="id" value="<?php  $result['id']?>">
                </form>
            </div>
        </div>
    </div>


</body>