<?php
session_start();
if (!isset($_SESSION['id'])) {
    die("Você precisa fazer login para ver os comentários. <a href='entrada.html'>Entrar</a>");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Comentários dos Produtos</title>
</head>
<body>
    <h1>Comentários por Produto</h1>
    <a href="mostra.php">Voltar para a lista de produtos</a> | <a href="sair.php">Sair</a>
    <hr>

    <?php
    $conexao = new PDO("mysql:host=localhost;dbname=opina", "root", "");

    $sql_produtos = "SELECT * FROM produtos";
    $comando_produtos = $conexao->query($sql_produtos);

    while ($produto = $comando_produtos->fetch()) {
        echo "<h3>Produto: " . htmlspecialchars($produto['nome']) . "</h3>";

        $sql_comentarios = "
            SELECT c.comentario, u.nome 
            FROM comentarios c 
            JOIN usuarios u ON c.id_comentador = u.id 
            WHERE c.id_produto = ?
        ";
        
        $comando_comentarios = $conexao->prepare($sql_comentarios);
        $comando_comentarios->execute([ $produto['id'] ]);

        if ($comando_comentarios->rowCount() > 0) {
            echo "<ul>";
            while ($comentario = $comando_comentarios->fetch()) {
                echo "<li><strong>" . htmlspecialchars($comentario['nome']) . " disse:</strong> " . htmlspecialchars($comentario['comentario']) . "</li>";
            }
            echo "</ul>";
        } else {
            echo "<p><em>Nenhum comentário para este produto ainda.</em></p>";
        }
        echo "<hr>";
    }
    ?>

</body>
</html>