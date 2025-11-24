<?php
include 'conexao.php';
include 'verifica_sessao.php';

$sql = "INSERT INTO produtos (nome, descricao, validade, quantidade, estoque_minimo, preco) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$res = $stmt->execute([
    $_POST['nome'],
    $_POST['descricao'],
    $_POST['validade'],
    $_POST['quantidade'],
    $_POST['minimo'],
    $_POST['preco']
]);

if ($res) echo json_encode(["status" => "Produto cadastrado"]);
else echo json_encode(["erro" => "Erro ao salvar"]);
?>