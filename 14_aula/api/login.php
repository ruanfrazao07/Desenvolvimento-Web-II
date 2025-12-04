<?php
include 'conexao.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE usuario = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$usuario]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($senha, $user['senha'])) {
    $_SESSION['id'] = $user['id'];
    $_SESSION['usuario'] = $user['usuario'];
    echo json_encode(["status" => "ok"]);
} else {
    echo json_encode(["erro" => "Usuário ou senha incorretos"]);
}
?>