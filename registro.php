<?php

declare(strict_types = 1);

require_once 'Utilidades/Utilidades.php';
require_once 'Utilidades/Alumno.php';

use Utilidades\Utilidades as Util;
use Utilidades\Alumno;

function main(): void
{
    Util::encabezado('Registro de Alumnos', 45);
    $alumno = new Alumno(
        '26.144.789',
        'Maritza',
        'lopez',
        23,
        1.74,
        1256.66,
        true,
        1
    );
    echo 'Generando Alumno...' . PHP_EOL;
    verDatosAlumno($alumno);
}

function verDatosAlumno(Alumno $alumno): void
{
    Util::encabezado('Datos del Alumno', 45);
    echo 'Cédula: ' . $alumno->getCedula() . PHP_EOL;
    $nombreCompleto = $alumno->getNombre() . ' ' . $alumno->getApellido();
    echo 'Nombre Completo: ' . strtoupper($nombreCompleto) . PHP_EOL;
    echo 'Edad: ' . $alumno->getEdad() . ' años' . PHP_EOL;
    echo 'Altura: ' . $alumno->getAltura() . ' metros' . PHP_EOL;
    $matricula = number_format($alumno->getMatricula(), 2, ',', '.');
    echo "Costo de Matrícula es $matricula \n";
    $sexo = obtenerSexo($alumno->getSexo());
    echo "Sexo: $sexo \n";
    $turno = obtenerTurno($alumno->getTurno());
    echo "Turno: $turno \n";
    Util::linea(45);
}

function obtenerSexo(bool $sexo): string {
    /*if ($sexo) {
        return 'Femenino (♀)';
    } else {
        return 'Masculino (♂)';
    }*/
    return $sexo ? 'Femenino ♀' : 'Masculino ♂';
}

function obtenerTurno(int $turno) : string {
    return match ($turno) {
        1 => 'Mañana (☀) ',
        2 => 'Tarde (☁) ',
        3 => 'Noche (☾) ',
        default => 'No Tiene Turno (❌) ',
    };
}

main();