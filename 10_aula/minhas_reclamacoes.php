<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Minhas Reclamações</title>
</head>
<body>
    <?php
    session_start();
    if (!isset($_SESSION['id'])) { header("Location: login.html"); exit(); }
    ?>
    <h1>Olá, <?php echo $_SESSION['nome']; ?>!</h1>
    <p>Acompanhe suas reclamações aqui.</p>
    <a href="cadastro_reclamacao.html">Fazer Nova Reclamação</a> | <a href="sair.php">Sair</a>
    <hr>
    <?php
    $conexao = new PDO("mysql:host=localhost;dbname=reclama", "root", "");
    $sql = "SELECT * FROM reclamacao WHERE id_reclamante = ? ORDER BY id DESC";
    $comando = $conexao->prepare($sql);
    $comando->execute([$_SESSION['id']]);

    while ($reclamacao = $comando->fetch()) {
        echo "<div>";
        echo "<h3>" . htmlspecialchars($reclamacao['titulo']) . "</h3>";
        echo "<p><strong>Estado:</strong> " . htmlspecialchars($reclamacao['estado']) . "</p>";
        if ($reclamacao['estado'] == 'Resolvida') {
            echo "<p><strong>Sua Avaliação:</strong> " . htmlspecialchars($reclamacao['aprovacao'] ?? 'Pendente') . "</p>";
        }
        echo "<a href='ver_reclamacao.php?id=" . $reclamacao['id'] . "'>Ver Detalhes</a>";
        echo "</div><hr>";
    }
    ?>
</body>
</html>