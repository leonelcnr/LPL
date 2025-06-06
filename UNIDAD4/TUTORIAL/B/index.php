<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO B</title>
</head>

<body>
    <section>
        <article>
            <?php 
            $frase = "ayer hacia frio en la noche";
            echo "<p> Frase: ".$frase;
            echo "<p> Numero de caracteres: ".strlen($frase);
            echo "<p> Numero de caracteres: ".strtoupper($frase);
            echo "<p> Numero de caracteres: ".substr_count($frase,"a"); //ES SENSIBLE A LAS MAYUSCULAS
            echo "<p> Numero de caracteres: ".strrev($frase);
            ?>
        </article>
    </section>
</body>

</html>