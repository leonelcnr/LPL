<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pag-webs";

try {
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        throw new Exception("Error de conexión a la base de datos: " . $conn->connect_error);
    }
    else{
        echo "Conexión exitosa";
    }
} catch (Exception $e) {
    // Registrar el error
    error_log($e->getMessage());
    // Mostrar un mensaje amigable al usuario
    echo "Lo sentimos, hubo un problema al conectar con la base de datos.";
    exit();
}
?>