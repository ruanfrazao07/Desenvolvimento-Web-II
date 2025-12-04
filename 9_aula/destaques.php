<!DOCTYPE html>
<html>
<head>
    <title>Imagens em Destaque</title>
    <style>
        .destaque {
            border: 2px solid blue;
            padding: 15px;
            margin: 15px;
            display: inline-block;
            text-align: center;
        }
        img {
            max-width: 300px;
            max-height: 300px;
        }
    </style>
</head>
<body>
    <h1>Imagens em Destaque</h1>
    <a href="index.html">Enviar nova imagem</a> | <a href="galeria.php">Ver Galeria Completa</a>
    <hr>

    <?php
    $conexao = new PDO("mysql:host=localhost;dbname=galeria", "root", "");

    $sql_mais_curtida = "SELECT * FROM imagens ORDER BY curtidas DESC LIMIT 1";
    $comando_curtida = $conexao->query($sql_mais_curtida);
    $mais_curtida = $comando_curtida->fetch();

    $sql_mais_nova = "SELECT * FROM imagens ORDER BY id DESC LIMIT 1";
    $comando_nova = $conexao->query($sql_mais_nova);
    $mais_nova = $comando_nova->fetch();

    if ($mais_curtida) {
        $caminho = 'uploads/' . $mais_curtida['nome_arquivo'];
        echo "<div class='destaque'>";
        echo "<h2>Imagem Mais Curtida</h2>";
        echo "<img src='{$caminho}'>";
        echo "<p>Curtidas: {$mais_curtida['curtidas']}</p>";
        echo "</div>";
    }

    if ($mais_nova) {
        $caminho = 'uploads/' . $mais_nova['nome_arquivo'];
        echo "<div class='destaque'>";
        echo "<h2>Imagem Mais Nova</h2>";
        echo "<img src='{$caminho}'>";
        echo "<p>Curtidas: {$mais_nova['curtidas']}</p>";
        echo "</div>";
    }
    ?>
</body>
</html>