<?php include 'header.php'; ?>
<?php if (!isset($_SESSION['id'])) { die("Você precisa estar logado."); } ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Submissões</title>
</head>
<body>
    <h2>Textos para Avaliação</h2>
    <a href="envia_submissao.php">Enviar Novo Texto</a>
    <hr>
    <?php
    $conexao = new PDO("mysql:host=localhost;dbname=clube_escrita", "root", "");
    $sql = "SELECT s.*, u.nome_completo 
            FROM submissoes s 
            JOIN usuarios u ON s.usuario_id = u.id
            ORDER BY s.data_submissao DESC";
    
    foreach ($conexao->query($sql) as $submissao) {
        echo "<div style='border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;'>";
        echo "<h3>" . htmlspecialchars($submissao['titulo']) . "</h3>";
        echo "<p>Enviado por: " . htmlspecialchars($submissao['nome_completo']) . "</p>";
        
        if ($submissao['usuario_id'] != $_SESSION['id']) {
            echo "<a href='avalia_submissao.php?id=" . $submissao['id'] . "'>Avaliar este texto</a>";
        } else {
            echo "<p>(Este texto é seu, veja em 'Minhas Submissões')</p>";
        }
        echo "</div>";
    }
    ?>
</body>
</html>