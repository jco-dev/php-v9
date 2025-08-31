<?php

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
}