<?php

declare(strict_types=1);

require_once 'Utilidades/Utilidades.php';

use Utilidades\Utilidades as Util;
use Utilidades\Alumno as Alumno;

function main(): void
{
    Util::encabezado('Registro de Alumnos', 45);
    Alumno $alumno = new Alumno(
        '26.144.789',
        'Maritza',
        'lopez',
        23,
        1.74,
        1256.66,
        true,
        1
    );
    $nombre = Util::leerTexto('Ingresa tu nombre');
    $apellido = Util::leerTexto('Ingresa tu apellido');
    $email = Util::leerTexto('Ingresa tu correo electrónico');
    $contraseña = Util::leerTexto('Ingresa tu contraseña');
    $confirmarContraseña = Util::leerTexto('Confirma tu contraseña');

    if ($contraseña !== $confirmarContraseña) {
        echo "Las contraseñas no coinciden. Por favor, inténtalo de nuevo.\n";
        return;
    }

    // Aquí podrías agregar lógica para guardar el usuario en una base de datos o archivo
    echo "Registro exitoso para $nombre $apellido con el correo $email.\n";
}

main();