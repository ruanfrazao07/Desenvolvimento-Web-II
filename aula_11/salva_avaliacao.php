<?php
session_start();
if (!isset($_SESSION['id'])) { die("Acesso negado."); }

$conexao = new PDO("mysql:host=localhost;dbname=clube_escrita", "root", "");
$sql = "INSERT INTO avaliacoes (submissao_id, usuario_id, aprovado, comentario) VALUES (?, ?, ?, ?)";
$comando = $conexao->prepare($sql);
$comando->execute([
    $_POST['submissao_id'],
    $_SESSION['id'],
    $_POST['aprovado'],
    $_POST['comentario']
]);

header("Location: avalia_submissao.php?id=" . $_POST['submissao_id']);
?>