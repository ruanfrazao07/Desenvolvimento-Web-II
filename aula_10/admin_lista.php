<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin - Reclamações</title>
</head>
<body>
    <?php
    session_start();
    if (!isset($_SESSION['tipo']) || $_SESSION['tipo'] != 'admin') { die("Acesso restrito."); }
    ?>
    <h1>Painel do Administrador</h1>
    <p>Bem-vindo, <?php echo $_SESSION['nome']; ?>.</p>
    <a href="sair.php">Sair</a>
    <hr>
    <h2>Todas as Reclamações</h2>
    <table border="1" width="100%">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Reclamante</th>
            <th>Estado Atual</th>
            <th>Ação</th>
        </tr>
        <?php
        $conexao = new PDO("mysql:host=localhost;dbname=reclama", "root", "");
        $sql = "SELECT r.id, r.titulo, r.estado, u.nome FROM reclamacao r JOIN usuarios u ON r.id_reclamante = u.id ORDER BY r.id DESC";
        foreach ($conexao->query($sql) as $reclamacao) {
            echo "<tr>";
            echo "<td>" . $reclamacao['id'] . "</td>";
            echo "<td>" . htmlspecialchars($reclamacao['titulo']) . "</td>";
            echo "<td>" . htmlspecialchars($reclamacao['nome']) . "</td>";
            echo "<td>" . htmlspecialchars($reclamacao['estado']) . "</td>";
            echo "<td><a href='admin_edita.php?id=" . $reclamacao['id'] . "'>Alterar Estado</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>