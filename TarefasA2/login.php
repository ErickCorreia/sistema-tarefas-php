<?php
require 'conexao.php';
require 'layout.php';

$erro = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $u = $_POST['usuario'];
    $s = md5($_POST['senha']);
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE usuario = ? AND senha = ?");
    $stmt->execute([$u, $s]);
    $user = $stmt->fetch();
    if ($user) {
        $_SESSION["usuario_id"] = $user['id'];
        $_SESSION["usuario"] = $user['usuario'];
        header("Location: index.php"); exit;
    } else { $erro = "Usuário ou senha incorretos!"; }
}
topo("Login");
?>
<div class="flex justify-center mt-20">
    <div class="bg-white p-8 rounded shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center text-indigo-600">Entrar no Sistema</h2>
        <?php if($erro): ?>
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4 text-sm border border-red-200"><?php echo $erro; ?></div>
        <?php endif; ?>
        <form method="POST">
            <label class="block mb-2 text-sm font-medium">Usuário</label>
            <input type="text" name="usuario" class="w-full border p-2 rounded mb-4 focus:ring-2 focus:ring-indigo-400 outline-none" required>
            <label class="block mb-2 text-sm font-medium">Senha</label>
            <input type="password" name="senha" class="w-full border p-2 rounded mb-6 focus:ring-2 focus:ring-indigo-400 outline-none" required>
            <button type="submit" class="w-full bg-indigo-600 text-white p-2 rounded hover:bg-indigo-700 transition font-bold">Acessar</button>
        </form>
    </div>
</div>
<?php rodape(); ?>