<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas</title>
</head>

<body>
    <h1>Listado de Tareas</h1>

    <h3>Tareas completadas</h3>
    <ul>
        <?php foreach ($tareasCompletadas as $tarea): ?>
            <li><?= $tarea->titulo; ?></li>
        <?php endforeach; ?>
    </ul>

    <h3>Tareas pendientes</h3>
    <ul>
        <?php foreach ($tareasPendintes as $tarea): ?>
            <li><?= $tarea->titulo; ?></li>
        <?php endforeach; ?>
    </ul>

</body>

</html>