<?php
//CREACION DE CLASE DISEÑADOR QUE SE IMPLEMENTARA A LA INTERFAZ IEMPLEADO
class Diseñador extends Empleado{
    private $herramienta;

    public function __construct($nombre, $sueldo, $herramienta){
        parent::__construct($nombre, $sueldo);
        $this->herramienta = $herramienta;
    }
    //IMPLEMENTACION DE METODO TAREA Y CALCULAR SALARIO
    public function tarea(){
        return "El diseñador " . $this->nombre . " está diseñando usando " . $this->herramienta;
    }
    public function calcularSalarioNeto(){
        return $this->sueldo * 0.85;
    }
    public function getHerramienta(){
        return $this->herramienta;
    }
}
?>