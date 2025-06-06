<?php
$host = 'localhost';
$user = 'root';
$pass = ''; // coloca sua senha se tiver
$db   = 'jardineiros';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>