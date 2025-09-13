<?php
$query->actualizar('tareas', $_POST['id'], [
    'completado' => $_POST['completado']
]);

header('Location: /');