<?php
include_once "Usuario.class.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listas de tareas</title>
</head>

<body>
    <?php
    if (isset($_POST) && isset($_POST['ingresar']) && $_POST['ingresar'] == 'ingresar') {
        if (isset($_POST['usuario']) && !empty($_POST['usuario'])) {
            $usuario = $_POST['usuario'];

            if (!isset($_COOKIE['usuarioActual'])) {
                $usuarioObjeto = new Usuario($usuario);
                $_SESSION['usuario'] = $usuario;
                // setcookie('usuarioActual', $usuarioObjeto, time() + 3600);
            }
            // NOTAS PARA CONTINUAR CON EL EJERCICIO
            // 1. Crear un objeto de la clase Usuario
            // 2. Guardar el objeto en la sesión
            // 3. Guardar el objeto en la cookie
            // 4. Redirigir a la página de tareas
            // 5. Crear un método en la clase Usuario que devuelva el nombre del usuario

            // Probar --> guardar el objeto en la cookie y redirigi o redirigir y guardar la cookie en el objeto
            // Hay que crear el objeto cada vez que se cambia de página
            //  Hacer la clase tarea, que tendra nombreTarea, estado y descripcion y agregarlo a una li
            // 6. Crear un método en la clase Usuario que devuelva la lista de tareas
            // probar si un objeto que se baja de la cookie es igual a un objeto que se crea en la sesión

            setcookie('usuarioActual', $usuario, time() + 3600);
            setcookie('usuario' . $usuario, $usuario, time() + 3600);
            header('Location: tareas.php');
            exit();
        }
    }
    ?>
    <section>
        <article>
            <header>
                <h1>INICIO DE SESION</h1>
            </header>
            <form action="ingreso.php" method="post">
                <label for="usuario">Usuario:</label>
                <input type="text" name="usuario" id="usuario">
                <button type="submit" name="ingresar" value="ingresar">Ingresar</button>
            </form>
        </article>
    </section>
</body>

</html>