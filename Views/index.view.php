<?php require 'parciales/header.php'; ?>
    <h1>Listado de Tareas</h1>

    <h3>Tareas completadas</h3>
    <ul>
        <?php foreach ($tareasCompletadas as $tarea): ?>
            <li style="color: <?= $tarea->color; ?>;">
                <?= $tarea->titulo; ?>
                <form style="display: inline;" action="tareas/actualizar" method="post">
                    <input type="hidden" name="id" value="<?= $tarea->id; ?>">
                    <input type="hidden" name="completado" value="0">
                    <button type="submit">Desmarcar</button>
                </form>
                <form onsubmit="return confirm('¿Esta seguro de eliminar la tarea?')" style="display: inline;" action="tareas/eliminar" method="post">
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
                <form style="display: inline;" action="tareas/actualizar" method="post">
                    <input type="hidden" name="id" value="<?= $tarea->id; ?>">
                    <input type="hidden" name="completado" value="1">
                    <button type="submit">Completar</button>
                </form>
                <form onsubmit="return confirm('¿Esta seguro de eliminar la tarea?')" style="display: inline;" action="tareas/eliminar" method="post">
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
    <form action="tareas/crear" method="POST">
        <h2>Registro de una nueva tarea</h2>
        <input type="text" name="titulo" placeholder="Titulo de tarea" required>
        <input type="color" name="color" required>
        <button type="submit">Registrar Tarea</button>
    </form>

<?php require 'parciales/footer.php'; ?>