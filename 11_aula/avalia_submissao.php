<?php include 'header.php'; ?>
<?php if (!isset($_SESSION['id'])) { die("Você precisa estar logado."); } ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Avaliar Submissão</title>
</head>
<body>
    <?php
    $conexao = new PDO("mysql:host=localhost;dbname=clube_escrita", "root", "");
    $sql_sub = "SELECT * FROM submissoes WHERE id = ?";
    $comando_sub = $conexao->prepare($sql_sub);
    $comando_sub->execute([$_GET['id']]);
    $submissao = $comando_sub->fetch();
    
    if (!$submissao || $submissao['usuario_id'] == $_SESSION['id']) {
        die("Você não pode avaliar esta submissão.");
    }
    ?>
    <h2>Avaliação de: <?php echo htmlspecialchars($submissao['titulo']); ?></h2>
    <p><strong>Observações do Autor:</strong> <?php echo nl2br(htmlspecialchars($submissao['observacoes'])); ?></p>
    <p><a href="<?php echo htmlspecialchars($submissao['arquivo']); ?>" target="_blank">Baixar/Ver Arquivo</a></p>
    <hr>
    
    <h3>Deixar Avaliação</h3>
    <form action="salva_avaliacao.php" method="POST">
        <input type="hidden" name="submissao_id" value="<?php echo $submissao['id']; ?>">
        <label>Veredito:</label>
        <select name="aprovado">
            <option value="Aprovado">Aprovado</option>
            <option value="Reprovado">Reprovado</option>
        </select><br>
        Comentário:<br>
        <textarea name="comentario" rows="4" cols="50"></textarea><br>
        <button type="submit">Enviar Avaliação</button>
    </form>
    <hr>

    <h3>Avaliações Recebidas</h3>
    <?php
    $sql_ava = "SELECT a.*, u.nome_completo 
                FROM avaliacoes a 
                JOIN usuarios u ON a.usuario_id = u.id 
                WHERE a.submissao_id = ?";
    $comando_ava = $conexao->prepare($sql_ava);
    $comando_ava->execute([$submissao['id']]);
    
    while ($avaliacao = $comando_ava->fetch()) {
        echo "<div style='background-color: #f9f9f9; padding: 5px; margin-bottom: 5px;'>";
        echo "<strong>Avaliador:</strong> " . htmlspecialchars($avaliacao['nome_completo']) . "<br>";
        echo "<strong>Veredito:</strong> " . htmlspecialchars($avaliacao['aprovado']) . "<br>";
        echo "<strong>Comentário:</strong> " . nl2br(htmlspecialchars($avaliacao['comentario']));
        echo "</div>";
    }
    ?>
</body>
</html>