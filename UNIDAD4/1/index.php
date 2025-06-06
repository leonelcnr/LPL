<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 1</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <article>
            <?php 
            $rango = 1000;
            $pares = array();
            $impares = array();

            for ($i = 0; $i < $rango; $i++) {
                
                if ($i % 2 == 0) {
                    $pares[] = $i;
                }
                else {
                    $impares[] = $i;
                }
            };

            echo "Numeros pares: <br>";
            foreach ($pares as $num) {
                echo $num . " ";
            };
            echo "<hr>";

            echo "Numeros impares: <br>";
            foreach ($impares as $num) {
                echo $num. " ";
            };
            echo "<hr>";
            
            ?>
        </article>
    </section>
</body>

</html>