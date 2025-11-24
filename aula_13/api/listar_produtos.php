<?php
include 'conexao.php';
include 'verifica_sessao.php';

$sql = "SELECT * FROM produtos";
$stmt = $conn->query($sql);
$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($produtos);
?>