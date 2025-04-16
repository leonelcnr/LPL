<?php
include "conexion-db.php";

// Obtener el cuerpo de la petición (los datos JSON)
$json_data = file_get_contents('php://input');

// Decodificar el JSON a un objeto o array de PHP
$data = json_decode($json_data, true); // 'true' para obtener un array asociativo


$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['nombre']) && isset($data['apellido']) && isset($data['email'])) {
    $nombre = $data['nombre'];
    $apellido = $data['apellido'];
    $email = $data['email'];
    // $confirmarEmail = $data['confirmar-email'];

    // if ($email !== $confirmarEmail) {
    //     echo "Los correos no coinciden";
    // } else {
    $sql = "INSERT INTO `datos-formulario`(`nombre`, `apellido`, `correo`) VALUES ('$nombre','$apellido','$email')";
    if ($conn->query($sql) === TRUE){
        echo "Formulario procesado correctamente";
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>