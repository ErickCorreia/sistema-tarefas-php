<?php
require 'conexao.php';
require 'layout.php';
if (!isset($_SESSION["usuario_id"])) { header("Location: login.php"); exit; }

$stmt = $pdo->prepare("SELECT * FROM tarefas WHERE usuario_id = ? ORDER BY id DESC");
$stmt->execute([$_SESSION["usuario_id"]]);
$tarefas = $stmt->fetchAll();

topo("Home");
?>
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold">Minhas Tarefas</h1>
    <a href="nova.php" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded">+ Nova Tarefa</a>
</div>

<div class="bg-white rounded-lg shadow overflow-hidden">
    <table class="w-full text-left">
        <thead class="bg-gray-100 border-b">
            <tr>
                <th class="p-4">Título</th>
                <th class="p-4">Status</th>
                <th class="p-4">Criado em</th>
                <th class="p-4 text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($tarefas as $t): ?>
            <tr class="border-b hover:bg-gray-50">
                <td class="p-4 font-medium"><?php echo htmlspecialchars($t['titulo']); ?></td>
                <td class="p-4">
                    <?php if($t['status'] == 'concluida'): ?>
                        <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs font-bold uppercase">concluida</span>
                    <?php else: ?>
                        <span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded text-xs font-bold uppercase">pendente</span>
                    <?php endif; ?>
                </td>
                <td class="p-4 text-gray-500"><?php echo date('d/m/Y', strtotime($t['data_criacao'])); ?></td>
                <td class="p-4 text-center">
                    <a href="concluir.php?id=<?php echo $t['id']; ?>" class="text-blue-600 hover:underline mx-1">Concluir</a>
                    <a href="editar.php?id=<?php echo $t['id']; ?>" class="text-orange-600 hover:underline mx-1">Editar</a>
                    <a href="excluir.php?id=<?php echo $t['id']; ?>" class="text-red-600 hover:underline mx-1" onclick="return confirm('Excluir?')">Excluir</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php rodape(); ?>