<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 3</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <article>
            <h1>EJERCICIO 3</h1>
            <?php
            $numeroAleatorio = rand(1, 10);
            echo "<table>";

            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                echo "<td> $i </td>";
                echo "<td> x </td>";
                echo "<td>$numeroAleatorio</td>";
                echo "<td> = </td>";
                echo "<td>" . $i * $numeroAleatorio . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            ?>
        </article>
    </section>
</body>

</html>