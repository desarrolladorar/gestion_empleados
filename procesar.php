<?php

require_once 'autoload.php'; // Asegúrate de incluir el archivo de autoloading

use Empleado\EmpleadoTiempoCompleto;
use Empleado\EmpleadoPorHoras;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $tipoEmpleado = $_POST['tipoEmpleado'];
    $salario = floatval($_POST['salario']);

    if ($tipoEmpleado === 'tiempoCompleto') {
        $nuevoEmpleado = new EmpleadoTiempoCompleto($nombre, $salario);
    } else if ($tipoEmpleado === 'porHoras') {
        $nuevoEmpleado = new EmpleadoPorHoras($nombre, 40, $salario); // Por ejemplo, asumimos 40 horas trabajadas
    }

    $resultado = [
        'nombre' => $nuevoEmpleado->getNombre(),
        'salario' => $nuevoEmpleado->calcularSalario()
    ];

    echo json_encode($resultado);
} else {
    echo "No se recibieron datos.";
}
?>
