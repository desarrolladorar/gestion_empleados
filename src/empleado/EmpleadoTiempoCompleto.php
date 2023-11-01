<?php

namespace Empleado;

class EmpleadoTiempoCompleto extends Empleado {
    public function __construct($nombre, $salario) {
        parent::__construct($nombre);
        $this->salario = $salario;
    }

    public function calcularSalario() {
        return $this->salario;
    }
}
