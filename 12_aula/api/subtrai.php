<?php
header('Content-Type: application/json');
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$resultado = $n1 - $n2;
echo json_encode(['resultado' => $resultado]);
?>