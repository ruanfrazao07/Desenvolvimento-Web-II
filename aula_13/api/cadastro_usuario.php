<?php
include 'conexao.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sqlCheck = "SELECT id FROM usuarios WHERE usuario = ?";
$stmt = $conn->prepare($sqlCheck);
$stmt->execute([$usuario]);

if ($stmt->rowCount() > 0) {
    echo json_encode(["erro" => "Usuário já existe!"]);
    exit;
}

$sql = "INSERT INTO usuarios (usuario, senha) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$res = $stmt->execute([$usuario, $senha]);

if ($res) {
    echo json_encode(["status" => "Usuário cadastrado com sucesso!"]);
} else {
    echo json_encode(["erro" => "Erro ao cadastrar."]);
}
?>