<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 2 - PHP - Raffaulte</title>
</head>
<body>
    <h1>POO</h1>
    <?php
        class Empleado {
            private $nombre;
            private $sueldo;

            public function __construct($nombre, $sueldo) {
                $this->nombre = $nombre;
                $this->sueldo = $sueldo;
            }

            public function Nombre() {
                return $this->nombre;
            }

            public function Sueldo() {
                return $this->sueldo;
            }

            public function calcular_Salario() {
                $salarioNeto = $this->sueldo * 0.9;
                return $salarioNeto;
            }
        }

        class Desarrollador extends Empleado {
            public function calcular_Salario() {
                return parent::calcular_Salario();
            }
        }

        class Diseñador extends Empleado {
            public function calcular_Salario() {
                $salarioNeto = $this->Sueldo() * 0.85;
                return $salarioNeto;
            }
        }

        $empleado1 = new Desarrollador("Adriano", 1500);
        $empleado2 = new Diseñador("Valentin", 1500);

        echo "Empleado 1 - Nombre: " . $empleado1->Nombre() . ", Salario Neto: $" . $empleado1->calcular_Salario() . "<br>";
        echo "Empleado 2 - Nombre: " . $empleado2->Nombre() . ", Salario Neto: $" . $empleado2->calcular_Salario() . "<br>";
    ?>
</body>
</html>