<?php
session_start();
if (!isset($_SESSION['id'])) { die("Acesso negado."); }

$conexao = new PDO("mysql:host=localhost;dbname=opina", "root", "");

$sql = "INSERT INTO produtos (nome, id_criador) VALUES (?, ?)";
$comando = $conexao->prepare($sql);
$comando->execute([
    $_POST['nome_produto'],
    $_SESSION['id']
]);

header("Location: mostra.php");
?>