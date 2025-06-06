<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 2</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <article>
            <header>
                <h1>Calendario</h1>
            </header>
            <table>
                <?php
                $dias = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado");
                echo "<tr>";
                foreach ($dias as $dia) {
                    echo "<th>" . $dia . "</th>";
                }
                echo "</tr>";

                for ($i = 1; $i <= 31; $i++) {
                    if ($i % 7 == 1) { // cada 7 elementos abre una nueva fila
                        echo "<tr>";
                        // podria agregar aca una clase a cada primer elemento
                    }
                    echo "<td>" . $i . "</td>";

                    if ($i % 7 == 0 || $i == 31) { // cada 7 elementos cierra la fila
                        echo "</tr>";
                        // podria agregar aca una clase a cada ultimo elemento
                    }
                    // decidi usar unicamente css para asignar el color
                    // con las propiedades fist-child y nth-child(7)
                }

                ?>
            </table>
        </article>
    </section>

</body>

</html>