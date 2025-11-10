<?php
session_start();
if (!isset($_SESSION['id'])) { die("Acesso negado."); }

$conexao = new PDO("mysql:host=localhost;dbname=clube_escrita", "root", "");
$sql = "INSERT INTO participacoes (atividade_id, usuario_id, comentario) VALUES (?, ?, ?)";
$comando = $conexao->prepare($sql);
$comando->execute([
    $_POST['atividade_id'],
    $_SESSION['id'],
    $_POST['comentario']
]);

header("Location: participa_atividade.php?id=" . $_POST['atividade_id']);
?>