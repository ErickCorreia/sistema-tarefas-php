<?php
require 'conexao.php'; require 'layout.php';
if (!isset($_SESSION["usuario_id"])) { header("Location: login.php"); exit; }

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM tarefas WHERE id = ? AND usuario_id = ?");
$stmt->execute([$id, $_SESSION["usuario_id"]]);
$t = $stmt->fetch();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $pdo->prepare("UPDATE tarefas SET titulo=?, descricao=?, status=? WHERE id=? AND usuario_id=?");
    $stmt->execute([$_POST['titulo'], $_POST['descricao'], $_POST['status'], $id, $_SESSION["usuario_id"]]);
    header("Location: index.php"); exit;
}
topo("Editar Tarefa");
?>
<form method="POST" class="max-w-xl mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Editar Tarefa</h2>
    <input type="text" name="titulo" value="<?php echo $t['titulo']; ?>" class="w-full border p-2 mb-4 rounded" required>
    <textarea name="descricao" class="w-full border p-2 mb-4 rounded h-32"><?php echo $t['descricao']; ?></textarea>
    <select name="status" class="w-full border p-2 mb-4 rounded">
        <option value="pendente" <?php if($t['status']=='pendente') echo 'selected'; ?>>Pendente</option>
        <option value="concluida" <?php if($t['status']=='concluida') echo 'selected'; ?>>Concluída</option>
    </select>
    <button type="submit" class="w-full bg-orange-600 text-white p-2 rounded font-bold">Atualizar</button>
</form>
<?php rodape(); ?>