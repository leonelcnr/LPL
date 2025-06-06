<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO I</title>
</head>

<body>
    <?php 
    include_once "NumerosComplejos.class.php";
    include_once "Calculadora.class.php";
    $num1 = new NumerosComplejos(1,2);
    $num2 = new NumerosComplejos(3,4);

    $calculadora = new Calculadora($num1, $num2);
    $calculadora->mostrarNumeros();
    echo "<br>";
    $calculadora->modulo();
    echo "<br>";
    $calculadora-> suma();
    echo "<br>";
    $calculadora-> resta();
    echo "<br>";
    
    // $num1->mostrarNumero();
    
    ?>
</body>

</html>