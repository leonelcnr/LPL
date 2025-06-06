<?php

use function PHPSTORM_META\type;

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    if (isset($_POST['reiniciar']) && $_POST['reiniciar'] == 'reinicio' && isset($_SESSION['palabras'])) {
        session_destroy();
        $_SESSION['palabras'] = array();
    }

    if (isset($_POST['palabras']) && $_POST['palabras'] != '') {

        if (!isset($_SESSION['palabras'])) {
            $_SESSION['palabras'] = array();
        }
        array_push($_SESSION['palabras'], $_POST['palabras']);
    }
    ?>
    <section>
        <article>
            <form action="index.php" method="post">
                <h1>INGRESA PALABRAS</h1>
                <input type="text" name="palabras">
                <div>
                    <button type="submit">Enviar</button>
                    <button type="submit" name="reiniciar" value="reinicio">Reiniciar</button>
                </div>
            </form>

            <div id="palabrasIngresadas">
                <?php
                if (isset($_SESSION['palabras'])) {
                    echo "<table>";
                    echo "<thead>";
                    echo "<th>Palabras</th>";
                    echo "<th>Longitud</th>";
                    echo "</thead>";
                    echo "<tbody>";
                    foreach ($_SESSION['palabras'] as $palabra) {
                        echo "<tr>";
                        $palabra = trim($palabra); // Elimina espacios en blanco al inicio y al final de la palabra
                        echo "<td>" . $palabra . "</td>";
                        echo "<td>" . strlen($palabra) . "</td>";
                        echo "</tr>";
                    }
                    echo "</tbody>";
                    echo "</table>";
                };
                ?>
            </div>

        </article>
    </section>
</body>

</html>