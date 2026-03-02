<?php

declare(strict_types = 1); 

require_once    'Utilidades/Utilidades.php';

use Utilidades\Util;

function main() : void {
    Util::encabezado('sumar números', 36);
    $numero1 = Util::leerNumeroEntero('Ingresa primer número');
    $numero2 = Util::leerNumeroEntero('Ingresa segundo número');
    $suma= calcularSuma($numero1, $numero2);
    Util::linea(36);
    echo 'La Suma es ' . $suma . PHP_EOL;
    Util::linea(36);
}

function calcularSuma(int $numero1, int $numero2) : int {
    return $numero1 + $numero2;
}

main();