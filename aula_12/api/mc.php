<?php
include 'conexao.php';

$sql = "UPDATE memoria SET valor = 0 WHERE id = 1";
$conexao->query($sql);

echo json_encode(['status' => 'memoria limpa']);
?>