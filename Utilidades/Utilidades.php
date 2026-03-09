<?php

namespace Utilidades;

class Utilidades
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
        while (true) {
            $numero = intval(readline($msj . ': '));
            if (filter_var($numero, FILTER_VALIDATE_INT) == true) {
                return $numero;            
            } else {
                echo 'Debe Escribir un Número Entero...' . PHP_EOL;                
            }
            
        }
    }
    public static function leerNumerosDecimales(string $msj) : float {
        while (true) {
            $numero = floatval(readline($msj . ': '));
            if (filter_var(FILTER_VALIDATE_FLOAT) == true) {
                return $numero;
            } else {
                echo 'Debe escribir un número...' . PHP_EOL;
            }
            
        }
    }
}