<?php
require 'autoload.php';

use Empleado\EmpleadoTiempoCompleto;
use Empleado\EmpleadoPorHoras;

$empleadoTiempoCompleto = new EmpleadoTiempoCompleto("Juan", 3000);
$empleadoPorHoras = new EmpleadoPorHoras("María", 40, 15);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Gestión de Empleados</title>
    <link rel="stylesheet" href="css/bulma.css"> 
    <style>
        .salario-por-horas {
            background-color: blue;
            color: white;
        }
    </style>
</head>
<body>
    <section class="section">
        <div class="container">

            <div class="box" id="infoEmpleados">
                <h1 class="title">Información de Empleados</h1>
                <p>Salario de <?php echo $empleadoTiempoCompleto->getNombre(); ?>: $<?php echo $empleadoTiempoCompleto->calcularSalario(); ?></p>
                <p class="salario-por-horas">Salario de <?php echo $empleadoPorHoras->getNombre(); ?>: $<?php echo $empleadoPorHoras->calcularSalario(); ?></p>
            </div>

            <div class="box">
                <h2 class="title">Añadir Nuevo Empleado</h2>
                <form id="nuevoEmpleadoForm">
                    <div class="field">
                        <label class="label">Nombre</label>
                        <div class="control">
                            <input class="input" type="text" id="nombre" name="nombre" required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Tipo de Empleado</label>
                        <div class="control">
                            <div class="select">
                                <select id="tipoEmpleado" name="tipoEmpleado">
                                    <option value="tiempoCompleto">Tiempo Completo</option>
                                    <option value="porHoras">Por Horas</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Salario</label>
                        <div class="control">
                            <input class="input" type="number" id="salario" name="salario" step="0.01" required>
                        </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link" type="submit">Añadir</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <script src="js/app.js"></script>
    </section>
</body>
</html>
