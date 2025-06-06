<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresa</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    $credencialesIncorrectas = false;

    // Verificar si el formulario fue enviado y el botón 'ingresar' fue presionado.
    // Usar filter_input para obtener y validar las variables POST es una buena práctica.
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ingresar'])) {
        $usuario = isset($_POST['usuario']) ? htmlspecialchars($_POST['usuario'], ENT_QUOTES, 'UTF-8') : null;
        $password = isset($_POST['password']) ? htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8') : null;

        // Usar !empty() es más conciso que != '' y también verifica que no sea null.
        if (!empty($usuario) && !empty($password)) {
            $cookieUsuarioNombre = 'usuario-' . $usuario;
            $cookiePasswordNombre = 'password-' . $usuario; // Asumo que la contraseña también se guarda con el nombre de usuario.

            if (isset($_COOKIE[$cookieUsuarioNombre]) && isset($_COOKIE[$cookiePasswordNombre])) {
                $usuarioGuardado = $_COOKIE[$cookieUsuarioNombre];
                $passwordGuardado = $_COOKIE[$cookiePasswordNombre];

                // Comparación directa de credenciales.
                if ($usuario === $usuarioGuardado && $password === $passwordGuardado) {
                    setcookie('usuarioActual', $usuario, time() + 3600, "/"); // Añadir path '/' para la cookie
                    header('Location: index.php');
                    exit; // Importante: terminar el script después de una redirección.
                }
            }
        }
    }
    ?>
    <section>
        <article>
            <form action="ingreso.php" method="post">
                <header>
                    <h1>INICIA SESION</h1>
                </header>
                <label for="usuario">Usuario</label>
                <input type="text" name='usuario' required value="<?php if (isset($_POST) && isset($_POST['usuario'])) {
                                                                        echo $_POST['usuario'];
                                                                    } ?>">
                <label for="password">Password</label>
                <input type="password" name='password' required value="<?php if (isset($_POST) && isset($_POST['usuario'])) {
                                                                            echo $_POST['usuario'];
                                                                        } ?>">
                <p> <?php if (isset($credencialesIncorrectas) && $credencialesIncorrectas == true) {
                        echo "Credenciales incorrectas";
                    } ?></p>
                <button type="submit" name="ingresar" value="1">Ingresar</button>
                <p>¿No tienes una cuenta? <a href="registrarse.php">Registrate</a></p>
            </form>
        </article>
    </section>
</body>

</html>

<!-- inicio de session autoprocesado y para multiples usuarios y que guarde informacion -->