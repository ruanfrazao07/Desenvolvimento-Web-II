<?php
include 'conexao.php';

$valor = $_GET['valor'];
$sql = "UPDATE memoria SET valor = valor + ? WHERE id = 1";
$comando = $conexao->prepare($sql);
$comando->execute([$valor]);

echo json_encode(['status' => 'ok']);
?>