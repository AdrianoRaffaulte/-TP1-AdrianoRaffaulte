<?php
//CONVERSION DE LA CLASE EMPLEADO EN UNA CLASE ABSTRACTA E IMPLEMENTACION A LA INTERFAZ IEMPLEADO A LA CLASE EMPLEADO
abstract class Empleado implements IEmpleado {
    //DEFINIR LAS PROPIEDADES
    protected $nombre;
    protected $sueldo;

    public function __construct($nombre, $sueldo){
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    public function getNombre() {
        return $this->nombre;
    }
    
    public function getSueldo() {
        return $this->sueldo;
    }

    //DECLARAR LOS METODOS ABSTRACTOS
    abstract public function tarea();
    abstract public function calcularSalarioNeto();
}
?>