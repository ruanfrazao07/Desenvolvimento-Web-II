<?php include 'header.php'; ?>
<?php if (!isset($_SESSION['id'])) { die("Você precisa estar logado."); } ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Visualizar Submissão</title>
</head>
<body>
    <?php
    $conexao = new PDO("mysql:host=localhost;dbname=clube_escrita", "root", "");
    $sql_sub = "SELECT * FROM submissoes WHERE id = ? AND usuario_id = ?";
    $comando_sub = $conexao->prepare($sql_sub);
    $comando_sub->execute([$_GET['id'], $_SESSION['id']]);
    $submissao = $comando_sub->fetch();
    
    if (!$submissao) { die("Submissão não encontrada ou não pertence a você."); }
    ?>
    <h2><?php echo htmlspecialchars($submissao['titulo']); ?></h2>
    <p><strong>Observações:</strong> <?php echo nl2br(htmlspecialchars($submissao['observacoes'])); ?></p>
    <p><a href="<?php echo htmlspecialchars($submissao['arquivo']); ?>" target="_blank">Ver Arquivo</a></p>
    <hr>

    <h3>Avaliações Recebidas</h3>
    <?php
    $sql_ava = "SELECT a.*, u.nome_completo 
                FROM avaliacoes a 
                JOIN usuarios u ON a.usuario_id = u.id 
                WHERE a.submissao_id = ?";
    $comando_ava = $conexao->prepare($sql_ava);
    $comando_ava->execute([$submissao['id']]);
    
    if ($comando_ava->rowCount() == 0) {
        echo "<p>Nenhuma avaliação recebida ainda.</p>";
    }
    
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