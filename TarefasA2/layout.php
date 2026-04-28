<?php
session_start();
function topo($titulo) {
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?php echo $titulo; ?> - Sistema</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <?php if (isset($_SESSION["usuario_id"])): ?>
    <nav class="bg-indigo-600 p-4 text-white shadow-md mb-6">
        <div class="container mx-auto flex justify-between items-center">
            <a href="index.php" class="font-bold text-lg">Gerenciador de Tarefas</a>
            <div>
                <span class="mr-4">Usuário: <strong><?php echo $_SESSION["usuario"]; ?></strong></span>
                <a href="logout.php" class="bg-indigo-800 hover:bg-red-500 px-3 py-1 rounded transition">Sair</a>
            </div>
        </div>
    </nav>
    <?php endif; ?>
    <div class="container mx-auto px-4">
<?php } 

function rodape() {
    echo '</div></body></html>';
}
?>