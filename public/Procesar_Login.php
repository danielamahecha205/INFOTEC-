<?php
session_start();
include '../config/conexion.php';

// Obtener datos del formulario
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

// Consulta segura
$sql = "SELECT * FROM usuarios WHERE usuario = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("s", $usuario);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    if (password_verify($contraseña, $fila['contraseña'])) {
        // Guardar datos en la sesión
        $_SESSION['usuario'] = $fila['usuario'];
        $_SESSION['id'] = $fila['id'];
        header("Location: principal.php"); // Redirigir a la página principal
        exit();
    } else {
        echo "Contraseña incorrecta.";
    }
} else {
    echo "Usuario no encontrado.";
}

$stmt->close();
$conexion->close();
?>
