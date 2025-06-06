<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    $contraseniasDiferentes = false;
    if (isset($_POST) && isset($_POST['registrarse']) && $_POST['registrarse'] == 1) {
        if ($_POST['usuario'] != '' && $_POST['contrasenia'] != '') {
            if ($_POST['contrasenia'] == $_POST['confirm-contrasenia']) {
                $usuario = $_POST['usuario'];
                $password = $_POST['contrasenia'];
                setcookie('usuarioActual', $usuario, time() + 3600);
                setcookie('usuario-' . $usuario, $usuario, time() + 3600);
                setcookie('password-' . $usuario, $password, time() + 3600);
                header('Location: ingreso.php');
            } else {
                $contraseniasDiferentes = true;
            }
        }
    }
    ?>
    <section>
        <article>
            <form action="" method="post">
                <header>
                    <h1>REGISTRATE</h1>
                </header>
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" value="<?php if (isset($_POST) && isset($_POST['usuario'])) {
                                                                echo $_POST['usuario'];
                                                            } ?>">
                <label for="contrasenia">Contraseña</label>
                <input type="password" name="contrasenia" value="<?php if (isset($_POST) && isset($_POST['contrasenia'])) {
                                                                        echo $_POST['contrasenia'];
                                                                    } ?>">
                <label for="confirmar-contrasenia">Confirmar Contraseña</label>
                <input type="password" name="confirm-contrasenia" <?php if (isset($contraseniasDiferentes)) {
                                                                        echo "autofocus";
                                                                    } ?>>
                <?php if (isset($contraseniasDiferentes) && $contraseniasDiferentes == true) {
                    echo "<p>Las contraseñas no coinciden</p>";
                } ?>
                <button type="submit" value="1" name="registrarse">Registrarse</button>
                <p>¿Ya tienes una cuenta? <a href="ingreso.php">Inicia sesion</a></p>
            </form>
        </article>
    </section>
</body>

</html>