<?php

namespace Utilidades;

class Alumno 
{
    public function __construct(
    public string $cedula,
    public string $nombre,
    public string $apellido,
    public int $edad,
    public float $altura,
    public float $matricula,
    public bool $sexo, // true = femenino, false = masculino
    public int $turno, // 1 = mañana, 2 = tarde, 3 = noche
    ){} 
    
    
}