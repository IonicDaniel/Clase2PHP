<?php

declare(strict_types=1);

require_once 'Utilidades/Utilidades.php';

use Utilidades\Utilidades as Util;

function main(): void
{
    //Definir un array asociativo empleado
    $empleado = [
        'cedula' => '24.124.755',
        'nombre' => 'Maritza',
        'apellido' => 'López',
        'edad' => '25',
        'sueldo' => '1245.66',
    ];

    Util::encabezado('Nombre completo del Empleado', 45);
    $nombreCompleto = strtoupper($empleado['nombre']) . ' ' . strtoupper($empleado['apellido']);
    echo "Nombre del Empleado: $nombreCompleto \n";
    Util::linea(50);

    Util::encabezado('datos del Empleado', 50);
    foreach ($empleado as $key => $value) {
        $key = strtoupper($key);
        echo "$key: $value \n";
    }
    Util::linea(50);
}

main();
