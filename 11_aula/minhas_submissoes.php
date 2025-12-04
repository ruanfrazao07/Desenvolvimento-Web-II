<?php include 'header.php'; ?>
<?php if (!isset($_SESSION['id'])) { die("Você precisa estar logado."); } ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Minhas Submissões</title>
</head>
<body>
    <h2>Minhas Submissões</h2>
    <?php
    $conexao = new PDO("mysql:host=localhost;dbname=clube_escrita", "root", "");
    $sql = "SELECT * FROM submissoes WHERE usuario_id = ? ORDER BY data_submissao DESC";
    $comando = $conexao->prepare($sql);
    $comando->execute([$_SESSION['id']]);
    
    while ($submissao = $comando->fetch()) {
        echo "<div style='border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;'>";
        echo "<h3>" . htmlspecialchars($submissao['titulo']) . "</h3>";
        echo "<a href='visualiza_submissao.php?id=" . $submissao['id'] . "'>Ver detalhes e avaliações</a>";
        echo "</div>";
    }
    ?>
</body>
</html>