<?php
session_start();
if (!isset($_SESSION['id'])) { die("Acesso negado."); }

$id_produto = $_GET['id_produto']; 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Comentar</title>
</head>
<body>
    <h3>Deixe seu comentário</h3>
    <form action="salva_comentario.php" method="POST">
        <input type="hidden" name="id_produto" value="<?php echo $id_produto; ?>">
        
        Comentário:<br>
        <textarea name="comentario" rows="4" cols="50"></textarea><br>
        <button type="submit">Salvar Comentário</button>
    </form>
</body>
</html>