<?php
//CREACION DE INTERFAZ QUE DECLARE METODOS QUE DEBEN SER IMPLEMENTADOS POR LOS EMPLEADOS
interface IEmpleado{
    //METODO TAREA
    public function tarea();
    //METODO CALCULAR SALARIO
    public function calcularSalarioNeto();
}