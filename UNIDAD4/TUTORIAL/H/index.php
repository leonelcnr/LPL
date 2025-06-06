<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO H</title>
</head>

<body>
    <section>
        <article>
            <H1>Arreglo aleatorio</H1>
            <?php
            $arreglo = array();
            for ($i = 0; $i < 10; $i++) {
                $arreglo[$i] = rand(1, 100);
            }

            echo "<p> Arreglo: "; print_r($arreglo);
            echo "<p> Cantidad de elementos:".count($arreglo);
            echo "<p> Suma de elementos: ".array_sum($arreglo);
            echo "<p> Primer elemento: ".array_shift($arreglo);
            echo "<p> Ultimo elemento: ".array_pop($arreglo);
            echo "<p> Valor maximo: ".max($arreglo);
            echo "<p> Valor minimo: ".min($arreglo);
            echo "<p> Valor promedio: ".array_sum($arreglo)/count($arreglo);
            echo "<p> Esta el numero 5? ".(in_array(5, $arreglo) ? "si": "no");
            echo "<p> Arreglo ordenado: "; sort($arreglo); print_r($arreglo);
            echo "<hr>";
            // print_r($_COOKIE);
            
            
            ?>
        </article>
    </section>
</body>

</html>