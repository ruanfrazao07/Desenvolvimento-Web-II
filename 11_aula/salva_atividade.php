<?php
session_start();
if (!isset($_SESSION['id'])) { die("Acesso negado."); }

$conexao = new PDO("mysql:host=localhost;dbname=clube_escrita", "root", "");
$sql = "INSERT INTO atividades (usuario_id, titulo, comentario) VALUES (?, ?, ?)";
$comando = $conexao->prepare($sql);
$comando->execute([
    $_SESSION['id'],
    $_POST['titulo'],
    $_POST['comentario']
]);

header("Location: atividades.php");
?>