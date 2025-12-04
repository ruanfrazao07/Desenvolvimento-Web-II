<?php
session_start();
if (!isset($_SESSION['id'])) { die("Acesso negado."); }

$conexao = new PDO("mysql:host=localhost;dbname=reclama", "root", "");
$sql = "UPDATE reclamacao SET aprovacao = ?, comentario = ? WHERE id = ? AND id_reclamante = ?";
$comando = $conexao->prepare($sql);
$comando->execute([
    $_POST['aprovacao'],
    $_POST['comentario'],
    $_POST['id_reclamacao'],
    $_SESSION['id']
]);

header("Location: ver_reclamacao.php?id=" . $_POST['id_reclamacao']);
?>