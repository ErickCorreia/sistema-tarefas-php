<?php
require 'conexao.php'; require 'layout.php';
if (!isset($_SESSION["usuario_id"])) { header("Location: login.php"); exit; }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $pdo->prepare("INSERT INTO tarefas (titulo, descricao, usuario_id) VALUES (?, ?, ?)");
    $stmt->execute([$_POST['titulo'], $_POST['descricao'], $_SESSION["usuario_id"]]);
    header("Location: index.php"); exit;
}
topo("Nova Tarefa");
?>
<div class="max-w-xl mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Adicionar Nova Tarefa</h2>
    <form method="POST">
        <div class="mb-4">
            <label class="block mb-1">Título (Obrigatório)</label>
            <input type="text" name="titulo" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1">Descrição</label>
            <textarea name="descricao" class="w-full border p-2 rounded h-32"></textarea>
        </div>
        <div class="flex justify-between">
            <a href="index.php" class="text-gray-500 pt-2">Cancelar</a>
            <button type="submit" class="bg-indigo-600 text-white px-6 py-2 rounded font-bold">Salvar Tarefa</button>
        </div>
    </form>
</div>
<?php rodape(); ?>