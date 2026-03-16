<?php

declare(strict_types = 1); 

require_once    'Utilidades/Utilidades.php';

use Utilidades\Utilidades as Util;

function main() : void {
    Util::encabezado('sumar nÚmeros', 36);
    $numero1 = Util::leerNumeroEntero('Ingresa primer número');
    $numero2 = Util::leerNumeroEntero('Ingresa segundo número');
    $numero3 = Util::leerNumeroEntero('Ingresa tercer número');
    $numero4 = Util::leerNumeroEntero('Ingresa cuarto número');
    $numero5 = Util::leerNumeroEntero('Ingresa quinto número');
    $suma= calcularSuma($numero1, $numero2, $numero3, $numero4, $numero5);
    Util::linea(36);
    echo 'La Suma es ' . $suma . PHP_EOL;
    Util::linea(36);
}

function calcularSuma(int ...$numeros) : int {
    return array_sum($numeros);
}

main();