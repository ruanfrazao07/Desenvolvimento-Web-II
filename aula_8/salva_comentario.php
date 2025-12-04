<?php
session_start();
if (!isset($_SESSION['id'])) { die("Acesso negado."); }

$conexao = new PDO("mysql:host=localhost;dbname=opina", "root", "");

$sql = "INSERT INTO comentarios (comentario, id_produto, id_comentador) VALUES (?, ?, ?)";
$comando = $conexao->prepare($sql);
$comando->execute([
    $_POST['comentario'],
    $_POST['id_produto'],
    $_SESSION['id']
]);

echo "Comentário salvo!";
echo "<br><a href='mostra.php'>Voltar para a lista de produtos</a>";
?>