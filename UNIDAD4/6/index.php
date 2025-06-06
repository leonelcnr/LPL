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

    if (isset($_POST) && isset($_POST['btnEnviar']) && $_POST['btnEnviar'] == 'enviar') {
        if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['fechaNacimiento']) && isset($_POST['sexo'])) {
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $fechaNacimiento = $_POST['fechaNacimiento'];
            $sexo = $_POST['sexo'];
            $telefono = $_POST['telefono'];
            $confirmacion = "Datos Cargados Correctamente";
        } else {
            $confirmacion = "Debe completar todos los campos";
        }
    }
    ?>
    <section>
        <article>
            <div id="avisoFlotante">
                <?php
                if (isset($confirmacion)) {
                    echo '<p>' . $confirmacion . '</p>';
                }
                ?>
            </div>
            <form action="index.php" method="post">
                <div id="divContenedor">
                    <div id="divDatosPersonales">
                        <header>
                            <h1>Datos personales</h1>
                        </header>
                        <input type="text" name="nombre" placeholder="Nombre" required>
                        <input type="text" name="apellido" placeholder="Apellido" required>
                        <div>
                            <label for="fechaNacimiento">Fecha Nacimiento</label>
                            <input type="date" name="fechaNacimiento" placeholder="fecha" max="<?php
                                                                                                $tiempoActual = new DateTime();
                                                                                                $tiempoActual->modify('-18 year');
                                                                                                echo '' . $tiempoActual->format('Y-m-d');
                                                                                                ?>" required>

                        </div>
                        <select name="sexo" id="" required>
                            <option value="">Seleccione sexo</option>
                            <option value="hombre">Hombre</option>
                            <option value="mujer">Mujer</option>
                        </select>
                        <input type="number" name="telefono" placeholder="Numero Telefono" required>
                        <input type="email" placeholder="Email" name="email" required>

                    </div>
                    <div id="divDatosDeportivos">
                        <header>
                            <h1>Datos Deportivos</h1>
                        </header>
                        <select name='tipoDeporte'>
                            <?php
                            $deportes = ['Torneo de Tenis', 'Campeonato de Ajedrez', 'Competencia escolares', 'etc'];

                            foreach ($deportes as $deporte) {
                                echo "<option value='" . $deporte . "'>" . $deporte . "</option>";
                            }
                            ?>

                        </select>
                        <input type="date" name="fechaRealizacion" required>
                        <input type="text" placeholder="Lugar" name="lugar" required>
                    </div>
                </div>
                <?php

                ?>
                <button type="submit" name="btnEnviar" value="enviar">ENVIAR</button>
            </form>
        </article>
    </section>
</body>

</html>

<!-- DONDE DEBERIA CONSISTIR LOS DATOS? -->