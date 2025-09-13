<?php
Class Validador {
    private array $reglas = [];
    private array $errores = [];
    private array $mensajes = [];

    // public function __construct(
    //     private array $reglas = [],
    //     private array $errores = [],
    //     private array $mensajes = []
    // ) {}

    public function setReglas(array $reglas, array $mensajes)
    {
        $this->reglas = $reglas;
        $this->mensajes = $mensajes;
        return $this;
    }

    public function validar(array $datos) : bool
    {
        $this->errores = [];
        foreach ($this->reglas as $campo => $reglas) {
            $valor = $datos[$campo] ?? null;
            $reglas = explode('|', $reglas);
            foreach ($reglas as $regla) {
                // $this->aplicarRegla($regla, $valor, $campo);
                if ($this->aplicarRegla($regla, $valor, $campo) == false) {
                    break;
                }
            }
        }
        if(empty($this->errores)) {
            $_SESSION['errores'] = null;
            return true;
        } else {
            return false;
        }
    }

    public function aplicarRegla($regla, $valor, $campo) : bool
    {
        [$nombreRegla, $parametros] = array_pad(explode(':', $regla, 2), 2, null);
        if (method_exists($this, $nombreRegla)) {
            return call_user_func_array([$this, $nombreRegla], [$valor, $campo, $parametros]);
        }
    }

    public function agregarError($campo, $mensaje): void
    {
        $this->errores[$campo] = $mensaje;
    }

    public function getErrores() : array
    {
        return $this->errores;
    }

    public function required($valor, $campo) : bool
    {
        if (empty($valor) && $valor != '0'){
            $this->agregarError($campo, $this->mensajes[$campo]['required']);
            return false;
        }
        return true;
    }

    public function min($valor, $campo, $valorMinimo): bool
    {
        if (strlen($valor) < $valorMinimo) {
            $this->agregarError($campo, $this->mensajes[$campo]['min']);
            return false;
        }
        return true;
    }

    public function color_hexadecimal($valor, $campo) : bool
    {
        if(!preg_match('/^#[a-f0-9]{6}$/i', $valor)) {
            $this->agregarError($campo, $this->mensajes[$campo]['color_hexadecimal']);
            return false;
        }
        return true;
    }
}