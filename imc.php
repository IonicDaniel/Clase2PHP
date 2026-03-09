<?php

declare(strict_types = 1);

require_once 'Utilidades/Utilidades.php';

use Utilidades\Util;

function main() : void {
    Util::encabezado('calculadora indece de masa corporal', 50);
    $peso = Util::leerNumerosDecimales('Ingresa peso (kg)');
    $altura = Util::leerNumerosDecimales('Ingresa tu altura (mts)');
    $imc = calcularIMC($peso, $altura);
    Util::linea(50);
    $msj = 'El indice de masa corporal es';
    $imc = round($imc,2);
    echo "$msj $imc \n";
    Util::linea(50);
    }

function calcularIMC(float $peso, float $altura) :float {
    return $peso / pow($altura, 2);
}

main();