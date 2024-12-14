<?php
session_start();
include '../config/conexion.php';

// Verificar si el usuario inició sesión
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}

echo "<h2>Bienvenido, " . htmlspecialchars($_SESSION['usuario']) . "</h2>";

// Obtener información de la base de datos
$sql = "SELECT * FROM informacion"; // Cambia "informacion" por tu tabla
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
            </tr>";
    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>
                <td>" . htmlspecialchars($fila['id']) . "</td>
                <td>" . htmlspecialchars($fila['nombre']) . "</td>
                <td>" . htmlspecialchars($fila['descripcion']) . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No hay datos disponibles.";
}

$conexion->close();
?>

<a href="cerrar_sesion.php">Cerrar Sesión</a>
