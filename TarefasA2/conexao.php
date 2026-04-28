<?php
$host = "localhost";
$db   = "tarefas";
$user = "root";
$pass = ""; // No XAMPP/WAMP geralmente é vazio

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro ao conectar: " . $e->getMessage());
}
?>