<?php

declare(strict_types = 1);

require_once 'Utilidades/Utilidades.php';

use Utilidades\Utilidades as Util;

function main(): void {
    // Definir un array indexado llamado edades
    Util::encabezado('Lista de Números', 36);
    $edades = [21,17,19,15,21,15,17,23,26,25,22,27,28,26,17,30];

    Util::linea(50);
    echo 'Cantidad de edades: ' . count($edades) . "\n";
    Util::linea(50);
    echo 'La tercera edad es: ' . $edades[2] . "\n";
    Util::linea(50);
    echo 'La quinta edad es: ' . $edades[4] . "\n";
    Util::linea(50);
    echo 'La última edad es: ' . end($edades) . "\n";
    Util::linea(50);
    array_push($edades, 24,14,12,14,19,33);
    print_r($edades);

    $porcionEdades = array_slice($edades, 5, 4);
    print_r($porcionEdades);

    Util::encabezado('ver lista de edades (for i)', 36);
    for ($i=0; $i < count($edades); $i++) { 
        echo "La edad es   $edades[$i]   Años  \n";
    } 

    Util::encabezado('ver lista de edades (foreach)', 36);
    foreach ($edades as $edad) {
        echo "La edad es   $edad   Años  \n";
    }

     Util::encabezado('edades ordenadas ascendentemente', 50);
    sort($edades);
    foreach ($edades as $edad) {
        echo "La edad es   $edad   Años  \n";
    }

     Util::encabezado('edades ordenadas descendentemente', 50);
    rsort($edades);
    foreach ($edades as $edad) {
        echo "La edad es   $edad   Años  \n";
    }
     
Util::encabezado('mostrar los mayores de edad', 50);
    $mayoresEdad = array_filter($edades, function ($edad) {
       return $edad >= 18;
});

foreach ($mayoresEdad as $edad) {
    echo "La edad es   $edad   Años  \n";
}

Util::encabezado('mostrar los menores de edad', 50);
    $menoresEdad = array_filter($edades, fn ($edad) => $edad < 18);

foreach ($menoresEdad as $edad) {
    echo "La edad es   $edad   Años  \n";
}

Util::encabezado('mostrar edades Únicas', 50);
    $edadesUnicas = array_unique($edades);
    foreach ($edadesUnicas as $edad) {
        echo "La edad es   $edad   Años  \n";
    }
    

}

main();