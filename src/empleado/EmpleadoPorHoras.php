<?php

namespace Empleado;

class EmpleadoPorHoras extends Empleado {
    protected $horasTrabajadas;
    protected $tarifaPorHora;

    public function __construct($nombre, $horasTrabajadas, $tarifaPorHora) {
        parent::__construct($nombre);
        $this->horasTrabajadas = $horasTrabajadas;
        $this->tarifaPorHora = $tarifaPorHora;
    }

    public function calcularSalario() {
        return $this->horasTrabajadas * $this->tarifaPorHora;
    }
}
