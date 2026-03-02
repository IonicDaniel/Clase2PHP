<?php

namespace Utilidades;

class Util
{
   public static function linea(int $largo): void
    {
        echo str_repeat('═', $largo) . PHP_EOL;
    }

    private static function Centrar(string $texto, int $largo): string
    {
        $relleno = intval(($largo - strlen($texto)) / 2);
        $textoCentrado = str_repeat(' ', $relleno) . $texto;
        return $textoCentrado;
    }

    public static function encabezado(string $titulo, int $largo): void
    {
        self::linea($largo);
        echo self::Centrar(strtoupper($titulo), $largo) . PHP_EOL;
        self::linea($largo);
    }

    public static function leerNumeroEntero(string $msj) : int  {
        $numero = intval(readline($msj . ': ')) ;
        return $numero;
    }
}

