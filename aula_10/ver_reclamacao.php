<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Detalhes da Reclamação</title>
</head>
<body>
    <?php
    session_start();
    if (!isset($_SESSION['id'])) { header("Location: login.html"); exit(); }

    $conexao = new PDO("mysql:host=localhost;dbname=reclama", "root", "");
    $sql = "SELECT * FROM reclamacao WHERE id = ? AND id_reclamante = ?";
    $comando = $conexao->prepare($sql);
    $comando->execute([$_GET['id'], $_SESSION['id']]);
    $reclamacao = $comando->fetch();

    if (!$reclamacao) { die("Reclamação não encontrada."); }
    ?>
    <h1>Detalhes: <?php echo htmlspecialchars($reclamacao['titulo']); ?></h1>
    <p><strong>Descrição:</strong> <?php echo nl2br(htmlspecialchars($reclamacao['descricao'])); ?></p>
    <p><strong>Estado:</strong> <?php echo htmlspecialchars($reclamacao['estado']); ?></p>
    <?php if ($reclamacao['foto']): ?>
        <p><strong>Foto:</strong><br><img src="<?php echo htmlspecialchars($reclamacao['foto']); ?>" width="300"></p>
    <?php endif; ?>

    <?php if ($reclamacao['estado'] == 'Resolvida' && empty($reclamacao['aprovacao'])): ?>
        <hr>
        <h3>Avaliar Resolução</h3>
        <form action="salva_avaliacao.php" method="POST">
            <input type="hidden" name="id_reclamacao" value="<?php echo $reclamacao['id']; ?>">
            <label>Você aprova a solução?</label>
            <select name="aprovacao">
                <option value="Aprovada">Sim, aprovo</option>
                <option value="Reprovada">Não, reprovo</option>
            </select><br>
            Comentário (opcional):<br>
            <textarea name="comentario"></textarea><br>
            <button type="submit">Enviar Avaliação</button>
        </form>
    <?php elseif (!empty($reclamacao['aprovacao'])): ?>
        <hr>
        <h3>Sua Avaliação</h3>
        <p><strong>Resultado:</strong> <?php echo htmlspecialchars($reclamacao['aprovacao']); ?></p>
        <p><strong>Seu Comentário:</strong> <?php echo nl2br(htmlspecialchars($reclamacao['comentario'])); ?></p>
    <?php endif; ?>

    <br><a href="minhas_reclamacoes.php">Voltar para minhas reclamações</a>
</body>
</html>