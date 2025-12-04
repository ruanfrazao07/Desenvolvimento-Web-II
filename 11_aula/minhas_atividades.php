<?php include 'header.php'; ?>
<?php if (!isset($_SESSION['id'])) { die("Você precisa estar logado."); } ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Minhas Atividades</title>
</head>
<body>
    <h2>Minhas Atividades Criadas</h2>
    <?php
    $conexao = new PDO("mysql:host=localhost;dbname=clube_escrita", "root", "");
    $sql = "SELECT * FROM atividades WHERE usuario_id = ? ORDER BY data_criacao DESC";
    $comando_at = $conexao->prepare($sql);
    $comando_at->execute([$_SESSION['id']]);
    
    while ($atividade = $comando_at->fetch()) {
        echo "<div style='border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;'>";
        echo "<h3>" . htmlspecialchars($atividade['titulo']) . "</h3>";
        echo "<p>" . nl2br(htmlspecialchars($atividade['comentario'])) . "</p>";
        
        echo "<h4>Respostas Recebidas:</h4>";
        
        $sql_p = "SELECT p.*, u.nome_completo 
                  FROM participacoes p
                  JOIN usuarios u ON p.usuario_id = u.id 
                  WHERE p.atividade_id = ?
                  ORDER BY p.data_participacao ASC";
        $comando_p = $conexao->prepare($sql_p);
        $comando_p->execute([$atividade['id']]);

        if ($comando_p->rowCount() == 0) {
            echo "<p><em>Nenhuma resposta ainda.</em></p>";
        }
        
        while ($part = $comando_p->fetch()) {
            echo "<div style='background-color: #f9f9f9; padding: 5px; margin-bottom: 5px;'>";
            echo "<strong>" . htmlspecialchars($part['nome_completo']) . " disse:</strong><br>";
            echo nl2br(htmlspecialchars($part['comentario']));
            echo "</div>";
        }
        echo "</div>";
    }
    ?>
</body>
</html>