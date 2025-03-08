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

<a href="logout.php">Cerrar sesión</a>
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