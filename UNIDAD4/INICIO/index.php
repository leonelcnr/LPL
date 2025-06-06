<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (!isset($_COOKIE['usuarioActual'])) {
        header('Location: ingreso.php');
    }
    $primeraVez = true;
    $usuarioActual = $_COOKIE['usuarioActual'];

    if (isset($_COOKIE['ultimoAcceso-' . $usuarioActual])) { //SI YA ENTRO ANTES ES PQ TIENE ULTIMO ACCESO
        $primeraVez = false;
        $contador = $_COOKIE['contadorVisitas-' . $usuarioActual] + 1;
        setcookie('contadorVisitas-' . $usuarioActual, $contador, time() + 3600);
    }
    if ($primeraVez) {
        setcookie('contadorVisitas-' . $usuarioActual, 1, time() + 3600);
    }

    setcookie('ultimoAcceso-' . $usuarioActual, date('d-m-Y H:i:s'), time() + 3600);
    ?>
    <section>
        <article>
            <h1>Bienvenido <span> <?php
                                    if (isset($_COOKIE['usuarioActual'])) {
                                        echo $_COOKIE['usuarioActual'];
                                    } ?> </span></h1>
            <p> <?php if (isset($primeraVez) && $primeraVez == false) {
                    echo "Ultimo Acceso " . $_COOKIE['ultimoAcceso-' . $_COOKIE['usuarioActual']];
                    echo "<br>";
                    echo "Cantidad Visitas " . $_COOKIE['contadorVisitas-' . $_COOKIE['usuarioActual']];
                } else {
                    echo "Es tu primera vez";
                } ?> </p>
        </article>
    </section>
</body>

</html>