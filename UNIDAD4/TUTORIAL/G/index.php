<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio A</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <article>
            <h1>CALCULAR NUMEROS</h1>

            <?php
                $numero1 = 3;
                $numero2 = 5;
                echo "<p> Numero 1:  ".$numero1;
                echo "<p> Numero 2:  ".$numero2;

                $suma = $numero1 + $numero2;
                $producto = $numero1 * $numero2;
                $promedio = ($numero1 + $numero2) / 2;

                echo "<p> Suma:  ".$suma;
                echo "<p> Producto:  ".$producto;
                echo "<p> Promedio:  ".$promedio;

                echo "<hr>";
                echo "EJERCICIO G";
                echo "<p>numero_a: ".$numero1;
                echo "<p> numero_b: ".$numero2;
;

                $arrayPotencias = array();

                
                for ($i = 0; $i <= $numero2; $i++) {
                    $arrayPotencias[] = $numero1 ** $i;
                }

                echo "<p> Array de potencias: ";
                print_r($arrayPotencias);
                foreach($arrayPotencias as $numero => $indice){
                    echo "<p>".$numero1."^" .$numero." = ".$indice;
                };
                echo "<hr>";
            ?>
        </article>
    </section>



</body>

</html>