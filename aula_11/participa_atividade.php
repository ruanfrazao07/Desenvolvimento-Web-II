<?php include 'header.php'; ?>
<?php if (!isset($_SESSION['id'])) { die("Você precisa estar logado."); } ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Participar da Atividade</title>
</head>
<body>
    <?php
    $conexao = new PDO("mysql:host=localhost;dbname=clube_escrita", "root", "");
    $sql_at = "SELECT * FROM atividades WHERE id = ?";
    $comando_at = $conexao->prepare($sql_at);
    $comando_at->execute([$_GET['id']]);
    $atividade = $comando_at->fetch();
    
    if (!$atividade) { die("Atividade não encontrada."); }
    ?>
    <h2><?php echo htmlspecialchars($atividade['titulo']); ?></h2>
    <p><?php echo nl2br(htmlspecialchars($atividade['comentario'])); ?></p>
    <hr>
    
    <h3>Responder/Participar</h3>
    <form action="salva_participacao.php" method="POST">
        <input type="hidden" name="atividade_id" value="<?php echo $atividade['id']; ?>">
        Comentário:<br>
        <textarea name="comentario" rows="4" cols="50"></textarea><br>
        <button type="submit">Enviar Resposta</button>
    </form>
    <hr>

    <h3>Participações</h3>
    <?php
    $sql_p = "SELECT p.*, u.nome_completo 
              FROM participacoes p
              JOIN usuarios u ON p.usuario_id = u.id 
              WHERE p.atividade_id = ?
              ORDER BY p.data_participacao ASC";
    $comando_p = $conexao->prepare($sql_p);
    $comando_p->execute([$atividade['id']]);
    
    while ($part = $comando_p->fetch()) {
        echo "<div style='background-color: #f9f9f9; padding: 5px; margin-bottom: 5px;'>";
        echo "<strong>" . htmlspecialchars($part['nome_completo']) . " disse:</strong><br>";
        echo nl2br(htmlspecialchars($part['comentario']));
        echo "</div>";
    }
    ?>
</body>
</html>