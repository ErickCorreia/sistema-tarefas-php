<?php
require 'conexao.php'; session_start();
if (isset($_SESSION["usuario_id"]) && isset($_GET['id'])) {
    $stmt = $pdo->prepare("UPDATE tarefas SET status='concluida' WHERE id = ? AND usuario_id = ?");
    $stmt->execute([$_GET['id'], $_SESSION["usuario_id"]]);
}
header("Location: index.php");