<?php

namespace Empleado;

abstract class Empleado {
    protected $nombre;
    protected $salario;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }

    abstract public function calcularSalario();
}
