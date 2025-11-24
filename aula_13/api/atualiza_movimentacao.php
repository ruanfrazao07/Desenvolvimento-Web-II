<?php
include 'conexao.php';
include 'verifica_sessao.php';

$id_produto = $_POST['id_produto'];
$nova_qtd = $_POST['quantidade'];
$novo_preco = $_POST['preco'];
$nova_validade = $_POST['validade'];

$stmt = $conn->prepare("SELECT * FROM produtos WHERE id = ?");
$stmt->execute([$id_produto]);
$antigo = $stmt->fetch(PDO::FETCH_ASSOC);

$sql = "UPDATE produtos SET quantidade = ?, preco = ?, validade = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$nova_qtd, $novo_preco, $nova_validade, $id_produto]);

$log = "Qtd: {$antigo['quantidade']}->{$nova_qtd}. Preço: {$antigo['preco']}->{$novo_preco}.";
$sqlLog = "INSERT INTO alteracoes (id_produto, id_usuario, descricao_alteracao) VALUES (?, ?, ?)";
$stmtLog = $conn->prepare($sqlLog);
$stmtLog->execute([$id_produto, $_SESSION['id'], $log]);

echo json_encode(["status" => "Movimentação registrada"]);
?>