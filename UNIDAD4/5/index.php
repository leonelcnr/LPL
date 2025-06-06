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

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['bnEnviar']) && ($_POST['bnEnviar'] == "enviar")) {
        if (isset($_POST['alimento']) && isset($_POST['tipoBolsa'])) {
            // echo "enviado";
            include_once("alimento.class.php");
            $calculadora = new Alimento();
            $cantidad = $_POST['alimento'];
            $tipoBolsa = $_POST['tipoBolsa'];
            $dias = 30;
            $totalBolsas = $calculadora->calcularBolsas($cantidad, $tipoBolsa, $dias);
        }
    }

    ?>
    <section>
        <article>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <div>
                    <label for="mascota">Mascota</label>
                    <select name="mascota" id="">
                        <?php
                        $mascotas = ["Fox Terrier", "Labrador", "Caniche", "Chiguagua", "Etc"]; // se pueden agregar mas opciones
                        foreach ($mascotas as $mascota) {
                            echo "<option value=\"$mascota\">$mascota</option>";
                        }
                        ?>
                    </select>
                </div>
                <div>
                    <label for="alimento">Cantidad Alimento</label>
                    <input type="number" name="alimento"> <label for="alimento">Gramos</label>
                </div>
                <div>
                    <label for="tipoBolsa">Tipo Bolsa</label>
                    <select name="tipoBolsa" id="">
                        <?php
                        $bolsas = ['---', 1.5, 1, 3];
                        foreach ($bolsas as $bolsa) {
                            echo "<option value=\"$bolsa\">$bolsa</option>";
                        }
                        ?>
                    </select>
                </div>
                <div>
                    <label for="bolsas">TOTAL DE BOLSAS</label> <label for="" id="respuesta">
                        <?php
                        if (isset($totalBolsas)) {
                            echo "CANTIDAD DE BOLSAS " . $totalBolsas;
                        }
                        ?></label>
                </div>
                <button type="submit" name="bnEnviar" value="enviar">ENVIAR</button>
            </form>
        </article>
    </section>
</body>

</html>