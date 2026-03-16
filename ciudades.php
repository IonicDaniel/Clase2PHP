<?php

declare(strict_types=1);

require_once 'Utilidades/Utilidades.php';

use Utilidades\Utilidades as Util;

const NRO_CIUDADES = 6;

function main() : void {
    //definir un array de ciudades
    $ciudades = [];
    $avisos = [
        'primera',
        'segunda',
        'tercera',
        'cuarta',
        'quinta',
        'sexta',
    ];

    Util::encabezado('Ingreso de Ciudades', 45);
    for ($i = 0; $i < NRO_CIUDADES; $i++) {
    $ciudad = Util::leerTexto('Ingresa la ' . $avisos[$i] . ' Ciudad', 'una Ciudad');
    array_push($ciudades, $ciudad);
    }
    
    Util::encabezado('Ver Ciudades', 45);
    foreach ($ciudades as $ciudad)
        $ciudad = strtoupper($ciudad);
        echo "La ciudad es: $ciudad \n";
}

main();