<?php
include 'conexao.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE usuario = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$usuario]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user && $user['senha'] == $senha) {
    $_SESSION['id'] = $user['id'];
    $_SESSION['usuario'] = $user['usuario'];
    echo json_encode(["status" => "ok"]);
} else {
    http_response_code(401);
    echo json_encode(["erro" => "Login inválido"]);
}
?>