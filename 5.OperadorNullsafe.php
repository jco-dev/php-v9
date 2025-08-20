<?php
// Nullsafe Operator //

// 7

class Usuario
{
    public function __construct(
        public ?Perfil $perfil = null
    ) {}
}

class Perfil
{
    public function __construct(
        public ?string $avatar = null
    ) {}
}

$usuario = new Usuario();
// $usuario->perfil;

// if($usaurio->perfil !== null)
// {
//     $avatar = $usaurio->perfil->avatar;
// }else{
//     $avatar = null;
//     echo "Avatar del usuario es null";
// }

// 8

$avatar = $usuario->perfil?->avatar;
//echo $avatar?? "No hay avatar";

$usuarioConPerfil = new Usuario(new Perfil("avatar.jpg"));
echo $usuarioConPerfil->perfil?->avatar;
