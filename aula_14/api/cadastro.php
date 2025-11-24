<?php
include 'conexao.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

try {
    $sql = "INSERT INTO usuarios (usuario, senha) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$usuario, $senhaHash]);
    echo json_encode(["status" => "ok"]);
} catch(Exception $e) {
    echo json_encode(["erro" => "Erro ao cadastrar (usuário já existe?)"]);
}
?>