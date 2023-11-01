document.getElementById('nuevoEmpleadoForm').addEventListener('submit', function(event) {
    event.preventDefault();

    var nombre = document.getElementById('nombre').value;
    var tipoEmpleado = document.getElementById('tipoEmpleado').value;
    var salario = parseFloat(document.getElementById('salario').value);

    fetch('procesar.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: 'nombre=' + nombre + '&tipoEmpleado=' + tipoEmpleado + '&salario=' + salario
    })
    .then(response => response.json())
    .then(data => {
        var infoEmpleadosDiv = document.getElementById('infoEmpleados'); // Seleccionamos el div por su ID

        var nuevoEmpleadoInfo = document.createElement('p');
        nuevoEmpleadoInfo.innerHTML = 'Salario de ' + data.nombre + ': $' + data.salario;

        if (tipoEmpleado === 'porHoras') {
            nuevoEmpleadoInfo.classList.add('salario-por-horas'); // Añadimos la clase para empleados por horas
        }

        infoEmpleadosDiv.appendChild(nuevoEmpleadoInfo);
    })
    .catch(error => console.error('Error:', error));
});
