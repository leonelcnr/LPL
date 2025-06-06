<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    srand((double)microtime()* 1000000);
    $a = rand( 0,3);
    $b = rand( 0,3);
    ($a == $b)  ?($mensaje = "$a = $b"):($mensaje = "$a != $b");
    echo $mensaje;
    echo "<br>";

    ?>

</body>

</html>

<!-- RAND DA NUMEROS ALEATORIOS ENTRE LOS VALORES Q SE PASEN COMO PARAMETROS -->
<!-- LOS MISMOS INCLUSIVES -->


<!-- SRAND() es un generador que requiere una semilla -->
<!-- Si se utiliza siempre la misma semilla siempre generara el mismo numero aleatorio -->
<!-- UTIL PARA PRUEBAS -->