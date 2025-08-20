<?php
// Constructor Property Promotion //

// 7
// class Usuario
// {
//     private string $nombre;
//     private string $email;
//     private int $edad;

//     public function __construct(string $nombre, string $email, int $edad)
//     {
//         $this->nombre = $nombre;
//         $this->email = $email;
//         $this->edad = $edad;
//     }

//     public function getNombre(): string
//     {
//         return $this->nombre;
//     }
// }

// $usuario = new Usuario("Juan", "juan@gmail.com", 25);
// echo $usuario->getNombre();

// 8
class Usuario
{
    public function __construct(
        private string $nombre,
        private string $email,
        private int $edad,
    ) {}

    public function getNombre(): string
    {
        return $this->nombre;
    }
}

$usuario = new Usuario("Juan Carlos", "juan@gmail.com", 25);
echo $usuario->getNombre();
