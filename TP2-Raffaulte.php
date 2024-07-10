<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 2 - PHP - Raffaulte</title>
</head>
<body>
    <h1>LISTA DE EMPLEADOS</h1>
    <?php
    //SE INCLUYEN LOS NUEVOS ARCHIVOS
    include 'IEmpleado.php';
    include 'Empleado.php';
    include 'Desarrollador.php';
    include 'Diseñador.php';

    //SE LLAMAN A LOS NUEVOS
    $empleado1 = new Desarrollador("Carlos Lopez", 4800, "Java");
    $empleado2 = new Diseñador("Ana Pérez", 3300, "Photoshop");

    //SE MODIFICA EL HTML
    echo "<div>";
    echo "<h2>Diseñador</h2>";
    echo "Nombre: " . $empleado2->getNombre() . "<br>";
    echo "Herramienta: " . $empleado2->getHerramienta() . "<br>";
    echo "Tarea: " . $empleado2->tarea() . "<br>";
    echo "Sueldo Bruto: $" . number_format($empleado2->getSueldo(), 2) . "<br>";
    echo "Salario Neto: $" . number_format($empleado2->calcularSalarioNeto(), 2) . "<br>";

    echo "<div>";
    echo "<h2>Desarrollador</h2>";
    echo "Nombre: " . $empleado1->getNombre() . "<br>";
    echo "Lenguaje: " . $empleado1->getLenguaje() . "<br>";
    echo "Tarea: " . $empleado1->tarea() . "<br>";
    echo "Sueldo Bruto: $" . number_format($empleado1->getSueldo(), 2) . "<br>";
    echo "Salario Neto: $" . number_format($empleado1->calcularSalarioNeto(), 2) . "<br>";
    echo "<div>";
    ?>
</body>
</html>