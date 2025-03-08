<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit;
}
include 'conexion.php';
$sql = "SELECT * FROM equipos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
</head>
<body>
    <h2>Inventario de Equipos</h2>
    <a href="logout.php">Cerrar sesión</a><br><br>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Número de Serie</th>
            <th>Ubicación</th>
            <th>Estado</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['marca']; ?></td>
                <td><?php echo $row['modelo']; ?></td>
                <td><?php echo $row['numero_serie']; ?></td>
                <td><?php echo $row['ubicacion']; ?></td>
                <td><?php echo $row['estado']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
