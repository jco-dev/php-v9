<?php

function dd(...$dato)
{
    echo '<pre>';
    return var_dump($dato);
}

function env(string $key, $default = null)
{
    if (array_key_exists($key, $_ENV)) {
        return $_ENV[$key];
    }

    $value = getenv($key);
    if ($value !== false) {
        return $value;
    }

    return $default;
}