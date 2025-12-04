<?php
header('Content-Type: application/json');
$n1 = $_GET['n1'];
$resultado = sqrt($n1);
echo json_encode(['resultado' => $resultado]);
?>