<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editar Reclamação</title>
</head>
<body>
    <?php
    session_start();
    if (!isset($_SESSION['tipo']) || $_SESSION['tipo'] != 'admin') { die("Acesso restrito."); }

    $conexao = new PDO("mysql:host=localhost;dbname=reclama", "root", "");
    $sql = "SELECT * FROM reclamacao WHERE id = ?";
    $comando = $conexao->prepare($sql);
    $comando->execute([$_GET['id']]);
    $reclamacao = $comando->fetch();
    ?>
    <h1>Alterar Estado da Reclamação #<?php echo $reclamacao['id']; ?></h1>
    <h3><?php echo htmlspecialchars($reclamacao['titulo']); ?></h3>
    <p><?php echo nl2br(htmlspecialchars($reclamacao['descricao'])); ?></p>
    <?php if ($reclamacao['foto']): ?>
        <p><img src="<?php echo htmlspecialchars($reclamacao['foto']); ?>" width="300"></p>
    <?php endif; ?>
    <hr>
    <form action="atualiza_estado.php" method="POST">
        <input type="hidden" name="id_reclamacao" value="<?php echo $reclamacao['id']; ?>">
        <label>Mudar estado para:</label>
        <select name="novo_estado">
            <option value="Atribuída" <?php echo ($reclamacao['estado'] == 'Atribuída') ? 'selected' : ''; ?>>Atribuída</option>
            <option value="Em andamento" <?php echo ($reclamacao['estado'] == 'Em andamento') ? 'selected' : ''; ?>>Em andamento</option>
            <option value="Resolvida" <?php echo ($reclamacao['estado'] == 'Resolvida') ? 'selected' : ''; ?>>Resolvida</option>
        </select>
        <button type="submit">Salvar Alteração</button>
    </form>
    <br>
    <a href="admin_lista.php">Voltar para a lista</a>
</body>
</html>