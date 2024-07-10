Raffaulte Adriano

Trabajo Práctico N°2
La función de la aplicación es mejorar la primera parte de ésta, implementando una interfaz para definir un contrato común para todas las clases de empleados
COMMITS:
Los primeros commits fueron basicamente crear los archivos necesarios para seguir con la actividad
Al modificar el main con personalizacion en html surgieron los problemas de que no reconocía la clase "Lenguaje", esto fue porque no había declarado el public function en el archivo de desarrollador
A pesar de eso seguia sin funcionar y vi que en el archivo Empleado había olvidado definir las propiedades de las variables
y declarar los métodos abstractos de tarea() y calcularSalarioNeto()

Luego de eso funcionó el programa correctamente

Trabajo Práctico N°1

Buenas profesor, disculpe que haya tenido que crear un nuevo repositorio

La función de la aplicación es poder ver los empleados con sus respectiva enumeración,nombres y salario (con descuento)

Para que así el programa realice un cálculo de su sueldo añadiéndole un porcentaje de descuento fijo del 10% a los empleados
Dependiendo de si se es desarrollador: el descuento es el mismo, si se es diseñador el descuento es del 15%

COMMITS:
Desde el primer Commit al cuarto no me funcionaba el código e intenté esos cambios que publiqué

En el quinto Commit entendí que la falla era que en el return de calcular salario debe llamar al método "calcular_Salario" mediante "return::parent"
