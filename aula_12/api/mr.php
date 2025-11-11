<?php
include 'conexao.php';

$sql = "SELECT valor FROM memoria WHERE id = 1";
$comando = $conexao->query($sql);
$memoria = $comando->fetch();

echo json_encode(['valor' => $memoria['valor']]);
?>