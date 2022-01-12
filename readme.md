Antecedentes
Este ejercicio puede ser resuelto por los aspirantes que se encuentren cursando la etapa de Fortalecimiento Técnico.

Descripción
Se requiere realizar una pantalla de generación y consulta de roles de pago para el Departamento de Recursos Humanos de una empresa.

Ingreso de roles de pago 
El asistente de RH deberá escoger un empleado, el cual debe haber sido ingresado previamente.
Al escoger el empleado se deben cargar datos existentes como: Sueldo, Préstamo.
El asistente de RH podrá agregar más ingresos (los "conceptos" deben estar parametrizados) y egresos del empleado, por ejemplo: El empleado podría tener horas extras, o un préstamo.

Recordar que el descuento por Aporte al IEES es automático, Se calcula sueldo*9.35%. Finalmente, se debe calcular el valor a pagar y guardar el rol de pago: NETO A PAGAR = Sueldo + Ingresos - Descuentos.

Consulta de Roles de pago
Se deben mostrar y consultar los roles de pago de los empleados.

REQUERIMIENTOS DE VERSIONAMIENTO
Para cada una de las funcionalidades, se deben de crear dos nuevas ramas con base a la rama actual de ncandelario:
• una llamada rolpagos en la cual trabajará sobre la nueva funcionalidad
• otra llamada prod en la cual, una vez terminado el ejercicio, deberá de realizar un merge
de la rama rolpagos a la rama prod.