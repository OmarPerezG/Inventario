<?php
$host = 'localhost';
$db = 'inventario_ti';
$user = 'root';
$pass = 'Julio291987*';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>