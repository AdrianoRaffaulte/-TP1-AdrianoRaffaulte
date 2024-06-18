<!DOCTYPE html>
<html lang="en">
<head>
<!--Acá es la conexión html para cambiar el titulo-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 1 - PHP - Raffaulte</title>
</head>
<body>
<!--Acá puse el encabezado-->
    <h1>POO</h1>
    <?php
        class Empleado {
            //DEFINIR PROPIEDADES
            private $nombre;
            private $sueldo;

            // SE DEFINEN LOS MÉTODOS PÚBLICOS PARA OBTENER LOS NOMBRES Y SUELDOS
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
            // POLIMORFISMO : CALCULO DEL SALARIO CON SU RESPECTIVO PORCENTAJE - CAMBIA VALORES DEPENDIENDO EL EMPLEADO
            public function calcular_Salario() {
                $salarioNeto = $this->sueldo * 0.9;
                return $salarioNeto;
            }
        }
        //HERENCIA DE CLASES "DESARROLLADOR Y DISEÑADOR" A "EMPLEADO"
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
        //Definiendo a los empleados con sus características, en caso de añadir uno mas sería $empleado3, siendo  en este caso Desarrollador o Diseñador

        $empleado1 = new Desarrollador("Adriano", 1500);
        $empleado2 = new Diseñador("Valentin", 1500);

        //Salida en pantalla adaptando a sus nombres y salarios que hayamos ingresado
        echo "Empleado 1 - Nombre: " . $empleado1->Nombre() . ", Salario Neto: $" . $empleado1->calcular_Salario() . "<br>";
        echo "Empleado 2 - Nombre: " . $empleado2->Nombre() . ", Salario Neto: $" . $empleado2->calcular_Salario() . "<br>";
    ?>
</body>
</html>