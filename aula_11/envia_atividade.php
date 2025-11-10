<?php include 'header.php'; ?>
<?php if (!isset($_SESSION['id'])) { die("Você precisa estar logado."); } ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Criar Atividade</title>
</head>
<body>
    <h2>Criar Nova Atividade</h2>
    <form action="salva_atividade.php" method="POST">
        Título: <input type="text" name="titulo" required><br>
        Comentário/Descrição:<br>
        <textarea name="comentario" rows="5" cols="50"></textarea><br>
        <button type="submit">Criar Atividade</button>
    </form>
</body>
</html>