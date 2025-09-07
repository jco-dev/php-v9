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
            <li style="color: <?= $tarea->color; ?>;">
                <?= $tarea->titulo; ?>
                <form style="display: inline;" action="actualizar-tarea.php" method="post">
                    <input type="hidden" name="id" value="<?= $tarea->id; ?>">
                    <input type="hidden" name="completado" value="0">
                    <button type="submit">Desmarcar</button>
                </form>
                <form onsubmit="return confirm('¿Esta seguro de eliminar la tarea?')" style="display: inline;" action="eliminar-tarea.php" method="post">
                    <input type="hidden" name="id" value="<?= $tarea->id; ?>">
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>

    <h3>Tareas pendientes</h3>
    <ul>
        <?php foreach ($tareasPendintes as $tarea): ?>
            <li style="color: <?= $tarea->color; ?>;">
                <?= $tarea->titulo; ?>
                <form style="display: inline;" action="actualizar-tarea.php" method="post">
                    <input type="hidden" name="id" value="<?= $tarea->id; ?>">
                    <input type="hidden" name="completado" value="1">
                    <button type="submit">Completar</button>
                </form>
                <form onsubmit="return confirm('¿Esta seguro de eliminar la tarea?')" style="display: inline;" action="eliminar-tarea.php" method="post">
                    <input type="hidden" name="id" value="<?= $tarea->id; ?>">
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>

    <hr>
    <?php if (isset($_SESSION['errores'])) { ?>
        <div>
            <ul>
                <?php foreach ($_SESSION['errores'] as $campo => $mensaje) : ?>
                    <li style="color: #FF0000"><?= htmlspecialchars($mensaje) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php } ?>
    <form action="crear-tarea.php" method="POST">
        <h2>Registro de una nueva tarea</h2>
        <input type="text" name="titulo" placeholder="Titulo de tarea" required>
        <input type="color" name="color" required>
        <button type="submit">Registrar Tarea</button>
    </form>

</body>

</html>