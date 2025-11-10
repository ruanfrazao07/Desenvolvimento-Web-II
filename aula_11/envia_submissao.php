<?php include 'header.php'; ?>
<?php if (!isset($_SESSION['id'])) { die("Você precisa estar logado."); } ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Enviar Submissão</title>
</head>
<body>
    <h2>Enviar Novo Texto</h2>
    <form action="salva_submissao.php" method="POST" enctype="multipart/form-data">
        Título do Trabalho: <input type="text" name="titulo" required><br>
        Observações:<br>
        <textarea name="observacoes" rows="4" cols="50"></textarea><br>
        Arquivo (PDF ou TXT): <input type="file" name="arquivo" accept=".pdf,.txt" required><br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>