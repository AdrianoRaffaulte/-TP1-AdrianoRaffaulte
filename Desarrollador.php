<?php
//CREACION DE CLASE DESARROLLADOR QUE SE IMPLEMENTARA A LA INTERFAZ IEMPLEADO
class Desarrollador extends Empleado{
    private $lenguaje;

    public function __construct($nombre, $sueldo, $lenguaje){
        parent::__construct($nombre, $sueldo);
        $this->lenguaje = $lenguaje;
    }
    //IMPLEMENTACION DE METODO TAREA Y CALCULAR SALARIO
    public function tarea(){
        return "El desarrollador " . $this->nombre . " está escribiendo código en " . $this->lenguaje;
    }
    public function calcularSalarioNeto(){
        return $this->sueldo * 0.9;
    }
    // METODO LENGUAJE
    public function getLenguaje(){
        return $this->lenguaje;
    }
}
?>