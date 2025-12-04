<!DOCTYPE html>
<html>
<head>
    <title>Galeria de Imagens</title>
    <style>
        .imagem-container {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            display: inline-block;
            text-align: center;
        }
        img {
            max-width: 200px;
            max-height: 200px;
        }
    </style>
</head>
<body>
    <h1>Galeria Completa</h1>
    <a href="index.html">Enviar nova imagem</a>

    <hr>

    <?php
    $conexao = new PDO("mysql:host=localhost;dbname=galeria", "root", "");
    $sql = "SELECT * FROM imagens ORDER BY data_envio DESC";
    $comando = $conexao->query($sql);

    while ($imagem = $comando->fetch()) {
        $caminho = 'uploads/' . $imagem['nome_arquivo'];
        echo "<div class='imagem-container'>";
        echo "<img src='{$caminho}'>";
        echo "<p>Curtidas: {$imagem['curtidas']}</p>";
        echo "<a href='curtir.php?id={$imagem['id']}'>Curtir</a>";
        echo "</div>";
    }
    ?>
</body>
</html>