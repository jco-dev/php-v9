<?php
require_once 'funciones.php';
class GeneradorConsultas {

    public function __construct(
        protected $pdo
    ) {}

    public function obtrenerTodos($tabla, $clase)
    {
        $query = $this->pdo->prepare("select * from {$tabla}");
        $query->execute();

        return $query->fetchAll(PDO::FETCH_CLASS, $clase);
    }

    public function insertar(string $tabla, array $parametros)
    {
        // SQL: insert into tareas (titulo, color) values (:titulo, :color)
        // dd(array_keys($parametros));
        $columnas = implode(', ', array_keys($parametros));
        $values = ':' . implode(', :', array_keys($parametros));

        $sql = "insert into {$tabla} ({$columnas}) values({$values})";

        try {
            $query = $this->pdo->prepare($sql);
            $query->execute($parametros);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function actualizar(string $tabla, int $id, array $parametros)
    {
        // SQL: update tareas set completado=:completado, color=:color where id=:id
        $columnas = array_keys($parametros);
        $columnas = implode(', ', array_map(function ($col) {
            return "$col=:$col";
        }, $columnas));

        $sql = "update {$tabla} set {$columnas} where id=:id";

        try {
            $query = $this->pdo->prepare($sql);
            $query->execute([...$parametros, 'id' => $id]);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function eliminar(string $tabla, int $id)
    {
        // SQL: delete from tareas where id=:id
        $sql = "delete from {$tabla} where id=:id";
        try {
            $query = $this->pdo->prepare($sql);
            $query->execute(['id' => $id]);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}