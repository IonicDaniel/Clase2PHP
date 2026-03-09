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
    ) {}

    // Getters
    public function getCedula(): string
    {
        return $this->cedula;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getApellido(): string
    {
        return $this->apellido;
    }

    public function getEdad(): int
    {
        return $this->edad;
    }

    public function getAltura(): float
    {
        return $this->altura;
    }

    public function getMatricula(): float
    {
        return $this->matricula;
    }

    public function isSexo(): bool
    {
        return $this->sexo;
    }

    public function getTurno(): int
    {
        return $this->turno;
    }
}
