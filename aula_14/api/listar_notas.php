<?php
include 'conexao.php';

if (!isset($_SESSION['id'])) { exit; }

$semestre_filtro = isset($_GET['semestre']) ? $_GET['semestre'] : null;
$id_usuario = $_SESSION['id'];

if ($semestre_filtro) {
    $sql = "SELECT * FROM historico WHERE id_usuario = ? AND semestre = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id_usuario, $semestre_filtro]);
} else {
    $sql = "SELECT * FROM historico WHERE id_usuario = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id_usuario]);
}

echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
?>