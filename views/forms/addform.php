<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Tarea</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="p-2 text-center">Agregar Tarea</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="../../crud/addata.php" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descripcion</label>
                        <input type="textarea" class="form-control" name="description" id="description" required>
                    </div>
                    </select>
                    <label for="">Prioridad</label>
                    <select class="form-select mb-3" name="priority">
                        <option selected disabled>Selecciona Prioridad</option>
                        <option value="Alta">Alta</option>
                        <option value="Media">Media</option>
                        <option value="Baja">Baja</option>
                    </select>
                    </select>
                    <label for="">Estado</label>
                    <select class="form-select mb-3" name="status">
                        <option selected disabled>Selecciona Estado</option>
                        <option value="<?php echo "Sin Completar" ?>">Sin Completar</option>
                    </select>
                    <label for="">ID del Usuario</label>
                    <select class="form-select mb-3 color blue" name="userId">
                        <option selected disabled>Seleccionar Prioridad</option>
                        <?php

                        include("../../config/connection.php");

                        $sql = $connection->query("SELECT * FROM users");

                        while ($result = $sql->fetch_assoc()) {
                            echo "<option value='".$result['id']."'>".$resultado['name']."</option>";
                        }

                        ?>
                    </select>
                    <div class="text-center">
                        <a href="../../index.php" class="btn btn-secondary">Volver</a>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
            </div>
        </div>
        </form>
    </div>











    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>