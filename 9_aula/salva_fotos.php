<!DOCTYPE html>
<html>
<head>
    <title>Foto Recebida</title>
</head>
<body>
    <?php
    $nome_temporario = $_FILES['minha_foto']['tmp_name'];
    $nome_arquivo = $_FILES['minha_foto']['name'];
    $destino = 'fotos/' . $nome_arquivo;

    if (move_uploaded_file($nome_temporario, $destino)) {
        echo "<h1>Arquivo enviado com sucesso!</h1>";
        echo "<p>Sua imagem:</p>";
        echo "<img src='$destino' width='300px'>";
    } else {
        echo "<h1>Ocorreu um erro ao enviar o arquivo.</h1>";
    }
    ?>
    <br><br>
    <a href="envia_foto.html">Enviar outra foto</a>
</body>
</html>