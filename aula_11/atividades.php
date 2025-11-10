<?php include 'header.php'; ?>
<?php if (!isset($_SESSION['id'])) { die("Você precisa estar logado."); } ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Atividades</title>
</head>
<body>
    <h2>Atividades e Discussões</h2>
    <a href="envia_atividade.php">Criar Nova Atividade</a>
    <hr>
    <?php
    $conexao = new PDO("mysql:host=localhost;dbname=clube_escrita", "root", "");
    $sql = "SELECT a.*, u.nome_completo 
            FROM atividades a 
            JOIN usuarios u ON a.usuario_id = u.id
            ORDER BY a.data_criacao DESC";
    
    foreach ($conexao->query($sql) as $atividade) {
        echo "<div style='border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;'>";
        echo "<h3>" . htmlspecialchars($atividade['titulo']) . "</h3>";
        echo "<p>Criado por: " . htmlspecialchars($atividade['nome_completo']) . "</p>";
        echo "<p>" . nl2br(htmlspecialchars($atividade['comentario'])) . "</p>";
        echo "<a href='participa_atividade.php?id=" . $atividade['id'] . "'>Ver e Participar</a>";
        echo "</div>";
    }
    ?>
</body>
</html>