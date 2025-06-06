<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO C</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    for ($i = 1 ; $i <= 10 ; $i++){
        echo "TABLA DEL ".$i;
        echo '<div class="tabla">';
        for ($j = 1 ; $j <= 10 ; $j++){
            echo "<div>";
            echo $j;
            echo "</div>";
            echo "<div>";
            $multiplicacion = $j*$i;
            echo $multiplicacion;
            echo "</div>";
        }
        echo '</div>';
    }

    ?>
</body>

</html>