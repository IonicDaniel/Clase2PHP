<?php

declare(strict_types=1);

require_once 'Utilidades/Utilidades.php';

use Utilidades\Utilidades as Util;

function main(): void
{
    Util::encabezado('calculadora indece de masa corporal', 50);
    $peso = Util::leerNumerosDecimales('Ingresa peso (kg)');
    $altura = Util::leerNumerosDecimales('Ingresa tu altura (mts)');
    $imc = calcularIMC($peso, $altura);
    Util::linea(50);
    $msj = 'El indice de masa corporal es';
    $imc = round($imc, 2);
    $status = strtoupper(statusIMC($imc));
    echo "$msj $imc ($status) \n";
    Util::linea(50);
}

function calcularIMC(float $peso, float $altura): float
{
    return $peso / pow($altura, 2);
}

function statusIMC(float $imc): string
{
    if ($imc < 18.5) {
        return 'Bajo peso (-_-;) ';
    } else if ($imc >= 18.5 && $imc < 24.99) {
        return 'Peso normal (/◕ヮ◕)/ ';
    } else if ($imc >= 24.99 && $imc < 29.99) {
        return 'Sobrepeso (ーー;) ';
    } else {
        return 'Obesidad (゜o゜) ';
    }
}

main();
