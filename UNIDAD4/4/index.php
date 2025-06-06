<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 4</title>
</head>

<body>
    <section>
        <article>
            <h1>EJERCICIO 4</h1>
            <?php
            //  DEFINO ARRAY DE EMPLEADOS Y ARRAY DE PORCENTAJES 
            include_once "Empleado.class.php";
            include_once "Emprensa.class.php";

            $empleados = array();

            $empleados[] = new Empleado("Juan", 200000, 10);
            $empleados[] = new Empleado("Pedro", 300000, 15);
            $empleados[] = new Empleado("Maria", 400000, 20);
            $empleados[] = new Empleado("Jose", 500000, 25);
            $empleados[] = new Empleado("Ana", 600000, 30);
            $empleados[] = new Empleado("Luis", 700000, 35);
            $empleados[] = new Empleado("Carlos", 800000, 40);
            $empleados[] = new Empleado("Sofia", 900000, 45);
            $empleados[] = new Empleado("Pablo", 1000000, 50);


            $emprensa = new Emprensa($empleados);

            $emprensa->mostrarEmpleados();
            $emprensa->aumentoSalario();

            echo "<h1> AUMENTO DE SALARIO </h1>";

            $emprensa->mostrarEmpleados();
            ?>
        </article>
    </section>
</body>

</html>